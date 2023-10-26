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
