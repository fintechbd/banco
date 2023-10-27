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
function createBankBranch(): MYSQLDBLEBUPAY|MONGODB|null
{
    return \Fintech\Banco\Facades\Banco::bankBranch()->create([
        'bank_id' => 1,
        'bank_branch_name' => Str::random(20),
        'bank_branch_data' => [
            'routing_number' => 1,
            'trans_fast_bank_branch_code' => 1,
            'emq_bank_branch_code' => 1,
        ],
        'enabled' => '1',
    ]);
}

test('Bank Branch list', function () {
    getJson('/api/banco/bank-branches')->assertStatus(200);
});
