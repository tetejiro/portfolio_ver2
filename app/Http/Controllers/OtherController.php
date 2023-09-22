<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendMailRequest;
use App\Mail\SendReportMail;
use App\Models\HorensoInfo;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OtherController extends Controller
{
    /**
     * @return member-list ページへ移動
     * @param 全メンバー情報
    */
    public function member_list()
    {
        try {
            $members = User::select(['name', 'id', 'year'])->get()->groupBy('year');
            return Inertia::render('MemberList', [
                'members' => $members
            ]);
        } catch(\Exception) {
            // TODO: catch処理
        }
    }

    /**
     * @return 報連相ページへ移動
     * @param 報連相相手のid
     */
    public function horenso($id)
    {
        try {
            return Inertia::render('Horenso', [
                'id' => $id
            ]);
        } catch(\Exception) {
            // TODO: catch処理
        }
    }

    /**
     * // TODO:別のコントローラへうつす
     * @return myPage へ戻る（フラッシュメッセージつき）
     */
    public function sendMail(SendMailRequest $request)
    {
        try {
            HorensoInfo::create([
                'user_id' => $request->user_id,
                'target_user_id' => $request->target_user_id,
                'is_question' => $request->is_question,
                'title' => $request->title,
                'request' => $request->requests,
                'detail' => $request->detail,
                'cause' => $request->cause,
                'other' => $request->other,
                'rsvp' => $request->rsvp,
            ]);

            Mail::send(new SendReportMail($request));

            return to_route('MyPage.index', [
                'user' => Auth::user()->select('id', 'name')->get(),
                'rec' => Auth::user()->myPageInfos
            ])->with([
                'message' => 'メールを送信しました。'
            ]);

        } catch (\Exception) {
            // TODO: エラー処理
        }

    }

}
