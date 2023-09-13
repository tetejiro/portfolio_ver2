<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\NoticeInfoController;
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

Route::get('/dashboard', [NoticeInfoController::class, 'index'])->middleware(['auth', 'verified', 'noticeInfo'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/myPage/{id?}', [MyPageController::class, 'index'])->middleware(['auth', 'verified'])->name('my_page');
Route::post('/myPage', [MyPageController::class, 'store'])->middleware(['auth', 'verified'])->name('post_my_page');
Route::get('/member_list', [MyPageController::class, 'member_list'])->middleware(['auth', 'verified'])->name('member_list');
Route::get('/horenso/{id}', [MyPageController::class, 'horenso'])->middleware(['auth', 'verified'])->name('horenso');
Route::post('/sendMail', [MyPageController::class, 'sendMail'])->middleware(['auth', 'verified'])->name('sendMail');

require __DIR__.'/auth.php';
