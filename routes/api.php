<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "API" middleware group. Enjoy building your API!
|
*/
Route::prefix('banco')->group(function () {
    Route::apiResource('banks', \Fintech\Banco\Http\Controllers\BankController::class);
    Route::post('banks/bank/restore', [\Fintech\Banco\Http\Controllers\BankController::class, 'restore'])->name('banks.restore');

    //DO NOT REMOVE THIS LINE//
});
