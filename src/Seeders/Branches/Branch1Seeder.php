<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public
    function run(): void
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
                    'id' => '1',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADHAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010048',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '2',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHANGA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010064',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '3',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010077',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '4',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHULKATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010280',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '5',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEYPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010372',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '6',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOALMATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010619',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '7',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HERMA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010677',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '8',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JATRAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010701',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '9',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MAIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010851',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '10',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MONGLA PORT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10010972',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '11',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MORELGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10011034',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '12',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10011063',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '13',
                    'bank_id' => '1',
                    'bank_branch_name' => 'POLERHAT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10011126',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '14',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SANNASHY BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10011276',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '15',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AZIZ NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10030073',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '16',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANDARBAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10030165',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '17',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040047',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '18',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARGUNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040139',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '19',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAZIPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040371',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '20',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAKCHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040492',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '21',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAUNIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040526',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '22',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALIBANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040647',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '23',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TALTALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10040739',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '24',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHAMURA BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060056',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '25',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAHUTHKATI BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060085',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '26',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RANIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060148',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '27',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SATLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060177',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '28',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANARI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060256',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '29',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BATAJORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060377',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '30',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOTTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060522',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '31',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BUKHAI NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060551',
                        ),
                    'enabled' => true,
                ),
            31 =>
                array(
                    'id' => '32',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060706',
                        ),
                    'enabled' => true,
                ),
            32 =>
                array(
                    'id' => '33',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOURNADI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10060827',
                        ),
                    'enabled' => true,
                ),
            33 =>
                array(
                    'id' => '34',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOTHERKATHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10061400',
                        ),
                    'enabled' => true,
                ),
            34 =>
                array(
                    'id' => '35',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MULADI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10061455',
                        ),
                    'enabled' => true,
                ),
            35 =>
                array(
                    'id' => '36',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PAISHARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10061600',
                        ),
                    'enabled' => true,
                ),
            36 =>
                array(
                    'id' => '37',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PURAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10061697',
                        ),
                    'enabled' => true,
                ),
            37 =>
                array(
                    'id' => '38',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SADAR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10061813',
                        ),
                    'enabled' => true,
                ),
            38 =>
                array(
                    'id' => '39',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TORKI BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10062212',
                        ),
                    'enabled' => true,
                ),
            39 =>
                array(
                    'id' => '40',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ULANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10062238',
                        ),
                    'enabled' => true,
                ),
            40 =>
                array(
                    'id' => '41',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANGLABAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090071',
                        ),
                    'enabled' => true,
                ),
            41 =>
                array(
                    'id' => '42',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090105',
                        ),
                    'enabled' => true,
                ),
            42 =>
                array(
                    'id' => '43',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BORHANUDDIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090192',
                        ),
                    'enabled' => true,
                ),
            43 =>
                array(
                    'id' => '44',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAR FASSION BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090255',
                        ),
                    'enabled' => true,
                ),
            44 =>
                array(
                    'id' => '45',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAR SHASHI BHUSON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090284',
                        ),
                    'enabled' => true,
                ),
            45 =>
                array(
                    'id' => '46',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DAULATKHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090376',
                        ),
                    'enabled' => true,
                ),
            46 =>
                array(
                    'id' => '47',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALINATH RAER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090550',
                        ),
                    'enabled' => true,
                ),
            47 =>
                array(
                    'id' => '48',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHAIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090613',
                        ),
                    'enabled' => true,
                ),
            48 =>
                array(
                    'id' => '49',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALMOHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10090705',
                        ),
                    'enabled' => true,
                ),
            49 =>
                array(
                    'id' => '50',
                    'bank_id' => '1',
                    'bank_branch_name' => 'WAPDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10091038',
                        ),
                    'enabled' => true,
                ),
            50 =>
                array(
                    'id' => '51',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADURTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100161',
                        ),
                    'enabled' => true,
                ),
            51 =>
                array(
                    'id' => '52',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAGBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100190',
                        ),
                    'enabled' => true,
                ),
            52 =>
                array(
                    'id' => '53',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHATRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100282',
                        ),
                    'enabled' => true,
                ),
            53 =>
                array(
                    'id' => '54',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOGRA CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100437',
                        ),
                    'enabled' => true,
                ),
            54 =>
                array(
                    'id' => '55',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAMRUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100640',
                        ),
                    'enabled' => true,
                ),
            55 =>
                array(
                    'id' => '56',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHELOPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100761',
                        ),
                    'enabled' => true,
                ),
            56 =>
                array(
                    'id' => '57',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEMAJANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100824',
                        ),
                    'enabled' => true,
                ),
            57 =>
                array(
                    'id' => '58',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHUNAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10100882',
                        ),
                    'enabled' => true,
                ),
            58 =>
                array(
                    'id' => '59',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GHORADHAPAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101094',
                        ),
                    'enabled' => true,
                ),
            59 =>
                array(
                    'id' => '60',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOKUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101210',
                        ),
                    'enabled' => true,
                ),
            60 =>
                array(
                    'id' => '61',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHANDER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101607',
                        ),
                    'enabled' => true,
                ),
            61 =>
                array(
                    'id' => '62',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101757',
                        ),
                    'enabled' => true,
                ),
            62 =>
                array(
                    'id' => '63',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MAJHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101849',
                        ),
                    'enabled' => true,
                ),
            63 =>
                array(
                    'id' => '64',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRJAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101902',
                        ),
                    'enabled' => true,
                ),
            64 =>
                array(
                    'id' => '65',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAMAJGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10101960',
                        ),
                    'enabled' => true,
                ),
            65 =>
                array(
                    'id' => '66',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NANDIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102022',
                        ),
                    'enabled' => true,
                ),
            66 =>
                array(
                    'id' => '67',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NISHINDARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102114',
                        ),
                    'enabled' => true,
                ),
            67 =>
                array(
                    'id' => '68',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PORADAHHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102206',
                        ),
                    'enabled' => true,
                ),
            68 =>
                array(
                    'id' => '69',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJABAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102264',
                        ),
                    'enabled' => true,
                ),
            69 =>
                array(
                    'id' => '70',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAPTAPADI MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102448',
                        ),
                    'enabled' => true,
                ),
            70 =>
                array(
                    'id' => '71',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102743',
                        ),
                    'enabled' => true,
                ),
            71 =>
                array(
                    'id' => '72',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHONKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102835',
                        ),
                    'enabled' => true,
                ),
            72 =>
                array(
                    'id' => '73',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SIBBATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102864',
                        ),
                    'enabled' => true,
                ),
            73 =>
                array(
                    'id' => '74',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SONATALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10102956',
                        ),
                    'enabled' => true,
                ),
            74 =>
                array(
                    'id' => '75',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SULTANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10103047',
                        ),
                    'enabled' => true,
                ),
            75 =>
                array(
                    'id' => '76',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TALORA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10103076',
                        ),
                    'enabled' => true,
                ),
            76 =>
                array(
                    'id' => '77',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TALUCH HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10103100',
                        ),
                    'enabled' => true,
                ),
            77 =>
                array(
                    'id' => '78',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TARONIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10103139',
                        ),
                    'enabled' => true,
                ),
            78 =>
                array(
                    'id' => '79',
                    'bank_id' => '1',
                    'bank_branch_name' => 'THANA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10103168',
                        ),
                    'enabled' => true,
                ),
            79 =>
                array(
                    'id' => '80',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ZIANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10103221',
                        ),
                    'enabled' => true,
                ),
            80 =>
                array(
                    'id' => '81',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AKHAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120046',
                        ),
                    'enabled' => true,
                ),
            81 =>
                array(
                    'id' => '82',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120109',
                        ),
                    'enabled' => true,
                ),
            82 =>
                array(
                    'id' => '83',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANCHARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120259',
                        ),
                    'enabled' => true,
                ),
            83 =>
                array(
                    'id' => '84',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANGURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120288',
                        ),
                    'enabled' => true,
                ),
            84 =>
                array(
                    'id' => '85',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BITGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120404',
                        ),
                    'enabled' => true,
                ),
            85 =>
                array(
                    'id' => '86',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120433',
                        ),
                    'enabled' => true,
                ),
            86 =>
                array(
                    'id' => '87',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANDURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120583',
                        ),
                    'enabled' => true,
                ),
            87 =>
                array(
                    'id' => '88',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAGAT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10120912',
                        ),
                    'enabled' => true,
                ),
            88 =>
                array(
                    'id' => '89',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121032',
                        ),
                    'enabled' => true,
                ),
            89 =>
                array(
                    'id' => '90',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121153',
                        ),
                    'enabled' => true,
                ),
            90 =>
                array(
                    'id' => '91',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121366',
                        ),
                    'enabled' => true,
                ),
            91 =>
                array(
                    'id' => '92',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SALIMGONJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121579',
                        ),
                    'enabled' => true,
                ),
            92 =>
                array(
                    'id' => '93',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121724',
                        ),
                    'enabled' => true,
                ),
            93 =>
                array(
                    'id' => '94',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121737',
                        ),
                    'enabled' => true,
                ),
            94 =>
                array(
                    'id' => '95',
                    'bank_id' => '1',
                    'bank_branch_name' => 'T.A. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10121845',
                        ),
                    'enabled' => true,
                ),
            95 =>
                array(
                    'id' => '96',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ALGEE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130052',
                        ),
                    'enabled' => true,
                ),
            96 =>
                array(
                    'id' => '97',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KACHUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130065',
                        ),
                    'enabled' => true,
                ),
            97 =>
                array(
                    'id' => '98',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BABUR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130131',
                        ),
                    'enabled' => true,
                ),
            98 =>
                array(
                    'id' => '99',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BALITHUBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130207',
                        ),
                    'enabled' => true,
                ),
            99 =>
                array(
                    'id' => '100',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BELTALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130223',
                        ),
                    'enabled' => true,
                ),
            100 =>
                array(
                    'id' => '101',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANDRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130465',
                        ),
                    'enabled' => true,
                ),
            101 =>
                array(
                    'id' => '102',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHHENGARCHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130557',
                        ),
                    'enabled' => true,
                ),
            102 =>
                array(
                    'id' => '103',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FARAKKABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130799',
                        ),
                    'enabled' => true,
                ),
            103 =>
                array(
                    'id' => '104',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10130881',
                        ),
                    'enabled' => true,
                ),
            104 =>
                array(
                    'id' => '105',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHAJURIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131035',
                        ),
                    'enabled' => true,
                ),
            105 =>
                array(
                    'id' => '106',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATLAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131219',
                        ),
                    'enabled' => true,
                ),
            106 =>
                array(
                    'id' => '107',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MEHER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131277',
                        ),
                    'enabled' => true,
                ),
            107 =>
                array(
                    'id' => '108',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131330',
                        ),
                    'enabled' => true,
                ),
            108 =>
                array(
                    'id' => '109',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NANDALALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131398',
                        ),
                    'enabled' => true,
                ),
            109 =>
                array(
                    'id' => '110',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARAYANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131451',
                        ),
                    'enabled' => true,
                ),
            110 =>
                array(
                    'id' => '111',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NATUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131480',
                        ),
                    'enabled' => true,
                ),
            111 =>
                array(
                    'id' => '112',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMCHANDRAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131727',
                        ),
                    'enabled' => true,
                ),
            112 =>
                array(
                    'id' => '113',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RUPSHA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10131785',
                        ),
                    'enabled' => true,
                ),
            113 =>
                array(
                    'id' => '114',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SREERAMDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10132050',
                        ),
                    'enabled' => true,
                ),
            114 =>
                array(
                    'id' => '115',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10132089',
                        ),
                    'enabled' => true,
                ),
            115 =>
                array(
                    'id' => '116',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AGRABAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150166',
                        ),
                    'enabled' => true,
                ),
            116 =>
                array(
                    'id' => '117',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AIR BASE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150195',
                        ),
                    'enabled' => true,
                ),
            117 =>
                array(
                    'id' => '118',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMANAT KHAN SARAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150287',
                        ),
                    'enabled' => true,
                ),
            118 =>
                array(
                    'id' => '119',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMIRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150403',
                        ),
                    'enabled' => true,
                ),
            119 =>
                array(
                    'id' => '120',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150432',
                        ),
                    'enabled' => true,
                ),
            120 =>
                array(
                    'id' => '121',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ARTYLARY CENTRE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150553',
                        ),
                    'enabled' => true,
                ),
            121 =>
                array(
                    'id' => '122',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ASAD GANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150582',
                        ),
                    'enabled' => true,
                ),
            122 =>
                array(
                    'id' => '123',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ASKERDIGHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150674',
                        ),
                    'enabled' => true,
                ),
            123 =>
                array(
                    'id' => '124',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AZADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150737',
                        ),
                    'enabled' => true,
                ),
            124 =>
                array(
                    'id' => '125',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150795',
                        ),
                    'enabled' => true,
                ),
            125 =>
                array(
                    'id' => '126',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10150911',
                        ),
                    'enabled' => true,
                ),
            126 =>
                array(
                    'id' => '127',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARAIYER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151099',
                        ),
                    'enabled' => true,
                ),
            127 =>
                array(
                    'id' => '128',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARODAROGA HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151123',
                        ),
                    'enabled' => true,
                ),
            128 =>
                array(
                    'id' => '129',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAY SHOPPING CENTRE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151181',
                        ),
                    'enabled' => true,
                ),
            129 =>
                array(
                    'id' => '130',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOALKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151307',
                        ),
                    'enabled' => true,
                ),
            130 =>
                array(
                    'id' => '131',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151660',
                        ),
                    'enabled' => true,
                ),
            131 =>
                array(
                    'id' => '132',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAKTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151752',
                        ),
                    'enabled' => true,
                ),
            132 =>
                array(
                    'id' => '133',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHATTESWARI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151907',
                        ),
                    'enabled' => true,
                ),
            133 =>
                array(
                    'id' => '134',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHATURI CHAUMUHONI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10151910',
                        ),
                    'enabled' => true,
                ),
            134 =>
                array(
                    'id' => '135',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHITTAGONG PRESS CLUB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152056',
                        ),
                    'enabled' => true,
                ),
            135 =>
                array(
                    'id' => '136',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHITTAGONG UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152085',
                        ),
                    'enabled' => true,
                ),
            136 =>
                array(
                    'id' => '137',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COLONEL HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152298',
                        ),
                    'enabled' => true,
                ),
            137 =>
                array(
                    'id' => '138',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COMMERCIAL AREA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152322',
                        ),
                    'enabled' => true,
                ),
            138 =>
                array(
                    'id' => '139',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEWAN HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152443',
                        ),
                    'enabled' => true,
                ),
            139 =>
                array(
                    'id' => '140',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152627',
                        ),
                    'enabled' => true,
                ),
            140 =>
                array(
                    'id' => '141',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FERINGHEE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152801',
                        ),
                    'enabled' => true,
                ),
            141 =>
                array(
                    'id' => '142',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FOTAYABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152869',
                        ),
                    'enabled' => true,
                ),
            142 =>
                array(
                    'id' => '143',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FOUZDERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10152898',
                        ),
                    'enabled' => true,
                ),
            143 =>
                array(
                    'id' => '144',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153013',
                        ),
                    'enabled' => true,
                ),
            144 =>
                array(
                    'id' => '145',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GUNAGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153071',
                        ),
                    'enabled' => true,
                ),
            145 =>
                array(
                    'id' => '146',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153163',
                        ),
                    'enabled' => true,
                ),
            146 =>
                array(
                    'id' => '147',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153226',
                        ),
                    'enabled' => true,
                ),
            147 =>
                array(
                    'id' => '148',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153255',
                        ),
                    'enabled' => true,
                ),
            148 =>
                array(
                    'id' => '149',
                    'bank_id' => '1',
                    'bank_branch_name' => 'INDUSTRIAL AREA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153318',
                        ),
                    'enabled' => true,
                ),
            149 =>
                array(
                    'id' => '150',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153376',
                        ),
                    'enabled' => true,
                ),
            150 =>
                array(
                    'id' => '151',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISHANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153439',
                        ),
                    'enabled' => true,
                ),
            151 =>
                array(
                    'id' => '152',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JALALABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153521',
                        ),
                    'enabled' => true,
                ),
            152 =>
                array(
                    'id' => '153',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10153642',
                        ),
                    'enabled' => true,
                ),
            153 =>
                array(
                    'id' => '154',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAPASHGOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154038',
                        ),
                    'enabled' => true,
                ),
            154 =>
                array(
                    'id' => '155',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KERANIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154188',
                        ),
                    'enabled' => true,
                ),
            155 =>
                array(
                    'id' => '156',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154270',
                        ),
                    'enabled' => true,
                ),
            156 =>
                array(
                    'id' => '157',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHULSHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154362',
                        ),
                    'enabled' => true,
                ),
            157 =>
                array(
                    'id' => '158',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALDIGHI EAST',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154546',
                        ),
                    'enabled' => true,
                ),
            158 =>
                array(
                    'id' => '159',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALKHAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154575',
                        ),
                    'enabled' => true,
                ),
            159 =>
                array(
                    'id' => '160',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADAM BIBIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154696',
                        ),
                    'enabled' => true,
                ),
            160 =>
                array(
                    'id' => '161',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MEDICAL COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10154933',
                        ),
                    'enabled' => true,
                ),
            161 =>
                array(
                    'id' => '162',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MINNAT ALI HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155024',
                        ),
                    'enabled' => true,
                ),
            162 =>
                array(
                    'id' => '163',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRSARAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155053',
                        ),
                    'enabled' => true,
                ),
            163 =>
                array(
                    'id' => '164',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155082',
                        ),
                    'enabled' => true,
                ),
            164 =>
                array(
                    'id' => '165',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MODUNA GHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155174',
                        ),
                    'enabled' => true,
                ),
            165 =>
                array(
                    'id' => '166',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAZIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155590',
                        ),
                    'enabled' => true,
                ),
            166 =>
                array(
                    'id' => '167',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155653',
                        ),
                    'enabled' => true,
                ),
            167 =>
                array(
                    'id' => '168',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10155929',
                        ),
                    'enabled' => true,
                ),
            168 =>
                array(
                    'id' => '169',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156160',
                        ),
                    'enabled' => true,
                ),
            169 =>
                array(
                    'id' => '170',
                    'bank_id' => '1',
                    'bank_branch_name' => 'QUAISH BURISH CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156344',
                        ),
                    'enabled' => true,
                ),
            170 =>
                array(
                    'id' => '171',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAOZAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156494',
                        ),
                    'enabled' => true,
                ),
            171 =>
                array(
                    'id' => '172',
                    'bank_id' => '1',
                    'bank_branch_name' => 'REAZUDDIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156528',
                        ),
                    'enabled' => true,
                ),
            172 =>
                array(
                    'id' => '173',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156731',
                        ),
                    'enabled' => true,
                ),
            173 =>
                array(
                    'id' => '174',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAMITIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156881',
                        ),
                    'enabled' => true,
                ),
            174 =>
                array(
                    'id' => '175',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SANDWIP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156915',
                        ),
                    'enabled' => true,
                ),
            175 =>
                array(
                    'id' => '176',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SANTINIKETAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10156944',
                        ),
                    'enabled' => true,
                ),
            176 =>
                array(
                    'id' => '177',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SARWATOLI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10157035',
                        ),
                    'enabled' => true,
                ),
            177 =>
                array(
                    'id' => '178',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SATTAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10157093',
                        ),
                    'enabled' => true,
                ),
            178 =>
                array(
                    'id' => '179',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SITAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10157398',
                        ),
                    'enabled' => true,
                ),
            179 =>
                array(
                    'id' => '180',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SK. MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10157422',
                        ),
                    'enabled' => true,
                ),
            180 =>
                array(
                    'id' => '181',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STEEL MILLS',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10157543',
                        ),
                    'enabled' => true,
                ),
            181 =>
                array(
                    'id' => '182',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STRAND ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10157572',
                        ),
                    'enabled' => true,
                ),
            182 =>
                array(
                    'id' => '183',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ALAMDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180044',
                        ),
                    'enabled' => true,
                ),
            183 =>
                array(
                    'id' => '184',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ANDUL BARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180107',
                        ),
                    'enabled' => true,
                ),
            184 =>
                array(
                    'id' => '185',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ASMANKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180136',
                        ),
                    'enabled' => true,
                ),
            185 =>
                array(
                    'id' => '186',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180194',
                        ),
                    'enabled' => true,
                ),
            186 =>
                array(
                    'id' => '187',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DARSHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180310',
                        ),
                    'enabled' => true,
                ),
            187 =>
                array(
                    'id' => '188',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180431',
                        ),
                    'enabled' => true,
                ),
            188 =>
                array(
                    'id' => '189',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JIBAN NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180581',
                        ),
                    'enabled' => true,
                ),
            189 =>
                array(
                    'id' => '190',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KEDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180707',
                        ),
                    'enabled' => true,
                ),
            190 =>
                array(
                    'id' => '191',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RADHAKANTAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180794',
                        ),
                    'enabled' => true,
                ),
            191 =>
                array(
                    'id' => '192',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMDIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10180828',
                        ),
                    'enabled' => true,
                ),
            192 =>
                array(
                    'id' => '193',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JUKTIKHOLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190063',
                        ),
                    'enabled' => true,
                ),
            193 =>
                array(
                    'id' => '194',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MEDICAL COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190126',
                        ),
                    'enabled' => true,
                ),
            194 =>
                array(
                    'id' => '195',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMRATALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190168',
                        ),
                    'enabled' => true,
                ),
            195 =>
                array(
                    'id' => '196',
                    'bank_id' => '1',
                    'bank_branch_name' => 'B.S.C.I.C',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190250',
                        ),
                    'enabled' => true,
                ),
            196 =>
                array(
                    'id' => '197',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BALUTUPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190371',
                        ),
                    'enabled' => true,
                ),
            197 =>
                array(
                    'id' => '198',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BATA KANDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190526',
                        ),
                    'enabled' => true,
                ),
            198 =>
                array(
                    'id' => '199',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BATAICHARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190555',
                        ),
                    'enabled' => true,
                ),
            199 =>
                array(
                    'id' => '200',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOKSHAGONJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190739',
                        ),
                    'enabled' => true,
                ),
            200 =>
                array(
                    'id' => '201',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BURICHANG BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190834',
                        ),
                    'enabled' => true,
                ),
            201 =>
                array(
                    'id' => '202',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANDINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10190889',
                        ),
                    'enabled' => true,
                ),
            202 =>
                array(
                    'id' => '203',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DAUDKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10191512',
                        ),
                    'enabled' => true,
                ),
            203 =>
                array(
                    'id' => '204',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEBIDWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10191604',
                        ),
                    'enabled' => true,
                ),
            204 =>
                array(
                    'id' => '205',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HASANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192203',
                        ),
                    'enabled' => true,
                ),
            205 =>
                array(
                    'id' => '206',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HOMNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192232',
                        ),
                    'enabled' => true,
                ),
            206 =>
                array(
                    'id' => '207',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HOUSING ESTATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192261',
                        ),
                    'enabled' => true,
                ),
            207 =>
                array(
                    'id' => '208',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAHAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192353',
                        ),
                    'enabled' => true,
                ),
            208 =>
                array(
                    'id' => '209',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHALAM BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192382',
                        ),
                    'enabled' => true,
                ),
            209 =>
                array(
                    'id' => '210',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASHINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192595',
                        ),
                    'enabled' => true,
                ),
            210 =>
                array(
                    'id' => '211',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHILA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192629',
                        ),
                    'enabled' => true,
                ),
            211 =>
                array(
                    'id' => '212',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192711',
                        ),
                    'enabled' => true,
                ),
            212 =>
                array(
                    'id' => '213',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10192779',
                        ),
                    'enabled' => true,
                ),
            213 =>
                array(
                    'id' => '214',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MONOHARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193073',
                        ),
                    'enabled' => true,
                ),
            214 =>
                array(
                    'id' => '215',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MONSHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193107',
                        ),
                    'enabled' => true,
                ),
            215 =>
                array(
                    'id' => '216',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NANGALKOT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193257',
                        ),
                    'enabled' => true,
                ),
            216 =>
                array(
                    'id' => '217',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NASRATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193286',
                        ),
                    'enabled' => true,
                ),
            217 =>
                array(
                    'id' => '218',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NATHERPETUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193310',
                        ),
                    'enabled' => true,
                ),
            218 =>
                array(
                    'id' => '219',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NIMSHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193349',
                        ),
                    'enabled' => true,
                ),
            219 =>
                array(
                    'id' => '220',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PADUAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193402',
                        ),
                    'enabled' => true,
                ),
            220 =>
                array(
                    'id' => '221',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193581',
                        ),
                    'enabled' => true,
                ),
            221 =>
                array(
                    'id' => '222',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RUPBABU BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193765',
                        ),
                    'enabled' => true,
                ),
            222 =>
                array(
                    'id' => '223',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHANKHACHAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10193828',
                        ),
                    'enabled' => true,
                ),
            223 =>
                array(
                    'id' => '224',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TOMSON BRIDGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10194098',
                        ),
                    'enabled' => true,
                ),
            224 =>
                array(
                    'id' => '225',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10220254',
                        ),
                    'enabled' => true,
                ),
            225 =>
                array(
                    'id' => '226',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHUTAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10220641',
                        ),
                    'enabled' => true,
                ),
            226 =>
                array(
                    'id' => '227',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MARICCHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10220704',
                        ),
                    'enabled' => true,
                ),
            227 =>
                array(
                    'id' => '228',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TEKNAF',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10220917',
                        ),
                    'enabled' => true,
                ),
            228 =>
                array(
                    'id' => '229',
                    'bank_id' => '1',
                    'bank_branch_name' => 'B.A.F.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10260319',
                        ),
                    'enabled' => true,
                ),
            229 =>
                array(
                    'id' => '230',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10260348',
                        ),
                    'enabled' => true,
                ),
            230 =>
                array(
                    'id' => '231',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10260430',
                        ),
                    'enabled' => true,
                ),
            231 =>
                array(
                    'id' => '232',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANK TOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10260498',
                        ),
                    'enabled' => true,
                ),
            232 =>
                array(
                    'id' => '233',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHAMRAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261150',
                        ),
                    'enabled' => true,
                ),
            233 =>
                array(
                    'id' => '234',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261189',
                        ),
                    'enabled' => true,
                ),
            234 =>
                array(
                    'id' => '235',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261334',
                        ),
                    'enabled' => true,
                ),
            235 =>
                array(
                    'id' => '236',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FARMGATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261455',
                        ),
                    'enabled' => true,
                ),
            236 =>
                array(
                    'id' => '237',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GABTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261547',
                        ),
                    'enabled' => true,
                ),
            237 =>
                array(
                    'id' => '238',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GREEN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261697',
                        ),
                    'enabled' => true,
                ),
            238 =>
                array(
                    'id' => '239',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10261721',
                        ),
                    'enabled' => true,
                ),
            239 =>
                array(
                    'id' => '240',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ICDDRB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10262117',
                        ),
                    'enabled' => true,
                ),
            240 =>
                array(
                    'id' => '241',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAHANGIRNAGAR UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10262267',
                        ),
                    'enabled' => true,
                ),
            241 =>
                array(
                    'id' => '242',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KURMITOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10262654',
                        ),
                    'enabled' => true,
                ),
            242 =>
                array(
                    'id' => '243',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10262988',
                        ),
                    'enabled' => true,
                ),
            243 =>
                array(
                    'id' => '244',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263190',
                        ),
                    'enabled' => true,
                ),
            244 =>
                array(
                    'id' => '245',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263282',
                        ),
                    'enabled' => true,
                ),
            245 =>
                array(
                    'id' => '246',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263529',
                        ),
                    'enabled' => true,
                ),
            246 =>
                array(
                    'id' => '247',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263587',
                        ),
                    'enabled' => true,
                ),
            247 =>
                array(
                    'id' => '248',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263611',
                        ),
                    'enabled' => true,
                ),
            248 =>
                array(
                    'id' => '249',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PATHALIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263640',
                        ),
                    'enabled' => true,
                ),
            249 =>
                array(
                    'id' => '250',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAYER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10263945',
                        ),
                    'enabled' => true,
                ),
            250 =>
                array(
                    'id' => '251',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264036',
                        ),
                    'enabled' => true,
                ),
            251 =>
                array(
                    'id' => '252',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264094',
                        ),
                    'enabled' => true,
                ),
            252 =>
                array(
                    'id' => '253',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SENPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264210',
                        ),
                    'enabled' => true,
                ),
            253 =>
                array(
                    'id' => '254',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHEWRA PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264278',
                        ),
                    'enabled' => true,
                ),
            254 =>
                array(
                    'id' => '255',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264302',
                        ),
                    'enabled' => true,
                ),
            255 =>
                array(
                    'id' => '256',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SIMULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264331',
                        ),
                    'enabled' => true,
                ),
            256 =>
                array(
                    'id' => '257',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SONARGAON ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264360',
                        ),
                    'enabled' => true,
                ),
            257 =>
                array(
                    'id' => '258',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TEJGAON INDUSTRIAL AREA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264515',
                        ),
                    'enabled' => true,
                ),
            258 =>
                array(
                    'id' => '259',
                    'bank_id' => '1',
                    'bank_branch_name' => 'UTTARA MODEL TOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264694',
                        ),
                    'enabled' => true,
                ),
            259 =>
                array(
                    'id' => '260',
                    'bank_id' => '1',
                    'bank_branch_name' => 'WASA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10264728',
                        ),
                    'enabled' => true,
                ),
            260 =>
                array(
                    'id' => '261',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270004',
                        ),
                    'enabled' => true,
                ),
            261 =>
                array(
                    'id' => '262',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AGAMASHILANE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270109',
                        ),
                    'enabled' => true,
                ),
            262 =>
                array(
                    'id' => '263',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMINCOURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270259',
                        ),
                    'enabled' => true,
                ),
            263 =>
                array(
                    'id' => '264',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHURAIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270262',
                        ),
                    'enabled' => true,
                ),
            264 =>
                array(
                    'id' => '265',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ANTA BARAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270288',
                        ),
                    'enabled' => true,
                ),
            265 =>
                array(
                    'id' => '266',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAYER BAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270325',
                        ),
                    'enabled' => true,
                ),
            266 =>
                array(
                    'id' => '267',
                    'bank_id' => '1',
                    'bank_branch_name' => 'B.B. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270433',
                        ),
                    'enabled' => true,
                ),
            267 =>
                array(
                    'id' => '268',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BABU BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270554',
                        ),
                    'enabled' => true,
                ),
            268 =>
                array(
                    'id' => '269',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANGLA ACADAMY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270796',
                        ),
                    'enabled' => true,
                ),
            269 =>
                array(
                    'id' => '270',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BASHABOO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10270970',
                        ),
                    'enabled' => true,
                ),
            270 =>
                array(
                    'id' => '271',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BECHARAMDEWRI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271032',
                        ),
                    'enabled' => true,
                ),
            271 =>
                array(
                    'id' => '272',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BEGUM BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271061',
                        ),
                    'enabled' => true,
                ),
            272 =>
                array(
                    'id' => '273',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CENTRAL LAW COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271216',
                        ),
                    'enabled' => true,
                ),
            273 =>
                array(
                    'id' => '274',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271274',
                        ),
                    'enabled' => true,
                ),
            274 =>
                array(
                    'id' => '275',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHOWDHURY BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271337',
                        ),
                    'enabled' => true,
                ),
            275 =>
                array(
                    'id' => '276',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHAKA SHERATON HOTEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271632',
                        ),
                    'enabled' => true,
                ),
            276 =>
                array(
                    'id' => '277',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHAKA UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271724',
                        ),
                    'enabled' => true,
                ),
            277 =>
                array(
                    'id' => '278',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHOLAIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10271874',
                        ),
                    'enabled' => true,
                ),
            278 =>
                array(
                    'id' => '279',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FARASHGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272231',
                        ),
                    'enabled' => true,
                ),
            279 =>
                array(
                    'id' => '280',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FARIDABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272260',
                        ),
                    'enabled' => true,
                ),
            280 =>
                array(
                    'id' => '281',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272323',
                        ),
                    'enabled' => true,
                ),
            281 =>
                array(
                    'id' => '282',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HATKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272594',
                        ),
                    'enabled' => true,
                ),
            282 =>
                array(
                    'id' => '283',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272686',
                        ),
                    'enabled' => true,
                ),
            283 =>
                array(
                    'id' => '284',
                    'bank_id' => '1',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272802',
                        ),
                    'enabled' => true,
                ),
            284 =>
                array(
                    'id' => '285',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10272981',
                        ),
                    'enabled' => true,
                ),
            285 =>
                array(
                    'id' => '286',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAGANNATH UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273106',
                        ),
                    'enabled' => true,
                ),
            286 =>
                array(
                    'id' => '287',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JATIYA JADUGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273164',
                        ),
                    'enabled' => true,
                ),
            287 =>
                array(
                    'id' => '288',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JATIYA PRESS CLUB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273193',
                        ),
                    'enabled' => true,
                ),
            288 =>
                array(
                    'id' => '289',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JATRABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273227',
                        ),
                    'enabled' => true,
                ),
            289 =>
                array(
                    'id' => '290',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273285',
                        ),
                    'enabled' => true,
                ),
            290 =>
                array(
                    'id' => '291',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273348',
                        ),
                    'enabled' => true,
                ),
            291 =>
                array(
                    'id' => '292',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAMALAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273498',
                        ),
                    'enabled' => true,
                ),
            292 =>
                array(
                    'id' => '293',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAMRANGIRCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273580',
                        ),
                    'enabled' => true,
                ),
            293 =>
                array(
                    'id' => '294',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KOMORGONJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273735',
                        ),
                    'enabled' => true,
                ),
            294 =>
                array(
                    'id' => '295',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10273948',
                        ),
                    'enabled' => true,
                ),
            295 =>
                array(
                    'id' => '296',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274000',
                        ),
                    'enabled' => true,
                ),
            296 =>
                array(
                    'id' => '297',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MITFORD HOSPITAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274097',
                        ),
                    'enabled' => true,
                ),
            297 =>
                array(
                    'id' => '298',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOUCHAK MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274392',
                        ),
                    'enabled' => true,
                ),
            298 =>
                array(
                    'id' => '299',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274426',
                        ),
                    'enabled' => true,
                ),
            299 =>
                array(
                    'id' => '300',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARINDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274639',
                        ),
                    'enabled' => true,
                ),
            300 =>
                array(
                    'id' => '301',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARISHA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274668',
                        ),
                    'enabled' => true,
                ),
            301 =>
                array(
                    'id' => '302',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAWABGANJ ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274697',
                        ),
                    'enabled' => true,
                ),
            302 =>
                array(
                    'id' => '303',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NOBABGONJ (KOLAKOPA)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274718',
                        ),
                    'enabled' => true,
                ),
            303 =>
                array(
                    'id' => '304',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10274721',
                        ),
                    'enabled' => true,
                ),
            304 =>
                array(
                    'id' => '305',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW ESKATON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275025',
                        ),
                    'enabled' => true,
                ),
            305 =>
                array(
                    'id' => '306',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NORTH SOUTH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275117',
                        ),
                    'enabled' => true,
                ),
            306 =>
                array(
                    'id' => '307',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PATILZHAP BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275175',
                        ),
                    'enabled' => true,
                ),
            307 =>
                array(
                    'id' => '308',
                    'bank_id' => '1',
                    'bank_branch_name' => 'POSTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275296',
                        ),
                    'enabled' => true,
                ),
            308 =>
                array(
                    'id' => '309',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275359',
                        ),
                    'enabled' => true,
                ),
            309 =>
                array(
                    'id' => '310',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PURANA PALTAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275388',
                        ),
                    'enabled' => true,
                ),
            310 =>
                array(
                    'id' => '311',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PYARIDAS ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275441',
                        ),
                    'enabled' => true,
                ),
            311 =>
                array(
                    'id' => '312',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAISHAHEB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275504',
                        ),
                    'enabled' => true,
                ),
            312 =>
                array(
                    'id' => '313',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJUK BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275625',
                        ),
                    'enabled' => true,
                ),
            313 =>
                array(
                    'id' => '314',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275683',
                        ),
                    'enabled' => true,
                ),
            314 =>
                array(
                    'id' => '315',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275746',
                        ),
                    'enabled' => true,
                ),
            315 =>
                array(
                    'id' => '316',
                    'bank_id' => '1',
                    'bank_branch_name' => 'S.S. COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275896',
                        ),
                    'enabled' => true,
                ),
            316 =>
                array(
                    'id' => '317',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10275920',
                        ),
                    'enabled' => true,
                ),
            317 =>
                array(
                    'id' => '318',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10276011',
                        ),
                    'enabled' => true,
                ),
            318 =>
                array(
                    'id' => '319',
                    'bank_id' => '1',
                    'bank_branch_name' => 'THATARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10276679',
                        ),
                    'enabled' => true,
                ),
            319 =>
                array(
                    'id' => '320',
                    'bank_id' => '1',
                    'bank_branch_name' => 'WAPDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10276945',
                        ),
                    'enabled' => true,
                ),
            320 =>
                array(
                    'id' => '321',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10277094',
                        ),
                    'enabled' => true,
                ),
            321 =>
                array(
                    'id' => '322',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10280078',
                        ),
                    'enabled' => true,
                ),
            322 =>
                array(
                    'id' => '323',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHUSHIR BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10280281',
                        ),
                    'enabled' => true,
                ),
            323 =>
                array(
                    'id' => '324',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BIRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10280344',
                        ),
                    'enabled' => true,
                ),
            324 =>
                array(
                    'id' => '325',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10280373',
                        ),
                    'enabled' => true,
                ),
            325 =>
                array(
                    'id' => '326',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HAKIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10280915',
                        ),
                    'enabled' => true,
                ),
            326 =>
                array(
                    'id' => '327',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAMOLPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281156',
                        ),
                    'enabled' => true,
                ),
            327 =>
                array(
                    'id' => '328',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADILA HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281369',
                        ),
                    'enabled' => true,
                ),
            328 =>
                array(
                    'id' => '329',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MALDAH PATTY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281422',
                        ),
                    'enabled' => true,
                ),
            329 =>
                array(
                    'id' => '330',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281572',
                        ),
                    'enabled' => true,
                ),
            330 =>
                array(
                    'id' => '331',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281635',
                        ),
                    'enabled' => true,
                ),
            331 =>
                array(
                    'id' => '332',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PARBATIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281819',
                        ),
                    'enabled' => true,
                ),
            332 =>
                array(
                    'id' => '333',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PHUL HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281848',
                        ),
                    'enabled' => true,
                ),
            333 =>
                array(
                    'id' => '334',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PHULBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281877',
                        ),
                    'enabled' => true,
                ),
            334 =>
                array(
                    'id' => '335',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PURATAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10281969',
                        ),
                    'enabled' => true,
                ),
            335 =>
                array(
                    'id' => '336',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SETABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10282171',
                        ),
                    'enabled' => true,
                ),
            336 =>
                array(
                    'id' => '337',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10282326',
                        ),
                    'enabled' => true,
                ),
            337 =>
                array(
                    'id' => '338',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TAJPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10282418',
                        ),
                    'enabled' => true,
                ),
            338 =>
                array(
                    'id' => '339',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290163',
                        ),
                    'enabled' => true,
                ),
            339 =>
                array(
                    'id' => '340',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290284',
                        ),
                    'enabled' => true,
                ),
            340 =>
                array(
                    'id' => '341',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOALMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290347',
                        ),
                    'enabled' => true,
                ),
            341 =>
                array(
                    'id' => '342',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290376',
                        ),
                    'enabled' => true,
                ),
            342 =>
                array(
                    'id' => '343',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAR BHADRASAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290439',
                        ),
                    'enabled' => true,
                ),
            343 =>
                array(
                    'id' => '344',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290521',
                        ),
                    'enabled' => true,
                ),
            344 =>
                array(
                    'id' => '345',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GHARUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10290589',
                        ),
                    'enabled' => true,
                ),
            345 =>
                array(
                    'id' => '346',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MALIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10291120',
                        ),
                    'enabled' => true,
                ),
            346 =>
                array(
                    'id' => '347',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAGARKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10291188',
                        ),
                    'enabled' => true,
                ),
            347 =>
                array(
                    'id' => '348',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SADARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10291270',
                        ),
                    'enabled' => true,
                ),
            348 =>
                array(
                    'id' => '349',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SARIATULLAH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10291333',
                        ),
                    'enabled' => true,
                ),
            349 =>
                array(
                    'id' => '350',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ZILLA PARISAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10291517',
                        ),
                    'enabled' => true,
                ),
            350 =>
                array(
                    'id' => '351',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SUBAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10300066',
                        ),
                    'enabled' => true,
                ),
            351 =>
                array(
                    'id' => '352',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAIRAGIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10300132',
                        ),
                    'enabled' => true,
                ),
            352 =>
                array(
                    'id' => '353',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHHAGALNAIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10300316',
                        ),
                    'enabled' => true,
                ),
            353 =>
                array(
                    'id' => '354',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10300529',
                        ),
                    'enabled' => true,
                ),
            354 =>
                array(
                    'id' => '355',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAMALAPATTY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10300790',
                        ),
                    'enabled' => true,
                ),
            355 =>
                array(
                    'id' => '356',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PARSHURAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10301278',
                        ),
                    'enabled' => true,
                ),
            356 =>
                array(
                    'id' => '357',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SONAGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10301481',
                        ),
                    'enabled' => true,
                ),
            357 =>
                array(
                    'id' => '358',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TULATOLY BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10301515',
                        ),
                    'enabled' => true,
                ),
            358 =>
                array(
                    'id' => '359',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BONARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10320220',
                        ),
                    'enabled' => true,
                ),
            359 =>
                array(
                    'id' => '360',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHOLBHANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10320370',
                        ),
                    'enabled' => true,
                ),
            360 =>
                array(
                    'id' => '361',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FULCHARIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10320491',
                        ),
                    'enabled' => true,
                ),
            361 =>
                array(
                    'id' => '362',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAIBANDHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10320525',
                        ),
                    'enabled' => true,
                ),
            362 =>
                array(
                    'id' => '363',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10320709',
                        ),
                    'enabled' => true,
                ),
            363 =>
                array(
                    'id' => '364',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10321032',
                        ),
                    'enabled' => true,
                ),
            364 =>
                array(
                    'id' => '365',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANCHPIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10321124',
                        ),
                    'enabled' => true,
                ),
            365 =>
                array(
                    'id' => '366',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RASULPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10321216',
                        ),
                    'enabled' => true,
                ),
            366 =>
                array(
                    'id' => '367',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SADULLAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10321245',
                        ),
                    'enabled' => true,
                ),
            367 =>
                array(
                    'id' => '368',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAGHATTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10321274',
                        ),
                    'enabled' => true,
                ),
            368 =>
                array(
                    'id' => '369',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SUNDARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10321308',
                        ),
                    'enabled' => true,
                ),
            369 =>
                array(
                    'id' => '370',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAKTARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330207',
                        ),
                    'enabled' => true,
                ),
            370 =>
                array(
                    'id' => '371',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330223',
                        ),
                    'enabled' => true,
                ),
            371 =>
                array(
                    'id' => '372',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BORMI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330281',
                        ),
                    'enabled' => true,
                ),
            372 =>
                array(
                    'id' => '373',
                    'bank_id' => '1',
                    'bank_branch_name' => 'D.U.E.T.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330436',
                        ),
                    'enabled' => true,
                ),
            373 =>
                array(
                    'id' => '374',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DALAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330449',
                        ),
                    'enabled' => true,
                ),
            374 =>
                array(
                    'id' => '375',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAGOTIA CHALAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330494',
                        ),
                    'enabled' => true,
                ),
            375 =>
                array(
                    'id' => '376',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330528',
                        ),
                    'enabled' => true,
                ),
            376 =>
                array(
                    'id' => '377',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOSINGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330649',
                        ),
                    'enabled' => true,
                ),
            377 =>
                array(
                    'id' => '378',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIAKOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330799',
                        ),
                    'enabled' => true,
                ),
            378 =>
                array(
                    'id' => '379',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAORAID',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330852',
                        ),
                    'enabled' => true,
                ),
            379 =>
                array(
                    'id' => '380',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330881',
                        ),
                    'enabled' => true,
                ),
            380 =>
                array(
                    'id' => '381',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASHIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10330915',
                        ),
                    'enabled' => true,
                ),
            381 =>
                array(
                    'id' => '382',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOUNA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10331127',
                        ),
                    'enabled' => true,
                ),
            382 =>
                array(
                    'id' => '383',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10331156',
                        ),
                    'enabled' => true,
                ),
            383 =>
                array(
                    'id' => '384',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10331301',
                        ),
                    'enabled' => true,
                ),
            384 =>
                array(
                    'id' => '385',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SREEPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10331480',
                        ),
                    'enabled' => true,
                ),
            385 =>
                array(
                    'id' => '386',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TOKNAYAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10331572',
                        ),
                    'enabled' => true,
                ),
            386 =>
                array(
                    'id' => '387',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10331635',
                        ),
                    'enabled' => true,
                ),
            387 =>
                array(
                    'id' => '388',
                    'bank_id' => '1',
                    'bank_branch_name' => 'VANGAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350058',
                        ),
                    'enabled' => true,
                ),
            388 =>
                array(
                    'id' => '389',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANGABANDHU SHEIKH MUJIBUR RAHMAN SCIENCE AND TECHNOLOGY UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350061',
                        ),
                    'enabled' => true,
                ),
            389 =>
                array(
                    'id' => '390',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANAGRAM BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350074',
                        ),
                    'enabled' => true,
                ),
            390 =>
                array(
                    'id' => '391',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350087',
                        ),
                    'enabled' => true,
                ),
            391 =>
                array(
                    'id' => '392',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350379',
                        ),
                    'enabled' => true,
                ),
            392 =>
                array(
                    'id' => '393',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JALIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350461',
                        ),
                    'enabled' => true,
                ),
            393 =>
                array(
                    'id' => '394',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHUTIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350490',
                        ),
                    'enabled' => true,
                ),
            394 =>
                array(
                    'id' => '395',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASHIANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350582',
                        ),
                    'enabled' => true,
                ),
            395 =>
                array(
                    'id' => '396',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KOTALIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350674',
                        ),
                    'enabled' => true,
                ),
            396 =>
                array(
                    'id' => '397',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUKSUDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350737',
                        ),
                    'enabled' => true,
                ),
            397 =>
                array(
                    'id' => '398',
                    'bank_id' => '1',
                    'bank_branch_name' => 'POURA SUPER MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350858',
                        ),
                    'enabled' => true,
                ),
            398 =>
                array(
                    'id' => '399',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10350979',
                        ),
                    'enabled' => true,
                ),
            399 =>
                array(
                    'id' => '400',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TUNGI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10351099',
                        ),
                    'enabled' => true,
                ),
            400 =>
                array(
                    'id' => '401',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOPAYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10360527',
                        ),
                    'enabled' => true,
                ),
            401 =>
                array(
                    'id' => '402',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10360619',
                        ),
                    'enabled' => true,
                ),
            402 =>
                array(
                    'id' => '403',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAILASHGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10360701',
                        ),
                    'enabled' => true,
                ),
            403 =>
                array(
                    'id' => '404',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10361092',
                        ),
                    'enabled' => true,
                ),
            404 =>
                array(
                    'id' => '405',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PURAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10361339',
                        ),
                    'enabled' => true,
                ),
            405 =>
                array(
                    'id' => '406',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AKKELPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380044',
                        ),
                    'enabled' => true,
                ),
            406 =>
                array(
                    'id' => '407',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JOYPURHAT GIRLS CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380057',
                        ),
                    'enabled' => true,
                ),
            407 =>
                array(
                    'id' => '408',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AWLAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380107',
                        ),
                    'enabled' => true,
                ),
            408 =>
                array(
                    'id' => '409',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAWK BARKAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380228',
                        ),
                    'enabled' => true,
                ),
            409 =>
                array(
                    'id' => '410',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380402',
                        ),
                    'enabled' => true,
                ),
            410 =>
                array(
                    'id' => '411',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380460',
                        ),
                    'enabled' => true,
                ),
            411 =>
                array(
                    'id' => '412',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KUSHUMBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380523',
                        ),
                    'enabled' => true,
                ),
            412 =>
                array(
                    'id' => '413',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATRAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380581',
                        ),
                    'enabled' => true,
                ),
            413 =>
                array(
                    'id' => '414',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANCHBIBI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10380673',
                        ),
                    'enabled' => true,
                ),
            414 =>
                array(
                    'id' => '415',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BALIJURI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390197',
                        ),
                    'enabled' => true,
                ),
            415 =>
                array(
                    'id' => '416',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390405',
                        ),
                    'enabled' => true,
                ),
            416 =>
                array(
                    'id' => '417',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HAZIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390700',
                        ),
                    'enabled' => true,
                ),
            417 =>
                array(
                    'id' => '418',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISLAMPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390797',
                        ),
                    'enabled' => true,
                ),
            418 =>
                array(
                    'id' => '419',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAGANNATHGONJ GHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390821',
                        ),
                    'enabled' => true,
                ),
            419 =>
                array(
                    'id' => '420',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390850',
                        ),
                    'enabled' => true,
                ),
            420 =>
                array(
                    'id' => '421',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAMTOLI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10390942',
                        ),
                    'enabled' => true,
                ),
            421 =>
                array(
                    'id' => '422',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAMUNA SARKARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391004',
                        ),
                    'enabled' => true,
                ),
            422 =>
                array(
                    'id' => '423',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LAHIRIKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391125',
                        ),
                    'enabled' => true,
                ),
            423 =>
                array(
                    'id' => '424',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PINGNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391396',
                        ),
                    'enabled' => true,
                ),
            424 =>
                array(
                    'id' => '425',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PIYARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391420',
                        ),
                    'enabled' => true,
                ),
            425 =>
                array(
                    'id' => '426',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SARISHABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391488',
                        ),
                    'enabled' => true,
                ),
            426 =>
                array(
                    'id' => '427',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHABAZPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391541',
                        ),
                    'enabled' => true,
                ),
            427 =>
                array(
                    'id' => '428',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10391662',
                        ),
                    'enabled' => true,
                ),
            428 =>
                array(
                    'id' => '429',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAGHERPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410130',
                        ),
                    'enabled' => true,
                ),
            429 =>
                array(
                    'id' => '430',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAZAR(H.M.M.ROAD)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410251',
                        ),
                    'enabled' => true,
                ),
            430 =>
                array(
                    'id' => '431',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BENAPOLE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410314',
                        ),
                    'enabled' => true,
                ),
            431 =>
                array(
                    'id' => '432',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHANGURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410343',
                        ),
                    'enabled' => true,
                ),
            432 =>
                array(
                    'id' => '433',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410406',
                        ),
                    'enabled' => true,
                ),
            433 =>
                array(
                    'id' => '434',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DARATANA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410619',
                        ),
                    'enabled' => true,
                ),
            434 =>
                array(
                    'id' => '435',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GANGANANDAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410677',
                        ),
                    'enabled' => true,
                ),
            435 =>
                array(
                    'id' => '436',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GODKHALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410730',
                        ),
                    'enabled' => true,
                ),
            436 =>
                array(
                    'id' => '437',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HASIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410851',
                        ),
                    'enabled' => true,
                ),
            437 =>
                array(
                    'id' => '438',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410943',
                        ),
                    'enabled' => true,
                ),
            438 =>
                array(
                    'id' => '439',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JESSORE AIR BASE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410972',
                        ),
                    'enabled' => true,
                ),
            439 =>
                array(
                    'id' => '440',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JESSORE SCIENCE & TECHNOLOGY UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10410985',
                        ),
                    'enabled' => true,
                ),
            440 =>
                array(
                    'id' => '441',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHIKARGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411092',
                        ),
                    'enabled' => true,
                ),
            441 =>
                array(
                    'id' => '442',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHUMJHUMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411126',
                        ),
                    'enabled' => true,
                ),
            442 =>
                array(
                    'id' => '443',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KESHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411218',
                        ),
                    'enabled' => true,
                ),
            443 =>
                array(
                    'id' => '444',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PROTAPPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411755',
                        ),
                    'enabled' => true,
                ),
            444 =>
                array(
                    'id' => '445',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PULERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411784',
                        ),
                    'enabled' => true,
                ),
            445 =>
                array(
                    'id' => '446',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411876',
                        ),
                    'enabled' => true,
                ),
            446 =>
                array(
                    'id' => '447',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10411968',
                        ),
                    'enabled' => true,
                ),
            447 =>
                array(
                    'id' => '448',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAIKH HATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10412170',
                        ),
                    'enabled' => true,
                ),
            448 =>
                array(
                    'id' => '449',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LABUBUNIA HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10420054',
                        ),
                    'enabled' => true,
                ),
            449 =>
                array(
                    'id' => '450',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10420070',
                        ),
                    'enabled' => true,
                ),
            450 =>
                array(
                    'id' => '451',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DAPDAPIA FERRYGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10420225',
                        ),
                    'enabled' => true,
                ),
            451 =>
                array(
                    'id' => '452',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHALOKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10420317',
                        ),
                    'enabled' => true,
                ),
            452 =>
                array(
                    'id' => '453',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALCHITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10420496',
                        ),
                    'enabled' => true,
                ),
            453 =>
                array(
                    'id' => '454',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHEKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10420612',
                        ),
                    'enabled' => true,
                ),
            454 =>
                array(
                    'id' => '455',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAZAR GOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440100',
                        ),
                    'enabled' => true,
                ),
            455 =>
                array(
                    'id' => '456',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAPRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440313',
                        ),
                    'enabled' => true,
                ),
            456 =>
                array(
                    'id' => '457',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HAMDAH BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440463',
                        ),
                    'enabled' => true,
                ),
            457 =>
                array(
                    'id' => '458',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HOLIDHANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440618',
                        ),
                    'enabled' => true,
                ),
            458 =>
                array(
                    'id' => '459',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440647',
                        ),
                    'enabled' => true,
                ),
            459 =>
                array(
                    'id' => '460',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KABIRPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440739',
                        ),
                    'enabled' => true,
                ),
            460 =>
                array(
                    'id' => '461',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440797',
                        ),
                    'enabled' => true,
                ),
            461 =>
                array(
                    'id' => '462',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KANYADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10440850',
                        ),
                    'enabled' => true,
                ),
            462 =>
                array(
                    'id' => '463',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KOTCHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10441004',
                        ),
                    'enabled' => true,
                ),
            463 =>
                array(
                    'id' => '464',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHADHUHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10441217',
                        ),
                    'enabled' => true,
                ),
            464 =>
                array(
                    'id' => '465',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHAGRACHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10460072',
                        ),
                    'enabled' => true,
                ),
            465 =>
                array(
                    'id' => '466',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10460319',
                        ),
                    'enabled' => true,
                ),
            466 =>
                array(
                    'id' => '467',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAIKALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470075',
                        ),
                    'enabled' => true,
                ),
            467 =>
                array(
                    'id' => '468',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAJUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470109',
                        ),
                    'enabled' => true,
                ),
            468 =>
                array(
                    'id' => '469',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANARGATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470138',
                        ),
                    'enabled' => true,
                ),
            469 =>
                array(
                    'id' => '470',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANKA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470196',
                        ),
                    'enabled' => true,
                ),
            470 =>
                array(
                    'id' => '471',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BATBUNIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470288',
                        ),
                    'enabled' => true,
                ),
            471 =>
                array(
                    'id' => '472',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHUK NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470554',
                        ),
                    'enabled' => true,
                ),
            472 =>
                array(
                    'id' => '473',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CLAY ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470583',
                        ),
                    'enabled' => true,
                ),
            473 =>
                array(
                    'id' => '474',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DADA MATCH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470675',
                        ),
                    'enabled' => true,
                ),
            474 =>
                array(
                    'id' => '475',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470709',
                        ),
                    'enabled' => true,
                ),
            475 =>
                array(
                    'id' => '476',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FARAZIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470820',
                        ),
                    'enabled' => true,
                ),
            476 =>
                array(
                    'id' => '477',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOALPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10470912',
                        ),
                    'enabled' => true,
                ),
            477 =>
                array(
                    'id' => '478',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAIGIR MOHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471061',
                        ),
                    'enabled' => true,
                ),
            478 =>
                array(
                    'id' => '479',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JESSORE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471124',
                        ),
                    'enabled' => true,
                ),
            479 =>
                array(
                    'id' => '480',
                    'bank_id' => '1',
                    'bank_branch_name' => 'K.D.A. NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471216',
                        ),
                    'enabled' => true,
                ),
            480 =>
                array(
                    'id' => '481',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAPILMUNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471274',
                        ),
                    'enabled' => true,
                ),
            481 =>
                array(
                    'id' => '482',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAZDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471366',
                        ),
                    'enabled' => true,
                ),
            482 =>
                array(
                    'id' => '483',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHALISHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471458',
                        ),
                    'enabled' => true,
                ),
            483 =>
                array(
                    'id' => '484',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHAN JAHAN ALI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471487',
                        ),
                    'enabled' => true,
                ),
            484 =>
                array(
                    'id' => '485',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHULNA MEDICAL COLLEGE AND HOSPITAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471632',
                        ),
                    'enabled' => true,
                ),
            485 =>
                array(
                    'id' => '486',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHULNA UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471690',
                        ),
                    'enabled' => true,
                ),
            486 =>
                array(
                    'id' => '487',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOHESWARPASHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471908',
                        ),
                    'enabled' => true,
                ),
            487 =>
                array(
                    'id' => '488',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAVAL BASE(B.N.S.TITUMIR)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10471966',
                        ),
                    'enabled' => true,
                ),
            488 =>
                array(
                    'id' => '489',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PHULBARI GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472110',
                        ),
                    'enabled' => true,
                ),
            489 =>
                array(
                    'id' => '490',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PHULTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472149',
                        ),
                    'enabled' => true,
                ),
            490 =>
                array(
                    'id' => '491',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RUPSHASTAND ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472352',
                        ),
                    'enabled' => true,
                ),
            491 =>
                array(
                    'id' => '492',
                    'bank_id' => '1',
                    'bank_branch_name' => 'S.I. ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472381',
                        ),
                    'enabled' => true,
                ),
            492 =>
                array(
                    'id' => '493',
                    'bank_id' => '1',
                    'bank_branch_name' => 'S.RAHMAN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472415',
                        ),
                    'enabled' => true,
                ),
            493 =>
                array(
                    'id' => '494',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAIKHPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472507',
                        ),
                    'enabled' => true,
                ),
            494 =>
                array(
                    'id' => '495',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TEROKHADA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10472657',
                        ),
                    'enabled' => true,
                ),
            495 =>
                array(
                    'id' => '496',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAJITPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480102',
                        ),
                    'enabled' => true,
                ),
            496 =>
                array(
                    'id' => '497',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHAIRAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480223',
                        ),
                    'enabled' => true,
                ),
            497 =>
                array(
                    'id' => '498',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHARPUMDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480252',
                        ),
                    'enabled' => true,
                ),
            498 =>
                array(
                    'id' => '499',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HOSSAINPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480407',
                        ),
                    'enabled' => true,
                ),
            499 =>
                array(
                    'id' => '500',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KARIMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480557',
                        ),
                    'enabled' => true,
                ),
            500 =>
                array(
                    'id' => '501',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KATIADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480610',
                        ),
                    'enabled' => true,
                ),
            501 =>
                array(
                    'id' => '502',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480678',
                        ),
                    'enabled' => true,
                ),
            502 =>
                array(
                    'id' => '503',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KULIAR CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480731',
                        ),
                    'enabled' => true,
                ),
            503 =>
                array(
                    'id' => '504',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATHKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480881',
                        ),
                    'enabled' => true,
                ),
            504 =>
                array(
                    'id' => '505',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10480915',
                        ),
                    'enabled' => true,
                ),
            505 =>
                array(
                    'id' => '506',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NIKLI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10481006',
                        ),
                    'enabled' => true,
                ),
            506 =>
                array(
                    'id' => '507',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PAKUNDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10481064',
                        ),
                    'enabled' => true,
                ),
            507 =>
                array(
                    'id' => '508',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHITORBOND HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490071',
                        ),
                    'enabled' => true,
                ),
            508 =>
                array(
                    'id' => '509',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHURUNGAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490105',
                        ),
                    'enabled' => true,
                ),
            509 =>
                array(
                    'id' => '510',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHILMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490134',
                        ),
                    'enabled' => true,
                ),
            510 =>
                array(
                    'id' => '511',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FULBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490192',
                        ),
                    'enabled' => true,
                ),
            511 =>
                array(
                    'id' => '512',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KURIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490400',
                        ),
                    'enabled' => true,
                ),
            512 =>
                array(
                    'id' => '513',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAGESWARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490468',
                        ),
                    'enabled' => true,
                ),
            513 =>
                array(
                    'id' => '514',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAZIMKHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490497',
                        ),
                    'enabled' => true,
                ),
            514 =>
                array(
                    'id' => '515',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490589',
                        ),
                    'enabled' => true,
                ),
            515 =>
                array(
                    'id' => '516',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ULIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10490705',
                        ),
                    'enabled' => true,
                ),
            516 =>
                array(
                    'id' => '517',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ALLAHAR DARGAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500079',
                        ),
                    'enabled' => true,
                ),
            517 =>
                array(
                    'id' => '518',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500190',
                        ),
                    'enabled' => true,
                ),
            518 =>
                array(
                    'id' => '519',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARAGANGDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500224',
                        ),
                    'enabled' => true,
                ),
            519 =>
                array(
                    'id' => '520',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHERAMARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500282',
                        ),
                    'enabled' => true,
                ),
            520 =>
                array(
                    'id' => '521',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500466',
                        ),
                    'enabled' => true,
                ),
            521 =>
                array(
                    'id' => '522',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOLAP NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500558',
                        ),
                    'enabled' => true,
                ),
            522 =>
                array(
                    'id' => '523',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISLAMIC UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500679',
                        ),
                    'enabled' => true,
                ),
            523 =>
                array(
                    'id' => '524',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHALISHA KUNDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500790',
                        ),
                    'enabled' => true,
                ),
            524 =>
                array(
                    'id' => '525',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KUMARKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10500882',
                        ),
                    'enabled' => true,
                ),
            525 =>
                array(
                    'id' => '526',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATHURAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501036',
                        ),
                    'enabled' => true,
                ),
            526 =>
                array(
                    'id' => '527',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501065',
                        ),
                    'enabled' => true,
                ),
            527 =>
                array(
                    'id' => '528',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOZAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501157',
                        ),
                    'enabled' => true,
                ),
            528 =>
                array(
                    'id' => '529',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501249',
                        ),
                    'enabled' => true,
                ),
            529 =>
                array(
                    'id' => '530',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANTI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501278',
                        ),
                    'enabled' => true,
                ),
            530 =>
                array(
                    'id' => '531',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PATIKABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501331',
                        ),
                    'enabled' => true,
                ),
            531 =>
                array(
                    'id' => '532',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PRAGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501399',
                        ),
                    'enabled' => true,
                ),
            532 =>
                array(
                    'id' => '533',
                    'bank_id' => '1',
                    'bank_branch_name' => 'S.C. BANERJEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501481',
                        ),
                    'enabled' => true,
                ),
            533 =>
                array(
                    'id' => '534',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SILAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501544',
                        ),
                    'enabled' => true,
                ),
            534 =>
                array(
                    'id' => '535',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501573',
                        ),
                    'enabled' => true,
                ),
            535 =>
                array(
                    'id' => '536',
                    'bank_id' => '1',
                    'bank_branch_name' => 'THANAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501665',
                        ),
                    'enabled' => true,
                ),
            536 =>
                array(
                    'id' => '537',
                    'bank_id' => '1',
                    'bank_branch_name' => 'UJANGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10501694',
                        ),
                    'enabled' => true,
                ),
            537 =>
                array(
                    'id' => '538',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHABANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510072',
                        ),
                    'enabled' => true,
                ),
            538 =>
                array(
                    'id' => '539',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAGMUD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510119',
                        ),
                    'enabled' => true,
                ),
            539 =>
                array(
                    'id' => '540',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANIWALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510122',
                        ),
                    'enabled' => true,
                ),
            540 =>
                array(
                    'id' => '541',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DALAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510401',
                        ),
                    'enabled' => true,
                ),
            541 =>
                array(
                    'id' => '542',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DASHER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510469',
                        ),
                    'enabled' => true,
                ),
            542 =>
                array(
                    'id' => '543',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510735',
                        ),
                    'enabled' => true,
                ),
            543 =>
                array(
                    'id' => '544',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MANDARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510827',
                        ),
                    'enabled' => true,
                ),
            544 =>
                array(
                    'id' => '545',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510919',
                        ),
                    'enabled' => true,
                ),
            545 =>
                array(
                    'id' => '546',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10510977',
                        ),
                    'enabled' => true,
                ),
            546 =>
                array(
                    'id' => '547',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10511039',
                        ),
                    'enabled' => true,
                ),
            547 =>
                array(
                    'id' => '548',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMGATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10511068',
                        ),
                    'enabled' => true,
                ),
            548 =>
                array(
                    'id' => '549',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MISSION MOOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10520059',
                        ),
                    'enabled' => true,
                ),
            549 =>
                array(
                    'id' => '550',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10520462',
                        ),
                    'enabled' => true,
                ),
            550 =>
                array(
                    'id' => '551',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARHAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10540071',
                        ),
                    'enabled' => true,
                ),
            551 =>
                array(
                    'id' => '552',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DIKRIR CHOR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10540084',
                        ),
                    'enabled' => true,
                ),
            552 =>
                array(
                    'id' => '553',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALKINI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10540284',
                        ),
                    'enabled' => true,
                ),
            553 =>
                array(
                    'id' => '554',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10540400',
                        ),
                    'enabled' => true,
                ),
            554 =>
                array(
                    'id' => '555',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10540589',
                        ),
                    'enabled' => true,
                ),
            555 =>
                array(
                    'id' => '556',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10540763',
                        ),
                    'enabled' => true,
                ),
            556 =>
                array(
                    'id' => '557',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550137',
                        ),
                    'enabled' => true,
                ),
            557 =>
                array(
                    'id' => '558',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BEROIL PALITA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550166',
                        ),
                    'enabled' => true,
                ),
            558 =>
                array(
                    'id' => '559',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HAJIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550379',
                        ),
                    'enabled' => true,
                ),
            559 =>
                array(
                    'id' => '560',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ICHHAKHADA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550403',
                        ),
                    'enabled' => true,
                ),
            560 =>
                array(
                    'id' => '561',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550553',
                        ),
                    'enabled' => true,
                ),
            561 =>
                array(
                    'id' => '562',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550616',
                        ),
                    'enabled' => true,
                ),
            562 =>
                array(
                    'id' => '563',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SREEPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10550979',
                        ),
                    'enabled' => true,
                ),
            563 =>
                array(
                    'id' => '564',
                    'bank_id' => '1',
                    'bank_branch_name' => 'VAINAR MOAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10551002',
                        ),
                    'enabled' => true,
                ),
            564 =>
                array(
                    'id' => '565',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ARICHAGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560048',
                        ),
                    'enabled' => true,
                ),
            565 =>
                array(
                    'id' => '566',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANGLADESH HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560064',
                        ),
                    'enabled' => true,
                ),
            566 =>
                array(
                    'id' => '567',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOYRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560169',
                        ),
                    'enabled' => true,
                ),
            567 =>
                array(
                    'id' => '568',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHARIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560222',
                        ),
                    'enabled' => true,
                ),
            568 =>
                array(
                    'id' => '569',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHALLAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560314',
                        ),
                    'enabled' => true,
                ),
            569 =>
                array(
                    'id' => '570',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JANNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560493',
                        ),
                    'enabled' => true,
                ),
            570 =>
                array(
                    'id' => '571',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHITKA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560556',
                        ),
                    'enabled' => true,
                ),
            571 =>
                array(
                    'id' => '572',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KRISHNAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560585',
                        ),
                    'enabled' => true,
                ),
            572 =>
                array(
                    'id' => '573',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560619',
                        ),
                    'enabled' => true,
                ),
            573 =>
                array(
                    'id' => '574',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MANIKNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560677',
                        ),
                    'enabled' => true,
                ),
            574 =>
                array(
                    'id' => '575',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SINGAIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560822',
                        ),
                    'enabled' => true,
                ),
            575 =>
                array(
                    'id' => '576',
                    'bank_id' => '1',
                    'bank_branch_name' => 'WIRELESS GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10560880',
                        ),
                    'enabled' => true,
                ),
            576 =>
                array(
                    'id' => '577',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAMONPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10570070',
                        ),
                    'enabled' => true,
                ),
            577 =>
                array(
                    'id' => '578',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAOT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10570133',
                        ),
                    'enabled' => true,
                ),
            578 =>
                array(
                    'id' => '579',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GANGNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10570225',
                        ),
                    'enabled' => true,
                ),
            579 =>
                array(
                    'id' => '580',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MEHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10570375',
                        ),
                    'enabled' => true,
                ),
            580 =>
                array(
                    'id' => '581',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUJIB NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10570467',
                        ),
                    'enabled' => true,
                ),
            581 =>
                array(
                    'id' => '582',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHUKSHIMOIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10580228',
                        ),
                    'enabled' => true,
                ),
            582 =>
                array(
                    'id' => '583',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FULTALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10580552',
                        ),
                    'enabled' => true,
                ),
            583 =>
                array(
                    'id' => '584',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GIAS NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10580581',
                        ),
                    'enabled' => true,
                ),
            584 =>
                array(
                    'id' => '585',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KARMADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10580828',
                        ),
                    'enabled' => true,
                ),
            585 =>
                array(
                    'id' => '586',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KATARKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10580857',
                        ),
                    'enabled' => true,
                ),
            586 =>
                array(
                    'id' => '587',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10580949',
                        ),
                    'enabled' => true,
                ),
            587 =>
                array(
                    'id' => '588',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADHABPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581001',
                        ),
                    'enabled' => true,
                ),
            588 =>
                array(
                    'id' => '589',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOSTAFAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581151',
                        ),
                    'enabled' => true,
                ),
            589 =>
                array(
                    'id' => '590',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581180',
                        ),
                    'enabled' => true,
                ),
            590 =>
                array(
                    'id' => '591',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581243',
                        ),
                    'enabled' => true,
                ),
            591 =>
                array(
                    'id' => '592',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RABIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581364',
                        ),
                    'enabled' => true,
                ),
            592 =>
                array(
                    'id' => '593',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SINDUR KHAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581698',
                        ),
                    'enabled' => true,
                ),
            593 =>
                array(
                    'id' => '594',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10581722',
                        ),
                    'enabled' => true,
                ),
            594 =>
                array(
                    'id' => '595',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BALIGAON BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590139',
                        ),
                    'enabled' => true,
                ),
            595 =>
                array(
                    'id' => '596',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590434',
                        ),
                    'enabled' => true,
                ),
            596 =>
                array(
                    'id' => '597',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HASAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590555',
                        ),
                    'enabled' => true,
                ),
            597 =>
                array(
                    'id' => '598',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HASHARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590618',
                        ),
                    'enabled' => true,
                ),
            598 =>
                array(
                    'id' => '599',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HOSSAINDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590647',
                        ),
                    'enabled' => true,
                ),
            599 =>
                array(
                    'id' => '600',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALMA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590700',
                        ),
                    'enabled' => true,
                ),
            600 =>
                array(
                    'id' => '601',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KOLAPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590821',
                        ),
                    'enabled' => true,
                ),
            601 =>
                array(
                    'id' => '602',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRKADIM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10590971',
                        ),
                    'enabled' => true,
                ),
            602 =>
                array(
                    'id' => '603',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUKTARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10591004',
                        ),
                    'enabled' => true,
                ),
            603 =>
                array(
                    'id' => '604',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10591033',
                        ),
                    'enabled' => true,
                ),
            604 =>
                array(
                    'id' => '605',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10591062',
                        ),
                    'enabled' => true,
                ),
            605 =>
                array(
                    'id' => '606',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMGOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10591154',
                        ),
                    'enabled' => true,
                ),
            606 =>
                array(
                    'id' => '607',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SIMPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10591367',
                        ),
                    'enabled' => true,
                ),
            607 =>
                array(
                    'id' => '608',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10591420',
                        ),
                    'enabled' => true,
                ),
            608 =>
                array(
                    'id' => '609',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PAGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610064',
                        ),
                    'enabled' => true,
                ),
            609 =>
                array(
                    'id' => '610',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ATHAROBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610130',
                        ),
                    'enabled' => true,
                ),
            610 =>
                array(
                    'id' => '611',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHAITKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610280',
                        ),
                    'enabled' => true,
                ),
            611 =>
                array(
                    'id' => '612',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610314',
                        ),
                    'enabled' => true,
                ),
            612 =>
                array(
                    'id' => '613',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BIDYAGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610330',
                        ),
                    'enabled' => true,
                ),
            613 =>
                array(
                    'id' => '614',
                    'bank_id' => '1',
                    'bank_branch_name' => 'C.K. GHOSH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610406',
                        ),
                    'enabled' => true,
                ),
            614 =>
                array(
                    'id' => '615',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHHOTO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610585',
                        ),
                    'enabled' => true,
                ),
            615 =>
                array(
                    'id' => '616',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610822',
                        ),
                    'enabled' => true,
                ),
            616 =>
                array(
                    'id' => '617',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FULPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10610972',
                        ),
                    'enabled' => true,
                ),
            617 =>
                array(
                    'id' => '618',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAFFARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611005',
                        ),
                    'enabled' => true,
                ),
            618 =>
                array(
                    'id' => '619',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GIRLS CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611034',
                        ),
                    'enabled' => true,
                ),
            619 =>
                array(
                    'id' => '620',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISHWARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611184',
                        ),
                    'enabled' => true,
                ),
            620 =>
                array(
                    'id' => '621',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611247',
                        ),
                    'enabled' => true,
                ),
            621 =>
                array(
                    'id' => '622',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611300',
                        ),
                    'enabled' => true,
                ),
            622 =>
                array(
                    'id' => '623',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MECHUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611605',
                        ),
                    'enabled' => true,
                ),
            623 =>
                array(
                    'id' => '624',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MEDICAL COLLAGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611634',
                        ),
                    'enabled' => true,
                ),
            624 =>
                array(
                    'id' => '625',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUKTAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611692',
                        ),
                    'enabled' => true,
                ),
            625 =>
                array(
                    'id' => '626',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10611755',
                        ),
                    'enabled' => true,
                ),
            626 =>
                array(
                    'id' => '627',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TRISHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10612354',
                        ),
                    'enabled' => true,
                ),
            627 =>
                array(
                    'id' => '628',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AHSANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10640100',
                        ),
                    'enabled' => true,
                ),
            628 =>
                array(
                    'id' => '629',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AI-HAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10640139',
                        ),
                    'enabled' => true,
                ),
            629 =>
                array(
                    'id' => '630',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOALIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10640405',
                        ),
                    'enabled' => true,
                ),
            630 =>
                array(
                    'id' => '631',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10640434',
                        ),
                    'enabled' => true,
                ),
            631 =>
                array(
                    'id' => '632',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASHAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10640797',
                        ),
                    'enabled' => true,
                ),
            632 =>
                array(
                    'id' => '633',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MAINAMHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10640971',
                        ),
                    'enabled' => true,
                ),
            633 =>
                array(
                    'id' => '634',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATAZEE HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10641062',
                        ),
                    'enabled' => true,
                ),
            634 =>
                array(
                    'id' => '635',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10641183',
                        ),
                    'enabled' => true,
                ),
            635 =>
                array(
                    'id' => '636',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NITHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10641338',
                        ),
                    'enabled' => true,
                ),
            636 =>
                array(
                    'id' => '637',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PATNITALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10641459',
                        ),
                    'enabled' => true,
                ),
            637 =>
                array(
                    'id' => '638',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PORSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10641512',
                        ),
                    'enabled' => true,
                ),
            638 =>
                array(
                    'id' => '639',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAPAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10641754',
                        ),
                    'enabled' => true,
                ),
            639 =>
                array(
                    'id' => '640',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ARENDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650040',
                        ),
                    'enabled' => true,
                ),
            640 =>
                array(
                    'id' => '641',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650079',
                        ),
                    'enabled' => true,
                ),
            641 =>
                array(
                    'id' => '642',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650190',
                        ),
                    'enabled' => true,
                ),
            642 =>
                array(
                    'id' => '643',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JOGANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650282',
                        ),
                    'enabled' => true,
                ),
            643 =>
                array(
                    'id' => '644',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALABARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650316',
                        ),
                    'enabled' => true,
                ),
            644 =>
                array(
                    'id' => '645',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650345',
                        ),
                    'enabled' => true,
                ),
            645 =>
                array(
                    'id' => '646',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LOHAGARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650466',
                        ),
                    'enabled' => true,
                ),
            646 =>
                array(
                    'id' => '647',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650640',
                        ),
                    'enabled' => true,
                ),
            647 =>
                array(
                    'id' => '648',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RATADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10650703',
                        ),
                    'enabled' => true,
                ),
            648 =>
                array(
                    'id' => '649',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ARAIHAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670046',
                        ),
                    'enabled' => true,
                ),
            649 =>
                array(
                    'id' => '650',
                    'bank_id' => '1',
                    'bank_branch_name' => 'B.B. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670075',
                        ),
                    'enabled' => true,
                ),
            650 =>
                array(
                    'id' => '651',
                    'bank_id' => '1',
                    'bank_branch_name' => 'B.K. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670138',
                        ),
                    'enabled' => true,
                ),
            651 =>
                array(
                    'id' => '652',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COURT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670259',
                        ),
                    'enabled' => true,
                ),
            652 =>
                array(
                    'id' => '653',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEMRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670312',
                        ),
                    'enabled' => true,
                ),
            653 =>
                array(
                    'id' => '654',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670738',
                        ),
                    'enabled' => true,
                ),
            654 =>
                array(
                    'id' => '655',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KANCHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10670796',
                        ),
                    'enabled' => true,
                ),
            655 =>
                array(
                    'id' => '656',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRJUMLA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10671032',
                        ),
                    'enabled' => true,
                ),
            656 =>
                array(
                    'id' => '657',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHASTAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10671540',
                        ),
                    'enabled' => true,
                ),
            657 =>
                array(
                    'id' => '658',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SIDDIRGONJ POWER STATION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10671632',
                        ),
                    'enabled' => true,
                ),
            658 =>
                array(
                    'id' => '659',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10671690',
                        ),
                    'enabled' => true,
                ),
            659 =>
                array(
                    'id' => '660',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10671753',
                        ),
                    'enabled' => true,
                ),
            660 =>
                array(
                    'id' => '661',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680049',
                        ),
                    'enabled' => true,
                ),
            661 =>
                array(
                    'id' => '662',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BABURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680102',
                        ),
                    'enabled' => true,
                ),
            662 =>
                array(
                    'id' => '663',
                    'bank_id' => '1',
                    'bank_branch_name' => 'C & B BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680128',
                        ),
                    'enabled' => true,
                ),
            663 =>
                array(
                    'id' => '664',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHALAKCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680315',
                        ),
                    'enabled' => true,
                ),
            664 =>
                array(
                    'id' => '665',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680731',
                        ),
                    'enabled' => true,
                ),
            665 =>
                array(
                    'id' => '666',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUSAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680799',
                        ),
                    'enabled' => true,
                ),
            666 =>
                array(
                    'id' => '667',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680852',
                        ),
                    'enabled' => true,
                ),
            667 =>
                array(
                    'id' => '668',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PALASH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10680944',
                        ),
                    'enabled' => true,
                ),
            668 =>
                array(
                    'id' => '669',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RADHAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10681064',
                        ),
                    'enabled' => true,
                ),
            669 =>
                array(
                    'id' => '670',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10681301',
                        ),
                    'enabled' => true,
                ),
            670 =>
                array(
                    'id' => '671',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10681369',
                        ),
                    'enabled' => true,
                ),
            671 =>
                array(
                    'id' => '672',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690118',
                        ),
                    'enabled' => true,
                ),
            672 =>
                array(
                    'id' => '673',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAGATIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690134',
                        ),
                    'enabled' => true,
                ),
            673 =>
                array(
                    'id' => '674',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANCHAKOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690318',
                        ),
                    'enabled' => true,
                ),
            674 =>
                array(
                    'id' => '675',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690497',
                        ),
                    'enabled' => true,
                ),
            675 =>
                array(
                    'id' => '676',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HALSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690589',
                        ),
                    'enabled' => true,
                ),
            676 =>
                array(
                    'id' => '677',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LAXMIKOL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690947',
                        ),
                    'enabled' => true,
                ),
            677 =>
                array(
                    'id' => '678',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LOKMANPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10690950',
                        ),
                    'enabled' => true,
                ),
            678 =>
                array(
                    'id' => '679',
                    'bank_id' => '1',
                    'bank_branch_name' => 'N.B. SUGAR MILLS',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691038',
                        ),
                    'enabled' => true,
                ),
            679 =>
                array(
                    'id' => '680',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691096',
                        ),
                    'enabled' => true,
                ),
            680 =>
                array(
                    'id' => '681',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NATORE SUGAR MILLS',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691159',
                        ),
                    'enabled' => true,
                ),
            681 =>
                array(
                    'id' => '682',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAZIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691212',
                        ),
                    'enabled' => true,
                ),
            682 =>
                array(
                    'id' => '683',
                    'bank_id' => '1',
                    'bank_branch_name' => 'QUADIRABAD CANTT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691362',
                        ),
                    'enabled' => true,
                ),
            683 =>
                array(
                    'id' => '684',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJAPUR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691425',
                        ),
                    'enabled' => true,
                ),
            684 =>
                array(
                    'id' => '685',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SINGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10691483',
                        ),
                    'enabled' => true,
                ),
            685 =>
                array(
                    'id' => '686',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMNURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700040',
                        ),
                    'enabled' => true,
                ),
            686 =>
                array(
                    'id' => '687',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAROGHORIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700132',
                        ),
                    'enabled' => true,
                ),
            687 =>
                array(
                    'id' => '688',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BINODPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700190',
                        ),
                    'enabled' => true,
                ),
            688 =>
                array(
                    'id' => '689',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700253',
                        ),
                    'enabled' => true,
                ),
            689 =>
                array(
                    'id' => '690',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHOWDALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700345',
                        ),
                    'enabled' => true,
                ),
            690 =>
                array(
                    'id' => '691',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOBRATALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700408',
                        ),
                    'enabled' => true,
                ),
            691 =>
                array(
                    'id' => '692',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHAMAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700558',
                        ),
                    'enabled' => true,
                ),
            692 =>
                array(
                    'id' => '693',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOBARAKPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700611',
                        ),
                    'enabled' => true,
                ),
            693 =>
                array(
                    'id' => '694',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MONAKASHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700703',
                        ),
                    'enabled' => true,
                ),
            694 =>
                array(
                    'id' => '695',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700824',
                        ),
                    'enabled' => true,
                ),
            695 =>
                array(
                    'id' => '696',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ROHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700882',
                        ),
                    'enabled' => true,
                ),
            696 =>
                array(
                    'id' => '697',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700916',
                        ),
                    'enabled' => true,
                ),
            697 =>
                array(
                    'id' => '698',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10700945',
                        ),
                    'enabled' => true,
                ),
            698 =>
                array(
                    'id' => '699',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BARAHATTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720075',
                        ),
                    'enabled' => true,
                ),
            699 =>
                array(
                    'id' => '700',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BIRISHIRI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720109',
                        ),
                    'enabled' => true,
                ),
            700 =>
                array(
                    'id' => '701',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720196',
                        ),
                    'enabled' => true,
                ),
            701 =>
                array(
                    'id' => '702',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FAKIRER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720220',
                        ),
                    'enabled' => true,
                ),
            702 =>
                array(
                    'id' => '703',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JHAN ZAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720341',
                        ),
                    'enabled' => true,
                ),
            703 =>
                array(
                    'id' => '704',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KENDUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720462',
                        ),
                    'enabled' => true,
                ),
            704 =>
                array(
                    'id' => '705',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MAHANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720675',
                        ),
                    'enabled' => true,
                ),
            705 =>
                array(
                    'id' => '706',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720738',
                        ),
                    'enabled' => true,
                ),
            706 =>
                array(
                    'id' => '707',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PURBADHALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720796',
                        ),
                    'enabled' => true,
                ),
            707 =>
                array(
                    'id' => '708',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RUPGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10720859',
                        ),
                    'enabled' => true,
                ),
            708 =>
                array(
                    'id' => '709',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TIOSHRI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10721061',
                        ),
                    'enabled' => true,
                ),
            709 =>
                array(
                    'id' => '710',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KACHUKATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10730494',
                        ),
                    'enabled' => true,
                ),
            710 =>
                array(
                    'id' => '711',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10730731',
                        ),
                    'enabled' => true,
                ),
            711 =>
                array(
                    'id' => '712',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10730799',
                        ),
                    'enabled' => true,
                ),
            712 =>
                array(
                    'id' => '713',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SAYEDPUR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10730823',
                        ),
                    'enabled' => true,
                ),
            713 =>
                array(
                    'id' => '714',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADALKOT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750137',
                        ),
                    'enabled' => true,
                ),
            714 =>
                array(
                    'id' => '715',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750166',
                        ),
                    'enabled' => true,
                ),
            715 =>
                array(
                    'id' => '716',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750258',
                        ),
                    'enabled' => true,
                ),
            716 =>
                array(
                    'id' => '717',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAZRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750311',
                        ),
                    'enabled' => true,
                ),
            717 =>
                array(
                    'id' => '718',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BROJERGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750379',
                        ),
                    'enabled' => true,
                ),
            718 =>
                array(
                    'id' => '719',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANDRAGONJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750403',
                        ),
                    'enabled' => true,
                ),
            719 =>
                array(
                    'id' => '720',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750582',
                        ),
                    'enabled' => true,
                ),
            720 =>
                array(
                    'id' => '721',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750674',
                        ),
                    'enabled' => true,
                ),
            721 =>
                array(
                    'id' => '722',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DASHGHORIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750766',
                        ),
                    'enabled' => true,
                ),
            722 =>
                array(
                    'id' => '723',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DATTERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750795',
                        ),
                    'enabled' => true,
                ),
            723 =>
                array(
                    'id' => '724',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DELTAGATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10750858',
                        ),
                    'enabled' => true,
                ),
            724 =>
                array(
                    'id' => '725',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751002',
                        ),
                    'enabled' => true,
                ),
            725 =>
                array(
                    'id' => '726',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751031',
                        ),
                    'enabled' => true,
                ),
            726 =>
                array(
                    'id' => '727',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JOYAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751181',
                        ),
                    'enabled' => true,
                ),
            727 =>
                array(
                    'id' => '728',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KASHIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751394',
                        ),
                    'enabled' => true,
                ),
            728 =>
                array(
                    'id' => '729',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHILPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751486',
                        ),
                    'enabled' => true,
                ),
            729 =>
                array(
                    'id' => '730',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751578',
                        ),
                    'enabled' => true,
                ),
            730 =>
                array(
                    'id' => '731',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751631',
                        ),
                    'enabled' => true,
                ),
            731 =>
                array(
                    'id' => '732',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NADANA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10751660',
                        ),
                    'enabled' => true,
                ),
            732 =>
                array(
                    'id' => '733',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAHEBER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10752177',
                        ),
                    'enabled' => true,
                ),
            733 =>
                array(
                    'id' => '734',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SOAMPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10752201',
                        ),
                    'enabled' => true,
                ),
            734 =>
                array(
                    'id' => '735',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10752230',
                        ),
                    'enabled' => true,
                ),
            735 =>
                array(
                    'id' => '736',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ZILLA BOARD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10752443',
                        ),
                    'enabled' => true,
                ),
            736 =>
                array(
                    'id' => '737',
                    'bank_id' => '1',
                    'bank_branch_name' => 'A. HAMID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760048',
                        ),
                    'enabled' => true,
                ),
            737 =>
                array(
                    'id' => '738',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TRIMOHONI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760064',
                        ),
                    'enabled' => true,
                ),
            738 =>
                array(
                    'id' => '739',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SATBARIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760080',
                        ),
                    'enabled' => true,
                ),
            739 =>
                array(
                    'id' => '740',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAIKOLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760114',
                        ),
                    'enabled' => true,
                ),
            740 =>
                array(
                    'id' => '741',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ATAIKULA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760222',
                        ),
                    'enabled' => true,
                ),
            741 =>
                array(
                    'id' => '742',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ATGHORIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760251',
                        ),
                    'enabled' => true,
                ),
            742 =>
                array(
                    'id' => '743',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760406',
                        ),
                    'enabled' => true,
                ),
            743 =>
                array(
                    'id' => '744',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BORAL BRIDGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760619',
                        ),
                    'enabled' => true,
                ),
            744 =>
                array(
                    'id' => '745',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COLLEGE GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760701',
                        ),
                    'enabled' => true,
                ),
            745 =>
                array(
                    'id' => '746',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COURT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760730',
                        ),
                    'enabled' => true,
                ),
            746 =>
                array(
                    'id' => '747',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DUBLIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10760943',
                        ),
                    'enabled' => true,
                ),
            747 =>
                array(
                    'id' => '748',
                    'bank_id' => '1',
                    'bank_branch_name' => 'H.M.M. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761126',
                        ),
                    'enabled' => true,
                ),
            748 =>
                array(
                    'id' => '749',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761218',
                        ),
                    'enabled' => true,
                ),
            749 =>
                array(
                    'id' => '750',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAPUR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761542',
                        ),
                    'enabled' => true,
                ),
            750 =>
                array(
                    'id' => '751',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MULADULI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761571',
                        ),
                    'enabled' => true,
                ),
            751 =>
                array(
                    'id' => '752',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALKHOLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761663',
                        ),
                    'enabled' => true,
                ),
            752 =>
                array(
                    'id' => '753',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARIKELPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761692',
                        ),
                    'enabled' => true,
                ),
            753 =>
                array(
                    'id' => '754',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAZIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761726',
                        ),
                    'enabled' => true,
                ),
            754 =>
                array(
                    'id' => '755',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PAKSEY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761900',
                        ),
                    'enabled' => true,
                ),
            755 =>
                array(
                    'id' => '756',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PUSHPAPARAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761939',
                        ),
                    'enabled' => true,
                ),
            756 =>
                array(
                    'id' => '757',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761968',
                        ),
                    'enabled' => true,
                ),
            757 =>
                array(
                    'id' => '758',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAKSHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10761997',
                        ),
                    'enabled' => true,
                ),
            758 =>
                array(
                    'id' => '759',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RUPPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10762020',
                        ),
                    'enabled' => true,
                ),
            759 =>
                array(
                    'id' => '760',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHIBRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10762170',
                        ),
                    'enabled' => true,
                ),
            760 =>
                array(
                    'id' => '761',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHYAMGANJ HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10762204',
                        ),
                    'enabled' => true,
                ),
            761 =>
                array(
                    'id' => '762',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SUJANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10762262',
                        ),
                    'enabled' => true,
                ),
            762 =>
                array(
                    'id' => '763',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAKLAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10770162',
                        ),
                    'enabled' => true,
                ),
            763 =>
                array(
                    'id' => '764',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAGADAL HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10770346',
                        ),
                    'enabled' => true,
                ),
            764 =>
                array(
                    'id' => '765',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10770520',
                        ),
                    'enabled' => true,
                ),
            765 =>
                array(
                    'id' => '766',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10770559',
                        ),
                    'enabled' => true,
                ),
            766 =>
                array(
                    'id' => '767',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHALBAHAN HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10770612',
                        ),
                    'enabled' => true,
                ),
            767 =>
                array(
                    'id' => '768',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TUNIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10770762',
                        ),
                    'enabled' => true,
                ),
            768 =>
                array(
                    'id' => '769',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAUPHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780194',
                        ),
                    'enabled' => true,
                ),
            769 =>
                array(
                    'id' => '770',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DASHMINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780349',
                        ),
                    'enabled' => true,
                ),
            770 =>
                array(
                    'id' => '771',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GALACHIPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780499',
                        ),
                    'enabled' => true,
                ),
            771 =>
                array(
                    'id' => '772',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KANAKDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780644',
                        ),
                    'enabled' => true,
                ),
            772 =>
                array(
                    'id' => '773',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHEPUPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780765',
                        ),
                    'enabled' => true,
                ),
            773 =>
                array(
                    'id' => '774',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KOAKATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780794',
                        ),
                    'enabled' => true,
                ),
            774 =>
                array(
                    'id' => '775',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10780828',
                        ),
                    'enabled' => true,
                ),
            775 =>
                array(
                    'id' => '776',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NUTUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10781001',
                        ),
                    'enabled' => true,
                ),
            776 =>
                array(
                    'id' => '777',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANGASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10781030',
                        ),
                    'enabled' => true,
                ),
            777 =>
                array(
                    'id' => '778',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10781180',
                        ),
                    'enabled' => true,
                ),
            778 =>
                array(
                    'id' => '779',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PURAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10781243',
                        ),
                    'enabled' => true,
                ),
            779 =>
                array(
                    'id' => '780',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TEGACHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10781306',
                        ),
                    'enabled' => true,
                ),
            780 =>
                array(
                    'id' => '781',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790139',
                        ),
                    'enabled' => true,
                ),
            781 =>
                array(
                    'id' => '782',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAWKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790434',
                        ),
                    'enabled' => true,
                ),
            782 =>
                array(
                    'id' => '783',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790526',
                        ),
                    'enabled' => true,
                ),
            783 =>
                array(
                    'id' => '784',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRUKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790647',
                        ),
                    'enabled' => true,
                ),
            784 =>
                array(
                    'id' => '785',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PARERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790739',
                        ),
                    'enabled' => true,
                ),
            785 =>
                array(
                    'id' => '786',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PIROJPUR MAIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790797',
                        ),
                    'enabled' => true,
                ),
            786 =>
                array(
                    'id' => '787',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PIROJPUR(ZILLA PARISHAD)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10790821',
                        ),
                    'enabled' => true,
                ),
            787 =>
                array(
                    'id' => '788',
                    'bank_id' => '1',
                    'bank_branch_name' => 'COURT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810051',
                        ),
                    'enabled' => true,
                ),
            788 =>
                array(
                    'id' => '789',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RDA BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810080',
                        ),
                    'enabled' => true,
                ),
            789 =>
                array(
                    'id' => '790',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAJU BAGHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810130',
                        ),
                    'enabled' => true,
                ),
            790 =>
                array(
                    'id' => '791',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BALIAGHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810169',
                        ),
                    'enabled' => true,
                ),
            791 =>
                array(
                    'id' => '792',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANESHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810198',
                        ),
                    'enabled' => true,
                ),
            792 =>
                array(
                    'id' => '793',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810406',
                        ),
                    'enabled' => true,
                ),
            793 =>
                array(
                    'id' => '794',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HARIAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10810769',
                        ),
                    'enabled' => true,
                ),
            794 =>
                array(
                    'id' => '795',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LAXMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811184',
                        ),
                    'enabled' => true,
                ),
            795 =>
                array(
                    'id' => '796',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADRASHA MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811247',
                        ),
                    'enabled' => true,
                ),
            796 =>
                array(
                    'id' => '797',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MALOPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811276',
                        ),
                    'enabled' => true,
                ),
            797 =>
                array(
                    'id' => '798',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAWHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811605',
                        ),
                    'enabled' => true,
                ),
            798 =>
                array(
                    'id' => '799',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811634',
                        ),
                    'enabled' => true,
                ),
            799 =>
                array(
                    'id' => '800',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PUTHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811847',
                        ),
                    'enabled' => true,
                ),
            800 =>
                array(
                    'id' => '801',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAIGHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811876',
                        ),
                    'enabled' => true,
                ),
            801 =>
                array(
                    'id' => '802',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJSHAHI CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10811997',
                        ),
                    'enabled' => true,
                ),
            802 =>
                array(
                    'id' => '803',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJSHAHI UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10812112',
                        ),
                    'enabled' => true,
                ),
            803 =>
                array(
                    'id' => '804',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAHEB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10812262',
                        ),
                    'enabled' => true,
                ),
            804 =>
                array(
                    'id' => '805',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TALAIMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10812354',
                        ),
                    'enabled' => true,
                ),
            805 =>
                array(
                    'id' => '806',
                    'bank_id' => '1',
                    'bank_branch_name' => 'WAPDA IRRIGATION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10812417',
                        ),
                    'enabled' => true,
                ),
            806 =>
                array(
                    'id' => '807',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AHLADIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10820041',
                        ),
                    'enabled' => true,
                ),
            807 =>
                array(
                    'id' => '808',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALUKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10820375',
                        ),
                    'enabled' => true,
                ),
            808 =>
                array(
                    'id' => '809',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALIA-JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10820559',
                        ),
                    'enabled' => true,
                ),
            809 =>
                array(
                    'id' => '810',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10820670',
                        ),
                    'enabled' => true,
                ),
            810 =>
                array(
                    'id' => '811',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10820733',
                        ),
                    'enabled' => true,
                ),
            811 =>
                array(
                    'id' => '812',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANARUPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10840076',
                        ),
                    'enabled' => true,
                ),
            812 =>
                array(
                    'id' => '813',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANDRAGHONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10840197',
                        ),
                    'enabled' => true,
                ),
            813 =>
                array(
                    'id' => '814',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAPTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10840289',
                        ),
                    'enabled' => true,
                ),
            814 =>
                array(
                    'id' => '815',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10840526',
                        ),
                    'enabled' => true,
                ),
            815 =>
                array(
                    'id' => '816',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ALAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10850040',
                        ),
                    'enabled' => true,
                ),
            816 =>
                array(
                    'id' => '817',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BADARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10850103',
                        ),
                    'enabled' => true,
                ),
            817 =>
                array(
                    'id' => '818',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10850316',
                        ),
                    'enabled' => true,
                ),
            818 =>
                array(
                    'id' => '819',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CENTRAL ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10850345',
                        ),
                    'enabled' => true,
                ),
            819 =>
                array(
                    'id' => '820',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MEDICAL COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851036',
                        ),
                    'enabled' => true,
                ),
            820 =>
                array(
                    'id' => '821',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEKMAMUDHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851186',
                        ),
                    'enabled' => true,
                ),
            821 =>
                array(
                    'id' => '822',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PAWTANAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851302',
                        ),
                    'enabled' => true,
                ),
            822 =>
                array(
                    'id' => '823',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PIRGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851331',
                        ),
                    'enabled' => true,
                ),
            823 =>
                array(
                    'id' => '824',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851452',
                        ),
                    'enabled' => true,
                ),
            824 =>
                array(
                    'id' => '825',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAKER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851665',
                        ),
                    'enabled' => true,
                ),
            825 =>
                array(
                    'id' => '826',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHANERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851728',
                        ),
                    'enabled' => true,
                ),
            826 =>
                array(
                    'id' => '827',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TARAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10851931',
                        ),
                    'enabled' => true,
                ),
            827 =>
                array(
                    'id' => '828',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DAMUDYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10860193',
                        ),
                    'enabled' => true,
                ),
            828 =>
                array(
                    'id' => '829',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MULFATGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10860522',
                        ),
                    'enabled' => true,
                ),
            829 =>
                array(
                    'id' => '830',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10860580',
                        ),
                    'enabled' => true,
                ),
            830 =>
                array(
                    'id' => '831',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHARIATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10860672',
                        ),
                    'enabled' => true,
                ),
            831 =>
                array(
                    'id' => '832',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ZAJIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10860706',
                        ),
                    'enabled' => true,
                ),
            832 =>
                array(
                    'id' => '833',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANGSHIPUR BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10870167',
                        ),
                    'enabled' => true,
                ),
            833 =>
                array(
                    'id' => '834',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHETKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10870259',
                        ),
                    'enabled' => true,
                ),
            834 =>
                array(
                    'id' => '835',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEBHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10870370',
                        ),
                    'enabled' => true,
                ),
            835 =>
                array(
                    'id' => '836',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10870433',
                        ),
                    'enabled' => true,
                ),
            836 =>
                array(
                    'id' => '837',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOUTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10870859',
                        ),
                    'enabled' => true,
                ),
            837 =>
                array(
                    'id' => '838',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10870888',
                        ),
                    'enabled' => true,
                ),
            838 =>
                array(
                    'id' => '839',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PATKELGHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10871032',
                        ),
                    'enabled' => true,
                ),
            839 =>
                array(
                    'id' => '840',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10871090',
                        ),
                    'enabled' => true,
                ),
            840 =>
                array(
                    'id' => '841',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10871216',
                        ),
                    'enabled' => true,
                ),
            841 =>
                array(
                    'id' => '842',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NOOR NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10872031',
                        ),
                    'enabled' => true,
                ),
            842 =>
                array(
                    'id' => '843',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAHULI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880160',
                        ),
                    'enabled' => true,
                ),
            843 =>
                array(
                    'id' => '844',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BELTAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880252',
                        ),
                    'enabled' => true,
                ),
            844 =>
                array(
                    'id' => '845',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BRAHMAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880373',
                        ),
                    'enabled' => true,
                ),
            845 =>
                array(
                    'id' => '846',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHANDAIKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880436',
                        ),
                    'enabled' => true,
                ),
            846 =>
                array(
                    'id' => '847',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHUBIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880731',
                        ),
                    'enabled' => true,
                ),
            847 =>
                array(
                    'id' => '848',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ENAYETPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880823',
                        ),
                    'enabled' => true,
                ),
            848 =>
                array(
                    'id' => '849',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GHURKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10880881',
                        ),
                    'enabled' => true,
                ),
            849 =>
                array(
                    'id' => '850',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALI BARI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881006',
                        ),
                    'enabled' => true,
                ),
            850 =>
                array(
                    'id' => '851',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KHIDRAMATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881219',
                        ),
                    'enabled' => true,
                ),
            851 =>
                array(
                    'id' => '852',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881451',
                        ),
                    'enabled' => true,
                ),
            852 =>
                array(
                    'id' => '853',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NIMGACHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881514',
                        ),
                    'enabled' => true,
                ),
            853 =>
                array(
                    'id' => '854',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PANGASHI HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881572',
                        ),
                    'enabled' => true,
                ),
            854 =>
                array(
                    'id' => '855',
                    'bank_id' => '1',
                    'bank_branch_name' => 'PORJONA VATPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881606',
                        ),
                    'enabled' => true,
                ),
            855 =>
                array(
                    'id' => '856',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881693',
                        ),
                    'enabled' => true,
                ),
            856 =>
                array(
                    'id' => '857',
                    'bank_id' => '1',
                    'bank_branch_name' => 'S.S. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881785',
                        ),
                    'enabled' => true,
                ),
            857 =>
                array(
                    'id' => '858',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881901',
                        ),
                    'enabled' => true,
                ),
            858 =>
                array(
                    'id' => '859',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHOMESHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10881998',
                        ),
                    'enabled' => true,
                ),
            859 =>
                array(
                    'id' => '860',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10882050',
                        ),
                    'enabled' => true,
                ),
            860 =>
                array(
                    'id' => '861',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TALGACHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10882113',
                        ),
                    'enabled' => true,
                ),
            861 =>
                array(
                    'id' => '862',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ULLAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10882234',
                        ),
                    'enabled' => true,
                ),
            862 =>
                array(
                    'id' => '863',
                    'bank_id' => '1',
                    'bank_branch_name' => 'VIMGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890055',
                        ),
                    'enabled' => true,
                ),
            863 =>
                array(
                    'id' => '864',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAKORKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890192',
                        ),
                    'enabled' => true,
                ),
            864 =>
                array(
                    'id' => '865',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALITABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890347',
                        ),
                    'enabled' => true,
                ),
            865 =>
                array(
                    'id' => '866',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NANDIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890400',
                        ),
                    'enabled' => true,
                ),
            866 =>
                array(
                    'id' => '867',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NANNI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890439',
                        ),
                    'enabled' => true,
                ),
            867 =>
                array(
                    'id' => '868',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890550',
                        ),
                    'enabled' => true,
                ),
            868 =>
                array(
                    'id' => '869',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SREEBORDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890642',
                        ),
                    'enabled' => true,
                ),
            869 =>
                array(
                    'id' => '870',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TINANDIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10890705',
                        ),
                    'enabled' => true,
                ),
            870 =>
                array(
                    'id' => '871',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10900040',
                        ),
                    'enabled' => true,
                ),
            871 =>
                array(
                    'id' => '872',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10900224',
                        ),
                    'enabled' => true,
                ),
            872 =>
                array(
                    'id' => '873',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DERAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10900253',
                        ),
                    'enabled' => true,
                ),
            873 =>
                array(
                    'id' => '874',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DOWARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10900345',
                        ),
                    'enabled' => true,
                ),
            874 =>
                array(
                    'id' => '875',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10901128',
                        ),
                    'enabled' => true,
                ),
            875 =>
                array(
                    'id' => '876',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910043',
                        ),
                    'enabled' => true,
                ),
            876 =>
                array(
                    'id' => '877',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BAIRAGIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910135',
                        ),
                    'enabled' => true,
                ),
            877 =>
                array(
                    'id' => '878',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BALAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910164',
                        ),
                    'enabled' => true,
                ),
            878 =>
                array(
                    'id' => '879',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TAMABIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910177',
                        ),
                    'enabled' => true,
                ),
            879 =>
                array(
                    'id' => '880',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BANDAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910193',
                        ),
                    'enabled' => true,
                ),
            880 =>
                array(
                    'id' => '881',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910319',
                        ),
                    'enabled' => true,
                ),
            881 =>
                array(
                    'id' => '882',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910430',
                        ),
                    'enabled' => true,
                ),
            882 =>
                array(
                    'id' => '883',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BOALJURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910498',
                        ),
                    'enabled' => true,
                ),
            883 =>
                array(
                    'id' => '884',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAGLI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910614',
                        ),
                    'enabled' => true,
                ),
            884 =>
                array(
                    'id' => '885',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10910735',
                        ),
                    'enabled' => true,
                ),
            885 =>
                array(
                    'id' => '886',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DEWAL GRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911242',
                        ),
                    'enabled' => true,
                ),
            886 =>
                array(
                    'id' => '887',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHAKA DAKHIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911305',
                        ),
                    'enabled' => true,
                ),
            887 =>
                array(
                    'id' => '888',
                    'bank_id' => '1',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911363',
                        ),
                    'enabled' => true,
                ),
            888 =>
                array(
                    'id' => '889',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GASBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911518',
                        ),
                    'enabled' => true,
                ),
            889 =>
                array(
                    'id' => '890',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911547',
                        ),
                    'enabled' => true,
                ),
            890 =>
                array(
                    'id' => '891',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GODOWN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911576',
                        ),
                    'enabled' => true,
                ),
            891 =>
                array(
                    'id' => '892',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911600',
                        ),
                    'enabled' => true,
                ),
            892 =>
                array(
                    'id' => '893',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HARIPUR GAS FIELD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911721',
                        ),
                    'enabled' => true,
                ),
            893 =>
                array(
                    'id' => '894',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HETIMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911750',
                        ),
                    'enabled' => true,
                ),
            894 =>
                array(
                    'id' => '895',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JALALPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911871',
                        ),
                    'enabled' => true,
                ),
            895 =>
                array(
                    'id' => '896',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAKORDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911934',
                        ),
                    'enabled' => true,
                ),
            896 =>
                array(
                    'id' => '897',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10911992',
                        ),
                    'enabled' => true,
                ),
            897 =>
                array(
                    'id' => '898',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAZIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912146',
                        ),
                    'enabled' => true,
                ),
            898 =>
                array(
                    'id' => '899',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KUCHAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912320',
                        ),
                    'enabled' => true,
                ),
            899 =>
                array(
                    'id' => '900',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912470',
                        ),
                    'enabled' => true,
                ),
            900 =>
                array(
                    'id' => '901',
                    'bank_id' => '1',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912504',
                        ),
                    'enabled' => true,
                ),
            901 =>
                array(
                    'id' => '902',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MATHIURA(EIDGHA)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912562',
                        ),
                    'enabled' => true,
                ),
            902 =>
                array(
                    'id' => '903',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RADHANAGAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912920',
                        ),
                    'enabled' => true,
                ),
            903 =>
                array(
                    'id' => '904',
                    'bank_id' => '1',
                    'bank_branch_name' => 'RAMDHA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10912988',
                        ),
                    'enabled' => true,
                ),
            904 =>
                array(
                    'id' => '905',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SALUTIKAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10913132',
                        ),
                    'enabled' => true,
                ),
            905 =>
                array(
                    'id' => '906',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SARAKAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10913161',
                        ),
                    'enabled' => true,
                ),
            906 =>
                array(
                    'id' => '907',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10913408',
                        ),
                    'enabled' => true,
                ),
            907 =>
                array(
                    'id' => '908',
                    'bank_id' => '1',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10913466',
                        ),
                    'enabled' => true,
                ),
            908 =>
                array(
                    'id' => '909',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SUBID BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10913495',
                        ),
                    'enabled' => true,
                ),
            909 =>
                array(
                    'id' => '910',
                    'bank_id' => '1',
                    'bank_branch_name' => 'UMARPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10914007',
                        ),
                    'enabled' => true,
                ),
            910 =>
                array(
                    'id' => '911',
                    'bank_id' => '1',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10914157',
                        ),
                    'enabled' => true,
                ),
            911 =>
                array(
                    'id' => '912',
                    'bank_id' => '1',
                    'bank_branch_name' => 'AISHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10930049',
                        ),
                    'enabled' => true,
                ),
            912 =>
                array(
                    'id' => '913',
                    'bank_id' => '1',
                    'bank_branch_name' => 'CHAPRI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10930065',
                        ),
                    'enabled' => true,
                ),
            913 =>
                array(
                    'id' => '914',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BASAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10930373',
                        ),
                    'enabled' => true,
                ),
            914 =>
                array(
                    'id' => '915',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BHUANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10930465',
                        ),
                    'enabled' => true,
                ),
            915 =>
                array(
                    'id' => '916',
                    'bank_id' => '1',
                    'bank_branch_name' => 'DHUBURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10930731',
                        ),
                    'enabled' => true,
                ),
            916 =>
                array(
                    'id' => '917',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GHATAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10930915',
                        ),
                    'enabled' => true,
                ),
            917 =>
                array(
                    'id' => '918',
                    'bank_id' => '1',
                    'bank_branch_name' => 'GOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931006',
                        ),
                    'enabled' => true,
                ),
            918 =>
                array(
                    'id' => '919',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HEMNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931156',
                        ),
                    'enabled' => true,
                ),
            919 =>
                array(
                    'id' => '920',
                    'bank_id' => '1',
                    'bank_branch_name' => 'JAMURKI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931185',
                        ),
                    'enabled' => true,
                ),
            920 =>
                array(
                    'id' => '921',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KANCHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931330',
                        ),
                    'enabled' => true,
                ),
            921 =>
                array(
                    'id' => '922',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KARATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931369',
                        ),
                    'enabled' => true,
                ),
            922 =>
                array(
                    'id' => '923',
                    'bank_id' => '1',
                    'bank_branch_name' => 'KAWALJANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931398',
                        ),
                    'enabled' => true,
                ),
            923 =>
                array(
                    'id' => '924',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MADHUPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931480',
                        ),
                    'enabled' => true,
                ),
            924 =>
                array(
                    'id' => '925',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931514',
                        ),
                    'enabled' => true,
                ),
            925 =>
                array(
                    'id' => '926',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MIRZAPUR CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931543',
                        ),
                    'enabled' => true,
                ),
            926 =>
                array(
                    'id' => '927',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MOHERA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931635',
                        ),
                    'enabled' => true,
                ),
            927 =>
                array(
                    'id' => '928',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MYMENSINGH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931664',
                        ),
                    'enabled' => true,
                ),
            928 =>
                array(
                    'id' => '929',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NAGARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931693',
                        ),
                    'enabled' => true,
                ),
            929 =>
                array(
                    'id' => '930',
                    'bank_id' => '1',
                    'bank_branch_name' => 'NALUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10931727',
                        ),
                    'enabled' => true,
                ),
            930 =>
                array(
                    'id' => '931',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SALIMABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10932142',
                        ),
                    'enabled' => true,
                ),
            931 =>
                array(
                    'id' => '932',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SHAKHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10932205',
                        ),
                    'enabled' => true,
                ),
            932 =>
                array(
                    'id' => '933',
                    'bank_id' => '1',
                    'bank_branch_name' => 'SURUZ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10932263',
                        ),
                    'enabled' => true,
                ),
            933 =>
                array(
                    'id' => '934',
                    'bank_id' => '1',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10932292',
                        ),
                    'enabled' => true,
                ),
            934 =>
                array(
                    'id' => '935',
                    'bank_id' => '1',
                    'bank_branch_name' => 'WARSHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10932418',
                        ),
                    'enabled' => true,
                ),
            935 =>
                array(
                    'id' => '936',
                    'bank_id' => '1',
                    'bank_branch_name' => 'BEGUNBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10940134',
                        ),
                    'enabled' => true,
                ),
            936 =>
                array(
                    'id' => '937',
                    'bank_id' => '1',
                    'bank_branch_name' => 'HARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10940468',
                        ),
                    'enabled' => true,
                ),
            937 =>
                array(
                    'id' => '938',
                    'bank_id' => '1',
                    'bank_branch_name' => 'MUNSHIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10940671',
                        ),
                    'enabled' => true,
                ),
            938 =>
                array(
                    'id' => '939',
                    'bank_id' => '1',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '10940976',
                        ),
                    'enabled' => true,
                ),
            939 =>
                array(
                    'id' => '940',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MONGLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15010948',
                        ),
                    'enabled' => true,
                ),
            940 =>
                array(
                    'id' => '941',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MORELGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15011039',
                        ),
                    'enabled' => true,
                ),
            941 =>
                array(
                    'id' => '942',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BARGUNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15040134',
                        ),
                    'enabled' => true,
                ),
            942 =>
                array(
                    'id' => '943',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BANARI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15060251',
                        ),
                    'enabled' => true,
                ),
            943 =>
                array(
                    'id' => '944',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15060280',
                        ),
                    'enabled' => true,
                ),
            944 =>
                array(
                    'id' => '945',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15090100',
                        ),
                    'enabled' => true,
                ),
            945 =>
                array(
                    'id' => '946',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15100379',
                        ),
                    'enabled' => true,
                ),
            946 =>
                array(
                    'id' => '947',
                    'bank_id' => '2',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15102748',
                        ),
                    'enabled' => true,
                ),
            947 =>
                array(
                    'id' => '948',
                    'bank_id' => '2',
                    'bank_branch_name' => 'AKHAURA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15120054',
                        ),
                    'enabled' => true,
                ),
            948 =>
                array(
                    'id' => '949',
                    'bank_id' => '2',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15120104',
                        ),
                    'enabled' => true,
                ),
            949 =>
                array(
                    'id' => '950',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15120438',
                        ),
                    'enabled' => true,
                ),
            950 =>
                array(
                    'id' => '951',
                    'bank_id' => '2',
                    'bank_branch_name' => 'KUTI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15121095',
                        ),
                    'enabled' => true,
                ),
            951 =>
                array(
                    'id' => '952',
                    'bank_id' => '2',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15121361',
                        ),
                    'enabled' => true,
                ),
            952 =>
                array(
                    'id' => '953',
                    'bank_id' => '2',
                    'bank_branch_name' => 'TANTAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15121879',
                        ),
                    'enabled' => true,
                ),
            953 =>
                array(
                    'id' => '954',
                    'bank_id' => '2',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15130886',
                        ),
                    'enabled' => true,
                ),
            954 =>
                array(
                    'id' => '955',
                    'bank_id' => '2',
                    'bank_branch_name' => 'RAHIMANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15131698',
                        ),
                    'enabled' => true,
                ),
            955 =>
                array(
                    'id' => '956',
                    'bank_id' => '2',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15150132',
                        ),
                    'enabled' => true,
                ),
            956 =>
                array(
                    'id' => '957',
                    'bank_id' => '2',
                    'bank_branch_name' => 'PADUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15150237',
                        ),
                    'enabled' => true,
                ),
            957 =>
                array(
                    'id' => '958',
                    'bank_id' => '2',
                    'bank_branch_name' => 'AMAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15150253',
                        ),
                    'enabled' => true,
                ),
            958 =>
                array(
                    'id' => '959',
                    'bank_id' => '2',
                    'bank_branch_name' => 'AZADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15150732',
                        ),
                    'enabled' => true,
                ),
            959 =>
                array(
                    'id' => '960',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BANDARTILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15150945',
                        ),
                    'enabled' => true,
                ),
            960 =>
                array(
                    'id' => '961',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BHATIARY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15151210',
                        ),
                    'enabled' => true,
                ),
            961 =>
                array(
                    'id' => '962',
                    'bank_id' => '2',
                    'bank_branch_name' => 'CHAKBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15151728',
                        ),
                    'enabled' => true,
                ),
            962 =>
                array(
                    'id' => '963',
                    'bank_id' => '2',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15153168',
                        ),
                    'enabled' => true,
                ),
            963 =>
                array(
                    'id' => '964',
                    'bank_id' => '2',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15153221',
                        ),
                    'enabled' => true,
                ),
            964 =>
                array(
                    'id' => '965',
                    'bank_id' => '2',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15153647',
                        ),
                    'enabled' => true,
                ),
            965 =>
                array(
                    'id' => '966',
                    'bank_id' => '2',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15153739',
                        ),
                    'enabled' => true,
                ),
            966 =>
                array(
                    'id' => '967',
                    'bank_id' => '2',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15154275',
                        ),
                    'enabled' => true,
                ),
            967 =>
                array(
                    'id' => '968',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15155324',
                        ),
                    'enabled' => true,
                ),
            968 =>
                array(
                    'id' => '969',
                    'bank_id' => '2',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15155803',
                        ),
                    'enabled' => true,
                ),
            969 =>
                array(
                    'id' => '970',
                    'bank_id' => '2',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15156136',
                        ),
                    'enabled' => true,
                ),
            970 =>
                array(
                    'id' => '971',
                    'bank_id' => '2',
                    'bank_branch_name' => 'SHIBERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15157306',
                        ),
                    'enabled' => true,
                ),
            971 =>
                array(
                    'id' => '972',
                    'bank_id' => '2',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15157519',
                        ),
                    'enabled' => true,
                ),
            972 =>
                array(
                    'id' => '973',
                    'bank_id' => '2',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15180199',
                        ),
                    'enabled' => true,
                ),
            973 =>
                array(
                    'id' => '974',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BARURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15190497',
                        ),
                    'enabled' => true,
                ),
            974 =>
                array(
                    'id' => '975',
                    'bank_id' => '2',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15191159',
                        ),
                    'enabled' => true,
                ),
            975 =>
                array(
                    'id' => '976',
                    'bank_id' => '2',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15191425',
                        ),
                    'enabled' => true,
                ),
            976 =>
                array(
                    'id' => '977',
                    'bank_id' => '2',
                    'bank_branch_name' => 'GALLAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15192024',
                        ),
                    'enabled' => true,
                ),
            977 =>
                array(
                    'id' => '978',
                    'bank_id' => '2',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15192116',
                        ),
                    'enabled' => true,
                ),
            978 =>
                array(
                    'id' => '979',
                    'bank_id' => '2',
                    'bank_branch_name' => 'NANGALKOT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15193252',
                        ),
                    'enabled' => true,
                ),
            979 =>
                array(
                    'id' => '980',
                    'bank_id' => '2',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15220259',
                        ),
                    'enabled' => true,
                ),
            980 =>
                array(
                    'id' => '981',
                    'bank_id' => '2',
                    'bank_branch_name' => 'EIDGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15220404',
                        ),
                    'enabled' => true,
                ),
            981 =>
                array(
                    'id' => '982',
                    'bank_id' => '2',
                    'bank_branch_name' => 'TEKNAF',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15220912',
                        ),
                    'enabled' => true,
                ),
            982 =>
                array(
                    'id' => '983',
                    'bank_id' => '2',
                    'bank_branch_name' => 'ABDULLAHPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260051',
                        ),
                    'enabled' => true,
                ),
            983 =>
                array(
                    'id' => '984',
                    'bank_id' => '2',
                    'bank_branch_name' => 'SONARGAON JANAPATH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260080',
                        ),
                    'enabled' => true,
                ),
            984 =>
                array(
                    'id' => '985',
                    'bank_id' => '2',
                    'bank_branch_name' => 'KATHGORA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260093',
                        ),
                    'enabled' => true,
                ),
            985 =>
                array(
                    'id' => '986',
                    'bank_id' => '2',
                    'bank_branch_name' => 'AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260130',
                        ),
                    'enabled' => true,
                ),
            986 =>
                array(
                    'id' => '987',
                    'bank_id' => '2',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260435',
                        ),
                    'enabled' => true,
                ),
            987 =>
                array(
                    'id' => '988',
                    'bank_id' => '2',
                    'bank_branch_name' => 'KHILKHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260743',
                        ),
                    'enabled' => true,
                ),
            988 =>
                array(
                    'id' => '989',
                    'bank_id' => '2',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15260914',
                        ),
                    'enabled' => true,
                ),
            989 =>
                array(
                    'id' => '990',
                    'bank_id' => '2',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15261184',
                        ),
                    'enabled' => true,
                ),
            990 =>
                array(
                    'id' => '991',
                    'bank_id' => '2',
                    'bank_branch_name' => 'AZAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15261250',
                        ),
                    'enabled' => true,
                ),
            991 =>
                array(
                    'id' => '992',
                    'bank_id' => '2',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15261726',
                        ),
                    'enabled' => true,
                ),
            992 =>
                array(
                    'id' => '993',
                    'bank_id' => '2',
                    'bank_branch_name' => 'HAZARIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15261968',
                        ),
                    'enabled' => true,
                ),
            993 =>
                array(
                    'id' => '994',
                    'bank_id' => '2',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15262059',
                        ),
                    'enabled' => true,
                ),
            994 =>
                array(
                    'id' => '995',
                    'bank_id' => '2',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15262538',
                        ),
                    'enabled' => true,
                ),
            995 =>
                array(
                    'id' => '996',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15262875',
                        ),
                    'enabled' => true,
                ),
            996 =>
                array(
                    'id' => '997',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15262983',
                        ),
                    'enabled' => true,
                ),
            997 =>
                array(
                    'id' => '998',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MIRPUR SECTION-10',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15263137',
                        ),
                    'enabled' => true,
                ),
            998 =>
                array(
                    'id' => '999',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15263195',
                        ),
                    'enabled' => true,
                ),
            999 =>
                array(
                    'id' => '1000',
                    'bank_id' => '2',
                    'bank_branch_name' => 'MOHAMMADPUR KRISHI MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '15263379',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
