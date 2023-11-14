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
        return [
            [
                'id' => 1,
                'beneficiary_type_name' => 'Bank Transfer',
                'beneficiary_type_data' => [
                    [
                        'beneficiary_type_condition_name' => 'Bank Name',
                        'beneficiary_type_condition_field_name' => 'bank_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Bank Branch Name',
                        'beneficiary_type_condition_field_name' => 'bank_branch_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Bank Account Number',
                        'beneficiary_type_condition_field_name' => 'bank_account_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'ID Number',
                        'beneficiary_type_condition_field_name' => 'id_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                ],
                'enabled' => true,
            ],
            [
                'id' => 2,
                'beneficiary_type_name' => 'Instant Bank Transfer',
                'beneficiary_type_data' => [
                    [
                        'beneficiary_type_condition_name' => 'Instant Bank Name',
                        'beneficiary_type_condition_field_name' => 'instant_bank_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Instant Bank Branch Name',
                        'beneficiary_type_condition_field_name' => 'instant_bank_branch_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Instant Bank Account Number',
                        'beneficiary_type_condition_field_name' => 'instant_bank_account_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                ],
                'enabled' => true,
            ],
            [
                'id' => 3,
                'beneficiary_type_name' => 'Cash Pickup',
                'beneficiary_type_data' => [
                    [
                        'beneficiary_type_condition_name' => 'Cash Name',
                        'beneficiary_type_condition_field_name' => 'cash_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Cash Account Number',
                        'beneficiary_type_condition_field_name' => 'cash_account_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                ],
                'enabled' => true,
            ],
            [
                'id' => 4,
                'beneficiary_type_name' => 'Beneficiary',
                'beneficiary_type_data' => [
                    [
                        'beneficiary_type_condition_name' => 'ID Type',
                        'beneficiary_type_condition_field_name' => 'id_type',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'ID Number',
                        'beneficiary_type_condition_field_name' => 'id_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'ID Expire Date',
                        'beneficiary_type_condition_field_name' => 'id_expire_date',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                ],
                'enabled' => true,
            ],
            [
                'id' => 5,
                'beneficiary_type_name' => 'Wallet Transfer',
                'beneficiary_type_data' => [
                    [
                        'beneficiary_type_condition_name' => 'Wallet Name',
                        'beneficiary_type_condition_field_name' => 'wallet_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Wallet Account Number',
                        'beneficiary_type_condition_field_name' => 'wallet_account_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                ],
                'enabled' => true,
            ],
            [
                'id' => 6,
                'beneficiary_type_name' => 'B2B Transaction',
                'beneficiary_type_data' => [
                    [
                        'beneficiary_type_condition_name' => 'Bank Name',
                        'beneficiary_type_condition_field_name' => 'bank_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Bank Branch Name',
                        'beneficiary_type_condition_field_name' => 'bank_branch_id',
                        'beneficiary_type_condition_field_type' => 'select',
                    ],
                    [
                        'beneficiary_type_condition_name' => 'Bank Account Number',
                        'beneficiary_type_condition_field_name' => 'bank_account_number',
                        'beneficiary_type_condition_field_type' => 'text',
                    ],
                ],
                'enabled' => true,
            ],
        ];
    }
}
