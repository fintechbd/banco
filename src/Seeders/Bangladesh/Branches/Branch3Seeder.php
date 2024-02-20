<?php

namespace Fintech\Banco\Seeders\Bangladesh\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch3Seeder extends Seeder
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
                'id' => '2001',
                'bank_id' => '6',
                'name' => 'HALUAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35611156',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '2002',
                'bank_id' => '6',
                'name' => 'ISHWARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35611185',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '2003',
                'bank_id' => '6',
                'name' => 'JAIL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '35611219',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '2004',
                'bank_id' => '6',
                'name' => 'KANDIPARA',
                'bank_branch_data' => [
                    'routing_no' => '35611277',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '2005',
                'bank_id' => '6',
                'name' => 'KASHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35611301',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '2006',
                'bank_id' => '6',
                'name' => 'KASHIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35611330',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '2007',
                'bank_id' => '6',
                'name' => 'MADHUPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35611451',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '2008',
                'bank_id' => '6',
                'name' => 'MAIZBAG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35611480',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '2009',
                'bank_id' => '6',
                'name' => 'MAZIYALI',
                'bank_branch_data' => [
                    'routing_no' => '35611572',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '2010',
                'bank_id' => '6',
                'name' => 'MOAZZEMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35611664',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '2011',
                'bank_id' => '6',
                'name' => 'MUKTAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '35611693',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '2012',
                'bank_id' => '6',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '35611756',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '2013',
                'bank_id' => '6',
                'name' => 'NAGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35611877',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '2014',
                'bank_id' => '6',
                'name' => 'NANDAIL',
                'bank_branch_data' => [
                    'routing_no' => '35611901',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '2015',
                'bank_id' => '6',
                'name' => 'SEED STORE',
                'bank_branch_data' => [
                    'routing_no' => '35612089',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '2016',
                'bank_id' => '6',
                'name' => 'SHUSHUTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35612155',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '2017',
                'bank_id' => '6',
                'name' => 'SOHAGIBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35612171',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '2018',
                'bank_id' => '6',
                'name' => 'TARAKANDA',
                'bank_branch_data' => [
                    'routing_no' => '35612263',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '2019',
                'bank_id' => '6',
                'name' => 'TRISHAL',
                'bank_branch_data' => [
                    'routing_no' => '35612355',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '2020',
                'bank_id' => '6',
                'name' => 'HABOKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35650254',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '2021',
                'bank_id' => '6',
                'name' => 'KALIA',
                'bank_branch_data' => [
                    'routing_no' => '35650346',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '2022',
                'bank_id' => '6',
                'name' => 'LAHORIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35650409',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '2023',
                'bank_id' => '6',
                'name' => 'LOHAGARA',
                'bank_branch_data' => [
                    'routing_no' => '35650467',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '2024',
                'bank_id' => '6',
                'name' => 'NARAGATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35650612',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '2025',
                'bank_id' => '6',
                'name' => 'NARAIL',
                'bank_branch_data' => [
                    'routing_no' => '35650641',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '2026',
                'bank_id' => '6',
                'name' => 'SHEIK HATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35650762',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '2027',
                'bank_id' => '6',
                'name' => 'ARAIHAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35670047',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '2028',
                'bank_id' => '6',
                'name' => 'POURO MARKET',
                'bank_branch_data' => [
                    'routing_no' => '35670089',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '2029',
                'bank_id' => '6',
                'name' => 'BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '35670168',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '2030',
                'bank_id' => '6',
                'name' => 'FATULLA',
                'bank_branch_data' => [
                    'routing_no' => '35670526',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '2031',
                'bank_id' => '6',
                'name' => 'GOLAKANDAIL',
                'bank_branch_data' => [
                    'routing_no' => '35670584',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '2032',
                'bank_id' => '6',
                'name' => 'HOSSAINPUR',
                'bank_branch_data' => [
                    'routing_no' => '35670647',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '2033',
                'bank_id' => '6',
                'name' => 'ISAPURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35670676',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '2034',
                'bank_id' => '6',
                'name' => 'JHANGALIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35670700',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '2035',
                'bank_id' => '6',
                'name' => 'MADANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35670971',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '2036',
                'bank_id' => '6',
                'name' => 'MOHAJAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '35671091',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '2037',
                'bank_id' => '6',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35671183',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '2038',
                'bank_id' => '6',
                'name' => 'RUPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35671459',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '2039',
                'bank_id' => '6',
                'name' => 'SATGAON',
                'bank_branch_data' => [
                    'routing_no' => '35671512',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '2040',
                'bank_id' => '6',
                'name' => 'SIDDIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35671604',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '2041',
                'bank_id' => '6',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '35671691',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '2042',
                'bank_id' => '6',
                'name' => 'CHORONGORDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680053',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '2043',
                'bank_id' => '6',
                'name' => 'ALGEE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680066',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '2044',
                'bank_id' => '6',
                'name' => 'SHAHEPROTAP',
                'bank_branch_data' => [
                    'routing_no' => '35680095',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '2045',
                'bank_id' => '6',
                'name' => 'BABURHAT',
                'bank_branch_data' => [
                    'routing_no' => '35680103',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '2046',
                'bank_id' => '6',
                'name' => 'PAIKAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680116',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '2047',
                'bank_id' => '6',
                'name' => 'BANNAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680161',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '2048',
                'bank_id' => '6',
                'name' => 'BARAICHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680190',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '2049',
                'bank_id' => '6',
                'name' => 'BELABO',
                'bank_branch_data' => [
                    'routing_no' => '35680253',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '2050',
                'bank_id' => '6',
                'name' => 'CHARSUBUDDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680374',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '2051',
                'bank_id' => '6',
                'name' => 'GHORASAL',
                'bank_branch_data' => [
                    'routing_no' => '35680495',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '2052',
                'bank_id' => '6',
                'name' => 'HATIRDIA',
                'bank_branch_data' => [
                    'routing_no' => '35680558',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '2053',
                'bank_id' => '6',
                'name' => 'LAKHPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680640',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '2054',
                'bank_id' => '6',
                'name' => 'MONOHARDI',
                'bank_branch_data' => [
                    'routing_no' => '35680732',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '2055',
                'bank_id' => '6',
                'name' => 'MORJAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35680761',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '2056',
                'bank_id' => '6',
                'name' => 'MUNSEFER CHAR',
                'bank_branch_data' => [
                    'routing_no' => '35680774',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '2057',
                'bank_id' => '6',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '35680853',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '2058',
                'bank_id' => '6',
                'name' => 'PALASH',
                'bank_branch_data' => [
                    'routing_no' => '35680916',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '2059',
                'bank_id' => '6',
                'name' => 'PORADIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35681007',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '2060',
                'bank_id' => '6',
                'name' => 'RAIPURA',
                'bank_branch_data' => [
                    'routing_no' => '35681094',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '2061',
                'bank_id' => '6',
                'name' => 'SHEKER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35681249',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '2062',
                'bank_id' => '6',
                'name' => 'SHIBPUR',
                'bank_branch_data' => [
                    'routing_no' => '35681302',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '2063',
                'bank_id' => '6',
                'name' => 'ATPARA',
                'bank_branch_data' => [
                    'routing_no' => '35720047',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '2064',
                'bank_id' => '6',
                'name' => 'CHESRAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35720063',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '2065',
                'bank_id' => '6',
                'name' => 'BARAHATTA',
                'bank_branch_data' => [
                    'routing_no' => '35720076',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '2066',
                'bank_id' => '6',
                'name' => 'CHALLHISHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35720139',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '2067',
                'bank_id' => '6',
                'name' => 'DUOZ',
                'bank_branch_data' => [
                    'routing_no' => '35720168',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '2068',
                'bank_id' => '6',
                'name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35720197',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '2069',
                'bank_id' => '6',
                'name' => 'HIRANPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35720250',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '2070',
                'bank_id' => '6',
                'name' => 'JATRABARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35720313',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '2071',
                'bank_id' => '6',
                'name' => 'KADAMSRI',
                'bank_branch_data' => [
                    'routing_no' => '35720405',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '2072',
                'bank_id' => '6',
                'name' => 'KALMAKANDA',
                'bank_branch_data' => [
                    'routing_no' => '35720434',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '2073',
                'bank_id' => '6',
                'name' => 'KENDUA',
                'bank_branch_data' => [
                    'routing_no' => '35720463',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '2074',
                'bank_id' => '6',
                'name' => 'KHALIAJURI',
                'bank_branch_data' => [
                    'routing_no' => '35720492',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '2075',
                'bank_id' => '6',
                'name' => 'KHALISHAUR',
                'bank_branch_data' => [
                    'routing_no' => '35720526',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '2076',
                'bank_id' => '6',
                'name' => 'KURPAR',
                'bank_branch_data' => [
                    'routing_no' => '35720555',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '2077',
                'bank_id' => '6',
                'name' => 'MADAN',
                'bank_branch_data' => [
                    'routing_no' => '35720618',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '2078',
                'bank_id' => '6',
                'name' => 'MAHANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35720676',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '2079',
                'bank_id' => '6',
                'name' => 'NAZIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35720700',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '2080',
                'bank_id' => '6',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '35720739',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '2081',
                'bank_id' => '6',
                'name' => 'PURBADHALA',
                'bank_branch_data' => [
                    'routing_no' => '35720797',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '2082',
                'bank_id' => '6',
                'name' => 'SHAHITPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35720913',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '2083',
                'bank_id' => '6',
                'name' => 'SHYAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35720942',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '2084',
                'bank_id' => '6',
                'name' => 'TATIRKONA',
                'bank_branch_data' => [
                    'routing_no' => '35720971',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '2085',
                'bank_id' => '6',
                'name' => 'ABIRPARA',
                'bank_branch_data' => [
                    'routing_no' => '35750088',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '2086',
                'bank_id' => '6',
                'name' => 'KORMULLAH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35750091',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '2087',
                'bank_id' => '6',
                'name' => 'YASIN HAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35750125',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '2088',
                'bank_id' => '6',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '35750259',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '2089',
                'bank_id' => '6',
                'name' => 'BATTOLY BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35750288',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '2090',
                'bank_id' => '6',
                'name' => 'CHAR FHAKIRA',
                'bank_branch_data' => [
                    'routing_no' => '35750462',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '2091',
                'bank_id' => '6',
                'name' => 'CHARISHWER',
                'bank_branch_data' => [
                    'routing_no' => '35750525',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '2092',
                'bank_id' => '6',
                'name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'routing_no' => '35750583',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '2093',
                'bank_id' => '6',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '35750675',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '2094',
                'bank_id' => '6',
                'name' => 'DEOTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35750888',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '2095',
                'bank_id' => '6',
                'name' => 'HAZARIHAT',
                'bank_branch_data' => [
                    'routing_no' => '35751090',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '2096',
                'bank_id' => '6',
                'name' => 'JAHAJMARA',
                'bank_branch_data' => [
                    'routing_no' => '35751124',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '2097',
                'bank_id' => '6',
                'name' => 'KABIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '35751216',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '2098',
                'bank_id' => '6',
                'name' => 'KADIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35751245',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '2099',
                'bank_id' => '6',
                'name' => 'KOTOBER HAT',
                'bank_branch_data' => [
                    'routing_no' => '35751511',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '2100',
                'bank_id' => '6',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '35751579',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '2101',
                'bank_id' => '6',
                'name' => 'MIARHAT',
                'bank_branch_data' => [
                    'routing_no' => '35751603',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '2102',
                'bank_id' => '6',
                'name' => 'NEAZPUR',
                'bank_branch_data' => [
                    'routing_no' => '35751690',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '2103',
                'bank_id' => '6',
                'name' => 'RAM NARAYANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35751937',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '2104',
                'bank_id' => '6',
                'name' => 'KHASHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35752028',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '2105',
                'bank_id' => '6',
                'name' => 'SENBAG',
                'bank_branch_data' => [
                    'routing_no' => '35752086',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '2106',
                'bank_id' => '6',
                'name' => 'SHAHEBALIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35752149',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '2107',
                'bank_id' => '6',
                'name' => 'SONAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35752260',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '2108',
                'bank_id' => '6',
                'name' => 'AULIAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35780045',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '2109',
                'bank_id' => '6',
                'name' => 'AMKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '35780061',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '2110',
                'bank_id' => '6',
                'name' => 'LAMNA BORO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35780087',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '2111',
                'bank_id' => '6',
                'name' => 'BAHERCHAR BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '35780137',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '2112',
                'bank_id' => '6',
                'name' => 'BAUPHAL',
                'bank_branch_data' => [
                    'routing_no' => '35780195',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '2113',
                'bank_id' => '6',
                'name' => 'CHANDPURA BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '35780229',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '2114',
                'bank_id' => '6',
                'name' => 'CHAR KAJAL',
                'bank_branch_data' => [
                    'routing_no' => '35780258',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '2115',
                'bank_id' => '6',
                'name' => 'CHIKNIKANDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35780287',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '2116',
                'bank_id' => '6',
                'name' => 'CHOTOBIGHAI',
                'bank_branch_data' => [
                    'routing_no' => '35780311',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '2117',
                'bank_id' => '6',
                'name' => 'DASHMINA',
                'bank_branch_data' => [
                    'routing_no' => '35780340',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '2118',
                'bank_id' => '6',
                'name' => 'DUMKI',
                'bank_branch_data' => [
                    'routing_no' => '35780432',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '2119',
                'bank_id' => '6',
                'name' => 'GABUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35780461',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '2120',
                'bank_id' => '6',
                'name' => 'GALACHIPA',
                'bank_branch_data' => [
                    'routing_no' => '35780490',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '2121',
                'bank_id' => '6',
                'name' => 'KALAPARA',
                'bank_branch_data' => [
                    'routing_no' => '35780524',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '2122',
                'bank_id' => '6',
                'name' => 'KALAYIA BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '35780582',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '2123',
                'bank_id' => '6',
                'name' => 'KARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '35780674',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '2124',
                'bank_id' => '6',
                'name' => 'KESHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '35780708',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '2125',
                'bank_id' => '6',
                'name' => 'KOAKATA',
                'bank_branch_data' => [
                    'routing_no' => '35780795',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '2126',
                'bank_id' => '6',
                'name' => 'MOHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35780858',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '2127',
                'bank_id' => '6',
                'name' => 'MURADIA',
                'bank_branch_data' => [
                    'routing_no' => '35780911',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '2128',
                'bank_id' => '6',
                'name' => 'NAGARERHAT',
                'bank_branch_data' => [
                    'routing_no' => '35780940',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '2129',
                'bank_id' => '6',
                'name' => 'PANPATTY',
                'bank_branch_data' => [
                    'routing_no' => '35781060',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '2130',
                'bank_id' => '6',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35781099',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '2131',
                'bank_id' => '6',
                'name' => 'PUKUR JANA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35781215',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '2132',
                'bank_id' => '6',
                'name' => 'SUBIDKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35781273',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '2133',
                'bank_id' => '6',
                'name' => 'BAITAKATA',
                'bank_branch_data' => [
                    'routing_no' => '35790048',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '2134',
                'bank_id' => '6',
                'name' => 'BALDIA',
                'bank_branch_data' => [
                    'routing_no' => '35790077',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '2135',
                'bank_id' => '6',
                'name' => 'BARA MASUYA',
                'bank_branch_data' => [
                    'routing_no' => '35790101',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '2136',
                'bank_id' => '6',
                'name' => 'BHANDARIA',
                'bank_branch_data' => [
                    'routing_no' => '35790130',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '2137',
                'bank_id' => '6',
                'name' => 'CHANDIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35790169',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '2138',
                'bank_id' => '6',
                'name' => 'CHILTOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35790198',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '2139',
                'bank_id' => '6',
                'name' => 'DHANISAFA',
                'bank_branch_data' => [
                    'routing_no' => '35790222',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '2140',
                'bank_id' => '6',
                'name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35790251',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '2141',
                'bank_id' => '6',
                'name' => 'EKRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35790280',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '2142',
                'bank_id' => '6',
                'name' => 'GULISHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35790314',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '2143',
                'bank_id' => '6',
                'name' => 'KALAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35790406',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '2144',
                'bank_id' => '6',
                'name' => 'KAWKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35790435',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '2145',
                'bank_id' => '6',
                'name' => 'KOWRIKHARA',
                'bank_branch_data' => [
                    'routing_no' => '35790464',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '2146',
                'bank_id' => '6',
                'name' => 'KURIANA',
                'bank_branch_data' => [
                    'routing_no' => '35790493',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '2147',
                'bank_id' => '6',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '35790527',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '2148',
                'bank_id' => '6',
                'name' => 'MATIBHANGA',
                'bank_branch_data' => [
                    'routing_no' => '35790556',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '2149',
                'bank_id' => '6',
                'name' => 'MULGRAMHAT',
                'bank_branch_data' => [
                    'routing_no' => '35790677',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '2150',
                'bank_id' => '6',
                'name' => 'NAZIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35790701',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '2151',
                'bank_id' => '6',
                'name' => 'PIROJPUR',
                'bank_branch_data' => [
                    'routing_no' => '35790769',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '2152',
                'bank_id' => '6',
                'name' => 'SHANKAR PASHA',
                'bank_branch_data' => [
                    'routing_no' => '35790880',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '2153',
                'bank_id' => '6',
                'name' => 'SHAPLEZA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35790914',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '2154',
                'bank_id' => '6',
                'name' => 'SWARUPKATI',
                'bank_branch_data' => [
                    'routing_no' => '35790972',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '2155',
                'bank_id' => '6',
                'name' => 'TELIKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35791005',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '2156',
                'bank_id' => '6',
                'name' => 'ZIA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35791063',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '2157',
                'bank_id' => '6',
                'name' => 'BAGDULI HAT',
                'bank_branch_data' => [
                    'routing_no' => '35820071',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '2158',
                'bank_id' => '6',
                'name' => 'BAHADURPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35820105',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '2159',
                'bank_id' => '6',
                'name' => 'BALIAKANDI',
                'bank_branch_data' => [
                    'routing_no' => '35820163',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '2160',
                'bank_id' => '6',
                'name' => 'GOALANDA',
                'bank_branch_data' => [
                    'routing_no' => '35820284',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '2161',
                'bank_id' => '6',
                'name' => 'HABASHPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35820347',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '2162',
                'bank_id' => '6',
                'name' => 'MRIGIBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35820497',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '2163',
                'bank_id' => '6',
                'name' => 'MULGHAR',
                'bank_branch_data' => [
                    'routing_no' => '35820521',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '2164',
                'bank_id' => '6',
                'name' => 'PANCHURIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35820613',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '2165',
                'bank_id' => '6',
                'name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '35820671',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '2166',
                'bank_id' => '6',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '35820734',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '2167',
                'bank_id' => '6',
                'name' => 'RATANDIA',
                'bank_branch_data' => [
                    'routing_no' => '35820826',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '2168',
                'bank_id' => '6',
                'name' => 'SONAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35820855',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '2169',
                'bank_id' => '6',
                'name' => 'SREEPUR',
                'bank_branch_data' => [
                    'routing_no' => '35820884',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '2170',
                'bank_id' => '6',
                'name' => 'BAGHAICHARI',
                'bank_branch_data' => [
                    'routing_no' => '35840048',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '2171',
                'bank_id' => '6',
                'name' => 'BARKAL',
                'bank_branch_data' => [
                    'routing_no' => '35840130',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '2172',
                'bank_id' => '6',
                'name' => 'BELAICHARI',
                'bank_branch_data' => [
                    'routing_no' => '35840169',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '2173',
                'bank_id' => '6',
                'name' => 'JURACHARI',
                'bank_branch_data' => [
                    'routing_no' => '35840251',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '2174',
                'bank_id' => '6',
                'name' => 'KAPTAI',
                'bank_branch_data' => [
                    'routing_no' => '35840280',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '2175',
                'bank_id' => '6',
                'name' => 'KAWKHALI',
                'bank_branch_data' => [
                    'routing_no' => '35840343',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '2176',
                'bank_id' => '6',
                'name' => 'LANGADU',
                'bank_branch_data' => [
                    'routing_no' => '35840372',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '2177',
                'bank_id' => '6',
                'name' => 'NANIAR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '35840406',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '2178',
                'bank_id' => '6',
                'name' => 'RAIKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35840464',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '2179',
                'bank_id' => '6',
                'name' => 'RAJOSTHALI',
                'bank_branch_data' => [
                    'routing_no' => '35840493',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '2180',
                'bank_id' => '6',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '35840527',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '2181',
                'bank_id' => '6',
                'name' => 'BURIRHAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860073',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '2182',
                'bank_id' => '6',
                'name' => 'BHEDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35860107',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '2183',
                'bank_id' => '6',
                'name' => 'CHIKANDI',
                'bank_branch_data' => [
                    'routing_no' => '35860165',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '2184',
                'bank_id' => '6',
                'name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'routing_no' => '35860194',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '2185',
                'bank_id' => '6',
                'name' => 'D. M. KHALI',
                'bank_branch_data' => [
                    'routing_no' => '35860202',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '2186',
                'bank_id' => '6',
                'name' => 'DOGRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860228',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '2187',
                'bank_id' => '6',
                'name' => 'GHARIER',
                'bank_branch_data' => [
                    'routing_no' => '35860257',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '2188',
                'bank_id' => '6',
                'name' => 'GHARISHAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '35860310',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '2189',
                'bank_id' => '6',
                'name' => 'HATURIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860378',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '2190',
                'bank_id' => '6',
                'name' => 'KARTIKPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860402',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '2191',
                'bank_id' => '6',
                'name' => 'KODALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860431',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '2192',
                'bank_id' => '6',
                'name' => 'KONESWAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860460',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '2193',
                'bank_id' => '6',
                'name' => 'LAWKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '35860499',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '2194',
                'bank_id' => '6',
                'name' => 'NAGER PARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860552',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '2195',
                'bank_id' => '6',
                'name' => 'NARIA',
                'bank_branch_data' => [
                    'routing_no' => '35860581',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '2196',
                'bank_id' => '6',
                'name' => 'SHAKHIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35860644',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '2197',
                'bank_id' => '6',
                'name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'routing_no' => '35860673',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '2198',
                'bank_id' => '6',
                'name' => 'ZAJIRA',
                'bank_branch_data' => [
                    'routing_no' => '35860707',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '2199',
                'bank_id' => '6',
                'name' => 'ASASUNI',
                'bank_branch_data' => [
                    'routing_no' => '35870076',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '2200',
                'bank_id' => '6',
                'name' => 'BALIADANGA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35870139',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '2201',
                'bank_id' => '6',
                'name' => 'BHOMRA STHAL BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '35870289',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '2202',
                'bank_id' => '6',
                'name' => 'DEBHATA',
                'bank_branch_data' => [
                    'routing_no' => '35870371',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '2203',
                'bank_id' => '6',
                'name' => 'DULIHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35870405',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '2204',
                'bank_id' => '6',
                'name' => 'GHONA',
                'bank_branch_data' => [
                    'routing_no' => '35870463',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '2205',
                'bank_id' => '6',
                'name' => 'GUNAKARKATI',
                'bank_branch_data' => [
                    'routing_no' => '35870526',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '2206',
                'bank_id' => '6',
                'name' => 'KALAROA',
                'bank_branch_data' => [
                    'routing_no' => '35870584',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '2207',
                'bank_id' => '6',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35870618',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '2208',
                'bank_id' => '6',
                'name' => 'KHORDO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35870700',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '2209',
                'bank_id' => '6',
                'name' => 'KRISNA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35870739',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '2210',
                'bank_id' => '6',
                'name' => 'RAWIE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35871062',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '2211',
                'bank_id' => '6',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '35871091',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '2212',
                'bank_id' => '6',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35871183',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '2213',
                'bank_id' => '6',
                'name' => 'SHYAM NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35871217',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '2214',
                'bank_id' => '6',
                'name' => 'SONABARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35871246',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '2215',
                'bank_id' => '6',
                'name' => 'TALA',
                'bank_branch_data' => [
                    'routing_no' => '35871309',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '2216',
                'bank_id' => '6',
                'name' => 'BAJITKHILA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35890043',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '2217',
                'bank_id' => '6',
                'name' => 'BHAYADANGA',
                'bank_branch_data' => [
                    'routing_no' => '35890072',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '2218',
                'bank_id' => '6',
                'name' => 'GAZIR KHAMAR',
                'bank_branch_data' => [
                    'routing_no' => '35890135',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '2219',
                'bank_id' => '6',
                'name' => 'JHENAIGATI',
                'bank_branch_data' => [
                    'routing_no' => '35890164',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '2220',
                'bank_id' => '6',
                'name' => 'KAKARKANDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35890180',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '2221',
                'bank_id' => '6',
                'name' => 'KURUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35890256',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '2222',
                'bank_id' => '6',
                'name' => 'KUSHUMHATI',
                'bank_branch_data' => [
                    'routing_no' => '35890285',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '2223',
                'bank_id' => '6',
                'name' => 'NAKLA',
                'bank_branch_data' => [
                    'routing_no' => '35890319',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '2224',
                'bank_id' => '6',
                'name' => 'NALITABARI',
                'bank_branch_data' => [
                    'routing_no' => '35890348',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '2225',
                'bank_id' => '6',
                'name' => 'NALZORA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35890377',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '2226',
                'bank_id' => '6',
                'name' => 'NAYABIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35890498',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '2227',
                'bank_id' => '6',
                'name' => 'PATHAKALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35890522',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '2228',
                'bank_id' => '6',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '35890551',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '2229',
                'bank_id' => '6',
                'name' => 'SREEBORDI',
                'bank_branch_data' => [
                    'routing_no' => '35890643',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '2230',
                'bank_id' => '6',
                'name' => 'BOALIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900054',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '2231',
                'bank_id' => '6',
                'name' => 'BADAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35900070',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '2232',
                'bank_id' => '6',
                'name' => 'DAWRAI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900083',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '2233',
                'bank_id' => '6',
                'name' => 'RAFINAGAR UNION',
                'bank_branch_data' => [
                    'routing_no' => '35900096',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '2234',
                'bank_id' => '6',
                'name' => 'BANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900104',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '2235',
                'bank_id' => '6',
                'name' => 'BISHWAMVARPUR',
                'bank_branch_data' => [
                    'routing_no' => '35900191',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '2236',
                'bank_id' => '6',
                'name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '35900225',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '2237',
                'bank_id' => '6',
                'name' => 'DERAI',
                'bank_branch_data' => [
                    'routing_no' => '35900254',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '2238',
                'bank_id' => '6',
                'name' => 'DHARAMPASSA',
                'bank_branch_data' => [
                    'routing_no' => '35900283',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '2239',
                'bank_id' => '6',
                'name' => 'DOWARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900346',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '2240',
                'bank_id' => '6',
                'name' => 'DUNGRIA',
                'bank_branch_data' => [
                    'routing_no' => '35900375',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '2241',
                'bank_id' => '6',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35900438',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '2242',
                'bank_id' => '6',
                'name' => 'GOLAKPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900467',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '2243',
                'bank_id' => '6',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '35900496',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '2244',
                'bank_id' => '6',
                'name' => 'JAOWA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900559',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '2245',
                'bank_id' => '6',
                'name' => 'JOYNAGAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900588',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '2246',
                'bank_id' => '6',
                'name' => 'KOLKOLIA',
                'bank_branch_data' => [
                    'routing_no' => '35900641',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '2247',
                'bank_id' => '6',
                'name' => 'MADHYA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35900670',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '2248',
                'bank_id' => '6',
                'name' => 'MINA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900704',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '2249',
                'bank_id' => '6',
                'name' => 'MONGALKATA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900717',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '2250',
                'bank_id' => '6',
                'name' => 'MOINPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900762',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '2251',
                'bank_id' => '6',
                'name' => 'PATHARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900883',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '2252',
                'bank_id' => '6',
                'name' => 'RAJANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900917',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '2253',
                'bank_id' => '6',
                'name' => 'RANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35900946',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '2254',
                'bank_id' => '6',
                'name' => 'SACHNA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35901008',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '2255',
                'bank_id' => '6',
                'name' => 'SALLA',
                'bank_branch_data' => [
                    'routing_no' => '35901037',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '2256',
                'bank_id' => '6',
                'name' => 'SHYAMAR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '35901066',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '2257',
                'bank_id' => '6',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35901129',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '2258',
                'bank_id' => '6',
                'name' => 'TAHIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '35901211',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '2259',
                'bank_id' => '6',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '35910044',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '2260',
                'bank_id' => '6',
                'name' => 'BALAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35910165',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '2261',
                'bank_id' => '6',
                'name' => 'BANDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35910194',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '2262',
                'bank_id' => '6',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35910310',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '2263',
                'bank_id' => '6',
                'name' => 'BHABANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35910349',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '2264',
                'bank_id' => '6',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '35910431',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '2265',
                'bank_id' => '6',
                'name' => 'CHARKHAI',
                'bank_branch_data' => [
                    'routing_no' => '35910707',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '2266',
                'bank_id' => '6',
                'name' => 'CHOTULBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35910765',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '2267',
                'bank_id' => '6',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35910910',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '2268',
                'bank_id' => '6',
                'name' => 'DARPANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '35911122',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '2269',
                'bank_id' => '6',
                'name' => 'DEWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35911272',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '2270',
                'bank_id' => '6',
                'name' => 'DOYAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35911319',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '2271',
                'bank_id' => '6',
                'name' => 'DUBAG BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35911335',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '2272',
                'bank_id' => '6',
                'name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35911364',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '2273',
                'bank_id' => '6',
                'name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35911601',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '2274',
                'bank_id' => '6',
                'name' => 'GOWAINGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35911669',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '2275',
                'bank_id' => '6',
                'name' => 'HADARPAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35911706',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '2276',
                'bank_id' => '6',
                'name' => 'JAINTAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35911814',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '2277',
                'bank_id' => '6',
                'name' => 'KANAIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '35912084',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '2278',
                'bank_id' => '6',
                'name' => 'KHAJANCHIGAON',
                'bank_branch_data' => [
                    'routing_no' => '35912268',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '2279',
                'bank_id' => '6',
                'name' => 'MOGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35912684',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '2280',
                'bank_id' => '6',
                'name' => 'RATANGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35913012',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '2281',
                'bank_id' => '6',
                'name' => 'SALUTIKAR',
                'bank_branch_data' => [
                    'routing_no' => '35913104',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '2282',
                'bank_id' => '6',
                'name' => 'SHIBER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35913375',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '2283',
                'bank_id' => '6',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '35913559',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '2284',
                'bank_id' => '6',
                'name' => 'TAJPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35913841',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '2285',
                'bank_id' => '6',
                'name' => 'ZAKIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '35914129',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '2286',
                'bank_id' => '6',
                'name' => 'MOGRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930082',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '2287',
                'bank_id' => '6',
                'name' => 'SHOLAKURI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930095',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '2288',
                'bank_id' => '6',
                'name' => 'BATHULI SADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930129',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '2289',
                'bank_id' => '6',
                'name' => 'ALOKDIA',
                'bank_branch_data' => [
                    'routing_no' => '35930132',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '2290',
                'bank_id' => '6',
                'name' => 'TOKTARCHALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930145',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '2291',
                'bank_id' => '6',
                'name' => 'SINGURIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930190',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '2292',
                'bank_id' => '6',
                'name' => 'AWLIABAD',
                'bank_branch_data' => [
                    'routing_no' => '35930282',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '2293',
                'bank_id' => '6',
                'name' => 'BALLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930316',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '2294',
                'bank_id' => '6',
                'name' => 'BANGRA',
                'bank_branch_data' => [
                    'routing_no' => '35930345',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '2295',
                'bank_id' => '6',
                'name' => 'BASAIL',
                'bank_branch_data' => [
                    'routing_no' => '35930374',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '2296',
                'bank_id' => '6',
                'name' => 'BHABKHANDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930408',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '2297',
                'bank_id' => '6',
                'name' => 'BHADRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930437',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '2298',
                'bank_id' => '6',
                'name' => 'BHUANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35930466',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '2299',
                'bank_id' => '6',
                'name' => 'CHARPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35930529',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '2300',
                'bank_id' => '6',
                'name' => 'DELDUAR',
                'bank_branch_data' => [
                    'routing_no' => '35930587',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '2301',
                'bank_id' => '6',
                'name' => 'DHAN BARI',
                'bank_branch_data' => [
                    'routing_no' => '35930679',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '2302',
                'bank_id' => '6',
                'name' => 'ELENGA',
                'bank_branch_data' => [
                    'routing_no' => '35930824',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '2303',
                'bank_id' => '6',
                'name' => 'GHATAIL',
                'bank_branch_data' => [
                    'routing_no' => '35930916',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '2304',
                'bank_id' => '6',
                'name' => 'GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '35931007',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '2305',
                'bank_id' => '6',
                'name' => 'GOYHATTA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35931065',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '2306',
                'bank_id' => '6',
                'name' => 'HATUBHANGA',
                'bank_branch_data' => [
                    'routing_no' => '35931128',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '2307',
                'bank_id' => '6',
                'name' => 'JHAWAIL',
                'bank_branch_data' => [
                    'routing_no' => '35931210',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '2308',
                'bank_id' => '6',
                'name' => 'KACHUABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35931249',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '2309',
                'bank_id' => '6',
                'name' => 'KAKRAID',
                'bank_branch_data' => [
                    'routing_no' => '35931278',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '2310',
                'bank_id' => '6',
                'name' => 'KALIHATI',
                'bank_branch_data' => [
                    'routing_no' => '35931302',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '2311',
                'bank_id' => '6',
                'name' => 'KARATIA',
                'bank_branch_data' => [
                    'routing_no' => '35931360',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '2312',
                'bank_id' => '6',
                'name' => 'MADHUPUR',
                'bank_branch_data' => [
                    'routing_no' => '35931481',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '2313',
                'bank_id' => '6',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '35931515',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '2314',
                'bank_id' => '6',
                'name' => 'NAGARPUR',
                'bank_branch_data' => [
                    'routing_no' => '35931694',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '2315',
                'bank_id' => '6',
                'name' => 'NALUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35931728',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '2316',
                'bank_id' => '6',
                'name' => 'PORABARI',
                'bank_branch_data' => [
                    'routing_no' => '35931999',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '2317',
                'bank_id' => '6',
                'name' => 'SAHABATPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35932080',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '2318',
                'bank_id' => '6',
                'name' => 'SAJANPUR',
                'bank_branch_data' => [
                    'routing_no' => '35932114',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '2319',
                'bank_id' => '6',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '35932206',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '2320',
                'bank_id' => '6',
                'name' => 'SIMLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '35932235',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '2321',
                'bank_id' => '6',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '35932293',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '2322',
                'bank_id' => '7',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '40270003',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '2323',
                'bank_id' => '7',
                'name' => 'DHAKA',
                'bank_branch_data' => [
                    'routing_no' => '40271510',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '2324',
                'bank_id' => '8',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '47060287',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '2325',
                'bank_id' => '8',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '47100376',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '2326',
                'bank_id' => '8',
                'name' => 'MOKAMTALA',
                'bank_branch_data' => [
                    'routing_no' => '47101933',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '2327',
                'bank_id' => '8',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '47120101',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '2328',
                'bank_id' => '8',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '47120435',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '2329',
                'bank_id' => '8',
                'name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '47121368',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '2330',
                'bank_id' => '8',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '47151967',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '2331',
                'bank_id' => '8',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '47154272',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '2332',
                'bank_id' => '8',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '47191156',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '2333',
                'bank_id' => '8',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '47220256',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '2334',
                'bank_id' => '8',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '47260229',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '2335',
                'bank_id' => '8',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '47260508',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '2336',
                'bank_id' => '8',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '47261336',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '2337',
                'bank_id' => '8',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '47262564',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '2338',
                'bank_id' => '8',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '47270006',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '2339',
                'bank_id' => '8',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '47270093',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '2340',
                'bank_id' => '8',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '47271571',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '2341',
                'bank_id' => '8',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '47274244',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '2342',
                'bank_id' => '8',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '47280670',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '2343',
                'bank_id' => '8',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '47290523',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '2344',
                'bank_id' => '8',
                'name' => 'JAINA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '47330670',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '2345',
                'bank_id' => '8',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '47360611',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '2346',
                'bank_id' => '8',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '47410945',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '2347',
                'bank_id' => '8',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '47440649',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '2348',
                'bank_id' => '8',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '47471542',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '2349',
                'bank_id' => '8',
                'name' => 'HOSSAINPUR',
                'bank_branch_data' => [
                    'routing_no' => '47480409',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '2350',
                'bank_id' => '8',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '47560703',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '2351',
                'bank_id' => '8',
                'name' => 'SATURIA',
                'bank_branch_data' => [
                    'routing_no' => '47560761',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '2352',
                'bank_id' => '8',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '47581182',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '2353',
                'bank_id' => '8',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '47591422',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '2354',
                'bank_id' => '8',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '47611757',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '2355',
                'bank_id' => '8',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '47641185',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '2356',
                'bank_id' => '8',
                'name' => 'KANCHPUR',
                'bank_branch_data' => [
                    'routing_no' => '47670127',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '2357',
                'bank_id' => '8',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '47671184',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '2358',
                'bank_id' => '8',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '47680670',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '2359',
                'bank_id' => '8',
                'name' => 'KAZIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '47730559',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '2360',
                'bank_id' => '8',
                'name' => 'NOAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '47751725',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '2361',
                'bank_id' => '8',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '47761786',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '2362',
                'bank_id' => '8',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '47811931',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '2363',
                'bank_id' => '8',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '47851454',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '2364',
                'bank_id' => '8',
                'name' => 'OSMANI NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '47910140',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '2365',
                'bank_id' => '8',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '47913550',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '2366',
                'bank_id' => '8',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '47932294',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '2367',
                'bank_id' => '9',
                'name' => 'CHITALMARI',
                'bank_branch_data' => [
                    'routing_no' => '55010229',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '2368',
                'bank_id' => '9',
                'name' => 'FAKIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '55010461',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '2369',
                'bank_id' => '9',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '55060282',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '2370',
                'bank_id' => '9',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '55100371',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '2371',
                'bank_id' => '9',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '55102890',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '2372',
                'bank_id' => '9',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '55130312',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '2373',
                'bank_id' => '9',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '55150134',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '2374',
                'bank_id' => '9',
                'name' => 'ASAD GANJ',
                'bank_branch_data' => [
                    'routing_no' => '55150589',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '2375',
                'bank_id' => '9',
                'name' => 'C.E.P.Z.',
                'bank_branch_data' => [
                    'routing_no' => '55151575',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '2376',
                'bank_id' => '9',
                'name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '55152440',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '2377',
                'bank_id' => '9',
                'name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '55152561',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '2378',
                'bank_id' => '9',
                'name' => 'JORARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '55153610',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '2379',
                'bank_id' => '9',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '55153649',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '2380',
                'bank_id' => '9',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '55154277',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '2381',
                'bank_id' => '9',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '55155926',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '2382',
                'bank_id' => '9',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '55156138',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '2383',
                'bank_id' => '9',
                'name' => 'SHOLA SAHAR',
                'bank_branch_data' => [
                    'routing_no' => '55157337',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '2384',
                'bank_id' => '9',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '55191151',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '2385',
                'bank_id' => '9',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55220251',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '2386',
                'bank_id' => '9',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '55260437',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '2387',
                'bank_id' => '9',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '55260558',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '2388',
                'bank_id' => '9',
                'name' => 'CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '55260732',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '2389',
                'bank_id' => '9',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '55261186',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '2390',
                'bank_id' => '9',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '55261728',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '2391',
                'bank_id' => '9',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55262530',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '2392',
                'bank_id' => '9',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '55262985',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '2393',
                'bank_id' => '9',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '55264091',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '2394',
                'bank_id' => '9',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '55264309',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '2395',
                'bank_id' => '9',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '55264633',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '2396',
                'bank_id' => '9',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '55270001',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '2397',
                'bank_id' => '9',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55270551',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '2398',
                'bank_id' => '9',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '55270885',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '2399',
                'bank_id' => '9',
                'name' => 'DHAKA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '55271789',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '2400',
                'bank_id' => '9',
                'name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '55271905',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '2401',
                'bank_id' => '9',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '55272683',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '2402',
                'bank_id' => '9',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '55272988',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '2403',
                'bank_id' => '9',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '55273640',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '2404',
                'bank_id' => '9',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '55274007',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '2405',
                'bank_id' => '9',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55274423',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '2406',
                'bank_id' => '9',
                'name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '55276342',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '2407',
                'bank_id' => '9',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '55290528',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '2408',
                'bank_id' => '9',
                'name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '55330554',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '2409',
                'bank_id' => '9',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '55331003',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '2410',
                'bank_id' => '9',
                'name' => 'KOTALIPARA',
                'bank_branch_data' => [
                    'routing_no' => '55350671',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '2411',
                'bank_id' => '9',
                'name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'routing_no' => '55351096',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '2412',
                'bank_id' => '9',
                'name' => 'MIRPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55360137',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '2413',
                'bank_id' => '9',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '55410940',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '2414',
                'bank_id' => '9',
                'name' => 'JHIKORGHACHA',
                'bank_branch_data' => [
                    'routing_no' => '55411099',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '2415',
                'bank_id' => '9',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '55440644',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '2416',
                'bank_id' => '9',
                'name' => 'KDA AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '55471400',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '2417',
                'bank_id' => '9',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '55471547',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '2418',
                'bank_id' => '9',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '55500942',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '2419',
                'bank_id' => '9',
                'name' => 'CHOUMUHANA',
                'bank_branch_data' => [
                    'routing_no' => '55580375',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '2420',
                'bank_id' => '9',
                'name' => 'ISHWARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '55611181',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '2421',
                'bank_id' => '9',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '55611752',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '2422',
                'bank_id' => '9',
                'name' => 'TANBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55671789',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '2423',
                'bank_id' => '9',
                'name' => 'MADHABDI SME',
                'bank_branch_data' => [
                    'routing_no' => '55680688',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '2424',
                'bank_id' => '9',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '55680859',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '2425',
                'bank_id' => '9',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '55691093',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '2426',
                'bank_id' => '9',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '55700250',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '2427',
                'bank_id' => '9',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '55730796',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '2428',
                'bank_id' => '9',
                'name' => 'MOHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '55780854',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '2429',
                'bank_id' => '9',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '55790523',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '2430',
                'bank_id' => '9',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '55811936',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '2431',
                'bank_id' => '9',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '55851459',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '2432',
                'bank_id' => '9',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '55871097',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '2433',
                'bank_id' => '9',
                'name' => 'BELKUCHI',
                'bank_branch_data' => [
                    'routing_no' => '55880220',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '2434',
                'bank_id' => '9',
                'name' => 'SONARPARA',
                'bank_branch_data' => [
                    'routing_no' => '55913450',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '2435',
                'bank_id' => '9',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '55914154',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '2436',
                'bank_id' => '9',
                'name' => 'ELENGA',
                'bank_branch_data' => [
                    'routing_no' => '55930820',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '2437',
                'bank_id' => '10',
                'name' => 'BAGERHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '60010085',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '2438',
                'bank_id' => '10',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '60060280',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '2439',
                'bank_id' => '10',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '60090100',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '2440',
                'bank_id' => '10',
                'name' => 'CHARMATHA',
                'bank_branch_data' => [
                    'routing_no' => '60100087',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '2441',
                'bank_id' => '10',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '60100379',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '2442',
                'bank_id' => '10',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '60102748',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '2443',
                'bank_id' => '10',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '60120438',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '2444',
                'bank_id' => '10',
                'name' => 'KASBA',
                'bank_branch_data' => [
                    'routing_no' => '60121037',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '2445',
                'bank_id' => '10',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '60130310',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '2446',
                'bank_id' => '10',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60130886',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '2447',
                'bank_id' => '10',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '60150132',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '2448',
                'bank_id' => '10',
                'name' => 'ASAD GANJ',
                'bank_branch_data' => [
                    'routing_no' => '60150587',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '2449',
                'bank_id' => '10',
                'name' => 'BAHADDAR HAT SME',
                'bank_branch_data' => [
                    'routing_no' => '60150808',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '2450',
                'bank_id' => '10',
                'name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'routing_no' => '60150945',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '2451',
                'bank_id' => '10',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '60151481',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '2452',
                'bank_id' => '10',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60151931',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '2453',
                'bank_id' => '10',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '60153168',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '2454',
                'bank_id' => '10',
                'name' => 'HATHAZARI SME',
                'bank_branch_data' => [
                    'routing_no' => '60153234',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '2455',
                'bank_id' => '10',
                'name' => 'KADAMTOLI SME',
                'bank_branch_data' => [
                    'routing_no' => '60153742',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '2456',
                'bank_id' => '10',
                'name' => 'KAZIR DEWRI',
                'bank_branch_data' => [
                    'routing_no' => '60154154',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '2457',
                'bank_id' => '10',
                'name' => 'LOHAGARA SME',
                'bank_branch_data' => [
                    'routing_no' => '60154675',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '2458',
                'bank_id' => '10',
                'name' => 'MADAM BIBIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '60154691',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '2459',
                'bank_id' => '10',
                'name' => 'MOMIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '60155261',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '2460',
                'bank_id' => '10',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '60155324',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '2461',
                'bank_id' => '10',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '60155658',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '2462',
                'bank_id' => '10',
                'name' => 'CHITTAGONG NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '60155674',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '2463',
                'bank_id' => '10',
                'name' => 'PAHARTALI SME',
                'bank_branch_data' => [
                    'routing_no' => '60155937',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '2464',
                'bank_id' => '10',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '60156165',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '2465',
                'bank_id' => '10',
                'name' => 'RAOZAN SME',
                'bank_branch_data' => [
                    'routing_no' => '60156507',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '2466',
                'bank_id' => '10',
                'name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '60157393',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '2467',
                'bank_id' => '10',
                'name' => 'SK. MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '60157427',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '2468',
                'bank_id' => '10',
                'name' => 'JIBAN NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '60180065',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '2469',
                'bank_id' => '10',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '60180199',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '2470',
                'bank_id' => '10',
                'name' => 'BARURA',
                'bank_branch_data' => [
                    'routing_no' => '60190497',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '2471',
                'bank_id' => '10',
                'name' => 'CHANDINA',
                'bank_branch_data' => [
                    'routing_no' => '60190884',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '2472',
                'bank_id' => '10',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '60191159',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '2473',
                'bank_id' => '10',
                'name' => 'COMILLA SME',
                'bank_branch_data' => [
                    'routing_no' => '60191162',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '2474',
                'bank_id' => '10',
                'name' => 'GOURIPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '60192129',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '2475',
                'bank_id' => '10',
                'name' => 'LAKSAM',
                'bank_branch_data' => [
                    'routing_no' => '60192716',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '2476',
                'bank_id' => '10',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '60220167',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '2477',
                'bank_id' => '10',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60220259',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '2478',
                'bank_id' => '10',
                'name' => 'ASHKONA',
                'bank_branch_data' => [
                    'routing_no' => '60260206',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '2479',
                'bank_id' => '10',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '60260222',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '2480',
                'bank_id' => '10',
                'name' => 'BADDA SME',
                'bank_branch_data' => [
                    'routing_no' => '60260356',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '2481',
                'bank_id' => '10',
                'name' => 'UTTARA JASHIM UDDIN AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '60260385',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '2482',
                'bank_id' => '10',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '60260435',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '2483',
                'bank_id' => '10',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '60260501',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '2484',
                'bank_id' => '10',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '60260556',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '2485',
                'bank_id' => '10',
                'name' => 'BEGUM ROKEYA SAWRANI',
                'bank_branch_data' => [
                    'routing_no' => '60260677',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '2486',
                'bank_id' => '10',
                'name' => 'BANANI-11',
                'bank_branch_data' => [
                    'routing_no' => '60260680',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '2487',
                'bank_id' => '10',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '60260727',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '2488',
                'bank_id' => '10',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '60260914',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '2489',
                'bank_id' => '10',
                'name' => 'ASAD GATE',
                'bank_branch_data' => [
                    'routing_no' => '60261184',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '2490',
                'bank_id' => '10',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '60261205',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '2491',
                'bank_id' => '10',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '60261339',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '2492',
                'bank_id' => '10',
                'name' => 'ELEPHANT ROAD SME',
                'bank_branch_data' => [
                    'routing_no' => '60261355',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '2493',
                'bank_id' => '10',
                'name' => 'ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '60261397',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '2494',
                'bank_id' => '10',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '60261726',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '2495',
                'bank_id' => '10',
                'name' => 'GULSHAN NORTH',
                'bank_branch_data' => [
                    'routing_no' => '60261876',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '2496',
                'bank_id' => '10',
                'name' => 'HAZARIBAGH SME',
                'bank_branch_data' => [
                    'routing_no' => '60261971',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '2497',
                'bank_id' => '10',
                'name' => 'MIRPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '60261997',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '2498',
                'bank_id' => '10',
                'name' => 'KARWAN BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '60262541',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '2499',
                'bank_id' => '10',
                'name' => 'MANDA',
                'bank_branch_data' => [
                    'routing_no' => '60262875',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '2500',
                'bank_id' => '10',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '60262983',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '2501',
                'bank_id' => '10',
                'name' => 'MOHAMMADPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '60263290',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '2502',
                'bank_id' => '10',
                'name' => 'NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60263429',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '2503',
                'bank_id' => '10',
                'name' => 'PANTHA PATH SME',
                'bank_branch_data' => [
                    'routing_no' => '60263629',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '2504',
                'bank_id' => '10',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '60264099',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '2505',
                'bank_id' => '10',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '60264307',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '2506',
                'bank_id' => '10',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '60264631',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '2507',
                'bank_id' => '10',
                'name' => 'UTTARA SME',
                'bank_branch_data' => [
                    'routing_no' => '60264644',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '2508',
                'bank_id' => '10',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '60270009',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '2509',
                'bank_id' => '10',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60270346',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '2510',
                'bank_id' => '10',
                'name' => 'BASHABOO SME',
                'bank_branch_data' => [
                    'routing_no' => '60270988',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '2511',
                'bank_id' => '10',
                'name' => 'BIJOY NAGAR SME',
                'bank_branch_data' => [
                    'routing_no' => '60271103',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '2512',
                'bank_id' => '10',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '60271424',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '2513',
                'bank_id' => '10',
                'name' => 'DEMRA SME',
                'bank_branch_data' => [
                    'routing_no' => '60271495',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '2514',
                'bank_id' => '10',
                'name' => 'DHOLAIKHAL SME',
                'bank_branch_data' => [
                    'routing_no' => '60271840',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '2515',
                'bank_id' => '10',
                'name' => 'DOHAR',
                'bank_branch_data' => [
                    'routing_no' => '60272052',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '2516',
                'bank_id' => '10',
                'name' => 'GANAKBARI',
                'bank_branch_data' => [
                    'routing_no' => '60272410',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '2517',
                'bank_id' => '10',
                'name' => 'GANDARIA',
                'bank_branch_data' => [
                    'routing_no' => '60272449',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '2518',
                'bank_id' => '10',
                'name' => 'GRAPHICS BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '60272531',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '2519',
                'bank_id' => '10',
                'name' => 'GULISTAN SME',
                'bank_branch_data' => [
                    'routing_no' => '60272544',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '2520',
                'bank_id' => '10',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '60272681',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '2521',
                'bank_id' => '10',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60272807',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '2522',
                'bank_id' => '10',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '60272986',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '2523',
                'bank_id' => '10',
                'name' => 'JATRABARI SME',
                'bank_branch_data' => [
                    'routing_no' => '60273235',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '2524',
                'bank_id' => '10',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60273648',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '2525',
                'bank_id' => '10',
                'name' => 'MITFORD',
                'bank_branch_data' => [
                    'routing_no' => '60274063',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '2526',
                'bank_id' => '10',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60274184',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '2527',
                'bank_id' => '10',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '60274247',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '2528',
                'bank_id' => '10',
                'name' => 'MOTIJHEEL SME',
                'bank_branch_data' => [
                    'routing_no' => '60274289',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '2529',
                'bank_id' => '10',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60274692',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '2530',
                'bank_id' => '10',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '60274726',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '2531',
                'bank_id' => '10',
                'name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '60275741',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '2532',
                'bank_id' => '10',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '60276074',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '2533',
                'bank_id' => '10',
                'name' => 'SHAMBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60276287',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '2534',
                'bank_id' => '10',
                'name' => 'SHYAMPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '60276537',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '2535',
                'bank_id' => '10',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '60277099',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '2536',
                'bank_id' => '10',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '60280673',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '2537',
                'bank_id' => '10',
                'name' => 'BHANGA',
                'bank_branch_data' => [
                    'routing_no' => '60290289',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '2538',
                'bank_id' => '10',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '60290526',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '2539',
                'bank_id' => '10',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '60300524',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '2540',
                'bank_id' => '10',
                'name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '60301486',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '2541',
                'bank_id' => '10',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60320588',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '2542',
                'bank_id' => '10',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60330228',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '2543',
                'bank_id' => '10',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '60330523',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '2544',
                'bank_id' => '10',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '60330736',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '2545',
                'bank_id' => '10',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '60330886',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '2546',
                'bank_id' => '10',
                'name' => 'KONABARI SME',
                'bank_branch_data' => [
                    'routing_no' => '60330952',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '2547',
                'bank_id' => '10',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '60331001',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '2548',
                'bank_id' => '10',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '60331630',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '2549',
                'bank_id' => '10',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60350374',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '2550',
                'bank_id' => '10',
                'name' => 'BANIACHANG',
                'bank_branch_data' => [
                    'routing_no' => '60360164',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '2551',
                'bank_id' => '10',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60360614',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '2552',
                'bank_id' => '10',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60361097',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '2553',
                'bank_id' => '10',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '60380407',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '2554',
                'bank_id' => '10',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '60390855',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '2555',
                'bank_id' => '10',
                'name' => 'BENAPOLE SME',
                'bank_branch_data' => [
                    'routing_no' => '60410298',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '2556',
                'bank_id' => '10',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '60410948',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '2557',
                'bank_id' => '10',
                'name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '60411639',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '2558',
                'bank_id' => '10',
                'name' => 'JHALOKATHI SME',
                'bank_branch_data' => [
                    'routing_no' => '60420325',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '2559',
                'bank_id' => '10',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '60440642',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '2560',
                'bank_id' => '10',
                'name' => 'BORO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60470375',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '2561',
                'bank_id' => '10',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '60470704',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '2562',
                'bank_id' => '10',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '60471545',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '2563',
                'bank_id' => '10',
                'name' => 'BHAIRAB',
                'bank_branch_data' => [
                    'routing_no' => '60480194',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '2564',
                'bank_id' => '10',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60480673',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '2565',
                'bank_id' => '10',
                'name' => 'BHERAMARA',
                'bank_branch_data' => [
                    'routing_no' => '60500287',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '2566',
                'bank_id' => '10',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '60500940',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '2567',
                'bank_id' => '10',
                'name' => 'PORADAH',
                'bank_branch_data' => [
                    'routing_no' => '60501365',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '2568',
                'bank_id' => '10',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '60510730',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '2569',
                'bank_id' => '10',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '60510972',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '2570',
                'bank_id' => '10',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '60540405',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '2571',
                'bank_id' => '10',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '60540700',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '2572',
                'bank_id' => '10',
                'name' => 'MAGURA SME',
                'bank_branch_data' => [
                    'routing_no' => '60550561',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '2573',
                'bank_id' => '10',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60560614',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '2574',
                'bank_id' => '10',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '60571579',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '2575',
                'bank_id' => '10',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60581185',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '2576',
                'bank_id' => '10',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60591038',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '2577',
                'bank_id' => '10',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '60591425',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '2578',
                'bank_id' => '10',
                'name' => 'MUKTAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '60611697',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '2579',
                'bank_id' => '10',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '60611750',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '2580',
                'bank_id' => '10',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '60641096',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '2581',
                'bank_id' => '10',
                'name' => 'NAOGAON SME',
                'bank_branch_data' => [
                    'routing_no' => '60641191',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '2582',
                'bank_id' => '10',
                'name' => 'ARAIHAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '60670054',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '2583',
                'bank_id' => '10',
                'name' => 'BHULTA SME',
                'bank_branch_data' => [
                    'routing_no' => '60670238',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '2584',
                'bank_id' => '10',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60671187',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '2585',
                'bank_id' => '10',
                'name' => 'SIDDIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60671608',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '2586',
                'bank_id' => '10',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '60671695',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '2587',
                'bank_id' => '10',
                'name' => 'NITAIGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '60675459',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '2588',
                'bank_id' => '10',
                'name' => 'GHORASAL',
                'bank_branch_data' => [
                    'routing_no' => '60680499',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '2589',
                'bank_id' => '10',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '60680673',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '2590',
                'bank_id' => '10',
                'name' => 'MONOHARDI',
                'bank_branch_data' => [
                    'routing_no' => '60680736',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '2591',
                'bank_id' => '10',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '60680857',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '2592',
                'bank_id' => '10',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '60691091',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '2593',
                'bank_id' => '10',
                'name' => 'CHAPAI NAWABGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '60700261',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '2594',
                'bank_id' => '10',
                'name' => 'NETROKONA SME',
                'bank_branch_data' => [
                    'routing_no' => '60720746',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '2595',
                'bank_id' => '10',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '60730736',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '2596',
                'bank_id' => '10',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '60730794',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '2597',
                'bank_id' => '10',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60750158',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '2598',
                'bank_id' => '10',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '60750679',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '2599',
                'bank_id' => '10',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '60761213',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '2600',
                'bank_id' => '10',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '60761789',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '2601',
                'bank_id' => '10',
                'name' => 'PANCHAGARH SME',
                'bank_branch_data' => [
                    'routing_no' => '60770567',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '2602',
                'bank_id' => '10',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '60781093',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '2603',
                'bank_id' => '10',
                'name' => 'PIROJPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '60790776',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '2604',
                'bank_id' => '10',
                'name' => 'SWARUPKATI SME',
                'bank_branch_data' => [
                    'routing_no' => '60790989',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '2605',
                'bank_id' => '10',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '60811934',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '2606',
                'bank_id' => '10',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '60820738',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '2607',
                'bank_id' => '10',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '60851457',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '2608',
                'bank_id' => '10',
                'name' => 'BHEDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60860101',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '2609',
                'bank_id' => '10',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '60871095',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '2610',
                'bank_id' => '10',
                'name' => 'BELKUCHI',
                'bank_branch_data' => [
                    'routing_no' => '60880228',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '2611',
                'bank_id' => '10',
                'name' => 'SERAJGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '60881885',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '2612',
                'bank_id' => '10',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '60881906',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '2613',
                'bank_id' => '10',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '60890555',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '2614',
                'bank_id' => '10',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '60901123',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '2615',
                'bank_id' => '10',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60910314',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '2616',
                'bank_id' => '10',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '60910435',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '2617',
                'bank_id' => '10',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60911542',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '2618',
                'bank_id' => '10',
                'name' => 'SYLHET SOUTH SURMA SME',
                'bank_branch_data' => [
                    'routing_no' => '60913508',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '2619',
                'bank_id' => '10',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '60913553',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '2620',
                'bank_id' => '10',
                'name' => 'SYLHET BONDOR SME',
                'bank_branch_data' => [
                    'routing_no' => '60913566',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '2621',
                'bank_id' => '10',
                'name' => 'SYLHET UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '60913737',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '2622',
                'bank_id' => '10',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '60914152',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '2623',
                'bank_id' => '10',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '60932200',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '2624',
                'bank_id' => '10',
                'name' => 'GHATAIL SME',
                'bank_branch_data' => [
                    'routing_no' => '60932297',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '2625',
                'bank_id' => '10',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '60932305',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '2626',
                'bank_id' => '10',
                'name' => 'THAKURGAON SME',
                'bank_branch_data' => [
                    'routing_no' => '60940997',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '2627',
                'bank_id' => '11',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '65150137',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '2628',
                'bank_id' => '11',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '65261189',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '2629',
                'bank_id' => '11',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '65261721',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '2630',
                'bank_id' => '11',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '65262988',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '2631',
                'bank_id' => '11',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '65264636',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '2632',
                'bank_id' => '11',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '65270004',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '2633',
                'bank_id' => '11',
                'name' => 'DHAKA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '65271782',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '2634',
                'bank_id' => '11',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '65913558',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '2635',
                'bank_id' => '12',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '70060283',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '2636',
                'bank_id' => '12',
                'name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '70090103',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '2637',
                'bank_id' => '12',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '70100372',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '2638',
                'bank_id' => '12',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '70120431',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '2639',
                'bank_id' => '12',
                'name' => 'KASBA',
                'bank_branch_data' => [
                    'routing_no' => '70121030',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '2640',
                'bank_id' => '12',
                'name' => 'RUPSHA',
                'bank_branch_data' => [
                    'routing_no' => '70130155',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '2641',
                'bank_id' => '12',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '70130313',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '2642',
                'bank_id' => '12',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '70130526',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '2643',
                'bank_id' => '12',
                'name' => 'FARIDGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70130676',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '2644',
                'bank_id' => '12',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70130889',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '2645',
                'bank_id' => '12',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '70150135',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '2646',
                'bank_id' => '12',
                'name' => 'BANK ASIA BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '70150269',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '2647',
                'bank_id' => '12',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '70150469',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '2648',
                'bank_id' => '12',
                'name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '70150793',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '2649',
                'bank_id' => '12',
                'name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '70151213',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '2650',
                'bank_id' => '12',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '70151484',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '2651',
                'bank_id' => '12',
                'name' => 'C.E.P.Z.',
                'bank_branch_data' => [
                    'routing_no' => '70151576',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '2652',
                'bank_id' => '12',
                'name' => 'CHAKTAI SME',
                'bank_branch_data' => [
                    'routing_no' => '70151763',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '2653',
                'bank_id' => '12',
                'name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '70152562',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '2654',
                'bank_id' => '12',
                'name' => 'KAMAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '70153974',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '2655',
                'bank_id' => '12',
                'name' => 'KEPZ',
                'bank_branch_data' => [
                    'routing_no' => '70154078',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '2656',
                'bank_id' => '12',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70154278',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '2657',
                'bank_id' => '12',
                'name' => 'LICHU BAGAN',
                'bank_branch_data' => [
                    'routing_no' => '70154636',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '2658',
                'bank_id' => '12',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '70154665',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '2659',
                'bank_id' => '12',
                'name' => 'MCB SK. MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70154902',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '2660',
                'bank_id' => '12',
                'name' => 'OXYGEN MOUR SME',
                'bank_branch_data' => [
                    'routing_no' => '70155880',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '2661',
                'bank_id' => '12',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70157512',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '2662',
                'bank_id' => '12',
                'name' => 'STRAND ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70157570',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '2663',
                'bank_id' => '12',
                'name' => 'POTHER HAAT',
                'bank_branch_data' => [
                    'routing_no' => '70158140',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '2664',
                'bank_id' => '12',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '70191152',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '2665',
                'bank_id' => '12',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70191428',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '2666',
                'bank_id' => '12',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '70192119',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '2667',
                'bank_id' => '12',
                'name' => 'NANGALKOT',
                'bank_branch_data' => [
                    'routing_no' => '70193255',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '2668',
                'bank_id' => '12',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '70220252',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '2669',
                'bank_id' => '12',
                'name' => 'SONARGAON JANAPATH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70260083',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '2670',
                'bank_id' => '12',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '70260225',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '2671',
                'bank_id' => '12',
                'name' => 'ASHULIA SME',
                'bank_branch_data' => [
                    'routing_no' => '70260238',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '2672',
                'bank_id' => '12',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '70260559',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '2673',
                'bank_id' => '12',
                'name' => 'KAZIPARA',
                'bank_branch_data' => [
                    'routing_no' => '70260696',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '2674',
                'bank_id' => '12',
                'name' => 'GULSHAN-2',
                'bank_branch_data' => [
                    'routing_no' => '70260838',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '2675',
                'bank_id' => '12',
                'name' => 'CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '70260854',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '2676',
                'bank_id' => '12',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '70260917',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '2677',
                'bank_id' => '12',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '70261187',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '2678',
                'bank_id' => '12',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70261332',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '2679',
                'bank_id' => '12',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '70261729',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '2680',
                'bank_id' => '12',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '70262052',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '2681',
                'bank_id' => '12',
                'name' => 'LALMATIA',
                'bank_branch_data' => [
                    'routing_no' => '70262836',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '2682',
                'bank_id' => '12',
                'name' => 'MCB DILKUSHA',
                'bank_branch_data' => [
                    'routing_no' => '70262928',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '2683',
                'bank_id' => '12',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '70262986',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '2684',
                'bank_id' => '12',
                'name' => 'MIRPUR-1',
                'bank_branch_data' => [
                    'routing_no' => '70263101',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '2685',
                'bank_id' => '12',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '70263198',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '2686',
                'bank_id' => '12',
                'name' => 'NORTH SOUTH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70263556',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '2687',
                'bank_id' => '12',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '70263701',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '2688',
                'bank_id' => '12',
                'name' => 'RING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70263972',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '2689',
                'bank_id' => '12',
                'name' => 'RUPNAGAR SME',
                'bank_branch_data' => [
                    'routing_no' => '70264018',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '2690',
                'bank_id' => '12',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70264034',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '2691',
                'bank_id' => '12',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '70264092',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '2692',
                'bank_id' => '12',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '70264300',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '2693',
                'bank_id' => '12',
                'name' => 'TEJGOAN LINK ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70264526',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '2694',
                'bank_id' => '12',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '70264634',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '2695',
                'bank_id' => '12',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '70270002',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '2696',
                'bank_id' => '12',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '70270136',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '2697',
                'bank_id' => '12',
                'name' => 'PARAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '70270152',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '2698',
                'bank_id' => '12',
                'name' => 'AGLA',
                'bank_branch_data' => [
                    'routing_no' => '70270165',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '2699',
                'bank_id' => '12',
                'name' => 'PARIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '70270202',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '2700',
                'bank_id' => '12',
                'name' => 'ESKATON GARDEN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '70270215',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '2701',
                'bank_id' => '12',
                'name' => 'BASHABOO SME',
                'bank_branch_data' => [
                    'routing_no' => '70270981',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '2702',
                'bank_id' => '12',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '70271427',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '2703',
                'bank_id' => '12',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '70272684',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '2704',
                'bank_id' => '12',
                'name' => 'JATRABARI SME',
                'bank_branch_data' => [
                    'routing_no' => '70273238',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '2705',
                'bank_id' => '12',
                'name' => 'JURAIN SME',
                'bank_branch_data' => [
                    'routing_no' => '70273320',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '2706',
                'bank_id' => '12',
                'name' => 'KALATIA',
                'bank_branch_data' => [
                    'routing_no' => '70273438',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '2707',
                'bank_id' => '12',
                'name' => 'MCB BANANI',
                'bank_branch_data' => [
                    'routing_no' => '70274037',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '2708',
                'bank_id' => '12',
                'name' => 'MITFORD',
                'bank_branch_data' => [
                    'routing_no' => '70274066',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '2709',
                'bank_id' => '12',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '70274187',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '2710',
                'bank_id' => '12',
                'name' => 'PALTAN',
                'bank_branch_data' => [
                    'routing_no' => '70275207',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '2711',
                'bank_id' => '12',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '70275357',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '2712',
                'bank_id' => '12',
                'name' => 'RUHITPUR',
                'bank_branch_data' => [
                    'routing_no' => '70275836',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '2713',
                'bank_id' => '12',
                'name' => 'SCOTIA',
                'bank_branch_data' => [
                    'routing_no' => '70276130',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '2714',
                'bank_id' => '12',
                'name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '70276343',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '2715',
                'bank_id' => '12',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '70280676',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '2716',
                'bank_id' => '12',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '70290529',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '2717',
                'bank_id' => '12',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '70330526',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '2718',
                'bank_id' => '12',
                'name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '70330797',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '2719',
                'bank_id' => '12',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '70330942',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '2720',
                'bank_id' => '12',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '70331633',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '2721',
                'bank_id' => '12',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70350377',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '2722',
                'bank_id' => '12',
                'name' => 'MUKSUDPUR',
                'bank_branch_data' => [
                    'routing_no' => '70350735',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '2723',
                'bank_id' => '12',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '70410941',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '2724',
                'bank_id' => '12',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '70471548',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '2725',
                'bank_id' => '12',
                'name' => 'PURATON BORO BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '70472163',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '2726',
                'bank_id' => '12',
                'name' => 'BHAIRAB',
                'bank_branch_data' => [
                    'routing_no' => '70480197',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '2727',
                'bank_id' => '12',
                'name' => 'TARAIL',
                'bank_branch_data' => [
                    'routing_no' => '70481154',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '2728',
                'bank_id' => '12',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '70500943',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '2729',
                'bank_id' => '12',
                'name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70510191',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '2730',
                'bank_id' => '12',
                'name' => 'RAMGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '70511037',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '2731',
                'bank_id' => '12',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '70581188',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '2732',
                'bank_id' => '12',
                'name' => 'BALIGAON SME',
                'bank_branch_data' => [
                    'routing_no' => '70590153',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '2733',
                'bank_id' => '12',
                'name' => 'MALKHANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '70590887',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '2734',
                'bank_id' => '12',
                'name' => 'SERAJDIKHAN SME',
                'bank_branch_data' => [
                    'routing_no' => '70591286',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '2735',
                'bank_id' => '12',
                'name' => 'NIMTALA',
                'bank_branch_data' => [
                    'routing_no' => '70591660',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '2736',
                'bank_id' => '12',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '70611753',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '2737',
                'bank_id' => '12',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '70641099',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '2738',
                'bank_id' => '12',
                'name' => 'FATULLA',
                'bank_branch_data' => [
                    'routing_no' => '70670523',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '2739',
                'bank_id' => '12',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70671180',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '2740',
                'bank_id' => '12',
                'name' => 'HATIRDIA',
                'bank_branch_data' => [
                    'routing_no' => '70680555',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '2741',
                'bank_id' => '12',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '70680676',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '2742',
                'bank_id' => '12',
                'name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'routing_no' => '70750214',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '2743',
                'bank_id' => '12',
                'name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'routing_no' => '70750580',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '2744',
                'bank_id' => '12',
                'name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'routing_no' => '70752238',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '2745',
                'bank_id' => '12',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '70761216',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '2746',
                'bank_id' => '12',
                'name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'routing_no' => '70770557',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '2747',
                'bank_id' => '12',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '70811937',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '2748',
                'bank_id' => '12',
                'name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '70820678',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '2749',
                'bank_id' => '12',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '70851450',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '2750',
                'bank_id' => '12',
                'name' => 'SIRAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '70880050',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '2751',
                'bank_id' => '12',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '70900493',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '2752',
                'bank_id' => '12',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '70910317',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '2753',
                'bank_id' => '12',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '70912502',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '2754',
                'bank_id' => '12',
                'name' => 'REKABIBAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '70913035',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '2755',
                'bank_id' => '12',
                'name' => 'SYLHET UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '70913730',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '2756',
                'bank_id' => '12',
                'name' => 'SYLHET(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '70913798',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '2757',
                'bank_id' => '12',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '70932290',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '2758',
                'bank_id' => '13',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '75151968',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '2759',
                'bank_id' => '13',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '75261182',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '2760',
                'bank_id' => '13',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '75261724',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '2761',
                'bank_id' => '13',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '75270007',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '2762',
                'bank_id' => '13',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '75274245',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '2763',
                'bank_id' => '14',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '80151966',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '2764',
                'bank_id' => '14',
                'name' => 'CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '80260857',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '2765',
                'bank_id' => '14',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '80261180',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '2766',
                'bank_id' => '14',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '80261722',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '2767',
                'bank_id' => '14',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '80262989',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '2768',
                'bank_id' => '14',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '80263612',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '2769',
                'bank_id' => '14',
                'name' => 'TEJGAON',
                'bank_branch_data' => [
                    'routing_no' => '80264482',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '2770',
                'bank_id' => '14',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '80264637',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '2771',
                'bank_id' => '14',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '80270005',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '2772',
                'bank_id' => '14',
                'name' => 'DHAKA',
                'bank_branch_data' => [
                    'routing_no' => '80271512',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '2773',
                'bank_id' => '14',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '80671183',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '2774',
                'bank_id' => '14',
                'name' => 'SYLHET SADAR',
                'bank_branch_data' => [
                    'routing_no' => '80913670',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '2775',
                'bank_id' => '15',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '85060281',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '2776',
                'bank_id' => '15',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '85100370',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '2777',
                'bank_id' => '15',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '85102749',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '2778',
                'bank_id' => '15',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85120105',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '2779',
                'bank_id' => '15',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '85150133',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '2780',
                'bank_id' => '15',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '85150467',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '2781',
                'bank_id' => '15',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '85151482',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '2782',
                'bank_id' => '15',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '85152744',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '2783',
                'bank_id' => '15',
                'name' => 'GOHIRA',
                'bank_branch_data' => [
                    'routing_no' => '85153019',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '2784',
                'bank_id' => '15',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '85153169',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '2785',
                'bank_id' => '15',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '85153222',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '2786',
                'bank_id' => '15',
                'name' => 'ISLAMI BANKING',
                'bank_branch_data' => [
                    'routing_no' => '85153464',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '2787',
                'bank_id' => '15',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '85153648',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '2788',
                'bank_id' => '15',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85154276',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '2789',
                'bank_id' => '15',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '85155659',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '2790',
                'bank_id' => '15',
                'name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '85156166',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '2791',
                'bank_id' => '15',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '85191150',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '2792',
                'bank_id' => '15',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '85220168',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '2793',
                'bank_id' => '15',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85220250',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '2794',
                'bank_id' => '15',
                'name' => 'TEKNAF',
                'bank_branch_data' => [
                    'routing_no' => '85220913',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '2795',
                'bank_id' => '15',
                'name' => 'AMIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85260131',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '2796',
                'bank_id' => '15',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '85260344',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '2797',
                'bank_id' => '15',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '85260436',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '2798',
                'bank_id' => '15',
                'name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '85260528',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '2799',
                'bank_id' => '15',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '85260728',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '2800',
                'bank_id' => '15',
                'name' => 'DHAKA EPZ',
                'bank_branch_data' => [
                    'routing_no' => '85261093',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '2801',
                'bank_id' => '15',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '85261185',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '2802',
                'bank_id' => '15',
                'name' => 'DHANMONDI MODEL',
                'bank_branch_data' => [
                    'routing_no' => '85261198',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '2803',
                'bank_id' => '15',
                'name' => 'FANTASY KINGDOM',
                'bank_branch_data' => [
                    'routing_no' => '85261422',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '2804',
                'bank_id' => '15',
                'name' => 'KAMARPARA',
                'bank_branch_data' => [
                    'routing_no' => '85261514',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '2805',
                'bank_id' => '15',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '85261727',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '2806',
                'bank_id' => '15',
                'name' => 'GULSHAN CIRCLE-2',
                'bank_branch_data' => [
                    'routing_no' => '85261772',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '2807',
                'bank_id' => '15',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85262539',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '2808',
                'bank_id' => '15',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '85262984',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '2809',
                'bank_id' => '15',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '85263196',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '2810',
                'bank_id' => '15',
                'name' => 'SAVAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85264124',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '2811',
                'bank_id' => '15',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '85264632',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '2812',
                'bank_id' => '15',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '85270000',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '2813',
                'bank_id' => '15',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '85270884',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '2814',
                'bank_id' => '15',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '85272329',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '2815',
                'bank_id' => '15',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '85272682',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '2816',
                'bank_id' => '15',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85272808',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '2817',
                'bank_id' => '15',
                'name' => 'ISLAMI BANKING(MOTIJHEEL)',
                'bank_branch_data' => [
                    'routing_no' => '85272958',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '2818',
                'bank_id' => '15',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '85272987',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '2819',
                'bank_id' => '15',
                'name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '85273223',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '2820',
                'bank_id' => '15',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '85273281',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '2821',
                'bank_id' => '15',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '85273373',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '2822',
                'bank_id' => '15',
                'name' => 'KALATIA',
                'bank_branch_data' => [
                    'routing_no' => '85273436',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '2823',
                'bank_id' => '15',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85273649',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '2824',
                'bank_id' => '15',
                'name' => 'KHILGAON',
                'bank_branch_data' => [
                    'routing_no' => '85273678',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '2825',
                'bank_id' => '15',
                'name' => 'LOCAL OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '85273881',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '2826',
                'bank_id' => '15',
                'name' => 'SHAHJAHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '85274185',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '2827',
                'bank_id' => '15',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '85274248',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '2828',
                'bank_id' => '15',
                'name' => 'NANDIPARA',
                'bank_branch_data' => [
                    'routing_no' => '85274606',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '2829',
                'bank_id' => '15',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '85280674',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '2830',
                'bank_id' => '15',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '85290527',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '2831',
                'bank_id' => '15',
                'name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'routing_no' => '85300312',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '2832',
                'bank_id' => '15',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '85300525',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '2833',
                'bank_id' => '15',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85330229',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '2834',
                'bank_id' => '15',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '85330940',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '2835',
                'bank_id' => '15',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '85331002',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '2836',
                'bank_id' => '15',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85360615',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '2837',
                'bank_id' => '15',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '85410949',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '2838',
                'bank_id' => '15',
                'name' => 'K.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '85471175',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '2839',
                'bank_id' => '15',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85480229',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '2840',
                'bank_id' => '15',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85480674',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '2841',
                'bank_id' => '15',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '85510731',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '2842',
                'bank_id' => '15',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85581186',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '2843',
                'bank_id' => '15',
                'name' => 'RAZANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '85591192',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '2844',
                'bank_id' => '15',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '85611751',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '2845',
                'bank_id' => '15',
                'name' => 'ARAIHAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85670042',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '2846',
                'bank_id' => '15',
                'name' => 'B.B. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '85670071',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '2847',
                'bank_id' => '15',
                'name' => 'KALIBARI',
                'bank_branch_data' => [
                    'routing_no' => '85670118',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '2848',
                'bank_id' => '15',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '85670226',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '2849',
                'bank_id' => '15',
                'name' => 'GOPALDI',
                'bank_branch_data' => [
                    'routing_no' => '85670600',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '2850',
                'bank_id' => '15',
                'name' => 'MURAPARA',
                'bank_branch_data' => [
                    'routing_no' => '85671120',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '2851',
                'bank_id' => '15',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85671188',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '2852',
                'bank_id' => '15',
                'name' => 'PAGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85671333',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '2853',
                'bank_id' => '15',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '85680674',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '2854',
                'bank_id' => '15',
                'name' => 'PANCHADANA',
                'bank_branch_data' => [
                    'routing_no' => '85680979',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '2855',
                'bank_id' => '15',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85700259',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '2856',
                'bank_id' => '15',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '85730795',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '2857',
                'bank_id' => '15',
                'name' => 'MAIJDEE',
                'bank_branch_data' => [
                    'routing_no' => '85750067',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '2858',
                'bank_id' => '15',
                'name' => 'CHOWMUHANI',
                'bank_branch_data' => [
                    'routing_no' => '85750238',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '2859',
                'bank_id' => '15',
                'name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'routing_no' => '85752236',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '2860',
                'bank_id' => '15',
                'name' => 'CHATMOHAR',
                'bank_branch_data' => [
                    'routing_no' => '85760644',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '2861',
                'bank_id' => '15',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '85761780',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '2862',
                'bank_id' => '15',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '85811935',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '2863',
                'bank_id' => '15',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '85851458',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '2864',
                'bank_id' => '15',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '85871096',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '2865',
                'bank_id' => '15',
                'name' => 'BELKUCHI',
                'bank_branch_data' => [
                    'routing_no' => '85880229',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '2866',
                'bank_id' => '15',
                'name' => 'CHANDAIKONA',
                'bank_branch_data' => [
                    'routing_no' => '85880432',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '2867',
                'bank_id' => '15',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '85881873',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '2868',
                'bank_id' => '15',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '85881907',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '2869',
                'bank_id' => '15',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '85911543',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '2870',
                'bank_id' => '15',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '85912500',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '2871',
                'bank_id' => '15',
                'name' => 'MADINA MARKET',
                'bank_branch_data' => [
                    'routing_no' => '85912542',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '2872',
                'bank_id' => '15',
                'name' => 'UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '85914032',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '2873',
                'bank_id' => '15',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '85932298',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '2874',
                'bank_id' => '16',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '90060289',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '2875',
                'bank_id' => '16',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '90100378',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '2876',
                'bank_id' => '16',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90120103',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '2877',
                'bank_id' => '16',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '90120437',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '2878',
                'bank_id' => '16',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '90130319',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '2879',
                'bank_id' => '16',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '90150131',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '2880',
                'bank_id' => '16',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '90151480',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '2881',
                'bank_id' => '16',
                'name' => 'CHITTAGONG EPZ',
                'bank_branch_data' => [
                    'routing_no' => '90152005',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '2882',
                'bank_id' => '16',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '90152742',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '2883',
                'bank_id' => '16',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '90153167',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '2884',
                'bank_id' => '16',
                'name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '90153220',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '2885',
                'bank_id' => '16',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '90153646',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '2886',
                'bank_id' => '16',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '90153738',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '2887',
                'bank_id' => '16',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90154274',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '2888',
                'bank_id' => '16',
                'name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '90154661',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '2889',
                'bank_id' => '16',
                'name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '90155323',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '2890',
                'bank_id' => '16',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '90156135',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '2891',
                'bank_id' => '16',
                'name' => 'RAOZAN SME',
                'bank_branch_data' => [
                    'routing_no' => '90156506',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '2892',
                'bank_id' => '16',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '90180198',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '2893',
                'bank_id' => '16',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '90191158',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '2894',
                'bank_id' => '16',
                'name' => 'JHAWTALA SME',
                'bank_branch_data' => [
                    'routing_no' => '90191161',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '2895',
                'bank_id' => '16',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90191424',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '2896',
                'bank_id' => '16',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '90192115',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '2897',
                'bank_id' => '16',
                'name' => 'LAKSAM',
                'bank_branch_data' => [
                    'routing_no' => '90192715',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '2898',
                'bank_id' => '16',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '90220166',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '2899',
                'bank_id' => '16',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90220258',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '2900',
                'bank_id' => '16',
                'name' => 'ASHKONA',
                'bank_branch_data' => [
                    'routing_no' => '90260205',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '2901',
                'bank_id' => '16',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '90260221',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '2902',
                'bank_id' => '16',
                'name' => 'DUMNI',
                'bank_branch_data' => [
                    'routing_no' => '90260368',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '2903',
                'bank_id' => '16',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '90260434',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '2904',
                'bank_id' => '16',
                'name' => 'BANANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90260463',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '2905',
                'bank_id' => '16',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '90260500',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '2906',
                'bank_id' => '16',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '90260555',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '2907',
                'bank_id' => '16',
                'name' => 'DAKSHIN KHAN SME',
                'bank_branch_data' => [
                    'routing_no' => '90260926',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '2908',
                'bank_id' => '16',
                'name' => 'DHAKA EPZ',
                'bank_branch_data' => [
                    'routing_no' => '90261091',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '2909',
                'bank_id' => '16',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '90261183',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '2910',
                'bank_id' => '16',
                'name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '90261338',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '2911',
                'bank_id' => '16',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '90261725',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '2912',
                'bank_id' => '16',
                'name' => 'VATARA',
                'bank_branch_data' => [
                    'routing_no' => '90261804',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '2913',
                'bank_id' => '16',
                'name' => 'AMIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90262058',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '2914',
                'bank_id' => '16',
                'name' => 'KALAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '90262445',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '2915',
                'bank_id' => '16',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90262537',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '2916',
                'bank_id' => '16',
                'name' => 'MANDA',
                'bank_branch_data' => [
                    'routing_no' => '90262874',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '2917',
                'bank_id' => '16',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '90262982',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '2918',
                'bank_id' => '16',
                'name' => 'MIRPUR SECTION-10',
                'bank_branch_data' => [
                    'routing_no' => '90263136',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '2919',
                'bank_id' => '16',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '90263194',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '2920',
                'bank_id' => '16',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '90263286',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '2921',
                'bank_id' => '16',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '90263581',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '2922',
                'bank_id' => '16',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '90263707',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '2923',
                'bank_id' => '16',
                'name' => 'RING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '90263978',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '2924',
                'bank_id' => '16',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '90264030',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '2925',
                'bank_id' => '16',
                'name' => 'SAVAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90264122',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '2926',
                'bank_id' => '16',
                'name' => 'TEJGAON',
                'bank_branch_data' => [
                    'routing_no' => '90264485',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '2927',
                'bank_id' => '16',
                'name' => 'UTTAR KHAN',
                'bank_branch_data' => [
                    'routing_no' => '90264601',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '2928',
                'bank_id' => '16',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '90264630',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '2929',
                'bank_id' => '16',
                'name' => 'UTTARA SONARGAON JANAPAD',
                'bank_branch_data' => [
                    'routing_no' => '90264656',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '2930',
                'bank_id' => '16',
                'name' => 'ZIRABO',
                'bank_branch_data' => [
                    'routing_no' => '90264814',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '2931',
                'bank_id' => '16',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '90270008',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '2932',
                'bank_id' => '16',
                'name' => 'ABDULLAHPUR',
                'bank_branch_data' => [
                    'routing_no' => '90270129',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '2933',
                'bank_id' => '16',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '90270132',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '2934',
                'bank_id' => '16',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90270345',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '2935',
                'bank_id' => '16',
                'name' => 'PANTHAPATH',
                'bank_branch_data' => [
                    'routing_no' => '90270424',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '2936',
                'bank_id' => '16',
                'name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '90270640',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '2937',
                'bank_id' => '16',
                'name' => 'BIJOY NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '90271094',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '2938',
                'bank_id' => '16',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '90271423',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '2939',
                'bank_id' => '16',
                'name' => 'HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '90272569',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '2940',
                'bank_id' => '16',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90272806',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '2941',
                'bank_id' => '16',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '90272985',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '2942',
                'bank_id' => '16',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '90273289',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '2943',
                'bank_id' => '16',
                'name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90273647',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '2944',
                'bank_id' => '16',
                'name' => 'LOCAL OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '90273889',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '2945',
                'bank_id' => '16',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '90274004',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '2946',
                'bank_id' => '16',
                'name' => 'MEGHULA SME',
                'bank_branch_data' => [
                    'routing_no' => '90274059',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '2947',
                'bank_id' => '16',
                'name' => 'MOTIJHEEL FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '90274309',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '2948',
                'bank_id' => '16',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '90274725',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '2949',
                'bank_id' => '16',
                'name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90274817',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '2950',
                'bank_id' => '16',
                'name' => 'NETAIGONJ',
                'bank_branch_data' => [
                    'routing_no' => '90274996',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '2951',
                'bank_id' => '16',
                'name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '90275740',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '2952',
                'bank_id' => '16',
                'name' => 'RUHITPUR',
                'bank_branch_data' => [
                    'routing_no' => '90275832',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '2953',
                'bank_id' => '16',
                'name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '90276349',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '2954',
                'bank_id' => '16',
                'name' => 'WARI',
                'bank_branch_data' => [
                    'routing_no' => '90277001',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '2955',
                'bank_id' => '16',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '90280672',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '2956',
                'bank_id' => '16',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '90290525',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '2957',
                'bank_id' => '16',
                'name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '90300378',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '2958',
                'bank_id' => '16',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '90300523',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '2959',
                'bank_id' => '16',
                'name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '90301485',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '2960',
                'bank_id' => '16',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90320587',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '2961',
                'bank_id' => '16',
                'name' => 'MIRER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90330056',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '2962',
                'bank_id' => '16',
                'name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90330227',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '2963',
                'bank_id' => '16',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '90330522',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '2964',
                'bank_id' => '16',
                'name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '90330551',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '2965',
                'bank_id' => '16',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90330827',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '2966',
                'bank_id' => '16',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '90330885',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '2967',
                'bank_id' => '16',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '90330948',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '2968',
                'bank_id' => '16',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '90331000',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '2969',
                'bank_id' => '16',
                'name' => 'SHAFIPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '90331468',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '2970',
                'bank_id' => '16',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '90331639',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '2971',
                'bank_id' => '16',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90350373',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '2972',
                'bank_id' => '16',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90360613',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '2973',
                'bank_id' => '16',
                'name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '90380406',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '2974',
                'bank_id' => '16',
                'name' => 'DIGPITE',
                'bank_branch_data' => [
                    'routing_no' => '90390625',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '2975',
                'bank_id' => '16',
                'name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '90390854',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '2976',
                'bank_id' => '16',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '90410947',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '2977',
                'bank_id' => '16',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '90440641',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '2978',
                'bank_id' => '16',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '90471544',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '2979',
                'bank_id' => '16',
                'name' => 'BHAIRAB',
                'bank_branch_data' => [
                    'routing_no' => '90480193',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '2980',
                'bank_id' => '16',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90480672',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '2981',
                'bank_id' => '16',
                'name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '90490404',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '2982',
                'bank_id' => '16',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '90500949',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '2983',
                'bank_id' => '16',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '90510739',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '2984',
                'bank_id' => '16',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '90540404',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '2985',
                'bank_id' => '16',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '90550557',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '2986',
                'bank_id' => '16',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90560613',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '2987',
                'bank_id' => '16',
                'name' => 'SINGAIR',
                'bank_branch_data' => [
                    'routing_no' => '90560826',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '2988',
                'bank_id' => '16',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '90580101',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '2989',
                'bank_id' => '16',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '90581184',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '2990',
                'bank_id' => '16',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '90581726',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '2991',
                'bank_id' => '16',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '90591037',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '2992',
                'bank_id' => '16',
                'name' => 'MASTER BARI',
                'bank_branch_data' => [
                    'routing_no' => '90610150',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '2993',
                'bank_id' => '16',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '90611759',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '2994',
                'bank_id' => '16',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '90641187',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '2995',
                'bank_id' => '16',
                'name' => 'B.B. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '90670079',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '2996',
                'bank_id' => '16',
                'name' => 'KANCHPUR',
                'bank_branch_data' => [
                    'routing_no' => '90670129',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '2997',
                'bank_id' => '16',
                'name' => 'BHUIGHAR',
                'bank_branch_data' => [
                    'routing_no' => '90670208',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '2998',
                'bank_id' => '16',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '90670224',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '2999',
                'bank_id' => '16',
                'name' => 'NARAYANGANJ BSCIC',
                'bank_branch_data' => [
                    'routing_no' => '90670237',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '3000',
                'bank_id' => '16',
                'name' => 'GOPALDI',
                'bank_branch_data' => [
                    'routing_no' => '90670608',
                ],
                'enabled' => true,
            ],
        ];
    }
}
