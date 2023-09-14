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

    public function index(Request $request)
    {
        $notices = $request->notices;
        $notices = array_reverse($notices->toArray());

        return Inertia::render('Dashboard', [
            'notices' => $notices
        ]);
    }

    public function store(Request $request)
    {
        Notice::create([
            'content' => $request->content
        ]);

        return to_route('dashboard.index')
        ->with([
            'message' => '登録しました。'
        ]);
    }
}
