<?php

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model as MONGODB;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createBankBranch(): MYSQLDBLEBUPAY|MONGODB|null
{
    return Banco::bankBranch()->create([
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => Str::random(8), ////10010048
            'trans_fast_bank_branch_code' => Str::random(4),
            'emq_bank_branch_code' => Str::random(6),
            'ifcs_code' => Str::random(12),
        ],
        'enabled' => '1',
    ]);
}

test('Bank Branch list', function () {
    getJson('/api/banco/bank-branches')->assertStatus(200);
});

test('Bank Branch create for blank all field validation expect status code 422', function () {
    postJson('/api/banco/bank-branches', [
        'bank_id' => null,
        'name' => null,
        'bank_branch_data' => [
            'routing_number' => null,
            'trans_fast_bank_branch_code' => null,
            'emq_bank_branch_code' => null,
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ])->assertStatus(422);
    //expect($bankBranch['message'])->toBe('The name field is required. (and 1 more error)');
});

test('Bank Branch create for blank all field validation expect The bank id field must be an integer. (and 11 more errors)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => null,
        'name' => null,
        'bank_branch_data' => [
            'routing_number' => null,
            'trans_fast_bank_branch_code' => null,
            'emq_bank_branch_code' => null,
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank id field must be an integer. (and 11 more errors)');
});

test('Bank Branch create for blank all field expect bank_id validation expect The bank branch name field must be a string. (and 9 more errors)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => null,
        'bank_branch_data' => [
            'routing_number' => null,
            'trans_fast_bank_branch_code' => null,
            'emq_bank_branch_code' => null,
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank branch name field must be a string. (and 9 more errors)');
});

test('Bank Branch create for blank all field expect bank_id, name validation expect The Bank Branch data field must be an array. (and 1 more error)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => null,
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank branch data field must be an array. (and 1 more error)');
});

test('Bank Branch create for blank all field expect bank_id, name validation expect The Bank Branch Data Routing Number field is required. (and 7 more errors)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => null,
            'trans_fast_bank_branch_code' => null,
            'emq_bank_branch_code' => null,
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank_branch_data.routing_number field must be a string. (and 7 more errors)');
});

test('Bank Branch create for blank all field expect bank_id, name validation expect The Bank Branch Data Trans Fast Bank Branch Code field is required. (and 5 more errors)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => Str::random(8), ////10010048
            'trans_fast_bank_branch_code' => null,
            'emq_bank_branch_code' => null,
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank_branch_data.trans_fast_bank_branch_code field must be a string. (and 5 more errors)');
});

test('Bank Branch create for blank all field expect bank_id, name validation expect The Bank Branch Data EMQ Bank Branch Code field is required. (and 3 more errors)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => Str::random(8), ////10010048
            'trans_fast_bank_branch_code' => Str::random(4),
            'emq_bank_branch_code' => null,
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank_branch_data.emq_bank_branch_code field must be a string. (and 3 more errors)');
});

test('Bank Branch create for blank all field expect bank_id, name validation expect The Bank Branch Data IFCS Code field is required. (and 1 more errors)', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => Str::random(8), ////10010048
            'trans_fast_bank_branch_code' => Str::random(4),
            'emq_bank_branch_code' => Str::random(6),
            'ifcs_code' => null,
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe('The bank_branch_data.ifcs_code field must be a string. (and 1 more error)');
});

test('Bank Branch create expected message The Bank Branch created successfully', function () {
    $bankBranch = postJson('/api/banco/bank-branches', [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => Str::random(8), ////10010048
            'trans_fast_bank_branch_code' => Str::random(4),
            'emq_bank_branch_code' => Str::random(6),
            'ifcs_code' => Str::random(12),
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe(trans('core::messages.resource.created', ['model' => 'Bank Branch']));
});

test('Bank Branch not found expected status code 404', function () {
    createBankBranch();
    getJson('/api/banco/bank-branches/100')->assertStatus(404);
});

test('Bank Branch not found expected message No query results for model [Fintech\Banco\Models\BankBranch] 100', function () {
    createBankBranch();
    $bankBranch = getJson('/api/banco/bank-branches/100');
    expect($bankBranch['message'])->toBe('No query results for model [Fintech\Banco\Models\BankBranch] 100');
});

test('Bank Branch detail expected status code 200', function () {
    $preStoreBankBranch = createBankBranch();
    getJson('/api/banco/bank-branches/' . $preStoreBankBranch['id'])->assertStatus(200);
});

test('Bank Branch detail expected message bank branch name are same', function () {
    $preStoreBankBranch = createBankBranch();
    $bankBranch = getJson('/api/banco/bank-branches/' . $preStoreBankBranch['id']);
    expect($bankBranch->json()['data']['name'])->toBe($preStoreBankBranch['name']);
});

test('Bank Branch update expect status code 200', function () {
    $preStoreBankBranch = createBankBranch();
    putJson('/api/banco/bank-branches/' . $preStoreBankBranch['id'], [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => '1',
            'trans_fast_bank_branch_code' => '1',
            'emq_bank_branch_code' => '1',
        ],
        'enabled' => '1',
    ])->assertStatus(200);
});

test('Bank Branch update expect message Bank Branch updated successfully.', function () {
    $preStoreBankBranch = createBankBranch();
    $bankBranch = putJson('/api/banco/bank-branches/' . $preStoreBankBranch['id'], [
        'bank_id' => 1,
        'name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => '1',
            'trans_fast_bank_branch_code' => '1',
            'emq_bank_branch_code' => '1',
        ],
        'enabled' => '1',
    ]);
    expect($bankBranch['message'])->toBe(trans('core::messages.resource.updated', ['model' => 'BankBranch']));
});

test('Bank Branch deleted expected status code 200', function () {
    $preStoreBankBranch = createBankBranch();
    deleteJson('/api/banco/bank-branches/' . $preStoreBankBranch['id'])->assertStatus(200);
});

test('Bank Branch deleted expected status code 404', function () {
    createBankBranch();
    deleteJson('/api/banco/bank-branches/2')->assertStatus(404);
});

test('Bank Branch deleted expected message The Bank Branch deleted successfully.', function () {
    $preStoreBankBranch = createBankBranch();
    $bankBranch = deleteJson('/api/banco/bank-branches/' . $preStoreBankBranch['id']);
    expect($bankBranch['message'])->toBe(trans('core::messages.resource.deleted', ['model' => 'BankBranch']));
});

test('Bank Branch deleted expected message No query results for model [Fintech\Banco\Models\BankBranch] 2', function () {
    createBankBranch();
    $bankBranch = deleteJson('/api/banco/bank-branches/2');
    expect($bankBranch['message'])->toBe('No query results for model [Fintech\Banco\Models\BankBranch] 2');
});

test('Bank Branch restored expected status code 200', function () {
    $preStoreBankBranch = createBankBranch();
    $preStoreBankBranch->delete();
    postJson('/api/banco/bank-branches/' . $preStoreBankBranch['id'] . '/restore')->assertStatus(200);
});

test('Bank Branch restored expected message The Bank Branch restored successfully.', function () {
    $preStoreBankBranch = createBankBranch();
    $preStoreBankBranch->delete();
    $bankBranch = postJson('/api/banco/bank-branches/' . $preStoreBankBranch['id'] . '/restore')->assertStatus(200);
    expect($bankBranch['message'])->toBe(trans('core::messages.resource.restored', ['model' => 'BankBranch']));
});
