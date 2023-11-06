<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch5Seeder extends Seeder
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
                    'id' => '4001',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KAUNIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130850762',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '4002',
                    'bank_id' => '24',
                    'bank_branch_name' => 'PIRGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130851332',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '4003',
                    'bank_id' => '24',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130851453',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '4004',
                    'bank_id' => '24',
                    'bank_branch_name' => 'KAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130881094',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '4005',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130881878',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '4006',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130890551',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '4007',
                    'bank_id' => '24',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130910310',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '4008',
                    'bank_id' => '24',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130911548',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '4009',
                    'bank_id' => '24',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130913559',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '4010',
                    'bank_id' => '24',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130932293',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '4011',
                    'bank_id' => '24',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '130940977',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '4012',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAGERHAT(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135010107',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '4013',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DIGRAJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135010402',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '4014',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FAILAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135010431',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '4015',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LOKHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135010828',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '4016',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MONGLA PORT COMPOUND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135011001',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '4017',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MORELGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135011030',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '4018',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PUTIKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135011151',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '4019',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAIL ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135011180',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '4020',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135011214',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '4021',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARANKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135011306',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '4022',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANDARBAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135030132',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '4023',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LAMA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135030190',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '4024',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAIKHANGCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135030224',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '4025',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135040043',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '4026',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARGUNA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135040193',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '4027',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AGAILJHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060078',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '4028',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALEKANDA BANGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060102',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '4029',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAKERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060223',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '4030',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARISAL CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060344',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '4031',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAZAR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060407',
                        ),
                    'enabled' => true,
                ),
            31 =>
                array(
                    'id' => '4032',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHURGHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060494',
                        ),
                    'enabled' => true,
                ),
            32 =>
                array(
                    'id' => '4033',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135060702',
                        ),
                    'enabled' => true,
                ),
            33 =>
                array(
                    'id' => '4034',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALASHKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061064',
                        ),
                    'enabled' => true,
                ),
            34 =>
                array(
                    'id' => '4035',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MULADI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061219',
                        ),
                    'enabled' => true,
                ),
            35 =>
                array(
                    'id' => '4036',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MEDICAL COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061330',
                        ),
                    'enabled' => true,
                ),
            36 =>
                array(
                    'id' => '4037',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NUTAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061543',
                        ),
                    'enabled' => true,
                ),
            37 =>
                array(
                    'id' => '4038',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PADRISHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061572',
                        ),
                    'enabled' => true,
                ),
            38 =>
                array(
                    'id' => '4039',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061635',
                        ),
                    'enabled' => true,
                ),
            39 =>
                array(
                    'id' => '4040',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PORT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061664',
                        ),
                    'enabled' => true,
                ),
            40 =>
                array(
                    'id' => '4041',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KASHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135061930',
                        ),
                    'enabled' => true,
                ),
            41 =>
                array(
                    'id' => '4042',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHARIKAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135062021',
                        ),
                    'enabled' => true,
                ),
            42 =>
                array(
                    'id' => '4043',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TORKI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135062205',
                        ),
                    'enabled' => true,
                ),
            43 =>
                array(
                    'id' => '4044',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAKARDHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135067776',
                        ),
                    'enabled' => true,
                ),
            44 =>
                array(
                    'id' => '4045',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090048',
                        ),
                    'enabled' => true,
                ),
            45 =>
                array(
                    'id' => '4046',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHOLA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090130',
                        ),
                    'enabled' => true,
                ),
            46 =>
                array(
                    'id' => '4047',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BORHANUDDIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090198',
                        ),
                    'enabled' => true,
                ),
            47 =>
                array(
                    'id' => '4048',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAR FASHION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090222',
                        ),
                    'enabled' => true,
                ),
            48 =>
                array(
                    'id' => '4049',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DARUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090343',
                        ),
                    'enabled' => true,
                ),
            49 =>
                array(
                    'id' => '4050',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUNJERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090648',
                        ),
                    'enabled' => true,
                ),
            50 =>
                array(
                    'id' => '4051',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LALMOHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090701',
                        ),
                    'enabled' => true,
                ),
            51 =>
                array(
                    'id' => '4052',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUNSHIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135090914',
                        ),
                    'enabled' => true,
                ),
            52 =>
                array(
                    'id' => '4053',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ADAMDIGHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135100046',
                        ),
                    'enabled' => true,
                ),
            53 =>
                array(
                    'id' => '4054',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BOGRA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135100462',
                        ),
                    'enabled' => true,
                ),
            54 =>
                array(
                    'id' => '4055',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BSCIC IND.ESTATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135100525',
                        ),
                    'enabled' => true,
                ),
            55 =>
                array(
                    'id' => '4056',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDAIKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135100675',
                        ),
                    'enabled' => true,
                ),
            56 =>
                array(
                    'id' => '4057',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDAN BAISHYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135100709',
                        ),
                    'enabled' => true,
                ),
            57 =>
                array(
                    'id' => '4058',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDNI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135100738',
                        ),
                    'enabled' => true,
                ),
            58 =>
                array(
                    'id' => '4059',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FULDIGHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135101003',
                        ),
                    'enabled' => true,
                ),
            59 =>
                array(
                    'id' => '4060',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GODARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135101124',
                        ),
                    'enabled' => true,
                ),
            60 =>
                array(
                    'id' => '4061',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATNERPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135101579',
                        ),
                    'enabled' => true,
                ),
            61 =>
                array(
                    'id' => '4062',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUNDAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135101661',
                        ),
                    'enabled' => true,
                ),
            62 =>
                array(
                    'id' => '4063',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102352',
                        ),
                    'enabled' => true,
                ),
            63 =>
                array(
                    'id' => '4064',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RURAL DEVELOPMENT ACADEMY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102381',
                        ),
                    'enabled' => true,
                ),
            64 =>
                array(
                    'id' => '4065',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SANTAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102415',
                        ),
                    'enabled' => true,
                ),
            65 =>
                array(
                    'id' => '4066',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SAPTAPADI MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102444',
                        ),
                    'enabled' => true,
                ),
            66 =>
                array(
                    'id' => '4067',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102749',
                        ),
                    'enabled' => true,
                ),
            67 =>
                array(
                    'id' => '4068',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102802',
                        ),
                    'enabled' => true,
                ),
            68 =>
                array(
                    'id' => '4069',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SONATOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135102981',
                        ),
                    'enabled' => true,
                ),
            69 =>
                array(
                    'id' => '4070',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AKHAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120042',
                        ),
                    'enabled' => true,
                ),
            70 =>
                array(
                    'id' => '4071',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ARUAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120071',
                        ),
                    'enabled' => true,
                ),
            71 =>
                array(
                    'id' => '4072',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120105',
                        ),
                    'enabled' => true,
                ),
            72 =>
                array(
                    'id' => '4073',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MAINPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120150',
                        ),
                    'enabled' => true,
                ),
            73 =>
                array(
                    'id' => '4074',
                    'bank_id' => '25',
                    'bank_branch_name' => 'B.BARIA COOPERATIVE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120192',
                        ),
                    'enabled' => true,
                ),
            74 =>
                array(
                    'id' => '4075',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANCHARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120255',
                        ),
                    'enabled' => true,
                ),
            75 =>
                array(
                    'id' => '4076',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAYEK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120318',
                        ),
                    'enabled' => true,
                ),
            76 =>
                array(
                    'id' => '4077',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHOLACHANG PURAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120347',
                        ),
                    'enabled' => true,
                ),
            77 =>
                array(
                    'id' => '4078',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BIDYAKUT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120376',
                        ),
                    'enabled' => true,
                ),
            78 =>
                array(
                    'id' => '4079',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BRAHMANBARIA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120468',
                        ),
                    'enabled' => true,
                ),
            79 =>
                array(
                    'id' => '4080',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHUNTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120705',
                        ),
                    'enabled' => true,
                ),
            80 =>
                array(
                    'id' => '4081',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KRISNA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120734',
                        ),
                    'enabled' => true,
                ),
            81 =>
                array(
                    'id' => '4082',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHINAIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135120992',
                        ),
                    'enabled' => true,
                ),
            82 =>
                array(
                    'id' => '4083',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KASBA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121038',
                        ),
                    'enabled' => true,
                ),
            83 =>
                array(
                    'id' => '4084',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUTI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121067',
                        ),
                    'enabled' => true,
                ),
            84 =>
                array(
                    'id' => '4085',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOGRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121333',
                        ),
                    'enabled' => true,
                ),
            85 =>
                array(
                    'id' => '4086',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NABINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121362',
                        ),
                    'enabled' => true,
                ),
            86 =>
                array(
                    'id' => '4087',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NIAZPARK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121454',
                        ),
                    'enabled' => true,
                ),
            87 =>
                array(
                    'id' => '4088',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPASDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121533',
                        ),
                    'enabled' => true,
                ),
            88 =>
                array(
                    'id' => '4089',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARAIL CO-OPERATIVE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121638',
                        ),
                    'enabled' => true,
                ),
            89 =>
                array(
                    'id' => '4090',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHUHILPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121759',
                        ),
                    'enabled' => true,
                ),
            90 =>
                array(
                    'id' => '4091',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TANBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121870',
                        ),
                    'enabled' => true,
                ),
            91 =>
                array(
                    'id' => '4092',
                    'bank_id' => '25',
                    'bank_branch_name' => 'UJANCHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121904',
                        ),
                    'enabled' => true,
                ),
            92 =>
                array(
                    'id' => '4093',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZIA SARKARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135121933',
                        ),
                    'enabled' => true,
                ),
            93 =>
                array(
                    'id' => '4094',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BALITHUBA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130087',
                        ),
                    'enabled' => true,
                ),
            94 =>
                array(
                    'id' => '4095',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BEPANIBAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130258',
                        ),
                    'enabled' => true,
                ),
            95 =>
                array(
                    'id' => '4096',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDPUR CO-OPERATVE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130340',
                        ),
                    'enabled' => true,
                ),
            96 =>
                array(
                    'id' => '4097',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDPUR PURAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130403',
                        ),
                    'enabled' => true,
                ),
            97 =>
                array(
                    'id' => '4098',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FARIDGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130674',
                        ),
                    'enabled' => true,
                ),
            98 =>
                array(
                    'id' => '4099',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GALLAK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130737',
                        ),
                    'enabled' => true,
                ),
            99 =>
                array(
                    'id' => '4100',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130887',
                        ),
                    'enabled' => true,
                ),
            100 =>
                array(
                    'id' => '4101',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KACHUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130911',
                        ),
                    'enabled' => true,
                ),
            101 =>
                array(
                    'id' => '4102',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135130979',
                        ),
                    'enabled' => true,
                ),
            102 =>
                array(
                    'id' => '4103',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MATLAB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131181',
                        ),
                    'enabled' => true,
                ),
            103 =>
                array(
                    'id' => '4104',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131307',
                        ),
                    'enabled' => true,
                ),
            104 =>
                array(
                    'id' => '4105',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUJATPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131428',
                        ),
                    'enabled' => true,
                ),
            105 =>
                array(
                    'id' => '4106',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NATUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131486',
                        ),
                    'enabled' => true,
                ),
            106 =>
                array(
                    'id' => '4107',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PALAKHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131602',
                        ),
                    'enabled' => true,
                ),
            107 =>
                array(
                    'id' => '4108',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SATBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131844',
                        ),
                    'enabled' => true,
                ),
            108 =>
                array(
                    'id' => '4109',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SENGARCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135131907',
                        ),
                    'enabled' => true,
                ),
            109 =>
                array(
                    'id' => '4110',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUCHIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135132119',
                        ),
                    'enabled' => true,
                ),
            110 =>
                array(
                    'id' => '4111',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AMBAGAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150317',
                        ),
                    'enabled' => true,
                ),
            111 =>
                array(
                    'id' => '4112',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AMIR MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150375',
                        ),
                    'enabled' => true,
                ),
            112 =>
                array(
                    'id' => '4113',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHITTAGONG VETERINARY AND ANIMAL SCIENCES UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150470',
                        ),
                    'enabled' => true,
                ),
            113 =>
                array(
                    'id' => '4114',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ASAD GANJ CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150612',
                        ),
                    'enabled' => true,
                ),
            114 =>
                array(
                    'id' => '4115',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ASHRAF ALI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150641',
                        ),
                    'enabled' => true,
                ),
            115 =>
                array(
                    'id' => '4116',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ATURAR DEPO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150704',
                        ),
                    'enabled' => true,
                ),
            116 =>
                array(
                    'id' => '4117',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAIZID BOSTAMI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150825',
                        ),
                    'enabled' => true,
                ),
            117 =>
                array(
                    'id' => '4118',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BALUCHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135150854',
                        ),
                    'enabled' => true,
                ),
            118 =>
                array(
                    'id' => '4119',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARABKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151037',
                        ),
                    'enabled' => true,
                ),
            119 =>
                array(
                    'id' => '4120',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BOMANGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151332',
                        ),
                    'enabled' => true,
                ),
            120 =>
                array(
                    'id' => '4121',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BURISCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151453',
                        ),
                    'enabled' => true,
                ),
            121 =>
                array(
                    'id' => '4122',
                    'bank_id' => '25',
                    'bank_branch_name' => 'C.E.P.Z.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151574',
                        ),
                    'enabled' => true,
                ),
            122 =>
                array(
                    'id' => '4123',
                    'bank_id' => '25',
                    'bank_branch_name' => 'C.U.F.L',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151637',
                        ),
                    'enabled' => true,
                ),
            123 =>
                array(
                    'id' => '4124',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAKBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151729',
                        ),
                    'enabled' => true,
                ),
            124 =>
                array(
                    'id' => '4125',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAKTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151758',
                        ),
                    'enabled' => true,
                ),
            125 =>
                array(
                    'id' => '4126',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHITTAGONG CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135151990',
                        ),
                    'enabled' => true,
                ),
            126 =>
                array(
                    'id' => '4127',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHITTAGONG UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152081',
                        ),
                    'enabled' => true,
                ),
            127 =>
                array(
                    'id' => '4128',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHOWDHURI HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152173',
                        ),
                    'enabled' => true,
                ),
            128 =>
                array(
                    'id' => '4129',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CITY CORPORATION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152207',
                        ),
                    'enabled' => true,
                ),
            129 =>
                array(
                    'id' => '4130',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COLONEL HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152294',
                        ),
                    'enabled' => true,
                ),
            130 =>
                array(
                    'id' => '4131',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEWAN HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152449',
                        ),
                    'enabled' => true,
                ),
            131 =>
                array(
                    'id' => '4132',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DOHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152560',
                        ),
                    'enabled' => true,
                ),
            132 =>
                array(
                    'id' => '4133',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DRY DOCK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152599',
                        ),
                    'enabled' => true,
                ),
            133 =>
                array(
                    'id' => '4134',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FAIZIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152652',
                        ),
                    'enabled' => true,
                ),
            134 =>
                array(
                    'id' => '4135',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152744',
                        ),
                    'enabled' => true,
                ),
            135 =>
                array(
                    'id' => '4136',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FERINGHEE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152807',
                        ),
                    'enabled' => true,
                ),
            136 =>
                array(
                    'id' => '4137',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FOREIGN EXCHANGE CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135152836',
                        ),
                    'enabled' => true,
                ),
            137 =>
                array(
                    'id' => '4138',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153019',
                        ),
                    'enabled' => true,
                ),
            138 =>
                array(
                    'id' => '4139',
                    'bank_id' => '25',
                    'bank_branch_name' => 'H.S.S. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153101',
                        ),
                    'enabled' => true,
                ),
            139 =>
                array(
                    'id' => '4140',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATHAZARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153222',
                        ),
                    'enabled' => true,
                ),
            140 =>
                array(
                    'id' => '4141',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JALIL NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153556',
                        ),
                    'enabled' => true,
                ),
            141 =>
                array(
                    'id' => '4142',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JORARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153619',
                        ),
                    'enabled' => true,
                ),
            142 =>
                array(
                    'id' => '4143',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153648',
                        ),
                    'enabled' => true,
                ),
            143 =>
                array(
                    'id' => '4144',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153730',
                        ),
                    'enabled' => true,
                ),
            144 =>
                array(
                    'id' => '4145',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALURGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135153914',
                        ),
                    'enabled' => true,
                ),
            145 =>
                array(
                    'id' => '4146',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAMAR ALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154005',
                        ),
                    'enabled' => true,
                ),
            146 =>
                array(
                    'id' => '4147',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KARERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154063',
                        ),
                    'enabled' => true,
                ),
            147 =>
                array(
                    'id' => '4148',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATGHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154092',
                        ),
                    'enabled' => true,
                ),
            148 =>
                array(
                    'id' => '4149',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAZIR DEWRI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154155',
                        ),
                    'enabled' => true,
                ),
            149 =>
                array(
                    'id' => '4150',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHATUNGANJ CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154300',
                        ),
                    'enabled' => true,
                ),
            150 =>
                array(
                    'id' => '4151',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAKOLIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154397',
                        ),
                    'enabled' => true,
                ),
            151 =>
                array(
                    'id' => '4152',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUMIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154450',
                        ),
                    'enabled' => true,
                ),
            152 =>
                array(
                    'id' => '4153',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LADIES',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154489',
                        ),
                    'enabled' => true,
                ),
            153 =>
                array(
                    'id' => '4154',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LALDIGHI EAST',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154542',
                        ),
                    'enabled' => true,
                ),
            154 =>
                array(
                    'id' => '4155',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LOHA GARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154663',
                        ),
                    'enabled' => true,
                ),
            155 =>
                array(
                    'id' => '4156',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MIMI SUPER MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135154997',
                        ),
                    'enabled' => true,
                ),
            156 =>
                array(
                    'id' => '4157',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MIRSARAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155059',
                        ),
                    'enabled' => true,
                ),
            157 =>
                array(
                    'id' => '4158',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHAMMEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155233',
                        ),
                    'enabled' => true,
                ),
            158 =>
                array(
                    'id' => '4159',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MURADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155325',
                        ),
                    'enabled' => true,
                ),
            159 =>
                array(
                    'id' => '4160',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAZIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155596',
                        ),
                    'enabled' => true,
                ),
            160 =>
                array(
                    'id' => '4161',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155659',
                        ),
                    'enabled' => true,
                ),
            161 =>
                array(
                    'id' => '4162',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PADUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155891',
                        ),
                    'enabled' => true,
                ),
            162 =>
                array(
                    'id' => '4163',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135155925',
                        ),
                    'enabled' => true,
                ),
            163 =>
                array(
                    'id' => '4164',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156166',
                        ),
                    'enabled' => true,
                ),
            164 =>
                array(
                    'id' => '4165',
                    'bank_id' => '25',
                    'bank_branch_name' => 'POMRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156195',
                        ),
                    'enabled' => true,
                ),
            165 =>
                array(
                    'id' => '4166',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PORT CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156287',
                        ),
                    'enabled' => true,
                ),
            166 =>
                array(
                    'id' => '4167',
                    'bank_id' => '25',
                    'bank_branch_name' => 'POTENGA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156311',
                        ),
                    'enabled' => true,
                ),
            167 =>
                array(
                    'id' => '4168',
                    'bank_id' => '25',
                    'bank_branch_name' => 'REAZUDDIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156524',
                        ),
                    'enabled' => true,
                ),
            168 =>
                array(
                    'id' => '4169',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPKANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156645',
                        ),
                    'enabled' => true,
                ),
            169 =>
                array(
                    'id' => '4170',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SADARAN BIMA BHABAN CORP.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156708',
                        ),
                    'enabled' => true,
                ),
            170 =>
                array(
                    'id' => '4171',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156737',
                        ),
                    'enabled' => true,
                ),
            171 =>
                array(
                    'id' => '4172',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SALIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135156858',
                        ),
                    'enabled' => true,
                ),
            172 =>
                array(
                    'id' => '4173',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157002',
                        ),
                    'enabled' => true,
                ),
            173 =>
                array(
                    'id' => '4174',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAHERKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157181',
                        ),
                    'enabled' => true,
                ),
            174 =>
                array(
                    'id' => '4175',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SITAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157394',
                        ),
                    'enabled' => true,
                ),
            175 =>
                array(
                    'id' => '4176',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SK. MUJIB ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157457',
                        ),
                    'enabled' => true,
                ),
            176 =>
                array(
                    'id' => '4177',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STRAND ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157578',
                        ),
                    'enabled' => true,
                ),
            177 =>
                array(
                    'id' => '4178',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TERRI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157631',
                        ),
                    'enabled' => true,
                ),
            178 =>
                array(
                    'id' => '4179',
                    'bank_id' => '25',
                    'bank_branch_name' => 'WASA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135157752',
                        ),
                    'enabled' => true,
                ),
            179 =>
                array(
                    'id' => '4180',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALAMDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180040',
                        ),
                    'enabled' => true,
                ),
            180 =>
                array(
                    'id' => '4181',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180224',
                        ),
                    'enabled' => true,
                ),
            181 =>
                array(
                    'id' => '4182',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHUADANGA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180253',
                        ),
                    'enabled' => true,
                ),
            182 =>
                array(
                    'id' => '4183',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DARSHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180316',
                        ),
                    'enabled' => true,
                ),
            183 =>
                array(
                    'id' => '4184',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HASHADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180466',
                        ),
                    'enabled' => true,
                ),
            184 =>
                array(
                    'id' => '4185',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JIBAN NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180587',
                        ),
                    'enabled' => true,
                ),
            185 =>
                array(
                    'id' => '4186',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAPASHDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135180679',
                        ),
                    'enabled' => true,
                ),
            186 =>
                array(
                    'id' => '4187',
                    'bank_id' => '25',
                    'bank_branch_name' => 'A.K. FAZLUL HOQ ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190043',
                        ),
                    'enabled' => true,
                ),
            187 =>
                array(
                    'id' => '4188',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALKARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190106',
                        ),
                    'enabled' => true,
                ),
            188 =>
                array(
                    'id' => '4189',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHUAGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190230',
                        ),
                    'enabled' => true,
                ),
            189 =>
                array(
                    'id' => '4190',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ELEHABAD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190243',
                        ),
                    'enabled' => true,
                ),
            190 =>
                array(
                    'id' => '4191',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190348',
                        ),
                    'enabled' => true,
                ),
            191 =>
                array(
                    'id' => '4192',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190498',
                        ),
                    'enabled' => true,
                ),
            192 =>
                array(
                    'id' => '4193',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BATA KANDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190522',
                        ),
                    'enabled' => true,
                ),
            193 =>
                array(
                    'id' => '4194',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAUKSHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190580',
                        ),
                    'enabled' => true,
                ),
            194 =>
                array(
                    'id' => '4195',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHARASHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190614',
                        ),
                    'enabled' => true,
                ),
            195 =>
                array(
                    'id' => '4196',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BULAIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190793',
                        ),
                    'enabled' => true,
                ),
            196 =>
                array(
                    'id' => '4197',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BURICHANG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190827',
                        ),
                    'enabled' => true,
                ),
            197 =>
                array(
                    'id' => '4198',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDINA SAMABAY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190919',
                        ),
                    'enabled' => true,
                ),
            198 =>
                array(
                    'id' => '4199',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135190977',
                        ),
                    'enabled' => true,
                ),
            199 =>
                array(
                    'id' => '4200',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHOUDDAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191068',
                        ),
                    'enabled' => true,
                ),
            200 =>
                array(
                    'id' => '4201',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMILLA UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191176',
                        ),
                    'enabled' => true,
                ),
            201 =>
                array(
                    'id' => '4202',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMILLA CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191189',
                        ),
                    'enabled' => true,
                ),
            202 =>
                array(
                    'id' => '4203',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMILLA COOPERATIVE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191242',
                        ),
                    'enabled' => true,
                ),
            203 =>
                array(
                    'id' => '4204',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMILLA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191271',
                        ),
                    'enabled' => true,
                ),
            204 =>
                array(
                    'id' => '4205',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMILLA E.P.Z.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191305',
                        ),
                    'enabled' => true,
                ),
            205 =>
                array(
                    'id' => '4206',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191426',
                        ),
                    'enabled' => true,
                ),
            206 =>
                array(
                    'id' => '4207',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAUDKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191518',
                        ),
                    'enabled' => true,
                ),
            207 =>
                array(
                    'id' => '4208',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEBIDWAR(NEW MARKET)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191639',
                        ),
                    'enabled' => true,
                ),
            208 =>
                array(
                    'id' => '4209',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHARMAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191750',
                        ),
                    'enabled' => true,
                ),
            209 =>
                array(
                    'id' => '4210',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DULALPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191871',
                        ),
                    'enabled' => true,
                ),
            210 =>
                array(
                    'id' => '4211',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FAKIRBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135191934',
                        ),
                    'enabled' => true,
                ),
            211 =>
                array(
                    'id' => '4212',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GANDAMATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192054',
                        ),
                    'enabled' => true,
                ),
            212 =>
                array(
                    'id' => '4213',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOURIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192146',
                        ),
                    'enabled' => true,
                ),
            213 =>
                array(
                    'id' => '4214',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GUNABATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192175',
                        ),
                    'enabled' => true,
                ),
            214 =>
                array(
                    'id' => '4215',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HOMNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192238',
                        ),
                    'enabled' => true,
                ),
            215 =>
                array(
                    'id' => '4216',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAFARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192320',
                        ),
                    'enabled' => true,
                ),
            216 =>
                array(
                    'id' => '4217',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAMALLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192470',
                        ),
                    'enabled' => true,
                ),
            217 =>
                array(
                    'id' => '4218',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KANDIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192504',
                        ),
                    'enabled' => true,
                ),
            218 =>
                array(
                    'id' => '4219',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LAKSAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192717',
                        ),
                    'enabled' => true,
                ),
            219 =>
                array(
                    'id' => '4220',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHANPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135192988',
                        ),
                    'enabled' => true,
                ),
            220 =>
                array(
                    'id' => '4221',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NALGHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193224',
                        ),
                    'enabled' => true,
                ),
            221 =>
                array(
                    'id' => '4222',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NANGALKOT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193253',
                        ),
                    'enabled' => true,
                ),
            222 =>
                array(
                    'id' => '4223',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAYERKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193495',
                        ),
                    'enabled' => true,
                ),
            223 =>
                array(
                    'id' => '4224',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMCHANDRAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193640',
                        ),
                    'enabled' => true,
                ),
            224 =>
                array(
                    'id' => '4225',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMKRISNAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193679',
                        ),
                    'enabled' => true,
                ),
            225 =>
                array(
                    'id' => '4226',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAHEBABAD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193790',
                        ),
                    'enabled' => true,
                ),
            226 =>
                array(
                    'id' => '4227',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHASANGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193853',
                        ),
                    'enabled' => true,
                ),
            227 =>
                array(
                    'id' => '4228',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHASHIDAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135193882',
                        ),
                    'enabled' => true,
                ),
            228 =>
                array(
                    'id' => '4229',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUNDALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135194065',
                        ),
                    'enabled' => true,
                ),
            229 =>
                array(
                    'id' => '4230',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135220168',
                        ),
                    'enabled' => true,
                ),
            230 =>
                array(
                    'id' => '4231',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COX\'S BAZAR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135220313',
                        ),
                    'enabled' => true,
                ),
            231 =>
                array(
                    'id' => '4232',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUTUBDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135220676',
                        ),
                    'enabled' => true,
                ),
            232 =>
                array(
                    'id' => '4233',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PEKUYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135220821',
                        ),
                    'enabled' => true,
                ),
            233 =>
                array(
                    'id' => '4234',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMU',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135220850',
                        ),
                    'enabled' => true,
                ),
            234 =>
                array(
                    'id' => '4235',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TEKNAF',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135220913',
                        ),
                    'enabled' => true,
                ),
            235 =>
                array(
                    'id' => '4236',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135260131',
                        ),
                    'enabled' => true,
                ),
            236 =>
                array(
                    'id' => '4237',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAMUNA FUTURE PARK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135260331',
                        ),
                    'enabled' => true,
                ),
            237 =>
                array(
                    'id' => '4238',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BADDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135260344',
                        ),
                    'enabled' => true,
                ),
            238 =>
                array(
                    'id' => '4239',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135260436',
                        ),
                    'enabled' => true,
                ),
            239 =>
                array(
                    'id' => '4240',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BEGUM ROKEYA SAWRANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135260678',
                        ),
                    'enabled' => true,
                ),
            240 =>
                array(
                    'id' => '4241',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135260915',
                        ),
                    'enabled' => true,
                ),
            241 =>
                array(
                    'id' => '4242',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAKA COLLEGE GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261064',
                        ),
                    'enabled' => true,
                ),
            242 =>
                array(
                    'id' => '4243',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAMRAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261156',
                        ),
                    'enabled' => true,
                ),
            243 =>
                array(
                    'id' => '4244',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261185',
                        ),
                    'enabled' => true,
                ),
            244 =>
                array(
                    'id' => '4245',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ELEPHANT ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261369',
                        ),
                    'enabled' => true,
                ),
            245 =>
                array(
                    'id' => '4246',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FARMGATE CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261480',
                        ),
                    'enabled' => true,
                ),
            246 =>
                array(
                    'id' => '4247',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GONOSHASTHYA KENDRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261664',
                        ),
                    'enabled' => true,
                ),
            247 =>
                array(
                    'id' => '4248',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GREEN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261693',
                        ),
                    'enabled' => true,
                ),
            248 =>
                array(
                    'id' => '4249',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GULSHAN CIRCLE-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261756',
                        ),
                    'enabled' => true,
                ),
            249 =>
                array(
                    'id' => '4250',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GULSHAN CIRCLE-2 CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261785',
                        ),
                    'enabled' => true,
                ),
            250 =>
                array(
                    'id' => '4251',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAZARIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135261969',
                        ),
                    'enabled' => true,
                ),
            251 =>
                array(
                    'id' => '4252',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAMAL ATATURK AVENUE CORP.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135262500',
                        ),
                    'enabled' => true,
                ),
            252 =>
                array(
                    'id' => '4253',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KARWAN BAZAR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135262568',
                        ),
                    'enabled' => true,
                ),
            253 =>
                array(
                    'id' => '4254',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MIRPUR SECTION-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263109',
                        ),
                    'enabled' => true,
                ),
            254 =>
                array(
                    'id' => '4255',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MIRPUR SECTION-10',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263138',
                        ),
                    'enabled' => true,
                ),
            255 =>
                array(
                    'id' => '4256',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHAKHALI CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263220',
                        ),
                    'enabled' => true,
                ),
            256 =>
                array(
                    'id' => '4257',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHAMMADPUR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263341',
                        ),
                    'enabled' => true,
                ),
            257 =>
                array(
                    'id' => '4258',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAYARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263462',
                        ),
                    'enabled' => true,
                ),
            258 =>
                array(
                    'id' => '4259',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263525',
                        ),
                    'enabled' => true,
                ),
            259 =>
                array(
                    'id' => '4260',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BALUGHAT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263583',
                        ),
                    'enabled' => true,
                ),
            260 =>
                array(
                    'id' => '4261',
                    'bank_id' => '25',
                    'bank_branch_name' => 'POLLY BIDDUTAION BOARD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263675',
                        ),
                    'enabled' => true,
                ),
            261 =>
                array(
                    'id' => '4262',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJ FRULBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263859',
                        ),
                    'enabled' => true,
                ),
            262 =>
                array(
                    'id' => '4263',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJANI GANDA SUPER MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263888',
                        ),
                    'enabled' => true,
                ),
            263 =>
                array(
                    'id' => '4264',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAYER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135263941',
                        ),
                    'enabled' => true,
                ),
            264 =>
                array(
                    'id' => '4265',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264016',
                        ),
                    'enabled' => true,
                ),
            265 =>
                array(
                    'id' => '4266',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SATMASJID ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264061',
                        ),
                    'enabled' => true,
                ),
            266 =>
                array(
                    'id' => '4267',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264090',
                        ),
                    'enabled' => true,
                ),
            267 =>
                array(
                    'id' => '4268',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHER-E-BANGLA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264245',
                        ),
                    'enabled' => true,
                ),
            268 =>
                array(
                    'id' => '4269',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264308',
                        ),
                    'enabled' => true,
                ),
            269 =>
                array(
                    'id' => '4270',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TEJGAON INDUSTRIAL AREA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264511',
                        ),
                    'enabled' => true,
                ),
            270 =>
                array(
                    'id' => '4271',
                    'bank_id' => '25',
                    'bank_branch_name' => 'UNIVERSITY GRANTS COMMISSION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264579',
                        ),
                    'enabled' => true,
                ),
            271 =>
                array(
                    'id' => '4272',
                    'bank_id' => '25',
                    'bank_branch_name' => 'UTTAR KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264603',
                        ),
                    'enabled' => true,
                ),
            272 =>
                array(
                    'id' => '4273',
                    'bank_id' => '25',
                    'bank_branch_name' => 'UTTARA MODEL TOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135264690',
                        ),
                    'enabled' => true,
                ),
            273 =>
                array(
                    'id' => '4274',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270000',
                        ),
                    'enabled' => true,
                ),
            274 =>
                array(
                    'id' => '4275',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAWAB ABDUL GANI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270042',
                        ),
                    'enabled' => true,
                ),
            275 =>
                array(
                    'id' => '4276',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ASHRAFABAD ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270068',
                        ),
                    'enabled' => true,
                ),
            276 =>
                array(
                    'id' => '4277',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ABUL HASANAT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270071',
                        ),
                    'enabled' => true,
                ),
            277 =>
                array(
                    'id' => '4278',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALU BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270226',
                        ),
                    'enabled' => true,
                ),
            278 =>
                array(
                    'id' => '4279',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ARMANITOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270318',
                        ),
                    'enabled' => true,
                ),
            279 =>
                array(
                    'id' => '4280',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANGLA MOTOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270855',
                        ),
                    'enabled' => true,
                ),
            280 =>
                array(
                    'id' => '4281',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135270884',
                        ),
                    'enabled' => true,
                ),
            281 =>
                array(
                    'id' => '4282',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ARAMBAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271188',
                        ),
                    'enabled' => true,
                ),
            282 =>
                array(
                    'id' => '4283',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAMPATALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271241',
                        ),
                    'enabled' => true,
                ),
            283 =>
                array(
                    'id' => '4284',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271270',
                        ),
                    'enabled' => true,
                ),
            284 =>
                array(
                    'id' => '4285',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAKA SHERATON HOTEL CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271667',
                        ),
                    'enabled' => true,
                ),
            285 =>
                array(
                    'id' => '4286',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAKA UNIVERSITY CAMPUS',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271759',
                        ),
                    'enabled' => true,
                ),
            286 =>
                array(
                    'id' => '4287',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAKESWARI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271812',
                        ),
                    'enabled' => true,
                ),
            287 =>
                array(
                    'id' => '4288',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DILKUSHA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135271933',
                        ),
                    'enabled' => true,
                ),
            288 =>
                array(
                    'id' => '4289',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GALIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272008',
                        ),
                    'enabled' => true,
                ),
            289 =>
                array(
                    'id' => '4290',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DMCH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272024',
                        ),
                    'enabled' => true,
                ),
            290 =>
                array(
                    'id' => '4291',
                    'bank_id' => '25',
                    'bank_branch_name' => 'EMPLOYMENT EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272116',
                        ),
                    'enabled' => true,
                ),
            291 =>
                array(
                    'id' => '4292',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ENGLISH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272145',
                        ),
                    'enabled' => true,
                ),
            292 =>
                array(
                    'id' => '4293',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FAKIRAPOOL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272174',
                        ),
                    'enabled' => true,
                ),
            293 =>
                array(
                    'id' => '4294',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FARASHGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272237',
                        ),
                    'enabled' => true,
                ),
            294 =>
                array(
                    'id' => '4295',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FOREIGN EXCHANGE CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272358',
                        ),
                    'enabled' => true,
                ),
            295 =>
                array(
                    'id' => '4296',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FULBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272387',
                        ),
                    'enabled' => true,
                ),
            296 =>
                array(
                    'id' => '4297',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272440',
                        ),
                    'enabled' => true,
                ),
            297 =>
                array(
                    'id' => '4298',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATKHOLA ROAD(LADIES)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272624',
                        ),
                    'enabled' => true,
                ),
            298 =>
                array(
                    'id' => '4299',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272682',
                        ),
                    'enabled' => true,
                ),
            299 =>
                array(
                    'id' => '4300',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ICMH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272774',
                        ),
                    'enabled' => true,
                ),
            300 =>
                array(
                    'id' => '4301',
                    'bank_id' => '25',
                    'bank_branch_name' => 'IMAMGANJ CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135272837',
                        ),
                    'enabled' => true,
                ),
            301 =>
                array(
                    'id' => '4302',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ISLAMPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273010',
                        ),
                    'enabled' => true,
                ),
            302 =>
                array(
                    'id' => '4303',
                    'bank_id' => '25',
                    'bank_branch_name' => 'IWTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273078',
                        ),
                    'enabled' => true,
                ),
            303 =>
                array(
                    'id' => '4304',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JANATA BHABAN CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273131',
                        ),
                    'enabled' => true,
                ),
            304 =>
                array(
                    'id' => '4305',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JURAIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273315',
                        ),
                    'enabled' => true,
                ),
            305 =>
                array(
                    'id' => '4306',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAMALAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273528',
                        ),
                    'enabled' => true,
                ),
            306 =>
                array(
                    'id' => '4307',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAPTAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273610',
                        ),
                    'enabled' => true,
                ),
            307 =>
                array(
                    'id' => '4308',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHILGAON ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273678',
                        ),
                    'enabled' => true,
                ),
            308 =>
                array(
                    'id' => '4309',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LAXMI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273852',
                        ),
                    'enabled' => true,
                ),
            309 =>
                array(
                    'id' => '4310',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LOCAL OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135273881',
                        ),
                    'enabled' => true,
                ),
            310 =>
                array(
                    'id' => '4311',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MITFORD ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274127',
                        ),
                    'enabled' => true,
                ),
            311 =>
                array(
                    'id' => '4312',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274185',
                        ),
                    'enabled' => true,
                ),
            312 =>
                array(
                    'id' => '4313',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOKIM KATRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274219',
                        ),
                    'enabled' => true,
                ),
            313 =>
                array(
                    'id' => '4314',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOTIJHEEL CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274277',
                        ),
                    'enabled' => true,
                ),
            314 =>
                array(
                    'id' => '4315',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOUCHAK MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274398',
                        ),
                    'enabled' => true,
                ),
            315 =>
                array(
                    'id' => '4316',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUGDA PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274451',
                        ),
                    'enabled' => true,
                ),
            316 =>
                array(
                    'id' => '4317',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAGAR BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274572',
                        ),
                    'enabled' => true,
                ),
            317 =>
                array(
                    'id' => '4318',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARINDA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274635',
                        ),
                    'enabled' => true,
                ),
            318 =>
                array(
                    'id' => '4319',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274693',
                        ),
                    'enabled' => true,
                ),
            319 =>
                array(
                    'id' => '4320',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAWABPUR ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274785',
                        ),
                    'enabled' => true,
                ),
            320 =>
                array(
                    'id' => '4321',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAZIMUDDIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135274930',
                        ),
                    'enabled' => true,
                ),
            321 =>
                array(
                    'id' => '4322',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NRB',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275126',
                        ),
                    'enabled' => true,
                ),
            322 =>
                array(
                    'id' => '4323',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZERO POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275142',
                        ),
                    'enabled' => true,
                ),
            323 =>
                array(
                    'id' => '4324',
                    'bank_id' => '25',
                    'bank_branch_name' => 'POSTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275292',
                        ),
                    'enabled' => true,
                ),
            324 =>
                array(
                    'id' => '4325',
                    'bank_id' => '25',
                    'bank_branch_name' => 'POSTAGOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275326',
                        ),
                    'enabled' => true,
                ),
            325 =>
                array(
                    'id' => '4326',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PURANA PALTAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275384',
                        ),
                    'enabled' => true,
                ),
            326 =>
                array(
                    'id' => '4327',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJARBAGH CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275568',
                        ),
                    'enabled' => true,
                ),
            327 =>
                array(
                    'id' => '4328',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJUK BHABAN CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275650',
                        ),
                    'enabled' => true,
                ),
            328 =>
                array(
                    'id' => '4329',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMNA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275713',
                        ),
                    'enabled' => true,
                ),
            329 =>
                array(
                    'id' => '4330',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275742',
                        ),
                    'enabled' => true,
                ),
            330 =>
                array(
                    'id' => '4331',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135275926',
                        ),
                    'enabled' => true,
                ),
            331 =>
                array(
                    'id' => '4332',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276046',
                        ),
                    'enabled' => true,
                ),
            332 =>
                array(
                    'id' => '4333',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHANTINAGAR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276370',
                        ),
                    'enabled' => true,
                ),
            333 =>
                array(
                    'id' => '4334',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHYAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276525',
                        ),
                    'enabled' => true,
                ),
            334 =>
                array(
                    'id' => '4335',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SONARGAON ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276583',
                        ),
                    'enabled' => true,
                ),
            335 =>
                array(
                    'id' => '4336',
                    'bank_id' => '25',
                    'bank_branch_name' => 'THATARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276675',
                        ),
                    'enabled' => true,
                ),
            336 =>
                array(
                    'id' => '4337',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TIPU SULTAN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276709',
                        ),
                    'enabled' => true,
                ),
            337 =>
                array(
                    'id' => '4338',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TOPKHANA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276738',
                        ),
                    'enabled' => true,
                ),
            338 =>
                array(
                    'id' => '4339',
                    'bank_id' => '25',
                    'bank_branch_name' => 'URDU ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276796',
                        ),
                    'enabled' => true,
                ),
            339 =>
                array(
                    'id' => '4340',
                    'bank_id' => '25',
                    'bank_branch_name' => 'VICTORIA PARK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276820',
                        ),
                    'enabled' => true,
                ),
            340 =>
                array(
                    'id' => '4341',
                    'bank_id' => '25',
                    'bank_branch_name' => 'WAPDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135276941',
                        ),
                    'enabled' => true,
                ),
            341 =>
                array(
                    'id' => '4342',
                    'bank_id' => '25',
                    'bank_branch_name' => 'WASA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135277032',
                        ),
                    'enabled' => true,
                ),
            342 =>
                array(
                    'id' => '4343',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135277090',
                        ),
                    'enabled' => true,
                ),
            343 =>
                array(
                    'id' => '4344',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AFTABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280045',
                        ),
                    'enabled' => true,
                ),
            344 =>
                array(
                    'id' => '4345',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAHADUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280108',
                        ),
                    'enabled' => true,
                ),
            345 =>
                array(
                    'id' => '4346',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAROBANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280195',
                        ),
                    'enabled' => true,
                ),
            346 =>
                array(
                    'id' => '4347',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BIRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280340',
                        ),
                    'enabled' => true,
                ),
            347 =>
                array(
                    'id' => '4348',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHIRIRBANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280524',
                        ),
                    'enabled' => true,
                ),
            348 =>
                array(
                    'id' => '4349',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DINAJPUR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280708',
                        ),
                    'enabled' => true,
                ),
            349 =>
                array(
                    'id' => '4350',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DINAJPUR MEDICAL COLLEGE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135280737',
                        ),
                    'enabled' => true,
                ),
            350 =>
                array(
                    'id' => '4351',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KABIRAJ HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135281031',
                        ),
                    'enabled' => true,
                ),
            351 =>
                array(
                    'id' => '4352',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MONMATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135281510',
                        ),
                    'enabled' => true,
                ),
            352 =>
                array(
                    'id' => '4353',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135281602',
                        ),
                    'enabled' => true,
                ),
            353 =>
                array(
                    'id' => '4354',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PARBATIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135281815',
                        ),
                    'enabled' => true,
                ),
            354 =>
                array(
                    'id' => '4355',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PHULBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135281907',
                        ),
                    'enabled' => true,
                ),
            355 =>
                array(
                    'id' => '4356',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PULHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135281936',
                        ),
                    'enabled' => true,
                ),
            356 =>
                array(
                    'id' => '4357',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HILI STHALA BANELAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135282027',
                        ),
                    'enabled' => true,
                ),
            357 =>
                array(
                    'id' => '4358',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DASMAIL MORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135282148',
                        ),
                    'enabled' => true,
                ),
            358 =>
                array(
                    'id' => '4359',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SETABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135282177',
                        ),
                    'enabled' => true,
                ),
            359 =>
                array(
                    'id' => '4360',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135290280',
                        ),
                    'enabled' => true,
                ),
            360 =>
                array(
                    'id' => '4361',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FARIDPUR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135290556',
                        ),
                    'enabled' => true,
                ),
            361 =>
                array(
                    'id' => '4362',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOALCHAMAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135290619',
                        ),
                    'enabled' => true,
                ),
            362 =>
                array(
                    'id' => '4363',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALAMIRDHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135290851',
                        ),
                    'enabled' => true,
                ),
            363 =>
                array(
                    'id' => '4364',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BOALMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135291300',
                        ),
                    'enabled' => true,
                ),
            364 =>
                array(
                    'id' => '4365',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135291397',
                        ),
                    'enabled' => true,
                ),
            365 =>
                array(
                    'id' => '4366',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TITUMIR MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135291489',
                        ),
                    'enabled' => true,
                ),
            366 =>
                array(
                    'id' => '4367',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAKER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300167',
                        ),
                    'enabled' => true,
                ),
            367 =>
                array(
                    'id' => '4368',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHHAGALNAIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300312',
                        ),
                    'enabled' => true,
                ),
            368 =>
                array(
                    'id' => '4369',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COLLEGE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300341',
                        ),
                    'enabled' => true,
                ),
            369 =>
                array(
                    'id' => '4370',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAGANBHUIYAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300370',
                        ),
                    'enabled' => true,
                ),
            370 =>
                array(
                    'id' => '4371',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DUDMUKHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300433',
                        ),
                    'enabled' => true,
                ),
            371 =>
                array(
                    'id' => '4372',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FENI(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300583',
                        ),
                    'enabled' => true,
                ),
            372 =>
                array(
                    'id' => '4373',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FULGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300617',
                        ),
                    'enabled' => true,
                ),
            373 =>
                array(
                    'id' => '4374',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAZIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135300709',
                        ),
                    'enabled' => true,
                ),
            374 =>
                array(
                    'id' => '4375',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301061',
                        ),
                    'enabled' => true,
                ),
            375 =>
                array(
                    'id' => '4376',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHURIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301090',
                        ),
                    'enabled' => true,
                ),
            376 =>
                array(
                    'id' => '4377',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOTIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301124',
                        ),
                    'enabled' => true,
                ),
            377 =>
                array(
                    'id' => '4378',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUNSHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301153',
                        ),
                    'enabled' => true,
                ),
            378 =>
                array(
                    'id' => '4379',
                    'bank_id' => '25',
                    'bank_branch_name' => 'OLAMA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301216',
                        ),
                    'enabled' => true,
                ),
            379 =>
                array(
                    'id' => '4380',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PARSHURAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301274',
                        ),
                    'enabled' => true,
                ),
            380 =>
                array(
                    'id' => '4381',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301308',
                        ),
                    'enabled' => true,
                ),
            381 =>
                array(
                    'id' => '4382',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SONAGAZI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135301487',
                        ),
                    'enabled' => true,
                ),
            382 =>
                array(
                    'id' => '4383',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320055',
                        ),
                    'enabled' => true,
                ),
            383 =>
                array(
                    'id' => '4384',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAMONDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320105',
                        ),
                    'enabled' => true,
                ),
            384 =>
                array(
                    'id' => '4385',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BRIDGE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320255',
                        ),
                    'enabled' => true,
                ),
            385 =>
                array(
                    'id' => '4386',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GAIBANDHA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320550',
                        ),
                    'enabled' => true,
                ),
            386 =>
                array(
                    'id' => '4387',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320589',
                        ),
                    'enabled' => true,
                ),
            387 =>
                array(
                    'id' => '4388',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAT LAXMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320613',
                        ),
                    'enabled' => true,
                ),
            388 =>
                array(
                    'id' => '4389',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MIRGONJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135320947',
                        ),
                    'enabled' => true,
                ),
            389 =>
                array(
                    'id' => '4390',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PALASHBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135321096',
                        ),
                    'enabled' => true,
                ),
            390 =>
                array(
                    'id' => '4391',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TULSHIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135321333',
                        ),
                    'enabled' => true,
                ),
            391 =>
                array(
                    'id' => '4392',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135330524',
                        ),
                    'enabled' => true,
                ),
            392 =>
                array(
                    'id' => '4393',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIAKOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135330795',
                        ),
                    'enabled' => true,
                ),
            393 =>
                array(
                    'id' => '4394',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOUCHAK SCOUT CAMP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135331099',
                        ),
                    'enabled' => true,
                ),
            394 =>
                array(
                    'id' => '4395',
                    'bank_id' => '25',
                    'bank_branch_name' => 'OPEN UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135331181',
                        ),
                    'enabled' => true,
                ),
            395 =>
                array(
                    'id' => '4396',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PORABARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135331244',
                        ),
                    'enabled' => true,
                ),
            396 =>
                array(
                    'id' => '4397',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135331631',
                        ),
                    'enabled' => true,
                ),
            397 =>
                array(
                    'id' => '4398',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOPALGANJ CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135350409',
                        ),
                    'enabled' => true,
                ),
            398 =>
                array(
                    'id' => '4399',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KOTALIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135350670',
                        ),
                    'enabled' => true,
                ),
            399 =>
                array(
                    'id' => '4400',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUKSUDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135350733',
                        ),
                    'enabled' => true,
                ),
            400 =>
                array(
                    'id' => '4401',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAGDHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135350917',
                        ),
                    'enabled' => true,
                ),
            401 =>
                array(
                    'id' => '4402',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SATPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135351066',
                        ),
                    'enabled' => true,
                ),
            402 =>
                array(
                    'id' => '4403',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TUNGI PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135351095',
                        ),
                    'enabled' => true,
                ),
            403 =>
                array(
                    'id' => '4404',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAHUBAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360136',
                        ),
                    'enabled' => true,
                ),
            404 =>
                array(
                    'id' => '4405',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHULLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360228',
                        ),
                    'enabled' => true,
                ),
            405 =>
                array(
                    'id' => '4406',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHHATIAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360257',
                        ),
                    'enabled' => true,
                ),
            406 =>
                array(
                    'id' => '4407',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHUNARUGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360349',
                        ),
                    'enabled' => true,
                ),
            407 =>
                array(
                    'id' => '4408',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOPLAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360552',
                        ),
                    'enabled' => true,
                ),
            408 =>
                array(
                    'id' => '4409',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HABIGANJ(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360644',
                        ),
                    'enabled' => true,
                ),
            409 =>
                array(
                    'id' => '4410',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360886',
                        ),
                    'enabled' => true,
                ),
            410 =>
                array(
                    'id' => '4411',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MARKULI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135360949',
                        ),
                    'enabled' => true,
                ),
            411 =>
                array(
                    'id' => '4412',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MONTOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135361030',
                        ),
                    'enabled' => true,
                ),
            412 =>
                array(
                    'id' => '4413',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135361098',
                        ),
                    'enabled' => true,
                ),
            413 =>
                array(
                    'id' => '4414',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAYAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135361214',
                        ),
                    'enabled' => true,
                ),
            414 =>
                array(
                    'id' => '4415',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAYESTAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135361393',
                        ),
                    'enabled' => true,
                ),
            415 =>
                array(
                    'id' => '4416',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAMALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135380374',
                        ),
                    'enabled' => true,
                ),
            416 =>
                array(
                    'id' => '4417',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JOYPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135380408',
                        ),
                    'enabled' => true,
                ),
            417 =>
                array(
                    'id' => '4418',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PANCHBIBI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135380679',
                        ),
                    'enabled' => true,
                ),
            418 =>
                array(
                    'id' => '4419',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TILAKPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135380824',
                        ),
                    'enabled' => true,
                ),
            419 =>
                array(
                    'id' => '4420',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZONAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390056',
                        ),
                    'enabled' => true,
                ),
            420 =>
                array(
                    'id' => '4421',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAKSHIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390135',
                        ),
                    'enabled' => true,
                ),
            421 =>
                array(
                    'id' => '4422',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHYAMGONJ KALIBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390151',
                        ),
                    'enabled' => true,
                ),
            422 =>
                array(
                    'id' => '4423',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BALIAJURI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390193',
                        ),
                    'enabled' => true,
                ),
            423 =>
                array(
                    'id' => '4424',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEWANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390469',
                        ),
                    'enabled' => true,
                ),
            424 =>
                array(
                    'id' => '4425',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHANUA KAMALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390551',
                        ),
                    'enabled' => true,
                ),
            425 =>
                array(
                    'id' => '4426',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GUNARITALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390643',
                        ),
                    'enabled' => true,
                ),
            426 =>
                array(
                    'id' => '4427',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390764',
                        ),
                    'enabled' => true,
                ),
            427 =>
                array(
                    'id' => '4428',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAMALPUR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135390919',
                        ),
                    'enabled' => true,
                ),
            428 =>
                array(
                    'id' => '4429',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAMUNA SARKARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135391000',
                        ),
                    'enabled' => true,
                ),
            429 =>
                array(
                    'id' => '4430',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JHAGGRARCHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135391039',
                        ),
                    'enabled' => true,
                ),
            430 =>
                array(
                    'id' => '4431',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MELANDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135391271',
                        ),
                    'enabled' => true,
                ),
            431 =>
                array(
                    'id' => '4432',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NANDINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135391305',
                        ),
                    'enabled' => true,
                ),
            432 =>
                array(
                    'id' => '4433',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARISHABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135391484',
                        ),
                    'enabled' => true,
                ),
            433 =>
                array(
                    'id' => '4434',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135391668',
                        ),
                    'enabled' => true,
                ),
            434 =>
                array(
                    'id' => '4435',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANKARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135410165',
                        ),
                    'enabled' => true,
                ),
            435 =>
                array(
                    'id' => '4436',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BENAPOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135410286',
                        ),
                    'enabled' => true,
                ),
            436 =>
                array(
                    'id' => '4437',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANCHRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135410431',
                        ),
                    'enabled' => true,
                ),
            437 =>
                array(
                    'id' => '4438',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHHATIANTOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135410499',
                        ),
                    'enabled' => true,
                ),
            438 =>
                array(
                    'id' => '4439',
                    'bank_id' => '25',
                    'bank_branch_name' => 'H.M.M. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135410794',
                        ),
                    'enabled' => true,
                ),
            439 =>
                array(
                    'id' => '4440',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JHIKARGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411098',
                        ),
                    'enabled' => true,
                ),
            440 =>
                array(
                    'id' => '4441',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KESHABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411214',
                        ),
                    'enabled' => true,
                ),
            441 =>
                array(
                    'id' => '4442',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LADIES',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411335',
                        ),
                    'enabled' => true,
                ),
            442 =>
                array(
                    'id' => '4443',
                    'bank_id' => '25',
                    'bank_branch_name' => 'M.K. ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411427',
                        ),
                    'enabled' => true,
                ),
            443 =>
                array(
                    'id' => '4444',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MAHAKAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411456',
                        ),
                    'enabled' => true,
                ),
            444 =>
                array(
                    'id' => '4445',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MONIRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411519',
                        ),
                    'enabled' => true,
                ),
            445 =>
                array(
                    'id' => '4446',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAVARAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411601',
                        ),
                    'enabled' => true,
                ),
            446 =>
                array(
                    'id' => '4447',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135411630',
                        ),
                    'enabled' => true,
                ),
            447 =>
                array(
                    'id' => '4448',
                    'bank_id' => '25',
                    'bank_branch_name' => 'UPA-SHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135412297',
                        ),
                    'enabled' => true,
                ),
            448 =>
                array(
                    'id' => '4449',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JHALOKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135420313',
                        ),
                    'enabled' => true,
                ),
            449 =>
                array(
                    'id' => '4450',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135420647',
                        ),
                    'enabled' => true,
                ),
            450 =>
                array(
                    'id' => '4451',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHAVANIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440227',
                        ),
                    'enabled' => true,
                ),
            451 =>
                array(
                    'id' => '4452',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BISHOYKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440256',
                        ),
                    'enabled' => true,
                ),
            452 =>
                array(
                    'id' => '4453',
                    'bank_id' => '25',
                    'bank_branch_name' => 'VATIO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440348',
                        ),
                    'enabled' => true,
                ),
            453 =>
                array(
                    'id' => '4454',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GANNA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440377',
                        ),
                    'enabled' => true,
                ),
            454 =>
                array(
                    'id' => '4455',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HARINAKUNDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440498',
                        ),
                    'enabled' => true,
                ),
            455 =>
                array(
                    'id' => '4456',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATFAZILPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440522',
                        ),
                    'enabled' => true,
                ),
            456 =>
                array(
                    'id' => '4457',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440643',
                        ),
                    'enabled' => true,
                ),
            457 =>
                array(
                    'id' => '4458',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JORADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440706',
                        ),
                    'enabled' => true,
                ),
            458 =>
                array(
                    'id' => '4459',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440793',
                        ),
                    'enabled' => true,
                ),
            459 =>
                array(
                    'id' => '4460',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATLAGARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135440919',
                        ),
                    'enabled' => true,
                ),
            460 =>
                array(
                    'id' => '4461',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KOTCHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135441000',
                        ),
                    'enabled' => true,
                ),
            461 =>
                array(
                    'id' => '4462',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHESHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135441097',
                        ),
                    'enabled' => true,
                ),
            462 =>
                array(
                    'id' => '4463',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SAILKUPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135441189',
                        ),
                    'enabled' => true,
                ),
            463 =>
                array(
                    'id' => '4464',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHAGRACHARI SADAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135460102',
                        ),
                    'enabled' => true,
                ),
            464 =>
                array(
                    'id' => '4465',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALAMNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135470042',
                        ),
                    'enabled' => true,
                ),
            465 =>
                array(
                    'id' => '4466',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BSCIC INDUSTRIAL ESTATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135470439',
                        ),
                    'enabled' => true,
                ),
            466 =>
                array(
                    'id' => '4467',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHUK NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135470550',
                        ),
                    'enabled' => true,
                ),
            467 =>
                array(
                    'id' => '4468',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135470705',
                        ),
                    'enabled' => true,
                ),
            468 =>
                array(
                    'id' => '4469',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GALLAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135470884',
                        ),
                    'enabled' => true,
                ),
            469 =>
                array(
                    'id' => '4470',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAZI MOHSIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135470976',
                        ),
                    'enabled' => true,
                ),
            470 =>
                array(
                    'id' => '4471',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HELATALA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471009',
                        ),
                    'enabled' => true,
                ),
            471 =>
                array(
                    'id' => '4472',
                    'bank_id' => '25',
                    'bank_branch_name' => 'K.D.A. BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471188',
                        ),
                    'enabled' => true,
                ),
            472 =>
                array(
                    'id' => '4473',
                    'bank_id' => '25',
                    'bank_branch_name' => 'K.U.E.T.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471241',
                        ),
                    'enabled' => true,
                ),
            473 =>
                array(
                    'id' => '4474',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAPILMUNI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471304',
                        ),
                    'enabled' => true,
                ),
            474 =>
                array(
                    'id' => '4475',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHALISHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471454',
                        ),
                    'enabled' => true,
                ),
            475 =>
                array(
                    'id' => '4476',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHAN JAHAN ALI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471483',
                        ),
                    'enabled' => true,
                ),
            476 =>
                array(
                    'id' => '4477',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHAN-A-SABUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471517',
                        ),
                    'enabled' => true,
                ),
            477 =>
                array(
                    'id' => '4478',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHULNA CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471575',
                        ),
                    'enabled' => true,
                ),
            478 =>
                array(
                    'id' => '4479',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHULNHA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471759',
                        ),
                    'enabled' => true,
                ),
            479 =>
                array(
                    'id' => '4480',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MIRER DANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135471870',
                        ),
                    'enabled' => true,
                ),
            480 =>
                array(
                    'id' => '4481',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NOOR NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472024',
                        ),
                    'enabled' => true,
                ),
            481 =>
                array(
                    'id' => '4482',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAIKGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472082',
                        ),
                    'enabled' => true,
                ),
            482 =>
                array(
                    'id' => '4483',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ROOSVELT JETTY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472208',
                        ),
                    'enabled' => true,
                ),
            483 =>
                array(
                    'id' => '4484',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPSA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472237',
                        ),
                    'enabled' => true,
                ),
            484 =>
                array(
                    'id' => '4485',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPSA EAST',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472266',
                        ),
                    'enabled' => true,
                ),
            485 =>
                array(
                    'id' => '4486',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAIKH PARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472479',
                        ),
                    'enabled' => true,
                ),
            486 =>
                array(
                    'id' => '4487',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHALUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135472532',
                        ),
                    'enabled' => true,
                ),
            487 =>
                array(
                    'id' => '4488',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHAIRAB BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480058',
                        ),
                    'enabled' => true,
                ),
            488 =>
                array(
                    'id' => '4489',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAJITPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480108',
                        ),
                    'enabled' => true,
                ),
            489 =>
                array(
                    'id' => '4490',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANGAL PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480137',
                        ),
                    'enabled' => true,
                ),
            490 =>
                array(
                    'id' => '4491',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHAIRAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480229',
                        ),
                    'enabled' => true,
                ),
            491 =>
                array(
                    'id' => '4492',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GHAGRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480337',
                        ),
                    'enabled' => true,
                ),
            492 =>
                array(
                    'id' => '4493',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ITNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480432',
                        ),
                    'enabled' => true,
                ),
            493 =>
                array(
                    'id' => '4494',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATIADI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480582',
                        ),
                    'enabled' => true,
                ),
            494 =>
                array(
                    'id' => '4495',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATKHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480645',
                        ),
                    'enabled' => true,
                ),
            495 =>
                array(
                    'id' => '4496',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KISHOREGANJ(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480708',
                        ),
                    'enabled' => true,
                ),
            496 =>
                array(
                    'id' => '4497',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KULIAR CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480737',
                        ),
                    'enabled' => true,
                ),
            497 =>
                array(
                    'id' => '4498',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LUXMIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480795',
                        ),
                    'enabled' => true,
                ),
            498 =>
                array(
                    'id' => '4499',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MANIKHALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480829',
                        ),
                    'enabled' => true,
                ),
            499 =>
                array(
                    'id' => '4500',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MITAMAIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135480940',
                        ),
                    'enabled' => true,
                ),
            500 =>
                array(
                    'id' => '4501',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAKUNDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135481060',
                        ),
                    'enabled' => true,
                ),
            501 =>
                array(
                    'id' => '4502',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARARCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135481099',
                        ),
                    'enabled' => true,
                ),
            502 =>
                array(
                    'id' => '4503',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHURUNGAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490101',
                        ),
                    'enabled' => true,
                ),
            503 =>
                array(
                    'id' => '4504',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TREE MOHONI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490169',
                        ),
                    'enabled' => true,
                ),
            504 =>
                array(
                    'id' => '4505',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490343',
                        ),
                    'enabled' => true,
                ),
            505 =>
                array(
                    'id' => '4506',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KURIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490406',
                        ),
                    'enabled' => true,
                ),
            506 =>
                array(
                    'id' => '4507',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAGESWARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490464',
                        ),
                    'enabled' => true,
                ),
            507 =>
                array(
                    'id' => '4508',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490556',
                        ),
                    'enabled' => true,
                ),
            508 =>
                array(
                    'id' => '4509',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ULIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135490701',
                        ),
                    'enabled' => true,
                ),
            509 =>
                array(
                    'id' => '4510',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALLAHAR DARGAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500075',
                        ),
                    'enabled' => true,
                ),
            510 =>
                array(
                    'id' => '4511',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAGULAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500138',
                        ),
                    'enabled' => true,
                ),
            511 =>
                array(
                    'id' => '4512',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARAKHADA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500259',
                        ),
                    'enabled' => true,
                ),
            512 =>
                array(
                    'id' => '4513',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHERAMARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500288',
                        ),
                    'enabled' => true,
                ),
            513 =>
                array(
                    'id' => '4514',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHORWHASH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500341',
                        ),
                    'enabled' => true,
                ),
            514 =>
                array(
                    'id' => '4515',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DANGMARKA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500433',
                        ),
                    'enabled' => true,
                ),
            515 =>
                array(
                    'id' => '4516',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHAZANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500804',
                        ),
                    'enabled' => true,
                ),
            516 =>
                array(
                    'id' => '4517',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHOKSA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500820',
                        ),
                    'enabled' => true,
                ),
            517 =>
                array(
                    'id' => '4518',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUMARKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500888',
                        ),
                    'enabled' => true,
                ),
            518 =>
                array(
                    'id' => '4519',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUSHTIA COPPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135500970',
                        ),
                    'enabled' => true,
                ),
            519 =>
                array(
                    'id' => '4520',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135501429',
                        ),
                    'enabled' => true,
                ),
            520 =>
                array(
                    'id' => '4521',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAM CHANDRA ROY STREET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135501458',
                        ),
                    'enabled' => true,
                ),
            521 =>
                array(
                    'id' => '4522',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUKANTA BIPONI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135501603',
                        ),
                    'enabled' => true,
                ),
            522 =>
                array(
                    'id' => '4523',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHARSHAHI BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510081',
                        ),
                    'enabled' => true,
                ),
            523 =>
                array(
                    'id' => '4524',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHATRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510131',
                        ),
                    'enabled' => true,
                ),
            524 =>
                array(
                    'id' => '4525',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAR ALEXANDER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510223',
                        ),
                    'enabled' => true,
                ),
            525 =>
                array(
                    'id' => '4526',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DALAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510407',
                        ),
                    'enabled' => true,
                ),
            526 =>
                array(
                    'id' => '4527',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAIDERGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510531',
                        ),
                    'enabled' => true,
                ),
            527 =>
                array(
                    'id' => '4528',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LAKSHMIPUR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510760',
                        ),
                    'enabled' => true,
                ),
            528 =>
                array(
                    'id' => '4529',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MANDARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510823',
                        ),
                    'enabled' => true,
                ),
            529 =>
                array(
                    'id' => '4530',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135510973',
                        ),
                    'enabled' => true,
                ),
            530 =>
                array(
                    'id' => '4531',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135511035',
                        ),
                    'enabled' => true,
                ),
            531 =>
                array(
                    'id' => '4532',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ADITMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520042',
                        ),
                    'enabled' => true,
                ),
            532 =>
                array(
                    'id' => '4533',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520134',
                        ),
                    'enabled' => true,
                ),
            533 =>
                array(
                    'id' => '4534',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHOTEMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520163',
                        ),
                    'enabled' => true,
                ),
            534 =>
                array(
                    'id' => '4535',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BURIMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520192',
                        ),
                    'enabled' => true,
                ),
            535 =>
                array(
                    'id' => '4536',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATIBANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520400',
                        ),
                    'enabled' => true,
                ),
            536 =>
                array(
                    'id' => '4537',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520439',
                        ),
                    'enabled' => true,
                ),
            537 =>
                array(
                    'id' => '4538',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520468',
                        ),
                    'enabled' => true,
                ),
            538 =>
                array(
                    'id' => '4539',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135520589',
                        ),
                    'enabled' => true,
                ),
            539 =>
                array(
                    'id' => '4540',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHARMUGURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135540130',
                        ),
                    'enabled' => true,
                ),
            540 =>
                array(
                    'id' => '4541',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALKINI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135540280',
                        ),
                    'enabled' => true,
                ),
            541 =>
                array(
                    'id' => '4542',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADARIPUR PURAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135540435',
                        ),
                    'enabled' => true,
                ),
            542 =>
                array(
                    'id' => '4543',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADARIPUR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135540464',
                        ),
                    'enabled' => true,
                ),
            543 =>
                array(
                    'id' => '4544',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOSTAFAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135540556',
                        ),
                    'enabled' => true,
                ),
            544 =>
                array(
                    'id' => '4545',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIBCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135540701',
                        ),
                    'enabled' => true,
                ),
            545 =>
                array(
                    'id' => '4546',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550133',
                        ),
                    'enabled' => true,
                ),
            546 =>
                array(
                    'id' => '4547',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BINODPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550225',
                        ),
                    'enabled' => true,
                ),
            547 =>
                array(
                    'id' => '4548',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GANGARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550346',
                        ),
                    'enabled' => true,
                ),
            548 =>
                array(
                    'id' => '4549',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550467',
                        ),
                    'enabled' => true,
                ),
            549 =>
                array(
                    'id' => '4550',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LANGALBANDH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550520',
                        ),
                    'enabled' => true,
                ),
            550 =>
                array(
                    'id' => '4551',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MAGURA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550588',
                        ),
                    'enabled' => true,
                ),
            551 =>
                array(
                    'id' => '4552',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550612',
                        ),
                    'enabled' => true,
                ),
            552 =>
                array(
                    'id' => '4553',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAKOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550670',
                        ),
                    'enabled' => true,
                ),
            553 =>
                array(
                    'id' => '4554',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NOHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550733',
                        ),
                    'enabled' => true,
                ),
            554 =>
                array(
                    'id' => '4555',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550791',
                        ),
                    'enabled' => true,
                ),
            555 =>
                array(
                    'id' => '4556',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIMAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550917',
                        ),
                    'enabled' => true,
                ),
            556 =>
                array(
                    'id' => '4557',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SINGRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135550946',
                        ),
                    'enabled' => true,
                ),
            557 =>
                array(
                    'id' => '4558',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135560615',
                        ),
                    'enabled' => true,
                ),
            558 =>
                array(
                    'id' => '4559',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SOUTH JAMSAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135560857',
                        ),
                    'enabled' => true,
                ),
            559 =>
                array(
                    'id' => '4560',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAMUNDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135570100',
                        ),
                    'enabled' => true,
                ),
            560 =>
                array(
                    'id' => '4561',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MEHERPUR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135570434',
                        ),
                    'enabled' => true,
                ),
            561 =>
                array(
                    'id' => '4562',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARALEKHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580103',
                        ),
                    'enabled' => true,
                ),
            562 =>
                array(
                    'id' => '4563',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHANUGACH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580190',
                        ),
                    'enabled' => true,
                ),
            563 =>
                array(
                    'id' => '4564',
                    'bank_id' => '25',
                    'bank_branch_name' => 'EKATONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580495',
                        ),
                    'enabled' => true,
                ),
            564 =>
                array(
                    'id' => '4565',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GORARAI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580611',
                        ),
                    'enabled' => true,
                ),
            565 =>
                array(
                    'id' => '4566',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAIFAR NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580640',
                        ),
                    'enabled' => true,
                ),
            566 =>
                array(
                    'id' => '4567',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580679',
                        ),
                    'enabled' => true,
                ),
            567 =>
                array(
                    'id' => '4568',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135580945',
                        ),
                    'enabled' => true,
                ),
            568 =>
                array(
                    'id' => '4569',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAZIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135581128',
                        ),
                    'enabled' => true,
                ),
            569 =>
                array(
                    'id' => '4570',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOULAVI BAZAR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135581210',
                        ),
                    'enabled' => true,
                ),
            570 =>
                array(
                    'id' => '4571',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135581399',
                        ),
                    'enabled' => true,
                ),
            571 =>
                array(
                    'id' => '4572',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135581728',
                        ),
                    'enabled' => true,
                ),
            572 =>
                array(
                    'id' => '4573',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ABDULLAH PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135590043',
                        ),
                    'enabled' => true,
                ),
            573 =>
                array(
                    'id' => '4574',
                    'bank_id' => '25',
                    'bank_branch_name' => 'WEST MUKTARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135590069',
                        ),
                    'enabled' => true,
                ),
            574 =>
                array(
                    'id' => '4575',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BETKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135590256',
                        ),
                    'enabled' => true,
                ),
            575 =>
                array(
                    'id' => '4576',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHAGYAKUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135590319',
                        ),
                    'enabled' => true,
                ),
            576 =>
                array(
                    'id' => '4577',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAMALA GHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135590735',
                        ),
                    'enabled' => true,
                ),
            577 =>
                array(
                    'id' => '4578',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135591039',
                        ),
                    'enabled' => true,
                ),
            578 =>
                array(
                    'id' => '4579',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUBACHANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135591455',
                        ),
                    'enabled' => true,
                ),
            579 =>
                array(
                    'id' => '4580',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TONGI BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135591547',
                        ),
                    'enabled' => true,
                ),
            580 =>
                array(
                    'id' => '4581',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUKHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135610123',
                        ),
                    'enabled' => true,
                ),
            581 =>
                array(
                    'id' => '4582',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135610310',
                        ),
                    'enabled' => true,
                ),
            582 =>
                array(
                    'id' => '4583',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135610431',
                        ),
                    'enabled' => true,
                ),
            583 =>
                array(
                    'id' => '4584',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAR PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135610499',
                        ),
                    'enabled' => true,
                ),
            584 =>
                array(
                    'id' => '4585',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135610736',
                        ),
                    'enabled' => true,
                ),
            585 =>
                array(
                    'id' => '4586',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOURIPUR ACADEMY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611098',
                        ),
                    'enabled' => true,
                ),
            586 =>
                array(
                    'id' => '4587',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HALUAGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611151',
                        ),
                    'enabled' => true,
                ),
            587 =>
                array(
                    'id' => '4588',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LADIES',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611427',
                        ),
                    'enabled' => true,
                ),
            588 =>
                array(
                    'id' => '4589',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUKTAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611698',
                        ),
                    'enabled' => true,
                ),
            589 =>
                array(
                    'id' => '4590',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUNSHIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611722',
                        ),
                    'enabled' => true,
                ),
            590 =>
                array(
                    'id' => '4591',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MYMENSINGH CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611827',
                        ),
                    'enabled' => true,
                ),
            591 =>
                array(
                    'id' => '4592',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NANDAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611935',
                        ),
                    'enabled' => true,
                ),
            592 =>
                array(
                    'id' => '4593',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NUTAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135611964',
                        ),
                    'enabled' => true,
                ),
            593 =>
                array(
                    'id' => '4594',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHOBAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135612055',
                        ),
                    'enabled' => true,
                ),
            594 =>
                array(
                    'id' => '4595',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAYMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135612118',
                        ),
                    'enabled' => true,
                ),
            595 =>
                array(
                    'id' => '4596',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TARAKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135612268',
                        ),
                    'enabled' => true,
                ),
            596 =>
                array(
                    'id' => '4597',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AGRADIGUN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640072',
                        ),
                    'enabled' => true,
                ),
            597 =>
                array(
                    'id' => '4598',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ATRAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640164',
                        ),
                    'enabled' => true,
                ),
            598 =>
                array(
                    'id' => '4599',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAIDYAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640227',
                        ),
                    'enabled' => true,
                ),
            599 =>
                array(
                    'id' => '4600',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHOUMASHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640256',
                        ),
                    'enabled' => true,
                ),
            600 =>
                array(
                    'id' => '4601',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANDAIKHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640285',
                        ),
                    'enabled' => true,
                ),
            601 =>
                array(
                    'id' => '4602',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DELUABARIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640469',
                        ),
                    'enabled' => true,
                ),
            602 =>
                array(
                    'id' => '4603',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAMAIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640498',
                        ),
                    'enabled' => true,
                ),
            603 =>
                array(
                    'id' => '4604',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GAGANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640580',
                        ),
                    'enabled' => true,
                ),
            604 =>
                array(
                    'id' => '4605',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GUBARCHAPAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640614',
                        ),
                    'enabled' => true,
                ),
            605 =>
                array(
                    'id' => '4606',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAPANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640643',
                        ),
                    'enabled' => true,
                ),
            606 =>
                array(
                    'id' => '4607',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JOTEBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640764',
                        ),
                    'enabled' => true,
                ),
            607 =>
                array(
                    'id' => '4608',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAZIR MORH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640827',
                        ),
                    'enabled' => true,
                ),
            608 =>
                array(
                    'id' => '4609',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADHUIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135640948',
                        ),
                    'enabled' => true,
                ),
            609 =>
                array(
                    'id' => '4610',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641000',
                        ),
                    'enabled' => true,
                ),
            610 =>
                array(
                    'id' => '4611',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MANGALBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641039',
                        ),
                    'enabled' => true,
                ),
            611 =>
                array(
                    'id' => '4612',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAOGAON(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641213',
                        ),
                    'enabled' => true,
                ),
            612 =>
                array(
                    'id' => '4613',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641242',
                        ),
                    'enabled' => true,
                ),
            613 =>
                array(
                    'id' => '4614',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NEAMATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641271',
                        ),
                    'enabled' => true,
                ),
            614 =>
                array(
                    'id' => '4615',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NISCHINTAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641305',
                        ),
                    'enabled' => true,
                ),
            615 =>
                array(
                    'id' => '4616',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NITHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641334',
                        ),
                    'enabled' => true,
                ),
            616 =>
                array(
                    'id' => '4617',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PHATTAKATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641484',
                        ),
                    'enabled' => true,
                ),
            617 =>
                array(
                    'id' => '4618',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHARASHWATIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641842',
                        ),
                    'enabled' => true,
                ),
            618 =>
                array(
                    'id' => '4619',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641871',
                        ),
                    'enabled' => true,
                ),
            619 =>
                array(
                    'id' => '4620',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TILNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135641905',
                        ),
                    'enabled' => true,
                ),
            620 =>
                array(
                    'id' => '4621',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BORDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135650138',
                        ),
                    'enabled' => true,
                ),
            621 =>
                array(
                    'id' => '4622',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LOHAGARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135650462',
                        ),
                    'enabled' => true,
                ),
            622 =>
                array(
                    'id' => '4623',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MAIZ PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135650525',
                        ),
                    'enabled' => true,
                ),
            623 =>
                array(
                    'id' => '4624',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NALDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135650583',
                        ),
                    'enabled' => true,
                ),
            624 =>
                array(
                    'id' => '4625',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135650646',
                        ),
                    'enabled' => true,
                ),
            625 =>
                array(
                    'id' => '4626',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135650741',
                        ),
                    'enabled' => true,
                ),
            626 =>
                array(
                    'id' => '4627',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHOWDHURYGAON BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670068',
                        ),
                    'enabled' => true,
                ),
            627 =>
                array(
                    'id' => '4628',
                    'bank_id' => '25',
                    'bank_branch_name' => 'B.B. ROAD CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670105',
                        ),
                    'enabled' => true,
                ),
            628 =>
                array(
                    'id' => '4629',
                    'bank_id' => '25',
                    'bank_branch_name' => 'B.K. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670134',
                        ),
                    'enabled' => true,
                ),
            629 =>
                array(
                    'id' => '4630',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670163',
                        ),
                    'enabled' => true,
                ),
            630 =>
                array(
                    'id' => '4631',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEOBHOUG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670347',
                        ),
                    'enabled' => true,
                ),
            631 =>
                array(
                    'id' => '4632',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHARMATOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670400',
                        ),
                    'enabled' => true,
                ),
            632 =>
                array(
                    'id' => '4633',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DREDGER SANGSTHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670468',
                        ),
                    'enabled' => true,
                ),
            633 =>
                array(
                    'id' => '4634',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FATULLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670521',
                        ),
                    'enabled' => true,
                ),
            634 =>
                array(
                    'id' => '4635',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GODNAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670550',
                        ),
                    'enabled' => true,
                ),
            635 =>
                array(
                    'id' => '4636',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOPALDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670613',
                        ),
                    'enabled' => true,
                ),
            636 =>
                array(
                    'id' => '4637',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JALKURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670684',
                        ),
                    'enabled' => true,
                ),
            637 =>
                array(
                    'id' => '4638',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670734',
                        ),
                    'enabled' => true,
                ),
            638 =>
                array(
                    'id' => '4639',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATCHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670826',
                        ),
                    'enabled' => true,
                ),
            639 =>
                array(
                    'id' => '4640',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LANGAL BANDHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670918',
                        ),
                    'enabled' => true,
                ),
            640 =>
                array(
                    'id' => '4641',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135670947',
                        ),
                    'enabled' => true,
                ),
            641 =>
                array(
                    'id' => '4642',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MURAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671120',
                        ),
                    'enabled' => true,
                ),
            642 =>
                array(
                    'id' => '4643',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671159',
                        ),
                    'enabled' => true,
                ),
            643 =>
                array(
                    'id' => '4644',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NETAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671270',
                        ),
                    'enabled' => true,
                ),
            644 =>
                array(
                    'id' => '4645',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671333',
                        ),
                    'enabled' => true,
                ),
            645 =>
                array(
                    'id' => '4646',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PANAMNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671362',
                        ),
                    'enabled' => true,
                ),
            646 =>
                array(
                    'id' => '4647',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SONAMIA MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671667',
                        ),
                    'enabled' => true,
                ),
            647 =>
                array(
                    'id' => '4648',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671696',
                        ),
                    'enabled' => true,
                ),
            648 =>
                array(
                    'id' => '4649',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SYED ALI CHAMBER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671720',
                        ),
                    'enabled' => true,
                ),
            649 =>
                array(
                    'id' => '4650',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135671759',
                        ),
                    'enabled' => true,
                ),
            650 =>
                array(
                    'id' => '4651',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ATASH ALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680074',
                        ),
                    'enabled' => true,
                ),
            651 =>
                array(
                    'id' => '4652',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BASHGARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680229',
                        ),
                    'enabled' => true,
                ),
            652 =>
                array(
                    'id' => '4653',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BELABO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680258',
                        ),
                    'enabled' => true,
                ),
            653 =>
                array(
                    'id' => '4654',
                    'bank_id' => '25',
                    'bank_branch_name' => 'C&BROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680287',
                        ),
                    'enabled' => true,
                ),
            654 =>
                array(
                    'id' => '4655',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GHORASAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680490',
                        ),
                    'enabled' => true,
                ),
            655 =>
                array(
                    'id' => '4656',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680524',
                        ),
                    'enabled' => true,
                ),
            656 =>
                array(
                    'id' => '4657',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATIRDIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680582',
                        ),
                    'enabled' => true,
                ),
            657 =>
                array(
                    'id' => '4658',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JOSHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680616',
                        ),
                    'enabled' => true,
                ),
            658 =>
                array(
                    'id' => '4659',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680737',
                        ),
                    'enabled' => true,
                ),
            659 =>
                array(
                    'id' => '4660',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARSHINGDI(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680887',
                        ),
                    'enabled' => true,
                ),
            660 =>
                array(
                    'id' => '4661',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PALASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135680911',
                        ),
                    'enabled' => true,
                ),
            661 =>
                array(
                    'id' => '4662',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHEKER CHAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135681273',
                        ),
                    'enabled' => true,
                ),
            662 =>
                array(
                    'id' => '4663',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135681307',
                        ),
                    'enabled' => true,
                ),
            663 =>
                array(
                    'id' => '4664',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SREERAMPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135681336',
                        ),
                    'enabled' => true,
                ),
            664 =>
                array(
                    'id' => '4665',
                    'bank_id' => '25',
                    'bank_branch_name' => 'VELA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135681394',
                        ),
                    'enabled' => true,
                ),
            665 =>
                array(
                    'id' => '4666',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690101',
                        ),
                    'enabled' => true,
                ),
            666 =>
                array(
                    'id' => '4667',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAGATIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690130',
                        ),
                    'enabled' => true,
                ),
            667 =>
                array(
                    'id' => '4668',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BASUDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690198',
                        ),
                    'enabled' => true,
                ),
            668 =>
                array(
                    'id' => '4669',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BILDAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690251',
                        ),
                    'enabled' => true,
                ),
            669 =>
                array(
                    'id' => '4670',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BONPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690280',
                        ),
                    'enabled' => true,
                ),
            670 =>
                array(
                    'id' => '4671',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAYARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690406',
                        ),
                    'enabled' => true,
                ),
            671 =>
                array(
                    'id' => '4672',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHANAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690435',
                        ),
                    'enabled' => true,
                ),
            672 =>
                array(
                    'id' => '4673',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHIGAPATIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690464',
                        ),
                    'enabled' => true,
                ),
            673 =>
                array(
                    'id' => '4674',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GURUDASPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690556',
                        ),
                    'enabled' => true,
                ),
            674 =>
                array(
                    'id' => '4675',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATIANDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690619',
                        ),
                    'enabled' => true,
                ),
            675 =>
                array(
                    'id' => '4676',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JONAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690677',
                        ),
                    'enabled' => true,
                ),
            676 =>
                array(
                    'id' => '4677',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KACHHIKATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690701',
                        ),
                    'enabled' => true,
                ),
            677 =>
                array(
                    'id' => '4678',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690798',
                        ),
                    'enabled' => true,
                ),
            678 =>
                array(
                    'id' => '4679',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADH NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135690972',
                        ),
                    'enabled' => true,
                ),
            679 =>
                array(
                    'id' => '4680',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOUKHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691005',
                        ),
                    'enabled' => true,
                ),
            680 =>
                array(
                    'id' => '4681',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NATORE ACADEMY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691126',
                        ),
                    'enabled' => true,
                ),
            681 =>
                array(
                    'id' => '4682',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NATORE(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691184',
                        ),
                    'enabled' => true,
                ),
            682 =>
                array(
                    'id' => '4683',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATUAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691276',
                        ),
                    'enabled' => true,
                ),
            683 =>
                array(
                    'id' => '4684',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJAPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691397',
                        ),
                    'enabled' => true,
                ),
            684 =>
                array(
                    'id' => '4685',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SALAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691450',
                        ),
                    'enabled' => true,
                ),
            685 =>
                array(
                    'id' => '4686',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SINGRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691513',
                        ),
                    'enabled' => true,
                ),
            686 =>
                array(
                    'id' => '4687',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STATION BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135691542',
                        ),
                    'enabled' => true,
                ),
            687 =>
                array(
                    'id' => '4688',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700259',
                        ),
                    'enabled' => true,
                ),
            688 =>
                array(
                    'id' => '4689',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHATRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700288',
                        ),
                    'enabled' => true,
                ),
            689 =>
                array(
                    'id' => '4690',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEWPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700370',
                        ),
                    'enabled' => true,
                ),
            690 =>
                array(
                    'id' => '4691',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KANSAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700525',
                        ),
                    'enabled' => true,
                ),
            691 =>
                array(
                    'id' => '4692',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOLLIKPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700675',
                        ),
                    'enabled' => true,
                ),
            692 =>
                array(
                    'id' => '4693',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NACHOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700738',
                        ),
                    'enabled' => true,
                ),
            693 =>
                array(
                    'id' => '4694',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANIHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700859',
                        ),
                    'enabled' => true,
                ),
            694 =>
                array(
                    'id' => '4695',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ROHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700888',
                        ),
                    'enabled' => true,
                ),
            695 =>
                array(
                    'id' => '4696',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135700941',
                        ),
                    'enabled' => true,
                ),
            696 =>
                array(
                    'id' => '4697',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JARIA JHANJAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135720284',
                        ),
                    'enabled' => true,
                ),
            697 =>
                array(
                    'id' => '4698',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JOYNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135720376',
                        ),
                    'enabled' => true,
                ),
            698 =>
                array(
                    'id' => '4699',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MAHANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135720671',
                        ),
                    'enabled' => true,
                ),
            699 =>
                array(
                    'id' => '4700',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NETROKONA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135720763',
                        ),
                    'enabled' => true,
                ),
            700 =>
                array(
                    'id' => '4701',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SATPAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135720884',
                        ),
                    'enabled' => true,
                ),
            701 =>
                array(
                    'id' => '4702',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TELIGATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135721009',
                        ),
                    'enabled' => true,
                ),
            702 =>
                array(
                    'id' => '4703',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHARAIKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730229',
                        ),
                    'enabled' => true,
                ),
            703 =>
                array(
                    'id' => '4704',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHILAHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730258',
                        ),
                    'enabled' => true,
                ),
            704 =>
                array(
                    'id' => '4705',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DOMAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730340',
                        ),
                    'enabled' => true,
                ),
            705 =>
                array(
                    'id' => '4706',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JALDHAKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730461',
                        ),
                    'enabled' => true,
                ),
            706 =>
                array(
                    'id' => '4707',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAIMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730524',
                        ),
                    'enabled' => true,
                ),
            707 =>
                array(
                    'id' => '4708',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730737',
                        ),
                    'enabled' => true,
                ),
            708 =>
                array(
                    'id' => '4709',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730766',
                        ),
                    'enabled' => true,
                ),
            709 =>
                array(
                    'id' => '4710',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135730795',
                        ),
                    'enabled' => true,
                ),
            710 =>
                array(
                    'id' => '4711',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750254',
                        ),
                    'enabled' => true,
                ),
            711 =>
                array(
                    'id' => '4712',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750588',
                        ),
                    'enabled' => true,
                ),
            712 =>
                array(
                    'id' => '4713',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHATTERPAIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750612',
                        ),
                    'enabled' => true,
                ),
            713 =>
                array(
                    'id' => '4714',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750670',
                        ),
                    'enabled' => true,
                ),
            714 =>
                array(
                    'id' => '4715',
                    'bank_id' => '25',
                    'bank_branch_name' => 'EIDGHAR AMIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750917',
                        ),
                    'enabled' => true,
                ),
            715 =>
                array(
                    'id' => '4716',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FAKIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750959',
                        ),
                    'enabled' => true,
                ),
            716 =>
                array(
                    'id' => '4717',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOLABARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135750975',
                        ),
                    'enabled' => true,
                ),
            717 =>
                array(
                    'id' => '4718',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHILPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135751453',
                        ),
                    'enabled' => true,
                ),
            718 =>
                array(
                    'id' => '4719',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MAIJDEE COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135751574',
                        ),
                    'enabled' => true,
                ),
            719 =>
                array(
                    'id' => '4720',
                    'bank_id' => '25',
                    'bank_branch_name' => 'OSKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135751758',
                        ),
                    'enabled' => true,
                ),
            720 =>
                array(
                    'id' => '4721',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PESKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135751811',
                        ),
                    'enabled' => true,
                ),
            721 =>
                array(
                    'id' => '4722',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SEBARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135752052',
                        ),
                    'enabled' => true,
                ),
            722 =>
                array(
                    'id' => '4723',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SENBAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135752081',
                        ),
                    'enabled' => true,
                ),
            723 =>
                array(
                    'id' => '4724',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SONAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135752265',
                        ),
                    'enabled' => true,
                ),
            724 =>
                array(
                    'id' => '4725',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZAMIDERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135754155',
                        ),
                    'enabled' => true,
                ),
            725 =>
                array(
                    'id' => '4726',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANGLADESH IKKHU GOBESHANA INSTITUTE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760099',
                        ),
                    'enabled' => true,
                ),
            726 =>
                array(
                    'id' => '4727',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ATAI KULA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760194',
                        ),
                    'enabled' => true,
                ),
            727 =>
                array(
                    'id' => '4728',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ATUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760286',
                        ),
                    'enabled' => true,
                ),
            728 =>
                array(
                    'id' => '4729',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANA GRAM BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760378',
                        ),
                    'enabled' => true,
                ),
            729 =>
                array(
                    'id' => '4730',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BERA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760460',
                        ),
                    'enabled' => true,
                ),
            730 =>
                array(
                    'id' => '4731',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHATMOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760644',
                        ),
                    'enabled' => true,
                ),
            731 =>
                array(
                    'id' => '4732',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DASHURIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760794',
                        ),
                    'enabled' => true,
                ),
            732 =>
                array(
                    'id' => '4733',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEMRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760857',
                        ),
                    'enabled' => true,
                ),
            733 =>
                array(
                    'id' => '4734',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DULAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135760978',
                        ),
                    'enabled' => true,
                ),
            734 =>
                array(
                    'id' => '4735',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761214',
                        ),
                    'enabled' => true,
                ),
            735 =>
                array(
                    'id' => '4736',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KASHINATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761335',
                        ),
                    'enabled' => true,
                ),
            736 =>
                array(
                    'id' => '4737',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MASHUNDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761485',
                        ),
                    'enabled' => true,
                ),
            737 =>
                array(
                    'id' => '4738',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MUNICIPALITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761601',
                        ),
                    'enabled' => true,
                ),
            738 =>
                array(
                    'id' => '4739',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NURPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761751',
                        ),
                    'enabled' => true,
                ),
            739 =>
                array(
                    'id' => '4740',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PABNA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761814',
                        ),
                    'enabled' => true,
                ),
            740 =>
                array(
                    'id' => '4741',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PABNA CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761872',
                        ),
                    'enabled' => true,
                ),
            741 =>
                array(
                    'id' => '4742',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAKSEY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135761906',
                        ),
                    'enabled' => true,
                ),
            742 =>
                array(
                    'id' => '4743',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUPPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135762026',
                        ),
                    'enabled' => true,
                ),
            743 =>
                array(
                    'id' => '4744',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TEBUNIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135762297',
                        ),
                    'enabled' => true,
                ),
            744 =>
                array(
                    'id' => '4745',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ATWARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135770047',
                        ),
                    'enabled' => true,
                ),
            745 =>
                array(
                    'id' => '4746',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BALARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135770076',
                        ),
                    'enabled' => true,
                ),
            746 =>
                array(
                    'id' => '4747',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEBIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135770197',
                        ),
                    'enabled' => true,
                ),
            747 =>
                array(
                    'id' => '4748',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FULBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135770250',
                        ),
                    'enabled' => true,
                ),
            748 =>
                array(
                    'id' => '4749',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135770555',
                        ),
                    'enabled' => true,
                ),
            749 =>
                array(
                    'id' => '4750',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAUPHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135780190',
                        ),
                    'enabled' => true,
                ),
            750 =>
                array(
                    'id' => '4751',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DASHMINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135780345',
                        ),
                    'enabled' => true,
                ),
            751 =>
                array(
                    'id' => '4752',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DASPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135780374',
                        ),
                    'enabled' => true,
                ),
            752 =>
                array(
                    'id' => '4753',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GALACHIPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135780495',
                        ),
                    'enabled' => true,
                ),
            753 =>
                array(
                    'id' => '4754',
                    'bank_id' => '25',
                    'bank_branch_name' => 'THANA PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135780732',
                        ),
                    'enabled' => true,
                ),
            754 =>
                array(
                    'id' => '4755',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHEPUPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135780761',
                        ),
                    'enabled' => true,
                ),
            755 =>
                array(
                    'id' => '4756',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NUTUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135781007',
                        ),
                    'enabled' => true,
                ),
            756 =>
                array(
                    'id' => '4757',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATUAKHALI(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135781157',
                        ),
                    'enabled' => true,
                ),
            757 =>
                array(
                    'id' => '4758',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUBIDKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135781278',
                        ),
                    'enabled' => true,
                ),
            758 =>
                array(
                    'id' => '4759',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KOWRIKHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135790469',
                        ),
                    'enabled' => true,
                ),
            759 =>
                array(
                    'id' => '4760',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PIROJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135790764',
                        ),
                    'enabled' => true,
                ),
            760 =>
                array(
                    'id' => '4761',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810073',
                        ),
                    'enabled' => true,
                ),
            761 =>
                array(
                    'id' => '4762',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANESHWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810228',
                        ),
                    'enabled' => true,
                ),
            762 =>
                array(
                    'id' => '4763',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BASUDEB PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810286',
                        ),
                    'enabled' => true,
                ),
            763 =>
                array(
                    'id' => '4764',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHAWANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810349',
                        ),
                    'enabled' => true,
                ),
            764 =>
                array(
                    'id' => '4765',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BIRKUTSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810378',
                        ),
                    'enabled' => true,
                ),
            765 =>
                array(
                    'id' => '4766',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NOAHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810523',
                        ),
                    'enabled' => true,
                ),
            766 =>
                array(
                    'id' => '4767',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810552',
                        ),
                    'enabled' => true,
                ),
            767 =>
                array(
                    'id' => '4768',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GHORAMARA LADIES',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810581',
                        ),
                    'enabled' => true,
                ),
            768 =>
                array(
                    'id' => '4769',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GODAGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810615',
                        ),
                    'enabled' => true,
                ),
            769 =>
                array(
                    'id' => '4770',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HALIDAGACHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810707',
                        ),
                    'enabled' => true,
                ),
            770 =>
                array(
                    'id' => '4771',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HARAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810736',
                        ),
                    'enabled' => true,
                ),
            771 =>
                array(
                    'id' => '4772',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATGANGPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810794',
                        ),
                    'enabled' => true,
                ),
            772 =>
                array(
                    'id' => '4773',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HETEMKHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810828',
                        ),
                    'enabled' => true,
                ),
            773 =>
                array(
                    'id' => '4774',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KADIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810910',
                        ),
                    'enabled' => true,
                ),
            774 =>
                array(
                    'id' => '4775',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAKANHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135810949',
                        ),
                    'enabled' => true,
                ),
            775 =>
                array(
                    'id' => '4776',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATAKHALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811069',
                        ),
                    'enabled' => true,
                ),
            776 =>
                array(
                    'id' => '4777',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LAXMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811180',
                        ),
                    'enabled' => true,
                ),
            777 =>
                array(
                    'id' => '4778',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MHONGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811335',
                        ),
                    'enabled' => true,
                ),
            778 =>
                array(
                    'id' => '4779',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MOHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811393',
                        ),
                    'enabled' => true,
                ),
            779 =>
                array(
                    'id' => '4780',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NOWDAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811669',
                        ),
                    'enabled' => true,
                ),
            780 =>
                array(
                    'id' => '4781',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PREMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811814',
                        ),
                    'enabled' => true,
                ),
            781 =>
                array(
                    'id' => '4782',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PUTHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811843',
                        ),
                    'enabled' => true,
                ),
            782 =>
                array(
                    'id' => '4783',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJABARIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135811906',
                        ),
                    'enabled' => true,
                ),
            783 =>
                array(
                    'id' => '4784',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJSHAHI CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135812026',
                        ),
                    'enabled' => true,
                ),
            784 =>
                array(
                    'id' => '4785',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135812147',
                        ),
                    'enabled' => true,
                ),
            785 =>
                array(
                    'id' => '4786',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAMKURAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135812297',
                        ),
                    'enabled' => true,
                ),
            786 =>
                array(
                    'id' => '4787',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TAHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135812321',
                        ),
                    'enabled' => true,
                ),
            787 =>
                array(
                    'id' => '4788',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TANORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135812389',
                        ),
                    'enabled' => true,
                ),
            788 =>
                array(
                    'id' => '4789',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COURT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135820050',
                        ),
                    'enabled' => true,
                ),
            789 =>
                array(
                    'id' => '4790',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BALIAKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135820168',
                        ),
                    'enabled' => true,
                ),
            790 =>
                array(
                    'id' => '4791',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHANKHANAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135820434',
                        ),
                    'enabled' => true,
                ),
            791 =>
                array(
                    'id' => '4792',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135820584',
                        ),
                    'enabled' => true,
                ),
            792 =>
                array(
                    'id' => '4793',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135820676',
                        ),
                    'enabled' => true,
                ),
            793 =>
                array(
                    'id' => '4794',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RAJBARI(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135820797',
                        ),
                    'enabled' => true,
                ),
            794 =>
                array(
                    'id' => '4795',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAPTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135840285',
                        ),
                    'enabled' => true,
                ),
            795 =>
                array(
                    'id' => '4796',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KATALTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135840319',
                        ),
                    'enabled' => true,
                ),
            796 =>
                array(
                    'id' => '4797',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850046',
                        ),
                    'enabled' => true,
                ),
            797 =>
                array(
                    'id' => '4798',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BETGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850259',
                        ),
                    'enabled' => true,
                ),
            798 =>
                array(
                    'id' => '4799',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHOWDHURANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850404',
                        ),
                    'enabled' => true,
                ),
            799 =>
                array(
                    'id' => '4800',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GANGACHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850617',
                        ),
                    'enabled' => true,
                ),
            800 =>
                array(
                    'id' => '4801',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HARAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850675',
                        ),
                    'enabled' => true,
                ),
            801 =>
                array(
                    'id' => '4802',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAUNIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850767',
                        ),
                    'enabled' => true,
                ),
            802 =>
                array(
                    'id' => '4803',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LALBAGH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850888',
                        ),
                    'enabled' => true,
                ),
            803 =>
                array(
                    'id' => '4804',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135850941',
                        ),
                    'enabled' => true,
                ),
            804 =>
                array(
                    'id' => '4805',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAGLAPIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135851216',
                        ),
                    'enabled' => true,
                ),
            805 =>
                array(
                    'id' => '4806',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135851366',
                        ),
                    'enabled' => true,
                ),
            806 =>
                array(
                    'id' => '4807',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANGPUR COPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135851511',
                        ),
                    'enabled' => true,
                ),
            807 =>
                array(
                    'id' => '4808',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHYAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135851690',
                        ),
                    'enabled' => true,
                ),
            808 =>
                array(
                    'id' => '4809',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHATIBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135851782',
                        ),
                    'enabled' => true,
                ),
            809 =>
                array(
                    'id' => '4810',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHILPANAGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135851845',
                        ),
                    'enabled' => true,
                ),
            810 =>
                array(
                    'id' => '4811',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHEDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135860102',
                        ),
                    'enabled' => true,
                ),
            811 =>
                array(
                    'id' => '4812',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHOJESWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135860131',
                        ),
                    'enabled' => true,
                ),
            812 =>
                array(
                    'id' => '4813',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAMUDYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135860199',
                        ),
                    'enabled' => true,
                ),
            813 =>
                array(
                    'id' => '4814',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GHARISHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135860281',
                        ),
                    'enabled' => true,
                ),
            814 =>
                array(
                    'id' => '4815',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SARIATPUR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135860610',
                        ),
                    'enabled' => true,
                ),
            815 =>
                array(
                    'id' => '4816',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AGARDARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870042',
                        ),
                    'enabled' => true,
                ),
            816 =>
                array(
                    'id' => '4817',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ASASUNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870071',
                        ),
                    'enabled' => true,
                ),
            817 =>
                array(
                    'id' => '4818',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAKAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870105',
                        ),
                    'enabled' => true,
                ),
            818 =>
                array(
                    'id' => '4819',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BANSHTALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870192',
                        ),
                    'enabled' => true,
                ),
            819 =>
                array(
                    'id' => '4820',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BRAHMARAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870318',
                        ),
                    'enabled' => true,
                ),
            820 =>
                array(
                    'id' => '4821',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870613',
                        ),
                    'enabled' => true,
                ),
            821 =>
                array(
                    'id' => '4822',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SATKHIRA UPAZILA COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135870976',
                        ),
                    'enabled' => true,
                ),
            822 =>
                array(
                    'id' => '4823',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATKELGHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871038',
                        ),
                    'enabled' => true,
                ),
            823 =>
                array(
                    'id' => '4824',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SATKHIRA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871120',
                        ),
                    'enabled' => true,
                ),
            824 =>
                array(
                    'id' => '4825',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SENERGATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871159',
                        ),
                    'enabled' => true,
                ),
            825 =>
                array(
                    'id' => '4826',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871212',
                        ),
                    'enabled' => true,
                ),
            826 =>
                array(
                    'id' => '4827',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SULTANPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871270',
                        ),
                    'enabled' => true,
                ),
            827 =>
                array(
                    'id' => '4828',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871304',
                        ),
                    'enabled' => true,
                ),
            828 =>
                array(
                    'id' => '4829',
                    'bank_id' => '25',
                    'bank_branch_name' => 'UZIRPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135871333',
                        ),
                    'enabled' => true,
                ),
            829 =>
                array(
                    'id' => '4830',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AJUGARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880045',
                        ),
                    'enabled' => true,
                ),
            830 =>
                array(
                    'id' => '4831',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAGBATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880108',
                        ),
                    'enabled' => true,
                ),
            831 =>
                array(
                    'id' => '4832',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BAGHABARIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880137',
                        ),
                    'enabled' => true,
                ),
            832 =>
                array(
                    'id' => '4833',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARUHASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880195',
                        ),
                    'enabled' => true,
                ),
            833 =>
                array(
                    'id' => '4834',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAMTAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880566',
                        ),
                    'enabled' => true,
                ),
            834 =>
                array(
                    'id' => '4835',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880616',
                        ),
                    'enabled' => true,
                ),
            835 =>
                array(
                    'id' => '4836',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAMAIZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880645',
                        ),
                    'enabled' => true,
                ),
            836 =>
                array(
                    'id' => '4837',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHANGORA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880674',
                        ),
                    'enabled' => true,
                ),
            837 =>
                array(
                    'id' => '4838',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHARAILHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880708',
                        ),
                    'enabled' => true,
                ),
            838 =>
                array(
                    'id' => '4839',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHUKURIABERA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880766',
                        ),
                    'enabled' => true,
                ),
            839 =>
                array(
                    'id' => '4840',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DOBILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880795',
                        ),
                    'enabled' => true,
                ),
            840 =>
                array(
                    'id' => '4841',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HATIKUMRUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880911',
                        ),
                    'enabled' => true,
                ),
            841 =>
                array(
                    'id' => '4842',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAIJURIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135880979',
                        ),
                    'enabled' => true,
                ),
            842 =>
                array(
                    'id' => '4843',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KHUKIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881273',
                        ),
                    'enabled' => true,
                ),
            843 =>
                array(
                    'id' => '4844',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MASIMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881336',
                        ),
                    'enabled' => true,
                ),
            844 =>
                array(
                    'id' => '4845',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANDHUNIBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881723',
                        ),
                    'enabled' => true,
                ),
            845 =>
                array(
                    'id' => '4846',
                    'bank_id' => '25',
                    'bank_branch_name' => 'S.B. FAZLUL HOQ OAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881752',
                        ),
                    'enabled' => true,
                ),
            846 =>
                array(
                    'id' => '4847',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SALONGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881844',
                        ),
                    'enabled' => true,
                ),
            847 =>
                array(
                    'id' => '4848',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881873',
                        ),
                    'enabled' => true,
                ),
            848 =>
                array(
                    'id' => '4849',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881907',
                        ),
                    'enabled' => true,
                ),
            849 =>
                array(
                    'id' => '4850',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHOHAGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135881965',
                        ),
                    'enabled' => true,
                ),
            850 =>
                array(
                    'id' => '4851',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TAMAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135882148',
                        ),
                    'enabled' => true,
                ),
            851 =>
                array(
                    'id' => '4852',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TARASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135882177',
                        ),
                    'enabled' => true,
                ),
            852 =>
                array(
                    'id' => '4853',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ULLAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135882230',
                        ),
                    'enabled' => true,
                ),
            853 =>
                array(
                    'id' => '4854',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHANDRAKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135890101',
                        ),
                    'enabled' => true,
                ),
            854 =>
                array(
                    'id' => '4855',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JHENAIGATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135890169',
                        ),
                    'enabled' => true,
                ),
            855 =>
                array(
                    'id' => '4856',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAMARER CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135890222',
                        ),
                    'enabled' => true,
                ),
            856 =>
                array(
                    'id' => '4857',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARAYANKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135890464',
                        ),
                    'enabled' => true,
                ),
            857 =>
                array(
                    'id' => '4858',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHERPUR(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135890619',
                        ),
                    'enabled' => true,
                ),
            858 =>
                array(
                    'id' => '4859',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BARAFECHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900138',
                        ),
                    'enabled' => true,
                ),
            859 =>
                array(
                    'id' => '4860',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900220',
                        ),
                    'enabled' => true,
                ),
            860 =>
                array(
                    'id' => '4861',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DERAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900259',
                        ),
                    'enabled' => true,
                ),
            861 =>
                array(
                    'id' => '4862',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GABINDAGONJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900404',
                        ),
                    'enabled' => true,
                ),
            862 =>
                array(
                    'id' => '4863',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900491',
                        ),
                    'enabled' => true,
                ),
            863 =>
                array(
                    'id' => '4864',
                    'bank_id' => '25',
                    'bank_branch_name' => 'JAOWA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900554',
                        ),
                    'enabled' => true,
                ),
            864 =>
                array(
                    'id' => '4865',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAYABANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900796',
                        ),
                    'enabled' => true,
                ),
            865 =>
                array(
                    'id' => '4866',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHIBGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900859',
                        ),
                    'enabled' => true,
                ),
            866 =>
                array(
                    'id' => '4867',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135900941',
                        ),
                    'enabled' => true,
                ),
            867 =>
                array(
                    'id' => '4868',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SACHNA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135901003',
                        ),
                    'enabled' => true,
                ),
            868 =>
                array(
                    'id' => '4869',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SUNAMGANJ(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135901153',
                        ),
                    'enabled' => true,
                ),
            869 =>
                array(
                    'id' => '4870',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135910315',
                        ),
                    'enabled' => true,
                ),
            870 =>
                array(
                    'id' => '4871',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHADRESHWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135910373',
                        ),
                    'enabled' => true,
                ),
            871 =>
                array(
                    'id' => '4872',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135910436',
                        ),
                    'enabled' => true,
                ),
            872 =>
                array(
                    'id' => '4873',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BURUNGA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135910586',
                        ),
                    'enabled' => true,
                ),
            873 =>
                array(
                    'id' => '4874',
                    'bank_id' => '25',
                    'bank_branch_name' => 'CHAMBER BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135910649',
                        ),
                    'enabled' => true,
                ),
            874 =>
                array(
                    'id' => '4875',
                    'bank_id' => '25',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135910915',
                        ),
                    'enabled' => true,
                ),
            875 =>
                array(
                    'id' => '4876',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHAKA DAKHIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135911301',
                        ),
                    'enabled' => true,
                ),
            876 =>
                array(
                    'id' => '4877',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135911369',
                        ),
                    'enabled' => true,
                ),
            877 =>
                array(
                    'id' => '4878',
                    'bank_id' => '25',
                    'bank_branch_name' => 'FOREIGN EXCHANGE CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135911422',
                        ),
                    'enabled' => true,
                ),
            878 =>
                array(
                    'id' => '4879',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GANGADIA KAZIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135911451',
                        ),
                    'enabled' => true,
                ),
            879 =>
                array(
                    'id' => '4880',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135911606',
                        ),
                    'enabled' => true,
                ),
            880 =>
                array(
                    'id' => '4881',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KALIBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135911969',
                        ),
                    'enabled' => true,
                ),
            881 =>
                array(
                    'id' => '4882',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KANAIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135912089',
                        ),
                    'enabled' => true,
                ),
            882 =>
                array(
                    'id' => '4883',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KAZITULA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135912171',
                        ),
                    'enabled' => true,
                ),
            883 =>
                array(
                    'id' => '4884',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KUMARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135912355',
                        ),
                    'enabled' => true,
                ),
            884 =>
                array(
                    'id' => '4885',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SADIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913196',
                        ),
                    'enabled' => true,
                ),
            885 =>
                array(
                    'id' => '4886',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHAHJALAL UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913259',
                        ),
                    'enabled' => true,
                ),
            886 =>
                array(
                    'id' => '4887',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHEIKHGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913288',
                        ),
                    'enabled' => true,
                ),
            887 =>
                array(
                    'id' => '4888',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SHERPUR NUTAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913341',
                        ),
                    'enabled' => true,
                ),
            888 =>
                array(
                    'id' => '4889',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913462',
                        ),
                    'enabled' => true,
                ),
            889 =>
                array(
                    'id' => '4890',
                    'bank_id' => '25',
                    'bank_branch_name' => 'SYLHET CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913646',
                        ),
                    'enabled' => true,
                ),
            890 =>
                array(
                    'id' => '4891',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135913820',
                        ),
                    'enabled' => true,
                ),
            891 =>
                array(
                    'id' => '4892',
                    'bank_id' => '25',
                    'bank_branch_name' => 'WEST AMURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135914090',
                        ),
                    'enabled' => true,
                ),
            892 =>
                array(
                    'id' => '4893',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZAKIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135914124',
                        ),
                    'enabled' => true,
                ),
            893 =>
                array(
                    'id' => '4894',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ZINDA BAZAR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135914182',
                        ),
                    'enabled' => true,
                ),
            894 =>
                array(
                    'id' => '4895',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ALLENGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930108',
                        ),
                    'enabled' => true,
                ),
            895 =>
                array(
                    'id' => '4896',
                    'bank_id' => '25',
                    'bank_branch_name' => 'ASEKPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930166',
                        ),
                    'enabled' => true,
                ),
            896 =>
                array(
                    'id' => '4897',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NALLAPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930182',
                        ),
                    'enabled' => true,
                ),
            897 =>
                array(
                    'id' => '4898',
                    'bank_id' => '25',
                    'bank_branch_name' => 'AUSHNARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930258',
                        ),
                    'enabled' => true,
                ),
            898 =>
                array(
                    'id' => '4899',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BHUANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930461',
                        ),
                    'enabled' => true,
                ),
            899 =>
                array(
                    'id' => '4900',
                    'bank_id' => '25',
                    'bank_branch_name' => 'BUS TERMINAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930490',
                        ),
                    'enabled' => true,
                ),
            900 =>
                array(
                    'id' => '4901',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DEYPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930616',
                        ),
                    'enabled' => true,
                ),
            901 =>
                array(
                    'id' => '4902',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHALAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930645',
                        ),
                    'enabled' => true,
                ),
            902 =>
                array(
                    'id' => '4903',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DHIGAIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930708',
                        ),
                    'enabled' => true,
                ),
            903 =>
                array(
                    'id' => '4904',
                    'bank_id' => '25',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930766',
                        ),
                    'enabled' => true,
                ),
            904 =>
                array(
                    'id' => '4905',
                    'bank_id' => '25',
                    'bank_branch_name' => 'GHATAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135930911',
                        ),
                    'enabled' => true,
                ),
            905 =>
                array(
                    'id' => '4906',
                    'bank_id' => '25',
                    'bank_branch_name' => 'HAMIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931099',
                        ),
                    'enabled' => true,
                ),
            906 =>
                array(
                    'id' => '4907',
                    'bank_id' => '25',
                    'bank_branch_name' => 'KODIMDHOLLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931431',
                        ),
                    'enabled' => true,
                ),
            907 =>
                array(
                    'id' => '4908',
                    'bank_id' => '25',
                    'bank_branch_name' => 'MADHUPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931486',
                        ),
                    'enabled' => true,
                ),
            908 =>
                array(
                    'id' => '4909',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NAGARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931699',
                        ),
                    'enabled' => true,
                ),
            909 =>
                array(
                    'id' => '4910',
                    'bank_id' => '25',
                    'bank_branch_name' => 'NARANDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931752',
                        ),
                    'enabled' => true,
                ),
            910 =>
                array(
                    'id' => '4911',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PAIKSA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931828',
                        ),
                    'enabled' => true,
                ),
            911 =>
                array(
                    'id' => '4912',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PATHARGHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135931936',
                        ),
                    'enabled' => true,
                ),
            912 =>
                array(
                    'id' => '4913',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RASULPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135932027',
                        ),
                    'enabled' => true,
                ),
            913 =>
                array(
                    'id' => '4914',
                    'bank_id' => '25',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135932298',
                        ),
                    'enabled' => true,
                ),
            914 =>
                array(
                    'id' => '4915',
                    'bank_id' => '25',
                    'bank_branch_name' => 'LAHIRIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135940619',
                        ),
                    'enabled' => true,
                ),
            915 =>
                array(
                    'id' => '4916',
                    'bank_id' => '25',
                    'bank_branch_name' => 'PIRGONJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135940798',
                        ),
                    'enabled' => true,
                ),
            916 =>
                array(
                    'id' => '4917',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RANISANKAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135940822',
                        ),
                    'enabled' => true,
                ),
            917 =>
                array(
                    'id' => '4918',
                    'bank_id' => '25',
                    'bank_branch_name' => 'RUHEA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135940851',
                        ),
                    'enabled' => true,
                ),
            918 =>
                array(
                    'id' => '4919',
                    'bank_id' => '25',
                    'bank_branch_name' => 'STATION BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135940943',
                        ),
                    'enabled' => true,
                ),
            919 =>
                array(
                    'id' => '4920',
                    'bank_id' => '25',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '135940972',
                        ),
                    'enabled' => true,
                ),
            920 =>
                array(
                    'id' => '4921',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140060289',
                        ),
                    'enabled' => true,
                ),
            921 =>
                array(
                    'id' => '4922',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140090109',
                        ),
                    'enabled' => true,
                ),
            922 =>
                array(
                    'id' => '4923',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140100378',
                        ),
                    'enabled' => true,
                ),
            923 =>
                array(
                    'id' => '4924',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140120103',
                        ),
                    'enabled' => true,
                ),
            924 =>
                array(
                    'id' => '4925',
                    'bank_id' => '26',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140130319',
                        ),
                    'enabled' => true,
                ),
            925 =>
                array(
                    'id' => '4926',
                    'bank_id' => '26',
                    'bank_branch_name' => 'FARIDGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140130672',
                        ),
                    'enabled' => true,
                ),
            926 =>
                array(
                    'id' => '4927',
                    'bank_id' => '26',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140150131',
                        ),
                    'enabled' => true,
                ),
            927 =>
                array(
                    'id' => '4928',
                    'bank_id' => '26',
                    'bank_branch_name' => 'A K KHAN MOOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140150210',
                        ),
                    'enabled' => true,
                ),
            928 =>
                array(
                    'id' => '4929',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BARAIYER HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140151093',
                        ),
                    'enabled' => true,
                ),
            929 =>
                array(
                    'id' => '4930',
                    'bank_id' => '26',
                    'bank_branch_name' => 'CHITTAGONG EPZ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140152005',
                        ),
                    'enabled' => true,
                ),
            930 =>
                array(
                    'id' => '4931',
                    'bank_id' => '26',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140153646',
                        ),
                    'enabled' => true,
                ),
            931 =>
                array(
                    'id' => '4932',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140154274',
                        ),
                    'enabled' => true,
                ),
            932 =>
                array(
                    'id' => '4933',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KHULSHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140154366',
                        ),
                    'enabled' => true,
                ),
            933 =>
                array(
                    'id' => '4934',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MADAM BIBIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140154690',
                        ),
                    'enabled' => true,
                ),
            934 =>
                array(
                    'id' => '4935',
                    'bank_id' => '26',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140155802',
                        ),
                    'enabled' => true,
                ),
            935 =>
                array(
                    'id' => '4936',
                    'bank_id' => '26',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140156135',
                        ),
                    'enabled' => true,
                ),
            936 =>
                array(
                    'id' => '4937',
                    'bank_id' => '26',
                    'bank_branch_name' => 'PATIYA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140156177',
                        ),
                    'enabled' => true,
                ),
            937 =>
                array(
                    'id' => '4938',
                    'bank_id' => '26',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140156735',
                        ),
                    'enabled' => true,
                ),
            938 =>
                array(
                    'id' => '4939',
                    'bank_id' => '26',
                    'bank_branch_name' => 'SHAIK MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140157213',
                        ),
                    'enabled' => true,
                ),
            939 =>
                array(
                    'id' => '4940',
                    'bank_id' => '26',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140180198',
                        ),
                    'enabled' => true,
                ),
            940 =>
                array(
                    'id' => '4941',
                    'bank_id' => '26',
                    'bank_branch_name' => 'SHUAGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140190238',
                        ),
                    'enabled' => true,
                ),
            941 =>
                array(
                    'id' => '4942',
                    'bank_id' => '26',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140191158',
                        ),
                    'enabled' => true,
                ),
            942 =>
                array(
                    'id' => '4943',
                    'bank_id' => '26',
                    'bank_branch_name' => 'JHILONGHA(COX\'S BAZAR)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140220582',
                        ),
                    'enabled' => true,
                ),
            943 =>
                array(
                    'id' => '4944',
                    'bank_id' => '26',
                    'bank_branch_name' => 'INTERNATIONAL AIRPORT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140260171',
                        ),
                    'enabled' => true,
                ),
            944 =>
                array(
                    'id' => '4945',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ASAD GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140260197',
                        ),
                    'enabled' => true,
                ),
            945 =>
                array(
                    'id' => '4946',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140260221',
                        ),
                    'enabled' => true,
                ),
            946 =>
                array(
                    'id' => '4947',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140260434',
                        ),
                    'enabled' => true,
                ),
            947 =>
                array(
                    'id' => '4948',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BAIPAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140260650',
                        ),
                    'enabled' => true,
                ),
            948 =>
                array(
                    'id' => '4949',
                    'bank_id' => '26',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140260784',
                        ),
                    'enabled' => true,
                ),
            949 =>
                array(
                    'id' => '4950',
                    'bank_id' => '26',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140261183',
                        ),
                    'enabled' => true,
                ),
            950 =>
                array(
                    'id' => '4951',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140261338',
                        ),
                    'enabled' => true,
                ),
            951 =>
                array(
                    'id' => '4952',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ENGINEERS INSTITUTION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140261370',
                        ),
                    'enabled' => true,
                ),
            952 =>
                array(
                    'id' => '4953',
                    'bank_id' => '26',
                    'bank_branch_name' => 'GARIB-E-NEWAZ AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140261646',
                        ),
                    'enabled' => true,
                ),
            953 =>
                array(
                    'id' => '4954',
                    'bank_id' => '26',
                    'bank_branch_name' => 'GREEN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140261691',
                        ),
                    'enabled' => true,
                ),
            954 =>
                array(
                    'id' => '4955',
                    'bank_id' => '26',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140261725',
                        ),
                    'enabled' => true,
                ),
            955 =>
                array(
                    'id' => '4956',
                    'bank_id' => '26',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140262058',
                        ),
                    'enabled' => true,
                ),
            956 =>
                array(
                    'id' => '4957',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140262537',
                        ),
                    'enabled' => true,
                ),
            957 =>
                array(
                    'id' => '4958',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MAZAR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140262908',
                        ),
                    'enabled' => true,
                ),
            958 =>
                array(
                    'id' => '4959',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140262982',
                        ),
                    'enabled' => true,
                ),
            959 =>
                array(
                    'id' => '4960',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140263194',
                        ),
                    'enabled' => true,
                ),
            960 =>
                array(
                    'id' => '4961',
                    'bank_id' => '26',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140263707',
                        ),
                    'enabled' => true,
                ),
            961 =>
                array(
                    'id' => '4962',
                    'bank_id' => '26',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140263978',
                        ),
                    'enabled' => true,
                ),
            962 =>
                array(
                    'id' => '4963',
                    'bank_id' => '26',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140264030',
                        ),
                    'enabled' => true,
                ),
            963 =>
                array(
                    'id' => '4964',
                    'bank_id' => '26',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140264630',
                        ),
                    'enabled' => true,
                ),
            964 =>
                array(
                    'id' => '4965',
                    'bank_id' => '26',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140270008',
                        ),
                    'enabled' => true,
                ),
            965 =>
                array(
                    'id' => '4966',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ABDULLAHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140270129',
                        ),
                    'enabled' => true,
                ),
            966 =>
                array(
                    'id' => '4967',
                    'bank_id' => '26',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140270132',
                        ),
                    'enabled' => true,
                ),
            967 =>
                array(
                    'id' => '4968',
                    'bank_id' => '26',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140270345',
                        ),
                    'enabled' => true,
                ),
            968 =>
                array(
                    'id' => '4969',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BIJOY NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140271094',
                        ),
                    'enabled' => true,
                ),
            969 =>
                array(
                    'id' => '4970',
                    'bank_id' => '26',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140271423',
                        ),
                    'enabled' => true,
                ),
            970 =>
                array(
                    'id' => '4971',
                    'bank_id' => '26',
                    'bank_branch_name' => 'DEMRA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140271494',
                        ),
                    'enabled' => true,
                ),
            971 =>
                array(
                    'id' => '4972',
                    'bank_id' => '26',
                    'bank_branch_name' => 'DHOLAIKHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140271849',
                        ),
                    'enabled' => true,
                ),
            972 =>
                array(
                    'id' => '4973',
                    'bank_id' => '26',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140272806',
                        ),
                    'enabled' => true,
                ),
            973 =>
                array(
                    'id' => '4974',
                    'bank_id' => '26',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140273289',
                        ),
                    'enabled' => true,
                ),
            974 =>
                array(
                    'id' => '4975',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140274183',
                        ),
                    'enabled' => true,
                ),
            975 =>
                array(
                    'id' => '4976',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140274246',
                        ),
                    'enabled' => true,
                ),
            976 =>
                array(
                    'id' => '4977',
                    'bank_id' => '26',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140274725',
                        ),
                    'enabled' => true,
                ),
            977 =>
                array(
                    'id' => '4978',
                    'bank_id' => '26',
                    'bank_branch_name' => 'NAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140274817',
                        ),
                    'enabled' => true,
                ),
            978 =>
                array(
                    'id' => '4979',
                    'bank_id' => '26',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140275353',
                        ),
                    'enabled' => true,
                ),
            979 =>
                array(
                    'id' => '4980',
                    'bank_id' => '26',
                    'bank_branch_name' => 'RAMPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140275740',
                        ),
                    'enabled' => true,
                ),
            980 =>
                array(
                    'id' => '4981',
                    'bank_id' => '26',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140280672',
                        ),
                    'enabled' => true,
                ),
            981 =>
                array(
                    'id' => '4982',
                    'bank_id' => '26',
                    'bank_branch_name' => 'DAGANBHUIYAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140300378',
                        ),
                    'enabled' => true,
                ),
            982 =>
                array(
                    'id' => '4983',
                    'bank_id' => '26',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140300523',
                        ),
                    'enabled' => true,
                ),
            983 =>
                array(
                    'id' => '4984',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KURAISH MUNSHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140300923',
                        ),
                    'enabled' => true,
                ),
            984 =>
                array(
                    'id' => '4985',
                    'bank_id' => '26',
                    'bank_branch_name' => 'RAJNAGAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140301401',
                        ),
                    'enabled' => true,
                ),
            985 =>
                array(
                    'id' => '4986',
                    'bank_id' => '26',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140320587',
                        ),
                    'enabled' => true,
                ),
            986 =>
                array(
                    'id' => '4987',
                    'bank_id' => '26',
                    'bank_branch_name' => 'BOARD BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140330227',
                        ),
                    'enabled' => true,
                ),
            987 =>
                array(
                    'id' => '4988',
                    'bank_id' => '26',
                    'bank_branch_name' => 'GAZIPUR CHOWRASTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140330551',
                        ),
                    'enabled' => true,
                ),
            988 =>
                array(
                    'id' => '4989',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140330948',
                        ),
                    'enabled' => true,
                ),
            989 =>
                array(
                    'id' => '4990',
                    'bank_id' => '26',
                    'bank_branch_name' => 'NABIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140361096',
                        ),
                    'enabled' => true,
                ),
            990 =>
                array(
                    'id' => '4991',
                    'bank_id' => '26',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140410947',
                        ),
                    'enabled' => true,
                ),
            991 =>
                array(
                    'id' => '4992',
                    'bank_id' => '26',
                    'bank_branch_name' => 'JHALOKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140420311',
                        ),
                    'enabled' => true,
                ),
            992 =>
                array(
                    'id' => '4993',
                    'bank_id' => '26',
                    'bank_branch_name' => 'SONADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140472622',
                        ),
                    'enabled' => true,
                ),
            993 =>
                array(
                    'id' => '4994',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140480672',
                        ),
                    'enabled' => true,
                ),
            994 =>
                array(
                    'id' => '4995',
                    'bank_id' => '26',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140500949',
                        ),
                    'enabled' => true,
                ),
            995 =>
                array(
                    'id' => '4996',
                    'bank_id' => '26',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140510739',
                        ),
                    'enabled' => true,
                ),
            996 =>
                array(
                    'id' => '4997',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MANDARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140510821',
                        ),
                    'enabled' => true,
                ),
            997 =>
                array(
                    'id' => '4998',
                    'bank_id' => '26',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140520466',
                        ),
                    'enabled' => true,
                ),
            998 =>
                array(
                    'id' => '4999',
                    'bank_id' => '26',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140540404',
                        ),
                    'enabled' => true,
                ),
            999 =>
                array(
                    'id' => '5000',
                    'bank_id' => '26',
                    'bank_branch_name' => 'JHITKA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '140560550',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
