<?php

declare(strict_types=1);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecurringTransferController;
use App\Http\Controllers\SendMoneyController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::post('/send-money', [SendMoneyController::class, '__invoke'])->name('send-money');
//    Route::get('/wallet/recurring-transfers', RecurringTransferController::class)->name('recurring-transfers');
//    Route::post('/wallet/recurring-transfer', RecurringTransferController::class)->name('create-recurring-transfer');
//    Route::delete('/wallet/recurring-transfer', RecurringTransferController::class)->name('delete-recurring-transfer');
});

require __DIR__.'/auth.php';
