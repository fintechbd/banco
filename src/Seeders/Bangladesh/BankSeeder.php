<?php

namespace Fintech\Banco\Seeders\Bangladesh;

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
            if ($bank['logo_png'] != null) {
                $image_png = __DIR__ . '/../../../resources/img/bank_logo_png/' . $bank['logo_png'];
                $bank['logo_png'] = 'data:image/png;base64,' . base64_encode(file_get_contents($image_png));
            }
            if ($bank['logo_svg'] != null) {
                $image_svg = __DIR__ . '/../../../resources/img/bank_logo_svg/' . $bank['logo_svg'];
                $bank['logo_svg'] = 'data:image/svg+xml;base64,' . base64_encode(file_get_contents($image_svg));
            }
            Banco::bank()->create($bank);
        }
    }

    private function data()
    {
        return [
            [
                'id' => '1',
                'country_id' => '19',
                'beneficiary_types' => [1, 3],
                'name' => 'AGRANI BANK LIMITED',
                'category' => 'State-owned Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_3.png',
                'logo_svg' => 'bank_logo_3.svg',
            ],
            [
                'id' => '2',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'AL-ARAFAH ISLAMI BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_24.png',
                'logo_svg' => 'bank_logo_24.svg',
            ],
            [
                'id' => '3',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'AB BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_35.png',
                'logo_svg' => 'bank_logo_35.svg',
            ],
            [
                'id' => '4',
                'country_id' => '19',
                'beneficiary_types' => [1, 3, 5],
                'name' => 'BANGLADESH BANK',
                'category' => 'Central Bank',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_1.png',
                'logo_svg' => 'bank_logo_1.svg',
            ],
            [
                'id' => '5',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'BANGLADESH COMMERCE BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_30.png',
                'logo_svg' => 'bank_logo_30.svg',
            ],
            [
                'id' => '6',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'BANGLADESH KRISHI BANK',
                'category' => 'Specialized Development',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_38.png',
                'logo_svg' => 'bank_logo_38.svg',
            ],
            [
                'id' => '7',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'BANGLADESH SAMABAYA BANK LIMITED',
                'category' => 'Specialized Development',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_42.png',
                'logo_svg' => 'bank_logo_42.svg',
            ],
            [
                'id' => '8',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'BANGLADESH DEVELOPMENT BANK LIMITED',
                'category' => 'Specialized Development',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_41.png',
                'logo_svg' => 'bank_logo_41.svg',
            ],
            [
                'id' => '9',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'BASIC BANK LIMITED',
                'category' => 'Specialized Development',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_44.png',
                'logo_svg' => 'bank_logo_44.svg',
            ],
            [
                'id' => '10',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'BRAC BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_6.png',
                'logo_svg' => 'bank_logo_6.svg',
            ],
            [
                'id' => '11',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'BANK AL-FALAH LIMITED',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_53.png',
                'logo_svg' => 'bank_logo_53.svg',
            ],
            [
                'id' => '12',
                'country_id' => '19',
                'beneficiary_types' => [1, 3],
                'name' => 'BANK ASIA LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_28.png',
                'logo_svg' => 'bank_logo_28.svg',
            ],
            [
                'id' => '13',
                'country_id' => '19',
                'beneficiary_types' => [1, 3],
                'name' => 'CITI BANK N A',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_47.png',
                'logo_svg' => 'bank_logo_47.svg',
            ],
            [
                'id' => '14',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'COMMERCIAL BANK OF CYLON',
                'category' => null,
                'transaction_type' => null,
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_50.png',
                'logo_svg' => 'bank_logo_50.svg',
            ],
            [
                'id' => '15',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'DHAKA BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_11.png',
                'logo_svg' => 'bank_logo_11.svg',
            ],
            [
                'id' => '16',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'DUTCH-BANGLA BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_7.png',
                'logo_svg' => 'bank_logo_7.svg',
            ],
            [
                'id' => '17',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'EASTERN BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_8.png',
                'logo_svg' => 'bank_logo_8.svg',
            ],
            [
                'id' => '18',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'EXIM BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_26.png',
                'logo_svg' => 'bank_logo_26.svg',
            ],
            [
                'id' => '19',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'FIRST SECURITY ISLAMI BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_27.png',
                'logo_svg' => 'bank_logo_27.svg',
            ],
            [
                'id' => '20',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'HABIB BANK LIMITED',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_56.png',
                'logo_svg' => 'bank_logo_56.svg',
            ],
            [
                'id' => '21',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'HONGKONG & SHANGHAI BANKING CORP.',
                'category' => null,
                'transaction_type' => null,
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_48.png',
                'logo_svg' => 'bank_logo_48.svg',
            ],
            [
                'id' => '22',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'IFIC BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_15.png',
                'logo_svg' => 'bank_logo_15.svg',
            ],
            [
                'id' => '23',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'ISLAMI BANK BANGLDESH LIMITED',
                'category' => null,
                'transaction_type' => null,
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_12.png',
                'logo_svg' => 'bank_logo_12.svg',
            ],
            [
                'id' => '24',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'JAMUNA BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_32.png',
                'logo_svg' => 'bank_logo_32.svg',
            ],
            [
                'id' => '25',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'JANATA BANK LIMITED',
                'category' => 'State-owned Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_5.png',
                'logo_svg' => 'bank_logo_5.svg',
            ],
            [
                'id' => '26',
                'country_id' => '19',
                'beneficiary_types' => [1, 3, 5],
                'name' => 'MERCANTILE BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_19.png',
                'logo_svg' => 'bank_logo_19.svg',
            ],
            [
                'id' => '27',
                'country_id' => '19',
                'beneficiary_types' => [1, 3],
                'name' => 'MUTUAL TRUST BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_10.png',
                'logo_svg' => 'bank_logo_10.svg',
            ],
            [
                'id' => '28',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'NATIONAL BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_16.png',
                'logo_svg' => 'bank_logo_16.svg',
            ],
            [
                'id' => '29',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'NATIONAL BANK OF PAKISTAN',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_54.png',
                'logo_svg' => 'bank_logo_54.svg',
            ],
            [
                'id' => '30',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'NATIONAL CREDIT & COMMERCE BANK LIMITED',
                'category' => null,
                'transaction_type' => null,
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_18.png',
                'logo_svg' => 'bank_logo_18.svg',
            ],
            [
                'id' => '31',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'ONE BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_25.png',
                'logo_svg' => 'bank_logo_25.svg',
            ],
            [
                'id' => '32',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'PRIME BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_21.png',
                'logo_svg' => 'bank_logo_21.svg',
            ],
            [
                'id' => '33',
                'country_id' => '19',
                'beneficiary_types' => [1, 2],
                'name' => 'PUBALI BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_14.png',
                'logo_svg' => 'bank_logo_14.svg',
            ],
            [
                'id' => '34',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'RAJSHAHI KRISHI UNNAYAN BANK',
                'category' => 'Specialized Development',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_40.png',
                'logo_svg' => 'bank_logo_40.svg',
            ],
            [
                'id' => '35',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'RUPALI BANK LIMITED',
                'category' => 'State-owned Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_4.png',
                'logo_svg' => 'bank_logo_4.svg',
            ],
            [
                'id' => '36',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'SHAHJALAL ISLAMI BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_33.png',
                'logo_svg' => 'bank_logo_33.svg',
            ],
            [
                'id' => '37',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'SOCIAL ISLAMI BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_22.png',
                'logo_svg' => 'bank_logo_22.svg',
            ],
            [
                'id' => '38',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'SONALI BANK LIMITED',
                'category' => 'State-owned Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_2.png',
                'logo_svg' => 'bank_logo_2.svg',
            ],
            [
                'id' => '39',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'SOUTHEAST BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_20.png',
                'logo_svg' => 'bank_logo_20.svg',
            ],
            [
                'id' => '40',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'STANDARD BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_23.png',
                'logo_svg' => 'bank_logo_23.svg',
            ],
            [
                'id' => '41',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'STANDARD CHARTERED BANK',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_49.png',
                'logo_svg' => 'bank_logo_49.svg',
            ],
            [
                'id' => '42',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'STATE BANK OF INDIA',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_51.png',
                'logo_svg' => 'bank_logo_51.svg',
            ],
            [
                'id' => '43',
                'country_id' => '19',
                'beneficiary_types' => [1, 3],
                'name' => 'THE CITY BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_17.png',
                'logo_svg' => 'bank_logo_17.svg',
            ],
            [
                'id' => '44',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'ICB ISLAMIC BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_34.png',
                'logo_svg' => 'bank_logo_34.svg',
            ],
            [
                'id' => '45',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'THE PREMIER BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_29.png',
                'logo_svg' => 'bank_logo_29.svg',
            ],
            [
                'id' => '46',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'TRUST BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_31.png',
                'logo_svg' => 'bank_logo_31.svg',
            ],
            [
                'id' => '47',
                'country_id' => '19',
                'beneficiary_types' => [1, 5],
                'name' => 'UNITED COMMERCIAL BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_9.png',
                'logo_svg' => 'bank_logo_9.svg',
            ],
            [
                'id' => '48',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'UTTARA BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_13.png',
                'logo_svg' => 'bank_logo_13.svg',
            ],
            [
                'id' => '49',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'WOORI BANK',
                'category' => 'Foreign Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_52.png',
                'logo_svg' => 'bank_logo_52.svg',
            ],
            [
                'id' => '50',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'NRB COMMERCIAL BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_63.png',
                'logo_svg' => 'bank_logo_63.svg',
            ],
            [
                'id' => '51',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'UNION BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_67.png',
                'logo_svg' => 'bank_logo_67.svg',
            ],
            [
                'id' => '52',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'SBAC BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_64.png',
                'logo_svg' => 'bank_logo_64.svg',
            ],
            [
                'id' => '53',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'MEGHNA BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_59.png',
                'logo_svg' => 'bank_logo_59.svg',
            ],
            [
                'id' => '54',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'THE FARMERS BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_66.png',
                'logo_svg' => 'bank_logo_66.svg',
            ],
            [
                'id' => '55',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'MIDLAND BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_60.png',
                'logo_svg' => 'bank_logo_60.svg',
            ],
            [
                'id' => '56',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'NRB BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_62.png',
                'logo_svg' => 'bank_logo_62.svg',
            ],
            [
                'id' => '57',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'MODHUMOTI BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_61.png',
                'logo_svg' => 'bank_logo_61.svg',
            ],
            [
                'id' => '58',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'NRB GLOBAL BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_64.png',
                'logo_svg' => 'bank_logo_64.svg',
            ],
            [
                'id' => '59',
                'country_id' => '19',
                'beneficiary_types' => [1],
                'name' => 'SHIMANTO BANK LIMITED',
                'category' => 'Private Commercial',
                'transaction_type' => 'Account Deposit',
                'currency' => 'BDT',
                'bank_data' => [],
                'enabled' => true,
                'logo_png' => 'bank_logo_65.png',
                'logo_svg' => 'bank_logo_65.svg',
            ],
        ];
    }
}
