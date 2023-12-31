<?php

use Illuminate\Support\Facades\Config;
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
if (Config::get('fintech.banco.enabled')) {
    Route::prefix('banco')->name('banco.')
        ->middleware(config('fintech.auth.middleware'))
        ->group(function () {
            Route::apiResource('banks', \Fintech\Banco\Http\Controllers\BankController::class);
            Route::post('banks/{bank}/restore', [\Fintech\Banco\Http\Controllers\BankController::class, 'restore'])->name('banks.restore');

            Route::apiResource('bank-branches', \Fintech\Banco\Http\Controllers\BankBranchController::class);
            Route::post('bank-branches/{bank_branch}/restore', [\Fintech\Banco\Http\Controllers\BankBranchController::class, 'restore'])->name('bank-branches.restore');

            Route::apiResource('beneficiaries', \Fintech\Banco\Http\Controllers\BeneficiaryController::class);
            Route::post('beneficiaries/{beneficiary}/restore', [\Fintech\Banco\Http\Controllers\BeneficiaryController::class, 'restore'])->name('beneficiaries.restore');

            Route::apiResource('beneficiary-types', \Fintech\Banco\Http\Controllers\BeneficiaryTypeController::class);
            Route::post('beneficiary-types/{beneficiary_type}/restore', [\Fintech\Banco\Http\Controllers\BeneficiaryTypeController::class, 'restore'])->name('beneficiary-types.restore');

            //DO NOT REMOVE THIS LINE//
        });
}
