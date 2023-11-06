<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch2Seeder extends Seeder
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
                'id' => '1001',
                'bank_id' => '2',
                'name' => 'NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15263429',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '1002',
                'bank_id' => '2',
                'name' => 'NEW ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15263490',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '1003',
                'bank_id' => '2',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '15263582',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '1004',
                'bank_id' => '2',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '15263616',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '1005',
                'bank_id' => '2',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '15263708',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '1006',
                'bank_id' => '2',
                'name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '15263911',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '1007',
                'bank_id' => '2',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '15264307',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '1008',
                'bank_id' => '2',
                'name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '15264699',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '1009',
                'bank_id' => '2',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '15270009',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '1010',
                'bank_id' => '2',
                'name' => 'RUHITPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15270054',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '1011',
                'bank_id' => '2',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15270346',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '1012',
                'bank_id' => '2',
                'name' => 'CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '15271390',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '1013',
                'bank_id' => '2',
                'name' => 'KOLATIA SME',
                'bank_branch_data' => [
                    'routing_no' => '15271495',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '1014',
                'bank_id' => '2',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '15271903',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '1015',
                'bank_id' => '2',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '15272681',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '1016',
                'bank_id' => '2',
                'name' => 'HEAD OFFICE CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '15272694',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '1017',
                'bank_id' => '2',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '15272986',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '1018',
                'bank_id' => '2',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '15273222',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '1019',
                'bank_id' => '2',
                'name' => 'SOUTH JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '15273248',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '1020',
                'bank_id' => '2',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15273464',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '1021',
                'bank_id' => '2',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '15273585',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '1022',
                'bank_id' => '2',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15273648',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '1023',
                'bank_id' => '2',
                'name' => 'KONAPARA',
                'bank_branch_data' => [
                    'routing_no' => '15273743',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '1024',
                'bank_id' => '2',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '15274247',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '1025',
                'bank_id' => '2',
                'name' => 'MOUCHAK MARKET',
                'bank_branch_data' => [
                    'routing_no' => '15274397',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '1026',
                'bank_id' => '2',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15274421',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '1027',
                'bank_id' => '2',
                'name' => 'NANDIPARA',
                'bank_branch_data' => [
                    'routing_no' => '15274605',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '1028',
                'bank_id' => '2',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '15274726',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '1029',
                'bank_id' => '2',
                'name' => 'NORTH SOUTH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15275112',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '1030',
                'bank_id' => '2',
                'name' => 'VIP ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15276858',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '1031',
                'bank_id' => '2',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '15280673',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '1032',
                'bank_id' => '2',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '15290526',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '1033',
                'bank_id' => '2',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '15300524',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '1034',
                'bank_id' => '2',
                'name' => 'PALASHBARI',
                'bank_branch_data' => [
                    'routing_no' => '15321095',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '1035',
                'bank_id' => '2',
                'name' => 'BARMI',
                'bank_branch_data' => [
                    'routing_no' => '15330086',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '1036',
                'bank_id' => '2',
                'name' => 'FULBARI',
                'bank_branch_data' => [
                    'routing_no' => '15330099',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '1037',
                'bank_id' => '2',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '15330523',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '1038',
                'bank_id' => '2',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '15330736',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '1039',
                'bank_id' => '2',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '15330794',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '1040',
                'bank_id' => '2',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '15330886',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '1041',
                'bank_id' => '2',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '15331630',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '1042',
                'bank_id' => '2',
                'name' => 'MADHABPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '15360898',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '1043',
                'bank_id' => '2',
                'name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '15410285',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '1044',
                'bank_id' => '2',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '15410948',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '1045',
                'bank_id' => '2',
                'name' => 'MONIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '15411518',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '1046',
                'bank_id' => '2',
                'name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'routing_no' => '15420312',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '1047',
                'bank_id' => '2',
                'name' => 'CHUK NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '15470559',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '1048',
                'bank_id' => '2',
                'name' => 'GALLAMARI',
                'bank_branch_data' => [
                    'routing_no' => '15470883',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '1049',
                'bank_id' => '2',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '15471545',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '1050',
                'bank_id' => '2',
                'name' => 'VAIRAB',
                'bank_branch_data' => [
                    'routing_no' => '15481243',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '1051',
                'bank_id' => '2',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '15500940',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '1052',
                'bank_id' => '2',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '15510730',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '1053',
                'bank_id' => '2',
                'name' => 'MOSTAFAPUR',
                'bank_branch_data' => [
                    'routing_no' => '15540555',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '1054',
                'bank_id' => '2',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '15550558',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '1055',
                'bank_id' => '2',
                'name' => 'CENTRAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '15580281',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '1056',
                'bank_id' => '2',
                'name' => 'RUPASHPUR',
                'bank_branch_data' => [
                    'routing_no' => '15581422',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '1057',
                'bank_id' => '2',
                'name' => 'BHAGYAKUL',
                'bank_branch_data' => [
                    'routing_no' => '15590318',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '1058',
                'bank_id' => '2',
                'name' => 'RAMPAL',
                'bank_branch_data' => [
                    'routing_no' => '15591175',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '1059',
                'bank_id' => '2',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '15611750',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '1060',
                'bank_id' => '2',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '15641096',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '1061',
                'bank_id' => '2',
                'name' => 'BANDAR SME',
                'bank_branch_data' => [
                    'routing_no' => '15670175',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '1062',
                'bank_id' => '2',
                'name' => 'GOUCHIA',
                'bank_branch_data' => [
                    'routing_no' => '15670212',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '1063',
                'bank_id' => '2',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15671187',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '1064',
                'bank_id' => '2',
                'name' => 'NAYAPUR',
                'bank_branch_data' => [
                    'routing_no' => '15671224',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '1065',
                'bank_id' => '2',
                'name' => 'PAGLA',
                'bank_branch_data' => [
                    'routing_no' => '15671303',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '1066',
                'bank_id' => '2',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '15680673',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '1067',
                'bank_id' => '2',
                'name' => 'PANCHDONA SME',
                'bank_branch_data' => [
                    'routing_no' => '15680860',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '1068',
                'bank_id' => '2',
                'name' => 'VELA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '15681393',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '1069',
                'bank_id' => '2',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '15691091',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '1070',
                'bank_id' => '2',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '15700258',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '1071',
                'bank_id' => '2',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '15720733',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '1072',
                'bank_id' => '2',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '15730794',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '1073',
                'bank_id' => '2',
                'name' => 'BASHURHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '15750266',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '1074',
                'bank_id' => '2',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '15750679',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '1075',
                'bank_id' => '2',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '15761789',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '1076',
                'bank_id' => '2',
                'name' => 'ALIPUR',
                'bank_branch_data' => [
                    'routing_no' => '15780052',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '1077',
                'bank_id' => '2',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '15781093',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '1078',
                'bank_id' => '2',
                'name' => 'BHANDARIA',
                'bank_branch_data' => [
                    'routing_no' => '15790134',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '1079',
                'bank_id' => '2',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '15790521',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '1080',
                'bank_id' => '2',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '15811934',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '1081',
                'bank_id' => '2',
                'name' => 'BADARGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '15850179',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '1082',
                'bank_id' => '2',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '15851457',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '1083',
                'bank_id' => '2',
                'name' => 'KAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '15860419',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '1084',
                'bank_id' => '2',
                'name' => 'JHAUDANGA',
                'bank_branch_data' => [
                    'routing_no' => '15870559',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '1085',
                'bank_id' => '2',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '15871095',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '1086',
                'bank_id' => '2',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '15881906',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '1087',
                'bank_id' => '2',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '15910048',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '1088',
                'bank_id' => '2',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15910314',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '1089',
                'bank_id' => '2',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '15912509',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '1090',
                'bank_id' => '2',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '15914152',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '1091',
                'bank_id' => '2',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '15932297',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '1092',
                'bank_id' => '3',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '20060288',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '1093',
                'bank_id' => '3',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '20100377',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '1094',
                'bank_id' => '3',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20120102',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '1095',
                'bank_id' => '3',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '20120436',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '1096',
                'bank_id' => '3',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '20130318',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '1097',
                'bank_id' => '3',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '20150130',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '1098',
                'bank_id' => '3',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '20150493',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '1099',
                'bank_id' => '3',
                'name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '20150798',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '1100',
                'bank_id' => '3',
                'name' => 'BANSHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '20150972',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '1101',
                'bank_id' => '3',
                'name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '20151300',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '1102',
                'bank_id' => '3',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '20151489',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '1103',
                'bank_id' => '3',
                'name' => 'C.E.P.Z.',
                'bank_branch_data' => [
                    'routing_no' => '20151571',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '1104',
                'bank_id' => '3',
                'name' => 'CHATARI',
                'bank_branch_data' => [
                    'routing_no' => '20151876',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '1105',
                'bank_id' => '3',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20151939',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '1106',
                'bank_id' => '3',
                'name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '20152446',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '1107',
                'bank_id' => '3',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '20153229',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '1108',
                'bank_id' => '3',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '20153645',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '1109',
                'bank_id' => '3',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20154273',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '1110',
                'bank_id' => '3',
                'name' => 'KHULSHI',
                'bank_branch_data' => [
                    'routing_no' => '20154365',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '1111',
                'bank_id' => '3',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '20154660',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '1112',
                'bank_id' => '3',
                'name' => 'MOMIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '20155269',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '1113',
                'bank_id' => '3',
                'name' => 'NAZU MEA HAT',
                'bank_branch_data' => [
                    'routing_no' => '20155627',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '1114',
                'bank_id' => '3',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '20155922',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '1115',
                'bank_id' => '3',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '20156134',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '1116',
                'bank_id' => '3',
                'name' => 'PORT CONNECTING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '20156255',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '1117',
                'bank_id' => '3',
                'name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '20156918',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '1118',
                'bank_id' => '3',
                'name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '20157391',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '1119',
                'bank_id' => '3',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '20157517',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '1120',
                'bank_id' => '3',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '20191157',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '1121',
                'bank_id' => '3',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '20220165',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '1122',
                'bank_id' => '3',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20220257',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '1123',
                'bank_id' => '3',
                'name' => 'TEKNAF',
                'bank_branch_data' => [
                    'routing_no' => '20220910',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '1124',
                'bank_id' => '3',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '20260433',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '1125',
                'bank_id' => '3',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '20260554',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '1126',
                'bank_id' => '3',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '20261182',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '1127',
                'bank_id' => '3',
                'name' => 'GARIB-E-NEWAZ AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '20261645',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '1128',
                'bank_id' => '3',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '20261724',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '1129',
                'bank_id' => '3',
                'name' => 'KALAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '20262444',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '1130',
                'bank_id' => '3',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20262536',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '1131',
                'bank_id' => '3',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '20262981',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '1132',
                'bank_id' => '3',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '20263193',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '1133',
                'bank_id' => '3',
                'name' => 'NEW ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '20263498',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '1134',
                'bank_id' => '3',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '20263706',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '1135',
                'bank_id' => '3',
                'name' => 'ROKEYA SHARANI',
                'bank_branch_data' => [
                    'routing_no' => '20264000',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '1136',
                'bank_id' => '3',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '20264097',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '1137',
                'bank_id' => '3',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '20264305',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '1138',
                'bank_id' => '3',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '20264639',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '1139',
                'bank_id' => '3',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '20270007',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '1140',
                'bank_id' => '3',
                'name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '20270649',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '1141',
                'bank_id' => '3',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '20272689',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '1142',
                'bank_id' => '3',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20272805',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '1143',
                'bank_id' => '3',
                'name' => 'ISLAMI BANKING(KAKRAIL)',
                'bank_branch_data' => [
                    'routing_no' => '20272926',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '1144',
                'bank_id' => '3',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '20272984',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '1145',
                'bank_id' => '3',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '20273220',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '1146',
                'bank_id' => '3',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '20273288',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '1147',
                'bank_id' => '3',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '20273370',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '1148',
                'bank_id' => '3',
                'name' => 'KALATIA',
                'bank_branch_data' => [
                    'routing_no' => '20273433',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '1149',
                'bank_id' => '3',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '20273583',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '1150',
                'bank_id' => '3',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '20273941',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '1151',
                'bank_id' => '3',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '20274245',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '1152',
                'bank_id' => '3',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '20274724',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '1153',
                'bank_id' => '3',
                'name' => 'NORTH SOUTH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '20275110',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '1154',
                'bank_id' => '3',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '20275352',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '1155',
                'bank_id' => '3',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '20277097',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '1156',
                'bank_id' => '3',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '20280671',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '1157',
                'bank_id' => '3',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '20290524',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '1158',
                'bank_id' => '3',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '20300522',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '1159',
                'bank_id' => '3',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20330226',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '1160',
                'bank_id' => '3',
                'name' => 'CHANDRA',
                'bank_branch_data' => [
                    'routing_no' => '20330400',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '1161',
                'bank_id' => '3',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '20331638',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '1162',
                'bank_id' => '3',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20360612',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '1163',
                'bank_id' => '3',
                'name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '20360883',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '1164',
                'bank_id' => '3',
                'name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '20410283',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '1165',
                'bank_id' => '3',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '20410946',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '1166',
                'bank_id' => '3',
                'name' => 'JHIKARGACHA',
                'bank_branch_data' => [
                    'routing_no' => '20411095',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '1167',
                'bank_id' => '3',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '20440640',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '1168',
                'bank_id' => '3',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '20471543',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '1169',
                'bank_id' => '3',
                'name' => 'AUSTAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '20480071',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '1170',
                'bank_id' => '3',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20480226',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '1171',
                'bank_id' => '3',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '20500948',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '1172',
                'bank_id' => '3',
                'name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '20520465',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '1173',
                'bank_id' => '3',
                'name' => 'PARIL',
                'bank_branch_data' => [
                    'routing_no' => '20560083',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '1174',
                'bank_id' => '3',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20581183',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '1175',
                'bank_id' => '3',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '20581725',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '1176',
                'bank_id' => '3',
                'name' => 'MYMENSINGH BUSINESS CENTER',
                'bank_branch_data' => [
                    'routing_no' => '20611787',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '1177',
                'bank_id' => '3',
                'name' => 'SEEDSTORE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '20612094',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '1178',
                'bank_id' => '3',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '20641186',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '1179',
                'bank_id' => '3',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '20670223',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '1180',
                'bank_id' => '3',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20671185',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '1181',
                'bank_id' => '3',
                'name' => 'PAGLA',
                'bank_branch_data' => [
                    'routing_no' => '20671301',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '1182',
                'bank_id' => '3',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '20680671',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '1183',
                'bank_id' => '3',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20700256',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '1184',
                'bank_id' => '3',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '20730792',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '1185',
                'bank_id' => '3',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '20750677',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '1186',
                'bank_id' => '3',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '20761787',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '1187',
                'bank_id' => '3',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '20811932',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '1188',
                'bank_id' => '3',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '20851455',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '1189',
                'bank_id' => '3',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '20871093',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '1190',
                'bank_id' => '3',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '20881870',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '1191',
                'bank_id' => '3',
                'name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '20900227',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '1192',
                'bank_id' => '3',
                'name' => 'BOROIKANDI',
                'bank_branch_data' => [
                    'routing_no' => '20910525',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '1193',
                'bank_id' => '3',
                'name' => 'DARGAH GATE',
                'bank_branch_data' => [
                    'routing_no' => '20911090',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '1194',
                'bank_id' => '3',
                'name' => 'GARDEN TOWER',
                'bank_branch_data' => [
                    'routing_no' => '20911487',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '1195',
                'bank_id' => '3',
                'name' => 'MODHUBAN SUPER MARKET',
                'bank_branch_data' => [
                    'routing_no' => '20912657',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '1196',
                'bank_id' => '3',
                'name' => 'TAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '20913827',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '1197',
                'bank_id' => '3',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '20932295',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '1198',
                'bank_id' => '4',
                'name' => 'BARISAL CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25060009',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '1199',
                'bank_id' => '4',
                'name' => 'BARISAL DAB',
                'bank_branch_data' => [
                    'routing_no' => '25061116',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '1200',
                'bank_id' => '4',
                'name' => 'BARISAL PAD',
                'bank_branch_data' => [
                    'routing_no' => '25062223',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '1201',
                'bank_id' => '4',
                'name' => 'BARISAL BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25068885',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '1202',
                'bank_id' => '4',
                'name' => 'BOGRA CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25100006',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '1203',
                'bank_id' => '4',
                'name' => 'BOGRA DAB',
                'bank_branch_data' => [
                    'routing_no' => '25101113',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '1204',
                'bank_id' => '4',
                'name' => 'BOGRA PAD',
                'bank_branch_data' => [
                    'routing_no' => '25102220',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '1205',
                'bank_id' => '4',
                'name' => 'BOGRA BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25108882',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '1206',
                'bank_id' => '4',
                'name' => 'CHITTAGONG CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25150001',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '1207',
                'bank_id' => '4',
                'name' => 'CHITTAGONG DAB',
                'bank_branch_data' => [
                    'routing_no' => '25151118',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '1208',
                'bank_id' => '4',
                'name' => 'CHITTAGONG PAD',
                'bank_branch_data' => [
                    'routing_no' => '25152225',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '1209',
                'bank_id' => '4',
                'name' => 'CHITTAGONG BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25158887',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '1210',
                'bank_id' => '4',
                'name' => 'DHAKA CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25270002',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '1211',
                'bank_id' => '4',
                'name' => 'MOTIJHEEL DAB',
                'bank_branch_data' => [
                    'routing_no' => '25271119',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '1212',
                'bank_id' => '4',
                'name' => 'MOTIJHEEL PAD',
                'bank_branch_data' => [
                    'routing_no' => '25272226',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '1213',
                'bank_id' => '4',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '25272684',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '1214',
                'bank_id' => '4',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '25275928',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '1215',
                'bank_id' => '4',
                'name' => 'MOTIJHEEL BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25278888',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '1216',
                'bank_id' => '4',
                'name' => 'MIRPUR BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25279995',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '1217',
                'bank_id' => '4',
                'name' => 'KHULNA CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25470002',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '1218',
                'bank_id' => '4',
                'name' => 'KHULNA DAB',
                'bank_branch_data' => [
                    'routing_no' => '25471119',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '1219',
                'bank_id' => '4',
                'name' => 'KHULNA PAD',
                'bank_branch_data' => [
                    'routing_no' => '25472226',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '1220',
                'bank_id' => '4',
                'name' => 'KHULNA BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25478888',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '1221',
                'bank_id' => '4',
                'name' => 'RAJSHAHI CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25810004',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '1222',
                'bank_id' => '4',
                'name' => 'RAJSHAHI DAB',
                'bank_branch_data' => [
                    'routing_no' => '25811111',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '1223',
                'bank_id' => '4',
                'name' => 'RAJSHAHI PAD',
                'bank_branch_data' => [
                    'routing_no' => '25812228',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '1224',
                'bank_id' => '4',
                'name' => 'RAJSHAHI BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25819997',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '1225',
                'bank_id' => '4',
                'name' => 'RANGPUR CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25850006',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '1226',
                'bank_id' => '4',
                'name' => 'RANGPUR DAB',
                'bank_branch_data' => [
                    'routing_no' => '25851113',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '1227',
                'bank_id' => '4',
                'name' => 'RANGPUR PAD',
                'bank_branch_data' => [
                    'routing_no' => '25852220',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '1228',
                'bank_id' => '4',
                'name' => 'RANGPUR BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25858882',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '1229',
                'bank_id' => '4',
                'name' => 'SYLHET CLEARING HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '25910009',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '1230',
                'bank_id' => '4',
                'name' => 'SYLHET DAB',
                'bank_branch_data' => [
                    'routing_no' => '25911116',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '1231',
                'bank_id' => '4',
                'name' => 'SYLHET PAD',
                'bank_branch_data' => [
                    'routing_no' => '25912223',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '1232',
                'bank_id' => '4',
                'name' => 'SYLHET BUREAU',
                'bank_branch_data' => [
                    'routing_no' => '25918885',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '1233',
                'bank_id' => '5',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '30060281',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '1234',
                'bank_id' => '5',
                'name' => 'BATAJORE',
                'bank_branch_data' => [
                    'routing_no' => '30060373',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '1235',
                'bank_id' => '5',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '30100370',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '1236',
                'bank_id' => '5',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '30150133',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '1237',
                'bank_id' => '5',
                'name' => 'A K KHAN MOOR',
                'bank_branch_data' => [
                    'routing_no' => '30150212',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '1238',
                'bank_id' => '5',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '30151758',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '1239',
                'bank_id' => '5',
                'name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '30152449',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '1240',
                'bank_id' => '5',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '30153648',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '1241',
                'bank_id' => '5',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '30154276',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '1242',
                'bank_id' => '5',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '30154663',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '1243',
                'bank_id' => '5',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '30155325',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '1244',
                'bank_id' => '5',
                'name' => 'KANGSHANAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30190272',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '1245',
                'bank_id' => '5',
                'name' => 'COMILLA ZILA SCHOOL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '30191363',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '1246',
                'bank_id' => '5',
                'name' => 'KATHGORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30260094',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '1247',
                'bank_id' => '5',
                'name' => 'DHAMRAI',
                'bank_branch_data' => [
                    'routing_no' => '30261156',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '1248',
                'bank_id' => '5',
                'name' => 'GREEN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '30261693',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '1249',
                'bank_id' => '5',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '30261727',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '1250',
                'bank_id' => '5',
                'name' => 'JHIGATOLA',
                'bank_branch_data' => [
                    'routing_no' => '30262326',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '1251',
                'bank_id' => '5',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '30262984',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '1252',
                'bank_id' => '5',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '30263583',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '1253',
                'bank_id' => '5',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '30263709',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '1254',
                'bank_id' => '5',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '30264090',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '1255',
                'bank_id' => '5',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '30264632',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '1256',
                'bank_id' => '5',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '30270000',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '1257',
                'bank_id' => '5',
                'name' => 'MERAJNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '30270189',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '1258',
                'bank_id' => '5',
                'name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '30270642',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '1259',
                'bank_id' => '5',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30270826',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '1260',
                'bank_id' => '5',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '30270884',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '1261',
                'bank_id' => '5',
                'name' => 'BIJOY NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '30271096',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '1262',
                'bank_id' => '5',
                'name' => 'DHOLAIKHAL',
                'bank_branch_data' => [
                    'routing_no' => '30271841',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '1263',
                'bank_id' => '5',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '30271904',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '1264',
                'bank_id' => '5',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '30272329',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '1265',
                'bank_id' => '5',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '30272682',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '1266',
                'bank_id' => '5',
                'name' => 'KHILGAON',
                'bank_branch_data' => [
                    'routing_no' => '30273678',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '1267',
                'bank_id' => '5',
                'name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'routing_no' => '30274369',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '1268',
                'bank_id' => '5',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30274422',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '1269',
                'bank_id' => '5',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '30275355',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '1270',
                'bank_id' => '5',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '30280674',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '1271',
                'bank_id' => '5',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '30300525',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '1272',
                'bank_id' => '5',
                'name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '30330553',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '1273',
                'bank_id' => '5',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '30330795',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '1274',
                'bank_id' => '5',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '30410949',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '1275',
                'bank_id' => '5',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '30470705',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '1276',
                'bank_id' => '5',
                'name' => 'KAPILMUNI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30471304',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '1277',
                'bank_id' => '5',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '30471546',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '1278',
                'bank_id' => '5',
                'name' => 'MANDARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30510823',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '1279',
                'bank_id' => '5',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '30540701',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '1280',
                'bank_id' => '5',
                'name' => 'JURI',
                'bank_branch_data' => [
                    'routing_no' => '30580679',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '1281',
                'bank_id' => '5',
                'name' => 'SHAMSHER NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '30581607',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '1282',
                'bank_id' => '5',
                'name' => 'SEEDSTORE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '30612097',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '1283',
                'bank_id' => '5',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '30641189',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '1284',
                'bank_id' => '5',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '30671696',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '1285',
                'bank_id' => '5',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '30671759',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '1286',
                'bank_id' => '5',
                'name' => 'AHMEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '30690077',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '1287',
                'bank_id' => '5',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '30811935',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '1288',
                'bank_id' => '5',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '30913554',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '1289',
                'bank_id' => '5',
                'name' => 'BALLA',
                'bank_branch_data' => [
                    'routing_no' => '30930179',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '1290',
                'bank_id' => '6',
                'name' => 'BADHAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010049',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '1291',
                'bank_id' => '6',
                'name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35010078',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '1292',
                'bank_id' => '6',
                'name' => 'CHAKSREE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010199',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '1293',
                'bank_id' => '6',
                'name' => 'CHITALMARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010252',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '1294',
                'bank_id' => '6',
                'name' => 'C & B BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010302',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '1295',
                'bank_id' => '6',
                'name' => 'DAIBANCHAHATI',
                'bank_branch_data' => [
                    'routing_no' => '35010315',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '1296',
                'bank_id' => '6',
                'name' => 'DARGAH',
                'bank_branch_data' => [
                    'routing_no' => '35010344',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '1297',
                'bank_id' => '6',
                'name' => 'FAKIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35010465',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '1298',
                'bank_id' => '6',
                'name' => 'FALTITA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010494',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '1299',
                'bank_id' => '6',
                'name' => 'FULHATA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010528',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '1300',
                'bank_id' => '6',
                'name' => 'GAZALIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010557',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '1301',
                'bank_id' => '6',
                'name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '35010731',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '1302',
                'bank_id' => '6',
                'name' => 'KALATALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35010799',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '1303',
                'bank_id' => '6',
                'name' => 'MOLLAHAT',
                'bank_branch_data' => [
                    'routing_no' => '35010915',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '1304',
                'bank_id' => '6',
                'name' => 'MONGLA PORT',
                'bank_branch_data' => [
                    'routing_no' => '35010973',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '1305',
                'bank_id' => '6',
                'name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35011035',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '1306',
                'bank_id' => '6',
                'name' => 'RAMPAL',
                'bank_branch_data' => [
                    'routing_no' => '35011219',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '1307',
                'bank_id' => '6',
                'name' => 'RAYENDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35011248',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '1308',
                'bank_id' => '6',
                'name' => 'SONNASHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35011330',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '1309',
                'bank_id' => '6',
                'name' => 'MUKHAIT',
                'bank_branch_data' => [
                    'routing_no' => '35011369',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '1310',
                'bank_id' => '6',
                'name' => 'TOWN NAWAPARA',
                'bank_branch_data' => [
                    'routing_no' => '35011398',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '1311',
                'bank_id' => '6',
                'name' => 'ALIKADAM',
                'bank_branch_data' => [
                    'routing_no' => '35030045',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '1312',
                'bank_id' => '6',
                'name' => 'AZIZ NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35030074',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '1313',
                'bank_id' => '6',
                'name' => 'BAISHARI',
                'bank_branch_data' => [
                    'routing_no' => '35030108',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '1314',
                'bank_id' => '6',
                'name' => 'BANDARBAN',
                'bank_branch_data' => [
                    'routing_no' => '35030137',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '1315',
                'bank_id' => '6',
                'name' => 'LAMA',
                'bank_branch_data' => [
                    'routing_no' => '35030195',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '1316',
                'bank_id' => '6',
                'name' => 'NAIKHANGCHARI',
                'bank_branch_data' => [
                    'routing_no' => '35030229',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '1317',
                'bank_id' => '6',
                'name' => 'ROWANGCHARI',
                'bank_branch_data' => [
                    'routing_no' => '35030258',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '1318',
                'bank_id' => '6',
                'name' => 'RUMA',
                'bank_branch_data' => [
                    'routing_no' => '35030287',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '1319',
                'bank_id' => '6',
                'name' => 'THANCHI',
                'bank_branch_data' => [
                    'routing_no' => '35030311',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '1320',
                'bank_id' => '6',
                'name' => 'AMTALI',
                'bank_branch_data' => [
                    'routing_no' => '35040048',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '1321',
                'bank_id' => '6',
                'name' => 'AYLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35040077',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '1322',
                'bank_id' => '6',
                'name' => 'BAMNA',
                'bank_branch_data' => [
                    'routing_no' => '35040101',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '1323',
                'bank_id' => '6',
                'name' => 'BARGUNA',
                'bank_branch_data' => [
                    'routing_no' => '35040130',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '1324',
                'bank_id' => '6',
                'name' => 'BETAGI',
                'bank_branch_data' => [
                    'routing_no' => '35040222',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '1325',
                'bank_id' => '6',
                'name' => 'CHANDKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35040251',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '1326',
                'bank_id' => '6',
                'name' => 'CHARDUANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35040280',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '1327',
                'bank_id' => '6',
                'name' => 'DEWATALA',
                'bank_branch_data' => [
                    'routing_no' => '35040314',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '1328',
                'bank_id' => '6',
                'name' => 'FULJHURY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35040343',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '1329',
                'bank_id' => '6',
                'name' => 'GOURICHANNA',
                'bank_branch_data' => [
                    'routing_no' => '35040406',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '1330',
                'bank_id' => '6',
                'name' => 'HOSNABAD',
                'bank_branch_data' => [
                    'routing_no' => '35040435',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '1331',
                'bank_id' => '6',
                'name' => 'KUKUA',
                'bank_branch_data' => [
                    'routing_no' => '35040556',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '1332',
                'bank_id' => '6',
                'name' => 'LEMUA',
                'bank_branch_data' => [
                    'routing_no' => '35040585',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '1333',
                'bank_id' => '6',
                'name' => 'MOKAMIA',
                'bank_branch_data' => [
                    'routing_no' => '35040619',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '1334',
                'bank_id' => '6',
                'name' => 'PATHARGHATA',
                'bank_branch_data' => [
                    'routing_no' => '35040677',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '1335',
                'bank_id' => '6',
                'name' => 'TALTALI',
                'bank_branch_data' => [
                    'routing_no' => '35040701',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '1336',
                'bank_id' => '6',
                'name' => 'AGOILJHARA',
                'bank_branch_data' => [
                    'routing_no' => '35060073',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '1337',
                'bank_id' => '6',
                'name' => 'CHOYGRAM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35060099',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '1338',
                'bank_id' => '6',
                'name' => 'LENGUTIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35060110',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '1339',
                'bank_id' => '6',
                'name' => 'HARTA BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '35060123',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '1340',
                'bank_id' => '6',
                'name' => 'BABUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35060165',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '1341',
                'bank_id' => '6',
                'name' => 'BAISHARI',
                'bank_branch_data' => [
                    'routing_no' => '35060194',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '1342',
                'bank_id' => '6',
                'name' => 'BAKERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35060228',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '1343',
                'bank_id' => '6',
                'name' => 'BANARI PARA',
                'bank_branch_data' => [
                    'routing_no' => '35060257',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '1344',
                'bank_id' => '6',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '35060286',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '1345',
                'bank_id' => '6',
                'name' => 'BHASHANCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35060431',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '1346',
                'bank_id' => '6',
                'name' => 'GOURNADI',
                'bank_branch_data' => [
                    'routing_no' => '35060828',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '1347',
                'bank_id' => '6',
                'name' => 'HABIBPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35060910',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '1348',
                'bank_id' => '6',
                'name' => 'HIZLA',
                'bank_branch_data' => [
                    'routing_no' => '35060978',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '1349',
                'bank_id' => '6',
                'name' => 'KARFA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35061106',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '1350',
                'bank_id' => '6',
                'name' => 'KAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35061122',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '1351',
                'bank_id' => '6',
                'name' => 'KHASHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35061180',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '1352',
                'bank_id' => '6',
                'name' => 'MAHILARA',
                'bank_branch_data' => [
                    'routing_no' => '35061272',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '1353',
                'bank_id' => '6',
                'name' => 'MOHESHPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35061393',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '1354',
                'bank_id' => '6',
                'name' => 'MOULVIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35061427',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '1355',
                'bank_id' => '6',
                'name' => 'MULADI',
                'bank_branch_data' => [
                    'routing_no' => '35061456',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '1356',
                'bank_id' => '6',
                'name' => 'PATAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35061630',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '1357',
                'bank_id' => '6',
                'name' => 'RAIPASHA',
                'bank_branch_data' => [
                    'routing_no' => '35061751',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '1358',
                'bank_id' => '6',
                'name' => 'RATANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35061780',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '1359',
                'bank_id' => '6',
                'name' => 'SENERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35061906',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '1360',
                'bank_id' => '6',
                'name' => 'SHOLAK',
                'bank_branch_data' => [
                    'routing_no' => '35062055',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '1361',
                'bank_id' => '6',
                'name' => 'SUKHINILGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35062118',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '1362',
                'bank_id' => '6',
                'name' => 'TALTALI',
                'bank_branch_data' => [
                    'routing_no' => '35062147',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '1363',
                'bank_id' => '6',
                'name' => 'ULANIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35062268',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '1364',
                'bank_id' => '6',
                'name' => 'WAZIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35062297',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '1365',
                'bank_id' => '6',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '35090106',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '1366',
                'bank_id' => '6',
                'name' => 'BORHANGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35090164',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '1367',
                'bank_id' => '6',
                'name' => 'BORHANUDDIN',
                'bank_branch_data' => [
                    'routing_no' => '35090193',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '1368',
                'bank_id' => '6',
                'name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '35090227',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '1369',
                'bank_id' => '6',
                'name' => 'DAKHIN AICHABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35090319',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '1370',
                'bank_id' => '6',
                'name' => 'DAULATKHAN',
                'bank_branch_data' => [
                    'routing_no' => '35090377',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '1371',
                'bank_id' => '6',
                'name' => 'DULARHAT',
                'bank_branch_data' => [
                    'routing_no' => '35090401',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '1372',
                'bank_id' => '6',
                'name' => 'ILISHAHAT',
                'bank_branch_data' => [
                    'routing_no' => '35090469',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '1373',
                'bank_id' => '6',
                'name' => 'JANATA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35090498',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '1374',
                'bank_id' => '6',
                'name' => 'KERAMATGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35090580',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '1375',
                'bank_id' => '6',
                'name' => 'KUNJERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35090643',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '1376',
                'bank_id' => '6',
                'name' => 'LALMOHAN',
                'bank_branch_data' => [
                    'routing_no' => '35090706',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '1377',
                'bank_id' => '6',
                'name' => 'LETRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35090735',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '1378',
                'bank_id' => '6',
                'name' => 'MANGAL SIKDER',
                'bank_branch_data' => [
                    'routing_no' => '35090793',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '1379',
                'bank_id' => '6',
                'name' => 'MANPURA',
                'bank_branch_data' => [
                    'routing_no' => '35090827',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '1380',
                'bank_id' => '6',
                'name' => 'RAICHAND',
                'bank_branch_data' => [
                    'routing_no' => '35090977',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '1381',
                'bank_id' => '6',
                'name' => 'TAZUMUDDIN',
                'bank_branch_data' => [
                    'routing_no' => '35091000',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '1382',
                'bank_id' => '6',
                'name' => 'AKHAURA',
                'bank_branch_data' => [
                    'routing_no' => '35120047',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '1383',
                'bank_id' => '6',
                'name' => 'SATMORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35120089',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '1384',
                'bank_id' => '6',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35120100',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '1385',
                'bank_id' => '6',
                'name' => 'ASTAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '35120139',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '1386',
                'bank_id' => '6',
                'name' => 'AWLIABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35120168',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '1387',
                'bank_id' => '6',
                'name' => 'BAISHMOUZA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35120221',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '1388',
                'bank_id' => '6',
                'name' => 'BANCHARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35120250',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '1389',
                'bank_id' => '6',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '35120434',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '1390',
                'bank_id' => '6',
                'name' => 'CHAIARKURI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35120492',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '1391',
                'bank_id' => '6',
                'name' => 'CHANDURA',
                'bank_branch_data' => [
                    'routing_no' => '35120555',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '1392',
                'bank_id' => '6',
                'name' => 'CHARGACH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35120618',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '1393',
                'bank_id' => '6',
                'name' => 'CHATALPAR',
                'bank_branch_data' => [
                    'routing_no' => '35120647',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '1394',
                'bank_id' => '6',
                'name' => 'GOPINATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35120821',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '1395',
                'bank_id' => '6',
                'name' => 'GOSHAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35120850',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '1396',
                'bank_id' => '6',
                'name' => 'JIBANGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35120942',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '1397',
                'bank_id' => '6',
                'name' => 'KAITALA',
                'bank_branch_data' => [
                    'routing_no' => '35120971',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '1398',
                'bank_id' => '6',
                'name' => 'KALIKATCHA',
                'bank_branch_data' => [
                    'routing_no' => '35121004',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '1399',
                'bank_id' => '6',
                'name' => 'KASBA',
                'bank_branch_data' => [
                    'routing_no' => '35121033',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '1400',
                'bank_id' => '6',
                'name' => 'KUTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35121091',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '1401',
                'bank_id' => '6',
                'name' => 'LALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35121154',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '1402',
                'bank_id' => '6',
                'name' => 'LAURFATEPUR',
                'bank_branch_data' => [
                    'routing_no' => '35121183',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '1403',
                'bank_id' => '6',
                'name' => 'BISHWAROAD',
                'bank_branch_data' => [
                    'routing_no' => '35121217',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '1404',
                'bank_id' => '6',
                'name' => 'SOYFULLAHKANDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35121309',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '1405',
                'bank_id' => '6',
                'name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35121367',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '1406',
                'bank_id' => '6',
                'name' => 'NASIR NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35121396',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '1407',
                'bank_id' => '6',
                'name' => 'NURPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35121488',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '1408',
                'bank_id' => '6',
                'name' => 'SARAIL',
                'bank_branch_data' => [
                    'routing_no' => '35121604',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '1409',
                'bank_id' => '6',
                'name' => 'SATBORGA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35121691',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '1410',
                'bank_id' => '6',
                'name' => 'SHAHARPAR',
                'bank_branch_data' => [
                    'routing_no' => '35130095',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '1411',
                'bank_id' => '6',
                'name' => 'AYNATALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130103',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '1412',
                'bank_id' => '6',
                'name' => 'BAGRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130161',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '1413',
                'bank_id' => '6',
                'name' => 'BAKILA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130190',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '1414',
                'bank_id' => '6',
                'name' => 'ASHIKATI',
                'bank_branch_data' => [
                    'routing_no' => '35130282',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '1415',
                'bank_id' => '6',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '35130316',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '1416',
                'bank_id' => '6',
                'name' => 'CHANDRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130466',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '1417',
                'bank_id' => '6',
                'name' => 'CHANGARCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35130495',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '1418',
                'bank_id' => '6',
                'name' => 'CHARBHAIRABI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130529',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '1419',
                'bank_id' => '6',
                'name' => 'CHOTOSUNDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130611',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '1420',
                'bank_id' => '6',
                'name' => 'FARIDGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35130679',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '1421',
                'bank_id' => '6',
                'name' => 'GAJRABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130703',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '1422',
                'bank_id' => '6',
                'name' => 'GULBAHAR',
                'bank_branch_data' => [
                    'routing_no' => '35130824',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '1423',
                'bank_id' => '6',
                'name' => 'HAIMCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35130853',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '1424',
                'bank_id' => '6',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35130882',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '1425',
                'bank_id' => '6',
                'name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '35130916',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '1426',
                'bank_id' => '6',
                'name' => 'KAKAIRTALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35130945',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '1427',
                'bank_id' => '6',
                'name' => 'KALIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131007',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '1428',
                'bank_id' => '6',
                'name' => 'MAJHIGACHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131131',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '1429',
                'bank_id' => '6',
                'name' => 'MASTER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131157',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '1430',
                'bank_id' => '6',
                'name' => 'MATLAB',
                'bank_branch_data' => [
                    'routing_no' => '35131186',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '1431',
                'bank_id' => '6',
                'name' => 'MUNSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35131331',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '1432',
                'bank_id' => '6',
                'name' => 'NAWRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131515',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '1433',
                'bank_id' => '6',
                'name' => 'PIROJPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131636',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '1434',
                'bank_id' => '6',
                'name' => 'PURAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131665',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '1435',
                'bank_id' => '6',
                'name' => 'SACHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131810',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '1436',
                'bank_id' => '6',
                'name' => 'SHAHEB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35131960',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '1437',
                'bank_id' => '6',
                'name' => 'SHAHRASTI',
                'bank_branch_data' => [
                    'routing_no' => '35131999',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '1438',
                'bank_id' => '6',
                'name' => 'ABURHAT',
                'bank_branch_data' => [
                    'routing_no' => '35150075',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '1439',
                'bank_id' => '6',
                'name' => 'ABUTORAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35150109',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '1440',
                'bank_id' => '6',
                'name' => 'CHAITONNERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35150112',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '1441',
                'bank_id' => '6',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '35150138',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '1442',
                'bank_id' => '6',
                'name' => 'ALAMSHAH PARA MADRASHA',
                'bank_branch_data' => [
                    'routing_no' => '35150220',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '1443',
                'bank_id' => '6',
                'name' => 'ASRAF ALI CHOWDHURY HAT',
                'bank_branch_data' => [
                    'routing_no' => '35150246',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '1444',
                'bank_id' => '6',
                'name' => 'ANOWARA',
                'bank_branch_data' => [
                    'routing_no' => '35150525',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '1445',
                'bank_id' => '6',
                'name' => 'AZADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35150738',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '1446',
                'bank_id' => '6',
                'name' => 'BADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '35150767',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '1447',
                'bank_id' => '6',
                'name' => 'BAMANSUNDER DAROGA HAT',
                'bank_branch_data' => [
                    'routing_no' => '35150888',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '1448',
                'bank_id' => '6',
                'name' => 'BANSHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35150970',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '1449',
                'bank_id' => '6',
                'name' => 'BARAIYA DHALA',
                'bank_branch_data' => [
                    'routing_no' => '35151061',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '1450',
                'bank_id' => '6',
                'name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'routing_no' => '35151090',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '1451',
                'bank_id' => '6',
                'name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35151308',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '1452',
                'bank_id' => '6',
                'name' => 'BOMANGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35151337',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '1453',
                'bank_id' => '6',
                'name' => 'BUDPURA HAT',
                'bank_branch_data' => [
                    'routing_no' => '35151429',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '1454',
                'bank_id' => '6',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '35151782',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '1455',
                'bank_id' => '6',
                'name' => 'CHANDANAISH',
                'bank_branch_data' => [
                    'routing_no' => '35151816',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '1456',
                'bank_id' => '6',
                'name' => 'CHATARI',
                'bank_branch_data' => [
                    'routing_no' => '35151874',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '1457',
                'bank_id' => '6',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '35151966',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '1458',
                'bank_id' => '6',
                'name' => 'COLLEGE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35152231',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '1459',
                'bank_id' => '6',
                'name' => 'DHOPARHAT',
                'bank_branch_data' => [
                    'routing_no' => '35152536',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '1460',
                'bank_id' => '6',
                'name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '35152565',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '1461',
                'bank_id' => '6',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '35152749',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '1462',
                'bank_id' => '6',
                'name' => 'FAZILKHAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35152778',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '1463',
                'bank_id' => '6',
                'name' => 'GASUA',
                'bank_branch_data' => [
                    'routing_no' => '35152923',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '1464',
                'bank_id' => '6',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '35153227',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '1465',
                'bank_id' => '6',
                'name' => 'HEAKO',
                'bank_branch_data' => [
                    'routing_no' => '35153285',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '1466',
                'bank_id' => '6',
                'name' => 'KALIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35153856',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '1467',
                'bank_id' => '6',
                'name' => 'KAMAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35153977',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '1468',
                'bank_id' => '6',
                'name' => 'KATIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35154121',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '1469',
                'bank_id' => '6',
                'name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'routing_no' => '35154189',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '1470',
                'bank_id' => '6',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35154271',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '1471',
                'bank_id' => '6',
                'name' => 'KHODARHAT',
                'bank_branch_data' => [
                    'routing_no' => '35154334',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '1472',
                'bank_id' => '6',
                'name' => 'KUMIRA',
                'bank_branch_data' => [
                    'routing_no' => '35154455',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '1473',
                'bank_id' => '6',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '35154668',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '1474',
                'bank_id' => '6',
                'name' => 'MADAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '35154721',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '1475',
                'bank_id' => '6',
                'name' => 'NANUPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35154789',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '1476',
                'bank_id' => '6',
                'name' => 'MIRSARAI',
                'bank_branch_data' => [
                    'routing_no' => '35155054',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '1477',
                'bank_id' => '6',
                'name' => 'NAPORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35155470',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '1478',
                'bank_id' => '6',
                'name' => 'NARAYANHAT',
                'bank_branch_data' => [
                    'routing_no' => '35155504',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '1479',
                'bank_id' => '6',
                'name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35155591',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '1480',
                'bank_id' => '6',
                'name' => 'NAZU MEA HAT',
                'bank_branch_data' => [
                    'routing_no' => '35155625',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '1481',
                'bank_id' => '6',
                'name' => 'PAHARTALI CHOUMOHONI',
                'bank_branch_data' => [
                    'routing_no' => '35155959',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '1482',
                'bank_id' => '6',
                'name' => 'PANCHURIA DIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '35156079',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '1483',
                'bank_id' => '6',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35156132',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '1484',
                'bank_id' => '6',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '35156161',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '1485',
                'bank_id' => '6',
                'name' => 'POMRA',
                'bank_branch_data' => [
                    'routing_no' => '35156190',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '1486',
                'bank_id' => '6',
                'name' => 'RANGUNIA',
                'bank_branch_data' => [
                    'routing_no' => '35156408',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '1487',
                'bank_id' => '6',
                'name' => 'RANGUNIA COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '35156437',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '1488',
                'bank_id' => '6',
                'name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '35156495',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '1489',
                'bank_id' => '6',
                'name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '35156916',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '1490',
                'bank_id' => '6',
                'name' => 'SATKANIA',
                'bank_branch_data' => [
                    'routing_no' => '35157065',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '1491',
                'bank_id' => '6',
                'name' => 'SHIBERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35157302',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '1492',
                'bank_id' => '6',
                'name' => 'SHOLA SAHAR',
                'bank_branch_data' => [
                    'routing_no' => '35157331',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '1493',
                'bank_id' => '6',
                'name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '35157399',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '1494',
                'bank_id' => '6',
                'name' => 'TEA BOARD',
                'bank_branch_data' => [
                    'routing_no' => '35157607',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '1495',
                'bank_id' => '6',
                'name' => 'WAHEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '35157728',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '1496',
                'bank_id' => '6',
                'name' => 'ALAMDANGA',
                'bank_branch_data' => [
                    'routing_no' => '35180045',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '1497',
                'bank_id' => '6',
                'name' => 'BADARGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35180166',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '1498',
                'bank_id' => '6',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '35180195',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '1499',
                'bank_id' => '6',
                'name' => 'DAMURHUDA',
                'bank_branch_data' => [
                    'routing_no' => '35180287',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '1500',
                'bank_id' => '6',
                'name' => 'GHOLDARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35180379',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '1501',
                'bank_id' => '6',
                'name' => 'HIZALGARI',
                'bank_branch_data' => [
                    'routing_no' => '35180524',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '1502',
                'bank_id' => '6',
                'name' => 'JAMJAMI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35180553',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '1503',
                'bank_id' => '6',
                'name' => 'JIBAN NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35180582',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '1504',
                'bank_id' => '6',
                'name' => 'JOGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35180616',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '1505',
                'bank_id' => '6',
                'name' => 'JURANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35180645',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '1506',
                'bank_id' => '6',
                'name' => 'UTHALI',
                'bank_branch_data' => [
                    'routing_no' => '35180887',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '1507',
                'bank_id' => '6',
                'name' => 'ADDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190077',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '1508',
                'bank_id' => '6',
                'name' => 'KHOSBASH',
                'bank_branch_data' => [
                    'routing_no' => '35190080',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '1509',
                'bank_id' => '6',
                'name' => 'BAGHMARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190093',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '1510',
                'bank_id' => '6',
                'name' => 'ALISSHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190114',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '1511',
                'bank_id' => '6',
                'name' => 'AMRATALI',
                'bank_branch_data' => [
                    'routing_no' => '35190130',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '1512',
                'bank_id' => '6',
                'name' => 'ASMANIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190198',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '1513',
                'bank_id' => '6',
                'name' => 'HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '35190206',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '1514',
                'bank_id' => '6',
                'name' => 'KADAIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190219',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '1515',
                'bank_id' => '6',
                'name' => 'BADARPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190280',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '1516',
                'bank_id' => '6',
                'name' => 'BATISHA',
                'bank_branch_data' => [
                    'routing_no' => '35190293',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '1517',
                'bank_id' => '6',
                'name' => 'BANGADDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190406',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '1518',
                'bank_id' => '6',
                'name' => 'BARASHALGHAR',
                'bank_branch_data' => [
                    'routing_no' => '35190435',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '1519',
                'bank_id' => '6',
                'name' => 'BARURA',
                'bank_branch_data' => [
                    'routing_no' => '35190493',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '1520',
                'bank_id' => '6',
                'name' => 'BAUKSHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190585',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '1521',
                'bank_id' => '6',
                'name' => 'BIZRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35190701',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '1522',
                'bank_id' => '6',
                'name' => 'BRAHMAN PARA',
                'bank_branch_data' => [
                    'routing_no' => '35190769',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '1523',
                'bank_id' => '6',
                'name' => 'BURICHANG',
                'bank_branch_data' => [
                    'routing_no' => '35190822',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '1524',
                'bank_id' => '6',
                'name' => 'CHANDINA',
                'bank_branch_data' => [
                    'routing_no' => '35190880',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '1525',
                'bank_id' => '6',
                'name' => 'CHANDLA',
                'bank_branch_data' => [
                    'routing_no' => '35190943',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '1526',
                'bank_id' => '6',
                'name' => 'CHHALIA KANDI',
                'bank_branch_data' => [
                    'routing_no' => '35191034',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '1527',
                'bank_id' => '6',
                'name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '35191063',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '1528',
                'bank_id' => '6',
                'name' => 'CHOWDHURY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35191126',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '1529',
                'bank_id' => '6',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '35191155',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '1530',
                'bank_id' => '6',
                'name' => 'DARORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35191489',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '1531',
                'bank_id' => '6',
                'name' => 'DAUDKANDI',
                'bank_branch_data' => [
                    'routing_no' => '35191513',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '1532',
                'bank_id' => '6',
                'name' => 'DEBIDWAR',
                'bank_branch_data' => [
                    'routing_no' => '35191605',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '1533',
                'bank_id' => '6',
                'name' => 'DHALUA',
                'bank_branch_data' => [
                    'routing_no' => '35191663',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '1534',
                'bank_id' => '6',
                'name' => 'DHAMTI MADRASA',
                'bank_branch_data' => [
                    'routing_no' => '35191692',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '1535',
                'bank_id' => '6',
                'name' => 'BABURCHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35191726',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '1536',
                'bank_id' => '6',
                'name' => 'DOLLAI NABABPUR DAKHIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35191847',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '1537',
                'bank_id' => '6',
                'name' => 'GAIRBHANGA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35191968',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '1538',
                'bank_id' => '6',
                'name' => 'GALIARA',
                'bank_branch_data' => [
                    'routing_no' => '35191997',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '1539',
                'bank_id' => '6',
                'name' => 'HOMNA',
                'bank_branch_data' => [
                    'routing_no' => '35192233',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '1540',
                'bank_id' => '6',
                'name' => 'HYDRABAD',
                'bank_branch_data' => [
                    'routing_no' => '35192291',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '1541',
                'bank_id' => '6',
                'name' => 'JOYAG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35192396',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '1542',
                'bank_id' => '6',
                'name' => 'JURANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35192417',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '1543',
                'bank_id' => '6',
                'name' => 'NIMSHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35192446',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '1544',
                'bank_id' => '6',
                'name' => 'KANKAPAITH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35192567',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '1545',
                'bank_id' => '6',
                'name' => 'KASHINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35192596',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '1546',
                'bank_id' => '6',
                'name' => 'LAKHANPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35192688',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '1547',
                'bank_id' => '6',
                'name' => 'LAKSAM',
                'bank_branch_data' => [
                    'routing_no' => '35192712',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '1548',
                'bank_id' => '6',
                'name' => 'MACHIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35192741',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '1549',
                'bank_id' => '6',
                'name' => 'MAWLANA SAHEB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35192891',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '1550',
                'bank_id' => '6',
                'name' => 'MEGNA',
                'bank_branch_data' => [
                    'routing_no' => '35192954',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '1551',
                'bank_id' => '6',
                'name' => 'MOHICHAIL',
                'bank_branch_data' => [
                    'routing_no' => '35193016',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '1552',
                'bank_id' => '6',
                'name' => 'MONOHARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35193045',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '1553',
                'bank_id' => '6',
                'name' => 'MURAD NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35193166',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '1554',
                'bank_id' => '6',
                'name' => 'NAIYER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35193195',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '1555',
                'bank_id' => '6',
                'name' => 'NANGALKOT',
                'bank_branch_data' => [
                    'routing_no' => '35193258',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '1556',
                'bank_id' => '6',
                'name' => 'NATHERPETUA',
                'bank_branch_data' => [
                    'routing_no' => '35193311',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '1557',
                'bank_id' => '6',
                'name' => 'POLICELINE',
                'bank_branch_data' => [
                    'routing_no' => '35193524',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '1558',
                'bank_id' => '6',
                'name' => 'SHIDLAI',
                'bank_branch_data' => [
                    'routing_no' => '35193911',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '1559',
                'bank_id' => '6',
                'name' => 'SONAIMURI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35193940',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '1560',
                'bank_id' => '6',
                'name' => 'MIAH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35194123',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '1561',
                'bank_id' => '6',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35220071',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '1562',
                'bank_id' => '6',
                'name' => 'BARA MAHESH KHALI',
                'bank_branch_data' => [
                    'routing_no' => '35220105',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '1563',
                'bank_id' => '6',
                'name' => 'CHIRINGA',
                'bank_branch_data' => [
                    'routing_no' => '35220192',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '1564',
                'bank_id' => '6',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35220255',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '1565',
                'bank_id' => '6',
                'name' => 'DHURONG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35220347',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '1566',
                'bank_id' => '6',
                'name' => 'DULHAZRA',
                'bank_branch_data' => [
                    'routing_no' => '35220376',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '1567',
                'bank_id' => '6',
                'name' => 'EIDGAON',
                'bank_branch_data' => [
                    'routing_no' => '35220400',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '1568',
                'bank_id' => '6',
                'name' => 'GORAKGHATA',
                'bank_branch_data' => [
                    'routing_no' => '35220439',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '1569',
                'bank_id' => '6',
                'name' => 'GORZANIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35220468',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '1570',
                'bank_id' => '6',
                'name' => 'HANILA',
                'bank_branch_data' => [
                    'routing_no' => '35220497',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '1571',
                'bank_id' => '6',
                'name' => 'HARBUNG',
                'bank_branch_data' => [
                    'routing_no' => '35220521',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '1572',
                'bank_id' => '6',
                'name' => 'HOANAK',
                'bank_branch_data' => [
                    'routing_no' => '35220550',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '1573',
                'bank_id' => '6',
                'name' => 'KALARMARCHARA',
                'bank_branch_data' => [
                    'routing_no' => '35220613',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '1574',
                'bank_id' => '6',
                'name' => 'KUTUBDIA',
                'bank_branch_data' => [
                    'routing_no' => '35220671',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '1575',
                'bank_id' => '6',
                'name' => 'MATAR BARI',
                'bank_branch_data' => [
                    'routing_no' => '35220734',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '1576',
                'bank_id' => '6',
                'name' => 'PEKUYA',
                'bank_branch_data' => [
                    'routing_no' => '35220826',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '1577',
                'bank_id' => '6',
                'name' => 'RAMU',
                'bank_branch_data' => [
                    'routing_no' => '35220855',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '1578',
                'bank_id' => '6',
                'name' => 'TEKNAF',
                'bank_branch_data' => [
                    'routing_no' => '35220918',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '1579',
                'bank_id' => '6',
                'name' => 'UKHIYA',
                'bank_branch_data' => [
                    'routing_no' => '35220947',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '1580',
                'bank_id' => '6',
                'name' => 'ASHULIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35260257',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '1581',
                'bank_id' => '6',
                'name' => 'BADDA',
                'bank_branch_data' => [
                    'routing_no' => '35260349',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '1582',
                'bank_id' => '6',
                'name' => 'BALIA',
                'bank_branch_data' => [
                    'routing_no' => '35260402',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '1583',
                'bank_id' => '6',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '35260431',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '1584',
                'bank_id' => '6',
                'name' => 'BELESHWAR',
                'bank_branch_data' => [
                    'routing_no' => '35260707',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '1585',
                'bank_id' => '6',
                'name' => 'DHAMRAI',
                'bank_branch_data' => [
                    'routing_no' => '35261151',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '1586',
                'bank_id' => '6',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35262534',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '1587',
                'bank_id' => '6',
                'name' => 'KHAMARBARI',
                'bank_branch_data' => [
                    'routing_no' => '35262592',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '1588',
                'bank_id' => '6',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35262989',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '1589',
                'bank_id' => '6',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '35264095',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '1590',
                'bank_id' => '6',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '35264303',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '1591',
                'bank_id' => '6',
                'name' => 'TAJMOHAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '35264453',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '1592',
                'bank_id' => '6',
                'name' => 'STAFF COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '35264545',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '1593',
                'bank_id' => '6',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '35264637',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '1594',
                'bank_id' => '6',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '35270005',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '1595',
                'bank_id' => '6',
                'name' => 'BANDURAHAT',
                'bank_branch_data' => [
                    'routing_no' => '35270676',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '1596',
                'bank_id' => '6',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35271275',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '1597',
                'bank_id' => '6',
                'name' => 'DEMRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35271488',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '1598',
                'bank_id' => '6',
                'name' => 'DOHAR',
                'bank_branch_data' => [
                    'routing_no' => '35272058',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '1599',
                'bank_id' => '6',
                'name' => 'FARASHGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35272232',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '1600',
                'bank_id' => '6',
                'name' => 'HAZRATPUR',
                'bank_branch_data' => [
                    'routing_no' => '35272658',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '1601',
                'bank_id' => '6',
                'name' => 'JURAIN',
                'bank_branch_data' => [
                    'routing_no' => '35273310',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '1602',
                'bank_id' => '6',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35273581',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '1603',
                'bank_id' => '6',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35273644',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '1604',
                'bank_id' => '6',
                'name' => 'KOMARGANJ HAT',
                'bank_branch_data' => [
                    'routing_no' => '35273707',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '1605',
                'bank_id' => '6',
                'name' => 'LOCAL PRINCIPAL OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '35273910',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '1606',
                'bank_id' => '6',
                'name' => 'NANDIPARA',
                'bank_branch_data' => [
                    'routing_no' => '35274601',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '1607',
                'bank_id' => '6',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35274698',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '1608',
                'bank_id' => '6',
                'name' => 'SHANIR AKHRA',
                'bank_branch_data' => [
                    'routing_no' => '35276317',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '1609',
                'bank_id' => '6',
                'name' => 'SHOLLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35276496',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '1610',
                'bank_id' => '6',
                'name' => 'ALFADANGA',
                'bank_branch_data' => [
                    'routing_no' => '35290043',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '1611',
                'bank_id' => '6',
                'name' => 'PURAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35290056',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '1612',
                'bank_id' => '6',
                'name' => 'BABUR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '35290135',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '1613',
                'bank_id' => '6',
                'name' => 'BAGAT',
                'bank_branch_data' => [
                    'routing_no' => '35290193',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '1614',
                'bank_id' => '6',
                'name' => 'BAITUL AMAN',
                'bank_branch_data' => [
                    'routing_no' => '35290227',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '1615',
                'bank_id' => '6',
                'name' => 'BAKHUNDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35290256',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '1616',
                'bank_id' => '6',
                'name' => 'BHANGA',
                'bank_branch_data' => [
                    'routing_no' => '35290285',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '1617',
                'bank_id' => '6',
                'name' => 'BILGOBINDAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35290319',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '1618',
                'bank_id' => '6',
                'name' => 'BOALMARI',
                'bank_branch_data' => [
                    'routing_no' => '35290348',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '1619',
                'bank_id' => '6',
                'name' => 'CHAND HAT',
                'bank_branch_data' => [
                    'routing_no' => '35290401',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '1620',
                'bank_id' => '6',
                'name' => 'CHAR BHADRASAN',
                'bank_branch_data' => [
                    'routing_no' => '35290430',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '1621',
                'bank_id' => '6',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '35290522',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '1622',
                'bank_id' => '6',
                'name' => 'GOPALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35290643',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '1623',
                'bank_id' => '6',
                'name' => 'HATKRISHNAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35290735',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '1624',
                'bank_id' => '6',
                'name' => 'HAZIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35290764',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '1625',
                'bank_id' => '6',
                'name' => 'ISHAN GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '35290793',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '1626',
                'bank_id' => '6',
                'name' => 'KADIRDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35290827',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '1627',
                'bank_id' => '6',
                'name' => 'KAOLIBERA',
                'bank_branch_data' => [
                    'routing_no' => '35290948',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '1628',
                'bank_id' => '6',
                'name' => 'KHALILPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35291000',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '1629',
                'bank_id' => '6',
                'name' => 'LASKARDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35291039',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '1630',
                'bank_id' => '6',
                'name' => 'MADHUKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35291097',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '1631',
                'bank_id' => '6',
                'name' => 'NAGARKANDA',
                'bank_branch_data' => [
                    'routing_no' => '35291189',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '1632',
                'bank_id' => '6',
                'name' => 'PUKHURIA',
                'bank_branch_data' => [
                    'routing_no' => '35291213',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '1633',
                'bank_id' => '6',
                'name' => 'SADARPUR',
                'bank_branch_data' => [
                    'routing_no' => '35291271',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '1634',
                'bank_id' => '6',
                'name' => 'SALTA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35291305',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '1635',
                'bank_id' => '6',
                'name' => 'TALMA',
                'bank_branch_data' => [
                    'routing_no' => '35291426',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '1636',
                'bank_id' => '6',
                'name' => 'TAMBULKHANA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35291439',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '1637',
                'bank_id' => '6',
                'name' => 'AFTAB BIBIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35300041',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '1638',
                'bank_id' => '6',
                'name' => 'AMZADHAT',
                'bank_branch_data' => [
                    'routing_no' => '35300104',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '1639',
                'bank_id' => '6',
                'name' => 'BOX MAHMUD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35300283',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '1640',
                'bank_id' => '6',
                'name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'routing_no' => '35300317',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '1641',
                'bank_id' => '6',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '35300375',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '1642',
                'bank_id' => '6',
                'name' => 'DUDMUKHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35300467',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '1643',
                'bank_id' => '6',
                'name' => 'FAZILPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35300496',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '1644',
                'bank_id' => '6',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '35300520',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '1645',
                'bank_id' => '6',
                'name' => 'FULGAZI',
                'bank_branch_data' => [
                    'routing_no' => '35300612',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '1646',
                'bank_id' => '6',
                'name' => 'G.M.HAT',
                'bank_branch_data' => [
                    'routing_no' => '35300641',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '1647',
                'bank_id' => '6',
                'name' => 'JAYLASKER',
                'bank_branch_data' => [
                    'routing_no' => '35300762',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '1648',
                'bank_id' => '6',
                'name' => 'KUHUMA SANTIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35300917',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '1649',
                'bank_id' => '6',
                'name' => 'KURAISH MUNSHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35300920',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '1650',
                'bank_id' => '6',
                'name' => 'KUTHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35300946',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '1651',
                'bank_id' => '6',
                'name' => 'MUKTO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35301145',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '1652',
                'bank_id' => '6',
                'name' => 'PARSHURAM',
                'bank_branch_data' => [
                    'routing_no' => '35301279',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '1653',
                'bank_id' => '6',
                'name' => 'SHUVAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35301453',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '1654',
                'bank_id' => '6',
                'name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '35301482',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '1655',
                'bank_id' => '6',
                'name' => 'AMRAID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35330040',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '1656',
                'bank_id' => '6',
                'name' => 'AOWRAKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35330079',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '1657',
                'bank_id' => '6',
                'name' => 'FHULBARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35330466',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '1658',
                'bank_id' => '6',
                'name' => 'JAINA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35330679',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '1659',
                'bank_id' => '6',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35330732',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '1660',
                'bank_id' => '6',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '35330790',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '1661',
                'bank_id' => '6',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35330824',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '1662',
                'bank_id' => '6',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '35330882',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '1663',
                'bank_id' => '6',
                'name' => 'KHIRATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35330932',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '1664',
                'bank_id' => '6',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '35330945',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '1665',
                'bank_id' => '6',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35331065',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '1666',
                'bank_id' => '6',
                'name' => 'RANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35331360',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '1667',
                'bank_id' => '6',
                'name' => 'SAWRAID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35331399',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '1668',
                'bank_id' => '6',
                'name' => 'SHAFIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35331423',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '1669',
                'bank_id' => '6',
                'name' => 'SREEPUR',
                'bank_branch_data' => [
                    'routing_no' => '35331481',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '1670',
                'bank_id' => '6',
                'name' => 'TOKNAYAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35331607',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '1671',
                'bank_id' => '6',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '35331636',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '1672',
                'bank_id' => '6',
                'name' => 'BANAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '35350046',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '1673',
                'bank_id' => '6',
                'name' => 'VANGAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35350059',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '1674',
                'bank_id' => '6',
                'name' => 'BASHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '35350109',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '1675',
                'bank_id' => '6',
                'name' => 'BATIKAMARI',
                'bank_branch_data' => [
                    'routing_no' => '35350138',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '1676',
                'bank_id' => '6',
                'name' => 'BHERARHAT',
                'bank_branch_data' => [
                    'routing_no' => '35350196',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '1677',
                'bank_id' => '6',
                'name' => 'CHOWDHURIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35350259',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '1678',
                'bank_id' => '6',
                'name' => 'GOALGRAM MADRASHA',
                'bank_branch_data' => [
                    'routing_no' => '35350312',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '1679',
                'bank_id' => '6',
                'name' => 'GOHALA',
                'bank_branch_data' => [
                    'routing_no' => '35350341',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '1680',
                'bank_id' => '6',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35350370',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '1681',
                'bank_id' => '6',
                'name' => 'GOPINATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35350433',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '1682',
                'bank_id' => '6',
                'name' => 'KAJULIA',
                'bank_branch_data' => [
                    'routing_no' => '35350554',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '1683',
                'bank_id' => '6',
                'name' => 'KASHIANI',
                'bank_branch_data' => [
                    'routing_no' => '35350583',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '1684',
                'bank_id' => '6',
                'name' => 'KATHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35350617',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '1685',
                'bank_id' => '6',
                'name' => 'BOULTALI',
                'bank_branch_data' => [
                    'routing_no' => '35350646',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '1686',
                'bank_id' => '6',
                'name' => 'KOTALIPARA',
                'bank_branch_data' => [
                    'routing_no' => '35350675',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '1687',
                'bank_id' => '6',
                'name' => 'MUKSUDPUR',
                'bank_branch_data' => [
                    'routing_no' => '35350738',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '1688',
                'bank_id' => '6',
                'name' => 'NILPHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35350767',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '1689',
                'bank_id' => '6',
                'name' => 'RADHAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35350888',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '1690',
                'bank_id' => '6',
                'name' => 'RAJPAT',
                'bank_branch_data' => [
                    'routing_no' => '35350941',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '1691',
                'bank_id' => '6',
                'name' => 'RAMDIA',
                'bank_branch_data' => [
                    'routing_no' => '35350970',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '1692',
                'bank_id' => '6',
                'name' => 'RATAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35351032',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '1693',
                'bank_id' => '6',
                'name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'routing_no' => '35351090',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '1694',
                'bank_id' => '6',
                'name' => 'UZANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35351124',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '1695',
                'bank_id' => '6',
                'name' => 'AJMIRIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35360049',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '1696',
                'bank_id' => '6',
                'name' => 'AMUROAD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35360078',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '1697',
                'bank_id' => '6',
                'name' => 'BAHUBAL',
                'bank_branch_data' => [
                    'routing_no' => '35360131',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '1698',
                'bank_id' => '6',
                'name' => 'BANIACHANG',
                'bank_branch_data' => [
                    'routing_no' => '35360160',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '1699',
                'bank_id' => '6',
                'name' => 'CHOWMUHANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35360315',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '1700',
                'bank_id' => '6',
                'name' => 'CHUNARUGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35360344',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '1701',
                'bank_id' => '6',
                'name' => 'DUBAI HAJIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35360407',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '1702',
                'bank_id' => '6',
                'name' => 'GOPLAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35360557',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '1703',
                'bank_id' => '6',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35360610',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '1704',
                'bank_id' => '6',
                'name' => 'IMAMBARI',
                'bank_branch_data' => [
                    'routing_no' => '35360678',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '1705',
                'bank_id' => '6',
                'name' => 'KAKAILCHEO',
                'bank_branch_data' => [
                    'routing_no' => '35360731',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '1706',
                'bank_id' => '6',
                'name' => 'KALAUK',
                'bank_branch_data' => [
                    'routing_no' => '35360760',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '1707',
                'bank_id' => '6',
                'name' => 'KASHIMNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35360799',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '1708',
                'bank_id' => '6',
                'name' => 'KAZIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35360823',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '1709',
                'bank_id' => '6',
                'name' => 'LAKHAI',
                'bank_branch_data' => [
                    'routing_no' => '35360852',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '1710',
                'bank_id' => '6',
                'name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '35360881',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '1711',
                'bank_id' => '6',
                'name' => 'MADNA',
                'bank_branch_data' => [
                    'routing_no' => '35360915',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '1712',
                'bank_id' => '6',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35360973',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '1713',
                'bank_id' => '6',
                'name' => 'MORA KARI',
                'bank_branch_data' => [
                    'routing_no' => '35361064',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '1714',
                'bank_id' => '6',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35361093',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '1715',
                'bank_id' => '6',
                'name' => 'NAGURA',
                'bank_branch_data' => [
                    'routing_no' => '35361127',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '1716',
                'bank_id' => '6',
                'name' => 'NALMUKH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35361156',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '1717',
                'bank_id' => '6',
                'name' => 'NANDANPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35361185',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '1718',
                'bank_id' => '6',
                'name' => 'PAHARPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35361248',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '1719',
                'bank_id' => '6',
                'name' => 'PANIUMDA',
                'bank_branch_data' => [
                    'routing_no' => '35361277',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '1720',
                'bank_id' => '6',
                'name' => 'POIL',
                'bank_branch_data' => [
                    'routing_no' => '35361301',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '1721',
                'bank_id' => '6',
                'name' => 'SHAKIR MAHMUD',
                'bank_branch_data' => [
                    'routing_no' => '35361369',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '1722',
                'bank_id' => '6',
                'name' => 'SUJATPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35361422',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '1723',
                'bank_id' => '6',
                'name' => 'SUNDARPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35361451',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '1724',
                'bank_id' => '6',
                'name' => 'TALIAPARA',
                'bank_branch_data' => [
                    'routing_no' => '35361543',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '1725',
                'bank_id' => '6',
                'name' => 'BAHADURABAD',
                'bank_branch_data' => [
                    'routing_no' => '35390048',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '1726',
                'bank_id' => '6',
                'name' => 'MILON BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390064',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '1727',
                'bank_id' => '6',
                'name' => 'MAHMUDPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390080',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '1728',
                'bank_id' => '6',
                'name' => 'TULSIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35390093',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '1729',
                'bank_id' => '6',
                'name' => 'BAKSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35390101',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '1730',
                'bank_id' => '6',
                'name' => 'JOBBARGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390114',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '1731',
                'bank_id' => '6',
                'name' => 'VHARUAKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390127',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '1732',
                'bank_id' => '6',
                'name' => 'TONKI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390143',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '1733',
                'bank_id' => '6',
                'name' => 'MADARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35390222',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '1734',
                'bank_id' => '6',
                'name' => 'BARUAMARI',
                'bank_branch_data' => [
                    'routing_no' => '35390251',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '1735',
                'bank_id' => '6',
                'name' => 'JAGANNATHGANJ GHAT',
                'bank_branch_data' => [
                    'routing_no' => '35390280',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '1736',
                'bank_id' => '6',
                'name' => 'BAUSHI BANGALEE',
                'bank_branch_data' => [
                    'routing_no' => '35390314',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '1737',
                'bank_id' => '6',
                'name' => 'BHABKI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390343',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '1738',
                'bank_id' => '6',
                'name' => 'BHATARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390356',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '1739',
                'bank_id' => '6',
                'name' => 'DEWANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35390464',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '1740',
                'bank_id' => '6',
                'name' => 'GUTHAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390677',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '1741',
                'bank_id' => '6',
                'name' => 'HAZIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35390701',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '1742',
                'bank_id' => '6',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35390769',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '1743',
                'bank_id' => '6',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '35390851',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '1744',
                'bank_id' => '6',
                'name' => 'MALAMGONJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35391184',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '1745',
                'bank_id' => '6',
                'name' => 'MELANDAH',
                'bank_branch_data' => [
                    'routing_no' => '35391276',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '1746',
                'bank_id' => '6',
                'name' => 'NANDINA',
                'bank_branch_data' => [
                    'routing_no' => '35391300',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '1747',
                'bank_id' => '6',
                'name' => 'NARUNDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35391339',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '1748',
                'bank_id' => '6',
                'name' => 'NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35391368',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '1749',
                'bank_id' => '6',
                'name' => 'SARISHABARI',
                'bank_branch_data' => [
                    'routing_no' => '35391489',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '1750',
                'bank_id' => '6',
                'name' => 'SHARIFPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35391555',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '1751',
                'bank_id' => '6',
                'name' => 'SHYAMGANJ KALIBARI',
                'bank_branch_data' => [
                    'routing_no' => '35391571',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '1752',
                'bank_id' => '6',
                'name' => 'SONTIABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35391605',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '1753',
                'bank_id' => '6',
                'name' => 'TARAKANDI',
                'bank_branch_data' => [
                    'routing_no' => '35391692',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '1754',
                'bank_id' => '6',
                'name' => 'KHAJURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35410052',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '1755',
                'bank_id' => '6',
                'name' => 'KOLAGACHI',
                'bank_branch_data' => [
                    'routing_no' => '35410065',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '1756',
                'bank_id' => '6',
                'name' => 'BAGHERPARA',
                'bank_branch_data' => [
                    'routing_no' => '35410131',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '1757',
                'bank_id' => '6',
                'name' => 'CHOWGACHA',
                'bank_branch_data' => [
                    'routing_no' => '35410557',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '1758',
                'bank_id' => '6',
                'name' => 'GOPALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35410760',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '1759',
                'bank_id' => '6',
                'name' => 'HASANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35410823',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '1760',
                'bank_id' => '6',
                'name' => 'JAGADISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35410915',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '1761',
                'bank_id' => '6',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '35410944',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '1762',
                'bank_id' => '6',
                'name' => 'JHIKARGACHA',
                'bank_branch_data' => [
                    'routing_no' => '35411093',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '1763',
                'bank_id' => '6',
                'name' => 'KAYEMKOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35411185',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '1764',
                'bank_id' => '6',
                'name' => 'KESHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '35411219',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '1765',
                'bank_id' => '6',
                'name' => 'KHEDAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35411277',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '1766',
                'bank_id' => '6',
                'name' => 'KUADA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35411301',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '1767',
                'bank_id' => '6',
                'name' => 'LAKHANPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35411369',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '1768',
                'bank_id' => '6',
                'name' => 'MASHIA HATI',
                'bank_branch_data' => [
                    'routing_no' => '35411480',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '1769',
                'bank_id' => '6',
                'name' => 'MONIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35411514',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '1770',
                'bank_id' => '6',
                'name' => 'NARAYANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35411543',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '1771',
                'bank_id' => '6',
                'name' => 'NAVARAN',
                'bank_branch_data' => [
                    'routing_no' => '35411606',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '1772',
                'bank_id' => '6',
                'name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '35411635',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '1773',
                'bank_id' => '6',
                'name' => 'RUPDIA',
                'bank_branch_data' => [
                    'routing_no' => '35412021',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '1774',
                'bank_id' => '6',
                'name' => 'SARSHA',
                'bank_branch_data' => [
                    'routing_no' => '35412142',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '1775',
                'bank_id' => '6',
                'name' => 'SHINGHAJHULI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35412205',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '1776',
                'bank_id' => '6',
                'name' => 'AMUA',
                'bank_branch_data' => [
                    'routing_no' => '35420042',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '1777',
                'bank_id' => '6',
                'name' => 'BADURTALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35420105',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '1778',
                'bank_id' => '6',
                'name' => 'BASONDA',
                'bank_branch_data' => [
                    'routing_no' => '35420134',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '1779',
                'bank_id' => '6',
                'name' => 'BENOYKATI',
                'bank_branch_data' => [
                    'routing_no' => '35420163',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '1780',
                'bank_id' => '6',
                'name' => 'CHITKI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35420192',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '1781',
                'bank_id' => '6',
                'name' => 'GALUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35420255',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '1782',
                'bank_id' => '6',
                'name' => 'NIZAMEA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35420271',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '1783',
                'bank_id' => '6',
                'name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'routing_no' => '35420318',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '1784',
                'bank_id' => '6',
                'name' => 'KAIKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35420347',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '1785',
                'bank_id' => '6',
                'name' => 'KATHALIA',
                'bank_branch_data' => [
                    'routing_no' => '35420376',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '1786',
                'bank_id' => '6',
                'name' => 'NABAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '35420439',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '1787',
                'bank_id' => '6',
                'name' => 'NALCHITY',
                'bank_branch_data' => [
                    'routing_no' => '35420497',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '1788',
                'bank_id' => '6',
                'name' => 'RAJAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35420550',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '1789',
                'bank_id' => '6',
                'name' => 'RAMCHANDRAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35420589',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '1790',
                'bank_id' => '6',
                'name' => 'TALTALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35420671',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '1791',
                'bank_id' => '6',
                'name' => 'BALIADANGA',
                'bank_branch_data' => [
                    'routing_no' => '35440048',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '1792',
                'bank_id' => '6',
                'name' => 'BHAIRABA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35440130',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '1793',
                'bank_id' => '6',
                'name' => 'BHALKI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35440169',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '1794',
                'bank_id' => '6',
                'name' => 'BHATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35440198',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '1795',
                'bank_id' => '6',
                'name' => 'HALIDHANI',
                'bank_branch_data' => [
                    'routing_no' => '35440435',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '1796',
                'bank_id' => '6',
                'name' => 'HARINAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '35440493',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '1797',
                'bank_id' => '6',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '35440648',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '1798',
                'bank_id' => '6',
                'name' => 'KACHUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35440769',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '1799',
                'bank_id' => '6',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35440798',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '1800',
                'bank_id' => '6',
                'name' => 'KASTOSAGRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35440880',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '1801',
                'bank_id' => '6',
                'name' => 'KHULUMBARIA',
                'bank_branch_data' => [
                    'routing_no' => '35440943',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '1802',
                'bank_id' => '6',
                'name' => 'KOTCHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '35441005',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '1803',
                'bank_id' => '6',
                'name' => 'MOHESHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35441092',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '1804',
                'bank_id' => '6',
                'name' => 'SAILKUPA',
                'bank_branch_data' => [
                    'routing_no' => '35441184',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '1805',
                'bank_id' => '6',
                'name' => 'SHINGI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35441276',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '1806',
                'bank_id' => '6',
                'name' => 'DIGHINALA',
                'bank_branch_data' => [
                    'routing_no' => '35460044',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '1807',
                'bank_id' => '6',
                'name' => 'KHAGRACHARI',
                'bank_branch_data' => [
                    'routing_no' => '35460073',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '1808',
                'bank_id' => '6',
                'name' => 'LAXMICHARI',
                'bank_branch_data' => [
                    'routing_no' => '35460136',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '1809',
                'bank_id' => '6',
                'name' => 'MANIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '35460194',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '1810',
                'bank_id' => '6',
                'name' => 'MATIRANGA',
                'bank_branch_data' => [
                    'routing_no' => '35460228',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '1811',
                'bank_id' => '6',
                'name' => 'MOHALCHARI',
                'bank_branch_data' => [
                    'routing_no' => '35460257',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '1812',
                'bank_id' => '6',
                'name' => 'PANCHARI',
                'bank_branch_data' => [
                    'routing_no' => '35460286',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '1813',
                'bank_id' => '6',
                'name' => 'RAMGARH',
                'bank_branch_data' => [
                    'routing_no' => '35460310',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '1814',
                'bank_id' => '6',
                'name' => 'BARAKPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35470250',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '1815',
                'bank_id' => '6',
                'name' => 'BATIAGHATA',
                'bank_branch_data' => [
                    'routing_no' => '35470313',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '1816',
                'bank_id' => '6',
                'name' => 'BIRAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35470342',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '1817',
                'bank_id' => '6',
                'name' => 'CHANDKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35470526',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '1818',
                'bank_id' => '6',
                'name' => 'DACOPE',
                'bank_branch_data' => [
                    'routing_no' => '35470647',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '1819',
                'bank_id' => '6',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '35470700',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '1820',
                'bank_id' => '6',
                'name' => 'DUMURIA',
                'bank_branch_data' => [
                    'routing_no' => '35470797',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '1821',
                'bank_id' => '6',
                'name' => 'JAIGIR MOHAL',
                'bank_branch_data' => [
                    'routing_no' => '35471062',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '1822',
                'bank_id' => '6',
                'name' => 'JAMIRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35471091',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '1823',
                'bank_id' => '6',
                'name' => 'KAZDIA',
                'bank_branch_data' => [
                    'routing_no' => '35471367',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '1824',
                'bank_id' => '6',
                'name' => 'KDA BUS TERMINAL',
                'bank_branch_data' => [
                    'routing_no' => '35471420',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '1825',
                'bank_id' => '6',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '35471541',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '1826',
                'bank_id' => '6',
                'name' => 'KOYRA',
                'bank_branch_data' => [
                    'routing_no' => '35471783',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '1827',
                'bank_id' => '6',
                'name' => 'LABONCHORA',
                'bank_branch_data' => [
                    'routing_no' => '35471817',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '1828',
                'bank_id' => '6',
                'name' => 'NALIAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35471938',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '1829',
                'bank_id' => '6',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '35471996',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '1830',
                'bank_id' => '6',
                'name' => 'PAIKGACHA',
                'bank_branch_data' => [
                    'routing_no' => '35472087',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '1831',
                'bank_id' => '6',
                'name' => 'PHULTALA',
                'bank_branch_data' => [
                    'routing_no' => '35472140',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '1832',
                'bank_id' => '6',
                'name' => 'RUPSHAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35472324',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '1833',
                'bank_id' => '6',
                'name' => 'SHAHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35472445',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '1834',
                'bank_id' => '6',
                'name' => 'TEROKHADA',
                'bank_branch_data' => [
                    'routing_no' => '35472658',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '1835',
                'bank_id' => '6',
                'name' => 'ADAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35480040',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '1836',
                'bank_id' => '6',
                'name' => 'AUSTAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '35480079',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '1837',
                'bank_id' => '6',
                'name' => 'MOSUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35480082',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '1838',
                'bank_id' => '6',
                'name' => 'GOCHIHATA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35480095',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '1839',
                'bank_id' => '6',
                'name' => 'BAJITPUR',
                'bank_branch_data' => [
                    'routing_no' => '35480103',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '1840',
                'bank_id' => '6',
                'name' => 'CHOUGANGA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35480116',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '1841',
                'bank_id' => '6',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35480224',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '1842',
                'bank_id' => '6',
                'name' => 'CHOUDDASATO BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35480316',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '1843',
                'bank_id' => '6',
                'name' => 'GOSHAIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35480345',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '1844',
                'bank_id' => '6',
                'name' => 'HILOCHIA',
                'bank_branch_data' => [
                    'routing_no' => '35480374',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '1845',
                'bank_id' => '6',
                'name' => 'HOSSAINPUR',
                'bank_branch_data' => [
                    'routing_no' => '35480408',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '1846',
                'bank_id' => '6',
                'name' => 'ITNA',
                'bank_branch_data' => [
                    'routing_no' => '35480437',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '1847',
                'bank_id' => '6',
                'name' => 'JOYSIDDI',
                'bank_branch_data' => [
                    'routing_no' => '35480466',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '1848',
                'bank_id' => '6',
                'name' => 'KARIMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35480558',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '1849',
                'bank_id' => '6',
                'name' => 'KATIADI',
                'bank_branch_data' => [
                    'routing_no' => '35480587',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '1850',
                'bank_id' => '6',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35480679',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '1851',
                'bank_id' => '6',
                'name' => 'KULIAR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '35480732',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '1852',
                'bank_id' => '6',
                'name' => 'LATIFABAD',
                'bank_branch_data' => [
                    'routing_no' => '35480761',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '1853',
                'bank_id' => '6',
                'name' => 'MARICHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35480853',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '1854',
                'bank_id' => '6',
                'name' => 'MITAMAIN',
                'bank_branch_data' => [
                    'routing_no' => '35480945',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '1855',
                'bank_id' => '6',
                'name' => 'NEAMATPUR',
                'bank_branch_data' => [
                    'routing_no' => '35480974',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '1856',
                'bank_id' => '6',
                'name' => 'NIKLI',
                'bank_branch_data' => [
                    'routing_no' => '35481007',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '1857',
                'bank_id' => '6',
                'name' => 'PAKUNDIA',
                'bank_branch_data' => [
                    'routing_no' => '35481065',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '1858',
                'bank_id' => '6',
                'name' => 'SARARCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35481094',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '1859',
                'bank_id' => '6',
                'name' => 'SHIMULKANDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35481128',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '1860',
                'bank_id' => '6',
                'name' => 'TARAIL',
                'bank_branch_data' => [
                    'routing_no' => '35481157',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '1861',
                'bank_id' => '6',
                'name' => 'AILCHARA',
                'bank_branch_data' => [
                    'routing_no' => '35500041',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '1862',
                'bank_id' => '6',
                'name' => 'AMLA',
                'bank_branch_data' => [
                    'routing_no' => '35500104',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '1863',
                'bank_id' => '6',
                'name' => 'BAHAL BARIA',
                'bank_branch_data' => [
                    'routing_no' => '35500162',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '1864',
                'bank_id' => '6',
                'name' => 'BARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35500191',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '1865',
                'bank_id' => '6',
                'name' => 'BARAKHADA',
                'bank_branch_data' => [
                    'routing_no' => '35500254',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '1866',
                'bank_id' => '6',
                'name' => 'BHERAMARA',
                'bank_branch_data' => [
                    'routing_no' => '35500283',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '1867',
                'bank_id' => '6',
                'name' => 'DANGMARKA',
                'bank_branch_data' => [
                    'routing_no' => '35500409',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '1868',
                'bank_id' => '6',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '35500467',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '1869',
                'bank_id' => '6',
                'name' => 'JENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '35500704',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '1870',
                'bank_id' => '6',
                'name' => 'JHAUDIA',
                'bank_branch_data' => [
                    'routing_no' => '35500733',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '1871',
                'bank_id' => '6',
                'name' => 'KHOKSA',
                'bank_branch_data' => [
                    'routing_no' => '35500825',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '1872',
                'bank_id' => '6',
                'name' => 'KUCHIAMURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35500854',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '1873',
                'bank_id' => '6',
                'name' => 'KUMARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35500883',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '1874',
                'bank_id' => '6',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '35500946',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '1875',
                'bank_id' => '6',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35501066',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '1876',
                'bank_id' => '6',
                'name' => 'MODHUPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35501095',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '1877',
                'bank_id' => '6',
                'name' => 'DIGHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510060',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '1878',
                'bank_id' => '6',
                'name' => 'CHAR ALEXANDER',
                'bank_branch_data' => [
                    'routing_no' => '35510228',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '1879',
                'bank_id' => '6',
                'name' => 'CHAR FALKON',
                'bank_branch_data' => [
                    'routing_no' => '35510257',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '1880',
                'bank_id' => '6',
                'name' => 'CHAR GAZI',
                'bank_branch_data' => [
                    'routing_no' => '35510286',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '1881',
                'bank_id' => '6',
                'name' => 'CHOWDHURY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510378',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '1882',
                'bank_id' => '6',
                'name' => 'HAZIRPARA',
                'bank_branch_data' => [
                    'routing_no' => '35510581',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '1883',
                'bank_id' => '6',
                'name' => 'JAKSIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510615',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '1884',
                'bank_id' => '6',
                'name' => 'K.P. HAT',
                'bank_branch_data' => [
                    'routing_no' => '35510644',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '1885',
                'bank_id' => '6',
                'name' => 'KARONA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35510707',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '1886',
                'bank_id' => '6',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35510736',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '1887',
                'bank_id' => '6',
                'name' => 'MAJIRGAON BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510794',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '1888',
                'bank_id' => '6',
                'name' => 'MITALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510886',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '1889',
                'bank_id' => '6',
                'name' => 'PANPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510910',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '1890',
                'bank_id' => '6',
                'name' => 'PODDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35510949',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '1891',
                'bank_id' => '6',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35510978',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '1892',
                'bank_id' => '6',
                'name' => 'RAKHALIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35511001',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '1893',
                'bank_id' => '6',
                'name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35511030',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '1894',
                'bank_id' => '6',
                'name' => 'TORABGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35511180',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '1895',
                'bank_id' => '6',
                'name' => 'BAJITPUR',
                'bank_branch_data' => [
                    'routing_no' => '35540043',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '1896',
                'bank_id' => '6',
                'name' => 'UTTAR RAMJANPUR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35540098',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '1897',
                'bank_id' => '6',
                'name' => 'CHANDERCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35540106',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '1898',
                'bank_id' => '6',
                'name' => 'GHATOKCHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35540193',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '1899',
                'bank_id' => '6',
                'name' => 'GOPALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35540227',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '1900',
                'bank_id' => '6',
                'name' => 'KALIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35540256',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '1901',
                'bank_id' => '6',
                'name' => 'KALKINI',
                'bank_branch_data' => [
                    'routing_no' => '35540285',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '1902',
                'bank_id' => '6',
                'name' => 'KASHER HAT',
                'bank_branch_data' => [
                    'routing_no' => '35540319',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '1903',
                'bank_id' => '6',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35540401',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '1904',
                'bank_id' => '6',
                'name' => 'MATHER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35540498',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '1905',
                'bank_id' => '6',
                'name' => 'PANCHOR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35540614',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '1906',
                'bank_id' => '6',
                'name' => 'RAJOIR',
                'bank_branch_data' => [
                    'routing_no' => '35540643',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '1907',
                'bank_id' => '6',
                'name' => 'SHAHEBRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35540672',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '1908',
                'bank_id' => '6',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '35540706',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '1909',
                'bank_id' => '6',
                'name' => 'TATIKANDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35540780',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '1910',
                'bank_id' => '6',
                'name' => 'UTRAIL HAT',
                'bank_branch_data' => [
                    'routing_no' => '35540827',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '1911',
                'bank_id' => '6',
                'name' => 'ALAMKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35550046',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '1912',
                'bank_id' => '6',
                'name' => 'ALUKDIA',
                'bank_branch_data' => [
                    'routing_no' => '35550075',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '1913',
                'bank_id' => '6',
                'name' => 'AMURIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35550109',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '1914',
                'bank_id' => '6',
                'name' => 'ARPARA',
                'bank_branch_data' => [
                    'routing_no' => '35550138',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '1915',
                'bank_id' => '6',
                'name' => 'BHABONHAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35550196',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '1916',
                'bank_id' => '6',
                'name' => 'BINODPUR',
                'bank_branch_data' => [
                    'routing_no' => '35550220',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '1917',
                'bank_id' => '6',
                'name' => 'DAXIN MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35550312',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '1918',
                'bank_id' => '6',
                'name' => 'JOGDAL',
                'bank_branch_data' => [
                    'routing_no' => '35550433',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '1919',
                'bank_id' => '6',
                'name' => 'LANGALBANDH',
                'bank_branch_data' => [
                    'routing_no' => '35550525',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '1920',
                'bank_id' => '6',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '35550554',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '1921',
                'bank_id' => '6',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '35550617',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '1922',
                'bank_id' => '6',
                'name' => 'NAGRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35550646',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '1923',
                'bank_id' => '6',
                'name' => 'RADHA NAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35550767',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '1924',
                'bank_id' => '6',
                'name' => 'SACHILAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35550820',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '1925',
                'bank_id' => '6',
                'name' => 'SATRUJITPUR',
                'bank_branch_data' => [
                    'routing_no' => '35550859',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '1926',
                'bank_id' => '6',
                'name' => 'SREEPUR',
                'bank_branch_data' => [
                    'routing_no' => '35550970',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '1927',
                'bank_id' => '6',
                'name' => 'BANIAJURI',
                'bank_branch_data' => [
                    'routing_no' => '35560131',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '1928',
                'bank_id' => '6',
                'name' => 'CHARIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '35560223',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '1929',
                'bank_id' => '6',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '35560281',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '1930',
                'bank_id' => '6',
                'name' => 'GHIOR',
                'bank_branch_data' => [
                    'routing_no' => '35560373',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '1931',
                'bank_id' => '6',
                'name' => 'HARGAJ',
                'bank_branch_data' => [
                    'routing_no' => '35560407',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '1932',
                'bank_id' => '6',
                'name' => 'HARIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35560436',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '1933',
                'bank_id' => '6',
                'name' => 'JAGIR',
                'bank_branch_data' => [
                    'routing_no' => '35560465',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '1934',
                'bank_id' => '6',
                'name' => 'JHITKA',
                'bank_branch_data' => [
                    'routing_no' => '35560528',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '1935',
                'bank_id' => '6',
                'name' => 'JOYMONTAP',
                'bank_branch_data' => [
                    'routing_no' => '35560573',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '1936',
                'bank_id' => '6',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35560610',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '1937',
                'bank_id' => '6',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '35560702',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '1938',
                'bank_id' => '6',
                'name' => 'SATURIA',
                'bank_branch_data' => [
                    'routing_no' => '35560760',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '1939',
                'bank_id' => '6',
                'name' => 'SHIBALAYA',
                'bank_branch_data' => [
                    'routing_no' => '35560799',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '1940',
                'bank_id' => '6',
                'name' => 'SINGAIR',
                'bank_branch_data' => [
                    'routing_no' => '35560823',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '1941',
                'bank_id' => '6',
                'name' => 'BARADI',
                'bank_branch_data' => [
                    'routing_no' => '35570163',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '1942',
                'bank_id' => '6',
                'name' => 'DARIAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35570192',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '1943',
                'bank_id' => '6',
                'name' => 'GANGNI',
                'bank_branch_data' => [
                    'routing_no' => '35570226',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '1944',
                'bank_id' => '6',
                'name' => 'KATHULI',
                'bank_branch_data' => [
                    'routing_no' => '35570347',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '1945',
                'bank_id' => '6',
                'name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '35570376',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '1946',
                'bank_id' => '6',
                'name' => 'MUJIB NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35570468',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '1947',
                'bank_id' => '6',
                'name' => 'UZALPUR',
                'bank_branch_data' => [
                    'routing_no' => '35570521',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '1948',
                'bank_id' => '6',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '35580108',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '1949',
                'bank_id' => '6',
                'name' => 'BARAMCHAL',
                'bank_branch_data' => [
                    'routing_no' => '35580137',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '1950',
                'bank_id' => '6',
                'name' => 'DIGHIRPAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35580461',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '1951',
                'bank_id' => '6',
                'name' => 'JURI',
                'bank_branch_data' => [
                    'routing_no' => '35580674',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '1952',
                'bank_id' => '6',
                'name' => 'KAGABALA',
                'bank_branch_data' => [
                    'routing_no' => '35580737',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '1953',
                'bank_id' => '6',
                'name' => 'KAMALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35580766',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '1954',
                'bank_id' => '6',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '35580940',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '1955',
                'bank_id' => '6',
                'name' => 'MANU',
                'bank_branch_data' => [
                    'routing_no' => '35581031',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '1956',
                'bank_id' => '6',
                'name' => 'MOKAM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35581099',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '1957',
                'bank_id' => '6',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35581181',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '1958',
                'bank_id' => '6',
                'name' => 'RAJNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35581394',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '1959',
                'bank_id' => '6',
                'name' => 'SHAHID NAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35581578',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '1960',
                'bank_id' => '6',
                'name' => 'SHERPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35581660',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '1961',
                'bank_id' => '6',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '35581723',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '1962',
                'bank_id' => '6',
                'name' => 'VATERA',
                'bank_branch_data' => [
                    'routing_no' => '35581815',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '1963',
                'bank_id' => '6',
                'name' => 'ALADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35590077',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '1964',
                'bank_id' => '6',
                'name' => 'BARAIKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35590172',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '1965',
                'bank_id' => '6',
                'name' => 'BETKA',
                'bank_branch_data' => [
                    'routing_no' => '35590251',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '1966',
                'bank_id' => '6',
                'name' => 'BHABER CHAR',
                'bank_branch_data' => [
                    'routing_no' => '35590280',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '1967',
                'bank_id' => '6',
                'name' => 'CHARKEWAR',
                'bank_branch_data' => [
                    'routing_no' => '35590343',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '1968',
                'bank_id' => '6',
                'name' => 'GAZARIA',
                'bank_branch_data' => [
                    'routing_no' => '35590464',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '1969',
                'bank_id' => '6',
                'name' => 'GOLTALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35590493',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '1970',
                'bank_id' => '6',
                'name' => 'HASHARA',
                'bank_branch_data' => [
                    'routing_no' => '35590585',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '1971',
                'bank_id' => '6',
                'name' => 'ISAPURA',
                'bank_branch_data' => [
                    'routing_no' => '35590677',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '1972',
                'bank_id' => '6',
                'name' => 'LOUHAJONG',
                'bank_branch_data' => [
                    'routing_no' => '35590851',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '1973',
                'bank_id' => '6',
                'name' => 'MEDINIMANDAL',
                'bank_branch_data' => [
                    'routing_no' => '35590943',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '1974',
                'bank_id' => '6',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35591034',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '1975',
                'bank_id' => '6',
                'name' => 'RARIKHAL',
                'bank_branch_data' => [
                    'routing_no' => '35591184',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '1976',
                'bank_id' => '6',
                'name' => 'SERAJDIKHAN',
                'bank_branch_data' => [
                    'routing_no' => '35591276',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '1977',
                'bank_id' => '6',
                'name' => 'SHOLAGHAR',
                'bank_branch_data' => [
                    'routing_no' => '35591339',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '1978',
                'bank_id' => '6',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35591421',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '1979',
                'bank_id' => '6',
                'name' => 'TONGI BARI',
                'bank_branch_data' => [
                    'routing_no' => '35591542',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '1980',
                'bank_id' => '6',
                'name' => 'AGRIVARSITY',
                'bank_branch_data' => [
                    'routing_no' => '35610049',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '1981',
                'bank_id' => '6',
                'name' => 'AMBIKAGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610078',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '1982',
                'bank_id' => '6',
                'name' => 'DHURAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610081',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '1983',
                'bank_id' => '6',
                'name' => 'BATAJOR',
                'bank_branch_data' => [
                    'routing_no' => '35610115',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '1984',
                'bank_id' => '6',
                'name' => 'AUSTADHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610160',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '1985',
                'bank_id' => '6',
                'name' => 'BAKTA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610199',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '1986',
                'bank_id' => '6',
                'name' => 'BHALUKA',
                'bank_branch_data' => [
                    'routing_no' => '35610315',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '1987',
                'bank_id' => '6',
                'name' => 'BIRUNIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610373',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '1988',
                'bank_id' => '6',
                'name' => 'CHAIRBARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610465',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '1989',
                'bank_id' => '6',
                'name' => 'CHECHUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610557',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '1990',
                'bank_id' => '6',
                'name' => 'DAKATIA CHOURASTA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610599',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '1991',
                'bank_id' => '6',
                'name' => 'DAWHAKHOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35610678',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '1992',
                'bank_id' => '6',
                'name' => 'DEOKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '35610702',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '1993',
                'bank_id' => '6',
                'name' => 'DHALIA',
                'bank_branch_data' => [
                    'routing_no' => '35610760',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '1994',
                'bank_id' => '6',
                'name' => 'DHANIKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '35610799',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '1995',
                'bank_id' => '6',
                'name' => 'DOBAWRA',
                'bank_branch_data' => [
                    'routing_no' => '35610881',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '1996',
                'bank_id' => '6',
                'name' => 'FULBARIA',
                'bank_branch_data' => [
                    'routing_no' => '35610944',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '1997',
                'bank_id' => '6',
                'name' => 'FULPUR',
                'bank_branch_data' => [
                    'routing_no' => '35610973',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '1998',
                'bank_id' => '6',
                'name' => 'GAFFARGAON',
                'bank_branch_data' => [
                    'routing_no' => '35611006',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '1999',
                'bank_id' => '6',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35611064',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '2000',
                'bank_id' => '6',
                'name' => 'GOYESHPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35611127',
                ],
                'enabled' => true,
            ],
        ];
    }
}
