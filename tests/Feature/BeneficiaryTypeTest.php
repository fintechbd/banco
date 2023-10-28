<?php

use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model as MONGODB;

use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createBeneficiaryType(): MYSQLDBLEBUPAY|MONGODB|null
{
    return \Fintech\Banco\Facades\Banco::beneficiaryType()->create(
        [
            'beneficiary_type_name' => 'Cash Pickup',
            'beneficiary_type_data' => [
                [
                    'user_recipient_type_condition_name' => 'Cash Name',
                    'user_recipient_type_condition_field_name' => 'cash_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Cash Account Number',
                    'user_recipient_type_condition_field_name' => 'cash_account_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => 'Instant Bank Transfer',
            'beneficiary_type_data' => [
                [
                    'user_recipient_type_condition_name' => 'Instant Bank Name',
                    'user_recipient_type_condition_field_name' => 'instant_bank_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Instant Bank Branch Name',
                    'user_recipient_type_condition_field_name' => 'instant_bank_branch_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Instant Bank Account Number',
                    'user_recipient_type_condition_field_name' => 'instant_bank_account_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => 'Bank Transfer',
            'beneficiary_type_data' => [
                [
                    'user_recipient_type_condition_name' => 'Bank Name',
                    'user_recipient_type_condition_field_name' => 'bank_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Bank Branch Name',
                    'user_recipient_type_condition_field_name' => 'bank_branch_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Bank Account Number',
                    'user_recipient_type_condition_field_name' => 'bank_account_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
                [
                    'user_recipient_type_condition_name' => 'ID Number',
                    'user_recipient_type_condition_field_name' => 'id_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => 'Beneficiary',
            'beneficiary_type_data' => [
                [
                    'user_recipient_type_condition_name' => 'ID Type',
                    'user_recipient_type_condition_field_name' => 'id_type',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'ID Number',
                    'user_recipient_type_condition_field_name' => 'id_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
                [
                    'user_recipient_type_condition_name' => 'ID Expire Date',
                    'user_recipient_type_condition_field_name' => 'id_expire_date',
                    'user_recipient_type_condition_field_type' => 'date',
                ],
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => 'Wallet Transfer',
            'beneficiary_type_data' => [
                [
                    'user_recipient_type_condition_name' => 'Wallet Name',
                    'user_recipient_type_condition_field_name' => 'wallet_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Wallet Account Number',
                    'user_recipient_type_condition_field_name' => 'wallet_account_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
            ],
            'enabled' => '1',
        ],
        [
            'beneficiary_type_name' => 'B2B Transaction',
            'beneficiary_type_data' => [
                [
                    'user_recipient_type_condition_name' => 'Bank Name',
                    'user_recipient_type_condition_field_name' => 'bank_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Bank Branch Name',
                    'user_recipient_type_condition_field_name' => 'bank_branch_id',
                    'user_recipient_type_condition_field_type' => 'select',
                ],
                [
                    'user_recipient_type_condition_name' => 'Bank Account Number',
                    'user_recipient_type_condition_field_name' => 'bank_account_number',
                    'user_recipient_type_condition_field_type' => 'text',
                ],
            ],
            'enabled' => '1',
        ]
    );
}

test('Beneficiary Type list', function () {
    createBeneficiaryType();
    getJson('/api/banco/beneficiary-types')->assertStatus(200);
});

test('Beneficiary Type create for blank all field validation expect status code 422', function () {
    postJson('/api/banco/beneficiary-types', [
        'beneficiary_type_name' => null,
        'beneficiary_type_data' => [
            [
                'user_recipient_type_condition_name' => null,
                'user_recipient_type_condition_field_name' => null,
                'user_recipient_type_condition_field_type' => null,
            ],
            [
                'user_recipient_type_condition_name' => null,
                'user_recipient_type_condition_field_name' => null,
                'user_recipient_type_condition_field_type' => null,
            ],
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
                'user_recipient_type_condition_name' => null,
                'user_recipient_type_condition_field_name' => null,
                'user_recipient_type_condition_field_type' => null,
            ],
            [
                'user_recipient_type_condition_name' => null,
                'user_recipient_type_condition_field_name' => null,
                'user_recipient_type_condition_field_type' => null,
            ],
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
    expect($beneficiaryType['message'])->toBe(trans('core::messages.resource.created', ['model' => 'Beneficiary Type']));
});

test('Beneficiary Type created beneficiary type name unique validation check expected message The beneficiary type name has already been taken.', function () {
    $preStoreBeneficiaryType = createBeneficiaryType();
    $beneficiaryType = postJson('/api/banco/beneficiary-types', [
        'beneficiary_type_name' => $preStoreBeneficiaryType['beneficiary_type_name'],
    ]);
    expect($beneficiaryType['message'])->toBe('The beneficiary type name has already been taken.');
});

test('Beneficiary Type not found expected status code 404', function () {
    createBeneficiaryType();
    getJson('/api/banco/beneficiary-types/100')->assertStatus(404);
});

test('Beneficiary Type not found expected message No query results for model [Fintech\Banco\Models\BeneficiaryType] 100', function () {
    createBeneficiaryType();
    $beneficiaryType = getJson('/api/banco/beneficiary-types/100');
    expect($beneficiaryType['message'])->toBe('No query results for model [Fintech\Banco\Models\BeneficiaryType] 100');
});

test('Beneficiary Type detail expected status code 200', function () {
    $preStoreBeneficiaryType = createBeneficiaryType();
    getJson('/api/banco/beneficiary-types/'.$preStoreBeneficiaryType['id'])->assertStatus(200);
});

test('Beneficiary Type detail expected message Beneficiary Type name are same', function () {
    $preStoreBeneficiaryType = createBeneficiaryType();
    $beneficiaryType = getJson('/api/banco/beneficiary-types/'.$preStoreBeneficiaryType['id']);
    expect($beneficiaryType->json()['data']['beneficiary_type_name'])->toBe($preStoreBeneficiaryType['beneficiary_type_name']);
});

test('Beneficiary Type update expect status code 200', function () {
    $preStoreBeneficiaryType = createBeneficiaryType();
    $beneficiaryType = putJson('/api/banco/beneficiary-types/'.$preStoreBeneficiaryType['id'], [
        'beneficiary_type_name' => Str::random(20),
        'beneficiary_type_data' => [
            [
                "user_recipient_type_condition_name" => Str::random(20),
                "user_recipient_type_condition_field_name" => Str::random(20),
                "user_recipient_type_condition_field_type" => Str::random(20)
            ],
            [
                "user_recipient_type_condition_name" => Str::random(20),
                "user_recipient_type_condition_field_name" => Str::random(20),
                "user_recipient_type_condition_field_type" => Str::random(20)
            ]
        ],
        'enabled' => '1',
    ])->assertStatus(200);
});

test('Beneficiary Type update expect message Beneficiary Type updated successfully.', function () {
    $preStoreBeneficiaryType = createBeneficiaryType();
    $beneficiaryType = putJson('/api/banco/beneficiary-types/'.$preStoreBeneficiaryType['id'], [
        'beneficiary_type_name' => Str::random(20),
        'beneficiary_type_data' => [
            [
                "user_recipient_type_condition_name" => Str::random(20),
                "user_recipient_type_condition_field_name" => Str::random(20),
                "user_recipient_type_condition_field_type" => Str::random(20)
            ],
            [
                "user_recipient_type_condition_name" => Str::random(20),
                "user_recipient_type_condition_field_name" => Str::random(20),
                "user_recipient_type_condition_field_type" => Str::random(20)
            ]
        ],
        'enabled' => '1',
    ]);
    expect($beneficiaryType['message'])->toBe(trans('core::messages.resource.updated', ['model' => 'BeneficiaryType']));
});

test('Beneficiary Type update unique validation check expect message The beneficiary type name has already been taken.', function () {
    $preStoreBeneficiaryType = createBeneficiaryType();
    $preStoreBeneficiaryType2 = createBeneficiaryType();
    $beneficiaryType = putJson('/api/banco/beneficiary-types/'.$preStoreBeneficiaryType['id'], [
        'beneficiary_type_name' => $preStoreBeneficiaryType2['beneficiary_type_name'],
        'beneficiary_type_data' => [
            [
                "user_recipient_type_condition_name" => Str::random(20),
                "user_recipient_type_condition_field_name" => Str::random(20),
                "user_recipient_type_condition_field_type" => Str::random(20)
            ],
            [
                "user_recipient_type_condition_name" => Str::random(20),
                "user_recipient_type_condition_field_name" => Str::random(20),
                "user_recipient_type_condition_field_type" => Str::random(20)
            ]
        ],
        'enabled' => '1',
    ]);
    expect($beneficiaryType['message'])->toBe('The beneficiary type name has already been taken.');
});
