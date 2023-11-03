<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch11Seeder extends Seeder
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
                    'id' => '10001',
                    'bank_id' => '58',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300260579',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '10002',
                    'bank_id' => '58',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300261181',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '10003',
                    'bank_id' => '58',
                    'bank_branch_name' => 'GULSHAN CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300261815',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '10004',
                    'bank_id' => '58',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300262980',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '10005',
                    'bank_id' => '58',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300263192',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '10006',
                    'bank_id' => '58',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300264638',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '10007',
                    'bank_id' => '58',
                    'bank_branch_name' => 'PANTHAPATH MOHILA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300270448',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '10008',
                    'bank_id' => '58',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300274244',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '10009',
                    'bank_id' => '58',
                    'bank_branch_name' => 'NAWABPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300274752',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '10010',
                    'bank_id' => '58',
                    'bank_branch_name' => 'NAYA PALTAN',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300274873',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '10011',
                    'bank_id' => '58',
                    'bank_branch_name' => 'PANCHGACHIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300300084',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '10012',
                    'bank_id' => '58',
                    'bank_branch_name' => 'SINDURPUR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300300118',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '10013',
                    'bank_id' => '58',
                    'bank_branch_name' => 'DAKBANGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300300121',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '10014',
                    'bank_id' => '58',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300300521',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '10015',
                    'bank_id' => '58',
                    'bank_branch_name' => 'ULUKHOLA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300330159',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '10016',
                    'bank_id' => '58',
                    'bank_branch_name' => 'GAZIPURA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300330238',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '10017',
                    'bank_id' => '58',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300331008',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '10018',
                    'bank_id' => '58',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300471542',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '10019',
                    'bank_id' => '58',
                    'bank_branch_name' => 'KALIA CHAPRA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300480496',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '10020',
                    'bank_id' => '58',
                    'bank_branch_name' => 'MAOWA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300590915',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '10021',
                    'bank_id' => '58',
                    'bank_branch_name' => 'BELDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300670143',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '10022',
                    'bank_id' => '58',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300680670',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '10023',
                    'bank_id' => '58',
                    'bank_branch_name' => 'NANDIAPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300750171',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '10024',
                    'bank_id' => '58',
                    'bank_branch_name' => 'KASHIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300751396',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '10025',
                    'bank_id' => '58',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '300913550',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '10026',
                    'bank_id' => '59',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '305150134',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '10027',
                    'bank_id' => '59',
                    'bank_branch_name' => 'SATKANIA',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '305157061',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '10028',
                    'bank_id' => '59',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '305260008',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '10029',
                    'bank_id' => '59',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '305260211',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '10030',
                    'bank_id' => '59',
                    'bank_branch_name' => 'BENAPOLE',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '305410287',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '10031',
                    'bank_id' => '59',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'route_no' => '305611752',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
