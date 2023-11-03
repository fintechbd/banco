<?php

namespace Fintech\Banco\Seeders\Branches;

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
        return array(
            0 =>
                array(
                    'id' => '9001',
                    'bank_id' => '45',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235151937',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '9002',
                    'bank_id' => '45',
                    'bank_branch_name' => 'CHITTAGONG EPZ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235152002',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '9003',
                    'bank_id' => '45',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235153643',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '9004',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235153735',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '9005',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235154271',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '9006',
                    'bank_id' => '45',
                    'bank_branch_name' => 'NAZIR HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235155591',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '9007',
                    'bank_id' => '45',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235155809',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '9008',
                    'bank_id' => '45',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235155920',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '9009',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SHANTIR HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235157249',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '9010',
                    'bank_id' => '45',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235191155',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '9011',
                    'bank_id' => '45',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235220255',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '9012',
                    'bank_id' => '45',
                    'bank_branch_name' => 'COX\'S BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235220268',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '9013',
                    'bank_id' => '45',
                    'bank_branch_name' => 'GARIB-E-NEWAZ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260110',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '9014',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DHANMONDI SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260152',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '9015',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ASHKONA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260202',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '9016',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260228',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '9017',
                    'bank_id' => '45',
                    'bank_branch_name' => 'GULSHAN LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260307',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '9018',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260431',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '9019',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BANANI SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260444',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '9020',
                    'bank_id' => '45',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260507',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '9021',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BARIDHARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260523',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '9022',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260552',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '9023',
                    'bank_id' => '45',
                    'bank_branch_name' => 'GULSHAN GLASS HOUSE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235260860',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '9024',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235261180',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '9025',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235261335',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '9026',
                    'bank_id' => '45',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235261722',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '9027',
                    'bank_id' => '45',
                    'bank_branch_name' => 'GULSHAN CIRCLE-2',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235261777',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '9028',
                    'bank_id' => '45',
                    'bank_branch_name' => 'GULSHAN TEJGAON LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235261922',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '9029',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235262534',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '9030',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KARWAN BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235262547',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '9031',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MIRPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263070',
                        ),
                    'enabled' => true,
                ),
            31 =>
                array(
                    'id' => '9032',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MIRPUR SECTION-1',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263104',
                        ),
                    'enabled' => true,
                ),
            32 =>
                array(
                    'id' => '9033',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MOHAKHALI(IBB)',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263254',
                        ),
                    'enabled' => true,
                ),
            33 =>
                array(
                    'id' => '9034',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MOHAMMADPUR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263296',
                        ),
                    'enabled' => true,
                ),
            34 =>
                array(
                    'id' => '9035',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DHAKA NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263520',
                        ),
                    'enabled' => true,
                ),
            35 =>
                array(
                    'id' => '9036',
                    'bank_id' => '45',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263588',
                        ),
                    'enabled' => true,
                ),
            36 =>
                array(
                    'id' => '9037',
                    'bank_id' => '45',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235263612',
                        ),
                    'enabled' => true,
                ),
            37 =>
                array(
                    'id' => '9038',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ROKEYA SHARANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235264008',
                        ),
                    'enabled' => true,
                ),
            38 =>
                array(
                    'id' => '9039',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SATARKUL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235264024',
                        ),
                    'enabled' => true,
                ),
            39 =>
                array(
                    'id' => '9040',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235264095',
                        ),
                    'enabled' => true,
                ),
            40 =>
                array(
                    'id' => '9041',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SAVAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235264129',
                        ),
                    'enabled' => true,
                ),
            41 =>
                array(
                    'id' => '9042',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235264303',
                        ),
                    'enabled' => true,
                ),
            42 =>
                array(
                    'id' => '9043',
                    'bank_id' => '45',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235264637',
                        ),
                    'enabled' => true,
                ),
            43 =>
                array(
                    'id' => '9044',
                    'bank_id' => '45',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235270005',
                        ),
                    'enabled' => true,
                ),
            44 =>
                array(
                    'id' => '9045',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235270342',
                        ),
                    'enabled' => true,
                ),
            45 =>
                array(
                    'id' => '9046',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BANGLA BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235270834',
                        ),
                    'enabled' => true,
                ),
            46 =>
                array(
                    'id' => '9047',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235270889',
                        ),
                    'enabled' => true,
                ),
            47 =>
                array(
                    'id' => '9048',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DANIA SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235271446',
                        ),
                    'enabled' => true,
                ),
            48 =>
                array(
                    'id' => '9049',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235271909',
                        ),
                    'enabled' => true,
                ),
            49 =>
                array(
                    'id' => '9050',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DILKUSHA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235271938',
                        ),
                    'enabled' => true,
                ),
            50 =>
                array(
                    'id' => '9051',
                    'bank_id' => '45',
                    'bank_branch_name' => 'HEAD OFFICE SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235272708',
                        ),
                    'enabled' => true,
                ),
            51 =>
                array(
                    'id' => '9052',
                    'bank_id' => '45',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235272803',
                        ),
                    'enabled' => true,
                ),
            52 =>
                array(
                    'id' => '9053',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KAKRAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235273378',
                        ),
                    'enabled' => true,
                ),
            53 =>
                array(
                    'id' => '9054',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KALAKOPA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235273402',
                        ),
                    'enabled' => true,
                ),
            54 =>
                array(
                    'id' => '9055',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KERANIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235273657',
                        ),
                    'enabled' => true,
                ),
            55 =>
                array(
                    'id' => '9056',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MALIBAGH SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235273952',
                        ),
                    'enabled' => true,
                ),
            56 =>
                array(
                    'id' => '9057',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235274001',
                        ),
                    'enabled' => true,
                ),
            57 =>
                array(
                    'id' => '9058',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235274243',
                        ),
                    'enabled' => true,
                ),
            58 =>
                array(
                    'id' => '9059',
                    'bank_id' => '45',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235274722',
                        ),
                    'enabled' => true,
                ),
            59 =>
                array(
                    'id' => '9060',
                    'bank_id' => '45',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235275747',
                        ),
                    'enabled' => true,
                ),
            60 =>
                array(
                    'id' => '9061',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235277095',
                        ),
                    'enabled' => true,
                ),
            61 =>
                array(
                    'id' => '9062',
                    'bank_id' => '45',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235290522',
                        ),
                    'enabled' => true,
                ),
            62 =>
                array(
                    'id' => '9063',
                    'bank_id' => '45',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235300520',
                        ),
                    'enabled' => true,
                ),
            63 =>
                array(
                    'id' => '9064',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235330224',
                        ),
                    'enabled' => true,
                ),
            64 =>
                array(
                    'id' => '9065',
                    'bank_id' => '45',
                    'bank_branch_name' => 'JOYDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235330732',
                        ),
                    'enabled' => true,
                ),
            65 =>
                array(
                    'id' => '9066',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235330882',
                        ),
                    'enabled' => true,
                ),
            66 =>
                array(
                    'id' => '9067',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235330945',
                        ),
                    'enabled' => true,
                ),
            67 =>
                array(
                    'id' => '9068',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235331007',
                        ),
                    'enabled' => true,
                ),
            68 =>
                array(
                    'id' => '9069',
                    'bank_id' => '45',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235331636',
                        ),
                    'enabled' => true,
                ),
            69 =>
                array(
                    'id' => '9070',
                    'bank_id' => '45',
                    'bank_branch_name' => 'TUNGI PARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235351090',
                        ),
                    'enabled' => true,
                ),
            70 =>
                array(
                    'id' => '9071',
                    'bank_id' => '45',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235410944',
                        ),
                    'enabled' => true,
                ),
            71 =>
                array(
                    'id' => '9072',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235471541',
                        ),
                    'enabled' => true,
                ),
            72 =>
                array(
                    'id' => '9073',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BASHGARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235480129',
                        ),
                    'enabled' => true,
                ),
            73 =>
                array(
                    'id' => '9074',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BHAIRAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235480224',
                        ),
                    'enabled' => true,
                ),
            74 =>
                array(
                    'id' => '9075',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235581181',
                        ),
                    'enabled' => true,
                ),
            75 =>
                array(
                    'id' => '9076',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235591034',
                        ),
                    'enabled' => true,
                ),
            76 =>
                array(
                    'id' => '9077',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235610315',
                        ),
                    'enabled' => true,
                ),
            77 =>
                array(
                    'id' => '9078',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235611756',
                        ),
                    'enabled' => true,
                ),
            78 =>
                array(
                    'id' => '9079',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SHAYMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235612113',
                        ),
                    'enabled' => true,
                ),
            79 =>
                array(
                    'id' => '9080',
                    'bank_id' => '45',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235641184',
                        ),
                    'enabled' => true,
                ),
            80 =>
                array(
                    'id' => '9081',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KALIBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235670092',
                        ),
                    'enabled' => true,
                ),
            81 =>
                array(
                    'id' => '9082',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235670221',
                        ),
                    'enabled' => true,
                ),
            82 =>
                array(
                    'id' => '9083',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MADANPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235670971',
                        ),
                    'enabled' => true,
                ),
            83 =>
                array(
                    'id' => '9084',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MEGHNAGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235671004',
                        ),
                    'enabled' => true,
                ),
            84 =>
                array(
                    'id' => '9085',
                    'bank_id' => '45',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235671183',
                        ),
                    'enabled' => true,
                ),
            85 =>
                array(
                    'id' => '9086',
                    'bank_id' => '45',
                    'bank_branch_name' => 'PAGLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235671309',
                        ),
                    'enabled' => true,
                ),
            86 =>
                array(
                    'id' => '9087',
                    'bank_id' => '45',
                    'bank_branch_name' => 'DANGA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235680437',
                        ),
                    'enabled' => true,
                ),
            87 =>
                array(
                    'id' => '9088',
                    'bank_id' => '45',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235680679',
                        ),
                    'enabled' => true,
                ),
            88 =>
                array(
                    'id' => '9089',
                    'bank_id' => '45',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235680853',
                        ),
                    'enabled' => true,
                ),
            89 =>
                array(
                    'id' => '9090',
                    'bank_id' => '45',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235700254',
                        ),
                    'enabled' => true,
                ),
            90 =>
                array(
                    'id' => '9091',
                    'bank_id' => '45',
                    'bank_branch_name' => 'CHOWMUHANI SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235750367',
                        ),
                    'enabled' => true,
                ),
            91 =>
                array(
                    'id' => '9092',
                    'bank_id' => '45',
                    'bank_branch_name' => 'KALAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235780524',
                        ),
                    'enabled' => true,
                ),
            92 =>
                array(
                    'id' => '9093',
                    'bank_id' => '45',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235811930',
                        ),
                    'enabled' => true,
                ),
            93 =>
                array(
                    'id' => '9094',
                    'bank_id' => '45',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235851453',
                        ),
                    'enabled' => true,
                ),
            94 =>
                array(
                    'id' => '9095',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BAGHABARIGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235880132',
                        ),
                    'enabled' => true,
                ),
            95 =>
                array(
                    'id' => '9096',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SERAJGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235881881',
                        ),
                    'enabled' => true,
                ),
            96 =>
                array(
                    'id' => '9097',
                    'bank_id' => '45',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235910044',
                        ),
                    'enabled' => true,
                ),
            97 =>
                array(
                    'id' => '9098',
                    'bank_id' => '45',
                    'bank_branch_name' => 'SYLHET(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235913762',
                        ),
                    'enabled' => true,
                ),
            98 =>
                array(
                    'id' => '9099',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ELENGA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235930824',
                        ),
                    'enabled' => true,
                ),
            99 =>
                array(
                    'id' => '9100',
                    'bank_id' => '45',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '235932293',
                        ),
                    'enabled' => true,
                ),
            100 =>
                array(
                    'id' => '9101',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240010076',
                        ),
                    'enabled' => true,
                ),
            101 =>
                array(
                    'id' => '9102',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MONGLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240010942',
                        ),
                    'enabled' => true,
                ),
            102 =>
                array(
                    'id' => '9103',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BANDARBAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240030135',
                        ),
                    'enabled' => true,
                ),
            103 =>
                array(
                    'id' => '9104',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240060284',
                        ),
                    'enabled' => true,
                ),
            104 =>
                array(
                    'id' => '9105',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BOGRA CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240100436',
                        ),
                    'enabled' => true,
                ),
            105 =>
                array(
                    'id' => '9106',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240102742',
                        ),
                    'enabled' => true,
                ),
            106 =>
                array(
                    'id' => '9107',
                    'bank_id' => '46',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240120108',
                        ),
                    'enabled' => true,
                ),
            107 =>
                array(
                    'id' => '9108',
                    'bank_id' => '46',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240130314',
                        ),
                    'enabled' => true,
                ),
            108 =>
                array(
                    'id' => '9109',
                    'bank_id' => '46',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240150136',
                        ),
                    'enabled' => true,
                ),
            109 =>
                array(
                    'id' => '9110',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RADISSON BLU CHITTAGONG BAY VIEW HOTEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240150394',
                        ),
                    'enabled' => true,
                ),
            110 =>
                array(
                    'id' => '9111',
                    'bank_id' => '46',
                    'bank_branch_name' => 'AMIRABAD LOHAGORA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240150415',
                        ),
                    'enabled' => true,
                ),
            111 =>
                array(
                    'id' => '9112',
                    'bank_id' => '46',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240151485',
                        ),
                    'enabled' => true,
                ),
            112 =>
                array(
                    'id' => '9113',
                    'bank_id' => '46',
                    'bank_branch_name' => 'CHITTAGONG KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240151951',
                        ),
                    'enabled' => true,
                ),
            113 =>
                array(
                    'id' => '9114',
                    'bank_id' => '46',
                    'bank_branch_name' => 'CHITTAGONG CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240151993',
                        ),
                    'enabled' => true,
                ),
            114 =>
                array(
                    'id' => '9115',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DEWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240152413',
                        ),
                    'enabled' => true,
                ),
            115 =>
                array(
                    'id' => '9116',
                    'bank_id' => '46',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240153162',
                        ),
                    'enabled' => true,
                ),
            116 =>
                array(
                    'id' => '9117',
                    'bank_id' => '46',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240153641',
                        ),
                    'enabled' => true,
                ),
            117 =>
                array(
                    'id' => '9118',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240154279',
                        ),
                    'enabled' => true,
                ),
            118 =>
                array(
                    'id' => '9119',
                    'bank_id' => '46',
                    'bank_branch_name' => 'NAVAL BASE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240155560',
                        ),
                    'enabled' => true,
                ),
            119 =>
                array(
                    'id' => '9120',
                    'bank_id' => '46',
                    'bank_branch_name' => 'TITAS',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240190183',
                        ),
                    'enabled' => true,
                ),
            120 =>
                array(
                    'id' => '9121',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MALIGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240190262',
                        ),
                    'enabled' => true,
                ),
            121 =>
                array(
                    'id' => '9122',
                    'bank_id' => '46',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240191153',
                        ),
                    'enabled' => true,
                ),
            122 =>
                array(
                    'id' => '9123',
                    'bank_id' => '46',
                    'bank_branch_name' => 'COMILLA CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240191216',
                        ),
                    'enabled' => true,
                ),
            123 =>
                array(
                    'id' => '9124',
                    'bank_id' => '46',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240191429',
                        ),
                    'enabled' => true,
                ),
            124 =>
                array(
                    'id' => '9125',
                    'bank_id' => '46',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240220253',
                        ),
                    'enabled' => true,
                ),
            125 =>
                array(
                    'id' => '9126',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RAMU',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240220853',
                        ),
                    'enabled' => true,
                ),
            126 =>
                array(
                    'id' => '9127',
                    'bank_id' => '46',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240260226',
                        ),
                    'enabled' => true,
                ),
            127 =>
                array(
                    'id' => '9128',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240260439',
                        ),
                    'enabled' => true,
                ),
            128 =>
                array(
                    'id' => '9129',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DHAMRAI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240261159',
                        ),
                    'enabled' => true,
                ),
            129 =>
                array(
                    'id' => '9130',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240261188',
                        ),
                    'enabled' => true,
                ),
            130 =>
                array(
                    'id' => '9131',
                    'bank_id' => '46',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240261333',
                        ),
                    'enabled' => true,
                ),
            131 =>
                array(
                    'id' => '9132',
                    'bank_id' => '46',
                    'bank_branch_name' => 'GULSHAN CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240261812',
                        ),
                    'enabled' => true,
                ),
            132 =>
                array(
                    'id' => '9133',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KAFRUL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240262387',
                        ),
                    'enabled' => true,
                ),
            133 =>
                array(
                    'id' => '9134',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240262532',
                        ),
                    'enabled' => true,
                ),
            134 =>
                array(
                    'id' => '9135',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KHWAJA GARIB NEWAZ AVENUE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240262611',
                        ),
                    'enabled' => true,
                ),
            135 =>
                array(
                    'id' => '9136',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MILLENNIUM CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240262958',
                        ),
                    'enabled' => true,
                ),
            136 =>
                array(
                    'id' => '9137',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240262987',
                        ),
                    'enabled' => true,
                ),
            137 =>
                array(
                    'id' => '9138',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240263199',
                        ),
                    'enabled' => true,
                ),
            138 =>
                array(
                    'id' => '9139',
                    'bank_id' => '46',
                    'bank_branch_name' => 'CENTENNIAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240263281',
                        ),
                    'enabled' => true,
                ),
            139 =>
                array(
                    'id' => '9140',
                    'bank_id' => '46',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240263702',
                        ),
                    'enabled' => true,
                ),
            140 =>
                array(
                    'id' => '9141',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RADISSON WATER GARDEN HOTEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240263799',
                        ),
                    'enabled' => true,
                ),
            141 =>
                array(
                    'id' => '9142',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SAVAR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240264185',
                        ),
                    'enabled' => true,
                ),
            142 =>
                array(
                    'id' => '9143',
                    'bank_id' => '46',
                    'bank_branch_name' => 'UTTARA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240264664',
                        ),
                    'enabled' => true,
                ),
            143 =>
                array(
                    'id' => '9144',
                    'bank_id' => '46',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240270003',
                        ),
                    'enabled' => true,
                ),
            144 =>
                array(
                    'id' => '9145',
                    'bank_id' => '46',
                    'bank_branch_name' => 'TARANAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240270353',
                        ),
                    'enabled' => true,
                ),
            145 =>
                array(
                    'id' => '9146',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DHOLAIKHAL SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240271857',
                        ),
                    'enabled' => true,
                ),
            146 =>
                array(
                    'id' => '9147',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DILKUSHA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240271936',
                        ),
                    'enabled' => true,
                ),
            147 =>
                array(
                    'id' => '9148',
                    'bank_id' => '46',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240273284',
                        ),
                    'enabled' => true,
                ),
            148 =>
                array(
                    'id' => '9149',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KAKRAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240273376',
                        ),
                    'enabled' => true,
                ),
            149 =>
                array(
                    'id' => '9150',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240273642',
                        ),
                    'enabled' => true,
                ),
            150 =>
                array(
                    'id' => '9151',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240274009',
                        ),
                    'enabled' => true,
                ),
            151 =>
                array(
                    'id' => '9152',
                    'bank_id' => '46',
                    'bank_branch_name' => 'PATUATULI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240275237',
                        ),
                    'enabled' => true,
                ),
            152 =>
                array(
                    'id' => '9153',
                    'bank_id' => '46',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240275358',
                        ),
                    'enabled' => true,
                ),
            153 =>
                array(
                    'id' => '9154',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SENA KALYAN BHABAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240276199',
                        ),
                    'enabled' => true,
                ),
            154 =>
                array(
                    'id' => '9155',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BIR UTTAM SHAHEED MAHBUB CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240280064',
                        ),
                    'enabled' => true,
                ),
            155 =>
                array(
                    'id' => '9156',
                    'bank_id' => '46',
                    'bank_branch_name' => 'AULIAPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240280093',
                        ),
                    'enabled' => true,
                ),
            156 =>
                array(
                    'id' => '9157',
                    'bank_id' => '46',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240290520',
                        ),
                    'enabled' => true,
                ),
            157 =>
                array(
                    'id' => '9158',
                    'bank_id' => '46',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240300528',
                        ),
                    'enabled' => true,
                ),
            158 =>
                array(
                    'id' => '9159',
                    'bank_id' => '46',
                    'bank_branch_name' => 'GAZIPUR SENANIBAS',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240330264',
                        ),
                    'enabled' => true,
                ),
            159 =>
                array(
                    'id' => '9160',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MIRERBAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240331050',
                        ),
                    'enabled' => true,
                ),
            160 =>
                array(
                    'id' => '9161',
                    'bank_id' => '46',
                    'bank_branch_name' => 'OYDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240331218',
                        ),
                    'enabled' => true,
                ),
            161 =>
                array(
                    'id' => '9162',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RAJENDRAPUR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240331339',
                        ),
                    'enabled' => true,
                ),
            162 =>
                array(
                    'id' => '9163',
                    'bank_id' => '46',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240331634',
                        ),
                    'enabled' => true,
                ),
            163 =>
                array(
                    'id' => '9164',
                    'bank_id' => '46',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240350378',
                        ),
                    'enabled' => true,
                ),
            164 =>
                array(
                    'id' => '9165',
                    'bank_id' => '46',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240360618',
                        ),
                    'enabled' => true,
                ),
            165 =>
                array(
                    'id' => '9166',
                    'bank_id' => '46',
                    'bank_branch_name' => 'JESSORE CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240411033',
                        ),
                    'enabled' => true,
                ),
            166 =>
                array(
                    'id' => '9167',
                    'bank_id' => '46',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240440646',
                        ),
                    'enabled' => true,
                ),
            167 =>
                array(
                    'id' => '9168',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KHAGRACHARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240460071',
                        ),
                    'enabled' => true,
                ),
            168 =>
                array(
                    'id' => '9169',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240470708',
                        ),
                    'enabled' => true,
                ),
            169 =>
                array(
                    'id' => '9170',
                    'bank_id' => '46',
                    'bank_branch_name' => 'JAHANABAD CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240471057',
                        ),
                    'enabled' => true,
                ),
            170 =>
                array(
                    'id' => '9171',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240471549',
                        ),
                    'enabled' => true,
                ),
            171 =>
                array(
                    'id' => '9172',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BHAIRAB',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240480198',
                        ),
                    'enabled' => true,
                ),
            172 =>
                array(
                    'id' => '9173',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240480677',
                        ),
                    'enabled' => true,
                ),
            173 =>
                array(
                    'id' => '9174',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240500944',
                        ),
                    'enabled' => true,
                ),
            174 =>
                array(
                    'id' => '9175',
                    'bank_id' => '46',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240520461',
                        ),
                    'enabled' => true,
                ),
            175 =>
                array(
                    'id' => '9176',
                    'bank_id' => '46',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240540762',
                        ),
                    'enabled' => true,
                ),
            176 =>
                array(
                    'id' => '9177',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MANIKGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240560621',
                        ),
                    'enabled' => true,
                ),
            177 =>
                array(
                    'id' => '9178',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240581189',
                        ),
                    'enabled' => true,
                ),
            178 =>
                array(
                    'id' => '9179',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240591429',
                        ),
                    'enabled' => true,
                ),
            179 =>
                array(
                    'id' => '9180',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SHAMBHUGONJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240610092',
                        ),
                    'enabled' => true,
                ),
            180 =>
                array(
                    'id' => '9181',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MYMENSINGH CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240611817',
                        ),
                    'enabled' => true,
                ),
            181 =>
                array(
                    'id' => '9182',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KANCHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240670124',
                        ),
                    'enabled' => true,
                ),
            182 =>
                array(
                    'id' => '9183',
                    'bank_id' => '46',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240671181',
                        ),
                    'enabled' => true,
                ),
            183 =>
                array(
                    'id' => '9184',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MADHABDI SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240680680',
                        ),
                    'enabled' => true,
                ),
            184 =>
                array(
                    'id' => '9185',
                    'bank_id' => '46',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240680851',
                        ),
                    'enabled' => true,
                ),
            185 =>
                array(
                    'id' => '9186',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DAYARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240690409',
                        ),
                    'enabled' => true,
                ),
            186 =>
                array(
                    'id' => '9187',
                    'bank_id' => '46',
                    'bank_branch_name' => 'NATORE SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240691116',
                        ),
                    'enabled' => true,
                ),
            187 =>
                array(
                    'id' => '9188',
                    'bank_id' => '46',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240700252',
                        ),
                    'enabled' => true,
                ),
            188 =>
                array(
                    'id' => '9189',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SAYEDPUR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240730822',
                        ),
                    'enabled' => true,
                ),
            189 =>
                array(
                    'id' => '9190',
                    'bank_id' => '46',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240750673',
                        ),
                    'enabled' => true,
                ),
            190 =>
                array(
                    'id' => '9191',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KABIRHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240751214',
                        ),
                    'enabled' => true,
                ),
            191 =>
                array(
                    'id' => '9192',
                    'bank_id' => '46',
                    'bank_branch_name' => 'DASHURIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240760797',
                        ),
                    'enabled' => true,
                ),
            192 =>
                array(
                    'id' => '9193',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240811938',
                        ),
                    'enabled' => true,
                ),
            193 =>
                array(
                    'id' => '9194',
                    'bank_id' => '46',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240820679',
                        ),
                    'enabled' => true,
                ),
            194 =>
                array(
                    'id' => '9195',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240840525',
                        ),
                    'enabled' => true,
                ),
            195 =>
                array(
                    'id' => '9196',
                    'bank_id' => '46',
                    'bank_branch_name' => 'RANGPUR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240851480',
                        ),
                    'enabled' => true,
                ),
            196 =>
                array(
                    'id' => '9197',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SHATIBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240851785',
                        ),
                    'enabled' => true,
                ),
            197 =>
                array(
                    'id' => '9198',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BHEDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240860105',
                        ),
                    'enabled' => true,
                ),
            198 =>
                array(
                    'id' => '9199',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240870874',
                        ),
                    'enabled' => true,
                ),
            199 =>
                array(
                    'id' => '9200',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KHAWJA YUNUS ALI MEDICAL COLLEGE & HOSPITAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240881184',
                        ),
                    'enabled' => true,
                ),
            200 =>
                array(
                    'id' => '9201',
                    'bank_id' => '46',
                    'bank_branch_name' => 'TAMAI SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240882154',
                        ),
                    'enabled' => true,
                ),
            201 =>
                array(
                    'id' => '9202',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240901127',
                        ),
                    'enabled' => true,
                ),
            202 =>
                array(
                    'id' => '9203',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240910318',
                        ),
                    'enabled' => true,
                ),
            203 =>
                array(
                    'id' => '9204',
                    'bank_id' => '46',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240911546',
                        ),
                    'enabled' => true,
                ),
            204 =>
                array(
                    'id' => '9205',
                    'bank_id' => '46',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240911609',
                        ),
                    'enabled' => true,
                ),
            205 =>
                array(
                    'id' => '9206',
                    'bank_id' => '46',
                    'bank_branch_name' => 'JALALABAD CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240911841',
                        ),
                    'enabled' => true,
                ),
            206 =>
                array(
                    'id' => '9207',
                    'bank_id' => '46',
                    'bank_branch_name' => 'KAZIR BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240912158',
                        ),
                    'enabled' => true,
                ),
            207 =>
                array(
                    'id' => '9208',
                    'bank_id' => '46',
                    'bank_branch_name' => 'MADINA MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240912545',
                        ),
                    'enabled' => true,
                ),
            208 =>
                array(
                    'id' => '9209',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SHAHJALAL UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240913252',
                        ),
                    'enabled' => true,
                ),
            209 =>
                array(
                    'id' => '9210',
                    'bank_id' => '46',
                    'bank_branch_name' => 'SYLHET CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240913649',
                        ),
                    'enabled' => true,
                ),
            210 =>
                array(
                    'id' => '9211',
                    'bank_id' => '46',
                    'bank_branch_name' => 'BANGABANDHU BRIDGE SHAHEED SALAHUDDIN CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240930156',
                        ),
                    'enabled' => true,
                ),
            211 =>
                array(
                    'id' => '9212',
                    'bank_id' => '46',
                    'bank_branch_name' => 'GHATAIL CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '240930943',
                        ),
                    'enabled' => true,
                ),
            212 =>
                array(
                    'id' => '9213',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BANDARBAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245030130',
                        ),
                    'enabled' => true,
                ),
            213 =>
                array(
                    'id' => '9214',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245060289',
                        ),
                    'enabled' => true,
                ),
            214 =>
                array(
                    'id' => '9215',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245090109',
                        ),
                    'enabled' => true,
                ),
            215 =>
                array(
                    'id' => '9216',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245100378',
                        ),
                    'enabled' => true,
                ),
            216 =>
                array(
                    'id' => '9217',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BANCHARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245120253',
                        ),
                    'enabled' => true,
                ),
            217 =>
                array(
                    'id' => '9218',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245120437',
                        ),
                    'enabled' => true,
                ),
            218 =>
                array(
                    'id' => '9219',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KASBA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245121036',
                        ),
                    'enabled' => true,
                ),
            219 =>
                array(
                    'id' => '9220',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245130319',
                        ),
                    'enabled' => true,
                ),
            220 =>
                array(
                    'id' => '9221',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ENAYET BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150052',
                        ),
                    'enabled' => true,
                ),
            221 =>
                array(
                    'id' => '9222',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DAMPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150128',
                        ),
                    'enabled' => true,
                ),
            222 =>
                array(
                    'id' => '9223',
                    'bank_id' => '47',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150131',
                        ),
                    'enabled' => true,
                ),
            223 =>
                array(
                    'id' => '9224',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHORPATHARGHATA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150331',
                        ),
                    'enabled' => true,
                ),
            224 =>
                array(
                    'id' => '9225',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150465',
                        ),
                    'enabled' => true,
                ),
            225 =>
                array(
                    'id' => '9226',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ANOWARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150528',
                        ),
                    'enabled' => true,
                ),
            226 =>
                array(
                    'id' => '9227',
                    'bank_id' => '47',
                    'bank_branch_name' => 'OXYGEN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150531',
                        ),
                    'enabled' => true,
                ),
            227 =>
                array(
                    'id' => '9228',
                    'bank_id' => '47',
                    'bank_branch_name' => 'AZADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150731',
                        ),
                    'enabled' => true,
                ),
            228 =>
                array(
                    'id' => '9229',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245150799',
                        ),
                    'enabled' => true,
                ),
            229 =>
                array(
                    'id' => '9230',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BARAIYER HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245151093',
                        ),
                    'enabled' => true,
                ),
            230 =>
                array(
                    'id' => '9231',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BATTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245151172',
                        ),
                    'enabled' => true,
                ),
            231 =>
                array(
                    'id' => '9232',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BHATIARY',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245151219',
                        ),
                    'enabled' => true,
                ),
            232 =>
                array(
                    'id' => '9233',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245151930',
                        ),
                    'enabled' => true,
                ),
            233 =>
                array(
                    'id' => '9234',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHITTAGONG MEDICAL COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245152021',
                        ),
                    'enabled' => true,
                ),
            234 =>
                array(
                    'id' => '9235',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHOWDHURI HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245152171',
                        ),
                    'enabled' => true,
                ),
            235 =>
                array(
                    'id' => '9236',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245152568',
                        ),
                    'enabled' => true,
                ),
            236 =>
                array(
                    'id' => '9237',
                    'bank_id' => '47',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245152742',
                        ),
                    'enabled' => true,
                ),
            237 =>
                array(
                    'id' => '9238',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GOHIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245153017',
                        ),
                    'enabled' => true,
                ),
            238 =>
                array(
                    'id' => '9239',
                    'bank_id' => '47',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245153167',
                        ),
                    'enabled' => true,
                ),
            239 =>
                array(
                    'id' => '9240',
                    'bank_id' => '47',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245153220',
                        ),
                    'enabled' => true,
                ),
            240 =>
                array(
                    'id' => '9241',
                    'bank_id' => '47',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245153646',
                        ),
                    'enabled' => true,
                ),
            241 =>
                array(
                    'id' => '9242',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245153738',
                        ),
                    'enabled' => true,
                ),
            242 =>
                array(
                    'id' => '9243',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KAMAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245153970',
                        ),
                    'enabled' => true,
                ),
            243 =>
                array(
                    'id' => '9244',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KATGHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245154090',
                        ),
                    'enabled' => true,
                ),
            244 =>
                array(
                    'id' => '9245',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245154274',
                        ),
                    'enabled' => true,
                ),
            245 =>
                array(
                    'id' => '9246',
                    'bank_id' => '47',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245154661',
                        ),
                    'enabled' => true,
                ),
            246 =>
                array(
                    'id' => '9247',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MADHUNA GHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245154753',
                        ),
                    'enabled' => true,
                ),
            247 =>
                array(
                    'id' => '9248',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245155323',
                        ),
                    'enabled' => true,
                ),
            248 =>
                array(
                    'id' => '9249',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NAZIR HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245155594',
                        ),
                    'enabled' => true,
                ),
            249 =>
                array(
                    'id' => '9250',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245155710',
                        ),
                    'enabled' => true,
                ),
            250 =>
                array(
                    'id' => '9251',
                    'bank_id' => '47',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245155802',
                        ),
                    'enabled' => true,
                ),
            251 =>
                array(
                    'id' => '9252',
                    'bank_id' => '47',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245155923',
                        ),
                    'enabled' => true,
                ),
            252 =>
                array(
                    'id' => '9253',
                    'bank_id' => '47',
                    'bank_branch_name' => 'PORT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245156227',
                        ),
                    'enabled' => true,
                ),
            253 =>
                array(
                    'id' => '9254',
                    'bank_id' => '47',
                    'bank_branch_name' => 'RANGUNIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245156401',
                        ),
                    'enabled' => true,
                ),
            254 =>
                array(
                    'id' => '9255',
                    'bank_id' => '47',
                    'bank_branch_name' => 'RAOZAN SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245156498',
                        ),
                    'enabled' => true,
                ),
            255 =>
                array(
                    'id' => '9256',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245156735',
                        ),
                    'enabled' => true,
                ),
            256 =>
                array(
                    'id' => '9257',
                    'bank_id' => '47',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245157518',
                        ),
                    'enabled' => true,
                ),
            257 =>
                array(
                    'id' => '9258',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245180198',
                        ),
                    'enabled' => true,
                ),
            258 =>
                array(
                    'id' => '9259',
                    'bank_id' => '47',
                    'bank_branch_name' => 'JHAWTALA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245190159',
                        ),
                    'enabled' => true,
                ),
            259 =>
                array(
                    'id' => '9260',
                    'bank_id' => '47',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245191158',
                        ),
                    'enabled' => true,
                ),
            260 =>
                array(
                    'id' => '9261',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245220166',
                        ),
                    'enabled' => true,
                ),
            261 =>
                array(
                    'id' => '9262',
                    'bank_id' => '47',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245220258',
                        ),
                    'enabled' => true,
                ),
            262 =>
                array(
                    'id' => '9263',
                    'bank_id' => '47',
                    'bank_branch_name' => 'EIDGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245220403',
                        ),
                    'enabled' => true,
                ),
            263 =>
                array(
                    'id' => '9264',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NIKUNJA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260184',
                        ),
                    'enabled' => true,
                ),
            264 =>
                array(
                    'id' => '9265',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260434',
                        ),
                    'enabled' => true,
                ),
            265 =>
                array(
                    'id' => '9266',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SONARGAON AVENUE MOHILA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260450',
                        ),
                    'enabled' => true,
                ),
            266 =>
                array(
                    'id' => '9267',
                    'bank_id' => '47',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260500',
                        ),
                    'enabled' => true,
                ),
            267 =>
                array(
                    'id' => '9268',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260555',
                        ),
                    'enabled' => true,
                ),
            268 =>
                array(
                    'id' => '9269',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260726',
                        ),
                    'enabled' => true,
                ),
            269 =>
                array(
                    'id' => '9270',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KHILKHET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260742',
                        ),
                    'enabled' => true,
                ),
            270 =>
                array(
                    'id' => '9271',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260913',
                        ),
                    'enabled' => true,
                ),
            271 =>
                array(
                    'id' => '9272',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DARUS-SALAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245260942',
                        ),
                    'enabled' => true,
                ),
            272 =>
                array(
                    'id' => '9273',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245261183',
                        ),
                    'enabled' => true,
                ),
            273 =>
                array(
                    'id' => '9274',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245261338',
                        ),
                    'enabled' => true,
                ),
            274 =>
                array(
                    'id' => '9275',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ESKATON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245261396',
                        ),
                    'enabled' => true,
                ),
            275 =>
                array(
                    'id' => '9276',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245261512',
                        ),
                    'enabled' => true,
                ),
            276 =>
                array(
                    'id' => '9277',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245261725',
                        ),
                    'enabled' => true,
                ),
            277 =>
                array(
                    'id' => '9278',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GULSHAN AVENUE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245261738',
                        ),
                    'enabled' => true,
                ),
            278 =>
                array(
                    'id' => '9279',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245262537',
                        ),
                    'enabled' => true,
                ),
            279 =>
                array(
                    'id' => '9280',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245262982',
                        ),
                    'enabled' => true,
                ),
            280 =>
                array(
                    'id' => '9281',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MIRPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245263073',
                        ),
                    'enabled' => true,
                ),
            281 =>
                array(
                    'id' => '9282',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245263194',
                        ),
                    'enabled' => true,
                ),
            282 =>
                array(
                    'id' => '9283',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245263286',
                        ),
                    'enabled' => true,
                ),
            283 =>
                array(
                    'id' => '9284',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245263415',
                        ),
                    'enabled' => true,
                ),
            284 =>
                array(
                    'id' => '9285',
                    'bank_id' => '47',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245263707',
                        ),
                    'enabled' => true,
                ),
            285 =>
                array(
                    'id' => '9286',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SATARKUL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245264027',
                        ),
                    'enabled' => true,
                ),
            286 =>
                array(
                    'id' => '9287',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245264098',
                        ),
                    'enabled' => true,
                ),
            287 =>
                array(
                    'id' => '9288',
                    'bank_id' => '47',
                    'bank_branch_name' => 'TEJGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245264485',
                        ),
                    'enabled' => true,
                ),
            288 =>
                array(
                    'id' => '9289',
                    'bank_id' => '47',
                    'bank_branch_name' => 'UTTAR KHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245264601',
                        ),
                    'enabled' => true,
                ),
            289 =>
                array(
                    'id' => '9290',
                    'bank_id' => '47',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245264630',
                        ),
                    'enabled' => true,
                ),
            290 =>
                array(
                    'id' => '9291',
                    'bank_id' => '47',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245270008',
                        ),
                    'enabled' => true,
                ),
            291 =>
                array(
                    'id' => '9292',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SARULIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245270082',
                        ),
                    'enabled' => true,
                ),
            292 =>
                array(
                    'id' => '9293',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245270882',
                        ),
                    'enabled' => true,
                ),
            293 =>
                array(
                    'id' => '9294',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BIJOY NAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245271094',
                        ),
                    'enabled' => true,
                ),
            294 =>
                array(
                    'id' => '9295',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245271423',
                        ),
                    'enabled' => true,
                ),
            295 =>
                array(
                    'id' => '9296',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245271902',
                        ),
                    'enabled' => true,
                ),
            296 =>
                array(
                    'id' => '9297',
                    'bank_id' => '47',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245272327',
                        ),
                    'enabled' => true,
                ),
            297 =>
                array(
                    'id' => '9298',
                    'bank_id' => '47',
                    'bank_branch_name' => 'HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245272569',
                        ),
                    'enabled' => true,
                ),
            298 =>
                array(
                    'id' => '9299',
                    'bank_id' => '47',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245272680',
                        ),
                    'enabled' => true,
                ),
            299 =>
                array(
                    'id' => '9300',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245272985',
                        ),
                    'enabled' => true,
                ),
            300 =>
                array(
                    'id' => '9301',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KAMRANGIRCHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245273584',
                        ),
                    'enabled' => true,
                ),
            301 =>
                array(
                    'id' => '9302',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245273647',
                        ),
                    'enabled' => true,
                ),
            302 =>
                array(
                    'id' => '9303',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KHILGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245273676',
                        ),
                    'enabled' => true,
                ),
            303 =>
                array(
                    'id' => '9304',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245273942',
                        ),
                    'enabled' => true,
                ),
            304 =>
                array(
                    'id' => '9305',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245274004',
                        ),
                    'enabled' => true,
                ),
            305 =>
                array(
                    'id' => '9306',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245274420',
                        ),
                    'enabled' => true,
                ),
            306 =>
                array(
                    'id' => '9307',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245274725',
                        ),
                    'enabled' => true,
                ),
            307 =>
                array(
                    'id' => '9308',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245274817',
                        ),
                    'enabled' => true,
                ),
            308 =>
                array(
                    'id' => '9309',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NORTH BROOK HALL ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245275058',
                        ),
                    'enabled' => true,
                ),
            309 =>
                array(
                    'id' => '9310',
                    'bank_id' => '47',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245275353',
                        ),
                    'enabled' => true,
                ),
            310 =>
                array(
                    'id' => '9311',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SONARGAON JANAPATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245276581',
                        ),
                    'enabled' => true,
                ),
            311 =>
                array(
                    'id' => '9312',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245277098',
                        ),
                    'enabled' => true,
                ),
            312 =>
                array(
                    'id' => '9313',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245280672',
                        ),
                    'enabled' => true,
                ),
            313 =>
                array(
                    'id' => '9314',
                    'bank_id' => '47',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245290525',
                        ),
                    'enabled' => true,
                ),
            314 =>
                array(
                    'id' => '9315',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SATOIRE BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245290554',
                        ),
                    'enabled' => true,
                ),
            315 =>
                array(
                    'id' => '9316',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KANAIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245290912',
                        ),
                    'enabled' => true,
                ),
            316 =>
                array(
                    'id' => '9317',
                    'bank_id' => '47',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245300523',
                        ),
                    'enabled' => true,
                ),
            317 =>
                array(
                    'id' => '9318',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BHAWAL MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245330243',
                        ),
                    'enabled' => true,
                ),
            318 =>
                array(
                    'id' => '9319',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245330551',
                        ),
                    'enabled' => true,
                ),
            319 =>
                array(
                    'id' => '9320',
                    'bank_id' => '47',
                    'bank_branch_name' => 'JOYDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245330735',
                        ),
                    'enabled' => true,
                ),
            320 =>
                array(
                    'id' => '9321',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245330827',
                        ),
                    'enabled' => true,
                ),
            321 =>
                array(
                    'id' => '9322',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245330885',
                        ),
                    'enabled' => true,
                ),
            322 =>
                array(
                    'id' => '9323',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245330948',
                        ),
                    'enabled' => true,
                ),
            323 =>
                array(
                    'id' => '9324',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MAUNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245331118',
                        ),
                    'enabled' => true,
                ),
            324 =>
                array(
                    'id' => '9325',
                    'bank_id' => '47',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245331639',
                        ),
                    'enabled' => true,
                ),
            325 =>
                array(
                    'id' => '9326',
                    'bank_id' => '47',
                    'bank_branch_name' => 'TONGI STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245331671',
                        ),
                    'enabled' => true,
                ),
            326 =>
                array(
                    'id' => '9327',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245350373',
                        ),
                    'enabled' => true,
                ),
            327 =>
                array(
                    'id' => '9328',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245361096',
                        ),
                    'enabled' => true,
                ),
            328 =>
                array(
                    'id' => '9329',
                    'bank_id' => '47',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245380406',
                        ),
                    'enabled' => true,
                ),
            329 =>
                array(
                    'id' => '9330',
                    'bank_id' => '47',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245410947',
                        ),
                    'enabled' => true,
                ),
            330 =>
                array(
                    'id' => '9331',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NOAPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245411667',
                        ),
                    'enabled' => true,
                ),
            331 =>
                array(
                    'id' => '9332',
                    'bank_id' => '47',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245440641',
                        ),
                    'enabled' => true,
                ),
            332 =>
                array(
                    'id' => '9333',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KHAN JAHAN ALI ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245471481',
                        ),
                    'enabled' => true,
                ),
            333 =>
                array(
                    'id' => '9334',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245471544',
                        ),
                    'enabled' => true,
                ),
            334 =>
                array(
                    'id' => '9335',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245500949',
                        ),
                    'enabled' => true,
                ),
            335 =>
                array(
                    'id' => '9336',
                    'bank_id' => '47',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245510739',
                        ),
                    'enabled' => true,
                ),
            336 =>
                array(
                    'id' => '9337',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SHIBCHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245540709',
                        ),
                    'enabled' => true,
                ),
            337 =>
                array(
                    'id' => '9338',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BARALEKHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245580101',
                        ),
                    'enabled' => true,
                ),
            338 =>
                array(
                    'id' => '9339',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245580943',
                        ),
                    'enabled' => true,
                ),
            339 =>
                array(
                    'id' => '9340',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245581184',
                        ),
                    'enabled' => true,
                ),
            340 =>
                array(
                    'id' => '9341',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BALASUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245590083',
                        ),
                    'enabled' => true,
                ),
            341 =>
                array(
                    'id' => '9342',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245591037',
                        ),
                    'enabled' => true,
                ),
            342 =>
                array(
                    'id' => '9343',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245611759',
                        ),
                    'enabled' => true,
                ),
            343 =>
                array(
                    'id' => '9344',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245641187',
                        ),
                    'enabled' => true,
                ),
            344 =>
                array(
                    'id' => '9345',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KANCHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245670129',
                        ),
                    'enabled' => true,
                ),
            345 =>
                array(
                    'id' => '9346',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245670224',
                        ),
                    'enabled' => true,
                ),
            346 =>
                array(
                    'id' => '9347',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHASHARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245670237',
                        ),
                    'enabled' => true,
                ),
            347 =>
                array(
                    'id' => '9348',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GOPALDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245670608',
                        ),
                    'enabled' => true,
                ),
            348 =>
                array(
                    'id' => '9349',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KANCHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245670790',
                        ),
                    'enabled' => true,
                ),
            349 =>
                array(
                    'id' => '9350',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MEGHNAGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245671007',
                        ),
                    'enabled' => true,
                ),
            350 =>
                array(
                    'id' => '9351',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245671186',
                        ),
                    'enabled' => true,
                ),
            351 =>
                array(
                    'id' => '9352',
                    'bank_id' => '47',
                    'bank_branch_name' => 'PAGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245671331',
                        ),
                    'enabled' => true,
                ),
            352 =>
                array(
                    'id' => '9353',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHINISHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245680085',
                        ),
                    'enabled' => true,
                ),
            353 =>
                array(
                    'id' => '9354',
                    'bank_id' => '47',
                    'bank_branch_name' => 'DANGA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245680201',
                        ),
                    'enabled' => true,
                ),
            354 =>
                array(
                    'id' => '9355',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245680672',
                        ),
                    'enabled' => true,
                ),
            355 =>
                array(
                    'id' => '9356',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245680856',
                        ),
                    'enabled' => true,
                ),
            356 =>
                array(
                    'id' => '9357',
                    'bank_id' => '47',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245691090',
                        ),
                    'enabled' => true,
                ),
            357 =>
                array(
                    'id' => '9358',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245700257',
                        ),
                    'enabled' => true,
                ),
            358 =>
                array(
                    'id' => '9359',
                    'bank_id' => '47',
                    'bank_branch_name' => 'KAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245750115',
                        ),
                    'enabled' => true,
                ),
            359 =>
                array(
                    'id' => '9360',
                    'bank_id' => '47',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245750678',
                        ),
                    'enabled' => true,
                ),
            360 =>
                array(
                    'id' => '9361',
                    'bank_id' => '47',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245751572',
                        ),
                    'enabled' => true,
                ),
            361 =>
                array(
                    'id' => '9362',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245752234',
                        ),
                    'enabled' => true,
                ),
            362 =>
                array(
                    'id' => '9363',
                    'bank_id' => '47',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245761788',
                        ),
                    'enabled' => true,
                ),
            363 =>
                array(
                    'id' => '9364',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BANESHWAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245810226',
                        ),
                    'enabled' => true,
                ),
            364 =>
                array(
                    'id' => '9365',
                    'bank_id' => '47',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245811933',
                        ),
                    'enabled' => true,
                ),
            365 =>
                array(
                    'id' => '9366',
                    'bank_id' => '47',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245820737',
                        ),
                    'enabled' => true,
                ),
            366 =>
                array(
                    'id' => '9367',
                    'bank_id' => '47',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245851456',
                        ),
                    'enabled' => true,
                ),
            367 =>
                array(
                    'id' => '9368',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BARAKANDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245860089',
                        ),
                    'enabled' => true,
                ),
            368 =>
                array(
                    'id' => '9369',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ENAYETPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245880827',
                        ),
                    'enabled' => true,
                ),
            369 =>
                array(
                    'id' => '9370',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245881871',
                        ),
                    'enabled' => true,
                ),
            370 =>
                array(
                    'id' => '9371',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ULLAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245882238',
                        ),
                    'enabled' => true,
                ),
            371 =>
                array(
                    'id' => '9372',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245890554',
                        ),
                    'enabled' => true,
                ),
            372 =>
                array(
                    'id' => '9373',
                    'bank_id' => '47',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245910047',
                        ),
                    'enabled' => true,
                ),
            373 =>
                array(
                    'id' => '9374',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245910313',
                        ),
                    'enabled' => true,
                ),
            374 =>
                array(
                    'id' => '9375',
                    'bank_id' => '47',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245910434',
                        ),
                    'enabled' => true,
                ),
            375 =>
                array(
                    'id' => '9376',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245911541',
                        ),
                    'enabled' => true,
                ),
            376 =>
                array(
                    'id' => '9377',
                    'bank_id' => '47',
                    'bank_branch_name' => 'LAMABAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245912511',
                        ),
                    'enabled' => true,
                ),
            377 =>
                array(
                    'id' => '9378',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SHAHJALAL UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245913257',
                        ),
                    'enabled' => true,
                ),
            378 =>
                array(
                    'id' => '9379',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245913310',
                        ),
                    'enabled' => true,
                ),
            379 =>
                array(
                    'id' => '9380',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245913402',
                        ),
                    'enabled' => true,
                ),
            380 =>
                array(
                    'id' => '9381',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SUBID BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245913499',
                        ),
                    'enabled' => true,
                ),
            381 =>
                array(
                    'id' => '9382',
                    'bank_id' => '47',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245913552',
                        ),
                    'enabled' => true,
                ),
            382 =>
                array(
                    'id' => '9383',
                    'bank_id' => '47',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245914151',
                        ),
                    'enabled' => true,
                ),
            383 =>
                array(
                    'id' => '9384',
                    'bank_id' => '47',
                    'bank_branch_name' => 'GHATAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245930919',
                        ),
                    'enabled' => true,
                ),
            384 =>
                array(
                    'id' => '9385',
                    'bank_id' => '47',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '245932296',
                        ),
                    'enabled' => true,
                ),
            385 =>
                array(
                    'id' => '9386',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250010079',
                        ),
                    'enabled' => true,
                ),
            386 =>
                array(
                    'id' => '9387',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MONGLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250010945',
                        ),
                    'enabled' => true,
                ),
            387 =>
                array(
                    'id' => '9388',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BARGUNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250040131',
                        ),
                    'enabled' => true,
                ),
            388 =>
                array(
                    'id' => '9389',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250060287',
                        ),
                    'enabled' => true,
                ),
            389 =>
                array(
                    'id' => '9390',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250060708',
                        ),
                    'enabled' => true,
                ),
            390 =>
                array(
                    'id' => '9391',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250090107',
                        ),
                    'enabled' => true,
                ),
            391 =>
                array(
                    'id' => '9392',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHAR FASHION',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250090228',
                        ),
                    'enabled' => true,
                ),
            392 =>
                array(
                    'id' => '9393',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DAULATKHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250090378',
                        ),
                    'enabled' => true,
                ),
            393 =>
                array(
                    'id' => '9394',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LALMOHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250090707',
                        ),
                    'enabled' => true,
                ),
            394 =>
                array(
                    'id' => '9395',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TAZUMUDDIN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250091001',
                        ),
                    'enabled' => true,
                ),
            395 =>
                array(
                    'id' => '9396',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250100376',
                        ),
                    'enabled' => true,
                ),
            396 =>
                array(
                    'id' => '9397',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250120435',
                        ),
                    'enabled' => true,
                ),
            397 =>
                array(
                    'id' => '9398',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DHARKHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250120730',
                        ),
                    'enabled' => true,
                ),
            398 =>
                array(
                    'id' => '9399',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GOPINATHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250120822',
                        ),
                    'enabled' => true,
                ),
            399 =>
                array(
                    'id' => '9400',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250130317',
                        ),
                    'enabled' => true,
                ),
            400 =>
                array(
                    'id' => '9401',
                    'bank_id' => '48',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250150139',
                        ),
                    'enabled' => true,
                ),
            401 =>
                array(
                    'id' => '9402',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BARAIYER HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250150292',
                        ),
                    'enabled' => true,
                ),
            402 =>
                array(
                    'id' => '9403',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BANDARTILA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250150942',
                        ),
                    'enabled' => true,
                ),
            403 =>
                array(
                    'id' => '9404',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHAKTAI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250151754',
                        ),
                    'enabled' => true,
                ),
            404 =>
                array(
                    'id' => '9405',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250151938',
                        ),
                    'enabled' => true,
                ),
            405 =>
                array(
                    'id' => '9406',
                    'bank_id' => '48',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250153165',
                        ),
                    'enabled' => true,
                ),
            406 =>
                array(
                    'id' => '9407',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250153644',
                        ),
                    'enabled' => true,
                ),
            407 =>
                array(
                    'id' => '9408',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KATGHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250154098',
                        ),
                    'enabled' => true,
                ),
            408 =>
                array(
                    'id' => '9409',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250154272',
                        ),
                    'enabled' => true,
                ),
            409 =>
                array(
                    'id' => '9410',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LALDIGHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250154519',
                        ),
                    'enabled' => true,
                ),
            410 =>
                array(
                    'id' => '9411',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LALKHAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250154577',
                        ),
                    'enabled' => true,
                ),
            411 =>
                array(
                    'id' => '9412',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250154669',
                        ),
                    'enabled' => true,
                ),
            412 =>
                array(
                    'id' => '9413',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NASIRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250155534',
                        ),
                    'enabled' => true,
                ),
            413 =>
                array(
                    'id' => '9414',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250156162',
                        ),
                    'enabled' => true,
                ),
            414 =>
                array(
                    'id' => '9415',
                    'bank_id' => '48',
                    'bank_branch_name' => 'REAZUDDIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250156520',
                        ),
                    'enabled' => true,
                ),
            415 =>
                array(
                    'id' => '9416',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250156733',
                        ),
                    'enabled' => true,
                ),
            416 =>
                array(
                    'id' => '9417',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SANDWIP',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250156917',
                        ),
                    'enabled' => true,
                ),
            417 =>
                array(
                    'id' => '9418',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SITAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250157390',
                        ),
                    'enabled' => true,
                ),
            418 =>
                array(
                    'id' => '9419',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SK. MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250157424',
                        ),
                    'enabled' => true,
                ),
            419 =>
                array(
                    'id' => '9420',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SAROJGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250180059',
                        ),
                    'enabled' => true,
                ),
            420 =>
                array(
                    'id' => '9421',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250180196',
                        ),
                    'enabled' => true,
                ),
            421 =>
                array(
                    'id' => '9422',
                    'bank_id' => '48',
                    'bank_branch_name' => 'B.G.S.L.',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250190223',
                        ),
                    'enabled' => true,
                ),
            422 =>
                array(
                    'id' => '9423',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHANDINA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250190881',
                        ),
                    'enabled' => true,
                ),
            423 =>
                array(
                    'id' => '9424',
                    'bank_id' => '48',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250191156',
                        ),
                    'enabled' => true,
                ),
            424 =>
                array(
                    'id' => '9425',
                    'bank_id' => '48',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250191422',
                        ),
                    'enabled' => true,
                ),
            425 =>
                array(
                    'id' => '9426',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MUDAFARGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250193138',
                        ),
                    'enabled' => true,
                ),
            426 =>
                array(
                    'id' => '9427',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RAJGONJ ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250193617',
                        ),
                    'enabled' => true,
                ),
            427 =>
                array(
                    'id' => '9428',
                    'bank_id' => '48',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250220256',
                        ),
                    'enabled' => true,
                ),
            428 =>
                array(
                    'id' => '9429',
                    'bank_id' => '48',
                    'bank_branch_name' => 'AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250260137',
                        ),
                    'enabled' => true,
                ),
            429 =>
                array(
                    'id' => '9430',
                    'bank_id' => '48',
                    'bank_branch_name' => 'AWLAD HOSSAIN MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250260287',
                        ),
                    'enabled' => true,
                ),
            430 =>
                array(
                    'id' => '9431',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BADDA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250260340',
                        ),
                    'enabled' => true,
                ),
            431 =>
                array(
                    'id' => '9432',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250260724',
                        ),
                    'enabled' => true,
                ),
            432 =>
                array(
                    'id' => '9433',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DARUS-SALAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250260940',
                        ),
                    'enabled' => true,
                ),
            433 =>
                array(
                    'id' => '9434',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DHAKA EPZ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250261099',
                        ),
                    'enabled' => true,
                ),
            434 =>
                array(
                    'id' => '9435',
                    'bank_id' => '48',
                    'bank_branch_name' => 'EASTERN PLAZA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250261307',
                        ),
                    'enabled' => true,
                ),
            435 =>
                array(
                    'id' => '9436',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250261336',
                        ),
                    'enabled' => true,
                ),
            436 =>
                array(
                    'id' => '9437',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GREEN ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250261699',
                        ),
                    'enabled' => true,
                ),
            437 =>
                array(
                    'id' => '9438',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250261723',
                        ),
                    'enabled' => true,
                ),
            438 =>
                array(
                    'id' => '9439',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KALABAGAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250262414',
                        ),
                    'enabled' => true,
                ),
            439 =>
                array(
                    'id' => '9440',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250262535',
                        ),
                    'enabled' => true,
                ),
            440 =>
                array(
                    'id' => '9441',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250262980',
                        ),
                    'enabled' => true,
                ),
            441 =>
                array(
                    'id' => '9442',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250263192',
                        ),
                    'enabled' => true,
                ),
            442 =>
                array(
                    'id' => '9443',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250263284',
                        ),
                    'enabled' => true,
                ),
            443 =>
                array(
                    'id' => '9444',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250263521',
                        ),
                    'enabled' => true,
                ),
            444 =>
                array(
                    'id' => '9445',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250263589',
                        ),
                    'enabled' => true,
                ),
            445 =>
                array(
                    'id' => '9446',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250263613',
                        ),
                    'enabled' => true,
                ),
            446 =>
                array(
                    'id' => '9447',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ROKEYA SHARANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250264009',
                        ),
                    'enabled' => true,
                ),
            447 =>
                array(
                    'id' => '9448',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250264038',
                        ),
                    'enabled' => true,
                ),
            448 =>
                array(
                    'id' => '9449',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250264096',
                        ),
                    'enabled' => true,
                ),
            449 =>
                array(
                    'id' => '9450',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250264304',
                        ),
                    'enabled' => true,
                ),
            450 =>
                array(
                    'id' => '9451',
                    'bank_id' => '48',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250264638',
                        ),
                    'enabled' => true,
                ),
            451 =>
                array(
                    'id' => '9452',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270006',
                        ),
                    'enabled' => true,
                ),
            452 =>
                array(
                    'id' => '9453',
                    'bank_id' => '48',
                    'bank_branch_name' => 'AZIMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270372',
                        ),
                    'enabled' => true,
                ),
            453 =>
                array(
                    'id' => '9454',
                    'bank_id' => '48',
                    'bank_branch_name' => 'B.B. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270435',
                        ),
                    'enabled' => true,
                ),
            454 =>
                array(
                    'id' => '9455',
                    'bank_id' => '48',
                    'bank_branch_name' => 'B.K.S.P.',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270493',
                        ),
                    'enabled' => true,
                ),
            455 =>
                array(
                    'id' => '9456',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BABU BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270556',
                        ),
                    'enabled' => true,
                ),
            456 =>
                array(
                    'id' => '9457',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BANGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270822',
                        ),
                    'enabled' => true,
                ),
            457 =>
                array(
                    'id' => '9458',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BANIJYA SHAKHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250270914',
                        ),
                    'enabled' => true,
                ),
            458 =>
                array(
                    'id' => '9459',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250271276',
                        ),
                    'enabled' => true,
                ),
            459 =>
                array(
                    'id' => '9460',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250271397',
                        ),
                    'enabled' => true,
                ),
            460 =>
                array(
                    'id' => '9461',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250271421',
                        ),
                    'enabled' => true,
                ),
            461 =>
                array(
                    'id' => '9462',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DHAKA SHERATON HOTEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250271634',
                        ),
                    'enabled' => true,
                ),
            462 =>
                array(
                    'id' => '9463',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DHOLAIKHAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250271847',
                        ),
                    'enabled' => true,
                ),
            463 =>
                array(
                    'id' => '9464',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250271900',
                        ),
                    'enabled' => true,
                ),
            464 =>
                array(
                    'id' => '9465',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ENGLISH ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272141',
                        ),
                    'enabled' => true,
                ),
            465 =>
                array(
                    'id' => '9466',
                    'bank_id' => '48',
                    'bank_branch_name' => 'FAKIRAPOOL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272170',
                        ),
                    'enabled' => true,
                ),
            466 =>
                array(
                    'id' => '9467',
                    'bank_id' => '48',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272325',
                        ),
                    'enabled' => true,
                ),
            467 =>
                array(
                    'id' => '9468',
                    'bank_id' => '48',
                    'bank_branch_name' => 'FULBARIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272383',
                        ),
                    'enabled' => true,
                ),
            468 =>
                array(
                    'id' => '9469',
                    'bank_id' => '48',
                    'bank_branch_name' => 'HATKHOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272596',
                        ),
                    'enabled' => true,
                ),
            469 =>
                array(
                    'id' => '9470',
                    'bank_id' => '48',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272688',
                        ),
                    'enabled' => true,
                ),
            470 =>
                array(
                    'id' => '9471',
                    'bank_id' => '48',
                    'bank_branch_name' => 'HOTEL ISHAKHAN INTERNATIONAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272712',
                        ),
                    'enabled' => true,
                ),
            471 =>
                array(
                    'id' => '9472',
                    'bank_id' => '48',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272804',
                        ),
                    'enabled' => true,
                ),
            472 =>
                array(
                    'id' => '9473',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250272983',
                        ),
                    'enabled' => true,
                ),
            473 =>
                array(
                    'id' => '9474',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JATRABARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250273229',
                        ),
                    'enabled' => true,
                ),
            474 =>
                array(
                    'id' => '9475',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JOHNSON ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250273258',
                        ),
                    'enabled' => true,
                ),
            475 =>
                array(
                    'id' => '9476',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LADIES',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250273795',
                        ),
                    'enabled' => true,
                ),
            476 =>
                array(
                    'id' => '9477',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LOCAL OFFICE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250273887',
                        ),
                    'enabled' => true,
                ),
            477 =>
                array(
                    'id' => '9478',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MALIBAGH CHOWDHURYPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250273979',
                        ),
                    'enabled' => true,
                ),
            478 =>
                array(
                    'id' => '9479',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MITFORD ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274123',
                        ),
                    'enabled' => true,
                ),
            479 =>
                array(
                    'id' => '9480',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274181',
                        ),
                    'enabled' => true,
                ),
            480 =>
                array(
                    'id' => '9481',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274428',
                        ),
                    'enabled' => true,
                ),
            481 =>
                array(
                    'id' => '9482',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MUGDA PARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274457',
                        ),
                    'enabled' => true,
                ),
            482 =>
                array(
                    'id' => '9483',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274699',
                        ),
                    'enabled' => true,
                ),
            483 =>
                array(
                    'id' => '9484',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274723',
                        ),
                    'enabled' => true,
                ),
            484 =>
                array(
                    'id' => '9485',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250274815',
                        ),
                    'enabled' => true,
                ),
            485 =>
                array(
                    'id' => '9486',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NORTH SHAHJAHANPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250275085',
                        ),
                    'enabled' => true,
                ),
            486 =>
                array(
                    'id' => '9487',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PEEL KHANA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250275269',
                        ),
                    'enabled' => true,
                ),
            487 =>
                array(
                    'id' => '9488',
                    'bank_id' => '48',
                    'bank_branch_name' => 'POSTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250275298',
                        ),
                    'enabled' => true,
                ),
            488 =>
                array(
                    'id' => '9489',
                    'bank_id' => '48',
                    'bank_branch_name' => 'POSTAGOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250275322',
                        ),
                    'enabled' => true,
                ),
            489 =>
                array(
                    'id' => '9490',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RAMNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250275685',
                        ),
                    'enabled' => true,
                ),
            490 =>
                array(
                    'id' => '9491',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250275922',
                        ),
                    'enabled' => true,
                ),
            491 =>
                array(
                    'id' => '9492',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250276347',
                        ),
                    'enabled' => true,
                ),
            492 =>
                array(
                    'id' => '9493',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SIDDHESWARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250276550',
                        ),
                    'enabled' => true,
                ),
            493 =>
                array(
                    'id' => '9494',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TIPU SULTAN ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250276705',
                        ),
                    'enabled' => true,
                ),
            494 =>
                array(
                    'id' => '9495',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250280670',
                        ),
                    'enabled' => true,
                ),
            495 =>
                array(
                    'id' => '9496',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PHULBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250281879',
                        ),
                    'enabled' => true,
                ),
            496 =>
                array(
                    'id' => '9497',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PULHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250281932',
                        ),
                    'enabled' => true,
                ),
            497 =>
                array(
                    'id' => '9498',
                    'bank_id' => '48',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250282328',
                        ),
                    'enabled' => true,
                ),
            498 =>
                array(
                    'id' => '9499',
                    'bank_id' => '48',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250290523',
                        ),
                    'enabled' => true,
                ),
            499 =>
                array(
                    'id' => '9500',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BIRINCHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250300255',
                        ),
                    'enabled' => true,
                ),
            500 =>
                array(
                    'id' => '9501',
                    'bank_id' => '48',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250300521',
                        ),
                    'enabled' => true,
                ),
            501 =>
                array(
                    'id' => '9502',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GAIBANDHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250320527',
                        ),
                    'enabled' => true,
                ),
            502 =>
                array(
                    'id' => '9503',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GAZIPURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250330238',
                        ),
                    'enabled' => true,
                ),
            503 =>
                array(
                    'id' => '9504',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JOYDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250330733',
                        ),
                    'enabled' => true,
                ),
            504 =>
                array(
                    'id' => '9505',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250330946',
                        ),
                    'enabled' => true,
                ),
            505 =>
                array(
                    'id' => '9506',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250331637',
                        ),
                    'enabled' => true,
                ),
            506 =>
                array(
                    'id' => '9507',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250350371',
                        ),
                    'enabled' => true,
                ),
            507 =>
                array(
                    'id' => '9508',
                    'bank_id' => '48',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250360611',
                        ),
                    'enabled' => true,
                ),
            508 =>
                array(
                    'id' => '9509',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MIRPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250361007',
                        ),
                    'enabled' => true,
                ),
            509 =>
                array(
                    'id' => '9510',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250361094',
                        ),
                    'enabled' => true,
                ),
            510 =>
                array(
                    'id' => '9511',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250380404',
                        ),
                    'enabled' => true,
                ),
            511 =>
                array(
                    'id' => '9512',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250390852',
                        ),
                    'enabled' => true,
                ),
            512 =>
                array(
                    'id' => '9513',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250410945',
                        ),
                    'enabled' => true,
                ),
            513 =>
                array(
                    'id' => '9514',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250411636',
                        ),
                    'enabled' => true,
                ),
            514 =>
                array(
                    'id' => '9515',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JHALOKATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250420319',
                        ),
                    'enabled' => true,
                ),
            515 =>
                array(
                    'id' => '9516',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250440649',
                        ),
                    'enabled' => true,
                ),
            516 =>
                array(
                    'id' => '9517',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250470701',
                        ),
                    'enabled' => true,
                ),
            517 =>
                array(
                    'id' => '9518',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KDA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250471397',
                        ),
                    'enabled' => true,
                ),
            518 =>
                array(
                    'id' => '9519',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KHALISHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250471450',
                        ),
                    'enabled' => true,
                ),
            519 =>
                array(
                    'id' => '9520',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LOWER JESSORE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250471847',
                        ),
                    'enabled' => true,
                ),
            520 =>
                array(
                    'id' => '9521',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SIR IQBAL ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250472596',
                        ),
                    'enabled' => true,
                ),
            521 =>
                array(
                    'id' => '9522',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BHAGALPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250480162',
                        ),
                    'enabled' => true,
                ),
            522 =>
                array(
                    'id' => '9523',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BHAIRAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250480225',
                        ),
                    'enabled' => true,
                ),
            523 =>
                array(
                    'id' => '9524',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250480670',
                        ),
                    'enabled' => true,
                ),
            524 =>
                array(
                    'id' => '9525',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MATHKHOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250480883',
                        ),
                    'enabled' => true,
                ),
            525 =>
                array(
                    'id' => '9526',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KURIGRAM',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250490402',
                        ),
                    'enabled' => true,
                ),
            526 =>
                array(
                    'id' => '9527',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250500947',
                        ),
                    'enabled' => true,
                ),
            527 =>
                array(
                    'id' => '9528',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250510195',
                        ),
                    'enabled' => true,
                ),
            528 =>
                array(
                    'id' => '9529',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250510737',
                        ),
                    'enabled' => true,
                ),
            529 =>
                array(
                    'id' => '9530',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250510979',
                        ),
                    'enabled' => true,
                ),
            530 =>
                array(
                    'id' => '9531',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250520464',
                        ),
                    'enabled' => true,
                ),
            531 =>
                array(
                    'id' => '9532',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250540402',
                        ),
                    'enabled' => true,
                ),
            532 =>
                array(
                    'id' => '9533',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250540765',
                        ),
                    'enabled' => true,
                ),
            533 =>
                array(
                    'id' => '9534',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250550555',
                        ),
                    'enabled' => true,
                ),
            534 =>
                array(
                    'id' => '9535',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GHIOR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250560374',
                        ),
                    'enabled' => true,
                ),
            535 =>
                array(
                    'id' => '9536',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250560611',
                        ),
                    'enabled' => true,
                ),
            536 =>
                array(
                    'id' => '9537',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NABAGRAM',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250560732',
                        ),
                    'enabled' => true,
                ),
            537 =>
                array(
                    'id' => '9538',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHIBALAYA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250560790',
                        ),
                    'enabled' => true,
                ),
            538 =>
                array(
                    'id' => '9539',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MEHERPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250570377',
                        ),
                    'enabled' => true,
                ),
            539 =>
                array(
                    'id' => '9540',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BARALEKHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250580109',
                        ),
                    'enabled' => true,
                ),
            540 =>
                array(
                    'id' => '9541',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KAZIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250580888',
                        ),
                    'enabled' => true,
                ),
            541 =>
                array(
                    'id' => '9542',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250580941',
                        ),
                    'enabled' => true,
                ),
            542 =>
                array(
                    'id' => '9543',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250581182',
                        ),
                    'enabled' => true,
                ),
            543 =>
                array(
                    'id' => '9544',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250581724',
                        ),
                    'enabled' => true,
                ),
            544 =>
                array(
                    'id' => '9545',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ISAPURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250590678',
                        ),
                    'enabled' => true,
                ),
            545 =>
                array(
                    'id' => '9546',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250591035',
                        ),
                    'enabled' => true,
                ),
            546 =>
                array(
                    'id' => '9547',
                    'bank_id' => '48',
                    'bank_branch_name' => 'REKABI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250591219',
                        ),
                    'enabled' => true,
                ),
            547 =>
                array(
                    'id' => '9548',
                    'bank_id' => '48',
                    'bank_branch_name' => 'HALUAGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250611157',
                        ),
                    'enabled' => true,
                ),
            548 =>
                array(
                    'id' => '9549',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250611757',
                        ),
                    'enabled' => true,
                ),
            549 =>
                array(
                    'id' => '9550',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250641185',
                        ),
                    'enabled' => true,
                ),
            550 =>
                array(
                    'id' => '9551',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250650642',
                        ),
                    'enabled' => true,
                ),
            551 =>
                array(
                    'id' => '9552',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250670222',
                        ),
                    'enabled' => true,
                ),
            552 =>
                array(
                    'id' => '9553',
                    'bank_id' => '48',
                    'bank_branch_name' => 'D.I.T.',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250670280',
                        ),
                    'enabled' => true,
                ),
            553 =>
                array(
                    'id' => '9554',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250671184',
                        ),
                    'enabled' => true,
                ),
            554 =>
                array(
                    'id' => '9555',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NETAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250671276',
                        ),
                    'enabled' => true,
                ),
            555 =>
                array(
                    'id' => '9556',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250671692',
                        ),
                    'enabled' => true,
                ),
            556 =>
                array(
                    'id' => '9557',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250671755',
                        ),
                    'enabled' => true,
                ),
            557 =>
                array(
                    'id' => '9558',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GHORASAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250680496',
                        ),
                    'enabled' => true,
                ),
            558 =>
                array(
                    'id' => '9559',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MADHABDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250680704',
                        ),
                    'enabled' => true,
                ),
            559 =>
                array(
                    'id' => '9560',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250680854',
                        ),
                    'enabled' => true,
                ),
            560 =>
                array(
                    'id' => '9561',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SARKARKHANA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250681187',
                        ),
                    'enabled' => true,
                ),
            561 =>
                array(
                    'id' => '9562',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BONPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250690286',
                        ),
                    'enabled' => true,
                ),
            562 =>
                array(
                    'id' => '9563',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LALPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250690910',
                        ),
                    'enabled' => true,
                ),
            563 =>
                array(
                    'id' => '9564',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250691098',
                        ),
                    'enabled' => true,
                ),
            564 =>
                array(
                    'id' => '9565',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250700255',
                        ),
                    'enabled' => true,
                ),
            565 =>
                array(
                    'id' => '9566',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KANSAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250700521',
                        ),
                    'enabled' => true,
                ),
            566 =>
                array(
                    'id' => '9567',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250720730',
                        ),
                    'enabled' => true,
                ),
            567 =>
                array(
                    'id' => '9568',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250730733',
                        ),
                    'enabled' => true,
                ),
            568 =>
                array(
                    'id' => '9569',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250730791',
                        ),
                    'enabled' => true,
                ),
            569 =>
                array(
                    'id' => '9570',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250750250',
                        ),
                    'enabled' => true,
                ),
            570 =>
                array(
                    'id' => '9571',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BEGUMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250750342',
                        ),
                    'enabled' => true,
                ),
            571 =>
                array(
                    'id' => '9572',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250750676',
                        ),
                    'enabled' => true,
                ),
            572 =>
                array(
                    'id' => '9573',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250751570',
                        ),
                    'enabled' => true,
                ),
            573 =>
                array(
                    'id' => '9574',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SONAPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250752324',
                        ),
                    'enabled' => true,
                ),
            574 =>
                array(
                    'id' => '9575',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250761210',
                        ),
                    'enabled' => true,
                ),
            575 =>
                array(
                    'id' => '9576',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250761786',
                        ),
                    'enabled' => true,
                ),
            576 =>
                array(
                    'id' => '9577',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250770551',
                        ),
                    'enabled' => true,
                ),
            577 =>
                array(
                    'id' => '9578',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GALACHIPA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250780491',
                        ),
                    'enabled' => true,
                ),
            578 =>
                array(
                    'id' => '9579',
                    'bank_id' => '48',
                    'bank_branch_name' => 'KHEPUPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250780767',
                        ),
                    'enabled' => true,
                ),
            579 =>
                array(
                    'id' => '9580',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250781090',
                        ),
                    'enabled' => true,
                ),
            580 =>
                array(
                    'id' => '9581',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250790528',
                        ),
                    'enabled' => true,
                ),
            581 =>
                array(
                    'id' => '9582',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PIROJPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250790760',
                        ),
                    'enabled' => true,
                ),
            582 =>
                array(
                    'id' => '9583',
                    'bank_id' => '48',
                    'bank_branch_name' => 'MOHISHALBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250811423',
                        ),
                    'enabled' => true,
                ),
            583 =>
                array(
                    'id' => '9584',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250811636',
                        ),
                    'enabled' => true,
                ),
            584 =>
                array(
                    'id' => '9585',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PUTHIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250811849',
                        ),
                    'enabled' => true,
                ),
            585 =>
                array(
                    'id' => '9586',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250812143',
                        ),
                    'enabled' => true,
                ),
            586 =>
                array(
                    'id' => '9587',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHAHEB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250812264',
                        ),
                    'enabled' => true,
                ),
            587 =>
                array(
                    'id' => '9588',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250820735',
                        ),
                    'enabled' => true,
                ),
            588 =>
                array(
                    'id' => '9589',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250840528',
                        ),
                    'enabled' => true,
                ),
            589 =>
                array(
                    'id' => '9590',
                    'bank_id' => '48',
                    'bank_branch_name' => 'PAURA PARK MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250851270',
                        ),
                    'enabled' => true,
                ),
            590 =>
                array(
                    'id' => '9591',
                    'bank_id' => '48',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250851454',
                        ),
                    'enabled' => true,
                ),
            591 =>
                array(
                    'id' => '9592',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHARIATPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250860674',
                        ),
                    'enabled' => true,
                ),
            592 =>
                array(
                    'id' => '9593',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250871092',
                        ),
                    'enabled' => true,
                ),
            593 =>
                array(
                    'id' => '9594',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250881879',
                        ),
                    'enabled' => true,
                ),
            594 =>
                array(
                    'id' => '9595',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250881903',
                        ),
                    'enabled' => true,
                ),
            595 =>
                array(
                    'id' => '9596',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SUBGACHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250882081',
                        ),
                    'enabled' => true,
                ),
            596 =>
                array(
                    'id' => '9597',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ULLAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250882236',
                        ),
                    'enabled' => true,
                ),
            597 =>
                array(
                    'id' => '9598',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250890552',
                        ),
                    'enabled' => true,
                ),
            598 =>
                array(
                    'id' => '9599',
                    'bank_id' => '48',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250900226',
                        ),
                    'enabled' => true,
                ),
            599 =>
                array(
                    'id' => '9600',
                    'bank_id' => '48',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250900497',
                        ),
                    'enabled' => true,
                ),
            600 =>
                array(
                    'id' => '9601',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250901120',
                        ),
                    'enabled' => true,
                ),
            601 =>
                array(
                    'id' => '9602',
                    'bank_id' => '48',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250910045',
                        ),
                    'enabled' => true,
                ),
            602 =>
                array(
                    'id' => '9603',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250910311',
                        ),
                    'enabled' => true,
                ),
            603 =>
                array(
                    'id' => '9604',
                    'bank_id' => '48',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250910432',
                        ),
                    'enabled' => true,
                ),
            604 =>
                array(
                    'id' => '9605',
                    'bank_id' => '48',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250910911',
                        ),
                    'enabled' => true,
                ),
            605 =>
                array(
                    'id' => '9606',
                    'bank_id' => '48',
                    'bank_branch_name' => 'DHAKA DAKHIN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250911307',
                        ),
                    'enabled' => true,
                ),
            606 =>
                array(
                    'id' => '9607',
                    'bank_id' => '48',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250911365',
                        ),
                    'enabled' => true,
                ),
            607 =>
                array(
                    'id' => '9608',
                    'bank_id' => '48',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250911549',
                        ),
                    'enabled' => true,
                ),
            608 =>
                array(
                    'id' => '9609',
                    'bank_id' => '48',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250912506',
                        ),
                    'enabled' => true,
                ),
            609 =>
                array(
                    'id' => '9610',
                    'bank_id' => '48',
                    'bank_branch_name' => 'NAZIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250912801',
                        ),
                    'enabled' => true,
                ),
            610 =>
                array(
                    'id' => '9611',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SHAHJALAL UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250913255',
                        ),
                    'enabled' => true,
                ),
            611 =>
                array(
                    'id' => '9612',
                    'bank_id' => '48',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250913550',
                        ),
                    'enabled' => true,
                ),
            612 =>
                array(
                    'id' => '9613',
                    'bank_id' => '48',
                    'bank_branch_name' => 'ATIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250930225',
                        ),
                    'enabled' => true,
                ),
            613 =>
                array(
                    'id' => '9614',
                    'bank_id' => '48',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250932294',
                        ),
                    'enabled' => true,
                ),
            614 =>
                array(
                    'id' => '9615',
                    'bank_id' => '48',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '250940978',
                        ),
                    'enabled' => true,
                ),
            615 =>
                array(
                    'id' => '9616',
                    'bank_id' => '49',
                    'bank_branch_name' => 'CHITTAGONG',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '255151962',
                        ),
                    'enabled' => true,
                ),
            616 =>
                array(
                    'id' => '9617',
                    'bank_id' => '49',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '255262985',
                        ),
                    'enabled' => true,
                ),
            617 =>
                array(
                    'id' => '9618',
                    'bank_id' => '49',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '255264633',
                        ),
                    'enabled' => true,
                ),
            618 =>
                array(
                    'id' => '9619',
                    'bank_id' => '49',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '255270001',
                        ),
                    'enabled' => true,
                ),
            619 =>
                array(
                    'id' => '9620',
                    'bank_id' => '49',
                    'bank_branch_name' => 'DHAKA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '255271518',
                        ),
                    'enabled' => true,
                ),
            620 =>
                array(
                    'id' => '9621',
                    'bank_id' => '49',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '255671189',
                        ),
                    'enabled' => true,
                ),
            621 =>
                array(
                    'id' => '9622',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260060280',
                        ),
                    'enabled' => true,
                ),
            622 =>
                array(
                    'id' => '9623',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260100379',
                        ),
                    'enabled' => true,
                ),
            623 =>
                array(
                    'id' => '9624',
                    'bank_id' => '50',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260150132',
                        ),
                    'enabled' => true,
                ),
            624 =>
                array(
                    'id' => '9625',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BOR DIGHIR PAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260150387',
                        ),
                    'enabled' => true,
                ),
            625 =>
                array(
                    'id' => '9626',
                    'bank_id' => '50',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260153647',
                        ),
                    'enabled' => true,
                ),
            626 =>
                array(
                    'id' => '9627',
                    'bank_id' => '50',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260155803',
                        ),
                    'enabled' => true,
                ),
            627 =>
                array(
                    'id' => '9628',
                    'bank_id' => '50',
                    'bank_branch_name' => 'RAOZAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260156499',
                        ),
                    'enabled' => true,
                ),
            628 =>
                array(
                    'id' => '9629',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MOYNAMOTI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260190321',
                        ),
                    'enabled' => true,
                ),
            629 =>
                array(
                    'id' => '9630',
                    'bank_id' => '50',
                    'bank_branch_name' => 'CHANDINA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260190884',
                        ),
                    'enabled' => true,
                ),
            630 =>
                array(
                    'id' => '9631',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260260435',
                        ),
                    'enabled' => true,
                ),
            631 =>
                array(
                    'id' => '9632',
                    'bank_id' => '50',
                    'bank_branch_name' => 'DHANMONDI MOHILA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260260477',
                        ),
                    'enabled' => true,
                ),
            632 =>
                array(
                    'id' => '9633',
                    'bank_id' => '50',
                    'bank_branch_name' => 'ZIRANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260260543',
                        ),
                    'enabled' => true,
                ),
            633 =>
                array(
                    'id' => '9634',
                    'bank_id' => '50',
                    'bank_branch_name' => 'HORIRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260260569',
                        ),
                    'enabled' => true,
                ),
            634 =>
                array(
                    'id' => '9635',
                    'bank_id' => '50',
                    'bank_branch_name' => 'CHARABAGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260260756',
                        ),
                    'enabled' => true,
                ),
            635 =>
                array(
                    'id' => '9636',
                    'bank_id' => '50',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260261184',
                        ),
                    'enabled' => true,
                ),
            636 =>
                array(
                    'id' => '9637',
                    'bank_id' => '50',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260261726',
                        ),
                    'enabled' => true,
                ),
            637 =>
                array(
                    'id' => '9638',
                    'bank_id' => '50',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260262059',
                        ),
                    'enabled' => true,
                ),
            638 =>
                array(
                    'id' => '9639',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260262983',
                        ),
                    'enabled' => true,
                ),
            639 =>
                array(
                    'id' => '9640',
                    'bank_id' => '50',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260263416',
                        ),
                    'enabled' => true,
                ),
            640 =>
                array(
                    'id' => '9641',
                    'bank_id' => '50',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260264631',
                        ),
                    'enabled' => true,
                ),
            641 =>
                array(
                    'id' => '9642',
                    'bank_id' => '50',
                    'bank_branch_name' => 'ZIRABO',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260264815',
                        ),
                    'enabled' => true,
                ),
            642 =>
                array(
                    'id' => '9643',
                    'bank_id' => '50',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260270009',
                        ),
                    'enabled' => true,
                ),
            643 =>
                array(
                    'id' => '9644',
                    'bank_id' => '50',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260270133',
                        ),
                    'enabled' => true,
                ),
            644 =>
                array(
                    'id' => '9645',
                    'bank_id' => '50',
                    'bank_branch_name' => 'EKORIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260270270',
                        ),
                    'enabled' => true,
                ),
            645 =>
                array(
                    'id' => '9646',
                    'bank_id' => '50',
                    'bank_branch_name' => 'HATIRPUL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260270483',
                        ),
                    'enabled' => true,
                ),
            646 =>
                array(
                    'id' => '9647',
                    'bank_id' => '50',
                    'bank_branch_name' => 'NAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260274818',
                        ),
                    'enabled' => true,
                ),
            647 =>
                array(
                    'id' => '9648',
                    'bank_id' => '50',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260275354',
                        ),
                    'enabled' => true,
                ),
            648 =>
                array(
                    'id' => '9649',
                    'bank_id' => '50',
                    'bank_branch_name' => 'RUHITPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260275833',
                        ),
                    'enabled' => true,
                ),
            649 =>
                array(
                    'id' => '9650',
                    'bank_id' => '50',
                    'bank_branch_name' => 'PHUL HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260281843',
                        ),
                    'enabled' => true,
                ),
            650 =>
                array(
                    'id' => '9651',
                    'bank_id' => '50',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260300524',
                        ),
                    'enabled' => true,
                ),
            651 =>
                array(
                    'id' => '9652',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260330228',
                        ),
                    'enabled' => true,
                ),
            652 =>
                array(
                    'id' => '9653',
                    'bank_id' => '50',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260330552',
                        ),
                    'enabled' => true,
                ),
            653 =>
                array(
                    'id' => '9654',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260331001',
                        ),
                    'enabled' => true,
                ),
            654 =>
                array(
                    'id' => '9655',
                    'bank_id' => '50',
                    'bank_branch_name' => 'HATGOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260440550',
                        ),
                    'enabled' => true,
                ),
            655 =>
                array(
                    'id' => '9656',
                    'bank_id' => '50',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260471545',
                        ),
                    'enabled' => true,
                ),
            656 =>
                array(
                    'id' => '9657',
                    'bank_id' => '50',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260510198',
                        ),
                    'enabled' => true,
                ),
            657 =>
                array(
                    'id' => '9658',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MUNSHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260581248',
                        ),
                    'enabled' => true,
                ),
            658 =>
                array(
                    'id' => '9659',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260611750',
                        ),
                    'enabled' => true,
                ),
            659 =>
                array(
                    'id' => '9660',
                    'bank_id' => '50',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260641188',
                        ),
                    'enabled' => true,
                ),
            660 =>
                array(
                    'id' => '9661',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BHUIGHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260670209',
                        ),
                    'enabled' => true,
                ),
            661 =>
                array(
                    'id' => '9662',
                    'bank_id' => '50',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260670225',
                        ),
                    'enabled' => true,
                ),
            662 =>
                array(
                    'id' => '9663',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MOGRAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260671066',
                        ),
                    'enabled' => true,
                ),
            663 =>
                array(
                    'id' => '9664',
                    'bank_id' => '50',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260671187',
                        ),
                    'enabled' => true,
                ),
            664 =>
                array(
                    'id' => '9665',
                    'bank_id' => '50',
                    'bank_branch_name' => 'PANCHABATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260671387',
                        ),
                    'enabled' => true,
                ),
            665 =>
                array(
                    'id' => '9666',
                    'bank_id' => '50',
                    'bank_branch_name' => 'CHINISHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260680086',
                        ),
                    'enabled' => true,
                ),
            666 =>
                array(
                    'id' => '9667',
                    'bank_id' => '50',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260680673',
                        ),
                    'enabled' => true,
                ),
            667 =>
                array(
                    'id' => '9668',
                    'bank_id' => '50',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260750587',
                        ),
                    'enabled' => true,
                ),
            668 =>
                array(
                    'id' => '9669',
                    'bank_id' => '50',
                    'bank_branch_name' => 'INDERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260790376',
                        ),
                    'enabled' => true,
                ),
            669 =>
                array(
                    'id' => '9670',
                    'bank_id' => '50',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260811934',
                        ),
                    'enabled' => true,
                ),
            670 =>
                array(
                    'id' => '9671',
                    'bank_id' => '50',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260851457',
                        ),
                    'enabled' => true,
                ),
            671 =>
                array(
                    'id' => '9672',
                    'bank_id' => '50',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260913553',
                        ),
                    'enabled' => true,
                ),
            672 =>
                array(
                    'id' => '9673',
                    'bank_id' => '50',
                    'bank_branch_name' => 'SYLHET UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260913737',
                        ),
                    'enabled' => true,
                ),
            673 =>
                array(
                    'id' => '9674',
                    'bank_id' => '50',
                    'bank_branch_name' => 'GORAI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '260931030',
                        ),
                    'enabled' => true,
                ),
            674 =>
                array(
                    'id' => '9675',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265060285',
                        ),
                    'enabled' => true,
                ),
            675 =>
                array(
                    'id' => '9676',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265100374',
                        ),
                    'enabled' => true,
                ),
            676 =>
                array(
                    'id' => '9677',
                    'bank_id' => '51',
                    'bank_branch_name' => 'TALSHOHOR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265120141',
                        ),
                    'enabled' => true,
                ),
            677 =>
                array(
                    'id' => '9678',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MIAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265130210',
                        ),
                    'enabled' => true,
                ),
            678 =>
                array(
                    'id' => '9679',
                    'bank_id' => '51',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265150137',
                        ),
                    'enabled' => true,
                ),
            679 =>
                array(
                    'id' => '9680',
                    'bank_id' => '51',
                    'bank_branch_name' => 'D.T ROAD EIDGAH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265150429',
                        ),
                    'enabled' => true,
                ),
            680 =>
                array(
                    'id' => '9681',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BANSHKHALI(CHANDPUR)',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265150540',
                        ),
                    'enabled' => true,
                ),
            681 =>
                array(
                    'id' => '9682',
                    'bank_id' => '51',
                    'bank_branch_name' => 'JOTPUKURIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265150629',
                        ),
                    'enabled' => true,
                ),
            682 =>
                array(
                    'id' => '9683',
                    'bank_id' => '51',
                    'bank_branch_name' => 'DEWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265152414',
                        ),
                    'enabled' => true,
                ),
            683 =>
                array(
                    'id' => '9684',
                    'bank_id' => '51',
                    'bank_branch_name' => 'KERANIHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265154188',
                        ),
                    'enabled' => true,
                ),
            684 =>
                array(
                    'id' => '9685',
                    'bank_id' => '51',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265154270',
                        ),
                    'enabled' => true,
                ),
            685 =>
                array(
                    'id' => '9686',
                    'bank_id' => '51',
                    'bank_branch_name' => 'KUMIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265154454',
                        ),
                    'enabled' => true,
                ),
            686 =>
                array(
                    'id' => '9687',
                    'bank_id' => '51',
                    'bank_branch_name' => 'LALDIGHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265154517',
                        ),
                    'enabled' => true,
                ),
            687 =>
                array(
                    'id' => '9688',
                    'bank_id' => '51',
                    'bank_branch_name' => 'LICHU BAGAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265154638',
                        ),
                    'enabled' => true,
                ),
            688 =>
                array(
                    'id' => '9689',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265155329',
                        ),
                    'enabled' => true,
                ),
            689 =>
                array(
                    'id' => '9690',
                    'bank_id' => '51',
                    'bank_branch_name' => 'NANUPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265155440',
                        ),
                    'enabled' => true,
                ),
            690 =>
                array(
                    'id' => '9691',
                    'bank_id' => '51',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265155929',
                        ),
                    'enabled' => true,
                ),
            691 =>
                array(
                    'id' => '9692',
                    'bank_id' => '51',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265156160',
                        ),
                    'enabled' => true,
                ),
            692 =>
                array(
                    'id' => '9693',
                    'bank_id' => '51',
                    'bank_branch_name' => 'SARKERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265157006',
                        ),
                    'enabled' => true,
                ),
            693 =>
                array(
                    'id' => '9694',
                    'bank_id' => '51',
                    'bank_branch_name' => 'SHANTIR HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265157248',
                        ),
                    'enabled' => true,
                ),
            694 =>
                array(
                    'id' => '9695',
                    'bank_id' => '51',
                    'bank_branch_name' => 'LALMAI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265190300',
                        ),
                    'enabled' => true,
                ),
            695 =>
                array(
                    'id' => '9696',
                    'bank_id' => '51',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265191154',
                        ),
                    'enabled' => true,
                ),
            696 =>
                array(
                    'id' => '9697',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MONSHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265193107',
                        ),
                    'enabled' => true,
                ),
            697 =>
                array(
                    'id' => '9698',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BADARKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265220041',
                        ),
                    'enabled' => true,
                ),
            698 =>
                array(
                    'id' => '9699',
                    'bank_id' => '51',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265220254',
                        ),
                    'enabled' => true,
                ),
            699 =>
                array(
                    'id' => '9700',
                    'bank_id' => '51',
                    'bank_branch_name' => 'EIDGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265220409',
                        ),
                    'enabled' => true,
                ),
            700 =>
                array(
                    'id' => '9701',
                    'bank_id' => '51',
                    'bank_branch_name' => 'HANILA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265220496',
                        ),
                    'enabled' => true,
                ),
            701 =>
                array(
                    'id' => '9702',
                    'bank_id' => '51',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265260001',
                        ),
                    'enabled' => true,
                ),
            702 =>
                array(
                    'id' => '9703',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BOGABARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265260298',
                        ),
                    'enabled' => true,
                ),
            703 =>
                array(
                    'id' => '9704',
                    'bank_id' => '51',
                    'bank_branch_name' => 'ASHKONA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265260322',
                        ),
                    'enabled' => true,
                ),
            704 =>
                array(
                    'id' => '9705',
                    'bank_id' => '51',
                    'bank_branch_name' => 'JAMUNA FUTURE PARK',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265260335',
                        ),
                    'enabled' => true,
                ),
            705 =>
                array(
                    'id' => '9706',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265260430',
                        ),
                    'enabled' => true,
                ),
            706 =>
                array(
                    'id' => '9707',
                    'bank_id' => '51',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265261721',
                        ),
                    'enabled' => true,
                ),
            707 =>
                array(
                    'id' => '9708',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265262988',
                        ),
                    'enabled' => true,
                ),
            708 =>
                array(
                    'id' => '9709',
                    'bank_id' => '51',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265263611',
                        ),
                    'enabled' => true,
                ),
            709 =>
                array(
                    'id' => '9710',
                    'bank_id' => '51',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265264636',
                        ),
                    'enabled' => true,
                ),
            710 =>
                array(
                    'id' => '9711',
                    'bank_id' => '51',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265270341',
                        ),
                    'enabled' => true,
                ),
            711 =>
                array(
                    'id' => '9712',
                    'bank_id' => '51',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265270512',
                        ),
                    'enabled' => true,
                ),
            712 =>
                array(
                    'id' => '9713',
                    'bank_id' => '51',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265271908',
                        ),
                    'enabled' => true,
                ),
            713 =>
                array(
                    'id' => '9714',
                    'bank_id' => '51',
                    'bank_branch_name' => 'HATKHOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265272594',
                        ),
                    'enabled' => true,
                ),
            714 =>
                array(
                    'id' => '9715',
                    'bank_id' => '51',
                    'bank_branch_name' => 'NAWABPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265274750',
                        ),
                    'enabled' => true,
                ),
            715 =>
                array(
                    'id' => '9716',
                    'bank_id' => '51',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265300529',
                        ),
                    'enabled' => true,
                ),
            716 =>
                array(
                    'id' => '9717',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MOUCHAK',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265330128',
                        ),
                    'enabled' => true,
                ),
            717 =>
                array(
                    'id' => '9718',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265331006',
                        ),
                    'enabled' => true,
                ),
            718 =>
                array(
                    'id' => '9719',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BAHUBAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265360130',
                        ),
                    'enabled' => true,
                ),
            719 =>
                array(
                    'id' => '9720',
                    'bank_id' => '51',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265410943',
                        ),
                    'enabled' => true,
                ),
            720 =>
                array(
                    'id' => '9721',
                    'bank_id' => '51',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265471540',
                        ),
                    'enabled' => true,
                ),
            721 =>
                array(
                    'id' => '9722',
                    'bank_id' => '51',
                    'bank_branch_name' => 'JAKSIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265510614',
                        ),
                    'enabled' => true,
                ),
            722 =>
                array(
                    'id' => '9723',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265611755',
                        ),
                    'enabled' => true,
                ),
            723 =>
                array(
                    'id' => '9724',
                    'bank_id' => '51',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265671182',
                        ),
                    'enabled' => true,
                ),
            724 =>
                array(
                    'id' => '9725',
                    'bank_id' => '51',
                    'bank_branch_name' => 'PANCHABATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265671382',
                        ),
                    'enabled' => true,
                ),
            725 =>
                array(
                    'id' => '9726',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BAZAR HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265680186',
                        ),
                    'enabled' => true,
                ),
            726 =>
                array(
                    'id' => '9727',
                    'bank_id' => '51',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265680678',
                        ),
                    'enabled' => true,
                ),
            727 =>
                array(
                    'id' => '9728',
                    'bank_id' => '51',
                    'bank_branch_name' => 'BANPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265690147',
                        ),
                    'enabled' => true,
                ),
            728 =>
                array(
                    'id' => '9729',
                    'bank_id' => '51',
                    'bank_branch_name' => 'KHILPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265751457',
                        ),
                    'enabled' => true,
                ),
            729 =>
                array(
                    'id' => '9730',
                    'bank_id' => '51',
                    'bank_branch_name' => 'SEBARHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265752056',
                        ),
                    'enabled' => true,
                ),
            730 =>
                array(
                    'id' => '9731',
                    'bank_id' => '51',
                    'bank_branch_name' => 'ATAIKULA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265760222',
                        ),
                    'enabled' => true,
                ),
            731 =>
                array(
                    'id' => '9732',
                    'bank_id' => '51',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265761784',
                        ),
                    'enabled' => true,
                ),
            732 =>
                array(
                    'id' => '9733',
                    'bank_id' => '51',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265811939',
                        ),
                    'enabled' => true,
                ),
            733 =>
                array(
                    'id' => '9734',
                    'bank_id' => '51',
                    'bank_branch_name' => 'KALUKHALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265820067',
                        ),
                    'enabled' => true,
                ),
            734 =>
                array(
                    'id' => '9735',
                    'bank_id' => '51',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265851452',
                        ),
                    'enabled' => true,
                ),
            735 =>
                array(
                    'id' => '9736',
                    'bank_id' => '51',
                    'bank_branch_name' => 'SHATIBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265851786',
                        ),
                    'enabled' => true,
                ),
            736 =>
                array(
                    'id' => '9737',
                    'bank_id' => '51',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265911789',
                        ),
                    'enabled' => true,
                ),
            737 =>
                array(
                    'id' => '9738',
                    'bank_id' => '51',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '265914157',
                        ),
                    'enabled' => true,
                ),
            738 =>
                array(
                    'id' => '9739',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KATAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270010059',
                        ),
                    'enabled' => true,
                ),
            739 =>
                array(
                    'id' => '9740',
                    'bank_id' => '52',
                    'bank_branch_name' => 'DIGRAJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270010404',
                        ),
                    'enabled' => true,
                ),
            740 =>
                array(
                    'id' => '9741',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MORELGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270011032',
                        ),
                    'enabled' => true,
                ),
            741 =>
                array(
                    'id' => '9742',
                    'bank_id' => '52',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270060283',
                        ),
                    'enabled' => true,
                ),
            742 =>
                array(
                    'id' => '9743',
                    'bank_id' => '52',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270100372',
                        ),
                    'enabled' => true,
                ),
            743 =>
                array(
                    'id' => '9744',
                    'bank_id' => '52',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270150135',
                        ),
                    'enabled' => true,
                ),
            744 =>
                array(
                    'id' => '9745',
                    'bank_id' => '52',
                    'bank_branch_name' => 'BHATIARY',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270151213',
                        ),
                    'enabled' => true,
                ),
            745 =>
                array(
                    'id' => '9746',
                    'bank_id' => '52',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270152746',
                        ),
                    'enabled' => true,
                ),
            746 =>
                array(
                    'id' => '9747',
                    'bank_id' => '52',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270153640',
                        ),
                    'enabled' => true,
                ),
            747 =>
                array(
                    'id' => '9748',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270154278',
                        ),
                    'enabled' => true,
                ),
            748 =>
                array(
                    'id' => '9749',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MADHUNA GHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270154757',
                        ),
                    'enabled' => true,
                ),
            749 =>
                array(
                    'id' => '9750',
                    'bank_id' => '52',
                    'bank_branch_name' => 'NASIRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270155530',
                        ),
                    'enabled' => true,
                ),
            750 =>
                array(
                    'id' => '9751',
                    'bank_id' => '52',
                    'bank_branch_name' => 'EPZ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270156797',
                        ),
                    'enabled' => true,
                ),
            751 =>
                array(
                    'id' => '9752',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MAINAMATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270192827',
                        ),
                    'enabled' => true,
                ),
            752 =>
                array(
                    'id' => '9753',
                    'bank_id' => '52',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270260225',
                        ),
                    'enabled' => true,
                ),
            753 =>
                array(
                    'id' => '9754',
                    'bank_id' => '52',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270260438',
                        ),
                    'enabled' => true,
                ),
            754 =>
                array(
                    'id' => '9755',
                    'bank_id' => '52',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270261187',
                        ),
                    'enabled' => true,
                ),
            755 =>
                array(
                    'id' => '9756',
                    'bank_id' => '52',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270261729',
                        ),
                    'enabled' => true,
                ),
            756 =>
                array(
                    'id' => '9757',
                    'bank_id' => '52',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270262052',
                        ),
                    'enabled' => true,
                ),
            757 =>
                array(
                    'id' => '9758',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270262986',
                        ),
                    'enabled' => true,
                ),
            758 =>
                array(
                    'id' => '9759',
                    'bank_id' => '52',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270263619',
                        ),
                    'enabled' => true,
                ),
            759 =>
                array(
                    'id' => '9760',
                    'bank_id' => '52',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270264634',
                        ),
                    'enabled' => true,
                ),
            760 =>
                array(
                    'id' => '9761',
                    'bank_id' => '52',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270270002',
                        ),
                    'enabled' => true,
                ),
            761 =>
                array(
                    'id' => '9762',
                    'bank_id' => '52',
                    'bank_branch_name' => 'HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270272563',
                        ),
                    'enabled' => true,
                ),
            762 =>
                array(
                    'id' => '9763',
                    'bank_id' => '52',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270272800',
                        ),
                    'enabled' => true,
                ),
            763 =>
                array(
                    'id' => '9764',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270273641',
                        ),
                    'enabled' => true,
                ),
            764 =>
                array(
                    'id' => '9765',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270274240',
                        ),
                    'enabled' => true,
                ),
            765 =>
                array(
                    'id' => '9766',
                    'bank_id' => '52',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270274729',
                        ),
                    'enabled' => true,
                ),
            766 =>
                array(
                    'id' => '9767',
                    'bank_id' => '52',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270275357',
                        ),
                    'enabled' => true,
                ),
            767 =>
                array(
                    'id' => '9768',
                    'bank_id' => '52',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270280676',
                        ),
                    'enabled' => true,
                ),
            768 =>
                array(
                    'id' => '9769',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MALIGRAM',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270291128',
                        ),
                    'enabled' => true,
                ),
            769 =>
                array(
                    'id' => '9770',
                    'bank_id' => '52',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270300527',
                        ),
                    'enabled' => true,
                ),
            770 =>
                array(
                    'id' => '9771',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MOUCHAK',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270330126',
                        ),
                    'enabled' => true,
                ),
            771 =>
                array(
                    'id' => '9772',
                    'bank_id' => '52',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270330526',
                        ),
                    'enabled' => true,
                ),
            772 =>
                array(
                    'id' => '9773',
                    'bank_id' => '52',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270331004',
                        ),
                    'enabled' => true,
                ),
            773 =>
                array(
                    'id' => '9774',
                    'bank_id' => '52',
                    'bank_branch_name' => 'GHONAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270350098',
                        ),
                    'enabled' => true,
                ),
            774 =>
                array(
                    'id' => '9775',
                    'bank_id' => '52',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270410941',
                        ),
                    'enabled' => true,
                ),
            775 =>
                array(
                    'id' => '9776',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KHARABAD BAINTOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270470060',
                        ),
                    'enabled' => true,
                ),
            776 =>
                array(
                    'id' => '9777',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KDA C/A',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270470086',
                        ),
                    'enabled' => true,
                ),
            777 =>
                array(
                    'id' => '9778',
                    'bank_id' => '52',
                    'bank_branch_name' => 'CHUK NAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270470552',
                        ),
                    'enabled' => true,
                ),
            778 =>
                array(
                    'id' => '9779',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270471548',
                        ),
                    'enabled' => true,
                ),
            779 =>
                array(
                    'id' => '9780',
                    'bank_id' => '52',
                    'bank_branch_name' => 'LABONCHORA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270471814',
                        ),
                    'enabled' => true,
                ),
            780 =>
                array(
                    'id' => '9781',
                    'bank_id' => '52',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270500943',
                        ),
                    'enabled' => true,
                ),
            781 =>
                array(
                    'id' => '9782',
                    'bank_id' => '52',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270540761',
                        ),
                    'enabled' => true,
                ),
            782 =>
                array(
                    'id' => '9783',
                    'bank_id' => '52',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270671180',
                        ),
                    'enabled' => true,
                ),
            783 =>
                array(
                    'id' => '9784',
                    'bank_id' => '52',
                    'bank_branch_name' => 'SHIBU MARKET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270671551',
                        ),
                    'enabled' => true,
                ),
            784 =>
                array(
                    'id' => '9785',
                    'bank_id' => '52',
                    'bank_branch_name' => 'BABURHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270680100',
                        ),
                    'enabled' => true,
                ),
            785 =>
                array(
                    'id' => '9786',
                    'bank_id' => '52',
                    'bank_branch_name' => 'SARBOLOKKHONA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270680155',
                        ),
                    'enabled' => true,
                ),
            786 =>
                array(
                    'id' => '9787',
                    'bank_id' => '52',
                    'bank_branch_name' => 'CHALAKCHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270680313',
                        ),
                    'enabled' => true,
                ),
            787 =>
                array(
                    'id' => '9788',
                    'bank_id' => '52',
                    'bank_branch_name' => 'VELA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270681396',
                        ),
                    'enabled' => true,
                ),
            788 =>
                array(
                    'id' => '9789',
                    'bank_id' => '52',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270691094',
                        ),
                    'enabled' => true,
                ),
            789 =>
                array(
                    'id' => '9790',
                    'bank_id' => '52',
                    'bank_branch_name' => 'BANGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270750193',
                        ),
                    'enabled' => true,
                ),
            790 =>
                array(
                    'id' => '9791',
                    'bank_id' => '52',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270811937',
                        ),
                    'enabled' => true,
                ),
            791 =>
                array(
                    'id' => '9792',
                    'bank_id' => '52',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270851450',
                        ),
                    'enabled' => true,
                ),
            792 =>
                array(
                    'id' => '9793',
                    'bank_id' => '52',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270871098',
                        ),
                    'enabled' => true,
                ),
            793 =>
                array(
                    'id' => '9794',
                    'bank_id' => '52',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270871214',
                        ),
                    'enabled' => true,
                ),
            794 =>
                array(
                    'id' => '9795',
                    'bank_id' => '52',
                    'bank_branch_name' => 'VOMRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270871364',
                        ),
                    'enabled' => true,
                ),
            795 =>
                array(
                    'id' => '9796',
                    'bank_id' => '52',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270911787',
                        ),
                    'enabled' => true,
                ),
            796 =>
                array(
                    'id' => '9797',
                    'bank_id' => '52',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '270913556',
                        ),
                    'enabled' => true,
                ),
            797 =>
                array(
                    'id' => '9798',
                    'bank_id' => '53',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275060288',
                        ),
                    'enabled' => true,
                ),
            798 =>
                array(
                    'id' => '9799',
                    'bank_id' => '53',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275100377',
                        ),
                    'enabled' => true,
                ),
            799 =>
                array(
                    'id' => '9800',
                    'bank_id' => '53',
                    'bank_branch_name' => 'ANANDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275130239',
                        ),
                    'enabled' => true,
                ),
            800 =>
                array(
                    'id' => '9801',
                    'bank_id' => '53',
                    'bank_branch_name' => 'RAMPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275131759',
                        ),
                    'enabled' => true,
                ),
            801 =>
                array(
                    'id' => '9802',
                    'bank_id' => '53',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275150130',
                        ),
                    'enabled' => true,
                ),
            802 =>
                array(
                    'id' => '9803',
                    'bank_id' => '53',
                    'bank_branch_name' => 'AMAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275150251',
                        ),
                    'enabled' => true,
                ),
            803 =>
                array(
                    'id' => '9804',
                    'bank_id' => '53',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275153645',
                        ),
                    'enabled' => true,
                ),
            804 =>
                array(
                    'id' => '9805',
                    'bank_id' => '53',
                    'bank_branch_name' => 'MADAM BIBIR HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275154699',
                        ),
                    'enabled' => true,
                ),
            805 =>
                array(
                    'id' => '9806',
                    'bank_id' => '53',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275156134',
                        ),
                    'enabled' => true,
                ),
            806 =>
                array(
                    'id' => '9807',
                    'bank_id' => '53',
                    'bank_branch_name' => 'MUNSHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275190411',
                        ),
                    'enabled' => true,
                ),
            807 =>
                array(
                    'id' => '9808',
                    'bank_id' => '53',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275260004',
                        ),
                    'enabled' => true,
                ),
            808 =>
                array(
                    'id' => '9809',
                    'bank_id' => '53',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275260217',
                        ),
                    'enabled' => true,
                ),
            809 =>
                array(
                    'id' => '9810',
                    'bank_id' => '53',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275260570',
                        ),
                    'enabled' => true,
                ),
            810 =>
                array(
                    'id' => '9811',
                    'bank_id' => '53',
                    'bank_branch_name' => 'ZIRABO',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275260770',
                        ),
                    'enabled' => true,
                ),
            811 =>
                array(
                    'id' => '9812',
                    'bank_id' => '53',
                    'bank_branch_name' => 'DEPZ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275261090',
                        ),
                    'enabled' => true,
                ),
            812 =>
                array(
                    'id' => '9813',
                    'bank_id' => '53',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275261182',
                        ),
                    'enabled' => true,
                ),
            813 =>
                array(
                    'id' => '9814',
                    'bank_id' => '53',
                    'bank_branch_name' => 'KALAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275262444',
                        ),
                    'enabled' => true,
                ),
            814 =>
                array(
                    'id' => '9815',
                    'bank_id' => '53',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275262981',
                        ),
                    'enabled' => true,
                ),
            815 =>
                array(
                    'id' => '9816',
                    'bank_id' => '53',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275264639',
                        ),
                    'enabled' => true,
                ),
            816 =>
                array(
                    'id' => '9817',
                    'bank_id' => '53',
                    'bank_branch_name' => 'BANDURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275270649',
                        ),
                    'enabled' => true,
                ),
            817 =>
                array(
                    'id' => '9818',
                    'bank_id' => '53',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275271277',
                        ),
                    'enabled' => true,
                ),
            818 =>
                array(
                    'id' => '9819',
                    'bank_id' => '53',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275274245',
                        ),
                    'enabled' => true,
                ),
            819 =>
                array(
                    'id' => '9820',
                    'bank_id' => '53',
                    'bank_branch_name' => 'CHEHELGAZI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275280497',
                        ),
                    'enabled' => true,
                ),
            820 =>
                array(
                    'id' => '9821',
                    'bank_id' => '53',
                    'bank_branch_name' => 'MOHIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275301068',
                        ),
                    'enabled' => true,
                ),
            821 =>
                array(
                    'id' => '9822',
                    'bank_id' => '53',
                    'bank_branch_name' => 'BORMI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275330284',
                        ),
                    'enabled' => true,
                ),
            822 =>
                array(
                    'id' => '9823',
                    'bank_id' => '53',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275330550',
                        ),
                    'enabled' => true,
                ),
            823 =>
                array(
                    'id' => '9824',
                    'bank_id' => '53',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275471543',
                        ),
                    'enabled' => true,
                ),
            824 =>
                array(
                    'id' => '9825',
                    'bank_id' => '53',
                    'bank_branch_name' => 'BOROBAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275480147',
                        ),
                    'enabled' => true,
                ),
            825 =>
                array(
                    'id' => '9826',
                    'bank_id' => '53',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275480671',
                        ),
                    'enabled' => true,
                ),
            826 =>
                array(
                    'id' => '9827',
                    'bank_id' => '53',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275540766',
                        ),
                    'enabled' => true,
                ),
            827 =>
                array(
                    'id' => '9828',
                    'bank_id' => '53',
                    'bank_branch_name' => 'RAMPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275591173',
                        ),
                    'enabled' => true,
                ),
            828 =>
                array(
                    'id' => '9829',
                    'bank_id' => '53',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275671185',
                        ),
                    'enabled' => true,
                ),
            829 =>
                array(
                    'id' => '9830',
                    'bank_id' => '53',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275680671',
                        ),
                    'enabled' => true,
                ),
            830 =>
                array(
                    'id' => '9831',
                    'bank_id' => '53',
                    'bank_branch_name' => 'CHHAYANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275750648',
                        ),
                    'enabled' => true,
                ),
            831 =>
                array(
                    'id' => '9832',
                    'bank_id' => '53',
                    'bank_branch_name' => 'JAMIDERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275751155',
                        ),
                    'enabled' => true,
                ),
            832 =>
                array(
                    'id' => '9833',
                    'bank_id' => '53',
                    'bank_branch_name' => 'SENBAGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275752088',
                        ),
                    'enabled' => true,
                ),
            833 =>
                array(
                    'id' => '9834',
                    'bank_id' => '53',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275811932',
                        ),
                    'enabled' => true,
                ),
            834 =>
                array(
                    'id' => '9835',
                    'bank_id' => '53',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275851455',
                        ),
                    'enabled' => true,
                ),
            835 =>
                array(
                    'id' => '9836',
                    'bank_id' => '53',
                    'bank_branch_name' => 'SHATIBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275851789',
                        ),
                    'enabled' => true,
                ),
            836 =>
                array(
                    'id' => '9837',
                    'bank_id' => '53',
                    'bank_branch_name' => 'HATIKUMRUL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275880918',
                        ),
                    'enabled' => true,
                ),
            837 =>
                array(
                    'id' => '9838',
                    'bank_id' => '53',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275912507',
                        ),
                    'enabled' => true,
                ),
            838 =>
                array(
                    'id' => '9839',
                    'bank_id' => '53',
                    'bank_branch_name' => 'SOUTH SURMA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '275913443',
                        ),
                    'enabled' => true,
                ),
            839 =>
                array(
                    'id' => '9840',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KALASHKATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280061069',
                        ),
                    'enabled' => true,
                ),
            840 =>
                array(
                    'id' => '9841',
                    'bank_id' => '54',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280100375',
                        ),
                    'enabled' => true,
                ),
            841 =>
                array(
                    'id' => '9842',
                    'bank_id' => '54',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280120434',
                        ),
                    'enabled' => true,
                ),
            842 =>
                array(
                    'id' => '9843',
                    'bank_id' => '54',
                    'bank_branch_name' => 'RAHIMANAGAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280130129',
                        ),
                    'enabled' => true,
                ),
            843 =>
                array(
                    'id' => '9844',
                    'bank_id' => '54',
                    'bank_branch_name' => 'GRIDAKALINDIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280130145',
                        ),
                    'enabled' => true,
                ),
            844 =>
                array(
                    'id' => '9845',
                    'bank_id' => '54',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280130316',
                        ),
                    'enabled' => true,
                ),
            845 =>
                array(
                    'id' => '9846',
                    'bank_id' => '54',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280130882',
                        ),
                    'enabled' => true,
                ),
            846 =>
                array(
                    'id' => '9847',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KACHUA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280130916',
                        ),
                    'enabled' => true,
                ),
            847 =>
                array(
                    'id' => '9848',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SUJATPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280131423',
                        ),
                    'enabled' => true,
                ),
            848 =>
                array(
                    'id' => '9849',
                    'bank_id' => '54',
                    'bank_branch_name' => 'NARAYANPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280131452',
                        ),
                    'enabled' => true,
                ),
            849 =>
                array(
                    'id' => '9850',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KERANIHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280154189',
                        ),
                    'enabled' => true,
                ),
            850 =>
                array(
                    'id' => '9851',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280154271',
                        ),
                    'enabled' => true,
                ),
            851 =>
                array(
                    'id' => '9852',
                    'bank_id' => '54',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280154668',
                        ),
                    'enabled' => true,
                ),
            852 =>
                array(
                    'id' => '9853',
                    'bank_id' => '54',
                    'bank_branch_name' => 'BIBIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280190451',
                        ),
                    'enabled' => true,
                ),
            853 =>
                array(
                    'id' => '9854',
                    'bank_id' => '54',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280191155',
                        ),
                    'enabled' => true,
                ),
            854 =>
                array(
                    'id' => '9855',
                    'bank_id' => '54',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280260002',
                        ),
                    'enabled' => true,
                ),
            855 =>
                array(
                    'id' => '9856',
                    'bank_id' => '54',
                    'bank_branch_name' => 'POLASHBARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280260394',
                        ),
                    'enabled' => true,
                ),
            856 =>
                array(
                    'id' => '9857',
                    'bank_id' => '54',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280260552',
                        ),
                    'enabled' => true,
                ),
            857 =>
                array(
                    'id' => '9858',
                    'bank_id' => '54',
                    'bank_branch_name' => 'GULSHAN CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280261814',
                        ),
                    'enabled' => true,
                ),
            858 =>
                array(
                    'id' => '9859',
                    'bank_id' => '54',
                    'bank_branch_name' => 'GULSHAN SOUTH AVENUE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280261919',
                        ),
                    'enabled' => true,
                ),
            859 =>
                array(
                    'id' => '9860',
                    'bank_id' => '54',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280262989',
                        ),
                    'enabled' => true,
                ),
            860 =>
                array(
                    'id' => '9861',
                    'bank_id' => '54',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280264637',
                        ),
                    'enabled' => true,
                ),
            861 =>
                array(
                    'id' => '9862',
                    'bank_id' => '54',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280270139',
                        ),
                    'enabled' => true,
                ),
            862 =>
                array(
                    'id' => '9863',
                    'bank_id' => '54',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280270513',
                        ),
                    'enabled' => true,
                ),
            863 =>
                array(
                    'id' => '9864',
                    'bank_id' => '54',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280272803',
                        ),
                    'enabled' => true,
                ),
            864 =>
                array(
                    'id' => '9865',
                    'bank_id' => '54',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280273286',
                        ),
                    'enabled' => true,
                ),
            865 =>
                array(
                    'id' => '9866',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KAKRAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280273378',
                        ),
                    'enabled' => true,
                ),
            866 =>
                array(
                    'id' => '9867',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KAMRANGIRCHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280273581',
                        ),
                    'enabled' => true,
                ),
            867 =>
                array(
                    'id' => '9868',
                    'bank_id' => '54',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280274243',
                        ),
                    'enabled' => true,
                ),
            868 =>
                array(
                    'id' => '9869',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SHYAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280276520',
                        ),
                    'enabled' => true,
                ),
            869 =>
                array(
                    'id' => '9870',
                    'bank_id' => '54',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280331007',
                        ),
                    'enabled' => true,
                ),
            870 =>
                array(
                    'id' => '9871',
                    'bank_id' => '54',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280350370',
                        ),
                    'enabled' => true,
                ),
            871 =>
                array(
                    'id' => '9872',
                    'bank_id' => '54',
                    'bank_branch_name' => 'BAKSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280390101',
                        ),
                    'enabled' => true,
                ),
            872 =>
                array(
                    'id' => '9873',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SHYAMGONJ KALIBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280390156',
                        ),
                    'enabled' => true,
                ),
            873 =>
                array(
                    'id' => '9874',
                    'bank_id' => '54',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280390769',
                        ),
                    'enabled' => true,
                ),
            874 =>
                array(
                    'id' => '9875',
                    'bank_id' => '54',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280390851',
                        ),
                    'enabled' => true,
                ),
            875 =>
                array(
                    'id' => '9876',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280471541',
                        ),
                    'enabled' => true,
                ),
            876 =>
                array(
                    'id' => '9877',
                    'bank_id' => '54',
                    'bank_branch_name' => 'CHADNIGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280580311',
                        ),
                    'enabled' => true,
                ),
            877 =>
                array(
                    'id' => '9878',
                    'bank_id' => '54',
                    'bank_branch_name' => 'HALUAGHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280611156',
                        ),
                    'enabled' => true,
                ),
            878 =>
                array(
                    'id' => '9879',
                    'bank_id' => '54',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280611756',
                        ),
                    'enabled' => true,
                ),
            879 =>
                array(
                    'id' => '9880',
                    'bank_id' => '54',
                    'bank_branch_name' => 'TARAKANDA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280612263',
                        ),
                    'enabled' => true,
                ),
            880 =>
                array(
                    'id' => '9881',
                    'bank_id' => '54',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280641184',
                        ),
                    'enabled' => true,
                ),
            881 =>
                array(
                    'id' => '9882',
                    'bank_id' => '54',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280670221',
                        ),
                    'enabled' => true,
                ),
            882 =>
                array(
                    'id' => '9883',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SIDDIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280671604',
                        ),
                    'enabled' => true,
                ),
            883 =>
                array(
                    'id' => '9884',
                    'bank_id' => '54',
                    'bank_branch_name' => 'CHINISHPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280680082',
                        ),
                    'enabled' => true,
                ),
            884 =>
                array(
                    'id' => '9885',
                    'bank_id' => '54',
                    'bank_branch_name' => 'KALMAKANDA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280720434',
                        ),
                    'enabled' => true,
                ),
            885 =>
                array(
                    'id' => '9886',
                    'bank_id' => '54',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280720739',
                        ),
                    'enabled' => true,
                ),
            886 =>
                array(
                    'id' => '9887',
                    'bank_id' => '54',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280730732',
                        ),
                    'enabled' => true,
                ),
            887 =>
                array(
                    'id' => '9888',
                    'bank_id' => '54',
                    'bank_branch_name' => 'DUMKI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280780432',
                        ),
                    'enabled' => true,
                ),
            888 =>
                array(
                    'id' => '9889',
                    'bank_id' => '54',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280781099',
                        ),
                    'enabled' => true,
                ),
            889 =>
                array(
                    'id' => '9890',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SUBIDKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280781273',
                        ),
                    'enabled' => true,
                ),
            890 =>
                array(
                    'id' => '9891',
                    'bank_id' => '54',
                    'bank_branch_name' => 'JHENAIGATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280890164',
                        ),
                    'enabled' => true,
                ),
            891 =>
                array(
                    'id' => '9892',
                    'bank_id' => '54',
                    'bank_branch_name' => 'NALITABARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280890348',
                        ),
                    'enabled' => true,
                ),
            892 =>
                array(
                    'id' => '9893',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280890551',
                        ),
                    'enabled' => true,
                ),
            893 =>
                array(
                    'id' => '9894',
                    'bank_id' => '54',
                    'bank_branch_name' => 'SREEBORDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280890643',
                        ),
                    'enabled' => true,
                ),
            894 =>
                array(
                    'id' => '9895',
                    'bank_id' => '54',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280911548',
                        ),
                    'enabled' => true,
                ),
            895 =>
                array(
                    'id' => '9896',
                    'bank_id' => '54',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '280930208',
                        ),
                    'enabled' => true,
                ),
            896 =>
                array(
                    'id' => '9897',
                    'bank_id' => '55',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285100370',
                        ),
                    'enabled' => true,
                ),
            897 =>
                array(
                    'id' => '9898',
                    'bank_id' => '55',
                    'bank_branch_name' => 'MOKAMTALA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285101937',
                        ),
                    'enabled' => true,
                ),
            898 =>
                array(
                    'id' => '9899',
                    'bank_id' => '55',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285150133',
                        ),
                    'enabled' => true,
                ),
            899 =>
                array(
                    'id' => '9900',
                    'bank_id' => '55',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285151482',
                        ),
                    'enabled' => true,
                ),
            900 =>
                array(
                    'id' => '9901',
                    'bank_id' => '55',
                    'bank_branch_name' => 'CHOWDHURI HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285152173',
                        ),
                    'enabled' => true,
                ),
            901 =>
                array(
                    'id' => '9902',
                    'bank_id' => '55',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285260210',
                        ),
                    'enabled' => true,
                ),
            902 =>
                array(
                    'id' => '9903',
                    'bank_id' => '55',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285261185',
                        ),
                    'enabled' => true,
                ),
            903 =>
                array(
                    'id' => '9904',
                    'bank_id' => '55',
                    'bank_branch_name' => 'KAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285261514',
                        ),
                    'enabled' => true,
                ),
            904 =>
                array(
                    'id' => '9905',
                    'bank_id' => '55',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285261727',
                        ),
                    'enabled' => true,
                ),
            905 =>
                array(
                    'id' => '9906',
                    'bank_id' => '55',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285262050',
                        ),
                    'enabled' => true,
                ),
            906 =>
                array(
                    'id' => '9907',
                    'bank_id' => '55',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285264632',
                        ),
                    'enabled' => true,
                ),
            907 =>
                array(
                    'id' => '9908',
                    'bank_id' => '55',
                    'bank_branch_name' => 'ZIRABO',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285264816',
                        ),
                    'enabled' => true,
                ),
            908 =>
                array(
                    'id' => '9909',
                    'bank_id' => '55',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285270000',
                        ),
                    'enabled' => true,
                ),
            909 =>
                array(
                    'id' => '9910',
                    'bank_id' => '55',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285270134',
                        ),
                    'enabled' => true,
                ),
            910 =>
                array(
                    'id' => '9911',
                    'bank_id' => '55',
                    'bank_branch_name' => 'DILKUSHA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285271933',
                        ),
                    'enabled' => true,
                ),
            911 =>
                array(
                    'id' => '9912',
                    'bank_id' => '55',
                    'bank_branch_name' => 'MIRZAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285330111',
                        ),
                    'enabled' => true,
                ),
            912 =>
                array(
                    'id' => '9913',
                    'bank_id' => '55',
                    'bank_branch_name' => 'DALAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285510407',
                        ),
                    'enabled' => true,
                ),
            913 =>
                array(
                    'id' => '9914',
                    'bank_id' => '55',
                    'bank_branch_name' => 'PACCAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285540064',
                        ),
                    'enabled' => true,
                ),
            914 =>
                array(
                    'id' => '9915',
                    'bank_id' => '55',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285610310',
                        ),
                    'enabled' => true,
                ),
            915 =>
                array(
                    'id' => '9916',
                    'bank_id' => '55',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285671188',
                        ),
                    'enabled' => true,
                ),
            916 =>
                array(
                    'id' => '9917',
                    'bank_id' => '55',
                    'bank_branch_name' => 'PANCHRUKHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285671391',
                        ),
                    'enabled' => true,
                ),
            917 =>
                array(
                    'id' => '9918',
                    'bank_id' => '55',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '285680858',
                        ),
                    'enabled' => true,
                ),
            918 =>
                array(
                    'id' => '9919',
                    'bank_id' => '56',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290100378',
                        ),
                    'enabled' => true,
                ),
            919 =>
                array(
                    'id' => '9920',
                    'bank_id' => '56',
                    'bank_branch_name' => 'RAHIMANAGAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290130122',
                        ),
                    'enabled' => true,
                ),
            920 =>
                array(
                    'id' => '9921',
                    'bank_id' => '56',
                    'bank_branch_name' => 'PATENGA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290150560',
                        ),
                    'enabled' => true,
                ),
            921 =>
                array(
                    'id' => '9922',
                    'bank_id' => '56',
                    'bank_branch_name' => 'CHITTAGONG(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290152142',
                        ),
                    'enabled' => true,
                ),
            922 =>
                array(
                    'id' => '9923',
                    'bank_id' => '56',
                    'bank_branch_name' => 'GEC MOUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290152968',
                        ),
                    'enabled' => true,
                ),
            923 =>
                array(
                    'id' => '9924',
                    'bank_id' => '56',
                    'bank_branch_name' => 'SATKANIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290157068',
                        ),
                    'enabled' => true,
                ),
            924 =>
                array(
                    'id' => '9925',
                    'bank_id' => '56',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290191158',
                        ),
                    'enabled' => true,
                ),
            925 =>
                array(
                    'id' => '9926',
                    'bank_id' => '56',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290260005',
                        ),
                    'enabled' => true,
                ),
            926 =>
                array(
                    'id' => '9927',
                    'bank_id' => '56',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290260218',
                        ),
                    'enabled' => true,
                ),
            927 =>
                array(
                    'id' => '9928',
                    'bank_id' => '56',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290260221',
                        ),
                    'enabled' => true,
                ),
            928 =>
                array(
                    'id' => '9929',
                    'bank_id' => '56',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290260500',
                        ),
                    'enabled' => true,
                ),
            929 =>
                array(
                    'id' => '9930',
                    'bank_id' => '56',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290261725',
                        ),
                    'enabled' => true,
                ),
            930 =>
                array(
                    'id' => '9931',
                    'bank_id' => '56',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290264630',
                        ),
                    'enabled' => true,
                ),
            931 =>
                array(
                    'id' => '9932',
                    'bank_id' => '56',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290270345',
                        ),
                    'enabled' => true,
                ),
            932 =>
                array(
                    'id' => '9933',
                    'bank_id' => '56',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290270516',
                        ),
                    'enabled' => true,
                ),
            933 =>
                array(
                    'id' => '9934',
                    'bank_id' => '56',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290271278',
                        ),
                    'enabled' => true,
                ),
            934 =>
                array(
                    'id' => '9935',
                    'bank_id' => '56',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290271902',
                        ),
                    'enabled' => true,
                ),
            935 =>
                array(
                    'id' => '9936',
                    'bank_id' => '56',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290273289',
                        ),
                    'enabled' => true,
                ),
            936 =>
                array(
                    'id' => '9937',
                    'bank_id' => '56',
                    'bank_branch_name' => 'HOTAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290330164',
                        ),
                    'enabled' => true,
                ),
            937 =>
                array(
                    'id' => '9938',
                    'bank_id' => '56',
                    'bank_branch_name' => 'SHAFIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290331426',
                        ),
                    'enabled' => true,
                ),
            938 =>
                array(
                    'id' => '9939',
                    'bank_id' => '56',
                    'bank_branch_name' => 'MADHABPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290360884',
                        ),
                    'enabled' => true,
                ),
            939 =>
                array(
                    'id' => '9940',
                    'bank_id' => '56',
                    'bank_branch_name' => 'KHULNA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290471728',
                        ),
                    'enabled' => true,
                ),
            940 =>
                array(
                    'id' => '9941',
                    'bank_id' => '56',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290581184',
                        ),
                    'enabled' => true,
                ),
            941 =>
                array(
                    'id' => '9942',
                    'bank_id' => '56',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290670224',
                        ),
                    'enabled' => true,
                ),
            942 =>
                array(
                    'id' => '9943',
                    'bank_id' => '56',
                    'bank_branch_name' => 'MOGRAPARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290671065',
                        ),
                    'enabled' => true,
                ),
            943 =>
                array(
                    'id' => '9944',
                    'bank_id' => '56',
                    'bank_branch_name' => 'PANCHDOWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290680148',
                        ),
                    'enabled' => true,
                ),
            944 =>
                array(
                    'id' => '9945',
                    'bank_id' => '56',
                    'bank_branch_name' => 'PALLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290751785',
                        ),
                    'enabled' => true,
                ),
            945 =>
                array(
                    'id' => '9946',
                    'bank_id' => '56',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290811933',
                        ),
                    'enabled' => true,
                ),
            946 =>
                array(
                    'id' => '9947',
                    'bank_id' => '56',
                    'bank_branch_name' => 'ZAJIRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290860700',
                        ),
                    'enabled' => true,
                ),
            947 =>
                array(
                    'id' => '9948',
                    'bank_id' => '56',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290911541',
                        ),
                    'enabled' => true,
                ),
            948 =>
                array(
                    'id' => '9949',
                    'bank_id' => '56',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290912508',
                        ),
                    'enabled' => true,
                ),
            949 =>
                array(
                    'id' => '9950',
                    'bank_id' => '56',
                    'bank_branch_name' => 'SYLHET(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '290913794',
                        ),
                    'enabled' => true,
                ),
            950 =>
                array(
                    'id' => '9951',
                    'bank_id' => '57',
                    'bank_branch_name' => 'CHAR FASHION',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295090225',
                        ),
                    'enabled' => true,
                ),
            951 =>
                array(
                    'id' => '9952',
                    'bank_id' => '57',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295120108',
                        ),
                    'enabled' => true,
                ),
            952 =>
                array(
                    'id' => '9953',
                    'bank_id' => '57',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295150136',
                        ),
                    'enabled' => true,
                ),
            953 =>
                array(
                    'id' => '9954',
                    'bank_id' => '57',
                    'bank_branch_name' => 'KANKAPAITH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295190475',
                        ),
                    'enabled' => true,
                ),
            954 =>
                array(
                    'id' => '9955',
                    'bank_id' => '57',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295260226',
                        ),
                    'enabled' => true,
                ),
            955 =>
                array(
                    'id' => '9956',
                    'bank_id' => '57',
                    'bank_branch_name' => 'BANGLA MOTOR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295260813',
                        ),
                    'enabled' => true,
                ),
            956 =>
                array(
                    'id' => '9957',
                    'bank_id' => '57',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295261720',
                        ),
                    'enabled' => true,
                ),
            957 =>
                array(
                    'id' => '9958',
                    'bank_id' => '57',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295264635',
                        ),
                    'enabled' => true,
                ),
            958 =>
                array(
                    'id' => '9959',
                    'bank_id' => '57',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295270003',
                        ),
                    'enabled' => true,
                ),
            959 =>
                array(
                    'id' => '9960',
                    'bank_id' => '57',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295270137',
                        ),
                    'enabled' => true,
                ),
            960 =>
                array(
                    'id' => '9961',
                    'bank_id' => '57',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295270458',
                        ),
                    'enabled' => true,
                ),
            961 =>
                array(
                    'id' => '9962',
                    'bank_id' => '57',
                    'bank_branch_name' => 'SHEIKH KAMAL SARONI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295270474',
                        ),
                    'enabled' => true,
                ),
            962 =>
                array(
                    'id' => '9963',
                    'bank_id' => '57',
                    'bank_branch_name' => 'MITFORD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295274067',
                        ),
                    'enabled' => true,
                ),
            963 =>
                array(
                    'id' => '9964',
                    'bank_id' => '57',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295274241',
                        ),
                    'enabled' => true,
                ),
            964 =>
                array(
                    'id' => '9965',
                    'bank_id' => '57',
                    'bank_branch_name' => 'KANAIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295290917',
                        ),
                    'enabled' => true,
                ),
            965 =>
                array(
                    'id' => '9966',
                    'bank_id' => '57',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295331005',
                        ),
                    'enabled' => true,
                ),
            966 =>
                array(
                    'id' => '9967',
                    'bank_id' => '57',
                    'bank_branch_name' => 'SHEIKH FAJILATUNNESSA MUJIB EYE HOSPITAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295350152',
                        ),
                    'enabled' => true,
                ),
            967 =>
                array(
                    'id' => '9968',
                    'bank_id' => '57',
                    'bank_branch_name' => 'ZINNAHNAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295440059',
                        ),
                    'enabled' => true,
                ),
            968 =>
                array(
                    'id' => '9969',
                    'bank_id' => '57',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295471549',
                        ),
                    'enabled' => true,
                ),
            969 =>
                array(
                    'id' => '9970',
                    'bank_id' => '57',
                    'bank_branch_name' => 'BHERAMARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295500281',
                        ),
                    'enabled' => true,
                ),
            970 =>
                array(
                    'id' => '9971',
                    'bank_id' => '57',
                    'bank_branch_name' => 'SHIBCHAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295540704',
                        ),
                    'enabled' => true,
                ),
            971 =>
                array(
                    'id' => '9972',
                    'bank_id' => '57',
                    'bank_branch_name' => 'SHEKHAR NAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295591308',
                        ),
                    'enabled' => true,
                ),
            972 =>
                array(
                    'id' => '9973',
                    'bank_id' => '57',
                    'bank_branch_name' => 'SHAMBHUGONJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295610092',
                        ),
                    'enabled' => true,
                ),
            973 =>
                array(
                    'id' => '9974',
                    'bank_id' => '57',
                    'bank_branch_name' => 'KANCHAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295670795',
                        ),
                    'enabled' => true,
                ),
            974 =>
                array(
                    'id' => '9975',
                    'bank_id' => '57',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295811938',
                        ),
                    'enabled' => true,
                ),
            975 =>
                array(
                    'id' => '9976',
                    'bank_id' => '57',
                    'bank_branch_name' => 'PIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295851369',
                        ),
                    'enabled' => true,
                ),
            976 =>
                array(
                    'id' => '9977',
                    'bank_id' => '57',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295910042',
                        ),
                    'enabled' => true,
                ),
            977 =>
                array(
                    'id' => '9978',
                    'bank_id' => '57',
                    'bank_branch_name' => 'SHAKHIPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '295932204',
                        ),
                    'enabled' => true,
                ),
            978 =>
                array(
                    'id' => '9979',
                    'bank_id' => '58',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300100376',
                        ),
                    'enabled' => true,
                ),
            979 =>
                array(
                    'id' => '9980',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ALANKAR MOR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150142',
                        ),
                    'enabled' => true,
                ),
            980 =>
                array(
                    'id' => '9981',
                    'bank_id' => '58',
                    'bank_branch_name' => 'AGRABAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150168',
                        ),
                    'enabled' => true,
                ),
            981 =>
                array(
                    'id' => '9982',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ADHUNAGAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150450',
                        ),
                    'enabled' => true,
                ),
            982 =>
                array(
                    'id' => '9983',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ANOWARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150526',
                        ),
                    'enabled' => true,
                ),
            983 =>
                array(
                    'id' => '9984',
                    'bank_id' => '58',
                    'bank_branch_name' => 'CHAMBAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150571',
                        ),
                    'enabled' => true,
                ),
            984 =>
                array(
                    'id' => '9985',
                    'bank_id' => '58',
                    'bank_branch_name' => 'BOALKHALI CHOWDHURY HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150597',
                        ),
                    'enabled' => true,
                ),
            985 =>
                array(
                    'id' => '9986',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ISAPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300150650',
                        ),
                    'enabled' => true,
                ),
            986 =>
                array(
                    'id' => '9987',
                    'bank_id' => '58',
                    'bank_branch_name' => 'BARABKUNDA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300151033',
                        ),
                    'enabled' => true,
                ),
            987 =>
                array(
                    'id' => '9988',
                    'bank_id' => '58',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300152566',
                        ),
                    'enabled' => true,
                ),
            988 =>
                array(
                    'id' => '9989',
                    'bank_id' => '58',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300153644',
                        ),
                    'enabled' => true,
                ),
            989 =>
                array(
                    'id' => '9990',
                    'bank_id' => '58',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300154272',
                        ),
                    'enabled' => true,
                ),
            990 =>
                array(
                    'id' => '9991',
                    'bank_id' => '58',
                    'bank_branch_name' => 'NASIRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300155534',
                        ),
                    'enabled' => true,
                ),
            991 =>
                array(
                    'id' => '9992',
                    'bank_id' => '58',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300156133',
                        ),
                    'enabled' => true,
                ),
            992 =>
                array(
                    'id' => '9993',
                    'bank_id' => '58',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300156162',
                        ),
                    'enabled' => true,
                ),
            993 =>
                array(
                    'id' => '9994',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ROWSHAN HAT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300156588',
                        ),
                    'enabled' => true,
                ),
            994 =>
                array(
                    'id' => '9995',
                    'bank_id' => '58',
                    'bank_branch_name' => 'GUNABATI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300192171',
                        ),
                    'enabled' => true,
                ),
            995 =>
                array(
                    'id' => '9996',
                    'bank_id' => '58',
                    'bank_branch_name' => 'LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300220069',
                        ),
                    'enabled' => true,
                ),
            996 =>
                array(
                    'id' => '9997',
                    'bank_id' => '58',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300220256',
                        ),
                    'enabled' => true,
                ),
            997 =>
                array(
                    'id' => '9998',
                    'bank_id' => '58',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300260003',
                        ),
                    'enabled' => true,
                ),
            998 =>
                array(
                    'id' => '9999',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300260229',
                        ),
                    'enabled' => true,
                ),
            999 =>
                array(
                    'id' => '10000',
                    'bank_id' => '58',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300260432',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
