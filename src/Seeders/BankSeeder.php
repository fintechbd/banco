<?php

namespace Fintech\Banco\Seeders;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $bank) {
            Banco::bank()->create($bank);
        }
    }

    private function data()
    {
        return [
            ['id' => '1', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'AGRANI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '2', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'AL-ARAFAH ISLAMI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '3', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'AB BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '4', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANGLADESH BANK', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '5', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANGLADESH COMMERCE BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '6', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANGLADESH KRISHI BANK', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '7', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANGLADESH SAMABAYA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '8', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANGLADESH DEVELOPMENT BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '9', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BASIC BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '10', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BRAC BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '11', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANK AL-FALAH LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '12', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'BANK ASIA LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '13', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'CITI BANK N A', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '14', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'COMMERCIAL BANK OF CYLON', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '15', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'DHAKA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '16', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'DUTCH-BANGLA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '17', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'EASTERN BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '18', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'EXIM BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '19', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'FIRST SECURITY ISLAMI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '20', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'HABIB BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '21', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'HONGKONG & SHANGHAI BANKING CORP.', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '22', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'IFIC BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '23', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'ISLAMI BANK BANGLDESH LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '24', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'JAMUNA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '25', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'JANATA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '26', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'MERCANTILE BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '27', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'MUTUAL TRUST BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '28', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'NATIONAL BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '29', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'NATIONAL BANK OF PAKISTAN', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '30', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'NATIONAL CREDIT & COMMERCE BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '31', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'ONE BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '32', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'PRIME BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '33', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'PUBALI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '34', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'RAJSHAHI KRISHI UNNAYAN BANK', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '35', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'RUPALI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '36', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'SHAHJALAL ISLAMI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '37', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'SOCIAL ISLAMI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '38', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'SONALI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '39', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'SOUTHEAST BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '40', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'STANDARD BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '41', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'STANDARD CHARTERED BANK', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '42', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'STATE BANK OF INDIA', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '43', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'THE CITY BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '44', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'ICB ISLAMIC BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '45', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'THE PREMIER BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '46', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'TRUST BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '47', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'UNITED COMMERCIAL BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '48', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'UTTARA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '49', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'WOORI BANK', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '50', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'NRB COMMERCIAL BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '51', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'UNION BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '52', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'SBAC BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '53', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'MEGHNA BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '54', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'THE FARMERS BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '55', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'MIDLAND BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '56', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'NRB BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '57', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'MODHUMOTI BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '58', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'NRB GLOBAL BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '59', 'country_id' => '19', 'beneficiary_type_id' => 1, 'name' => 'SHIMANTO BANK LIMITED', 'category' => null, 'transaction_type' => 'Account Deposit', 'currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
        ];
    }
}
