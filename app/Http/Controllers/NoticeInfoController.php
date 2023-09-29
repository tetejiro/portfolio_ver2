<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NoticeInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('noticeInfo');
    }

    /**
     * 周知事項 GET ログイン後起動
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        \Log::debug('index');

        $notices = $request->notices;
        $notices = array_reverse($notices->toArray());

        return Inertia::render('Dashboard', [
            'notices' => $notices,
        ]);
    }


    /**
     * 周知事項 POST 保存ボタンから起動
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255'
        ]);

        try {
            Notice::create([
                'content' => $request->content
            ]);

            $message = '登録しました。';
            $status = 'OK';
        } catch(\Exception $e) {
            $message = '登録失敗しました。再入力してください。';
            $status = 'NG';
        }

        return to_route('dashboard.index')
        ->with([
            'message' => $message,
            'status' => $status
        ]);
    }
}