<?php

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model AS MYSQLDBLEBUPAY;
use MongoDB\Laravel\Eloquent\Model AS MONGODB;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createBank(): MYSQLDBLEBUPAY|MONGODB|null
{
    return \Fintech\Banco\Facades\Banco::bank()->create([
        "country_id" => 1,
        "beneficiary_type_id" => "1",
        "bank_name" => Str::random(20),
        "bank_category" => "Private Bank",
        "transaction_type" => "Account Deposit",
        "bank_currency" => "BDT",
        "bank_data" => [
            "nrbms_id" => 1,
            "trans_fast_id" => 1,
        ],
        "enabled" => "1",
    ]);
}


test('Bank list', function () {
    getJson('/api/banco/banks')->assertStatus(200);
});

test('Bank create for blank all field validation expect status code 422', function () {
    postJson('/api/banco/banks', [
        "country_id" => null,
        "beneficiary_type_id" => null,
        "bank_name" => null,
        "bank_category" => null,
        "transaction_type" => null,
        "bank_currency" => null,
        "bank_data" => [
            "nrbms_id" => null,
            "trans_fast_id" => null,
        ],
        "enabled" => null,
    ])->assertStatus(422);
    //expect($remittancePurpose['message'])->toBe('The name field is required. (and 1 more error)');
});

test('Bank create for blank all field validation expect The country id field is required. (and 4 more errors)', function () {
    $remittancePurpose = postJson('/api/banco/banks', [
        "country_id" => null,
        "beneficiary_type_id" => null,
        "bank_name" => null,
        "bank_category" => null,
        "transaction_type" => null,
        "bank_currency" => null,
        "bank_data" => [
            "nrbms_id" => null,
            "trans_fast_id" => null,
        ],
        "enabled" => null,
    ]);
    expect($remittancePurpose['message'])->toBe('The country id field is required. (and 4 more errors)');
});

test('Bank create for blank all field expect country_id validation expect The country id field is required. (and 3 more errors)', function () {
    $remittancePurpose = postJson('/api/banco/banks', [
        "country_id" => 1,
        "beneficiary_type_id" => null,
        "bank_name" => null,
        "bank_category" => null,
        "transaction_type" => null,
        "bank_currency" => null,
        "bank_data" => [
            "nrbms_id" => null,
            "trans_fast_id" => null,
        ],
        "enabled" => null,
    ]);
    expect($remittancePurpose['message'])->toBe('The name field is required.');
});

test('Bank create for blank all field expect country_id, beneficiary_type_id validation expect The country id field is required. (and 2 more errors)', function () {
    $remittancePurpose = postJson('/api/banco/banks', [
        "country_id" => 1,
        "beneficiary_type_id" => 1,
        "bank_name" => null,
        "bank_category" => null,
        "transaction_type" => null,
        "bank_currency" => null,
        "bank_data" => [
            "nrbms_id" => null,
            "trans_fast_id" => null,
        ],
        "enabled" => null,
    ]);
    expect($remittancePurpose['message'])->toBe('The name field is required.');
});

test('Bank create for name field validation expect The name field must be at least 5 characters.', function () {
    $remittancePurpose = postJson('/api/banco/banks', [
        "country_id" => 1,
        "beneficiary_type_id" => "1",
        "bank_name" => Str::random(20),
        "bank_category" => "Private Bank",
        "transaction_type" => "Account Deposit",
        "bank_currency" => "BDT",
        "bank_data" => [
            "nrbms_id" => 1,
            "trans_fast_id" => 1,
        ],
        "enabled" => "1",
    ]);
    expect($remittancePurpose['message'])->toBe('The name field must be at least 5 characters.');
});

test('Bank create for blank code field validation expect The code field is required.', function () {
    $remittancePurpose = postJson('/api/banco/banks', [
        "country_id" => 1,
        "beneficiary_type_id" => "1",
        "bank_name" => Str::random(20),
        "bank_category" => "Private Bank",
        "transaction_type" => "Account Deposit",
        "bank_currency" => "BDT",
        "bank_data" => [
            "nrbms_id" => 1,
            "trans_fast_id" => 1,
        ],
        "enabled" => "1",
    ]);
    expect($remittancePurpose['message'])->toBe('The code field is required.');
    //assertStatus(422);
});
