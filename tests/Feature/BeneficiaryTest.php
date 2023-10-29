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
