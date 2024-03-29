<?php

use Fintech\Banco\Http\Controllers\BankBranchController;
use Fintech\Banco\Http\Controllers\BankController;
use Fintech\Banco\Http\Controllers\BeneficiaryController;
use Fintech\Banco\Http\Controllers\BeneficiaryTypeController;
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
            Route::get('banks/bank-categories', [BankController::class, 'bankCategory'])->name('banks.bank-categories');
            Route::apiResource('banks', BankController::class);
            Route::post('banks/{bank}/restore', [BankController::class, 'restore'])->name('banks.restore');

            Route::apiResource('bank-branches', BankBranchController::class);
            Route::post('bank-branches/{bank_branch}/restore', [BankBranchController::class, 'restore'])->name('bank-branches.restore');

            Route::apiResource('beneficiaries', BeneficiaryController::class);
            Route::post('beneficiaries/{beneficiary}/restore', [BeneficiaryController::class, 'restore'])->name('beneficiaries.restore');

            Route::apiResource('beneficiary-types', BeneficiaryTypeController::class);
            Route::post('beneficiary-types/{beneficiary_type}/restore', [BeneficiaryTypeController::class, 'restore'])->name('beneficiary-types.restore');

            Route::apiResource('bank-accounts', \Fintech\Banco\Http\Controllers\BankAccountController::class);
            Route::post('bank-accounts/{bank_account}/restore', [\Fintech\Banco\Http\Controllers\BankAccountController::class, 'restore'])->name('bank-accounts.restore');

            //DO NOT REMOVE THIS LINE//
        });
}
