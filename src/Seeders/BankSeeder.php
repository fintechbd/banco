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
            ['id' => '1', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'AGRANI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '2', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'AL-ARAFAH ISLAMI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '3', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'AB BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '4', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANGLADESH BANK', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '5', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANGLADESH COMMERCE BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '6', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANGLADESH KRISHI BANK', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '7', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANGLADESH SAMABAYA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '8', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANGLADESH DEVELOPMENT BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '9', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BASIC BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '10', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BRAC BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '11', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANK AL-FALAH LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '12', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'BANK ASIA LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '13', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'CITI BANK N A', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '14', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'COMMERCIAL BANK OF CYLON', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '15', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'DHAKA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '16', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'DUTCH-BANGLA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '17', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'EASTERN BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '18', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'EXIM BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '19', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'FIRST SECURITY ISLAMI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '20', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'HABIB BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '21', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'HONGKONG & SHANGHAI BANKING CORP.', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '22', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'IFIC BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '23', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'ISLAMI BANK BANGLDESH LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '24', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'JAMUNA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '25', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'JANATA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '26', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'MERCANTILE BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '27', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'MUTUAL TRUST BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '28', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'NATIONAL BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '29', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'NATIONAL BANK OF PAKISTAN', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '30', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'NATIONAL CREDIT & COMMERCE BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '31', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'ONE BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '32', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'PRIME BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '33', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'PUBALI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '34', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'RAJSHAHI KRISHI UNNAYAN BANK', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '35', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'RUPALI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '36', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'SHAHJALAL ISLAMI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '37', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'SOCIAL ISLAMI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '38', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'SONALI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '39', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'SOUTHEAST BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '40', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'STANDARD BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '41', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'STANDARD CHARTERED BANK', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '42', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'STATE BANK OF INDIA', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '43', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'THE CITY BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '44', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'ICB ISLAMIC BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '45', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'THE PREMIER BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '46', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'TRUST BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '47', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'UNITED COMMERCIAL BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '48', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'UTTARA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '49', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'WOORI BANK', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '50', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'NRB COMMERCIAL BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '51', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'UNION BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '52', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'SBAC BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '53', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'MEGHNA BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '54', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'THE FARMERS BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '55', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'MIDLAND BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '56', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'NRB BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '57', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'MODHUMOTI BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '58', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'NRB GLOBAL BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
            ['id' => '59', 'country_id' => '19', 'beneficiary_type_id' => 1, 'bank_name' => 'SHIMANTO BANK LIMITED', 'bank_category' => null, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true],
        ];
    }
}
