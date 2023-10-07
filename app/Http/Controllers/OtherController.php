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

    /**
     * 履歴画面へ遷移（自分の報連相を表示する）
     *
     * @return void
     */
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
     * メンバーリストへ画面遷移
     *
     * @return void
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
     * 報連相ページへ遷移
     *
     * @param int $id 自分のユーザID
     * @return void
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
     * Horenso テーブルにレコードをインサート後、メール送信（報告・質問）
     *
     * @param SendMailRequest $request メールの内容
     * @return void
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

            // リレンダーをやりすぎると、フラッシュメッセージが使えなくなるからクエリして条件分岐する。

            // マイページのレコード有り（マイページ：表示用へ遷移）
            if(User::find($request->user_id)->myPageInfos->count() > 0) {

                return to_route('MyPage.show', [
                    'MyPage' => Auth::id()
                ])->with([
                    'message' => 'メールを送信しました。'
                ]);

            // マイページのレコード無し（マイページ：レコード新規作成用へ遷移）
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