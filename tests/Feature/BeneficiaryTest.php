<?php

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use MongoDB\Laravel\Eloquent\Model as MONGODB;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createBeneficiary(): MYSQLDBLEBUPAY|MONGODB|null
{
    return Banco::beneficiary()->create([
        'user_id' => 1,
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'relation_id' => 1,
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => '01614747054',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
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
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
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
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
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
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
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
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
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
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The city id field is required. (and 4 more errors)');
});

test('Beneficiary create for empty all field validation expect The relation id field is required. (and 3 more errors)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => 1,
        'city_id' => 1,
        'beneficiary_type_id' => null,
        'relation_id' => null,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The relation id field is required. (and 3 more errors)');
});

test('Beneficiary create for empty all field validation expect The beneficiary type id field is required. (and 2 more errors)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => 1,
        'city_id' => 1,
        'beneficiary_type_id' => null,
        'relation_id' => 1,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The beneficiary type id field is required. (and 2 more errors)');
});

test('Beneficiary create for empty all field validation expect The beneficiary name field is required. (and 1 more error)', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => 1,
        'city_id' => 1,
        'beneficiary_type_id' => 1,
        'relation_id' => 1,
        'beneficiary_name' => null,
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The beneficiary name field is required. (and 1 more error)');
});

test('Beneficiary create for empty all field validation expect The beneficiary mobile field is required.', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => 1,
        'city_id' => 1,
        'beneficiary_type_id' => 1,
        'relation_id' => 1,
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => null,
        'beneficiary_address' => null,
        'beneficiary_data' => [
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
        ],
        'enabled' => null,
    ]);
    expect($beneficiary['message'])->toBe('The beneficiary mobile field is required.');
});

test('Beneficiary create and some field are empty expected status code 201', function () {
    postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'country_id' => 1,
        'state_id' => 1,
        'city_id' => 1,
        'beneficiary_type_id' => 1,
        'relation_id' => 1,
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => '01614747054',
        'beneficiary_address' => null,
        'beneficiary_data' => [
            'bank_id' => null,
            'bank_branch_id' => null,
            'bank_account_number' => null,
            'beneficiary_type' => null,
            'beneficiary_type_condition_name' => null,
        ],
        'enabled' => null,
    ])->assertStatus(201);
});

test('Beneficiary create expected status code 201', function () {
    postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => 1,
        'relation_id' => 1,
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => '01614747054',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ])->assertStatus(201);
});

test('Beneficiary created expected message The beneficiary stored successfully.', function () {
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 1,
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => 2,
        'relation_id' => 1,
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => '01614747054',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.created'));
});

test('Beneficiary created beneficiary mobile, user id and beneficiary type was unique validation check expected message The beneficiary mobile has already been taken.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => $preStoreBeneficiary['beneficiary_mobile'],
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe('The beneficiary mobile has already been taken.');
});

test('Beneficiary created beneficiary mobile, user id and change beneficiary type was unique validation check expected message The beneficiary stored successfully.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => $preStoreBeneficiary['user_id'],
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => 2,
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => $preStoreBeneficiary['beneficiary_mobile'],
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.created'));
});

test('Beneficiary created beneficiary mobile, beneficiary type id and change user id was unique validation check expected message The beneficiary stored successfully.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => 2,
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => $preStoreBeneficiary['beneficiary_mobile'],
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.created'));
});

test('Beneficiary created user id, beneficiary type id and change beneficiary mobile was unique validation check expected message The beneficiary stored successfully.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = postJson('/api/banco/beneficiaries', [
        'user_id' => $preStoreBeneficiary['user_id'],
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => '01760233030',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.created'));
});

test('Beneficiary not found expected status code 404', function () {
    createBeneficiary();
    getJson('/api/banco/beneficiaries/100')->assertStatus(404);
});

test('Beneficiary not found expected message No query results for model [Fintech\Banco\Models\Beneficiary] 100', function () {
    createBeneficiary();
    $beneficiary = getJson('/api/banco/beneficiaries/100');
    expect($beneficiary['message'])->toBe('No query results for model [Fintech\Banco\Models\Beneficiary] 100');
});

test('Beneficiary detail expected status code 200', function () {
    $preStoreBeneficiary = createBeneficiary();
    getJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'])->assertStatus(200);
});

test('Beneficiary detail expected message Beneficiary name are same', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = getJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id']);
    expect($beneficiary->json()['data']['beneficiary_name'])->toBe($preStoreBeneficiary['beneficiary_name']);
});

test('Beneficiary update expect status code 200', function () {
    $preStoreBeneficiary = createBeneficiary();
    putJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'], [
        'user_id' => $preStoreBeneficiary['user_id'],
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE SHAMIM',
        'beneficiary_mobile' => '01760233030',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ])->assertStatus(200);
});

test('Beneficiary update expect message Beneficiary updated successfully.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = putJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'], [
        'user_id' => $preStoreBeneficiary['user_id'],
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE SHAMIM',
        'beneficiary_mobile' => '01760233030',
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.updated', ['model' => 'Beneficiary']));
});

test('Beneficiary update unique validation check expect message The beneficiary mobile has already been taken.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $preStoreBeneficiary2 = createBeneficiary();
    $beneficiary = putJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'], [
        'user_id' => $preStoreBeneficiary['beneficiary_type_id'],
        'city_id' => 1,
        'state_id' => 1,
        'country_id' => 1,
        'beneficiary_type_id' => $preStoreBeneficiary2['beneficiary_type_id'],
        'relation_id' => $preStoreBeneficiary['relation_id'],
        'beneficiary_name' => 'MD ARIFUL HAQUE',
        'beneficiary_mobile' => $preStoreBeneficiary['beneficiary_mobile'],
        'beneficiary_address' => '2 No, Muslim Nagar, Matuail, Tushardhara, Dhaka - 1362',
        'beneficiary_data' => [
            'bank_id' => 1,
            'bank_branch_id' => 1,
            'bank_account_number' => '123456789',
            'beneficiary_type' => 'individual',
            'beneficiary_type_condition_name' => 'Bank Name',
        ],
        'enabled' => '1',
    ]);
    expect($beneficiary['message'])->toBe('The beneficiary mobile has already been taken.');
});

test('Beneficiary deleted expected status code 200', function () {
    $preStoreBeneficiary = createBeneficiary();
    deleteJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'])->assertStatus(200);
});

test('Beneficiary deleted expected status code 404', function () {
    createBeneficiary();
    deleteJson('/api/banco/beneficiaries/2')->assertStatus(404);
});

test('Beneficiary deleted expected message The Beneficiary deleted successfully.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $beneficiary = deleteJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id']);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.deleted', ['model' => 'Beneficiary']));
});

test('Beneficiary deleted expected message No query results for model [Fintech\Banco\Models\Beneficiary] 2', function () {
    createBeneficiary();
    $beneficiary = deleteJson('/api/banco/beneficiaries/2');
    expect($beneficiary['message'])->toBe('No query results for model [Fintech\Banco\Models\Beneficiary] 2');
});

test('Beneficiary restored expected status code 200', function () {
    $preStoreBeneficiary = createBeneficiary();
    $preStoreBeneficiary->delete();
    postJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'].'/restore')->assertStatus(200);
});

test('Beneficiary restored expected message The Beneficiary restored successfully.', function () {
    $preStoreBeneficiary = createBeneficiary();
    $preStoreBeneficiary->delete();
    $beneficiary = postJson('/api/banco/beneficiaries/'.$preStoreBeneficiary['id'].'/restore')->assertStatus(200);
    expect($beneficiary['message'])->toBe(trans('core::messages.resource.restored', ['model' => 'Beneficiary']));
});
