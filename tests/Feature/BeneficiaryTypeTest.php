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
    return \Fintech\Banco\Facades\Banco::beneficiaryType()->create(
        [
            'beneficiary_type_name' => "Cash Pickup",
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
        ],
        [
            'beneficiary_type_name' => "Instant Bank Transfer",
            'beneficiary_type_data' => [
                [
                    "user_recipient_type_condition_name" => "Instant Bank Name",
                    "user_recipient_type_condition_field_name" => "instant_bank_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Instant Bank Branch Name",
                    "user_recipient_type_condition_field_name" => "instant_bank_branch_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Instant Bank Account Number",
                    "user_recipient_type_condition_field_name" => "instant_bank_account_number",
                    "user_recipient_type_condition_field_type" => "text"
                ]
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => "Bank Transfer",
            'beneficiary_type_data' => [
                [
                    "user_recipient_type_condition_name" => "Bank Name",
                    "user_recipient_type_condition_field_name" => "bank_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Bank Branch Name",
                    "user_recipient_type_condition_field_name" => "bank_branch_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Bank Account Number",
                    "user_recipient_type_condition_field_name" => "bank_account_number",
                    "user_recipient_type_condition_field_type" => "text"
                ],
                [
                    "user_recipient_type_condition_name" => "ID Number",
                    "user_recipient_type_condition_field_name" => "id_number",
                    "user_recipient_type_condition_field_type" => "text"
                ]
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => "Beneficiary",
            'beneficiary_type_data' => [
                [
                    "user_recipient_type_condition_name" => "ID Type",
                    "user_recipient_type_condition_field_name" => "id_type",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "ID Number",
                    "user_recipient_type_condition_field_name" => "id_number",
                    "user_recipient_type_condition_field_type" => "text"
                ],
                [
                    "user_recipient_type_condition_name" => "ID Expire Date",
                    "user_recipient_type_condition_field_name" => "id_expire_date",
                    "user_recipient_type_condition_field_type" => "date"
                ]
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => "Wallet Transfer",
            'beneficiary_type_data' => [
                [
                    "user_recipient_type_condition_name" => "Wallet Name",
                    "user_recipient_type_condition_field_name" => "wallet_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Wallet Account Number",
                    "user_recipient_type_condition_field_name" => "wallet_account_number",
                    "user_recipient_type_condition_field_type" => "text"
                ]
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => "B2B Transaction",
            'beneficiary_type_data' => [
                [
                    "user_recipient_type_condition_name" => "Bank Name",
                    "user_recipient_type_condition_field_name" => "bank_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Bank Branch Name",
                    "user_recipient_type_condition_field_name" => "bank_branch_id",
                    "user_recipient_type_condition_field_type" => "select"
                ],
                [
                    "user_recipient_type_condition_name" => "Bank Account Number",
                    "user_recipient_type_condition_field_name" => "bank_account_number",
                    "user_recipient_type_condition_field_type" => "text"
                ]
            ],
            'enabled' => '1',
        ]
    );
}

test('Beneficiary Type list', function () {
    createBeneficiaryType();
    getJson('/api/banco/beneficiary-types')->assertStatus(200);
});

test('BeneficiaryType create for blank all field validation expect status code 422', function () {
    postJson('/api/banco/beneficiary-types', [
        'beneficiary_type_name' => null,
        'beneficiary_type_data' => [
            [
                "user_recipient_type_condition_name" => null,
                "user_recipient_type_condition_field_name" => null,
                "user_recipient_type_condition_field_type" => null
            ],
            [
                "user_recipient_type_condition_name" => null,
                "user_recipient_type_condition_field_name" => null,
                "user_recipient_type_condition_field_type" => null
            ]
        ],
        'enabled' => null,
    ])->assertStatus(422);
    //expect($beneficiaryType['message'])->toBe('The name field is required. (and 1 more error)');
});

test('Beneficiary Type create for blank all field validation expect The beneficiary type name field is required.', function () {
    $beneficiaryType = postJson('/api/banco/beneficiary-types', [
        'beneficiary_type_name' => null,
        'beneficiary_type_data' => [
            [
                "user_recipient_type_condition_name" => null,
                "user_recipient_type_condition_field_name" => null,
                "user_recipient_type_condition_field_type" => null
            ],
            [
                "user_recipient_type_condition_name" => null,
                "user_recipient_type_condition_field_name" => null,
                "user_recipient_type_condition_field_type" => null
            ]
        ],
        'enabled' => null,
    ]);
    expect($beneficiaryType['message'])->toBe('The beneficiary type name field is required.');
});

test('Beneficiary Type create for blank beneficiary_type_data field validation expect The beneficiary type create successfully.', function () {
    $beneficiaryType = postJson('/api/banco/beneficiary-types', [
        'beneficiary_type_name' => Str::random(20),
        'beneficiary_type_data' => [
        ],
        'enabled' => null,
    ]);
    expect($beneficiaryType['message'])->toBe(trans('core::messages.resource.created', ['model' => 'BeneficiaryType']));
});
