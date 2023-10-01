<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\NoticeInfoController;
use App\Http\Controllers\OtherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// ログイン後ページ
Route::resource('/dashboard', NoticeInfoController::class)
->middleware(['auth', 'verified', 'noticeInfo'])
->only(['index', 'store']);

// MyPage
Route::resource('/MyPage', MyPageController::class)->middleware(['auth', 'verified']);


// その他のページ

// 報連相履歴
Route::get('/History', [OtherController::class, 'index'])->middleware(['auth', 'verified'])->name('history');
// メンバーリスト
Route::get('/Member-list', [OtherController::class, 'member_list'])->middleware(['auth', 'verified'])->name('member_list');
// 報連相：送信フォーム
Route::get('/horenso/{id}', [OtherController::class, 'horenso'])->middleware(['auth', 'verified'])->name('horenso');
// 報連相：送信・保存
Route::post('/sendMail', [OtherController::class, 'sendMail'])->middleware(['auth', 'verified'])->name('sendMail');