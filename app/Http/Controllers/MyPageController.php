<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MyPageInfoRequest;
use App\Mail\SendErrorMail;
use App\Models\MypageInfo;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\Mail;

class MyPageController extends Controller
{

    /**
     * @return マイページへ移動 GET タブメニューから起動
     * @param ユーザに紐づく MyPageInfo レコード
    */
    public static function index()
    {
        \Log::debug('index');
        try {
            $rec = array_reverse(Auth::user()->myPageInfos->toArray());

            // レコードがあれば Show ページ
            if(count($rec) != 0) {
                $path = 'MyPage.show';

            // レコードがなければ Create ページ
            } else {
                $path = 'MyPage.create';
            }

            return to_route($path, [
                'MyPage' => Auth::id()
            ]);

        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'index'));
            return Inertia::render('Error');
        }
    }


    /**
     * レコード作成ページ
     *
     * @return void
     */
    public function create()
    {
        \Log::debug('create');

        try{
            return Inertia::render('MyPage/CreateMyPage', [
                'user' => User::select('id', 'name')->where('id', Auth::id())->get(),
                'rec' => Auth::user()->myPageInfos
            ]);
        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'create'));
            return Inertia::render('Error');
        }
    }


    /**
     * MyPageInfo レコードの保存
     * @param マイページの View
    */
    public function store(MyPageInfoRequest $request)
    {
        \Log::debug('store');

        try {
            MypageInfo::create([
                'user_id' => $request->user_id,
                'task_content' => $request->task_content,
                'task_start' => $request->task_start,
                'task_end' => $request->task_end,
                'schedule_status' => $request->schedule_status,
                'available_start' => $request->available_start,
                'available_end' => $request->available_end,
                'caution' => $request->caution,
                'strong_point_1' => $request->strong_point_1,
                'strong_point_2' => $request->strong_point_2,
                'strong_point_3' => $request->strong_point_3,
            ]);

            return to_route('MyPage.show', [
                'MyPage' => Auth::id()
            ])
            ->with([
                'message' => '保存しました。'
            ]);

        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'store'));
            return Inertia::render('Error');
        }
    }


    // メンバーリストから MyPage
    public function show($id)
    {
        \Log::debug('show');

        try {
            $rec = array_reverse(MypageInfo::where('user_id', $id)->get()->toArray());

            // 自分のページ かつ レコードなし
            if($id == Auth::id() && count($rec) == 0) {

                return to_route('MyPage.create');

            } else {
                return Inertia::render('MyPage/ShowMyPage', [
                    'user' => User::select('id', 'name')->where('id', $id)->get(),
                    'rec' => $rec
                ]);
            }
        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'show'));
            return Inertia::render('Error');
        }

    }


    public function edit($id)
    {
        \Log::debug('edit');

        try {
            return Inertia::render('MyPage/EditMyPage', [
                'user' => User::select('id', 'name')->where('id', Auth::id())->get(),
                'rec' => MypageInfo::where('id', $id)->get()
            ]);
        } catch (\Exception $e) {
            Mail::send(new SendErrorMail($e, 'edit'));
            return Inertia::render('Error');
        }
    }


    public function update(MyPageInfoRequest $request)
    {
        \Log::debug('update');
        try {
            MypageInfo::where('id', $request->rec_id)
            ->update([
                'user_id' => $request->user_id,
                'task_content' => $request->task_content,
                'task_start' => $request->task_start,
                'task_end' => $request->task_end,
                'schedule_status' => $request->schedule_status,
                'available_start' => $request->available_start,
                'available_end' => $request->available_end,
                'caution' => $request->caution,
                'strong_point_1' => $request->strong_point_1,
                'strong_point_2' => $request->strong_point_2,
                'strong_point_3' => $request->strong_point_3,
            ]);

            return to_route('MyPage.show', [
                'MyPage' => Auth::id()
            ])->with([
                'message' => '更新しました。'
            ]);

        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'update'));
            return Inertia::render('Error');
        }
    }


    public function destroy($id)
    {
        \Log::debug('destroy');
        try {
            MypageInfo::where('id', $id)->delete();

            return to_route('MyPage.show', [
                'MyPage' => Auth::id()
            ])
            ->with([
                'message' => 'レコードを削除しました。'
            ]);

        } catch(\Exception $e) {
            Mail::send(new SendErrorMail($e, 'destroy'));
            return Inertia::render('Error');
        }
    }
}
