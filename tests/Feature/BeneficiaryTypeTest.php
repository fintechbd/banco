<?php

use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model as MONGODB;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

/**
 * @return MYSQLDBLEBUPAY|MONGODB|null
 */
function createBeneficiaryType(): MYSQLDBLEBUPAY|MONGODB|null
{
    return \Fintech\Banco\Facades\Banco::beneficiaryType()->create([
        'beneficiary_type_name' => Str::random(20),
        'beneficiary_type_data' => [
            [
                "user_recipient_type_condition_name" => "Cash Name",
                "user_recipient_type_condition_field_name" => "cash_id",
                "user_recipient_type_condition_field_type" => "select"
            ],
            [
                "user_recipient_type_condition_name" => "Cash Account Number",
                "user_recipient_type_condition_field_name" => "cash_account_number",
                "user_recipient_type_condition_field_type" => "text"
            ]
        ],
        'enabled' => '1',
    ]);
}

test('Beneficiary Type list', function () {
    getJson('/api/banco/beneficiary-types')->assertStatus(200);
});
