<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch3Seeder extends Seeder
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
                    'id' => '2001',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HALUAGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611156',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '2002',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ISHWARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611185',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '2003',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JAIL ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611219',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '2004',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KANDIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611277',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '2005',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KASHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611301',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '2006',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KASHIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611330',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '2007',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MADHUPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611451',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '2008',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MAIZBAG BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611480',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '2009',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MAZIYALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611572',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '2010',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MOAZZEMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611664',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '2011',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MUKTAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611693',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '2012',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611756',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '2013',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611877',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '2014',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NANDAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35611901',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '2015',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SEED STORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35612089',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '2016',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHUSHUTI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35612155',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '2017',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SOHAGIBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35612171',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '2018',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TARAKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35612263',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '2019',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TRISHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35612355',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '2020',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HABOKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650254',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '2021',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650346',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '2022',
                    'bank_id' => '6',
                    'bank_branch_name' => 'LAHORIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650409',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '2023',
                    'bank_id' => '6',
                    'bank_branch_name' => 'LOHAGARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650467',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '2024',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NARAGATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650612',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '2025',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650641',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '2026',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHEIK HATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35650762',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '2027',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ARAIHAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670047',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '2028',
                    'bank_id' => '6',
                    'bank_branch_name' => 'POURO MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670089',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '2029',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670168',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '2030',
                    'bank_id' => '6',
                    'bank_branch_name' => 'FATULLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670526',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '2031',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOLAKANDAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670584',
                        ),
                    'enabled' => true,
                ),
            31 =>
                array(
                    'id' => '2032',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HOSSAINPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670647',
                        ),
                    'enabled' => true,
                ),
            32 =>
                array(
                    'id' => '2033',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ISAPURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670676',
                        ),
                    'enabled' => true,
                ),
            33 =>
                array(
                    'id' => '2034',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JHANGALIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670700',
                        ),
                    'enabled' => true,
                ),
            34 =>
                array(
                    'id' => '2035',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MADANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35670971',
                        ),
                    'enabled' => true,
                ),
            35 =>
                array(
                    'id' => '2036',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MOHAJAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35671091',
                        ),
                    'enabled' => true,
                ),
            36 =>
                array(
                    'id' => '2037',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35671183',
                        ),
                    'enabled' => true,
                ),
            37 =>
                array(
                    'id' => '2038',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RUPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35671459',
                        ),
                    'enabled' => true,
                ),
            38 =>
                array(
                    'id' => '2039',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SATGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35671512',
                        ),
                    'enabled' => true,
                ),
            39 =>
                array(
                    'id' => '2040',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SIDDIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35671604',
                        ),
                    'enabled' => true,
                ),
            40 =>
                array(
                    'id' => '2041',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35671691',
                        ),
                    'enabled' => true,
                ),
            41 =>
                array(
                    'id' => '2042',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHORONGORDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680053',
                        ),
                    'enabled' => true,
                ),
            42 =>
                array(
                    'id' => '2043',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ALGEE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680066',
                        ),
                    'enabled' => true,
                ),
            43 =>
                array(
                    'id' => '2044',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAHEPROTAP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680095',
                        ),
                    'enabled' => true,
                ),
            44 =>
                array(
                    'id' => '2045',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BABURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680103',
                        ),
                    'enabled' => true,
                ),
            45 =>
                array(
                    'id' => '2046',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PAIKAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680116',
                        ),
                    'enabled' => true,
                ),
            46 =>
                array(
                    'id' => '2047',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BANNAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680161',
                        ),
                    'enabled' => true,
                ),
            47 =>
                array(
                    'id' => '2048',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BARAICHA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680190',
                        ),
                    'enabled' => true,
                ),
            48 =>
                array(
                    'id' => '2049',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BELABO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680253',
                        ),
                    'enabled' => true,
                ),
            49 =>
                array(
                    'id' => '2050',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHARSUBUDDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680374',
                        ),
                    'enabled' => true,
                ),
            50 =>
                array(
                    'id' => '2051',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GHORASAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680495',
                        ),
                    'enabled' => true,
                ),
            51 =>
                array(
                    'id' => '2052',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HATIRDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680558',
                        ),
                    'enabled' => true,
                ),
            52 =>
                array(
                    'id' => '2053',
                    'bank_id' => '6',
                    'bank_branch_name' => 'LAKHPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680640',
                        ),
                    'enabled' => true,
                ),
            53 =>
                array(
                    'id' => '2054',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680732',
                        ),
                    'enabled' => true,
                ),
            54 =>
                array(
                    'id' => '2055',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MORJAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680761',
                        ),
                    'enabled' => true,
                ),
            55 =>
                array(
                    'id' => '2056',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MUNSEFER CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680774',
                        ),
                    'enabled' => true,
                ),
            56 =>
                array(
                    'id' => '2057',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680853',
                        ),
                    'enabled' => true,
                ),
            57 =>
                array(
                    'id' => '2058',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PALASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35680916',
                        ),
                    'enabled' => true,
                ),
            58 =>
                array(
                    'id' => '2059',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PORADIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35681007',
                        ),
                    'enabled' => true,
                ),
            59 =>
                array(
                    'id' => '2060',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAIPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35681094',
                        ),
                    'enabled' => true,
                ),
            60 =>
                array(
                    'id' => '2061',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHEKER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35681249',
                        ),
                    'enabled' => true,
                ),
            61 =>
                array(
                    'id' => '2062',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35681302',
                        ),
                    'enabled' => true,
                ),
            62 =>
                array(
                    'id' => '2063',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ATPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720047',
                        ),
                    'enabled' => true,
                ),
            63 =>
                array(
                    'id' => '2064',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHESRAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720063',
                        ),
                    'enabled' => true,
                ),
            64 =>
                array(
                    'id' => '2065',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BARAHATTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720076',
                        ),
                    'enabled' => true,
                ),
            65 =>
                array(
                    'id' => '2066',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHALLHISHA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720139',
                        ),
                    'enabled' => true,
                ),
            66 =>
                array(
                    'id' => '2067',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DUOZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720168',
                        ),
                    'enabled' => true,
                ),
            67 =>
                array(
                    'id' => '2068',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720197',
                        ),
                    'enabled' => true,
                ),
            68 =>
                array(
                    'id' => '2069',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HIRANPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720250',
                        ),
                    'enabled' => true,
                ),
            69 =>
                array(
                    'id' => '2070',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JATRABARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720313',
                        ),
                    'enabled' => true,
                ),
            70 =>
                array(
                    'id' => '2071',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KADAMSRI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720405',
                        ),
                    'enabled' => true,
                ),
            71 =>
                array(
                    'id' => '2072',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALMAKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720434',
                        ),
                    'enabled' => true,
                ),
            72 =>
                array(
                    'id' => '2073',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KENDUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720463',
                        ),
                    'enabled' => true,
                ),
            73 =>
                array(
                    'id' => '2074',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KHALIAJURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720492',
                        ),
                    'enabled' => true,
                ),
            74 =>
                array(
                    'id' => '2075',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KHALISHAUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720526',
                        ),
                    'enabled' => true,
                ),
            75 =>
                array(
                    'id' => '2076',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KURPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720555',
                        ),
                    'enabled' => true,
                ),
            76 =>
                array(
                    'id' => '2077',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MADAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720618',
                        ),
                    'enabled' => true,
                ),
            77 =>
                array(
                    'id' => '2078',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MAHANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720676',
                        ),
                    'enabled' => true,
                ),
            78 =>
                array(
                    'id' => '2079',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAZIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720700',
                        ),
                    'enabled' => true,
                ),
            79 =>
                array(
                    'id' => '2080',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720739',
                        ),
                    'enabled' => true,
                ),
            80 =>
                array(
                    'id' => '2081',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PURBADHALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720797',
                        ),
                    'enabled' => true,
                ),
            81 =>
                array(
                    'id' => '2082',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAHITPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720913',
                        ),
                    'enabled' => true,
                ),
            82 =>
                array(
                    'id' => '2083',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHYAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720942',
                        ),
                    'enabled' => true,
                ),
            83 =>
                array(
                    'id' => '2084',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TATIRKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35720971',
                        ),
                    'enabled' => true,
                ),
            84 =>
                array(
                    'id' => '2085',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ABIRPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750088',
                        ),
                    'enabled' => true,
                ),
            85 =>
                array(
                    'id' => '2086',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KORMULLAH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750091',
                        ),
                    'enabled' => true,
                ),
            86 =>
                array(
                    'id' => '2087',
                    'bank_id' => '6',
                    'bank_branch_name' => 'YASIN HAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750125',
                        ),
                    'enabled' => true,
                ),
            87 =>
                array(
                    'id' => '2088',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750259',
                        ),
                    'enabled' => true,
                ),
            88 =>
                array(
                    'id' => '2089',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BATTOLY BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750288',
                        ),
                    'enabled' => true,
                ),
            89 =>
                array(
                    'id' => '2090',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHAR FHAKIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750462',
                        ),
                    'enabled' => true,
                ),
            90 =>
                array(
                    'id' => '2091',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHARISHWER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750525',
                        ),
                    'enabled' => true,
                ),
            91 =>
                array(
                    'id' => '2092',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750583',
                        ),
                    'enabled' => true,
                ),
            92 =>
                array(
                    'id' => '2093',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750675',
                        ),
                    'enabled' => true,
                ),
            93 =>
                array(
                    'id' => '2094',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DEOTI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35750888',
                        ),
                    'enabled' => true,
                ),
            94 =>
                array(
                    'id' => '2095',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HAZARIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751090',
                        ),
                    'enabled' => true,
                ),
            95 =>
                array(
                    'id' => '2096',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JAHAJMARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751124',
                        ),
                    'enabled' => true,
                ),
            96 =>
                array(
                    'id' => '2097',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KABIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751216',
                        ),
                    'enabled' => true,
                ),
            97 =>
                array(
                    'id' => '2098',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KADIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751245',
                        ),
                    'enabled' => true,
                ),
            98 =>
                array(
                    'id' => '2099',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KOTOBER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751511',
                        ),
                    'enabled' => true,
                ),
            99 =>
                array(
                    'id' => '2100',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751579',
                        ),
                    'enabled' => true,
                ),
            100 =>
                array(
                    'id' => '2101',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MIARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751603',
                        ),
                    'enabled' => true,
                ),
            101 =>
                array(
                    'id' => '2102',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NEAZPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751690',
                        ),
                    'enabled' => true,
                ),
            102 =>
                array(
                    'id' => '2103',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAM NARAYANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35751937',
                        ),
                    'enabled' => true,
                ),
            103 =>
                array(
                    'id' => '2104',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KHASHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35752028',
                        ),
                    'enabled' => true,
                ),
            104 =>
                array(
                    'id' => '2105',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SENBAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35752086',
                        ),
                    'enabled' => true,
                ),
            105 =>
                array(
                    'id' => '2106',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAHEBALIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35752149',
                        ),
                    'enabled' => true,
                ),
            106 =>
                array(
                    'id' => '2107',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SONAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35752260',
                        ),
                    'enabled' => true,
                ),
            107 =>
                array(
                    'id' => '2108',
                    'bank_id' => '6',
                    'bank_branch_name' => 'AULIAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780045',
                        ),
                    'enabled' => true,
                ),
            108 =>
                array(
                    'id' => '2109',
                    'bank_id' => '6',
                    'bank_branch_name' => 'AMKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780061',
                        ),
                    'enabled' => true,
                ),
            109 =>
                array(
                    'id' => '2110',
                    'bank_id' => '6',
                    'bank_branch_name' => 'LAMNA BORO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780087',
                        ),
                    'enabled' => true,
                ),
            110 =>
                array(
                    'id' => '2111',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAHERCHAR BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780137',
                        ),
                    'enabled' => true,
                ),
            111 =>
                array(
                    'id' => '2112',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAUPHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780195',
                        ),
                    'enabled' => true,
                ),
            112 =>
                array(
                    'id' => '2113',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHANDPURA BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780229',
                        ),
                    'enabled' => true,
                ),
            113 =>
                array(
                    'id' => '2114',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHAR KAJAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780258',
                        ),
                    'enabled' => true,
                ),
            114 =>
                array(
                    'id' => '2115',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHIKNIKANDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780287',
                        ),
                    'enabled' => true,
                ),
            115 =>
                array(
                    'id' => '2116',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHOTOBIGHAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780311',
                        ),
                    'enabled' => true,
                ),
            116 =>
                array(
                    'id' => '2117',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DASHMINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780340',
                        ),
                    'enabled' => true,
                ),
            117 =>
                array(
                    'id' => '2118',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DUMKI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780432',
                        ),
                    'enabled' => true,
                ),
            118 =>
                array(
                    'id' => '2119',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GABUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780461',
                        ),
                    'enabled' => true,
                ),
            119 =>
                array(
                    'id' => '2120',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GALACHIPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780490',
                        ),
                    'enabled' => true,
                ),
            120 =>
                array(
                    'id' => '2121',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780524',
                        ),
                    'enabled' => true,
                ),
            121 =>
                array(
                    'id' => '2122',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALAYIA BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780582',
                        ),
                    'enabled' => true,
                ),
            122 =>
                array(
                    'id' => '2123',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780674',
                        ),
                    'enabled' => true,
                ),
            123 =>
                array(
                    'id' => '2124',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KESHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780708',
                        ),
                    'enabled' => true,
                ),
            124 =>
                array(
                    'id' => '2125',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KOAKATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780795',
                        ),
                    'enabled' => true,
                ),
            125 =>
                array(
                    'id' => '2126',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MOHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780858',
                        ),
                    'enabled' => true,
                ),
            126 =>
                array(
                    'id' => '2127',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MURADIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780911',
                        ),
                    'enabled' => true,
                ),
            127 =>
                array(
                    'id' => '2128',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAGARERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35780940',
                        ),
                    'enabled' => true,
                ),
            128 =>
                array(
                    'id' => '2129',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PANPATTY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35781060',
                        ),
                    'enabled' => true,
                ),
            129 =>
                array(
                    'id' => '2130',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35781099',
                        ),
                    'enabled' => true,
                ),
            130 =>
                array(
                    'id' => '2131',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PUKUR JANA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35781215',
                        ),
                    'enabled' => true,
                ),
            131 =>
                array(
                    'id' => '2132',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SUBIDKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35781273',
                        ),
                    'enabled' => true,
                ),
            132 =>
                array(
                    'id' => '2133',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAITAKATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790048',
                        ),
                    'enabled' => true,
                ),
            133 =>
                array(
                    'id' => '2134',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BALDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790077',
                        ),
                    'enabled' => true,
                ),
            134 =>
                array(
                    'id' => '2135',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BARA MASUYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790101',
                        ),
                    'enabled' => true,
                ),
            135 =>
                array(
                    'id' => '2136',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790130',
                        ),
                    'enabled' => true,
                ),
            136 =>
                array(
                    'id' => '2137',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHANDIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790169',
                        ),
                    'enabled' => true,
                ),
            137 =>
                array(
                    'id' => '2138',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHILTOLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790198',
                        ),
                    'enabled' => true,
                ),
            138 =>
                array(
                    'id' => '2139',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DHANISAFA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790222',
                        ),
                    'enabled' => true,
                ),
            139 =>
                array(
                    'id' => '2140',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790251',
                        ),
                    'enabled' => true,
                ),
            140 =>
                array(
                    'id' => '2141',
                    'bank_id' => '6',
                    'bank_branch_name' => 'EKRI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790280',
                        ),
                    'enabled' => true,
                ),
            141 =>
                array(
                    'id' => '2142',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GULISHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790314',
                        ),
                    'enabled' => true,
                ),
            142 =>
                array(
                    'id' => '2143',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790406',
                        ),
                    'enabled' => true,
                ),
            143 =>
                array(
                    'id' => '2144',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KAWKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790435',
                        ),
                    'enabled' => true,
                ),
            144 =>
                array(
                    'id' => '2145',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KOWRIKHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790464',
                        ),
                    'enabled' => true,
                ),
            145 =>
                array(
                    'id' => '2146',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KURIANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790493',
                        ),
                    'enabled' => true,
                ),
            146 =>
                array(
                    'id' => '2147',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790527',
                        ),
                    'enabled' => true,
                ),
            147 =>
                array(
                    'id' => '2148',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MATIBHANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790556',
                        ),
                    'enabled' => true,
                ),
            148 =>
                array(
                    'id' => '2149',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MULGRAMHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790677',
                        ),
                    'enabled' => true,
                ),
            149 =>
                array(
                    'id' => '2150',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAZIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790701',
                        ),
                    'enabled' => true,
                ),
            150 =>
                array(
                    'id' => '2151',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PIROJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790769',
                        ),
                    'enabled' => true,
                ),
            151 =>
                array(
                    'id' => '2152',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHANKAR PASHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790880',
                        ),
                    'enabled' => true,
                ),
            152 =>
                array(
                    'id' => '2153',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAPLEZA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790914',
                        ),
                    'enabled' => true,
                ),
            153 =>
                array(
                    'id' => '2154',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SWARUPKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35790972',
                        ),
                    'enabled' => true,
                ),
            154 =>
                array(
                    'id' => '2155',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TELIKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35791005',
                        ),
                    'enabled' => true,
                ),
            155 =>
                array(
                    'id' => '2156',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ZIA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35791063',
                        ),
                    'enabled' => true,
                ),
            156 =>
                array(
                    'id' => '2157',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAGDULI HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820071',
                        ),
                    'enabled' => true,
                ),
            157 =>
                array(
                    'id' => '2158',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAHADURPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820105',
                        ),
                    'enabled' => true,
                ),
            158 =>
                array(
                    'id' => '2159',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BALIAKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820163',
                        ),
                    'enabled' => true,
                ),
            159 =>
                array(
                    'id' => '2160',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOALANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820284',
                        ),
                    'enabled' => true,
                ),
            160 =>
                array(
                    'id' => '2161',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HABASHPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820347',
                        ),
                    'enabled' => true,
                ),
            161 =>
                array(
                    'id' => '2162',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MRIGIBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820497',
                        ),
                    'enabled' => true,
                ),
            162 =>
                array(
                    'id' => '2163',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MULGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820521',
                        ),
                    'enabled' => true,
                ),
            163 =>
                array(
                    'id' => '2164',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PANCHURIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820613',
                        ),
                    'enabled' => true,
                ),
            164 =>
                array(
                    'id' => '2165',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820671',
                        ),
                    'enabled' => true,
                ),
            165 =>
                array(
                    'id' => '2166',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820734',
                        ),
                    'enabled' => true,
                ),
            166 =>
                array(
                    'id' => '2167',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RATANDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820826',
                        ),
                    'enabled' => true,
                ),
            167 =>
                array(
                    'id' => '2168',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SONAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820855',
                        ),
                    'enabled' => true,
                ),
            168 =>
                array(
                    'id' => '2169',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SREEPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35820884',
                        ),
                    'enabled' => true,
                ),
            169 =>
                array(
                    'id' => '2170',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAGHAICHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840048',
                        ),
                    'enabled' => true,
                ),
            170 =>
                array(
                    'id' => '2171',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BARKAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840130',
                        ),
                    'enabled' => true,
                ),
            171 =>
                array(
                    'id' => '2172',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BELAICHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840169',
                        ),
                    'enabled' => true,
                ),
            172 =>
                array(
                    'id' => '2173',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JURACHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840251',
                        ),
                    'enabled' => true,
                ),
            173 =>
                array(
                    'id' => '2174',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KAPTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840280',
                        ),
                    'enabled' => true,
                ),
            174 =>
                array(
                    'id' => '2175',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KAWKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840343',
                        ),
                    'enabled' => true,
                ),
            175 =>
                array(
                    'id' => '2176',
                    'bank_id' => '6',
                    'bank_branch_name' => 'LANGADU',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840372',
                        ),
                    'enabled' => true,
                ),
            176 =>
                array(
                    'id' => '2177',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NANIAR CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840406',
                        ),
                    'enabled' => true,
                ),
            177 =>
                array(
                    'id' => '2178',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAIKHALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840464',
                        ),
                    'enabled' => true,
                ),
            178 =>
                array(
                    'id' => '2179',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAJOSTHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840493',
                        ),
                    'enabled' => true,
                ),
            179 =>
                array(
                    'id' => '2180',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35840527',
                        ),
                    'enabled' => true,
                ),
            180 =>
                array(
                    'id' => '2181',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BURIRHAT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860073',
                        ),
                    'enabled' => true,
                ),
            181 =>
                array(
                    'id' => '2182',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHEDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860107',
                        ),
                    'enabled' => true,
                ),
            182 =>
                array(
                    'id' => '2183',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHIKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860165',
                        ),
                    'enabled' => true,
                ),
            183 =>
                array(
                    'id' => '2184',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DAMUDYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860194',
                        ),
                    'enabled' => true,
                ),
            184 =>
                array(
                    'id' => '2185',
                    'bank_id' => '6',
                    'bank_branch_name' => 'D. M. KHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860202',
                        ),
                    'enabled' => true,
                ),
            185 =>
                array(
                    'id' => '2186',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DOGRI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860228',
                        ),
                    'enabled' => true,
                ),
            186 =>
                array(
                    'id' => '2187',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GHARIER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860257',
                        ),
                    'enabled' => true,
                ),
            187 =>
                array(
                    'id' => '2188',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GHARISHAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860310',
                        ),
                    'enabled' => true,
                ),
            188 =>
                array(
                    'id' => '2189',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HATURIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860378',
                        ),
                    'enabled' => true,
                ),
            189 =>
                array(
                    'id' => '2190',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KARTIKPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860402',
                        ),
                    'enabled' => true,
                ),
            190 =>
                array(
                    'id' => '2191',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KODALPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860431',
                        ),
                    'enabled' => true,
                ),
            191 =>
                array(
                    'id' => '2192',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KONESWAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860460',
                        ),
                    'enabled' => true,
                ),
            192 =>
                array(
                    'id' => '2193',
                    'bank_id' => '6',
                    'bank_branch_name' => 'LAWKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860499',
                        ),
                    'enabled' => true,
                ),
            193 =>
                array(
                    'id' => '2194',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAGER PARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860552',
                        ),
                    'enabled' => true,
                ),
            194 =>
                array(
                    'id' => '2195',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860581',
                        ),
                    'enabled' => true,
                ),
            195 =>
                array(
                    'id' => '2196',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAKHIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860644',
                        ),
                    'enabled' => true,
                ),
            196 =>
                array(
                    'id' => '2197',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHARIATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860673',
                        ),
                    'enabled' => true,
                ),
            197 =>
                array(
                    'id' => '2198',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ZAJIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35860707',
                        ),
                    'enabled' => true,
                ),
            198 =>
                array(
                    'id' => '2199',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ASASUNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870076',
                        ),
                    'enabled' => true,
                ),
            199 =>
                array(
                    'id' => '2200',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BALIADANGA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870139',
                        ),
                    'enabled' => true,
                ),
            200 =>
                array(
                    'id' => '2201',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHOMRA STHAL BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870289',
                        ),
                    'enabled' => true,
                ),
            201 =>
                array(
                    'id' => '2202',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DEBHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870371',
                        ),
                    'enabled' => true,
                ),
            202 =>
                array(
                    'id' => '2203',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DULIHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870405',
                        ),
                    'enabled' => true,
                ),
            203 =>
                array(
                    'id' => '2204',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GHONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870463',
                        ),
                    'enabled' => true,
                ),
            204 =>
                array(
                    'id' => '2205',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GUNAKARKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870526',
                        ),
                    'enabled' => true,
                ),
            205 =>
                array(
                    'id' => '2206',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALAROA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870584',
                        ),
                    'enabled' => true,
                ),
            206 =>
                array(
                    'id' => '2207',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870618',
                        ),
                    'enabled' => true,
                ),
            207 =>
                array(
                    'id' => '2208',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KHORDO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870700',
                        ),
                    'enabled' => true,
                ),
            208 =>
                array(
                    'id' => '2209',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KRISNA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35870739',
                        ),
                    'enabled' => true,
                ),
            209 =>
                array(
                    'id' => '2210',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAWIE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35871062',
                        ),
                    'enabled' => true,
                ),
            210 =>
                array(
                    'id' => '2211',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35871091',
                        ),
                    'enabled' => true,
                ),
            211 =>
                array(
                    'id' => '2212',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAKHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35871183',
                        ),
                    'enabled' => true,
                ),
            212 =>
                array(
                    'id' => '2213',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35871217',
                        ),
                    'enabled' => true,
                ),
            213 =>
                array(
                    'id' => '2214',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SONABARIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35871246',
                        ),
                    'enabled' => true,
                ),
            214 =>
                array(
                    'id' => '2215',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35871309',
                        ),
                    'enabled' => true,
                ),
            215 =>
                array(
                    'id' => '2216',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BAJITKHILA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890043',
                        ),
                    'enabled' => true,
                ),
            216 =>
                array(
                    'id' => '2217',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHAYADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890072',
                        ),
                    'enabled' => true,
                ),
            217 =>
                array(
                    'id' => '2218',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GAZIR KHAMAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890135',
                        ),
                    'enabled' => true,
                ),
            218 =>
                array(
                    'id' => '2219',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JHENAIGATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890164',
                        ),
                    'enabled' => true,
                ),
            219 =>
                array(
                    'id' => '2220',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KAKARKANDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890180',
                        ),
                    'enabled' => true,
                ),
            220 =>
                array(
                    'id' => '2221',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KURUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890256',
                        ),
                    'enabled' => true,
                ),
            221 =>
                array(
                    'id' => '2222',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KUSHUMHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890285',
                        ),
                    'enabled' => true,
                ),
            222 =>
                array(
                    'id' => '2223',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAKLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890319',
                        ),
                    'enabled' => true,
                ),
            223 =>
                array(
                    'id' => '2224',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NALITABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890348',
                        ),
                    'enabled' => true,
                ),
            224 =>
                array(
                    'id' => '2225',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NALZORA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890377',
                        ),
                    'enabled' => true,
                ),
            225 =>
                array(
                    'id' => '2226',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAYABIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890498',
                        ),
                    'enabled' => true,
                ),
            226 =>
                array(
                    'id' => '2227',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PATHAKALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890522',
                        ),
                    'enabled' => true,
                ),
            227 =>
                array(
                    'id' => '2228',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890551',
                        ),
                    'enabled' => true,
                ),
            228 =>
                array(
                    'id' => '2229',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SREEBORDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35890643',
                        ),
                    'enabled' => true,
                ),
            229 =>
                array(
                    'id' => '2230',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BOALIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900054',
                        ),
                    'enabled' => true,
                ),
            230 =>
                array(
                    'id' => '2231',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BADAGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900070',
                        ),
                    'enabled' => true,
                ),
            231 =>
                array(
                    'id' => '2232',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DAWRAI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900083',
                        ),
                    'enabled' => true,
                ),
            232 =>
                array(
                    'id' => '2233',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAFINAGAR UNION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900096',
                        ),
                    'enabled' => true,
                ),
            233 =>
                array(
                    'id' => '2234',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BANGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900104',
                        ),
                    'enabled' => true,
                ),
            234 =>
                array(
                    'id' => '2235',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BISHWAMVARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900191',
                        ),
                    'enabled' => true,
                ),
            235 =>
                array(
                    'id' => '2236',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900225',
                        ),
                    'enabled' => true,
                ),
            236 =>
                array(
                    'id' => '2237',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DERAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900254',
                        ),
                    'enabled' => true,
                ),
            237 =>
                array(
                    'id' => '2238',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DHARAMPASSA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900283',
                        ),
                    'enabled' => true,
                ),
            238 =>
                array(
                    'id' => '2239',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DOWARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900346',
                        ),
                    'enabled' => true,
                ),
            239 =>
                array(
                    'id' => '2240',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DUNGRIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900375',
                        ),
                    'enabled' => true,
                ),
            240 =>
                array(
                    'id' => '2241',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900438',
                        ),
                    'enabled' => true,
                ),
            241 =>
                array(
                    'id' => '2242',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOLAKPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900467',
                        ),
                    'enabled' => true,
                ),
            242 =>
                array(
                    'id' => '2243',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900496',
                        ),
                    'enabled' => true,
                ),
            243 =>
                array(
                    'id' => '2244',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JAOWA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900559',
                        ),
                    'enabled' => true,
                ),
            244 =>
                array(
                    'id' => '2245',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JOYNAGAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900588',
                        ),
                    'enabled' => true,
                ),
            245 =>
                array(
                    'id' => '2246',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KOLKOLIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900641',
                        ),
                    'enabled' => true,
                ),
            246 =>
                array(
                    'id' => '2247',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MADHYA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900670',
                        ),
                    'enabled' => true,
                ),
            247 =>
                array(
                    'id' => '2248',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MINA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900704',
                        ),
                    'enabled' => true,
                ),
            248 =>
                array(
                    'id' => '2249',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MONGALKATA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900717',
                        ),
                    'enabled' => true,
                ),
            249 =>
                array(
                    'id' => '2250',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MOINPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900762',
                        ),
                    'enabled' => true,
                ),
            250 =>
                array(
                    'id' => '2251',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PATHARIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900883',
                        ),
                    'enabled' => true,
                ),
            251 =>
                array(
                    'id' => '2252',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RAJANIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900917',
                        ),
                    'enabled' => true,
                ),
            252 =>
                array(
                    'id' => '2253',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RANIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35900946',
                        ),
                    'enabled' => true,
                ),
            253 =>
                array(
                    'id' => '2254',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SACHNA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35901008',
                        ),
                    'enabled' => true,
                ),
            254 =>
                array(
                    'id' => '2255',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SALLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35901037',
                        ),
                    'enabled' => true,
                ),
            255 =>
                array(
                    'id' => '2256',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHYAMAR CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35901066',
                        ),
                    'enabled' => true,
                ),
            256 =>
                array(
                    'id' => '2257',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35901129',
                        ),
                    'enabled' => true,
                ),
            257 =>
                array(
                    'id' => '2258',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TAHIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35901211',
                        ),
                    'enabled' => true,
                ),
            258 =>
                array(
                    'id' => '2259',
                    'bank_id' => '6',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910044',
                        ),
                    'enabled' => true,
                ),
            259 =>
                array(
                    'id' => '2260',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BALAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910165',
                        ),
                    'enabled' => true,
                ),
            260 =>
                array(
                    'id' => '2261',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BANDAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910194',
                        ),
                    'enabled' => true,
                ),
            261 =>
                array(
                    'id' => '2262',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910310',
                        ),
                    'enabled' => true,
                ),
            262 =>
                array(
                    'id' => '2263',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHABANIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910349',
                        ),
                    'enabled' => true,
                ),
            263 =>
                array(
                    'id' => '2264',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910431',
                        ),
                    'enabled' => true,
                ),
            264 =>
                array(
                    'id' => '2265',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHARKHAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910707',
                        ),
                    'enabled' => true,
                ),
            265 =>
                array(
                    'id' => '2266',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHOTULBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910765',
                        ),
                    'enabled' => true,
                ),
            266 =>
                array(
                    'id' => '2267',
                    'bank_id' => '6',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35910910',
                        ),
                    'enabled' => true,
                ),
            267 =>
                array(
                    'id' => '2268',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DARPANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911122',
                        ),
                    'enabled' => true,
                ),
            268 =>
                array(
                    'id' => '2269',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DEWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911272',
                        ),
                    'enabled' => true,
                ),
            269 =>
                array(
                    'id' => '2270',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DOYAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911319',
                        ),
                    'enabled' => true,
                ),
            270 =>
                array(
                    'id' => '2271',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DUBAG BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911335',
                        ),
                    'enabled' => true,
                ),
            271 =>
                array(
                    'id' => '2272',
                    'bank_id' => '6',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911364',
                        ),
                    'enabled' => true,
                ),
            272 =>
                array(
                    'id' => '2273',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911601',
                        ),
                    'enabled' => true,
                ),
            273 =>
                array(
                    'id' => '2274',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOWAINGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911669',
                        ),
                    'enabled' => true,
                ),
            274 =>
                array(
                    'id' => '2275',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HADARPAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911706',
                        ),
                    'enabled' => true,
                ),
            275 =>
                array(
                    'id' => '2276',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JAINTAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35911814',
                        ),
                    'enabled' => true,
                ),
            276 =>
                array(
                    'id' => '2277',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KANAIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35912084',
                        ),
                    'enabled' => true,
                ),
            277 =>
                array(
                    'id' => '2278',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KHAJANCHIGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35912268',
                        ),
                    'enabled' => true,
                ),
            278 =>
                array(
                    'id' => '2279',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MOGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35912684',
                        ),
                    'enabled' => true,
                ),
            279 =>
                array(
                    'id' => '2280',
                    'bank_id' => '6',
                    'bank_branch_name' => 'RATANGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35913012',
                        ),
                    'enabled' => true,
                ),
            280 =>
                array(
                    'id' => '2281',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SALUTIKAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35913104',
                        ),
                    'enabled' => true,
                ),
            281 =>
                array(
                    'id' => '2282',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHIBER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35913375',
                        ),
                    'enabled' => true,
                ),
            282 =>
                array(
                    'id' => '2283',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35913559',
                        ),
                    'enabled' => true,
                ),
            283 =>
                array(
                    'id' => '2284',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TAJPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35913841',
                        ),
                    'enabled' => true,
                ),
            284 =>
                array(
                    'id' => '2285',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ZAKIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35914129',
                        ),
                    'enabled' => true,
                ),
            285 =>
                array(
                    'id' => '2286',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MOGRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930082',
                        ),
                    'enabled' => true,
                ),
            286 =>
                array(
                    'id' => '2287',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHOLAKURI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930095',
                        ),
                    'enabled' => true,
                ),
            287 =>
                array(
                    'id' => '2288',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BATHULI SADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930129',
                        ),
                    'enabled' => true,
                ),
            288 =>
                array(
                    'id' => '2289',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ALOKDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930132',
                        ),
                    'enabled' => true,
                ),
            289 =>
                array(
                    'id' => '2290',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TOKTARCHALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930145',
                        ),
                    'enabled' => true,
                ),
            290 =>
                array(
                    'id' => '2291',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SINGURIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930190',
                        ),
                    'enabled' => true,
                ),
            291 =>
                array(
                    'id' => '2292',
                    'bank_id' => '6',
                    'bank_branch_name' => 'AWLIABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930282',
                        ),
                    'enabled' => true,
                ),
            292 =>
                array(
                    'id' => '2293',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BALLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930316',
                        ),
                    'enabled' => true,
                ),
            293 =>
                array(
                    'id' => '2294',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BANGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930345',
                        ),
                    'enabled' => true,
                ),
            294 =>
                array(
                    'id' => '2295',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BASAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930374',
                        ),
                    'enabled' => true,
                ),
            295 =>
                array(
                    'id' => '2296',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHABKHANDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930408',
                        ),
                    'enabled' => true,
                ),
            296 =>
                array(
                    'id' => '2297',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHADRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930437',
                        ),
                    'enabled' => true,
                ),
            297 =>
                array(
                    'id' => '2298',
                    'bank_id' => '6',
                    'bank_branch_name' => 'BHUANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930466',
                        ),
                    'enabled' => true,
                ),
            298 =>
                array(
                    'id' => '2299',
                    'bank_id' => '6',
                    'bank_branch_name' => 'CHARPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930529',
                        ),
                    'enabled' => true,
                ),
            299 =>
                array(
                    'id' => '2300',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DELDUAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930587',
                        ),
                    'enabled' => true,
                ),
            300 =>
                array(
                    'id' => '2301',
                    'bank_id' => '6',
                    'bank_branch_name' => 'DHAN BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930679',
                        ),
                    'enabled' => true,
                ),
            301 =>
                array(
                    'id' => '2302',
                    'bank_id' => '6',
                    'bank_branch_name' => 'ELENGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930824',
                        ),
                    'enabled' => true,
                ),
            302 =>
                array(
                    'id' => '2303',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GHATAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35930916',
                        ),
                    'enabled' => true,
                ),
            303 =>
                array(
                    'id' => '2304',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931007',
                        ),
                    'enabled' => true,
                ),
            304 =>
                array(
                    'id' => '2305',
                    'bank_id' => '6',
                    'bank_branch_name' => 'GOYHATTA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931065',
                        ),
                    'enabled' => true,
                ),
            305 =>
                array(
                    'id' => '2306',
                    'bank_id' => '6',
                    'bank_branch_name' => 'HATUBHANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931128',
                        ),
                    'enabled' => true,
                ),
            306 =>
                array(
                    'id' => '2307',
                    'bank_id' => '6',
                    'bank_branch_name' => 'JHAWAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931210',
                        ),
                    'enabled' => true,
                ),
            307 =>
                array(
                    'id' => '2308',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KACHUABAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931249',
                        ),
                    'enabled' => true,
                ),
            308 =>
                array(
                    'id' => '2309',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KAKRAID',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931278',
                        ),
                    'enabled' => true,
                ),
            309 =>
                array(
                    'id' => '2310',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KALIHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931302',
                        ),
                    'enabled' => true,
                ),
            310 =>
                array(
                    'id' => '2311',
                    'bank_id' => '6',
                    'bank_branch_name' => 'KARATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931360',
                        ),
                    'enabled' => true,
                ),
            311 =>
                array(
                    'id' => '2312',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MADHUPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931481',
                        ),
                    'enabled' => true,
                ),
            312 =>
                array(
                    'id' => '2313',
                    'bank_id' => '6',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931515',
                        ),
                    'enabled' => true,
                ),
            313 =>
                array(
                    'id' => '2314',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NAGARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931694',
                        ),
                    'enabled' => true,
                ),
            314 =>
                array(
                    'id' => '2315',
                    'bank_id' => '6',
                    'bank_branch_name' => 'NALUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931728',
                        ),
                    'enabled' => true,
                ),
            315 =>
                array(
                    'id' => '2316',
                    'bank_id' => '6',
                    'bank_branch_name' => 'PORABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35931999',
                        ),
                    'enabled' => true,
                ),
            316 =>
                array(
                    'id' => '2317',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SAHABATPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35932080',
                        ),
                    'enabled' => true,
                ),
            317 =>
                array(
                    'id' => '2318',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SAJANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35932114',
                        ),
                    'enabled' => true,
                ),
            318 =>
                array(
                    'id' => '2319',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SHAKHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35932206',
                        ),
                    'enabled' => true,
                ),
            319 =>
                array(
                    'id' => '2320',
                    'bank_id' => '6',
                    'bank_branch_name' => 'SIMLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35932235',
                        ),
                    'enabled' => true,
                ),
            320 =>
                array(
                    'id' => '2321',
                    'bank_id' => '6',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '35932293',
                        ),
                    'enabled' => true,
                ),
            321 =>
                array(
                    'id' => '2322',
                    'bank_id' => '7',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '40270003',
                        ),
                    'enabled' => true,
                ),
            322 =>
                array(
                    'id' => '2323',
                    'bank_id' => '7',
                    'bank_branch_name' => 'DHAKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '40271510',
                        ),
                    'enabled' => true,
                ),
            323 =>
                array(
                    'id' => '2324',
                    'bank_id' => '8',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47060287',
                        ),
                    'enabled' => true,
                ),
            324 =>
                array(
                    'id' => '2325',
                    'bank_id' => '8',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47100376',
                        ),
                    'enabled' => true,
                ),
            325 =>
                array(
                    'id' => '2326',
                    'bank_id' => '8',
                    'bank_branch_name' => 'MOKAMTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47101933',
                        ),
                    'enabled' => true,
                ),
            326 =>
                array(
                    'id' => '2327',
                    'bank_id' => '8',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47120101',
                        ),
                    'enabled' => true,
                ),
            327 =>
                array(
                    'id' => '2328',
                    'bank_id' => '8',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47120435',
                        ),
                    'enabled' => true,
                ),
            328 =>
                array(
                    'id' => '2329',
                    'bank_id' => '8',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47121368',
                        ),
                    'enabled' => true,
                ),
            329 =>
                array(
                    'id' => '2330',
                    'bank_id' => '8',
                    'bank_branch_name' => 'CHITTAGONG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47151967',
                        ),
                    'enabled' => true,
                ),
            330 =>
                array(
                    'id' => '2331',
                    'bank_id' => '8',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47154272',
                        ),
                    'enabled' => true,
                ),
            331 =>
                array(
                    'id' => '2332',
                    'bank_id' => '8',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47191156',
                        ),
                    'enabled' => true,
                ),
            332 =>
                array(
                    'id' => '2333',
                    'bank_id' => '8',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47220256',
                        ),
                    'enabled' => true,
                ),
            333 =>
                array(
                    'id' => '2334',
                    'bank_id' => '8',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47260229',
                        ),
                    'enabled' => true,
                ),
            334 =>
                array(
                    'id' => '2335',
                    'bank_id' => '8',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47260508',
                        ),
                    'enabled' => true,
                ),
            335 =>
                array(
                    'id' => '2336',
                    'bank_id' => '8',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47261336',
                        ),
                    'enabled' => true,
                ),
            336 =>
                array(
                    'id' => '2337',
                    'bank_id' => '8',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47262564',
                        ),
                    'enabled' => true,
                ),
            337 =>
                array(
                    'id' => '2338',
                    'bank_id' => '8',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47270006',
                        ),
                    'enabled' => true,
                ),
            338 =>
                array(
                    'id' => '2339',
                    'bank_id' => '8',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47270093',
                        ),
                    'enabled' => true,
                ),
            339 =>
                array(
                    'id' => '2340',
                    'bank_id' => '8',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47271571',
                        ),
                    'enabled' => true,
                ),
            340 =>
                array(
                    'id' => '2341',
                    'bank_id' => '8',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47274244',
                        ),
                    'enabled' => true,
                ),
            341 =>
                array(
                    'id' => '2342',
                    'bank_id' => '8',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47280670',
                        ),
                    'enabled' => true,
                ),
            342 =>
                array(
                    'id' => '2343',
                    'bank_id' => '8',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47290523',
                        ),
                    'enabled' => true,
                ),
            343 =>
                array(
                    'id' => '2344',
                    'bank_id' => '8',
                    'bank_branch_name' => 'JAINA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47330670',
                        ),
                    'enabled' => true,
                ),
            344 =>
                array(
                    'id' => '2345',
                    'bank_id' => '8',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47360611',
                        ),
                    'enabled' => true,
                ),
            345 =>
                array(
                    'id' => '2346',
                    'bank_id' => '8',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47410945',
                        ),
                    'enabled' => true,
                ),
            346 =>
                array(
                    'id' => '2347',
                    'bank_id' => '8',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47440649',
                        ),
                    'enabled' => true,
                ),
            347 =>
                array(
                    'id' => '2348',
                    'bank_id' => '8',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47471542',
                        ),
                    'enabled' => true,
                ),
            348 =>
                array(
                    'id' => '2349',
                    'bank_id' => '8',
                    'bank_branch_name' => 'HOSSAINPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47480409',
                        ),
                    'enabled' => true,
                ),
            349 =>
                array(
                    'id' => '2350',
                    'bank_id' => '8',
                    'bank_branch_name' => 'MOHADEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47560703',
                        ),
                    'enabled' => true,
                ),
            350 =>
                array(
                    'id' => '2351',
                    'bank_id' => '8',
                    'bank_branch_name' => 'SATURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47560761',
                        ),
                    'enabled' => true,
                ),
            351 =>
                array(
                    'id' => '2352',
                    'bank_id' => '8',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47581182',
                        ),
                    'enabled' => true,
                ),
            352 =>
                array(
                    'id' => '2353',
                    'bank_id' => '8',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47591422',
                        ),
                    'enabled' => true,
                ),
            353 =>
                array(
                    'id' => '2354',
                    'bank_id' => '8',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47611757',
                        ),
                    'enabled' => true,
                ),
            354 =>
                array(
                    'id' => '2355',
                    'bank_id' => '8',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47641185',
                        ),
                    'enabled' => true,
                ),
            355 =>
                array(
                    'id' => '2356',
                    'bank_id' => '8',
                    'bank_branch_name' => 'KANCHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47670127',
                        ),
                    'enabled' => true,
                ),
            356 =>
                array(
                    'id' => '2357',
                    'bank_id' => '8',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47671184',
                        ),
                    'enabled' => true,
                ),
            357 =>
                array(
                    'id' => '2358',
                    'bank_id' => '8',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47680670',
                        ),
                    'enabled' => true,
                ),
            358 =>
                array(
                    'id' => '2359',
                    'bank_id' => '8',
                    'bank_branch_name' => 'KAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47730559',
                        ),
                    'enabled' => true,
                ),
            359 =>
                array(
                    'id' => '2360',
                    'bank_id' => '8',
                    'bank_branch_name' => 'NOAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47751725',
                        ),
                    'enabled' => true,
                ),
            360 =>
                array(
                    'id' => '2361',
                    'bank_id' => '8',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47761786',
                        ),
                    'enabled' => true,
                ),
            361 =>
                array(
                    'id' => '2362',
                    'bank_id' => '8',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47811931',
                        ),
                    'enabled' => true,
                ),
            362 =>
                array(
                    'id' => '2363',
                    'bank_id' => '8',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47851454',
                        ),
                    'enabled' => true,
                ),
            363 =>
                array(
                    'id' => '2364',
                    'bank_id' => '8',
                    'bank_branch_name' => 'OSMANI NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47910140',
                        ),
                    'enabled' => true,
                ),
            364 =>
                array(
                    'id' => '2365',
                    'bank_id' => '8',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47913550',
                        ),
                    'enabled' => true,
                ),
            365 =>
                array(
                    'id' => '2366',
                    'bank_id' => '8',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '47932294',
                        ),
                    'enabled' => true,
                ),
            366 =>
                array(
                    'id' => '2367',
                    'bank_id' => '9',
                    'bank_branch_name' => 'CHITALMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55010229',
                        ),
                    'enabled' => true,
                ),
            367 =>
                array(
                    'id' => '2368',
                    'bank_id' => '9',
                    'bank_branch_name' => 'FAKIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55010461',
                        ),
                    'enabled' => true,
                ),
            368 =>
                array(
                    'id' => '2369',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55060282',
                        ),
                    'enabled' => true,
                ),
            369 =>
                array(
                    'id' => '2370',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55100371',
                        ),
                    'enabled' => true,
                ),
            370 =>
                array(
                    'id' => '2371',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55102890',
                        ),
                    'enabled' => true,
                ),
            371 =>
                array(
                    'id' => '2372',
                    'bank_id' => '9',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55130312',
                        ),
                    'enabled' => true,
                ),
            372 =>
                array(
                    'id' => '2373',
                    'bank_id' => '9',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55150134',
                        ),
                    'enabled' => true,
                ),
            373 =>
                array(
                    'id' => '2374',
                    'bank_id' => '9',
                    'bank_branch_name' => 'ASAD GANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55150589',
                        ),
                    'enabled' => true,
                ),
            374 =>
                array(
                    'id' => '2375',
                    'bank_id' => '9',
                    'bank_branch_name' => 'C.E.P.Z.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55151575',
                        ),
                    'enabled' => true,
                ),
            375 =>
                array(
                    'id' => '2376',
                    'bank_id' => '9',
                    'bank_branch_name' => 'DEWAN HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55152440',
                        ),
                    'enabled' => true,
                ),
            376 =>
                array(
                    'id' => '2377',
                    'bank_id' => '9',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55152561',
                        ),
                    'enabled' => true,
                ),
            377 =>
                array(
                    'id' => '2378',
                    'bank_id' => '9',
                    'bank_branch_name' => 'JORARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55153610',
                        ),
                    'enabled' => true,
                ),
            378 =>
                array(
                    'id' => '2379',
                    'bank_id' => '9',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55153649',
                        ),
                    'enabled' => true,
                ),
            379 =>
                array(
                    'id' => '2380',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55154277',
                        ),
                    'enabled' => true,
                ),
            380 =>
                array(
                    'id' => '2381',
                    'bank_id' => '9',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55155926',
                        ),
                    'enabled' => true,
                ),
            381 =>
                array(
                    'id' => '2382',
                    'bank_id' => '9',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55156138',
                        ),
                    'enabled' => true,
                ),
            382 =>
                array(
                    'id' => '2383',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SHOLA SAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55157337',
                        ),
                    'enabled' => true,
                ),
            383 =>
                array(
                    'id' => '2384',
                    'bank_id' => '9',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55191151',
                        ),
                    'enabled' => true,
                ),
            384 =>
                array(
                    'id' => '2385',
                    'bank_id' => '9',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55220251',
                        ),
                    'enabled' => true,
                ),
            385 =>
                array(
                    'id' => '2386',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55260437',
                        ),
                    'enabled' => true,
                ),
            386 =>
                array(
                    'id' => '2387',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55260558',
                        ),
                    'enabled' => true,
                ),
            387 =>
                array(
                    'id' => '2388',
                    'bank_id' => '9',
                    'bank_branch_name' => 'CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55260732',
                        ),
                    'enabled' => true,
                ),
            388 =>
                array(
                    'id' => '2389',
                    'bank_id' => '9',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55261186',
                        ),
                    'enabled' => true,
                ),
            389 =>
                array(
                    'id' => '2390',
                    'bank_id' => '9',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55261728',
                        ),
                    'enabled' => true,
                ),
            390 =>
                array(
                    'id' => '2391',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55262530',
                        ),
                    'enabled' => true,
                ),
            391 =>
                array(
                    'id' => '2392',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55262985',
                        ),
                    'enabled' => true,
                ),
            392 =>
                array(
                    'id' => '2393',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55264091',
                        ),
                    'enabled' => true,
                ),
            393 =>
                array(
                    'id' => '2394',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55264309',
                        ),
                    'enabled' => true,
                ),
            394 =>
                array(
                    'id' => '2395',
                    'bank_id' => '9',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55264633',
                        ),
                    'enabled' => true,
                ),
            395 =>
                array(
                    'id' => '2396',
                    'bank_id' => '9',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55270001',
                        ),
                    'enabled' => true,
                ),
            396 =>
                array(
                    'id' => '2397',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BABU BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55270551',
                        ),
                    'enabled' => true,
                ),
            397 =>
                array(
                    'id' => '2398',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55270885',
                        ),
                    'enabled' => true,
                ),
            398 =>
                array(
                    'id' => '2399',
                    'bank_id' => '9',
                    'bank_branch_name' => 'DHAKA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55271789',
                        ),
                    'enabled' => true,
                ),
            399 =>
                array(
                    'id' => '2400',
                    'bank_id' => '9',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55271905',
                        ),
                    'enabled' => true,
                ),
            400 =>
                array(
                    'id' => '2401',
                    'bank_id' => '9',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55272683',
                        ),
                    'enabled' => true,
                ),
            401 =>
                array(
                    'id' => '2402',
                    'bank_id' => '9',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55272988',
                        ),
                    'enabled' => true,
                ),
            402 =>
                array(
                    'id' => '2403',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55273640',
                        ),
                    'enabled' => true,
                ),
            403 =>
                array(
                    'id' => '2404',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55274007',
                        ),
                    'enabled' => true,
                ),
            404 =>
                array(
                    'id' => '2405',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55274423',
                        ),
                    'enabled' => true,
                ),
            405 =>
                array(
                    'id' => '2406',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55276342',
                        ),
                    'enabled' => true,
                ),
            406 =>
                array(
                    'id' => '2407',
                    'bank_id' => '9',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55290528',
                        ),
                    'enabled' => true,
                ),
            407 =>
                array(
                    'id' => '2408',
                    'bank_id' => '9',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55330554',
                        ),
                    'enabled' => true,
                ),
            408 =>
                array(
                    'id' => '2409',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55331003',
                        ),
                    'enabled' => true,
                ),
            409 =>
                array(
                    'id' => '2410',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KOTALIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55350671',
                        ),
                    'enabled' => true,
                ),
            410 =>
                array(
                    'id' => '2411',
                    'bank_id' => '9',
                    'bank_branch_name' => 'TUNGI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55351096',
                        ),
                    'enabled' => true,
                ),
            411 =>
                array(
                    'id' => '2412',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MIRPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55360137',
                        ),
                    'enabled' => true,
                ),
            412 =>
                array(
                    'id' => '2413',
                    'bank_id' => '9',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55410940',
                        ),
                    'enabled' => true,
                ),
            413 =>
                array(
                    'id' => '2414',
                    'bank_id' => '9',
                    'bank_branch_name' => 'JHIKORGHACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55411099',
                        ),
                    'enabled' => true,
                ),
            414 =>
                array(
                    'id' => '2415',
                    'bank_id' => '9',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55440644',
                        ),
                    'enabled' => true,
                ),
            415 =>
                array(
                    'id' => '2416',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KDA AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55471400',
                        ),
                    'enabled' => true,
                ),
            416 =>
                array(
                    'id' => '2417',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55471547',
                        ),
                    'enabled' => true,
                ),
            417 =>
                array(
                    'id' => '2418',
                    'bank_id' => '9',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55500942',
                        ),
                    'enabled' => true,
                ),
            418 =>
                array(
                    'id' => '2419',
                    'bank_id' => '9',
                    'bank_branch_name' => 'CHOUMUHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55580375',
                        ),
                    'enabled' => true,
                ),
            419 =>
                array(
                    'id' => '2420',
                    'bank_id' => '9',
                    'bank_branch_name' => 'ISHWARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55611181',
                        ),
                    'enabled' => true,
                ),
            420 =>
                array(
                    'id' => '2421',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55611752',
                        ),
                    'enabled' => true,
                ),
            421 =>
                array(
                    'id' => '2422',
                    'bank_id' => '9',
                    'bank_branch_name' => 'TANBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55671789',
                        ),
                    'enabled' => true,
                ),
            422 =>
                array(
                    'id' => '2423',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MADHABDI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55680688',
                        ),
                    'enabled' => true,
                ),
            423 =>
                array(
                    'id' => '2424',
                    'bank_id' => '9',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55680859',
                        ),
                    'enabled' => true,
                ),
            424 =>
                array(
                    'id' => '2425',
                    'bank_id' => '9',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55691093',
                        ),
                    'enabled' => true,
                ),
            425 =>
                array(
                    'id' => '2426',
                    'bank_id' => '9',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55700250',
                        ),
                    'enabled' => true,
                ),
            426 =>
                array(
                    'id' => '2427',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55730796',
                        ),
                    'enabled' => true,
                ),
            427 =>
                array(
                    'id' => '2428',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MOHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55780854',
                        ),
                    'enabled' => true,
                ),
            428 =>
                array(
                    'id' => '2429',
                    'bank_id' => '9',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55790523',
                        ),
                    'enabled' => true,
                ),
            429 =>
                array(
                    'id' => '2430',
                    'bank_id' => '9',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55811936',
                        ),
                    'enabled' => true,
                ),
            430 =>
                array(
                    'id' => '2431',
                    'bank_id' => '9',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55851459',
                        ),
                    'enabled' => true,
                ),
            431 =>
                array(
                    'id' => '2432',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55871097',
                        ),
                    'enabled' => true,
                ),
            432 =>
                array(
                    'id' => '2433',
                    'bank_id' => '9',
                    'bank_branch_name' => 'BELKUCHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55880220',
                        ),
                    'enabled' => true,
                ),
            433 =>
                array(
                    'id' => '2434',
                    'bank_id' => '9',
                    'bank_branch_name' => 'SONARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55913450',
                        ),
                    'enabled' => true,
                ),
            434 =>
                array(
                    'id' => '2435',
                    'bank_id' => '9',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55914154',
                        ),
                    'enabled' => true,
                ),
            435 =>
                array(
                    'id' => '2436',
                    'bank_id' => '9',
                    'bank_branch_name' => 'ELENGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '55930820',
                        ),
                    'enabled' => true,
                ),
            436 =>
                array(
                    'id' => '2437',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BAGERHAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60010085',
                        ),
                    'enabled' => true,
                ),
            437 =>
                array(
                    'id' => '2438',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60060280',
                        ),
                    'enabled' => true,
                ),
            438 =>
                array(
                    'id' => '2439',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60090100',
                        ),
                    'enabled' => true,
                ),
            439 =>
                array(
                    'id' => '2440',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHARMATHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60100087',
                        ),
                    'enabled' => true,
                ),
            440 =>
                array(
                    'id' => '2441',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60100379',
                        ),
                    'enabled' => true,
                ),
            441 =>
                array(
                    'id' => '2442',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60102748',
                        ),
                    'enabled' => true,
                ),
            442 =>
                array(
                    'id' => '2443',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60120438',
                        ),
                    'enabled' => true,
                ),
            443 =>
                array(
                    'id' => '2444',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KASBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60121037',
                        ),
                    'enabled' => true,
                ),
            444 =>
                array(
                    'id' => '2445',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60130310',
                        ),
                    'enabled' => true,
                ),
            445 =>
                array(
                    'id' => '2446',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60130886',
                        ),
                    'enabled' => true,
                ),
            446 =>
                array(
                    'id' => '2447',
                    'bank_id' => '10',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60150132',
                        ),
                    'enabled' => true,
                ),
            447 =>
                array(
                    'id' => '2448',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ASAD GANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60150587',
                        ),
                    'enabled' => true,
                ),
            448 =>
                array(
                    'id' => '2449',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BAHADDAR HAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60150808',
                        ),
                    'enabled' => true,
                ),
            449 =>
                array(
                    'id' => '2450',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BANDARTILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60150945',
                        ),
                    'enabled' => true,
                ),
            450 =>
                array(
                    'id' => '2451',
                    'bank_id' => '10',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60151481',
                        ),
                    'enabled' => true,
                ),
            451 =>
                array(
                    'id' => '2452',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60151931',
                        ),
                    'enabled' => true,
                ),
            452 =>
                array(
                    'id' => '2453',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60153168',
                        ),
                    'enabled' => true,
                ),
            453 =>
                array(
                    'id' => '2454',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HATHAZARI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60153234',
                        ),
                    'enabled' => true,
                ),
            454 =>
                array(
                    'id' => '2455',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KADAMTOLI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60153742',
                        ),
                    'enabled' => true,
                ),
            455 =>
                array(
                    'id' => '2456',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KAZIR DEWRI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60154154',
                        ),
                    'enabled' => true,
                ),
            456 =>
                array(
                    'id' => '2457',
                    'bank_id' => '10',
                    'bank_branch_name' => 'LOHAGARA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60154675',
                        ),
                    'enabled' => true,
                ),
            457 =>
                array(
                    'id' => '2458',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MADAM BIBIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60154691',
                        ),
                    'enabled' => true,
                ),
            458 =>
                array(
                    'id' => '2459',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOMIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60155261',
                        ),
                    'enabled' => true,
                ),
            459 =>
                array(
                    'id' => '2460',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60155324',
                        ),
                    'enabled' => true,
                ),
            460 =>
                array(
                    'id' => '2461',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60155658',
                        ),
                    'enabled' => true,
                ),
            461 =>
                array(
                    'id' => '2462',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHITTAGONG NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60155674',
                        ),
                    'enabled' => true,
                ),
            462 =>
                array(
                    'id' => '2463',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PAHARTALI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60155937',
                        ),
                    'enabled' => true,
                ),
            463 =>
                array(
                    'id' => '2464',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60156165',
                        ),
                    'enabled' => true,
                ),
            464 =>
                array(
                    'id' => '2465',
                    'bank_id' => '10',
                    'bank_branch_name' => 'RAOZAN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60156507',
                        ),
                    'enabled' => true,
                ),
            465 =>
                array(
                    'id' => '2466',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SITAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60157393',
                        ),
                    'enabled' => true,
                ),
            466 =>
                array(
                    'id' => '2467',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SK. MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60157427',
                        ),
                    'enabled' => true,
                ),
            467 =>
                array(
                    'id' => '2468',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JIBAN NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60180065',
                        ),
                    'enabled' => true,
                ),
            468 =>
                array(
                    'id' => '2469',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60180199',
                        ),
                    'enabled' => true,
                ),
            469 =>
                array(
                    'id' => '2470',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BARURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60190497',
                        ),
                    'enabled' => true,
                ),
            470 =>
                array(
                    'id' => '2471',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHANDINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60190884',
                        ),
                    'enabled' => true,
                ),
            471 =>
                array(
                    'id' => '2472',
                    'bank_id' => '10',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60191159',
                        ),
                    'enabled' => true,
                ),
            472 =>
                array(
                    'id' => '2473',
                    'bank_id' => '10',
                    'bank_branch_name' => 'COMILLA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60191162',
                        ),
                    'enabled' => true,
                ),
            473 =>
                array(
                    'id' => '2474',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GOURIPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60192129',
                        ),
                    'enabled' => true,
                ),
            474 =>
                array(
                    'id' => '2475',
                    'bank_id' => '10',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60192716',
                        ),
                    'enabled' => true,
                ),
            475 =>
                array(
                    'id' => '2476',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60220167',
                        ),
                    'enabled' => true,
                ),
            476 =>
                array(
                    'id' => '2477',
                    'bank_id' => '10',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60220259',
                        ),
                    'enabled' => true,
                ),
            477 =>
                array(
                    'id' => '2478',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ASHKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260206',
                        ),
                    'enabled' => true,
                ),
            478 =>
                array(
                    'id' => '2479',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260222',
                        ),
                    'enabled' => true,
                ),
            479 =>
                array(
                    'id' => '2480',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BADDA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260356',
                        ),
                    'enabled' => true,
                ),
            480 =>
                array(
                    'id' => '2481',
                    'bank_id' => '10',
                    'bank_branch_name' => 'UTTARA JASHIM UDDIN AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260385',
                        ),
                    'enabled' => true,
                ),
            481 =>
                array(
                    'id' => '2482',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260435',
                        ),
                    'enabled' => true,
                ),
            482 =>
                array(
                    'id' => '2483',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260501',
                        ),
                    'enabled' => true,
                ),
            483 =>
                array(
                    'id' => '2484',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260556',
                        ),
                    'enabled' => true,
                ),
            484 =>
                array(
                    'id' => '2485',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BEGUM ROKEYA SAWRANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260677',
                        ),
                    'enabled' => true,
                ),
            485 =>
                array(
                    'id' => '2486',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BANANI-11',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260680',
                        ),
                    'enabled' => true,
                ),
            486 =>
                array(
                    'id' => '2487',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260727',
                        ),
                    'enabled' => true,
                ),
            487 =>
                array(
                    'id' => '2488',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60260914',
                        ),
                    'enabled' => true,
                ),
            488 =>
                array(
                    'id' => '2489',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ASAD GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261184',
                        ),
                    'enabled' => true,
                ),
            489 =>
                array(
                    'id' => '2490',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261205',
                        ),
                    'enabled' => true,
                ),
            490 =>
                array(
                    'id' => '2491',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261339',
                        ),
                    'enabled' => true,
                ),
            491 =>
                array(
                    'id' => '2492',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ELEPHANT ROAD SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261355',
                        ),
                    'enabled' => true,
                ),
            492 =>
                array(
                    'id' => '2493',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ESKATON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261397',
                        ),
                    'enabled' => true,
                ),
            493 =>
                array(
                    'id' => '2494',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261726',
                        ),
                    'enabled' => true,
                ),
            494 =>
                array(
                    'id' => '2495',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GULSHAN NORTH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261876',
                        ),
                    'enabled' => true,
                ),
            495 =>
                array(
                    'id' => '2496',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HAZARIBAGH SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261971',
                        ),
                    'enabled' => true,
                ),
            496 =>
                array(
                    'id' => '2497',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MIRPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60261997',
                        ),
                    'enabled' => true,
                ),
            497 =>
                array(
                    'id' => '2498',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KARWAN BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60262541',
                        ),
                    'enabled' => true,
                ),
            498 =>
                array(
                    'id' => '2499',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60262875',
                        ),
                    'enabled' => true,
                ),
            499 =>
                array(
                    'id' => '2500',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60262983',
                        ),
                    'enabled' => true,
                ),
            500 =>
                array(
                    'id' => '2501',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOHAMMADPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60263290',
                        ),
                    'enabled' => true,
                ),
            501 =>
                array(
                    'id' => '2502',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NATUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60263429',
                        ),
                    'enabled' => true,
                ),
            502 =>
                array(
                    'id' => '2503',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PANTHA PATH SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60263629',
                        ),
                    'enabled' => true,
                ),
            503 =>
                array(
                    'id' => '2504',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60264099',
                        ),
                    'enabled' => true,
                ),
            504 =>
                array(
                    'id' => '2505',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60264307',
                        ),
                    'enabled' => true,
                ),
            505 =>
                array(
                    'id' => '2506',
                    'bank_id' => '10',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60264631',
                        ),
                    'enabled' => true,
                ),
            506 =>
                array(
                    'id' => '2507',
                    'bank_id' => '10',
                    'bank_branch_name' => 'UTTARA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60264644',
                        ),
                    'enabled' => true,
                ),
            507 =>
                array(
                    'id' => '2508',
                    'bank_id' => '10',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60270009',
                        ),
                    'enabled' => true,
                ),
            508 =>
                array(
                    'id' => '2509',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60270346',
                        ),
                    'enabled' => true,
                ),
            509 =>
                array(
                    'id' => '2510',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BASHABOO SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60270988',
                        ),
                    'enabled' => true,
                ),
            510 =>
                array(
                    'id' => '2511',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BIJOY NAGAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60271103',
                        ),
                    'enabled' => true,
                ),
            511 =>
                array(
                    'id' => '2512',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60271424',
                        ),
                    'enabled' => true,
                ),
            512 =>
                array(
                    'id' => '2513',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DEMRA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60271495',
                        ),
                    'enabled' => true,
                ),
            513 =>
                array(
                    'id' => '2514',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DHOLAIKHAL SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60271840',
                        ),
                    'enabled' => true,
                ),
            514 =>
                array(
                    'id' => '2515',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272052',
                        ),
                    'enabled' => true,
                ),
            515 =>
                array(
                    'id' => '2516',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GANAKBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272410',
                        ),
                    'enabled' => true,
                ),
            516 =>
                array(
                    'id' => '2517',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272449',
                        ),
                    'enabled' => true,
                ),
            517 =>
                array(
                    'id' => '2518',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GRAPHICS BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272531',
                        ),
                    'enabled' => true,
                ),
            518 =>
                array(
                    'id' => '2519',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GULISTAN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272544',
                        ),
                    'enabled' => true,
                ),
            519 =>
                array(
                    'id' => '2520',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272681',
                        ),
                    'enabled' => true,
                ),
            520 =>
                array(
                    'id' => '2521',
                    'bank_id' => '10',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272807',
                        ),
                    'enabled' => true,
                ),
            521 =>
                array(
                    'id' => '2522',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60272986',
                        ),
                    'enabled' => true,
                ),
            522 =>
                array(
                    'id' => '2523',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JATRABARI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60273235',
                        ),
                    'enabled' => true,
                ),
            523 =>
                array(
                    'id' => '2524',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60273648',
                        ),
                    'enabled' => true,
                ),
            524 =>
                array(
                    'id' => '2525',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MITFORD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60274063',
                        ),
                    'enabled' => true,
                ),
            525 =>
                array(
                    'id' => '2526',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60274184',
                        ),
                    'enabled' => true,
                ),
            526 =>
                array(
                    'id' => '2527',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60274247',
                        ),
                    'enabled' => true,
                ),
            527 =>
                array(
                    'id' => '2528',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOTIJHEEL SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60274289',
                        ),
                    'enabled' => true,
                ),
            528 =>
                array(
                    'id' => '2529',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60274692',
                        ),
                    'enabled' => true,
                ),
            529 =>
                array(
                    'id' => '2530',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60274726',
                        ),
                    'enabled' => true,
                ),
            530 =>
                array(
                    'id' => '2531',
                    'bank_id' => '10',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60275741',
                        ),
                    'enabled' => true,
                ),
            531 =>
                array(
                    'id' => '2532',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60276074',
                        ),
                    'enabled' => true,
                ),
            532 =>
                array(
                    'id' => '2533',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHAMBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60276287',
                        ),
                    'enabled' => true,
                ),
            533 =>
                array(
                    'id' => '2534',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHYAMPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60276537',
                        ),
                    'enabled' => true,
                ),
            534 =>
                array(
                    'id' => '2535',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60277099',
                        ),
                    'enabled' => true,
                ),
            535 =>
                array(
                    'id' => '2536',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60280673',
                        ),
                    'enabled' => true,
                ),
            536 =>
                array(
                    'id' => '2537',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BHANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60290289',
                        ),
                    'enabled' => true,
                ),
            537 =>
                array(
                    'id' => '2538',
                    'bank_id' => '10',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60290526',
                        ),
                    'enabled' => true,
                ),
            538 =>
                array(
                    'id' => '2539',
                    'bank_id' => '10',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60300524',
                        ),
                    'enabled' => true,
                ),
            539 =>
                array(
                    'id' => '2540',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SONAGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60301486',
                        ),
                    'enabled' => true,
                ),
            540 =>
                array(
                    'id' => '2541',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60320588',
                        ),
                    'enabled' => true,
                ),
            541 =>
                array(
                    'id' => '2542',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60330228',
                        ),
                    'enabled' => true,
                ),
            542 =>
                array(
                    'id' => '2543',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60330523',
                        ),
                    'enabled' => true,
                ),
            543 =>
                array(
                    'id' => '2544',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JOYDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60330736',
                        ),
                    'enabled' => true,
                ),
            544 =>
                array(
                    'id' => '2545',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60330886',
                        ),
                    'enabled' => true,
                ),
            545 =>
                array(
                    'id' => '2546',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KONABARI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60330952',
                        ),
                    'enabled' => true,
                ),
            546 =>
                array(
                    'id' => '2547',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60331001',
                        ),
                    'enabled' => true,
                ),
            547 =>
                array(
                    'id' => '2548',
                    'bank_id' => '10',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60331630',
                        ),
                    'enabled' => true,
                ),
            548 =>
                array(
                    'id' => '2549',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60350374',
                        ),
                    'enabled' => true,
                ),
            549 =>
                array(
                    'id' => '2550',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BANIACHANG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60360164',
                        ),
                    'enabled' => true,
                ),
            550 =>
                array(
                    'id' => '2551',
                    'bank_id' => '10',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60360614',
                        ),
                    'enabled' => true,
                ),
            551 =>
                array(
                    'id' => '2552',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60361097',
                        ),
                    'enabled' => true,
                ),
            552 =>
                array(
                    'id' => '2553',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60380407',
                        ),
                    'enabled' => true,
                ),
            553 =>
                array(
                    'id' => '2554',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60390855',
                        ),
                    'enabled' => true,
                ),
            554 =>
                array(
                    'id' => '2555',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BENAPOLE SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60410298',
                        ),
                    'enabled' => true,
                ),
            555 =>
                array(
                    'id' => '2556',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60410948',
                        ),
                    'enabled' => true,
                ),
            556 =>
                array(
                    'id' => '2557',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60411639',
                        ),
                    'enabled' => true,
                ),
            557 =>
                array(
                    'id' => '2558',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JHALOKATHI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60420325',
                        ),
                    'enabled' => true,
                ),
            558 =>
                array(
                    'id' => '2559',
                    'bank_id' => '10',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60440642',
                        ),
                    'enabled' => true,
                ),
            559 =>
                array(
                    'id' => '2560',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BORO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60470375',
                        ),
                    'enabled' => true,
                ),
            560 =>
                array(
                    'id' => '2561',
                    'bank_id' => '10',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60470704',
                        ),
                    'enabled' => true,
                ),
            561 =>
                array(
                    'id' => '2562',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60471545',
                        ),
                    'enabled' => true,
                ),
            562 =>
                array(
                    'id' => '2563',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BHAIRAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60480194',
                        ),
                    'enabled' => true,
                ),
            563 =>
                array(
                    'id' => '2564',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60480673',
                        ),
                    'enabled' => true,
                ),
            564 =>
                array(
                    'id' => '2565',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BHERAMARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60500287',
                        ),
                    'enabled' => true,
                ),
            565 =>
                array(
                    'id' => '2566',
                    'bank_id' => '10',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60500940',
                        ),
                    'enabled' => true,
                ),
            566 =>
                array(
                    'id' => '2567',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PORADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60501365',
                        ),
                    'enabled' => true,
                ),
            567 =>
                array(
                    'id' => '2568',
                    'bank_id' => '10',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60510730',
                        ),
                    'enabled' => true,
                ),
            568 =>
                array(
                    'id' => '2569',
                    'bank_id' => '10',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60510972',
                        ),
                    'enabled' => true,
                ),
            569 =>
                array(
                    'id' => '2570',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60540405',
                        ),
                    'enabled' => true,
                ),
            570 =>
                array(
                    'id' => '2571',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHIBCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60540700',
                        ),
                    'enabled' => true,
                ),
            571 =>
                array(
                    'id' => '2572',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MAGURA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60550561',
                        ),
                    'enabled' => true,
                ),
            572 =>
                array(
                    'id' => '2573',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60560614',
                        ),
                    'enabled' => true,
                ),
            573 =>
                array(
                    'id' => '2574',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60571579',
                        ),
                    'enabled' => true,
                ),
            574 =>
                array(
                    'id' => '2575',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60581185',
                        ),
                    'enabled' => true,
                ),
            575 =>
                array(
                    'id' => '2576',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60591038',
                        ),
                    'enabled' => true,
                ),
            576 =>
                array(
                    'id' => '2577',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60591425',
                        ),
                    'enabled' => true,
                ),
            577 =>
                array(
                    'id' => '2578',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MUKTAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60611697',
                        ),
                    'enabled' => true,
                ),
            578 =>
                array(
                    'id' => '2579',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60611750',
                        ),
                    'enabled' => true,
                ),
            579 =>
                array(
                    'id' => '2580',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MOHADEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60641096',
                        ),
                    'enabled' => true,
                ),
            580 =>
                array(
                    'id' => '2581',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NAOGAON SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60641191',
                        ),
                    'enabled' => true,
                ),
            581 =>
                array(
                    'id' => '2582',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ARAIHAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60670054',
                        ),
                    'enabled' => true,
                ),
            582 =>
                array(
                    'id' => '2583',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BHULTA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60670238',
                        ),
                    'enabled' => true,
                ),
            583 =>
                array(
                    'id' => '2584',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60671187',
                        ),
                    'enabled' => true,
                ),
            584 =>
                array(
                    'id' => '2585',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SIDDIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60671608',
                        ),
                    'enabled' => true,
                ),
            585 =>
                array(
                    'id' => '2586',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60671695',
                        ),
                    'enabled' => true,
                ),
            586 =>
                array(
                    'id' => '2587',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NITAIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60675459',
                        ),
                    'enabled' => true,
                ),
            587 =>
                array(
                    'id' => '2588',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GHORASAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60680499',
                        ),
                    'enabled' => true,
                ),
            588 =>
                array(
                    'id' => '2589',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60680673',
                        ),
                    'enabled' => true,
                ),
            589 =>
                array(
                    'id' => '2590',
                    'bank_id' => '10',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60680736',
                        ),
                    'enabled' => true,
                ),
            590 =>
                array(
                    'id' => '2591',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60680857',
                        ),
                    'enabled' => true,
                ),
            591 =>
                array(
                    'id' => '2592',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60691091',
                        ),
                    'enabled' => true,
                ),
            592 =>
                array(
                    'id' => '2593',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60700261',
                        ),
                    'enabled' => true,
                ),
            593 =>
                array(
                    'id' => '2594',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NETROKONA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60720746',
                        ),
                    'enabled' => true,
                ),
            594 =>
                array(
                    'id' => '2595',
                    'bank_id' => '10',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60730736',
                        ),
                    'enabled' => true,
                ),
            595 =>
                array(
                    'id' => '2596',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60730794',
                        ),
                    'enabled' => true,
                ),
            596 =>
                array(
                    'id' => '2597',
                    'bank_id' => '10',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60750158',
                        ),
                    'enabled' => true,
                ),
            597 =>
                array(
                    'id' => '2598',
                    'bank_id' => '10',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60750679',
                        ),
                    'enabled' => true,
                ),
            598 =>
                array(
                    'id' => '2599',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60761213',
                        ),
                    'enabled' => true,
                ),
            599 =>
                array(
                    'id' => '2600',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60761789',
                        ),
                    'enabled' => true,
                ),
            600 =>
                array(
                    'id' => '2601',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PANCHAGARH SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60770567',
                        ),
                    'enabled' => true,
                ),
            601 =>
                array(
                    'id' => '2602',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60781093',
                        ),
                    'enabled' => true,
                ),
            602 =>
                array(
                    'id' => '2603',
                    'bank_id' => '10',
                    'bank_branch_name' => 'PIROJPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60790776',
                        ),
                    'enabled' => true,
                ),
            603 =>
                array(
                    'id' => '2604',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SWARUPKATI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60790989',
                        ),
                    'enabled' => true,
                ),
            604 =>
                array(
                    'id' => '2605',
                    'bank_id' => '10',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60811934',
                        ),
                    'enabled' => true,
                ),
            605 =>
                array(
                    'id' => '2606',
                    'bank_id' => '10',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60820738',
                        ),
                    'enabled' => true,
                ),
            606 =>
                array(
                    'id' => '2607',
                    'bank_id' => '10',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60851457',
                        ),
                    'enabled' => true,
                ),
            607 =>
                array(
                    'id' => '2608',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BHEDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60860101',
                        ),
                    'enabled' => true,
                ),
            608 =>
                array(
                    'id' => '2609',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60871095',
                        ),
                    'enabled' => true,
                ),
            609 =>
                array(
                    'id' => '2610',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BELKUCHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60880228',
                        ),
                    'enabled' => true,
                ),
            610 =>
                array(
                    'id' => '2611',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SERAJGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60881885',
                        ),
                    'enabled' => true,
                ),
            611 =>
                array(
                    'id' => '2612',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60881906',
                        ),
                    'enabled' => true,
                ),
            612 =>
                array(
                    'id' => '2613',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60890555',
                        ),
                    'enabled' => true,
                ),
            613 =>
                array(
                    'id' => '2614',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60901123',
                        ),
                    'enabled' => true,
                ),
            614 =>
                array(
                    'id' => '2615',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60910314',
                        ),
                    'enabled' => true,
                ),
            615 =>
                array(
                    'id' => '2616',
                    'bank_id' => '10',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60910435',
                        ),
                    'enabled' => true,
                ),
            616 =>
                array(
                    'id' => '2617',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60911542',
                        ),
                    'enabled' => true,
                ),
            617 =>
                array(
                    'id' => '2618',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SYLHET SOUTH SURMA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60913508',
                        ),
                    'enabled' => true,
                ),
            618 =>
                array(
                    'id' => '2619',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60913553',
                        ),
                    'enabled' => true,
                ),
            619 =>
                array(
                    'id' => '2620',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SYLHET BONDOR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60913566',
                        ),
                    'enabled' => true,
                ),
            620 =>
                array(
                    'id' => '2621',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SYLHET UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60913737',
                        ),
                    'enabled' => true,
                ),
            621 =>
                array(
                    'id' => '2622',
                    'bank_id' => '10',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60914152',
                        ),
                    'enabled' => true,
                ),
            622 =>
                array(
                    'id' => '2623',
                    'bank_id' => '10',
                    'bank_branch_name' => 'SHAKHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60932200',
                        ),
                    'enabled' => true,
                ),
            623 =>
                array(
                    'id' => '2624',
                    'bank_id' => '10',
                    'bank_branch_name' => 'GHATAIL SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60932297',
                        ),
                    'enabled' => true,
                ),
            624 =>
                array(
                    'id' => '2625',
                    'bank_id' => '10',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60932305',
                        ),
                    'enabled' => true,
                ),
            625 =>
                array(
                    'id' => '2626',
                    'bank_id' => '10',
                    'bank_branch_name' => 'THAKURGAON SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '60940997',
                        ),
                    'enabled' => true,
                ),
            626 =>
                array(
                    'id' => '2627',
                    'bank_id' => '11',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65150137',
                        ),
                    'enabled' => true,
                ),
            627 =>
                array(
                    'id' => '2628',
                    'bank_id' => '11',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65261189',
                        ),
                    'enabled' => true,
                ),
            628 =>
                array(
                    'id' => '2629',
                    'bank_id' => '11',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65261721',
                        ),
                    'enabled' => true,
                ),
            629 =>
                array(
                    'id' => '2630',
                    'bank_id' => '11',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65262988',
                        ),
                    'enabled' => true,
                ),
            630 =>
                array(
                    'id' => '2631',
                    'bank_id' => '11',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65264636',
                        ),
                    'enabled' => true,
                ),
            631 =>
                array(
                    'id' => '2632',
                    'bank_id' => '11',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65270004',
                        ),
                    'enabled' => true,
                ),
            632 =>
                array(
                    'id' => '2633',
                    'bank_id' => '11',
                    'bank_branch_name' => 'DHAKA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65271782',
                        ),
                    'enabled' => true,
                ),
            633 =>
                array(
                    'id' => '2634',
                    'bank_id' => '11',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '65913558',
                        ),
                    'enabled' => true,
                ),
            634 =>
                array(
                    'id' => '2635',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70060283',
                        ),
                    'enabled' => true,
                ),
            635 =>
                array(
                    'id' => '2636',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70090103',
                        ),
                    'enabled' => true,
                ),
            636 =>
                array(
                    'id' => '2637',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70100372',
                        ),
                    'enabled' => true,
                ),
            637 =>
                array(
                    'id' => '2638',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70120431',
                        ),
                    'enabled' => true,
                ),
            638 =>
                array(
                    'id' => '2639',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KASBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70121030',
                        ),
                    'enabled' => true,
                ),
            639 =>
                array(
                    'id' => '2640',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RUPSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70130155',
                        ),
                    'enabled' => true,
                ),
            640 =>
                array(
                    'id' => '2641',
                    'bank_id' => '12',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70130313',
                        ),
                    'enabled' => true,
                ),
            641 =>
                array(
                    'id' => '2642',
                    'bank_id' => '12',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70130526',
                        ),
                    'enabled' => true,
                ),
            642 =>
                array(
                    'id' => '2643',
                    'bank_id' => '12',
                    'bank_branch_name' => 'FARIDGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70130676',
                        ),
                    'enabled' => true,
                ),
            643 =>
                array(
                    'id' => '2644',
                    'bank_id' => '12',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70130889',
                        ),
                    'enabled' => true,
                ),
            644 =>
                array(
                    'id' => '2645',
                    'bank_id' => '12',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70150135',
                        ),
                    'enabled' => true,
                ),
            645 =>
                array(
                    'id' => '2646',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BANK ASIA BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70150269',
                        ),
                    'enabled' => true,
                ),
            646 =>
                array(
                    'id' => '2647',
                    'bank_id' => '12',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70150469',
                        ),
                    'enabled' => true,
                ),
            647 =>
                array(
                    'id' => '2648',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70150793',
                        ),
                    'enabled' => true,
                ),
            648 =>
                array(
                    'id' => '2649',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BHATIARY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70151213',
                        ),
                    'enabled' => true,
                ),
            649 =>
                array(
                    'id' => '2650',
                    'bank_id' => '12',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70151484',
                        ),
                    'enabled' => true,
                ),
            650 =>
                array(
                    'id' => '2651',
                    'bank_id' => '12',
                    'bank_branch_name' => 'C.E.P.Z.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70151576',
                        ),
                    'enabled' => true,
                ),
            651 =>
                array(
                    'id' => '2652',
                    'bank_id' => '12',
                    'bank_branch_name' => 'CHAKTAI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70151763',
                        ),
                    'enabled' => true,
                ),
            652 =>
                array(
                    'id' => '2653',
                    'bank_id' => '12',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70152562',
                        ),
                    'enabled' => true,
                ),
            653 =>
                array(
                    'id' => '2654',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KAMAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70153974',
                        ),
                    'enabled' => true,
                ),
            654 =>
                array(
                    'id' => '2655',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KEPZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70154078',
                        ),
                    'enabled' => true,
                ),
            655 =>
                array(
                    'id' => '2656',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70154278',
                        ),
                    'enabled' => true,
                ),
            656 =>
                array(
                    'id' => '2657',
                    'bank_id' => '12',
                    'bank_branch_name' => 'LICHU BAGAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70154636',
                        ),
                    'enabled' => true,
                ),
            657 =>
                array(
                    'id' => '2658',
                    'bank_id' => '12',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70154665',
                        ),
                    'enabled' => true,
                ),
            658 =>
                array(
                    'id' => '2659',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MCB SK. MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70154902',
                        ),
                    'enabled' => true,
                ),
            659 =>
                array(
                    'id' => '2660',
                    'bank_id' => '12',
                    'bank_branch_name' => 'OXYGEN MOUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70155880',
                        ),
                    'enabled' => true,
                ),
            660 =>
                array(
                    'id' => '2661',
                    'bank_id' => '12',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70157512',
                        ),
                    'enabled' => true,
                ),
            661 =>
                array(
                    'id' => '2662',
                    'bank_id' => '12',
                    'bank_branch_name' => 'STRAND ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70157570',
                        ),
                    'enabled' => true,
                ),
            662 =>
                array(
                    'id' => '2663',
                    'bank_id' => '12',
                    'bank_branch_name' => 'POTHER HAAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70158140',
                        ),
                    'enabled' => true,
                ),
            663 =>
                array(
                    'id' => '2664',
                    'bank_id' => '12',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70191152',
                        ),
                    'enabled' => true,
                ),
            664 =>
                array(
                    'id' => '2665',
                    'bank_id' => '12',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70191428',
                        ),
                    'enabled' => true,
                ),
            665 =>
                array(
                    'id' => '2666',
                    'bank_id' => '12',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70192119',
                        ),
                    'enabled' => true,
                ),
            666 =>
                array(
                    'id' => '2667',
                    'bank_id' => '12',
                    'bank_branch_name' => 'NANGALKOT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70193255',
                        ),
                    'enabled' => true,
                ),
            667 =>
                array(
                    'id' => '2668',
                    'bank_id' => '12',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70220252',
                        ),
                    'enabled' => true,
                ),
            668 =>
                array(
                    'id' => '2669',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SONARGAON JANAPATH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260083',
                        ),
                    'enabled' => true,
                ),
            669 =>
                array(
                    'id' => '2670',
                    'bank_id' => '12',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260225',
                        ),
                    'enabled' => true,
                ),
            670 =>
                array(
                    'id' => '2671',
                    'bank_id' => '12',
                    'bank_branch_name' => 'ASHULIA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260238',
                        ),
                    'enabled' => true,
                ),
            671 =>
                array(
                    'id' => '2672',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260559',
                        ),
                    'enabled' => true,
                ),
            672 =>
                array(
                    'id' => '2673',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KAZIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260696',
                        ),
                    'enabled' => true,
                ),
            673 =>
                array(
                    'id' => '2674',
                    'bank_id' => '12',
                    'bank_branch_name' => 'GULSHAN-2',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260838',
                        ),
                    'enabled' => true,
                ),
            674 =>
                array(
                    'id' => '2675',
                    'bank_id' => '12',
                    'bank_branch_name' => 'CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260854',
                        ),
                    'enabled' => true,
                ),
            675 =>
                array(
                    'id' => '2676',
                    'bank_id' => '12',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70260917',
                        ),
                    'enabled' => true,
                ),
            676 =>
                array(
                    'id' => '2677',
                    'bank_id' => '12',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70261187',
                        ),
                    'enabled' => true,
                ),
            677 =>
                array(
                    'id' => '2678',
                    'bank_id' => '12',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70261332',
                        ),
                    'enabled' => true,
                ),
            678 =>
                array(
                    'id' => '2679',
                    'bank_id' => '12',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70261729',
                        ),
                    'enabled' => true,
                ),
            679 =>
                array(
                    'id' => '2680',
                    'bank_id' => '12',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70262052',
                        ),
                    'enabled' => true,
                ),
            680 =>
                array(
                    'id' => '2681',
                    'bank_id' => '12',
                    'bank_branch_name' => 'LALMATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70262836',
                        ),
                    'enabled' => true,
                ),
            681 =>
                array(
                    'id' => '2682',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MCB DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70262928',
                        ),
                    'enabled' => true,
                ),
            682 =>
                array(
                    'id' => '2683',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70262986',
                        ),
                    'enabled' => true,
                ),
            683 =>
                array(
                    'id' => '2684',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MIRPUR-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70263101',
                        ),
                    'enabled' => true,
                ),
            684 =>
                array(
                    'id' => '2685',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70263198',
                        ),
                    'enabled' => true,
                ),
            685 =>
                array(
                    'id' => '2686',
                    'bank_id' => '12',
                    'bank_branch_name' => 'NORTH SOUTH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70263556',
                        ),
                    'enabled' => true,
                ),
            686 =>
                array(
                    'id' => '2687',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70263701',
                        ),
                    'enabled' => true,
                ),
            687 =>
                array(
                    'id' => '2688',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70263972',
                        ),
                    'enabled' => true,
                ),
            688 =>
                array(
                    'id' => '2689',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RUPNAGAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70264018',
                        ),
                    'enabled' => true,
                ),
            689 =>
                array(
                    'id' => '2690',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70264034',
                        ),
                    'enabled' => true,
                ),
            690 =>
                array(
                    'id' => '2691',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70264092',
                        ),
                    'enabled' => true,
                ),
            691 =>
                array(
                    'id' => '2692',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70264300',
                        ),
                    'enabled' => true,
                ),
            692 =>
                array(
                    'id' => '2693',
                    'bank_id' => '12',
                    'bank_branch_name' => 'TEJGOAN LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70264526',
                        ),
                    'enabled' => true,
                ),
            693 =>
                array(
                    'id' => '2694',
                    'bank_id' => '12',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70264634',
                        ),
                    'enabled' => true,
                ),
            694 =>
                array(
                    'id' => '2695',
                    'bank_id' => '12',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270002',
                        ),
                    'enabled' => true,
                ),
            695 =>
                array(
                    'id' => '2696',
                    'bank_id' => '12',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270136',
                        ),
                    'enabled' => true,
                ),
            696 =>
                array(
                    'id' => '2697',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PARAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270152',
                        ),
                    'enabled' => true,
                ),
            697 =>
                array(
                    'id' => '2698',
                    'bank_id' => '12',
                    'bank_branch_name' => 'AGLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270165',
                        ),
                    'enabled' => true,
                ),
            698 =>
                array(
                    'id' => '2699',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PARIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270202',
                        ),
                    'enabled' => true,
                ),
            699 =>
                array(
                    'id' => '2700',
                    'bank_id' => '12',
                    'bank_branch_name' => 'ESKATON GARDEN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270215',
                        ),
                    'enabled' => true,
                ),
            700 =>
                array(
                    'id' => '2701',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BASHABOO SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70270981',
                        ),
                    'enabled' => true,
                ),
            701 =>
                array(
                    'id' => '2702',
                    'bank_id' => '12',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70271427',
                        ),
                    'enabled' => true,
                ),
            702 =>
                array(
                    'id' => '2703',
                    'bank_id' => '12',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70272684',
                        ),
                    'enabled' => true,
                ),
            703 =>
                array(
                    'id' => '2704',
                    'bank_id' => '12',
                    'bank_branch_name' => 'JATRABARI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70273238',
                        ),
                    'enabled' => true,
                ),
            704 =>
                array(
                    'id' => '2705',
                    'bank_id' => '12',
                    'bank_branch_name' => 'JURAIN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70273320',
                        ),
                    'enabled' => true,
                ),
            705 =>
                array(
                    'id' => '2706',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KALATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70273438',
                        ),
                    'enabled' => true,
                ),
            706 =>
                array(
                    'id' => '2707',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MCB BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70274037',
                        ),
                    'enabled' => true,
                ),
            707 =>
                array(
                    'id' => '2708',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MITFORD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70274066',
                        ),
                    'enabled' => true,
                ),
            708 =>
                array(
                    'id' => '2709',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70274187',
                        ),
                    'enabled' => true,
                ),
            709 =>
                array(
                    'id' => '2710',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PALTAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70275207',
                        ),
                    'enabled' => true,
                ),
            710 =>
                array(
                    'id' => '2711',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70275357',
                        ),
                    'enabled' => true,
                ),
            711 =>
                array(
                    'id' => '2712',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RUHITPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70275836',
                        ),
                    'enabled' => true,
                ),
            712 =>
                array(
                    'id' => '2713',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SCOTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70276130',
                        ),
                    'enabled' => true,
                ),
            713 =>
                array(
                    'id' => '2714',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70276343',
                        ),
                    'enabled' => true,
                ),
            714 =>
                array(
                    'id' => '2715',
                    'bank_id' => '12',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70280676',
                        ),
                    'enabled' => true,
                ),
            715 =>
                array(
                    'id' => '2716',
                    'bank_id' => '12',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70290529',
                        ),
                    'enabled' => true,
                ),
            716 =>
                array(
                    'id' => '2717',
                    'bank_id' => '12',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70330526',
                        ),
                    'enabled' => true,
                ),
            717 =>
                array(
                    'id' => '2718',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KALIAKOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70330797',
                        ),
                    'enabled' => true,
                ),
            718 =>
                array(
                    'id' => '2719',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70330942',
                        ),
                    'enabled' => true,
                ),
            719 =>
                array(
                    'id' => '2720',
                    'bank_id' => '12',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70331633',
                        ),
                    'enabled' => true,
                ),
            720 =>
                array(
                    'id' => '2721',
                    'bank_id' => '12',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70350377',
                        ),
                    'enabled' => true,
                ),
            721 =>
                array(
                    'id' => '2722',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MUKSUDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70350735',
                        ),
                    'enabled' => true,
                ),
            722 =>
                array(
                    'id' => '2723',
                    'bank_id' => '12',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70410941',
                        ),
                    'enabled' => true,
                ),
            723 =>
                array(
                    'id' => '2724',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70471548',
                        ),
                    'enabled' => true,
                ),
            724 =>
                array(
                    'id' => '2725',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PURATON BORO BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70472163',
                        ),
                    'enabled' => true,
                ),
            725 =>
                array(
                    'id' => '2726',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BHAIRAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70480197',
                        ),
                    'enabled' => true,
                ),
            726 =>
                array(
                    'id' => '2727',
                    'bank_id' => '12',
                    'bank_branch_name' => 'TARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70481154',
                        ),
                    'enabled' => true,
                ),
            727 =>
                array(
                    'id' => '2728',
                    'bank_id' => '12',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70500943',
                        ),
                    'enabled' => true,
                ),
            728 =>
                array(
                    'id' => '2729',
                    'bank_id' => '12',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70510191',
                        ),
                    'enabled' => true,
                ),
            729 =>
                array(
                    'id' => '2730',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RAMGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70511037',
                        ),
                    'enabled' => true,
                ),
            730 =>
                array(
                    'id' => '2731',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70581188',
                        ),
                    'enabled' => true,
                ),
            731 =>
                array(
                    'id' => '2732',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BALIGAON SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70590153',
                        ),
                    'enabled' => true,
                ),
            732 =>
                array(
                    'id' => '2733',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MALKHANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70590887',
                        ),
                    'enabled' => true,
                ),
            733 =>
                array(
                    'id' => '2734',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SERAJDIKHAN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70591286',
                        ),
                    'enabled' => true,
                ),
            734 =>
                array(
                    'id' => '2735',
                    'bank_id' => '12',
                    'bank_branch_name' => 'NIMTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70591660',
                        ),
                    'enabled' => true,
                ),
            735 =>
                array(
                    'id' => '2736',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70611753',
                        ),
                    'enabled' => true,
                ),
            736 =>
                array(
                    'id' => '2737',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MOHADEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70641099',
                        ),
                    'enabled' => true,
                ),
            737 =>
                array(
                    'id' => '2738',
                    'bank_id' => '12',
                    'bank_branch_name' => 'FATULLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70670523',
                        ),
                    'enabled' => true,
                ),
            738 =>
                array(
                    'id' => '2739',
                    'bank_id' => '12',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70671180',
                        ),
                    'enabled' => true,
                ),
            739 =>
                array(
                    'id' => '2740',
                    'bank_id' => '12',
                    'bank_branch_name' => 'HATIRDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70680555',
                        ),
                    'enabled' => true,
                ),
            740 =>
                array(
                    'id' => '2741',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70680676',
                        ),
                    'enabled' => true,
                ),
            741 =>
                array(
                    'id' => '2742',
                    'bank_id' => '12',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70750214',
                        ),
                    'enabled' => true,
                ),
            742 =>
                array(
                    'id' => '2743',
                    'bank_id' => '12',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70750580',
                        ),
                    'enabled' => true,
                ),
            743 =>
                array(
                    'id' => '2744',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70752238',
                        ),
                    'enabled' => true,
                ),
            744 =>
                array(
                    'id' => '2745',
                    'bank_id' => '12',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70761216',
                        ),
                    'enabled' => true,
                ),
            745 =>
                array(
                    'id' => '2746',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70770557',
                        ),
                    'enabled' => true,
                ),
            746 =>
                array(
                    'id' => '2747',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70811937',
                        ),
                    'enabled' => true,
                ),
            747 =>
                array(
                    'id' => '2748',
                    'bank_id' => '12',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70820678',
                        ),
                    'enabled' => true,
                ),
            748 =>
                array(
                    'id' => '2749',
                    'bank_id' => '12',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70851450',
                        ),
                    'enabled' => true,
                ),
            749 =>
                array(
                    'id' => '2750',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SIRAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70880050',
                        ),
                    'enabled' => true,
                ),
            750 =>
                array(
                    'id' => '2751',
                    'bank_id' => '12',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70900493',
                        ),
                    'enabled' => true,
                ),
            751 =>
                array(
                    'id' => '2752',
                    'bank_id' => '12',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70910317',
                        ),
                    'enabled' => true,
                ),
            752 =>
                array(
                    'id' => '2753',
                    'bank_id' => '12',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70912502',
                        ),
                    'enabled' => true,
                ),
            753 =>
                array(
                    'id' => '2754',
                    'bank_id' => '12',
                    'bank_branch_name' => 'REKABIBAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70913035',
                        ),
                    'enabled' => true,
                ),
            754 =>
                array(
                    'id' => '2755',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SYLHET UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70913730',
                        ),
                    'enabled' => true,
                ),
            755 =>
                array(
                    'id' => '2756',
                    'bank_id' => '12',
                    'bank_branch_name' => 'SYLHET(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70913798',
                        ),
                    'enabled' => true,
                ),
            756 =>
                array(
                    'id' => '2757',
                    'bank_id' => '12',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '70932290',
                        ),
                    'enabled' => true,
                ),
            757 =>
                array(
                    'id' => '2758',
                    'bank_id' => '13',
                    'bank_branch_name' => 'CHITTAGONG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '75151968',
                        ),
                    'enabled' => true,
                ),
            758 =>
                array(
                    'id' => '2759',
                    'bank_id' => '13',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '75261182',
                        ),
                    'enabled' => true,
                ),
            759 =>
                array(
                    'id' => '2760',
                    'bank_id' => '13',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '75261724',
                        ),
                    'enabled' => true,
                ),
            760 =>
                array(
                    'id' => '2761',
                    'bank_id' => '13',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '75270007',
                        ),
                    'enabled' => true,
                ),
            761 =>
                array(
                    'id' => '2762',
                    'bank_id' => '13',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '75274245',
                        ),
                    'enabled' => true,
                ),
            762 =>
                array(
                    'id' => '2763',
                    'bank_id' => '14',
                    'bank_branch_name' => 'CHITTAGONG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80151966',
                        ),
                    'enabled' => true,
                ),
            763 =>
                array(
                    'id' => '2764',
                    'bank_id' => '14',
                    'bank_branch_name' => 'CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80260857',
                        ),
                    'enabled' => true,
                ),
            764 =>
                array(
                    'id' => '2765',
                    'bank_id' => '14',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80261180',
                        ),
                    'enabled' => true,
                ),
            765 =>
                array(
                    'id' => '2766',
                    'bank_id' => '14',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80261722',
                        ),
                    'enabled' => true,
                ),
            766 =>
                array(
                    'id' => '2767',
                    'bank_id' => '14',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80262989',
                        ),
                    'enabled' => true,
                ),
            767 =>
                array(
                    'id' => '2768',
                    'bank_id' => '14',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80263612',
                        ),
                    'enabled' => true,
                ),
            768 =>
                array(
                    'id' => '2769',
                    'bank_id' => '14',
                    'bank_branch_name' => 'TEJGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80264482',
                        ),
                    'enabled' => true,
                ),
            769 =>
                array(
                    'id' => '2770',
                    'bank_id' => '14',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80264637',
                        ),
                    'enabled' => true,
                ),
            770 =>
                array(
                    'id' => '2771',
                    'bank_id' => '14',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80270005',
                        ),
                    'enabled' => true,
                ),
            771 =>
                array(
                    'id' => '2772',
                    'bank_id' => '14',
                    'bank_branch_name' => 'DHAKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80271512',
                        ),
                    'enabled' => true,
                ),
            772 =>
                array(
                    'id' => '2773',
                    'bank_id' => '14',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80671183',
                        ),
                    'enabled' => true,
                ),
            773 =>
                array(
                    'id' => '2774',
                    'bank_id' => '14',
                    'bank_branch_name' => 'SYLHET SADAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '80913670',
                        ),
                    'enabled' => true,
                ),
            774 =>
                array(
                    'id' => '2775',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85060281',
                        ),
                    'enabled' => true,
                ),
            775 =>
                array(
                    'id' => '2776',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85100370',
                        ),
                    'enabled' => true,
                ),
            776 =>
                array(
                    'id' => '2777',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85102749',
                        ),
                    'enabled' => true,
                ),
            777 =>
                array(
                    'id' => '2778',
                    'bank_id' => '15',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85120105',
                        ),
                    'enabled' => true,
                ),
            778 =>
                array(
                    'id' => '2779',
                    'bank_id' => '15',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85150133',
                        ),
                    'enabled' => true,
                ),
            779 =>
                array(
                    'id' => '2780',
                    'bank_id' => '15',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85150467',
                        ),
                    'enabled' => true,
                ),
            780 =>
                array(
                    'id' => '2781',
                    'bank_id' => '15',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85151482',
                        ),
                    'enabled' => true,
                ),
            781 =>
                array(
                    'id' => '2782',
                    'bank_id' => '15',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85152744',
                        ),
                    'enabled' => true,
                ),
            782 =>
                array(
                    'id' => '2783',
                    'bank_id' => '15',
                    'bank_branch_name' => 'GOHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85153019',
                        ),
                    'enabled' => true,
                ),
            783 =>
                array(
                    'id' => '2784',
                    'bank_id' => '15',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85153169',
                        ),
                    'enabled' => true,
                ),
            784 =>
                array(
                    'id' => '2785',
                    'bank_id' => '15',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85153222',
                        ),
                    'enabled' => true,
                ),
            785 =>
                array(
                    'id' => '2786',
                    'bank_id' => '15',
                    'bank_branch_name' => 'ISLAMI BANKING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85153464',
                        ),
                    'enabled' => true,
                ),
            786 =>
                array(
                    'id' => '2787',
                    'bank_id' => '15',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85153648',
                        ),
                    'enabled' => true,
                ),
            787 =>
                array(
                    'id' => '2788',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85154276',
                        ),
                    'enabled' => true,
                ),
            788 =>
                array(
                    'id' => '2789',
                    'bank_id' => '15',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85155659',
                        ),
                    'enabled' => true,
                ),
            789 =>
                array(
                    'id' => '2790',
                    'bank_id' => '15',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85156166',
                        ),
                    'enabled' => true,
                ),
            790 =>
                array(
                    'id' => '2791',
                    'bank_id' => '15',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85191150',
                        ),
                    'enabled' => true,
                ),
            791 =>
                array(
                    'id' => '2792',
                    'bank_id' => '15',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85220168',
                        ),
                    'enabled' => true,
                ),
            792 =>
                array(
                    'id' => '2793',
                    'bank_id' => '15',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85220250',
                        ),
                    'enabled' => true,
                ),
            793 =>
                array(
                    'id' => '2794',
                    'bank_id' => '15',
                    'bank_branch_name' => 'TEKNAF',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85220913',
                        ),
                    'enabled' => true,
                ),
            794 =>
                array(
                    'id' => '2795',
                    'bank_id' => '15',
                    'bank_branch_name' => 'AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85260131',
                        ),
                    'enabled' => true,
                ),
            795 =>
                array(
                    'id' => '2796',
                    'bank_id' => '15',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85260344',
                        ),
                    'enabled' => true,
                ),
            796 =>
                array(
                    'id' => '2797',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85260436',
                        ),
                    'enabled' => true,
                ),
            797 =>
                array(
                    'id' => '2798',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BARIDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85260528',
                        ),
                    'enabled' => true,
                ),
            798 =>
                array(
                    'id' => '2799',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85260728',
                        ),
                    'enabled' => true,
                ),
            799 =>
                array(
                    'id' => '2800',
                    'bank_id' => '15',
                    'bank_branch_name' => 'DHAKA EPZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261093',
                        ),
                    'enabled' => true,
                ),
            800 =>
                array(
                    'id' => '2801',
                    'bank_id' => '15',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261185',
                        ),
                    'enabled' => true,
                ),
            801 =>
                array(
                    'id' => '2802',
                    'bank_id' => '15',
                    'bank_branch_name' => 'DHANMONDI MODEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261198',
                        ),
                    'enabled' => true,
                ),
            802 =>
                array(
                    'id' => '2803',
                    'bank_id' => '15',
                    'bank_branch_name' => 'FANTASY KINGDOM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261422',
                        ),
                    'enabled' => true,
                ),
            803 =>
                array(
                    'id' => '2804',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261514',
                        ),
                    'enabled' => true,
                ),
            804 =>
                array(
                    'id' => '2805',
                    'bank_id' => '15',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261727',
                        ),
                    'enabled' => true,
                ),
            805 =>
                array(
                    'id' => '2806',
                    'bank_id' => '15',
                    'bank_branch_name' => 'GULSHAN CIRCLE-2',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85261772',
                        ),
                    'enabled' => true,
                ),
            806 =>
                array(
                    'id' => '2807',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85262539',
                        ),
                    'enabled' => true,
                ),
            807 =>
                array(
                    'id' => '2808',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85262984',
                        ),
                    'enabled' => true,
                ),
            808 =>
                array(
                    'id' => '2809',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85263196',
                        ),
                    'enabled' => true,
                ),
            809 =>
                array(
                    'id' => '2810',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SAVAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85264124',
                        ),
                    'enabled' => true,
                ),
            810 =>
                array(
                    'id' => '2811',
                    'bank_id' => '15',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85264632',
                        ),
                    'enabled' => true,
                ),
            811 =>
                array(
                    'id' => '2812',
                    'bank_id' => '15',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85270000',
                        ),
                    'enabled' => true,
                ),
            812 =>
                array(
                    'id' => '2813',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85270884',
                        ),
                    'enabled' => true,
                ),
            813 =>
                array(
                    'id' => '2814',
                    'bank_id' => '15',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85272329',
                        ),
                    'enabled' => true,
                ),
            814 =>
                array(
                    'id' => '2815',
                    'bank_id' => '15',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85272682',
                        ),
                    'enabled' => true,
                ),
            815 =>
                array(
                    'id' => '2816',
                    'bank_id' => '15',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85272808',
                        ),
                    'enabled' => true,
                ),
            816 =>
                array(
                    'id' => '2817',
                    'bank_id' => '15',
                    'bank_branch_name' => 'ISLAMI BANKING(MOTIJHEEL)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85272958',
                        ),
                    'enabled' => true,
                ),
            817 =>
                array(
                    'id' => '2818',
                    'bank_id' => '15',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85272987',
                        ),
                    'enabled' => true,
                ),
            818 =>
                array(
                    'id' => '2819',
                    'bank_id' => '15',
                    'bank_branch_name' => 'JATRABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273223',
                        ),
                    'enabled' => true,
                ),
            819 =>
                array(
                    'id' => '2820',
                    'bank_id' => '15',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273281',
                        ),
                    'enabled' => true,
                ),
            820 =>
                array(
                    'id' => '2821',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KAKRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273373',
                        ),
                    'enabled' => true,
                ),
            821 =>
                array(
                    'id' => '2822',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KALATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273436',
                        ),
                    'enabled' => true,
                ),
            822 =>
                array(
                    'id' => '2823',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273649',
                        ),
                    'enabled' => true,
                ),
            823 =>
                array(
                    'id' => '2824',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KHILGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273678',
                        ),
                    'enabled' => true,
                ),
            824 =>
                array(
                    'id' => '2825',
                    'bank_id' => '15',
                    'bank_branch_name' => 'LOCAL OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85273881',
                        ),
                    'enabled' => true,
                ),
            825 =>
                array(
                    'id' => '2826',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SHAHJAHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85274185',
                        ),
                    'enabled' => true,
                ),
            826 =>
                array(
                    'id' => '2827',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85274248',
                        ),
                    'enabled' => true,
                ),
            827 =>
                array(
                    'id' => '2828',
                    'bank_id' => '15',
                    'bank_branch_name' => 'NANDIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85274606',
                        ),
                    'enabled' => true,
                ),
            828 =>
                array(
                    'id' => '2829',
                    'bank_id' => '15',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85280674',
                        ),
                    'enabled' => true,
                ),
            829 =>
                array(
                    'id' => '2830',
                    'bank_id' => '15',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85290527',
                        ),
                    'enabled' => true,
                ),
            830 =>
                array(
                    'id' => '2831',
                    'bank_id' => '15',
                    'bank_branch_name' => 'CHHAGALNAIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85300312',
                        ),
                    'enabled' => true,
                ),
            831 =>
                array(
                    'id' => '2832',
                    'bank_id' => '15',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85300525',
                        ),
                    'enabled' => true,
                ),
            832 =>
                array(
                    'id' => '2833',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85330229',
                        ),
                    'enabled' => true,
                ),
            833 =>
                array(
                    'id' => '2834',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85330940',
                        ),
                    'enabled' => true,
                ),
            834 =>
                array(
                    'id' => '2835',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85331002',
                        ),
                    'enabled' => true,
                ),
            835 =>
                array(
                    'id' => '2836',
                    'bank_id' => '15',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85360615',
                        ),
                    'enabled' => true,
                ),
            836 =>
                array(
                    'id' => '2837',
                    'bank_id' => '15',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85410949',
                        ),
                    'enabled' => true,
                ),
            837 =>
                array(
                    'id' => '2838',
                    'bank_id' => '15',
                    'bank_branch_name' => 'K.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85471175',
                        ),
                    'enabled' => true,
                ),
            838 =>
                array(
                    'id' => '2839',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BHAIRAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85480229',
                        ),
                    'enabled' => true,
                ),
            839 =>
                array(
                    'id' => '2840',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85480674',
                        ),
                    'enabled' => true,
                ),
            840 =>
                array(
                    'id' => '2841',
                    'bank_id' => '15',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85510731',
                        ),
                    'enabled' => true,
                ),
            841 =>
                array(
                    'id' => '2842',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85581186',
                        ),
                    'enabled' => true,
                ),
            842 =>
                array(
                    'id' => '2843',
                    'bank_id' => '15',
                    'bank_branch_name' => 'RAZANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85591192',
                        ),
                    'enabled' => true,
                ),
            843 =>
                array(
                    'id' => '2844',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85611751',
                        ),
                    'enabled' => true,
                ),
            844 =>
                array(
                    'id' => '2845',
                    'bank_id' => '15',
                    'bank_branch_name' => 'ARAIHAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85670042',
                        ),
                    'enabled' => true,
                ),
            845 =>
                array(
                    'id' => '2846',
                    'bank_id' => '15',
                    'bank_branch_name' => 'B.B. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85670071',
                        ),
                    'enabled' => true,
                ),
            846 =>
                array(
                    'id' => '2847',
                    'bank_id' => '15',
                    'bank_branch_name' => 'KALIBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85670118',
                        ),
                    'enabled' => true,
                ),
            847 =>
                array(
                    'id' => '2848',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85670226',
                        ),
                    'enabled' => true,
                ),
            848 =>
                array(
                    'id' => '2849',
                    'bank_id' => '15',
                    'bank_branch_name' => 'GOPALDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85670600',
                        ),
                    'enabled' => true,
                ),
            849 =>
                array(
                    'id' => '2850',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MURAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85671120',
                        ),
                    'enabled' => true,
                ),
            850 =>
                array(
                    'id' => '2851',
                    'bank_id' => '15',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85671188',
                        ),
                    'enabled' => true,
                ),
            851 =>
                array(
                    'id' => '2852',
                    'bank_id' => '15',
                    'bank_branch_name' => 'PAGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85671333',
                        ),
                    'enabled' => true,
                ),
            852 =>
                array(
                    'id' => '2853',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85680674',
                        ),
                    'enabled' => true,
                ),
            853 =>
                array(
                    'id' => '2854',
                    'bank_id' => '15',
                    'bank_branch_name' => 'PANCHADANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85680979',
                        ),
                    'enabled' => true,
                ),
            854 =>
                array(
                    'id' => '2855',
                    'bank_id' => '15',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85700259',
                        ),
                    'enabled' => true,
                ),
            855 =>
                array(
                    'id' => '2856',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85730795',
                        ),
                    'enabled' => true,
                ),
            856 =>
                array(
                    'id' => '2857',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MAIJDEE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85750067',
                        ),
                    'enabled' => true,
                ),
            857 =>
                array(
                    'id' => '2858',
                    'bank_id' => '15',
                    'bank_branch_name' => 'CHOWMUHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85750238',
                        ),
                    'enabled' => true,
                ),
            858 =>
                array(
                    'id' => '2859',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85752236',
                        ),
                    'enabled' => true,
                ),
            859 =>
                array(
                    'id' => '2860',
                    'bank_id' => '15',
                    'bank_branch_name' => 'CHATMOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85760644',
                        ),
                    'enabled' => true,
                ),
            860 =>
                array(
                    'id' => '2861',
                    'bank_id' => '15',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85761780',
                        ),
                    'enabled' => true,
                ),
            861 =>
                array(
                    'id' => '2862',
                    'bank_id' => '15',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85811935',
                        ),
                    'enabled' => true,
                ),
            862 =>
                array(
                    'id' => '2863',
                    'bank_id' => '15',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85851458',
                        ),
                    'enabled' => true,
                ),
            863 =>
                array(
                    'id' => '2864',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85871096',
                        ),
                    'enabled' => true,
                ),
            864 =>
                array(
                    'id' => '2865',
                    'bank_id' => '15',
                    'bank_branch_name' => 'BELKUCHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85880229',
                        ),
                    'enabled' => true,
                ),
            865 =>
                array(
                    'id' => '2866',
                    'bank_id' => '15',
                    'bank_branch_name' => 'CHANDAIKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85880432',
                        ),
                    'enabled' => true,
                ),
            866 =>
                array(
                    'id' => '2867',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85881873',
                        ),
                    'enabled' => true,
                ),
            867 =>
                array(
                    'id' => '2868',
                    'bank_id' => '15',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85881907',
                        ),
                    'enabled' => true,
                ),
            868 =>
                array(
                    'id' => '2869',
                    'bank_id' => '15',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85911543',
                        ),
                    'enabled' => true,
                ),
            869 =>
                array(
                    'id' => '2870',
                    'bank_id' => '15',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85912500',
                        ),
                    'enabled' => true,
                ),
            870 =>
                array(
                    'id' => '2871',
                    'bank_id' => '15',
                    'bank_branch_name' => 'MADINA MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85912542',
                        ),
                    'enabled' => true,
                ),
            871 =>
                array(
                    'id' => '2872',
                    'bank_id' => '15',
                    'bank_branch_name' => 'UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85914032',
                        ),
                    'enabled' => true,
                ),
            872 =>
                array(
                    'id' => '2873',
                    'bank_id' => '15',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '85932298',
                        ),
                    'enabled' => true,
                ),
            873 =>
                array(
                    'id' => '2874',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90060289',
                        ),
                    'enabled' => true,
                ),
            874 =>
                array(
                    'id' => '2875',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90100378',
                        ),
                    'enabled' => true,
                ),
            875 =>
                array(
                    'id' => '2876',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90120103',
                        ),
                    'enabled' => true,
                ),
            876 =>
                array(
                    'id' => '2877',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90120437',
                        ),
                    'enabled' => true,
                ),
            877 =>
                array(
                    'id' => '2878',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90130319',
                        ),
                    'enabled' => true,
                ),
            878 =>
                array(
                    'id' => '2879',
                    'bank_id' => '16',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90150131',
                        ),
                    'enabled' => true,
                ),
            879 =>
                array(
                    'id' => '2880',
                    'bank_id' => '16',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90151480',
                        ),
                    'enabled' => true,
                ),
            880 =>
                array(
                    'id' => '2881',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHITTAGONG EPZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90152005',
                        ),
                    'enabled' => true,
                ),
            881 =>
                array(
                    'id' => '2882',
                    'bank_id' => '16',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90152742',
                        ),
                    'enabled' => true,
                ),
            882 =>
                array(
                    'id' => '2883',
                    'bank_id' => '16',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90153167',
                        ),
                    'enabled' => true,
                ),
            883 =>
                array(
                    'id' => '2884',
                    'bank_id' => '16',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90153220',
                        ),
                    'enabled' => true,
                ),
            884 =>
                array(
                    'id' => '2885',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90153646',
                        ),
                    'enabled' => true,
                ),
            885 =>
                array(
                    'id' => '2886',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90153738',
                        ),
                    'enabled' => true,
                ),
            886 =>
                array(
                    'id' => '2887',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90154274',
                        ),
                    'enabled' => true,
                ),
            887 =>
                array(
                    'id' => '2888',
                    'bank_id' => '16',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90154661',
                        ),
                    'enabled' => true,
                ),
            888 =>
                array(
                    'id' => '2889',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90155323',
                        ),
                    'enabled' => true,
                ),
            889 =>
                array(
                    'id' => '2890',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90156135',
                        ),
                    'enabled' => true,
                ),
            890 =>
                array(
                    'id' => '2891',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RAOZAN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90156506',
                        ),
                    'enabled' => true,
                ),
            891 =>
                array(
                    'id' => '2892',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90180198',
                        ),
                    'enabled' => true,
                ),
            892 =>
                array(
                    'id' => '2893',
                    'bank_id' => '16',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90191158',
                        ),
                    'enabled' => true,
                ),
            893 =>
                array(
                    'id' => '2894',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JHAWTALA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90191161',
                        ),
                    'enabled' => true,
                ),
            894 =>
                array(
                    'id' => '2895',
                    'bank_id' => '16',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90191424',
                        ),
                    'enabled' => true,
                ),
            895 =>
                array(
                    'id' => '2896',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90192115',
                        ),
                    'enabled' => true,
                ),
            896 =>
                array(
                    'id' => '2897',
                    'bank_id' => '16',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90192715',
                        ),
                    'enabled' => true,
                ),
            897 =>
                array(
                    'id' => '2898',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90220166',
                        ),
                    'enabled' => true,
                ),
            898 =>
                array(
                    'id' => '2899',
                    'bank_id' => '16',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90220258',
                        ),
                    'enabled' => true,
                ),
            899 =>
                array(
                    'id' => '2900',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ASHKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260205',
                        ),
                    'enabled' => true,
                ),
            900 =>
                array(
                    'id' => '2901',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260221',
                        ),
                    'enabled' => true,
                ),
            901 =>
                array(
                    'id' => '2902',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DUMNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260368',
                        ),
                    'enabled' => true,
                ),
            902 =>
                array(
                    'id' => '2903',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260434',
                        ),
                    'enabled' => true,
                ),
            903 =>
                array(
                    'id' => '2904',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BANANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260463',
                        ),
                    'enabled' => true,
                ),
            904 =>
                array(
                    'id' => '2905',
                    'bank_id' => '16',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260500',
                        ),
                    'enabled' => true,
                ),
            905 =>
                array(
                    'id' => '2906',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260555',
                        ),
                    'enabled' => true,
                ),
            906 =>
                array(
                    'id' => '2907',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DAKSHIN KHAN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90260926',
                        ),
                    'enabled' => true,
                ),
            907 =>
                array(
                    'id' => '2908',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DHAKA EPZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90261091',
                        ),
                    'enabled' => true,
                ),
            908 =>
                array(
                    'id' => '2909',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90261183',
                        ),
                    'enabled' => true,
                ),
            909 =>
                array(
                    'id' => '2910',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90261338',
                        ),
                    'enabled' => true,
                ),
            910 =>
                array(
                    'id' => '2911',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90261725',
                        ),
                    'enabled' => true,
                ),
            911 =>
                array(
                    'id' => '2912',
                    'bank_id' => '16',
                    'bank_branch_name' => 'VATARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90261804',
                        ),
                    'enabled' => true,
                ),
            912 =>
                array(
                    'id' => '2913',
                    'bank_id' => '16',
                    'bank_branch_name' => 'AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90262058',
                        ),
                    'enabled' => true,
                ),
            913 =>
                array(
                    'id' => '2914',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KALAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90262445',
                        ),
                    'enabled' => true,
                ),
            914 =>
                array(
                    'id' => '2915',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90262537',
                        ),
                    'enabled' => true,
                ),
            915 =>
                array(
                    'id' => '2916',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90262874',
                        ),
                    'enabled' => true,
                ),
            916 =>
                array(
                    'id' => '2917',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90262982',
                        ),
                    'enabled' => true,
                ),
            917 =>
                array(
                    'id' => '2918',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MIRPUR SECTION-10',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90263136',
                        ),
                    'enabled' => true,
                ),
            918 =>
                array(
                    'id' => '2919',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90263194',
                        ),
                    'enabled' => true,
                ),
            919 =>
                array(
                    'id' => '2920',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90263286',
                        ),
                    'enabled' => true,
                ),
            920 =>
                array(
                    'id' => '2921',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90263581',
                        ),
                    'enabled' => true,
                ),
            921 =>
                array(
                    'id' => '2922',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90263707',
                        ),
                    'enabled' => true,
                ),
            922 =>
                array(
                    'id' => '2923',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90263978',
                        ),
                    'enabled' => true,
                ),
            923 =>
                array(
                    'id' => '2924',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264030',
                        ),
                    'enabled' => true,
                ),
            924 =>
                array(
                    'id' => '2925',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SAVAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264122',
                        ),
                    'enabled' => true,
                ),
            925 =>
                array(
                    'id' => '2926',
                    'bank_id' => '16',
                    'bank_branch_name' => 'TEJGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264485',
                        ),
                    'enabled' => true,
                ),
            926 =>
                array(
                    'id' => '2927',
                    'bank_id' => '16',
                    'bank_branch_name' => 'UTTAR KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264601',
                        ),
                    'enabled' => true,
                ),
            927 =>
                array(
                    'id' => '2928',
                    'bank_id' => '16',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264630',
                        ),
                    'enabled' => true,
                ),
            928 =>
                array(
                    'id' => '2929',
                    'bank_id' => '16',
                    'bank_branch_name' => 'UTTARA SONARGAON JANAPAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264656',
                        ),
                    'enabled' => true,
                ),
            929 =>
                array(
                    'id' => '2930',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ZIRABO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90264814',
                        ),
                    'enabled' => true,
                ),
            930 =>
                array(
                    'id' => '2931',
                    'bank_id' => '16',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90270008',
                        ),
                    'enabled' => true,
                ),
            931 =>
                array(
                    'id' => '2932',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ABDULLAHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90270129',
                        ),
                    'enabled' => true,
                ),
            932 =>
                array(
                    'id' => '2933',
                    'bank_id' => '16',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90270132',
                        ),
                    'enabled' => true,
                ),
            933 =>
                array(
                    'id' => '2934',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90270345',
                        ),
                    'enabled' => true,
                ),
            934 =>
                array(
                    'id' => '2935',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PANTHAPATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90270424',
                        ),
                    'enabled' => true,
                ),
            935 =>
                array(
                    'id' => '2936',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BANDURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90270640',
                        ),
                    'enabled' => true,
                ),
            936 =>
                array(
                    'id' => '2937',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BIJOY NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90271094',
                        ),
                    'enabled' => true,
                ),
            937 =>
                array(
                    'id' => '2938',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90271423',
                        ),
                    'enabled' => true,
                ),
            938 =>
                array(
                    'id' => '2939',
                    'bank_id' => '16',
                    'bank_branch_name' => 'HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90272569',
                        ),
                    'enabled' => true,
                ),
            939 =>
                array(
                    'id' => '2940',
                    'bank_id' => '16',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90272806',
                        ),
                    'enabled' => true,
                ),
            940 =>
                array(
                    'id' => '2941',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90272985',
                        ),
                    'enabled' => true,
                ),
            941 =>
                array(
                    'id' => '2942',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90273289',
                        ),
                    'enabled' => true,
                ),
            942 =>
                array(
                    'id' => '2943',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90273647',
                        ),
                    'enabled' => true,
                ),
            943 =>
                array(
                    'id' => '2944',
                    'bank_id' => '16',
                    'bank_branch_name' => 'LOCAL OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90273889',
                        ),
                    'enabled' => true,
                ),
            944 =>
                array(
                    'id' => '2945',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90274004',
                        ),
                    'enabled' => true,
                ),
            945 =>
                array(
                    'id' => '2946',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MEGHULA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90274059',
                        ),
                    'enabled' => true,
                ),
            946 =>
                array(
                    'id' => '2947',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MOTIJHEEL FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90274309',
                        ),
                    'enabled' => true,
                ),
            947 =>
                array(
                    'id' => '2948',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90274725',
                        ),
                    'enabled' => true,
                ),
            948 =>
                array(
                    'id' => '2949',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90274817',
                        ),
                    'enabled' => true,
                ),
            949 =>
                array(
                    'id' => '2950',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NETAIGONJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90274996',
                        ),
                    'enabled' => true,
                ),
            950 =>
                array(
                    'id' => '2951',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90275740',
                        ),
                    'enabled' => true,
                ),
            951 =>
                array(
                    'id' => '2952',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RUHITPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90275832',
                        ),
                    'enabled' => true,
                ),
            952 =>
                array(
                    'id' => '2953',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90276349',
                        ),
                    'enabled' => true,
                ),
            953 =>
                array(
                    'id' => '2954',
                    'bank_id' => '16',
                    'bank_branch_name' => 'WARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90277001',
                        ),
                    'enabled' => true,
                ),
            954 =>
                array(
                    'id' => '2955',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90280672',
                        ),
                    'enabled' => true,
                ),
            955 =>
                array(
                    'id' => '2956',
                    'bank_id' => '16',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90290525',
                        ),
                    'enabled' => true,
                ),
            956 =>
                array(
                    'id' => '2957',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DAGANBHUIYAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90300378',
                        ),
                    'enabled' => true,
                ),
            957 =>
                array(
                    'id' => '2958',
                    'bank_id' => '16',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90300523',
                        ),
                    'enabled' => true,
                ),
            958 =>
                array(
                    'id' => '2959',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SONAGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90301485',
                        ),
                    'enabled' => true,
                ),
            959 =>
                array(
                    'id' => '2960',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90320587',
                        ),
                    'enabled' => true,
                ),
            960 =>
                array(
                    'id' => '2961',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MIRER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330056',
                        ),
                    'enabled' => true,
                ),
            961 =>
                array(
                    'id' => '2962',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330227',
                        ),
                    'enabled' => true,
                ),
            962 =>
                array(
                    'id' => '2963',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330522',
                        ),
                    'enabled' => true,
                ),
            963 =>
                array(
                    'id' => '2964',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330551',
                        ),
                    'enabled' => true,
                ),
            964 =>
                array(
                    'id' => '2965',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330827',
                        ),
                    'enabled' => true,
                ),
            965 =>
                array(
                    'id' => '2966',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330885',
                        ),
                    'enabled' => true,
                ),
            966 =>
                array(
                    'id' => '2967',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90330948',
                        ),
                    'enabled' => true,
                ),
            967 =>
                array(
                    'id' => '2968',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90331000',
                        ),
                    'enabled' => true,
                ),
            968 =>
                array(
                    'id' => '2969',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SHAFIPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90331468',
                        ),
                    'enabled' => true,
                ),
            969 =>
                array(
                    'id' => '2970',
                    'bank_id' => '16',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90331639',
                        ),
                    'enabled' => true,
                ),
            970 =>
                array(
                    'id' => '2971',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90350373',
                        ),
                    'enabled' => true,
                ),
            971 =>
                array(
                    'id' => '2972',
                    'bank_id' => '16',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90360613',
                        ),
                    'enabled' => true,
                ),
            972 =>
                array(
                    'id' => '2973',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90380406',
                        ),
                    'enabled' => true,
                ),
            973 =>
                array(
                    'id' => '2974',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DIGPITE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90390625',
                        ),
                    'enabled' => true,
                ),
            974 =>
                array(
                    'id' => '2975',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90390854',
                        ),
                    'enabled' => true,
                ),
            975 =>
                array(
                    'id' => '2976',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90410947',
                        ),
                    'enabled' => true,
                ),
            976 =>
                array(
                    'id' => '2977',
                    'bank_id' => '16',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90440641',
                        ),
                    'enabled' => true,
                ),
            977 =>
                array(
                    'id' => '2978',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90471544',
                        ),
                    'enabled' => true,
                ),
            978 =>
                array(
                    'id' => '2979',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BHAIRAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90480193',
                        ),
                    'enabled' => true,
                ),
            979 =>
                array(
                    'id' => '2980',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90480672',
                        ),
                    'enabled' => true,
                ),
            980 =>
                array(
                    'id' => '2981',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KURIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90490404',
                        ),
                    'enabled' => true,
                ),
            981 =>
                array(
                    'id' => '2982',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90500949',
                        ),
                    'enabled' => true,
                ),
            982 =>
                array(
                    'id' => '2983',
                    'bank_id' => '16',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90510739',
                        ),
                    'enabled' => true,
                ),
            983 =>
                array(
                    'id' => '2984',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90540404',
                        ),
                    'enabled' => true,
                ),
            984 =>
                array(
                    'id' => '2985',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90550557',
                        ),
                    'enabled' => true,
                ),
            985 =>
                array(
                    'id' => '2986',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90560613',
                        ),
                    'enabled' => true,
                ),
            986 =>
                array(
                    'id' => '2987',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SINGAIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90560826',
                        ),
                    'enabled' => true,
                ),
            987 =>
                array(
                    'id' => '2988',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BARALEKHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90580101',
                        ),
                    'enabled' => true,
                ),
            988 =>
                array(
                    'id' => '2989',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90581184',
                        ),
                    'enabled' => true,
                ),
            989 =>
                array(
                    'id' => '2990',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90581726',
                        ),
                    'enabled' => true,
                ),
            990 =>
                array(
                    'id' => '2991',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90591037',
                        ),
                    'enabled' => true,
                ),
            991 =>
                array(
                    'id' => '2992',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MASTER BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90610150',
                        ),
                    'enabled' => true,
                ),
            992 =>
                array(
                    'id' => '2993',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90611759',
                        ),
                    'enabled' => true,
                ),
            993 =>
                array(
                    'id' => '2994',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90641187',
                        ),
                    'enabled' => true,
                ),
            994 =>
                array(
                    'id' => '2995',
                    'bank_id' => '16',
                    'bank_branch_name' => 'B.B. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670079',
                        ),
                    'enabled' => true,
                ),
            995 =>
                array(
                    'id' => '2996',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KANCHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670129',
                        ),
                    'enabled' => true,
                ),
            996 =>
                array(
                    'id' => '2997',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BHUIGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670208',
                        ),
                    'enabled' => true,
                ),
            997 =>
                array(
                    'id' => '2998',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670224',
                        ),
                    'enabled' => true,
                ),
            998 =>
                array(
                    'id' => '2999',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NARAYANGANJ BSCIC',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670237',
                        ),
                    'enabled' => true,
                ),
            999 =>
                array(
                    'id' => '3000',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOPALDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670608',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
