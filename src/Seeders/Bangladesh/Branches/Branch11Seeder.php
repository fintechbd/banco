<?php

namespace Fintech\Banco\Seeders\Bangladesh\Branches;

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
        return [
            0 => [
                'id' => '10001',
                'bank_id' => '58',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '300260579',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '10002',
                'bank_id' => '58',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '300261181',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '10003',
                'bank_id' => '58',
                'name' => 'GULSHAN CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '300261815',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '10004',
                'bank_id' => '58',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '300262980',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '10005',
                'bank_id' => '58',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '300263192',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '10006',
                'bank_id' => '58',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '300264638',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '10007',
                'bank_id' => '58',
                'name' => 'PANTHAPATH MOHILA',
                'bank_branch_data' => [
                    'routing_no' => '300270448',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '10008',
                'bank_id' => '58',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '300274244',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '10009',
                'bank_id' => '58',
                'name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '300274752',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '10010',
                'bank_id' => '58',
                'name' => 'NAYA PALTAN',
                'bank_branch_data' => [
                    'routing_no' => '300274873',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '10011',
                'bank_id' => '58',
                'name' => 'PANCHGACHIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '300300084',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '10012',
                'bank_id' => '58',
                'name' => 'SINDURPUR',
                'bank_branch_data' => [
                    'routing_no' => '300300118',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '10013',
                'bank_id' => '58',
                'name' => 'DAKBANGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '300300121',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '10014',
                'bank_id' => '58',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '300300521',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '10015',
                'bank_id' => '58',
                'name' => 'ULUKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '300330159',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '10016',
                'bank_id' => '58',
                'name' => 'GAZIPURA',
                'bank_branch_data' => [
                    'routing_no' => '300330238',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '10017',
                'bank_id' => '58',
                'name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '300331008',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '10018',
                'bank_id' => '58',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '300471542',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '10019',
                'bank_id' => '58',
                'name' => 'KALIA CHAPRA',
                'bank_branch_data' => [
                    'routing_no' => '300480496',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '10020',
                'bank_id' => '58',
                'name' => 'MAOWA',
                'bank_branch_data' => [
                    'routing_no' => '300590915',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '10021',
                'bank_id' => '58',
                'name' => 'BELDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '300670143',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '10022',
                'bank_id' => '58',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '300680670',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '10023',
                'bank_id' => '58',
                'name' => 'NANDIAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '300750171',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '10024',
                'bank_id' => '58',
                'name' => 'KASHIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '300751396',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '10025',
                'bank_id' => '58',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '300913550',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '10026',
                'bank_id' => '59',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '305150134',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '10027',
                'bank_id' => '59',
                'name' => 'SATKANIA',
                'bank_branch_data' => [
                    'routing_no' => '305157061',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '10028',
                'bank_id' => '59',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '305260008',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '10029',
                'bank_id' => '59',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '305260211',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '10030',
                'bank_id' => '59',
                'name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '305410287',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '10031',
                'bank_id' => '59',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '305611752',
                ],
                'enabled' => true,
            ],
        ];
    }
}
