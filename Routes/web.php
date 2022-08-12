<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 모듈에서 설정되 접속 prefix값을 읽어 옵니다.
$prefix = admin_prefix();


use Modules\Admin\Http\Controllers\AdminDashboardController;

Route::middleware(['web','auth:sanctum', 'verified', 'admin'])
->name('admim')
->prefix($prefix)->group(function () {
    Route::get('permit', [AdminDashboardController::class, 'permit']);
});

Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])
->name('admim')
->prefix($prefix)->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index']);
});



