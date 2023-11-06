<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch4Seeder extends Seeder
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
                    'id' => '3001',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MADANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90670974',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '3002',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90671186',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '3003',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PAGLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90671302',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '3004',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SHIMRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90671573',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '3005',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90671694',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '3006',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BABURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90680106',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '3007',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90680735',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '3008',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90680885',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '3009',
                    'bank_id' => '16',
                    'bank_branch_name' => 'VELA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90681392',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '3010',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90691090',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '3011',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90700257',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '3012',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90720732',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '3013',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90730793',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '3014',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90750252',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '3015',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90750678',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '3016',
                    'bank_id' => '16',
                    'bank_branch_name' => 'NOAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90751572',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '3017',
                    'bank_id' => '16',
                    'bank_branch_name' => 'KASHINATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90761333',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '3018',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90761788',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '3019',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90770553',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '3020',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90781092',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '3021',
                    'bank_id' => '16',
                    'bank_branch_name' => 'PIROJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90790762',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '3022',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90811933',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '3023',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90820737',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '3024',
                    'bank_id' => '16',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90851456',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '3025',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90871094',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '3026',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90881871',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '3027',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90881905',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '3028',
                    'bank_id' => '16',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90900228',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '3029',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOBINDAGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90900444',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '3030',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90901122',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '3031',
                    'bank_id' => '16',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90910047',
                        ),
                    'enabled' => true,
                ),
            31 =>
                array(
                    'id' => '3032',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90910313',
                        ),
                    'enabled' => true,
                ),
            32 =>
                array(
                    'id' => '3033',
                    'bank_id' => '16',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90910434',
                        ),
                    'enabled' => true,
                ),
            33 =>
                array(
                    'id' => '3034',
                    'bank_id' => '16',
                    'bank_branch_name' => 'DHAKA DAKHIN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90911309',
                        ),
                    'enabled' => true,
                ),
            34 =>
                array(
                    'id' => '3035',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90911541',
                        ),
                    'enabled' => true,
                ),
            35 =>
                array(
                    'id' => '3036',
                    'bank_id' => '16',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90911604',
                        ),
                    'enabled' => true,
                ),
            36 =>
                array(
                    'id' => '3037',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SHAHJALAL UPASHSHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90913257',
                        ),
                    'enabled' => true,
                ),
            37 =>
                array(
                    'id' => '3038',
                    'bank_id' => '16',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90913552',
                        ),
                    'enabled' => true,
                ),
            38 =>
                array(
                    'id' => '3039',
                    'bank_id' => '16',
                    'bank_branch_name' => 'ELENGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90930827',
                        ),
                    'enabled' => true,
                ),
            39 =>
                array(
                    'id' => '3040',
                    'bank_id' => '16',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90931518',
                        ),
                    'enabled' => true,
                ),
            40 =>
                array(
                    'id' => '3041',
                    'bank_id' => '16',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90932296',
                        ),
                    'enabled' => true,
                ),
            41 =>
                array(
                    'id' => '3042',
                    'bank_id' => '16',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '90940970',
                        ),
                    'enabled' => true,
                ),
            42 =>
                array(
                    'id' => '3043',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95060284',
                        ),
                    'enabled' => true,
                ),
            43 =>
                array(
                    'id' => '3044',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95100373',
                        ),
                    'enabled' => true,
                ),
            44 =>
                array(
                    'id' => '3045',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95120432',
                        ),
                    'enabled' => true,
                ),
            45 =>
                array(
                    'id' => '3046',
                    'bank_id' => '17',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95150136',
                        ),
                    'enabled' => true,
                ),
            46 =>
                array(
                    'id' => '3047',
                    'bank_id' => '17',
                    'bank_branch_name' => 'JAMAL KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95150178',
                        ),
                    'enabled' => true,
                ),
            47 =>
                array(
                    'id' => '3048',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BHATIARY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95151214',
                        ),
                    'enabled' => true,
                ),
            48 =>
                array(
                    'id' => '3049',
                    'bank_id' => '17',
                    'bank_branch_name' => 'CHANDGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95151485',
                        ),
                    'enabled' => true,
                ),
            49 =>
                array(
                    'id' => '3050',
                    'bank_id' => '17',
                    'bank_branch_name' => 'C.E.P.Z.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95151577',
                        ),
                    'enabled' => true,
                ),
            50 =>
                array(
                    'id' => '3051',
                    'bank_id' => '17',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95152563',
                        ),
                    'enabled' => true,
                ),
            51 =>
                array(
                    'id' => '3052',
                    'bank_id' => '17',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95153162',
                        ),
                    'enabled' => true,
                ),
            52 =>
                array(
                    'id' => '3053',
                    'bank_id' => '17',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95153225',
                        ),
                    'enabled' => true,
                ),
            53 =>
                array(
                    'id' => '3054',
                    'bank_id' => '17',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95153641',
                        ),
                    'enabled' => true,
                ),
            54 =>
                array(
                    'id' => '3055',
                    'bank_id' => '17',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95154279',
                        ),
                    'enabled' => true,
                ),
            55 =>
                array(
                    'id' => '3056',
                    'bank_id' => '17',
                    'bank_branch_name' => 'KHULSHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95154361',
                        ),
                    'enabled' => true,
                ),
            56 =>
                array(
                    'id' => '3057',
                    'bank_id' => '17',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95154666',
                        ),
                    'enabled' => true,
                ),
            57 =>
                array(
                    'id' => '3058',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MEHADI BAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95154961',
                        ),
                    'enabled' => true,
                ),
            58 =>
                array(
                    'id' => '3059',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95155328',
                        ),
                    'enabled' => true,
                ),
            59 =>
                array(
                    'id' => '3060',
                    'bank_id' => '17',
                    'bank_branch_name' => 'NAZIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95155599',
                        ),
                    'enabled' => true,
                ),
            60 =>
                array(
                    'id' => '3061',
                    'bank_id' => '17',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95155807',
                        ),
                    'enabled' => true,
                ),
            61 =>
                array(
                    'id' => '3062',
                    'bank_id' => '17',
                    'bank_branch_name' => 'PANCHLAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95156048',
                        ),
                    'enabled' => true,
                ),
            62 =>
                array(
                    'id' => '3063',
                    'bank_id' => '17',
                    'bank_branch_name' => 'RAOZAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95156493',
                        ),
                    'enabled' => true,
                ),
            63 =>
                array(
                    'id' => '3064',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SIRAJUDDOWLA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95157368',
                        ),
                    'enabled' => true,
                ),
            64 =>
                array(
                    'id' => '3065',
                    'bank_id' => '17',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95157513',
                        ),
                    'enabled' => true,
                ),
            65 =>
                array(
                    'id' => '3066',
                    'bank_id' => '17',
                    'bank_branch_name' => 'COMILLA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95191166',
                        ),
                    'enabled' => true,
                ),
            66 =>
                array(
                    'id' => '3067',
                    'bank_id' => '17',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95220253',
                        ),
                    'enabled' => true,
                ),
            67 =>
                array(
                    'id' => '3068',
                    'bank_id' => '17',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95260226',
                        ),
                    'enabled' => true,
                ),
            68 =>
                array(
                    'id' => '3069',
                    'bank_id' => '17',
                    'bank_branch_name' => 'JASHIM UDDIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95260271',
                        ),
                    'enabled' => true,
                ),
            69 =>
                array(
                    'id' => '3070',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95260439',
                        ),
                    'enabled' => true,
                ),
            70 =>
                array(
                    'id' => '3071',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95260550',
                        ),
                    'enabled' => true,
                ),
            71 =>
                array(
                    'id' => '3072',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95260721',
                        ),
                    'enabled' => true,
                ),
            72 =>
                array(
                    'id' => '3073',
                    'bank_id' => '17',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95260918',
                        ),
                    'enabled' => true,
                ),
            73 =>
                array(
                    'id' => '3074',
                    'bank_id' => '17',
                    'bank_branch_name' => 'DEPZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95261096',
                        ),
                    'enabled' => true,
                ),
            74 =>
                array(
                    'id' => '3075',
                    'bank_id' => '17',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95261188',
                        ),
                    'enabled' => true,
                ),
            75 =>
                array(
                    'id' => '3076',
                    'bank_id' => '17',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95261720',
                        ),
                    'enabled' => true,
                ),
            76 =>
                array(
                    'id' => '3077',
                    'bank_id' => '17',
                    'bank_branch_name' => 'GULSHAN AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95261733',
                        ),
                    'enabled' => true,
                ),
            77 =>
                array(
                    'id' => '3078',
                    'bank_id' => '17',
                    'bank_branch_name' => 'GULSHAN NORTH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95261904',
                        ),
                    'enabled' => true,
                ),
            78 =>
                array(
                    'id' => '3079',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95262987',
                        ),
                    'enabled' => true,
                ),
            79 =>
                array(
                    'id' => '3080',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MIRPUR DAR-US-SALM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95263007',
                        ),
                    'enabled' => true,
                ),
            80 =>
                array(
                    'id' => '3081',
                    'bank_id' => '17',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95263702',
                        ),
                    'enabled' => true,
                ),
            81 =>
                array(
                    'id' => '3082',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95264035',
                        ),
                    'enabled' => true,
                ),
            82 =>
                array(
                    'id' => '3083',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95264093',
                        ),
                    'enabled' => true,
                ),
            83 =>
                array(
                    'id' => '3084',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95264301',
                        ),
                    'enabled' => true,
                ),
            84 =>
                array(
                    'id' => '3085',
                    'bank_id' => '17',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95264635',
                        ),
                    'enabled' => true,
                ),
            85 =>
                array(
                    'id' => '3086',
                    'bank_id' => '17',
                    'bank_branch_name' => 'UTTARA MODEL TOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95264693',
                        ),
                    'enabled' => true,
                ),
            86 =>
                array(
                    'id' => '3087',
                    'bank_id' => '17',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95270003',
                        ),
                    'enabled' => true,
                ),
            87 =>
                array(
                    'id' => '3088',
                    'bank_id' => '17',
                    'bank_branch_name' => 'AZIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95270379',
                        ),
                    'enabled' => true,
                ),
            88 =>
                array(
                    'id' => '3089',
                    'bank_id' => '17',
                    'bank_branch_name' => 'CHAWK MOGULTULY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95271307',
                        ),
                    'enabled' => true,
                ),
            89 =>
                array(
                    'id' => '3090',
                    'bank_id' => '17',
                    'bank_branch_name' => 'DOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95272056',
                        ),
                    'enabled' => true,
                ),
            90 =>
                array(
                    'id' => '3091',
                    'bank_id' => '17',
                    'bank_branch_name' => 'ENGLISH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95272148',
                        ),
                    'enabled' => true,
                ),
            91 =>
                array(
                    'id' => '3092',
                    'bank_id' => '17',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95273642',
                        ),
                    'enabled' => true,
                ),
            92 =>
                array(
                    'id' => '3093',
                    'bank_id' => '17',
                    'bank_branch_name' => 'KERANIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95273655',
                        ),
                    'enabled' => true,
                ),
            93 =>
                array(
                    'id' => '3094',
                    'bank_id' => '17',
                    'bank_branch_name' => 'KHILGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95273671',
                        ),
                    'enabled' => true,
                ),
            94 =>
                array(
                    'id' => '3095',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95274188',
                        ),
                    'enabled' => true,
                ),
            95 =>
                array(
                    'id' => '3096',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95274241',
                        ),
                    'enabled' => true,
                ),
            96 =>
                array(
                    'id' => '3097',
                    'bank_id' => '17',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95274696',
                        ),
                    'enabled' => true,
                ),
            97 =>
                array(
                    'id' => '3098',
                    'bank_id' => '17',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95275358',
                        ),
                    'enabled' => true,
                ),
            98 =>
                array(
                    'id' => '3099',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95276344',
                        ),
                    'enabled' => true,
                ),
            99 =>
                array(
                    'id' => '3100',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SONARGAON ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95276586',
                        ),
                    'enabled' => true,
                ),
            100 =>
                array(
                    'id' => '3101',
                    'bank_id' => '17',
                    'bank_branch_name' => 'WARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95277006',
                        ),
                    'enabled' => true,
                ),
            101 =>
                array(
                    'id' => '3102',
                    'bank_id' => '17',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95290520',
                        ),
                    'enabled' => true,
                ),
            102 =>
                array(
                    'id' => '3103',
                    'bank_id' => '17',
                    'bank_branch_name' => 'FENI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95300531',
                        ),
                    'enabled' => true,
                ),
            103 =>
                array(
                    'id' => '3104',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95330222',
                        ),
                    'enabled' => true,
                ),
            104 =>
                array(
                    'id' => '3105',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95331005',
                        ),
                    'enabled' => true,
                ),
            105 =>
                array(
                    'id' => '3106',
                    'bank_id' => '17',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95410942',
                        ),
                    'enabled' => true,
                ),
            106 =>
                array(
                    'id' => '3107',
                    'bank_id' => '17',
                    'bank_branch_name' => 'FULBARI GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95470858',
                        ),
                    'enabled' => true,
                ),
            107 =>
                array(
                    'id' => '3108',
                    'bank_id' => '17',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95471549',
                        ),
                    'enabled' => true,
                ),
            108 =>
                array(
                    'id' => '3109',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BHAIRAB SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95480206',
                        ),
                    'enabled' => true,
                ),
            109 =>
                array(
                    'id' => '3110',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95581189',
                        ),
                    'enabled' => true,
                ),
            110 =>
                array(
                    'id' => '3111',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MYMENSINGH SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95611770',
                        ),
                    'enabled' => true,
                ),
            111 =>
                array(
                    'id' => '3112',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95670229',
                        ),
                    'enabled' => true,
                ),
            112 =>
                array(
                    'id' => '3113',
                    'bank_id' => '17',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95671181',
                        ),
                    'enabled' => true,
                ),
            113 =>
                array(
                    'id' => '3114',
                    'bank_id' => '17',
                    'bank_branch_name' => 'NARAYANGONJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95671202',
                        ),
                    'enabled' => true,
                ),
            114 =>
                array(
                    'id' => '3115',
                    'bank_id' => '17',
                    'bank_branch_name' => 'PANCHABATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95671381',
                        ),
                    'enabled' => true,
                ),
            115 =>
                array(
                    'id' => '3116',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95671699',
                        ),
                    'enabled' => true,
                ),
            116 =>
                array(
                    'id' => '3117',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MADHABDI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95680680',
                        ),
                    'enabled' => true,
                ),
            117 =>
                array(
                    'id' => '3118',
                    'bank_id' => '17',
                    'bank_branch_name' => 'MAIJDEE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95750060',
                        ),
                    'enabled' => true,
                ),
            118 =>
                array(
                    'id' => '3119',
                    'bank_id' => '17',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95750673',
                        ),
                    'enabled' => true,
                ),
            119 =>
                array(
                    'id' => '3120',
                    'bank_id' => '17',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95811938',
                        ),
                    'enabled' => true,
                ),
            120 =>
                array(
                    'id' => '3121',
                    'bank_id' => '17',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95851451',
                        ),
                    'enabled' => true,
                ),
            121 =>
                array(
                    'id' => '3122',
                    'bank_id' => '17',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95910439',
                        ),
                    'enabled' => true,
                ),
            122 =>
                array(
                    'id' => '3123',
                    'bank_id' => '17',
                    'bank_branch_name' => 'CHOWHATTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95910855',
                        ),
                    'enabled' => true,
                ),
            123 =>
                array(
                    'id' => '3124',
                    'bank_id' => '17',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95911362',
                        ),
                    'enabled' => true,
                ),
            124 =>
                array(
                    'id' => '3125',
                    'bank_id' => '17',
                    'bank_branch_name' => 'SYLHET UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95913731',
                        ),
                    'enabled' => true,
                ),
            125 =>
                array(
                    'id' => '3126',
                    'bank_id' => '17',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '95932291',
                        ),
                    'enabled' => true,
                ),
            126 =>
                array(
                    'id' => '3127',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100060287',
                        ),
                    'enabled' => true,
                ),
            127 =>
                array(
                    'id' => '3128',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100100376',
                        ),
                    'enabled' => true,
                ),
            128 =>
                array(
                    'id' => '3129',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SARIAKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100102479',
                        ),
                    'enabled' => true,
                ),
            129 =>
                array(
                    'id' => '3130',
                    'bank_id' => '18',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100120101',
                        ),
                    'enabled' => true,
                ),
            130 =>
                array(
                    'id' => '3131',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NARAYANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100131453',
                        ),
                    'enabled' => true,
                ),
            131 =>
                array(
                    'id' => '3132',
                    'bank_id' => '18',
                    'bank_branch_name' => 'THAKUR BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100132344',
                        ),
                    'enabled' => true,
                ),
            132 =>
                array(
                    'id' => '3133',
                    'bank_id' => '18',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100150139',
                        ),
                    'enabled' => true,
                ),
            133 =>
                array(
                    'id' => '3134',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RAOZAN PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100150500',
                        ),
                    'enabled' => true,
                ),
            134 =>
                array(
                    'id' => '3135',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100150797',
                        ),
                    'enabled' => true,
                ),
            135 =>
                array(
                    'id' => '3136',
                    'bank_id' => '18',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100151488',
                        ),
                    'enabled' => true,
                ),
            136 =>
                array(
                    'id' => '3137',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SHAIKH MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100152445',
                        ),
                    'enabled' => true,
                ),
            137 =>
                array(
                    'id' => '3138',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100152566',
                        ),
                    'enabled' => true,
                ),
            138 =>
                array(
                    'id' => '3139',
                    'bank_id' => '18',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100153165',
                        ),
                    'enabled' => true,
                ),
            139 =>
                array(
                    'id' => '3140',
                    'bank_id' => '18',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100153644',
                        ),
                    'enabled' => true,
                ),
            140 =>
                array(
                    'id' => '3141',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100154272',
                        ),
                    'enabled' => true,
                ),
            141 =>
                array(
                    'id' => '3142',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KHULSHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100154364',
                        ),
                    'enabled' => true,
                ),
            142 =>
                array(
                    'id' => '3143',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NAZIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100155592',
                        ),
                    'enabled' => true,
                ),
            143 =>
                array(
                    'id' => '3144',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100155921',
                        ),
                    'enabled' => true,
                ),
            144 =>
                array(
                    'id' => '3145',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PANCHLAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100156041',
                        ),
                    'enabled' => true,
                ),
            145 =>
                array(
                    'id' => '3146',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SANDWIP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100156917',
                        ),
                    'enabled' => true,
                ),
            146 =>
                array(
                    'id' => '3147',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SITAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100157390',
                        ),
                    'enabled' => true,
                ),
            147 =>
                array(
                    'id' => '3148',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BAGMARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100190173',
                        ),
                    'enabled' => true,
                ),
            148 =>
                array(
                    'id' => '3149',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DOLLAI NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100190331',
                        ),
                    'enabled' => true,
                ),
            149 =>
                array(
                    'id' => '3150',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RAJAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100190449',
                        ),
                    'enabled' => true,
                ),
            150 =>
                array(
                    'id' => '3151',
                    'bank_id' => '18',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100191156',
                        ),
                    'enabled' => true,
                ),
            151 =>
                array(
                    'id' => '3152',
                    'bank_id' => '18',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100192113',
                        ),
                    'enabled' => true,
                ),
            152 =>
                array(
                    'id' => '3153',
                    'bank_id' => '18',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100192713',
                        ),
                    'enabled' => true,
                ),
            153 =>
                array(
                    'id' => '3154',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MUDAFARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100193138',
                        ),
                    'enabled' => true,
                ),
            154 =>
                array(
                    'id' => '3155',
                    'bank_id' => '18',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100220256',
                        ),
                    'enabled' => true,
                ),
            155 =>
                array(
                    'id' => '3156',
                    'bank_id' => '18',
                    'bank_branch_name' => 'GARIB-E-NEWAZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100260111',
                        ),
                    'enabled' => true,
                ),
            156 =>
                array(
                    'id' => '3157',
                    'bank_id' => '18',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100260229',
                        ),
                    'enabled' => true,
                ),
            157 =>
                array(
                    'id' => '3158',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100260432',
                        ),
                    'enabled' => true,
                ),
            158 =>
                array(
                    'id' => '3159',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BASHUNDHARA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100260616',
                        ),
                    'enabled' => true,
                ),
            159 =>
                array(
                    'id' => '3160',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MOHILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100260661',
                        ),
                    'enabled' => true,
                ),
            160 =>
                array(
                    'id' => '3161',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100261181',
                        ),
                    'enabled' => true,
                ),
            161 =>
                array(
                    'id' => '3162',
                    'bank_id' => '18',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100261336',
                        ),
                    'enabled' => true,
                ),
            162 =>
                array(
                    'id' => '3163',
                    'bank_id' => '18',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100261723',
                        ),
                    'enabled' => true,
                ),
            163 =>
                array(
                    'id' => '3164',
                    'bank_id' => '18',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100262056',
                        ),
                    'enabled' => true,
                ),
            164 =>
                array(
                    'id' => '3165',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100262535',
                        ),
                    'enabled' => true,
                ),
            165 =>
                array(
                    'id' => '3166',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100262980',
                        ),
                    'enabled' => true,
                ),
            166 =>
                array(
                    'id' => '3167',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NAYARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100263468',
                        ),
                    'enabled' => true,
                ),
            167 =>
                array(
                    'id' => '3168',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100263613',
                        ),
                    'enabled' => true,
                ),
            168 =>
                array(
                    'id' => '3169',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100263976',
                        ),
                    'enabled' => true,
                ),
            169 =>
                array(
                    'id' => '3170',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SATARKUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100264025',
                        ),
                    'enabled' => true,
                ),
            170 =>
                array(
                    'id' => '3171',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100264038',
                        ),
                    'enabled' => true,
                ),
            171 =>
                array(
                    'id' => '3172',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100264096',
                        ),
                    'enabled' => true,
                ),
            172 =>
                array(
                    'id' => '3173',
                    'bank_id' => '18',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100264638',
                        ),
                    'enabled' => true,
                ),
            173 =>
                array(
                    'id' => '3174',
                    'bank_id' => '18',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100270006',
                        ),
                    'enabled' => true,
                ),
            174 =>
                array(
                    'id' => '3175',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RAYER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100270419',
                        ),
                    'enabled' => true,
                ),
            175 =>
                array(
                    'id' => '3176',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100271421',
                        ),
                    'enabled' => true,
                ),
            176 =>
                array(
                    'id' => '3177',
                    'bank_id' => '18',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100272688',
                        ),
                    'enabled' => true,
                ),
            177 =>
                array(
                    'id' => '3178',
                    'bank_id' => '18',
                    'bank_branch_name' => 'HEAD OFFICE CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100272691',
                        ),
                    'enabled' => true,
                ),
            178 =>
                array(
                    'id' => '3179',
                    'bank_id' => '18',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100272804',
                        ),
                    'enabled' => true,
                ),
            179 =>
                array(
                    'id' => '3180',
                    'bank_id' => '18',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100272983',
                        ),
                    'enabled' => true,
                ),
            180 =>
                array(
                    'id' => '3181',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KERANIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100273658',
                        ),
                    'enabled' => true,
                ),
            181 =>
                array(
                    'id' => '3182',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100273940',
                        ),
                    'enabled' => true,
                ),
            182 =>
                array(
                    'id' => '3183',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100274244',
                        ),
                    'enabled' => true,
                ),
            183 =>
                array(
                    'id' => '3184',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100274723',
                        ),
                    'enabled' => true,
                ),
            184 =>
                array(
                    'id' => '3185',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NEW ESKATON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100275027',
                        ),
                    'enabled' => true,
                ),
            185 =>
                array(
                    'id' => '3186',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PALTAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100275201',
                        ),
                    'enabled' => true,
                ),
            186 =>
                array(
                    'id' => '3187',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RAJUK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100275593',
                        ),
                    'enabled' => true,
                ),
            187 =>
                array(
                    'id' => '3188',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100276013',
                        ),
                    'enabled' => true,
                ),
            188 =>
                array(
                    'id' => '3189',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100280670',
                        ),
                    'enabled' => true,
                ),
            189 =>
                array(
                    'id' => '3190',
                    'bank_id' => '18',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100290523',
                        ),
                    'enabled' => true,
                ),
            190 =>
                array(
                    'id' => '3191',
                    'bank_id' => '18',
                    'bank_branch_name' => 'CHHAGALNAIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100300318',
                        ),
                    'enabled' => true,
                ),
            191 =>
                array(
                    'id' => '3192',
                    'bank_id' => '18',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100300521',
                        ),
                    'enabled' => true,
                ),
            192 =>
                array(
                    'id' => '3193',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MOUCHAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100330120',
                        ),
                    'enabled' => true,
                ),
            193 =>
                array(
                    'id' => '3194',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100330225',
                        ),
                    'enabled' => true,
                ),
            194 =>
                array(
                    'id' => '3195',
                    'bank_id' => '18',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100330559',
                        ),
                    'enabled' => true,
                ),
            195 =>
                array(
                    'id' => '3196',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MAONA CHAWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100330975',
                        ),
                    'enabled' => true,
                ),
            196 =>
                array(
                    'id' => '3197',
                    'bank_id' => '18',
                    'bank_branch_name' => 'TUNGI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100351091',
                        ),
                    'enabled' => true,
                ),
            197 =>
                array(
                    'id' => '3198',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100361094',
                        ),
                    'enabled' => true,
                ),
            198 =>
                array(
                    'id' => '3199',
                    'bank_id' => '18',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100410945',
                        ),
                    'enabled' => true,
                ),
            199 =>
                array(
                    'id' => '3200',
                    'bank_id' => '18',
                    'bank_branch_name' => 'JHALOKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100420319',
                        ),
                    'enabled' => true,
                ),
            200 =>
                array(
                    'id' => '3201',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100471542',
                        ),
                    'enabled' => true,
                ),
            201 =>
                array(
                    'id' => '3202',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100480670',
                        ),
                    'enabled' => true,
                ),
            202 =>
                array(
                    'id' => '3203',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MITAMAIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100480946',
                        ),
                    'enabled' => true,
                ),
            203 =>
                array(
                    'id' => '3204',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PAKUNDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100481066',
                        ),
                    'enabled' => true,
                ),
            204 =>
                array(
                    'id' => '3205',
                    'bank_id' => '18',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100500947',
                        ),
                    'enabled' => true,
                ),
            205 =>
                array(
                    'id' => '3206',
                    'bank_id' => '18',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100540765',
                        ),
                    'enabled' => true,
                ),
            206 =>
                array(
                    'id' => '3207',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100550555',
                        ),
                    'enabled' => true,
                ),
            207 =>
                array(
                    'id' => '3208',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BALIRTEK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100560103',
                        ),
                    'enabled' => true,
                ),
            208 =>
                array(
                    'id' => '3209',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100560611',
                        ),
                    'enabled' => true,
                ),
            209 =>
                array(
                    'id' => '3210',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100581182',
                        ),
                    'enabled' => true,
                ),
            210 =>
                array(
                    'id' => '3211',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MUKTARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100591006',
                        ),
                    'enabled' => true,
                ),
            211 =>
                array(
                    'id' => '3212',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100611757',
                        ),
                    'enabled' => true,
                ),
            212 =>
                array(
                    'id' => '3213',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SEEDSTORE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100612093',
                        ),
                    'enabled' => true,
                ),
            213 =>
                array(
                    'id' => '3214',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100641185',
                        ),
                    'enabled' => true,
                ),
            214 =>
                array(
                    'id' => '3215',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100671184',
                        ),
                    'enabled' => true,
                ),
            215 =>
                array(
                    'id' => '3216',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PANCHABATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100671384',
                        ),
                    'enabled' => true,
                ),
            216 =>
                array(
                    'id' => '3217',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SHIMRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100671571',
                        ),
                    'enabled' => true,
                ),
            217 =>
                array(
                    'id' => '3218',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SONARGAON SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100671700',
                        ),
                    'enabled' => true,
                ),
            218 =>
                array(
                    'id' => '3219',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MORJAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100680175',
                        ),
                    'enabled' => true,
                ),
            219 =>
                array(
                    'id' => '3220',
                    'bank_id' => '18',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100680670',
                        ),
                    'enabled' => true,
                ),
            220 =>
                array(
                    'id' => '3221',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DATTAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100690152',
                        ),
                    'enabled' => true,
                ),
            221 =>
                array(
                    'id' => '3222',
                    'bank_id' => '18',
                    'bank_branch_name' => 'LALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100690910',
                        ),
                    'enabled' => true,
                ),
            222 =>
                array(
                    'id' => '3223',
                    'bank_id' => '18',
                    'bank_branch_name' => 'CHAPAINAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100700255',
                        ),
                    'enabled' => true,
                ),
            223 =>
                array(
                    'id' => '3224',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100720730',
                        ),
                    'enabled' => true,
                ),
            224 =>
                array(
                    'id' => '3225',
                    'bank_id' => '18',
                    'bank_branch_name' => 'CHARBATA KHASHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100750184',
                        ),
                    'enabled' => true,
                ),
            225 =>
                array(
                    'id' => '3226',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100750250',
                        ),
                    'enabled' => true,
                ),
            226 =>
                array(
                    'id' => '3227',
                    'bank_id' => '18',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100750676',
                        ),
                    'enabled' => true,
                ),
            227 =>
                array(
                    'id' => '3228',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100752232',
                        ),
                    'enabled' => true,
                ),
            228 =>
                array(
                    'id' => '3229',
                    'bank_id' => '18',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100761786',
                        ),
                    'enabled' => true,
                ),
            229 =>
                array(
                    'id' => '3230',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100811931',
                        ),
                    'enabled' => true,
                ),
            230 =>
                array(
                    'id' => '3231',
                    'bank_id' => '18',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100851454',
                        ),
                    'enabled' => true,
                ),
            231 =>
                array(
                    'id' => '3232',
                    'bank_id' => '18',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100860582',
                        ),
                    'enabled' => true,
                ),
            232 =>
                array(
                    'id' => '3233',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SIRAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100880054',
                        ),
                    'enabled' => true,
                ),
            233 =>
                array(
                    'id' => '3234',
                    'bank_id' => '18',
                    'bank_branch_name' => 'DHOPADIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100910058',
                        ),
                    'enabled' => true,
                ),
            234 =>
                array(
                    'id' => '3235',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100910311',
                        ),
                    'enabled' => true,
                ),
            235 =>
                array(
                    'id' => '3236',
                    'bank_id' => '18',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100910432',
                        ),
                    'enabled' => true,
                ),
            236 =>
                array(
                    'id' => '3237',
                    'bank_id' => '18',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100911365',
                        ),
                    'enabled' => true,
                ),
            237 =>
                array(
                    'id' => '3238',
                    'bank_id' => '18',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100911549',
                        ),
                    'enabled' => true,
                ),
            238 =>
                array(
                    'id' => '3239',
                    'bank_id' => '18',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100911602',
                        ),
                    'enabled' => true,
                ),
            239 =>
                array(
                    'id' => '3240',
                    'bank_id' => '18',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100913550',
                        ),
                    'enabled' => true,
                ),
            240 =>
                array(
                    'id' => '3241',
                    'bank_id' => '18',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '100932294',
                        ),
                    'enabled' => true,
                ),
            241 =>
                array(
                    'id' => '3242',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105010074',
                        ),
                    'enabled' => true,
                ),
            242 =>
                array(
                    'id' => '3243',
                    'bank_id' => '19',
                    'bank_branch_name' => 'FAKIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105010461',
                        ),
                    'enabled' => true,
                ),
            243 =>
                array(
                    'id' => '3244',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MORELGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105011031',
                        ),
                    'enabled' => true,
                ),
            244 =>
                array(
                    'id' => '3245',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BARGUNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105040136',
                        ),
                    'enabled' => true,
                ),
            245 =>
                array(
                    'id' => '3246',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105060282',
                        ),
                    'enabled' => true,
                ),
            246 =>
                array(
                    'id' => '3247',
                    'bank_id' => '19',
                    'bank_branch_name' => 'WAZIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105062293',
                        ),
                    'enabled' => true,
                ),
            247 =>
                array(
                    'id' => '3248',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105090102',
                        ),
                    'enabled' => true,
                ),
            248 =>
                array(
                    'id' => '3249',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105100371',
                        ),
                    'enabled' => true,
                ),
            249 =>
                array(
                    'id' => '3250',
                    'bank_id' => '19',
                    'bank_branch_name' => 'TANTAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105120122',
                        ),
                    'enabled' => true,
                ),
            250 =>
                array(
                    'id' => '3251',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105120430',
                        ),
                    'enabled' => true,
                ),
            251 =>
                array(
                    'id' => '3252',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105130312',
                        ),
                    'enabled' => true,
                ),
            252 =>
                array(
                    'id' => '3253',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PAHARTALI CHOUMOHONI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150068',
                        ),
                    'enabled' => true,
                ),
            253 =>
                array(
                    'id' => '3254',
                    'bank_id' => '19',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150134',
                        ),
                    'enabled' => true,
                ),
            254 =>
                array(
                    'id' => '3255',
                    'bank_id' => '19',
                    'bank_branch_name' => 'TOKIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150350',
                        ),
                    'enabled' => true,
                ),
            255 =>
                array(
                    'id' => '3256',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KORERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150442',
                        ),
                    'enabled' => true,
                ),
            256 =>
                array(
                    'id' => '3257',
                    'bank_id' => '19',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150468',
                        ),
                    'enabled' => true,
                ),
            257 =>
                array(
                    'id' => '3258',
                    'bank_id' => '19',
                    'bank_branch_name' => 'FATEYABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150484',
                        ),
                    'enabled' => true,
                ),
            258 =>
                array(
                    'id' => '3259',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RAHATTARPUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150639',
                        ),
                    'enabled' => true,
                ),
            259 =>
                array(
                    'id' => '3260',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150792',
                        ),
                    'enabled' => true,
                ),
            260 =>
                array(
                    'id' => '3261',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BANDARTILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150947',
                        ),
                    'enabled' => true,
                ),
            261 =>
                array(
                    'id' => '3262',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BASHKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105150976',
                        ),
                    'enabled' => true,
                ),
            262 =>
                array(
                    'id' => '3263',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MOHRA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105151238',
                        ),
                    'enabled' => true,
                ),
            263 =>
                array(
                    'id' => '3264',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PRABARTAK MORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105151391',
                        ),
                    'enabled' => true,
                ),
            264 =>
                array(
                    'id' => '3265',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHANDANAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105151812',
                        ),
                    'enabled' => true,
                ),
            265 =>
                array(
                    'id' => '3266',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHAWK BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105151959',
                        ),
                    'enabled' => true,
                ),
            266 =>
                array(
                    'id' => '3267',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHOCORIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105152161',
                        ),
                    'enabled' => true,
                ),
            267 =>
                array(
                    'id' => '3268',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DOVASHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105152574',
                        ),
                    'enabled' => true,
                ),
            268 =>
                array(
                    'id' => '3269',
                    'bank_id' => '19',
                    'bank_branch_name' => 'EIDGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105152637',
                        ),
                    'enabled' => true,
                ),
            269 =>
                array(
                    'id' => '3270',
                    'bank_id' => '19',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105153160',
                        ),
                    'enabled' => true,
                ),
            270 =>
                array(
                    'id' => '3271',
                    'bank_id' => '19',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105153223',
                        ),
                    'enabled' => true,
                ),
            271 =>
                array(
                    'id' => '3272',
                    'bank_id' => '19',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105153649',
                        ),
                    'enabled' => true,
                ),
            272 =>
                array(
                    'id' => '3273',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105153731',
                        ),
                    'enabled' => true,
                ),
            273 =>
                array(
                    'id' => '3274',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KATIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105154127',
                        ),
                    'enabled' => true,
                ),
            274 =>
                array(
                    'id' => '3275',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KERANIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105154185',
                        ),
                    'enabled' => true,
                ),
            275 =>
                array(
                    'id' => '3276',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105154277',
                        ),
                    'enabled' => true,
                ),
            276 =>
                array(
                    'id' => '3277',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KUMIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105154451',
                        ),
                    'enabled' => true,
                ),
            277 =>
                array(
                    'id' => '3278',
                    'bank_id' => '19',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105154664',
                        ),
                    'enabled' => true,
                ),
            278 =>
                array(
                    'id' => '3279',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MIRZAKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105155089',
                        ),
                    'enabled' => true,
                ),
            279 =>
                array(
                    'id' => '3280',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MOHILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105155247',
                        ),
                    'enabled' => true,
                ),
            280 =>
                array(
                    'id' => '3281',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NAZIR HAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105155605',
                        ),
                    'enabled' => true,
                ),
            281 =>
                array(
                    'id' => '3282',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NAZU MEA HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105155621',
                        ),
                    'enabled' => true,
                ),
            282 =>
                array(
                    'id' => '3283',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105155926',
                        ),
                    'enabled' => true,
                ),
            283 =>
                array(
                    'id' => '3284',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PANCHLAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105156046',
                        ),
                    'enabled' => true,
                ),
            284 =>
                array(
                    'id' => '3285',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105156138',
                        ),
                    'enabled' => true,
                ),
            285 =>
                array(
                    'id' => '3286',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105156167',
                        ),
                    'enabled' => true,
                ),
            286 =>
                array(
                    'id' => '3287',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PATIYA MOHILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105156183',
                        ),
                    'enabled' => true,
                ),
            287 =>
                array(
                    'id' => '3288',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RANIRHAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105156475',
                        ),
                    'enabled' => true,
                ),
            288 =>
                array(
                    'id' => '3289',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105156738',
                        ),
                    'enabled' => true,
                ),
            289 =>
                array(
                    'id' => '3290',
                    'bank_id' => '19',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105157511',
                        ),
                    'enabled' => true,
                ),
            290 =>
                array(
                    'id' => '3291',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105180191',
                        ),
                    'enabled' => true,
                ),
            291 =>
                array(
                    'id' => '3292',
                    'bank_id' => '19',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105191151',
                        ),
                    'enabled' => true,
                ),
            292 =>
                array(
                    'id' => '3293',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DHORKORA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105191793',
                        ),
                    'enabled' => true,
                ),
            293 =>
                array(
                    'id' => '3294',
                    'bank_id' => '19',
                    'bank_branch_name' => 'HOMNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105192239',
                        ),
                    'enabled' => true,
                ),
            294 =>
                array(
                    'id' => '3295',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MADHAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105192800',
                        ),
                    'enabled' => true,
                ),
            295 =>
                array(
                    'id' => '3296',
                    'bank_id' => '19',
                    'bank_branch_name' => 'COURT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105220222',
                        ),
                    'enabled' => true,
                ),
            296 =>
                array(
                    'id' => '3297',
                    'bank_id' => '19',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105220251',
                        ),
                    'enabled' => true,
                ),
            297 =>
                array(
                    'id' => '3298',
                    'bank_id' => '19',
                    'bank_branch_name' => 'HANILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105220493',
                        ),
                    'enabled' => true,
                ),
            298 =>
                array(
                    'id' => '3299',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PEKUYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105220822',
                        ),
                    'enabled' => true,
                ),
            299 =>
                array(
                    'id' => '3300',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RAMU',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105220851',
                        ),
                    'enabled' => true,
                ),
            300 =>
                array(
                    'id' => '3301',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105260437',
                        ),
                    'enabled' => true,
                ),
            301 =>
                array(
                    'id' => '3302',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RANABHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105260482',
                        ),
                    'enabled' => true,
                ),
            302 =>
                array(
                    'id' => '3303',
                    'bank_id' => '19',
                    'bank_branch_name' => 'JOYNAL MARKET DOKKHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105260532',
                        ),
                    'enabled' => true,
                ),
            303 =>
                array(
                    'id' => '3304',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105260558',
                        ),
                    'enabled' => true,
                ),
            304 =>
                array(
                    'id' => '3305',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105260729',
                        ),
                    'enabled' => true,
                ),
            305 =>
                array(
                    'id' => '3306',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CITY UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105260808',
                        ),
                    'enabled' => true,
                ),
            306 =>
                array(
                    'id' => '3307',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105261186',
                        ),
                    'enabled' => true,
                ),
            307 =>
                array(
                    'id' => '3308',
                    'bank_id' => '19',
                    'bank_branch_name' => 'AZAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105261252',
                        ),
                    'enabled' => true,
                ),
            308 =>
                array(
                    'id' => '3309',
                    'bank_id' => '19',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105261728',
                        ),
                    'enabled' => true,
                ),
            309 =>
                array(
                    'id' => '3310',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105262530',
                        ),
                    'enabled' => true,
                ),
            310 =>
                array(
                    'id' => '3311',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KURIL BISHWA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105262635',
                        ),
                    'enabled' => true,
                ),
            311 =>
                array(
                    'id' => '3312',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105262985',
                        ),
                    'enabled' => true,
                ),
            312 =>
                array(
                    'id' => '3313',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105263197',
                        ),
                    'enabled' => true,
                ),
            313 =>
                array(
                    'id' => '3314',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105263289',
                        ),
                    'enabled' => true,
                ),
            314 =>
                array(
                    'id' => '3315',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RAYER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105263942',
                        ),
                    'enabled' => true,
                ),
            315 =>
                array(
                    'id' => '3316',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105263971',
                        ),
                    'enabled' => true,
                ),
            316 =>
                array(
                    'id' => '3317',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RUPNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105264017',
                        ),
                    'enabled' => true,
                ),
            317 =>
                array(
                    'id' => '3318',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105264091',
                        ),
                    'enabled' => true,
                ),
            318 =>
                array(
                    'id' => '3319',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SENANIBASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105264196',
                        ),
                    'enabled' => true,
                ),
            319 =>
                array(
                    'id' => '3320',
                    'bank_id' => '19',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105264633',
                        ),
                    'enabled' => true,
                ),
            320 =>
                array(
                    'id' => '3321',
                    'bank_id' => '19',
                    'bank_branch_name' => 'ZIRABO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105264817',
                        ),
                    'enabled' => true,
                ),
            321 =>
                array(
                    'id' => '3322',
                    'bank_id' => '19',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105270001',
                        ),
                    'enabled' => true,
                ),
            322 =>
                array(
                    'id' => '3323',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105270098',
                        ),
                    'enabled' => true,
                ),
            323 =>
                array(
                    'id' => '3324',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105270885',
                        ),
                    'enabled' => true,
                ),
            324 =>
                array(
                    'id' => '3325',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BISWA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105271121',
                        ),
                    'enabled' => true,
                ),
            325 =>
                array(
                    'id' => '3326',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105271426',
                        ),
                    'enabled' => true,
                ),
            326 =>
                array(
                    'id' => '3327',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105271905',
                        ),
                    'enabled' => true,
                ),
            327 =>
                array(
                    'id' => '3328',
                    'bank_id' => '19',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105272988',
                        ),
                    'enabled' => true,
                ),
            328 =>
                array(
                    'id' => '3329',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KAKRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105273374',
                        ),
                    'enabled' => true,
                ),
            329 =>
                array(
                    'id' => '3330',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KONAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105273745',
                        ),
                    'enabled' => true,
                ),
            330 =>
                array(
                    'id' => '3331',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105273945',
                        ),
                    'enabled' => true,
                ),
            331 =>
                array(
                    'id' => '3332',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105274249',
                        ),
                    'enabled' => true,
                ),
            332 =>
                array(
                    'id' => '3333',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MUKSUDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105274481',
                        ),
                    'enabled' => true,
                ),
            333 =>
                array(
                    'id' => '3334',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105274694',
                        ),
                    'enabled' => true,
                ),
            334 =>
                array(
                    'id' => '3335',
                    'bank_id' => '19',
                    'bank_branch_name' => 'POSTAGOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105275327',
                        ),
                    'enabled' => true,
                ),
            335 =>
                array(
                    'id' => '3336',
                    'bank_id' => '19',
                    'bank_branch_name' => 'TOPKHANA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105276739',
                        ),
                    'enabled' => true,
                ),
            336 =>
                array(
                    'id' => '3337',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105280675',
                        ),
                    'enabled' => true,
                ),
            337 =>
                array(
                    'id' => '3338',
                    'bank_id' => '19',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105290528',
                        ),
                    'enabled' => true,
                ),
            338 =>
                array(
                    'id' => '3339',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BAKTER MUNSHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105300092',
                        ),
                    'enabled' => true,
                ),
            339 =>
                array(
                    'id' => '3340',
                    'bank_id' => '19',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105300526',
                        ),
                    'enabled' => true,
                ),
            340 =>
                array(
                    'id' => '3341',
                    'bank_id' => '19',
                    'bank_branch_name' => 'FULGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105300618',
                        ),
                    'enabled' => true,
                ),
            341 =>
                array(
                    'id' => '3342',
                    'bank_id' => '19',
                    'bank_branch_name' => 'LASKARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105300971',
                        ),
                    'enabled' => true,
                ),
            342 =>
                array(
                    'id' => '3343',
                    'bank_id' => '19',
                    'bank_branch_name' => 'COLLEGE GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105330417',
                        ),
                    'enabled' => true,
                ),
            343 =>
                array(
                    'id' => '3344',
                    'bank_id' => '19',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105330554',
                        ),
                    'enabled' => true,
                ),
            344 =>
                array(
                    'id' => '3345',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SHAFIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105331429',
                        ),
                    'enabled' => true,
                ),
            345 =>
                array(
                    'id' => '3346',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SREEPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105331487',
                        ),
                    'enabled' => true,
                ),
            346 =>
                array(
                    'id' => '3347',
                    'bank_id' => '19',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105350376',
                        ),
                    'enabled' => true,
                ),
            347 =>
                array(
                    'id' => '3348',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BAGACHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105410108',
                        ),
                    'enabled' => true,
                ),
            348 =>
                array(
                    'id' => '3349',
                    'bank_id' => '19',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105410940',
                        ),
                    'enabled' => true,
                ),
            349 =>
                array(
                    'id' => '3350',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KESHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105411215',
                        ),
                    'enabled' => true,
                ),
            350 =>
                array(
                    'id' => '3351',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KHAJURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105411257',
                        ),
                    'enabled' => true,
                ),
            351 =>
                array(
                    'id' => '3352',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NAVARAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105411602',
                        ),
                    'enabled' => true,
                ),
            352 =>
                array(
                    'id' => '3353',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BARO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105440073',
                        ),
                    'enabled' => true,
                ),
            353 =>
                array(
                    'id' => '3354',
                    'bank_id' => '19',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105440644',
                        ),
                    'enabled' => true,
                ),
            354 =>
                array(
                    'id' => '3355',
                    'bank_id' => '19',
                    'bank_branch_name' => 'FULTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105470872',
                        ),
                    'enabled' => true,
                ),
            355 =>
                array(
                    'id' => '3356',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KAPILMUNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105471271',
                        ),
                    'enabled' => true,
                ),
            356 =>
                array(
                    'id' => '3357',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105471547',
                        ),
                    'enabled' => true,
                ),
            357 =>
                array(
                    'id' => '3358',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105500942',
                        ),
                    'enabled' => true,
                ),
            358 =>
                array(
                    'id' => '3359',
                    'bank_id' => '19',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105510732',
                        ),
                    'enabled' => true,
                ),
            359 =>
                array(
                    'id' => '3360',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105511036',
                        ),
                    'enabled' => true,
                ),
            360 =>
                array(
                    'id' => '3361',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PANCHOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105540052',
                        ),
                    'enabled' => true,
                ),
            361 =>
                array(
                    'id' => '3362',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105550550',
                        ),
                    'enabled' => true,
                ),
            362 =>
                array(
                    'id' => '3363',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105560616',
                        ),
                    'enabled' => true,
                ),
            363 =>
                array(
                    'id' => '3364',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MEHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105570372',
                        ),
                    'enabled' => true,
                ),
            364 =>
                array(
                    'id' => '3365',
                    'bank_id' => '19',
                    'bank_branch_name' => 'JURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105580670',
                        ),
                    'enabled' => true,
                ),
            365 =>
                array(
                    'id' => '3366',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105581187',
                        ),
                    'enabled' => true,
                ),
            366 =>
                array(
                    'id' => '3367',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BALIGAON-TONGIBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105591548',
                        ),
                    'enabled' => true,
                ),
            367 =>
                array(
                    'id' => '3368',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105610311',
                        ),
                    'enabled' => true,
                ),
            368 =>
                array(
                    'id' => '3369',
                    'bank_id' => '19',
                    'bank_branch_name' => 'JAMIDARIA MASTER BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105611460',
                        ),
                    'enabled' => true,
                ),
            369 =>
                array(
                    'id' => '3370',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105611752',
                        ),
                    'enabled' => true,
                ),
            370 =>
                array(
                    'id' => '3371',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105641180',
                        ),
                    'enabled' => true,
                ),
            371 =>
                array(
                    'id' => '3372',
                    'bank_id' => '19',
                    'bank_branch_name' => 'LOHAGARA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105650476',
                        ),
                    'enabled' => true,
                ),
            372 =>
                array(
                    'id' => '3373',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105650647',
                        ),
                    'enabled' => true,
                ),
            373 =>
                array(
                    'id' => '3374',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105671189',
                        ),
                    'enabled' => true,
                ),
            374 =>
                array(
                    'id' => '3375',
                    'bank_id' => '19',
                    'bank_branch_name' => 'MADHABDI, SME/KRISHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105680688',
                        ),
                    'enabled' => true,
                ),
            375 =>
                array(
                    'id' => '3376',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DHUPIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105690081',
                        ),
                    'enabled' => true,
                ),
            376 =>
                array(
                    'id' => '3377',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105691093',
                        ),
                    'enabled' => true,
                ),
            377 =>
                array(
                    'id' => '3378',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KANSAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105700526',
                        ),
                    'enabled' => true,
                ),
            378 =>
                array(
                    'id' => '3379',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105730796',
                        ),
                    'enabled' => true,
                ),
            379 =>
                array(
                    'id' => '3380',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHOWDHURYHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105750705',
                        ),
                    'enabled' => true,
                ),
            380 =>
                array(
                    'id' => '3381',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105761781',
                        ),
                    'enabled' => true,
                ),
            381 =>
                array(
                    'id' => '3382',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BAUPHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105780191',
                        ),
                    'enabled' => true,
                ),
            382 =>
                array(
                    'id' => '3383',
                    'bank_id' => '19',
                    'bank_branch_name' => 'GALACHIPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105780496',
                        ),
                    'enabled' => true,
                ),
            383 =>
                array(
                    'id' => '3384',
                    'bank_id' => '19',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105781095',
                        ),
                    'enabled' => true,
                ),
            384 =>
                array(
                    'id' => '3385',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SWARUPKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105790978',
                        ),
                    'enabled' => true,
                ),
            385 =>
                array(
                    'id' => '3386',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105811936',
                        ),
                    'enabled' => true,
                ),
            386 =>
                array(
                    'id' => '3387',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105840523',
                        ),
                    'enabled' => true,
                ),
            387 =>
                array(
                    'id' => '3388',
                    'bank_id' => '19',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105851459',
                        ),
                    'enabled' => true,
                ),
            388 =>
                array(
                    'id' => '3389',
                    'bank_id' => '19',
                    'bank_branch_name' => 'DAMUDYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105860190',
                        ),
                    'enabled' => true,
                ),
            389 =>
                array(
                    'id' => '3390',
                    'bank_id' => '19',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105860587',
                        ),
                    'enabled' => true,
                ),
            390 =>
                array(
                    'id' => '3391',
                    'bank_id' => '19',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105870614',
                        ),
                    'enabled' => true,
                ),
            391 =>
                array(
                    'id' => '3392',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105871097',
                        ),
                    'enabled' => true,
                ),
            392 =>
                array(
                    'id' => '3393',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105871213',
                        ),
                    'enabled' => true,
                ),
            393 =>
                array(
                    'id' => '3394',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SIRAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105880059',
                        ),
                    'enabled' => true,
                ),
            394 =>
                array(
                    'id' => '3395',
                    'bank_id' => '19',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105900221',
                        ),
                    'enabled' => true,
                ),
            395 =>
                array(
                    'id' => '3396',
                    'bank_id' => '19',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105900434',
                        ),
                    'enabled' => true,
                ),
            396 =>
                array(
                    'id' => '3397',
                    'bank_id' => '19',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105910079',
                        ),
                    'enabled' => true,
                ),
            397 =>
                array(
                    'id' => '3398',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105910316',
                        ),
                    'enabled' => true,
                ),
            398 =>
                array(
                    'id' => '3399',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105910437',
                        ),
                    'enabled' => true,
                ),
            399 =>
                array(
                    'id' => '3400',
                    'bank_id' => '19',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105913555',
                        ),
                    'enabled' => true,
                ),
            400 =>
                array(
                    'id' => '3401',
                    'bank_id' => '19',
                    'bank_branch_name' => 'TALTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105913850',
                        ),
                    'enabled' => true,
                ),
            401 =>
                array(
                    'id' => '3402',
                    'bank_id' => '19',
                    'bank_branch_name' => 'BHUANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105930462',
                        ),
                    'enabled' => true,
                ),
            402 =>
                array(
                    'id' => '3403',
                    'bank_id' => '19',
                    'bank_branch_name' => 'HAMIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105931090',
                        ),
                    'enabled' => true,
                ),
            403 =>
                array(
                    'id' => '3404',
                    'bank_id' => '19',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '105932299',
                        ),
                    'enabled' => true,
                ),
            404 =>
                array(
                    'id' => '3405',
                    'bank_id' => '20',
                    'bank_branch_name' => 'LALDIGHI EAST',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110154541',
                        ),
                    'enabled' => true,
                ),
            405 =>
                array(
                    'id' => '3406',
                    'bank_id' => '20',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110261726',
                        ),
                    'enabled' => true,
                ),
            406 =>
                array(
                    'id' => '3407',
                    'bank_id' => '20',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110262538',
                        ),
                    'enabled' => true,
                ),
            407 =>
                array(
                    'id' => '3408',
                    'bank_id' => '20',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110264631',
                        ),
                    'enabled' => true,
                ),
            408 =>
                array(
                    'id' => '3409',
                    'bank_id' => '20',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110270009',
                        ),
                    'enabled' => true,
                ),
            409 =>
                array(
                    'id' => '3410',
                    'bank_id' => '20',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110274247',
                        ),
                    'enabled' => true,
                ),
            410 =>
                array(
                    'id' => '3411',
                    'bank_id' => '20',
                    'bank_branch_name' => 'NAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110274818',
                        ),
                    'enabled' => true,
                ),
            411 =>
                array(
                    'id' => '3412',
                    'bank_id' => '20',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '110913553',
                        ),
                    'enabled' => true,
                ),
            412 =>
                array(
                    'id' => '3413',
                    'bank_id' => '21',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115150137',
                        ),
                    'enabled' => true,
                ),
            413 =>
                array(
                    'id' => '3414',
                    'bank_id' => '21',
                    'bank_branch_name' => 'CHITTAGONG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115151965',
                        ),
                    'enabled' => true,
                ),
            414 =>
                array(
                    'id' => '3415',
                    'bank_id' => '21',
                    'bank_branch_name' => 'GEC',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115152951',
                        ),
                    'enabled' => true,
                ),
            415 =>
                array(
                    'id' => '3416',
                    'bank_id' => '21',
                    'bank_branch_name' => 'AMANAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115260106',
                        ),
                    'enabled' => true,
                ),
            416 =>
                array(
                    'id' => '3417',
                    'bank_id' => '21',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115260430',
                        ),
                    'enabled' => true,
                ),
            417 =>
                array(
                    'id' => '3418',
                    'bank_id' => '21',
                    'bank_branch_name' => 'BARIDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115260522',
                        ),
                    'enabled' => true,
                ),
            418 =>
                array(
                    'id' => '3419',
                    'bank_id' => '21',
                    'bank_branch_name' => 'DHAKA OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115261121',
                        ),
                    'enabled' => true,
                ),
            419 =>
                array(
                    'id' => '3420',
                    'bank_id' => '21',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115261189',
                        ),
                    'enabled' => true,
                ),
            420 =>
                array(
                    'id' => '3421',
                    'bank_id' => '21',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115261721',
                        ),
                    'enabled' => true,
                ),
            421 =>
                array(
                    'id' => '3422',
                    'bank_id' => '21',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115262988',
                        ),
                    'enabled' => true,
                ),
            422 =>
                array(
                    'id' => '3423',
                    'bank_id' => '21',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115264636',
                        ),
                    'enabled' => true,
                ),
            423 =>
                array(
                    'id' => '3424',
                    'bank_id' => '21',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115270004',
                        ),
                    'enabled' => true,
                ),
            424 =>
                array(
                    'id' => '3425',
                    'bank_id' => '21',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115271274',
                        ),
                    'enabled' => true,
                ),
            425 =>
                array(
                    'id' => '3426',
                    'bank_id' => '21',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115274242',
                        ),
                    'enabled' => true,
                ),
            426 =>
                array(
                    'id' => '3427',
                    'bank_id' => '21',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115611755',
                        ),
                    'enabled' => true,
                ),
            427 =>
                array(
                    'id' => '3428',
                    'bank_id' => '21',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115671887',
                        ),
                    'enabled' => true,
                ),
            428 =>
                array(
                    'id' => '3429',
                    'bank_id' => '21',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '115913558',
                        ),
                    'enabled' => true,
                ),
            429 =>
                array(
                    'id' => '3430',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120010075',
                        ),
                    'enabled' => true,
                ),
            430 =>
                array(
                    'id' => '3431',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120060283',
                        ),
                    'enabled' => true,
                ),
            431 =>
                array(
                    'id' => '3432',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120090103',
                        ),
                    'enabled' => true,
                ),
            432 =>
                array(
                    'id' => '3433',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120100372',
                        ),
                    'enabled' => true,
                ),
            433 =>
                array(
                    'id' => '3434',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120120107',
                        ),
                    'enabled' => true,
                ),
            434 =>
                array(
                    'id' => '3435',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120120431',
                        ),
                    'enabled' => true,
                ),
            435 =>
                array(
                    'id' => '3436',
                    'bank_id' => '22',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120150135',
                        ),
                    'enabled' => true,
                ),
            436 =>
                array(
                    'id' => '3437',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ALANKAR MOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120150148',
                        ),
                    'enabled' => true,
                ),
            437 =>
                array(
                    'id' => '3438',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BONDORTILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120150364',
                        ),
                    'enabled' => true,
                ),
            438 =>
                array(
                    'id' => '3439',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ANOWARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120150522',
                        ),
                    'enabled' => true,
                ),
            439 =>
                array(
                    'id' => '3440',
                    'bank_id' => '22',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120151484',
                        ),
                    'enabled' => true,
                ),
            440 =>
                array(
                    'id' => '3441',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120151934',
                        ),
                    'enabled' => true,
                ),
            441 =>
                array(
                    'id' => '3442',
                    'bank_id' => '22',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120152746',
                        ),
                    'enabled' => true,
                ),
            442 =>
                array(
                    'id' => '3443',
                    'bank_id' => '22',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120153224',
                        ),
                    'enabled' => true,
                ),
            443 =>
                array(
                    'id' => '3444',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120154278',
                        ),
                    'enabled' => true,
                ),
            444 =>
                array(
                    'id' => '3445',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MADAM BIBIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120154694',
                        ),
                    'enabled' => true,
                ),
            445 =>
                array(
                    'id' => '3446',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PANCHLAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120156047',
                        ),
                    'enabled' => true,
                ),
            446 =>
                array(
                    'id' => '3447',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SHAH AMANAT MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120157154',
                        ),
                    'enabled' => true,
                ),
            447 =>
                array(
                    'id' => '3448',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SHEIKH MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120157275',
                        ),
                    'enabled' => true,
                ),
            448 =>
                array(
                    'id' => '3449',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SK. MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120157420',
                        ),
                    'enabled' => true,
                ),
            449 =>
                array(
                    'id' => '3450',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TERRI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120157633',
                        ),
                    'enabled' => true,
                ),
            450 =>
                array(
                    'id' => '3451',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHANDINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120190887',
                        ),
                    'enabled' => true,
                ),
            451 =>
                array(
                    'id' => '3452',
                    'bank_id' => '22',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120191152',
                        ),
                    'enabled' => true,
                ),
            452 =>
                array(
                    'id' => '3453',
                    'bank_id' => '22',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120191428',
                        ),
                    'enabled' => true,
                ),
            453 =>
                array(
                    'id' => '3454',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GOURIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120192148',
                        ),
                    'enabled' => true,
                ),
            454 =>
                array(
                    'id' => '3455',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MIAH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120194120',
                        ),
                    'enabled' => true,
                ),
            455 =>
                array(
                    'id' => '3456',
                    'bank_id' => '22',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120220252',
                        ),
                    'enabled' => true,
                ),
            456 =>
                array(
                    'id' => '3457',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GABTALI BAGBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120260120',
                        ),
                    'enabled' => true,
                ),
            457 =>
                array(
                    'id' => '3458',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120260225',
                        ),
                    'enabled' => true,
                ),
            458 =>
                array(
                    'id' => '3459',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120260438',
                        ),
                    'enabled' => true,
                ),
            459 =>
                array(
                    'id' => '3460',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120260559',
                        ),
                    'enabled' => true,
                ),
            460 =>
                array(
                    'id' => '3461',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DARUS-SALAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120260946',
                        ),
                    'enabled' => true,
                ),
            461 =>
                array(
                    'id' => '3462',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DHAMRAI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120261158',
                        ),
                    'enabled' => true,
                ),
            462 =>
                array(
                    'id' => '3463',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120261187',
                        ),
                    'enabled' => true,
                ),
            463 =>
                array(
                    'id' => '3464',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120261332',
                        ),
                    'enabled' => true,
                ),
            464 =>
                array(
                    'id' => '3465',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GARIB-E-NEWAZ AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120261640',
                        ),
                    'enabled' => true,
                ),
            465 =>
                array(
                    'id' => '3466',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120261729',
                        ),
                    'enabled' => true,
                ),
            466 =>
                array(
                    'id' => '3467',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GULSHAN TEJGAON LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120261929',
                        ),
                    'enabled' => true,
                ),
            467 =>
                array(
                    'id' => '3468',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120262531',
                        ),
                    'enabled' => true,
                ),
            468 =>
                array(
                    'id' => '3469',
                    'bank_id' => '22',
                    'bank_branch_name' => 'LALMATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120262836',
                        ),
                    'enabled' => true,
                ),
            469 =>
                array(
                    'id' => '3470',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120262986',
                        ),
                    'enabled' => true,
                ),
            470 =>
                array(
                    'id' => '3471',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120263198',
                        ),
                    'enabled' => true,
                ),
            471 =>
                array(
                    'id' => '3472',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120263280',
                        ),
                    'enabled' => true,
                ),
            472 =>
                array(
                    'id' => '3473',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120263585',
                        ),
                    'enabled' => true,
                ),
            473 =>
                array(
                    'id' => '3474',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120263701',
                        ),
                    'enabled' => true,
                ),
            474 =>
                array(
                    'id' => '3475',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SAVAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120264126',
                        ),
                    'enabled' => true,
                ),
            475 =>
                array(
                    'id' => '3476',
                    'bank_id' => '22',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120264634',
                        ),
                    'enabled' => true,
                ),
            476 =>
                array(
                    'id' => '3477',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120270002',
                        ),
                    'enabled' => true,
                ),
            477 =>
                array(
                    'id' => '3478',
                    'bank_id' => '22',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120270136',
                        ),
                    'enabled' => true,
                ),
            478 =>
                array(
                    'id' => '3479',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ARSHINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120270507',
                        ),
                    'enabled' => true,
                ),
            479 =>
                array(
                    'id' => '3480',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120270886',
                        ),
                    'enabled' => true,
                ),
            480 =>
                array(
                    'id' => '3481',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120271427',
                        ),
                    'enabled' => true,
                ),
            481 =>
                array(
                    'id' => '3482',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DHAKA STOCK EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120271706',
                        ),
                    'enabled' => true,
                ),
            482 =>
                array(
                    'id' => '3483',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DHOLAIKHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120271843',
                        ),
                    'enabled' => true,
                ),
            483 =>
                array(
                    'id' => '3484',
                    'bank_id' => '22',
                    'bank_branch_name' => 'FEDERATION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120272297',
                        ),
                    'enabled' => true,
                ),
            484 =>
                array(
                    'id' => '3485',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120272989',
                        ),
                    'enabled' => true,
                ),
            485 =>
                array(
                    'id' => '3486',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120273641',
                        ),
                    'enabled' => true,
                ),
            486 =>
                array(
                    'id' => '3487',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KONAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120273746',
                        ),
                    'enabled' => true,
                ),
            487 =>
                array(
                    'id' => '3488',
                    'bank_id' => '22',
                    'bank_branch_name' => 'LOCAL OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120273883',
                        ),
                    'enabled' => true,
                ),
            488 =>
                array(
                    'id' => '3489',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120273946',
                        ),
                    'enabled' => true,
                ),
            489 =>
                array(
                    'id' => '3490',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MEGHULA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120274040',
                        ),
                    'enabled' => true,
                ),
            490 =>
                array(
                    'id' => '3491',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120274240',
                        ),
                    'enabled' => true,
                ),
            491 =>
                array(
                    'id' => '3492',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120274424',
                        ),
                    'enabled' => true,
                ),
            492 =>
                array(
                    'id' => '3493',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NAWABGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120274703',
                        ),
                    'enabled' => true,
                ),
            493 =>
                array(
                    'id' => '3494',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NAWABPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120274758',
                        ),
                    'enabled' => true,
                ),
            494 =>
                array(
                    'id' => '3495',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NAYA PALTAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120274879',
                        ),
                    'enabled' => true,
                ),
            495 =>
                array(
                    'id' => '3496',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NORTH BROOK HALL ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120275052',
                        ),
                    'enabled' => true,
                ),
            496 =>
                array(
                    'id' => '3497',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120276343',
                        ),
                    'enabled' => true,
                ),
            497 =>
                array(
                    'id' => '3498',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BIROL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120280050',
                        ),
                    'enabled' => true,
                ),
            498 =>
                array(
                    'id' => '3499',
                    'bank_id' => '22',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120280676',
                        ),
                    'enabled' => true,
                ),
            499 =>
                array(
                    'id' => '3500',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SETABGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120282195',
                        ),
                    'enabled' => true,
                ),
            500 =>
                array(
                    'id' => '3501',
                    'bank_id' => '22',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120290529',
                        ),
                    'enabled' => true,
                ),
            501 =>
                array(
                    'id' => '3502',
                    'bank_id' => '22',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120300527',
                        ),
                    'enabled' => true,
                ),
            502 =>
                array(
                    'id' => '3503',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHANDRA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330063',
                        ),
                    'enabled' => true,
                ),
            503 =>
                array(
                    'id' => '3504',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330221',
                        ),
                    'enabled' => true,
                ),
            504 =>
                array(
                    'id' => '3505',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BHAWAL MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330247',
                        ),
                    'enabled' => true,
                ),
            505 =>
                array(
                    'id' => '3506',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHERAG ALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330276',
                        ),
                    'enabled' => true,
                ),
            506 =>
                array(
                    'id' => '3507',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330555',
                        ),
                    'enabled' => true,
                ),
            507 =>
                array(
                    'id' => '3508',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330889',
                        ),
                    'enabled' => true,
                ),
            508 =>
                array(
                    'id' => '3509',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120330942',
                        ),
                    'enabled' => true,
                ),
            509 =>
                array(
                    'id' => '3510',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120331004',
                        ),
                    'enabled' => true,
                ),
            510 =>
                array(
                    'id' => '3511',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TONGI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120331659',
                        ),
                    'enabled' => true,
                ),
            511 =>
                array(
                    'id' => '3512',
                    'bank_id' => '22',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120360617',
                        ),
                    'enabled' => true,
                ),
            512 =>
                array(
                    'id' => '3513',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MADHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120360888',
                        ),
                    'enabled' => true,
                ),
            513 =>
                array(
                    'id' => '3514',
                    'bank_id' => '22',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120380400',
                        ),
                    'enabled' => true,
                ),
            514 =>
                array(
                    'id' => '3515',
                    'bank_id' => '22',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120390858',
                        ),
                    'enabled' => true,
                ),
            515 =>
                array(
                    'id' => '3516',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BENAPOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120410288',
                        ),
                    'enabled' => true,
                ),
            516 =>
                array(
                    'id' => '3517',
                    'bank_id' => '22',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120410941',
                        ),
                    'enabled' => true,
                ),
            517 =>
                array(
                    'id' => '3518',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120411632',
                        ),
                    'enabled' => true,
                ),
            518 =>
                array(
                    'id' => '3519',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KALIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120440803',
                        ),
                    'enabled' => true,
                ),
            519 =>
                array(
                    'id' => '3520',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BORO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120470378',
                        ),
                    'enabled' => true,
                ),
            520 =>
                array(
                    'id' => '3521',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120471548',
                        ),
                    'enabled' => true,
                ),
            521 =>
                array(
                    'id' => '3522',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SONADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120472626',
                        ),
                    'enabled' => true,
                ),
            522 =>
                array(
                    'id' => '3523',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BAJITPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120480100',
                        ),
                    'enabled' => true,
                ),
            523 =>
                array(
                    'id' => '3524',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120500943',
                        ),
                    'enabled' => true,
                ),
            524 =>
                array(
                    'id' => '3525',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PORADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120501368',
                        ),
                    'enabled' => true,
                ),
            525 =>
                array(
                    'id' => '3526',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120510191',
                        ),
                    'enabled' => true,
                ),
            526 =>
                array(
                    'id' => '3527',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120540761',
                        ),
                    'enabled' => true,
                ),
            527 =>
                array(
                    'id' => '3528',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120560617',
                        ),
                    'enabled' => true,
                ),
            528 =>
                array(
                    'id' => '3529',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120581188',
                        ),
                    'enabled' => true,
                ),
            529 =>
                array(
                    'id' => '3530',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120581720',
                        ),
                    'enabled' => true,
                ),
            530 =>
                array(
                    'id' => '3531',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MUKTARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120591002',
                        ),
                    'enabled' => true,
                ),
            531 =>
                array(
                    'id' => '3532',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120611753',
                        ),
                    'enabled' => true,
                ),
            532 =>
                array(
                    'id' => '3533',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SEEDSTORE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120612099',
                        ),
                    'enabled' => true,
                ),
            533 =>
                array(
                    'id' => '3534',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120641181',
                        ),
                    'enabled' => true,
                ),
            534 =>
                array(
                    'id' => '3535',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120670165',
                        ),
                    'enabled' => true,
                ),
            535 =>
                array(
                    'id' => '3536',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BHUIGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120670202',
                        ),
                    'enabled' => true,
                ),
            536 =>
                array(
                    'id' => '3537',
                    'bank_id' => '22',
                    'bank_branch_name' => 'ISAPURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120670673',
                        ),
                    'enabled' => true,
                ),
            537 =>
                array(
                    'id' => '3538',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120671180',
                        ),
                    'enabled' => true,
                ),
            538 =>
                array(
                    'id' => '3539',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NETAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120671272',
                        ),
                    'enabled' => true,
                ),
            539 =>
                array(
                    'id' => '3540',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PANCHABATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120671380',
                        ),
                    'enabled' => true,
                ),
            540 =>
                array(
                    'id' => '3541',
                    'bank_id' => '22',
                    'bank_branch_name' => 'RUPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120671456',
                        ),
                    'enabled' => true,
                ),
            541 =>
                array(
                    'id' => '3542',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SHIBU MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120671551',
                        ),
                    'enabled' => true,
                ),
            542 =>
                array(
                    'id' => '3543',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TANBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120671780',
                        ),
                    'enabled' => true,
                ),
            543 =>
                array(
                    'id' => '3544',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PANCHDOWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120680142',
                        ),
                    'enabled' => true,
                ),
            544 =>
                array(
                    'id' => '3545',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GHORASAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120680492',
                        ),
                    'enabled' => true,
                ),
            545 =>
                array(
                    'id' => '3546',
                    'bank_id' => '22',
                    'bank_branch_name' => 'HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120680526',
                        ),
                    'enabled' => true,
                ),
            546 =>
                array(
                    'id' => '3547',
                    'bank_id' => '22',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120680676',
                        ),
                    'enabled' => true,
                ),
            547 =>
                array(
                    'id' => '3548',
                    'bank_id' => '22',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120680850',
                        ),
                    'enabled' => true,
                ),
            548 =>
                array(
                    'id' => '3549',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120700251',
                        ),
                    'enabled' => true,
                ),
            549 =>
                array(
                    'id' => '3550',
                    'bank_id' => '22',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120750672',
                        ),
                    'enabled' => true,
                ),
            550 =>
                array(
                    'id' => '3551',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KASHINATHPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120761340',
                        ),
                    'enabled' => true,
                ),
            551 =>
                array(
                    'id' => '3552',
                    'bank_id' => '22',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120761782',
                        ),
                    'enabled' => true,
                ),
            552 =>
                array(
                    'id' => '3553',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BANESHWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120810220',
                        ),
                    'enabled' => true,
                ),
            553 =>
                array(
                    'id' => '3554',
                    'bank_id' => '22',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120811937',
                        ),
                    'enabled' => true,
                ),
            554 =>
                array(
                    'id' => '3555',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TAHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120812323',
                        ),
                    'enabled' => true,
                ),
            555 =>
                array(
                    'id' => '3556',
                    'bank_id' => '22',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120840524',
                        ),
                    'enabled' => true,
                ),
            556 =>
                array(
                    'id' => '3557',
                    'bank_id' => '22',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120851450',
                        ),
                    'enabled' => true,
                ),
            557 =>
                array(
                    'id' => '3558',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SHARIATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120860670',
                        ),
                    'enabled' => true,
                ),
            558 =>
                array(
                    'id' => '3559',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120871098',
                        ),
                    'enabled' => true,
                ),
            559 =>
                array(
                    'id' => '3560',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BELKUCHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120880221',
                        ),
                    'enabled' => true,
                ),
            560 =>
                array(
                    'id' => '3561',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120890558',
                        ),
                    'enabled' => true,
                ),
            561 =>
                array(
                    'id' => '3562',
                    'bank_id' => '22',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120910317',
                        ),
                    'enabled' => true,
                ),
            562 =>
                array(
                    'id' => '3563',
                    'bank_id' => '22',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120911545',
                        ),
                    'enabled' => true,
                ),
            563 =>
                array(
                    'id' => '3564',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SUBID BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120913493',
                        ),
                    'enabled' => true,
                ),
            564 =>
                array(
                    'id' => '3565',
                    'bank_id' => '22',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120913556',
                        ),
                    'enabled' => true,
                ),
            565 =>
                array(
                    'id' => '3566',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TULTIKAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120913972',
                        ),
                    'enabled' => true,
                ),
            566 =>
                array(
                    'id' => '3567',
                    'bank_id' => '22',
                    'bank_branch_name' => 'UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120914034',
                        ),
                    'enabled' => true,
                ),
            567 =>
                array(
                    'id' => '3568',
                    'bank_id' => '22',
                    'bank_branch_name' => 'KARATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120931367',
                        ),
                    'enabled' => true,
                ),
            568 =>
                array(
                    'id' => '3569',
                    'bank_id' => '22',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '120932290',
                        ),
                    'enabled' => true,
                ),
            569 =>
                array(
                    'id' => '3570',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125010070',
                        ),
                    'enabled' => true,
                ),
            570 =>
                array(
                    'id' => '3571',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FAKIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125010467',
                        ),
                    'enabled' => true,
                ),
            571 =>
                array(
                    'id' => '3572',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MONGLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125010946',
                        ),
                    'enabled' => true,
                ),
            572 =>
                array(
                    'id' => '3573',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MORELGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125011037',
                        ),
                    'enabled' => true,
                ),
            573 =>
                array(
                    'id' => '3574',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SARANKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125011303',
                        ),
                    'enabled' => true,
                ),
            574 =>
                array(
                    'id' => '3575',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANDARBAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125030139',
                        ),
                    'enabled' => true,
                ),
            575 =>
                array(
                    'id' => '3576',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BARGUNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125040132',
                        ),
                    'enabled' => true,
                ),
            576 =>
                array(
                    'id' => '3577',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BAKERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125060220',
                        ),
                    'enabled' => true,
                ),
            577 =>
                array(
                    'id' => '3578',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125060288',
                        ),
                    'enabled' => true,
                ),
            578 =>
                array(
                    'id' => '3579',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TORKI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125062202',
                        ),
                    'enabled' => true,
                ),
            579 =>
                array(
                    'id' => '3580',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HATKHOLA CHAWKBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125062602',
                        ),
                    'enabled' => true,
                ),
            580 =>
                array(
                    'id' => '3581',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125090108',
                        ),
                    'enabled' => true,
                ),
            581 =>
                array(
                    'id' => '3582',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BORHANUDDIN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125090203',
                        ),
                    'enabled' => true,
                ),
            582 =>
                array(
                    'id' => '3583',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHAR FASHION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125090229',
                        ),
                    'enabled' => true,
                ),
            583 =>
                array(
                    'id' => '3584',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LALMOHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125090708',
                        ),
                    'enabled' => true,
                ),
            584 =>
                array(
                    'id' => '3585',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125100377',
                        ),
                    'enabled' => true,
                ),
            585 =>
                array(
                    'id' => '3586',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BOROGOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125100498',
                        ),
                    'enabled' => true,
                ),
            586 =>
                array(
                    'id' => '3587',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DUPCHACHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125100919',
                        ),
                    'enabled' => true,
                ),
            587 =>
                array(
                    'id' => '3588',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HIGHWAY SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125101392',
                        ),
                    'enabled' => true,
                ),
            588 =>
                array(
                    'id' => '3589',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KAHALOO SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125101550',
                        ),
                    'enabled' => true,
                ),
            589 =>
                array(
                    'id' => '3590',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MAHASTANGARH SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125101792',
                        ),
                    'enabled' => true,
                ),
            590 =>
                array(
                    'id' => '3591',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NANDIGRAM SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125102038',
                        ),
                    'enabled' => true,
                ),
            591 =>
                array(
                    'id' => '3592',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SANTAHAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125102425',
                        ),
                    'enabled' => true,
                ),
            592 =>
                array(
                    'id' => '3593',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SONATOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125102988',
                        ),
                    'enabled' => true,
                ),
            593 =>
                array(
                    'id' => '3594',
                    'bank_id' => '23',
                    'bank_branch_name' => 'AKHAURA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125120052',
                        ),
                    'enabled' => true,
                ),
            594 =>
                array(
                    'id' => '3595',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125120102',
                        ),
                    'enabled' => true,
                ),
            595 =>
                array(
                    'id' => '3596',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANCHARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125120252',
                        ),
                    'enabled' => true,
                ),
            596 =>
                array(
                    'id' => '3597',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125120436',
                        ),
                    'enabled' => true,
                ),
            597 =>
                array(
                    'id' => '3598',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KASBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125121035',
                        ),
                    'enabled' => true,
                ),
            598 =>
                array(
                    'id' => '3599',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125121369',
                        ),
                    'enabled' => true,
                ),
            599 =>
                array(
                    'id' => '3600',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SACHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125130118',
                        ),
                    'enabled' => true,
                ),
            600 =>
                array(
                    'id' => '3601',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125130318',
                        ),
                    'enabled' => true,
                ),
            601 =>
                array(
                    'id' => '3602',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FARIDGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125130671',
                        ),
                    'enabled' => true,
                ),
            602 =>
                array(
                    'id' => '3603',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125130884',
                        ),
                    'enabled' => true,
                ),
            603 =>
                array(
                    'id' => '3604',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MATLAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125131188',
                        ),
                    'enabled' => true,
                ),
            604 =>
                array(
                    'id' => '3605',
                    'bank_id' => '23',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150130',
                        ),
                    'enabled' => true,
                ),
            605 =>
                array(
                    'id' => '3606',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150464',
                        ),
                    'enabled' => true,
                ),
            606 =>
                array(
                    'id' => '3607',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ANOWARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150527',
                        ),
                    'enabled' => true,
                ),
            607 =>
                array(
                    'id' => '3608',
                    'bank_id' => '23',
                    'bank_branch_name' => 'AGRABAD COMMERCIAL AREA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150606',
                        ),
                    'enabled' => true,
                ),
            608 =>
                array(
                    'id' => '3609',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150798',
                        ),
                    'enabled' => true,
                ),
            609 =>
                array(
                    'id' => '3610',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANDARTILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150943',
                        ),
                    'enabled' => true,
                ),
            610 =>
                array(
                    'id' => '3611',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANSHKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125150972',
                        ),
                    'enabled' => true,
                ),
            611 =>
                array(
                    'id' => '3612',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BARAIYER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151092',
                        ),
                    'enabled' => true,
                ),
            612 =>
                array(
                    'id' => '3613',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BARODAROGA HAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151139',
                        ),
                    'enabled' => true,
                ),
            613 =>
                array(
                    'id' => '3614',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BOALKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151300',
                        ),
                    'enabled' => true,
                ),
            614 =>
                array(
                    'id' => '3615',
                    'bank_id' => '23',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151489',
                        ),
                    'enabled' => true,
                ),
            615 =>
                array(
                    'id' => '3616',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHAKTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151755',
                        ),
                    'enabled' => true,
                ),
            616 =>
                array(
                    'id' => '3617',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHANDANAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151818',
                        ),
                    'enabled' => true,
                ),
            617 =>
                array(
                    'id' => '3618',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125151939',
                        ),
                    'enabled' => true,
                ),
            618 =>
                array(
                    'id' => '3619',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DEWAN HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125152446',
                        ),
                    'enabled' => true,
                ),
            619 =>
                array(
                    'id' => '3620',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125152741',
                        ),
                    'enabled' => true,
                ),
            620 =>
                array(
                    'id' => '3621',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125153166',
                        ),
                    'enabled' => true,
                ),
            621 =>
                array(
                    'id' => '3622',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125153229',
                        ),
                    'enabled' => true,
                ),
            622 =>
                array(
                    'id' => '3623',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125153645',
                        ),
                    'enabled' => true,
                ),
            623 =>
                array(
                    'id' => '3624',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125153737',
                        ),
                    'enabled' => true,
                ),
            624 =>
                array(
                    'id' => '3625',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALURGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125153911',
                        ),
                    'enabled' => true,
                ),
            625 =>
                array(
                    'id' => '3626',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KERANIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125154181',
                        ),
                    'enabled' => true,
                ),
            626 =>
                array(
                    'id' => '3627',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125154273',
                        ),
                    'enabled' => true,
                ),
            627 =>
                array(
                    'id' => '3628',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125154660',
                        ),
                    'enabled' => true,
                ),
            628 =>
                array(
                    'id' => '3629',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MIRSARAI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125155069',
                        ),
                    'enabled' => true,
                ),
            629 =>
                array(
                    'id' => '3630',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NAZU MEA HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125155627',
                        ),
                    'enabled' => true,
                ),
            630 =>
                array(
                    'id' => '3631',
                    'bank_id' => '23',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125155801',
                        ),
                    'enabled' => true,
                ),
            631 =>
                array(
                    'id' => '3632',
                    'bank_id' => '23',
                    'bank_branch_name' => 'OXYGEN MOUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125155872',
                        ),
                    'enabled' => true,
                ),
            632 =>
                array(
                    'id' => '3633',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125155922',
                        ),
                    'enabled' => true,
                ),
            633 =>
                array(
                    'id' => '3634',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125156163',
                        ),
                    'enabled' => true,
                ),
            634 =>
                array(
                    'id' => '3635',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAOZAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125156497',
                        ),
                    'enabled' => true,
                ),
            635 =>
                array(
                    'id' => '3636',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SANDWIP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125156918',
                        ),
                    'enabled' => true,
                ),
            636 =>
                array(
                    'id' => '3637',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SATKANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125157067',
                        ),
                    'enabled' => true,
                ),
            637 =>
                array(
                    'id' => '3638',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SITAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125157391',
                        ),
                    'enabled' => true,
                ),
            638 =>
                array(
                    'id' => '3639',
                    'bank_id' => '23',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125157517',
                        ),
                    'enabled' => true,
                ),
            639 =>
                array(
                    'id' => '3640',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ALAMDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125180047',
                        ),
                    'enabled' => true,
                ),
            640 =>
                array(
                    'id' => '3641',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125180197',
                        ),
                    'enabled' => true,
                ),
            641 =>
                array(
                    'id' => '3642',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JIBON NAGAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125180584',
                        ),
                    'enabled' => true,
                ),
            642 =>
                array(
                    'id' => '3643',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANGADDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125190408',
                        ),
                    'enabled' => true,
                ),
            643 =>
                array(
                    'id' => '3644',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BURICHANG SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125190824',
                        ),
                    'enabled' => true,
                ),
            644 =>
                array(
                    'id' => '3645',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHANDINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125190882',
                        ),
                    'enabled' => true,
                ),
            645 =>
                array(
                    'id' => '3646',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHOUDDAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125191065',
                        ),
                    'enabled' => true,
                ),
            646 =>
                array(
                    'id' => '3647',
                    'bank_id' => '23',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125191157',
                        ),
                    'enabled' => true,
                ),
            647 =>
                array(
                    'id' => '3648',
                    'bank_id' => '23',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125191423',
                        ),
                    'enabled' => true,
                ),
            648 =>
                array(
                    'id' => '3649',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DAUDKANDI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125191528',
                        ),
                    'enabled' => true,
                ),
            649 =>
                array(
                    'id' => '3650',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125192114',
                        ),
                    'enabled' => true,
                ),
            650 =>
                array(
                    'id' => '3651',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125192714',
                        ),
                    'enabled' => true,
                ),
            651 =>
                array(
                    'id' => '3652',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TERY PATTRY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125197643',
                        ),
                    'enabled' => true,
                ),
            652 =>
                array(
                    'id' => '3653',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PEKUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220057',
                        ),
                    'enabled' => true,
                ),
            653 =>
                array(
                    'id' => '3654',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHIRINGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220194',
                        ),
                    'enabled' => true,
                ),
            654 =>
                array(
                    'id' => '3655',
                    'bank_id' => '23',
                    'bank_branch_name' => 'COURT BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220231',
                        ),
                    'enabled' => true,
                ),
            655 =>
                array(
                    'id' => '3656',
                    'bank_id' => '23',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220257',
                        ),
                    'enabled' => true,
                ),
            656 =>
                array(
                    'id' => '3657',
                    'bank_id' => '23',
                    'bank_branch_name' => 'EIDGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220402',
                        ),
                    'enabled' => true,
                ),
            657 =>
                array(
                    'id' => '3658',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOHESHKHALI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220778',
                        ),
                    'enabled' => true,
                ),
            658 =>
                array(
                    'id' => '3659',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAMU',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220857',
                        ),
                    'enabled' => true,
                ),
            659 =>
                array(
                    'id' => '3660',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TEKNAF',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125220910',
                        ),
                    'enabled' => true,
                ),
            660 =>
                array(
                    'id' => '3661',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SONARGAON JANAPATH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260088',
                        ),
                    'enabled' => true,
                ),
            661 =>
                array(
                    'id' => '3662',
                    'bank_id' => '23',
                    'bank_branch_name' => 'AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260138',
                        ),
                    'enabled' => true,
                ),
            662 =>
                array(
                    'id' => '3663',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NIKUNJA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260183',
                        ),
                    'enabled' => true,
                ),
            663 =>
                array(
                    'id' => '3664',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BADDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260341',
                        ),
                    'enabled' => true,
                ),
            664 =>
                array(
                    'id' => '3665',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260433',
                        ),
                    'enabled' => true,
                ),
            665 =>
                array(
                    'id' => '3666',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260509',
                        ),
                    'enabled' => true,
                ),
            666 =>
                array(
                    'id' => '3667',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BARIDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260525',
                        ),
                    'enabled' => true,
                ),
            667 =>
                array(
                    'id' => '3668',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125260738',
                        ),
                    'enabled' => true,
                ),
            668 =>
                array(
                    'id' => '3669',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261182',
                        ),
                    'enabled' => true,
                ),
            669 =>
                array(
                    'id' => '3670',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261337',
                        ),
                    'enabled' => true,
                ),
            670 =>
                array(
                    'id' => '3671',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FARMGATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261458',
                        ),
                    'enabled' => true,
                ),
            671 =>
                array(
                    'id' => '3672',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GANAKBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261632',
                        ),
                    'enabled' => true,
                ),
            672 =>
                array(
                    'id' => '3673',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261724',
                        ),
                    'enabled' => true,
                ),
            673 =>
                array(
                    'id' => '3674',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GULSHAN CIRCLE-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261753',
                        ),
                    'enabled' => true,
                ),
            674 =>
                array(
                    'id' => '3675',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HAZICAMP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125261995',
                        ),
                    'enabled' => true,
                ),
            675 =>
                array(
                    'id' => '3676',
                    'bank_id' => '23',
                    'bank_branch_name' => 'IDB BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125262149',
                        ),
                    'enabled' => true,
                ),
            676 =>
                array(
                    'id' => '3677',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALAMPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125262457',
                        ),
                    'enabled' => true,
                ),
            677 =>
                array(
                    'id' => '3678',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125262536',
                        ),
                    'enabled' => true,
                ),
            678 =>
                array(
                    'id' => '3679',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125262981',
                        ),
                    'enabled' => true,
                ),
            679 =>
                array(
                    'id' => '3680',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MIRPUR SECTION-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125263106',
                        ),
                    'enabled' => true,
                ),
            680 =>
                array(
                    'id' => '3681',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125263193',
                        ),
                    'enabled' => true,
                ),
            681 =>
                array(
                    'id' => '3682',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOHAMMADPUR KRISHI MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125263377',
                        ),
                    'enabled' => true,
                ),
            682 =>
                array(
                    'id' => '3683',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125263522',
                        ),
                    'enabled' => true,
                ),
            683 =>
                array(
                    'id' => '3684',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125263580',
                        ),
                    'enabled' => true,
                ),
            684 =>
                array(
                    'id' => '3685',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125263614',
                        ),
                    'enabled' => true,
                ),
            685 =>
                array(
                    'id' => '3686',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125264097',
                        ),
                    'enabled' => true,
                ),
            686 =>
                array(
                    'id' => '3687',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125264305',
                        ),
                    'enabled' => true,
                ),
            687 =>
                array(
                    'id' => '3688',
                    'bank_id' => '23',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125264639',
                        ),
                    'enabled' => true,
                ),
            688 =>
                array(
                    'id' => '3689',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ZIRANI BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125264826',
                        ),
                    'enabled' => true,
                ),
            689 =>
                array(
                    'id' => '3690',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125270007',
                        ),
                    'enabled' => true,
                ),
            690 =>
                array(
                    'id' => '3691',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125270344',
                        ),
                    'enabled' => true,
                ),
            691 =>
                array(
                    'id' => '3692',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANDURA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125270652',
                        ),
                    'enabled' => true,
                ),
            692 =>
                array(
                    'id' => '3693',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125270881',
                        ),
                    'enabled' => true,
                ),
            693 =>
                array(
                    'id' => '3694',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHAWK MOGULTULY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125271301',
                        ),
                    'enabled' => true,
                ),
            694 =>
                array(
                    'id' => '3695',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125271422',
                        ),
                    'enabled' => true,
                ),
            695 =>
                array(
                    'id' => '3696',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DHOLAIKHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125271848',
                        ),
                    'enabled' => true,
                ),
            696 =>
                array(
                    'id' => '3697',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125272050',
                        ),
                    'enabled' => true,
                ),
            697 =>
                array(
                    'id' => '3698',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125272326',
                        ),
                    'enabled' => true,
                ),
            698 =>
                array(
                    'id' => '3699',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125272447',
                        ),
                    'enabled' => true,
                ),
            699 =>
                array(
                    'id' => '3700',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125272689',
                        ),
                    'enabled' => true,
                ),
            700 =>
                array(
                    'id' => '3701',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125272984',
                        ),
                    'enabled' => true,
                ),
            701 =>
                array(
                    'id' => '3702',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JATRABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125273220',
                        ),
                    'enabled' => true,
                ),
            702 =>
                array(
                    'id' => '3703',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KAMRANGIRCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125273583',
                        ),
                    'enabled' => true,
                ),
            703 =>
                array(
                    'id' => '3704',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KHILGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125273675',
                        ),
                    'enabled' => true,
                ),
            704 =>
                array(
                    'id' => '3705',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LALBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125273820',
                        ),
                    'enabled' => true,
                ),
            705 =>
                array(
                    'id' => '3706',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LOCAL OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125273888',
                        ),
                    'enabled' => true,
                ),
            706 =>
                array(
                    'id' => '3707',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125274182',
                        ),
                    'enabled' => true,
                ),
            707 =>
                array(
                    'id' => '3708',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125274245',
                        ),
                    'enabled' => true,
                ),
            708 =>
                array(
                    'id' => '3709',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOUCHAK MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125274395',
                        ),
                    'enabled' => true,
                ),
            709 =>
                array(
                    'id' => '3710',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125274690',
                        ),
                    'enabled' => true,
                ),
            710 =>
                array(
                    'id' => '3711',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NAWABPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125274753',
                        ),
                    'enabled' => true,
                ),
            711 =>
                array(
                    'id' => '3712',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PALTAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125275202',
                        ),
                    'enabled' => true,
                ),
            712 =>
                array(
                    'id' => '3713',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAMNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125275686',
                        ),
                    'enabled' => true,
                ),
            713 =>
                array(
                    'id' => '3714',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125275749',
                        ),
                    'enabled' => true,
                ),
            714 =>
                array(
                    'id' => '3715',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125275923',
                        ),
                    'enabled' => true,
                ),
            715 =>
                array(
                    'id' => '3716',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHYAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125276522',
                        ),
                    'enabled' => true,
                ),
            716 =>
                array(
                    'id' => '3717',
                    'bank_id' => '23',
                    'bank_branch_name' => 'VIP ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125276856',
                        ),
                    'enabled' => true,
                ),
            717 =>
                array(
                    'id' => '3718',
                    'bank_id' => '23',
                    'bank_branch_name' => 'WISEGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125277042',
                        ),
                    'enabled' => true,
                ),
            718 =>
                array(
                    'id' => '3719',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125277097',
                        ),
                    'enabled' => true,
                ),
            719 =>
                array(
                    'id' => '3720',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BIRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125280347',
                        ),
                    'enabled' => true,
                ),
            720 =>
                array(
                    'id' => '3721',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125280671',
                        ),
                    'enabled' => true,
                ),
            721 =>
                array(
                    'id' => '3722',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SETABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125282174',
                        ),
                    'enabled' => true,
                ),
            722 =>
                array(
                    'id' => '3723',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHANGA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125290290',
                        ),
                    'enabled' => true,
                ),
            723 =>
                array(
                    'id' => '3724',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125290524',
                        ),
                    'enabled' => true,
                ),
            724 =>
                array(
                    'id' => '3725',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHHAGALNAIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125300319',
                        ),
                    'enabled' => true,
                ),
            725 =>
                array(
                    'id' => '3726',
                    'bank_id' => '23',
                    'bank_branch_name' => 'COLLEGE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125300348',
                        ),
                    'enabled' => true,
                ),
            726 =>
                array(
                    'id' => '3727',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DAGANBHUIYAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125300377',
                        ),
                    'enabled' => true,
                ),
            727 =>
                array(
                    'id' => '3728',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125300522',
                        ),
                    'enabled' => true,
                ),
            728 =>
                array(
                    'id' => '3729',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PARSHURAM SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125301284',
                        ),
                    'enabled' => true,
                ),
            729 =>
                array(
                    'id' => '3730',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SONAGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125301484',
                        ),
                    'enabled' => true,
                ),
            730 =>
                array(
                    'id' => '3731',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GAIBANDHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125320528',
                        ),
                    'enabled' => true,
                ),
            731 =>
                array(
                    'id' => '3732',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125320586',
                        ),
                    'enabled' => true,
                ),
            732 =>
                array(
                    'id' => '3733',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SUNDARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125321301',
                        ),
                    'enabled' => true,
                ),
            733 =>
                array(
                    'id' => '3734',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125330226',
                        ),
                    'enabled' => true,
                ),
            734 =>
                array(
                    'id' => '3735',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125330550',
                        ),
                    'enabled' => true,
                ),
            735 =>
                array(
                    'id' => '3736',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GAZIPUR SADAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125330592',
                        ),
                    'enabled' => true,
                ),
            736 =>
                array(
                    'id' => '3737',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125330884',
                        ),
                    'enabled' => true,
                ),
            737 =>
                array(
                    'id' => '3738',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125330947',
                        ),
                    'enabled' => true,
                ),
            738 =>
                array(
                    'id' => '3739',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MAWNA CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125331038',
                        ),
                    'enabled' => true,
                ),
            739 =>
                array(
                    'id' => '3740',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125331638',
                        ),
                    'enabled' => true,
                ),
            740 =>
                array(
                    'id' => '3741',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125350372',
                        ),
                    'enabled' => true,
                ),
            741 =>
                array(
                    'id' => '3742',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TUNGI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125351092',
                        ),
                    'enabled' => true,
                ),
            742 =>
                array(
                    'id' => '3743',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125360612',
                        ),
                    'enabled' => true,
                ),
            743 =>
                array(
                    'id' => '3744',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NABIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125361103',
                        ),
                    'enabled' => true,
                ),
            744 =>
                array(
                    'id' => '3745',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHAYESTAGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125361408',
                        ),
                    'enabled' => true,
                ),
            745 =>
                array(
                    'id' => '3746',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125380405',
                        ),
                    'enabled' => true,
                ),
            746 =>
                array(
                    'id' => '3747',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PANCHBIBI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125380676',
                        ),
                    'enabled' => true,
                ),
            747 =>
                array(
                    'id' => '3748',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BAKSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125390103',
                        ),
                    'enabled' => true,
                ),
            748 =>
                array(
                    'id' => '3749',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125390853',
                        ),
                    'enabled' => true,
                ),
            749 =>
                array(
                    'id' => '3750',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TARAKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125391694',
                        ),
                    'enabled' => true,
                ),
            750 =>
                array(
                    'id' => '3751',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BENAPOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125410283',
                        ),
                    'enabled' => true,
                ),
            751 =>
                array(
                    'id' => '3752',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHOWGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125410559',
                        ),
                    'enabled' => true,
                ),
            752 =>
                array(
                    'id' => '3753',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125410946',
                        ),
                    'enabled' => true,
                ),
            753 =>
                array(
                    'id' => '3754',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JHIKARGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125411095',
                        ),
                    'enabled' => true,
                ),
            754 =>
                array(
                    'id' => '3755',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KESHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125411211',
                        ),
                    'enabled' => true,
                ),
            755 =>
                array(
                    'id' => '3756',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125411637',
                        ),
                    'enabled' => true,
                ),
            756 =>
                array(
                    'id' => '3757',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JHALOKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125420310',
                        ),
                    'enabled' => true,
                ),
            757 =>
                array(
                    'id' => '3758',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAJAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125420552',
                        ),
                    'enabled' => true,
                ),
            758 =>
                array(
                    'id' => '3759',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DAK BANGLA BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125440358',
                        ),
                    'enabled' => true,
                ),
            759 =>
                array(
                    'id' => '3760',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125440640',
                        ),
                    'enabled' => true,
                ),
            760 =>
                array(
                    'id' => '3761',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125440790',
                        ),
                    'enabled' => true,
                ),
            761 =>
                array(
                    'id' => '3762',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KOTCHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125441007',
                        ),
                    'enabled' => true,
                ),
            762 =>
                array(
                    'id' => '3763',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KHAGRACHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125460075',
                        ),
                    'enabled' => true,
                ),
            763 =>
                array(
                    'id' => '3764',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125470702',
                        ),
                    'enabled' => true,
                ),
            764 =>
                array(
                    'id' => '3765',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KDA AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125471406',
                        ),
                    'enabled' => true,
                ),
            765 =>
                array(
                    'id' => '3766',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125471543',
                        ),
                    'enabled' => true,
                ),
            766 =>
                array(
                    'id' => '3767',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PAIKGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125472089',
                        ),
                    'enabled' => true,
                ),
            767 =>
                array(
                    'id' => '3768',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PHULTALA BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125472155',
                        ),
                    'enabled' => true,
                ),
            768 =>
                array(
                    'id' => '3769',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHAIRAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125480192',
                        ),
                    'enabled' => true,
                ),
            769 =>
                array(
                    'id' => '3770',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KATIADI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125480589',
                        ),
                    'enabled' => true,
                ),
            770 =>
                array(
                    'id' => '3771',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125480671',
                        ),
                    'enabled' => true,
                ),
            771 =>
                array(
                    'id' => '3772',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHURUNGAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125490108',
                        ),
                    'enabled' => true,
                ),
            772 =>
                array(
                    'id' => '3773',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KURIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125490403',
                        ),
                    'enabled' => true,
                ),
            773 =>
                array(
                    'id' => '3774',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ROWMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125490645',
                        ),
                    'enabled' => true,
                ),
            774 =>
                array(
                    'id' => '3775',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KUMARKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125500885',
                        ),
                    'enabled' => true,
                ),
            775 =>
                array(
                    'id' => '3776',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125500948',
                        ),
                    'enabled' => true,
                ),
            776 =>
                array(
                    'id' => '3777',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PORADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125501363',
                        ),
                    'enabled' => true,
                ),
            777 =>
                array(
                    'id' => '3778',
                    'bank_id' => '23',
                    'bank_branch_name' => 'HAZIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125510091',
                        ),
                    'enabled' => true,
                ),
            778 =>
                array(
                    'id' => '3779',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125510196',
                        ),
                    'enabled' => true,
                ),
            779 =>
                array(
                    'id' => '3780',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125510738',
                        ),
                    'enabled' => true,
                ),
            780 =>
                array(
                    'id' => '3781',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125510970',
                        ),
                    'enabled' => true,
                ),
            781 =>
                array(
                    'id' => '3782',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125511032',
                        ),
                    'enabled' => true,
                ),
            782 =>
                array(
                    'id' => '3783',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125520465',
                        ),
                    'enabled' => true,
                ),
            783 =>
                array(
                    'id' => '3784',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PATGRAM SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125520599',
                        ),
                    'enabled' => true,
                ),
            784 =>
                array(
                    'id' => '3785',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHARMUGURIA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125540140',
                        ),
                    'enabled' => true,
                ),
            785 =>
                array(
                    'id' => '3786',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALKINI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125540287',
                        ),
                    'enabled' => true,
                ),
            786 =>
                array(
                    'id' => '3787',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125540403',
                        ),
                    'enabled' => true,
                ),
            787 =>
                array(
                    'id' => '3788',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125540766',
                        ),
                    'enabled' => true,
                ),
            788 =>
                array(
                    'id' => '3789',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125550556',
                        ),
                    'enabled' => true,
                ),
            789 =>
                array(
                    'id' => '3790',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125560612',
                        ),
                    'enabled' => true,
                ),
            790 =>
                array(
                    'id' => '3791',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHIBALAYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125560791',
                        ),
                    'enabled' => true,
                ),
            791 =>
                array(
                    'id' => '3792',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SINGAIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125560825',
                        ),
                    'enabled' => true,
                ),
            792 =>
                array(
                    'id' => '3793',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MEHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125570378',
                        ),
                    'enabled' => true,
                ),
            793 =>
                array(
                    'id' => '3794',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BARALEKHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125580100',
                        ),
                    'enabled' => true,
                ),
            794 =>
                array(
                    'id' => '3795',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125580942',
                        ),
                    'enabled' => true,
                ),
            795 =>
                array(
                    'id' => '3796',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125581183',
                        ),
                    'enabled' => true,
                ),
            796 =>
                array(
                    'id' => '3797',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125581725',
                        ),
                    'enabled' => true,
                ),
            797 =>
                array(
                    'id' => '3798',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125591036',
                        ),
                    'enabled' => true,
                ),
            798 =>
                array(
                    'id' => '3799',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125591423',
                        ),
                    'enabled' => true,
                ),
            799 =>
                array(
                    'id' => '3800',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NIMTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125591665',
                        ),
                    'enabled' => true,
                ),
            800 =>
                array(
                    'id' => '3801',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125610317',
                        ),
                    'enabled' => true,
                ),
            801 =>
                array(
                    'id' => '3802',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FULBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125610946',
                        ),
                    'enabled' => true,
                ),
            802 =>
                array(
                    'id' => '3803',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MUKTAGACHA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125611703',
                        ),
                    'enabled' => true,
                ),
            803 =>
                array(
                    'id' => '3804',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125611758',
                        ),
                    'enabled' => true,
                ),
            804 =>
                array(
                    'id' => '3805',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TRISHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125612357',
                        ),
                    'enabled' => true,
                ),
            805 =>
                array(
                    'id' => '3806',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125641007',
                        ),
                    'enabled' => true,
                ),
            806 =>
                array(
                    'id' => '3807',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MOHADEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125641094',
                        ),
                    'enabled' => true,
                ),
            807 =>
                array(
                    'id' => '3808',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125641186',
                        ),
                    'enabled' => true,
                ),
            808 =>
                array(
                    'id' => '3809',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125641249',
                        ),
                    'enabled' => true,
                ),
            809 =>
                array(
                    'id' => '3810',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SAPAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125641757',
                        ),
                    'enabled' => true,
                ),
            810 =>
                array(
                    'id' => '3811',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LOHAGARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125650469',
                        ),
                    'enabled' => true,
                ),
            811 =>
                array(
                    'id' => '3812',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125650643',
                        ),
                    'enabled' => true,
                ),
            812 =>
                array(
                    'id' => '3813',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ARAIHAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125670049',
                        ),
                    'enabled' => true,
                ),
            813 =>
                array(
                    'id' => '3814',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125670223',
                        ),
                    'enabled' => true,
                ),
            814 =>
                array(
                    'id' => '3815',
                    'bank_id' => '23',
                    'bank_branch_name' => 'FATULLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125670528',
                        ),
                    'enabled' => true,
                ),
            815 =>
                array(
                    'id' => '3816',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KATCHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125670823',
                        ),
                    'enabled' => true,
                ),
            816 =>
                array(
                    'id' => '3817',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125671185',
                        ),
                    'enabled' => true,
                ),
            817 =>
                array(
                    'id' => '3818',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NITAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125671277',
                        ),
                    'enabled' => true,
                ),
            818 =>
                array(
                    'id' => '3819',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SONARGAON SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125671701',
                        ),
                    'enabled' => true,
                ),
            819 =>
                array(
                    'id' => '3820',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125680671',
                        ),
                    'enabled' => true,
                ),
            820 =>
                array(
                    'id' => '3821',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125680734',
                        ),
                    'enabled' => true,
                ),
            821 =>
                array(
                    'id' => '3822',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125680855',
                        ),
                    'enabled' => true,
                ),
            822 =>
                array(
                    'id' => '3823',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PALASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125680918',
                        ),
                    'enabled' => true,
                ),
            823 =>
                array(
                    'id' => '3824',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAIPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125681096',
                        ),
                    'enabled' => true,
                ),
            824 =>
                array(
                    'id' => '3825',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHANCHAKOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125690311',
                        ),
                    'enabled' => true,
                ),
            825 =>
                array(
                    'id' => '3826',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125691099',
                        ),
                    'enabled' => true,
                ),
            826 =>
                array(
                    'id' => '3827',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125700256',
                        ),
                    'enabled' => true,
                ),
            827 =>
                array(
                    'id' => '3828',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ROHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125700885',
                        ),
                    'enabled' => true,
                ),
            828 =>
                array(
                    'id' => '3829',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125700948',
                        ),
                    'enabled' => true,
                ),
            829 =>
                array(
                    'id' => '3830',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125720731',
                        ),
                    'enabled' => true,
                ),
            830 =>
                array(
                    'id' => '3831',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JALDHAKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125730468',
                        ),
                    'enabled' => true,
                ),
            831 =>
                array(
                    'id' => '3832',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125730734',
                        ),
                    'enabled' => true,
                ),
            832 =>
                array(
                    'id' => '3833',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125730792',
                        ),
                    'enabled' => true,
                ),
            833 =>
                array(
                    'id' => '3834',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANK ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125750222',
                        ),
                    'enabled' => true,
                ),
            834 =>
                array(
                    'id' => '3835',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125750251',
                        ),
                    'enabled' => true,
                ),
            835 =>
                array(
                    'id' => '3836',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHAPRASHIRHAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125750448',
                        ),
                    'enabled' => true,
                ),
            836 =>
                array(
                    'id' => '3837',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125750585',
                        ),
                    'enabled' => true,
                ),
            837 =>
                array(
                    'id' => '3838',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125750677',
                        ),
                    'enabled' => true,
                ),
            838 =>
                array(
                    'id' => '3839',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125751571',
                        ),
                    'enabled' => true,
                ),
            839 =>
                array(
                    'id' => '3840',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SENBAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125752088',
                        ),
                    'enabled' => true,
                ),
            840 =>
                array(
                    'id' => '3841',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125752233',
                        ),
                    'enabled' => true,
                ),
            841 =>
                array(
                    'id' => '3842',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SUBARNA CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125752354',
                        ),
                    'enabled' => true,
                ),
            842 =>
                array(
                    'id' => '3843',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHATMOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125760641',
                        ),
                    'enabled' => true,
                ),
            843 =>
                array(
                    'id' => '3844',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125761211',
                        ),
                    'enabled' => true,
                ),
            844 =>
                array(
                    'id' => '3845',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KASHINATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125761332',
                        ),
                    'enabled' => true,
                ),
            845 =>
                array(
                    'id' => '3846',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125761787',
                        ),
                    'enabled' => true,
                ),
            846 =>
                array(
                    'id' => '3847',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SANTHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125762052',
                        ),
                    'enabled' => true,
                ),
            847 =>
                array(
                    'id' => '3848',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SUJANAGAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125762265',
                        ),
                    'enabled' => true,
                ),
            848 =>
                array(
                    'id' => '3849',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DEBIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125770194',
                        ),
                    'enabled' => true,
                ),
            849 =>
                array(
                    'id' => '3850',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125770552',
                        ),
                    'enabled' => true,
                ),
            850 =>
                array(
                    'id' => '3851',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125780526',
                        ),
                    'enabled' => true,
                ),
            851 =>
                array(
                    'id' => '3852',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125781091',
                        ),
                    'enabled' => true,
                ),
            852 =>
                array(
                    'id' => '3853',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125790132',
                        ),
                    'enabled' => true,
                ),
            853 =>
                array(
                    'id' => '3854',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125790529',
                        ),
                    'enabled' => true,
                ),
            854 =>
                array(
                    'id' => '3855',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MIARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125790611',
                        ),
                    'enabled' => true,
                ),
            855 =>
                array(
                    'id' => '3856',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PIROJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125790761',
                        ),
                    'enabled' => true,
                ),
            856 =>
                array(
                    'id' => '3857',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BANESHWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125810225',
                        ),
                    'enabled' => true,
                ),
            857 =>
                array(
                    'id' => '3858',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BHAWANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125810346',
                        ),
                    'enabled' => true,
                ),
            858 =>
                array(
                    'id' => '3859',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KESHOREHAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125811079',
                        ),
                    'enabled' => true,
                ),
            859 =>
                array(
                    'id' => '3860',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125811637',
                        ),
                    'enabled' => true,
                ),
            860 =>
                array(
                    'id' => '3861',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125811932',
                        ),
                    'enabled' => true,
                ),
            861 =>
                array(
                    'id' => '3862',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125820673',
                        ),
                    'enabled' => true,
                ),
            862 =>
                array(
                    'id' => '3863',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125820736',
                        ),
                    'enabled' => true,
                ),
            863 =>
                array(
                    'id' => '3864',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125840529',
                        ),
                    'enabled' => true,
                ),
            864 =>
                array(
                    'id' => '3865',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DHAP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125850522',
                        ),
                    'enabled' => true,
                ),
            865 =>
                array(
                    'id' => '3866',
                    'bank_id' => '23',
                    'bank_branch_name' => 'PIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125851363',
                        ),
                    'enabled' => true,
                ),
            866 =>
                array(
                    'id' => '3867',
                    'bank_id' => '23',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125851455',
                        ),
                    'enabled' => true,
                ),
            867 =>
                array(
                    'id' => '3868',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DAMUDYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125860196',
                        ),
                    'enabled' => true,
                ),
            868 =>
                array(
                    'id' => '3869',
                    'bank_id' => '23',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125860583',
                        ),
                    'enabled' => true,
                ),
            869 =>
                array(
                    'id' => '3870',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHARIATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125860675',
                        ),
                    'enabled' => true,
                ),
            870 =>
                array(
                    'id' => '3871',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALAROA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125870586',
                        ),
                    'enabled' => true,
                ),
            871 =>
                array(
                    'id' => '3872',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125870610',
                        ),
                    'enabled' => true,
                ),
            872 =>
                array(
                    'id' => '3873',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125871093',
                        ),
                    'enabled' => true,
                ),
            873 =>
                array(
                    'id' => '3874',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125871219',
                        ),
                    'enabled' => true,
                ),
            874 =>
                array(
                    'id' => '3875',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BELKUCHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125880226',
                        ),
                    'enabled' => true,
                ),
            875 =>
                array(
                    'id' => '3876',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125881870',
                        ),
                    'enabled' => true,
                ),
            876 =>
                array(
                    'id' => '3877',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125881904',
                        ),
                    'enabled' => true,
                ),
            877 =>
                array(
                    'id' => '3878',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ULLAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125882237',
                        ),
                    'enabled' => true,
                ),
            878 =>
                array(
                    'id' => '3879',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125890553',
                        ),
                    'enabled' => true,
                ),
            879 =>
                array(
                    'id' => '3880',
                    'bank_id' => '23',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125900227',
                        ),
                    'enabled' => true,
                ),
            880 =>
                array(
                    'id' => '3881',
                    'bank_id' => '23',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125900498',
                        ),
                    'enabled' => true,
                ),
            881 =>
                array(
                    'id' => '3882',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125901121',
                        ),
                    'enabled' => true,
                ),
            882 =>
                array(
                    'id' => '3883',
                    'bank_id' => '23',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125910046',
                        ),
                    'enabled' => true,
                ),
            883 =>
                array(
                    'id' => '3884',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125910312',
                        ),
                    'enabled' => true,
                ),
            884 =>
                array(
                    'id' => '3885',
                    'bank_id' => '23',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125910433',
                        ),
                    'enabled' => true,
                ),
            885 =>
                array(
                    'id' => '3886',
                    'bank_id' => '23',
                    'bank_branch_name' => 'DAKSHIN SURMA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125910954',
                        ),
                    'enabled' => true,
                ),
            886 =>
                array(
                    'id' => '3887',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125911540',
                        ),
                    'enabled' => true,
                ),
            887 =>
                array(
                    'id' => '3888',
                    'bank_id' => '23',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125911603',
                        ),
                    'enabled' => true,
                ),
            888 =>
                array(
                    'id' => '3889',
                    'bank_id' => '23',
                    'bank_branch_name' => 'KANAIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125912086',
                        ),
                    'enabled' => true,
                ),
            889 =>
                array(
                    'id' => '3890',
                    'bank_id' => '23',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125912507',
                        ),
                    'enabled' => true,
                ),
            890 =>
                array(
                    'id' => '3891',
                    'bank_id' => '23',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125913551',
                        ),
                    'enabled' => true,
                ),
            891 =>
                array(
                    'id' => '3892',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125914150',
                        ),
                    'enabled' => true,
                ),
            892 =>
                array(
                    'id' => '3893',
                    'bank_id' => '23',
                    'bank_branch_name' => 'ALLENGA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125930118',
                        ),
                    'enabled' => true,
                ),
            893 =>
                array(
                    'id' => '3894',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MADHUPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125931483',
                        ),
                    'enabled' => true,
                ),
            894 =>
                array(
                    'id' => '3895',
                    'bank_id' => '23',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125931517',
                        ),
                    'enabled' => true,
                ),
            895 =>
                array(
                    'id' => '3896',
                    'bank_id' => '23',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125932295',
                        ),
                    'enabled' => true,
                ),
            896 =>
                array(
                    'id' => '3897',
                    'bank_id' => '23',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '125940979',
                        ),
                    'enabled' => true,
                ),
            897 =>
                array(
                    'id' => '3898',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130060286',
                        ),
                    'enabled' => true,
                ),
            898 =>
                array(
                    'id' => '3899',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130090106',
                        ),
                    'enabled' => true,
                ),
            899 =>
                array(
                    'id' => '3900',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130100375',
                        ),
                    'enabled' => true,
                ),
            900 =>
                array(
                    'id' => '3901',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SHERPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130102744',
                        ),
                    'enabled' => true,
                ),
            901 =>
                array(
                    'id' => '3902',
                    'bank_id' => '24',
                    'bank_branch_name' => 'ASHUGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130120113',
                        ),
                    'enabled' => true,
                ),
            902 =>
                array(
                    'id' => '3903',
                    'bank_id' => '24',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130130316',
                        ),
                    'enabled' => true,
                ),
            903 =>
                array(
                    'id' => '3904',
                    'bank_id' => '24',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130130882',
                        ),
                    'enabled' => true,
                ),
            904 =>
                array(
                    'id' => '3905',
                    'bank_id' => '24',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130150138',
                        ),
                    'enabled' => true,
                ),
            905 =>
                array(
                    'id' => '3906',
                    'bank_id' => '24',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130150462',
                        ),
                    'enabled' => true,
                ),
            906 =>
                array(
                    'id' => '3907',
                    'bank_id' => '24',
                    'bank_branch_name' => 'AZADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130150738',
                        ),
                    'enabled' => true,
                ),
            907 =>
                array(
                    'id' => '3908',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130150796',
                        ),
                    'enabled' => true,
                ),
            908 =>
                array(
                    'id' => '3909',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BHATIARY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130151216',
                        ),
                    'enabled' => true,
                ),
            909 =>
                array(
                    'id' => '3910',
                    'bank_id' => '24',
                    'bank_branch_name' => 'DEWAN HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130152444',
                        ),
                    'enabled' => true,
                ),
            910 =>
                array(
                    'id' => '3911',
                    'bank_id' => '24',
                    'bank_branch_name' => 'JUBILEE ROAD(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130153672',
                        ),
                    'enabled' => true,
                ),
            911 =>
                array(
                    'id' => '3912',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130153735',
                        ),
                    'enabled' => true,
                ),
            912 =>
                array(
                    'id' => '3913',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130154271',
                        ),
                    'enabled' => true,
                ),
            913 =>
                array(
                    'id' => '3914',
                    'bank_id' => '24',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130154668',
                        ),
                    'enabled' => true,
                ),
            914 =>
                array(
                    'id' => '3915',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NASIRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130155533',
                        ),
                    'enabled' => true,
                ),
            915 =>
                array(
                    'id' => '3916',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BARURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130190493',
                        ),
                    'enabled' => true,
                ),
            916 =>
                array(
                    'id' => '3917',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BIZRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130190701',
                        ),
                    'enabled' => true,
                ),
            917 =>
                array(
                    'id' => '3918',
                    'bank_id' => '24',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130191155',
                        ),
                    'enabled' => true,
                ),
            918 =>
                array(
                    'id' => '3919',
                    'bank_id' => '24',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130192112',
                        ),
                    'enabled' => true,
                ),
            919 =>
                array(
                    'id' => '3920',
                    'bank_id' => '24',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130192712',
                        ),
                    'enabled' => true,
                ),
            920 =>
                array(
                    'id' => '3921',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NATHERPETUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130193311',
                        ),
                    'enabled' => true,
                ),
            921 =>
                array(
                    'id' => '3922',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SUAGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130194031',
                        ),
                    'enabled' => true,
                ),
            922 =>
                array(
                    'id' => '3923',
                    'bank_id' => '24',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130220163',
                        ),
                    'enabled' => true,
                ),
            923 =>
                array(
                    'id' => '3924',
                    'bank_id' => '24',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130260228',
                        ),
                    'enabled' => true,
                ),
            924 =>
                array(
                    'id' => '3925',
                    'bank_id' => '24',
                    'bank_branch_name' => 'GULSHAN LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130260307',
                        ),
                    'enabled' => true,
                ),
            925 =>
                array(
                    'id' => '3926',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130260431',
                        ),
                    'enabled' => true,
                ),
            926 =>
                array(
                    'id' => '3927',
                    'bank_id' => '24',
                    'bank_branch_name' => 'CHISTIA MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130260794',
                        ),
                    'enabled' => true,
                ),
            927 =>
                array(
                    'id' => '3928',
                    'bank_id' => '24',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130260910',
                        ),
                    'enabled' => true,
                ),
            928 =>
                array(
                    'id' => '3929',
                    'bank_id' => '24',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130261180',
                        ),
                    'enabled' => true,
                ),
            929 =>
                array(
                    'id' => '3930',
                    'bank_id' => '24',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130261335',
                        ),
                    'enabled' => true,
                ),
            930 =>
                array(
                    'id' => '3931',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130261519',
                        ),
                    'enabled' => true,
                ),
            931 =>
                array(
                    'id' => '3932',
                    'bank_id' => '24',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130261722',
                        ),
                    'enabled' => true,
                ),
            932 =>
                array(
                    'id' => '3933',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KALAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130262442',
                        ),
                    'enabled' => true,
                ),
            933 =>
                array(
                    'id' => '3934',
                    'bank_id' => '24',
                    'bank_branch_name' => 'LALMATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130262839',
                        ),
                    'enabled' => true,
                ),
            934 =>
                array(
                    'id' => '3935',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130262989',
                        ),
                    'enabled' => true,
                ),
            935 =>
                array(
                    'id' => '3936',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MIRPUR-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130263104',
                        ),
                    'enabled' => true,
                ),
            936 =>
                array(
                    'id' => '3937',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130263191',
                        ),
                    'enabled' => true,
                ),
            937 =>
                array(
                    'id' => '3938',
                    'bank_id' => '24',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130263704',
                        ),
                    'enabled' => true,
                ),
            938 =>
                array(
                    'id' => '3939',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RAYERBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130263959',
                        ),
                    'enabled' => true,
                ),
            939 =>
                array(
                    'id' => '3940',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130263975',
                        ),
                    'enabled' => true,
                ),
            940 =>
                array(
                    'id' => '3941',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130264095',
                        ),
                    'enabled' => true,
                ),
            941 =>
                array(
                    'id' => '3942',
                    'bank_id' => '24',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130264637',
                        ),
                    'enabled' => true,
                ),
            942 =>
                array(
                    'id' => '3943',
                    'bank_id' => '24',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130270005',
                        ),
                    'enabled' => true,
                ),
            943 =>
                array(
                    'id' => '3944',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KERANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130270092',
                        ),
                    'enabled' => true,
                ),
            944 =>
                array(
                    'id' => '3945',
                    'bank_id' => '24',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130270139',
                        ),
                    'enabled' => true,
                ),
            945 =>
                array(
                    'id' => '3946',
                    'bank_id' => '24',
                    'bank_branch_name' => 'DHOLAIKHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130271846',
                        ),
                    'enabled' => true,
                ),
            946 =>
                array(
                    'id' => '3947',
                    'bank_id' => '24',
                    'bank_branch_name' => 'DILKUSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130271909',
                        ),
                    'enabled' => true,
                ),
            947 =>
                array(
                    'id' => '3948',
                    'bank_id' => '24',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130272324',
                        ),
                    'enabled' => true,
                ),
            948 =>
                array(
                    'id' => '3949',
                    'bank_id' => '24',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130272687',
                        ),
                    'enabled' => true,
                ),
            949 =>
                array(
                    'id' => '3950',
                    'bank_id' => '24',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130272982',
                        ),
                    'enabled' => true,
                ),
            950 =>
                array(
                    'id' => '3951',
                    'bank_id' => '24',
                    'bank_branch_name' => 'JURAIN SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130273323',
                        ),
                    'enabled' => true,
                ),
            951 =>
                array(
                    'id' => '3952',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130273949',
                        ),
                    'enabled' => true,
                ),
            952 =>
                array(
                    'id' => '3953',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130274243',
                        ),
                    'enabled' => true,
                ),
            953 =>
                array(
                    'id' => '3954',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130274427',
                        ),
                    'enabled' => true,
                ),
            954 =>
                array(
                    'id' => '3955',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NAYA BAZAR ISLAMI BANKING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130274843',
                        ),
                    'enabled' => true,
                ),
            955 =>
                array(
                    'id' => '3956',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SHANTINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130276346',
                        ),
                    'enabled' => true,
                ),
            956 =>
                array(
                    'id' => '3957',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SONARGAON ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130276588',
                        ),
                    'enabled' => true,
                ),
            957 =>
                array(
                    'id' => '3958',
                    'bank_id' => '24',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130280679',
                        ),
                    'enabled' => true,
                ),
            958 =>
                array(
                    'id' => '3959',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SETABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130282172',
                        ),
                    'enabled' => true,
                ),
            959 =>
                array(
                    'id' => '3960',
                    'bank_id' => '24',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130290522',
                        ),
                    'enabled' => true,
                ),
            960 =>
                array(
                    'id' => '3961',
                    'bank_id' => '24',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130300520',
                        ),
                    'enabled' => true,
                ),
            961 =>
                array(
                    'id' => '3962',
                    'bank_id' => '24',
                    'bank_branch_name' => 'CHANDRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130330408',
                        ),
                    'enabled' => true,
                ),
            962 =>
                array(
                    'id' => '3963',
                    'bank_id' => '24',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130330558',
                        ),
                    'enabled' => true,
                ),
            963 =>
                array(
                    'id' => '3964',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130330945',
                        ),
                    'enabled' => true,
                ),
            964 =>
                array(
                    'id' => '3965',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MAWNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130331007',
                        ),
                    'enabled' => true,
                ),
            965 =>
                array(
                    'id' => '3966',
                    'bank_id' => '24',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130331636',
                        ),
                    'enabled' => true,
                ),
            966 =>
                array(
                    'id' => '3967',
                    'bank_id' => '24',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130350370',
                        ),
                    'enabled' => true,
                ),
            967 =>
                array(
                    'id' => '3968',
                    'bank_id' => '24',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130410944',
                        ),
                    'enabled' => true,
                ),
            968 =>
                array(
                    'id' => '3969',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130471541',
                        ),
                    'enabled' => true,
                ),
            969 =>
                array(
                    'id' => '3970',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130500946',
                        ),
                    'enabled' => true,
                ),
            970 =>
                array(
                    'id' => '3971',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130510978',
                        ),
                    'enabled' => true,
                ),
            971 =>
                array(
                    'id' => '3972',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MADARIPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130540414',
                        ),
                    'enabled' => true,
                ),
            972 =>
                array(
                    'id' => '3973',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MOULVI BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130581194',
                        ),
                    'enabled' => true,
                ),
            973 =>
                array(
                    'id' => '3974',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BALIGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130590101',
                        ),
                    'enabled' => true,
                ),
            974 =>
                array(
                    'id' => '3975',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BHABER CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130590280',
                        ),
                    'enabled' => true,
                ),
            975 =>
                array(
                    'id' => '3976',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MUNSHIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130591047',
                        ),
                    'enabled' => true,
                ),
            976 =>
                array(
                    'id' => '3977',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130591421',
                        ),
                    'enabled' => true,
                ),
            977 =>
                array(
                    'id' => '3978',
                    'bank_id' => '24',
                    'bank_branch_name' => 'TONGI BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130591542',
                        ),
                    'enabled' => true,
                ),
            978 =>
                array(
                    'id' => '3979',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130611756',
                        ),
                    'enabled' => true,
                ),
            979 =>
                array(
                    'id' => '3980',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130641005',
                        ),
                    'enabled' => true,
                ),
            980 =>
                array(
                    'id' => '3981',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MOHADEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130641092',
                        ),
                    'enabled' => true,
                ),
            981 =>
                array(
                    'id' => '3982',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130641184',
                        ),
                    'enabled' => true,
                ),
            982 =>
                array(
                    'id' => '3983',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NARAYANGANJ LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130670184',
                        ),
                    'enabled' => true,
                ),
            983 =>
                array(
                    'id' => '3984',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130670221',
                        ),
                    'enabled' => true,
                ),
            984 =>
                array(
                    'id' => '3985',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KANCHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130670797',
                        ),
                    'enabled' => true,
                ),
            985 =>
                array(
                    'id' => '3986',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KATCHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130670821',
                        ),
                    'enabled' => true,
                ),
            986 =>
                array(
                    'id' => '3987',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MURAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130671125',
                        ),
                    'enabled' => true,
                ),
            987 =>
                array(
                    'id' => '3988',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130671183',
                        ),
                    'enabled' => true,
                ),
            988 =>
                array(
                    'id' => '3989',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RUPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130671459',
                        ),
                    'enabled' => true,
                ),
            989 =>
                array(
                    'id' => '3990',
                    'bank_id' => '24',
                    'bank_branch_name' => 'TANBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130671783',
                        ),
                    'enabled' => true,
                ),
            990 =>
                array(
                    'id' => '3991',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RUPSHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130674485',
                        ),
                    'enabled' => true,
                ),
            991 =>
                array(
                    'id' => '3992',
                    'bank_id' => '24',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130680679',
                        ),
                    'enabled' => true,
                ),
            992 =>
                array(
                    'id' => '3993',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130691097',
                        ),
                    'enabled' => true,
                ),
            993 =>
                array(
                    'id' => '3994',
                    'bank_id' => '24',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130700267',
                        ),
                    'enabled' => true,
                ),
            994 =>
                array(
                    'id' => '3995',
                    'bank_id' => '24',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130720739',
                        ),
                    'enabled' => true,
                ),
            995 =>
                array(
                    'id' => '3996',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130750259',
                        ),
                    'enabled' => true,
                ),
            996 =>
                array(
                    'id' => '3997',
                    'bank_id' => '24',
                    'bank_branch_name' => 'CHOWMUHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130750341',
                        ),
                    'enabled' => true,
                ),
            997 =>
                array(
                    'id' => '3998',
                    'bank_id' => '24',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130761785',
                        ),
                    'enabled' => true,
                ),
            998 =>
                array(
                    'id' => '3999',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BHAWANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130810344',
                        ),
                    'enabled' => true,
                ),
            999 =>
                array(
                    'id' => '4000',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130811930',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
