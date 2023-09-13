<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\PassArgumentsToDashboard;
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
}
