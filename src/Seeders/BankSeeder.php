<?php

namespace Fintech\Banco\Seeders;

use Fintech\Banco\Facades\Banco;

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
        return array(
            array('id' => '1', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'AGRANI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '2', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'AL-ARAFAH ISLAMI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '3', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'AB BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '4', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANGLADESH BANK', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '5', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANGLADESH COMMERCE BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '6', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANGLADESH KRISHI BANK', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '7', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANGLADESH SAMABAYA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '8', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANGLADESH DEVELOPMENT BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '9', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BASIC BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '10', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BRAC BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '11', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANK AL-FALAH LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '12', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'BANK ASIA LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '13', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'CITI BANK N A', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '14', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'COMMERCIAL BANK OF CYLON', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '15', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'DHAKA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '16', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'DUTCH-BANGLA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '17', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'EASTERN BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '18', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'EXIM BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '19', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'FIRST SECURITY ISLAMI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '20', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'HABIB BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '21', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'HONGKONG & SHANGHAI BANKING CORP.', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '22', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'IFIC BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '23', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'ISLAMI BANK BANGLDESH LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '24', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'JAMUNA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '25', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'JANATA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '26', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'MERCANTILE BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '27', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'MUTUAL TRUST BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '28', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'NATIONAL BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '29', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'NATIONAL BANK OF PAKISTAN', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '30', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'NATIONAL CREDIT & COMMERCE BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '31', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'ONE BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '32', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'PRIME BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '33', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'PUBALI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '34', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'RAJSHAHI KRISHI UNNAYAN BANK', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '35', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'RUPALI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '36', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'SHAHJALAL ISLAMI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '37', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'SOCIAL ISLAMI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '38', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'SONALI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '39', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'SOUTHEAST BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '40', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'STANDARD BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '41', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'STANDARD CHARTERED BANK', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '42', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'STATE BANK OF INDIA', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '43', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'THE CITY BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '44', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'ICB ISLAMIC BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '45', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'THE PREMIER BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '46', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'TRUST BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '47', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'UNITED COMMERCIAL BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '48', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'UTTARA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '49', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'WOORI BANK', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '50', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'NRB COMMERCIAL BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '51', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'UNION BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '52', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'SBAC BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '53', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'MEGHNA BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '54', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'THE FARMERS BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '55', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'MIDLAND BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '56', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'NRB BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '57', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'MODHUMOTI BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '58', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'NRB GLOBAL BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true),
            array('id' => '59', 'country_id' => '19', 'beneficiary_type_id' => NULL, 'bank_name' => 'SHIMANTO BANK LIMITED', 'bank_category' => NULL, 'transaction_type' => 'Account Deposit', 'bank_currency' => 'BDT', 'bank_data' => [], 'enabled' => true)
        );
    }
}
