<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\AccountController;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\V1\SendMoneyController;
use App\Http\Controllers\RecurringTransferController;
use Illuminate\Support\Facades\Route;

Route::post('/v1/login', LoginController::class)->middleware(['guest:sanctum', 'throttle:api.login']);

Route::middleware(['auth:sanctum', 'throttle:api'])->prefix('v1')->group(function () {
    Route::get('/account', AccountController::class);
    Route::post('/wallet/send-money', SendMoneyController::class);

//    Route::get('/user', [UserController::class, 'index']);


//    Route::post('/wallet/recurring-payment', RecurringTransferController::class);
//    Route::delete('/wallet/recurring-payment', RecurringTransferController::class);
});

Route::resource('/wallet/recurring-transfer', RecurringTransferController::class);
