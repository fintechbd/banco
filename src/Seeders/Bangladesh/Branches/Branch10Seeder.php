<?php

namespace Fintech\Banco\Seeders\Bangladesh\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->data();

        foreach (array_chunk($data, 200) as $block) {
            set_time_limit(2100);
            foreach ($block as $bankBranch) {
                Banco::bankBranch()->create($bankBranch);
            }
        }
    }

    private function data()
    {
        return [
            0 => [
                'id' => '9001',
                'bank_id' => '45',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235151937',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '9002',
                'bank_id' => '45',
                'name' => 'CHITTAGONG EPZ',
                'bank_branch_data' => [
                    'routing_no' => '235152002',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '9003',
                'bank_id' => '45',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235153643',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '9004',
                'bank_id' => '45',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '235153735',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '9005',
                'bank_id' => '45',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235154271',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '9006',
                'bank_id' => '45',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '235155591',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '9007',
                'bank_id' => '45',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235155809',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '9008',
                'bank_id' => '45',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '235155920',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '9009',
                'bank_id' => '45',
                'name' => 'SHANTIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '235157249',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '9010',
                'bank_id' => '45',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '235191155',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '9011',
                'bank_id' => '45',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235220255',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '9012',
                'bank_id' => '45',
                'name' => 'COX\'S BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '235220268',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '9013',
                'bank_id' => '45',
                'name' => 'GARIB-E-NEWAZ',
                'bank_branch_data' => [
                    'routing_no' => '235260110',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '9014',
                'bank_id' => '45',
                'name' => 'DHANMONDI SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235260152',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '9015',
                'bank_id' => '45',
                'name' => 'ASHKONA',
                'bank_branch_data' => [
                    'routing_no' => '235260202',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '9016',
                'bank_id' => '45',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '235260228',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '9017',
                'bank_id' => '45',
                'name' => 'GULSHAN LINK ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235260307',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '9018',
                'bank_id' => '45',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '235260431',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '9019',
                'bank_id' => '45',
                'name' => 'BANANI SME',
                'bank_branch_data' => [
                    'routing_no' => '235260444',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '9020',
                'bank_id' => '45',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '235260507',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '9021',
                'bank_id' => '45',
                'name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '235260523',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '9022',
                'bank_id' => '45',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '235260552',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '9023',
                'bank_id' => '45',
                'name' => 'GULSHAN GLASS HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '235260860',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '9024',
                'bank_id' => '45',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '235261180',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '9025',
                'bank_id' => '45',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235261335',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '9026',
                'bank_id' => '45',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '235261722',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '9027',
                'bank_id' => '45',
                'name' => 'GULSHAN CIRCLE-2',
                'bank_branch_data' => [
                    'routing_no' => '235261777',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '9028',
                'bank_id' => '45',
                'name' => 'GULSHAN TEJGAON LINK ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235261922',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '9029',
                'bank_id' => '45',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235262534',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '9030',
                'bank_id' => '45',
                'name' => 'KARWAN BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '235262547',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '9031',
                'bank_id' => '45',
                'name' => 'MIRPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '235263070',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '9032',
                'bank_id' => '45',
                'name' => 'MIRPUR SECTION-1',
                'bank_branch_data' => [
                    'routing_no' => '235263104',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '9033',
                'bank_id' => '45',
                'name' => 'MOHAKHALI(IBB)',
                'bank_branch_data' => [
                    'routing_no' => '235263254',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '9034',
                'bank_id' => '45',
                'name' => 'MOHAMMADPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '235263296',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '9035',
                'bank_id' => '45',
                'name' => 'DHAKA NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '235263520',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '9036',
                'bank_id' => '45',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '235263588',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '9037',
                'bank_id' => '45',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '235263612',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '9038',
                'bank_id' => '45',
                'name' => 'ROKEYA SHARANI',
                'bank_branch_data' => [
                    'routing_no' => '235264008',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '9039',
                'bank_id' => '45',
                'name' => 'SATARKUL',
                'bank_branch_data' => [
                    'routing_no' => '235264024',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '9040',
                'bank_id' => '45',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '235264095',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '9041',
                'bank_id' => '45',
                'name' => 'SAVAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235264129',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '9042',
                'bank_id' => '45',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '235264303',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '9043',
                'bank_id' => '45',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '235264637',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '9044',
                'bank_id' => '45',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '235270005',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '9045',
                'bank_id' => '45',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235270342',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '9046',
                'bank_id' => '45',
                'name' => 'BANGLA BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '235270834',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '9047',
                'bank_id' => '45',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '235270889',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '9048',
                'bank_id' => '45',
                'name' => 'DANIA SME',
                'bank_branch_data' => [
                    'routing_no' => '235271446',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '9049',
                'bank_id' => '45',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '235271909',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '9050',
                'bank_id' => '45',
                'name' => 'DILKUSHA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '235271938',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '9051',
                'bank_id' => '45',
                'name' => 'HEAD OFFICE SME',
                'bank_branch_data' => [
                    'routing_no' => '235272708',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '9052',
                'bank_id' => '45',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235272803',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '9053',
                'bank_id' => '45',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '235273378',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '9054',
                'bank_id' => '45',
                'name' => 'KALAKOPA',
                'bank_branch_data' => [
                    'routing_no' => '235273402',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '9055',
                'bank_id' => '45',
                'name' => 'KERANIGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '235273657',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '9056',
                'bank_id' => '45',
                'name' => 'MALIBAGH SME',
                'bank_branch_data' => [
                    'routing_no' => '235273952',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '9057',
                'bank_id' => '45',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '235274001',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '9058',
                'bank_id' => '45',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '235274243',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '9059',
                'bank_id' => '45',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '235274722',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '9060',
                'bank_id' => '45',
                'name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '235275747',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '9061',
                'bank_id' => '45',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '235277095',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '9062',
                'bank_id' => '45',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '235290522',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '9063',
                'bank_id' => '45',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '235300520',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '9064',
                'bank_id' => '45',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235330224',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '9065',
                'bank_id' => '45',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '235330732',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '9066',
                'bank_id' => '45',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '235330882',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '9067',
                'bank_id' => '45',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '235330945',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '9068',
                'bank_id' => '45',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '235331007',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '9069',
                'bank_id' => '45',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '235331636',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '9070',
                'bank_id' => '45',
                'name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'routing_no' => '235351090',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '9071',
                'bank_id' => '45',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '235410944',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '9072',
                'bank_id' => '45',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '235471541',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '9073',
                'bank_id' => '45',
                'name' => 'BASHGARI',
                'bank_branch_data' => [
                    'routing_no' => '235480129',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '9074',
                'bank_id' => '45',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235480224',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '9075',
                'bank_id' => '45',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235581181',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '9076',
                'bank_id' => '45',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235591034',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '9077',
                'bank_id' => '45',
                'name' => 'BHALUKA',
                'bank_branch_data' => [
                    'routing_no' => '235610315',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '9078',
                'bank_id' => '45',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '235611756',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '9079',
                'bank_id' => '45',
                'name' => 'SHAYMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235612113',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '9080',
                'bank_id' => '45',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '235641184',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '9081',
                'bank_id' => '45',
                'name' => 'KALIBARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '235670092',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '9082',
                'bank_id' => '45',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '235670221',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '9083',
                'bank_id' => '45',
                'name' => 'MADANPUR',
                'bank_branch_data' => [
                    'routing_no' => '235670971',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '9084',
                'bank_id' => '45',
                'name' => 'MEGHNAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '235671004',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '9085',
                'bank_id' => '45',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235671183',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '9086',
                'bank_id' => '45',
                'name' => 'PAGLA',
                'bank_branch_data' => [
                    'routing_no' => '235671309',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '9087',
                'bank_id' => '45',
                'name' => 'DANGA',
                'bank_branch_data' => [
                    'routing_no' => '235680437',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '9088',
                'bank_id' => '45',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '235680679',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '9089',
                'bank_id' => '45',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '235680853',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '9090',
                'bank_id' => '45',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235700254',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '9091',
                'bank_id' => '45',
                'name' => 'CHOWMUHANI SME',
                'bank_branch_data' => [
                    'routing_no' => '235750367',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '9092',
                'bank_id' => '45',
                'name' => 'KALAPARA',
                'bank_branch_data' => [
                    'routing_no' => '235780524',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '9093',
                'bank_id' => '45',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '235811930',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '9094',
                'bank_id' => '45',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '235851453',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '9095',
                'bank_id' => '45',
                'name' => 'BAGHABARIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '235880132',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '9096',
                'bank_id' => '45',
                'name' => 'SERAJGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '235881881',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '9097',
                'bank_id' => '45',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '235910044',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '9098',
                'bank_id' => '45',
                'name' => 'SYLHET(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '235913762',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '9099',
                'bank_id' => '45',
                'name' => 'ELENGA',
                'bank_branch_data' => [
                    'routing_no' => '235930824',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '9100',
                'bank_id' => '45',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '235932293',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '9101',
                'bank_id' => '46',
                'name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '240010076',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '9102',
                'bank_id' => '46',
                'name' => 'MONGLA',
                'bank_branch_data' => [
                    'routing_no' => '240010942',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '9103',
                'bank_id' => '46',
                'name' => 'BANDARBAN',
                'bank_branch_data' => [
                    'routing_no' => '240030135',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '9104',
                'bank_id' => '46',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '240060284',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '9105',
                'bank_id' => '46',
                'name' => 'BOGRA CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240100436',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '9106',
                'bank_id' => '46',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '240102742',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '9107',
                'bank_id' => '46',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240120108',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '9108',
                'bank_id' => '46',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '240130314',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '9109',
                'bank_id' => '46',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '240150136',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '9110',
                'bank_id' => '46',
                'name' => 'RADISSON BLU CHITTAGONG BAY VIEW HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '240150394',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '9111',
                'bank_id' => '46',
                'name' => 'AMIRABAD LOHAGORA',
                'bank_branch_data' => [
                    'routing_no' => '240150415',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '9112',
                'bank_id' => '46',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '240151485',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '9113',
                'bank_id' => '46',
                'name' => 'CHITTAGONG KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '240151951',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '9114',
                'bank_id' => '46',
                'name' => 'CHITTAGONG CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240151993',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '9115',
                'bank_id' => '46',
                'name' => 'DEWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '240152413',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '9116',
                'bank_id' => '46',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '240153162',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '9117',
                'bank_id' => '46',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '240153641',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '9118',
                'bank_id' => '46',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240154279',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '9119',
                'bank_id' => '46',
                'name' => 'NAVAL BASE',
                'bank_branch_data' => [
                    'routing_no' => '240155560',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '9120',
                'bank_id' => '46',
                'name' => 'TITAS',
                'bank_branch_data' => [
                    'routing_no' => '240190183',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '9121',
                'bank_id' => '46',
                'name' => 'MALIGAON',
                'bank_branch_data' => [
                    'routing_no' => '240190262',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '9122',
                'bank_id' => '46',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '240191153',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '9123',
                'bank_id' => '46',
                'name' => 'COMILLA CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240191216',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '9124',
                'bank_id' => '46',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240191429',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '9125',
                'bank_id' => '46',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '240220253',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '9126',
                'bank_id' => '46',
                'name' => 'RAMU',
                'bank_branch_data' => [
                    'routing_no' => '240220853',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '9127',
                'bank_id' => '46',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '240260226',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '9128',
                'bank_id' => '46',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '240260439',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '9129',
                'bank_id' => '46',
                'name' => 'DHAMRAI',
                'bank_branch_data' => [
                    'routing_no' => '240261159',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '9130',
                'bank_id' => '46',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '240261188',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '9131',
                'bank_id' => '46',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '240261333',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '9132',
                'bank_id' => '46',
                'name' => 'GULSHAN CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '240261812',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '9133',
                'bank_id' => '46',
                'name' => 'KAFRUL',
                'bank_branch_data' => [
                    'routing_no' => '240262387',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '9134',
                'bank_id' => '46',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '240262532',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '9135',
                'bank_id' => '46',
                'name' => 'KHWAJA GARIB NEWAZ AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '240262611',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '9136',
                'bank_id' => '46',
                'name' => 'MILLENNIUM CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '240262958',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '9137',
                'bank_id' => '46',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '240262987',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '9138',
                'bank_id' => '46',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '240263199',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '9139',
                'bank_id' => '46',
                'name' => 'CENTENNIAL',
                'bank_branch_data' => [
                    'routing_no' => '240263281',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '9140',
                'bank_id' => '46',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '240263702',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '9141',
                'bank_id' => '46',
                'name' => 'RADISSON WATER GARDEN HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '240263799',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '9142',
                'bank_id' => '46',
                'name' => 'SAVAR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240264185',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '9143',
                'bank_id' => '46',
                'name' => 'UTTARA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '240264664',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '9144',
                'bank_id' => '46',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '240270003',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '9145',
                'bank_id' => '46',
                'name' => 'TARANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '240270353',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '9146',
                'bank_id' => '46',
                'name' => 'DHOLAIKHAL SME',
                'bank_branch_data' => [
                    'routing_no' => '240271857',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '9147',
                'bank_id' => '46',
                'name' => 'DILKUSHA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '240271936',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '9148',
                'bank_id' => '46',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '240273284',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '9149',
                'bank_id' => '46',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '240273376',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '9150',
                'bank_id' => '46',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240273642',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '9151',
                'bank_id' => '46',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '240274009',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '9152',
                'bank_id' => '46',
                'name' => 'PATUATULI',
                'bank_branch_data' => [
                    'routing_no' => '240275237',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '9153',
                'bank_id' => '46',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '240275358',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '9154',
                'bank_id' => '46',
                'name' => 'SENA KALYAN BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '240276199',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '9155',
                'bank_id' => '46',
                'name' => 'BIR UTTAM SHAHEED MAHBUB CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240280064',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '9156',
                'bank_id' => '46',
                'name' => 'AULIAPUR',
                'bank_branch_data' => [
                    'routing_no' => '240280093',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '9157',
                'bank_id' => '46',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '240290520',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '9158',
                'bank_id' => '46',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '240300528',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '9159',
                'bank_id' => '46',
                'name' => 'GAZIPUR SENANIBAS',
                'bank_branch_data' => [
                    'routing_no' => '240330264',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '9160',
                'bank_id' => '46',
                'name' => 'MIRERBAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '240331050',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '9161',
                'bank_id' => '46',
                'name' => 'OYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '240331218',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '9162',
                'bank_id' => '46',
                'name' => 'RAJENDRAPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240331339',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '9163',
                'bank_id' => '46',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '240331634',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '9164',
                'bank_id' => '46',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240350378',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '9165',
                'bank_id' => '46',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240360618',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '9166',
                'bank_id' => '46',
                'name' => 'JESSORE CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240411033',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '9167',
                'bank_id' => '46',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '240440646',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '9168',
                'bank_id' => '46',
                'name' => 'KHAGRACHARI',
                'bank_branch_data' => [
                    'routing_no' => '240460071',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '9169',
                'bank_id' => '46',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '240470708',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '9170',
                'bank_id' => '46',
                'name' => 'JAHANABAD CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240471057',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '9171',
                'bank_id' => '46',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '240471549',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '9172',
                'bank_id' => '46',
                'name' => 'BHAIRAB',
                'bank_branch_data' => [
                    'routing_no' => '240480198',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '9173',
                'bank_id' => '46',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240480677',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '9174',
                'bank_id' => '46',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '240500944',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '9175',
                'bank_id' => '46',
                'name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '240520461',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '9176',
                'bank_id' => '46',
                'name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '240540762',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '9177',
                'bank_id' => '46',
                'name' => 'MANIKGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '240560621',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '9178',
                'bank_id' => '46',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '240581189',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '9179',
                'bank_id' => '46',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '240591429',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '9180',
                'bank_id' => '46',
                'name' => 'SHAMBHUGONJ',
                'bank_branch_data' => [
                    'routing_no' => '240610092',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '9181',
                'bank_id' => '46',
                'name' => 'MYMENSINGH CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240611817',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '9182',
                'bank_id' => '46',
                'name' => 'KANCHPUR',
                'bank_branch_data' => [
                    'routing_no' => '240670124',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '9183',
                'bank_id' => '46',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240671181',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '9184',
                'bank_id' => '46',
                'name' => 'MADHABDI SME',
                'bank_branch_data' => [
                    'routing_no' => '240680680',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '9185',
                'bank_id' => '46',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '240680851',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '9186',
                'bank_id' => '46',
                'name' => 'DAYARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '240690409',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '9187',
                'bank_id' => '46',
                'name' => 'NATORE SME',
                'bank_branch_data' => [
                    'routing_no' => '240691116',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '9188',
                'bank_id' => '46',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240700252',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '9189',
                'bank_id' => '46',
                'name' => 'SAYEDPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240730822',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '9190',
                'bank_id' => '46',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '240750673',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '9191',
                'bank_id' => '46',
                'name' => 'KABIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '240751214',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '9192',
                'bank_id' => '46',
                'name' => 'DASHURIA',
                'bank_branch_data' => [
                    'routing_no' => '240760797',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '9193',
                'bank_id' => '46',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '240811938',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '9194',
                'bank_id' => '46',
                'name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '240820679',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '9195',
                'bank_id' => '46',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '240840525',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '9196',
                'bank_id' => '46',
                'name' => 'RANGPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240851480',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '9197',
                'bank_id' => '46',
                'name' => 'SHATIBARI',
                'bank_branch_data' => [
                    'routing_no' => '240851785',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '9198',
                'bank_id' => '46',
                'name' => 'BHEDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240860105',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '9199',
                'bank_id' => '46',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240870874',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '9200',
                'bank_id' => '46',
                'name' => 'KHAWJA YUNUS ALI MEDICAL COLLEGE & HOSPITAL',
                'bank_branch_data' => [
                    'routing_no' => '240881184',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '9201',
                'bank_id' => '46',
                'name' => 'TAMAI SME',
                'bank_branch_data' => [
                    'routing_no' => '240882154',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '9202',
                'bank_id' => '46',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240901127',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '9203',
                'bank_id' => '46',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '240910318',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '9204',
                'bank_id' => '46',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '240911546',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '9205',
                'bank_id' => '46',
                'name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '240911609',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '9206',
                'bank_id' => '46',
                'name' => 'JALALABAD CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240911841',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '9207',
                'bank_id' => '46',
                'name' => 'KAZIR BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '240912158',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '9208',
                'bank_id' => '46',
                'name' => 'MADINA MARKET',
                'bank_branch_data' => [
                    'routing_no' => '240912545',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '9209',
                'bank_id' => '46',
                'name' => 'SHAHJALAL UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '240913252',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '9210',
                'bank_id' => '46',
                'name' => 'SYLHET CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '240913649',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '9211',
                'bank_id' => '46',
                'name' => 'BANGABANDHU BRIDGE SHAHEED SALAHUDDIN CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240930156',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '9212',
                'bank_id' => '46',
                'name' => 'GHATAIL CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '240930943',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '9213',
                'bank_id' => '47',
                'name' => 'BANDARBAN',
                'bank_branch_data' => [
                    'routing_no' => '245030130',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '9214',
                'bank_id' => '47',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '245060289',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '9215',
                'bank_id' => '47',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '245090109',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '9216',
                'bank_id' => '47',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '245100378',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '9217',
                'bank_id' => '47',
                'name' => 'BANCHARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '245120253',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '9218',
                'bank_id' => '47',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '245120437',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '9219',
                'bank_id' => '47',
                'name' => 'KASBA',
                'bank_branch_data' => [
                    'routing_no' => '245121036',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '9220',
                'bank_id' => '47',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '245130319',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '9221',
                'bank_id' => '47',
                'name' => 'ENAYET BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245150052',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '9222',
                'bank_id' => '47',
                'name' => 'DAMPARA',
                'bank_branch_data' => [
                    'routing_no' => '245150128',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '9223',
                'bank_id' => '47',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '245150131',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '9224',
                'bank_id' => '47',
                'name' => 'CHORPATHARGHATA',
                'bank_branch_data' => [
                    'routing_no' => '245150331',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '9225',
                'bank_id' => '47',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '245150465',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '9226',
                'bank_id' => '47',
                'name' => 'ANOWARA',
                'bank_branch_data' => [
                    'routing_no' => '245150528',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '9227',
                'bank_id' => '47',
                'name' => 'OXYGEN',
                'bank_branch_data' => [
                    'routing_no' => '245150531',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '9228',
                'bank_id' => '47',
                'name' => 'AZADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245150731',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '9229',
                'bank_id' => '47',
                'name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '245150799',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '9230',
                'bank_id' => '47',
                'name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'routing_no' => '245151093',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '9231',
                'bank_id' => '47',
                'name' => 'BATTALI',
                'bank_branch_data' => [
                    'routing_no' => '245151172',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '9232',
                'bank_id' => '47',
                'name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '245151219',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '9233',
                'bank_id' => '47',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245151930',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '9234',
                'bank_id' => '47',
                'name' => 'CHITTAGONG MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '245152021',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '9235',
                'bank_id' => '47',
                'name' => 'CHOWDHURI HAT',
                'bank_branch_data' => [
                    'routing_no' => '245152171',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '9236',
                'bank_id' => '47',
                'name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '245152568',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '9237',
                'bank_id' => '47',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '245152742',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '9238',
                'bank_id' => '47',
                'name' => 'GOHIRA',
                'bank_branch_data' => [
                    'routing_no' => '245153017',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '9239',
                'bank_id' => '47',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '245153167',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '9240',
                'bank_id' => '47',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '245153220',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '9241',
                'bank_id' => '47',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245153646',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '9242',
                'bank_id' => '47',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '245153738',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '9243',
                'bank_id' => '47',
                'name' => 'KAMAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245153970',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '9244',
                'bank_id' => '47',
                'name' => 'KATGHAR',
                'bank_branch_data' => [
                    'routing_no' => '245154090',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '9245',
                'bank_id' => '47',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245154274',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '9246',
                'bank_id' => '47',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '245154661',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '9247',
                'bank_id' => '47',
                'name' => 'MADHUNA GHAT',
                'bank_branch_data' => [
                    'routing_no' => '245154753',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '9248',
                'bank_id' => '47',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '245155323',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '9249',
                'bank_id' => '47',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '245155594',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '9250',
                'bank_id' => '47',
                'name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '245155710',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '9251',
                'bank_id' => '47',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245155802',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '9252',
                'bank_id' => '47',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '245155923',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '9253',
                'bank_id' => '47',
                'name' => 'PORT',
                'bank_branch_data' => [
                    'routing_no' => '245156227',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '9254',
                'bank_id' => '47',
                'name' => 'RANGUNIA',
                'bank_branch_data' => [
                    'routing_no' => '245156401',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '9255',
                'bank_id' => '47',
                'name' => 'RAOZAN SME',
                'bank_branch_data' => [
                    'routing_no' => '245156498',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '9256',
                'bank_id' => '47',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '245156735',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '9257',
                'bank_id' => '47',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245157518',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '9258',
                'bank_id' => '47',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '245180198',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '9259',
                'bank_id' => '47',
                'name' => 'JHAWTALA',
                'bank_branch_data' => [
                    'routing_no' => '245190159',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '9260',
                'bank_id' => '47',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '245191158',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '9261',
                'bank_id' => '47',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '245220166',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '9262',
                'bank_id' => '47',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245220258',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '9263',
                'bank_id' => '47',
                'name' => 'EIDGAON',
                'bank_branch_data' => [
                    'routing_no' => '245220403',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '9264',
                'bank_id' => '47',
                'name' => 'NIKUNJA',
                'bank_branch_data' => [
                    'routing_no' => '245260184',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '9265',
                'bank_id' => '47',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '245260434',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '9266',
                'bank_id' => '47',
                'name' => 'SONARGAON AVENUE MOHILA',
                'bank_branch_data' => [
                    'routing_no' => '245260450',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '9267',
                'bank_id' => '47',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '245260500',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '9268',
                'bank_id' => '47',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '245260555',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '9269',
                'bank_id' => '47',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '245260726',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '9270',
                'bank_id' => '47',
                'name' => 'KHILKHET',
                'bank_branch_data' => [
                    'routing_no' => '245260742',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '9271',
                'bank_id' => '47',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '245260913',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '9272',
                'bank_id' => '47',
                'name' => 'DARUS-SALAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245260942',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '9273',
                'bank_id' => '47',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '245261183',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '9274',
                'bank_id' => '47',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245261338',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '9275',
                'bank_id' => '47',
                'name' => 'ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '245261396',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '9276',
                'bank_id' => '47',
                'name' => 'KAMARPARA',
                'bank_branch_data' => [
                    'routing_no' => '245261512',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '9277',
                'bank_id' => '47',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '245261725',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '9278',
                'bank_id' => '47',
                'name' => 'GULSHAN AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '245261738',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '9279',
                'bank_id' => '47',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245262537',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '9280',
                'bank_id' => '47',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '245262982',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '9281',
                'bank_id' => '47',
                'name' => 'MIRPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245263073',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '9282',
                'bank_id' => '47',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '245263194',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '9283',
                'bank_id' => '47',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '245263286',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '9284',
                'bank_id' => '47',
                'name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '245263415',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '9285',
                'bank_id' => '47',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '245263707',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '9286',
                'bank_id' => '47',
                'name' => 'SATARKUL',
                'bank_branch_data' => [
                    'routing_no' => '245264027',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '9287',
                'bank_id' => '47',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '245264098',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '9288',
                'bank_id' => '47',
                'name' => 'TEJGAON',
                'bank_branch_data' => [
                    'routing_no' => '245264485',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '9289',
                'bank_id' => '47',
                'name' => 'UTTAR KHAN',
                'bank_branch_data' => [
                    'routing_no' => '245264601',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '9290',
                'bank_id' => '47',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '245264630',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '9291',
                'bank_id' => '47',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '245270008',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '9292',
                'bank_id' => '47',
                'name' => 'SARULIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245270082',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '9293',
                'bank_id' => '47',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '245270882',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '9294',
                'bank_id' => '47',
                'name' => 'BIJOY NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '245271094',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '9295',
                'bank_id' => '47',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '245271423',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '9296',
                'bank_id' => '47',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '245271902',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '9297',
                'bank_id' => '47',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '245272327',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '9298',
                'bank_id' => '47',
                'name' => 'HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '245272569',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '9299',
                'bank_id' => '47',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '245272680',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '9300',
                'bank_id' => '47',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '245272985',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '9301',
                'bank_id' => '47',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '245273584',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '9302',
                'bank_id' => '47',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245273647',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '9303',
                'bank_id' => '47',
                'name' => 'KHILGAON',
                'bank_branch_data' => [
                    'routing_no' => '245273676',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '9304',
                'bank_id' => '47',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '245273942',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '9305',
                'bank_id' => '47',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '245274004',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '9306',
                'bank_id' => '47',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245274420',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '9307',
                'bank_id' => '47',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '245274725',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '9308',
                'bank_id' => '47',
                'name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245274817',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '9309',
                'bank_id' => '47',
                'name' => 'NORTH BROOK HALL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245275058',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '9310',
                'bank_id' => '47',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '245275353',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '9311',
                'bank_id' => '47',
                'name' => 'SONARGAON JANAPATH',
                'bank_branch_data' => [
                    'routing_no' => '245276581',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '9312',
                'bank_id' => '47',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '245277098',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '9313',
                'bank_id' => '47',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '245280672',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '9314',
                'bank_id' => '47',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '245290525',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '9315',
                'bank_id' => '47',
                'name' => 'SATOIRE BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '245290554',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '9316',
                'bank_id' => '47',
                'name' => 'KANAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '245290912',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '9317',
                'bank_id' => '47',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '245300523',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '9318',
                'bank_id' => '47',
                'name' => 'BHAWAL MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '245330243',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '9319',
                'bank_id' => '47',
                'name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '245330551',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '9320',
                'bank_id' => '47',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '245330735',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '9321',
                'bank_id' => '47',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245330827',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '9322',
                'bank_id' => '47',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '245330885',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '9323',
                'bank_id' => '47',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '245330948',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '9324',
                'bank_id' => '47',
                'name' => 'MAUNA',
                'bank_branch_data' => [
                    'routing_no' => '245331118',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '9325',
                'bank_id' => '47',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '245331639',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '9326',
                'bank_id' => '47',
                'name' => 'TONGI STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245331671',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '9327',
                'bank_id' => '47',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245350373',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '9328',
                'bank_id' => '47',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245361096',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '9329',
                'bank_id' => '47',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '245380406',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '9330',
                'bank_id' => '47',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '245410947',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '9331',
                'bank_id' => '47',
                'name' => 'NOAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245411667',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '9332',
                'bank_id' => '47',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '245440641',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '9333',
                'bank_id' => '47',
                'name' => 'KHAN JAHAN ALI ROAD',
                'bank_branch_data' => [
                    'routing_no' => '245471481',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '9334',
                'bank_id' => '47',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '245471544',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '9335',
                'bank_id' => '47',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '245500949',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '9336',
                'bank_id' => '47',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '245510739',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '9337',
                'bank_id' => '47',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '245540709',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '9338',
                'bank_id' => '47',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '245580101',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '9339',
                'bank_id' => '47',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '245580943',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '9340',
                'bank_id' => '47',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245581184',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '9341',
                'bank_id' => '47',
                'name' => 'BALASUR',
                'bank_branch_data' => [
                    'routing_no' => '245590083',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '9342',
                'bank_id' => '47',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245591037',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '9343',
                'bank_id' => '47',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '245611759',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '9344',
                'bank_id' => '47',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '245641187',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '9345',
                'bank_id' => '47',
                'name' => 'KANCHPUR',
                'bank_branch_data' => [
                    'routing_no' => '245670129',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '9346',
                'bank_id' => '47',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '245670224',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '9347',
                'bank_id' => '47',
                'name' => 'CHASHARA',
                'bank_branch_data' => [
                    'routing_no' => '245670237',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '9348',
                'bank_id' => '47',
                'name' => 'GOPALDI',
                'bank_branch_data' => [
                    'routing_no' => '245670608',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '9349',
                'bank_id' => '47',
                'name' => 'KANCHAN',
                'bank_branch_data' => [
                    'routing_no' => '245670790',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '9350',
                'bank_id' => '47',
                'name' => 'MEGHNAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '245671007',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '9351',
                'bank_id' => '47',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245671186',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '9352',
                'bank_id' => '47',
                'name' => 'PAGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245671331',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '9353',
                'bank_id' => '47',
                'name' => 'CHINISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '245680085',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '9354',
                'bank_id' => '47',
                'name' => 'DANGA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245680201',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '9355',
                'bank_id' => '47',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '245680672',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '9356',
                'bank_id' => '47',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '245680856',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '9357',
                'bank_id' => '47',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '245691090',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '9358',
                'bank_id' => '47',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245700257',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '9359',
                'bank_id' => '47',
                'name' => 'KAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '245750115',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '9360',
                'bank_id' => '47',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '245750678',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '9361',
                'bank_id' => '47',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '245751572',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '9362',
                'bank_id' => '47',
                'name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'routing_no' => '245752234',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '9363',
                'bank_id' => '47',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '245761788',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '9364',
                'bank_id' => '47',
                'name' => 'BANESHWAR',
                'bank_branch_data' => [
                    'routing_no' => '245810226',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '9365',
                'bank_id' => '47',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '245811933',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '9366',
                'bank_id' => '47',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '245820737',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '9367',
                'bank_id' => '47',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '245851456',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '9368',
                'bank_id' => '47',
                'name' => 'BARAKANDI',
                'bank_branch_data' => [
                    'routing_no' => '245860089',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '9369',
                'bank_id' => '47',
                'name' => 'ENAYETPUR',
                'bank_branch_data' => [
                    'routing_no' => '245880827',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '9370',
                'bank_id' => '47',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245881871',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '9371',
                'bank_id' => '47',
                'name' => 'ULLAPARA',
                'bank_branch_data' => [
                    'routing_no' => '245882238',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '9372',
                'bank_id' => '47',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '245890554',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '9373',
                'bank_id' => '47',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '245910047',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '9374',
                'bank_id' => '47',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245910313',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '9375',
                'bank_id' => '47',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '245910434',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '9376',
                'bank_id' => '47',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245911541',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '9377',
                'bank_id' => '47',
                'name' => 'LAMABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245912511',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '9378',
                'bank_id' => '47',
                'name' => 'SHAHJALAL UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '245913257',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '9379',
                'bank_id' => '47',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '245913310',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '9380',
                'bank_id' => '47',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '245913402',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '9381',
                'bank_id' => '47',
                'name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245913499',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '9382',
                'bank_id' => '47',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '245913552',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '9383',
                'bank_id' => '47',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '245914151',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '9384',
                'bank_id' => '47',
                'name' => 'GHATAIL',
                'bank_branch_data' => [
                    'routing_no' => '245930919',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '9385',
                'bank_id' => '47',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '245932296',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '9386',
                'bank_id' => '48',
                'name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '250010079',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '9387',
                'bank_id' => '48',
                'name' => 'MONGLA',
                'bank_branch_data' => [
                    'routing_no' => '250010945',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '9388',
                'bank_id' => '48',
                'name' => 'BARGUNA',
                'bank_branch_data' => [
                    'routing_no' => '250040131',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '9389',
                'bank_id' => '48',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '250060287',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '9390',
                'bank_id' => '48',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250060708',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '9391',
                'bank_id' => '48',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '250090107',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '9392',
                'bank_id' => '48',
                'name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '250090228',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '9393',
                'bank_id' => '48',
                'name' => 'DAULATKHAN',
                'bank_branch_data' => [
                    'routing_no' => '250090378',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '9394',
                'bank_id' => '48',
                'name' => 'LALMOHAN',
                'bank_branch_data' => [
                    'routing_no' => '250090707',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '9395',
                'bank_id' => '48',
                'name' => 'TAZUMUDDIN',
                'bank_branch_data' => [
                    'routing_no' => '250091001',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '9396',
                'bank_id' => '48',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '250100376',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '9397',
                'bank_id' => '48',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '250120435',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '9398',
                'bank_id' => '48',
                'name' => 'DHARKHAR',
                'bank_branch_data' => [
                    'routing_no' => '250120730',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '9399',
                'bank_id' => '48',
                'name' => 'GOPINATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '250120822',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '9400',
                'bank_id' => '48',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '250130317',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '9401',
                'bank_id' => '48',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '250150139',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '9402',
                'bank_id' => '48',
                'name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'routing_no' => '250150292',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '9403',
                'bank_id' => '48',
                'name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'routing_no' => '250150942',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '9404',
                'bank_id' => '48',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '250151754',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '9405',
                'bank_id' => '48',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250151938',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '9406',
                'bank_id' => '48',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '250153165',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '9407',
                'bank_id' => '48',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250153644',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '9408',
                'bank_id' => '48',
                'name' => 'KATGHAR',
                'bank_branch_data' => [
                    'routing_no' => '250154098',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '9409',
                'bank_id' => '48',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250154272',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '9410',
                'bank_id' => '48',
                'name' => 'LALDIGHI',
                'bank_branch_data' => [
                    'routing_no' => '250154519',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '9411',
                'bank_id' => '48',
                'name' => 'LALKHAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250154577',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '9412',
                'bank_id' => '48',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '250154669',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '9413',
                'bank_id' => '48',
                'name' => 'NASIRABAD',
                'bank_branch_data' => [
                    'routing_no' => '250155534',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '9414',
                'bank_id' => '48',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '250156162',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '9415',
                'bank_id' => '48',
                'name' => 'REAZUDDIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250156520',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '9416',
                'bank_id' => '48',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '250156733',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '9417',
                'bank_id' => '48',
                'name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '250156917',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '9418',
                'bank_id' => '48',
                'name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '250157390',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '9419',
                'bank_id' => '48',
                'name' => 'SK. MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250157424',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '9420',
                'bank_id' => '48',
                'name' => 'SAROJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250180059',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '9421',
                'bank_id' => '48',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '250180196',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '9422',
                'bank_id' => '48',
                'name' => 'B.G.S.L.',
                'bank_branch_data' => [
                    'routing_no' => '250190223',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '9423',
                'bank_id' => '48',
                'name' => 'CHANDINA',
                'bank_branch_data' => [
                    'routing_no' => '250190881',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '9424',
                'bank_id' => '48',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '250191156',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '9425',
                'bank_id' => '48',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250191422',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '9426',
                'bank_id' => '48',
                'name' => 'MUDAFARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250193138',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '9427',
                'bank_id' => '48',
                'name' => 'RAJGONJ ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250193617',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '9428',
                'bank_id' => '48',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250220256',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '9429',
                'bank_id' => '48',
                'name' => 'AMIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250260137',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '9430',
                'bank_id' => '48',
                'name' => 'AWLAD HOSSAIN MARKET',
                'bank_branch_data' => [
                    'routing_no' => '250260287',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '9431',
                'bank_id' => '48',
                'name' => 'BADDA',
                'bank_branch_data' => [
                    'routing_no' => '250260340',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '9432',
                'bank_id' => '48',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '250260724',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '9433',
                'bank_id' => '48',
                'name' => 'DARUS-SALAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250260940',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '9434',
                'bank_id' => '48',
                'name' => 'DHAKA EPZ',
                'bank_branch_data' => [
                    'routing_no' => '250261099',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '9435',
                'bank_id' => '48',
                'name' => 'EASTERN PLAZA',
                'bank_branch_data' => [
                    'routing_no' => '250261307',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '9436',
                'bank_id' => '48',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250261336',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '9437',
                'bank_id' => '48',
                'name' => 'GREEN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250261699',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '9438',
                'bank_id' => '48',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '250261723',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '9439',
                'bank_id' => '48',
                'name' => 'KALABAGAN',
                'bank_branch_data' => [
                    'routing_no' => '250262414',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '9440',
                'bank_id' => '48',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250262535',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '9441',
                'bank_id' => '48',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '250262980',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '9442',
                'bank_id' => '48',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '250263192',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '9443',
                'bank_id' => '48',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '250263284',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '9444',
                'bank_id' => '48',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '250263521',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '9445',
                'bank_id' => '48',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '250263589',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '9446',
                'bank_id' => '48',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '250263613',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '9447',
                'bank_id' => '48',
                'name' => 'ROKEYA SHARANI',
                'bank_branch_data' => [
                    'routing_no' => '250264009',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '9448',
                'bank_id' => '48',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250264038',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '9449',
                'bank_id' => '48',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '250264096',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '9450',
                'bank_id' => '48',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '250264304',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '9451',
                'bank_id' => '48',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '250264638',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '9452',
                'bank_id' => '48',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '250270006',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '9453',
                'bank_id' => '48',
                'name' => 'AZIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '250270372',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '9454',
                'bank_id' => '48',
                'name' => 'B.B. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '250270435',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '9455',
                'bank_id' => '48',
                'name' => 'B.K.S.P.',
                'bank_branch_data' => [
                    'routing_no' => '250270493',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '9456',
                'bank_id' => '48',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250270556',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '9457',
                'bank_id' => '48',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250270822',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '9458',
                'bank_id' => '48',
                'name' => 'BANIJYA SHAKHA',
                'bank_branch_data' => [
                    'routing_no' => '250270914',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '9459',
                'bank_id' => '48',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250271276',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '9460',
                'bank_id' => '48',
                'name' => 'CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '250271397',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '9461',
                'bank_id' => '48',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '250271421',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '9462',
                'bank_id' => '48',
                'name' => 'DHAKA SHERATON HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '250271634',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '9463',
                'bank_id' => '48',
                'name' => 'DHOLAIKHAL',
                'bank_branch_data' => [
                    'routing_no' => '250271847',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '9464',
                'bank_id' => '48',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '250271900',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '9465',
                'bank_id' => '48',
                'name' => 'ENGLISH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250272141',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '9466',
                'bank_id' => '48',
                'name' => 'FAKIRAPOOL',
                'bank_branch_data' => [
                    'routing_no' => '250272170',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '9467',
                'bank_id' => '48',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '250272325',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '9468',
                'bank_id' => '48',
                'name' => 'FULBARIA',
                'bank_branch_data' => [
                    'routing_no' => '250272383',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '9469',
                'bank_id' => '48',
                'name' => 'HATKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '250272596',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '9470',
                'bank_id' => '48',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '250272688',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '9471',
                'bank_id' => '48',
                'name' => 'HOTEL ISHAKHAN INTERNATIONAL',
                'bank_branch_data' => [
                    'routing_no' => '250272712',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '9472',
                'bank_id' => '48',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250272804',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '9473',
                'bank_id' => '48',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '250272983',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '9474',
                'bank_id' => '48',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '250273229',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '9475',
                'bank_id' => '48',
                'name' => 'JOHNSON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250273258',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '9476',
                'bank_id' => '48',
                'name' => 'LADIES',
                'bank_branch_data' => [
                    'routing_no' => '250273795',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '9477',
                'bank_id' => '48',
                'name' => 'LOCAL OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '250273887',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '9478',
                'bank_id' => '48',
                'name' => 'MALIBAGH CHOWDHURYPARA',
                'bank_branch_data' => [
                    'routing_no' => '250273979',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '9479',
                'bank_id' => '48',
                'name' => 'MITFORD ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250274123',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '9480',
                'bank_id' => '48',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250274181',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '9481',
                'bank_id' => '48',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250274428',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '9482',
                'bank_id' => '48',
                'name' => 'MUGDA PARA',
                'bank_branch_data' => [
                    'routing_no' => '250274457',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '9483',
                'bank_id' => '48',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250274699',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '9484',
                'bank_id' => '48',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '250274723',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '9485',
                'bank_id' => '48',
                'name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250274815',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '9486',
                'bank_id' => '48',
                'name' => 'NORTH SHAHJAHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '250275085',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '9487',
                'bank_id' => '48',
                'name' => 'PEEL KHANA',
                'bank_branch_data' => [
                    'routing_no' => '250275269',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '9488',
                'bank_id' => '48',
                'name' => 'POSTA',
                'bank_branch_data' => [
                    'routing_no' => '250275298',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '9489',
                'bank_id' => '48',
                'name' => 'POSTAGOLA',
                'bank_branch_data' => [
                    'routing_no' => '250275322',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '9490',
                'bank_id' => '48',
                'name' => 'RAMNA',
                'bank_branch_data' => [
                    'routing_no' => '250275685',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '9491',
                'bank_id' => '48',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '250275922',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '9492',
                'bank_id' => '48',
                'name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '250276347',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '9493',
                'bank_id' => '48',
                'name' => 'SIDDHESWARI',
                'bank_branch_data' => [
                    'routing_no' => '250276550',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '9494',
                'bank_id' => '48',
                'name' => 'TIPU SULTAN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250276705',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '9495',
                'bank_id' => '48',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '250280670',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '9496',
                'bank_id' => '48',
                'name' => 'PHULBARI',
                'bank_branch_data' => [
                    'routing_no' => '250281879',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '9497',
                'bank_id' => '48',
                'name' => 'PULHAT',
                'bank_branch_data' => [
                    'routing_no' => '250281932',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '9498',
                'bank_id' => '48',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250282328',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '9499',
                'bank_id' => '48',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '250290523',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '9500',
                'bank_id' => '48',
                'name' => 'BIRINCHI',
                'bank_branch_data' => [
                    'routing_no' => '250300255',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '9501',
                'bank_id' => '48',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '250300521',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '9502',
                'bank_id' => '48',
                'name' => 'GAIBANDHA',
                'bank_branch_data' => [
                    'routing_no' => '250320527',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '9503',
                'bank_id' => '48',
                'name' => 'GAZIPURA',
                'bank_branch_data' => [
                    'routing_no' => '250330238',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '9504',
                'bank_id' => '48',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '250330733',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '9505',
                'bank_id' => '48',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '250330946',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '9506',
                'bank_id' => '48',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '250331637',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '9507',
                'bank_id' => '48',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250350371',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '9508',
                'bank_id' => '48',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250360611',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '9509',
                'bank_id' => '48',
                'name' => 'MIRPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250361007',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '9510',
                'bank_id' => '48',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250361094',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '9511',
                'bank_id' => '48',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '250380404',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '9512',
                'bank_id' => '48',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '250390852',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '9513',
                'bank_id' => '48',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '250410945',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '9514',
                'bank_id' => '48',
                'name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '250411636',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '9515',
                'bank_id' => '48',
                'name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'routing_no' => '250420319',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '9516',
                'bank_id' => '48',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '250440649',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '9517',
                'bank_id' => '48',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '250470701',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '9518',
                'bank_id' => '48',
                'name' => 'KDA',
                'bank_branch_data' => [
                    'routing_no' => '250471397',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '9519',
                'bank_id' => '48',
                'name' => 'KHALISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '250471450',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '9520',
                'bank_id' => '48',
                'name' => 'LOWER JESSORE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250471847',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '9521',
                'bank_id' => '48',
                'name' => 'SIR IQBAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '250472596',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '9522',
                'bank_id' => '48',
                'name' => 'BHAGALPUR',
                'bank_branch_data' => [
                    'routing_no' => '250480162',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '9523',
                'bank_id' => '48',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250480225',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '9524',
                'bank_id' => '48',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250480670',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '9525',
                'bank_id' => '48',
                'name' => 'MATHKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '250480883',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '9526',
                'bank_id' => '48',
                'name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '250490402',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '9527',
                'bank_id' => '48',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '250500947',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '9528',
                'bank_id' => '48',
                'name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250510195',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '9529',
                'bank_id' => '48',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '250510737',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '9530',
                'bank_id' => '48',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '250510979',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '9531',
                'bank_id' => '48',
                'name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '250520464',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '9532',
                'bank_id' => '48',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '250540402',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '9533',
                'bank_id' => '48',
                'name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '250540765',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '9534',
                'bank_id' => '48',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '250550555',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '9535',
                'bank_id' => '48',
                'name' => 'GHIOR',
                'bank_branch_data' => [
                    'routing_no' => '250560374',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '9536',
                'bank_id' => '48',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250560611',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '9537',
                'bank_id' => '48',
                'name' => 'NABAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '250560732',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '9538',
                'bank_id' => '48',
                'name' => 'SHIBALAYA',
                'bank_branch_data' => [
                    'routing_no' => '250560790',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '9539',
                'bank_id' => '48',
                'name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '250570377',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '9540',
                'bank_id' => '48',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '250580109',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '9541',
                'bank_id' => '48',
                'name' => 'KAZIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250580888',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '9542',
                'bank_id' => '48',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '250580941',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '9543',
                'bank_id' => '48',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250581182',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '9544',
                'bank_id' => '48',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '250581724',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '9545',
                'bank_id' => '48',
                'name' => 'ISAPURA',
                'bank_branch_data' => [
                    'routing_no' => '250590678',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '9546',
                'bank_id' => '48',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250591035',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '9547',
                'bank_id' => '48',
                'name' => 'REKABI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250591219',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '9548',
                'bank_id' => '48',
                'name' => 'HALUAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '250611157',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '9549',
                'bank_id' => '48',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '250611757',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '9550',
                'bank_id' => '48',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '250641185',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '9551',
                'bank_id' => '48',
                'name' => 'NARAIL',
                'bank_branch_data' => [
                    'routing_no' => '250650642',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '9552',
                'bank_id' => '48',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '250670222',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '9553',
                'bank_id' => '48',
                'name' => 'D.I.T.',
                'bank_branch_data' => [
                    'routing_no' => '250670280',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '9554',
                'bank_id' => '48',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250671184',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '9555',
                'bank_id' => '48',
                'name' => 'NETAIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250671276',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '9556',
                'bank_id' => '48',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '250671692',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '9557',
                'bank_id' => '48',
                'name' => 'TAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250671755',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '9558',
                'bank_id' => '48',
                'name' => 'GHORASAL',
                'bank_branch_data' => [
                    'routing_no' => '250680496',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '9559',
                'bank_id' => '48',
                'name' => 'MADHABDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250680704',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '9560',
                'bank_id' => '48',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '250680854',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '9561',
                'bank_id' => '48',
                'name' => 'SARKARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '250681187',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '9562',
                'bank_id' => '48',
                'name' => 'BONPARA',
                'bank_branch_data' => [
                    'routing_no' => '250690286',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '9563',
                'bank_id' => '48',
                'name' => 'LALPUR',
                'bank_branch_data' => [
                    'routing_no' => '250690910',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '9564',
                'bank_id' => '48',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '250691098',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '9565',
                'bank_id' => '48',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250700255',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '9566',
                'bank_id' => '48',
                'name' => 'KANSAT',
                'bank_branch_data' => [
                    'routing_no' => '250700521',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '9567',
                'bank_id' => '48',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '250720730',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '9568',
                'bank_id' => '48',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '250730733',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '9569',
                'bank_id' => '48',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '250730791',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '9570',
                'bank_id' => '48',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '250750250',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '9571',
                'bank_id' => '48',
                'name' => 'BEGUMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250750342',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '9572',
                'bank_id' => '48',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '250750676',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '9573',
                'bank_id' => '48',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '250751570',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '9574',
                'bank_id' => '48',
                'name' => 'SONAPUR',
                'bank_branch_data' => [
                    'routing_no' => '250752324',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '9575',
                'bank_id' => '48',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '250761210',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '9576',
                'bank_id' => '48',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '250761786',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '9577',
                'bank_id' => '48',
                'name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'routing_no' => '250770551',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '9578',
                'bank_id' => '48',
                'name' => 'GALACHIPA',
                'bank_branch_data' => [
                    'routing_no' => '250780491',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '9579',
                'bank_id' => '48',
                'name' => 'KHEPUPARA',
                'bank_branch_data' => [
                    'routing_no' => '250780767',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '9580',
                'bank_id' => '48',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '250781090',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '9581',
                'bank_id' => '48',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '250790528',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '9582',
                'bank_id' => '48',
                'name' => 'PIROJPUR',
                'bank_branch_data' => [
                    'routing_no' => '250790760',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '9583',
                'bank_id' => '48',
                'name' => 'MOHISHALBARI',
                'bank_branch_data' => [
                    'routing_no' => '250811423',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '9584',
                'bank_id' => '48',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '250811636',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '9585',
                'bank_id' => '48',
                'name' => 'PUTHIA',
                'bank_branch_data' => [
                    'routing_no' => '250811849',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '9586',
                'bank_id' => '48',
                'name' => 'RANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250812143',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '9587',
                'bank_id' => '48',
                'name' => 'SHAHEB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250812264',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '9588',
                'bank_id' => '48',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '250820735',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '9589',
                'bank_id' => '48',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '250840528',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '9590',
                'bank_id' => '48',
                'name' => 'PAURA PARK MARKET',
                'bank_branch_data' => [
                    'routing_no' => '250851270',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '9591',
                'bank_id' => '48',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '250851454',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '9592',
                'bank_id' => '48',
                'name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'routing_no' => '250860674',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '9593',
                'bank_id' => '48',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '250871092',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '9594',
                'bank_id' => '48',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250881879',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '9595',
                'bank_id' => '48',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '250881903',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '9596',
                'bank_id' => '48',
                'name' => 'SUBGACHA',
                'bank_branch_data' => [
                    'routing_no' => '250882081',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '9597',
                'bank_id' => '48',
                'name' => 'ULLAPARA',
                'bank_branch_data' => [
                    'routing_no' => '250882236',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '9598',
                'bank_id' => '48',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '250890552',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '9599',
                'bank_id' => '48',
                'name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '250900226',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '9600',
                'bank_id' => '48',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '250900497',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '9601',
                'bank_id' => '48',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250901120',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '9602',
                'bank_id' => '48',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '250910045',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '9603',
                'bank_id' => '48',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250910311',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '9604',
                'bank_id' => '48',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '250910432',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '9605',
                'bank_id' => '48',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250910911',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '9606',
                'bank_id' => '48',
                'name' => 'DHAKA DAKHIN',
                'bank_branch_data' => [
                    'routing_no' => '250911307',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '9607',
                'bank_id' => '48',
                'name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '250911365',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '9608',
                'bank_id' => '48',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250911549',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '9609',
                'bank_id' => '48',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '250912506',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '9610',
                'bank_id' => '48',
                'name' => 'NAZIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '250912801',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '9611',
                'bank_id' => '48',
                'name' => 'SHAHJALAL UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '250913255',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '9612',
                'bank_id' => '48',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '250913550',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '9613',
                'bank_id' => '48',
                'name' => 'ATIA',
                'bank_branch_data' => [
                    'routing_no' => '250930225',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '9614',
                'bank_id' => '48',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '250932294',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '9615',
                'bank_id' => '48',
                'name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '250940978',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '9616',
                'bank_id' => '49',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '255151962',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '9617',
                'bank_id' => '49',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '255262985',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '9618',
                'bank_id' => '49',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '255264633',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '9619',
                'bank_id' => '49',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '255270001',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '9620',
                'bank_id' => '49',
                'name' => 'DHAKA',
                'bank_branch_data' => [
                    'routing_no' => '255271518',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '9621',
                'bank_id' => '49',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '255671189',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '9622',
                'bank_id' => '50',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '260060280',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '9623',
                'bank_id' => '50',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '260100379',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '9624',
                'bank_id' => '50',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '260150132',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '9625',
                'bank_id' => '50',
                'name' => 'BOR DIGHIR PAR',
                'bank_branch_data' => [
                    'routing_no' => '260150387',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '9626',
                'bank_id' => '50',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '260153647',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '9627',
                'bank_id' => '50',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '260155803',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '9628',
                'bank_id' => '50',
                'name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '260156499',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '9629',
                'bank_id' => '50',
                'name' => 'MOYNAMOTI',
                'bank_branch_data' => [
                    'routing_no' => '260190321',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '9630',
                'bank_id' => '50',
                'name' => 'CHANDINA',
                'bank_branch_data' => [
                    'routing_no' => '260190884',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '9631',
                'bank_id' => '50',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '260260435',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '9632',
                'bank_id' => '50',
                'name' => 'DHANMONDI MOHILA',
                'bank_branch_data' => [
                    'routing_no' => '260260477',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '9633',
                'bank_id' => '50',
                'name' => 'ZIRANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '260260543',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '9634',
                'bank_id' => '50',
                'name' => 'HORIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '260260569',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '9635',
                'bank_id' => '50',
                'name' => 'CHARABAGH',
                'bank_branch_data' => [
                    'routing_no' => '260260756',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '9636',
                'bank_id' => '50',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '260261184',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '9637',
                'bank_id' => '50',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '260261726',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '9638',
                'bank_id' => '50',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '260262059',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '9639',
                'bank_id' => '50',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '260262983',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '9640',
                'bank_id' => '50',
                'name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '260263416',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '9641',
                'bank_id' => '50',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '260264631',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '9642',
                'bank_id' => '50',
                'name' => 'ZIRABO',
                'bank_branch_data' => [
                    'routing_no' => '260264815',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '9643',
                'bank_id' => '50',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '260270009',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '9644',
                'bank_id' => '50',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '260270133',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '9645',
                'bank_id' => '50',
                'name' => 'EKORIA',
                'bank_branch_data' => [
                    'routing_no' => '260270270',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '9646',
                'bank_id' => '50',
                'name' => 'HATIRPUL',
                'bank_branch_data' => [
                    'routing_no' => '260270483',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '9647',
                'bank_id' => '50',
                'name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '260274818',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '9648',
                'bank_id' => '50',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '260275354',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '9649',
                'bank_id' => '50',
                'name' => 'RUHITPUR',
                'bank_branch_data' => [
                    'routing_no' => '260275833',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '9650',
                'bank_id' => '50',
                'name' => 'PHUL HAT',
                'bank_branch_data' => [
                    'routing_no' => '260281843',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '9651',
                'bank_id' => '50',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '260300524',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '9652',
                'bank_id' => '50',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '260330228',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '9653',
                'bank_id' => '50',
                'name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '260330552',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '9654',
                'bank_id' => '50',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '260331001',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '9655',
                'bank_id' => '50',
                'name' => 'HATGOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '260440550',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '9656',
                'bank_id' => '50',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '260471545',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '9657',
                'bank_id' => '50',
                'name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '260510198',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '9658',
                'bank_id' => '50',
                'name' => 'MUNSHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '260581248',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '9659',
                'bank_id' => '50',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '260611750',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '9660',
                'bank_id' => '50',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '260641188',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '9661',
                'bank_id' => '50',
                'name' => 'BHUIGHAR',
                'bank_branch_data' => [
                    'routing_no' => '260670209',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '9662',
                'bank_id' => '50',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '260670225',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '9663',
                'bank_id' => '50',
                'name' => 'MOGRAPARA',
                'bank_branch_data' => [
                    'routing_no' => '260671066',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '9664',
                'bank_id' => '50',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '260671187',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '9665',
                'bank_id' => '50',
                'name' => 'PANCHABATI',
                'bank_branch_data' => [
                    'routing_no' => '260671387',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '9666',
                'bank_id' => '50',
                'name' => 'CHINISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '260680086',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '9667',
                'bank_id' => '50',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '260680673',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '9668',
                'bank_id' => '50',
                'name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'routing_no' => '260750587',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '9669',
                'bank_id' => '50',
                'name' => 'INDERHAT',
                'bank_branch_data' => [
                    'routing_no' => '260790376',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '9670',
                'bank_id' => '50',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '260811934',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '9671',
                'bank_id' => '50',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '260851457',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '9672',
                'bank_id' => '50',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '260913553',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '9673',
                'bank_id' => '50',
                'name' => 'SYLHET UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '260913737',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '9674',
                'bank_id' => '50',
                'name' => 'GORAI',
                'bank_branch_data' => [
                    'routing_no' => '260931030',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '9675',
                'bank_id' => '51',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '265060285',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '9676',
                'bank_id' => '51',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '265100374',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '9677',
                'bank_id' => '51',
                'name' => 'TALSHOHOR',
                'bank_branch_data' => [
                    'routing_no' => '265120141',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '9678',
                'bank_id' => '51',
                'name' => 'MIAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265130210',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '9679',
                'bank_id' => '51',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '265150137',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '9680',
                'bank_id' => '51',
                'name' => 'D.T ROAD EIDGAH',
                'bank_branch_data' => [
                    'routing_no' => '265150429',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '9681',
                'bank_id' => '51',
                'name' => 'BANSHKHALI(CHANDPUR)',
                'bank_branch_data' => [
                    'routing_no' => '265150540',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '9682',
                'bank_id' => '51',
                'name' => 'JOTPUKURIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265150629',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '9683',
                'bank_id' => '51',
                'name' => 'DEWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265152414',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '9684',
                'bank_id' => '51',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '265154188',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '9685',
                'bank_id' => '51',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '265154270',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '9686',
                'bank_id' => '51',
                'name' => 'KUMIRA',
                'bank_branch_data' => [
                    'routing_no' => '265154454',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '9687',
                'bank_id' => '51',
                'name' => 'LALDIGHI',
                'bank_branch_data' => [
                    'routing_no' => '265154517',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '9688',
                'bank_id' => '51',
                'name' => 'LICHU BAGAN',
                'bank_branch_data' => [
                    'routing_no' => '265154638',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '9689',
                'bank_id' => '51',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '265155329',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '9690',
                'bank_id' => '51',
                'name' => 'NANUPUR',
                'bank_branch_data' => [
                    'routing_no' => '265155440',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '9691',
                'bank_id' => '51',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '265155929',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '9692',
                'bank_id' => '51',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '265156160',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '9693',
                'bank_id' => '51',
                'name' => 'SARKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '265157006',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '9694',
                'bank_id' => '51',
                'name' => 'SHANTIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '265157248',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '9695',
                'bank_id' => '51',
                'name' => 'LALMAI',
                'bank_branch_data' => [
                    'routing_no' => '265190300',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '9696',
                'bank_id' => '51',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '265191154',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '9697',
                'bank_id' => '51',
                'name' => 'MONSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '265193107',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '9698',
                'bank_id' => '51',
                'name' => 'BADARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '265220041',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '9699',
                'bank_id' => '51',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265220254',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '9700',
                'bank_id' => '51',
                'name' => 'EIDGAON',
                'bank_branch_data' => [
                    'routing_no' => '265220409',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '9701',
                'bank_id' => '51',
                'name' => 'HANILA',
                'bank_branch_data' => [
                    'routing_no' => '265220496',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '9702',
                'bank_id' => '51',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '265260001',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '9703',
                'bank_id' => '51',
                'name' => 'BOGABARI',
                'bank_branch_data' => [
                    'routing_no' => '265260298',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '9704',
                'bank_id' => '51',
                'name' => 'ASHKONA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265260322',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '9705',
                'bank_id' => '51',
                'name' => 'JAMUNA FUTURE PARK',
                'bank_branch_data' => [
                    'routing_no' => '265260335',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '9706',
                'bank_id' => '51',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '265260430',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '9707',
                'bank_id' => '51',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '265261721',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '9708',
                'bank_id' => '51',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '265262988',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '9709',
                'bank_id' => '51',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '265263611',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '9710',
                'bank_id' => '51',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '265264636',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '9711',
                'bank_id' => '51',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265270341',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '9712',
                'bank_id' => '51',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '265270512',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '9713',
                'bank_id' => '51',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '265271908',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '9714',
                'bank_id' => '51',
                'name' => 'HATKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '265272594',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '9715',
                'bank_id' => '51',
                'name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '265274750',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '9716',
                'bank_id' => '51',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '265300529',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '9717',
                'bank_id' => '51',
                'name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'routing_no' => '265330128',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '9718',
                'bank_id' => '51',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '265331006',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '9719',
                'bank_id' => '51',
                'name' => 'BAHUBAL',
                'bank_branch_data' => [
                    'routing_no' => '265360130',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '9720',
                'bank_id' => '51',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '265410943',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '9721',
                'bank_id' => '51',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '265471540',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '9722',
                'bank_id' => '51',
                'name' => 'JAKSIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265510614',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '9723',
                'bank_id' => '51',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '265611755',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '9724',
                'bank_id' => '51',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '265671182',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '9725',
                'bank_id' => '51',
                'name' => 'PANCHABATI',
                'bank_branch_data' => [
                    'routing_no' => '265671382',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '9726',
                'bank_id' => '51',
                'name' => 'BAZAR HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '265680186',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '9727',
                'bank_id' => '51',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '265680678',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '9728',
                'bank_id' => '51',
                'name' => 'BANPARA',
                'bank_branch_data' => [
                    'routing_no' => '265690147',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '9729',
                'bank_id' => '51',
                'name' => 'KHILPARA',
                'bank_branch_data' => [
                    'routing_no' => '265751457',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '9730',
                'bank_id' => '51',
                'name' => 'SEBARHAT',
                'bank_branch_data' => [
                    'routing_no' => '265752056',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '9731',
                'bank_id' => '51',
                'name' => 'ATAIKULA',
                'bank_branch_data' => [
                    'routing_no' => '265760222',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '9732',
                'bank_id' => '51',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '265761784',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '9733',
                'bank_id' => '51',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '265811939',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '9734',
                'bank_id' => '51',
                'name' => 'KALUKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265820067',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '9735',
                'bank_id' => '51',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '265851452',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '9736',
                'bank_id' => '51',
                'name' => 'SHATIBARI',
                'bank_branch_data' => [
                    'routing_no' => '265851786',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '9737',
                'bank_id' => '51',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '265911789',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '9738',
                'bank_id' => '51',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '265914157',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '9739',
                'bank_id' => '52',
                'name' => 'KATAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '270010059',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '9740',
                'bank_id' => '52',
                'name' => 'DIGRAJ',
                'bank_branch_data' => [
                    'routing_no' => '270010404',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '9741',
                'bank_id' => '52',
                'name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'routing_no' => '270011032',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '9742',
                'bank_id' => '52',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '270060283',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '9743',
                'bank_id' => '52',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '270100372',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '9744',
                'bank_id' => '52',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '270150135',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '9745',
                'bank_id' => '52',
                'name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '270151213',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '9746',
                'bank_id' => '52',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '270152746',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '9747',
                'bank_id' => '52',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '270153640',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '9748',
                'bank_id' => '52',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '270154278',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '9749',
                'bank_id' => '52',
                'name' => 'MADHUNA GHAT',
                'bank_branch_data' => [
                    'routing_no' => '270154757',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '9750',
                'bank_id' => '52',
                'name' => 'NASIRABAD',
                'bank_branch_data' => [
                    'routing_no' => '270155530',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '9751',
                'bank_id' => '52',
                'name' => 'EPZ',
                'bank_branch_data' => [
                    'routing_no' => '270156797',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '9752',
                'bank_id' => '52',
                'name' => 'MAINAMATI',
                'bank_branch_data' => [
                    'routing_no' => '270192827',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '9753',
                'bank_id' => '52',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '270260225',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '9754',
                'bank_id' => '52',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '270260438',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '9755',
                'bank_id' => '52',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '270261187',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '9756',
                'bank_id' => '52',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '270261729',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '9757',
                'bank_id' => '52',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '270262052',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '9758',
                'bank_id' => '52',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '270262986',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '9759',
                'bank_id' => '52',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '270263619',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '9760',
                'bank_id' => '52',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '270264634',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '9761',
                'bank_id' => '52',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '270270002',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '9762',
                'bank_id' => '52',
                'name' => 'HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '270272563',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '9763',
                'bank_id' => '52',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '270272800',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '9764',
                'bank_id' => '52',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '270273641',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '9765',
                'bank_id' => '52',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '270274240',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '9766',
                'bank_id' => '52',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '270274729',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '9767',
                'bank_id' => '52',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '270275357',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '9768',
                'bank_id' => '52',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '270280676',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '9769',
                'bank_id' => '52',
                'name' => 'MALIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '270291128',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '9770',
                'bank_id' => '52',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '270300527',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '9771',
                'bank_id' => '52',
                'name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'routing_no' => '270330126',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '9772',
                'bank_id' => '52',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '270330526',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '9773',
                'bank_id' => '52',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '270331004',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '9774',
                'bank_id' => '52',
                'name' => 'GHONAPARA',
                'bank_branch_data' => [
                    'routing_no' => '270350098',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '9775',
                'bank_id' => '52',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '270410941',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '9776',
                'bank_id' => '52',
                'name' => 'KHARABAD BAINTOLA',
                'bank_branch_data' => [
                    'routing_no' => '270470060',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '9777',
                'bank_id' => '52',
                'name' => 'KDA C/A',
                'bank_branch_data' => [
                    'routing_no' => '270470086',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '9778',
                'bank_id' => '52',
                'name' => 'CHUK NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '270470552',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '9779',
                'bank_id' => '52',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '270471548',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '9780',
                'bank_id' => '52',
                'name' => 'LABONCHORA',
                'bank_branch_data' => [
                    'routing_no' => '270471814',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '9781',
                'bank_id' => '52',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '270500943',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '9782',
                'bank_id' => '52',
                'name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '270540761',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '9783',
                'bank_id' => '52',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '270671180',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '9784',
                'bank_id' => '52',
                'name' => 'SHIBU MARKET',
                'bank_branch_data' => [
                    'routing_no' => '270671551',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '9785',
                'bank_id' => '52',
                'name' => 'BABURHAT',
                'bank_branch_data' => [
                    'routing_no' => '270680100',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '9786',
                'bank_id' => '52',
                'name' => 'SARBOLOKKHONA',
                'bank_branch_data' => [
                    'routing_no' => '270680155',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '9787',
                'bank_id' => '52',
                'name' => 'CHALAKCHAR',
                'bank_branch_data' => [
                    'routing_no' => '270680313',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '9788',
                'bank_id' => '52',
                'name' => 'VELA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '270681396',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '9789',
                'bank_id' => '52',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '270691094',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '9790',
                'bank_id' => '52',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '270750193',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '9791',
                'bank_id' => '52',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '270811937',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '9792',
                'bank_id' => '52',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '270851450',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '9793',
                'bank_id' => '52',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '270871098',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '9794',
                'bank_id' => '52',
                'name' => 'SHYAM NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '270871214',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '9795',
                'bank_id' => '52',
                'name' => 'VOMRA',
                'bank_branch_data' => [
                    'routing_no' => '270871364',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '9796',
                'bank_id' => '52',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '270911787',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '9797',
                'bank_id' => '52',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '270913556',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '9798',
                'bank_id' => '53',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '275060288',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '9799',
                'bank_id' => '53',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '275100377',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '9800',
                'bank_id' => '53',
                'name' => 'ANANDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275130239',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '9801',
                'bank_id' => '53',
                'name' => 'RAMPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275131759',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '9802',
                'bank_id' => '53',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '275150130',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '9803',
                'bank_id' => '53',
                'name' => 'AMAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275150251',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '9804',
                'bank_id' => '53',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '275153645',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '9805',
                'bank_id' => '53',
                'name' => 'MADAM BIBIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '275154699',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '9806',
                'bank_id' => '53',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '275156134',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '9807',
                'bank_id' => '53',
                'name' => 'MUNSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '275190411',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '9808',
                'bank_id' => '53',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '275260004',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '9809',
                'bank_id' => '53',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '275260217',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '9810',
                'bank_id' => '53',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '275260570',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '9811',
                'bank_id' => '53',
                'name' => 'ZIRABO',
                'bank_branch_data' => [
                    'routing_no' => '275260770',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '9812',
                'bank_id' => '53',
                'name' => 'DEPZ',
                'bank_branch_data' => [
                    'routing_no' => '275261090',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '9813',
                'bank_id' => '53',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '275261182',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '9814',
                'bank_id' => '53',
                'name' => 'KALAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '275262444',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '9815',
                'bank_id' => '53',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '275262981',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '9816',
                'bank_id' => '53',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '275264639',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '9817',
                'bank_id' => '53',
                'name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '275270649',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '9818',
                'bank_id' => '53',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275271277',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '9819',
                'bank_id' => '53',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '275274245',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '9820',
                'bank_id' => '53',
                'name' => 'CHEHELGAZI',
                'bank_branch_data' => [
                    'routing_no' => '275280497',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '9821',
                'bank_id' => '53',
                'name' => 'MOHIPAL',
                'bank_branch_data' => [
                    'routing_no' => '275301068',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '9822',
                'bank_id' => '53',
                'name' => 'BORMI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275330284',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '9823',
                'bank_id' => '53',
                'name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '275330550',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '9824',
                'bank_id' => '53',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '275471543',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '9825',
                'bank_id' => '53',
                'name' => 'BOROBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275480147',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '9826',
                'bank_id' => '53',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '275480671',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '9827',
                'bank_id' => '53',
                'name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '275540766',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '9828',
                'bank_id' => '53',
                'name' => 'RAMPAL',
                'bank_branch_data' => [
                    'routing_no' => '275591173',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '9829',
                'bank_id' => '53',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '275671185',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '9830',
                'bank_id' => '53',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '275680671',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '9831',
                'bank_id' => '53',
                'name' => 'CHHAYANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '275750648',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '9832',
                'bank_id' => '53',
                'name' => 'JAMIDERHAT',
                'bank_branch_data' => [
                    'routing_no' => '275751155',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '9833',
                'bank_id' => '53',
                'name' => 'SENBAGH',
                'bank_branch_data' => [
                    'routing_no' => '275752088',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '9834',
                'bank_id' => '53',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '275811932',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '9835',
                'bank_id' => '53',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '275851455',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '9836',
                'bank_id' => '53',
                'name' => 'SHATIBARI',
                'bank_branch_data' => [
                    'routing_no' => '275851789',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '9837',
                'bank_id' => '53',
                'name' => 'HATIKUMRUL',
                'bank_branch_data' => [
                    'routing_no' => '275880918',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '9838',
                'bank_id' => '53',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '275912507',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '9839',
                'bank_id' => '53',
                'name' => 'SOUTH SURMA',
                'bank_branch_data' => [
                    'routing_no' => '275913443',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '9840',
                'bank_id' => '54',
                'name' => 'KALASHKATI',
                'bank_branch_data' => [
                    'routing_no' => '280061069',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '9841',
                'bank_id' => '54',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '280100375',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '9842',
                'bank_id' => '54',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '280120434',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '9843',
                'bank_id' => '54',
                'name' => 'RAHIMANAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '280130129',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '9844',
                'bank_id' => '54',
                'name' => 'GRIDAKALINDIA',
                'bank_branch_data' => [
                    'routing_no' => '280130145',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '9845',
                'bank_id' => '54',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '280130316',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '9846',
                'bank_id' => '54',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '280130882',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '9847',
                'bank_id' => '54',
                'name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '280130916',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '9848',
                'bank_id' => '54',
                'name' => 'SUJATPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '280131423',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '9849',
                'bank_id' => '54',
                'name' => 'NARAYANPUR',
                'bank_branch_data' => [
                    'routing_no' => '280131452',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '9850',
                'bank_id' => '54',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '280154189',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '9851',
                'bank_id' => '54',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '280154271',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '9852',
                'bank_id' => '54',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '280154668',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '9853',
                'bank_id' => '54',
                'name' => 'BIBIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '280190451',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '9854',
                'bank_id' => '54',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '280191155',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '9855',
                'bank_id' => '54',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '280260002',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '9856',
                'bank_id' => '54',
                'name' => 'POLASHBARI',
                'bank_branch_data' => [
                    'routing_no' => '280260394',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '9857',
                'bank_id' => '54',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '280260552',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '9858',
                'bank_id' => '54',
                'name' => 'GULSHAN CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '280261814',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '9859',
                'bank_id' => '54',
                'name' => 'GULSHAN SOUTH AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '280261919',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '9860',
                'bank_id' => '54',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '280262989',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '9861',
                'bank_id' => '54',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '280264637',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '9862',
                'bank_id' => '54',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '280270139',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '9863',
                'bank_id' => '54',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '280270513',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '9864',
                'bank_id' => '54',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '280272803',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '9865',
                'bank_id' => '54',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '280273286',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '9866',
                'bank_id' => '54',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '280273378',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '9867',
                'bank_id' => '54',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '280273581',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '9868',
                'bank_id' => '54',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '280274243',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '9869',
                'bank_id' => '54',
                'name' => 'SHYAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '280276520',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '9870',
                'bank_id' => '54',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '280331007',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '9871',
                'bank_id' => '54',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '280350370',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '9872',
                'bank_id' => '54',
                'name' => 'BAKSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '280390101',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '9873',
                'bank_id' => '54',
                'name' => 'SHYAMGONJ KALIBARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '280390156',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '9874',
                'bank_id' => '54',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '280390769',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '9875',
                'bank_id' => '54',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '280390851',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '9876',
                'bank_id' => '54',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '280471541',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '9877',
                'bank_id' => '54',
                'name' => 'CHADNIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '280580311',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '9878',
                'bank_id' => '54',
                'name' => 'HALUAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '280611156',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '9879',
                'bank_id' => '54',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '280611756',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '9880',
                'bank_id' => '54',
                'name' => 'TARAKANDA',
                'bank_branch_data' => [
                    'routing_no' => '280612263',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '9881',
                'bank_id' => '54',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '280641184',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '9882',
                'bank_id' => '54',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '280670221',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '9883',
                'bank_id' => '54',
                'name' => 'SIDDIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '280671604',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '9884',
                'bank_id' => '54',
                'name' => 'CHINISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '280680082',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '9885',
                'bank_id' => '54',
                'name' => 'KALMAKANDA',
                'bank_branch_data' => [
                    'routing_no' => '280720434',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '9886',
                'bank_id' => '54',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '280720739',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '9887',
                'bank_id' => '54',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '280730732',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '9888',
                'bank_id' => '54',
                'name' => 'DUMKI',
                'bank_branch_data' => [
                    'routing_no' => '280780432',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '9889',
                'bank_id' => '54',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '280781099',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '9890',
                'bank_id' => '54',
                'name' => 'SUBIDKHALI',
                'bank_branch_data' => [
                    'routing_no' => '280781273',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '9891',
                'bank_id' => '54',
                'name' => 'JHENAIGATI',
                'bank_branch_data' => [
                    'routing_no' => '280890164',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '9892',
                'bank_id' => '54',
                'name' => 'NALITABARI',
                'bank_branch_data' => [
                    'routing_no' => '280890348',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '9893',
                'bank_id' => '54',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '280890551',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '9894',
                'bank_id' => '54',
                'name' => 'SREEBORDI',
                'bank_branch_data' => [
                    'routing_no' => '280890643',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '9895',
                'bank_id' => '54',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '280911548',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '9896',
                'bank_id' => '54',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '280930208',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '9897',
                'bank_id' => '55',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '285100370',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '9898',
                'bank_id' => '55',
                'name' => 'MOKAMTALA',
                'bank_branch_data' => [
                    'routing_no' => '285101937',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '9899',
                'bank_id' => '55',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '285150133',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '9900',
                'bank_id' => '55',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '285151482',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '9901',
                'bank_id' => '55',
                'name' => 'CHOWDHURI HAT',
                'bank_branch_data' => [
                    'routing_no' => '285152173',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '9902',
                'bank_id' => '55',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '285260210',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '9903',
                'bank_id' => '55',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '285261185',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '9904',
                'bank_id' => '55',
                'name' => 'KAMARPARA',
                'bank_branch_data' => [
                    'routing_no' => '285261514',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '9905',
                'bank_id' => '55',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '285261727',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '9906',
                'bank_id' => '55',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '285262050',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '9907',
                'bank_id' => '55',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '285264632',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '9908',
                'bank_id' => '55',
                'name' => 'ZIRABO',
                'bank_branch_data' => [
                    'routing_no' => '285264816',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '9909',
                'bank_id' => '55',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '285270000',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '9910',
                'bank_id' => '55',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '285270134',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '9911',
                'bank_id' => '55',
                'name' => 'DILKUSHA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '285271933',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '9912',
                'bank_id' => '55',
                'name' => 'MIRZAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '285330111',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '9913',
                'bank_id' => '55',
                'name' => 'DALAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '285510407',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '9914',
                'bank_id' => '55',
                'name' => 'PACCAR',
                'bank_branch_data' => [
                    'routing_no' => '285540064',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '9915',
                'bank_id' => '55',
                'name' => 'BHALUKA',
                'bank_branch_data' => [
                    'routing_no' => '285610310',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '9916',
                'bank_id' => '55',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '285671188',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '9917',
                'bank_id' => '55',
                'name' => 'PANCHRUKHI',
                'bank_branch_data' => [
                    'routing_no' => '285671391',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '9918',
                'bank_id' => '55',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '285680858',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '9919',
                'bank_id' => '56',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '290100378',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '9920',
                'bank_id' => '56',
                'name' => 'RAHIMANAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '290130122',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '9921',
                'bank_id' => '56',
                'name' => 'PATENGA',
                'bank_branch_data' => [
                    'routing_no' => '290150560',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '9922',
                'bank_id' => '56',
                'name' => 'CHITTAGONG(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '290152142',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '9923',
                'bank_id' => '56',
                'name' => 'GEC MOUR',
                'bank_branch_data' => [
                    'routing_no' => '290152968',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '9924',
                'bank_id' => '56',
                'name' => 'SATKANIA',
                'bank_branch_data' => [
                    'routing_no' => '290157068',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '9925',
                'bank_id' => '56',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '290191158',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '9926',
                'bank_id' => '56',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '290260005',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '9927',
                'bank_id' => '56',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '290260218',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '9928',
                'bank_id' => '56',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '290260221',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '9929',
                'bank_id' => '56',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '290260500',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '9930',
                'bank_id' => '56',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '290261725',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '9931',
                'bank_id' => '56',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '290264630',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '9932',
                'bank_id' => '56',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '290270345',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '9933',
                'bank_id' => '56',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '290270516',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '9934',
                'bank_id' => '56',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '290271278',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '9935',
                'bank_id' => '56',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '290271902',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '9936',
                'bank_id' => '56',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '290273289',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '9937',
                'bank_id' => '56',
                'name' => 'HOTAPARA',
                'bank_branch_data' => [
                    'routing_no' => '290330164',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '9938',
                'bank_id' => '56',
                'name' => 'SHAFIPUR',
                'bank_branch_data' => [
                    'routing_no' => '290331426',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '9939',
                'bank_id' => '56',
                'name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '290360884',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '9940',
                'bank_id' => '56',
                'name' => 'KHULNA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '290471728',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '9941',
                'bank_id' => '56',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '290581184',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '9942',
                'bank_id' => '56',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '290670224',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '9943',
                'bank_id' => '56',
                'name' => 'MOGRAPARA',
                'bank_branch_data' => [
                    'routing_no' => '290671065',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '9944',
                'bank_id' => '56',
                'name' => 'PANCHDOWNA',
                'bank_branch_data' => [
                    'routing_no' => '290680148',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '9945',
                'bank_id' => '56',
                'name' => 'PALLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '290751785',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '9946',
                'bank_id' => '56',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '290811933',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '9947',
                'bank_id' => '56',
                'name' => 'ZAJIRA',
                'bank_branch_data' => [
                    'routing_no' => '290860700',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '9948',
                'bank_id' => '56',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '290911541',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '9949',
                'bank_id' => '56',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '290912508',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '9950',
                'bank_id' => '56',
                'name' => 'SYLHET(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '290913794',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '9951',
                'bank_id' => '57',
                'name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '295090225',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '9952',
                'bank_id' => '57',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '295120108',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '9953',
                'bank_id' => '57',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '295150136',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '9954',
                'bank_id' => '57',
                'name' => 'KANKAPAITH',
                'bank_branch_data' => [
                    'routing_no' => '295190475',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '9955',
                'bank_id' => '57',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '295260226',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '9956',
                'bank_id' => '57',
                'name' => 'BANGLA MOTOR',
                'bank_branch_data' => [
                    'routing_no' => '295260813',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '9957',
                'bank_id' => '57',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '295261720',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '9958',
                'bank_id' => '57',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '295264635',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '9959',
                'bank_id' => '57',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '295270003',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '9960',
                'bank_id' => '57',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '295270137',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '9961',
                'bank_id' => '57',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '295270458',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '9962',
                'bank_id' => '57',
                'name' => 'SHEIKH KAMAL SARONI',
                'bank_branch_data' => [
                    'routing_no' => '295270474',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '9963',
                'bank_id' => '57',
                'name' => 'MITFORD',
                'bank_branch_data' => [
                    'routing_no' => '295274067',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '9964',
                'bank_id' => '57',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '295274241',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '9965',
                'bank_id' => '57',
                'name' => 'KANAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '295290917',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '9966',
                'bank_id' => '57',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '295331005',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '9967',
                'bank_id' => '57',
                'name' => 'SHEIKH FAJILATUNNESSA MUJIB EYE HOSPITAL',
                'bank_branch_data' => [
                    'routing_no' => '295350152',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '9968',
                'bank_id' => '57',
                'name' => 'ZINNAHNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '295440059',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '9969',
                'bank_id' => '57',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '295471549',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '9970',
                'bank_id' => '57',
                'name' => 'BHERAMARA',
                'bank_branch_data' => [
                    'routing_no' => '295500281',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '9971',
                'bank_id' => '57',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '295540704',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '9972',
                'bank_id' => '57',
                'name' => 'SHEKHAR NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '295591308',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '9973',
                'bank_id' => '57',
                'name' => 'SHAMBHUGONJ',
                'bank_branch_data' => [
                    'routing_no' => '295610092',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '9974',
                'bank_id' => '57',
                'name' => 'KANCHAN',
                'bank_branch_data' => [
                    'routing_no' => '295670795',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '9975',
                'bank_id' => '57',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '295811938',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '9976',
                'bank_id' => '57',
                'name' => 'PIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '295851369',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '9977',
                'bank_id' => '57',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '295910042',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '9978',
                'bank_id' => '57',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '295932204',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '9979',
                'bank_id' => '58',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '300100376',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '9980',
                'bank_id' => '58',
                'name' => 'ALANKAR MOR',
                'bank_branch_data' => [
                    'routing_no' => '300150142',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '9981',
                'bank_id' => '58',
                'name' => 'AGRABAD CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '300150168',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '9982',
                'bank_id' => '58',
                'name' => 'ADHUNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '300150450',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '9983',
                'bank_id' => '58',
                'name' => 'ANOWARA',
                'bank_branch_data' => [
                    'routing_no' => '300150526',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '9984',
                'bank_id' => '58',
                'name' => 'CHAMBAL',
                'bank_branch_data' => [
                    'routing_no' => '300150571',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '9985',
                'bank_id' => '58',
                'name' => 'BOALKHALI CHOWDHURY HAT',
                'bank_branch_data' => [
                    'routing_no' => '300150597',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '9986',
                'bank_id' => '58',
                'name' => 'ISAPUR',
                'bank_branch_data' => [
                    'routing_no' => '300150650',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '9987',
                'bank_id' => '58',
                'name' => 'BARABKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '300151033',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '9988',
                'bank_id' => '58',
                'name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '300152566',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '9989',
                'bank_id' => '58',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '300153644',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '9990',
                'bank_id' => '58',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '300154272',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '9991',
                'bank_id' => '58',
                'name' => 'NASIRABAD',
                'bank_branch_data' => [
                    'routing_no' => '300155534',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '9992',
                'bank_id' => '58',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '300156133',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '9993',
                'bank_id' => '58',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '300156162',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '9994',
                'bank_id' => '58',
                'name' => 'ROWSHAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '300156588',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '9995',
                'bank_id' => '58',
                'name' => 'GUNABATI',
                'bank_branch_data' => [
                    'routing_no' => '300192171',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '9996',
                'bank_id' => '58',
                'name' => 'LINK ROAD',
                'bank_branch_data' => [
                    'routing_no' => '300220069',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '9997',
                'bank_id' => '58',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '300220256',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '9998',
                'bank_id' => '58',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '300260003',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '9999',
                'bank_id' => '58',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '300260229',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '10000',
                'bank_id' => '58',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '300260432',
                ],
                'enabled' => true,
            ],
        ];
    }
}
