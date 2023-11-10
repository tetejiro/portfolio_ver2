<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NoticeController extends Controller
{

    /**
     * 周知事項への画面遷移前に周知事項レコードを取得する
     */
    public function __construct()
    {
        $this->middleware('noticeInfo');
    }

    /**
     * 周知事項への画面遷移
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $notices = array_reverse($request->notices->toArray());

        return Inertia::render('Dashboard', [
            'notices' => $notices,
        ]);
    }


    /**
     * 周知事項保存 → 周知事項への画面遷移
     *
     * @param Request $request インサートする周知事項レコード
     * @return void
     */
    public function store(Request $request)
    {
        // バリデーション
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

        // 周知事項画面へリダイレクト
        return to_route('dashboard.index')
        ->with([
            'message' => $message,
            'status' => $status
        ]);
    }
}