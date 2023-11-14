<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch6Seeder extends Seeder
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
                'id' => '5001',
                'bank_id' => '26',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '140581184',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '5002',
                'bank_id' => '26',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '140611759',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '5003',
                'bank_id' => '26',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '140641187',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '5004',
                'bank_id' => '26',
                'name' => 'NAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '140641240',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '5005',
                'bank_id' => '26',
                'name' => 'NEAMATPUR',
                'bank_branch_data' => [
                    'routing_no' => '140641279',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '5006',
                'bank_id' => '26',
                'name' => 'SAPAHAR',
                'bank_branch_data' => [
                    'routing_no' => '140641758',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '5007',
                'bank_id' => '26',
                'name' => 'SHISHAHAT',
                'bank_branch_data' => [
                    'routing_no' => '140641895',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '5008',
                'bank_id' => '26',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '140670224',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '5009',
                'bank_id' => '26',
                'name' => 'MADANPUR',
                'bank_branch_data' => [
                    'routing_no' => '140670974',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '5010',
                'bank_id' => '26',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '140671249',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '5011',
                'bank_id' => '26',
                'name' => 'SHIMRAIL',
                'bank_branch_data' => [
                    'routing_no' => '140671573',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '5012',
                'bank_id' => '26',
                'name' => 'VELA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '140681392',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '5013',
                'bank_id' => '26',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '140691090',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '5014',
                'bank_id' => '26',
                'name' => 'CHAPAINAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '140700257',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '5015',
                'bank_id' => '26',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '140730735',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '5016',
                'bank_id' => '26',
                'name' => 'AMISHAPARA SME',
                'bank_branch_data' => [
                    'routing_no' => '140750102',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '5017',
                'bank_id' => '26',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '140750199',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '5018',
                'bank_id' => '26',
                'name' => 'BAZRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '140750315',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '5019',
                'bank_id' => '26',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '140750678',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '5020',
                'bank_id' => '26',
                'name' => 'KANKIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '140751301',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '5021',
                'bank_id' => '26',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '140751572',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '5022',
                'bank_id' => '26',
                'name' => 'SAMIR MUNSHIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '140751998',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '5023',
                'bank_id' => '26',
                'name' => 'SUBARNA CHAR',
                'bank_branch_data' => [
                    'routing_no' => '140752355',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '5024',
                'bank_id' => '26',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '140761788',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '5025',
                'bank_id' => '26',
                'name' => 'DEBIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '140770195',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '5026',
                'bank_id' => '26',
                'name' => 'KALAYIA',
                'bank_branch_data' => [
                    'routing_no' => '140780093',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '5027',
                'bank_id' => '26',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '140781092',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '5028',
                'bank_id' => '26',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '140811933',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '5029',
                'bank_id' => '26',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '140840520',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '5030',
                'bank_id' => '26',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '140851456',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '5031',
                'bank_id' => '26',
                'name' => 'BHAJESHWAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '140860076',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '5032',
                'bank_id' => '26',
                'name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'routing_no' => '140860197',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '5033',
                'bank_id' => '26',
                'name' => 'GOSHAIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '140860342',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '5034',
                'bank_id' => '26',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '140901122',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '5035',
                'bank_id' => '26',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '140910313',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '5036',
                'bank_id' => '26',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '140912508',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '5037',
                'bank_id' => '26',
                'name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '140913499',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '5038',
                'bank_id' => '26',
                'name' => 'GORAI',
                'bank_branch_data' => [
                    'routing_no' => '140931039',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '5039',
                'bank_id' => '26',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '140932209',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '5040',
                'bank_id' => '26',
                'name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '140940970',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '5041',
                'bank_id' => '27',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '145060284',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '5042',
                'bank_id' => '27',
                'name' => 'GOURNADI',
                'bank_branch_data' => [
                    'routing_no' => '145060826',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '5043',
                'bank_id' => '27',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '145100373',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '5044',
                'bank_id' => '27',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '145120432',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '5045',
                'bank_id' => '27',
                'name' => 'ABUTORAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145150107',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '5046',
                'bank_id' => '27',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '145150136',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '5047',
                'bank_id' => '27',
                'name' => 'ALANKAR MOR',
                'bank_branch_data' => [
                    'routing_no' => '145150149',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '5048',
                'bank_id' => '27',
                'name' => 'AMAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145150257',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '5049',
                'bank_id' => '27',
                'name' => 'KALURGHAT INDUSTRIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '145150273',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '5050',
                'bank_id' => '27',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '145150460',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '5051',
                'bank_id' => '27',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '145151485',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '5052',
                'bank_id' => '27',
                'name' => 'CHITTAGONG MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '145152026',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '5053',
                'bank_id' => '27',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '145153641',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '5054',
                'bank_id' => '27',
                'name' => 'KARNAPHULI EPZ',
                'bank_branch_data' => [
                    'routing_no' => '145154079',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '5055',
                'bank_id' => '27',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145154279',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '5056',
                'bank_id' => '27',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '145155328',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '5057',
                'bank_id' => '27',
                'name' => 'SARKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '145155410',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '5058',
                'bank_id' => '27',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '145155599',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '5059',
                'bank_id' => '27',
                'name' => 'NAZU MEA HAT SME',
                'bank_branch_data' => [
                    'routing_no' => '145155636',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '5060',
                'bank_id' => '27',
                'name' => 'OXYGEN MOUR',
                'bank_branch_data' => [
                    'routing_no' => '145155878',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '5061',
                'bank_id' => '27',
                'name' => 'KERANI HAAT',
                'bank_branch_data' => [
                    'routing_no' => '145157863',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '5062',
                'bank_id' => '27',
                'name' => 'KADAIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145190217',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '5063',
                'bank_id' => '27',
                'name' => 'GOALMARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145190420',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '5064',
                'bank_id' => '27',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '145191153',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '5065',
                'bank_id' => '27',
                'name' => 'DHORKORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145191795',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '5066',
                'bank_id' => '27',
                'name' => 'LAKSAM SME',
                'bank_branch_data' => [
                    'routing_no' => '145192723',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '5067',
                'bank_id' => '27',
                'name' => 'RAMCHANDRAPUR BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '145193656',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '5068',
                'bank_id' => '27',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '145220161',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '5069',
                'bank_id' => '27',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145220253',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '5070',
                'bank_id' => '27',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '145260226',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '5071',
                'bank_id' => '27',
                'name' => 'DUMNI',
                'bank_branch_data' => [
                    'routing_no' => '145260363',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '5072',
                'bank_id' => '27',
                'name' => 'BARAIPARA',
                'bank_branch_data' => [
                    'routing_no' => '145260413',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '5073',
                'bank_id' => '27',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '145260439',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '5074',
                'bank_id' => '27',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '145260505',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '5075',
                'bank_id' => '27',
                'name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '145260521',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '5076',
                'bank_id' => '27',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '145260550',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '5077',
                'bank_id' => '27',
                'name' => 'BASHUNDHARA CITY',
                'bank_branch_data' => [
                    'routing_no' => '145260589',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '5078',
                'bank_id' => '27',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '145261188',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '5079',
                'bank_id' => '27',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '145261333',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '5080',
                'bank_id' => '27',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '145261720',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '5081',
                'bank_id' => '27',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '145262987',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '5082',
                'bank_id' => '27',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '145263281',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '5083',
                'bank_id' => '27',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '145263586',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '5084',
                'bank_id' => '27',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '145263610',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '5085',
                'bank_id' => '27',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '145263702',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '5086',
                'bank_id' => '27',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '145264093',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '5087',
                'bank_id' => '27',
                'name' => 'SHAH MUKHDUM AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '145264222',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '5088',
                'bank_id' => '27',
                'name' => 'TEJGAON',
                'bank_branch_data' => [
                    'routing_no' => '145264480',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '5089',
                'bank_id' => '27',
                'name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '145264693',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '5090',
                'bank_id' => '27',
                'name' => 'MTB CENTER CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '145264851',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '5091',
                'bank_id' => '27',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '145270003',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '5092',
                'bank_id' => '27',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '145270137',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '5093',
                'bank_id' => '27',
                'name' => 'MTB TOWER',
                'bank_branch_data' => [
                    'routing_no' => '145270232',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '5094',
                'bank_id' => '27',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145270553',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '5095',
                'bank_id' => '27',
                'name' => 'CHAWK MOGULTULY',
                'bank_branch_data' => [
                    'routing_no' => '145271307',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '5096',
                'bank_id' => '27',
                'name' => 'DHOLAIKHAL',
                'bank_branch_data' => [
                    'routing_no' => '145271844',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '5097',
                'bank_id' => '27',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '145271907',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '5098',
                'bank_id' => '27',
                'name' => 'FULBARIA',
                'bank_branch_data' => [
                    'routing_no' => '145272380',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '5099',
                'bank_id' => '27',
                'name' => 'HASNABAD SME',
                'bank_branch_data' => [
                    'routing_no' => '145272580',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '5100',
                'bank_id' => '27',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '145273376',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '5101',
                'bank_id' => '27',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '145273589',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '5102',
                'bank_id' => '27',
                'name' => 'MALIBAGH CHOWDHURYPARA',
                'bank_branch_data' => [
                    'routing_no' => '145273976',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '5103',
                'bank_id' => '27',
                'name' => 'CARD DIVISION',
                'bank_branch_data' => [
                    'routing_no' => '145274241',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '5104',
                'bank_id' => '27',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '145275358',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '5105',
                'bank_id' => '27',
                'name' => 'SARULIA BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '145276052',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '5106',
                'bank_id' => '27',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '145276315',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '5107',
                'bank_id' => '27',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '145280677',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '5108',
                'bank_id' => '27',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '145290520',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '5109',
                'bank_id' => '27',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '145300373',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '5110',
                'bank_id' => '27',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '145300528',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '5111',
                'bank_id' => '27',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145320582',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '5112',
                'bank_id' => '27',
                'name' => 'MONIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145330143',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '5113',
                'bank_id' => '27',
                'name' => 'BAGHER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145330185',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '5114',
                'bank_id' => '27',
                'name' => 'BORMI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145330280',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '5115',
                'bank_id' => '27',
                'name' => 'CHANDRA',
                'bank_branch_data' => [
                    'routing_no' => '145330406',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '5116',
                'bank_id' => '27',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '145330527',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '5117',
                'bank_id' => '27',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145330822',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '5118',
                'bank_id' => '27',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '145330880',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '5119',
                'bank_id' => '27',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '145331634',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '5120',
                'bank_id' => '27',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145360618',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '5121',
                'bank_id' => '27',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '145380401',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '5122',
                'bank_id' => '27',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '145410942',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '5123',
                'bank_id' => '27',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '145471549',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '5124',
                'bank_id' => '27',
                'name' => 'ULIPUR',
                'bank_branch_data' => [
                    'routing_no' => '145490704',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '5125',
                'bank_id' => '27',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '145500944',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '5126',
                'bank_id' => '27',
                'name' => 'HAIDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145510521',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '5127',
                'bank_id' => '27',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '145510976',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '5128',
                'bank_id' => '27',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '145540409',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '5129',
                'bank_id' => '27',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '145581189',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '5130',
                'bank_id' => '27',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '145591429',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '5131',
                'bank_id' => '27',
                'name' => 'GAFFARGAON SME',
                'bank_branch_data' => [
                    'routing_no' => '145611017',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '5132',
                'bank_id' => '27',
                'name' => 'JAMIRDIA MASTERBARI',
                'bank_branch_data' => [
                    'routing_no' => '145611462',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '5133',
                'bank_id' => '27',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '145611754',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '5134',
                'bank_id' => '27',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '145641182',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '5135',
                'bank_id' => '27',
                'name' => 'NARAYANGANJ BSCIC',
                'bank_branch_data' => [
                    'routing_no' => '145670232',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '5136',
                'bank_id' => '27',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145671181',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '5137',
                'bank_id' => '27',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '145671699',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '5138',
                'bank_id' => '27',
                'name' => 'MEGHNA',
                'bank_branch_data' => [
                    'routing_no' => '145672869',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '5139',
                'bank_id' => '27',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '145680677',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '5140',
                'bank_id' => '27',
                'name' => 'KHILPARA',
                'bank_branch_data' => [
                    'routing_no' => '145751456',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '5141',
                'bank_id' => '27',
                'name' => 'ISHWARDI SME',
                'bank_branch_data' => [
                    'routing_no' => '145761220',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '5142',
                'bank_id' => '27',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '145761783',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '5143',
                'bank_id' => '27',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '145811938',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '5144',
                'bank_id' => '27',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '145851451',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '5145',
                'bank_id' => '27',
                'name' => 'NARIA SME',
                'bank_branch_data' => [
                    'routing_no' => '145860592',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '5146',
                'bank_id' => '27',
                'name' => 'BELKUCHI SME',
                'bank_branch_data' => [
                    'routing_no' => '145880235',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '5147',
                'bank_id' => '27',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '145881876',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '5148',
                'bank_id' => '27',
                'name' => 'SYEDPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '145901198',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '5149',
                'bank_id' => '27',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '145912503',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '5150',
                'bank_id' => '27',
                'name' => 'SHAH PARAN GATE',
                'bank_branch_data' => [
                    'routing_no' => '145913131',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '5151',
                'bank_id' => '27',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '145913557',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '5152',
                'bank_id' => '27',
                'name' => 'DHAN BARI SME',
                'bank_branch_data' => [
                    'routing_no' => '145930680',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '5153',
                'bank_id' => '27',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '145932291',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '5154',
                'bank_id' => '27',
                'name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '145940975',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '5155',
                'bank_id' => '28',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '150060282',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '5156',
                'bank_id' => '28',
                'name' => 'TORKI BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '150062219',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '5157',
                'bank_id' => '28',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '150090102',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '5158',
                'bank_id' => '28',
                'name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '150090223',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '5159',
                'bank_id' => '28',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '150100371',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '5160',
                'bank_id' => '28',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '150120430',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '5161',
                'bank_id' => '28',
                'name' => 'SOYFULLAHKANDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150121305',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '5162',
                'bank_id' => '28',
                'name' => 'CHANDPUR NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150130370',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '5163',
                'bank_id' => '28',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150130888',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '5164',
                'bank_id' => '28',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '150150134',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '5165',
                'bank_id' => '28',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '150150468',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '5166',
                'bank_id' => '28',
                'name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '150151212',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '5167',
                'bank_id' => '28',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '150151483',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '5168',
                'bank_id' => '28',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '150151759',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '5169',
                'bank_id' => '28',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150151933',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '5170',
                'bank_id' => '28',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '150153160',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '5171',
                'bank_id' => '28',
                'name' => 'HATHAZARI SME',
                'bank_branch_data' => [
                    'routing_no' => '150153236',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '5172',
                'bank_id' => '28',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '150153649',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '5173',
                'bank_id' => '28',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150154277',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '5174',
                'bank_id' => '28',
                'name' => 'MIRSARAI',
                'bank_branch_data' => [
                    'routing_no' => '150155050',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '5175',
                'bank_id' => '28',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '150155326',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '5176',
                'bank_id' => '28',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '150155926',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '5177',
                'bank_id' => '28',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '150156167',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '5178',
                'bank_id' => '28',
                'name' => 'RANGUNIA',
                'bank_branch_data' => [
                    'routing_no' => '150156404',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '5179',
                'bank_id' => '28',
                'name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '150156912',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '5180',
                'bank_id' => '28',
                'name' => 'SK. MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '150157429',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '5181',
                'bank_id' => '28',
                'name' => 'BARURA',
                'bank_branch_data' => [
                    'routing_no' => '150190499',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '5182',
                'bank_id' => '28',
                'name' => 'BARURA SME',
                'bank_branch_data' => [
                    'routing_no' => '150190507',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '5183',
                'bank_id' => '28',
                'name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '150191069',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '5184',
                'bank_id' => '28',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '150191151',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '5185',
                'bank_id' => '28',
                'name' => 'GOURIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150192147',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '5186',
                'bank_id' => '28',
                'name' => 'MUDAFARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150193133',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '5187',
                'bank_id' => '28',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150220251',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '5188',
                'bank_id' => '28',
                'name' => 'ABDULLAHPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150260037',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '5189',
                'bank_id' => '28',
                'name' => 'ASAD GATE',
                'bank_branch_data' => [
                    'routing_no' => '150260190',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '5190',
                'bank_id' => '28',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '150260224',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '5191',
                'bank_id' => '28',
                'name' => 'SONARGAON JANAPATH',
                'bank_branch_data' => [
                    'routing_no' => '150260240',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '5192',
                'bank_id' => '28',
                'name' => 'SATURIA',
                'bank_branch_data' => [
                    'routing_no' => '150260266',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '5193',
                'bank_id' => '28',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '150260437',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '5194',
                'bank_id' => '28',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '150261186',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '5195',
                'bank_id' => '28',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '150261331',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '5196',
                'bank_id' => '28',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '150261728',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '5197',
                'bank_id' => '28',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150262530',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '5198',
                'bank_id' => '28',
                'name' => 'LAKE CIRCUS',
                'bank_branch_data' => [
                    'routing_no' => '150262806',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '5199',
                'bank_id' => '28',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '150262985',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '5200',
                'bank_id' => '28',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '150263197',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '5201',
                'bank_id' => '28',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '150263289',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '5202',
                'bank_id' => '28',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '150263700',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '5203',
                'bank_id' => '28',
                'name' => 'RIFLE SQUARE',
                'bank_branch_data' => [
                    'routing_no' => '150263968',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '5204',
                'bank_id' => '28',
                'name' => 'ROKEYA SHARANI',
                'bank_branch_data' => [
                    'routing_no' => '150264004',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '5205',
                'bank_id' => '28',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '150264091',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '5206',
                'bank_id' => '28',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '150264633',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '5207',
                'bank_id' => '28',
                'name' => 'Z.H.S.W. MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '150264783',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '5208',
                'bank_id' => '28',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '150270001',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '5209',
                'bank_id' => '28',
                'name' => 'RAJENDRAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150270298',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '5210',
                'bank_id' => '28',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150270348',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '5211',
                'bank_id' => '28',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150270551',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '5212',
                'bank_id' => '28',
                'name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '150270643',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '5213',
                'bank_id' => '28',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '150270885',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '5214',
                'bank_id' => '28',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '150271905',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '5215',
                'bank_id' => '28',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '150272320',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '5216',
                'bank_id' => '28',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '150272683',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '5217',
                'bank_id' => '28',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150272809',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '5218',
                'bank_id' => '28',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '150272988',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '5219',
                'bank_id' => '28',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '150273224',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '5220',
                'bank_id' => '28',
                'name' => 'JURAIN',
                'bank_branch_data' => [
                    'routing_no' => '150273316',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '5221',
                'bank_id' => '28',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '150273345',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '5222',
                'bank_id' => '28',
                'name' => 'KHOLAMORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150273682',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '5223',
                'bank_id' => '28',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '150273945',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '5224',
                'bank_id' => '28',
                'name' => 'MEGHULA',
                'bank_branch_data' => [
                    'routing_no' => '150274049',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '5225',
                'bank_id' => '28',
                'name' => 'MIRHAJIRBAGH',
                'bank_branch_data' => [
                    'routing_no' => '150274078',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '5226',
                'bank_id' => '28',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '150274249',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '5227',
                'bank_id' => '28',
                'name' => 'NEW ESKATON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '150275035',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '5228',
                'bank_id' => '28',
                'name' => 'NORTH BROOK HALL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '150275051',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '5229',
                'bank_id' => '28',
                'name' => 'BIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '150280341',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '5230',
                'bank_id' => '28',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '150280675',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '5231',
                'bank_id' => '28',
                'name' => 'BHANGA',
                'bank_branch_data' => [
                    'routing_no' => '150290281',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '5232',
                'bank_id' => '28',
                'name' => 'BOALMARI SME',
                'bank_branch_data' => [
                    'routing_no' => '150290357',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '5233',
                'bank_id' => '28',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '150290528',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '5234',
                'bank_id' => '28',
                'name' => 'GOALCHAMAT',
                'bank_branch_data' => [
                    'routing_no' => '150290610',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '5235',
                'bank_id' => '28',
                'name' => 'KANAIPUR BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '150290928',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '5236',
                'bank_id' => '28',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '150300371',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '5237',
                'bank_id' => '28',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '150300526',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '5238',
                'bank_id' => '28',
                'name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '150301488',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '5239',
                'bank_id' => '28',
                'name' => 'GAIBANDHA',
                'bank_branch_data' => [
                    'routing_no' => '150320522',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '5240',
                'bank_id' => '28',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '150330525',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '5241',
                'bank_id' => '28',
                'name' => 'JAINA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150330675',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '5242',
                'bank_id' => '28',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '150330796',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '5243',
                'bank_id' => '28',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '150330888',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '5244',
                'bank_id' => '28',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '150331674',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '5245',
                'bank_id' => '28',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150350376',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '5246',
                'bank_id' => '28',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150360616',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '5247',
                'bank_id' => '28',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '150380409',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '5248',
                'bank_id' => '28',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '150390857',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '5249',
                'bank_id' => '28',
                'name' => 'CHOWGACHA',
                'bank_branch_data' => [
                    'routing_no' => '150410553',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '5250',
                'bank_id' => '28',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '150410940',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '5251',
                'bank_id' => '28',
                'name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'routing_no' => '150420314',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '5252',
                'bank_id' => '28',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '150440644',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '5253',
                'bank_id' => '28',
                'name' => 'KALIGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '150440802',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '5254',
                'bank_id' => '28',
                'name' => 'KDA',
                'bank_branch_data' => [
                    'routing_no' => '150471392',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '5255',
                'bank_id' => '28',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '150471547',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '5256',
                'bank_id' => '28',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150480220',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '5257',
                'bank_id' => '28',
                'name' => 'GOCHIHATA SME',
                'bank_branch_data' => [
                    'routing_no' => '150480325',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '5258',
                'bank_id' => '28',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150480675',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '5259',
                'bank_id' => '28',
                'name' => 'PAKUNDIA SME',
                'bank_branch_data' => [
                    'routing_no' => '150481087',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '5260',
                'bank_id' => '28',
                'name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '150490407',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '5261',
                'bank_id' => '28',
                'name' => 'ROWMARI',
                'bank_branch_data' => [
                    'routing_no' => '150490649',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '5262',
                'bank_id' => '28',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '150500942',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '5263',
                'bank_id' => '28',
                'name' => 'BURIMARI',
                'bank_branch_data' => [
                    'routing_no' => '150520193',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '5264',
                'bank_id' => '28',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '150540407',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '5265',
                'bank_id' => '28',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '150540702',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '5266',
                'bank_id' => '28',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150560616',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '5267',
                'bank_id' => '28',
                'name' => 'SINGAIR SME',
                'bank_branch_data' => [
                    'routing_no' => '150560832',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '5268',
                'bank_id' => '28',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '150580946',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '5269',
                'bank_id' => '28',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150581187',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '5270',
                'bank_id' => '28',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '150581729',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '5271',
                'bank_id' => '28',
                'name' => 'NIMTALI',
                'bank_branch_data' => [
                    'routing_no' => '150590057',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '5272',
                'bank_id' => '28',
                'name' => 'BAGHRA BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '150590099',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '5273',
                'bank_id' => '28',
                'name' => 'BALURCHAR',
                'bank_branch_data' => [
                    'routing_no' => '150590165',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '5274',
                'bank_id' => '28',
                'name' => 'BHAGYAKUL',
                'bank_branch_data' => [
                    'routing_no' => '150590310',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '5275',
                'bank_id' => '28',
                'name' => 'GAZARIA',
                'bank_branch_data' => [
                    'routing_no' => '150590460',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '5276',
                'bank_id' => '28',
                'name' => 'ISAPURA SME',
                'bank_branch_data' => [
                    'routing_no' => '150590699',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '5277',
                'bank_id' => '28',
                'name' => 'LOUHAJONG',
                'bank_branch_data' => [
                    'routing_no' => '150590857',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '5278',
                'bank_id' => '28',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150591030',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '5279',
                'bank_id' => '28',
                'name' => 'SERAJDIKHAN',
                'bank_branch_data' => [
                    'routing_no' => '150591272',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '5280',
                'bank_id' => '28',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '150591427',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '5281',
                'bank_id' => '28',
                'name' => 'TONGI BARI',
                'bank_branch_data' => [
                    'routing_no' => '150591548',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '5282',
                'bank_id' => '28',
                'name' => 'BHALUKA',
                'bank_branch_data' => [
                    'routing_no' => '150610311',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '5283',
                'bank_id' => '28',
                'name' => 'FULPUR',
                'bank_branch_data' => [
                    'routing_no' => '150610979',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '5284',
                'bank_id' => '28',
                'name' => 'MUKTAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '150611699',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '5285',
                'bank_id' => '28',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '150611752',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '5286',
                'bank_id' => '28',
                'name' => 'TRISHAL',
                'bank_branch_data' => [
                    'routing_no' => '150612351',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '5287',
                'bank_id' => '28',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '150641180',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '5288',
                'bank_id' => '28',
                'name' => 'NIAMATPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '150641201',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '5289',
                'bank_id' => '28',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150671189',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '5290',
                'bank_id' => '28',
                'name' => 'NETAIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150671271',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '5291',
                'bank_id' => '28',
                'name' => 'PAGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150671334',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '5292',
                'bank_id' => '28',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '150680675',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '5293',
                'bank_id' => '28',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '150680859',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '5294',
                'bank_id' => '28',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '150691093',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '5295',
                'bank_id' => '28',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150700250',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '5296',
                'bank_id' => '28',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '150720735',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '5297',
                'bank_id' => '28',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '150730796',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '5298',
                'bank_id' => '28',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '150750255',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '5299',
                'bank_id' => '28',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '150750671',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '5300',
                'bank_id' => '28',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '150751575',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '5301',
                'bank_id' => '28',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '150761215',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '5302',
                'bank_id' => '28',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '150761781',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '5303',
                'bank_id' => '28',
                'name' => 'BHAULAGONJ',
                'bank_branch_data' => [
                    'routing_no' => '150770064',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '5304',
                'bank_id' => '28',
                'name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'routing_no' => '150770556',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '5305',
                'bank_id' => '28',
                'name' => 'ALIPUR',
                'bank_branch_data' => [
                    'routing_no' => '150780054',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '5306',
                'bank_id' => '28',
                'name' => 'KOAKATA',
                'bank_branch_data' => [
                    'routing_no' => '150780791',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '5307',
                'bank_id' => '28',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '150781095',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '5308',
                'bank_id' => '28',
                'name' => 'KAZIHATA',
                'bank_branch_data' => [
                    'routing_no' => '150810090',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '5309',
                'bank_id' => '28',
                'name' => 'GODAGARI',
                'bank_branch_data' => [
                    'routing_no' => '150810616',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '5310',
                'bank_id' => '28',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '150811936',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '5311',
                'bank_id' => '28',
                'name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '150820677',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '5312',
                'bank_id' => '28',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '150820730',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '5313',
                'bank_id' => '28',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '150851459',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '5314',
                'bank_id' => '28',
                'name' => 'SATHIBARI SME',
                'bank_branch_data' => [
                    'routing_no' => '150851617',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '5315',
                'bank_id' => '28',
                'name' => 'Z.H SHIKDER UNIVERSITY OF SCIENCE & TECHNOLOGY',
                'bank_branch_data' => [
                    'routing_no' => '150860053',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '5316',
                'bank_id' => '28',
                'name' => 'ANGARIA',
                'bank_branch_data' => [
                    'routing_no' => '150860066',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '5317',
                'bank_id' => '28',
                'name' => 'BHEDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150860103',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '5318',
                'bank_id' => '28',
                'name' => 'BHOJESWAR SME',
                'bank_branch_data' => [
                    'routing_no' => '150860145',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '5319',
                'bank_id' => '28',
                'name' => 'GHARISHAR',
                'bank_branch_data' => [
                    'routing_no' => '150860282',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '5320',
                'bank_id' => '28',
                'name' => 'GOSHAIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '150860345',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '5321',
                'bank_id' => '28',
                'name' => 'KARTIKPUR',
                'bank_branch_data' => [
                    'routing_no' => '150860390',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '5322',
                'bank_id' => '28',
                'name' => 'KAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '150860411',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '5323',
                'bank_id' => '28',
                'name' => 'NARIA',
                'bank_branch_data' => [
                    'routing_no' => '150860587',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '5324',
                'bank_id' => '28',
                'name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'routing_no' => '150860679',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '5325',
                'bank_id' => '28',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '150871097',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '5326',
                'bank_id' => '28',
                'name' => 'BELKUCHI SME',
                'bank_branch_data' => [
                    'routing_no' => '150880233',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '5327',
                'bank_id' => '28',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150881874',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '5328',
                'bank_id' => '28',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '150881908',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '5329',
                'bank_id' => '28',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '150890557',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '5330',
                'bank_id' => '28',
                'name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '150900221',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '5331',
                'bank_id' => '28',
                'name' => 'MIRPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150900739',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '5332',
                'bank_id' => '28',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150901125',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '5333',
                'bank_id' => '28',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150910316',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '5334',
                'bank_id' => '28',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '150910437',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '5335',
                'bank_id' => '28',
                'name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150911360',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '5336',
                'bank_id' => '28',
                'name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150911607',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '5337',
                'bank_id' => '28',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '150911902',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '5338',
                'bank_id' => '28',
                'name' => 'KANAIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '150912080',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '5339',
                'bank_id' => '28',
                'name' => 'SIKDER TOWER',
                'bank_branch_data' => [
                    'routing_no' => '150912598',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '5340',
                'bank_id' => '28',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '150913405',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '5341',
                'bank_id' => '28',
                'name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150913492',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '5342',
                'bank_id' => '28',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '150913555',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '5343',
                'bank_id' => '28',
                'name' => 'TAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '150913821',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '5344',
                'bank_id' => '28',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '150914154',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '5345',
                'bank_id' => '28',
                'name' => 'ELENGA',
                'bank_branch_data' => [
                    'routing_no' => '150930820',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '5346',
                'bank_id' => '28',
                'name' => 'GOPALPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '150931016',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '5347',
                'bank_id' => '28',
                'name' => 'KALIHATI',
                'bank_branch_data' => [
                    'routing_no' => '150931308',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '5348',
                'bank_id' => '28',
                'name' => 'MIRZAPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '150931524',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '5349',
                'bank_id' => '28',
                'name' => 'MODHUPUR',
                'bank_branch_data' => [
                    'routing_no' => '150931579',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '5350',
                'bank_id' => '28',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '150932202',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '5351',
                'bank_id' => '28',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '150932299',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '5352',
                'bank_id' => '28',
                'name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '150940973',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '5353',
                'bank_id' => '29',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '155151967',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '5354',
                'bank_id' => '29',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '155261723',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '5355',
                'bank_id' => '29',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '155270006',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '5356',
                'bank_id' => '29',
                'name' => 'DHAKA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '155271784',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '5357',
                'bank_id' => '29',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '155913550',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '5358',
                'bank_id' => '30',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '160060285',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '5359',
                'bank_id' => '30',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '160100374',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '5360',
                'bank_id' => '30',
                'name' => 'AKHAURA',
                'bank_branch_data' => [
                    'routing_no' => '160120046',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '5361',
                'bank_id' => '30',
                'name' => 'BISHWAROAD MORE',
                'bank_branch_data' => [
                    'routing_no' => '160120062',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '5362',
                'bank_id' => '30',
                'name' => 'BRAHMANBARIA SME',
                'bank_branch_data' => [
                    'routing_no' => '160120446',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '5363',
                'bank_id' => '30',
                'name' => 'FARIDGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '160130681',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '5364',
                'bank_id' => '30',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '160130881',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '5365',
                'bank_id' => '30',
                'name' => 'KACHUA SME',
                'bank_branch_data' => [
                    'routing_no' => '160130915',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '5366',
                'bank_id' => '30',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '160150137',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '5367',
                'bank_id' => '30',
                'name' => 'ALANKAR MOR',
                'bank_branch_data' => [
                    'routing_no' => '160150140',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '5368',
                'bank_id' => '30',
                'name' => 'AMAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160150258',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '5369',
                'bank_id' => '30',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '160150461',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '5370',
                'bank_id' => '30',
                'name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'routing_no' => '160151099',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '5371',
                'bank_id' => '30',
                'name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '160151307',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '5372',
                'bank_id' => '30',
                'name' => 'C.E.P.Z.',
                'bank_branch_data' => [
                    'routing_no' => '160151578',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '5373',
                'bank_id' => '30',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '160153163',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '5374',
                'bank_id' => '30',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '160153642',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '5375',
                'bank_id' => '30',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '160153734',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '5376',
                'bank_id' => '30',
                'name' => 'KAMAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160153976',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '5377',
                'bank_id' => '30',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '160154188',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '5378',
                'bank_id' => '30',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '160154270',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '5379',
                'bank_id' => '30',
                'name' => 'MADAM BIBIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '160154696',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '5380',
                'bank_id' => '30',
                'name' => 'MADHUNA GHAT',
                'bank_branch_data' => [
                    'routing_no' => '160154759',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '5381',
                'bank_id' => '30',
                'name' => 'MAJIR GHAT',
                'bank_branch_data' => [
                    'routing_no' => '160154812',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '5382',
                'bank_id' => '30',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '160155590',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '5383',
                'bank_id' => '30',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '160155808',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '5384',
                'bank_id' => '30',
                'name' => 'OXYGEN MOUR',
                'bank_branch_data' => [
                    'routing_no' => '160155879',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '5385',
                'bank_id' => '30',
                'name' => 'PAHARTALI CHOUMOHONI',
                'bank_branch_data' => [
                    'routing_no' => '160155958',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '5386',
                'bank_id' => '30',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '160191154',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '5387',
                'bank_id' => '30',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '160192111',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '5388',
                'bank_id' => '30',
                'name' => 'NANGALKOT',
                'bank_branch_data' => [
                    'routing_no' => '160193257',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '5389',
                'bank_id' => '30',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '160220162',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '5390',
                'bank_id' => '30',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160220254',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '5391',
                'bank_id' => '30',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '160260430',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '5392',
                'bank_id' => '30',
                'name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '160260522',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '5393',
                'bank_id' => '30',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '160260551',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '5394',
                'bank_id' => '30',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '160260919',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '5395',
                'bank_id' => '30',
                'name' => 'DARUS-SALAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '160260948',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '5396',
                'bank_id' => '30',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '160261189',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '5397',
                'bank_id' => '30',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '160261334',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '5398',
                'bank_id' => '30',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '160261721',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '5399',
                'bank_id' => '30',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160262533',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '5400',
                'bank_id' => '30',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '160262988',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '5401',
                'bank_id' => '30',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '160263611',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '5402',
                'bank_id' => '30',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '160263703',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '5403',
                'bank_id' => '30',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '160264094',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '5404',
                'bank_id' => '30',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '160264302',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '5405',
                'bank_id' => '30',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '160264636',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '5406',
                'bank_id' => '30',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '160270004',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '5407',
                'bank_id' => '30',
                'name' => 'NCC BANK BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '160270170',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '5408',
                'bank_id' => '30',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160270554',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '5409',
                'bank_id' => '30',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '160270888',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '5410',
                'bank_id' => '30',
                'name' => 'BIJOY NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '160271090',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '5411',
                'bank_id' => '30',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '160271908',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '5412',
                'bank_id' => '30',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '160272323',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '5413',
                'bank_id' => '30',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '160272686',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '5414',
                'bank_id' => '30',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '160272981',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '5415',
                'bank_id' => '30',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '160273227',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '5416',
                'bank_id' => '30',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '160273948',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '5417',
                'bank_id' => '30',
                'name' => 'MITFORD ROAD',
                'bank_branch_data' => [
                    'routing_no' => '160274121',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '5418',
                'bank_id' => '30',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160274189',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '5419',
                'bank_id' => '30',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '160274242',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '5420',
                'bank_id' => '30',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '160274697',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '5421',
                'bank_id' => '30',
                'name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '160274750',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '5422',
                'bank_id' => '30',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '160280678',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '5423',
                'bank_id' => '30',
                'name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'routing_no' => '160300316',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '5424',
                'bank_id' => '30',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '160300529',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '5425',
                'bank_id' => '30',
                'name' => 'MOHIPAL',
                'bank_branch_data' => [
                    'routing_no' => '160301065',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '5426',
                'bank_id' => '30',
                'name' => 'PARSHURAM',
                'bank_branch_data' => [
                    'routing_no' => '160301278',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '5427',
                'bank_id' => '30',
                'name' => 'SONAGAZI SME',
                'bank_branch_data' => [
                    'routing_no' => '160301494',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '5428',
                'bank_id' => '30',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '160330731',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '5429',
                'bank_id' => '30',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '160331635',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '5430',
                'bank_id' => '30',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '160361092',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '5431',
                'bank_id' => '30',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '160410943',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '5432',
                'bank_id' => '30',
                'name' => 'KHULNA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '160471724',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '5433',
                'bank_id' => '30',
                'name' => 'HOSSAINPUR',
                'bank_branch_data' => [
                    'routing_no' => '160480407',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '5434',
                'bank_id' => '30',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '160500945',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '5435',
                'bank_id' => '30',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '160510735',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '5436',
                'bank_id' => '30',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '160510977',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '5437',
                'bank_id' => '30',
                'name' => 'RAMGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '160511055',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '5438',
                'bank_id' => '30',
                'name' => 'PATGRAM',
                'bank_branch_data' => [
                    'routing_no' => '160520583',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '5439',
                'bank_id' => '30',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '160540400',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '5440',
                'bank_id' => '30',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '160580107',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '5441',
                'bank_id' => '30',
                'name' => 'JURI',
                'bank_branch_data' => [
                    'routing_no' => '160580673',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '5442',
                'bank_id' => '30',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160581180',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '5443',
                'bank_id' => '30',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '160581722',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '5444',
                'bank_id' => '30',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '160591420',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '5445',
                'bank_id' => '30',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '160611755',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '5446',
                'bank_id' => '30',
                'name' => 'NANDAIL',
                'bank_branch_data' => [
                    'routing_no' => '160611900',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '5447',
                'bank_id' => '30',
                'name' => 'RAYER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '160613940',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '5448',
                'bank_id' => '30',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '160641183',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '5449',
                'bank_id' => '30',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '160671182',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '5450',
                'bank_id' => '30',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '160680678',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '5451',
                'bank_id' => '30',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '160680852',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '5452',
                'bank_id' => '30',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '160730799',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '5453',
                'bank_id' => '30',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '160750674',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '5454',
                'bank_id' => '30',
                'name' => 'MAIJDEE SME',
                'bank_branch_data' => [
                    'routing_no' => '160751581',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '5455',
                'bank_id' => '30',
                'name' => 'BANESHWAR SME',
                'bank_branch_data' => [
                    'routing_no' => '160810235',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '5456',
                'bank_id' => '30',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '160811939',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '5457',
                'bank_id' => '30',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '160851452',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '5458',
                'bank_id' => '30',
                'name' => 'NARIA SME',
                'bank_branch_data' => [
                    'routing_no' => '160860593',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '5459',
                'bank_id' => '30',
                'name' => 'PARULIA',
                'bank_branch_data' => [
                    'routing_no' => '160871003',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '5460',
                'bank_id' => '30',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '160900495',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '5461',
                'bank_id' => '30',
                'name' => 'KUMARPARA',
                'bank_branch_data' => [
                    'routing_no' => '160910069',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '5462',
                'bank_id' => '30',
                'name' => 'CHOUHATTA',
                'bank_branch_data' => [
                    'routing_no' => '160910793',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '5463',
                'bank_id' => '30',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '160912504',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '5464',
                'bank_id' => '30',
                'name' => 'MODHUPUR',
                'bank_branch_data' => [
                    'routing_no' => '160931572',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '5465',
                'bank_id' => '30',
                'name' => 'RAMPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '160932050',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '5466',
                'bank_id' => '30',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '160932292',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '5467',
                'bank_id' => '31',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '165060280',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '5468',
                'bank_id' => '31',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '165100379',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '5469',
                'bank_id' => '31',
                'name' => 'BRAHMANBARIA SME',
                'bank_branch_data' => [
                    'routing_no' => '165120441',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '5470',
                'bank_id' => '31',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '165150132',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '5471',
                'bank_id' => '31',
                'name' => 'MITHACHHARA',
                'bank_branch_data' => [
                    'routing_no' => '165150187',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '5472',
                'bank_id' => '31',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '165150466',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '5473',
                'bank_id' => '31',
                'name' => 'ANOWARA',
                'bank_branch_data' => [
                    'routing_no' => '165150529',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '5474',
                'bank_id' => '31',
                'name' => 'BIBIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '165151249',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '5475',
                'bank_id' => '31',
                'name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '165151302',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '5476',
                'bank_id' => '31',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '165151481',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '5477',
                'bank_id' => '31',
                'name' => 'CHANDGAON',
                'bank_branch_data' => [
                    'routing_no' => '165151849',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '5478',
                'bank_id' => '31',
                'name' => 'CHITTAGONG EPZ',
                'bank_branch_data' => [
                    'routing_no' => '165152006',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '5479',
                'bank_id' => '31',
                'name' => 'DOVASHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165152572',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '5480',
                'bank_id' => '31',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '165153168',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '5481',
                'bank_id' => '31',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '165153221',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '5482',
                'bank_id' => '31',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '165153647',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '5483',
                'bank_id' => '31',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165154275',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '5484',
                'bank_id' => '31',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '165155324',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '5485',
                'bank_id' => '31',
                'name' => 'NANUPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165155458',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '5486',
                'bank_id' => '31',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '165155924',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '5487',
                'bank_id' => '31',
                'name' => 'RANIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '165156460',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '5488',
                'bank_id' => '31',
                'name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '165156499',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '5489',
                'bank_id' => '31',
                'name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '165157393',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '5490',
                'bank_id' => '31',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '165157519',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '5491',
                'bank_id' => '31',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '165191159',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '5492',
                'bank_id' => '31',
                'name' => 'LAKSAM',
                'bank_branch_data' => [
                    'routing_no' => '165192716',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '5493',
                'bank_id' => '31',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165220259',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '5494',
                'bank_id' => '31',
                'name' => 'ASHKONA',
                'bank_branch_data' => [
                    'routing_no' => '165260206',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '5495',
                'bank_id' => '31',
                'name' => 'SONARGAON JANAPATH',
                'bank_branch_data' => [
                    'routing_no' => '165260248',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '5496',
                'bank_id' => '31',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '165260435',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '5497',
                'bank_id' => '31',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '165260493',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '5498',
                'bank_id' => '31',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '165260501',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '5499',
                'bank_id' => '31',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '165260727',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '5500',
                'bank_id' => '31',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '165261184',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '5501',
                'bank_id' => '31',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '165261339',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '5502',
                'bank_id' => '31',
                'name' => 'GANAKBARI',
                'bank_branch_data' => [
                    'routing_no' => '165261634',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '5503',
                'bank_id' => '31',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '165261726',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '5504',
                'bank_id' => '31',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165262538',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '5505',
                'bank_id' => '31',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '165262983',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '5506',
                'bank_id' => '31',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '165263708',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '5507',
                'bank_id' => '31',
                'name' => 'RING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '165263979',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '5508',
                'bank_id' => '31',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '165264631',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '5509',
                'bank_id' => '31',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '165270009',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '5510',
                'bank_id' => '31',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '165270883',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '5511',
                'bank_id' => '31',
                'name' => 'BASHABOO',
                'bank_branch_data' => [
                    'routing_no' => '165270975',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '5512',
                'bank_id' => '31',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165272807',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '5513',
                'bank_id' => '31',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '165273222',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '5514',
                'bank_id' => '31',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '165273280',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '5515',
                'bank_id' => '31',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '165273372',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '5516',
                'bank_id' => '31',
                'name' => 'LALBAGH',
                'bank_branch_data' => [
                    'routing_no' => '165273822',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '5517',
                'bank_id' => '31',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165274184',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '5518',
                'bank_id' => '31',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '165274247',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '5519',
                'bank_id' => '31',
                'name' => 'NANDIPARA',
                'bank_branch_data' => [
                    'routing_no' => '165274605',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '5520',
                'bank_id' => '31',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165274692',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '5521',
                'bank_id' => '31',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '165275354',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '5522',
                'bank_id' => '31',
                'name' => 'TIPU SULTAN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '165276708',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '5523',
                'bank_id' => '31',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '165277099',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '5524',
                'bank_id' => '31',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '165290526',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '5525',
                'bank_id' => '31',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '165300379',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '5526',
                'bank_id' => '31',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '165300524',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '5527',
                'bank_id' => '31',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '165331001',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '5528',
                'bank_id' => '31',
                'name' => 'TONGI SME',
                'bank_branch_data' => [
                    'routing_no' => '165331656',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '5529',
                'bank_id' => '31',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '165410948',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '5530',
                'bank_id' => '31',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '165471545',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '5531',
                'bank_id' => '31',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '165500940',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '5532',
                'bank_id' => '31',
                'name' => 'PORADAH',
                'bank_branch_data' => [
                    'routing_no' => '165501365',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '5533',
                'bank_id' => '31',
                'name' => 'LAKSHMIPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '165510051',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '5534',
                'bank_id' => '31',
                'name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165510198',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '5535',
                'bank_id' => '31',
                'name' => 'MANDARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165510822',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '5536',
                'bank_id' => '31',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '165510972',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '5537',
                'bank_id' => '31',
                'name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165511034',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '5538',
                'bank_id' => '31',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '165581635',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '5539',
                'bank_id' => '31',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165671187',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '5540',
                'bank_id' => '31',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '165671695',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '5541',
                'bank_id' => '31',
                'name' => 'TANBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '165671787',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '5542',
                'bank_id' => '31',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '165680673',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '5543',
                'bank_id' => '31',
                'name' => 'AMISHAPARA',
                'bank_branch_data' => [
                    'routing_no' => '165750103',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '5544',
                'bank_id' => '31',
                'name' => 'CHHATARPAIYA',
                'bank_branch_data' => [
                    'routing_no' => '165750145',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '5545',
                'bank_id' => '31',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '165750253',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '5546',
                'bank_id' => '31',
                'name' => 'CHAPRASHIRHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '165750440',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '5547',
                'bank_id' => '31',
                'name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'routing_no' => '165750587',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '5548',
                'bank_id' => '31',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '165750679',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '5549',
                'bank_id' => '31',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '165751573',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '5550',
                'bank_id' => '31',
                'name' => 'SUBARNA CHAR',
                'bank_branch_data' => [
                    'routing_no' => '165752356',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '5551',
                'bank_id' => '31',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '165811934',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '5552',
                'bank_id' => '31',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '165840521',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '5553',
                'bank_id' => '31',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '165851457',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '5554',
                'bank_id' => '31',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '165871095',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '5555',
                'bank_id' => '31',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '165881856',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '5556',
                'bank_id' => '31',
                'name' => 'SHAHJADPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '165881935',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '5557',
                'bank_id' => '31',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '165911784',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '5558',
                'bank_id' => '31',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '165912509',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '5559',
                'bank_id' => '31',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '165913553',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '5560',
                'bank_id' => '32',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '170060288',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '5561',
                'bank_id' => '32',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '170100377',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '5562',
                'bank_id' => '32',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '170102746',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '5563',
                'bank_id' => '32',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170120102',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '5564',
                'bank_id' => '32',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '170120436',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '5565',
                'bank_id' => '32',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170130884',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '5566',
                'bank_id' => '32',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '170150130',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '5567',
                'bank_id' => '32',
                'name' => 'BANSHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '170150972',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '5568',
                'bank_id' => '32',
                'name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '170151218',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '5569',
                'bank_id' => '32',
                'name' => 'BHUZPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '170151234',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '5570',
                'bank_id' => '32',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '170152741',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '5571',
                'bank_id' => '32',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '170153166',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '5572',
                'bank_id' => '32',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '170153229',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '5573',
                'bank_id' => '32',
                'name' => 'HEAKO',
                'bank_branch_data' => [
                    'routing_no' => '170153287',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '5574',
                'bank_id' => '32',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '170153645',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '5575',
                'bank_id' => '32',
                'name' => 'KARNAPHULI EPZ',
                'bank_branch_data' => [
                    'routing_no' => '170154073',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '5576',
                'bank_id' => '32',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '170154181',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '5577',
                'bank_id' => '32',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170154273',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '5578',
                'bank_id' => '32',
                'name' => 'LALDIGHI EAST',
                'bank_branch_data' => [
                    'routing_no' => '170154549',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '5579',
                'bank_id' => '32',
                'name' => 'MADHUNA GHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '170154752',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '5580',
                'bank_id' => '32',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '170155322',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '5581',
                'bank_id' => '32',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '170155801',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '5582',
                'bank_id' => '32',
                'name' => 'OXYGEN MOUR',
                'bank_branch_data' => [
                    'routing_no' => '170155872',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '5583',
                'bank_id' => '32',
                'name' => 'PAHARTALI(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '170156013',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '5584',
                'bank_id' => '32',
                'name' => 'PRABARTAK MORE',
                'bank_branch_data' => [
                    'routing_no' => '170156334',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '5585',
                'bank_id' => '32',
                'name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '170156497',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '5586',
                'bank_id' => '32',
                'name' => 'RACE COURSE',
                'bank_branch_data' => [
                    'routing_no' => '170190390',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '5587',
                'bank_id' => '32',
                'name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '170191065',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '5588',
                'bank_id' => '32',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '170191157',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '5589',
                'bank_id' => '32',
                'name' => 'COMPANIGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '170191436',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '5590',
                'bank_id' => '32',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170220257',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '5591',
                'bank_id' => '32',
                'name' => 'ASAD GATE',
                'bank_branch_data' => [
                    'routing_no' => '170260196',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '5592',
                'bank_id' => '32',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '170260220',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '5593',
                'bank_id' => '32',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '170260433',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '5594',
                'bank_id' => '32',
                'name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '170260525',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '5595',
                'bank_id' => '32',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '170260554',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '5596',
                'bank_id' => '32',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '170260725',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '5597',
                'bank_id' => '32',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '170261182',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '5598',
                'bank_id' => '32',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '170261337',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '5599',
                'bank_id' => '32',
                'name' => 'GANAKBARI',
                'bank_branch_data' => [
                    'routing_no' => '170261632',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '5600',
                'bank_id' => '32',
                'name' => 'GARIB-E-NEWAZ AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '170261645',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '5601',
                'bank_id' => '32',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '170261724',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '5602',
                'bank_id' => '32',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '170262057',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '5603',
                'bank_id' => '32',
                'name' => 'IBRAHIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '170262086',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '5604',
                'bank_id' => '32',
                'name' => 'ISLAMI BANKING(MIRPUR)',
                'bank_branch_data' => [
                    'routing_no' => '170262231',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '5605',
                'bank_id' => '32',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170262536',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '5606',
                'bank_id' => '32',
                'name' => 'MIRPUR SECTION-1',
                'bank_branch_data' => [
                    'routing_no' => '170263106',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '5607',
                'bank_id' => '32',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '170263193',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '5608',
                'bank_id' => '32',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '170263580',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '5609',
                'bank_id' => '32',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '170263614',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '5610',
                'bank_id' => '32',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '170263706',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '5611',
                'bank_id' => '32',
                'name' => 'RING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '170263977',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '5612',
                'bank_id' => '32',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '170264039',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '5613',
                'bank_id' => '32',
                'name' => 'SAVAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170264121',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '5614',
                'bank_id' => '32',
                'name' => 'TEJGAON',
                'bank_branch_data' => [
                    'routing_no' => '170264484',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '5615',
                'bank_id' => '32',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '170264639',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '5616',
                'bank_id' => '32',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '170270007',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '5617',
                'bank_id' => '32',
                'name' => 'AGANAGAR SME',
                'bank_branch_data' => [
                    'routing_no' => '170270144',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '5618',
                'bank_id' => '32',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '170270881',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '5619',
                'bank_id' => '32',
                'name' => 'BASHABOO',
                'bank_branch_data' => [
                    'routing_no' => '170270973',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '5620',
                'bank_id' => '32',
                'name' => 'BIJOY NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '170271093',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '5621',
                'bank_id' => '32',
                'name' => 'DHOLAIKHAL SME',
                'bank_branch_data' => [
                    'routing_no' => '170271851',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '5622',
                'bank_id' => '32',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '170272326',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '5623',
                'bank_id' => '32',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '170272689',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '5624',
                'bank_id' => '32',
                'name' => 'ISLAMI BANKING(DILKUSHA)',
                'bank_branch_data' => [
                    'routing_no' => '170272892',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '5625',
                'bank_id' => '32',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '170273220',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '5626',
                'bank_id' => '32',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '170273288',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '5627',
                'bank_id' => '32',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '170274245',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '5628',
                'bank_id' => '32',
                'name' => 'MOUCHAK MARKET',
                'bank_branch_data' => [
                    'routing_no' => '170274395',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '5629',
                'bank_id' => '32',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170274429',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '5630',
                'bank_id' => '32',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170274690',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '5631',
                'bank_id' => '32',
                'name' => 'NEW ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '170275028',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '5632',
                'bank_id' => '32',
                'name' => 'PATUATULI',
                'bank_branch_data' => [
                    'routing_no' => '170275231',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '5633',
                'bank_id' => '32',
                'name' => 'POSTA SME',
                'bank_branch_data' => [
                    'routing_no' => '170275307',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '5634',
                'bank_id' => '32',
                'name' => 'SBC TOWER',
                'bank_branch_data' => [
                    'routing_no' => '170276106',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '5635',
                'bank_id' => '32',
                'name' => 'WARI',
                'bank_branch_data' => [
                    'routing_no' => '170277000',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '5636',
                'bank_id' => '32',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '170280671',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '5637',
                'bank_id' => '32',
                'name' => 'BOALMARI',
                'bank_branch_data' => [
                    'routing_no' => '170290340',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '5638',
                'bank_id' => '32',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '170290524',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '5639',
                'bank_id' => '32',
                'name' => 'MADHUKHALI',
                'bank_branch_data' => [
                    'routing_no' => '170291099',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '5640',
                'bank_id' => '32',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '170300377',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '5641',
                'bank_id' => '32',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '170300522',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '5642',
                'bank_id' => '32',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '170330734',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '5643',
                'bank_id' => '32',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '170330792',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '5644',
                'bank_id' => '32',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '170331638',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '5645',
                'bank_id' => '32',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170360612',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '5646',
                'bank_id' => '32',
                'name' => 'MADHABPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '170360896',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '5647',
                'bank_id' => '32',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170361095',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '5648',
                'bank_id' => '32',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '170380405',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '5649',
                'bank_id' => '32',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '170390853',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '5650',
                'bank_id' => '32',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '170410946',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '5651',
                'bank_id' => '32',
                'name' => 'JHIKARGACHA SME',
                'bank_branch_data' => [
                    'routing_no' => '170411103',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '5652',
                'bank_id' => '32',
                'name' => 'RAMGARH',
                'bank_branch_data' => [
                    'routing_no' => '170460059',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '5653',
                'bank_id' => '32',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '170470702',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '5654',
                'bank_id' => '32',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '170471543',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '5655',
                'bank_id' => '32',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170480226',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '5656',
                'bank_id' => '32',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170480671',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '5657',
                'bank_id' => '32',
                'name' => 'KHAJANAGAR SME/AGRICULTURE',
                'bank_branch_data' => [
                    'routing_no' => '170500014',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '5658',
                'bank_id' => '32',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '170500948',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '5659',
                'bank_id' => '32',
                'name' => 'RAIPUR SME/AGRICULTURE',
                'bank_branch_data' => [
                    'routing_no' => '170510970',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '5660',
                'bank_id' => '32',
                'name' => 'HATIBANDA',
                'bank_branch_data' => [
                    'routing_no' => '170520407',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '5661',
                'bank_id' => '32',
                'name' => 'TAKERHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '170540779',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '5662',
                'bank_id' => '32',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '170550556',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '5663',
                'bank_id' => '32',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '170580100',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '5664',
                'bank_id' => '32',
                'name' => 'COURT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '170580405',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '5665',
                'bank_id' => '32',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '170580942',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '5666',
                'bank_id' => '32',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '170581725',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '5667',
                'bank_id' => '32',
                'name' => 'SIRAJDHI KHAN',
                'bank_branch_data' => [
                    'routing_no' => '170591399',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '5668',
                'bank_id' => '32',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '170591423',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '5669',
                'bank_id' => '32',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '170611758',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '5670',
                'bank_id' => '32',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '170641094',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '5671',
                'bank_id' => '32',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '170641186',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '5672',
                'bank_id' => '32',
                'name' => 'ADAMJEE EPZ',
                'bank_branch_data' => [
                    'routing_no' => '170670036',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '5673',
                'bank_id' => '32',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170671185',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '5674',
                'bank_id' => '32',
                'name' => 'SHIMRAIL',
                'bank_branch_data' => [
                    'routing_no' => '170671572',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '5675',
                'bank_id' => '32',
                'name' => 'SONARGAON SME',
                'bank_branch_data' => [
                    'routing_no' => '170671701',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '5676',
                'bank_id' => '32',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '170680671',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '5677',
                'bank_id' => '32',
                'name' => 'NARSHINGDI SME',
                'bank_branch_data' => [
                    'routing_no' => '170680868',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '5678',
                'bank_id' => '32',
                'name' => 'SHIBPUR',
                'bank_branch_data' => [
                    'routing_no' => '170681304',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '5679',
                'bank_id' => '32',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '170691099',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '5680',
                'bank_id' => '32',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170700256',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '5681',
                'bank_id' => '32',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '170730792',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '5682',
                'bank_id' => '32',
                'name' => 'CHATKHIL SME/AGRICULTURE',
                'bank_branch_data' => [
                    'routing_no' => '170750585',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '5683',
                'bank_id' => '32',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '170750677',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '5684',
                'bank_id' => '32',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '170761211',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '5685',
                'bank_id' => '32',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '170761787',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '5686',
                'bank_id' => '32',
                'name' => 'BANESHWAR',
                'bank_branch_data' => [
                    'routing_no' => '170810225',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '5687',
                'bank_id' => '32',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '170811932',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '5688',
                'bank_id' => '32',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '170851455',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '5689',
                'bank_id' => '32',
                'name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'routing_no' => '170860196',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '5690',
                'bank_id' => '32',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '170871093',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '5691',
                'bank_id' => '32',
                'name' => 'SHERPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '170890566',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '5692',
                'bank_id' => '32',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170901150',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '5693',
                'bank_id' => '32',
                'name' => 'SYEDPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '170901192',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '5694',
                'bank_id' => '32',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '170910046',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '5695',
                'bank_id' => '32',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170910312',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '5696',
                'bank_id' => '32',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '170910433',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '5697',
                'bank_id' => '32',
                'name' => 'DHAKA DAKHIN',
                'bank_branch_data' => [
                    'routing_no' => '170911308',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '5698',
                'bank_id' => '32',
                'name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '170911366',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '5699',
                'bank_id' => '32',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '170911782',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '5700',
                'bank_id' => '32',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '170911908',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '5701',
                'bank_id' => '32',
                'name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '170913498',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '5702',
                'bank_id' => '32',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '170913551',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '5703',
                'bank_id' => '32',
                'name' => 'TAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '170913827',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '5704',
                'bank_id' => '32',
                'name' => 'UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '170914039',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '5705',
                'bank_id' => '32',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '170931517',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '5706',
                'bank_id' => '32',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '170932295',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '5707',
                'bank_id' => '32',
                'name' => 'THAKURGAON SME',
                'bank_branch_data' => [
                    'routing_no' => '170940982',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '5708',
                'bank_id' => '33',
                'name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '175010075',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '5709',
                'bank_id' => '33',
                'name' => 'MONGLA',
                'bank_branch_data' => [
                    'routing_no' => '175010941',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '5710',
                'bank_id' => '33',
                'name' => 'BANDARBAN',
                'bank_branch_data' => [
                    'routing_no' => '175030134',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '5711',
                'bank_id' => '33',
                'name' => 'BAMNA',
                'bank_branch_data' => [
                    'routing_no' => '175040108',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '5712',
                'bank_id' => '33',
                'name' => 'BARGUNA',
                'bank_branch_data' => [
                    'routing_no' => '175040137',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '5713',
                'bank_id' => '33',
                'name' => 'BABUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175060162',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '5714',
                'bank_id' => '33',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '175060283',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '5715',
                'bank_id' => '33',
                'name' => 'BAZAR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175060409',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '5716',
                'bank_id' => '33',
                'name' => 'HIZLA',
                'bank_branch_data' => [
                    'routing_no' => '175060975',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '5717',
                'bank_id' => '33',
                'name' => 'HOSPITAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175061008',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '5718',
                'bank_id' => '33',
                'name' => 'MADABPASHA',
                'bank_branch_data' => [
                    'routing_no' => '175061240',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '5719',
                'bank_id' => '33',
                'name' => 'MEHENDIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175061361',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '5720',
                'bank_id' => '33',
                'name' => 'MULADI',
                'bank_branch_data' => [
                    'routing_no' => '175061453',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '5721',
                'bank_id' => '33',
                'name' => 'SHAHID MINAR',
                'bank_branch_data' => [
                    'routing_no' => '175061990',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '5722',
                'bank_id' => '33',
                'name' => 'TORKEY BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '175062173',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '5723',
                'bank_id' => '33',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '175090103',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '5724',
                'bank_id' => '33',
                'name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '175090224',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '5725',
                'bank_id' => '33',
                'name' => 'MUREEL SME',
                'bank_branch_data' => [
                    'routing_no' => '175100051',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '5726',
                'bank_id' => '33',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '175100372',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '5727',
                'bank_id' => '33',
                'name' => 'CHALOPARA',
                'bank_branch_data' => [
                    'routing_no' => '175100585',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '5728',
                'bank_id' => '33',
                'name' => 'SANTAHAR',
                'bank_branch_data' => [
                    'routing_no' => '175102417',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '5729',
                'bank_id' => '33',
                'name' => 'SATMATHA',
                'bank_branch_data' => [
                    'routing_no' => '175102509',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '5730',
                'bank_id' => '33',
                'name' => 'AKHAURA',
                'bank_branch_data' => [
                    'routing_no' => '175120044',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '5731',
                'bank_id' => '33',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175120107',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '5732',
                'bank_id' => '33',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '175120431',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '5733',
                'bank_id' => '33',
                'name' => 'KUTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175121098',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '5734',
                'bank_id' => '33',
                'name' => 'SARAK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175121669',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '5735',
                'bank_id' => '33',
                'name' => 'ASHRAFPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175130076',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '5736',
                'bank_id' => '33',
                'name' => 'BABUR HAT',
                'bank_branch_data' => [
                    'routing_no' => '175130139',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '5737',
                'bank_id' => '33',
                'name' => 'CHANDPUR(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '175130434',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '5738',
                'bank_id' => '33',
                'name' => 'CHANGARCHAR',
                'bank_branch_data' => [
                    'routing_no' => '175130492',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '5739',
                'bank_id' => '33',
                'name' => 'GRIDAKALINDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175130797',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '5740',
                'bank_id' => '33',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175130889',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '5741',
                'bank_id' => '33',
                'name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '175130913',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '5742',
                'bank_id' => '33',
                'name' => 'MATLAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175131217',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '5743',
                'bank_id' => '33',
                'name' => 'NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175131488',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '5744',
                'bank_id' => '33',
                'name' => 'NAYERGAON BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175131541',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '5745',
                'bank_id' => '33',
                'name' => 'RAMPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175131754',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '5746',
                'bank_id' => '33',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '175150135',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '5747',
                'bank_id' => '33',
                'name' => 'AMAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175150256',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '5748',
                'bank_id' => '33',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '175150469',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '5749',
                'bank_id' => '33',
                'name' => 'ANOWARA',
                'bank_branch_data' => [
                    'routing_no' => '175150522',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '5750',
                'bank_id' => '33',
                'name' => 'ASHRAF ALI ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175150643',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '5751',
                'bank_id' => '33',
                'name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '175150793',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '5752',
                'bank_id' => '33',
                'name' => 'BANSHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '175150977',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '5753',
                'bank_id' => '33',
                'name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'routing_no' => '175151097',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '5754',
                'bank_id' => '33',
                'name' => 'BARTAKIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175151150',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '5755',
                'bank_id' => '33',
                'name' => 'BIBIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '175151242',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '5756',
                'bank_id' => '33',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '175151484',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '5757',
                'bank_id' => '33',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '175151750',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '5758',
                'bank_id' => '33',
                'name' => 'CHANDANAISH',
                'bank_branch_data' => [
                    'routing_no' => '175151813',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '5759',
                'bank_id' => '33',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175151934',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '5760',
                'bank_id' => '33',
                'name' => 'COLLEGE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175152267',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '5761',
                'bank_id' => '33',
                'name' => 'COLONEL HAT',
                'bank_branch_data' => [
                    'routing_no' => '175152296',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '5762',
                'bank_id' => '33',
                'name' => 'SHAIKH MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175152441',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '5763',
                'bank_id' => '33',
                'name' => 'DHARMAPUR',
                'bank_branch_data' => [
                    'routing_no' => '175152504',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '5764',
                'bank_id' => '33',
                'name' => 'HADI PARA',
                'bank_branch_data' => [
                    'routing_no' => '175153132',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '5765',
                'bank_id' => '33',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '175153161',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '5766',
                'bank_id' => '33',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '175153224',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '5767',
                'bank_id' => '33',
                'name' => 'INDUSTRIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '175153316',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '5768',
                'bank_id' => '33',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '175153732',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '5769',
                'bank_id' => '33',
                'name' => 'KATIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '175154128',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '5770',
                'bank_id' => '33',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '175154186',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '5771',
                'bank_id' => '33',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175154278',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '5772',
                'bank_id' => '33',
                'name' => 'KORBANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175154399',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '5773',
                'bank_id' => '33',
                'name' => 'KULGAON',
                'bank_branch_data' => [
                    'routing_no' => '175154423',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '5774',
                'bank_id' => '33',
                'name' => 'LALDIGHI EAST',
                'bank_branch_data' => [
                    'routing_no' => '175154544',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '5775',
                'bank_id' => '33',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '175154665',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '5776',
                'bank_id' => '33',
                'name' => 'MADHUNA GHAT',
                'bank_branch_data' => [
                    'routing_no' => '175154757',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '5777',
                'bank_id' => '33',
                'name' => 'MEHADI BAGH',
                'bank_branch_data' => [
                    'routing_no' => '175154960',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '5778',
                'bank_id' => '33',
                'name' => 'MITHACHARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175155143',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '5779',
                'bank_id' => '33',
                'name' => 'NANUPUR',
                'bank_branch_data' => [
                    'routing_no' => '175155448',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '5780',
                'bank_id' => '33',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '175155598',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '5781',
                'bank_id' => '33',
                'name' => 'NORTH POTENGA',
                'bank_branch_data' => [
                    'routing_no' => '175155772',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '5782',
                'bank_id' => '33',
                'name' => 'OLD CHURCH COMPOUND',
                'bank_branch_data' => [
                    'routing_no' => '175155835',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '5783',
                'bank_id' => '33',
                'name' => 'PADUA',
                'bank_branch_data' => [
                    'routing_no' => '175155893',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '5784',
                'bank_id' => '33',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '175155927',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '5785',
                'bank_id' => '33',
                'name' => 'PATHARGHATA',
                'bank_branch_data' => [
                    'routing_no' => '175156100',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '5786',
                'bank_id' => '33',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '175156168',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '5787',
                'bank_id' => '33',
                'name' => 'PORT',
                'bank_branch_data' => [
                    'routing_no' => '175156221',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '5788',
                'bank_id' => '33',
                'name' => 'RANGUNIA',
                'bank_branch_data' => [
                    'routing_no' => '175156405',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '5789',
                'bank_id' => '33',
                'name' => 'RANIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '175156463',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '5790',
                'bank_id' => '33',
                'name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '175156492',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '5791',
                'bank_id' => '33',
                'name' => 'REAZUDDIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175156526',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '5792',
                'bank_id' => '33',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '175156739',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '5793',
                'bank_id' => '33',
                'name' => 'EPZ',
                'bank_branch_data' => [
                    'routing_no' => '175156797',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '5794',
                'bank_id' => '33',
                'name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '175156913',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '5795',
                'bank_id' => '33',
                'name' => 'SATKANIA',
                'bank_branch_data' => [
                    'routing_no' => '175157062',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '5796',
                'bank_id' => '33',
                'name' => 'SHANTIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '175157246',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '5797',
                'bank_id' => '33',
                'name' => 'SHIBERHAT',
                'bank_branch_data' => [
                    'routing_no' => '175157309',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '5798',
                'bank_id' => '33',
                'name' => 'SITAKUNDA SME',
                'bank_branch_data' => [
                    'routing_no' => '175157404',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '5799',
                'bank_id' => '33',
                'name' => 'TERRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175157633',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '5800',
                'bank_id' => '33',
                'name' => 'ALAMDANGA',
                'bank_branch_data' => [
                    'routing_no' => '175180042',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '5801',
                'bank_id' => '33',
                'name' => 'ALUKDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175180071',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '5802',
                'bank_id' => '33',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '175180192',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '5803',
                'bank_id' => '33',
                'name' => 'SARATGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175180855',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '5804',
                'bank_id' => '33',
                'name' => 'BHUSCHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175190366',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '5805',
                'bank_id' => '33',
                'name' => 'GUNABATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175190382',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '5806',
                'bank_id' => '33',
                'name' => 'BANGADDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175190403',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '5807',
                'bank_id' => '33',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175190979',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '5808',
                'bank_id' => '33',
                'name' => 'CHEORA',
                'bank_branch_data' => [
                    'routing_no' => '175191002',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '5809',
                'bank_id' => '33',
                'name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '175191060',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '5810',
                'bank_id' => '33',
                'name' => 'COMILLA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '175191394',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '5811',
                'bank_id' => '33',
                'name' => 'DAUDKANDI',
                'bank_branch_data' => [
                    'routing_no' => '175191510',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '5812',
                'bank_id' => '33',
                'name' => 'DAULATGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175191549',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '5813',
                'bank_id' => '33',
                'name' => 'DEBIDWAR',
                'bank_branch_data' => [
                    'routing_no' => '175191602',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '5814',
                'bank_id' => '33',
                'name' => 'DHOLKAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175191781',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '5815',
                'bank_id' => '33',
                'name' => 'DHOLLAI NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '175191815',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '5816',
                'bank_id' => '33',
                'name' => 'GOURIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175192148',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '5817',
                'bank_id' => '33',
                'name' => 'MAINAMATI',
                'bank_branch_data' => [
                    'routing_no' => '175192827',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '5818',
                'bank_id' => '33',
                'name' => 'MEAH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175192922',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '5819',
                'bank_id' => '33',
                'name' => 'PADUAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175193400',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '5820',
                'bank_id' => '33',
                'name' => 'VICTORIA COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '175194159',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '5821',
                'bank_id' => '33',
                'name' => 'ZILLA PARISAD',
                'bank_branch_data' => [
                    'routing_no' => '175194212',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '5822',
                'bank_id' => '33',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '175220160',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '5823',
                'bank_id' => '33',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175220252',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '5824',
                'bank_id' => '33',
                'name' => 'MOISCAL',
                'bank_branch_data' => [
                    'routing_no' => '175220799',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '5825',
                'bank_id' => '33',
                'name' => 'UKHIYA',
                'bank_branch_data' => [
                    'routing_no' => '175220944',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '5826',
                'bank_id' => '33',
                'name' => 'AGRICULTURE COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '175260070',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '5827',
                'bank_id' => '33',
                'name' => 'ASAD AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '175260162',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '5828',
                'bank_id' => '33',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '175260225',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '5829',
                'bank_id' => '33',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '175260346',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '5830',
                'bank_id' => '33',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '175260438',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '5831',
                'bank_id' => '33',
                'name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '175260520',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '5832',
                'bank_id' => '33',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '175260720',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '5833',
                'bank_id' => '33',
                'name' => 'CHIRIAKHANA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175260762',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '5834',
                'bank_id' => '33',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '175260917',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '5835',
                'bank_id' => '33',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175261332',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '5836',
                'bank_id' => '33',
                'name' => 'FARMGATE',
                'bank_branch_data' => [
                    'routing_no' => '175261453',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '5837',
                'bank_id' => '33',
                'name' => 'GULSHAN CIRCLE-1',
                'bank_branch_data' => [
                    'routing_no' => '175261758',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '5838',
                'bank_id' => '33',
                'name' => 'GULSHAN MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '175261840',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '5839',
                'bank_id' => '33',
                'name' => 'INTERNATIONAL AIRPORT',
                'bank_branch_data' => [
                    'routing_no' => '175262207',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '5840',
                'bank_id' => '33',
                'name' => 'KAFRUL',
                'bank_branch_data' => [
                    'routing_no' => '175262386',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '5841',
                'bank_id' => '33',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175262531',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '5842',
                'bank_id' => '33',
                'name' => 'KURIL BISHWA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175262636',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '5843',
                'bank_id' => '33',
                'name' => 'LABORATORY ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175262715',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '5844',
                'bank_id' => '33',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '175262986',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '5845',
                'bank_id' => '33',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '175263198',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '5846',
                'bank_id' => '33',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '175263280',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '5847',
                'bank_id' => '33',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '175263527',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '5848',
                'bank_id' => '33',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '175263585',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '5849',
                'bank_id' => '33',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '175263619',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '5850',
                'bank_id' => '33',
                'name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '175263914',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '5851',
                'bank_id' => '33',
                'name' => 'RING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175263972',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '5852',
                'bank_id' => '33',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175264034',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '5853',
                'bank_id' => '33',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '175264092',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '5854',
                'bank_id' => '33',
                'name' => 'SHEWRA PARA',
                'bank_branch_data' => [
                    'routing_no' => '175264276',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '5855',
                'bank_id' => '33',
                'name' => 'SONARGOAN HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '175264397',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '5856',
                'bank_id' => '33',
                'name' => 'TEJGAON',
                'bank_branch_data' => [
                    'routing_no' => '175264489',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '5857',
                'bank_id' => '33',
                'name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '175264692',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '5858',
                'bank_id' => '33',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '175270002',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '5859',
                'bank_id' => '33',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '175270136',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '5860',
                'bank_id' => '33',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175270349',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '5861',
                'bank_id' => '33',
                'name' => 'B.B. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '175270431',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '5862',
                'bank_id' => '33',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175270552',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '5863',
                'bank_id' => '33',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '175270886',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '5864',
                'bank_id' => '33',
                'name' => 'BAR LIBRARY',
                'bank_branch_data' => [
                    'routing_no' => '175270949',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '5865',
                'bank_id' => '33',
                'name' => 'BASHABOO',
                'bank_branch_data' => [
                    'routing_no' => '175270978',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '5866',
                'bank_id' => '33',
                'name' => 'BEGUM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175271069',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '5867',
                'bank_id' => '33',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175271272',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '5868',
                'bank_id' => '33',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '175271427',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '5869',
                'bank_id' => '33',
                'name' => 'DHAKA RAIL STATION',
                'bank_branch_data' => [
                    'routing_no' => '175271601',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '5870',
                'bank_id' => '33',
                'name' => 'DHAKA STADIUM',
                'bank_branch_data' => [
                    'routing_no' => '175271698',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '5871',
                'bank_id' => '33',
                'name' => 'DHOLAIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '175271872',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '5872',
                'bank_id' => '33',
                'name' => 'FAKIRPOOL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175272200',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '5873',
                'bank_id' => '33',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '175272321',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '5874',
                'bank_id' => '33',
                'name' => 'GORANBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175272505',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '5875',
                'bank_id' => '33',
                'name' => 'HOTEL OSMANI INTERNATIONAL',
                'bank_branch_data' => [
                    'routing_no' => '175272747',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '5876',
                'bank_id' => '33',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175272800',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '5877',
                'bank_id' => '33',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '175272989',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '5878',
                'bank_id' => '33',
                'name' => 'JOHNSON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175273254',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '5879',
                'bank_id' => '33',
                'name' => 'JURAIN',
                'bank_branch_data' => [
                    'routing_no' => '175273317',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '5880',
                'bank_id' => '33',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '175273588',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '5881',
                'bank_id' => '33',
                'name' => 'KOMORGONJ',
                'bank_branch_data' => [
                    'routing_no' => '175273733',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '5882',
                'bank_id' => '33',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '175273946',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '5883',
                'bank_id' => '33',
                'name' => 'MOGHALTULY',
                'bank_branch_data' => [
                    'routing_no' => '175274158',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '5884',
                'bank_id' => '33',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175274187',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '5885',
                'bank_id' => '33',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '175274240',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '5886',
                'bank_id' => '33',
                'name' => 'SIPAHIBAG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175274345',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '5887',
                'bank_id' => '33',
                'name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175274758',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '5888',
                'bank_id' => '33',
                'name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175274811',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '5889',
                'bank_id' => '33',
                'name' => 'NAYA PALTAN',
                'bank_branch_data' => [
                    'routing_no' => '175274879',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '5890',
                'bank_id' => '33',
                'name' => 'NAZIMUDDIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175274932',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '5891',
                'bank_id' => '33',
                'name' => 'PEEL KHANA',
                'bank_branch_data' => [
                    'routing_no' => '175275265',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '5892',
                'bank_id' => '33',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '175275357',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '5893',
                'bank_id' => '33',
                'name' => 'R.K. MISSION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175275478',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '5894',
                'bank_id' => '33',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '175275928',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '5895',
                'bank_id' => '33',
                'name' => 'SHAHBAG AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '175276222',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '5896',
                'bank_id' => '33',
                'name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '175276343',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '5897',
                'bank_id' => '33',
                'name' => 'SHISHU PARK',
                'bank_branch_data' => [
                    'routing_no' => '175276464',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '5898',
                'bank_id' => '33',
                'name' => 'SONARGAON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175276585',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '5899',
                'bank_id' => '33',
                'name' => 'SUTRAPUR',
                'bank_branch_data' => [
                    'routing_no' => '175276648',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '5900',
                'bank_id' => '33',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '175280676',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '5901',
                'bank_id' => '33',
                'name' => 'PARBATIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175281817',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '5902',
                'bank_id' => '33',
                'name' => 'PHULBARI',
                'bank_branch_data' => [
                    'routing_no' => '175281875',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '5903',
                'bank_id' => '33',
                'name' => 'PULHAT',
                'bank_branch_data' => [
                    'routing_no' => '175281938',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '5904',
                'bank_id' => '33',
                'name' => 'BHANGA',
                'bank_branch_data' => [
                    'routing_no' => '175290282',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '5905',
                'bank_id' => '33',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '175290529',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '5906',
                'bank_id' => '33',
                'name' => 'KANAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175290916',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '5907',
                'bank_id' => '33',
                'name' => 'SADARPUR',
                'bank_branch_data' => [
                    'routing_no' => '175291278',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '5908',
                'bank_id' => '33',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175300222',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '5909',
                'bank_id' => '33',
                'name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'routing_no' => '175300314',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '5910',
                'bank_id' => '33',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '175300372',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '5911',
                'bank_id' => '33',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '175300527',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '5912',
                'bank_id' => '33',
                'name' => 'FENI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175300556',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '5913',
                'bank_id' => '33',
                'name' => 'FULGAZI',
                'bank_branch_data' => [
                    'routing_no' => '175300619',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '5914',
                'bank_id' => '33',
                'name' => 'KAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '175300851',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '5915',
                'bank_id' => '33',
                'name' => 'LEMUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175301005',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '5916',
                'bank_id' => '33',
                'name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '175301489',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '5917',
                'bank_id' => '33',
                'name' => 'GAIBANDHA',
                'bank_branch_data' => [
                    'routing_no' => '175320523',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '5918',
                'bank_id' => '33',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175320581',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '5919',
                'bank_id' => '33',
                'name' => 'MOHIMAGONJ',
                'bank_branch_data' => [
                    'routing_no' => '175320978',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '5920',
                'bank_id' => '33',
                'name' => 'PARK ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175321151',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '5921',
                'bank_id' => '33',
                'name' => 'SALNA',
                'bank_branch_data' => [
                    'routing_no' => '175330171',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '5922',
                'bank_id' => '33',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '175330739',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '5923',
                'bank_id' => '33',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175330821',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '5924',
                'bank_id' => '33',
                'name' => 'KASHIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '175330913',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '5925',
                'bank_id' => '33',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '175331004',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '5926',
                'bank_id' => '33',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '175331633',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '5927',
                'bank_id' => '33',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175350377',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '5928',
                'bank_id' => '33',
                'name' => 'PUTIJHURI SME',
                'bank_branch_data' => [
                    'routing_no' => '175360017',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '5929',
                'bank_id' => '33',
                'name' => 'AJMIRIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175360046',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '5930',
                'bank_id' => '33',
                'name' => 'OLIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175360059',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '5931',
                'bank_id' => '33',
                'name' => 'BANIACHANG',
                'bank_branch_data' => [
                    'routing_no' => '175360167',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '5932',
                'bank_id' => '33',
                'name' => 'BAR-LIBRARY',
                'bank_branch_data' => [
                    'routing_no' => '175360196',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '5933',
                'bank_id' => '33',
                'name' => 'CHUNARUGHAT',
                'bank_branch_data' => [
                    'routing_no' => '175360341',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '5934',
                'bank_id' => '33',
                'name' => 'DHARMAGHAR',
                'bank_branch_data' => [
                    'routing_no' => '175360370',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '5935',
                'bank_id' => '33',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175360462',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '5936',
                'bank_id' => '33',
                'name' => 'GAZNAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175360491',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '5937',
                'bank_id' => '33',
                'name' => 'GUNINGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175360583',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '5938',
                'bank_id' => '33',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175360617',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '5939',
                'bank_id' => '33',
                'name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '175360888',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '5940',
                'bank_id' => '33',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175361090',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '5941',
                'bank_id' => '33',
                'name' => 'SHAYESTAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175361395',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '5942',
                'bank_id' => '33',
                'name' => 'RAJAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175361474',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '5943',
                'bank_id' => '33',
                'name' => 'SUTANG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175361487',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '5944',
                'bank_id' => '33',
                'name' => 'SYEDPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175361511',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '5945',
                'bank_id' => '33',
                'name' => 'TOWN MASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175361579',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '5946',
                'bank_id' => '33',
                'name' => 'JAMALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175380376',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '5947',
                'bank_id' => '33',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '175380400',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '5948',
                'bank_id' => '33',
                'name' => 'BAKUL TALA',
                'bank_branch_data' => [
                    'routing_no' => '175390166',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '5949',
                'bank_id' => '33',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '175390858',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '5950',
                'bank_id' => '33',
                'name' => 'NANDINA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175391307',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '5951',
                'bank_id' => '33',
                'name' => 'SARISHABARI',
                'bank_branch_data' => [
                    'routing_no' => '175391486',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '5952',
                'bank_id' => '33',
                'name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '175410288',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '5953',
                'bank_id' => '33',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '175410941',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '5954',
                'bank_id' => '33',
                'name' => 'NAVARAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175411616',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '5955',
                'bank_id' => '33',
                'name' => 'NOAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175411661',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '5956',
                'bank_id' => '33',
                'name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'routing_no' => '175420315',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '5957',
                'bank_id' => '33',
                'name' => 'NALCHITY',
                'bank_branch_data' => [
                    'routing_no' => '175420494',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '5958',
                'bank_id' => '33',
                'name' => 'RAJAPUR',
                'bank_branch_data' => [
                    'routing_no' => '175420557',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '5959',
                'bank_id' => '33',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '175440645',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '5960',
                'bank_id' => '33',
                'name' => 'KHAGRACHARI',
                'bank_branch_data' => [
                    'routing_no' => '175460070',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '5961',
                'bank_id' => '33',
                'name' => 'BATIAGHATA',
                'bank_branch_data' => [
                    'routing_no' => '175470310',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '5962',
                'bank_id' => '33',
                'name' => 'CHUK NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '175470552',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '5963',
                'bank_id' => '33',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '175470707',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '5964',
                'bank_id' => '33',
                'name' => 'FULTALA',
                'bank_branch_data' => [
                    'routing_no' => '175470873',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '5965',
                'bank_id' => '33',
                'name' => 'KAYAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175471335',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '5966',
                'bank_id' => '33',
                'name' => 'KHALISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '175471456',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '5967',
                'bank_id' => '33',
                'name' => 'KHULNA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '175471722',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '5968',
                'bank_id' => '33',
                'name' => 'MIRER DANGA',
                'bank_branch_data' => [
                    'routing_no' => '175471872',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '5969',
                'bank_id' => '33',
                'name' => 'SHAIKH PARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175472471',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '5970',
                'bank_id' => '33',
                'name' => 'UPPERJESSORE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '175472684',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '5971',
                'bank_id' => '33',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175480221',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '5972',
                'bank_id' => '33',
                'name' => 'KAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '175480526',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '5973',
                'bank_id' => '33',
                'name' => 'KATIADI',
                'bank_branch_data' => [
                    'routing_no' => '175480584',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '5974',
                'bank_id' => '33',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175480676',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '5975',
                'bank_id' => '33',
                'name' => 'FULBARI',
                'bank_branch_data' => [
                    'routing_no' => '175490190',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '5976',
                'bank_id' => '33',
                'name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '175490408',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '5977',
                'bank_id' => '33',
                'name' => 'BHERAMARA',
                'bank_branch_data' => [
                    'routing_no' => '175500280',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '5978',
                'bank_id' => '33',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '175500943',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '5979',
                'bank_id' => '33',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175510733',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '5980',
                'bank_id' => '33',
                'name' => 'MIRER HAT',
                'bank_branch_data' => [
                    'routing_no' => '175510854',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '5981',
                'bank_id' => '33',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175510975',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '5982',
                'bank_id' => '33',
                'name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175511037',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '5983',
                'bank_id' => '33',
                'name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '175520460',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '5984',
                'bank_id' => '33',
                'name' => 'TUSHBANDER',
                'bank_branch_data' => [
                    'routing_no' => '175520707',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '5985',
                'bank_id' => '33',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '175540408',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '5986',
                'bank_id' => '33',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '175540703',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '5987',
                'bank_id' => '33',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '175550551',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '5988',
                'bank_id' => '33',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '175560288',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '5989',
                'bank_id' => '33',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '175560617',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '5990',
                'bank_id' => '33',
                'name' => 'SINGAIR',
                'bank_branch_data' => [
                    'routing_no' => '175560820',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '5991',
                'bank_id' => '33',
                'name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '175570373',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '5992',
                'bank_id' => '33',
                'name' => 'ADAMPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175580042',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '5993',
                'bank_id' => '33',
                'name' => 'VATERA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175580068',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '5994',
                'bank_id' => '33',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '175580105',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '5995',
                'bank_id' => '33',
                'name' => 'BRAHMAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175580255',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '5996',
                'bank_id' => '33',
                'name' => 'CHOUMUHANA',
                'bank_branch_data' => [
                    'routing_no' => '175580376',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '5997',
                'bank_id' => '33',
                'name' => 'DAKSHINBAGH',
                'bank_branch_data' => [
                    'routing_no' => '175580439',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '5998',
                'bank_id' => '33',
                'name' => 'ROBIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '175580497',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '5999',
                'bank_id' => '33',
                'name' => 'JOGIDAHAR',
                'bank_branch_data' => [
                    'routing_no' => '175580655',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '6000',
                'bank_id' => '33',
                'name' => 'JURI',
                'bank_branch_data' => [
                    'routing_no' => '175580671',
                ],
                'enabled' => true,
            ],
        ];
    }
}
