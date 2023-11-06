<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch8Seeder extends Seeder
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
                'id' => '7001',
                'bank_id' => '35',
                'bank_branch_name' => 'BAHER CHAR',
                'bank_branch_data' => [
                    'routing_no' => '185780108',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '7002',
                'bank_id' => '35',
                'bank_branch_name' => 'DIBUAPUR',
                'bank_branch_data' => [
                    'routing_no' => '185780403',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '7003',
                'bank_id' => '35',
                'bank_branch_name' => 'GALACHIPA',
                'bank_branch_data' => [
                    'routing_no' => '185780490',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '7004',
                'bank_id' => '35',
                'bank_branch_name' => 'KALISURI BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '185780616',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '7005',
                'bank_id' => '35',
                'bank_branch_name' => 'KHEPUPARA',
                'bank_branch_data' => [
                    'routing_no' => '185780766',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '7006',
                'bank_id' => '35',
                'bank_branch_name' => 'NEWTOWN',
                'bank_branch_data' => [
                    'routing_no' => '185780979',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '7007',
                'bank_id' => '35',
                'bank_branch_name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '185781099',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '7008',
                'bank_id' => '35',
                'bank_branch_name' => 'PATUAKHALI S & T.U',
                'bank_branch_data' => [
                    'routing_no' => '185781123',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '7009',
                'bank_id' => '35',
                'bank_branch_name' => 'BHANDARIA',
                'bank_branch_data' => [
                    'routing_no' => '185790130',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '7010',
                'bank_id' => '35',
                'bank_branch_name' => 'HULARHAT',
                'bank_branch_data' => [
                    'routing_no' => '185790343',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '7011',
                'bank_id' => '35',
                'bank_branch_name' => 'INDERHAT',
                'bank_branch_data' => [
                    'routing_no' => '185790372',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '7012',
                'bank_id' => '35',
                'bank_branch_name' => 'KAWKHALI',
                'bank_branch_data' => [
                    'routing_no' => '185790435',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '7013',
                'bank_id' => '35',
                'bank_branch_name' => 'KOWRIKHARA',
                'bank_branch_data' => [
                    'routing_no' => '185790464',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '7014',
                'bank_id' => '35',
                'bank_branch_name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '185790527',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '7015',
                'bank_id' => '35',
                'bank_branch_name' => 'PIROJPUR',
                'bank_branch_data' => [
                    'routing_no' => '185790769',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '7016',
                'bank_id' => '35',
                'bank_branch_name' => 'SWARUPKATI',
                'bank_branch_data' => [
                    'routing_no' => '185790972',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '7017',
                'bank_id' => '35',
                'bank_branch_name' => 'ZIA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '185791063',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '7018',
                'bank_id' => '35',
                'bank_branch_name' => 'K.N. ISLAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '185810881',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '7019',
                'bank_id' => '35',
                'bank_branch_name' => 'KAKANHAT',
                'bank_branch_data' => [
                    'routing_no' => '185810944',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '7020',
                'bank_id' => '35',
                'bank_branch_name' => 'LAXMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '185811185',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '7021',
                'bank_id' => '35',
                'bank_branch_name' => 'RAJSHAHI CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '185811998',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '7022',
                'bank_id' => '35',
                'bank_branch_name' => 'RUET',
                'bank_branch_data' => [
                    'routing_no' => '185812171',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '7023',
                'bank_id' => '35',
                'bank_branch_name' => 'SHAHEB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185812263',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '7024',
                'bank_id' => '35',
                'bank_branch_name' => 'TANORE',
                'bank_branch_data' => [
                    'routing_no' => '185812384',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '7025',
                'bank_id' => '35',
                'bank_branch_name' => 'BANIBAHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185820192',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '7026',
                'bank_id' => '35',
                'bank_branch_name' => 'G.T.M.(GOALANDA)',
                'bank_branch_data' => [
                    'routing_no' => '185820255',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '7027',
                'bank_id' => '35',
                'bank_branch_name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '185820671',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '7028',
                'bank_id' => '35',
                'bank_branch_name' => 'POURASAVA MARKET',
                'bank_branch_data' => [
                    'routing_no' => '185820705',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '7029',
                'bank_id' => '35',
                'bank_branch_name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '185820734',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '7030',
                'bank_id' => '35',
                'bank_branch_name' => 'BANARUPA',
                'bank_branch_data' => [
                    'routing_no' => '185840077',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '7031',
                'bank_id' => '35',
                'bank_branch_name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '185840527',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '7032',
                'bank_id' => '35',
                'bank_branch_name' => 'TABALCHARI',
                'bank_branch_data' => [
                    'routing_no' => '185840556',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '7033',
                'bank_id' => '35',
                'bank_branch_name' => 'ANNADA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '185850070',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '7034',
                'bank_id' => '35',
                'bank_branch_name' => 'BARAIBARI',
                'bank_branch_data' => [
                    'routing_no' => '185850225',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '7035',
                'bank_id' => '35',
                'bank_branch_name' => 'BHENDABARI',
                'bank_branch_data' => [
                    'routing_no' => '185850283',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '7036',
                'bank_id' => '35',
                'bank_branch_name' => 'CENTRAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '185850346',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '7037',
                'bank_id' => '35',
                'bank_branch_name' => 'G.L.RAY ROAD',
                'bank_branch_data' => [
                    'routing_no' => '185850588',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '7038',
                'bank_id' => '35',
                'bank_branch_name' => 'HARAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '185850670',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '7039',
                'bank_id' => '35',
                'bank_branch_name' => 'LADIES',
                'bank_branch_data' => [
                    'routing_no' => '185850854',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '7040',
                'bank_id' => '35',
                'bank_branch_name' => 'MAHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '185850975',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '7041',
                'bank_id' => '35',
                'bank_branch_name' => 'R.K. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '185851424',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '7042',
                'bank_id' => '35',
                'bank_branch_name' => 'RLY. CROSSING',
                'bank_branch_data' => [
                    'routing_no' => '185851608',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '7043',
                'bank_id' => '35',
                'bank_branch_name' => 'TARAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '185851932',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '7044',
                'bank_id' => '35',
                'bank_branch_name' => 'TETULTALA',
                'bank_branch_data' => [
                    'routing_no' => '185851961',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '7045',
                'bank_id' => '35',
                'bank_branch_name' => 'GOSHAIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '185860349',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '7046',
                'bank_id' => '35',
                'bank_branch_name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'routing_no' => '185860673',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '7047',
                'bank_id' => '35',
                'bank_branch_name' => 'BARADAL',
                'bank_branch_data' => [
                    'routing_no' => '185870221',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '7048',
                'bank_id' => '35',
                'bank_branch_name' => 'JHAUDANGA',
                'bank_branch_data' => [
                    'routing_no' => '185870555',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '7049',
                'bank_id' => '35',
                'bank_branch_name' => 'KALAROA',
                'bank_branch_data' => [
                    'routing_no' => '185870584',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '7050',
                'bank_id' => '35',
                'bank_branch_name' => 'NALTA MOBARAKNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '185870913',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '7051',
                'bank_id' => '35',
                'bank_branch_name' => 'NOWABENKI',
                'bank_branch_data' => [
                    'routing_no' => '185870942',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '7052',
                'bank_id' => '35',
                'bank_branch_name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '185871091',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '7053',
                'bank_id' => '35',
                'bank_branch_name' => 'BAGABATIHAT',
                'bank_branch_data' => [
                    'routing_no' => '185880079',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '7054',
                'bank_id' => '35',
                'bank_branch_name' => 'BELKUCHI',
                'bank_branch_data' => [
                    'routing_no' => '185880224',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '7055',
                'bank_id' => '35',
                'bank_branch_name' => 'BETIL',
                'bank_branch_data' => [
                    'routing_no' => '185880282',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '7056',
                'bank_id' => '35',
                'bank_branch_name' => 'BOALIA',
                'bank_branch_data' => [
                    'routing_no' => '185880345',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '7057',
                'bank_id' => '35',
                'bank_branch_name' => 'DARIAPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185880587',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '7058',
                'bank_id' => '35',
                'bank_branch_name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '185881878',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '7059',
                'bank_id' => '35',
                'bank_branch_name' => 'SHIAL KOLE',
                'bank_branch_data' => [
                    'routing_no' => '185881931',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '7060',
                'bank_id' => '35',
                'bank_branch_name' => 'SHERPUR TOWN',
                'bank_branch_data' => [
                    'routing_no' => '185890580',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '7061',
                'bank_id' => '35',
                'bank_branch_name' => 'BHOBER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185900162',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '7062',
                'bank_id' => '35',
                'bank_branch_name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '185900225',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '7063',
                'bank_id' => '35',
                'bank_branch_name' => 'DOLAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185900317',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '7064',
                'bank_id' => '35',
                'bank_branch_name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '185900496',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '7065',
                'bank_id' => '35',
                'bank_branch_name' => 'KANBARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185900612',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '7066',
                'bank_id' => '35',
                'bank_branch_name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '185901129',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '7067',
                'bank_id' => '35',
                'bank_branch_name' => 'SYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '185901187',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '7068',
                'bank_id' => '35',
                'bank_branch_name' => 'KALARAI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185910099',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '7069',
                'bank_id' => '35',
                'bank_branch_name' => 'BABUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185910110',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '7070',
                'bank_id' => '35',
                'bank_branch_name' => 'RAZAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '185910123',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '7071',
                'bank_id' => '35',
                'bank_branch_name' => 'CHARKHAI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185910152',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '7072',
                'bank_id' => '35',
                'bank_branch_name' => 'BANDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185910194',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '7073',
                'bank_id' => '35',
                'bank_branch_name' => 'DATTARAIL',
                'bank_branch_data' => [
                    'routing_no' => '185911180',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '7074',
                'bank_id' => '35',
                'bank_branch_name' => 'DAYAMIR',
                'bank_branch_data' => [
                    'routing_no' => '185911214',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '7075',
                'bank_id' => '35',
                'bank_branch_name' => 'HABRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185911698',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '7076',
                'bank_id' => '35',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '185911780',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '7077',
                'bank_id' => '35',
                'bank_branch_name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '185911993',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '7078',
                'bank_id' => '35',
                'bank_branch_name' => 'KANAIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '185912084',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '7079',
                'bank_id' => '35',
                'bank_branch_name' => 'KAZIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185912147',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '7080',
                'bank_id' => '35',
                'bank_branch_name' => 'KHADIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '185912239',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '7081',
                'bank_id' => '35',
                'bank_branch_name' => 'KHALO MUKH',
                'bank_branch_data' => [
                    'routing_no' => '185912297',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '7082',
                'bank_id' => '35',
                'bank_branch_name' => 'KURAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185912389',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '7083',
                'bank_id' => '35',
                'bank_branch_name' => 'KURUA',
                'bank_branch_data' => [
                    'routing_no' => '185912413',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '7084',
                'bank_id' => '35',
                'bank_branch_name' => 'LADIES',
                'bank_branch_data' => [
                    'routing_no' => '185912442',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '7085',
                'bank_id' => '35',
                'bank_branch_name' => 'MADAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185912534',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '7086',
                'bank_id' => '35',
                'bank_branch_name' => 'MADINA MARKET',
                'bank_branch_data' => [
                    'routing_no' => '185912547',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '7087',
                'bank_id' => '35',
                'bank_branch_name' => 'MIRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185912592',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '7088',
                'bank_id' => '35',
                'bank_branch_name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '185912839',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '7089',
                'bank_id' => '35',
                'bank_branch_name' => 'RAKHAL GONJ',
                'bank_branch_data' => [
                    'routing_no' => '185912950',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '7090',
                'bank_id' => '35',
                'bank_branch_name' => 'REKABIBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185913041',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '7091',
                'bank_id' => '35',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '185913467',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '7092',
                'bank_id' => '35',
                'bank_branch_name' => 'SULTANPUR',
                'bank_branch_data' => [
                    'routing_no' => '185913520',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '7093',
                'bank_id' => '35',
                'bank_branch_name' => 'SYLHET AGRICULTURE UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '185913575',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '7094',
                'bank_id' => '35',
                'bank_branch_name' => 'TALTALA',
                'bank_branch_data' => [
                    'routing_no' => '185913854',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '7095',
                'bank_id' => '35',
                'bank_branch_name' => 'VARTHA KHOLA',
                'bank_branch_data' => [
                    'routing_no' => '185914066',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '7096',
                'bank_id' => '35',
                'bank_branch_name' => 'BALLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185930316',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '7097',
                'bank_id' => '35',
                'bank_branch_name' => 'BASAIL',
                'bank_branch_data' => [
                    'routing_no' => '185930374',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '7098',
                'bank_id' => '35',
                'bank_branch_name' => 'ELASHIN',
                'bank_branch_data' => [
                    'routing_no' => '185930790',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '7099',
                'bank_id' => '35',
                'bank_branch_name' => 'ELENGA BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '185930853',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '7100',
                'bank_id' => '35',
                'bank_branch_name' => 'GHATAIL',
                'bank_branch_data' => [
                    'routing_no' => '185930916',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '7101',
                'bank_id' => '35',
                'bank_branch_name' => 'KALIHATI',
                'bank_branch_data' => [
                    'routing_no' => '185931302',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '7102',
                'bank_id' => '35',
                'bank_branch_name' => 'NATIAPARA',
                'bank_branch_data' => [
                    'routing_no' => '185931786',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '7103',
                'bank_id' => '35',
                'bank_branch_name' => 'PAKULLA',
                'bank_branch_data' => [
                    'routing_no' => '185931849',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '7104',
                'bank_id' => '35',
                'bank_branch_name' => 'PATHRAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185931960',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '7105',
                'bank_id' => '35',
                'bank_branch_name' => 'RATANGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '185932051',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '7106',
                'bank_id' => '35',
                'bank_branch_name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '185932206',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '7107',
                'bank_id' => '35',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '185932293',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '7108',
                'bank_id' => '35',
                'bank_branch_name' => 'BALIADANGI',
                'bank_branch_data' => [
                    'routing_no' => '185940106',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '7109',
                'bank_id' => '35',
                'bank_branch_name' => 'BHULLY',
                'bank_branch_data' => [
                    'routing_no' => '185940227',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '7110',
                'bank_id' => '35',
                'bank_branch_name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '185940977',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '7111',
                'bank_id' => '36',
                'bank_branch_name' => 'AMTALI',
                'bank_branch_data' => [
                    'routing_no' => '190040046',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '7112',
                'bank_id' => '36',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '190060284',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '7113',
                'bank_id' => '36',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '190100373',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '7114',
                'bank_id' => '36',
                'bank_branch_name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190120108',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '7115',
                'bank_id' => '36',
                'bank_branch_name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '190120432',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '7116',
                'bank_id' => '36',
                'bank_branch_name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190130880',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '7117',
                'bank_id' => '36',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '190150136',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '7118',
                'bank_id' => '36',
                'bank_branch_name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '190150460',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '7119',
                'bank_id' => '36',
                'bank_branch_name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'routing_no' => '190150949',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '7120',
                'bank_id' => '36',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190151935',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '7121',
                'bank_id' => '36',
                'bank_branch_name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '190153641',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '7122',
                'bank_id' => '36',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190154279',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '7123',
                'bank_id' => '36',
                'bank_branch_name' => 'MADHUNA GHAT',
                'bank_branch_data' => [
                    'routing_no' => '190154758',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '7124',
                'bank_id' => '36',
                'bank_branch_name' => 'MURADPUR',
                'bank_branch_data' => [
                    'routing_no' => '190155328',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '7125',
                'bank_id' => '36',
                'bank_branch_name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '190155599',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '7126',
                'bank_id' => '36',
                'bank_branch_name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '190155928',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '7127',
                'bank_id' => '36',
                'bank_branch_name' => 'WASA MOOR',
                'bank_branch_data' => [
                    'routing_no' => '190157768',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '7128',
                'bank_id' => '36',
                'bank_branch_name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '190180193',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '7129',
                'bank_id' => '36',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '190191153',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '7130',
                'bank_id' => '36',
                'bank_branch_name' => 'GUNABATI',
                'bank_branch_data' => [
                    'routing_no' => '190192178',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '7131',
                'bank_id' => '36',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190220253',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '7132',
                'bank_id' => '36',
                'bank_branch_name' => 'UTTARA LADIES',
                'bank_branch_data' => [
                    'routing_no' => '190260068',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '7133',
                'bank_id' => '36',
                'bank_branch_name' => 'ASHKONA',
                'bank_branch_data' => [
                    'routing_no' => '190260200',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '7134',
                'bank_id' => '36',
                'bank_branch_name' => 'BAIPAIL(DHAKA EPZ)',
                'bank_branch_data' => [
                    'routing_no' => '190260376',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '7135',
                'bank_id' => '36',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '190260439',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '7136',
                'bank_id' => '36',
                'bank_branch_name' => 'BHATARA',
                'bank_branch_data' => [
                    'routing_no' => '190260718',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '7137',
                'bank_id' => '36',
                'bank_branch_name' => 'COLLEGE GATE',
                'bank_branch_data' => [
                    'routing_no' => '190260826',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '7138',
                'bank_id' => '36',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '190261188',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '7139',
                'bank_id' => '36',
                'bank_branch_name' => 'ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '190261333',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '7140',
                'bank_id' => '36',
                'bank_branch_name' => 'ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '190261391',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '7141',
                'bank_id' => '36',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '190261720',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '7142',
                'bank_id' => '36',
                'bank_branch_name' => 'GULSHAN SOUTH AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '190261917',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '7143',
                'bank_id' => '36',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190262532',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '7144',
                'bank_id' => '36',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '190262987',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '7145',
                'bank_id' => '36',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '190263199',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '7146',
                'bank_id' => '36',
                'bank_branch_name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '190263610',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '7147',
                'bank_id' => '36',
                'bank_branch_name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '190264035',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '7148',
                'bank_id' => '36',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '190264093',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '7149',
                'bank_id' => '36',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '190264635',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '7150',
                'bank_id' => '36',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '190270003',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '7151',
                'bank_id' => '36',
                'bank_branch_name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '190270645',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '7152',
                'bank_id' => '36',
                'bank_branch_name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '190270887',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '7153',
                'bank_id' => '36',
                'bank_branch_name' => 'BARUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '190270953',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '7154',
                'bank_id' => '36',
                'bank_branch_name' => 'BIJOY NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '190271099',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '7155',
                'bank_id' => '36',
                'bank_branch_name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '190271428',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '7156',
                'bank_id' => '36',
                'bank_branch_name' => 'DHAKA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '190271781',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '7157',
                'bank_id' => '36',
                'bank_branch_name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '190272322',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '7158',
                'bank_id' => '36',
                'bank_branch_name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '190273284',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '7159',
                'bank_id' => '36',
                'bank_branch_name' => 'JURAIN',
                'bank_branch_data' => [
                    'routing_no' => '190273318',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '7160',
                'bank_id' => '36',
                'bank_branch_name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '190273376',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '7161',
                'bank_id' => '36',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190273642',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '7162',
                'bank_id' => '36',
                'bank_branch_name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '190273947',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '7163',
                'bank_id' => '36',
                'bank_branch_name' => 'MITFORD',
                'bank_branch_data' => [
                    'routing_no' => '190274067',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '7164',
                'bank_id' => '36',
                'bank_branch_name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '190274241',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '7165',
                'bank_id' => '36',
                'bank_branch_name' => 'NABABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '190274559',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '7166',
                'bank_id' => '36',
                'bank_branch_name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190274696',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '7167',
                'bank_id' => '36',
                'bank_branch_name' => 'SARULIA',
                'bank_branch_data' => [
                    'routing_no' => '190276049',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '7168',
                'bank_id' => '36',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '190280677',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '7169',
                'bank_id' => '36',
                'bank_branch_name' => 'CHAR BHADRASAN',
                'bank_branch_data' => [
                    'routing_no' => '190290438',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '7170',
                'bank_id' => '36',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '190290520',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '7171',
                'bank_id' => '36',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '190300528',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '7172',
                'bank_id' => '36',
                'bank_branch_name' => 'JOYDEBPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '190330769',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '7173',
                'bank_id' => '36',
                'bank_branch_name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '190331005',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '7174',
                'bank_id' => '36',
                'bank_branch_name' => 'SHAFIPUR',
                'bank_branch_data' => [
                    'routing_no' => '190331421',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '7175',
                'bank_id' => '36',
                'bank_branch_name' => 'TONGI SME',
                'bank_branch_data' => [
                    'routing_no' => '190331650',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '7176',
                'bank_id' => '36',
                'bank_branch_name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '190390859',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '7177',
                'bank_id' => '36',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '190410942',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '7178',
                'bank_id' => '36',
                'bank_branch_name' => 'HATGOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '190440554',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '7179',
                'bank_id' => '36',
                'bank_branch_name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190440796',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '7180',
                'bank_id' => '36',
                'bank_branch_name' => 'CHUK NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '190470553',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '7181',
                'bank_id' => '36',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '190471549',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '7182',
                'bank_id' => '36',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '190500944',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '7183',
                'bank_id' => '36',
                'bank_branch_name' => 'DATTA PARA',
                'bank_branch_data' => [
                    'routing_no' => '190510497',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '7184',
                'bank_id' => '36',
                'bank_branch_name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '190510734',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '7185',
                'bank_id' => '36',
                'bank_branch_name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190511038',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '7186',
                'bank_id' => '36',
                'bank_branch_name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190560618',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '7187',
                'bank_id' => '36',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190581189',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '7188',
                'bank_id' => '36',
                'bank_branch_name' => 'DIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '190590433',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '7189',
                'bank_id' => '36',
                'bank_branch_name' => 'SHIKARPUR NIMTOLA',
                'bank_branch_data' => [
                    'routing_no' => '190591324',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '7190',
                'bank_id' => '36',
                'bank_branch_name' => 'BHALUKA SME',
                'bank_branch_data' => [
                    'routing_no' => '190610326',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '7191',
                'bank_id' => '36',
                'bank_branch_name' => 'HALUAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '190611154',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '7192',
                'bank_id' => '36',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '190611754',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '7193',
                'bank_id' => '36',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '190641182',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '7194',
                'bank_id' => '36',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190671181',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '7195',
                'bank_id' => '36',
                'bank_branch_name' => 'CHINISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '190680080',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '7196',
                'bank_id' => '36',
                'bank_branch_name' => 'CHALAKCHAR',
                'bank_branch_data' => [
                    'routing_no' => '190680314',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '7197',
                'bank_id' => '36',
                'bank_branch_name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '190680677',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '7198',
                'bank_id' => '36',
                'bank_branch_name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190700252',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '7199',
                'bank_id' => '36',
                'bank_branch_name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '190730798',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '7200',
                'bank_id' => '36',
                'bank_branch_name' => 'CHOWMUHANI',
                'bank_branch_data' => [
                    'routing_no' => '190750349',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '7201',
                'bank_id' => '36',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '190761783',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '7202',
                'bank_id' => '36',
                'bank_branch_name' => 'KHEPUPARA',
                'bank_branch_data' => [
                    'routing_no' => '190780764',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '7203',
                'bank_id' => '36',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '190811938',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '7204',
                'bank_id' => '36',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '190851451',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '7205',
                'bank_id' => '36',
                'bank_branch_name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '190881876',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '7206',
                'bank_id' => '36',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190910318',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '7207',
                'bank_id' => '36',
                'bank_branch_name' => 'DARGAH GATE',
                'bank_branch_data' => [
                    'routing_no' => '190911096',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '7208',
                'bank_id' => '36',
                'bank_branch_name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190911546',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '7209',
                'bank_id' => '36',
                'bank_branch_name' => 'SUBID BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '190913494',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '7210',
                'bank_id' => '36',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '190913557',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '7211',
                'bank_id' => '36',
                'bank_branch_name' => 'BARACHOWNA',
                'bank_branch_data' => [
                    'routing_no' => '190930356',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '7212',
                'bank_id' => '36',
                'bank_branch_name' => 'KARATIA',
                'bank_branch_data' => [
                    'routing_no' => '190931368',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '7213',
                'bank_id' => '36',
                'bank_branch_name' => 'NAGARPUR',
                'bank_branch_data' => [
                    'routing_no' => '190931692',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '7214',
                'bank_id' => '36',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '190932291',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '7215',
                'bank_id' => '36',
                'bank_branch_name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '190940975',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '7216',
                'bank_id' => '37',
                'bank_branch_name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '195010071',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '7217',
                'bank_id' => '37',
                'bank_branch_name' => 'MOLLAHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '195010921',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '7218',
                'bank_id' => '37',
                'bank_branch_name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '195060289',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '7219',
                'bank_id' => '37',
                'bank_branch_name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '195090109',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '7220',
                'bank_id' => '37',
                'bank_branch_name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '195090220',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '7221',
                'bank_id' => '37',
                'bank_branch_name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '195100378',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '7222',
                'bank_id' => '37',
                'bank_branch_name' => 'DUPCHACHIA',
                'bank_branch_data' => [
                    'routing_no' => '195100910',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '7223',
                'bank_id' => '37',
                'bank_branch_name' => 'AKHAURA',
                'bank_branch_data' => [
                    'routing_no' => '195120040',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '7224',
                'bank_id' => '37',
                'bank_branch_name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '195130319',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '7225',
                'bank_id' => '37',
                'bank_branch_name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195130885',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '7226',
                'bank_id' => '37',
                'bank_branch_name' => 'KACHUA SME',
                'bank_branch_data' => [
                    'routing_no' => '195130919',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '7227',
                'bank_id' => '37',
                'bank_branch_name' => 'NAYERGAON BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195131547',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '7228',
                'bank_id' => '37',
                'bank_branch_name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '195150131',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '7229',
                'bank_id' => '37',
                'bank_branch_name' => 'ALANKAR MOR',
                'bank_branch_data' => [
                    'routing_no' => '195150144',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '7230',
                'bank_id' => '37',
                'bank_branch_name' => 'BARIARHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '195150207',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '7231',
                'bank_id' => '37',
                'bank_branch_name' => 'ATURAR DEPO',
                'bank_branch_data' => [
                    'routing_no' => '195150702',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '7232',
                'bank_id' => '37',
                'bank_branch_name' => 'AZADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195150731',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '7233',
                'bank_id' => '37',
                'bank_branch_name' => 'BIBIRHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '195151251',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '7234',
                'bank_id' => '37',
                'bank_branch_name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '195151301',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '7235',
                'bank_id' => '37',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195151930',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '7236',
                'bank_id' => '37',
                'bank_branch_name' => 'DEWAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '195152447',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '7237',
                'bank_id' => '37',
                'bank_branch_name' => 'GEC MOUR',
                'bank_branch_data' => [
                    'routing_no' => '195152968',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '7238',
                'bank_id' => '37',
                'bank_branch_name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '195153167',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '7239',
                'bank_id' => '37',
                'bank_branch_name' => 'HATHAZARI SME',
                'bank_branch_data' => [
                    'routing_no' => '195153233',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '7240',
                'bank_id' => '37',
                'bank_branch_name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '195153646',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '7241',
                'bank_id' => '37',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195154274',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '7242',
                'bank_id' => '37',
                'bank_branch_name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '195154661',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '7243',
                'bank_id' => '37',
                'bank_branch_name' => 'NANUPUR',
                'bank_branch_data' => [
                    'routing_no' => '195155444',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '7244',
                'bank_id' => '37',
                'bank_branch_name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '195156135',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '7245',
                'bank_id' => '37',
                'bank_branch_name' => 'ROAZARHAT',
                'bank_branch_data' => [
                    'routing_no' => '195156551',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '7246',
                'bank_id' => '37',
                'bank_branch_name' => 'SHAH MOHSIN AWLIA',
                'bank_branch_data' => [
                    'routing_no' => '195157163',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '7247',
                'bank_id' => '37',
                'bank_branch_name' => 'COLLEGE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '195190146',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '7248',
                'bank_id' => '37',
                'bank_branch_name' => 'LAKSAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '195190359',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '7249',
                'bank_id' => '37',
                'bank_branch_name' => 'BURICHANG',
                'bank_branch_data' => [
                    'routing_no' => '195190825',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '7250',
                'bank_id' => '37',
                'bank_branch_name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '195191158',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '7251',
                'bank_id' => '37',
                'bank_branch_name' => 'ELIOTGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195191903',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '7252',
                'bank_id' => '37',
                'bank_branch_name' => 'HOMNA',
                'bank_branch_data' => [
                    'routing_no' => '195192236',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '7253',
                'bank_id' => '37',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195220258',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '7254',
                'bank_id' => '37',
                'bank_branch_name' => 'SATARKUL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '195260142',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '7255',
                'bank_id' => '37',
                'bank_branch_name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '195260221',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '7256',
                'bank_id' => '37',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '195260434',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '7257',
                'bank_id' => '37',
                'bank_branch_name' => 'GAUSIA',
                'bank_branch_data' => [
                    'routing_no' => '195260513',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '7258',
                'bank_id' => '37',
                'bank_branch_name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '195260555',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '7259',
                'bank_id' => '37',
                'bank_branch_name' => 'BHATARA',
                'bank_branch_data' => [
                    'routing_no' => '195260713',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '7260',
                'bank_id' => '37',
                'bank_branch_name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '195260726',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '7261',
                'bank_id' => '37',
                'bank_branch_name' => 'DHAMRAI SME',
                'bank_branch_data' => [
                    'routing_no' => '195261167',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '7262',
                'bank_id' => '37',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '195261183',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '7263',
                'bank_id' => '37',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '195261725',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '7264',
                'bank_id' => '37',
                'bank_branch_name' => 'HORIRAMPUR UNION',
                'bank_branch_data' => [
                    'routing_no' => '195262061',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '7265',
                'bank_id' => '37',
                'bank_branch_name' => 'BEGUM ROKEYA SAWRANI',
                'bank_branch_data' => [
                    'routing_no' => '195262140',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '7266',
                'bank_id' => '37',
                'bank_branch_name' => 'KADERIA TAIYEBIA',
                'bank_branch_data' => [
                    'routing_no' => '195262379',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '7267',
                'bank_id' => '37',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195262537',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '7268',
                'bank_id' => '37',
                'bank_branch_name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '195262982',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '7269',
                'bank_id' => '37',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '195263194',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '7270',
                'bank_id' => '37',
                'bank_branch_name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '195263615',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '7271',
                'bank_id' => '37',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '195264098',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '7272',
                'bank_id' => '37',
                'bank_branch_name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '195264306',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '7273',
                'bank_id' => '37',
                'bank_branch_name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '195264630',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '7274',
                'bank_id' => '37',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '195270008',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '7275',
                'bank_id' => '37',
                'bank_branch_name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195270558',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '7276',
                'bank_id' => '37',
                'bank_branch_name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '195270882',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '7277',
                'bank_id' => '37',
                'bank_branch_name' => 'CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '195271399',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '7278',
                'bank_id' => '37',
                'bank_branch_name' => 'DEMRA',
                'bank_branch_data' => [
                    'routing_no' => '195271465',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '7279',
                'bank_id' => '37',
                'bank_branch_name' => 'GALIMPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '195272019',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '7280',
                'bank_id' => '37',
                'bank_branch_name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '195272327',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '7281',
                'bank_id' => '37',
                'bank_branch_name' => 'HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '195272569',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '7282',
                'bank_id' => '37',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '195272985',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '7283',
                'bank_id' => '37',
                'bank_branch_name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '195273371',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '7284',
                'bank_id' => '37',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195273647',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '7285',
                'bank_id' => '37',
                'bank_branch_name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'routing_no' => '195274367',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '7286',
                'bank_id' => '37',
                'bank_branch_name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195274420',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '7287',
                'bank_id' => '37',
                'bank_branch_name' => 'MUKSUDPUR',
                'bank_branch_data' => [
                    'routing_no' => '195274488',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '7288',
                'bank_id' => '37',
                'bank_branch_name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '195274754',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '7289',
                'bank_id' => '37',
                'bank_branch_name' => 'NEW ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '195275029',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '7290',
                'bank_id' => '37',
                'bank_branch_name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '195275353',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '7291',
                'bank_id' => '37',
                'bank_branch_name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '195275740',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '7292',
                'bank_id' => '37',
                'bank_branch_name' => 'RASULPUR',
                'bank_branch_data' => [
                    'routing_no' => '195275766',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '7293',
                'bank_id' => '37',
                'bank_branch_name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '195280672',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '7294',
                'bank_id' => '37',
                'bank_branch_name' => 'RANIRBANDAR',
                'bank_branch_data' => [
                    'routing_no' => '195282083',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '7295',
                'bank_id' => '37',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '195300523',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '7296',
                'bank_id' => '37',
                'bank_branch_name' => 'GOBINDAGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '195320590',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '7297',
                'bank_id' => '37',
                'bank_branch_name' => 'JOYDEBPUR CHOWRASTA',
                'bank_branch_data' => [
                    'routing_no' => '195330764',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '7298',
                'bank_id' => '37',
                'bank_branch_name' => 'MAWNA',
                'bank_branch_data' => [
                    'routing_no' => '195331000',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '7299',
                'bank_id' => '37',
                'bank_branch_name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '195331639',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '7300',
                'bank_id' => '37',
                'bank_branch_name' => 'BANGABANDHU SAMADHI SHOUDHA',
                'bank_branch_data' => [
                    'routing_no' => '195350128',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '7301',
                'bank_id' => '37',
                'bank_branch_name' => 'INDUSTRIAL PARK',
                'bank_branch_data' => [
                    'routing_no' => '195360068',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '7302',
                'bank_id' => '37',
                'bank_branch_name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '195390854',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '7303',
                'bank_id' => '37',
                'bank_branch_name' => 'KOYRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195391066',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '7304',
                'bank_id' => '37',
                'bank_branch_name' => 'CHOWGACHA',
                'bank_branch_data' => [
                    'routing_no' => '195410550',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '7305',
                'bank_id' => '37',
                'bank_branch_name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '195410947',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '7306',
                'bank_id' => '37',
                'bank_branch_name' => 'MONIRAMPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '195411520',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '7307',
                'bank_id' => '37',
                'bank_branch_name' => 'NAVARAN',
                'bank_branch_data' => [
                    'routing_no' => '195411609',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '7308',
                'bank_id' => '37',
                'bank_branch_name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '195411638',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '7309',
                'bank_id' => '37',
                'bank_branch_name' => 'DUMURIA',
                'bank_branch_data' => [
                    'routing_no' => '195470790',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '7310',
                'bank_id' => '37',
                'bank_branch_name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '195471544',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '7311',
                'bank_id' => '37',
                'bank_branch_name' => 'PAIKGACHA',
                'bank_branch_data' => [
                    'routing_no' => '195472080',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '7312',
                'bank_id' => '37',
                'bank_branch_name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195480227',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '7313',
                'bank_id' => '37',
                'bank_branch_name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195480672',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '7314',
                'bank_id' => '37',
                'bank_branch_name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '195500949',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '7315',
                'bank_id' => '37',
                'bank_branch_name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '195510739',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '7316',
                'bank_id' => '37',
                'bank_branch_name' => 'PODDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195510942',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '7317',
                'bank_id' => '37',
                'bank_branch_name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '195580101',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '7318',
                'bank_id' => '37',
                'bank_branch_name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195581184',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '7319',
                'bank_id' => '37',
                'bank_branch_name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '195591424',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '7320',
                'bank_id' => '37',
                'bank_branch_name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '195611759',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '7321',
                'bank_id' => '37',
                'bank_branch_name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '195641187',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '7322',
                'bank_id' => '37',
                'bank_branch_name' => 'BHULTA SME',
                'bank_branch_data' => [
                    'routing_no' => '195670237',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '7323',
                'bank_id' => '37',
                'bank_branch_name' => 'FATULLA',
                'bank_branch_data' => [
                    'routing_no' => '195670529',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '7324',
                'bank_id' => '37',
                'bank_branch_name' => 'GOPALDI',
                'bank_branch_data' => [
                    'routing_no' => '195670608',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '7325',
                'bank_id' => '37',
                'bank_branch_name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195671186',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '7326',
                'bank_id' => '37',
                'bank_branch_name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '195671694',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '7327',
                'bank_id' => '37',
                'bank_branch_name' => 'PANCHDOWNA',
                'bank_branch_data' => [
                    'routing_no' => '195680148',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '7328',
                'bank_id' => '37',
                'bank_branch_name' => 'MADHABDI SME',
                'bank_branch_data' => [
                    'routing_no' => '195680685',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '7329',
                'bank_id' => '37',
                'bank_branch_name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '195680856',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '7330',
                'bank_id' => '37',
                'bank_branch_name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '195720732',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '7331',
                'bank_id' => '37',
                'bank_branch_name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '195730793',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '7332',
                'bank_id' => '37',
                'bank_branch_name' => 'MAIJDEE',
                'bank_branch_data' => [
                    'routing_no' => '195750065',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '7333',
                'bank_id' => '37',
                'bank_branch_name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '195750678',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '7334',
                'bank_id' => '37',
                'bank_branch_name' => 'JAMIDERHAT',
                'bank_branch_data' => [
                    'routing_no' => '195751156',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '7335',
                'bank_id' => '37',
                'bank_branch_name' => 'KANKIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '195751301',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '7336',
                'bank_id' => '37',
                'bank_branch_name' => 'SONAPUR',
                'bank_branch_data' => [
                    'routing_no' => '195752263',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '7337',
                'bank_id' => '37',
                'bank_branch_name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '195761788',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '7338',
                'bank_id' => '37',
                'bank_branch_name' => 'SAFABANDAR',
                'bank_branch_data' => [
                    'routing_no' => '195790054',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '7339',
                'bank_id' => '37',
                'bank_branch_name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '195811933',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '7340',
                'bank_id' => '37',
                'bank_branch_name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '195851456',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '7341',
                'bank_id' => '37',
                'bank_branch_name' => 'ANGARIA',
                'bank_branch_data' => [
                    'routing_no' => '195860063',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '7342',
                'bank_id' => '37',
                'bank_branch_name' => 'PATKELGHATA',
                'bank_branch_data' => [
                    'routing_no' => '195871036',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '7343',
                'bank_id' => '37',
                'bank_branch_name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '195871094',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '7344',
                'bank_id' => '37',
                'bank_branch_name' => 'CHANDAIKONA',
                'bank_branch_data' => [
                    'routing_no' => '195880430',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '7345',
                'bank_id' => '37',
                'bank_branch_name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195881871',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '7346',
                'bank_id' => '37',
                'bank_branch_name' => 'SHAJADPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '195882504',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '7347',
                'bank_id' => '37',
                'bank_branch_name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '195910313',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '7348',
                'bank_id' => '37',
                'bank_branch_name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '195911367',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '7349',
                'bank_id' => '37',
                'bank_branch_name' => 'SOUTH SURMA',
                'bank_branch_data' => [
                    'routing_no' => '195913444',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '7350',
                'bank_id' => '37',
                'bank_branch_name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '195913552',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '7351',
                'bank_id' => '37',
                'bank_branch_name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '195932296',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '7352',
                'bank_id' => '38',
                'bank_branch_name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200010074',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '7353',
                'bank_id' => '38',
                'bank_branch_name' => 'CHITALMARI',
                'bank_branch_data' => [
                    'routing_no' => '200010229',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '7354',
                'bank_id' => '38',
                'bank_branch_name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200010290',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '7355',
                'bank_id' => '38',
                'bank_branch_name' => 'FAKIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200010461',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '7356',
                'bank_id' => '38',
                'bank_branch_name' => 'GILATALA',
                'bank_branch_data' => [
                    'routing_no' => '200010582',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '7357',
                'bank_id' => '38',
                'bank_branch_name' => 'GOURAMBA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200010645',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '7358',
                'bank_id' => '38',
                'bank_branch_name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '200010737',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '7359',
                'bank_id' => '38',
                'bank_branch_name' => 'BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200010858',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '7360',
                'bank_id' => '38',
                'bank_branch_name' => 'MOLLAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200010911',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '7361',
                'bank_id' => '38',
                'bank_branch_name' => 'MONGLA',
                'bank_branch_data' => [
                    'routing_no' => '200010940',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '7362',
                'bank_id' => '38',
                'bank_branch_name' => 'MONGLA PORT',
                'bank_branch_data' => [
                    'routing_no' => '200010979',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '7363',
                'bank_id' => '38',
                'bank_branch_name' => 'MORELGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200011031',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '7364',
                'bank_id' => '38',
                'bank_branch_name' => 'RAMPAL',
                'bank_branch_data' => [
                    'routing_no' => '200011215',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '7365',
                'bank_id' => '38',
                'bank_branch_name' => 'RAYENDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200011244',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '7366',
                'bank_id' => '38',
                'bank_branch_name' => 'ALIKADAM',
                'bank_branch_data' => [
                    'routing_no' => '200030041',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '7367',
                'bank_id' => '38',
                'bank_branch_name' => 'BANDARBAN',
                'bank_branch_data' => [
                    'routing_no' => '200030133',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '7368',
                'bank_id' => '38',
                'bank_branch_name' => 'LAMA',
                'bank_branch_data' => [
                    'routing_no' => '200030191',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '7369',
                'bank_id' => '38',
                'bank_branch_name' => 'NAIKHANGCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200030225',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '7370',
                'bank_id' => '38',
                'bank_branch_name' => 'ROWANGCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200030254',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '7371',
                'bank_id' => '38',
                'bank_branch_name' => 'RUMA',
                'bank_branch_data' => [
                    'routing_no' => '200030283',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '7372',
                'bank_id' => '38',
                'bank_branch_name' => 'THANCHI',
                'bank_branch_data' => [
                    'routing_no' => '200030317',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '7373',
                'bank_id' => '38',
                'bank_branch_name' => 'AMTALI',
                'bank_branch_data' => [
                    'routing_no' => '200040044',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '7374',
                'bank_id' => '38',
                'bank_branch_name' => 'BAMNA',
                'bank_branch_data' => [
                    'routing_no' => '200040107',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '7375',
                'bank_id' => '38',
                'bank_branch_name' => 'BARGUNA COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200040165',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '7376',
                'bank_id' => '38',
                'bank_branch_name' => 'BETAGI',
                'bank_branch_data' => [
                    'routing_no' => '200040228',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '7377',
                'bank_id' => '38',
                'bank_branch_name' => 'PATHARGHATA',
                'bank_branch_data' => [
                    'routing_no' => '200040673',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '7378',
                'bank_id' => '38',
                'bank_branch_name' => 'AGOILJHARA',
                'bank_branch_data' => [
                    'routing_no' => '200060079',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '7379',
                'bank_id' => '38',
                'bank_branch_name' => 'ARATDAR PATTRY',
                'bank_branch_data' => [
                    'routing_no' => '200060132',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '7380',
                'bank_id' => '38',
                'bank_branch_name' => 'BAKERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200060224',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '7381',
                'bank_id' => '38',
                'bank_branch_name' => 'BANARI PARA',
                'bank_branch_data' => [
                    'routing_no' => '200060253',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '7382',
                'bank_id' => '38',
                'bank_branch_name' => 'BARISAL CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '200060316',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '7383',
                'bank_id' => '38',
                'bank_branch_name' => 'BARISAL CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200060345',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '7384',
                'bank_id' => '38',
                'bank_branch_name' => 'BARISHAL UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '200060358',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '7385',
                'bank_id' => '38',
                'bank_branch_name' => 'C&BR0AD',
                'bank_branch_data' => [
                    'routing_no' => '200060587',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '7386',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAKHAR',
                'bank_branch_data' => [
                    'routing_no' => '200060640',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '7387',
                'bank_id' => '38',
                'bank_branch_name' => 'CHARAMADDI',
                'bank_branch_data' => [
                    'routing_no' => '200060679',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '7388',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200060703',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '7389',
                'bank_id' => '38',
                'bank_branch_name' => 'COLLEGE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200060732',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '7390',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAMURA',
                'bank_branch_data' => [
                    'routing_no' => '200060761',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '7391',
                'bank_id' => '38',
                'bank_branch_name' => 'GAILA',
                'bank_branch_data' => [
                    'routing_no' => '200060790',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '7392',
                'bank_id' => '38',
                'bank_branch_name' => 'GOURNADI',
                'bank_branch_data' => [
                    'routing_no' => '200060824',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '7393',
                'bank_id' => '38',
                'bank_branch_name' => 'GUTHIA',
                'bank_branch_data' => [
                    'routing_no' => '200060853',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '7394',
                'bank_id' => '38',
                'bank_branch_name' => 'HALTA BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200060945',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '7395',
                'bank_id' => '38',
                'bank_branch_name' => 'HIZLA',
                'bank_branch_data' => [
                    'routing_no' => '200060974',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '7396',
                'bank_id' => '38',
                'bank_branch_name' => 'KAMARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200061094',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '7397',
                'bank_id' => '38',
                'bank_branch_name' => 'KHANPURA',
                'bank_branch_data' => [
                    'routing_no' => '200061157',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '7398',
                'bank_id' => '38',
                'bank_branch_name' => 'MEDHAKAL',
                'bank_branch_data' => [
                    'routing_no' => '200061302',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '7399',
                'bank_id' => '38',
                'bank_branch_name' => 'MEHENDIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200061360',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '7400',
                'bank_id' => '38',
                'bank_branch_name' => 'MULADI',
                'bank_branch_data' => [
                    'routing_no' => '200061452',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '7401',
                'bank_id' => '38',
                'bank_branch_name' => 'NALCHIRA',
                'bank_branch_data' => [
                    'routing_no' => '200061481',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '7402',
                'bank_id' => '38',
                'bank_branch_name' => 'NEAMATI BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200061515',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '7403',
                'bank_id' => '38',
                'bank_branch_name' => 'PAISHARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200061607',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '7404',
                'bank_id' => '38',
                'bank_branch_name' => 'SAGARDI',
                'bank_branch_data' => [
                    'routing_no' => '200061849',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '7405',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHEBER HAT',
                'bank_branch_data' => [
                    'routing_no' => '200061960',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '7406',
                'bank_id' => '38',
                'bank_branch_name' => 'TORKEY BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200062172',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '7407',
                'bank_id' => '38',
                'bank_branch_name' => 'WAZIRPUR BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200062327',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '7408',
                'bank_id' => '38',
                'bank_branch_name' => 'BHOLA',
                'bank_branch_data' => [
                    'routing_no' => '200090102',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '7409',
                'bank_id' => '38',
                'bank_branch_name' => 'BORHANUDDIN',
                'bank_branch_data' => [
                    'routing_no' => '200090199',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '7410',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAR FASHION',
                'bank_branch_data' => [
                    'routing_no' => '200090223',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '7411',
                'bank_id' => '38',
                'bank_branch_name' => 'DAULATKHAN',
                'bank_branch_data' => [
                    'routing_no' => '200090373',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '7412',
                'bank_id' => '38',
                'bank_branch_name' => 'GAZARIA',
                'bank_branch_data' => [
                    'routing_no' => '200090436',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '7413',
                'bank_id' => '38',
                'bank_branch_name' => 'LALMOHAN',
                'bank_branch_data' => [
                    'routing_no' => '200090702',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '7414',
                'bank_id' => '38',
                'bank_branch_name' => 'MANPURA',
                'bank_branch_data' => [
                    'routing_no' => '200090823',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '7415',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHAJAN PATTY',
                'bank_branch_data' => [
                    'routing_no' => '200090881',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '7416',
                'bank_id' => '38',
                'bank_branch_name' => 'NORTH DIGHALDI',
                'bank_branch_data' => [
                    'routing_no' => '200090944',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '7417',
                'bank_id' => '38',
                'bank_branch_name' => 'TAZUMUDDIN',
                'bank_branch_data' => [
                    'routing_no' => '200091006',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '7418',
                'bank_id' => '38',
                'bank_branch_name' => 'ADAMDIGHI',
                'bank_branch_data' => [
                    'routing_no' => '200100047',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '7419',
                'bank_id' => '38',
                'bank_branch_name' => 'AZIZUL HAQUE COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '200100139',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '7420',
                'bank_id' => '38',
                'bank_branch_name' => 'BALUA HAT',
                'bank_branch_data' => [
                    'routing_no' => '200100221',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '7421',
                'bank_id' => '38',
                'bank_branch_name' => 'BOGRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200100405',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '7422',
                'bank_id' => '38',
                'bank_branch_name' => 'BOGRA CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200100434',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '7423',
                'bank_id' => '38',
                'bank_branch_name' => 'BOGRA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200100463',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '7424',
                'bank_id' => '38',
                'bank_branch_name' => 'COLLEGE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200100797',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '7425',
                'bank_id' => '38',
                'bank_branch_name' => 'DHUNAT',
                'bank_branch_data' => [
                    'routing_no' => '200100889',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '7426',
                'bank_id' => '38',
                'bank_branch_name' => 'DUPCHACHIA',
                'bank_branch_data' => [
                    'routing_no' => '200100913',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '7427',
                'bank_id' => '38',
                'bank_branch_name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200100971',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '7428',
                'bank_id' => '38',
                'bank_branch_name' => 'GABTALI',
                'bank_branch_data' => [
                    'routing_no' => '200101033',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '7429',
                'bank_id' => '38',
                'bank_branch_name' => 'GOHAIL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200101154',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '7430',
                'bank_id' => '38',
                'bank_branch_name' => 'JAMADARPUKUR HAT',
                'bank_branch_data' => [
                    'routing_no' => '200101183',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '7431',
                'bank_id' => '38',
                'bank_branch_name' => 'GUZIA',
                'bank_branch_data' => [
                    'routing_no' => '200101309',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '7432',
                'bank_id' => '38',
                'bank_branch_name' => 'SYED AHMED COLLEGE STATION',
                'bank_branch_data' => [
                    'routing_no' => '200101338',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '7433',
                'bank_id' => '38',
                'bank_branch_name' => 'JAMURHAT',
                'bank_branch_data' => [
                    'routing_no' => '200101488',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '7434',
                'bank_id' => '38',
                'bank_branch_name' => 'KAHALOO',
                'bank_branch_data' => [
                    'routing_no' => '200101541',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '7435',
                'bank_id' => '38',
                'bank_branch_name' => 'MOKAMTALA',
                'bank_branch_data' => [
                    'routing_no' => '200101938',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '7436',
                'bank_id' => '38',
                'bank_branch_name' => 'NAMUJAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200101996',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '7437',
                'bank_id' => '38',
                'bank_branch_name' => 'NANDIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200102029',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '7438',
                'bank_id' => '38',
                'bank_branch_name' => 'NASHRATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200102087',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '7439',
                'bank_id' => '38',
                'bank_branch_name' => 'PALLY UNNAYAN ACADEMY',
                'bank_branch_data' => [
                    'routing_no' => '200102179',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '7440',
                'bank_id' => '38',
                'bank_branch_name' => 'RANBAGHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200102324',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '7441',
                'bank_id' => '38',
                'bank_branch_name' => 'SANTAHAR',
                'bank_branch_data' => [
                    'routing_no' => '200102416',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '7442',
                'bank_id' => '38',
                'bank_branch_name' => 'SARIAKANDI',
                'bank_branch_data' => [
                    'routing_no' => '200102474',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '7443',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHARPUKUR',
                'bank_branch_data' => [
                    'routing_no' => '200102658',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '7444',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHID ZIAUR RAHMAN MEDICAL COLLEGE HOSPITAL',
                'bank_branch_data' => [
                    'routing_no' => '200102687',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '7445',
                'bank_id' => '38',
                'bank_branch_name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '200102740',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '7446',
                'bank_id' => '38',
                'bank_branch_name' => 'SHERPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200102779',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '7447',
                'bank_id' => '38',
                'bank_branch_name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200102803',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '7448',
                'bank_id' => '38',
                'bank_branch_name' => 'SONATOLA',
                'bank_branch_data' => [
                    'routing_no' => '200102982',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '7449',
                'bank_id' => '38',
                'bank_branch_name' => 'TALORA',
                'bank_branch_data' => [
                    'routing_no' => '200103073',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '7450',
                'bank_id' => '38',
                'bank_branch_name' => 'AKHAURA',
                'bank_branch_data' => [
                    'routing_no' => '200120043',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '7451',
                'bank_id' => '38',
                'bank_branch_name' => 'BIJOYNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200120098',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '7452',
                'bank_id' => '38',
                'bank_branch_name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200120106',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '7453',
                'bank_id' => '38',
                'bank_branch_name' => 'BANCHARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200120256',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '7454',
                'bank_id' => '38',
                'bank_branch_name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '200120430',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '7455',
                'bank_id' => '38',
                'bank_branch_name' => 'CHANDPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200120522',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '7456',
                'bank_id' => '38',
                'bank_branch_name' => 'CHATALPAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200120672',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '7457',
                'bank_id' => '38',
                'bank_branch_name' => 'FANDAUK',
                'bank_branch_data' => [
                    'routing_no' => '200120764',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '7458',
                'bank_id' => '38',
                'bank_branch_name' => 'GOKARNAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200120793',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '7459',
                'bank_id' => '38',
                'bank_branch_name' => 'HARINBER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200120885',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '7460',
                'bank_id' => '38',
                'bank_branch_name' => 'KASBA',
                'bank_branch_data' => [
                    'routing_no' => '200121039',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '7461',
                'bank_id' => '38',
                'bank_branch_name' => 'KUTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200121097',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '7462',
                'bank_id' => '38',
                'bank_branch_name' => 'T.A. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200121121',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '7463',
                'bank_id' => '38',
                'bank_branch_name' => 'MEDDA THANA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200121242',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '7464',
                'bank_id' => '38',
                'bank_branch_name' => 'MIRASHANI',
                'bank_branch_data' => [
                    'routing_no' => '200121271',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '7465',
                'bank_id' => '38',
                'bank_branch_name' => 'NABINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200121363',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '7466',
                'bank_id' => '38',
                'bank_branch_name' => 'NASIR NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200121392',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '7467',
                'bank_id' => '38',
                'bank_branch_name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '200121426',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '7468',
                'bank_id' => '38',
                'bank_branch_name' => 'RASULLABAD',
                'bank_branch_data' => [
                    'routing_no' => '200121518',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '7469',
                'bank_id' => '38',
                'bank_branch_name' => 'RUPASDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200121547',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '7470',
                'bank_id' => '38',
                'bank_branch_name' => 'SARAIL',
                'bank_branch_data' => [
                    'routing_no' => '200121600',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '7471',
                'bank_id' => '38',
                'bank_branch_name' => 'SHYAMOGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200121789',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '7472',
                'bank_id' => '38',
                'bank_branch_name' => 'SINGERBIEL',
                'bank_branch_data' => [
                    'routing_no' => '200121813',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '7473',
                'bank_id' => '38',
                'bank_branch_name' => 'ASHUGANJ SAR KARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '200121934',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '7474',
                'bank_id' => '38',
                'bank_branch_name' => 'ALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200130046',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '7475',
                'bank_id' => '38',
                'bank_branch_name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200130312',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '7476',
                'bank_id' => '38',
                'bank_branch_name' => 'FARAZIKANDI',
                'bank_branch_data' => [
                    'routing_no' => '200130646',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '7477',
                'bank_id' => '38',
                'bank_branch_name' => 'FARIDGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200130675',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '7478',
                'bank_id' => '38',
                'bank_branch_name' => 'GAZIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200130767',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '7479',
                'bank_id' => '38',
                'bank_branch_name' => 'HAIMCHAR',
                'bank_branch_data' => [
                    'routing_no' => '200130859',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '7480',
                'bank_id' => '38',
                'bank_branch_name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200130888',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '7481',
                'bank_id' => '38',
                'bank_branch_name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '200130912',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '7482',
                'bank_id' => '38',
                'bank_branch_name' => 'KHILA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200131061',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '7483',
                'bank_id' => '38',
                'bank_branch_name' => 'NUTUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200131090',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '7484',
                'bank_id' => '38',
                'bank_branch_name' => 'MATLABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200131245',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '7485',
                'bank_id' => '38',
                'bank_branch_name' => 'NABIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200131366',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '7486',
                'bank_id' => '38',
                'bank_branch_name' => 'NAORA',
                'bank_branch_data' => [
                    'routing_no' => '200131429',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '7487',
                'bank_id' => '38',
                'bank_branch_name' => 'PURAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200131661',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '7488',
                'bank_id' => '38',
                'bank_branch_name' => 'RAHIMANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200131690',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '7489',
                'bank_id' => '38',
                'bank_branch_name' => 'SACHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200131816',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '7490',
                'bank_id' => '38',
                'bank_branch_name' => 'SENGAR CHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200131874',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '7491',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHRASTI',
                'bank_branch_data' => [
                    'routing_no' => '200131995',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '7492',
                'bank_id' => '38',
                'bank_branch_name' => 'SHOLOGHAR',
                'bank_branch_data' => [
                    'routing_no' => '200132028',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '7493',
                'bank_id' => '38',
                'bank_branch_name' => 'WARUK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200132149',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '7494',
                'bank_id' => '38',
                'bank_branch_name' => 'AGRABAD CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200150163',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '7495',
                'bank_id' => '38',
                'bank_branch_name' => 'AMIN JUTE MILLS',
                'bank_branch_data' => [
                    'routing_no' => '200150347',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '7496',
                'bank_id' => '38',
                'bank_branch_name' => 'ANOWARA',
                'bank_branch_data' => [
                    'routing_no' => '200150521',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '7497',
                'bank_id' => '38',
                'bank_branch_name' => 'ASAD GANJ',
                'bank_branch_data' => [
                    'routing_no' => '200150589',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '7498',
                'bank_id' => '38',
                'bank_branch_name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '200150792',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '7499',
                'bank_id' => '38',
                'bank_branch_name' => 'BANSHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200150976',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '7500',
                'bank_id' => '38',
                'bank_branch_name' => 'BANUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200151009',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '7501',
                'bank_id' => '38',
                'bank_branch_name' => 'BHATIARY',
                'bank_branch_data' => [
                    'routing_no' => '200151212',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '7502',
                'bank_id' => '38',
                'bank_branch_name' => 'UTTAR PATENGA',
                'bank_branch_data' => [
                    'routing_no' => '200151270',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '7503',
                'bank_id' => '38',
                'bank_branch_name' => 'BOALKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200151304',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '7504',
                'bank_id' => '38',
                'bank_branch_name' => 'C.D.A. MARKET',
                'bank_branch_data' => [
                    'routing_no' => '200151546',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '7505',
                'bank_id' => '38',
                'bank_branch_name' => 'C.U.E.T.',
                'bank_branch_data' => [
                    'routing_no' => '200151609',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '7506',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '200151759',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '7507',
                'bank_id' => '38',
                'bank_branch_name' => 'CHANDANAISH',
                'bank_branch_data' => [
                    'routing_no' => '200151812',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '7508',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200151933',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '7509',
                'bank_id' => '38',
                'bank_branch_name' => 'CHITTAGONG CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200151991',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '7510',
                'bank_id' => '38',
                'bank_branch_name' => 'CHITTAGONG MEDICAL COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '200152024',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '7511',
                'bank_id' => '38',
                'bank_branch_name' => 'CHITTAGONG UREA FERTILIZER',
                'bank_branch_data' => [
                    'routing_no' => '200152116',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '7512',
                'bank_id' => '38',
                'bank_branch_name' => 'COURT HILL',
                'bank_branch_data' => [
                    'routing_no' => '200152358',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '7513',
                'bank_id' => '38',
                'bank_branch_name' => 'CUSTOM HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '200152387',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '7514',
                'bank_id' => '38',
                'bank_branch_name' => 'DOHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '200152561',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '7515',
                'bank_id' => '38',
                'bank_branch_name' => 'NAZIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '200152682',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '7516',
                'bank_id' => '38',
                'bank_branch_name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200152745',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '7517',
                'bank_id' => '38',
                'bank_branch_name' => 'HALISHAHAR HOUSING ESTATE',
                'bank_branch_data' => [
                    'routing_no' => '200153199',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '7518',
                'bank_id' => '38',
                'bank_branch_name' => 'HATHAZARI',
                'bank_branch_data' => [
                    'routing_no' => '200153223',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '7519',
                'bank_id' => '38',
                'bank_branch_name' => 'JAMAL KHAN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200153586',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '7520',
                'bank_id' => '38',
                'bank_branch_name' => 'LALDIGHI CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200153702',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '7521',
                'bank_id' => '38',
                'bank_branch_name' => 'KAGATIAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200153760',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '7522',
                'bank_id' => '38',
                'bank_branch_name' => 'KALARPOLE',
                'bank_branch_data' => [
                    'routing_no' => '200153799',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '7523',
                'bank_id' => '38',
                'bank_branch_name' => 'KALIBARI',
                'bank_branch_data' => [
                    'routing_no' => '200153823',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '7524',
                'bank_id' => '38',
                'bank_branch_name' => 'KALUMUNSHIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '200153881',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '7525',
                'bank_id' => '38',
                'bank_branch_name' => 'KALURGHAT INDUSTRIAL ESTATE',
                'bank_branch_data' => [
                    'routing_no' => '200153944',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '7526',
                'bank_id' => '38',
                'bank_branch_name' => 'KHAN BAHADUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200154219',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '7527',
                'bank_id' => '38',
                'bank_branch_name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200154277',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '7528',
                'bank_id' => '38',
                'bank_branch_name' => 'KORBANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200154398',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '7529',
                'bank_id' => '38',
                'bank_branch_name' => 'CDA RESIDENTIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '200154480',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '7530',
                'bank_id' => '38',
                'bank_branch_name' => 'LOHA GARA',
                'bank_branch_data' => [
                    'routing_no' => '200154664',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '7531',
                'bank_id' => '38',
                'bank_branch_name' => 'MAJIR GHAT',
                'bank_branch_data' => [
                    'routing_no' => '200154819',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '7532',
                'bank_id' => '38',
                'bank_branch_name' => 'MARIAMNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200154848',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '7533',
                'bank_id' => '38',
                'bank_branch_name' => 'MARINE ACADEMY',
                'bank_branch_data' => [
                    'routing_no' => '200154877',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '7534',
                'bank_id' => '38',
                'bank_branch_name' => 'MIRSARAI',
                'bank_branch_data' => [
                    'routing_no' => '200155050',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '7535',
                'bank_id' => '38',
                'bank_branch_name' => 'MITAGOLI',
                'bank_branch_data' => [
                    'routing_no' => '200155113',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '7536',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHAMMED TAKIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '200155205',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '7537',
                'bank_id' => '38',
                'bank_branch_name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200155292',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '7538',
                'bank_id' => '38',
                'bank_branch_name' => 'N.A. CHOWDHURY ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200155384',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '7539',
                'bank_id' => '38',
                'bank_branch_name' => 'SARKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200155418',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '7540',
                'bank_id' => '38',
                'bank_branch_name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '200155650',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '7541',
                'bank_id' => '38',
                'bank_branch_name' => 'NIZAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200155689',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '7542',
                'bank_id' => '38',
                'bank_branch_name' => 'PAHARTALI MAIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200155984',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '7543',
                'bank_id' => '38',
                'bank_branch_name' => 'PANCHLAISH',
                'bank_branch_data' => [
                    'routing_no' => '200156046',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '7544',
                'bank_id' => '38',
                'bank_branch_name' => 'PATIYA',
                'bank_branch_data' => [
                    'routing_no' => '200156167',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '7545',
                'bank_id' => '38',
                'bank_branch_name' => 'PORT',
                'bank_branch_data' => [
                    'routing_no' => '200156220',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '7546',
                'bank_id' => '38',
                'bank_branch_name' => 'RAILWAY BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200156370',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '7547',
                'bank_id' => '38',
                'bank_branch_name' => 'RANGUNIA',
                'bank_branch_data' => [
                    'routing_no' => '200156404',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '7548',
                'bank_id' => '38',
                'bank_branch_name' => 'RAOZAN',
                'bank_branch_data' => [
                    'routing_no' => '200156491',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '7549',
                'bank_id' => '38',
                'bank_branch_name' => 'REAZUDDIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200156525',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '7550',
                'bank_id' => '38',
                'bank_branch_name' => 'ROAZARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200156554',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '7551',
                'bank_id' => '38',
                'bank_branch_name' => 'ROWSHAN HAT',
                'bank_branch_data' => [
                    'routing_no' => '200156583',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '7552',
                'bank_id' => '38',
                'bank_branch_name' => 'RUSTOM HAT',
                'bank_branch_data' => [
                    'routing_no' => '200156675',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '7553',
                'bank_id' => '38',
                'bank_branch_name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200156738',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '7554',
                'bank_id' => '38',
                'bank_branch_name' => 'SANDWIP',
                'bank_branch_data' => [
                    'routing_no' => '200156912',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '7555',
                'bank_id' => '38',
                'bank_branch_name' => 'SATKANIA',
                'bank_branch_data' => [
                    'routing_no' => '200157061',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '7556',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAH AMANAT INT. AIR PORT',
                'bank_branch_data' => [
                    'routing_no' => '200157124',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '7557',
                'bank_id' => '38',
                'bank_branch_name' => 'SIRAJUDDOWLA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200157366',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '7558',
                'bank_id' => '38',
                'bank_branch_name' => 'SITAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '200157395',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '7559',
                'bank_id' => '38',
                'bank_branch_name' => 'TERRI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200157632',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '7560',
                'bank_id' => '38',
                'bank_branch_name' => 'WAGE EARNERS',
                'bank_branch_data' => [
                    'routing_no' => '200157690',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '7561',
                'bank_id' => '38',
                'bank_branch_name' => 'ALAMDANGA',
                'bank_branch_data' => [
                    'routing_no' => '200180041',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '7562',
                'bank_id' => '38',
                'bank_branch_name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '200180191',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '7563',
                'bank_id' => '38',
                'bank_branch_name' => 'DAMURHUDA',
                'bank_branch_data' => [
                    'routing_no' => '200180283',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '7564',
                'bank_id' => '38',
                'bank_branch_name' => 'DARSHANA',
                'bank_branch_data' => [
                    'routing_no' => '200180317',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '7565',
                'bank_id' => '38',
                'bank_branch_name' => 'DINGEDAH',
                'bank_branch_data' => [
                    'routing_no' => '200180346',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '7566',
                'bank_id' => '38',
                'bank_branch_name' => 'GOKUL KHALI',
                'bank_branch_data' => [
                    'routing_no' => '200180409',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '7567',
                'bank_id' => '38',
                'bank_branch_name' => 'HAT BOALIA',
                'bank_branch_data' => [
                    'routing_no' => '200180496',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '7568',
                'bank_id' => '38',
                'bank_branch_name' => 'JIBAN NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200180588',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '7569',
                'bank_id' => '38',
                'bank_branch_name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200180762',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '7570',
                'bank_id' => '38',
                'bank_branch_name' => 'SARATGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200180854',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '7571',
                'bank_id' => '38',
                'bank_branch_name' => 'UTHALI',
                'bank_branch_data' => [
                    'routing_no' => '200180883',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '7572',
                'bank_id' => '38',
                'bank_branch_name' => 'ADDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200190073',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '7573',
                'bank_id' => '38',
                'bank_branch_name' => 'TITAS',
                'bank_branch_data' => [
                    'routing_no' => '200190181',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '7574',
                'bank_id' => '38',
                'bank_branch_name' => 'BARURA',
                'bank_branch_data' => [
                    'routing_no' => '200190499',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '7575',
                'bank_id' => '38',
                'bank_branch_name' => 'BHARASHAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200190615',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '7576',
                'bank_id' => '38',
                'bank_branch_name' => 'BISE BIDG.',
                'bank_branch_data' => [
                    'routing_no' => '200190673',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '7577',
                'bank_id' => '38',
                'bank_branch_name' => 'BRAHMAN PARA',
                'bank_branch_data' => [
                    'routing_no' => '200190765',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '7578',
                'bank_id' => '38',
                'bank_branch_name' => 'BURICHANG',
                'bank_branch_data' => [
                    'routing_no' => '200190828',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '7579',
                'bank_id' => '38',
                'bank_branch_name' => 'CHANDINA',
                'bank_branch_data' => [
                    'routing_no' => '200190886',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '7580',
                'bank_id' => '38',
                'bank_branch_name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200191069',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '7581',
                'bank_id' => '38',
                'bank_branch_name' => 'COMILLA CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200191214',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '7582',
                'bank_id' => '38',
                'bank_branch_name' => 'COMILLA COORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200191272',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '7583',
                'bank_id' => '38',
                'bank_branch_name' => 'COMILLA SADAR DAKKHIN U.Z.',
                'bank_branch_data' => [
                    'routing_no' => '200191335',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '7584',
                'bank_id' => '38',
                'bank_branch_name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200191456',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '7585',
                'bank_id' => '38',
                'bank_branch_name' => 'DAUDKANDI',
                'bank_branch_data' => [
                    'routing_no' => '200191519',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '7586',
                'bank_id' => '38',
                'bank_branch_name' => 'DAULATGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200191548',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '7587',
                'bank_id' => '38',
                'bank_branch_name' => 'DEBIDWAR',
                'bank_branch_data' => [
                    'routing_no' => '200191601',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '7588',
                'bank_id' => '38',
                'bank_branch_name' => 'ELIOTGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200191906',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '7589',
                'bank_id' => '38',
                'bank_branch_name' => 'GOURIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200192118',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '7590',
                'bank_id' => '38',
                'bank_branch_name' => 'HOMNA',
                'bank_branch_data' => [
                    'routing_no' => '200192239',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '7591',
                'bank_id' => '38',
                'bank_branch_name' => 'KANGSHANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200192534',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '7592',
                'bank_id' => '38',
                'bank_branch_name' => 'KOTBARI',
                'bank_branch_data' => [
                    'routing_no' => '200192655',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '7593',
                'bank_id' => '38',
                'bank_branch_name' => 'MEGHNA',
                'bank_branch_data' => [
                    'routing_no' => '200192868',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '7594',
                'bank_id' => '38',
                'bank_branch_name' => 'MONOHARGONJ',
                'bank_branch_data' => [
                    'routing_no' => '200193041',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '7595',
                'bank_id' => '38',
                'bank_branch_name' => 'MURAD NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200193162',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '7596',
                'bank_id' => '38',
                'bank_branch_name' => 'NANGALKOT',
                'bank_branch_data' => [
                    'routing_no' => '200193254',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '7597',
                'bank_id' => '38',
                'bank_branch_name' => 'NOA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200193375',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '7598',
                'bank_id' => '38',
                'bank_branch_name' => 'PARAMTALA',
                'bank_branch_data' => [
                    'routing_no' => '200193438',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '7599',
                'bank_id' => '38',
                'bank_branch_name' => 'PAYALGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200193467',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '7600',
                'bank_id' => '38',
                'bank_branch_name' => 'RAIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200193559',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '7601',
                'bank_id' => '38',
                'bank_branch_name' => 'RAMMOHAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200193704',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '7602',
                'bank_id' => '38',
                'bank_branch_name' => 'COMPANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200193733',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '7603',
                'bank_id' => '38',
                'bank_branch_name' => 'SRIKAIL',
                'bank_branch_data' => [
                    'routing_no' => '200193975',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '7604',
                'bank_id' => '38',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200194008',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '7605',
                'bank_id' => '38',
                'bank_branch_name' => 'SUAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '200194037',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '7606',
                'bank_id' => '38',
                'bank_branch_name' => 'WAPDA BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200194187',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '7607',
                'bank_id' => '38',
                'bank_branch_name' => 'BADARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200220048',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '7608',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '200220169',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '7609',
                'bank_id' => '38',
                'bank_branch_name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200220251',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '7610',
                'bank_id' => '38',
                'bank_branch_name' => 'DULHAZRA',
                'bank_branch_data' => [
                    'routing_no' => '200220372',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '7611',
                'bank_id' => '38',
                'bank_branch_name' => 'EIDGAON',
                'bank_branch_data' => [
                    'routing_no' => '200220406',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '7612',
                'bank_id' => '38',
                'bank_branch_name' => 'KUTUBDIA',
                'bank_branch_data' => [
                    'routing_no' => '200220677',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '7613',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHESHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200220769',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '7614',
                'bank_id' => '38',
                'bank_branch_name' => 'RAMU',
                'bank_branch_data' => [
                    'routing_no' => '200220851',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '7615',
                'bank_id' => '38',
                'bank_branch_name' => 'TEKNAF',
                'bank_branch_data' => [
                    'routing_no' => '200220914',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '7616',
                'bank_id' => '38',
                'bank_branch_name' => 'UKHIYA',
                'bank_branch_data' => [
                    'routing_no' => '200220943',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '7617',
                'bank_id' => '38',
                'bank_branch_name' => 'AGARGAON',
                'bank_branch_data' => [
                    'routing_no' => '200260040',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '7618',
                'bank_id' => '38',
                'bank_branch_name' => 'AMIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200260132',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '7619',
                'bank_id' => '38',
                'bank_branch_name' => 'ASHULIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200260253',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '7620',
                'bank_id' => '38',
                'bank_branch_name' => 'AWLAD HOSSAIN MARKET',
                'bank_branch_data' => [
                    'routing_no' => '200260282',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '7621',
                'bank_id' => '38',
                'bank_branch_name' => 'BADDA',
                'bank_branch_data' => [
                    'routing_no' => '200260345',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '7622',
                'bank_id' => '38',
                'bank_branch_name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '200260437',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '7623',
                'bank_id' => '38',
                'bank_branch_name' => 'BANANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200260466',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '7624',
                'bank_id' => '38',
                'bank_branch_name' => 'BARIDHARA',
                'bank_branch_data' => [
                    'routing_no' => '200260529',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '7625',
                'bank_id' => '38',
                'bank_branch_name' => 'BAZME QUADERIA',
                'bank_branch_data' => [
                    'routing_no' => '200260640',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '7626',
                'bank_id' => '38',
                'bank_branch_name' => 'BEGUM ROKEYA SAWRANI',
                'bank_branch_data' => [
                    'routing_no' => '200260679',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '7627',
                'bank_id' => '38',
                'bank_branch_name' => 'COLLEGE GATE',
                'bank_branch_data' => [
                    'routing_no' => '200260824',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '7628',
                'bank_id' => '38',
                'bank_branch_name' => 'CUSTOM HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '200260882',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '7629',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAKA AIRPOT',
                'bank_branch_data' => [
                    'routing_no' => '200260974',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '7630',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAKA CANTONMENT CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200261036',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '7631',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAKA EPZ',
                'bank_branch_data' => [
                    'routing_no' => '200261094',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '7632',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAMRAI',
                'bank_branch_data' => [
                    'routing_no' => '200261157',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '7633',
                'bank_id' => '38',
                'bank_branch_name' => 'FARMGATE',
                'bank_branch_data' => [
                    'routing_no' => '200261452',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '7634',
                'bank_id' => '38',
                'bank_branch_name' => 'GANA BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200261607',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '7635',
                'bank_id' => '38',
                'bank_branch_name' => 'GREEN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200261694',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '7636',
                'bank_id' => '38',
                'bank_branch_name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '200261728',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '7637',
                'bank_id' => '38',
                'bank_branch_name' => 'GULSHAN NEW NORTH CIRCLE',
                'bank_branch_data' => [
                    'routing_no' => '200261878',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '7638',
                'bank_id' => '38',
                'bank_branch_name' => 'HAZARIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '200261960',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '7639',
                'bank_id' => '38',
                'bank_branch_name' => 'IBRAHIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200262080',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '7640',
                'bank_id' => '38',
                'bank_branch_name' => 'JATIO SANGSAD BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200262293',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '7641',
                'bank_id' => '38',
                'bank_branch_name' => 'JHIGATOLA',
                'bank_branch_data' => [
                    'routing_no' => '200262327',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '7642',
                'bank_id' => '38',
                'bank_branch_name' => 'KALAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200262448',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '7643',
                'bank_id' => '38',
                'bank_branch_name' => 'KALYAN PUR',
                'bank_branch_data' => [
                    'routing_no' => '200262477',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '7644',
                'bank_id' => '38',
                'bank_branch_name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200262530',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '7645',
                'bank_id' => '38',
                'bank_branch_name' => 'KRISHI BAZAR MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '200262622',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '7646',
                'bank_id' => '38',
                'bank_branch_name' => 'KURMITOLA',
                'bank_branch_data' => [
                    'routing_no' => '200262651',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '7647',
                'bank_id' => '38',
                'bank_branch_name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '200262743',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '7648',
                'bank_id' => '38',
                'bank_branch_name' => 'LALMATIA',
                'bank_branch_data' => [
                    'routing_no' => '200262835',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '7649',
                'bank_id' => '38',
                'bank_branch_name' => 'MANIK MIAH AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '200262893',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '7650',
                'bank_id' => '38',
                'bank_branch_name' => 'MIRPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200263018',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '7651',
                'bank_id' => '38',
                'bank_branch_name' => 'MIRPUR I/A',
                'bank_branch_data' => [
                    'routing_no' => '200263047',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '7652',
                'bank_id' => '38',
                'bank_branch_name' => 'MIRPUR SECTION-1',
                'bank_branch_data' => [
                    'routing_no' => '200263100',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '7653',
                'bank_id' => '38',
                'bank_branch_name' => 'MIRPUR SECTION-12',
                'bank_branch_data' => [
                    'routing_no' => '200263168',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '7654',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200263197',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '7655',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHAMMADPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200263313',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '7656',
                'bank_id' => '38',
                'bank_branch_name' => 'NAVAL H/Q',
                'bank_branch_data' => [
                    'routing_no' => '200263434',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '7657',
                'bank_id' => '38',
                'bank_branch_name' => 'NAYARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200263463',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '7658',
                'bank_id' => '38',
                'bank_branch_name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '200263526',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '7659',
                'bank_id' => '38',
                'bank_branch_name' => 'PRIME MINISTER\'S OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '200263739',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '7660',
                'bank_id' => '38',
                'bank_branch_name' => 'PUBLIC ADM. TRAINING CENTRE',
                'bank_branch_data' => [
                    'routing_no' => '200263768',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '7661',
                'bank_id' => '38',
                'bank_branch_name' => 'RAGISTRATION COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200263821',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '7662',
                'bank_id' => '38',
                'bank_branch_name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200264033',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '7663',
                'bank_id' => '38',
                'bank_branch_name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '200264091',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '7664',
                'bank_id' => '38',
                'bank_branch_name' => 'SAVAR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200264183',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '7665',
                'bank_id' => '38',
                'bank_branch_name' => 'SONARGOAN HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '200264396',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '7666',
                'bank_id' => '38',
                'bank_branch_name' => 'TEJGAON INDUSTRIAL AREA',
                'bank_branch_data' => [
                    'routing_no' => '200264512',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '7667',
                'bank_id' => '38',
                'bank_branch_name' => 'UTTAR KHAN',
                'bank_branch_data' => [
                    'routing_no' => '200264604',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '7668',
                'bank_id' => '38',
                'bank_branch_name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '200264691',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '7669',
                'bank_id' => '38',
                'bank_branch_name' => 'HAZRAT SHAHJALA ® INTERNATIONAL AIR PORT',
                'bank_branch_data' => [
                    'routing_no' => '200264817',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '7670',
                'bank_id' => '38',
                'bank_branch_name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '200270001',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '7671',
                'bank_id' => '38',
                'bank_branch_name' => 'PANGAON INLAND CONTAINER TERMINAL',
                'bank_branch_data' => [
                    'routing_no' => '200270119',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '7672',
                'bank_id' => '38',
                'bank_branch_name' => 'AGLA',
                'bank_branch_data' => [
                    'routing_no' => '200270164',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '7673',
                'bank_id' => '38',
                'bank_branch_name' => 'AGRANI BALIKA BIDYALAYA',
                'bank_branch_data' => [
                    'routing_no' => '200270193',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '7674',
                'bank_id' => '38',
                'bank_branch_name' => 'ARMANITOLA',
                'bank_branch_data' => [
                    'routing_no' => '200270319',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '7675',
                'bank_id' => '38',
                'bank_branch_name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200270348',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '7676',
                'bank_id' => '38',
                'bank_branch_name' => 'B. MADRASHA SHIKKHA BOARD',
                'bank_branch_data' => [
                    'routing_no' => '200270401',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '7677',
                'bank_id' => '38',
                'bank_branch_name' => 'B.I.S.E.',
                'bank_branch_data' => [
                    'routing_no' => '200270469',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '7678',
                'bank_id' => '38',
                'bank_branch_name' => 'B.U.E.T.',
                'bank_branch_data' => [
                    'routing_no' => '200270522',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '7679',
                'bank_id' => '38',
                'bank_branch_name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200270551',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '7680',
                'bank_id' => '38',
                'bank_branch_name' => 'BAITUL MOKARRAM',
                'bank_branch_data' => [
                    'routing_no' => '200270614',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '7681',
                'bank_id' => '38',
                'bank_branch_name' => 'BANGA BANDHU NATIONAL STADIUM',
                'bank_branch_data' => [
                    'routing_no' => '200270706',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '7682',
                'bank_id' => '38',
                'bank_branch_name' => 'BANGA BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200270735',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '7683',
                'bank_id' => '38',
                'bank_branch_name' => 'BANGABANDHU AVENUE CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200270764',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '7684',
                'bank_id' => '38',
                'bank_branch_name' => 'BASHABOO',
                'bank_branch_data' => [
                    'routing_no' => '200270977',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '7685',
                'bank_id' => '38',
                'bank_branch_name' => 'BAWANI NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200271000',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '7686',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200271271',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '7687',
                'bank_id' => '38',
                'bank_branch_name' => 'CHURAIN',
                'bank_branch_data' => [
                    'routing_no' => '200271363',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '7688',
                'bank_id' => '38',
                'bank_branch_name' => 'DAYA GANJ',
                'bank_branch_data' => [
                    'routing_no' => '200271455',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '7689',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAKA SHERATON HOTEL',
                'bank_branch_data' => [
                    'routing_no' => '200271639',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '7690',
                'bank_id' => '38',
                'bank_branch_name' => 'DHAKA UNIVERSITY CAMPUS',
                'bank_branch_data' => [
                    'routing_no' => '200271750',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '7691',
                'bank_id' => '38',
                'bank_branch_name' => 'DILKUSHA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200271934',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '7692',
                'bank_id' => '38',
                'bank_branch_name' => 'DISTILARY ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200271963',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '7693',
                'bank_id' => '38',
                'bank_branch_name' => 'DISTRICT COUNCIL HALL',
                'bank_branch_data' => [
                    'routing_no' => '200271992',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '7694',
                'bank_id' => '38',
                'bank_branch_name' => 'FAKIRAPOOL',
                'bank_branch_data' => [
                    'routing_no' => '200272175',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '7695',
                'bank_id' => '38',
                'bank_branch_name' => 'FARASHGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200272238',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '7696',
                'bank_id' => '38',
                'bank_branch_name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '200272320',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '7697',
                'bank_id' => '38',
                'bank_branch_name' => 'GORAN',
                'bank_branch_data' => [
                    'routing_no' => '200272470',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '7698',
                'bank_id' => '38',
                'bank_branch_name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '200272683',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '7699',
                'bank_id' => '38',
                'bank_branch_name' => 'ISWAR CHANDRA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200273040',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '7700',
                'bank_id' => '38',
                'bank_branch_name' => 'JATRABARI',
                'bank_branch_data' => [
                    'routing_no' => '200273224',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '7701',
                'bank_id' => '38',
                'bank_branch_name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '200273282',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '7702',
                'bank_id' => '38',
                'bank_branch_name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '200273374',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '7703',
                'bank_id' => '38',
                'bank_branch_name' => 'KALAKOPA',
                'bank_branch_data' => [
                    'routing_no' => '200273408',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '7704',
                'bank_id' => '38',
                'bank_branch_name' => 'KALATIA',
                'bank_branch_data' => [
                    'routing_no' => '200273437',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '7705',
                'bank_id' => '38',
                'bank_branch_name' => 'KAMALAPUR RAILWAY STATION',
                'bank_branch_data' => [
                    'routing_no' => '200273558',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '7706',
                'bank_id' => '38',
                'bank_branch_name' => 'KERANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200273640',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '7707',
                'bank_id' => '38',
                'bank_branch_name' => 'KHILGAON',
                'bank_branch_data' => [
                    'routing_no' => '200273679',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '7708',
                'bank_id' => '38',
                'bank_branch_name' => 'KRISHI BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200273761',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '7709',
                'bank_id' => '38',
                'bank_branch_name' => 'LALBAGH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200273824',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '7710',
                'bank_id' => '38',
                'bank_branch_name' => 'LAXMI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200273853',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '7711',
                'bank_id' => '38',
                'bank_branch_name' => 'LOCAL OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '200273882',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '7712',
                'bank_id' => '38',
                'bank_branch_name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '200273945',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '7713',
                'bank_id' => '38',
                'bank_branch_name' => 'MITFORD ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200274128',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '7714',
                'bank_id' => '38',
                'bank_branch_name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200274186',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '7715',
                'bank_id' => '38',
                'bank_branch_name' => 'MOKIM KATRA',
                'bank_branch_data' => [
                    'routing_no' => '200274210',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '7716',
                'bank_id' => '38',
                'bank_branch_name' => 'N.C.T.B.',
                'bank_branch_data' => [
                    'routing_no' => '200274544',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '7717',
                'bank_id' => '38',
                'bank_branch_name' => 'NAGAR BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200274573',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '7718',
                'bank_id' => '38',
                'bank_branch_name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200274694',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '7719',
                'bank_id' => '38',
                'bank_branch_name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200274757',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '7720',
                'bank_id' => '38',
                'bank_branch_name' => 'NAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200274810',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '7721',
                'bank_id' => '38',
                'bank_branch_name' => 'NAZIMUDDIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200274931',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '7722',
                'bank_id' => '38',
                'bank_branch_name' => 'NAZIRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200274960',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '7723',
                'bank_id' => '38',
                'bank_branch_name' => 'NORTH SOUTH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200275114',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '7724',
                'bank_id' => '38',
                'bank_branch_name' => 'PALAM GANJ',
                'bank_branch_data' => [
                    'routing_no' => '200275172',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '7725',
                'bank_id' => '38',
                'bank_branch_name' => 'POSTAGOLA',
                'bank_branch_data' => [
                    'routing_no' => '200275327',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '7726',
                'bank_id' => '38',
                'bank_branch_name' => 'RAJUK BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200275622',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '7727',
                'bank_id' => '38',
                'bank_branch_name' => 'RAMNA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200275714',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '7728',
                'bank_id' => '38',
                'bank_branch_name' => 'RAMPURA',
                'bank_branch_data' => [
                    'routing_no' => '200275743',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '7729',
                'bank_id' => '38',
                'bank_branch_name' => 'RASULPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200275772',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '7730',
                'bank_id' => '38',
                'bank_branch_name' => 'RUHITPUR',
                'bank_branch_data' => [
                    'routing_no' => '200275835',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '7731',
                'bank_id' => '38',
                'bank_branch_name' => 'SADARGHAT CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200275956',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '7732',
                'bank_id' => '38',
                'bank_branch_name' => 'SAIDABAD BUS TERMINAL',
                'bank_branch_data' => [
                    'routing_no' => '200275985',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '7733',
                'bank_id' => '38',
                'bank_branch_name' => 'SEGUN BAGICHA',
                'bank_branch_data' => [
                    'routing_no' => '200276168',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '7734',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHJAHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200276250',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '7735',
                'bank_id' => '38',
                'bank_branch_name' => 'SHILPA BHABAN CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200276434',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '7736',
                'bank_id' => '38',
                'bank_branch_name' => 'SONARGAON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200276584',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '7737',
                'bank_id' => '38',
                'bank_branch_name' => 'SUPREME COURT',
                'bank_branch_data' => [
                    'routing_no' => '200276618',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '7738',
                'bank_id' => '38',
                'bank_branch_name' => 'URDU ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200276797',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '7739',
                'bank_id' => '38',
                'bank_branch_name' => 'VIQUARUN NESA NOON SCHOOL',
                'bank_branch_data' => [
                    'routing_no' => '200276889',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '7740',
                'bank_id' => '38',
                'bank_branch_name' => 'WAGE EARNERS CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200276913',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '7741',
                'bank_id' => '38',
                'bank_branch_name' => 'WAPDA BUILDING CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200276971',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '7742',
                'bank_id' => '38',
                'bank_branch_name' => 'WARI',
                'bank_branch_data' => [
                    'routing_no' => '200277004',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '7743',
                'bank_id' => '38',
                'bank_branch_name' => 'AFTABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200280046',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '7744',
                'bank_id' => '38',
                'bank_branch_name' => 'BARAPUKURIA KAILA KHANI',
                'bank_branch_data' => [
                    'routing_no' => '200280167',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '7745',
                'bank_id' => '38',
                'bank_branch_name' => 'BHAVANIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200280259',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '7746',
                'bank_id' => '38',
                'bank_branch_name' => 'BINNAKURI',
                'bank_branch_data' => [
                    'routing_no' => '200280312',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '7747',
                'bank_id' => '38',
                'bank_branch_name' => 'BIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200280341',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '7748',
                'bank_id' => '38',
                'bank_branch_name' => 'BIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200280370',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '7749',
                'bank_id' => '38',
                'bank_branch_name' => 'BIROL',
                'bank_branch_data' => [
                    'routing_no' => '200280404',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '7750',
                'bank_id' => '38',
                'bank_branch_name' => 'CHIRIRBANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200280525',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '7751',
                'bank_id' => '38',
                'bank_branch_name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200280554',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '7752',
                'bank_id' => '38',
                'bank_branch_name' => 'DINAJPUR CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200280709',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '7753',
                'bank_id' => '38',
                'bank_branch_name' => 'FARAKKABAD',
                'bank_branch_data' => [
                    'routing_no' => '200280796',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '7754',
                'bank_id' => '38',
                'bank_branch_name' => 'GHORAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200280820',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '7755',
                'bank_id' => '38',
                'bank_branch_name' => 'HAKIMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200280912',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '7756',
                'bank_id' => '38',
                'bank_branch_name' => 'HUGLI PARA',
                'bank_branch_data' => [
                    'routing_no' => '200280970',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '7757',
                'bank_id' => '38',
                'bank_branch_name' => 'JOYNANDAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200281003',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '7758',
                'bank_id' => '38',
                'bank_branch_name' => 'KACHINIAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200281061',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '7759',
                'bank_id' => '38',
                'bank_branch_name' => 'KAHAROLE',
                'bank_branch_data' => [
                    'routing_no' => '200281090',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '7760',
                'bank_id' => '38',
                'bank_branch_name' => 'KHANSAMA',
                'bank_branch_data' => [
                    'routing_no' => '200281216',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '7761',
                'bank_id' => '38',
                'bank_branch_name' => 'MADHYAPARA HARD ROCK PROJECT',
                'bank_branch_data' => [
                    'routing_no' => '200281337',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '7762',
                'bank_id' => '38',
                'bank_branch_name' => 'MILL ROAD(SETABGANJ)',
                'bank_branch_data' => [
                    'routing_no' => '200281458',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '7763',
                'bank_id' => '38',
                'bank_branch_name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200281632',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '7764',
                'bank_id' => '38',
                'bank_branch_name' => 'OSMANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200281724',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '7765',
                'bank_id' => '38',
                'bank_branch_name' => 'PAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200281753',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '7766',
                'bank_id' => '38',
                'bank_branch_name' => 'PARBATIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200281816',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '7767',
                'bank_id' => '38',
                'bank_branch_name' => 'PHULBARI',
                'bank_branch_data' => [
                    'routing_no' => '200281874',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '7768',
                'bank_id' => '38',
                'bank_branch_name' => 'PULHAT',
                'bank_branch_data' => [
                    'routing_no' => '200281937',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '7769',
                'bank_id' => '38',
                'bank_branch_name' => 'RANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200282057',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '7770',
                'bank_id' => '38',
                'bank_branch_name' => 'SETABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200282178',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '7771',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHID MAHBUB CANTON',
                'bank_branch_data' => [
                    'routing_no' => '200282202',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '7772',
                'bank_id' => '38',
                'bank_branch_name' => 'SHEIKPURA',
                'bank_branch_data' => [
                    'routing_no' => '200282231',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '7773',
                'bank_id' => '38',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200282323',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '7774',
                'bank_id' => '38',
                'bank_branch_name' => 'SUIHARI',
                'bank_branch_data' => [
                    'routing_no' => '200282352',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '7775',
                'bank_id' => '38',
                'bank_branch_name' => 'ALFADANGA',
                'bank_branch_data' => [
                    'routing_no' => '200290049',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '7776',
                'bank_id' => '38',
                'bank_branch_name' => 'BHANGA',
                'bank_branch_data' => [
                    'routing_no' => '200290281',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '7777',
                'bank_id' => '38',
                'bank_branch_name' => 'BISWA ZAKER MANJIL',
                'bank_branch_data' => [
                    'routing_no' => '200290328',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '7778',
                'bank_id' => '38',
                'bank_branch_name' => 'BOALMARI',
                'bank_branch_data' => [
                    'routing_no' => '200290344',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '7779',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAR BHADRASAN',
                'bank_branch_data' => [
                    'routing_no' => '200290436',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '7780',
                'bank_id' => '38',
                'bank_branch_name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200290494',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '7781',
                'bank_id' => '38',
                'bank_branch_name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200290528',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '7782',
                'bank_id' => '38',
                'bank_branch_name' => 'GOALCHAMAT',
                'bank_branch_data' => [
                    'routing_no' => '200290610',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '7783',
                'bank_id' => '38',
                'bank_branch_name' => 'HAJI GANJ',
                'bank_branch_data' => [
                    'routing_no' => '200290702',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '7784',
                'bank_id' => '38',
                'bank_branch_name' => 'HATKRISHNAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200290731',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '7785',
                'bank_id' => '38',
                'bank_branch_name' => 'KAMARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200290881',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '7786',
                'bank_id' => '38',
                'bank_branch_name' => 'KANAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200290915',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '7787',
                'bank_id' => '38',
                'bank_branch_name' => 'KHALILPUR',
                'bank_branch_data' => [
                    'routing_no' => '200290973',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '7788',
                'bank_id' => '38',
                'bank_branch_name' => 'MADHU KHALI UPA-ZILLA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200291064',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '7789',
                'bank_id' => '38',
                'bank_branch_name' => 'MADHUKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200291093',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '7790',
                'bank_id' => '38',
                'bank_branch_name' => 'MOYENDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200291156',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '7791',
                'bank_id' => '38',
                'bank_branch_name' => 'NAGARKANDA',
                'bank_branch_data' => [
                    'routing_no' => '200291185',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '7792',
                'bank_id' => '38',
                'bank_branch_name' => 'SADAR UPAZILA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200291248',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '7793',
                'bank_id' => '38',
                'bank_branch_name' => 'SADARPUR',
                'bank_branch_data' => [
                    'routing_no' => '200291277',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '7794',
                'bank_id' => '38',
                'bank_branch_name' => 'SALTA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200291301',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '7795',
                'bank_id' => '38',
                'bank_branch_name' => 'SHIRGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200291369',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '7796',
                'bank_id' => '38',
                'bank_branch_name' => 'TALMA',
                'bank_branch_data' => [
                    'routing_no' => '200291422',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '7797',
                'bank_id' => '38',
                'bank_branch_name' => 'TEPAKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '200291451',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '7798',
                'bank_id' => '38',
                'bank_branch_name' => 'BAKTERMUNSHI',
                'bank_branch_data' => [
                    'routing_no' => '200300197',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '7799',
                'bank_id' => '38',
                'bank_branch_name' => 'CHHAGALNAIYA',
                'bank_branch_data' => [
                    'routing_no' => '200300313',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '7800',
                'bank_id' => '38',
                'bank_branch_name' => 'DAGANBHUIYAN',
                'bank_branch_data' => [
                    'routing_no' => '200300371',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '7801',
                'bank_id' => '38',
                'bank_branch_name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '200300526',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '7802',
                'bank_id' => '38',
                'bank_branch_name' => 'FULGAZI',
                'bank_branch_data' => [
                    'routing_no' => '200300618',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '7803',
                'bank_id' => '38',
                'bank_branch_name' => 'GUTHUMA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200300676',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '7804',
                'bank_id' => '38',
                'bank_branch_name' => 'ISLAMPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200300739',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '7805',
                'bank_id' => '38',
                'bank_branch_name' => 'LASKARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200300971',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '7806',
                'bank_id' => '38',
                'bank_branch_name' => 'LEMUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200301004',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '7807',
                'bank_id' => '38',
                'bank_branch_name' => 'MATIAGODHA',
                'bank_branch_data' => [
                    'routing_no' => '200301033',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '7808',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHIPAL',
                'bank_branch_data' => [
                    'routing_no' => '200301062',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '7809',
                'bank_id' => '38',
                'bank_branch_name' => 'MUNSHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200301154',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '7810',
                'bank_id' => '38',
                'bank_branch_name' => 'PANCHGACHIA',
                'bank_branch_data' => [
                    'routing_no' => '200301246',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '7811',
                'bank_id' => '38',
                'bank_branch_name' => 'PARSHURAM',
                'bank_branch_data' => [
                    'routing_no' => '200301275',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '7812',
                'bank_id' => '38',
                'bank_branch_name' => 'SADAR UPAZILA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200301338',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '7813',
                'bank_id' => '38',
                'bank_branch_name' => 'SELONIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200301420',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '7814',
                'bank_id' => '38',
                'bank_branch_name' => 'SONAGAZI',
                'bank_branch_data' => [
                    'routing_no' => '200301488',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '7815',
                'bank_id' => '38',
                'bank_branch_name' => 'BHARATKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200320164',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '7816',
                'bank_id' => '38',
                'bank_branch_name' => 'BIRATHAT',
                'bank_branch_data' => [
                    'routing_no' => '200320193',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '7817',
                'bank_id' => '38',
                'bank_branch_name' => 'BONARPARA',
                'bank_branch_data' => [
                    'routing_no' => '200320227',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '7818',
                'bank_id' => '38',
                'bank_branch_name' => 'FASHITALA',
                'bank_branch_data' => [
                    'routing_no' => '200320430',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '7819',
                'bank_id' => '38',
                'bank_branch_name' => 'FULCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200320469',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '7820',
                'bank_id' => '38',
                'bank_branch_name' => 'GAIBANDHA',
                'bank_branch_data' => [
                    'routing_no' => '200320522',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '7821',
                'bank_id' => '38',
                'bank_branch_name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200320580',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '7822',
                'bank_id' => '38',
                'bank_branch_name' => 'KAMARJANI',
                'bank_branch_data' => [
                    'routing_no' => '200320672',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '7823',
                'bank_id' => '38',
                'bank_branch_name' => 'KAMDIA',
                'bank_branch_data' => [
                    'routing_no' => '200320735',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '7824',
                'bank_id' => '38',
                'bank_branch_name' => 'D.B. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200320919',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '7825',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHIMAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200320977',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '7826',
                'bank_id' => '38',
                'bank_branch_name' => 'PALASHBARI',
                'bank_branch_data' => [
                    'routing_no' => '200321097',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '7827',
                'bank_id' => '38',
                'bank_branch_name' => 'PURAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200321189',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '7828',
                'bank_id' => '38',
                'bank_branch_name' => 'SADULLAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200321242',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '7829',
                'bank_id' => '38',
                'bank_branch_name' => 'SAGHATTA',
                'bank_branch_data' => [
                    'routing_no' => '200321271',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '7830',
                'bank_id' => '38',
                'bank_branch_name' => 'SUNDARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200321305',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '7831',
                'bank_id' => '38',
                'bank_branch_name' => 'B.A.R.I.',
                'bank_branch_data' => [
                    'routing_no' => '200330109',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '7832',
                'bank_id' => '38',
                'bank_branch_name' => 'BARMIBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200330138',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '7833',
                'bank_id' => '38',
                'bank_branch_name' => 'BHAWAL JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200330196',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '7834',
                'bank_id' => '38',
                'bank_branch_name' => 'BOF GAZIPUR CANTT',
                'bank_branch_data' => [
                    'routing_no' => '200330259',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '7835',
                'bank_id' => '38',
                'bank_branch_name' => 'BRRI',
                'bank_branch_data' => [
                    'routing_no' => '200330312',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '7836',
                'bank_id' => '38',
                'bank_branch_name' => 'BSCIC I/A',
                'bank_branch_data' => [
                    'routing_no' => '200330341',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '7837',
                'bank_id' => '38',
                'bank_branch_name' => 'BSMR AGR.UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '200330370',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '7838',
                'bank_id' => '38',
                'bank_branch_name' => 'GAZIPUR COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200330583',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '7839',
                'bank_id' => '38',
                'bank_branch_name' => 'GAZIPUR SADAR THANA COMPLEX-2',
                'bank_branch_data' => [
                    'routing_no' => '200330617',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '7840',
                'bank_id' => '38',
                'bank_branch_name' => 'JATIO BISWA BIDYALAYA',
                'bank_branch_data' => [
                    'routing_no' => '200330709',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '7841',
                'bank_id' => '38',
                'bank_branch_name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '200330738',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '7842',
                'bank_id' => '38',
                'bank_branch_name' => 'KALIAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '200330796',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '7843',
                'bank_id' => '38',
                'bank_branch_name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200330820',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '7844',
                'bank_id' => '38',
                'bank_branch_name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '200330888',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '7845',
                'bank_id' => '38',
                'bank_branch_name' => 'PUBAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200331274',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '7846',
                'bank_id' => '38',
                'bank_branch_name' => 'RAJENDRAPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200331337',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '7847',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAFIPUR ANSAR ACADEMY COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200331458',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '7848',
                'bank_id' => '38',
                'bank_branch_name' => 'SINGHOSREE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200331474',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '7849',
                'bank_id' => '38',
                'bank_branch_name' => 'SREEPUR THANA H/Q.',
                'bank_branch_data' => [
                    'routing_no' => '200331511',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '7850',
                'bank_id' => '38',
                'bank_branch_name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200331540',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '7851',
                'bank_id' => '38',
                'bank_branch_name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '200331632',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '7852',
                'bank_id' => '38',
                'bank_branch_name' => 'TONGI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200331661',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '7853',
                'bank_id' => '38',
                'bank_branch_name' => 'BANAGRAM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200350071',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '7854',
                'bank_id' => '38',
                'bank_branch_name' => 'BASHBARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200350118',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '7855',
                'bank_id' => '38',
                'bank_branch_name' => 'BHATIA PARA',
                'bank_branch_data' => [
                    'routing_no' => '200350163',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '7856',
                'bank_id' => '38',
                'bank_branch_name' => 'BOULTALI',
                'bank_branch_data' => [
                    'routing_no' => '200350226',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '7857',
                'bank_id' => '38',
                'bank_branch_name' => 'GHAGORE',
                'bank_branch_data' => [
                    'routing_no' => '200350284',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '7858',
                'bank_id' => '38',
                'bank_branch_name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200350376',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '7859',
                'bank_id' => '38',
                'bank_branch_name' => 'KASHIANI',
                'bank_branch_data' => [
                    'routing_no' => '200350589',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '7860',
                'bank_id' => '38',
                'bank_branch_name' => 'D.C. COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200350705',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '7861',
                'bank_id' => '38',
                'bank_branch_name' => 'MUKSUDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200350734',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '7862',
                'bank_id' => '38',
                'bank_branch_name' => 'PANCHURIA',
                'bank_branch_data' => [
                    'routing_no' => '200350792',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '7863',
                'bank_id' => '38',
                'bank_branch_name' => 'PATGATI',
                'bank_branch_data' => [
                    'routing_no' => '200350826',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '7864',
                'bank_id' => '38',
                'bank_branch_name' => 'TUNGI PARA',
                'bank_branch_data' => [
                    'routing_no' => '200351096',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '7865',
                'bank_id' => '38',
                'bank_branch_name' => 'AJMIRIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200360045',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '7866',
                'bank_id' => '38',
                'bank_branch_name' => 'AUSHKANDI',
                'bank_branch_data' => [
                    'routing_no' => '200360108',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '7867',
                'bank_id' => '38',
                'bank_branch_name' => 'BAHUBAL',
                'bank_branch_data' => [
                    'routing_no' => '200360137',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '7868',
                'bank_id' => '38',
                'bank_branch_name' => 'BANIACHANG',
                'bank_branch_data' => [
                    'routing_no' => '200360166',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '7869',
                'bank_id' => '38',
                'bank_branch_name' => 'CHOWDHURIBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200360287',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '7870',
                'bank_id' => '38',
                'bank_branch_name' => 'CHUNARUGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200360340',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '7871',
                'bank_id' => '38',
                'bank_branch_name' => 'ENAYETGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200360432',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '7872',
                'bank_id' => '38',
                'bank_branch_name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200360616',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '7873',
                'bank_id' => '38',
                'bank_branch_name' => 'KAKAILCHEO',
                'bank_branch_data' => [
                    'routing_no' => '200360737',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '7874',
                'bank_id' => '38',
                'bank_branch_name' => 'LAKHAI',
                'bank_branch_data' => [
                    'routing_no' => '200360858',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '7875',
                'bank_id' => '38',
                'bank_branch_name' => 'MADHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '200360887',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '7876',
                'bank_id' => '38',
                'bank_branch_name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200361099',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '7877',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAYESTAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200361394',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '7878',
                'bank_id' => '38',
                'bank_branch_name' => 'AKKELPUR',
                'bank_branch_data' => [
                    'routing_no' => '200380041',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '7879',
                'bank_id' => '38',
                'bank_branch_name' => 'HATIL',
                'bank_branch_data' => [
                    'routing_no' => '200380346',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '7880',
                'bank_id' => '38',
                'bank_branch_name' => 'JOYPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '200380409',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '7881',
                'bank_id' => '38',
                'bank_branch_name' => 'JOYPURHAT EAST',
                'bank_branch_data' => [
                    'routing_no' => '200380438',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '7882',
                'bank_id' => '38',
                'bank_branch_name' => 'KALAI',
                'bank_branch_data' => [
                    'routing_no' => '200380467',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '7883',
                'bank_id' => '38',
                'bank_branch_name' => 'KHETLAL',
                'bank_branch_data' => [
                    'routing_no' => '200380496',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '7884',
                'bank_id' => '38',
                'bank_branch_name' => 'PANCHBIBI',
                'bank_branch_data' => [
                    'routing_no' => '200380670',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '7885',
                'bank_id' => '38',
                'bank_branch_name' => 'PUNATHAT',
                'bank_branch_data' => [
                    'routing_no' => '200380704',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '7886',
                'bank_id' => '38',
                'bank_branch_name' => 'BAKSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200390107',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '7887',
                'bank_id' => '38',
                'bank_branch_name' => 'BSCIC INDUSTRIAL ESTATE',
                'bank_branch_data' => [
                    'routing_no' => '200390378',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '7888',
                'bank_id' => '38',
                'bank_branch_name' => 'CHAPARKONA',
                'bank_branch_data' => [
                    'routing_no' => '200390431',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '7889',
                'bank_id' => '38',
                'bank_branch_name' => 'DEWANGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200390499',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '7890',
                'bank_id' => '38',
                'bank_branch_name' => 'DEWANGANJ SUGAR MILLS',
                'bank_branch_data' => [
                    'routing_no' => '200390523',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '7891',
                'bank_id' => '38',
                'bank_branch_name' => 'HAZRA BARI',
                'bank_branch_data' => [
                    'routing_no' => '200390736',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '7892',
                'bank_id' => '38',
                'bank_branch_name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200390765',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '7893',
                'bank_id' => '38',
                'bank_branch_name' => 'JAMALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200390857',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '7894',
                'bank_id' => '38',
                'bank_branch_name' => 'JAMALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200390886',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '7895',
                'bank_id' => '38',
                'bank_branch_name' => 'JAMUNA SARKARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '200391001',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '7896',
                'bank_id' => '38',
                'bank_branch_name' => 'BORO MASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200391098',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '7897',
                'bank_id' => '38',
                'bank_branch_name' => 'MADARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200391151',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '7898',
                'bank_id' => '38',
                'bank_branch_name' => 'MEDICAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200391243',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '7899',
                'bank_id' => '38',
                'bank_branch_name' => 'MELANDAH',
                'bank_branch_data' => [
                    'routing_no' => '200391272',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '7900',
                'bank_id' => '38',
                'bank_branch_name' => 'NANDINA',
                'bank_branch_data' => [
                    'routing_no' => '200391306',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '7901',
                'bank_id' => '38',
                'bank_branch_name' => 'SANANDABARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200391456',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '7902',
                'bank_id' => '38',
                'bank_branch_name' => 'SARISHABARI',
                'bank_branch_data' => [
                    'routing_no' => '200391485',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '7903',
                'bank_id' => '38',
                'bank_branch_name' => 'SARISHABARI UPAZILLA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200391519',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '7904',
                'bank_id' => '38',
                'bank_branch_name' => 'SREEPUR KUMARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200391630',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '7905',
                'bank_id' => '38',
                'bank_branch_name' => 'ALPHA MILL GATE',
                'bank_branch_data' => [
                    'routing_no' => '200410045',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '7906',
                'bank_id' => '38',
                'bank_branch_name' => 'B.I.S.E',
                'bank_branch_data' => [
                    'routing_no' => '200410074',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '7907',
                'bank_id' => '38',
                'bank_branch_name' => 'BAGACHARA',
                'bank_branch_data' => [
                    'routing_no' => '200410108',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '7908',
                'bank_id' => '38',
                'bank_branch_name' => 'BAGHERPARA',
                'bank_branch_data' => [
                    'routing_no' => '200410137',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '7909',
                'bank_id' => '38',
                'bank_branch_name' => 'BARI NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200410195',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '7910',
                'bank_id' => '38',
                'bank_branch_name' => 'BASUNDIA',
                'bank_branch_data' => [
                    'routing_no' => '200410229',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '7911',
                'bank_id' => '38',
                'bank_branch_name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '200410287',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '7912',
                'bank_id' => '38',
                'bank_branch_name' => 'BHATPARA',
                'bank_branch_data' => [
                    'routing_no' => '200410379',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '7913',
                'bank_id' => '38',
                'bank_branch_name' => 'CHARAVITA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200410461',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '7914',
                'bank_id' => '38',
                'bank_branch_name' => 'CHINATOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200410524',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '7915',
                'bank_id' => '38',
                'bank_branch_name' => 'CHOWGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200410553',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '7916',
                'bank_id' => '38',
                'bank_branch_name' => 'CHURAMANKATHI',
                'bank_branch_data' => [
                    'routing_no' => '200410582',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '7917',
                'bank_id' => '38',
                'bank_branch_name' => 'DHALAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200410645',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '7918',
                'bank_id' => '38',
                'bank_branch_name' => 'GARIB SHAH SARAK',
                'bank_branch_data' => [
                    'routing_no' => '200410708',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '7919',
                'bank_id' => '38',
                'bank_branch_name' => 'J. CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200410887',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '7920',
                'bank_id' => '38',
                'bank_branch_name' => 'JESSORE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200411002',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '7921',
                'bank_id' => '38',
                'bank_branch_name' => 'JESSORE CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200411060',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '7922',
                'bank_id' => '38',
                'bank_branch_name' => 'JHIKARGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200411099',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '7923',
                'bank_id' => '38',
                'bank_branch_name' => 'KARBALA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200411152',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '7924',
                'bank_id' => '38',
                'bank_branch_name' => 'KESHABPUR',
                'bank_branch_data' => [
                    'routing_no' => '200411215',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '7925',
                'bank_id' => '38',
                'bank_branch_name' => 'KHAJURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200411257',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '7926',
                'bank_id' => '38',
                'bank_branch_name' => 'MONIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200411510',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '7927',
                'bank_id' => '38',
                'bank_branch_name' => 'NARIKEL BARIA',
                'bank_branch_data' => [
                    'routing_no' => '200411578',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '7928',
                'bank_id' => '38',
                'bank_branch_name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '200411631',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '7929',
                'bank_id' => '38',
                'bank_branch_name' => 'PAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200411723',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '7930',
                'bank_id' => '38',
                'bank_branch_name' => 'PURAPARA',
                'bank_branch_data' => [
                    'routing_no' => '200411815',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '7931',
                'bank_id' => '38',
                'bank_branch_name' => 'R.N. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200411844',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '7932',
                'bank_id' => '38',
                'bank_branch_name' => 'RAILGATE',
                'bank_branch_data' => [
                    'routing_no' => '200411907',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '7933',
                'bank_id' => '38',
                'bank_branch_name' => 'RAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200411994',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '7934',
                'bank_id' => '38',
                'bank_branch_name' => 'RUPDIA',
                'bank_branch_data' => [
                    'routing_no' => '200412027',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '7935',
                'bank_id' => '38',
                'bank_branch_name' => 'SAGARDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200412085',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '7936',
                'bank_id' => '38',
                'bank_branch_name' => 'SALUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200412119',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '7937',
                'bank_id' => '38',
                'bank_branch_name' => 'SARSHA',
                'bank_branch_data' => [
                    'routing_no' => '200412148',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '7938',
                'bank_id' => '38',
                'bank_branch_name' => 'TRIMOHINI',
                'bank_branch_data' => [
                    'routing_no' => '200412230',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '7939',
                'bank_id' => '38',
                'bank_branch_name' => 'ULASHI',
                'bank_branch_data' => [
                    'routing_no' => '200412269',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '7940',
                'bank_id' => '38',
                'bank_branch_name' => 'JHAL.COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200420280',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '7941',
                'bank_id' => '38',
                'bank_branch_name' => 'KATHALIA',
                'bank_branch_data' => [
                    'routing_no' => '200420372',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '7942',
                'bank_id' => '38',
                'bank_branch_name' => 'MOLLARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200420406',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '7943',
                'bank_id' => '38',
                'bank_branch_name' => 'NACHAN MAHAL HAT',
                'bank_branch_data' => [
                    'routing_no' => '200420464',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '7944',
                'bank_id' => '38',
                'bank_branch_name' => 'NALCHITY',
                'bank_branch_data' => [
                    'routing_no' => '200420493',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '7945',
                'bank_id' => '38',
                'bank_branch_name' => 'RAJAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200420556',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '7946',
                'bank_id' => '38',
                'bank_branch_name' => 'BARO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200440073',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '7947',
                'bank_id' => '38',
                'bank_branch_name' => 'BORODOPADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200440286',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '7948',
                'bank_id' => '38',
                'bank_branch_name' => 'GARAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200440402',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '7949',
                'bank_id' => '38',
                'bank_branch_name' => 'HARINAKUNDA',
                'bank_branch_data' => [
                    'routing_no' => '200440499',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '7950',
                'bank_id' => '38',
                'bank_branch_name' => 'HATGOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200440552',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '7951',
                'bank_id' => '38',
                'bank_branch_name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '200440644',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '7952',
                'bank_id' => '38',
                'bank_branch_name' => 'ARAPPUR',
                'bank_branch_data' => [
                    'routing_no' => '200440673',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '7953',
                'bank_id' => '38',
                'bank_branch_name' => 'KALIGANJ-2',
                'bank_branch_data' => [
                    'routing_no' => '200440828',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '7954',
                'bank_id' => '38',
                'bank_branch_name' => 'KOLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200440978',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '7955',
                'bank_id' => '38',
                'bank_branch_name' => 'KOTCHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200441001',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '7956',
                'bank_id' => '38',
                'bank_branch_name' => 'MOBARAKGANJ SUGAR MILLS',
                'bank_branch_data' => [
                    'routing_no' => '200441030',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '7957',
                'bank_id' => '38',
                'bank_branch_name' => 'MODHUPUR',
                'bank_branch_data' => [
                    'routing_no' => '200441069',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '7958',
                'bank_id' => '38',
                'bank_branch_name' => 'MOHESHPUR',
                'bank_branch_data' => [
                    'routing_no' => '200441098',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '7959',
                'bank_id' => '38',
                'bank_branch_name' => 'RABINARIKAL BARIA',
                'bank_branch_data' => [
                    'routing_no' => '200441122',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '7960',
                'bank_id' => '38',
                'bank_branch_name' => 'SAILKUPA',
                'bank_branch_data' => [
                    'routing_no' => '200441180',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '7961',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAEIKHPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200441243',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '7962',
                'bank_id' => '38',
                'bank_branch_name' => 'DIGHINALA',
                'bank_branch_data' => [
                    'routing_no' => '200460040',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '7963',
                'bank_id' => '38',
                'bank_branch_name' => 'KHAGRACHARI',
                'bank_branch_data' => [
                    'routing_no' => '200460079',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '7964',
                'bank_id' => '38',
                'bank_branch_name' => 'LAXMICHARI',
                'bank_branch_data' => [
                    'routing_no' => '200460132',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '7965',
                'bank_id' => '38',
                'bank_branch_name' => 'MAHALCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200460161',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '7966',
                'bank_id' => '38',
                'bank_branch_name' => 'MANIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200460190',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '7967',
                'bank_id' => '38',
                'bank_branch_name' => 'MATIRANGA',
                'bank_branch_data' => [
                    'routing_no' => '200460224',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '7968',
                'bank_id' => '38',
                'bank_branch_name' => 'PANCHARI',
                'bank_branch_data' => [
                    'routing_no' => '200460282',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '7969',
                'bank_id' => '38',
                'bank_branch_name' => 'RAMGARH',
                'bank_branch_data' => [
                    'routing_no' => '200460316',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '7970',
                'bank_id' => '38',
                'bank_branch_name' => 'BANIAKHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200470164',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '7971',
                'bank_id' => '38',
                'bank_branch_name' => 'BATIAGHATA',
                'bank_branch_data' => [
                    'routing_no' => '200470319',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '7972',
                'bank_id' => '38',
                'bank_branch_name' => 'BOYRA',
                'bank_branch_data' => [
                    'routing_no' => '200470401',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '7973',
                'bank_id' => '38',
                'bank_branch_name' => 'CABLE SHILPA',
                'bank_branch_data' => [
                    'routing_no' => '200470469',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '7974',
                'bank_id' => '38',
                'bank_branch_name' => 'CHALNA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200470498',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '7975',
                'bank_id' => '38',
                'bank_branch_name' => 'CUSTOM HOUSE',
                'bank_branch_data' => [
                    'routing_no' => '200470614',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '7976',
                'bank_id' => '38',
                'bank_branch_name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200470706',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '7977',
                'bank_id' => '38',
                'bank_branch_name' => 'DAULATPUR COLLEGE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200470735',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '7978',
                'bank_id' => '38',
                'bank_branch_name' => 'DIGHALIA',
                'bank_branch_data' => [
                    'routing_no' => '200470764',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '7979',
                'bank_id' => '38',
                'bank_branch_name' => 'DUMURIA',
                'bank_branch_data' => [
                    'routing_no' => '200470793',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '7980',
                'bank_id' => '38',
                'bank_branch_name' => 'FULBARI GATE',
                'bank_branch_data' => [
                    'routing_no' => '200470856',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '7981',
                'bank_id' => '38',
                'bank_branch_name' => 'K.D.A. NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '200471213',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '7982',
                'bank_id' => '38',
                'bank_branch_name' => 'KAZDIA',
                'bank_branch_data' => [
                    'routing_no' => '200471363',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '7983',
                'bank_id' => '38',
                'bank_branch_name' => 'KHALISHPUR',
                'bank_branch_data' => [
                    'routing_no' => '200471455',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '7984',
                'bank_id' => '38',
                'bank_branch_name' => 'KHULNA CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200471600',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '7985',
                'bank_id' => '38',
                'bank_branch_name' => 'KHULNA SHIPYARD',
                'bank_branch_data' => [
                    'routing_no' => '200471668',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '7986',
                'bank_id' => '38',
                'bank_branch_name' => 'KOYRA',
                'bank_branch_data' => [
                    'routing_no' => '200471789',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '7987',
                'bank_id' => '38',
                'bank_branch_name' => 'PAIKGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200472083',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '7988',
                'bank_id' => '38',
                'bank_branch_name' => 'PHULTALA',
                'bank_branch_data' => [
                    'routing_no' => '200472146',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '7989',
                'bank_id' => '38',
                'bank_branch_name' => 'SOUTH CENTRAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200472296',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '7990',
                'bank_id' => '38',
                'bank_branch_name' => 'SHAHPUR',
                'bank_branch_data' => [
                    'routing_no' => '200472441',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '7991',
                'bank_id' => '38',
                'bank_branch_name' => 'SIR IQBAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200472591',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '7992',
                'bank_id' => '38',
                'bank_branch_name' => 'TEROKHADA',
                'bank_branch_data' => [
                    'routing_no' => '200472654',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '7993',
                'bank_id' => '38',
                'bank_branch_name' => 'AUSTAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200480075',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '7994',
                'bank_id' => '38',
                'bank_branch_name' => 'BAJITPUR',
                'bank_branch_data' => [
                    'routing_no' => '200480109',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '7995',
                'bank_id' => '38',
                'bank_branch_name' => 'BHAIRAB',
                'bank_branch_data' => [
                    'routing_no' => '200480196',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '7996',
                'bank_id' => '38',
                'bank_branch_name' => 'CHHAYSUTI',
                'bank_branch_data' => [
                    'routing_no' => '200480288',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '7997',
                'bank_id' => '38',
                'bank_branch_name' => 'DOMRA KANDA',
                'bank_branch_data' => [
                    'routing_no' => '200480312',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '7998',
                'bank_id' => '38',
                'bank_branch_name' => 'HOSSAINPUR',
                'bank_branch_data' => [
                    'routing_no' => '200480404',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '7999',
                'bank_id' => '38',
                'bank_branch_name' => 'ITNA',
                'bank_branch_data' => [
                    'routing_no' => '200480433',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '8000',
                'bank_id' => '38',
                'bank_branch_name' => 'KALIA CHAPRA',
                'bank_branch_data' => [
                    'routing_no' => '200480491',
                ],
                'enabled' => true,
            ],
        ];
    }
}
