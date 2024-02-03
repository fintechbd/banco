<?php

use Illuminate\Database\Eloquent\Model as MYSQLDBLEBUPAY;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model as MONGODB;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

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

test('Bank created expect status code 201', function () {
    postJson('/api/banco/banks', [
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
    ])->assertStatus(201);
});

test('Bank created expect message was bank created successfully.', function () {
    $bank = postJson('/api/banco/banks', [
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
    expect($bank['message'])->toBe(trans('core::messages.resource.created', ['model' => 'Bank']));
});

test('Bank created bank name unique validation check expected message The bank name has already been taken.', function () {
    $preStoreBank = createBank();
    $bank = postJson('/api/banco/banks', [
        'country_id' => 1,
        'beneficiary_type_id' => '1',
        'bank_name' => $preStoreBank['bank_name'],
        'bank_category' => 'Private Bank',
        'transaction_type' => 'Account Deposit',
        'bank_currency' => 'BDT',
        'bank_data' => [
            'nrbms_id' => 1,
            'trans_fast_id' => 1,
        ],
        'enabled' => '1',
    ]);
    expect($bank['message'])->toBe('The bank name has already been taken.');
});

test('Bank not found expected status code 404', function () {
    createBank();
    getJson('/api/banco/banks/100')->assertStatus(404);
});

test('Bank not found expected message No query results for model [Fintech\Banco\Models\Bank] 100', function () {
    createBank();
    $bank = getJson('/api/banco/banks/100');
    expect($bank['message'])->toBe('No query results for model [Fintech\Banco\Models\Bank] 100');
});

test('Bank detail expected status code 200', function () {
    $preStoreBank = createBank();
    getJson('/api/banco/banks/'.$preStoreBank['id'])->assertStatus(200);
});

test('Bank detail expected message bank name are same', function () {
    $preStoreBank = createBank();
    $bank = getJson('/api/banco/banks/'.$preStoreBank['id']);
    expect($bank->json()['data']['bank_name'])->toBe($preStoreBank['bank_name']);
});

test('Bank update expect status code 200', function () {
    $preStoreBank = createBank();
    $bank = putJson('/api/banco/banks/'.$preStoreBank['id'], [
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
    ])->assertStatus(200);
});

test('Bank update expect message Bank updated successfully.', function () {
    $preStoreBank = createBank();
    $bank = putJson('/api/banco/banks/'.$preStoreBank['id'], [
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
    expect($bank['message'])->toBe(trans('core::messages.resource.updated', ['model' => 'Bank']));
});

test('Bank update unique validation check expect message The bank name has already been taken.', function () {
    $preStoreBank = createBank();
    $preStoreBank2 = createBank();
    $bank = putJson('/api/banco/banks/'.$preStoreBank['id'], [
        'country_id' => 1,
        'beneficiary_type_id' => '1',
        'bank_name' => $preStoreBank2['bank_name'],
        'bank_category' => 'Private Bank',
        'transaction_type' => 'Account Deposit',
        'bank_currency' => 'BDT',
        'bank_data' => [
            'nrbms_id' => 1,
            'trans_fast_id' => 1,
        ],
        'enabled' => '1',
    ]);
    expect($bank['message'])->toBe('The bank name has already been taken.');
});

test('Bank update unique validation check expect message The bank name duplicate allow same bank id.
', function () {
    $preStoreBank = createBank();
    $bank = putJson('/api/banco/banks/'.$preStoreBank['id'], [
        'country_id' => 1,
        'beneficiary_type_id' => '1',
        'bank_name' => $preStoreBank['bank_name'],
        'bank_category' => 'Private Bank',
        'transaction_type' => 'Account Deposit',
        'bank_currency' => 'BDT',
        'bank_data' => [
            'nrbms_id' => 1,
            'trans_fast_id' => 1,
        ],
        'enabled' => '1',
    ]);
    expect($bank['message'])->toBe(trans('core::messages.resource.updated', ['model' => 'Bank']));
});

test('Bank deleted expected status code 200', function () {
    $preStoreBank = createBank();
    deleteJson('/api/banco/banks/'.$preStoreBank['id'])->assertStatus(200);
});

test('Bank deleted expected status code 404', function () {
    createBank();
    deleteJson('/api/banco/banks/2')->assertStatus(404);
});

test('Bank deleted expected message The Bank deleted successfully.', function () {
    $preStoreBank = createBank();
    $bank = deleteJson('/api/banco/banks/'.$preStoreBank['id']);
    expect($bank['message'])->toBe(trans('core::messages.resource.deleted', ['model' => 'Bank']));
});

test('Bank deleted expected message No query results for model [Fintech\Banco\Models\Bank] 2', function () {
    createBank();
    $bank = deleteJson('/api/banco/banks/2');
    expect($bank['message'])->toBe('No query results for model [Fintech\Banco\Models\Bank] 2');
});

test('Bank restored expected status code 200', function () {
    $preStoreBank = createBank();
    $preStoreBank->delete();
    postJson('/api/banco/banks/'.$preStoreBank['id'].'/restore')->assertStatus(200);
});

test('Bank restored expected message The Bank restored successfully.', function () {
    $preStoreBank = createBank();
    $preStoreBank->delete();
    $bank = postJson('/api/banco/banks/'.$preStoreBank['id'].'/restore')->assertStatus(200);
    expect($bank['message'])->toBe(trans('core::messages.resource.restored', ['model' => 'Bank']));
});
