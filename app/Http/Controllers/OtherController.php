<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendMailRequest;
use App\Mail\SendErrorMail;
use App\Mail\SendReportMail;
use App\Models\HorensoInfo;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class OtherController extends Controller
{

    public function index()
    {
        try {
            return Inertia::render('History', [
                'recs' => array_reverse(User::find(Auth::id())->horensoInfos->toArray()),
                'user' => User::select('id', 'name')->get()
            ]);
        } catch (\Exception $e) {
            Mail::send(new SendErrorMail($e, 'index'));
            return Inertia::render('Error');
        }
    }

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
        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'member_list'));
            return Inertia::render('Error');
        }
    }

    /**
     * @return 報連相ページへ移動
     * @param 報連相相手のid
     */
    public function horenso($id)
    {
        try {
            return Inertia::render('Horenso/Horenso', [
                'id' => $id
            ]);
        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'horenso'));
            return Inertia::render('Error');
        }
    }

    /**
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
                'request_for' => $request->request_for,
                'detail' => $request->detail,
                'cause' => $request->cause,
                'other' => $request->other,
                'rsvp' => $request->rsvp,
            ]);

            Mail::send(new SendReportMail($request));

            // リレンダーをやりすぎると、フラッシュメッセージが使えなくなるから仕方なくクエリして条件分岐する。

            // マイページのレコード有り
            if(User::find($request->user_id)->myPageInfos->count() > 0) {

                return to_route('MyPage.show', [
                    'MyPage' => Auth::id()
                ])->with([
                    'message' => 'メールを送信しました。'
                ]);

            // マイページのレコード無し
            } else {
                return to_route('MyPage.create')->with([
                    'message' => 'メールを送信しました。'
                ]);
            }


        } catch (\Exception $e) {
            Mail::send(new SendErrorMail($e, 'sendMail'));
            return Inertia::render('Error');
        }

    }

}
