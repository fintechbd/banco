<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch4Seeder extends Seeder
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
                'id' => '3001',
                'bank_id' => '16',
                'bank_branch_name' => 'MADANPUR',
                'bank_branch_data' => [
                    'route_no' => '90670974',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '3002',
                'bank_id' => '16',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '90671186',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '3003',
                'bank_id' => '16',
                'bank_branch_name' => 'PAGLA',
                'bank_branch_data' => [
                    'route_no' => '90671302',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '3004',
                'bank_id' => '16',
                'bank_branch_name' => 'SHIMRAIL',
                'bank_branch_data' => [
                    'route_no' => '90671573',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '3005',
                'bank_id' => '16',
                'bank_branch_name' => 'SONARGAON',
                'bank_branch_data' => [
                    'route_no' => '90671694',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '3006',
                'bank_id' => '16',
                'bank_branch_name' => 'BABURHAT',
                'bank_branch_data' => [
                    'route_no' => '90680106',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '3007',
                'bank_id' => '16',
                'bank_branch_name' => 'MONOHARDI',
                'bank_branch_data' => [
                    'route_no' => '90680735',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '3008',
                'bank_id' => '16',
                'bank_branch_name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'route_no' => '90680885',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '3009',
                'bank_id' => '16',
                'bank_branch_name' => 'VELA NAGAR',
                'bank_branch_data' => [
                    'route_no' => '90681392',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '3010',
                'bank_id' => '16',
                'bank_branch_name' => 'NATORE',
                'bank_branch_data' => [
                    'route_no' => '90691090',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '3011',
                'bank_id' => '16',
                'bank_branch_name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '90700257',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '3012',
                'bank_id' => '16',
                'bank_branch_name' => 'NETROKONA',
                'bank_branch_data' => [
                    'route_no' => '90720732',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '3013',
                'bank_id' => '16',
                'bank_branch_name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'route_no' => '90730793',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '3014',
                'bank_id' => '16',
                'bank_branch_name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'route_no' => '90750252',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '3015',
                'bank_id' => '16',
                'bank_branch_name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'route_no' => '90750678',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '3016',
                'bank_id' => '16',
                'bank_branch_name' => 'NOAKHALI',
                'bank_branch_data' => [
                    'route_no' => '90751572',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '3017',
                'bank_id' => '16',
                'bank_branch_name' => 'KASHINATHPUR',
                'bank_branch_data' => [
                    'route_no' => '90761333',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '3018',
                'bank_id' => '16',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'route_no' => '90761788',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '3019',
                'bank_id' => '16',
                'bank_branch_name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'route_no' => '90770553',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '3020',
                'bank_id' => '16',
                'bank_branch_name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'route_no' => '90781092',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '3021',
                'bank_id' => '16',
                'bank_branch_name' => 'PIROJPUR',
                'bank_branch_data' => [
                    'route_no' => '90790762',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '3022',
                'bank_id' => '16',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '90811933',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '3023',
                'bank_id' => '16',
                'bank_branch_name' => 'RAJBARI',
                'bank_branch_data' => [
                    'route_no' => '90820737',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '3024',
                'bank_id' => '16',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'route_no' => '90851456',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '3025',
                'bank_id' => '16',
                'bank_branch_name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'route_no' => '90871094',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '3026',
                'bank_id' => '16',
                'bank_branch_name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'route_no' => '90881871',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '3027',
                'bank_id' => '16',
                'bank_branch_name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'route_no' => '90881905',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '3028',
                'bank_id' => '16',
                'bank_branch_name' => 'CHHATAK',
                'bank_branch_data' => [
                    'route_no' => '90900228',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '3029',
                'bank_id' => '16',
                'bank_branch_name' => 'GOBINDAGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '90900444',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '3030',
                'bank_id' => '16',
                'bank_branch_name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'route_no' => '90901122',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '3031',
                'bank_id' => '16',
                'bank_branch_name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'route_no' => '90910047',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '3032',
                'bank_id' => '16',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '90910313',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '3033',
                'bank_id' => '16',
                'bank_branch_name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'route_no' => '90910434',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '3034',
                'bank_id' => '16',
                'bank_branch_name' => 'DHAKA DAKHIN SME',
                'bank_branch_data' => [
                    'route_no' => '90911309',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '3035',
                'bank_id' => '16',
                'bank_branch_name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '90911541',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '3036',
                'bank_id' => '16',
                'bank_branch_name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'route_no' => '90911604',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '3037',
                'bank_id' => '16',
                'bank_branch_name' => 'SHAHJALAL UPASHSHAR',
                'bank_branch_data' => [
                    'route_no' => '90913257',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '3038',
                'bank_id' => '16',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '90913552',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '3039',
                'bank_id' => '16',
                'bank_branch_name' => 'ELENGA',
                'bank_branch_data' => [
                    'route_no' => '90930827',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '3040',
                'bank_id' => '16',
                'bank_branch_name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'route_no' => '90931518',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '3041',
                'bank_id' => '16',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'route_no' => '90932296',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '3042',
                'bank_id' => '16',
                'bank_branch_name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'route_no' => '90940970',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '3043',
                'bank_id' => '17',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'route_no' => '95060284',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '3044',
                'bank_id' => '17',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'route_no' => '95100373',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '3045',
                'bank_id' => '17',
                'bank_branch_name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'route_no' => '95120432',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '3046',
                'bank_id' => '17',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '95150136',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '3047',
                'bank_id' => '17',
                'bank_branch_name' => 'JAMAL KHAN',
                'bank_branch_data' => [
                    'route_no' => '95150178',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '3048',
                'bank_id' => '17',
                'bank_branch_name' => 'BHATIARY',
                'bank_branch_data' => [
                    'route_no' => '95151214',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '3049',
                'bank_id' => '17',
                'bank_branch_name' => 'CHANDGAON',
                'bank_branch_data' => [
                    'route_no' => '95151485',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '3050',
                'bank_id' => '17',
                'bank_branch_name' => 'C.E.P.Z.',
                'bank_branch_data' => [
                    'route_no' => '95151577',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '3051',
                'bank_id' => '17',
                'bank_branch_name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'route_no' => '95152563',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '3052',
                'bank_id' => '17',
                'bank_branch_name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'route_no' => '95153162',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '3053',
                'bank_id' => '17',
                'bank_branch_name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'route_no' => '95153225',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '3054',
                'bank_id' => '17',
                'bank_branch_name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'route_no' => '95153641',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '3055',
                'bank_id' => '17',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'route_no' => '95154279',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '3056',
                'bank_id' => '17',
                'bank_branch_name' => 'KHULSHI',
                'bank_branch_data' => [
                    'route_no' => '95154361',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '3057',
                'bank_id' => '17',
                'bank_branch_name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'route_no' => '95154666',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '3058',
                'bank_id' => '17',
                'bank_branch_name' => 'MEHADI BAGH',
                'bank_branch_data' => [
                    'route_no' => '95154961',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '3059',
                'bank_id' => '17',
                'bank_branch_name' => 'MURADPUR',
                'bank_branch_data' => [
                    'route_no' => '95155328',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '3060',
                'bank_id' => '17',
                'bank_branch_name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'route_no' => '95155599',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '3061',
                'bank_id' => '17',
                'bank_branch_name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'route_no' => '95155807',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '3062',
                'bank_id' => '17',
                'bank_branch_name' => 'PANCHLAISH',
                'bank_branch_data' => [
                    'route_no' => '95156048',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '3063',
                'bank_id' => '17',
                'bank_branch_name' => 'RAOZAN',
                'bank_branch_data' => [
                    'route_no' => '95156493',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '3064',
                'bank_id' => '17',
                'bank_branch_name' => 'SIRAJUDDOWLA ROAD',
                'bank_branch_data' => [
                    'route_no' => '95157368',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '3065',
                'bank_id' => '17',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'route_no' => '95157513',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '3066',
                'bank_id' => '17',
                'bank_branch_name' => 'COMILLA SME',
                'bank_branch_data' => [
                    'route_no' => '95191166',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '3067',
                'bank_id' => '17',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'route_no' => '95220253',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '3068',
                'bank_id' => '17',
                'bank_branch_name' => 'ASHULIA',
                'bank_branch_data' => [
                    'route_no' => '95260226',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '3069',
                'bank_id' => '17',
                'bank_branch_name' => 'JASHIM UDDIN ROAD',
                'bank_branch_data' => [
                    'route_no' => '95260271',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '3070',
                'bank_id' => '17',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '95260439',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '3071',
                'bank_id' => '17',
                'bank_branch_name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'route_no' => '95260550',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '3072',
                'bank_id' => '17',
                'bank_branch_name' => 'BONOSREE',
                'bank_branch_data' => [
                    'route_no' => '95260721',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '3073',
                'bank_id' => '17',
                'bank_branch_name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'route_no' => '95260918',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '3074',
                'bank_id' => '17',
                'bank_branch_name' => 'DEPZ',
                'bank_branch_data' => [
                    'route_no' => '95261096',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '3075',
                'bank_id' => '17',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '95261188',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '3076',
                'bank_id' => '17',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '95261720',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '3077',
                'bank_id' => '17',
                'bank_branch_name' => 'GULSHAN AVENUE',
                'bank_branch_data' => [
                    'route_no' => '95261733',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '3078',
                'bank_id' => '17',
                'bank_branch_name' => 'GULSHAN NORTH',
                'bank_branch_data' => [
                    'route_no' => '95261904',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '3079',
                'bank_id' => '17',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '95262987',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '3080',
                'bank_id' => '17',
                'bank_branch_name' => 'MIRPUR DAR-US-SALM ROAD',
                'bank_branch_data' => [
                    'route_no' => '95263007',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '3081',
                'bank_id' => '17',
                'bank_branch_name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'route_no' => '95263702',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '3082',
                'bank_id' => '17',
                'bank_branch_name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'route_no' => '95264035',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '3083',
                'bank_id' => '17',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'route_no' => '95264093',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '3084',
                'bank_id' => '17',
                'bank_branch_name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'route_no' => '95264301',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '3085',
                'bank_id' => '17',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '95264635',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '3086',
                'bank_id' => '17',
                'bank_branch_name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'route_no' => '95264693',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '3087',
                'bank_id' => '17',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '95270003',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '3088',
                'bank_id' => '17',
                'bank_branch_name' => 'AZIMPUR',
                'bank_branch_data' => [
                    'route_no' => '95270379',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '3089',
                'bank_id' => '17',
                'bank_branch_name' => 'CHAWK MOGULTULY',
                'bank_branch_data' => [
                    'route_no' => '95271307',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '3090',
                'bank_id' => '17',
                'bank_branch_name' => 'DOHAR',
                'bank_branch_data' => [
                    'route_no' => '95272056',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '3091',
                'bank_id' => '17',
                'bank_branch_name' => 'ENGLISH ROAD',
                'bank_branch_data' => [
                    'route_no' => '95272148',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '3092',
                'bank_id' => '17',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '95273642',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '3093',
                'bank_id' => '17',
                'bank_branch_name' => 'KERANIGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '95273655',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '3094',
                'bank_id' => '17',
                'bank_branch_name' => 'KHILGAON',
                'bank_branch_data' => [
                    'route_no' => '95273671',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '3095',
                'bank_id' => '17',
                'bank_branch_name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'route_no' => '95274188',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '3096',
                'bank_id' => '17',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '95274241',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '3097',
                'bank_id' => '17',
                'bank_branch_name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '95274696',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '3098',
                'bank_id' => '17',
                'bank_branch_name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'route_no' => '95275358',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '3099',
                'bank_id' => '17',
                'bank_branch_name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'route_no' => '95276344',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '3100',
                'bank_id' => '17',
                'bank_branch_name' => 'SONARGAON ROAD',
                'bank_branch_data' => [
                    'route_no' => '95276586',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '3101',
                'bank_id' => '17',
                'bank_branch_name' => 'WARI',
                'bank_branch_data' => [
                    'route_no' => '95277006',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '3102',
                'bank_id' => '17',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'route_no' => '95290520',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '3103',
                'bank_id' => '17',
                'bank_branch_name' => 'FENI SME',
                'bank_branch_data' => [
                    'route_no' => '95300531',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '3104',
                'bank_id' => '17',
                'bank_branch_name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'route_no' => '95330222',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '3105',
                'bank_id' => '17',
                'bank_branch_name' => 'MAWNA',
                'bank_branch_data' => [
                    'route_no' => '95331005',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '3106',
                'bank_id' => '17',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'route_no' => '95410942',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '3107',
                'bank_id' => '17',
                'bank_branch_name' => 'FULBARI GATE',
                'bank_branch_data' => [
                    'route_no' => '95470858',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '3108',
                'bank_id' => '17',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'route_no' => '95471549',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '3109',
                'bank_id' => '17',
                'bank_branch_name' => 'BHAIRAB SME',
                'bank_branch_data' => [
                    'route_no' => '95480206',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '3110',
                'bank_id' => '17',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '95581189',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '3111',
                'bank_id' => '17',
                'bank_branch_name' => 'MYMENSINGH SME',
                'bank_branch_data' => [
                    'route_no' => '95611770',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '3112',
                'bank_id' => '17',
                'bank_branch_name' => 'BHULTA',
                'bank_branch_data' => [
                    'route_no' => '95670229',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '3113',
                'bank_id' => '17',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '95671181',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '3114',
                'bank_id' => '17',
                'bank_branch_name' => 'NARAYANGONJ SME',
                'bank_branch_data' => [
                    'route_no' => '95671202',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '3115',
                'bank_id' => '17',
                'bank_branch_name' => 'PANCHABATI',
                'bank_branch_data' => [
                    'route_no' => '95671381',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '3116',
                'bank_id' => '17',
                'bank_branch_name' => 'SONARGAON',
                'bank_branch_data' => [
                    'route_no' => '95671699',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '3117',
                'bank_id' => '17',
                'bank_branch_name' => 'MADHABDI SME',
                'bank_branch_data' => [
                    'route_no' => '95680680',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '3118',
                'bank_id' => '17',
                'bank_branch_name' => 'MAIJDEE',
                'bank_branch_data' => [
                    'route_no' => '95750060',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '3119',
                'bank_id' => '17',
                'bank_branch_name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'route_no' => '95750673',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '3120',
                'bank_id' => '17',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '95811938',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '3121',
                'bank_id' => '17',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'route_no' => '95851451',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '3122',
                'bank_id' => '17',
                'bank_branch_name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'route_no' => '95910439',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '3123',
                'bank_id' => '17',
                'bank_branch_name' => 'CHOWHATTA',
                'bank_branch_data' => [
                    'route_no' => '95910855',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '3124',
                'bank_id' => '17',
                'bank_branch_name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'route_no' => '95911362',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '3125',
                'bank_id' => '17',
                'bank_branch_name' => 'SYLHET UPASHAHAR',
                'bank_branch_data' => [
                    'route_no' => '95913731',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '3126',
                'bank_id' => '17',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'route_no' => '95932291',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '3127',
                'bank_id' => '18',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'route_no' => '100060287',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '3128',
                'bank_id' => '18',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'route_no' => '100100376',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '3129',
                'bank_id' => '18',
                'bank_branch_name' => 'SARIAKANDI',
                'bank_branch_data' => [
                    'route_no' => '100102479',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '3130',
                'bank_id' => '18',
                'bank_branch_name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'route_no' => '100120101',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '3131',
                'bank_id' => '18',
                'bank_branch_name' => 'NARAYANPUR',
                'bank_branch_data' => [
                    'route_no' => '100131453',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '3132',
                'bank_id' => '18',
                'bank_branch_name' => 'THAKUR BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '100132344',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '3133',
                'bank_id' => '18',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '100150139',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '3134',
                'bank_id' => '18',
                'bank_branch_name' => 'RAOZAN PAHARTALI',
                'bank_branch_data' => [
                    'route_no' => '100150500',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '3135',
                'bank_id' => '18',
                'bank_branch_name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'route_no' => '100150797',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '3136',
                'bank_id' => '18',
                'bank_branch_name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'route_no' => '100151488',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '3137',
                'bank_id' => '18',
                'bank_branch_name' => 'SHAIKH MUJIB ROAD',
                'bank_branch_data' => [
                    'route_no' => '100152445',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '3138',
                'bank_id' => '18',
                'bank_branch_name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'route_no' => '100152566',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '3139',
                'bank_id' => '18',
                'bank_branch_name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'route_no' => '100153165',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '3140',
                'bank_id' => '18',
                'bank_branch_name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'route_no' => '100153644',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '3141',
                'bank_id' => '18',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'route_no' => '100154272',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '3142',
                'bank_id' => '18',
                'bank_branch_name' => 'KHULSHI',
                'bank_branch_data' => [
                    'route_no' => '100154364',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '3143',
                'bank_id' => '18',
                'bank_branch_name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'route_no' => '100155592',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '3144',
                'bank_id' => '18',
                'bank_branch_name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'route_no' => '100155921',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '3145',
                'bank_id' => '18',
                'bank_branch_name' => 'PANCHLAISH',
                'bank_branch_data' => [
                    'route_no' => '100156041',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '3146',
                'bank_id' => '18',
                'bank_branch_name' => 'SANDWIP',
                'bank_branch_data' => [
                    'route_no' => '100156917',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '3147',
                'bank_id' => '18',
                'bank_branch_name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'route_no' => '100157390',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '3148',
                'bank_id' => '18',
                'bank_branch_name' => 'BAGMARA',
                'bank_branch_data' => [
                    'route_no' => '100190173',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '3149',
                'bank_id' => '18',
                'bank_branch_name' => 'DOLLAI NAWABPUR',
                'bank_branch_data' => [
                    'route_no' => '100190331',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '3150',
                'bank_id' => '18',
                'bank_branch_name' => 'RAJAPUR',
                'bank_branch_data' => [
                    'route_no' => '100190449',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '3151',
                'bank_id' => '18',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'route_no' => '100191156',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '3152',
                'bank_id' => '18',
                'bank_branch_name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'route_no' => '100192113',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '3153',
                'bank_id' => '18',
                'bank_branch_name' => 'LAKSAM',
                'bank_branch_data' => [
                    'route_no' => '100192713',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '3154',
                'bank_id' => '18',
                'bank_branch_name' => 'MUDAFARGANJ',
                'bank_branch_data' => [
                    'route_no' => '100193138',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '3155',
                'bank_id' => '18',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100220256',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '3156',
                'bank_id' => '18',
                'bank_branch_name' => 'GARIB-E-NEWAZ',
                'bank_branch_data' => [
                    'route_no' => '100260111',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '3157',
                'bank_id' => '18',
                'bank_branch_name' => 'ASHULIA',
                'bank_branch_data' => [
                    'route_no' => '100260229',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '3158',
                'bank_id' => '18',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '100260432',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '3159',
                'bank_id' => '18',
                'bank_branch_name' => 'BASHUNDHARA ROAD',
                'bank_branch_data' => [
                    'route_no' => '100260616',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '3160',
                'bank_id' => '18',
                'bank_branch_name' => 'MOHILA',
                'bank_branch_data' => [
                    'route_no' => '100260661',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '3161',
                'bank_id' => '18',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '100261181',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '3162',
                'bank_id' => '18',
                'bank_branch_name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'route_no' => '100261336',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '3163',
                'bank_id' => '18',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '100261723',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '3164',
                'bank_id' => '18',
                'bank_branch_name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'route_no' => '100262056',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '3165',
                'bank_id' => '18',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100262535',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '3166',
                'bank_id' => '18',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '100262980',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '3167',
                'bank_id' => '18',
                'bank_branch_name' => 'NAYARHAT',
                'bank_branch_data' => [
                    'route_no' => '100263468',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '3168',
                'bank_id' => '18',
                'bank_branch_name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'route_no' => '100263613',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '3169',
                'bank_id' => '18',
                'bank_branch_name' => 'RING ROAD',
                'bank_branch_data' => [
                    'route_no' => '100263976',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '3170',
                'bank_id' => '18',
                'bank_branch_name' => 'SATARKUL',
                'bank_branch_data' => [
                    'route_no' => '100264025',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '3171',
                'bank_id' => '18',
                'bank_branch_name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'route_no' => '100264038',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '3172',
                'bank_id' => '18',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'route_no' => '100264096',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '3173',
                'bank_id' => '18',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '100264638',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '3174',
                'bank_id' => '18',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '100270006',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '3175',
                'bank_id' => '18',
                'bank_branch_name' => 'RAYER BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100270419',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '3176',
                'bank_id' => '18',
                'bank_branch_name' => 'DANIA',
                'bank_branch_data' => [
                    'route_no' => '100271421',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '3177',
                'bank_id' => '18',
                'bank_branch_name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'route_no' => '100272688',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '3178',
                'bank_id' => '18',
                'bank_branch_name' => 'HEAD OFFICE CORPORATE',
                'bank_branch_data' => [
                    'route_no' => '100272691',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '3179',
                'bank_id' => '18',
                'bank_branch_name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'route_no' => '100272804',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '3180',
                'bank_id' => '18',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'route_no' => '100272983',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '3181',
                'bank_id' => '18',
                'bank_branch_name' => 'KERANIGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '100273658',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '3182',
                'bank_id' => '18',
                'bank_branch_name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'route_no' => '100273940',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '3183',
                'bank_id' => '18',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '100274244',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '3184',
                'bank_id' => '18',
                'bank_branch_name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'route_no' => '100274723',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '3185',
                'bank_id' => '18',
                'bank_branch_name' => 'NEW ESKATON',
                'bank_branch_data' => [
                    'route_no' => '100275027',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '3186',
                'bank_id' => '18',
                'bank_branch_name' => 'PALTAN',
                'bank_branch_data' => [
                    'route_no' => '100275201',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '3187',
                'bank_id' => '18',
                'bank_branch_name' => 'RAJUK',
                'bank_branch_data' => [
                    'route_no' => '100275593',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '3188',
                'bank_id' => '18',
                'bank_branch_name' => 'SANTINAGAR',
                'bank_branch_data' => [
                    'route_no' => '100276013',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '3189',
                'bank_id' => '18',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'route_no' => '100280670',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '3190',
                'bank_id' => '18',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'route_no' => '100290523',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '3191',
                'bank_id' => '18',
                'bank_branch_name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'route_no' => '100300318',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '3192',
                'bank_id' => '18',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'route_no' => '100300521',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '3193',
                'bank_id' => '18',
                'bank_branch_name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'route_no' => '100330120',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '3194',
                'bank_id' => '18',
                'bank_branch_name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100330225',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '3195',
                'bank_id' => '18',
                'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'route_no' => '100330559',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '3196',
                'bank_id' => '18',
                'bank_branch_name' => 'MAONA CHAWRASTA',
                'bank_branch_data' => [
                    'route_no' => '100330975',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '3197',
                'bank_id' => '18',
                'bank_branch_name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'route_no' => '100351091',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '3198',
                'bank_id' => '18',
                'bank_branch_name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'route_no' => '100361094',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '3199',
                'bank_id' => '18',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'route_no' => '100410945',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '3200',
                'bank_id' => '18',
                'bank_branch_name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'route_no' => '100420319',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '3201',
                'bank_id' => '18',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'route_no' => '100471542',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '3202',
                'bank_id' => '18',
                'bank_branch_name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'route_no' => '100480670',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '3203',
                'bank_id' => '18',
                'bank_branch_name' => 'MITAMAIN',
                'bank_branch_data' => [
                    'route_no' => '100480946',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '3204',
                'bank_id' => '18',
                'bank_branch_name' => 'PAKUNDIA',
                'bank_branch_data' => [
                    'route_no' => '100481066',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '3205',
                'bank_id' => '18',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'route_no' => '100500947',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '3206',
                'bank_id' => '18',
                'bank_branch_name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'route_no' => '100540765',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '3207',
                'bank_id' => '18',
                'bank_branch_name' => 'MAGURA',
                'bank_branch_data' => [
                    'route_no' => '100550555',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '3208',
                'bank_id' => '18',
                'bank_branch_name' => 'BALIRTEK BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100560103',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '3209',
                'bank_id' => '18',
                'bank_branch_name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'route_no' => '100560611',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '3210',
                'bank_id' => '18',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100581182',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '3211',
                'bank_id' => '18',
                'bank_branch_name' => 'MUKTARPUR',
                'bank_branch_data' => [
                    'route_no' => '100591006',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '3212',
                'bank_id' => '18',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'route_no' => '100611757',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '3213',
                'bank_id' => '18',
                'bank_branch_name' => 'SEEDSTORE BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100612093',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '3214',
                'bank_id' => '18',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'route_no' => '100641185',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '3215',
                'bank_id' => '18',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '100671184',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '3216',
                'bank_id' => '18',
                'bank_branch_name' => 'PANCHABATI',
                'bank_branch_data' => [
                    'route_no' => '100671384',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '3217',
                'bank_id' => '18',
                'bank_branch_name' => 'SHIMRAIL',
                'bank_branch_data' => [
                    'route_no' => '100671571',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '3218',
                'bank_id' => '18',
                'bank_branch_name' => 'SONARGAON SME',
                'bank_branch_data' => [
                    'route_no' => '100671700',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '3219',
                'bank_id' => '18',
                'bank_branch_name' => 'MORJAL',
                'bank_branch_data' => [
                    'route_no' => '100680175',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '3220',
                'bank_id' => '18',
                'bank_branch_name' => 'MADHABDI',
                'bank_branch_data' => [
                    'route_no' => '100680670',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '3221',
                'bank_id' => '18',
                'bank_branch_name' => 'DATTAPARA',
                'bank_branch_data' => [
                    'route_no' => '100690152',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '3222',
                'bank_id' => '18',
                'bank_branch_name' => 'LALPUR',
                'bank_branch_data' => [
                    'route_no' => '100690910',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '3223',
                'bank_id' => '18',
                'bank_branch_name' => 'CHAPAINAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '100700255',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '3224',
                'bank_id' => '18',
                'bank_branch_name' => 'NETROKONA',
                'bank_branch_data' => [
                    'route_no' => '100720730',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '3225',
                'bank_id' => '18',
                'bank_branch_name' => 'CHARBATA KHASHERHAT',
                'bank_branch_data' => [
                    'route_no' => '100750184',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '3226',
                'bank_id' => '18',
                'bank_branch_name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'route_no' => '100750250',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '3227',
                'bank_id' => '18',
                'bank_branch_name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'route_no' => '100750676',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '3228',
                'bank_id' => '18',
                'bank_branch_name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'route_no' => '100752232',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '3229',
                'bank_id' => '18',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'route_no' => '100761786',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '3230',
                'bank_id' => '18',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '100811931',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '3231',
                'bank_id' => '18',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'route_no' => '100851454',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '3232',
                'bank_id' => '18',
                'bank_branch_name' => 'NARIA',
                'bank_branch_data' => [
                    'route_no' => '100860582',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '3233',
                'bank_id' => '18',
                'bank_branch_name' => 'SIRAJGANJ',
                'bank_branch_data' => [
                    'route_no' => '100880054',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '3234',
                'bank_id' => '18',
                'bank_branch_name' => 'DHOPADIGHIRPAR',
                'bank_branch_data' => [
                    'route_no' => '100910058',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '3235',
                'bank_id' => '18',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100910311',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '3236',
                'bank_id' => '18',
                'bank_branch_name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'route_no' => '100910432',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '3237',
                'bank_id' => '18',
                'bank_branch_name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'route_no' => '100911365',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '3238',
                'bank_id' => '18',
                'bank_branch_name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '100911549',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '3239',
                'bank_id' => '18',
                'bank_branch_name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'route_no' => '100911602',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '3240',
                'bank_id' => '18',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '100913550',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '3241',
                'bank_id' => '18',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'route_no' => '100932294',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '3242',
                'bank_id' => '19',
                'bank_branch_name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'route_no' => '105010074',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '3243',
                'bank_id' => '19',
                'bank_branch_name' => 'FAKIRHAT',
                'bank_branch_data' => [
                    'route_no' => '105010461',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '3244',
                'bank_id' => '19',
                'bank_branch_name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'route_no' => '105011031',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '3245',
                'bank_id' => '19',
                'bank_branch_name' => 'BARGUNA',
                'bank_branch_data' => [
                    'route_no' => '105040136',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '3246',
                'bank_id' => '19',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'route_no' => '105060282',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '3247',
                'bank_id' => '19',
                'bank_branch_name' => 'WAZIRPUR',
                'bank_branch_data' => [
                    'route_no' => '105062293',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '3248',
                'bank_id' => '19',
                'bank_branch_name' => 'BHOLA',
                'bank_branch_data' => [
                    'route_no' => '105090102',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '3249',
                'bank_id' => '19',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'route_no' => '105100371',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '3250',
                'bank_id' => '19',
                'bank_branch_name' => 'TANTAR',
                'bank_branch_data' => [
                    'route_no' => '105120122',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '3251',
                'bank_id' => '19',
                'bank_branch_name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'route_no' => '105120430',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '3252',
                'bank_id' => '19',
                'bank_branch_name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'route_no' => '105130312',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '3253',
                'bank_id' => '19',
                'bank_branch_name' => 'PAHARTALI CHOUMOHONI',
                'bank_branch_data' => [
                    'route_no' => '105150068',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '3254',
                'bank_id' => '19',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '105150134',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '3255',
                'bank_id' => '19',
                'bank_branch_name' => 'TOKIR HAT',
                'bank_branch_data' => [
                    'route_no' => '105150350',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '3256',
                'bank_id' => '19',
                'bank_branch_name' => 'KORERHAT',
                'bank_branch_data' => [
                    'route_no' => '105150442',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '3257',
                'bank_id' => '19',
                'bank_branch_name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'route_no' => '105150468',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '3258',
                'bank_id' => '19',
                'bank_branch_name' => 'FATEYABAD',
                'bank_branch_data' => [
                    'route_no' => '105150484',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '3259',
                'bank_id' => '19',
                'bank_branch_name' => 'RAHATTARPUL',
                'bank_branch_data' => [
                    'route_no' => '105150639',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '3260',
                'bank_id' => '19',
                'bank_branch_name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'route_no' => '105150792',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '3261',
                'bank_id' => '19',
                'bank_branch_name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'route_no' => '105150947',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '3262',
                'bank_id' => '19',
                'bank_branch_name' => 'BASHKHALI',
                'bank_branch_data' => [
                    'route_no' => '105150976',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '3263',
                'bank_id' => '19',
                'bank_branch_name' => 'MOHRA SME',
                'bank_branch_data' => [
                    'route_no' => '105151238',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '3264',
                'bank_id' => '19',
                'bank_branch_name' => 'PRABARTAK MORE',
                'bank_branch_data' => [
                    'route_no' => '105151391',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '3265',
                'bank_id' => '19',
                'bank_branch_name' => 'CHANDANAISH',
                'bank_branch_data' => [
                    'route_no' => '105151812',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '3266',
                'bank_id' => '19',
                'bank_branch_name' => 'CHAWK BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '105151959',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '3267',
                'bank_id' => '19',
                'bank_branch_name' => 'CHOCORIA',
                'bank_branch_data' => [
                    'route_no' => '105152161',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '3268',
                'bank_id' => '19',
                'bank_branch_name' => 'DOVASHI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105152574',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '3269',
                'bank_id' => '19',
                'bank_branch_name' => 'EIDGAON',
                'bank_branch_data' => [
                    'route_no' => '105152637',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '3270',
                'bank_id' => '19',
                'bank_branch_name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'route_no' => '105153160',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '3271',
                'bank_id' => '19',
                'bank_branch_name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'route_no' => '105153223',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '3272',
                'bank_id' => '19',
                'bank_branch_name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'route_no' => '105153649',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '3273',
                'bank_id' => '19',
                'bank_branch_name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'route_no' => '105153731',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '3274',
                'bank_id' => '19',
                'bank_branch_name' => 'KATIRHAT',
                'bank_branch_data' => [
                    'route_no' => '105154127',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '3275',
                'bank_id' => '19',
                'bank_branch_name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'route_no' => '105154185',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '3276',
                'bank_id' => '19',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'route_no' => '105154277',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '3277',
                'bank_id' => '19',
                'bank_branch_name' => 'KUMIRA',
                'bank_branch_data' => [
                    'route_no' => '105154451',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '3278',
                'bank_id' => '19',
                'bank_branch_name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'route_no' => '105154664',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '3279',
                'bank_id' => '19',
                'bank_branch_name' => 'MIRZAKHIL',
                'bank_branch_data' => [
                    'route_no' => '105155089',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '3280',
                'bank_id' => '19',
                'bank_branch_name' => 'MOHILA',
                'bank_branch_data' => [
                    'route_no' => '105155247',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '3281',
                'bank_id' => '19',
                'bank_branch_name' => 'NAZIR HAT SME',
                'bank_branch_data' => [
                    'route_no' => '105155605',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '3282',
                'bank_id' => '19',
                'bank_branch_name' => 'NAZU MEA HAT',
                'bank_branch_data' => [
                    'route_no' => '105155621',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '3283',
                'bank_id' => '19',
                'bank_branch_name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'route_no' => '105155926',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '3284',
                'bank_id' => '19',
                'bank_branch_name' => 'PANCHLAISH',
                'bank_branch_data' => [
                    'route_no' => '105156046',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '3285',
                'bank_id' => '19',
                'bank_branch_name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'route_no' => '105156138',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '3286',
                'bank_id' => '19',
                'bank_branch_name' => 'PATIYA',
                'bank_branch_data' => [
                    'route_no' => '105156167',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '3287',
                'bank_id' => '19',
                'bank_branch_name' => 'PATIYA MOHILA',
                'bank_branch_data' => [
                    'route_no' => '105156183',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '3288',
                'bank_id' => '19',
                'bank_branch_name' => 'RANIRHAT SME',
                'bank_branch_data' => [
                    'route_no' => '105156475',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '3289',
                'bank_id' => '19',
                'bank_branch_name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'route_no' => '105156738',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '3290',
                'bank_id' => '19',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'route_no' => '105157511',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '3291',
                'bank_id' => '19',
                'bank_branch_name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'route_no' => '105180191',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '3292',
                'bank_id' => '19',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'route_no' => '105191151',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '3293',
                'bank_id' => '19',
                'bank_branch_name' => 'DHORKORA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105191793',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '3294',
                'bank_id' => '19',
                'bank_branch_name' => 'HOMNA',
                'bank_branch_data' => [
                    'route_no' => '105192239',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '3295',
                'bank_id' => '19',
                'bank_branch_name' => 'MADHAYA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105192800',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '3296',
                'bank_id' => '19',
                'bank_branch_name' => 'COURT BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105220222',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '3297',
                'bank_id' => '19',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105220251',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '3298',
                'bank_id' => '19',
                'bank_branch_name' => 'HANILA',
                'bank_branch_data' => [
                    'route_no' => '105220493',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '3299',
                'bank_id' => '19',
                'bank_branch_name' => 'PEKUYA',
                'bank_branch_data' => [
                    'route_no' => '105220822',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '3300',
                'bank_id' => '19',
                'bank_branch_name' => 'RAMU',
                'bank_branch_data' => [
                    'route_no' => '105220851',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '3301',
                'bank_id' => '19',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '105260437',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '3302',
                'bank_id' => '19',
                'bank_branch_name' => 'RANABHOLA',
                'bank_branch_data' => [
                    'route_no' => '105260482',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '3303',
                'bank_id' => '19',
                'bank_branch_name' => 'JOYNAL MARKET DOKKHIN KHAN',
                'bank_branch_data' => [
                    'route_no' => '105260532',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '3304',
                'bank_id' => '19',
                'bank_branch_name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'route_no' => '105260558',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '3305',
                'bank_id' => '19',
                'bank_branch_name' => 'BONOSREE',
                'bank_branch_data' => [
                    'route_no' => '105260729',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '3306',
                'bank_id' => '19',
                'bank_branch_name' => 'CITY UNIVERSITY',
                'bank_branch_data' => [
                    'route_no' => '105260808',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '3307',
                'bank_id' => '19',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '105261186',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '3308',
                'bank_id' => '19',
                'bank_branch_name' => 'AZAMPUR',
                'bank_branch_data' => [
                    'route_no' => '105261252',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '3309',
                'bank_id' => '19',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '105261728',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '3310',
                'bank_id' => '19',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105262530',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '3311',
                'bank_id' => '19',
                'bank_branch_name' => 'KURIL BISHWA ROAD',
                'bank_branch_data' => [
                    'route_no' => '105262635',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '3312',
                'bank_id' => '19',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '105262985',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '3313',
                'bank_id' => '19',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'route_no' => '105263197',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '3314',
                'bank_id' => '19',
                'bank_branch_name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'route_no' => '105263289',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '3315',
                'bank_id' => '19',
                'bank_branch_name' => 'RAYER BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105263942',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '3316',
                'bank_id' => '19',
                'bank_branch_name' => 'RING ROAD',
                'bank_branch_data' => [
                    'route_no' => '105263971',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '3317',
                'bank_id' => '19',
                'bank_branch_name' => 'RUPNAGAR',
                'bank_branch_data' => [
                    'route_no' => '105264017',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '3318',
                'bank_id' => '19',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'route_no' => '105264091',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '3319',
                'bank_id' => '19',
                'bank_branch_name' => 'SENANIBASH',
                'bank_branch_data' => [
                    'route_no' => '105264196',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '3320',
                'bank_id' => '19',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '105264633',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '3321',
                'bank_id' => '19',
                'bank_branch_name' => 'ZIRABO',
                'bank_branch_data' => [
                    'route_no' => '105264817',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '3322',
                'bank_id' => '19',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '105270001',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '3323',
                'bank_id' => '19',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '105270098',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '3324',
                'bank_id' => '19',
                'bank_branch_name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'route_no' => '105270885',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '3325',
                'bank_id' => '19',
                'bank_branch_name' => 'BISWA ROAD',
                'bank_branch_data' => [
                    'route_no' => '105271121',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '3326',
                'bank_id' => '19',
                'bank_branch_name' => 'DANIA',
                'bank_branch_data' => [
                    'route_no' => '105271426',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '3327',
                'bank_id' => '19',
                'bank_branch_name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'route_no' => '105271905',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '3328',
                'bank_id' => '19',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'route_no' => '105272988',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '3329',
                'bank_id' => '19',
                'bank_branch_name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'route_no' => '105273374',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '3330',
                'bank_id' => '19',
                'bank_branch_name' => 'KONAPARA',
                'bank_branch_data' => [
                    'route_no' => '105273745',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '3331',
                'bank_id' => '19',
                'bank_branch_name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'route_no' => '105273945',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '3332',
                'bank_id' => '19',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '105274249',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '3333',
                'bank_id' => '19',
                'bank_branch_name' => 'MUKSUDPUR',
                'bank_branch_data' => [
                    'route_no' => '105274481',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '3334',
                'bank_id' => '19',
                'bank_branch_name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '105274694',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '3335',
                'bank_id' => '19',
                'bank_branch_name' => 'POSTAGOLA',
                'bank_branch_data' => [
                    'route_no' => '105275327',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '3336',
                'bank_id' => '19',
                'bank_branch_name' => 'TOPKHANA ROAD',
                'bank_branch_data' => [
                    'route_no' => '105276739',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '3337',
                'bank_id' => '19',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'route_no' => '105280675',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '3338',
                'bank_id' => '19',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'route_no' => '105290528',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '3339',
                'bank_id' => '19',
                'bank_branch_name' => 'BAKTER MUNSHI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105300092',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '3340',
                'bank_id' => '19',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'route_no' => '105300526',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '3341',
                'bank_id' => '19',
                'bank_branch_name' => 'FULGAZI',
                'bank_branch_data' => [
                    'route_no' => '105300618',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '3342',
                'bank_id' => '19',
                'bank_branch_name' => 'LASKARHAT',
                'bank_branch_data' => [
                    'route_no' => '105300971',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '3343',
                'bank_id' => '19',
                'bank_branch_name' => 'COLLEGE GATE',
                'bank_branch_data' => [
                    'route_no' => '105330417',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '3344',
                'bank_id' => '19',
                'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'route_no' => '105330554',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '3345',
                'bank_id' => '19',
                'bank_branch_name' => 'SHAFIPUR',
                'bank_branch_data' => [
                    'route_no' => '105331429',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '3346',
                'bank_id' => '19',
                'bank_branch_name' => 'SREEPUR',
                'bank_branch_data' => [
                    'route_no' => '105331487',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '3347',
                'bank_id' => '19',
                'bank_branch_name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'route_no' => '105350376',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '3348',
                'bank_id' => '19',
                'bank_branch_name' => 'BAGACHARA',
                'bank_branch_data' => [
                    'route_no' => '105410108',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '3349',
                'bank_id' => '19',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'route_no' => '105410940',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '3350',
                'bank_id' => '19',
                'bank_branch_name' => 'KESHABPUR',
                'bank_branch_data' => [
                    'route_no' => '105411215',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '3351',
                'bank_id' => '19',
                'bank_branch_name' => 'KHAJURA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105411257',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '3352',
                'bank_id' => '19',
                'bank_branch_name' => 'NAVARAN',
                'bank_branch_data' => [
                    'route_no' => '105411602',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '3353',
                'bank_id' => '19',
                'bank_branch_name' => 'BARO BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105440073',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '3354',
                'bank_id' => '19',
                'bank_branch_name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'route_no' => '105440644',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '3355',
                'bank_id' => '19',
                'bank_branch_name' => 'FULTALA',
                'bank_branch_data' => [
                    'route_no' => '105470872',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '3356',
                'bank_id' => '19',
                'bank_branch_name' => 'KAPILMUNI',
                'bank_branch_data' => [
                    'route_no' => '105471271',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '3357',
                'bank_id' => '19',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'route_no' => '105471547',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '3358',
                'bank_id' => '19',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'route_no' => '105500942',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '3359',
                'bank_id' => '19',
                'bank_branch_name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'route_no' => '105510732',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '3360',
                'bank_id' => '19',
                'bank_branch_name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'route_no' => '105511036',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '3361',
                'bank_id' => '19',
                'bank_branch_name' => 'PANCHOR',
                'bank_branch_data' => [
                    'route_no' => '105540052',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '3362',
                'bank_id' => '19',
                'bank_branch_name' => 'MAGURA',
                'bank_branch_data' => [
                    'route_no' => '105550550',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '3363',
                'bank_id' => '19',
                'bank_branch_name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'route_no' => '105560616',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '3364',
                'bank_id' => '19',
                'bank_branch_name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'route_no' => '105570372',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '3365',
                'bank_id' => '19',
                'bank_branch_name' => 'JURI',
                'bank_branch_data' => [
                    'route_no' => '105580670',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '3366',
                'bank_id' => '19',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105581187',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '3367',
                'bank_id' => '19',
                'bank_branch_name' => 'BALIGAON-TONGIBARI',
                'bank_branch_data' => [
                    'route_no' => '105591548',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '3368',
                'bank_id' => '19',
                'bank_branch_name' => 'BHALUKA',
                'bank_branch_data' => [
                    'route_no' => '105610311',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '3369',
                'bank_id' => '19',
                'bank_branch_name' => 'JAMIDARIA MASTER BARI',
                'bank_branch_data' => [
                    'route_no' => '105611460',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '3370',
                'bank_id' => '19',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'route_no' => '105611752',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '3371',
                'bank_id' => '19',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'route_no' => '105641180',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '3372',
                'bank_id' => '19',
                'bank_branch_name' => 'LOHAGARA SME',
                'bank_branch_data' => [
                    'route_no' => '105650476',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '3373',
                'bank_id' => '19',
                'bank_branch_name' => 'NARAIL',
                'bank_branch_data' => [
                    'route_no' => '105650647',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '3374',
                'bank_id' => '19',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '105671189',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '3375',
                'bank_id' => '19',
                'bank_branch_name' => 'MADHABDI, SME/KRISHI',
                'bank_branch_data' => [
                    'route_no' => '105680688',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '3376',
                'bank_id' => '19',
                'bank_branch_name' => 'DHUPIL BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105690081',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '3377',
                'bank_id' => '19',
                'bank_branch_name' => 'NATORE',
                'bank_branch_data' => [
                    'route_no' => '105691093',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '3378',
                'bank_id' => '19',
                'bank_branch_name' => 'KANSAT',
                'bank_branch_data' => [
                    'route_no' => '105700526',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '3379',
                'bank_id' => '19',
                'bank_branch_name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'route_no' => '105730796',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '3380',
                'bank_id' => '19',
                'bank_branch_name' => 'CHOWDHURYHAT',
                'bank_branch_data' => [
                    'route_no' => '105750705',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '3381',
                'bank_id' => '19',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'route_no' => '105761781',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '3382',
                'bank_id' => '19',
                'bank_branch_name' => 'BAUPHAL',
                'bank_branch_data' => [
                    'route_no' => '105780191',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '3383',
                'bank_id' => '19',
                'bank_branch_name' => 'GALACHIPA',
                'bank_branch_data' => [
                    'route_no' => '105780496',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '3384',
                'bank_id' => '19',
                'bank_branch_name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'route_no' => '105781095',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '3385',
                'bank_id' => '19',
                'bank_branch_name' => 'SWARUPKATI',
                'bank_branch_data' => [
                    'route_no' => '105790978',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '3386',
                'bank_id' => '19',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '105811936',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '3387',
                'bank_id' => '19',
                'bank_branch_name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'route_no' => '105840523',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '3388',
                'bank_id' => '19',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'route_no' => '105851459',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '3389',
                'bank_id' => '19',
                'bank_branch_name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'route_no' => '105860190',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '3390',
                'bank_id' => '19',
                'bank_branch_name' => 'NARIA',
                'bank_branch_data' => [
                    'route_no' => '105860587',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '3391',
                'bank_id' => '19',
                'bank_branch_name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'route_no' => '105870614',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '3392',
                'bank_id' => '19',
                'bank_branch_name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'route_no' => '105871097',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '3393',
                'bank_id' => '19',
                'bank_branch_name' => 'SHYAM NAGAR',
                'bank_branch_data' => [
                    'route_no' => '105871213',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '3394',
                'bank_id' => '19',
                'bank_branch_name' => 'SIRAJGANJ',
                'bank_branch_data' => [
                    'route_no' => '105880059',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '3395',
                'bank_id' => '19',
                'bank_branch_name' => 'CHHATAK',
                'bank_branch_data' => [
                    'route_no' => '105900221',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '3396',
                'bank_id' => '19',
                'bank_branch_name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'route_no' => '105900434',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '3397',
                'bank_id' => '19',
                'bank_branch_name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'route_no' => '105910079',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '3398',
                'bank_id' => '19',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '105910316',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '3399',
                'bank_id' => '19',
                'bank_branch_name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'route_no' => '105910437',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '3400',
                'bank_id' => '19',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '105913555',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '3401',
                'bank_id' => '19',
                'bank_branch_name' => 'TALTALA',
                'bank_branch_data' => [
                    'route_no' => '105913850',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '3402',
                'bank_id' => '19',
                'bank_branch_name' => 'BHUANPUR',
                'bank_branch_data' => [
                    'route_no' => '105930462',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '3403',
                'bank_id' => '19',
                'bank_branch_name' => 'HAMIDPUR',
                'bank_branch_data' => [
                    'route_no' => '105931090',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '3404',
                'bank_id' => '19',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'route_no' => '105932299',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '3405',
                'bank_id' => '20',
                'bank_branch_name' => 'LALDIGHI EAST',
                'bank_branch_data' => [
                    'route_no' => '110154541',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '3406',
                'bank_id' => '20',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '110261726',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '3407',
                'bank_id' => '20',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'route_no' => '110262538',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '3408',
                'bank_id' => '20',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '110264631',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '3409',
                'bank_id' => '20',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '110270009',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '3410',
                'bank_id' => '20',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '110274247',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '3411',
                'bank_id' => '20',
                'bank_branch_name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '110274818',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '3412',
                'bank_id' => '20',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '110913553',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '3413',
                'bank_id' => '21',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '115150137',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '3414',
                'bank_id' => '21',
                'bank_branch_name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'route_no' => '115151965',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '3415',
                'bank_id' => '21',
                'bank_branch_name' => 'GEC',
                'bank_branch_data' => [
                    'route_no' => '115152951',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '3416',
                'bank_id' => '21',
                'bank_branch_name' => 'AMANAH',
                'bank_branch_data' => [
                    'route_no' => '115260106',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '3417',
                'bank_id' => '21',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '115260430',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '3418',
                'bank_id' => '21',
                'bank_branch_name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'route_no' => '115260522',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '3419',
                'bank_id' => '21',
                'bank_branch_name' => 'DHAKA OFFICE',
                'bank_branch_data' => [
                    'route_no' => '115261121',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '3420',
                'bank_id' => '21',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '115261189',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '3421',
                'bank_id' => '21',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '115261721',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '3422',
                'bank_id' => '21',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '115262988',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '3423',
                'bank_id' => '21',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '115264636',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '3424',
                'bank_id' => '21',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '115270004',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '3425',
                'bank_id' => '21',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'route_no' => '115271274',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '3426',
                'bank_id' => '21',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '115274242',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '3427',
                'bank_id' => '21',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'route_no' => '115611755',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '3428',
                'bank_id' => '21',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '115671887',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '3429',
                'bank_id' => '21',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '115913558',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '3430',
                'bank_id' => '22',
                'bank_branch_name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'route_no' => '120010075',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '3431',
                'bank_id' => '22',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'route_no' => '120060283',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '3432',
                'bank_id' => '22',
                'bank_branch_name' => 'BHOLA',
                'bank_branch_data' => [
                    'route_no' => '120090103',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '3433',
                'bank_id' => '22',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'route_no' => '120100372',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '3434',
                'bank_id' => '22',
                'bank_branch_name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'route_no' => '120120107',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '3435',
                'bank_id' => '22',
                'bank_branch_name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'route_no' => '120120431',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '3436',
                'bank_id' => '22',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '120150135',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '3437',
                'bank_id' => '22',
                'bank_branch_name' => 'ALANKAR MOR',
                'bank_branch_data' => [
                    'route_no' => '120150148',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '3438',
                'bank_id' => '22',
                'bank_branch_name' => 'BONDORTILA',
                'bank_branch_data' => [
                    'route_no' => '120150364',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '3439',
                'bank_id' => '22',
                'bank_branch_name' => 'ANOWARA',
                'bank_branch_data' => [
                    'route_no' => '120150522',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '3440',
                'bank_id' => '22',
                'bank_branch_name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'route_no' => '120151484',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '3441',
                'bank_id' => '22',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120151934',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '3442',
                'bank_id' => '22',
                'bank_branch_name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'route_no' => '120152746',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '3443',
                'bank_id' => '22',
                'bank_branch_name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'route_no' => '120153224',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '3444',
                'bank_id' => '22',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'route_no' => '120154278',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '3445',
                'bank_id' => '22',
                'bank_branch_name' => 'MADAM BIBIR HAT',
                'bank_branch_data' => [
                    'route_no' => '120154694',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '3446',
                'bank_id' => '22',
                'bank_branch_name' => 'PANCHLAISH',
                'bank_branch_data' => [
                    'route_no' => '120156047',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '3447',
                'bank_id' => '22',
                'bank_branch_name' => 'SHAH AMANAT MARKET',
                'bank_branch_data' => [
                    'route_no' => '120157154',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '3448',
                'bank_id' => '22',
                'bank_branch_name' => 'SHEIKH MARKET',
                'bank_branch_data' => [
                    'route_no' => '120157275',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '3449',
                'bank_id' => '22',
                'bank_branch_name' => 'SK. MUJIB ROAD',
                'bank_branch_data' => [
                    'route_no' => '120157420',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '3450',
                'bank_id' => '22',
                'bank_branch_name' => 'TERRI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120157633',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '3451',
                'bank_id' => '22',
                'bank_branch_name' => 'CHANDINA',
                'bank_branch_data' => [
                    'route_no' => '120190887',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '3452',
                'bank_id' => '22',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'route_no' => '120191152',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '3453',
                'bank_id' => '22',
                'bank_branch_name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '120191428',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '3454',
                'bank_id' => '22',
                'bank_branch_name' => 'GOURIPUR BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120192148',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '3455',
                'bank_id' => '22',
                'bank_branch_name' => 'MIAH BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120194120',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '3456',
                'bank_id' => '22',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120220252',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '3457',
                'bank_id' => '22',
                'bank_branch_name' => 'GABTALI BAGBARI',
                'bank_branch_data' => [
                    'route_no' => '120260120',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '3458',
                'bank_id' => '22',
                'bank_branch_name' => 'ASHULIA',
                'bank_branch_data' => [
                    'route_no' => '120260225',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '3459',
                'bank_id' => '22',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '120260438',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '3460',
                'bank_id' => '22',
                'bank_branch_name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'route_no' => '120260559',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '3461',
                'bank_id' => '22',
                'bank_branch_name' => 'DARUS-SALAM ROAD',
                'bank_branch_data' => [
                    'route_no' => '120260946',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '3462',
                'bank_id' => '22',
                'bank_branch_name' => 'DHAMRAI SME',
                'bank_branch_data' => [
                    'route_no' => '120261158',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '3463',
                'bank_id' => '22',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '120261187',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '3464',
                'bank_id' => '22',
                'bank_branch_name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'route_no' => '120261332',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '3465',
                'bank_id' => '22',
                'bank_branch_name' => 'GARIB-E-NEWAZ AVENUE',
                'bank_branch_data' => [
                    'route_no' => '120261640',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '3466',
                'bank_id' => '22',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '120261729',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '3467',
                'bank_id' => '22',
                'bank_branch_name' => 'GULSHAN TEJGAON LINK ROAD',
                'bank_branch_data' => [
                    'route_no' => '120261929',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '3468',
                'bank_id' => '22',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120262531',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '3469',
                'bank_id' => '22',
                'bank_branch_name' => 'LALMATIA',
                'bank_branch_data' => [
                    'route_no' => '120262836',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '3470',
                'bank_id' => '22',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '120262986',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '3471',
                'bank_id' => '22',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'route_no' => '120263198',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '3472',
                'bank_id' => '22',
                'bank_branch_name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'route_no' => '120263280',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '3473',
                'bank_id' => '22',
                'bank_branch_name' => 'PALLABI',
                'bank_branch_data' => [
                    'route_no' => '120263585',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '3474',
                'bank_id' => '22',
                'bank_branch_name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'route_no' => '120263701',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '3475',
                'bank_id' => '22',
                'bank_branch_name' => 'SAVAR BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120264126',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '3476',
                'bank_id' => '22',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '120264634',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '3477',
                'bank_id' => '22',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '120270002',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '3478',
                'bank_id' => '22',
                'bank_branch_name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'route_no' => '120270136',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '3479',
                'bank_id' => '22',
                'bank_branch_name' => 'ARSHINAGAR',
                'bank_branch_data' => [
                    'route_no' => '120270507',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '3480',
                'bank_id' => '22',
                'bank_branch_name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'route_no' => '120270886',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '3481',
                'bank_id' => '22',
                'bank_branch_name' => 'DANIA',
                'bank_branch_data' => [
                    'route_no' => '120271427',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '3482',
                'bank_id' => '22',
                'bank_branch_name' => 'DHAKA STOCK EXCHANGE',
                'bank_branch_data' => [
                    'route_no' => '120271706',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '3483',
                'bank_id' => '22',
                'bank_branch_name' => 'DHOLAIKHAL',
                'bank_branch_data' => [
                    'route_no' => '120271843',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '3484',
                'bank_id' => '22',
                'bank_branch_name' => 'FEDERATION',
                'bank_branch_data' => [
                    'route_no' => '120272297',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '3485',
                'bank_id' => '22',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'route_no' => '120272989',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '3486',
                'bank_id' => '22',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '120273641',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '3487',
                'bank_id' => '22',
                'bank_branch_name' => 'KONAPARA',
                'bank_branch_data' => [
                    'route_no' => '120273746',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '3488',
                'bank_id' => '22',
                'bank_branch_name' => 'LOCAL OFFICE',
                'bank_branch_data' => [
                    'route_no' => '120273883',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '3489',
                'bank_id' => '22',
                'bank_branch_name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'route_no' => '120273946',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '3490',
                'bank_id' => '22',
                'bank_branch_name' => 'MEGHULA',
                'bank_branch_data' => [
                    'route_no' => '120274040',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '3491',
                'bank_id' => '22',
                'bank_branch_name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'route_no' => '120274240',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '3492',
                'bank_id' => '22',
                'bank_branch_name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120274424',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '3493',
                'bank_id' => '22',
                'bank_branch_name' => 'NAWABGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '120274703',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '3494',
                'bank_id' => '22',
                'bank_branch_name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'route_no' => '120274758',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '3495',
                'bank_id' => '22',
                'bank_branch_name' => 'NAYA PALTAN',
                'bank_branch_data' => [
                    'route_no' => '120274879',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '3496',
                'bank_id' => '22',
                'bank_branch_name' => 'NORTH BROOK HALL ROAD',
                'bank_branch_data' => [
                    'route_no' => '120275052',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '3497',
                'bank_id' => '22',
                'bank_branch_name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'route_no' => '120276343',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '3498',
                'bank_id' => '22',
                'bank_branch_name' => 'BIROL BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120280050',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '3499',
                'bank_id' => '22',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'route_no' => '120280676',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '3500',
                'bank_id' => '22',
                'bank_branch_name' => 'SETABGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '120282195',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '3501',
                'bank_id' => '22',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'route_no' => '120290529',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '3502',
                'bank_id' => '22',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'route_no' => '120300527',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '3503',
                'bank_id' => '22',
                'bank_branch_name' => 'CHANDRA SME',
                'bank_branch_data' => [
                    'route_no' => '120330063',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '3504',
                'bank_id' => '22',
                'bank_branch_name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120330221',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '3505',
                'bank_id' => '22',
                'bank_branch_name' => 'BHAWAL MIRZAPUR',
                'bank_branch_data' => [
                    'route_no' => '120330247',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '3506',
                'bank_id' => '22',
                'bank_branch_name' => 'CHERAG ALI',
                'bank_branch_data' => [
                    'route_no' => '120330276',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '3507',
                'bank_id' => '22',
                'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'route_no' => '120330555',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '3508',
                'bank_id' => '22',
                'bank_branch_name' => 'KAPASIA',
                'bank_branch_data' => [
                    'route_no' => '120330889',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '3509',
                'bank_id' => '22',
                'bank_branch_name' => 'KONABARI',
                'bank_branch_data' => [
                    'route_no' => '120330942',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '3510',
                'bank_id' => '22',
                'bank_branch_name' => 'MAWNA',
                'bank_branch_data' => [
                    'route_no' => '120331004',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '3511',
                'bank_id' => '22',
                'bank_branch_name' => 'TONGI SME',
                'bank_branch_data' => [
                    'route_no' => '120331659',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '3512',
                'bank_id' => '22',
                'bank_branch_name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'route_no' => '120360617',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '3513',
                'bank_id' => '22',
                'bank_branch_name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'route_no' => '120360888',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '3514',
                'bank_id' => '22',
                'bank_branch_name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'route_no' => '120380400',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '3515',
                'bank_id' => '22',
                'bank_branch_name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'route_no' => '120390858',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '3516',
                'bank_id' => '22',
                'bank_branch_name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'route_no' => '120410288',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '3517',
                'bank_id' => '22',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'route_no' => '120410941',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '3518',
                'bank_id' => '22',
                'bank_branch_name' => 'NOAPARA',
                'bank_branch_data' => [
                    'route_no' => '120411632',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '3519',
                'bank_id' => '22',
                'bank_branch_name' => 'KALIGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '120440803',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '3520',
                'bank_id' => '22',
                'bank_branch_name' => 'BORO BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120470378',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '3521',
                'bank_id' => '22',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'route_no' => '120471548',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '3522',
                'bank_id' => '22',
                'bank_branch_name' => 'SONADANGA',
                'bank_branch_data' => [
                    'route_no' => '120472626',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '3523',
                'bank_id' => '22',
                'bank_branch_name' => 'BAJITPUR',
                'bank_branch_data' => [
                    'route_no' => '120480100',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '3524',
                'bank_id' => '22',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'route_no' => '120500943',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '3525',
                'bank_id' => '22',
                'bank_branch_name' => 'PORADAH',
                'bank_branch_data' => [
                    'route_no' => '120501368',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '3526',
                'bank_id' => '22',
                'bank_branch_name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'route_no' => '120510191',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '3527',
                'bank_id' => '22',
                'bank_branch_name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'route_no' => '120540761',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '3528',
                'bank_id' => '22',
                'bank_branch_name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'route_no' => '120560617',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '3529',
                'bank_id' => '22',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120581188',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '3530',
                'bank_id' => '22',
                'bank_branch_name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'route_no' => '120581720',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '3531',
                'bank_id' => '22',
                'bank_branch_name' => 'MUKTARPUR',
                'bank_branch_data' => [
                    'route_no' => '120591002',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '3532',
                'bank_id' => '22',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'route_no' => '120611753',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '3533',
                'bank_id' => '22',
                'bank_branch_name' => 'SEEDSTORE BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120612099',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '3534',
                'bank_id' => '22',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'route_no' => '120641181',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '3535',
                'bank_id' => '22',
                'bank_branch_name' => 'BANDAR',
                'bank_branch_data' => [
                    'route_no' => '120670165',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '3536',
                'bank_id' => '22',
                'bank_branch_name' => 'BHUIGHAR',
                'bank_branch_data' => [
                    'route_no' => '120670202',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '3537',
                'bank_id' => '22',
                'bank_branch_name' => 'ISAPURA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120670673',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '3538',
                'bank_id' => '22',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '120671180',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '3539',
                'bank_id' => '22',
                'bank_branch_name' => 'NETAIGANJ',
                'bank_branch_data' => [
                    'route_no' => '120671272',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '3540',
                'bank_id' => '22',
                'bank_branch_name' => 'PANCHABATI',
                'bank_branch_data' => [
                    'route_no' => '120671380',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '3541',
                'bank_id' => '22',
                'bank_branch_name' => 'RUPGANJ',
                'bank_branch_data' => [
                    'route_no' => '120671456',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '3542',
                'bank_id' => '22',
                'bank_branch_name' => 'SHIBU MARKET',
                'bank_branch_data' => [
                    'route_no' => '120671551',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '3543',
                'bank_id' => '22',
                'bank_branch_name' => 'TANBAZAR',
                'bank_branch_data' => [
                    'route_no' => '120671780',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '3544',
                'bank_id' => '22',
                'bank_branch_name' => 'PANCHDOWNA',
                'bank_branch_data' => [
                    'route_no' => '120680142',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '3545',
                'bank_id' => '22',
                'bank_branch_name' => 'GHORASAL',
                'bank_branch_data' => [
                    'route_no' => '120680492',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '3546',
                'bank_id' => '22',
                'bank_branch_name' => 'HASNABAD',
                'bank_branch_data' => [
                    'route_no' => '120680526',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '3547',
                'bank_id' => '22',
                'bank_branch_name' => 'MADHABDI',
                'bank_branch_data' => [
                    'route_no' => '120680676',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '3548',
                'bank_id' => '22',
                'bank_branch_name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'route_no' => '120680850',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '3549',
                'bank_id' => '22',
                'bank_branch_name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '120700251',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '3550',
                'bank_id' => '22',
                'bank_branch_name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'route_no' => '120750672',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '3551',
                'bank_id' => '22',
                'bank_branch_name' => 'KASHINATHPUR SME',
                'bank_branch_data' => [
                    'route_no' => '120761340',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '3552',
                'bank_id' => '22',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'route_no' => '120761782',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '3553',
                'bank_id' => '22',
                'bank_branch_name' => 'BANESHWAR',
                'bank_branch_data' => [
                    'route_no' => '120810220',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '3554',
                'bank_id' => '22',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '120811937',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '3555',
                'bank_id' => '22',
                'bank_branch_name' => 'TAHERPUR',
                'bank_branch_data' => [
                    'route_no' => '120812323',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '3556',
                'bank_id' => '22',
                'bank_branch_name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'route_no' => '120840524',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '3557',
                'bank_id' => '22',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'route_no' => '120851450',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '3558',
                'bank_id' => '22',
                'bank_branch_name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'route_no' => '120860670',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '3559',
                'bank_id' => '22',
                'bank_branch_name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'route_no' => '120871098',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '3560',
                'bank_id' => '22',
                'bank_branch_name' => 'BELKUCHI',
                'bank_branch_data' => [
                    'route_no' => '120880221',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '3561',
                'bank_id' => '22',
                'bank_branch_name' => 'SHERPUR',
                'bank_branch_data' => [
                    'route_no' => '120890558',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '3562',
                'bank_id' => '22',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120910317',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '3563',
                'bank_id' => '22',
                'bank_branch_name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120911545',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '3564',
                'bank_id' => '22',
                'bank_branch_name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'route_no' => '120913493',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '3565',
                'bank_id' => '22',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '120913556',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '3566',
                'bank_id' => '22',
                'bank_branch_name' => 'TULTIKAR',
                'bank_branch_data' => [
                    'route_no' => '120913972',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '3567',
                'bank_id' => '22',
                'bank_branch_name' => 'UPASHAHAR',
                'bank_branch_data' => [
                    'route_no' => '120914034',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '3568',
                'bank_id' => '22',
                'bank_branch_name' => 'KARATIA',
                'bank_branch_data' => [
                    'route_no' => '120931367',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '3569',
                'bank_id' => '22',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'route_no' => '120932290',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '3570',
                'bank_id' => '23',
                'bank_branch_name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'route_no' => '125010070',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '3571',
                'bank_id' => '23',
                'bank_branch_name' => 'FAKIRHAT',
                'bank_branch_data' => [
                    'route_no' => '125010467',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '3572',
                'bank_id' => '23',
                'bank_branch_name' => 'MONGLA',
                'bank_branch_data' => [
                    'route_no' => '125010946',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '3573',
                'bank_id' => '23',
                'bank_branch_name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'route_no' => '125011037',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '3574',
                'bank_id' => '23',
                'bank_branch_name' => 'SARANKHOLA',
                'bank_branch_data' => [
                    'route_no' => '125011303',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '3575',
                'bank_id' => '23',
                'bank_branch_name' => 'BANDARBAN',
                'bank_branch_data' => [
                    'route_no' => '125030139',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '3576',
                'bank_id' => '23',
                'bank_branch_name' => 'BARGUNA',
                'bank_branch_data' => [
                    'route_no' => '125040132',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '3577',
                'bank_id' => '23',
                'bank_branch_name' => 'BAKERGANJ',
                'bank_branch_data' => [
                    'route_no' => '125060220',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '3578',
                'bank_id' => '23',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'route_no' => '125060288',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '3579',
                'bank_id' => '23',
                'bank_branch_name' => 'TORKI',
                'bank_branch_data' => [
                    'route_no' => '125062202',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '3580',
                'bank_id' => '23',
                'bank_branch_name' => 'HATKHOLA CHAWKBAZAR',
                'bank_branch_data' => [
                    'route_no' => '125062602',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '3581',
                'bank_id' => '23',
                'bank_branch_name' => 'BHOLA',
                'bank_branch_data' => [
                    'route_no' => '125090108',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '3582',
                'bank_id' => '23',
                'bank_branch_name' => 'BORHANUDDIN SME',
                'bank_branch_data' => [
                    'route_no' => '125090203',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '3583',
                'bank_id' => '23',
                'bank_branch_name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'route_no' => '125090229',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '3584',
                'bank_id' => '23',
                'bank_branch_name' => 'LALMOHAN',
                'bank_branch_data' => [
                    'route_no' => '125090708',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '3585',
                'bank_id' => '23',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'route_no' => '125100377',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '3586',
                'bank_id' => '23',
                'bank_branch_name' => 'BOROGOLA',
                'bank_branch_data' => [
                    'route_no' => '125100498',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '3587',
                'bank_id' => '23',
                'bank_branch_name' => 'DUPCHACHIA',
                'bank_branch_data' => [
                    'route_no' => '125100919',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '3588',
                'bank_id' => '23',
                'bank_branch_name' => 'HIGHWAY SHERPUR',
                'bank_branch_data' => [
                    'route_no' => '125101392',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '3589',
                'bank_id' => '23',
                'bank_branch_name' => 'KAHALOO SME',
                'bank_branch_data' => [
                    'route_no' => '125101550',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '3590',
                'bank_id' => '23',
                'bank_branch_name' => 'MAHASTANGARH SME',
                'bank_branch_data' => [
                    'route_no' => '125101792',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '3591',
                'bank_id' => '23',
                'bank_branch_name' => 'NANDIGRAM SME',
                'bank_branch_data' => [
                    'route_no' => '125102038',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '3592',
                'bank_id' => '23',
                'bank_branch_name' => 'SANTAHAR SME',
                'bank_branch_data' => [
                    'route_no' => '125102425',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '3593',
                'bank_id' => '23',
                'bank_branch_name' => 'SONATOLA',
                'bank_branch_data' => [
                    'route_no' => '125102988',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '3594',
                'bank_id' => '23',
                'bank_branch_name' => 'AKHAURA SME',
                'bank_branch_data' => [
                    'route_no' => '125120052',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '3595',
                'bank_id' => '23',
                'bank_branch_name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'route_no' => '125120102',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '3596',
                'bank_id' => '23',
                'bank_branch_name' => 'BANCHARAMPUR',
                'bank_branch_data' => [
                    'route_no' => '125120252',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '3597',
                'bank_id' => '23',
                'bank_branch_name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'route_no' => '125120436',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '3598',
                'bank_id' => '23',
                'bank_branch_name' => 'KASBA',
                'bank_branch_data' => [
                    'route_no' => '125121035',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '3599',
                'bank_id' => '23',
                'bank_branch_name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'route_no' => '125121369',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '3600',
                'bank_id' => '23',
                'bank_branch_name' => 'SACHAR',
                'bank_branch_data' => [
                    'route_no' => '125130118',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '3601',
                'bank_id' => '23',
                'bank_branch_name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'route_no' => '125130318',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '3602',
                'bank_id' => '23',
                'bank_branch_name' => 'FARIDGANJ',
                'bank_branch_data' => [
                    'route_no' => '125130671',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '3603',
                'bank_id' => '23',
                'bank_branch_name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125130884',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '3604',
                'bank_id' => '23',
                'bank_branch_name' => 'MATLAB',
                'bank_branch_data' => [
                    'route_no' => '125131188',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '3605',
                'bank_id' => '23',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '125150130',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '3606',
                'bank_id' => '23',
                'bank_branch_name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'route_no' => '125150464',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '3607',
                'bank_id' => '23',
                'bank_branch_name' => 'ANOWARA',
                'bank_branch_data' => [
                    'route_no' => '125150527',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '3608',
                'bank_id' => '23',
                'bank_branch_name' => 'AGRABAD COMMERCIAL AREA',
                'bank_branch_data' => [
                    'route_no' => '125150606',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '3609',
                'bank_id' => '23',
                'bank_branch_name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'route_no' => '125150798',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '3610',
                'bank_id' => '23',
                'bank_branch_name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'route_no' => '125150943',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '3611',
                'bank_id' => '23',
                'bank_branch_name' => 'BANSHKHALI',
                'bank_branch_data' => [
                    'route_no' => '125150972',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '3612',
                'bank_id' => '23',
                'bank_branch_name' => 'BARAIYER HAT',
                'bank_branch_data' => [
                    'route_no' => '125151092',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '3613',
                'bank_id' => '23',
                'bank_branch_name' => 'BARODAROGA HAT SME',
                'bank_branch_data' => [
                    'route_no' => '125151139',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '3614',
                'bank_id' => '23',
                'bank_branch_name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'route_no' => '125151300',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '3615',
                'bank_id' => '23',
                'bank_branch_name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'route_no' => '125151489',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '3616',
                'bank_id' => '23',
                'bank_branch_name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'route_no' => '125151755',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '3617',
                'bank_id' => '23',
                'bank_branch_name' => 'CHANDANAISH',
                'bank_branch_data' => [
                    'route_no' => '125151818',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '3618',
                'bank_id' => '23',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125151939',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '3619',
                'bank_id' => '23',
                'bank_branch_name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'route_no' => '125152446',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '3620',
                'bank_id' => '23',
                'bank_branch_name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'route_no' => '125152741',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '3621',
                'bank_id' => '23',
                'bank_branch_name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'route_no' => '125153166',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '3622',
                'bank_id' => '23',
                'bank_branch_name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'route_no' => '125153229',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '3623',
                'bank_id' => '23',
                'bank_branch_name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'route_no' => '125153645',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '3624',
                'bank_id' => '23',
                'bank_branch_name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'route_no' => '125153737',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '3625',
                'bank_id' => '23',
                'bank_branch_name' => 'KALURGHAT',
                'bank_branch_data' => [
                    'route_no' => '125153911',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '3626',
                'bank_id' => '23',
                'bank_branch_name' => 'KERANIHAT',
                'bank_branch_data' => [
                    'route_no' => '125154181',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '3627',
                'bank_id' => '23',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'route_no' => '125154273',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '3628',
                'bank_id' => '23',
                'bank_branch_name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'route_no' => '125154660',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '3629',
                'bank_id' => '23',
                'bank_branch_name' => 'MIRSARAI SME',
                'bank_branch_data' => [
                    'route_no' => '125155069',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '3630',
                'bank_id' => '23',
                'bank_branch_name' => 'NAZU MEA HAT',
                'bank_branch_data' => [
                    'route_no' => '125155627',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '3631',
                'bank_id' => '23',
                'bank_branch_name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'route_no' => '125155801',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '3632',
                'bank_id' => '23',
                'bank_branch_name' => 'OXYGEN MOUR',
                'bank_branch_data' => [
                    'route_no' => '125155872',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '3633',
                'bank_id' => '23',
                'bank_branch_name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'route_no' => '125155922',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '3634',
                'bank_id' => '23',
                'bank_branch_name' => 'PATIYA',
                'bank_branch_data' => [
                    'route_no' => '125156163',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '3635',
                'bank_id' => '23',
                'bank_branch_name' => 'RAOZAN',
                'bank_branch_data' => [
                    'route_no' => '125156497',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '3636',
                'bank_id' => '23',
                'bank_branch_name' => 'SANDWIP',
                'bank_branch_data' => [
                    'route_no' => '125156918',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '3637',
                'bank_id' => '23',
                'bank_branch_name' => 'SATKANIA',
                'bank_branch_data' => [
                    'route_no' => '125157067',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '3638',
                'bank_id' => '23',
                'bank_branch_name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'route_no' => '125157391',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '3639',
                'bank_id' => '23',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'route_no' => '125157517',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '3640',
                'bank_id' => '23',
                'bank_branch_name' => 'ALAMDANGA',
                'bank_branch_data' => [
                    'route_no' => '125180047',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '3641',
                'bank_id' => '23',
                'bank_branch_name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'route_no' => '125180197',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '3642',
                'bank_id' => '23',
                'bank_branch_name' => 'JIBON NAGAR SME',
                'bank_branch_data' => [
                    'route_no' => '125180584',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '3643',
                'bank_id' => '23',
                'bank_branch_name' => 'BANGADDA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125190408',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '3644',
                'bank_id' => '23',
                'bank_branch_name' => 'BURICHANG SME',
                'bank_branch_data' => [
                    'route_no' => '125190824',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '3645',
                'bank_id' => '23',
                'bank_branch_name' => 'CHANDINA',
                'bank_branch_data' => [
                    'route_no' => '125190882',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '3646',
                'bank_id' => '23',
                'bank_branch_name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'route_no' => '125191065',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '3647',
                'bank_id' => '23',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'route_no' => '125191157',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '3648',
                'bank_id' => '23',
                'bank_branch_name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125191423',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '3649',
                'bank_id' => '23',
                'bank_branch_name' => 'DAUDKANDI SME',
                'bank_branch_data' => [
                    'route_no' => '125191528',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '3650',
                'bank_id' => '23',
                'bank_branch_name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'route_no' => '125192114',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '3651',
                'bank_id' => '23',
                'bank_branch_name' => 'LAKSAM',
                'bank_branch_data' => [
                    'route_no' => '125192714',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '3652',
                'bank_id' => '23',
                'bank_branch_name' => 'TERY PATTRY',
                'bank_branch_data' => [
                    'route_no' => '125197643',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '3653',
                'bank_id' => '23',
                'bank_branch_name' => 'PEKUA',
                'bank_branch_data' => [
                    'route_no' => '125220057',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '3654',
                'bank_id' => '23',
                'bank_branch_name' => 'CHIRINGA',
                'bank_branch_data' => [
                    'route_no' => '125220194',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '3655',
                'bank_id' => '23',
                'bank_branch_name' => 'COURT BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '125220231',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '3656',
                'bank_id' => '23',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125220257',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '3657',
                'bank_id' => '23',
                'bank_branch_name' => 'EIDGAON',
                'bank_branch_data' => [
                    'route_no' => '125220402',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '3658',
                'bank_id' => '23',
                'bank_branch_name' => 'MOHESHKHALI SME',
                'bank_branch_data' => [
                    'route_no' => '125220778',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '3659',
                'bank_id' => '23',
                'bank_branch_name' => 'RAMU',
                'bank_branch_data' => [
                    'route_no' => '125220857',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '3660',
                'bank_id' => '23',
                'bank_branch_name' => 'TEKNAF',
                'bank_branch_data' => [
                    'route_no' => '125220910',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '3661',
                'bank_id' => '23',
                'bank_branch_name' => 'SONARGAON JANAPATH ROAD',
                'bank_branch_data' => [
                    'route_no' => '125260088',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '3662',
                'bank_id' => '23',
                'bank_branch_name' => 'AMIN BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125260138',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '3663',
                'bank_id' => '23',
                'bank_branch_name' => 'NIKUNJA',
                'bank_branch_data' => [
                    'route_no' => '125260183',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '3664',
                'bank_id' => '23',
                'bank_branch_name' => 'BADDA',
                'bank_branch_data' => [
                    'route_no' => '125260341',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '3665',
                'bank_id' => '23',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '125260433',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '3666',
                'bank_id' => '23',
                'bank_branch_name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'route_no' => '125260509',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '3667',
                'bank_id' => '23',
                'bank_branch_name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'route_no' => '125260525',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '3668',
                'bank_id' => '23',
                'bank_branch_name' => 'CANTONMENT',
                'bank_branch_data' => [
                    'route_no' => '125260738',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '3669',
                'bank_id' => '23',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '125261182',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '3670',
                'bank_id' => '23',
                'bank_branch_name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'route_no' => '125261337',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '3671',
                'bank_id' => '23',
                'bank_branch_name' => 'FARMGATE',
                'bank_branch_data' => [
                    'route_no' => '125261458',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '3672',
                'bank_id' => '23',
                'bank_branch_name' => 'GANAKBARI',
                'bank_branch_data' => [
                    'route_no' => '125261632',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '3673',
                'bank_id' => '23',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '125261724',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '3674',
                'bank_id' => '23',
                'bank_branch_name' => 'GULSHAN CIRCLE-1',
                'bank_branch_data' => [
                    'route_no' => '125261753',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '3675',
                'bank_id' => '23',
                'bank_branch_name' => 'HAZICAMP',
                'bank_branch_data' => [
                    'route_no' => '125261995',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '3676',
                'bank_id' => '23',
                'bank_branch_name' => 'IDB BHABAN',
                'bank_branch_data' => [
                    'route_no' => '125262149',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '3677',
                'bank_id' => '23',
                'bank_branch_name' => 'KALAMPUR SME',
                'bank_branch_data' => [
                    'route_no' => '125262457',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '3678',
                'bank_id' => '23',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125262536',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '3679',
                'bank_id' => '23',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '125262981',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '3680',
                'bank_id' => '23',
                'bank_branch_name' => 'MIRPUR SECTION-1',
                'bank_branch_data' => [
                    'route_no' => '125263106',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '3681',
                'bank_id' => '23',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'route_no' => '125263193',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '3682',
                'bank_id' => '23',
                'bank_branch_name' => 'MOHAMMADPUR KRISHI MARKET',
                'bank_branch_data' => [
                    'route_no' => '125263377',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '3683',
                'bank_id' => '23',
                'bank_branch_name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'route_no' => '125263522',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '3684',
                'bank_id' => '23',
                'bank_branch_name' => 'PALLABI',
                'bank_branch_data' => [
                    'route_no' => '125263580',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '3685',
                'bank_id' => '23',
                'bank_branch_name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'route_no' => '125263614',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '3686',
                'bank_id' => '23',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'route_no' => '125264097',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '3687',
                'bank_id' => '23',
                'bank_branch_name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'route_no' => '125264305',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '3688',
                'bank_id' => '23',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '125264639',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '3689',
                'bank_id' => '23',
                'bank_branch_name' => 'ZIRANI BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '125264826',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '3690',
                'bank_id' => '23',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '125270007',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '3691',
                'bank_id' => '23',
                'bank_branch_name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125270344',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '3692',
                'bank_id' => '23',
                'bank_branch_name' => 'BANDURA SME',
                'bank_branch_data' => [
                    'route_no' => '125270652',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '3693',
                'bank_id' => '23',
                'bank_branch_name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'route_no' => '125270881',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '3694',
                'bank_id' => '23',
                'bank_branch_name' => 'CHAWK MOGULTULY',
                'bank_branch_data' => [
                    'route_no' => '125271301',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '3695',
                'bank_id' => '23',
                'bank_branch_name' => 'DANIA',
                'bank_branch_data' => [
                    'route_no' => '125271422',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '3696',
                'bank_id' => '23',
                'bank_branch_name' => 'DHOLAIKHAL',
                'bank_branch_data' => [
                    'route_no' => '125271848',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '3697',
                'bank_id' => '23',
                'bank_branch_name' => 'DOHAR',
                'bank_branch_data' => [
                    'route_no' => '125272050',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '3698',
                'bank_id' => '23',
                'bank_branch_name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'route_no' => '125272326',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '3699',
                'bank_id' => '23',
                'bank_branch_name' => 'GANDARIA',
                'bank_branch_data' => [
                    'route_no' => '125272447',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '3700',
                'bank_id' => '23',
                'bank_branch_name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'route_no' => '125272689',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '3701',
                'bank_id' => '23',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'route_no' => '125272984',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '3702',
                'bank_id' => '23',
                'bank_branch_name' => 'JATRABARI',
                'bank_branch_data' => [
                    'route_no' => '125273220',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '3703',
                'bank_id' => '23',
                'bank_branch_name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'route_no' => '125273583',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '3704',
                'bank_id' => '23',
                'bank_branch_name' => 'KHILGAON',
                'bank_branch_data' => [
                    'route_no' => '125273675',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '3705',
                'bank_id' => '23',
                'bank_branch_name' => 'LALBAGH',
                'bank_branch_data' => [
                    'route_no' => '125273820',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '3706',
                'bank_id' => '23',
                'bank_branch_name' => 'LOCAL OFFICE',
                'bank_branch_data' => [
                    'route_no' => '125273888',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '3707',
                'bank_id' => '23',
                'bank_branch_name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'route_no' => '125274182',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '3708',
                'bank_id' => '23',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '125274245',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '3709',
                'bank_id' => '23',
                'bank_branch_name' => 'MOUCHAK MARKET',
                'bank_branch_data' => [
                    'route_no' => '125274395',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '3710',
                'bank_id' => '23',
                'bank_branch_name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '125274690',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '3711',
                'bank_id' => '23',
                'bank_branch_name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'route_no' => '125274753',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '3712',
                'bank_id' => '23',
                'bank_branch_name' => 'PALTAN',
                'bank_branch_data' => [
                    'route_no' => '125275202',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '3713',
                'bank_id' => '23',
                'bank_branch_name' => 'RAMNA',
                'bank_branch_data' => [
                    'route_no' => '125275686',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '3714',
                'bank_id' => '23',
                'bank_branch_name' => 'RAMPURA',
                'bank_branch_data' => [
                    'route_no' => '125275749',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '3715',
                'bank_id' => '23',
                'bank_branch_name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'route_no' => '125275923',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '3716',
                'bank_id' => '23',
                'bank_branch_name' => 'SHYAMPUR',
                'bank_branch_data' => [
                    'route_no' => '125276522',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '3717',
                'bank_id' => '23',
                'bank_branch_name' => 'VIP ROAD',
                'bank_branch_data' => [
                    'route_no' => '125276856',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '3718',
                'bank_id' => '23',
                'bank_branch_name' => 'WISEGHAT',
                'bank_branch_data' => [
                    'route_no' => '125277042',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '3719',
                'bank_id' => '23',
                'bank_branch_name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'route_no' => '125277097',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '3720',
                'bank_id' => '23',
                'bank_branch_name' => 'BIRAMPUR',
                'bank_branch_data' => [
                    'route_no' => '125280347',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '3721',
                'bank_id' => '23',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'route_no' => '125280671',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '3722',
                'bank_id' => '23',
                'bank_branch_name' => 'SETABGANJ',
                'bank_branch_data' => [
                    'route_no' => '125282174',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '3723',
                'bank_id' => '23',
                'bank_branch_name' => 'BHANGA SME',
                'bank_branch_data' => [
                    'route_no' => '125290290',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '3724',
                'bank_id' => '23',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'route_no' => '125290524',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '3725',
                'bank_id' => '23',
                'bank_branch_name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'route_no' => '125300319',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '3726',
                'bank_id' => '23',
                'bank_branch_name' => 'COLLEGE ROAD',
                'bank_branch_data' => [
                    'route_no' => '125300348',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '3727',
                'bank_id' => '23',
                'bank_branch_name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'route_no' => '125300377',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '3728',
                'bank_id' => '23',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'route_no' => '125300522',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '3729',
                'bank_id' => '23',
                'bank_branch_name' => 'PARSHURAM SME',
                'bank_branch_data' => [
                    'route_no' => '125301284',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '3730',
                'bank_id' => '23',
                'bank_branch_name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'route_no' => '125301484',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '3731',
                'bank_id' => '23',
                'bank_branch_name' => 'GAIBANDHA',
                'bank_branch_data' => [
                    'route_no' => '125320528',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '3732',
                'bank_id' => '23',
                'bank_branch_name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'route_no' => '125320586',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '3733',
                'bank_id' => '23',
                'bank_branch_name' => 'SUNDARGANJ',
                'bank_branch_data' => [
                    'route_no' => '125321301',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '3734',
                'bank_id' => '23',
                'bank_branch_name' => 'BOARD BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125330226',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '3735',
                'bank_id' => '23',
                'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'route_no' => '125330550',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '3736',
                'bank_id' => '23',
                'bank_branch_name' => 'GAZIPUR SADAR',
                'bank_branch_data' => [
                    'route_no' => '125330592',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '3737',
                'bank_id' => '23',
                'bank_branch_name' => 'KAPASIA',
                'bank_branch_data' => [
                    'route_no' => '125330884',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '3738',
                'bank_id' => '23',
                'bank_branch_name' => 'KONABARI',
                'bank_branch_data' => [
                    'route_no' => '125330947',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '3739',
                'bank_id' => '23',
                'bank_branch_name' => 'MAWNA CHOWRASTA',
                'bank_branch_data' => [
                    'route_no' => '125331038',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '3740',
                'bank_id' => '23',
                'bank_branch_name' => 'TONGI',
                'bank_branch_data' => [
                    'route_no' => '125331638',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '3741',
                'bank_id' => '23',
                'bank_branch_name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'route_no' => '125350372',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '3742',
                'bank_id' => '23',
                'bank_branch_name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'route_no' => '125351092',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '3743',
                'bank_id' => '23',
                'bank_branch_name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125360612',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '3744',
                'bank_id' => '23',
                'bank_branch_name' => 'NABIGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '125361103',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '3745',
                'bank_id' => '23',
                'bank_branch_name' => 'SHAYESTAGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '125361408',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '3746',
                'bank_id' => '23',
                'bank_branch_name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'route_no' => '125380405',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '3747',
                'bank_id' => '23',
                'bank_branch_name' => 'PANCHBIBI',
                'bank_branch_data' => [
                    'route_no' => '125380676',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '3748',
                'bank_id' => '23',
                'bank_branch_name' => 'BAKSHIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125390103',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '3749',
                'bank_id' => '23',
                'bank_branch_name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'route_no' => '125390853',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '3750',
                'bank_id' => '23',
                'bank_branch_name' => 'TARAKANDI',
                'bank_branch_data' => [
                    'route_no' => '125391694',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '3751',
                'bank_id' => '23',
                'bank_branch_name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'route_no' => '125410283',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '3752',
                'bank_id' => '23',
                'bank_branch_name' => 'CHOWGACHA',
                'bank_branch_data' => [
                    'route_no' => '125410559',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '3753',
                'bank_id' => '23',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'route_no' => '125410946',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '3754',
                'bank_id' => '23',
                'bank_branch_name' => 'JHIKARGACHA',
                'bank_branch_data' => [
                    'route_no' => '125411095',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '3755',
                'bank_id' => '23',
                'bank_branch_name' => 'KESHABPUR',
                'bank_branch_data' => [
                    'route_no' => '125411211',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '3756',
                'bank_id' => '23',
                'bank_branch_name' => 'NOAPARA',
                'bank_branch_data' => [
                    'route_no' => '125411637',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '3757',
                'bank_id' => '23',
                'bank_branch_name' => 'JHALOKATI',
                'bank_branch_data' => [
                    'route_no' => '125420310',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '3758',
                'bank_id' => '23',
                'bank_branch_name' => 'RAJAPUR',
                'bank_branch_data' => [
                    'route_no' => '125420552',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '3759',
                'bank_id' => '23',
                'bank_branch_name' => 'DAK BANGLA BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '125440358',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '3760',
                'bank_id' => '23',
                'bank_branch_name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'route_no' => '125440640',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '3761',
                'bank_id' => '23',
                'bank_branch_name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125440790',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '3762',
                'bank_id' => '23',
                'bank_branch_name' => 'KOTCHANDPUR',
                'bank_branch_data' => [
                    'route_no' => '125441007',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '3763',
                'bank_id' => '23',
                'bank_branch_name' => 'KHAGRACHARI',
                'bank_branch_data' => [
                    'route_no' => '125460075',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '3764',
                'bank_id' => '23',
                'bank_branch_name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'route_no' => '125470702',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '3765',
                'bank_id' => '23',
                'bank_branch_name' => 'KDA AVENUE',
                'bank_branch_data' => [
                    'route_no' => '125471406',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '3766',
                'bank_id' => '23',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'route_no' => '125471543',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '3767',
                'bank_id' => '23',
                'bank_branch_name' => 'PAIKGACHA',
                'bank_branch_data' => [
                    'route_no' => '125472089',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '3768',
                'bank_id' => '23',
                'bank_branch_name' => 'PHULTALA BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '125472155',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '3769',
                'bank_id' => '23',
                'bank_branch_name' => 'BHAIRAB',
                'bank_branch_data' => [
                    'route_no' => '125480192',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '3770',
                'bank_id' => '23',
                'bank_branch_name' => 'KATIADI',
                'bank_branch_data' => [
                    'route_no' => '125480589',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '3771',
                'bank_id' => '23',
                'bank_branch_name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'route_no' => '125480671',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '3772',
                'bank_id' => '23',
                'bank_branch_name' => 'BHURUNGAMARI',
                'bank_branch_data' => [
                    'route_no' => '125490108',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '3773',
                'bank_id' => '23',
                'bank_branch_name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'route_no' => '125490403',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '3774',
                'bank_id' => '23',
                'bank_branch_name' => 'ROWMARI',
                'bank_branch_data' => [
                    'route_no' => '125490645',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '3775',
                'bank_id' => '23',
                'bank_branch_name' => 'KUMARKHALI',
                'bank_branch_data' => [
                    'route_no' => '125500885',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '3776',
                'bank_id' => '23',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'route_no' => '125500948',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '3777',
                'bank_id' => '23',
                'bank_branch_name' => 'PORADAH',
                'bank_branch_data' => [
                    'route_no' => '125501363',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '3778',
                'bank_id' => '23',
                'bank_branch_name' => 'HAZIRHAT',
                'bank_branch_data' => [
                    'route_no' => '125510091',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '3779',
                'bank_id' => '23',
                'bank_branch_name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'route_no' => '125510196',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '3780',
                'bank_id' => '23',
                'bank_branch_name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'route_no' => '125510738',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '3781',
                'bank_id' => '23',
                'bank_branch_name' => 'RAIPUR',
                'bank_branch_data' => [
                    'route_no' => '125510970',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '3782',
                'bank_id' => '23',
                'bank_branch_name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'route_no' => '125511032',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '3783',
                'bank_id' => '23',
                'bank_branch_name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'route_no' => '125520465',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '3784',
                'bank_id' => '23',
                'bank_branch_name' => 'PATGRAM SME',
                'bank_branch_data' => [
                    'route_no' => '125520599',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '3785',
                'bank_id' => '23',
                'bank_branch_name' => 'CHARMUGURIA SME',
                'bank_branch_data' => [
                    'route_no' => '125540140',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '3786',
                'bank_id' => '23',
                'bank_branch_name' => 'KALKINI',
                'bank_branch_data' => [
                    'route_no' => '125540287',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '3787',
                'bank_id' => '23',
                'bank_branch_name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'route_no' => '125540403',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '3788',
                'bank_id' => '23',
                'bank_branch_name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'route_no' => '125540766',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '3789',
                'bank_id' => '23',
                'bank_branch_name' => 'MAGURA',
                'bank_branch_data' => [
                    'route_no' => '125550556',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '3790',
                'bank_id' => '23',
                'bank_branch_name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'route_no' => '125560612',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '3791',
                'bank_id' => '23',
                'bank_branch_name' => 'SHIBALAYA',
                'bank_branch_data' => [
                    'route_no' => '125560791',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '3792',
                'bank_id' => '23',
                'bank_branch_name' => 'SINGAIR',
                'bank_branch_data' => [
                    'route_no' => '125560825',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '3793',
                'bank_id' => '23',
                'bank_branch_name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'route_no' => '125570378',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '3794',
                'bank_id' => '23',
                'bank_branch_name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'route_no' => '125580100',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '3795',
                'bank_id' => '23',
                'bank_branch_name' => 'KULAURA',
                'bank_branch_data' => [
                    'route_no' => '125580942',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '3796',
                'bank_id' => '23',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125581183',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '3797',
                'bank_id' => '23',
                'bank_branch_name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'route_no' => '125581725',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '3798',
                'bank_id' => '23',
                'bank_branch_name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125591036',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '3799',
                'bank_id' => '23',
                'bank_branch_name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'route_no' => '125591423',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '3800',
                'bank_id' => '23',
                'bank_branch_name' => 'NIMTALA',
                'bank_branch_data' => [
                    'route_no' => '125591665',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '3801',
                'bank_id' => '23',
                'bank_branch_name' => 'BHALUKA',
                'bank_branch_data' => [
                    'route_no' => '125610317',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '3802',
                'bank_id' => '23',
                'bank_branch_name' => 'FULBARIA',
                'bank_branch_data' => [
                    'route_no' => '125610946',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '3803',
                'bank_id' => '23',
                'bank_branch_name' => 'MUKTAGACHA SME',
                'bank_branch_data' => [
                    'route_no' => '125611703',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '3804',
                'bank_id' => '23',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'route_no' => '125611758',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '3805',
                'bank_id' => '23',
                'bank_branch_name' => 'TRISHAL',
                'bank_branch_data' => [
                    'route_no' => '125612357',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '3806',
                'bank_id' => '23',
                'bank_branch_name' => 'MANDA',
                'bank_branch_data' => [
                    'route_no' => '125641007',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '3807',
                'bank_id' => '23',
                'bank_branch_name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'route_no' => '125641094',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '3808',
                'bank_id' => '23',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'route_no' => '125641186',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '3809',
                'bank_id' => '23',
                'bank_branch_name' => 'NAZIPUR',
                'bank_branch_data' => [
                    'route_no' => '125641249',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '3810',
                'bank_id' => '23',
                'bank_branch_name' => 'SAPAHAR',
                'bank_branch_data' => [
                    'route_no' => '125641757',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '3811',
                'bank_id' => '23',
                'bank_branch_name' => 'LOHAGARA',
                'bank_branch_data' => [
                    'route_no' => '125650469',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '3812',
                'bank_id' => '23',
                'bank_branch_name' => 'NARAIL',
                'bank_branch_data' => [
                    'route_no' => '125650643',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '3813',
                'bank_id' => '23',
                'bank_branch_name' => 'ARAIHAZAR',
                'bank_branch_data' => [
                    'route_no' => '125670049',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '3814',
                'bank_id' => '23',
                'bank_branch_name' => 'BHULTA',
                'bank_branch_data' => [
                    'route_no' => '125670223',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '3815',
                'bank_id' => '23',
                'bank_branch_name' => 'FATULLA',
                'bank_branch_data' => [
                    'route_no' => '125670528',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '3816',
                'bank_id' => '23',
                'bank_branch_name' => 'KATCHPUR',
                'bank_branch_data' => [
                    'route_no' => '125670823',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '3817',
                'bank_id' => '23',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '125671185',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '3818',
                'bank_id' => '23',
                'bank_branch_name' => 'NITAIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125671277',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '3819',
                'bank_id' => '23',
                'bank_branch_name' => 'SONARGAON SME',
                'bank_branch_data' => [
                    'route_no' => '125671701',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '3820',
                'bank_id' => '23',
                'bank_branch_name' => 'MADHABDI',
                'bank_branch_data' => [
                    'route_no' => '125680671',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '3821',
                'bank_id' => '23',
                'bank_branch_name' => 'MONOHARDI',
                'bank_branch_data' => [
                    'route_no' => '125680734',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '3822',
                'bank_id' => '23',
                'bank_branch_name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'route_no' => '125680855',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '3823',
                'bank_id' => '23',
                'bank_branch_name' => 'PALASH',
                'bank_branch_data' => [
                    'route_no' => '125680918',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '3824',
                'bank_id' => '23',
                'bank_branch_name' => 'RAIPURA',
                'bank_branch_data' => [
                    'route_no' => '125681096',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '3825',
                'bank_id' => '23',
                'bank_branch_name' => 'CHANCHAKOIR',
                'bank_branch_data' => [
                    'route_no' => '125690311',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '3826',
                'bank_id' => '23',
                'bank_branch_name' => 'NATORE',
                'bank_branch_data' => [
                    'route_no' => '125691099',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '3827',
                'bank_id' => '23',
                'bank_branch_name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'route_no' => '125700256',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '3828',
                'bank_id' => '23',
                'bank_branch_name' => 'ROHANPUR',
                'bank_branch_data' => [
                    'route_no' => '125700885',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '3829',
                'bank_id' => '23',
                'bank_branch_name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'route_no' => '125700948',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '3830',
                'bank_id' => '23',
                'bank_branch_name' => 'NETROKONA',
                'bank_branch_data' => [
                    'route_no' => '125720731',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '3831',
                'bank_id' => '23',
                'bank_branch_name' => 'JALDHAKA',
                'bank_branch_data' => [
                    'route_no' => '125730468',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '3832',
                'bank_id' => '23',
                'bank_branch_name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'route_no' => '125730734',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '3833',
                'bank_id' => '23',
                'bank_branch_name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'route_no' => '125730792',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '3834',
                'bank_id' => '23',
                'bank_branch_name' => 'BANK ROAD',
                'bank_branch_data' => [
                    'route_no' => '125750222',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '3835',
                'bank_id' => '23',
                'bank_branch_name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'route_no' => '125750251',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '3836',
                'bank_id' => '23',
                'bank_branch_name' => 'CHAPRASHIRHAT SME',
                'bank_branch_data' => [
                    'route_no' => '125750448',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '3837',
                'bank_id' => '23',
                'bank_branch_name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'route_no' => '125750585',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '3838',
                'bank_id' => '23',
                'bank_branch_name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'route_no' => '125750677',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '3839',
                'bank_id' => '23',
                'bank_branch_name' => 'MAIJDEE COURT',
                'bank_branch_data' => [
                    'route_no' => '125751571',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '3840',
                'bank_id' => '23',
                'bank_branch_name' => 'SENBAG',
                'bank_branch_data' => [
                    'route_no' => '125752088',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '3841',
                'bank_id' => '23',
                'bank_branch_name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'route_no' => '125752233',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '3842',
                'bank_id' => '23',
                'bank_branch_name' => 'SUBARNA CHAR',
                'bank_branch_data' => [
                    'route_no' => '125752354',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '3843',
                'bank_id' => '23',
                'bank_branch_name' => 'CHATMOHAR',
                'bank_branch_data' => [
                    'route_no' => '125760641',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '3844',
                'bank_id' => '23',
                'bank_branch_name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'route_no' => '125761211',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '3845',
                'bank_id' => '23',
                'bank_branch_name' => 'KASHINATHPUR',
                'bank_branch_data' => [
                    'route_no' => '125761332',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '3846',
                'bank_id' => '23',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'route_no' => '125761787',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '3847',
                'bank_id' => '23',
                'bank_branch_name' => 'SANTHIA',
                'bank_branch_data' => [
                    'route_no' => '125762052',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '3848',
                'bank_id' => '23',
                'bank_branch_name' => 'SUJANAGAR SME',
                'bank_branch_data' => [
                    'route_no' => '125762265',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '3849',
                'bank_id' => '23',
                'bank_branch_name' => 'DEBIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125770194',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '3850',
                'bank_id' => '23',
                'bank_branch_name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'route_no' => '125770552',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '3851',
                'bank_id' => '23',
                'bank_branch_name' => 'KALAPARA',
                'bank_branch_data' => [
                    'route_no' => '125780526',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '3852',
                'bank_id' => '23',
                'bank_branch_name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'route_no' => '125781091',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '3853',
                'bank_id' => '23',
                'bank_branch_name' => 'BHANDARIA',
                'bank_branch_data' => [
                    'route_no' => '125790132',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '3854',
                'bank_id' => '23',
                'bank_branch_name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'route_no' => '125790529',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '3855',
                'bank_id' => '23',
                'bank_branch_name' => 'MIARHAT',
                'bank_branch_data' => [
                    'route_no' => '125790611',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '3856',
                'bank_id' => '23',
                'bank_branch_name' => 'PIROJPUR',
                'bank_branch_data' => [
                    'route_no' => '125790761',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '3857',
                'bank_id' => '23',
                'bank_branch_name' => 'BANESHWAR',
                'bank_branch_data' => [
                    'route_no' => '125810225',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '3858',
                'bank_id' => '23',
                'bank_branch_name' => 'BHAWANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125810346',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '3859',
                'bank_id' => '23',
                'bank_branch_name' => 'KESHOREHAT SME',
                'bank_branch_data' => [
                    'route_no' => '125811079',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '3860',
                'bank_id' => '23',
                'bank_branch_name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'route_no' => '125811637',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '3861',
                'bank_id' => '23',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '125811932',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '3862',
                'bank_id' => '23',
                'bank_branch_name' => 'PANGSHA',
                'bank_branch_data' => [
                    'route_no' => '125820673',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '3863',
                'bank_id' => '23',
                'bank_branch_name' => 'RAJBARI',
                'bank_branch_data' => [
                    'route_no' => '125820736',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '3864',
                'bank_id' => '23',
                'bank_branch_name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'route_no' => '125840529',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '3865',
                'bank_id' => '23',
                'bank_branch_name' => 'DHAP',
                'bank_branch_data' => [
                    'route_no' => '125850522',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '3866',
                'bank_id' => '23',
                'bank_branch_name' => 'PIRGANJ',
                'bank_branch_data' => [
                    'route_no' => '125851363',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '3867',
                'bank_id' => '23',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'route_no' => '125851455',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '3868',
                'bank_id' => '23',
                'bank_branch_name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'route_no' => '125860196',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '3869',
                'bank_id' => '23',
                'bank_branch_name' => 'NARIA',
                'bank_branch_data' => [
                    'route_no' => '125860583',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '3870',
                'bank_id' => '23',
                'bank_branch_name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'route_no' => '125860675',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '3871',
                'bank_id' => '23',
                'bank_branch_name' => 'KALAROA',
                'bank_branch_data' => [
                    'route_no' => '125870586',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '3872',
                'bank_id' => '23',
                'bank_branch_name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'route_no' => '125870610',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '3873',
                'bank_id' => '23',
                'bank_branch_name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'route_no' => '125871093',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '3874',
                'bank_id' => '23',
                'bank_branch_name' => 'SHYAM NAGAR',
                'bank_branch_data' => [
                    'route_no' => '125871219',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '3875',
                'bank_id' => '23',
                'bank_branch_name' => 'BELKUCHI',
                'bank_branch_data' => [
                    'route_no' => '125880226',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '3876',
                'bank_id' => '23',
                'bank_branch_name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'route_no' => '125881870',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '3877',
                'bank_id' => '23',
                'bank_branch_name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'route_no' => '125881904',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '3878',
                'bank_id' => '23',
                'bank_branch_name' => 'ULLAPARA',
                'bank_branch_data' => [
                    'route_no' => '125882237',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '3879',
                'bank_id' => '23',
                'bank_branch_name' => 'SHERPUR',
                'bank_branch_data' => [
                    'route_no' => '125890553',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '3880',
                'bank_id' => '23',
                'bank_branch_name' => 'CHHATAK',
                'bank_branch_data' => [
                    'route_no' => '125900227',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '3881',
                'bank_id' => '23',
                'bank_branch_name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'route_no' => '125900498',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '3882',
                'bank_id' => '23',
                'bank_branch_name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'route_no' => '125901121',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '3883',
                'bank_id' => '23',
                'bank_branch_name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'route_no' => '125910046',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '3884',
                'bank_id' => '23',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125910312',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '3885',
                'bank_id' => '23',
                'bank_branch_name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'route_no' => '125910433',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '3886',
                'bank_id' => '23',
                'bank_branch_name' => 'DAKSHIN SURMA',
                'bank_branch_data' => [
                    'route_no' => '125910954',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '3887',
                'bank_id' => '23',
                'bank_branch_name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125911540',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '3888',
                'bank_id' => '23',
                'bank_branch_name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'route_no' => '125911603',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '3889',
                'bank_id' => '23',
                'bank_branch_name' => 'KANAIGHAT',
                'bank_branch_data' => [
                    'route_no' => '125912086',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '3890',
                'bank_id' => '23',
                'bank_branch_name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'route_no' => '125912507',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '3891',
                'bank_id' => '23',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'route_no' => '125913551',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '3892',
                'bank_id' => '23',
                'bank_branch_name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '125914150',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '3893',
                'bank_id' => '23',
                'bank_branch_name' => 'ALLENGA SME',
                'bank_branch_data' => [
                    'route_no' => '125930118',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '3894',
                'bank_id' => '23',
                'bank_branch_name' => 'MADHUPUR',
                'bank_branch_data' => [
                    'route_no' => '125931483',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '3895',
                'bank_id' => '23',
                'bank_branch_name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'route_no' => '125931517',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '3896',
                'bank_id' => '23',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'route_no' => '125932295',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '3897',
                'bank_id' => '23',
                'bank_branch_name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'route_no' => '125940979',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '3898',
                'bank_id' => '24',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'route_no' => '130060286',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '3899',
                'bank_id' => '24',
                'bank_branch_name' => 'BHOLA',
                'bank_branch_data' => [
                    'route_no' => '130090106',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '3900',
                'bank_id' => '24',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'route_no' => '130100375',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '3901',
                'bank_id' => '24',
                'bank_branch_name' => 'SHERPUR SME',
                'bank_branch_data' => [
                    'route_no' => '130102744',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '3902',
                'bank_id' => '24',
                'bank_branch_name' => 'ASHUGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '130120113',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '3903',
                'bank_id' => '24',
                'bank_branch_name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'route_no' => '130130316',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '3904',
                'bank_id' => '24',
                'bank_branch_name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'route_no' => '130130882',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '3905',
                'bank_id' => '24',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'route_no' => '130150138',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '3906',
                'bank_id' => '24',
                'bank_branch_name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'route_no' => '130150462',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '3907',
                'bank_id' => '24',
                'bank_branch_name' => 'AZADI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '130150738',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '3908',
                'bank_id' => '24',
                'bank_branch_name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'route_no' => '130150796',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '3909',
                'bank_id' => '24',
                'bank_branch_name' => 'BHATIARY',
                'bank_branch_data' => [
                    'route_no' => '130151216',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '3910',
                'bank_id' => '24',
                'bank_branch_name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'route_no' => '130152444',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '3911',
                'bank_id' => '24',
                'bank_branch_name' => 'JUBILEE ROAD(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'route_no' => '130153672',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '3912',
                'bank_id' => '24',
                'bank_branch_name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'route_no' => '130153735',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '3913',
                'bank_id' => '24',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'route_no' => '130154271',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '3914',
                'bank_id' => '24',
                'bank_branch_name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'route_no' => '130154668',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '3915',
                'bank_id' => '24',
                'bank_branch_name' => 'NASIRABAD',
                'bank_branch_data' => [
                    'route_no' => '130155533',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '3916',
                'bank_id' => '24',
                'bank_branch_name' => 'BARURA',
                'bank_branch_data' => [
                    'route_no' => '130190493',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '3917',
                'bank_id' => '24',
                'bank_branch_name' => 'BIZRA BAZAR',
                'bank_branch_data' => [
                    'route_no' => '130190701',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '3918',
                'bank_id' => '24',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'route_no' => '130191155',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '3919',
                'bank_id' => '24',
                'bank_branch_name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'route_no' => '130192112',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '3920',
                'bank_id' => '24',
                'bank_branch_name' => 'LAKSAM',
                'bank_branch_data' => [
                    'route_no' => '130192712',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '3921',
                'bank_id' => '24',
                'bank_branch_name' => 'NATHERPETUA',
                'bank_branch_data' => [
                    'route_no' => '130193311',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '3922',
                'bank_id' => '24',
                'bank_branch_name' => 'SUAGAZI',
                'bank_branch_data' => [
                    'route_no' => '130194031',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '3923',
                'bank_id' => '24',
                'bank_branch_name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'route_no' => '130220163',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '3924',
                'bank_id' => '24',
                'bank_branch_name' => 'ASHULIA',
                'bank_branch_data' => [
                    'route_no' => '130260228',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '3925',
                'bank_id' => '24',
                'bank_branch_name' => 'GULSHAN LINK ROAD',
                'bank_branch_data' => [
                    'route_no' => '130260307',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '3926',
                'bank_id' => '24',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'route_no' => '130260431',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '3927',
                'bank_id' => '24',
                'bank_branch_name' => 'CHISTIA MARKET',
                'bank_branch_data' => [
                    'route_no' => '130260794',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '3928',
                'bank_id' => '24',
                'bank_branch_name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'route_no' => '130260910',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '3929',
                'bank_id' => '24',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'route_no' => '130261180',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '3930',
                'bank_id' => '24',
                'bank_branch_name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'route_no' => '130261335',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '3931',
                'bank_id' => '24',
                'bank_branch_name' => 'KAMARPARA',
                'bank_branch_data' => [
                    'route_no' => '130261519',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '3932',
                'bank_id' => '24',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'route_no' => '130261722',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '3933',
                'bank_id' => '24',
                'bank_branch_name' => 'KALAMPUR',
                'bank_branch_data' => [
                    'route_no' => '130262442',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '3934',
                'bank_id' => '24',
                'bank_branch_name' => 'LALMATIA',
                'bank_branch_data' => [
                    'route_no' => '130262839',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '3935',
                'bank_id' => '24',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'route_no' => '130262989',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '3936',
                'bank_id' => '24',
                'bank_branch_name' => 'MIRPUR-1',
                'bank_branch_data' => [
                    'route_no' => '130263104',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '3937',
                'bank_id' => '24',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'route_no' => '130263191',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '3938',
                'bank_id' => '24',
                'bank_branch_name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'route_no' => '130263704',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '3939',
                'bank_id' => '24',
                'bank_branch_name' => 'RAYERBAGH',
                'bank_branch_data' => [
                    'route_no' => '130263959',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '3940',
                'bank_id' => '24',
                'bank_branch_name' => 'RING ROAD',
                'bank_branch_data' => [
                    'route_no' => '130263975',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '3941',
                'bank_id' => '24',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'route_no' => '130264095',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '3942',
                'bank_id' => '24',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'route_no' => '130264637',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '3943',
                'bank_id' => '24',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'route_no' => '130270005',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '3944',
                'bank_id' => '24',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '130270092',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '3945',
                'bank_id' => '24',
                'bank_branch_name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'route_no' => '130270139',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '3946',
                'bank_id' => '24',
                'bank_branch_name' => 'DHOLAIKHAL',
                'bank_branch_data' => [
                    'route_no' => '130271846',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '3947',
                'bank_id' => '24',
                'bank_branch_name' => 'DILKUSHA',
                'bank_branch_data' => [
                    'route_no' => '130271909',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '3948',
                'bank_id' => '24',
                'bank_branch_name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'route_no' => '130272324',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '3949',
                'bank_id' => '24',
                'bank_branch_name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'route_no' => '130272687',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '3950',
                'bank_id' => '24',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'route_no' => '130272982',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '3951',
                'bank_id' => '24',
                'bank_branch_name' => 'JURAIN SME',
                'bank_branch_data' => [
                    'route_no' => '130273323',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '3952',
                'bank_id' => '24',
                'bank_branch_name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'route_no' => '130273949',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '3953',
                'bank_id' => '24',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'route_no' => '130274243',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '3954',
                'bank_id' => '24',
                'bank_branch_name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'route_no' => '130274427',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '3955',
                'bank_id' => '24',
                'bank_branch_name' => 'NAYA BAZAR ISLAMI BANKING',
                'bank_branch_data' => [
                    'route_no' => '130274843',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '3956',
                'bank_id' => '24',
                'bank_branch_name' => 'SHANTINAGAR',
                'bank_branch_data' => [
                    'route_no' => '130276346',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '3957',
                'bank_id' => '24',
                'bank_branch_name' => 'SONARGAON ROAD',
                'bank_branch_data' => [
                    'route_no' => '130276588',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '3958',
                'bank_id' => '24',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'route_no' => '130280679',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '3959',
                'bank_id' => '24',
                'bank_branch_name' => 'SETABGANJ',
                'bank_branch_data' => [
                    'route_no' => '130282172',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '3960',
                'bank_id' => '24',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'route_no' => '130290522',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '3961',
                'bank_id' => '24',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'route_no' => '130300520',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '3962',
                'bank_id' => '24',
                'bank_branch_name' => 'CHANDRA',
                'bank_branch_data' => [
                    'route_no' => '130330408',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '3963',
                'bank_id' => '24',
                'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                'bank_branch_data' => [
                    'route_no' => '130330558',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '3964',
                'bank_id' => '24',
                'bank_branch_name' => 'KONABARI',
                'bank_branch_data' => [
                    'route_no' => '130330945',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '3965',
                'bank_id' => '24',
                'bank_branch_name' => 'MAWNA',
                'bank_branch_data' => [
                    'route_no' => '130331007',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '3966',
                'bank_id' => '24',
                'bank_branch_name' => 'TONGI',
                'bank_branch_data' => [
                    'route_no' => '130331636',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '3967',
                'bank_id' => '24',
                'bank_branch_name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'route_no' => '130350370',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '3968',
                'bank_id' => '24',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'route_no' => '130410944',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '3969',
                'bank_id' => '24',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'route_no' => '130471541',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '3970',
                'bank_id' => '24',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'route_no' => '130500946',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '3971',
                'bank_id' => '24',
                'bank_branch_name' => 'RAIPUR',
                'bank_branch_data' => [
                    'route_no' => '130510978',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '3972',
                'bank_id' => '24',
                'bank_branch_name' => 'MADARIPUR SME',
                'bank_branch_data' => [
                    'route_no' => '130540414',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '3973',
                'bank_id' => '24',
                'bank_branch_name' => 'MOULVI BAZAR SME',
                'bank_branch_data' => [
                    'route_no' => '130581194',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '3974',
                'bank_id' => '24',
                'bank_branch_name' => 'BALIGAON',
                'bank_branch_data' => [
                    'route_no' => '130590101',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '3975',
                'bank_id' => '24',
                'bank_branch_name' => 'BHABER CHAR',
                'bank_branch_data' => [
                    'route_no' => '130590280',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '3976',
                'bank_id' => '24',
                'bank_branch_name' => 'MUNSHIGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '130591047',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '3977',
                'bank_id' => '24',
                'bank_branch_name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'route_no' => '130591421',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '3978',
                'bank_id' => '24',
                'bank_branch_name' => 'TONGI BARI',
                'bank_branch_data' => [
                    'route_no' => '130591542',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '3979',
                'bank_id' => '24',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'route_no' => '130611756',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '3980',
                'bank_id' => '24',
                'bank_branch_name' => 'MANDA',
                'bank_branch_data' => [
                    'route_no' => '130641005',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '3981',
                'bank_id' => '24',
                'bank_branch_name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'route_no' => '130641092',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '3982',
                'bank_id' => '24',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'route_no' => '130641184',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '3983',
                'bank_id' => '24',
                'bank_branch_name' => 'NARAYANGANJ LINK ROAD',
                'bank_branch_data' => [
                    'route_no' => '130670184',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '3984',
                'bank_id' => '24',
                'bank_branch_name' => 'BHULTA',
                'bank_branch_data' => [
                    'route_no' => '130670221',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '3985',
                'bank_id' => '24',
                'bank_branch_name' => 'KANCHAN',
                'bank_branch_data' => [
                    'route_no' => '130670797',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '3986',
                'bank_id' => '24',
                'bank_branch_name' => 'KATCHPUR',
                'bank_branch_data' => [
                    'route_no' => '130670821',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '3987',
                'bank_id' => '24',
                'bank_branch_name' => 'MURAPARA',
                'bank_branch_data' => [
                    'route_no' => '130671125',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '3988',
                'bank_id' => '24',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'route_no' => '130671183',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '3989',
                'bank_id' => '24',
                'bank_branch_name' => 'RUPGANJ',
                'bank_branch_data' => [
                    'route_no' => '130671459',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '3990',
                'bank_id' => '24',
                'bank_branch_name' => 'TANBAZAR',
                'bank_branch_data' => [
                    'route_no' => '130671783',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '3991',
                'bank_id' => '24',
                'bank_branch_name' => 'RUPSHI',
                'bank_branch_data' => [
                    'route_no' => '130674485',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '3992',
                'bank_id' => '24',
                'bank_branch_name' => 'MADHABDI',
                'bank_branch_data' => [
                    'route_no' => '130680679',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '3993',
                'bank_id' => '24',
                'bank_branch_name' => 'NATORE',
                'bank_branch_data' => [
                    'route_no' => '130691097',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '3994',
                'bank_id' => '24',
                'bank_branch_name' => 'CHAPAI NAWABGANJ SME',
                'bank_branch_data' => [
                    'route_no' => '130700267',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '3995',
                'bank_id' => '24',
                'bank_branch_name' => 'NETROKONA',
                'bank_branch_data' => [
                    'route_no' => '130720739',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '3996',
                'bank_id' => '24',
                'bank_branch_name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'route_no' => '130750259',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '3997',
                'bank_id' => '24',
                'bank_branch_name' => 'CHOWMUHANI',
                'bank_branch_data' => [
                    'route_no' => '130750341',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '3998',
                'bank_id' => '24',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'route_no' => '130761785',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '3999',
                'bank_id' => '24',
                'bank_branch_name' => 'BHAWANIGANJ',
                'bank_branch_data' => [
                    'route_no' => '130810344',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '4000',
                'bank_id' => '24',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'route_no' => '130811930',
                ],
                'enabled' => true,
            ],
        ];
    }
}
