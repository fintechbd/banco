<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch1Seeder extends Seeder
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
                'id' => '1',
                'bank_id' => '1',
                'name' => 'BADHAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10010048',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '2',
                'bank_id' => '1',
                'name' => 'BHANGA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10010064',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '3',
                'bank_id' => '1',
                'name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10010077',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '4',
                'bank_id' => '1',
                'name' => 'CHULKATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10010280',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '5',
                'bank_id' => '1',
                'name' => 'DEYPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10010372',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '6',
                'bank_id' => '1',
                'name' => 'GOALMATH',
                'bank_branch_data' => [
                    'routing_no' => '10010619',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '7',
                'bank_id' => '1',
                'name' => 'HERMA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10010677',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '8',
                'bank_id' => '1',
                'name' => 'JATRAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10010701',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '9',
                'bank_id' => '1',
                'name' => 'MAIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10010851',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '10',
                'bank_id' => '1',
                'name' => 'MONGLA PORT',
                'bank_branch_data' => [
                    'routing_no' => '10010972',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '11',
                'bank_id' => '1',
                'name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10011034',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '12',
                'bank_id' => '1',
                'name' => 'MUNIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10011063',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '13',
                'bank_id' => '1',
                'name' => 'POLERHAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10011126',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '14',
                'bank_id' => '1',
                'name' => 'SANNASHY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10011276',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '15',
                'bank_id' => '1',
                'name' => 'AZIZ NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10030073',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '16',
                'bank_id' => '1',
                'name' => 'BANDARBAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10030165',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '17',
                'bank_id' => '1',
                'name' => 'AMTALI',
                'bank_branch_data' => [
                    'routing_no' => '10040047',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '18',
                'bank_id' => '1',
                'name' => 'BARGUNA',
                'bank_branch_data' => [
                    'routing_no' => '10040139',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '19',
                'bank_id' => '1',
                'name' => 'GAZIPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '10040371',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '20',
                'bank_id' => '1',
                'name' => 'KAKCHIRA',
                'bank_branch_data' => [
                    'routing_no' => '10040492',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '21',
                'bank_id' => '1',
                'name' => 'KAUNIA',
                'bank_branch_data' => [
                    'routing_no' => '10040526',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '22',
                'bank_id' => '1',
                'name' => 'NALIBANDAR',
                'bank_branch_data' => [
                    'routing_no' => '10040647',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '23',
                'bank_id' => '1',
                'name' => 'TALTALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10040739',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '24',
                'bank_id' => '1',
                'name' => 'DHAMURA BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '10060056',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '25',
                'bank_id' => '1',
                'name' => 'RAHUTHKATI BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '10060085',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '26',
                'bank_id' => '1',
                'name' => 'RANIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10060148',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '27',
                'bank_id' => '1',
                'name' => 'SATLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10060177',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '28',
                'bank_id' => '1',
                'name' => 'BANARI PARA',
                'bank_branch_data' => [
                    'routing_no' => '10060256',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '29',
                'bank_id' => '1',
                'name' => 'BATAJORE',
                'bank_branch_data' => [
                    'routing_no' => '10060377',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '30',
                'bank_id' => '1',
                'name' => 'BOTTALA',
                'bank_branch_data' => [
                    'routing_no' => '10060522',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '31',
                'bank_id' => '1',
                'name' => 'BUKHAI NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10060551',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '32',
                'bank_id' => '1',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10060706',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '33',
                'bank_id' => '1',
                'name' => 'GOURNADI',
                'bank_branch_data' => [
                    'routing_no' => '10060827',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '34',
                'bank_id' => '1',
                'name' => 'MOTHERKATHI',
                'bank_branch_data' => [
                    'routing_no' => '10061400',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '35',
                'bank_id' => '1',
                'name' => 'MULADI',
                'bank_branch_data' => [
                    'routing_no' => '10061455',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '36',
                'bank_id' => '1',
                'name' => 'PAISHARHAT',
                'bank_branch_data' => [
                    'routing_no' => '10061600',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '37',
                'bank_id' => '1',
                'name' => 'PURAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10061697',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '38',
                'bank_id' => '1',
                'name' => 'SADAR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10061813',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '39',
                'bank_id' => '1',
                'name' => 'TORKI BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '10062212',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '40',
                'bank_id' => '1',
                'name' => 'ULANIA',
                'bank_branch_data' => [
                    'routing_no' => '10062238',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '41',
                'bank_id' => '1',
                'name' => 'BANGLABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10090071',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '42',
                'bank_id' => '1',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '10090105',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '43',
                'bank_id' => '1',
                'name' => 'BORHANUDDIN',
                'bank_branch_data' => [
                    'routing_no' => '10090192',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '44',
                'bank_id' => '1',
                'name' => 'CHAR FASSION BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10090255',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '45',
                'bank_id' => '1',
                'name' => 'CHAR SHASHI BHUSON',
                'bank_branch_data' => [
                    'routing_no' => '10090284',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '46',
                'bank_id' => '1',
                'name' => 'DAULATKHAN',
                'bank_branch_data' => [
                    'routing_no' => '10090376',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '47',
                'bank_id' => '1',
                'name' => 'KALINATH RAER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10090550',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '48',
                'bank_id' => '1',
                'name' => 'KHAIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10090613',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '49',
                'bank_id' => '1',
                'name' => 'LALMOHAN',
                'bank_branch_data' => [
                    'routing_no' => '10090705',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '50',
                'bank_id' => '1',
                'name' => 'WAPDA',
                'bank_branch_data' => [
                    'routing_no' => '10091038',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '51',
                'bank_id' => '1',
                'name' => 'BADURTALA',
                'bank_branch_data' => [
                    'routing_no' => '10100161',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '52',
                'bank_id' => '1',
                'name' => 'BAGBARI',
                'bank_branch_data' => [
                    'routing_no' => '10100190',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '53',
                'bank_id' => '1',
                'name' => 'BHATRA',
                'bank_branch_data' => [
                    'routing_no' => '10100282',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '54',
                'bank_id' => '1',
                'name' => 'BOGRA CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '10100437',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '55',
                'bank_id' => '1',
                'name' => 'CHAMRUL',
                'bank_branch_data' => [
                    'routing_no' => '10100640',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '56',
                'bank_id' => '1',
                'name' => 'CHELOPARA',
                'bank_branch_data' => [
                    'routing_no' => '10100761',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '57',
                'bank_id' => '1',
                'name' => 'DEMAJANI',
                'bank_branch_data' => [
                    'routing_no' => '10100824',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '58',
                'bank_id' => '1',
                'name' => 'DHUNAT',
                'bank_branch_data' => [
                    'routing_no' => '10100882',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '59',
                'bank_id' => '1',
                'name' => 'GHORADHAPAHAT',
                'bank_branch_data' => [
                    'routing_no' => '10101094',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '60',
                'bank_id' => '1',
                'name' => 'GOKUL',
                'bank_branch_data' => [
                    'routing_no' => '10101210',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '61',
                'bank_id' => '1',
                'name' => 'KHANDER',
                'bank_branch_data' => [
                    'routing_no' => '10101607',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '62',
                'bank_id' => '1',
                'name' => 'MADLA',
                'bank_branch_data' => [
                    'routing_no' => '10101757',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '63',
                'bank_id' => '1',
                'name' => 'MAJHIRA',
                'bank_branch_data' => [
                    'routing_no' => '10101849',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '64',
                'bank_id' => '1',
                'name' => 'MIRJAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10101902',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '65',
                'bank_id' => '1',
                'name' => 'NAMAJGHAR',
                'bank_branch_data' => [
                    'routing_no' => '10101960',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '66',
                'bank_id' => '1',
                'name' => 'NANDIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10102022',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '67',
                'bank_id' => '1',
                'name' => 'NISHINDARA',
                'bank_branch_data' => [
                    'routing_no' => '10102114',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '68',
                'bank_id' => '1',
                'name' => 'PORADAHHAT',
                'bank_branch_data' => [
                    'routing_no' => '10102206',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '69',
                'bank_id' => '1',
                'name' => 'RAJABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10102264',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '70',
                'bank_id' => '1',
                'name' => 'SAPTAPADI MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10102448',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '71',
                'bank_id' => '1',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '10102743',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '72',
                'bank_id' => '1',
                'name' => 'SHONKA',
                'bank_branch_data' => [
                    'routing_no' => '10102835',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '73',
                'bank_id' => '1',
                'name' => 'SIBBATI',
                'bank_branch_data' => [
                    'routing_no' => '10102864',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '74',
                'bank_id' => '1',
                'name' => 'SONATALA',
                'bank_branch_data' => [
                    'routing_no' => '10102956',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '75',
                'bank_id' => '1',
                'name' => 'SULTANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10103047',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '76',
                'bank_id' => '1',
                'name' => 'TALORA',
                'bank_branch_data' => [
                    'routing_no' => '10103076',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '77',
                'bank_id' => '1',
                'name' => 'TALUCH HAT',
                'bank_branch_data' => [
                    'routing_no' => '10103100',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '78',
                'bank_id' => '1',
                'name' => 'TARONIHAT',
                'bank_branch_data' => [
                    'routing_no' => '10103139',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '79',
                'bank_id' => '1',
                'name' => 'THANA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10103168',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '80',
                'bank_id' => '1',
                'name' => 'ZIANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10103221',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '81',
                'bank_id' => '1',
                'name' => 'AKHAURA',
                'bank_branch_data' => [
                    'routing_no' => '10120046',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '82',
                'bank_id' => '1',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10120109',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '83',
                'bank_id' => '1',
                'name' => 'BANCHARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10120259',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '84',
                'bank_id' => '1',
                'name' => 'BANGURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10120288',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '85',
                'bank_id' => '1',
                'name' => 'BITGHAR',
                'bank_branch_data' => [
                    'routing_no' => '10120404',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '86',
                'bank_id' => '1',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '10120433',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '87',
                'bank_id' => '1',
                'name' => 'CHANDURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10120583',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '88',
                'bank_id' => '1',
                'name' => 'JAGAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10120912',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '89',
                'bank_id' => '1',
                'name' => 'KASBA',
                'bank_branch_data' => [
                    'routing_no' => '10121032',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '90',
                'bank_id' => '1',
                'name' => 'LALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10121153',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '91',
                'bank_id' => '1',
                'name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10121366',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '92',
                'bank_id' => '1',
                'name' => 'SALIMGONJ',
                'bank_branch_data' => [
                    'routing_no' => '10121579',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '93',
                'bank_id' => '1',
                'name' => 'SHAHPUR',
                'bank_branch_data' => [
                    'routing_no' => '10121724',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '94',
                'bank_id' => '1',
                'name' => 'SHIBPUR',
                'bank_branch_data' => [
                    'routing_no' => '10121737',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '95',
                'bank_id' => '1',
                'name' => 'T.A. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10121845',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '96',
                'bank_id' => '1',
                'name' => 'ALGEE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10130052',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '97',
                'bank_id' => '1',
                'name' => 'KACHUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10130065',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '98',
                'bank_id' => '1',
                'name' => 'BABUR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10130131',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '99',
                'bank_id' => '1',
                'name' => 'BALITHUBA',
                'bank_branch_data' => [
                    'routing_no' => '10130207',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '100',
                'bank_id' => '1',
                'name' => 'BELTALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10130223',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '101',
                'bank_id' => '1',
                'name' => 'CHANDRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10130465',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '102',
                'bank_id' => '1',
                'name' => 'CHHENGARCHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10130557',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '103',
                'bank_id' => '1',
                'name' => 'FARAKKABAD',
                'bank_branch_data' => [
                    'routing_no' => '10130799',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '104',
                'bank_id' => '1',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10130881',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '105',
                'bank_id' => '1',
                'name' => 'KHAJURIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10131035',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '106',
                'bank_id' => '1',
                'name' => 'MATLAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10131219',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '107',
                'bank_id' => '1',
                'name' => 'MEHER',
                'bank_branch_data' => [
                    'routing_no' => '10131277',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '108',
                'bank_id' => '1',
                'name' => 'MUNSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10131330',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '109',
                'bank_id' => '1',
                'name' => 'NANDALALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10131398',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '110',
                'bank_id' => '1',
                'name' => 'NARAYANPUR',
                'bank_branch_data' => [
                    'routing_no' => '10131451',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '111',
                'bank_id' => '1',
                'name' => 'NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10131480',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '112',
                'bank_id' => '1',
                'name' => 'RAMCHANDRAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10131727',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '113',
                'bank_id' => '1',
                'name' => 'RUPSHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10131785',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '114',
                'bank_id' => '1',
                'name' => 'SREERAMDI',
                'bank_branch_data' => [
                    'routing_no' => '10132050',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '115',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10132089',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '116',
                'bank_id' => '1',
                'name' => 'AGRABAD CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '10150166',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '117',
                'bank_id' => '1',
                'name' => 'AIR BASE',
                'bank_branch_data' => [
                    'routing_no' => '10150195',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '118',
                'bank_id' => '1',
                'name' => 'AMANAT KHAN SARAK',
                'bank_branch_data' => [
                    'routing_no' => '10150287',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '119',
                'bank_id' => '1',
                'name' => 'AMIRABAD',
                'bank_branch_data' => [
                    'routing_no' => '10150403',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '120',
                'bank_id' => '1',
                'name' => 'AMIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10150432',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '121',
                'bank_id' => '1',
                'name' => 'ARTYLARY CENTRE',
                'bank_branch_data' => [
                    'routing_no' => '10150553',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '122',
                'bank_id' => '1',
                'name' => 'ASAD GANJ',
                'bank_branch_data' => [
                    'routing_no' => '10150582',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '123',
                'bank_id' => '1',
                'name' => 'ASKERDIGHI',
                'bank_branch_data' => [
                    'routing_no' => '10150674',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '124',
                'bank_id' => '1',
                'name' => 'AZADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10150737',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '125',
                'bank_id' => '1',
                'name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10150795',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '126',
                'bank_id' => '1',
                'name' => 'BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '10150911',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '127',
                'bank_id' => '1',
                'name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'routing_no' => '10151099',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '128',
                'bank_id' => '1',
                'name' => 'BARODAROGA HAT',
                'bank_branch_data' => [
                    'routing_no' => '10151123',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '129',
                'bank_id' => '1',
                'name' => 'BAY SHOPPING CENTRE',
                'bank_branch_data' => [
                    'routing_no' => '10151181',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '130',
                'bank_id' => '1',
                'name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10151307',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '131',
                'bank_id' => '1',
                'name' => 'CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10151660',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '132',
                'bank_id' => '1',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '10151752',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '133',
                'bank_id' => '1',
                'name' => 'CHATTESWARI ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10151907',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '134',
                'bank_id' => '1',
                'name' => 'CHATURI CHAUMUHONI',
                'bank_branch_data' => [
                    'routing_no' => '10151910',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '135',
                'bank_id' => '1',
                'name' => 'CHITTAGONG PRESS CLUB',
                'bank_branch_data' => [
                    'routing_no' => '10152056',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '136',
                'bank_id' => '1',
                'name' => 'CHITTAGONG UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10152085',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '137',
                'bank_id' => '1',
                'name' => 'COLONEL HAT',
                'bank_branch_data' => [
                    'routing_no' => '10152298',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '138',
                'bank_id' => '1',
                'name' => 'COMMERCIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '10152322',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '139',
                'bank_id' => '1',
                'name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '10152443',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '140',
                'bank_id' => '1',
                'name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10152627',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '141',
                'bank_id' => '1',
                'name' => 'FERINGHEE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10152801',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '142',
                'bank_id' => '1',
                'name' => 'FOTAYABAD',
                'bank_branch_data' => [
                    'routing_no' => '10152869',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '143',
                'bank_id' => '1',
                'name' => 'FOUZDERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10152898',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '144',
                'bank_id' => '1',
                'name' => 'GOHIRA',
                'bank_branch_data' => [
                    'routing_no' => '10153013',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '145',
                'bank_id' => '1',
                'name' => 'GUNAGARI',
                'bank_branch_data' => [
                    'routing_no' => '10153071',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '146',
                'bank_id' => '1',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '10153163',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '147',
                'bank_id' => '1',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '10153226',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '148',
                'bank_id' => '1',
                'name' => 'HAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10153255',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '149',
                'bank_id' => '1',
                'name' => 'INDUSTRIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '10153318',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '150',
                'bank_id' => '1',
                'name' => 'ISHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10153376',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '151',
                'bank_id' => '1',
                'name' => 'ISHANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10153439',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '152',
                'bank_id' => '1',
                'name' => 'JALALABAD',
                'bank_branch_data' => [
                    'routing_no' => '10153521',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '153',
                'bank_id' => '1',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10153642',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '154',
                'bank_id' => '1',
                'name' => 'KAPASHGOLA',
                'bank_branch_data' => [
                    'routing_no' => '10154038',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '155',
                'bank_id' => '1',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '10154188',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '156',
                'bank_id' => '1',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10154270',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '157',
                'bank_id' => '1',
                'name' => 'KHULSHI',
                'bank_branch_data' => [
                    'routing_no' => '10154362',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '158',
                'bank_id' => '1',
                'name' => 'LALDIGHI EAST',
                'bank_branch_data' => [
                    'routing_no' => '10154546',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '159',
                'bank_id' => '1',
                'name' => 'LALKHAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10154575',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '160',
                'bank_id' => '1',
                'name' => 'MADAM BIBIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10154696',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '161',
                'bank_id' => '1',
                'name' => 'MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10154933',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '162',
                'bank_id' => '1',
                'name' => 'MINNAT ALI HAT',
                'bank_branch_data' => [
                    'routing_no' => '10155024',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '163',
                'bank_id' => '1',
                'name' => 'MIRSARAI',
                'bank_branch_data' => [
                    'routing_no' => '10155053',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '164',
                'bank_id' => '1',
                'name' => 'MIRZAKHIL',
                'bank_branch_data' => [
                    'routing_no' => '10155082',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '165',
                'bank_id' => '1',
                'name' => 'MODUNA GHAT',
                'bank_branch_data' => [
                    'routing_no' => '10155174',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '166',
                'bank_id' => '1',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10155590',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '167',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10155653',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '168',
                'bank_id' => '1',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '10155929',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '169',
                'bank_id' => '1',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '10156160',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '170',
                'bank_id' => '1',
                'name' => 'QUAISH BURISH CHAR',
                'bank_branch_data' => [
                    'routing_no' => '10156344',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '171',
                'bank_id' => '1',
                'name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '10156494',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '172',
                'bank_id' => '1',
                'name' => 'REAZUDDIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10156528',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '173',
                'bank_id' => '1',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10156731',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '174',
                'bank_id' => '1',
                'name' => 'SAMITIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10156881',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '175',
                'bank_id' => '1',
                'name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '10156915',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '176',
                'bank_id' => '1',
                'name' => 'SANTINIKETAN',
                'bank_branch_data' => [
                    'routing_no' => '10156944',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '177',
                'bank_id' => '1',
                'name' => 'SARWATOLI',
                'bank_branch_data' => [
                    'routing_no' => '10157035',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '178',
                'bank_id' => '1',
                'name' => 'SATTAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10157093',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '179',
                'bank_id' => '1',
                'name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '10157398',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '180',
                'bank_id' => '1',
                'name' => 'SK. MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10157422',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '181',
                'bank_id' => '1',
                'name' => 'STEEL MILLS',
                'bank_branch_data' => [
                    'routing_no' => '10157543',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '182',
                'bank_id' => '1',
                'name' => 'STRAND ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10157572',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '183',
                'bank_id' => '1',
                'name' => 'ALAMDANGA',
                'bank_branch_data' => [
                    'routing_no' => '10180044',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '184',
                'bank_id' => '1',
                'name' => 'ANDUL BARIA',
                'bank_branch_data' => [
                    'routing_no' => '10180107',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '185',
                'bank_id' => '1',
                'name' => 'ASMANKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10180136',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '186',
                'bank_id' => '1',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '10180194',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '187',
                'bank_id' => '1',
                'name' => 'DARSHANA',
                'bank_branch_data' => [
                    'routing_no' => '10180310',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '188',
                'bank_id' => '1',
                'name' => 'HARDI',
                'bank_branch_data' => [
                    'routing_no' => '10180431',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '189',
                'bank_id' => '1',
                'name' => 'JIBAN NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10180581',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '190',
                'bank_id' => '1',
                'name' => 'KEDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10180707',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '191',
                'bank_id' => '1',
                'name' => 'RADHAKANTAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10180794',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '192',
                'bank_id' => '1',
                'name' => 'RAMDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10180828',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '193',
                'bank_id' => '1',
                'name' => 'JUKTIKHOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10190063',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '194',
                'bank_id' => '1',
                'name' => 'MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10190126',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '195',
                'bank_id' => '1',
                'name' => 'AMRATALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10190168',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '196',
                'bank_id' => '1',
                'name' => 'B.S.C.I.C',
                'bank_branch_data' => [
                    'routing_no' => '10190250',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '197',
                'bank_id' => '1',
                'name' => 'BALUTUPA',
                'bank_branch_data' => [
                    'routing_no' => '10190371',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '198',
                'bank_id' => '1',
                'name' => 'BATA KANDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10190526',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '199',
                'bank_id' => '1',
                'name' => 'BATAICHARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10190555',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '200',
                'bank_id' => '1',
                'name' => 'BOKSHAGONJ',
                'bank_branch_data' => [
                    'routing_no' => '10190739',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '201',
                'bank_id' => '1',
                'name' => 'BURICHANG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10190834',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '202',
                'bank_id' => '1',
                'name' => 'CHANDINA',
                'bank_branch_data' => [
                    'routing_no' => '10190889',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '203',
                'bank_id' => '1',
                'name' => 'DAUDKANDI',
                'bank_branch_data' => [
                    'routing_no' => '10191512',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '204',
                'bank_id' => '1',
                'name' => 'DEBIDWAR',
                'bank_branch_data' => [
                    'routing_no' => '10191604',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '205',
                'bank_id' => '1',
                'name' => 'HASANPUR',
                'bank_branch_data' => [
                    'routing_no' => '10192203',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '206',
                'bank_id' => '1',
                'name' => 'HOMNA',
                'bank_branch_data' => [
                    'routing_no' => '10192232',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '207',
                'bank_id' => '1',
                'name' => 'HOUSING ESTATE',
                'bank_branch_data' => [
                    'routing_no' => '10192261',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '208',
                'bank_id' => '1',
                'name' => 'JAHAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10192353',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '209',
                'bank_id' => '1',
                'name' => 'JHALAM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10192382',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '210',
                'bank_id' => '1',
                'name' => 'KASHINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10192595',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '211',
                'bank_id' => '1',
                'name' => 'KHILA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10192629',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '212',
                'bank_id' => '1',
                'name' => 'LAKSAM',
                'bank_branch_data' => [
                    'routing_no' => '10192711',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '213',
                'bank_id' => '1',
                'name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '10192779',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '214',
                'bank_id' => '1',
                'name' => 'MONOHARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10193073',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '215',
                'bank_id' => '1',
                'name' => 'MONSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10193107',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '216',
                'bank_id' => '1',
                'name' => 'NANGALKOT',
                'bank_branch_data' => [
                    'routing_no' => '10193257',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '217',
                'bank_id' => '1',
                'name' => 'NASRATPUR',
                'bank_branch_data' => [
                    'routing_no' => '10193286',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '218',
                'bank_id' => '1',
                'name' => 'NATHERPETUA',
                'bank_branch_data' => [
                    'routing_no' => '10193310',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '219',
                'bank_id' => '1',
                'name' => 'NIMSHAR',
                'bank_branch_data' => [
                    'routing_no' => '10193349',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '220',
                'bank_id' => '1',
                'name' => 'PADUAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10193402',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '221',
                'bank_id' => '1',
                'name' => 'RAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10193581',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '222',
                'bank_id' => '1',
                'name' => 'RUPBABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10193765',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '223',
                'bank_id' => '1',
                'name' => 'SHANKHACHAIL',
                'bank_branch_data' => [
                    'routing_no' => '10193828',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '224',
                'bank_id' => '1',
                'name' => 'TOMSON BRIDGE',
                'bank_branch_data' => [
                    'routing_no' => '10194098',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '225',
                'bank_id' => '1',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10220254',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '226',
                'bank_id' => '1',
                'name' => 'KHUTAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10220641',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '227',
                'bank_id' => '1',
                'name' => 'MARICCHA',
                'bank_branch_data' => [
                    'routing_no' => '10220704',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '228',
                'bank_id' => '1',
                'name' => 'TEKNAF',
                'bank_branch_data' => [
                    'routing_no' => '10220917',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '229',
                'bank_id' => '1',
                'name' => 'B.A.F.',
                'bank_branch_data' => [
                    'routing_no' => '10260319',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '230',
                'bank_id' => '1',
                'name' => 'BADDA',
                'bank_branch_data' => [
                    'routing_no' => '10260348',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '231',
                'bank_id' => '1',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '10260430',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '232',
                'bank_id' => '1',
                'name' => 'BANK TOWN',
                'bank_branch_data' => [
                    'routing_no' => '10260498',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '233',
                'bank_id' => '1',
                'name' => 'DHAMRAI',
                'bank_branch_data' => [
                    'routing_no' => '10261150',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '234',
                'bank_id' => '1',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '10261189',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '235',
                'bank_id' => '1',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10261334',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '236',
                'bank_id' => '1',
                'name' => 'FARMGATE',
                'bank_branch_data' => [
                    'routing_no' => '10261455',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '237',
                'bank_id' => '1',
                'name' => 'GABTALI',
                'bank_branch_data' => [
                    'routing_no' => '10261547',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '238',
                'bank_id' => '1',
                'name' => 'GREEN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10261697',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '239',
                'bank_id' => '1',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '10261721',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '240',
                'bank_id' => '1',
                'name' => 'ICDDRB',
                'bank_branch_data' => [
                    'routing_no' => '10262117',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '241',
                'bank_id' => '1',
                'name' => 'JAHANGIRNAGAR UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10262267',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '242',
                'bank_id' => '1',
                'name' => 'KURMITOLA',
                'bank_branch_data' => [
                    'routing_no' => '10262654',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '243',
                'bank_id' => '1',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '10262988',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '244',
                'bank_id' => '1',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10263190',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '245',
                'bank_id' => '1',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '10263282',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '246',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10263529',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '247',
                'bank_id' => '1',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '10263587',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '248',
                'bank_id' => '1',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '10263611',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '249',
                'bank_id' => '1',
                'name' => 'PATHALIA',
                'bank_branch_data' => [
                    'routing_no' => '10263640',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '250',
                'bank_id' => '1',
                'name' => 'RAYER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10263945',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '251',
                'bank_id' => '1',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10264036',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '252',
                'bank_id' => '1',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '10264094',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '253',
                'bank_id' => '1',
                'name' => 'SENPARA',
                'bank_branch_data' => [
                    'routing_no' => '10264210',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '254',
                'bank_id' => '1',
                'name' => 'SHEWRA PARA',
                'bank_branch_data' => [
                    'routing_no' => '10264278',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '255',
                'bank_id' => '1',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '10264302',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '256',
                'bank_id' => '1',
                'name' => 'SIMULIA',
                'bank_branch_data' => [
                    'routing_no' => '10264331',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '257',
                'bank_id' => '1',
                'name' => 'SONARGAON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10264360',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '258',
                'bank_id' => '1',
                'name' => 'TEJGAON INDUSTRIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '10264515',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '259',
                'bank_id' => '1',
                'name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '10264694',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '260',
                'bank_id' => '1',
                'name' => 'WASA',
                'bank_branch_data' => [
                    'routing_no' => '10264728',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '261',
                'bank_id' => '1',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '10270004',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '262',
                'bank_id' => '1',
                'name' => 'AGAMASHILANE',
                'bank_branch_data' => [
                    'routing_no' => '10270109',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '263',
                'bank_id' => '1',
                'name' => 'AMINCOURT',
                'bank_branch_data' => [
                    'routing_no' => '10270259',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '264',
                'bank_id' => '1',
                'name' => 'CHURAIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10270262',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '265',
                'bank_id' => '1',
                'name' => 'ANTA BARAH',
                'bank_branch_data' => [
                    'routing_no' => '10270288',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '266',
                'bank_id' => '1',
                'name' => 'RAYER BAGH',
                'bank_branch_data' => [
                    'routing_no' => '10270325',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '267',
                'bank_id' => '1',
                'name' => 'B.B. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '10270433',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '268',
                'bank_id' => '1',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10270554',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '269',
                'bank_id' => '1',
                'name' => 'BANGLA ACADAMY',
                'bank_branch_data' => [
                    'routing_no' => '10270796',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '270',
                'bank_id' => '1',
                'name' => 'BASHABOO',
                'bank_branch_data' => [
                    'routing_no' => '10270970',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '271',
                'bank_id' => '1',
                'name' => 'BECHARAMDEWRI',
                'bank_branch_data' => [
                    'routing_no' => '10271032',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '272',
                'bank_id' => '1',
                'name' => 'BEGUM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10271061',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '273',
                'bank_id' => '1',
                'name' => 'CENTRAL LAW COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10271216',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '274',
                'bank_id' => '1',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10271274',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '275',
                'bank_id' => '1',
                'name' => 'CHOWDHURY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10271337',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '276',
                'bank_id' => '1',
                'name' => 'DHAKA SHERATON HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '10271632',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '277',
                'bank_id' => '1',
                'name' => 'DHAKA UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10271724',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '278',
                'bank_id' => '1',
                'name' => 'DHOLAIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '10271874',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '279',
                'bank_id' => '1',
                'name' => 'FARASHGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10272231',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '280',
                'bank_id' => '1',
                'name' => 'FARIDABAD',
                'bank_branch_data' => [
                    'routing_no' => '10272260',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '281',
                'bank_id' => '1',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '10272323',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '282',
                'bank_id' => '1',
                'name' => 'HATKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '10272594',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '283',
                'bank_id' => '1',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '10272686',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '284',
                'bank_id' => '1',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10272802',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '285',
                'bank_id' => '1',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10272981',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '286',
                'bank_id' => '1',
                'name' => 'JAGANNATH UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10273106',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '287',
                'bank_id' => '1',
                'name' => 'JATIYA JADUGHAR',
                'bank_branch_data' => [
                    'routing_no' => '10273164',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '288',
                'bank_id' => '1',
                'name' => 'JATIYA PRESS CLUB',
                'bank_branch_data' => [
                    'routing_no' => '10273193',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '289',
                'bank_id' => '1',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '10273227',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '290',
                'bank_id' => '1',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '10273285',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '291',
                'bank_id' => '1',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '10273348',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '292',
                'bank_id' => '1',
                'name' => 'KAMALAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10273498',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '293',
                'bank_id' => '1',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '10273580',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '294',
                'bank_id' => '1',
                'name' => 'KOMORGONJ',
                'bank_branch_data' => [
                    'routing_no' => '10273735',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '295',
                'bank_id' => '1',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '10273948',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '296',
                'bank_id' => '1',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '10274000',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '297',
                'bank_id' => '1',
                'name' => 'MITFORD HOSPITAL',
                'bank_branch_data' => [
                    'routing_no' => '10274097',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '298',
                'bank_id' => '1',
                'name' => 'MOUCHAK MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10274392',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '299',
                'bank_id' => '1',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10274426',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '300',
                'bank_id' => '1',
                'name' => 'NARINDA',
                'bank_branch_data' => [
                    'routing_no' => '10274639',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '301',
                'bank_id' => '1',
                'name' => 'NARISHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10274668',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '302',
                'bank_id' => '1',
                'name' => 'NAWABGANJ ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10274697',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '303',
                'bank_id' => '1',
                'name' => 'NOBABGONJ (KOLAKOPA)',
                'bank_branch_data' => [
                    'routing_no' => '10274718',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '304',
                'bank_id' => '1',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '10274721',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '305',
                'bank_id' => '1',
                'name' => 'NEW ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '10275025',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '306',
                'bank_id' => '1',
                'name' => 'NORTH SOUTH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10275117',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '307',
                'bank_id' => '1',
                'name' => 'PATILZHAP BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10275175',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '308',
                'bank_id' => '1',
                'name' => 'POSTA',
                'bank_branch_data' => [
                    'routing_no' => '10275296',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '309',
                'bank_id' => '1',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '10275359',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '310',
                'bank_id' => '1',
                'name' => 'PURANA PALTAN',
                'bank_branch_data' => [
                    'routing_no' => '10275388',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '311',
                'bank_id' => '1',
                'name' => 'PYARIDAS ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10275441',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '312',
                'bank_id' => '1',
                'name' => 'RAISHAHEB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10275504',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '313',
                'bank_id' => '1',
                'name' => 'RAJUK BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '10275625',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '314',
                'bank_id' => '1',
                'name' => 'RAMNA',
                'bank_branch_data' => [
                    'routing_no' => '10275683',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '315',
                'bank_id' => '1',
                'name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '10275746',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '316',
                'bank_id' => '1',
                'name' => 'S.S. COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10275896',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '317',
                'bank_id' => '1',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10275920',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '318',
                'bank_id' => '1',
                'name' => 'SANTINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10276011',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '319',
                'bank_id' => '1',
                'name' => 'THATARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10276679',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '320',
                'bank_id' => '1',
                'name' => 'WAPDA',
                'bank_branch_data' => [
                    'routing_no' => '10276945',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '321',
                'bank_id' => '1',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '10277094',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '322',
                'bank_id' => '1',
                'name' => 'AMTALI',
                'bank_branch_data' => [
                    'routing_no' => '10280078',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '323',
                'bank_id' => '1',
                'name' => 'BHUSHIR BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '10280281',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '324',
                'bank_id' => '1',
                'name' => 'BIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10280344',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '325',
                'bank_id' => '1',
                'name' => 'BIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10280373',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '326',
                'bank_id' => '1',
                'name' => 'HAKIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10280915',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '327',
                'bank_id' => '1',
                'name' => 'KAMOLPUR',
                'bank_branch_data' => [
                    'routing_no' => '10281156',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '328',
                'bank_id' => '1',
                'name' => 'MADILA HAT',
                'bank_branch_data' => [
                    'routing_no' => '10281369',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '329',
                'bank_id' => '1',
                'name' => 'MALDAH PATTY',
                'bank_branch_data' => [
                    'routing_no' => '10281422',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '330',
                'bank_id' => '1',
                'name' => 'MUNSHIPARA',
                'bank_branch_data' => [
                    'routing_no' => '10281572',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '331',
                'bank_id' => '1',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10281635',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '332',
                'bank_id' => '1',
                'name' => 'PARBATIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10281819',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '333',
                'bank_id' => '1',
                'name' => 'PHUL HAT',
                'bank_branch_data' => [
                    'routing_no' => '10281848',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '334',
                'bank_id' => '1',
                'name' => 'PHULBARI',
                'bank_branch_data' => [
                    'routing_no' => '10281877',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '335',
                'bank_id' => '1',
                'name' => 'PURATAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10281969',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '336',
                'bank_id' => '1',
                'name' => 'SETABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10282171',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '337',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10282326',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '338',
                'bank_id' => '1',
                'name' => 'TAJPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '10282418',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '339',
                'bank_id' => '1',
                'name' => 'BADARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10290163',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '340',
                'bank_id' => '1',
                'name' => 'BHANGA',
                'bank_branch_data' => [
                    'routing_no' => '10290284',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '341',
                'bank_id' => '1',
                'name' => 'BOALMARI',
                'bank_branch_data' => [
                    'routing_no' => '10290347',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '342',
                'bank_id' => '1',
                'name' => 'BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '10290376',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '343',
                'bank_id' => '1',
                'name' => 'CHAR BHADRASAN',
                'bank_branch_data' => [
                    'routing_no' => '10290439',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '344',
                'bank_id' => '1',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '10290521',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '345',
                'bank_id' => '1',
                'name' => 'GHARUA',
                'bank_branch_data' => [
                    'routing_no' => '10290589',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '346',
                'bank_id' => '1',
                'name' => 'MALIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10291120',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '347',
                'bank_id' => '1',
                'name' => 'NAGARKANDA',
                'bank_branch_data' => [
                    'routing_no' => '10291188',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '348',
                'bank_id' => '1',
                'name' => 'SADARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10291270',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '349',
                'bank_id' => '1',
                'name' => 'SARIATULLAH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10291333',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '350',
                'bank_id' => '1',
                'name' => 'ZILLA PARISAD',
                'bank_branch_data' => [
                    'routing_no' => '10291517',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '351',
                'bank_id' => '1',
                'name' => 'SUBAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10300066',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '352',
                'bank_id' => '1',
                'name' => 'BAIRAGIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10300132',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '353',
                'bank_id' => '1',
                'name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'routing_no' => '10300316',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '354',
                'bank_id' => '1',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '10300529',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '355',
                'bank_id' => '1',
                'name' => 'KAMALAPATTY',
                'bank_branch_data' => [
                    'routing_no' => '10300790',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '356',
                'bank_id' => '1',
                'name' => 'PARSHURAM',
                'bank_branch_data' => [
                    'routing_no' => '10301278',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '357',
                'bank_id' => '1',
                'name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '10301481',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '358',
                'bank_id' => '1',
                'name' => 'TULATOLY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10301515',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '359',
                'bank_id' => '1',
                'name' => 'BONARPARA',
                'bank_branch_data' => [
                    'routing_no' => '10320220',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '360',
                'bank_id' => '1',
                'name' => 'DHOLBHANGA',
                'bank_branch_data' => [
                    'routing_no' => '10320370',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '361',
                'bank_id' => '1',
                'name' => 'FULCHARIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10320491',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '362',
                'bank_id' => '1',
                'name' => 'GAIBANDHA',
                'bank_branch_data' => [
                    'routing_no' => '10320525',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '363',
                'bank_id' => '1',
                'name' => 'KAMARPARA',
                'bank_branch_data' => [
                    'routing_no' => '10320709',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '364',
                'bank_id' => '1',
                'name' => 'NALDANGA',
                'bank_branch_data' => [
                    'routing_no' => '10321032',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '365',
                'bank_id' => '1',
                'name' => 'PANCHPIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10321124',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '366',
                'bank_id' => '1',
                'name' => 'RASULPUR',
                'bank_branch_data' => [
                    'routing_no' => '10321216',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '367',
                'bank_id' => '1',
                'name' => 'SADULLAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10321245',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '368',
                'bank_id' => '1',
                'name' => 'SAGHATTA',
                'bank_branch_data' => [
                    'routing_no' => '10321274',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '369',
                'bank_id' => '1',
                'name' => 'SUNDARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10321308',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '370',
                'bank_id' => '1',
                'name' => 'BAKTARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10330207',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '371',
                'bank_id' => '1',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10330223',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '372',
                'bank_id' => '1',
                'name' => 'BORMI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10330281',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '373',
                'bank_id' => '1',
                'name' => 'D.U.E.T.',
                'bank_branch_data' => [
                    'routing_no' => '10330436',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '374',
                'bank_id' => '1',
                'name' => 'DALAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10330449',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '375',
                'bank_id' => '1',
                'name' => 'GAGOTIA CHALAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10330494',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '376',
                'bank_id' => '1',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10330528',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '377',
                'bank_id' => '1',
                'name' => 'GOSINGA',
                'bank_branch_data' => [
                    'routing_no' => '10330649',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '378',
                'bank_id' => '1',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '10330799',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '379',
                'bank_id' => '1',
                'name' => 'KAORAID',
                'bank_branch_data' => [
                    'routing_no' => '10330852',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '380',
                'bank_id' => '1',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '10330881',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '381',
                'bank_id' => '1',
                'name' => 'KASHIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10330915',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '382',
                'bank_id' => '1',
                'name' => 'MOUNA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10331127',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '383',
                'bank_id' => '1',
                'name' => 'NAGARI',
                'bank_branch_data' => [
                    'routing_no' => '10331156',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '384',
                'bank_id' => '1',
                'name' => 'RAJABARI',
                'bank_branch_data' => [
                    'routing_no' => '10331301',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '385',
                'bank_id' => '1',
                'name' => 'SREEPUR',
                'bank_branch_data' => [
                    'routing_no' => '10331480',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '386',
                'bank_id' => '1',
                'name' => 'TOKNAYAN',
                'bank_branch_data' => [
                    'routing_no' => '10331572',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '387',
                'bank_id' => '1',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '10331635',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '388',
                'bank_id' => '1',
                'name' => 'VANGAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10350058',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '389',
                'bank_id' => '1',
                'name' => 'BANGABANDHU SHEIKH MUJIBUR RAHMAN SCIENCE AND TECHNOLOGY UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10350061',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '390',
                'bank_id' => '1',
                'name' => 'BANAGRAM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10350074',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '391',
                'bank_id' => '1',
                'name' => 'KALIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10350087',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '392',
                'bank_id' => '1',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10350379',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '393',
                'bank_id' => '1',
                'name' => 'JALIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '10350461',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '394',
                'bank_id' => '1',
                'name' => 'JHUTIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10350490',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '395',
                'bank_id' => '1',
                'name' => 'KASHIANI',
                'bank_branch_data' => [
                    'routing_no' => '10350582',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '396',
                'bank_id' => '1',
                'name' => 'KOTALIPARA',
                'bank_branch_data' => [
                    'routing_no' => '10350674',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '397',
                'bank_id' => '1',
                'name' => 'MUKSUDPUR',
                'bank_branch_data' => [
                    'routing_no' => '10350737',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '398',
                'bank_id' => '1',
                'name' => 'POURA SUPER MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10350858',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '399',
                'bank_id' => '1',
                'name' => 'RAMDIA',
                'bank_branch_data' => [
                    'routing_no' => '10350979',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '400',
                'bank_id' => '1',
                'name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'routing_no' => '10351099',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '401',
                'bank_id' => '1',
                'name' => 'GOPAYA',
                'bank_branch_data' => [
                    'routing_no' => '10360527',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '402',
                'bank_id' => '1',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10360619',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '403',
                'bank_id' => '1',
                'name' => 'KAILASHGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10360701',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '404',
                'bank_id' => '1',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10361092',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '405',
                'bank_id' => '1',
                'name' => 'PURAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10361339',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '406',
                'bank_id' => '1',
                'name' => 'AKKELPUR',
                'bank_branch_data' => [
                    'routing_no' => '10380044',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '407',
                'bank_id' => '1',
                'name' => 'JOYPURHAT GIRLS CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10380057',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '408',
                'bank_id' => '1',
                'name' => 'AWLAI',
                'bank_branch_data' => [
                    'routing_no' => '10380107',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '409',
                'bank_id' => '1',
                'name' => 'CHAWK BARKAT',
                'bank_branch_data' => [
                    'routing_no' => '10380228',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '410',
                'bank_id' => '1',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '10380402',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '411',
                'bank_id' => '1',
                'name' => 'KALAI',
                'bank_branch_data' => [
                    'routing_no' => '10380460',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '412',
                'bank_id' => '1',
                'name' => 'KUSHUMBA',
                'bank_branch_data' => [
                    'routing_no' => '10380523',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '413',
                'bank_id' => '1',
                'name' => 'MATRAI',
                'bank_branch_data' => [
                    'routing_no' => '10380581',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '414',
                'bank_id' => '1',
                'name' => 'PANCHBIBI',
                'bank_branch_data' => [
                    'routing_no' => '10380673',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '415',
                'bank_id' => '1',
                'name' => 'BALIJURI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10390197',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '416',
                'bank_id' => '1',
                'name' => 'BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '10390405',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '417',
                'bank_id' => '1',
                'name' => 'HAZIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10390700',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '418',
                'bank_id' => '1',
                'name' => 'ISLAMPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10390797',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '419',
                'bank_id' => '1',
                'name' => 'JAGANNATHGONJ GHAT',
                'bank_branch_data' => [
                    'routing_no' => '10390821',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '420',
                'bank_id' => '1',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10390850',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '421',
                'bank_id' => '1',
                'name' => 'JAMTOLI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10390942',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '422',
                'bank_id' => '1',
                'name' => 'JAMUNA SARKARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '10391004',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '423',
                'bank_id' => '1',
                'name' => 'LAHIRIKANDA',
                'bank_branch_data' => [
                    'routing_no' => '10391125',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '424',
                'bank_id' => '1',
                'name' => 'PINGNA',
                'bank_branch_data' => [
                    'routing_no' => '10391396',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '425',
                'bank_id' => '1',
                'name' => 'PIYARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10391420',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '426',
                'bank_id' => '1',
                'name' => 'SARISHABARI',
                'bank_branch_data' => [
                    'routing_no' => '10391488',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '427',
                'bank_id' => '1',
                'name' => 'SHABAZPUR',
                'bank_branch_data' => [
                    'routing_no' => '10391541',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '428',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10391662',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '429',
                'bank_id' => '1',
                'name' => 'BAGHERPARA',
                'bank_branch_data' => [
                    'routing_no' => '10410130',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '430',
                'bank_id' => '1',
                'name' => 'BAZAR(H.M.M.ROAD)',
                'bank_branch_data' => [
                    'routing_no' => '10410251',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '431',
                'bank_id' => '1',
                'name' => 'BENAPOLE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10410314',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '432',
                'bank_id' => '1',
                'name' => 'BHANGURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10410343',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '433',
                'bank_id' => '1',
                'name' => 'BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '10410406',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '434',
                'bank_id' => '1',
                'name' => 'DARATANA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10410619',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '435',
                'bank_id' => '1',
                'name' => 'GANGANANDAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10410677',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '436',
                'bank_id' => '1',
                'name' => 'GODKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10410730',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '437',
                'bank_id' => '1',
                'name' => 'HASIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10410851',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '438',
                'bank_id' => '1',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '10410943',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '439',
                'bank_id' => '1',
                'name' => 'JESSORE AIR BASE',
                'bank_branch_data' => [
                    'routing_no' => '10410972',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '440',
                'bank_id' => '1',
                'name' => 'JESSORE SCIENCE & TECHNOLOGY UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10410985',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '441',
                'bank_id' => '1',
                'name' => 'JHIKARGACHA',
                'bank_branch_data' => [
                    'routing_no' => '10411092',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '442',
                'bank_id' => '1',
                'name' => 'JHUMJHUMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10411126',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '443',
                'bank_id' => '1',
                'name' => 'KESHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '10411218',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '444',
                'bank_id' => '1',
                'name' => 'PROTAPPUR',
                'bank_branch_data' => [
                    'routing_no' => '10411755',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '445',
                'bank_id' => '1',
                'name' => 'PULERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10411784',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '446',
                'bank_id' => '1',
                'name' => 'RAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10411876',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '447',
                'bank_id' => '1',
                'name' => 'RAJARHAT',
                'bank_branch_data' => [
                    'routing_no' => '10411968',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '448',
                'bank_id' => '1',
                'name' => 'SHAIKH HATI',
                'bank_branch_data' => [
                    'routing_no' => '10412170',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '449',
                'bank_id' => '1',
                'name' => 'LABUBUNIA HAT',
                'bank_branch_data' => [
                    'routing_no' => '10420054',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '450',
                'bank_id' => '1',
                'name' => 'AMUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10420070',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '451',
                'bank_id' => '1',
                'name' => 'DAPDAPIA FERRYGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10420225',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '452',
                'bank_id' => '1',
                'name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'routing_no' => '10420317',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '453',
                'bank_id' => '1',
                'name' => 'NALCHITY',
                'bank_branch_data' => [
                    'routing_no' => '10420496',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '454',
                'bank_id' => '1',
                'name' => 'SHEKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10420612',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '455',
                'bank_id' => '1',
                'name' => 'BAZAR GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10440100',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '456',
                'bank_id' => '1',
                'name' => 'CHAPRAIL',
                'bank_branch_data' => [
                    'routing_no' => '10440313',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '457',
                'bank_id' => '1',
                'name' => 'HAMDAH BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '10440463',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '458',
                'bank_id' => '1',
                'name' => 'HOLIDHANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10440618',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '459',
                'bank_id' => '1',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '10440647',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '460',
                'bank_id' => '1',
                'name' => 'KABIRPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10440739',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '461',
                'bank_id' => '1',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10440797',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '462',
                'bank_id' => '1',
                'name' => 'KANYADAH',
                'bank_branch_data' => [
                    'routing_no' => '10440850',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '463',
                'bank_id' => '1',
                'name' => 'KOTCHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '10441004',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '464',
                'bank_id' => '1',
                'name' => 'SHADHUHATI',
                'bank_branch_data' => [
                    'routing_no' => '10441217',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '465',
                'bank_id' => '1',
                'name' => 'KHAGRACHARI',
                'bank_branch_data' => [
                    'routing_no' => '10460072',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '466',
                'bank_id' => '1',
                'name' => 'RAMGARH',
                'bank_branch_data' => [
                    'routing_no' => '10460319',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '467',
                'bank_id' => '1',
                'name' => 'BAIKALI',
                'bank_branch_data' => [
                    'routing_no' => '10470075',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '468',
                'bank_id' => '1',
                'name' => 'BAJUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10470109',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '469',
                'bank_id' => '1',
                'name' => 'BANARGATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10470138',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '470',
                'bank_id' => '1',
                'name' => 'BANKA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10470196',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '471',
                'bank_id' => '1',
                'name' => 'BATBUNIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10470288',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '472',
                'bank_id' => '1',
                'name' => 'CHUK NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10470554',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '473',
                'bank_id' => '1',
                'name' => 'CLAY ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10470583',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '474',
                'bank_id' => '1',
                'name' => 'DADA MATCH',
                'bank_branch_data' => [
                    'routing_no' => '10470675',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '475',
                'bank_id' => '1',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '10470709',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '476',
                'bank_id' => '1',
                'name' => 'FARAZIPARA',
                'bank_branch_data' => [
                    'routing_no' => '10470820',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '477',
                'bank_id' => '1',
                'name' => 'GOALPARA',
                'bank_branch_data' => [
                    'routing_no' => '10470912',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '478',
                'bank_id' => '1',
                'name' => 'JAIGIR MOHAL',
                'bank_branch_data' => [
                    'routing_no' => '10471061',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '479',
                'bank_id' => '1',
                'name' => 'JESSORE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10471124',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '480',
                'bank_id' => '1',
                'name' => 'K.D.A. NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10471216',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '481',
                'bank_id' => '1',
                'name' => 'KAPILMUNI',
                'bank_branch_data' => [
                    'routing_no' => '10471274',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '482',
                'bank_id' => '1',
                'name' => 'KAZDIA',
                'bank_branch_data' => [
                    'routing_no' => '10471366',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '483',
                'bank_id' => '1',
                'name' => 'KHALISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '10471458',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '484',
                'bank_id' => '1',
                'name' => 'KHAN JAHAN ALI ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10471487',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '485',
                'bank_id' => '1',
                'name' => 'KHULNA MEDICAL COLLEGE AND HOSPITAL',
                'bank_branch_data' => [
                    'routing_no' => '10471632',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '486',
                'bank_id' => '1',
                'name' => 'KHULNA UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10471690',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '487',
                'bank_id' => '1',
                'name' => 'MOHESWARPASHA',
                'bank_branch_data' => [
                    'routing_no' => '10471908',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '488',
                'bank_id' => '1',
                'name' => 'NAVAL BASE(B.N.S.TITUMIR)',
                'bank_branch_data' => [
                    'routing_no' => '10471966',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '489',
                'bank_id' => '1',
                'name' => 'PHULBARI GATE',
                'bank_branch_data' => [
                    'routing_no' => '10472110',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '490',
                'bank_id' => '1',
                'name' => 'PHULTALA',
                'bank_branch_data' => [
                    'routing_no' => '10472149',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '491',
                'bank_id' => '1',
                'name' => 'RUPSHASTAND ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10472352',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '492',
                'bank_id' => '1',
                'name' => 'S.I. ROAD CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '10472381',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '493',
                'bank_id' => '1',
                'name' => 'S.RAHMAN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10472415',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '494',
                'bank_id' => '1',
                'name' => 'SHAIKHPURA',
                'bank_branch_data' => [
                    'routing_no' => '10472507',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '495',
                'bank_id' => '1',
                'name' => 'TEROKHADA',
                'bank_branch_data' => [
                    'routing_no' => '10472657',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '496',
                'bank_id' => '1',
                'name' => 'BAJITPUR',
                'bank_branch_data' => [
                    'routing_no' => '10480102',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '497',
                'bank_id' => '1',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10480223',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '498',
                'bank_id' => '1',
                'name' => 'CHARPUMDI',
                'bank_branch_data' => [
                    'routing_no' => '10480252',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '499',
                'bank_id' => '1',
                'name' => 'HOSSAINPUR',
                'bank_branch_data' => [
                    'routing_no' => '10480407',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '500',
                'bank_id' => '1',
                'name' => 'KARIMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10480557',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '501',
                'bank_id' => '1',
                'name' => 'KATIADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10480610',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '502',
                'bank_id' => '1',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10480678',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '503',
                'bank_id' => '1',
                'name' => 'KULIAR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '10480731',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '504',
                'bank_id' => '1',
                'name' => 'MATHKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '10480881',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '505',
                'bank_id' => '1',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10480915',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '506',
                'bank_id' => '1',
                'name' => 'NIKLI',
                'bank_branch_data' => [
                    'routing_no' => '10481006',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '507',
                'bank_id' => '1',
                'name' => 'PAKUNDIA',
                'bank_branch_data' => [
                    'routing_no' => '10481064',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '508',
                'bank_id' => '1',
                'name' => 'BHITORBOND HAT',
                'bank_branch_data' => [
                    'routing_no' => '10490071',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '509',
                'bank_id' => '1',
                'name' => 'BHURUNGAMARI',
                'bank_branch_data' => [
                    'routing_no' => '10490105',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '510',
                'bank_id' => '1',
                'name' => 'CHILMARI',
                'bank_branch_data' => [
                    'routing_no' => '10490134',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '511',
                'bank_id' => '1',
                'name' => 'FULBARI',
                'bank_branch_data' => [
                    'routing_no' => '10490192',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '512',
                'bank_id' => '1',
                'name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10490400',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '513',
                'bank_id' => '1',
                'name' => 'NAGESWARI',
                'bank_branch_data' => [
                    'routing_no' => '10490468',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '514',
                'bank_id' => '1',
                'name' => 'NAZIMKHAN',
                'bank_branch_data' => [
                    'routing_no' => '10490497',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '515',
                'bank_id' => '1',
                'name' => 'RAJARHAT',
                'bank_branch_data' => [
                    'routing_no' => '10490589',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '516',
                'bank_id' => '1',
                'name' => 'ULIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10490705',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '517',
                'bank_id' => '1',
                'name' => 'ALLAHAR DARGAH',
                'bank_branch_data' => [
                    'routing_no' => '10500079',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '518',
                'bank_id' => '1',
                'name' => 'BARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10500190',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '519',
                'bank_id' => '1',
                'name' => 'BARAGANGDIA',
                'bank_branch_data' => [
                    'routing_no' => '10500224',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '520',
                'bank_id' => '1',
                'name' => 'BHERAMARA',
                'bank_branch_data' => [
                    'routing_no' => '10500282',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '521',
                'bank_id' => '1',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '10500466',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '522',
                'bank_id' => '1',
                'name' => 'GOLAP NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10500558',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '523',
                'bank_id' => '1',
                'name' => 'ISLAMIC UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10500679',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '524',
                'bank_id' => '1',
                'name' => 'KHALISHA KUNDI',
                'bank_branch_data' => [
                    'routing_no' => '10500790',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '525',
                'bank_id' => '1',
                'name' => 'KUMARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10500882',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '526',
                'bank_id' => '1',
                'name' => 'MATHURAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10501036',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '527',
                'bank_id' => '1',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '10501065',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '528',
                'bank_id' => '1',
                'name' => 'MOZAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10501157',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '529',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10501249',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '530',
                'bank_id' => '1',
                'name' => 'PANTI',
                'bank_branch_data' => [
                    'routing_no' => '10501278',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '531',
                'bank_id' => '1',
                'name' => 'PATIKABARI',
                'bank_branch_data' => [
                    'routing_no' => '10501331',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '532',
                'bank_id' => '1',
                'name' => 'PRAGPUR',
                'bank_branch_data' => [
                    'routing_no' => '10501399',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '533',
                'bank_id' => '1',
                'name' => 'S.C. BANERJEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10501481',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '534',
                'bank_id' => '1',
                'name' => 'SILAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '10501544',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '535',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10501573',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '536',
                'bank_id' => '1',
                'name' => 'THANAPARA',
                'bank_branch_data' => [
                    'routing_no' => '10501665',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '537',
                'bank_id' => '1',
                'name' => 'UJANGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10501694',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '538',
                'bank_id' => '1',
                'name' => 'BHABANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10510072',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '539',
                'bank_id' => '1',
                'name' => 'NAGMUD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10510119',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '540',
                'bank_id' => '1',
                'name' => 'PANIWALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10510122',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '541',
                'bank_id' => '1',
                'name' => 'DALAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10510401',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '542',
                'bank_id' => '1',
                'name' => 'DASHER HAT',
                'bank_branch_data' => [
                    'routing_no' => '10510469',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '543',
                'bank_id' => '1',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10510735',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '544',
                'bank_id' => '1',
                'name' => 'MANDARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10510827',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '545',
                'bank_id' => '1',
                'name' => 'PANPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10510919',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '546',
                'bank_id' => '1',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10510977',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '547',
                'bank_id' => '1',
                'name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10511039',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '548',
                'bank_id' => '1',
                'name' => 'RAMGATI',
                'bank_branch_data' => [
                    'routing_no' => '10511068',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '549',
                'bank_id' => '1',
                'name' => 'MISSION MOOR',
                'bank_branch_data' => [
                    'routing_no' => '10520059',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '550',
                'bank_id' => '1',
                'name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10520462',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '551',
                'bank_id' => '1',
                'name' => 'BARHAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10540071',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '552',
                'bank_id' => '1',
                'name' => 'DIKRIR CHOR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10540084',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '553',
                'bank_id' => '1',
                'name' => 'KALKINI',
                'bank_branch_data' => [
                    'routing_no' => '10540284',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '554',
                'bank_id' => '1',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10540400',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '555',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10540589',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '556',
                'bank_id' => '1',
                'name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10540763',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '557',
                'bank_id' => '1',
                'name' => 'ARPARA',
                'bank_branch_data' => [
                    'routing_no' => '10550137',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '558',
                'bank_id' => '1',
                'name' => 'BEROIL PALITA',
                'bank_branch_data' => [
                    'routing_no' => '10550166',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '559',
                'bank_id' => '1',
                'name' => 'HAJIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10550379',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '560',
                'bank_id' => '1',
                'name' => 'ICHHAKHADA',
                'bank_branch_data' => [
                    'routing_no' => '10550403',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '561',
                'bank_id' => '1',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '10550553',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '562',
                'bank_id' => '1',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '10550616',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '563',
                'bank_id' => '1',
                'name' => 'SREEPUR',
                'bank_branch_data' => [
                    'routing_no' => '10550979',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '564',
                'bank_id' => '1',
                'name' => 'VAINAR MOAR',
                'bank_branch_data' => [
                    'routing_no' => '10551002',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '565',
                'bank_id' => '1',
                'name' => 'ARICHAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10560048',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '566',
                'bank_id' => '1',
                'name' => 'BANGLADESH HAT',
                'bank_branch_data' => [
                    'routing_no' => '10560064',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '567',
                'bank_id' => '1',
                'name' => 'BOYRA',
                'bank_branch_data' => [
                    'routing_no' => '10560169',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '568',
                'bank_id' => '1',
                'name' => 'CHARIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10560222',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '569',
                'bank_id' => '1',
                'name' => 'DHALLAH',
                'bank_branch_data' => [
                    'routing_no' => '10560314',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '570',
                'bank_id' => '1',
                'name' => 'JANNA',
                'bank_branch_data' => [
                    'routing_no' => '10560493',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '571',
                'bank_id' => '1',
                'name' => 'JHITKA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10560556',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '572',
                'bank_id' => '1',
                'name' => 'KRISHNAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10560585',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '573',
                'bank_id' => '1',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10560619',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '574',
                'bank_id' => '1',
                'name' => 'MANIKNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10560677',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '575',
                'bank_id' => '1',
                'name' => 'SINGAIR',
                'bank_branch_data' => [
                    'routing_no' => '10560822',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '576',
                'bank_id' => '1',
                'name' => 'WIRELESS GATE',
                'bank_branch_data' => [
                    'routing_no' => '10560880',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '577',
                'bank_id' => '1',
                'name' => 'BAMONPARA',
                'bank_branch_data' => [
                    'routing_no' => '10570070',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '578',
                'bank_id' => '1',
                'name' => 'BAOT',
                'bank_branch_data' => [
                    'routing_no' => '10570133',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '579',
                'bank_id' => '1',
                'name' => 'GANGNI',
                'bank_branch_data' => [
                    'routing_no' => '10570225',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '580',
                'bank_id' => '1',
                'name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '10570375',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '581',
                'bank_id' => '1',
                'name' => 'MUJIB NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10570467',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '582',
                'bank_id' => '1',
                'name' => 'BHUKSHIMOIL',
                'bank_branch_data' => [
                    'routing_no' => '10580228',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '583',
                'bank_id' => '1',
                'name' => 'FULTALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10580552',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '584',
                'bank_id' => '1',
                'name' => 'GIAS NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10580581',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '585',
                'bank_id' => '1',
                'name' => 'KARMADAH',
                'bank_branch_data' => [
                    'routing_no' => '10580828',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '586',
                'bank_id' => '1',
                'name' => 'KATARKONA',
                'bank_branch_data' => [
                    'routing_no' => '10580857',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '587',
                'bank_id' => '1',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '10580949',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '588',
                'bank_id' => '1',
                'name' => 'MADHABPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10581001',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '589',
                'bank_id' => '1',
                'name' => 'MOSTAFAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10581151',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '590',
                'bank_id' => '1',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10581180',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '591',
                'bank_id' => '1',
                'name' => 'MUNSHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10581243',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '592',
                'bank_id' => '1',
                'name' => 'RABIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10581364',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '593',
                'bank_id' => '1',
                'name' => 'SINDUR KHAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10581698',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '594',
                'bank_id' => '1',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '10581722',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '595',
                'bank_id' => '1',
                'name' => 'BALIGAON BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10590139',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '596',
                'bank_id' => '1',
                'name' => 'DIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '10590434',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '597',
                'bank_id' => '1',
                'name' => 'HASAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10590555',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '598',
                'bank_id' => '1',
                'name' => 'HASHARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10590618',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '599',
                'bank_id' => '1',
                'name' => 'HOSSAINDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10590647',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '600',
                'bank_id' => '1',
                'name' => 'KALMA',
                'bank_branch_data' => [
                    'routing_no' => '10590700',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '601',
                'bank_id' => '1',
                'name' => 'KOLAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10590821',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '602',
                'bank_id' => '1',
                'name' => 'MIRKADIM',
                'bank_branch_data' => [
                    'routing_no' => '10590971',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '603',
                'bank_id' => '1',
                'name' => 'MUKTARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10591004',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '604',
                'bank_id' => '1',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10591033',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '605',
                'bank_id' => '1',
                'name' => 'MUNSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10591062',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '606',
                'bank_id' => '1',
                'name' => 'RAMGOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10591154',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '607',
                'bank_id' => '1',
                'name' => 'SIMPARA',
                'bank_branch_data' => [
                    'routing_no' => '10591367',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '608',
                'bank_id' => '1',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10591420',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '609',
                'bank_id' => '1',
                'name' => 'PAGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10610064',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '610',
                'bank_id' => '1',
                'name' => 'ATHAROBARI',
                'bank_branch_data' => [
                    'routing_no' => '10610130',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '611',
                'bank_id' => '1',
                'name' => 'BHAITKANDI',
                'bank_branch_data' => [
                    'routing_no' => '10610280',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '612',
                'bank_id' => '1',
                'name' => 'BHALUKA',
                'bank_branch_data' => [
                    'routing_no' => '10610314',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '613',
                'bank_id' => '1',
                'name' => 'BIDYAGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10610330',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '614',
                'bank_id' => '1',
                'name' => 'C.K. GHOSH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10610406',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '615',
                'bank_id' => '1',
                'name' => 'CHHOTO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10610585',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '616',
                'bank_id' => '1',
                'name' => 'DHARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10610822',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '617',
                'bank_id' => '1',
                'name' => 'FULPUR',
                'bank_branch_data' => [
                    'routing_no' => '10610972',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '618',
                'bank_id' => '1',
                'name' => 'GAFFARGAON',
                'bank_branch_data' => [
                    'routing_no' => '10611005',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '619',
                'bank_id' => '1',
                'name' => 'GIRLS CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10611034',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '620',
                'bank_id' => '1',
                'name' => 'ISHWARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10611184',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '621',
                'bank_id' => '1',
                'name' => 'KALIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10611247',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '622',
                'bank_id' => '1',
                'name' => 'KASHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10611300',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '623',
                'bank_id' => '1',
                'name' => 'MECHUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10611605',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '624',
                'bank_id' => '1',
                'name' => 'MEDICAL COLLAGE',
                'bank_branch_data' => [
                    'routing_no' => '10611634',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '625',
                'bank_id' => '1',
                'name' => 'MUKTAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '10611692',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '626',
                'bank_id' => '1',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '10611755',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '627',
                'bank_id' => '1',
                'name' => 'TRISHAL',
                'bank_branch_data' => [
                    'routing_no' => '10612354',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '628',
                'bank_id' => '1',
                'name' => 'AHSANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10640100',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '629',
                'bank_id' => '1',
                'name' => 'AI-HAI',
                'bank_branch_data' => [
                    'routing_no' => '10640139',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '630',
                'bank_id' => '1',
                'name' => 'BOALIA',
                'bank_branch_data' => [
                    'routing_no' => '10640405',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '631',
                'bank_id' => '1',
                'name' => 'BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '10640434',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '632',
                'bank_id' => '1',
                'name' => 'KASHAB',
                'bank_branch_data' => [
                    'routing_no' => '10640797',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '633',
                'bank_id' => '1',
                'name' => 'MAINAMHAT',
                'bank_branch_data' => [
                    'routing_no' => '10640971',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '634',
                'bank_id' => '1',
                'name' => 'MATAZEE HAT',
                'bank_branch_data' => [
                    'routing_no' => '10641062',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '635',
                'bank_id' => '1',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '10641183',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '636',
                'bank_id' => '1',
                'name' => 'NITHPUR',
                'bank_branch_data' => [
                    'routing_no' => '10641338',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '637',
                'bank_id' => '1',
                'name' => 'PATNITALA',
                'bank_branch_data' => [
                    'routing_no' => '10641459',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '638',
                'bank_id' => '1',
                'name' => 'PORSHA',
                'bank_branch_data' => [
                    'routing_no' => '10641512',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '639',
                'bank_id' => '1',
                'name' => 'SAPAHAR',
                'bank_branch_data' => [
                    'routing_no' => '10641754',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '640',
                'bank_id' => '1',
                'name' => 'ARENDA',
                'bank_branch_data' => [
                    'routing_no' => '10650040',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '641',
                'bank_id' => '1',
                'name' => 'AURIA',
                'bank_branch_data' => [
                    'routing_no' => '10650079',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '642',
                'bank_id' => '1',
                'name' => 'GAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10650190',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '643',
                'bank_id' => '1',
                'name' => 'JOGANIA',
                'bank_branch_data' => [
                    'routing_no' => '10650282',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '644',
                'bank_id' => '1',
                'name' => 'KALABARIA',
                'bank_branch_data' => [
                    'routing_no' => '10650316',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '645',
                'bank_id' => '1',
                'name' => 'KALIA',
                'bank_branch_data' => [
                    'routing_no' => '10650345',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '646',
                'bank_id' => '1',
                'name' => 'LOHAGARA',
                'bank_branch_data' => [
                    'routing_no' => '10650466',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '647',
                'bank_id' => '1',
                'name' => 'NARAIL',
                'bank_branch_data' => [
                    'routing_no' => '10650640',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '648',
                'bank_id' => '1',
                'name' => 'RATADANGA',
                'bank_branch_data' => [
                    'routing_no' => '10650703',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '649',
                'bank_id' => '1',
                'name' => 'ARAIHAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10670046',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '650',
                'bank_id' => '1',
                'name' => 'B.B. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10670075',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '651',
                'bank_id' => '1',
                'name' => 'B.K. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10670138',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '652',
                'bank_id' => '1',
                'name' => 'COURT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10670259',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '653',
                'bank_id' => '1',
                'name' => 'DEMRA',
                'bank_branch_data' => [
                    'routing_no' => '10670312',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '654',
                'bank_id' => '1',
                'name' => 'KALIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10670738',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '655',
                'bank_id' => '1',
                'name' => 'KANCHAN',
                'bank_branch_data' => [
                    'routing_no' => '10670796',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '656',
                'bank_id' => '1',
                'name' => 'MIRJUMLA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10671032',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '657',
                'bank_id' => '1',
                'name' => 'SHASTAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10671540',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '658',
                'bank_id' => '1',
                'name' => 'SIDDIRGONJ POWER STATION',
                'bank_branch_data' => [
                    'routing_no' => '10671632',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '659',
                'bank_id' => '1',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '10671690',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '660',
                'bank_id' => '1',
                'name' => 'TAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10671753',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '661',
                'bank_id' => '1',
                'name' => 'AMIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10680049',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '662',
                'bank_id' => '1',
                'name' => 'BABURHAT',
                'bank_branch_data' => [
                    'routing_no' => '10680102',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '663',
                'bank_id' => '1',
                'name' => 'C & B BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10680128',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '664',
                'bank_id' => '1',
                'name' => 'CHALAKCHAR',
                'bank_branch_data' => [
                    'routing_no' => '10680315',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '665',
                'bank_id' => '1',
                'name' => 'MONOHARDI',
                'bank_branch_data' => [
                    'routing_no' => '10680731',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '666',
                'bank_id' => '1',
                'name' => 'MUSAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10680799',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '667',
                'bank_id' => '1',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '10680852',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '668',
                'bank_id' => '1',
                'name' => 'PALASH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10680944',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '669',
                'bank_id' => '1',
                'name' => 'RADHAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10681064',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '670',
                'bank_id' => '1',
                'name' => 'SHIBPUR',
                'bank_branch_data' => [
                    'routing_no' => '10681301',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '671',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10681369',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '672',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10690118',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '673',
                'bank_id' => '1',
                'name' => 'BAGATIPARA',
                'bank_branch_data' => [
                    'routing_no' => '10690134',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '674',
                'bank_id' => '1',
                'name' => 'CHANCHAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '10690318',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '675',
                'bank_id' => '1',
                'name' => 'GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10690497',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '676',
                'bank_id' => '1',
                'name' => 'HALSHA',
                'bank_branch_data' => [
                    'routing_no' => '10690589',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '677',
                'bank_id' => '1',
                'name' => 'LAXMIKOL',
                'bank_branch_data' => [
                    'routing_no' => '10690947',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '678',
                'bank_id' => '1',
                'name' => 'LOKMANPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10690950',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '679',
                'bank_id' => '1',
                'name' => 'N.B. SUGAR MILLS',
                'bank_branch_data' => [
                    'routing_no' => '10691038',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '680',
                'bank_id' => '1',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '10691096',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '681',
                'bank_id' => '1',
                'name' => 'NATORE SUGAR MILLS',
                'bank_branch_data' => [
                    'routing_no' => '10691159',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '682',
                'bank_id' => '1',
                'name' => 'NAZIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '10691212',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '683',
                'bank_id' => '1',
                'name' => 'QUADIRABAD CANTT',
                'bank_branch_data' => [
                    'routing_no' => '10691362',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '684',
                'bank_id' => '1',
                'name' => 'RAJAPUR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10691425',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '685',
                'bank_id' => '1',
                'name' => 'SINGRA',
                'bank_branch_data' => [
                    'routing_no' => '10691483',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '686',
                'bank_id' => '1',
                'name' => 'AMNURA',
                'bank_branch_data' => [
                    'routing_no' => '10700040',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '687',
                'bank_id' => '1',
                'name' => 'BAROGHORIA',
                'bank_branch_data' => [
                    'routing_no' => '10700132',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '688',
                'bank_id' => '1',
                'name' => 'BINODPUR',
                'bank_branch_data' => [
                    'routing_no' => '10700190',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '689',
                'bank_id' => '1',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10700253',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '690',
                'bank_id' => '1',
                'name' => 'CHOWDALA',
                'bank_branch_data' => [
                    'routing_no' => '10700345',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '691',
                'bank_id' => '1',
                'name' => 'GOBRATALA',
                'bank_branch_data' => [
                    'routing_no' => '10700408',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '692',
                'bank_id' => '1',
                'name' => 'KHAMAR',
                'bank_branch_data' => [
                    'routing_no' => '10700558',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '693',
                'bank_id' => '1',
                'name' => 'MOBARAKPUR',
                'bank_branch_data' => [
                    'routing_no' => '10700611',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '694',
                'bank_id' => '1',
                'name' => 'MONAKASHA',
                'bank_branch_data' => [
                    'routing_no' => '10700703',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '695',
                'bank_id' => '1',
                'name' => 'RAJARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10700824',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '696',
                'bank_id' => '1',
                'name' => 'ROHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '10700882',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '697',
                'bank_id' => '1',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10700916',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '698',
                'bank_id' => '1',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10700945',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '699',
                'bank_id' => '1',
                'name' => 'BARAHATTA',
                'bank_branch_data' => [
                    'routing_no' => '10720075',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '700',
                'bank_id' => '1',
                'name' => 'BIRISHIRI',
                'bank_branch_data' => [
                    'routing_no' => '10720109',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '701',
                'bank_id' => '1',
                'name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10720196',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '702',
                'bank_id' => '1',
                'name' => 'FAKIRER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10720220',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '703',
                'bank_id' => '1',
                'name' => 'JHAN ZAIL',
                'bank_branch_data' => [
                    'routing_no' => '10720341',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '704',
                'bank_id' => '1',
                'name' => 'KENDUA',
                'bank_branch_data' => [
                    'routing_no' => '10720462',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '705',
                'bank_id' => '1',
                'name' => 'MAHANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10720675',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '706',
                'bank_id' => '1',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '10720738',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '707',
                'bank_id' => '1',
                'name' => 'PURBADHALA',
                'bank_branch_data' => [
                    'routing_no' => '10720796',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '708',
                'bank_id' => '1',
                'name' => 'RUPGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10720859',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '709',
                'bank_id' => '1',
                'name' => 'TIOSHRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10721061',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '710',
                'bank_id' => '1',
                'name' => 'KACHUKATA',
                'bank_branch_data' => [
                    'routing_no' => '10730494',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '711',
                'bank_id' => '1',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '10730731',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '712',
                'bank_id' => '1',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '10730799',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '713',
                'bank_id' => '1',
                'name' => 'SAYEDPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '10730823',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '714',
                'bank_id' => '1',
                'name' => 'BADALKOT',
                'bank_branch_data' => [
                    'routing_no' => '10750137',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '715',
                'bank_id' => '1',
                'name' => 'BADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '10750166',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '716',
                'bank_id' => '1',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '10750258',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '717',
                'bank_id' => '1',
                'name' => 'BAZRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10750311',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '718',
                'bank_id' => '1',
                'name' => 'BROJERGAON',
                'bank_branch_data' => [
                    'routing_no' => '10750379',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '719',
                'bank_id' => '1',
                'name' => 'CHANDRAGONJ',
                'bank_branch_data' => [
                    'routing_no' => '10750403',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '720',
                'bank_id' => '1',
                'name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'routing_no' => '10750582',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '721',
                'bank_id' => '1',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '10750674',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '722',
                'bank_id' => '1',
                'name' => 'DASHGHORIA',
                'bank_branch_data' => [
                    'routing_no' => '10750766',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '723',
                'bank_id' => '1',
                'name' => 'DATTERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10750795',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '724',
                'bank_id' => '1',
                'name' => 'DELTAGATE',
                'bank_branch_data' => [
                    'routing_no' => '10750858',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '725',
                'bank_id' => '1',
                'name' => 'GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10751002',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '726',
                'bank_id' => '1',
                'name' => 'HATIYA',
                'bank_branch_data' => [
                    'routing_no' => '10751031',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '727',
                'bank_id' => '1',
                'name' => 'JOYAG',
                'bank_branch_data' => [
                    'routing_no' => '10751181',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '728',
                'bank_id' => '1',
                'name' => 'KASHIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10751394',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '729',
                'bank_id' => '1',
                'name' => 'KHILPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10751486',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '730',
                'bank_id' => '1',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '10751578',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '731',
                'bank_id' => '1',
                'name' => 'MIRGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10751631',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '732',
                'bank_id' => '1',
                'name' => 'NADANA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10751660',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '733',
                'bank_id' => '1',
                'name' => 'SHAHEBER HAT',
                'bank_branch_data' => [
                    'routing_no' => '10752177',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '734',
                'bank_id' => '1',
                'name' => 'SOAMPARA',
                'bank_branch_data' => [
                    'routing_no' => '10752201',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '735',
                'bank_id' => '1',
                'name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'routing_no' => '10752230',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '736',
                'bank_id' => '1',
                'name' => 'ZILLA BOARD',
                'bank_branch_data' => [
                    'routing_no' => '10752443',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '737',
                'bank_id' => '1',
                'name' => 'A. HAMID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10760048',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '738',
                'bank_id' => '1',
                'name' => 'TRIMOHONI',
                'bank_branch_data' => [
                    'routing_no' => '10760064',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '739',
                'bank_id' => '1',
                'name' => 'SATBARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10760080',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '740',
                'bank_id' => '1',
                'name' => 'CHAIKOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10760114',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '741',
                'bank_id' => '1',
                'name' => 'ATAIKULA',
                'bank_branch_data' => [
                    'routing_no' => '10760222',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '742',
                'bank_id' => '1',
                'name' => 'ATGHORIA',
                'bank_branch_data' => [
                    'routing_no' => '10760251',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '743',
                'bank_id' => '1',
                'name' => 'BANAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '10760406',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '744',
                'bank_id' => '1',
                'name' => 'BORAL BRIDGE',
                'bank_branch_data' => [
                    'routing_no' => '10760619',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '745',
                'bank_id' => '1',
                'name' => 'COLLEGE GATE',
                'bank_branch_data' => [
                    'routing_no' => '10760701',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '746',
                'bank_id' => '1',
                'name' => 'COURT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10760730',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '747',
                'bank_id' => '1',
                'name' => 'DUBLIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10760943',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '748',
                'bank_id' => '1',
                'name' => 'H.M.M. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10761126',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '749',
                'bank_id' => '1',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '10761218',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '750',
                'bank_id' => '1',
                'name' => 'MIRZAPUR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10761542',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '751',
                'bank_id' => '1',
                'name' => 'MULADULI',
                'bank_branch_data' => [
                    'routing_no' => '10761571',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '752',
                'bank_id' => '1',
                'name' => 'NALKHOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10761663',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '753',
                'bank_id' => '1',
                'name' => 'NARIKELPARA',
                'bank_branch_data' => [
                    'routing_no' => '10761692',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '754',
                'bank_id' => '1',
                'name' => 'NAZIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10761726',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '755',
                'bank_id' => '1',
                'name' => 'PAKSEY',
                'bank_branch_data' => [
                    'routing_no' => '10761900',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '756',
                'bank_id' => '1',
                'name' => 'PUSHPAPARAHAT',
                'bank_branch_data' => [
                    'routing_no' => '10761939',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '757',
                'bank_id' => '1',
                'name' => 'RAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10761968',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '758',
                'bank_id' => '1',
                'name' => 'RAKSHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10761997',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '759',
                'bank_id' => '1',
                'name' => 'RUPPUR',
                'bank_branch_data' => [
                    'routing_no' => '10762020',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '760',
                'bank_id' => '1',
                'name' => 'SHIBRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '10762170',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '761',
                'bank_id' => '1',
                'name' => 'SHYAMGANJ HAT',
                'bank_branch_data' => [
                    'routing_no' => '10762204',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '762',
                'bank_id' => '1',
                'name' => 'SUJANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10762262',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '763',
                'bank_id' => '1',
                'name' => 'CHAKLAHAT',
                'bank_branch_data' => [
                    'routing_no' => '10770162',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '764',
                'bank_id' => '1',
                'name' => 'JAGADAL HAT',
                'bank_branch_data' => [
                    'routing_no' => '10770346',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '765',
                'bank_id' => '1',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10770520',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '766',
                'bank_id' => '1',
                'name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'routing_no' => '10770559',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '767',
                'bank_id' => '1',
                'name' => 'SHALBAHAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '10770612',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '768',
                'bank_id' => '1',
                'name' => 'TUNIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10770762',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '769',
                'bank_id' => '1',
                'name' => 'BAUPHAL',
                'bank_branch_data' => [
                    'routing_no' => '10780194',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '770',
                'bank_id' => '1',
                'name' => 'DASHMINA',
                'bank_branch_data' => [
                    'routing_no' => '10780349',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '771',
                'bank_id' => '1',
                'name' => 'GALACHIPA',
                'bank_branch_data' => [
                    'routing_no' => '10780499',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '772',
                'bank_id' => '1',
                'name' => 'KANAKDIA',
                'bank_branch_data' => [
                    'routing_no' => '10780644',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '773',
                'bank_id' => '1',
                'name' => 'KHEPUPARA',
                'bank_branch_data' => [
                    'routing_no' => '10780765',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '774',
                'bank_id' => '1',
                'name' => 'KOAKATA',
                'bank_branch_data' => [
                    'routing_no' => '10780794',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '775',
                'bank_id' => '1',
                'name' => 'MIRZAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10780828',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '776',
                'bank_id' => '1',
                'name' => 'NUTUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10781001',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '777',
                'bank_id' => '1',
                'name' => 'PANGASIA',
                'bank_branch_data' => [
                    'routing_no' => '10781030',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '778',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10781180',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '779',
                'bank_id' => '1',
                'name' => 'PURAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10781243',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '780',
                'bank_id' => '1',
                'name' => 'TEGACHIA',
                'bank_branch_data' => [
                    'routing_no' => '10781306',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '781',
                'bank_id' => '1',
                'name' => 'BHANDARIA',
                'bank_branch_data' => [
                    'routing_no' => '10790139',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '782',
                'bank_id' => '1',
                'name' => 'KAWKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10790434',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '783',
                'bank_id' => '1',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '10790526',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '784',
                'bank_id' => '1',
                'name' => 'MIRUKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10790647',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '785',
                'bank_id' => '1',
                'name' => 'PARERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10790739',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '786',
                'bank_id' => '1',
                'name' => 'PIROJPUR MAIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10790797',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '787',
                'bank_id' => '1',
                'name' => 'PIROJPUR(ZILLA PARISHAD)',
                'bank_branch_data' => [
                    'routing_no' => '10790821',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '788',
                'bank_id' => '1',
                'name' => 'COURT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10810051',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '789',
                'bank_id' => '1',
                'name' => 'RDA BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '10810080',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '790',
                'bank_id' => '1',
                'name' => 'BAJU BAGHA',
                'bank_branch_data' => [
                    'routing_no' => '10810130',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '791',
                'bank_id' => '1',
                'name' => 'BALIAGHATA',
                'bank_branch_data' => [
                    'routing_no' => '10810169',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '792',
                'bank_id' => '1',
                'name' => 'BANESHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10810198',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '793',
                'bank_id' => '1',
                'name' => 'CHARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '10810406',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '794',
                'bank_id' => '1',
                'name' => 'HARIAN',
                'bank_branch_data' => [
                    'routing_no' => '10810769',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '795',
                'bank_id' => '1',
                'name' => 'LAXMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10811184',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '796',
                'bank_id' => '1',
                'name' => 'MADRASHA MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10811247',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '797',
                'bank_id' => '1',
                'name' => 'MALOPARA',
                'bank_branch_data' => [
                    'routing_no' => '10811276',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '798',
                'bank_id' => '1',
                'name' => 'NAWHATA',
                'bank_branch_data' => [
                    'routing_no' => '10811605',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '799',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10811634',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '800',
                'bank_id' => '1',
                'name' => 'PUTHIA',
                'bank_branch_data' => [
                    'routing_no' => '10811847',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '801',
                'bank_id' => '1',
                'name' => 'RAIGHATI',
                'bank_branch_data' => [
                    'routing_no' => '10811876',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '802',
                'bank_id' => '1',
                'name' => 'RAJSHAHI CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '10811997',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '803',
                'bank_id' => '1',
                'name' => 'RAJSHAHI UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '10812112',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '804',
                'bank_id' => '1',
                'name' => 'SHAHEB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10812262',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '805',
                'bank_id' => '1',
                'name' => 'TALAIMARI',
                'bank_branch_data' => [
                    'routing_no' => '10812354',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '806',
                'bank_id' => '1',
                'name' => 'WAPDA IRRIGATION',
                'bank_branch_data' => [
                    'routing_no' => '10812417',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '807',
                'bank_id' => '1',
                'name' => 'AHLADIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10820041',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '808',
                'bank_id' => '1',
                'name' => 'KALUKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10820375',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '809',
                'bank_id' => '1',
                'name' => 'NALIA-JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10820559',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '810',
                'bank_id' => '1',
                'name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '10820670',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '811',
                'bank_id' => '1',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '10820733',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '812',
                'bank_id' => '1',
                'name' => 'BANARUPA',
                'bank_branch_data' => [
                    'routing_no' => '10840076',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '813',
                'bank_id' => '1',
                'name' => 'CHANDRAGHONA',
                'bank_branch_data' => [
                    'routing_no' => '10840197',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '814',
                'bank_id' => '1',
                'name' => 'KAPTAI',
                'bank_branch_data' => [
                    'routing_no' => '10840289',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '815',
                'bank_id' => '1',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '10840526',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '816',
                'bank_id' => '1',
                'name' => 'ALAM NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10850040',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '817',
                'bank_id' => '1',
                'name' => 'BADARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10850103',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '818',
                'bank_id' => '1',
                'name' => 'CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10850316',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '819',
                'bank_id' => '1',
                'name' => 'CENTRAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10850345',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '820',
                'bank_id' => '1',
                'name' => 'MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10851036',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '821',
                'bank_id' => '1',
                'name' => 'NEKMAMUDHAT',
                'bank_branch_data' => [
                    'routing_no' => '10851186',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '822',
                'bank_id' => '1',
                'name' => 'PAWTANAHAT',
                'bank_branch_data' => [
                    'routing_no' => '10851302',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '823',
                'bank_id' => '1',
                'name' => 'PIRGACHA',
                'bank_branch_data' => [
                    'routing_no' => '10851331',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '824',
                'bank_id' => '1',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '10851452',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '825',
                'bank_id' => '1',
                'name' => 'SHAKER HAT',
                'bank_branch_data' => [
                    'routing_no' => '10851665',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '826',
                'bank_id' => '1',
                'name' => 'SHANERHAT',
                'bank_branch_data' => [
                    'routing_no' => '10851728',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '827',
                'bank_id' => '1',
                'name' => 'TARAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10851931',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '828',
                'bank_id' => '1',
                'name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'routing_no' => '10860193',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '829',
                'bank_id' => '1',
                'name' => 'MULFATGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10860522',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '830',
                'bank_id' => '1',
                'name' => 'NARIA',
                'bank_branch_data' => [
                    'routing_no' => '10860580',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '831',
                'bank_id' => '1',
                'name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'routing_no' => '10860672',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '832',
                'bank_id' => '1',
                'name' => 'ZAJIRA',
                'bank_branch_data' => [
                    'routing_no' => '10860706',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '833',
                'bank_id' => '1',
                'name' => 'BANGSHIPUR BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '10870167',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '834',
                'bank_id' => '1',
                'name' => 'BHETKHALI',
                'bank_branch_data' => [
                    'routing_no' => '10870259',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '835',
                'bank_id' => '1',
                'name' => 'DEBHATA',
                'bank_branch_data' => [
                    'routing_no' => '10870370',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '836',
                'bank_id' => '1',
                'name' => 'GAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '10870433',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '837',
                'bank_id' => '1',
                'name' => 'MOUTALA',
                'bank_branch_data' => [
                    'routing_no' => '10870859',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '838',
                'bank_id' => '1',
                'name' => 'MUNSHIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10870888',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '839',
                'bank_id' => '1',
                'name' => 'PATKELGHATA',
                'bank_branch_data' => [
                    'routing_no' => '10871032',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '840',
                'bank_id' => '1',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '10871090',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '841',
                'bank_id' => '1',
                'name' => 'SHYAM NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10871216',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '842',
                'bank_id' => '1',
                'name' => 'NOOR NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10872031',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '843',
                'bank_id' => '1',
                'name' => 'BAHULI',
                'bank_branch_data' => [
                    'routing_no' => '10880160',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '844',
                'bank_id' => '1',
                'name' => 'BELTAIL',
                'bank_branch_data' => [
                    'routing_no' => '10880252',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '845',
                'bank_id' => '1',
                'name' => 'BRAHMAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '10880373',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '846',
                'bank_id' => '1',
                'name' => 'CHANDAIKONA',
                'bank_branch_data' => [
                    'routing_no' => '10880436',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '847',
                'bank_id' => '1',
                'name' => 'DHUBIL',
                'bank_branch_data' => [
                    'routing_no' => '10880731',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '848',
                'bank_id' => '1',
                'name' => 'ENAYETPUR',
                'bank_branch_data' => [
                    'routing_no' => '10880823',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '849',
                'bank_id' => '1',
                'name' => 'GHURKA',
                'bank_branch_data' => [
                    'routing_no' => '10880881',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '850',
                'bank_id' => '1',
                'name' => 'KALI BARI ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10881006',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '851',
                'bank_id' => '1',
                'name' => 'KHIDRAMATIA',
                'bank_branch_data' => [
                    'routing_no' => '10881219',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '852',
                'bank_id' => '1',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '10881451',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '853',
                'bank_id' => '1',
                'name' => 'NIMGACHI',
                'bank_branch_data' => [
                    'routing_no' => '10881514',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '854',
                'bank_id' => '1',
                'name' => 'PANGASHI HAT',
                'bank_branch_data' => [
                    'routing_no' => '10881572',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '855',
                'bank_id' => '1',
                'name' => 'PORJONA VATPARA',
                'bank_branch_data' => [
                    'routing_no' => '10881606',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '856',
                'bank_id' => '1',
                'name' => 'RAIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10881693',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '857',
                'bank_id' => '1',
                'name' => 'S.S. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10881785',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '858',
                'bank_id' => '1',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '10881901',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '859',
                'bank_id' => '1',
                'name' => 'SHOMESHPUR',
                'bank_branch_data' => [
                    'routing_no' => '10881998',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '860',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10882050',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '861',
                'bank_id' => '1',
                'name' => 'TALGACHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10882113',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '862',
                'bank_id' => '1',
                'name' => 'ULLAPARA',
                'bank_branch_data' => [
                    'routing_no' => '10882234',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '863',
                'bank_id' => '1',
                'name' => 'VIMGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10890055',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '864',
                'bank_id' => '1',
                'name' => 'KAKORKANDI',
                'bank_branch_data' => [
                    'routing_no' => '10890192',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '865',
                'bank_id' => '1',
                'name' => 'NALITABARI',
                'bank_branch_data' => [
                    'routing_no' => '10890347',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '866',
                'bank_id' => '1',
                'name' => 'NANDIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10890400',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '867',
                'bank_id' => '1',
                'name' => 'NANNI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10890439',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '868',
                'bank_id' => '1',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '10890550',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '869',
                'bank_id' => '1',
                'name' => 'SREEBORDI',
                'bank_branch_data' => [
                    'routing_no' => '10890642',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '870',
                'bank_id' => '1',
                'name' => 'TINANDIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10890705',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '871',
                'bank_id' => '1',
                'name' => 'AMBARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10900040',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '872',
                'bank_id' => '1',
                'name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '10900224',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '873',
                'bank_id' => '1',
                'name' => 'DERAI',
                'bank_branch_data' => [
                    'routing_no' => '10900253',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '874',
                'bank_id' => '1',
                'name' => 'DOWARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10900345',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '875',
                'bank_id' => '1',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10901128',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '876',
                'bank_id' => '1',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '10910043',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '877',
                'bank_id' => '1',
                'name' => 'BAIRAGIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10910135',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '878',
                'bank_id' => '1',
                'name' => 'BALAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10910164',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '879',
                'bank_id' => '1',
                'name' => 'TAMABIL',
                'bank_branch_data' => [
                    'routing_no' => '10910177',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '880',
                'bank_id' => '1',
                'name' => 'BANDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10910193',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '881',
                'bank_id' => '1',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10910319',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '882',
                'bank_id' => '1',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '10910430',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '883',
                'bank_id' => '1',
                'name' => 'BOALJURI',
                'bank_branch_data' => [
                    'routing_no' => '10910498',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '884',
                'bank_id' => '1',
                'name' => 'CHAGLI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10910614',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '885',
                'bank_id' => '1',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10910735',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '886',
                'bank_id' => '1',
                'name' => 'DEWAL GRAM',
                'bank_branch_data' => [
                    'routing_no' => '10911242',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '887',
                'bank_id' => '1',
                'name' => 'DHAKA DAKHIN',
                'bank_branch_data' => [
                    'routing_no' => '10911305',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '888',
                'bank_id' => '1',
                'name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10911363',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '889',
                'bank_id' => '1',
                'name' => 'GASBARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10911518',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '890',
                'bank_id' => '1',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10911547',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '891',
                'bank_id' => '1',
                'name' => 'GODOWN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10911576',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '892',
                'bank_id' => '1',
                'name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10911600',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '893',
                'bank_id' => '1',
                'name' => 'HARIPUR GAS FIELD',
                'bank_branch_data' => [
                    'routing_no' => '10911721',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '894',
                'bank_id' => '1',
                'name' => 'HETIMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10911750',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '895',
                'bank_id' => '1',
                'name' => 'JALALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10911871',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '896',
                'bank_id' => '1',
                'name' => 'KAKORDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10911934',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '897',
                'bank_id' => '1',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10911992',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '898',
                'bank_id' => '1',
                'name' => 'KAZIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10912146',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '899',
                'bank_id' => '1',
                'name' => 'KUCHAI',
                'bank_branch_data' => [
                    'routing_no' => '10912320',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '900',
                'bank_id' => '1',
                'name' => 'LALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10912470',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '901',
                'bank_id' => '1',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '10912504',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '902',
                'bank_id' => '1',
                'name' => 'MATHIURA(EIDGHA)',
                'bank_branch_data' => [
                    'routing_no' => '10912562',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '903',
                'bank_id' => '1',
                'name' => 'RADHANAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10912920',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '904',
                'bank_id' => '1',
                'name' => 'RAMDHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10912988',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '905',
                'bank_id' => '1',
                'name' => 'SALUTIKAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10913132',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '906',
                'bank_id' => '1',
                'name' => 'SARAKAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10913161',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '907',
                'bank_id' => '1',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '10913408',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '908',
                'bank_id' => '1',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10913466',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '909',
                'bank_id' => '1',
                'name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10913495',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '910',
                'bank_id' => '1',
                'name' => 'UMARPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10914007',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '911',
                'bank_id' => '1',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10914157',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '912',
                'bank_id' => '1',
                'name' => 'AISHARA',
                'bank_branch_data' => [
                    'routing_no' => '10930049',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '913',
                'bank_id' => '1',
                'name' => 'CHAPRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10930065',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '914',
                'bank_id' => '1',
                'name' => 'BASAIL',
                'bank_branch_data' => [
                    'routing_no' => '10930373',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '915',
                'bank_id' => '1',
                'name' => 'BHUANPUR',
                'bank_branch_data' => [
                    'routing_no' => '10930465',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '916',
                'bank_id' => '1',
                'name' => 'DHUBURIA',
                'bank_branch_data' => [
                    'routing_no' => '10930731',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '917',
                'bank_id' => '1',
                'name' => 'GHATAIL',
                'bank_branch_data' => [
                    'routing_no' => '10930915',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '918',
                'bank_id' => '1',
                'name' => 'GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '10931006',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '919',
                'bank_id' => '1',
                'name' => 'HEMNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '10931156',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '920',
                'bank_id' => '1',
                'name' => 'JAMURKI',
                'bank_branch_data' => [
                    'routing_no' => '10931185',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '921',
                'bank_id' => '1',
                'name' => 'KANCHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '10931330',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '922',
                'bank_id' => '1',
                'name' => 'KARATIA',
                'bank_branch_data' => [
                    'routing_no' => '10931369',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '923',
                'bank_id' => '1',
                'name' => 'KAWALJANI',
                'bank_branch_data' => [
                    'routing_no' => '10931398',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '924',
                'bank_id' => '1',
                'name' => 'MADHUPUR',
                'bank_branch_data' => [
                    'routing_no' => '10931480',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '925',
                'bank_id' => '1',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '10931514',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '926',
                'bank_id' => '1',
                'name' => 'MIRZAPUR CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '10931543',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '927',
                'bank_id' => '1',
                'name' => 'MOHERA',
                'bank_branch_data' => [
                    'routing_no' => '10931635',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '928',
                'bank_id' => '1',
                'name' => 'MYMENSINGH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '10931664',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '929',
                'bank_id' => '1',
                'name' => 'NAGARPUR',
                'bank_branch_data' => [
                    'routing_no' => '10931693',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '930',
                'bank_id' => '1',
                'name' => 'NALUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10931727',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '931',
                'bank_id' => '1',
                'name' => 'SALIMABAD',
                'bank_branch_data' => [
                    'routing_no' => '10932142',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '932',
                'bank_id' => '1',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10932205',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '933',
                'bank_id' => '1',
                'name' => 'SURUZ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '10932263',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '934',
                'bank_id' => '1',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '10932292',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '935',
                'bank_id' => '1',
                'name' => 'WARSHI',
                'bank_branch_data' => [
                    'routing_no' => '10932418',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '936',
                'bank_id' => '1',
                'name' => 'BEGUNBARI',
                'bank_branch_data' => [
                    'routing_no' => '10940134',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '937',
                'bank_id' => '1',
                'name' => 'HARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '10940468',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '938',
                'bank_id' => '1',
                'name' => 'MUNSHIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '10940671',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '939',
                'bank_id' => '1',
                'name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '10940976',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '940',
                'bank_id' => '2',
                'name' => 'MONGLA',
                'bank_branch_data' => [
                    'routing_no' => '15010948',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '941',
                'bank_id' => '2',
                'name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15011039',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '942',
                'bank_id' => '2',
                'name' => 'BARGUNA',
                'bank_branch_data' => [
                    'routing_no' => '15040134',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '943',
                'bank_id' => '2',
                'name' => 'BANARI PARA',
                'bank_branch_data' => [
                    'routing_no' => '15060251',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '944',
                'bank_id' => '2',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '15060280',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '945',
                'bank_id' => '2',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '15090100',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '946',
                'bank_id' => '2',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '15100379',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '947',
                'bank_id' => '2',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '15102748',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '948',
                'bank_id' => '2',
                'name' => 'AKHAURA SME',
                'bank_branch_data' => [
                    'routing_no' => '15120054',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '949',
                'bank_id' => '2',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15120104',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '950',
                'bank_id' => '2',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '15120438',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '951',
                'bank_id' => '2',
                'name' => 'KUTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15121095',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '952',
                'bank_id' => '2',
                'name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '15121361',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '953',
                'bank_id' => '2',
                'name' => 'TANTAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15121879',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '954',
                'bank_id' => '2',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15130886',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '955',
                'bank_id' => '2',
                'name' => 'RAHIMANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '15131698',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '956',
                'bank_id' => '2',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '15150132',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '957',
                'bank_id' => '2',
                'name' => 'PADUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15150237',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '958',
                'bank_id' => '2',
                'name' => 'AMAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15150253',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '959',
                'bank_id' => '2',
                'name' => 'AZADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15150732',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '960',
                'bank_id' => '2',
                'name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'routing_no' => '15150945',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '961',
                'bank_id' => '2',
                'name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '15151210',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '962',
                'bank_id' => '2',
                'name' => 'CHAKBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15151728',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '963',
                'bank_id' => '2',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '15153168',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '964',
                'bank_id' => '2',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '15153221',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '965',
                'bank_id' => '2',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15153647',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '966',
                'bank_id' => '2',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '15153739',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '967',
                'bank_id' => '2',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15154275',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '968',
                'bank_id' => '2',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '15155324',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '969',
                'bank_id' => '2',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15155803',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '970',
                'bank_id' => '2',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '15156136',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '971',
                'bank_id' => '2',
                'name' => 'SHIBERHAT',
                'bank_branch_data' => [
                    'routing_no' => '15157306',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '972',
                'bank_id' => '2',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15157519',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '973',
                'bank_id' => '2',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '15180199',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '974',
                'bank_id' => '2',
                'name' => 'BARURA',
                'bank_branch_data' => [
                    'routing_no' => '15190497',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '975',
                'bank_id' => '2',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '15191159',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '976',
                'bank_id' => '2',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15191425',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '977',
                'bank_id' => '2',
                'name' => 'GALLAI',
                'bank_branch_data' => [
                    'routing_no' => '15192024',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '978',
                'bank_id' => '2',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '15192116',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '979',
                'bank_id' => '2',
                'name' => 'NANGALKOT',
                'bank_branch_data' => [
                    'routing_no' => '15193252',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '980',
                'bank_id' => '2',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15220259',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '981',
                'bank_id' => '2',
                'name' => 'EIDGAON',
                'bank_branch_data' => [
                    'routing_no' => '15220404',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '982',
                'bank_id' => '2',
                'name' => 'TEKNAF',
                'bank_branch_data' => [
                    'routing_no' => '15220912',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '983',
                'bank_id' => '2',
                'name' => 'ABDULLAHPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '15260051',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '984',
                'bank_id' => '2',
                'name' => 'SONARGAON JANAPATH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15260080',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '985',
                'bank_id' => '2',
                'name' => 'KATHGORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15260093',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '986',
                'bank_id' => '2',
                'name' => 'AMIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15260130',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '987',
                'bank_id' => '2',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '15260435',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '988',
                'bank_id' => '2',
                'name' => 'KHILKHET',
                'bank_branch_data' => [
                    'routing_no' => '15260743',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '989',
                'bank_id' => '2',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '15260914',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '990',
                'bank_id' => '2',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '15261184',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '991',
                'bank_id' => '2',
                'name' => 'AZAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '15261250',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '992',
                'bank_id' => '2',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '15261726',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '993',
                'bank_id' => '2',
                'name' => 'HAZARIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '15261968',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '994',
                'bank_id' => '2',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '15262059',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '995',
                'bank_id' => '2',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15262538',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '996',
                'bank_id' => '2',
                'name' => 'MANDA',
                'bank_branch_data' => [
                    'routing_no' => '15262875',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '997',
                'bank_id' => '2',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '15262983',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '998',
                'bank_id' => '2',
                'name' => 'MIRPUR SECTION-10',
                'bank_branch_data' => [
                    'routing_no' => '15263137',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '999',
                'bank_id' => '2',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '15263195',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '1000',
                'bank_id' => '2',
                'name' => 'MOHAMMADPUR KRISHI MARKET',
                'bank_branch_data' => [
                    'routing_no' => '15263379',
                ],
                'enabled' => true,
            ],
        ];
    }
}
