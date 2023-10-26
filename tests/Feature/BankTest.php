<?php

use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model as MONGODB;

use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

function createBank(): MYSQLDBLEBUPAY|MONGODB|null
{
    return \Fintech\Banco\Facades\Banco::bank()->create([
        'country_id' => 1,
        'beneficiary_type_id' => '1',
        'bank_name' => Str::random(20),
        'bank_category' => 'Private Bank',
        'transaction_type' => 'Account Deposit',
        'bank_currency' => 'BDT',
        'bank_data' => [
            'nrbms_id' => 1,
            'trans_fast_id' => 1,
        ],
        'enabled' => '1',
    ]);
}

test('Bank list', function () {
    getJson('/api/banco/banks')->assertStatus(200);
});

test('Bank create for blank all field validation expect status code 422', function () {
    postJson('/api/banco/banks', [
        'country_id' => null,
        'beneficiary_type_id' => null,
        'bank_name' => null,
        'bank_category' => null,
        'transaction_type' => null,
        'bank_currency' => null,
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ])->assertStatus(422);
    //expect($bank['message'])->toBe('The name field is required. (and 1 more error)');
});

test('Bank create for blank all field validation expect The country id field is required. (and 4 more errors)', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => null,
        'beneficiary_type_id' => null,
        'bank_name' => null,
        'bank_category' => null,
        'transaction_type' => null,
        'bank_currency' => null,
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The country id field is required. (and 4 more errors)');
});

test('Bank create for blank all field expect country_id validation expect The beneficiary type id field is required. (and 3 more errors)', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => null,
        'bank_name' => null,
        'bank_category' => null,
        'transaction_type' => null,
        'bank_currency' => null,
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The beneficiary type id field is required. (and 3 more errors)');
});

test('Bank create for blank all field expect country_id, beneficiary_type_id validation expect The bank name field is required. (and 2 more errors)', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'bank_name' => null,
        'bank_category' => null,
        'transaction_type' => null,
        'bank_currency' => null,
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The bank name field is required. (and 2 more errors)');
});

test('Bank create for blank all field expect country_id, beneficiary_type_id, bank_name validation expect The bank category field is required. (and 1 more error)', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'bank_name' => Str::random(20),
        'bank_category' => null,
        'transaction_type' => null,
        'bank_currency' => null,
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The bank category field is required. (and 1 more error)');
});

test('Bank create for blank all field expect country_id, beneficiary_type_id, bank_name, bank_category validation expect The bank currency field is required.', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'bank_name' => Str::random(20),
        'bank_category' => Str::random(20),
        'transaction_type' => null,
        'bank_currency' => null,
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The bank currency field is required.');
});

test('Bank create for The bank currency field must not be greater than 3 characters.', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'bank_name' => Str::random(20),
        'bank_category' => Str::random(20),
        'transaction_type' => null,
        'bank_currency' => 'BDTT',
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The bank currency field must not be greater than 3 characters.');
});

test('Bank create for The bank currency field must be at least 3 characters.', function () {
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'bank_name' => Str::random(20),
        'bank_category' => Str::random(20),
        'transaction_type' => null,
        'bank_currency' => 'BD',
        'bank_data' => [
            'nrbms_id' => null,
            'trans_fast_id' => null,
        ],
        'enabled' => null,
    ]);
    expect($bank['message'])->toBe('The bank currency field must be at least 3 characters.');
});
