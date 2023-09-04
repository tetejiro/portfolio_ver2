<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyPageController extends Controller
{
    public function index()
    {
        return Inertia::render('MyPage');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
