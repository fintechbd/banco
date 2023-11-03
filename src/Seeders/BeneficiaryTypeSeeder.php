<?php

namespace Fintech\Banco\Seeders;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class BeneficiaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $beneficiaryType) {
            Banco::beneficiaryType()->create($beneficiaryType);
        }
    }

    private function data()
    {
        return array(
            array(
                'id' => '1',
                'beneficiary_type_name' => 'Bank Transfer',
                'beneficiary_type_data' => [
                    [
                        "user_recipient_type_condition_name" => "Bank Name",
                        "user_recipient_type_condition_field_name" => "bank_id",
                        "user_recipient_type_condition_field_type" => "select"
                    ],
                    [
                        "user_recipient_type_condition_name" => "Bank Branch Name",
                        "user_recipient_type_condition_field_name" => "bank_branch_id",
                        "user_recipient_type_condition_field_type" => "select"],
                    [
                        "user_recipient_type_condition_name" => "Bank Account Number",
                        "user_recipient_type_condition_field_name" => "bank_account_number",
                        "user_recipient_type_condition_field_type" => "text"]
                    [
                        "user_recipient_type_condition_name" => "ID Number",
                    "user_recipient_type_condition_field_name" => "id_number",
                    "user_recipient_type_condition_field_type" => "text"
                ]
        ], 'enabled' => true),
            array('id' => '2', 'beneficiary_type_name' => 'Instant Bank Transfer', 'beneficiary_type_data' => [], 'enabled' => true),
            array('id' => '3', 'beneficiary_type_name' => 'Cash Pickup', 'beneficiary_type_data' => [
                [
                    "user_recipient_type_condition_name" => "Cash Name",
                    "user_recipient_type_condition_field_name" => "cash_id",
                    "user_recipient_type_condition_field_type" => "select"
                ], [
                    "user_recipient_type_condition_name" => "Cash Account Number",
                    "user_recipient_type_condition_field_name" => "cash_account_number",
                    "user_recipient_type_condition_field_type" => "text"
                ]], , 'enabled' => true),
            array('id' => '4', 'beneficiary_type_name' => 'Beneficiary', 'beneficiary_type_data' => [], 'enabled' => true),
            array('id' => '5', 'beneficiary_type_name' => 'Wallet Transfer', 'beneficiary_type_data' => [], 'enabled' => true),
//            array('id' => '6', 'beneficiary_type_name' => 'B2B Transaction', 'beneficiary_type_data' => [], 'enabled' => true),
        );
    }
}
