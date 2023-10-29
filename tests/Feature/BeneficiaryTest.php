<?php

use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model as MONGODB;

use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\optionsJson;

/**
 * @return MYSQLDBLEBUPAY|MONGODB|null
 */
function createBeneficiary(): MYSQLDBLEBUPAY|MONGODB|null
{
    return \Fintech\Banco\Facades\Banco::beneficiary()->create([
        'user_id' => 1,
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'relation_id' => 1,
        'beneficiary_name' => "MD ARIFUL HAQUE",
        'beneficiary_mobile' => '01614747054',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            "bank_id" => 1,
            "bank_branch_id" => 1,
            "bank_account_number" => "123456789",
            "beneficiary_type" => "individual",
            "beneficiary_type_condition_name" => "Bank Name"
        ],
        'enabled' => '1',
    ]);
}

test('Beneficiary list expected status code 200', function () {
    createBeneficiary();
    getJson('/api/banco/beneficiaries')->assertStatus(200);
});

test('Beneficiary create for empty all field validation expect status code 422', function () {
    postJson('/api/banco/beneficiaries', [
        'user_id' => null,
        'city_id' => null,
        'state_id' => null,
        'country_id' => null,
        'beneficiary_type_id' => null,
        'relation_id' => null,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            "bank_id" => null,
            "bank_branch_id" => null,
            "bank_account_number" => null,
            "beneficiary_type" => null,
            "beneficiary_type_condition_name" => null
        ],
        'enabled' => null,
    ])->assertStatus(422);
});

test('Beneficiary create for empty all field validation expect The user id field is required. (and 7 more errors)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => null,
        'city_id' => null,
        'state_id' => null,
        'country_id' => null,
        'beneficiary_type_id' => null,
        'relation_id' => null,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            "bank_id" => null,
            "bank_branch_id" => null,
            "bank_account_number" => null,
            "beneficiary_type" => null,
            "beneficiary_type_condition_name" => null
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The user id field is required. (and 7 more errors)');
});

test('Beneficiary create for empty all field validation expect The country id field is required. (and 6 more errors)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => null,
        'state_id' => null,
        'city_id' => null,
        'beneficiary_type_id' => null,
        'relation_id' => null,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            "bank_id" => null,
            "bank_branch_id" => null,
            "bank_account_number" => null,
            "beneficiary_type" => null,
            "beneficiary_type_condition_name" => null
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The country id field is required. (and 6 more errors)');
});

test('Beneficiary create for empty all field validation expect The state id field is required. (and 5 more errors)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => null,
        'city_id' => null,
        'beneficiary_type_id' => null,
        'relation_id' => null,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            "bank_id" => null,
            "bank_branch_id" => null,
            "bank_account_number" => null,
            "beneficiary_type" => null,
            "beneficiary_type_condition_name" => null
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The state id field is required. (and 5 more errors)');
});

test('Beneficiary create for empty all field validation expect The city id field is required. (and 4 more errors)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => 1,
        'city_id' => null,
        'beneficiary_type_id' => null,
        'relation_id' => null,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            "bank_id" => null,
            "bank_branch_id" => null,
            "bank_account_number" => null,
            "beneficiary_type" => null,
            "beneficiary_type_condition_name" => null
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The city id field is required. (and 4 more errors)');
});
