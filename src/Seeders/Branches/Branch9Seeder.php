<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch9Seeder extends Seeder
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
                'id' => '8001',
                'bank_id' => '38',
                'name' => 'KARIMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200480554',
                ],
                'enabled' => true,
            ],
            1 => [
                'id' => '8002',
                'bank_id' => '38',
                'name' => 'KATIADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200480617',
                ],
                'enabled' => true,
            ],
            2 => [
                'id' => '8003',
                'bank_id' => '38',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200480675',
                ],
                'enabled' => true,
            ],
            3 => [
                'id' => '8004',
                'bank_id' => '38',
                'name' => 'KULIAR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '200480738',
                ],
                'enabled' => true,
            ],
            4 => [
                'id' => '8005',
                'bank_id' => '38',
                'name' => 'MITAMAIN',
                'bank_branch_data' => [
                    'routing_no' => '200480941',
                ],
                'enabled' => true,
            ],
            5 => [
                'id' => '8006',
                'bank_id' => '38',
                'name' => 'NEAMATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200480970',
                ],
                'enabled' => true,
            ],
            6 => [
                'id' => '8007',
                'bank_id' => '38',
                'name' => 'NIKLI',
                'bank_branch_data' => [
                    'routing_no' => '200481003',
                ],
                'enabled' => true,
            ],
            7 => [
                'id' => '8008',
                'bank_id' => '38',
                'name' => 'PAKUNDIA',
                'bank_branch_data' => [
                    'routing_no' => '200481061',
                ],
                'enabled' => true,
            ],
            8 => [
                'id' => '8009',
                'bank_id' => '38',
                'name' => 'TARAIL',
                'bank_branch_data' => [
                    'routing_no' => '200481153',
                ],
                'enabled' => true,
            ],
            9 => [
                'id' => '8010',
                'bank_id' => '38',
                'name' => 'BHURUNGAMARI',
                'bank_branch_data' => [
                    'routing_no' => '200490102',
                ],
                'enabled' => true,
            ],
            10 => [
                'id' => '8011',
                'bank_id' => '38',
                'name' => 'CHILMARI',
                'bank_branch_data' => [
                    'routing_no' => '200490131',
                ],
                'enabled' => true,
            ],
            11 => [
                'id' => '8012',
                'bank_id' => '38',
                'name' => 'FULBARI',
                'bank_branch_data' => [
                    'routing_no' => '200490199',
                ],
                'enabled' => true,
            ],
            12 => [
                'id' => '8013',
                'bank_id' => '38',
                'name' => 'KURIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200490407',
                ],
                'enabled' => true,
            ],
            13 => [
                'id' => '8014',
                'bank_id' => '38',
                'name' => 'NAGESWARI',
                'bank_branch_data' => [
                    'routing_no' => '200490465',
                ],
                'enabled' => true,
            ],
            14 => [
                'id' => '8015',
                'bank_id' => '38',
                'name' => 'RAJARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200490586',
                ],
                'enabled' => true,
            ],
            15 => [
                'id' => '8016',
                'bank_id' => '38',
                'name' => 'RAJIBPUR',
                'bank_branch_data' => [
                    'routing_no' => '200490610',
                ],
                'enabled' => true,
            ],
            16 => [
                'id' => '8017',
                'bank_id' => '38',
                'name' => 'ROWMARI',
                'bank_branch_data' => [
                    'routing_no' => '200490649',
                ],
                'enabled' => true,
            ],
            17 => [
                'id' => '8018',
                'bank_id' => '38',
                'name' => 'ULIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200490702',
                ],
                'enabled' => true,
            ],
            18 => [
                'id' => '8019',
                'bank_id' => '38',
                'name' => 'AMLA',
                'bank_branch_data' => [
                    'routing_no' => '200500100',
                ],
                'enabled' => true,
            ],
            19 => [
                'id' => '8020',
                'bank_id' => '38',
                'name' => 'BHERAMARA',
                'bank_branch_data' => [
                    'routing_no' => '200500289',
                ],
                'enabled' => true,
            ],
            20 => [
                'id' => '8021',
                'bank_id' => '38',
                'name' => 'BHERAMARA POWER STATION',
                'bank_branch_data' => [
                    'routing_no' => '200500313',
                ],
                'enabled' => true,
            ],
            21 => [
                'id' => '8022',
                'bank_id' => '38',
                'name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200500371',
                ],
                'enabled' => true,
            ],
            22 => [
                'id' => '8023',
                'bank_id' => '38',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200500463',
                ],
                'enabled' => true,
            ],
            23 => [
                'id' => '8024',
                'bank_id' => '38',
                'name' => 'DUHAKULA',
                'bank_branch_data' => [
                    'routing_no' => '200500492',
                ],
                'enabled' => true,
            ],
            24 => [
                'id' => '8025',
                'bank_id' => '38',
                'name' => 'EKTARPURHAT',
                'bank_branch_data' => [
                    'routing_no' => '200500526',
                ],
                'enabled' => true,
            ],
            25 => [
                'id' => '8026',
                'bank_id' => '38',
                'name' => 'HALSHA',
                'bank_branch_data' => [
                    'routing_no' => '200500584',
                ],
                'enabled' => true,
            ],
            26 => [
                'id' => '8027',
                'bank_id' => '38',
                'name' => 'HARINARAYANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200500618',
                ],
                'enabled' => true,
            ],
            27 => [
                'id' => '8028',
                'bank_id' => '38',
                'name' => 'KAYA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200500768',
                ],
                'enabled' => true,
            ],
            28 => [
                'id' => '8029',
                'bank_id' => '38',
                'name' => 'KHOKSA',
                'bank_branch_data' => [
                    'routing_no' => '200500821',
                ],
                'enabled' => true,
            ],
            29 => [
                'id' => '8030',
                'bank_id' => '38',
                'name' => 'KUMARKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200500889',
                ],
                'enabled' => true,
            ],
            30 => [
                'id' => '8031',
                'bank_id' => '38',
                'name' => 'KUMARKHALI UPAZILLA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200500913',
                ],
                'enabled' => true,
            ],
            31 => [
                'id' => '8032',
                'bank_id' => '38',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '200500942',
                ],
                'enabled' => true,
            ],
            32 => [
                'id' => '8033',
                'bank_id' => '38',
                'name' => 'KUSHTIA SUGAR MILLS',
                'bank_branch_data' => [
                    'routing_no' => '200501004',
                ],
                'enabled' => true,
            ],
            33 => [
                'id' => '8034',
                'bank_id' => '38',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '200501062',
                ],
                'enabled' => true,
            ],
            34 => [
                'id' => '8035',
                'bank_id' => '38',
                'name' => 'MODHUPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200501091',
                ],
                'enabled' => true,
            ],
            35 => [
                'id' => '8036',
                'bank_id' => '38',
                'name' => 'N.S. ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200501183',
                ],
                'enabled' => true,
            ],
            36 => [
                'id' => '8037',
                'bank_id' => '38',
                'name' => 'NANDALALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200501217',
                ],
                'enabled' => true,
            ],
            37 => [
                'id' => '8038',
                'bank_id' => '38',
                'name' => 'PASHCHIM ABDALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200501309',
                ],
                'enabled' => true,
            ],
            38 => [
                'id' => '8039',
                'bank_id' => '38',
                'name' => 'PORADAH',
                'bank_branch_data' => [
                    'routing_no' => '200501367',
                ],
                'enabled' => true,
            ],
            39 => [
                'id' => '8040',
                'bank_id' => '38',
                'name' => 'SHOMOSHPUR',
                'bank_branch_data' => [
                    'routing_no' => '200501512',
                ],
                'enabled' => true,
            ],
            40 => [
                'id' => '8041',
                'bank_id' => '38',
                'name' => 'BHABANIGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200510103',
                ],
                'enabled' => true,
            ],
            41 => [
                'id' => '8042',
                'bank_id' => '38',
                'name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200510190',
                ],
                'enabled' => true,
            ],
            42 => [
                'id' => '8043',
                'bank_id' => '38',
                'name' => 'CHAR ALEXANDER',
                'bank_branch_data' => [
                    'routing_no' => '200510224',
                ],
                'enabled' => true,
            ],
            43 => [
                'id' => '8044',
                'bank_id' => '38',
                'name' => 'CHAR LAWRENCE',
                'bank_branch_data' => [
                    'routing_no' => '200510316',
                ],
                'enabled' => true,
            ],
            44 => [
                'id' => '8045',
                'bank_id' => '38',
                'name' => 'CHAR SITA',
                'bank_branch_data' => [
                    'routing_no' => '200510345',
                ],
                'enabled' => true,
            ],
            45 => [
                'id' => '8046',
                'bank_id' => '38',
                'name' => 'HAIDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200510529',
                ],
                'enabled' => true,
            ],
            46 => [
                'id' => '8047',
                'bank_id' => '38',
                'name' => 'KAMALNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200510666',
                ],
                'enabled' => true,
            ],
            47 => [
                'id' => '8048',
                'bank_id' => '38',
                'name' => 'KANCHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200510679',
                ],
                'enabled' => true,
            ],
            48 => [
                'id' => '8049',
                'bank_id' => '38',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200510732',
                ],
                'enabled' => true,
            ],
            49 => [
                'id' => '8050',
                'bank_id' => '38',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200510974',
                ],
                'enabled' => true,
            ],
            50 => [
                'id' => '8051',
                'bank_id' => '38',
                'name' => 'RAKHALIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200511007',
                ],
                'enabled' => true,
            ],
            51 => [
                'id' => '8052',
                'bank_id' => '38',
                'name' => 'RAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200511036',
                ],
                'enabled' => true,
            ],
            52 => [
                'id' => '8053',
                'bank_id' => '38',
                'name' => 'ADITMARI',
                'bank_branch_data' => [
                    'routing_no' => '200520043',
                ],
                'enabled' => true,
            ],
            53 => [
                'id' => '8054',
                'bank_id' => '38',
                'name' => 'KAKINA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200520069',
                ],
                'enabled' => true,
            ],
            54 => [
                'id' => '8055',
                'bank_id' => '38',
                'name' => 'BARABARIHAT',
                'bank_branch_data' => [
                    'routing_no' => '200520072',
                ],
                'enabled' => true,
            ],
            55 => [
                'id' => '8056',
                'bank_id' => '38',
                'name' => 'BURIMARI',
                'bank_branch_data' => [
                    'routing_no' => '200520193',
                ],
                'enabled' => true,
            ],
            56 => [
                'id' => '8057',
                'bank_id' => '38',
                'name' => 'HATIBANDA',
                'bank_branch_data' => [
                    'routing_no' => '200520401',
                ],
                'enabled' => true,
            ],
            57 => [
                'id' => '8058',
                'bank_id' => '38',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200520430',
                ],
                'enabled' => true,
            ],
            58 => [
                'id' => '8059',
                'bank_id' => '38',
                'name' => 'LALMONIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200520469',
                ],
                'enabled' => true,
            ],
            59 => [
                'id' => '8060',
                'bank_id' => '38',
                'name' => 'MOHISHKHOCHA',
                'bank_branch_data' => [
                    'routing_no' => '200520522',
                ],
                'enabled' => true,
            ],
            60 => [
                'id' => '8061',
                'bank_id' => '38',
                'name' => 'PATGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200520580',
                ],
                'enabled' => true,
            ],
            61 => [
                'id' => '8062',
                'bank_id' => '38',
                'name' => 'CHARMUGURIA',
                'bank_branch_data' => [
                    'routing_no' => '200540131',
                ],
                'enabled' => true,
            ],
            62 => [
                'id' => '8063',
                'bank_id' => '38',
                'name' => 'DATTAPARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200540160',
                ],
                'enabled' => true,
            ],
            63 => [
                'id' => '8064',
                'bank_id' => '38',
                'name' => 'KALKINI',
                'bank_branch_data' => [
                    'routing_no' => '200540281',
                ],
                'enabled' => true,
            ],
            64 => [
                'id' => '8065',
                'bank_id' => '38',
                'name' => 'KULPADDI',
                'bank_branch_data' => [
                    'routing_no' => '200540344',
                ],
                'enabled' => true,
            ],
            65 => [
                'id' => '8066',
                'bank_id' => '38',
                'name' => 'PAURASHAVA',
                'bank_branch_data' => [
                    'routing_no' => '200540373',
                ],
                'enabled' => true,
            ],
            66 => [
                'id' => '8067',
                'bank_id' => '38',
                'name' => 'MADARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200540407',
                ],
                'enabled' => true,
            ],
            67 => [
                'id' => '8068',
                'bank_id' => '38',
                'name' => 'MILL GATE',
                'bank_branch_data' => [
                    'routing_no' => '200540528',
                ],
                'enabled' => true,
            ],
            68 => [
                'id' => '8069',
                'bank_id' => '38',
                'name' => 'RAJOIR',
                'bank_branch_data' => [
                    'routing_no' => '200540649',
                ],
                'enabled' => true,
            ],
            69 => [
                'id' => '8070',
                'bank_id' => '38',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '200540702',
                ],
                'enabled' => true,
            ],
            70 => [
                'id' => '8071',
                'bank_id' => '38',
                'name' => 'TAKERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200540760',
                ],
                'enabled' => true,
            ],
            71 => [
                'id' => '8072',
                'bank_id' => '38',
                'name' => 'BUNAGATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200550255',
                ],
                'enabled' => true,
            ],
            72 => [
                'id' => '8073',
                'bank_id' => '38',
                'name' => 'PURATAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200550497',
                ],
                'enabled' => true,
            ],
            73 => [
                'id' => '8074',
                'bank_id' => '38',
                'name' => 'MAGURA',
                'bank_branch_data' => [
                    'routing_no' => '200550550',
                ],
                'enabled' => true,
            ],
            74 => [
                'id' => '8075',
                'bank_id' => '38',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '200550613',
                ],
                'enabled' => true,
            ],
            75 => [
                'id' => '8076',
                'bank_id' => '38',
                'name' => 'NATUN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200550705',
                ],
                'enabled' => true,
            ],
            76 => [
                'id' => '8077',
                'bank_id' => '38',
                'name' => 'SHALIKHA',
                'bank_branch_data' => [
                    'routing_no' => '200550884',
                ],
                'enabled' => true,
            ],
            77 => [
                'id' => '8078',
                'bank_id' => '38',
                'name' => 'SREEPUR',
                'bank_branch_data' => [
                    'routing_no' => '200550976',
                ],
                'enabled' => true,
            ],
            78 => [
                'id' => '8079',
                'bank_id' => '38',
                'name' => 'BALIRTEK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200560108',
                ],
                'enabled' => true,
            ],
            79 => [
                'id' => '8080',
                'bank_id' => '38',
                'name' => 'CHANDAHAR',
                'bank_branch_data' => [
                    'routing_no' => '200560195',
                ],
                'enabled' => true,
            ],
            80 => [
                'id' => '8081',
                'bank_id' => '38',
                'name' => 'DARAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200560258',
                ],
                'enabled' => true,
            ],
            81 => [
                'id' => '8082',
                'bank_id' => '38',
                'name' => 'DAULATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200560287',
                ],
                'enabled' => true,
            ],
            82 => [
                'id' => '8083',
                'bank_id' => '38',
                'name' => 'GHIOR',
                'bank_branch_data' => [
                    'routing_no' => '200560379',
                ],
                'enabled' => true,
            ],
            83 => [
                'id' => '8084',
                'bank_id' => '38',
                'name' => 'HARIRAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200560432',
                ],
                'enabled' => true,
            ],
            84 => [
                'id' => '8085',
                'bank_id' => '38',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200560616',
                ],
                'enabled' => true,
            ],
            85 => [
                'id' => '8086',
                'bank_id' => '38',
                'name' => 'MANIKGANJ UPAZILA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200560645',
                ],
                'enabled' => true,
            ],
            86 => [
                'id' => '8087',
                'bank_id' => '38',
                'name' => 'SATURIA',
                'bank_branch_data' => [
                    'routing_no' => '200560766',
                ],
                'enabled' => true,
            ],
            87 => [
                'id' => '8088',
                'bank_id' => '38',
                'name' => 'SHIBALAYA',
                'bank_branch_data' => [
                    'routing_no' => '200560795',
                ],
                'enabled' => true,
            ],
            88 => [
                'id' => '8089',
                'bank_id' => '38',
                'name' => 'SINGAIR',
                'bank_branch_data' => [
                    'routing_no' => '200560829',
                ],
                'enabled' => true,
            ],
            89 => [
                'id' => '8090',
                'bank_id' => '38',
                'name' => 'AMJHUPI',
                'bank_branch_data' => [
                    'routing_no' => '200570048',
                ],
                'enabled' => true,
            ],
            90 => [
                'id' => '8091',
                'bank_id' => '38',
                'name' => 'GANGNI',
                'bank_branch_data' => [
                    'routing_no' => '200570222',
                ],
                'enabled' => true,
            ],
            91 => [
                'id' => '8092',
                'bank_id' => '38',
                'name' => 'GANGNI THANA PARISAD',
                'bank_branch_data' => [
                    'routing_no' => '200570251',
                ],
                'enabled' => true,
            ],
            92 => [
                'id' => '8093',
                'bank_id' => '38',
                'name' => 'GARADOB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200570280',
                ],
                'enabled' => true,
            ],
            93 => [
                'id' => '8094',
                'bank_id' => '38',
                'name' => 'JOREPUKURIA',
                'bank_branch_data' => [
                    'routing_no' => '200570314',
                ],
                'enabled' => true,
            ],
            94 => [
                'id' => '8095',
                'bank_id' => '38',
                'name' => 'MEHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '200570372',
                ],
                'enabled' => true,
            ],
            95 => [
                'id' => '8096',
                'bank_id' => '38',
                'name' => 'MEHERPUR COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200570406',
                ],
                'enabled' => true,
            ],
            96 => [
                'id' => '8097',
                'bank_id' => '38',
                'name' => 'MUJIB NAGAR UPAZILLA',
                'bank_branch_data' => [
                    'routing_no' => '200570493',
                ],
                'enabled' => true,
            ],
            97 => [
                'id' => '8098',
                'bank_id' => '38',
                'name' => 'BARALEKHA',
                'bank_branch_data' => [
                    'routing_no' => '200580104',
                ],
                'enabled' => true,
            ],
            98 => [
                'id' => '8099',
                'bank_id' => '38',
                'name' => 'BHAIRABGONJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200580162',
                ],
                'enabled' => true,
            ],
            99 => [
                'id' => '8100',
                'bank_id' => '38',
                'name' => 'CHADNIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200580317',
                ],
                'enabled' => true,
            ],
            100 => [
                'id' => '8101',
                'bank_id' => '38',
                'name' => 'CHANDGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200580346',
                ],
                'enabled' => true,
            ],
            101 => [
                'id' => '8102',
                'bank_id' => '38',
                'name' => 'SADAR UPAZILA',
                'bank_branch_data' => [
                    'routing_no' => '200580467',
                ],
                'enabled' => true,
            ],
            102 => [
                'id' => '8103',
                'bank_id' => '38',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '200580520',
                ],
                'enabled' => true,
            ],
            103 => [
                'id' => '8104',
                'bank_id' => '38',
                'name' => 'JURI',
                'bank_branch_data' => [
                    'routing_no' => '200580670',
                ],
                'enabled' => true,
            ],
            104 => [
                'id' => '8105',
                'bank_id' => '38',
                'name' => 'KADAMHATA',
                'bank_branch_data' => [
                    'routing_no' => '200580704',
                ],
                'enabled' => true,
            ],
            105 => [
                'id' => '8106',
                'bank_id' => '38',
                'name' => 'KAMALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200580762',
                ],
                'enabled' => true,
            ],
            106 => [
                'id' => '8107',
                'bank_id' => '38',
                'name' => 'KAMALPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200580791',
                ],
                'enabled' => true,
            ],
            107 => [
                'id' => '8108',
                'bank_id' => '38',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '200580946',
                ],
                'enabled' => true,
            ],
            108 => [
                'id' => '8109',
                'bank_id' => '38',
                'name' => 'COURT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200580975',
                ],
                'enabled' => true,
            ],
            109 => [
                'id' => '8110',
                'bank_id' => '38',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200581187',
                ],
                'enabled' => true,
            ],
            110 => [
                'id' => '8111',
                'bank_id' => '38',
                'name' => 'MUNSHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200581240',
                ],
                'enabled' => true,
            ],
            111 => [
                'id' => '8112',
                'bank_id' => '38',
                'name' => 'PHULERTAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200581332',
                ],
                'enabled' => true,
            ],
            112 => [
                'id' => '8113',
                'bank_id' => '38',
                'name' => 'RAJNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200581390',
                ],
                'enabled' => true,
            ],
            113 => [
                'id' => '8114',
                'bank_id' => '38',
                'name' => 'SARKER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200581482',
                ],
                'enabled' => true,
            ],
            114 => [
                'id' => '8115',
                'bank_id' => '38',
                'name' => 'SATGAON',
                'bank_branch_data' => [
                    'routing_no' => '200581516',
                ],
                'enabled' => true,
            ],
            115 => [
                'id' => '8116',
                'bank_id' => '38',
                'name' => 'SHABAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '200581545',
                ],
                'enabled' => true,
            ],
            116 => [
                'id' => '8117',
                'bank_id' => '38',
                'name' => 'SHAMSHER NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200581608',
                ],
                'enabled' => true,
            ],
            117 => [
                'id' => '8118',
                'bank_id' => '38',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '200581729',
                ],
                'enabled' => true,
            ],
            118 => [
                'id' => '8119',
                'bank_id' => '38',
                'name' => 'TARAPASHA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200581758',
                ],
                'enabled' => true,
            ],
            119 => [
                'id' => '8120',
                'bank_id' => '38',
                'name' => 'BALURCHAR',
                'bank_branch_data' => [
                    'routing_no' => '200590165',
                ],
                'enabled' => true,
            ],
            120 => [
                'id' => '8121',
                'bank_id' => '38',
                'name' => 'BASAIL',
                'bank_branch_data' => [
                    'routing_no' => '200590194',
                ],
                'enabled' => true,
            ],
            121 => [
                'id' => '8122',
                'bank_id' => '38',
                'name' => 'BHABER CHAR',
                'bank_branch_data' => [
                    'routing_no' => '200590286',
                ],
                'enabled' => true,
            ],
            122 => [
                'id' => '8123',
                'bank_id' => '38',
                'name' => 'DIGHALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200590402',
                ],
                'enabled' => true,
            ],
            123 => [
                'id' => '8124',
                'bank_id' => '38',
                'name' => 'GAZARIA',
                'bank_branch_data' => [
                    'routing_no' => '200590460',
                ],
                'enabled' => true,
            ],
            124 => [
                'id' => '8125',
                'bank_id' => '38',
                'name' => 'HALDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200590523',
                ],
                'enabled' => true,
            ],
            125 => [
                'id' => '8126',
                'bank_id' => '38',
                'name' => 'KEYAIN',
                'bank_branch_data' => [
                    'routing_no' => '200590794',
                ],
                'enabled' => true,
            ],
            126 => [
                'id' => '8127',
                'bank_id' => '38',
                'name' => 'MAOWA',
                'bank_branch_data' => [
                    'routing_no' => '200590910',
                ],
                'enabled' => true,
            ],
            127 => [
                'id' => '8128',
                'bank_id' => '38',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200591030',
                ],
                'enabled' => true,
            ],
            128 => [
                'id' => '8129',
                'bank_id' => '38',
                'name' => 'REKABI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200591214',
                ],
                'enabled' => true,
            ],
            129 => [
                'id' => '8130',
                'bank_id' => '38',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200591243',
                ],
                'enabled' => true,
            ],
            130 => [
                'id' => '8131',
                'bank_id' => '38',
                'name' => 'SHEKHAR NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200591306',
                ],
                'enabled' => true,
            ],
            131 => [
                'id' => '8132',
                'bank_id' => '38',
                'name' => 'SIRAJDHI KHAN',
                'bank_branch_data' => [
                    'routing_no' => '200591393',
                ],
                'enabled' => true,
            ],
            132 => [
                'id' => '8133',
                'bank_id' => '38',
                'name' => 'SREENAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200591427',
                ],
                'enabled' => true,
            ],
            133 => [
                'id' => '8134',
                'bank_id' => '38',
                'name' => 'SUKHBAS PUR',
                'bank_branch_data' => [
                    'routing_no' => '200591485',
                ],
                'enabled' => true,
            ],
            134 => [
                'id' => '8135',
                'bank_id' => '38',
                'name' => 'TALTALA',
                'bank_branch_data' => [
                    'routing_no' => '200591519',
                ],
                'enabled' => true,
            ],
            135 => [
                'id' => '8136',
                'bank_id' => '38',
                'name' => 'TONGI BARI',
                'bank_branch_data' => [
                    'routing_no' => '200591548',
                ],
                'enabled' => true,
            ],
            136 => [
                'id' => '8137',
                'bank_id' => '38',
                'name' => 'ASSIM BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200610108',
                ],
                'enabled' => true,
            ],
            137 => [
                'id' => '8138',
                'bank_id' => '38',
                'name' => 'JATIO KABI KAZI NAZRUL ISLAM UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '200610140',
                ],
                'enabled' => true,
            ],
            138 => [
                'id' => '8139',
                'bank_id' => '38',
                'name' => 'BALIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200610229',
                ],
                'enabled' => true,
            ],
            139 => [
                'id' => '8140',
                'bank_id' => '38',
                'name' => 'BHALUKA',
                'bank_branch_data' => [
                    'routing_no' => '200610311',
                ],
                'enabled' => true,
            ],
            140 => [
                'id' => '8141',
                'bank_id' => '38',
                'name' => 'BINA',
                'bank_branch_data' => [
                    'routing_no' => '200610340',
                ],
                'enabled' => true,
            ],
            141 => [
                'id' => '8142',
                'bank_id' => '38',
                'name' => 'SHAMBHUGONJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200610524',
                ],
                'enabled' => true,
            ],
            142 => [
                'id' => '8143',
                'bank_id' => '38',
                'name' => 'DHUBAURA',
                'bank_branch_data' => [
                    'routing_no' => '200610858',
                ],
                'enabled' => true,
            ],
            143 => [
                'id' => '8144',
                'bank_id' => '38',
                'name' => 'FULBARIA',
                'bank_branch_data' => [
                    'routing_no' => '200610940',
                ],
                'enabled' => true,
            ],
            144 => [
                'id' => '8145',
                'bank_id' => '38',
                'name' => 'FULPUR',
                'bank_branch_data' => [
                    'routing_no' => '200610979',
                ],
                'enabled' => true,
            ],
            145 => [
                'id' => '8146',
                'bank_id' => '38',
                'name' => 'GAFFARGAON',
                'bank_branch_data' => [
                    'routing_no' => '200611002',
                ],
                'enabled' => true,
            ],
            146 => [
                'id' => '8147',
                'bank_id' => '38',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200611060',
                ],
                'enabled' => true,
            ],
            147 => [
                'id' => '8148',
                'bank_id' => '38',
                'name' => 'GOYESHPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200611123',
                ],
                'enabled' => true,
            ],
            148 => [
                'id' => '8149',
                'bank_id' => '38',
                'name' => 'HALUAGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200611152',
                ],
                'enabled' => true,
            ],
            149 => [
                'id' => '8150',
                'bank_id' => '38',
                'name' => 'ISHWARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200611181',
                ],
                'enabled' => true,
            ],
            150 => [
                'id' => '8151',
                'bank_id' => '38',
                'name' => 'KESHOREGANJ BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200611365',
                ],
                'enabled' => true,
            ],
            151 => [
                'id' => '8152',
                'bank_id' => '38',
                'name' => 'MATSHA GABESHANA INSTITUTE',
                'bank_branch_data' => [
                    'routing_no' => '200611549',
                ],
                'enabled' => true,
            ],
            152 => [
                'id' => '8153',
                'bank_id' => '38',
                'name' => 'MUKTAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200611699',
                ],
                'enabled' => true,
            ],
            153 => [
                'id' => '8154',
                'bank_id' => '38',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '200611752',
                ],
                'enabled' => true,
            ],
            154 => [
                'id' => '8155',
                'bank_id' => '38',
                'name' => 'MYMENSINGH BUSINESS CENTER',
                'bank_branch_data' => [
                    'routing_no' => '200611781',
                ],
                'enabled' => true,
            ],
            155 => [
                'id' => '8156',
                'bank_id' => '38',
                'name' => 'NANDAIL',
                'bank_branch_data' => [
                    'routing_no' => '200611907',
                ],
                'enabled' => true,
            ],
            156 => [
                'id' => '8157',
                'bank_id' => '38',
                'name' => 'KALIBARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200611994',
                ],
                'enabled' => true,
            ],
            157 => [
                'id' => '8158',
                'bank_id' => '38',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200612148',
                ],
                'enabled' => true,
            ],
            158 => [
                'id' => '8159',
                'bank_id' => '38',
                'name' => 'TARAKANDA',
                'bank_branch_data' => [
                    'routing_no' => '200612269',
                ],
                'enabled' => true,
            ],
            159 => [
                'id' => '8160',
                'bank_id' => '38',
                'name' => 'TARERGHAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200612298',
                ],
                'enabled' => true,
            ],
            160 => [
                'id' => '8161',
                'bank_id' => '38',
                'name' => 'TRISHAL',
                'bank_branch_data' => [
                    'routing_no' => '200612351',
                ],
                'enabled' => true,
            ],
            161 => [
                'id' => '8162',
                'bank_id' => '38',
                'name' => 'ABADPUKURHAT',
                'bank_branch_data' => [
                    'routing_no' => '200640044',
                ],
                'enabled' => true,
            ],
            162 => [
                'id' => '8163',
                'bank_id' => '38',
                'name' => 'ATRAI',
                'bank_branch_data' => [
                    'routing_no' => '200640165',
                ],
                'enabled' => true,
            ],
            163 => [
                'id' => '8164',
                'bank_id' => '38',
                'name' => 'BADALGACHI',
                'bank_branch_data' => [
                    'routing_no' => '200640194',
                ],
                'enabled' => true,
            ],
            164 => [
                'id' => '8165',
                'bank_id' => '38',
                'name' => 'BHANDERPUR',
                'bank_branch_data' => [
                    'routing_no' => '200640349',
                ],
                'enabled' => true,
            ],
            165 => [
                'id' => '8166',
                'bank_id' => '38',
                'name' => 'BHAWANIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200640378',
                ],
                'enabled' => true,
            ],
            166 => [
                'id' => '8167',
                'bank_id' => '38',
                'name' => 'DHAMAIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200640499',
                ],
                'enabled' => true,
            ],
            167 => [
                'id' => '8168',
                'bank_id' => '38',
                'name' => 'K.D. MORE',
                'bank_branch_data' => [
                    'routing_no' => '200640910',
                ],
                'enabled' => true,
            ],
            168 => [
                'id' => '8169',
                'bank_id' => '38',
                'name' => 'MANDA',
                'bank_branch_data' => [
                    'routing_no' => '200641001',
                ],
                'enabled' => true,
            ],
            169 => [
                'id' => '8170',
                'bank_id' => '38',
                'name' => 'MOHADEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '200641098',
                ],
                'enabled' => true,
            ],
            170 => [
                'id' => '8171',
                'bank_id' => '38',
                'name' => 'MOHISBATAN',
                'bank_branch_data' => [
                    'routing_no' => '200641122',
                ],
                'enabled' => true,
            ],
            171 => [
                'id' => '8172',
                'bank_id' => '38',
                'name' => 'MONGALBARIHAT',
                'bank_branch_data' => [
                    'routing_no' => '200641151',
                ],
                'enabled' => true,
            ],
            172 => [
                'id' => '8173',
                'bank_id' => '38',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '200641180',
                ],
                'enabled' => true,
            ],
            173 => [
                'id' => '8174',
                'bank_id' => '38',
                'name' => 'NEAMATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200641272',
                ],
                'enabled' => true,
            ],
            174 => [
                'id' => '8175',
                'bank_id' => '38',
                'name' => 'PATNITALA',
                'bank_branch_data' => [
                    'routing_no' => '200641456',
                ],
                'enabled' => true,
            ],
            175 => [
                'id' => '8176',
                'bank_id' => '38',
                'name' => 'PORSHA',
                'bank_branch_data' => [
                    'routing_no' => '200641519',
                ],
                'enabled' => true,
            ],
            176 => [
                'id' => '8177',
                'bank_id' => '38',
                'name' => 'RANINAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200641601',
                ],
                'enabled' => true,
            ],
            177 => [
                'id' => '8178',
                'bank_id' => '38',
                'name' => 'RANINAGAR T.T.D.C.',
                'bank_branch_data' => [
                    'routing_no' => '200641630',
                ],
                'enabled' => true,
            ],
            178 => [
                'id' => '8179',
                'bank_id' => '38',
                'name' => 'SAPAHAR',
                'bank_branch_data' => [
                    'routing_no' => '200641751',
                ],
                'enabled' => true,
            ],
            179 => [
                'id' => '8180',
                'bank_id' => '38',
                'name' => 'TRIMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '200641935',
                ],
                'enabled' => true,
            ],
            180 => [
                'id' => '8181',
                'bank_id' => '38',
                'name' => 'CHACHURI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200650168',
                ],
                'enabled' => true,
            ],
            181 => [
                'id' => '8182',
                'bank_id' => '38',
                'name' => 'GOBRA',
                'bank_branch_data' => [
                    'routing_no' => '200650221',
                ],
                'enabled' => true,
            ],
            182 => [
                'id' => '8183',
                'bank_id' => '38',
                'name' => 'KALIA',
                'bank_branch_data' => [
                    'routing_no' => '200650342',
                ],
                'enabled' => true,
            ],
            183 => [
                'id' => '8184',
                'bank_id' => '38',
                'name' => 'ZILLA PARISHAD',
                'bank_branch_data' => [
                    'routing_no' => '200650371',
                ],
                'enabled' => true,
            ],
            184 => [
                'id' => '8185',
                'bank_id' => '38',
                'name' => 'LAKSHMI PASHA',
                'bank_branch_data' => [
                    'routing_no' => '200650434',
                ],
                'enabled' => true,
            ],
            185 => [
                'id' => '8186',
                'bank_id' => '38',
                'name' => 'LOHAGARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200650492',
                ],
                'enabled' => true,
            ],
            186 => [
                'id' => '8187',
                'bank_id' => '38',
                'name' => 'MOHAJAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200650555',
                ],
                'enabled' => true,
            ],
            187 => [
                'id' => '8188',
                'bank_id' => '38',
                'name' => 'NARAIL',
                'bank_branch_data' => [
                    'routing_no' => '200650647',
                ],
                'enabled' => true,
            ],
            188 => [
                'id' => '8189',
                'bank_id' => '38',
                'name' => 'PERULI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200650676',
                ],
                'enabled' => true,
            ],
            189 => [
                'id' => '8190',
                'bank_id' => '38',
                'name' => 'RUPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200650739',
                ],
                'enabled' => true,
            ],
            190 => [
                'id' => '8191',
                'bank_id' => '38',
                'name' => 'TULARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200650797',
                ],
                'enabled' => true,
            ],
            191 => [
                'id' => '8192',
                'bank_id' => '38',
                'name' => 'ARAIHAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200670043',
                ],
                'enabled' => true,
            ],
            192 => [
                'id' => '8193',
                'bank_id' => '38',
                'name' => 'BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200670164',
                ],
                'enabled' => true,
            ],
            193 => [
                'id' => '8194',
                'bank_id' => '38',
                'name' => 'DHARMAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200670377',
                ],
                'enabled' => true,
            ],
            194 => [
                'id' => '8195',
                'bank_id' => '38',
                'name' => 'DHUPTARA',
                'bank_branch_data' => [
                    'routing_no' => '200670430',
                ],
                'enabled' => true,
            ],
            195 => [
                'id' => '8196',
                'bank_id' => '38',
                'name' => 'FATULLA',
                'bank_branch_data' => [
                    'routing_no' => '200670522',
                ],
                'enabled' => true,
            ],
            196 => [
                'id' => '8197',
                'bank_id' => '38',
                'name' => 'GODNAIL',
                'bank_branch_data' => [
                    'routing_no' => '200670551',
                ],
                'enabled' => true,
            ],
            197 => [
                'id' => '8198',
                'bank_id' => '38',
                'name' => 'GOPALDI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200670614',
                ],
                'enabled' => true,
            ],
            198 => [
                'id' => '8199',
                'bank_id' => '38',
                'name' => 'KURIPARA',
                'bank_branch_data' => [
                    'routing_no' => '200670856',
                ],
                'enabled' => true,
            ],
            199 => [
                'id' => '8200',
                'bank_id' => '38',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '200670885',
                ],
                'enabled' => true,
            ],
            200 => [
                'id' => '8201',
                'bank_id' => '38',
                'name' => 'MADANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200670948',
                ],
                'enabled' => true,
            ],
            201 => [
                'id' => '8202',
                'bank_id' => '38',
                'name' => 'MOGRAPARA',
                'bank_branch_data' => [
                    'routing_no' => '200671068',
                ],
                'enabled' => true,
            ],
            202 => [
                'id' => '8203',
                'bank_id' => '38',
                'name' => 'NABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200671150',
                ],
                'enabled' => true,
            ],
            203 => [
                'id' => '8204',
                'bank_id' => '38',
                'name' => 'NARAYANGANJ CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200671213',
                ],
                'enabled' => true,
            ],
            204 => [
                'id' => '8205',
                'bank_id' => '38',
                'name' => 'NARAYANGANJ DOCKYARD',
                'bank_branch_data' => [
                    'routing_no' => '200671242',
                ],
                'enabled' => true,
            ],
            205 => [
                'id' => '8206',
                'bank_id' => '38',
                'name' => 'NETAIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200671271',
                ],
                'enabled' => true,
            ],
            206 => [
                'id' => '8207',
                'bank_id' => '38',
                'name' => 'PANCHRUKHI',
                'bank_branch_data' => [
                    'routing_no' => '200671392',
                ],
                'enabled' => true,
            ],
            207 => [
                'id' => '8208',
                'bank_id' => '38',
                'name' => 'RUPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200671455',
                ],
                'enabled' => true,
            ],
            208 => [
                'id' => '8209',
                'bank_id' => '38',
                'name' => 'SONARGAON',
                'bank_branch_data' => [
                    'routing_no' => '200671697',
                ],
                'enabled' => true,
            ],
            209 => [
                'id' => '8210',
                'bank_id' => '38',
                'name' => 'TARABOBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200671813',
                ],
                'enabled' => true,
            ],
            210 => [
                'id' => '8211',
                'bank_id' => '38',
                'name' => 'BAKHAR NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200680138',
                ],
                'enabled' => true,
            ],
            211 => [
                'id' => '8212',
                'bank_id' => '38',
                'name' => 'BELABO',
                'bank_branch_data' => [
                    'routing_no' => '200680259',
                ],
                'enabled' => true,
            ],
            212 => [
                'id' => '8213',
                'bank_id' => '38',
                'name' => 'BELTALI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200680262',
                ],
                'enabled' => true,
            ],
            213 => [
                'id' => '8214',
                'bank_id' => '38',
                'name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200680404',
                ],
                'enabled' => true,
            ],
            214 => [
                'id' => '8215',
                'bank_id' => '38',
                'name' => 'DANGA',
                'bank_branch_data' => [
                    'routing_no' => '200680433',
                ],
                'enabled' => true,
            ],
            215 => [
                'id' => '8216',
                'bank_id' => '38',
                'name' => 'GHORADIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200680462',
                ],
                'enabled' => true,
            ],
            216 => [
                'id' => '8217',
                'bank_id' => '38',
                'name' => 'GHORASAL',
                'bank_branch_data' => [
                    'routing_no' => '200680491',
                ],
                'enabled' => true,
            ],
            217 => [
                'id' => '8218',
                'bank_id' => '38',
                'name' => 'HATIRDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200680583',
                ],
                'enabled' => true,
            ],
            218 => [
                'id' => '8219',
                'bank_id' => '38',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '200680675',
                ],
                'enabled' => true,
            ],
            219 => [
                'id' => '8220',
                'bank_id' => '38',
                'name' => 'MONOHARDI',
                'bank_branch_data' => [
                    'routing_no' => '200680738',
                ],
                'enabled' => true,
            ],
            220 => [
                'id' => '8221',
                'bank_id' => '38',
                'name' => 'NARAYANPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200680820',
                ],
                'enabled' => true,
            ],
            221 => [
                'id' => '8222',
                'bank_id' => '38',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '200680859',
                ],
                'enabled' => true,
            ],
            222 => [
                'id' => '8223',
                'bank_id' => '38',
                'name' => 'PALASH',
                'bank_branch_data' => [
                    'routing_no' => '200680912',
                ],
                'enabled' => true,
            ],
            223 => [
                'id' => '8224',
                'bank_id' => '38',
                'name' => 'PANCHADANA',
                'bank_branch_data' => [
                    'routing_no' => '200680970',
                ],
                'enabled' => true,
            ],
            224 => [
                'id' => '8225',
                'bank_id' => '38',
                'name' => 'PORADIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200681003',
                ],
                'enabled' => true,
            ],
            225 => [
                'id' => '8226',
                'bank_id' => '38',
                'name' => 'PUTIA',
                'bank_branch_data' => [
                    'routing_no' => '200681032',
                ],
                'enabled' => true,
            ],
            226 => [
                'id' => '8227',
                'bank_id' => '38',
                'name' => 'RAIPURA',
                'bank_branch_data' => [
                    'routing_no' => '200681090',
                ],
                'enabled' => true,
            ],
            227 => [
                'id' => '8228',
                'bank_id' => '38',
                'name' => 'RAMPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200681124',
                ],
                'enabled' => true,
            ],
            228 => [
                'id' => '8229',
                'bank_id' => '38',
                'name' => 'SAIDABAD',
                'bank_branch_data' => [
                    'routing_no' => '200681153',
                ],
                'enabled' => true,
            ],
            229 => [
                'id' => '8230',
                'bank_id' => '38',
                'name' => 'SATIRPARA',
                'bank_branch_data' => [
                    'routing_no' => '200681216',
                ],
                'enabled' => true,
            ],
            230 => [
                'id' => '8231',
                'bank_id' => '38',
                'name' => 'SHIBPUR',
                'bank_branch_data' => [
                    'routing_no' => '200681308',
                ],
                'enabled' => true,
            ],
            231 => [
                'id' => '8232',
                'bank_id' => '38',
                'name' => 'AHMEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200690078',
                ],
                'enabled' => true,
            ],
            232 => [
                'id' => '8233',
                'bank_id' => '38',
                'name' => 'NALDANGA HAT',
                'bank_branch_data' => [
                    'routing_no' => '200690094',
                ],
                'enabled' => true,
            ],
            233 => [
                'id' => '8234',
                'bank_id' => '38',
                'name' => 'BAGATIPARA',
                'bank_branch_data' => [
                    'routing_no' => '200690131',
                ],
                'enabled' => true,
            ],
            234 => [
                'id' => '8235',
                'bank_id' => '38',
                'name' => 'BARAIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200690160',
                ],
                'enabled' => true,
            ],
            235 => [
                'id' => '8236',
                'bank_id' => '38',
                'name' => 'CHANCHAKOIR',
                'bank_branch_data' => [
                    'routing_no' => '200690315',
                ],
                'enabled' => true,
            ],
            236 => [
                'id' => '8237',
                'bank_id' => '38',
                'name' => 'DAYARAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '200690407',
                ],
                'enabled' => true,
            ],
            237 => [
                'id' => '8238',
                'bank_id' => '38',
                'name' => 'GURUDASPUR',
                'bank_branch_data' => [
                    'routing_no' => '200690557',
                ],
                'enabled' => true,
            ],
            238 => [
                'id' => '8239',
                'bank_id' => '38',
                'name' => 'KANAIKHALI PURATAN BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '200690881',
                ],
                'enabled' => true,
            ],
            239 => [
                'id' => '8240',
                'bank_id' => '38',
                'name' => 'LALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200690915',
                ],
                'enabled' => true,
            ],
            240 => [
                'id' => '8241',
                'bank_id' => '38',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '200691093',
                ],
                'enabled' => true,
            ],
            241 => [
                'id' => '8242',
                'bank_id' => '38',
                'name' => 'PHULBAGAN',
                'bank_branch_data' => [
                    'routing_no' => '200691301',
                ],
                'enabled' => true,
            ],
            242 => [
                'id' => '8243',
                'bank_id' => '38',
                'name' => 'SINGRA',
                'bank_branch_data' => [
                    'routing_no' => '200691480',
                ],
                'enabled' => true,
            ],
            243 => [
                'id' => '8244',
                'bank_id' => '38',
                'name' => 'STATION BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200691543',
                ],
                'enabled' => true,
            ],
            244 => [
                'id' => '8245',
                'bank_id' => '38',
                'name' => 'BHOLAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200700168',
                ],
                'enabled' => true,
            ],
            245 => [
                'id' => '8246',
                'bank_id' => '38',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200700250',
                ],
                'enabled' => true,
            ],
            246 => [
                'id' => '8247',
                'bank_id' => '38',
                'name' => 'GOMASTAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200700463',
                ],
                'enabled' => true,
            ],
            247 => [
                'id' => '8248',
                'bank_id' => '38',
                'name' => 'NEWMARKET',
                'bank_branch_data' => [
                    'routing_no' => '200700584',
                ],
                'enabled' => true,
            ],
            248 => [
                'id' => '8249',
                'bank_id' => '38',
                'name' => 'NACHOLE',
                'bank_branch_data' => [
                    'routing_no' => '200700739',
                ],
                'enabled' => true,
            ],
            249 => [
                'id' => '8250',
                'bank_id' => '38',
                'name' => 'ROHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200700889',
                ],
                'enabled' => true,
            ],
            250 => [
                'id' => '8251',
                'bank_id' => '38',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200700942',
                ],
                'enabled' => true,
            ],
            251 => [
                'id' => '8252',
                'bank_id' => '38',
                'name' => 'SONAMOSZID',
                'bank_branch_data' => [
                    'routing_no' => '200701062',
                ],
                'enabled' => true,
            ],
            252 => [
                'id' => '8253',
                'bank_id' => '38',
                'name' => 'ATPARA',
                'bank_branch_data' => [
                    'routing_no' => '200720043',
                ],
                'enabled' => true,
            ],
            253 => [
                'id' => '8254',
                'bank_id' => '38',
                'name' => 'HOGLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200720056',
                ],
                'enabled' => true,
            ],
            254 => [
                'id' => '8255',
                'bank_id' => '38',
                'name' => 'BARAHATTA',
                'bank_branch_data' => [
                    'routing_no' => '200720072',
                ],
                'enabled' => true,
            ],
            255 => [
                'id' => '8256',
                'bank_id' => '38',
                'name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200720193',
                ],
                'enabled' => true,
            ],
            256 => [
                'id' => '8257',
                'bank_id' => '38',
                'name' => 'KALMAKANDA',
                'bank_branch_data' => [
                    'routing_no' => '200720430',
                ],
                'enabled' => true,
            ],
            257 => [
                'id' => '8258',
                'bank_id' => '38',
                'name' => 'KENDUA',
                'bank_branch_data' => [
                    'routing_no' => '200720469',
                ],
                'enabled' => true,
            ],
            258 => [
                'id' => '8259',
                'bank_id' => '38',
                'name' => 'KHALIAJURI',
                'bank_branch_data' => [
                    'routing_no' => '200720498',
                ],
                'enabled' => true,
            ],
            259 => [
                'id' => '8260',
                'bank_id' => '38',
                'name' => 'LEPSIA',
                'bank_branch_data' => [
                    'routing_no' => '200720580',
                ],
                'enabled' => true,
            ],
            260 => [
                'id' => '8261',
                'bank_id' => '38',
                'name' => 'MADAN',
                'bank_branch_data' => [
                    'routing_no' => '200720614',
                ],
                'enabled' => true,
            ],
            261 => [
                'id' => '8262',
                'bank_id' => '38',
                'name' => 'MADAN PUR',
                'bank_branch_data' => [
                    'routing_no' => '200720643',
                ],
                'enabled' => true,
            ],
            262 => [
                'id' => '8263',
                'bank_id' => '38',
                'name' => 'MAHANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200720672',
                ],
                'enabled' => true,
            ],
            263 => [
                'id' => '8264',
                'bank_id' => '38',
                'name' => 'NETROKONA',
                'bank_branch_data' => [
                    'routing_no' => '200720735',
                ],
                'enabled' => true,
            ],
            264 => [
                'id' => '8265',
                'bank_id' => '38',
                'name' => 'PURBADHALA',
                'bank_branch_data' => [
                    'routing_no' => '200720793',
                ],
                'enabled' => true,
            ],
            265 => [
                'id' => '8266',
                'bank_id' => '38',
                'name' => 'THAKURKONA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200721039',
                ],
                'enabled' => true,
            ],
            266 => [
                'id' => '8267',
                'bank_id' => '38',
                'name' => 'NILPHAMARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200730138',
                ],
                'enabled' => true,
            ],
            267 => [
                'id' => '8268',
                'bank_id' => '38',
                'name' => 'CHILAHATI',
                'bank_branch_data' => [
                    'routing_no' => '200730259',
                ],
                'enabled' => true,
            ],
            268 => [
                'id' => '8269',
                'bank_id' => '38',
                'name' => 'DIMLA',
                'bank_branch_data' => [
                    'routing_no' => '200730312',
                ],
                'enabled' => true,
            ],
            269 => [
                'id' => '8270',
                'bank_id' => '38',
                'name' => 'DOMAR',
                'bank_branch_data' => [
                    'routing_no' => '200730341',
                ],
                'enabled' => true,
            ],
            270 => [
                'id' => '8271',
                'bank_id' => '38',
                'name' => 'JALDHAKA',
                'bank_branch_data' => [
                    'routing_no' => '200730462',
                ],
                'enabled' => true,
            ],
            271 => [
                'id' => '8272',
                'bank_id' => '38',
                'name' => 'KISHOREGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200730583',
                ],
                'enabled' => true,
            ],
            272 => [
                'id' => '8273',
                'bank_id' => '38',
                'name' => 'MIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200730646',
                ],
                'enabled' => true,
            ],
            273 => [
                'id' => '8274',
                'bank_id' => '38',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '200730738',
                ],
                'enabled' => true,
            ],
            274 => [
                'id' => '8275',
                'bank_id' => '38',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '200730796',
                ],
                'enabled' => true,
            ],
            275 => [
                'id' => '8276',
                'bank_id' => '38',
                'name' => 'SAYEDPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200730820',
                ],
                'enabled' => true,
            ],
            276 => [
                'id' => '8277',
                'bank_id' => '38',
                'name' => 'AMANULLA PUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200750071',
                ],
                'enabled' => true,
            ],
            277 => [
                'id' => '8278',
                'bank_id' => '38',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '200750255',
                ],
                'enabled' => true,
            ],
            278 => [
                'id' => '8279',
                'bank_id' => '38',
                'name' => 'CHAPRASHIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200750439',
                ],
                'enabled' => true,
            ],
            279 => [
                'id' => '8280',
                'bank_id' => '38',
                'name' => 'CHARBATA',
                'bank_branch_data' => [
                    'routing_no' => '200750497',
                ],
                'enabled' => true,
            ],
            280 => [
                'id' => '8281',
                'bank_id' => '38',
                'name' => 'CHARMATUA',
                'bank_branch_data' => [
                    'routing_no' => '200750550',
                ],
                'enabled' => true,
            ],
            281 => [
                'id' => '8282',
                'bank_id' => '38',
                'name' => 'CHATKHIL',
                'bank_branch_data' => [
                    'routing_no' => '200750589',
                ],
                'enabled' => true,
            ],
            282 => [
                'id' => '8283',
                'bank_id' => '38',
                'name' => 'CHHAYANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200750642',
                ],
                'enabled' => true,
            ],
            283 => [
                'id' => '8284',
                'bank_id' => '38',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '200750671',
                ],
                'enabled' => true,
            ],
            284 => [
                'id' => '8285',
                'bank_id' => '38',
                'name' => 'CHOWDHURYHAT',
                'bank_branch_data' => [
                    'routing_no' => '200750705',
                ],
                'enabled' => true,
            ],
            285 => [
                'id' => '8286',
                'bank_id' => '38',
                'name' => 'COLLEGE ROAD CHAUMUHANI',
                'bank_branch_data' => [
                    'routing_no' => '200750734',
                ],
                'enabled' => true,
            ],
            286 => [
                'id' => '8287',
                'bank_id' => '38',
                'name' => 'DAYARAMDI',
                'bank_branch_data' => [
                    'routing_no' => '200750826',
                ],
                'enabled' => true,
            ],
            287 => [
                'id' => '8288',
                'bank_id' => '38',
                'name' => 'HATIYA',
                'bank_branch_data' => [
                    'routing_no' => '200751038',
                ],
                'enabled' => true,
            ],
            288 => [
                'id' => '8289',
                'bank_id' => '38',
                'name' => 'HATIYA THANA PARISHAD',
                'bank_branch_data' => [
                    'routing_no' => '200751067',
                ],
                'enabled' => true,
            ],
            289 => [
                'id' => '8290',
                'bank_id' => '38',
                'name' => 'JAMIDERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200751159',
                ],
                'enabled' => true,
            ],
            290 => [
                'id' => '8291',
                'bank_id' => '38',
                'name' => 'KALAMUNSHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200751270',
                ],
                'enabled' => true,
            ],
            291 => [
                'id' => '8292',
                'bank_id' => '38',
                'name' => 'KANKIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200751304',
                ],
                'enabled' => true,
            ],
            292 => [
                'id' => '8293',
                'bank_id' => '38',
                'name' => 'KHALIFERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200751425',
                ],
                'enabled' => true,
            ],
            293 => [
                'id' => '8294',
                'bank_id' => '38',
                'name' => 'MAIJDEE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200751546',
                ],
                'enabled' => true,
            ],
            294 => [
                'id' => '8295',
                'bank_id' => '38',
                'name' => 'NOAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200751575',
                ],
                'enabled' => true,
            ],
            295 => [
                'id' => '8296',
                'bank_id' => '38',
                'name' => 'POURA BIPONI BITAN',
                'bank_branch_data' => [
                    'routing_no' => '200751841',
                ],
                'enabled' => true,
            ],
            296 => [
                'id' => '8297',
                'bank_id' => '38',
                'name' => 'SAGORIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200751962',
                ],
                'enabled' => true,
            ],
            297 => [
                'id' => '8298',
                'bank_id' => '38',
                'name' => 'SEBARHAT',
                'bank_branch_data' => [
                    'routing_no' => '200752053',
                ],
                'enabled' => true,
            ],
            298 => [
                'id' => '8299',
                'bank_id' => '38',
                'name' => 'SENBAG',
                'bank_branch_data' => [
                    'routing_no' => '200752082',
                ],
                'enabled' => true,
            ],
            299 => [
                'id' => '8300',
                'bank_id' => '38',
                'name' => 'SHAHAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200752116',
                ],
                'enabled' => true,
            ],
            300 => [
                'id' => '8301',
                'bank_id' => '38',
                'name' => 'SONAIMURI',
                'bank_branch_data' => [
                    'routing_no' => '200752237',
                ],
                'enabled' => true,
            ],
            301 => [
                'id' => '8302',
                'bank_id' => '38',
                'name' => 'SONAPUR OLD TOWN',
                'bank_branch_data' => [
                    'routing_no' => '200752295',
                ],
                'enabled' => true,
            ],
            302 => [
                'id' => '8303',
                'bank_id' => '38',
                'name' => 'SUBARNA CHAR',
                'bank_branch_data' => [
                    'routing_no' => '200752358',
                ],
                'enabled' => true,
            ],
            303 => [
                'id' => '8304',
                'bank_id' => '38',
                'name' => 'TAMARADDI',
                'bank_branch_data' => [
                    'routing_no' => '200752411',
                ],
                'enabled' => true,
            ],
            304 => [
                'id' => '8305',
                'bank_id' => '38',
                'name' => 'ANANTA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200760108',
                ],
                'enabled' => true,
            ],
            305 => [
                'id' => '8306',
                'bank_id' => '38',
                'name' => 'ARAMBARIA',
                'bank_branch_data' => [
                    'routing_no' => '200760166',
                ],
                'enabled' => true,
            ],
            306 => [
                'id' => '8307',
                'bank_id' => '38',
                'name' => 'ATGHORIA',
                'bank_branch_data' => [
                    'routing_no' => '200760258',
                ],
                'enabled' => true,
            ],
            307 => [
                'id' => '8308',
                'bank_id' => '38',
                'name' => 'JOYNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200760340',
                ],
                'enabled' => true,
            ],
            308 => [
                'id' => '8309',
                'bank_id' => '38',
                'name' => 'BANWARI NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200760432',
                ],
                'enabled' => true,
            ],
            309 => [
                'id' => '8310',
                'bank_id' => '38',
                'name' => 'BERA',
                'bank_branch_data' => [
                    'routing_no' => '200760461',
                ],
                'enabled' => true,
            ],
            310 => [
                'id' => '8311',
                'bank_id' => '38',
                'name' => 'BHANGURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200760524',
                ],
                'enabled' => true,
            ],
            311 => [
                'id' => '8312',
                'bank_id' => '38',
                'name' => 'CHATMOHAR',
                'bank_branch_data' => [
                    'routing_no' => '200760645',
                ],
                'enabled' => true,
            ],
            312 => [
                'id' => '8313',
                'bank_id' => '38',
                'name' => 'DASHURIA',
                'bank_branch_data' => [
                    'routing_no' => '200760795',
                ],
                'enabled' => true,
            ],
            313 => [
                'id' => '8314',
                'bank_id' => '38',
                'name' => 'EKDANTA',
                'bank_branch_data' => [
                    'routing_no' => '200761031',
                ],
                'enabled' => true,
            ],
            314 => [
                'id' => '8315',
                'bank_id' => '38',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '200761215',
                ],
                'enabled' => true,
            ],
            315 => [
                'id' => '8316',
                'bank_id' => '38',
                'name' => 'JURGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200761273',
                ],
                'enabled' => true,
            ],
            316 => [
                'id' => '8317',
                'bank_id' => '38',
                'name' => 'KARANZA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200761307',
                ],
                'enabled' => true,
            ],
            317 => [
                'id' => '8318',
                'bank_id' => '38',
                'name' => 'PABNA BANIJJO KENDRA',
                'bank_branch_data' => [
                    'routing_no' => '200761394',
                ],
                'enabled' => true,
            ],
            318 => [
                'id' => '8319',
                'bank_id' => '38',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '200761781',
                ],
                'enabled' => true,
            ],
            319 => [
                'id' => '8320',
                'bank_id' => '38',
                'name' => 'SANTHIA',
                'bank_branch_data' => [
                    'routing_no' => '200762056',
                ],
                'enabled' => true,
            ],
            320 => [
                'id' => '8321',
                'bank_id' => '38',
                'name' => 'SUJANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200762269',
                ],
                'enabled' => true,
            ],
            321 => [
                'id' => '8322',
                'bank_id' => '38',
                'name' => 'ZILLA BOARD',
                'bank_branch_data' => [
                    'routing_no' => '200762322',
                ],
                'enabled' => true,
            ],
            322 => [
                'id' => '8323',
                'bank_id' => '38',
                'name' => 'ATWARI',
                'bank_branch_data' => [
                    'routing_no' => '200770048',
                ],
                'enabled' => true,
            ],
            323 => [
                'id' => '8324',
                'bank_id' => '38',
                'name' => 'BHAJANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200770101',
                ],
                'enabled' => true,
            ],
            324 => [
                'id' => '8325',
                'bank_id' => '38',
                'name' => 'BODA',
                'bank_branch_data' => [
                    'routing_no' => '200770130',
                ],
                'enabled' => true,
            ],
            325 => [
                'id' => '8326',
                'bank_id' => '38',
                'name' => 'DEBIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200770198',
                ],
                'enabled' => true,
            ],
            326 => [
                'id' => '8327',
                'bank_id' => '38',
                'name' => 'PANCHAGARH',
                'bank_branch_data' => [
                    'routing_no' => '200770556',
                ],
                'enabled' => true,
            ],
            327 => [
                'id' => '8328',
                'bank_id' => '38',
                'name' => 'TETULIA',
                'bank_branch_data' => [
                    'routing_no' => '200770730',
                ],
                'enabled' => true,
            ],
            328 => [
                'id' => '8329',
                'bank_id' => '38',
                'name' => 'BAGA BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200780070',
                ],
                'enabled' => true,
            ],
            329 => [
                'id' => '8330',
                'bank_id' => '38',
                'name' => 'BAKUL BARIA',
                'bank_branch_data' => [
                    'routing_no' => '200780162',
                ],
                'enabled' => true,
            ],
            330 => [
                'id' => '8331',
                'bank_id' => '38',
                'name' => 'BAUPHAL',
                'bank_branch_data' => [
                    'routing_no' => '200780191',
                ],
                'enabled' => true,
            ],
            331 => [
                'id' => '8332',
                'bank_id' => '38',
                'name' => 'DASHMINA',
                'bank_branch_data' => [
                    'routing_no' => '200780346',
                ],
                'enabled' => true,
            ],
            332 => [
                'id' => '8333',
                'bank_id' => '38',
                'name' => 'DUMKI',
                'bank_branch_data' => [
                    'routing_no' => '200780438',
                ],
                'enabled' => true,
            ],
            333 => [
                'id' => '8334',
                'bank_id' => '38',
                'name' => 'GALACHIPA',
                'bank_branch_data' => [
                    'routing_no' => '200780496',
                ],
                'enabled' => true,
            ],
            334 => [
                'id' => '8335',
                'bank_id' => '38',
                'name' => 'KALAPARA BANDER',
                'bank_branch_data' => [
                    'routing_no' => '200780559',
                ],
                'enabled' => true,
            ],
            335 => [
                'id' => '8336',
                'bank_id' => '38',
                'name' => 'MOHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200780854',
                ],
                'enabled' => true,
            ],
            336 => [
                'id' => '8337',
                'bank_id' => '38',
                'name' => 'MOWKARAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200780883',
                ],
                'enabled' => true,
            ],
            337 => [
                'id' => '8338',
                'bank_id' => '38',
                'name' => 'NEWTOWN',
                'bank_branch_data' => [
                    'routing_no' => '200780975',
                ],
                'enabled' => true,
            ],
            338 => [
                'id' => '8339',
                'bank_id' => '38',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200781095',
                ],
                'enabled' => true,
            ],
            339 => [
                'id' => '8340',
                'bank_id' => '38',
                'name' => 'SUBIDKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200781279',
                ],
                'enabled' => true,
            ],
            340 => [
                'id' => '8341',
                'bank_id' => '38',
                'name' => 'ULANIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200781332',
                ],
                'enabled' => true,
            ],
            341 => [
                'id' => '8342',
                'bank_id' => '38',
                'name' => 'BHANDARIA',
                'bank_branch_data' => [
                    'routing_no' => '200790136',
                ],
                'enabled' => true,
            ],
            342 => [
                'id' => '8343',
                'bank_id' => '38',
                'name' => 'KAWKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200790431',
                ],
                'enabled' => true,
            ],
            343 => [
                'id' => '8344',
                'bank_id' => '38',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '200790523',
                ],
                'enabled' => true,
            ],
            344 => [
                'id' => '8345',
                'bank_id' => '38',
                'name' => 'NAZIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '200790707',
                ],
                'enabled' => true,
            ],
            345 => [
                'id' => '8346',
                'bank_id' => '38',
                'name' => 'PARERHAT',
                'bank_branch_data' => [
                    'routing_no' => '200790736',
                ],
                'enabled' => true,
            ],
            346 => [
                'id' => '8347',
                'bank_id' => '38',
                'name' => 'PIROJPUR',
                'bank_branch_data' => [
                    'routing_no' => '200790765',
                ],
                'enabled' => true,
            ],
            347 => [
                'id' => '8348',
                'bank_id' => '38',
                'name' => 'SREERAMKATI',
                'bank_branch_data' => [
                    'routing_no' => '200790949',
                ],
                'enabled' => true,
            ],
            348 => [
                'id' => '8349',
                'bank_id' => '38',
                'name' => 'SWARUPKATI',
                'bank_branch_data' => [
                    'routing_no' => '200790978',
                ],
                'enabled' => true,
            ],
            349 => [
                'id' => '8350',
                'bank_id' => '38',
                'name' => 'TUSHKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200791030',
                ],
                'enabled' => true,
            ],
            350 => [
                'id' => '8351',
                'bank_id' => '38',
                'name' => 'ZIA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200791069',
                ],
                'enabled' => true,
            ],
            351 => [
                'id' => '8352',
                'bank_id' => '38',
                'name' => 'BAGHA',
                'bank_branch_data' => [
                    'routing_no' => '200810108',
                ],
                'enabled' => true,
            ],
            352 => [
                'id' => '8353',
                'bank_id' => '38',
                'name' => 'BHAWANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200810340',
                ],
                'enabled' => true,
            ],
            353 => [
                'id' => '8354',
                'bank_id' => '38',
                'name' => 'CHARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200810403',
                ],
                'enabled' => true,
            ],
            354 => [
                'id' => '8355',
                'bank_id' => '38',
                'name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200810461',
                ],
                'enabled' => true,
            ],
            355 => [
                'id' => '8356',
                'bank_id' => '38',
                'name' => 'ARANI',
                'bank_branch_data' => [
                    'routing_no' => '200810490',
                ],
                'enabled' => true,
            ],
            356 => [
                'id' => '8357',
                'bank_id' => '38',
                'name' => 'DURGAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200810553',
                ],
                'enabled' => true,
            ],
            357 => [
                'id' => '8358',
                'bank_id' => '38',
                'name' => 'GODAGARI',
                'bank_branch_data' => [
                    'routing_no' => '200810616',
                ],
                'enabled' => true,
            ],
            358 => [
                'id' => '8359',
                'bank_id' => '38',
                'name' => 'GREATER ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200810674',
                ],
                'enabled' => true,
            ],
            359 => [
                'id' => '8360',
                'bank_id' => '38',
                'name' => 'KASHIADANGA',
                'bank_branch_data' => [
                    'routing_no' => '200811031',
                ],
                'enabled' => true,
            ],
            360 => [
                'id' => '8361',
                'bank_id' => '38',
                'name' => 'MOHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200811394',
                ],
                'enabled' => true,
            ],
            361 => [
                'id' => '8362',
                'bank_id' => '38',
                'name' => 'MONIGRAM',
                'bank_branch_data' => [
                    'routing_no' => '200811486',
                ],
                'enabled' => true,
            ],
            362 => [
                'id' => '8363',
                'bank_id' => '38',
                'name' => 'MOTIHAR',
                'bank_branch_data' => [
                    'routing_no' => '200811510',
                ],
                'enabled' => true,
            ],
            363 => [
                'id' => '8364',
                'bank_id' => '38',
                'name' => 'MOUGACHI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200811549',
                ],
                'enabled' => true,
            ],
            364 => [
                'id' => '8365',
                'bank_id' => '38',
                'name' => 'MUDHAMALAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200811578',
                ],
                'enabled' => true,
            ],
            365 => [
                'id' => '8366',
                'bank_id' => '38',
                'name' => 'PABA',
                'bank_branch_data' => [
                    'routing_no' => '200811699',
                ],
                'enabled' => true,
            ],
            366 => [
                'id' => '8367',
                'bank_id' => '38',
                'name' => 'POLICE ACADAMY',
                'bank_branch_data' => [
                    'routing_no' => '200811781',
                ],
                'enabled' => true,
            ],
            367 => [
                'id' => '8368',
                'bank_id' => '38',
                'name' => 'PUTHIA',
                'bank_branch_data' => [
                    'routing_no' => '200811844',
                ],
                'enabled' => true,
            ],
            368 => [
                'id' => '8369',
                'bank_id' => '38',
                'name' => 'RAJSHAHI CADET COLLEGE',
                'bank_branch_data' => [
                    'routing_no' => '200811965',
                ],
                'enabled' => true,
            ],
            369 => [
                'id' => '8370',
                'bank_id' => '38',
                'name' => 'RAJSHAHI CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200811994',
                ],
                'enabled' => true,
            ],
            370 => [
                'id' => '8371',
                'bank_id' => '38',
                'name' => 'RAJSHAHI CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200812027',
                ],
                'enabled' => true,
            ],
            371 => [
                'id' => '8372',
                'bank_id' => '38',
                'name' => 'RAJSHAHI MEDICAL COLLEGE HOSPITAL',
                'bank_branch_data' => [
                    'routing_no' => '200812056',
                ],
                'enabled' => true,
            ],
            372 => [
                'id' => '8373',
                'bank_id' => '38',
                'name' => 'RAJSHAHI RAILWAY COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200812085',
                ],
                'enabled' => true,
            ],
            373 => [
                'id' => '8374',
                'bank_id' => '38',
                'name' => 'TANORE',
                'bank_branch_data' => [
                    'routing_no' => '200812380',
                ],
                'enabled' => true,
            ],
            374 => [
                'id' => '8375',
                'bank_id' => '38',
                'name' => 'BAHAR PUR',
                'bank_branch_data' => [
                    'routing_no' => '200820130',
                ],
                'enabled' => true,
            ],
            375 => [
                'id' => '8376',
                'bank_id' => '38',
                'name' => 'BALIAKANDI',
                'bank_branch_data' => [
                    'routing_no' => '200820169',
                ],
                'enabled' => true,
            ],
            376 => [
                'id' => '8377',
                'bank_id' => '38',
                'name' => 'BEL GACHI',
                'bank_branch_data' => [
                    'routing_no' => '200820222',
                ],
                'enabled' => true,
            ],
            377 => [
                'id' => '8378',
                'bank_id' => '38',
                'name' => 'GOALANDA',
                'bank_branch_data' => [
                    'routing_no' => '200820280',
                ],
                'enabled' => true,
            ],
            378 => [
                'id' => '8379',
                'bank_id' => '38',
                'name' => 'GOALANDA UPAZILA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200820314',
                ],
                'enabled' => true,
            ],
            379 => [
                'id' => '8380',
                'bank_id' => '38',
                'name' => 'KALUKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200820372',
                ],
                'enabled' => true,
            ],
            380 => [
                'id' => '8381',
                'bank_id' => '38',
                'name' => 'KASHBA MAJAIL',
                'bank_branch_data' => [
                    'routing_no' => '200820406',
                ],
                'enabled' => true,
            ],
            381 => [
                'id' => '8382',
                'bank_id' => '38',
                'name' => 'MACH PARA',
                'bank_branch_data' => [
                    'routing_no' => '200820464',
                ],
                'enabled' => true,
            ],
            382 => [
                'id' => '8383',
                'bank_id' => '38',
                'name' => 'PANGSA UPAZILA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200820648',
                ],
                'enabled' => true,
            ],
            383 => [
                'id' => '8384',
                'bank_id' => '38',
                'name' => 'PANGSHA',
                'bank_branch_data' => [
                    'routing_no' => '200820677',
                ],
                'enabled' => true,
            ],
            384 => [
                'id' => '8385',
                'bank_id' => '38',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '200820730',
                ],
                'enabled' => true,
            ],
            385 => [
                'id' => '8386',
                'bank_id' => '38',
                'name' => 'RAJBARI UPAZILLA COMPLEX',
                'bank_branch_data' => [
                    'routing_no' => '200820769',
                ],
                'enabled' => true,
            ],
            386 => [
                'id' => '8387',
                'bank_id' => '38',
                'name' => 'BAGHAICHARI',
                'bank_branch_data' => [
                    'routing_no' => '200840044',
                ],
                'enabled' => true,
            ],
            387 => [
                'id' => '8388',
                'bank_id' => '38',
                'name' => 'BANARUPA',
                'bank_branch_data' => [
                    'routing_no' => '200840073',
                ],
                'enabled' => true,
            ],
            388 => [
                'id' => '8389',
                'bank_id' => '38',
                'name' => 'BARAICHARI',
                'bank_branch_data' => [
                    'routing_no' => '200840107',
                ],
                'enabled' => true,
            ],
            389 => [
                'id' => '8390',
                'bank_id' => '38',
                'name' => 'BARKAL',
                'bank_branch_data' => [
                    'routing_no' => '200840136',
                ],
                'enabled' => true,
            ],
            390 => [
                'id' => '8391',
                'bank_id' => '38',
                'name' => 'BELAICHARI',
                'bank_branch_data' => [
                    'routing_no' => '200840165',
                ],
                'enabled' => true,
            ],
            391 => [
                'id' => '8392',
                'bank_id' => '38',
                'name' => 'CHANDRAGHONA',
                'bank_branch_data' => [
                    'routing_no' => '200840194',
                ],
                'enabled' => true,
            ],
            392 => [
                'id' => '8393',
                'bank_id' => '38',
                'name' => 'GHAGRA',
                'bank_branch_data' => [
                    'routing_no' => '200840228',
                ],
                'enabled' => true,
            ],
            393 => [
                'id' => '8394',
                'bank_id' => '38',
                'name' => 'JURACHARI',
                'bank_branch_data' => [
                    'routing_no' => '200840257',
                ],
                'enabled' => true,
            ],
            394 => [
                'id' => '8395',
                'bank_id' => '38',
                'name' => 'KAPTAI',
                'bank_branch_data' => [
                    'routing_no' => '200840286',
                ],
                'enabled' => true,
            ],
            395 => [
                'id' => '8396',
                'bank_id' => '38',
                'name' => 'KAWKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200840349',
                ],
                'enabled' => true,
            ],
            396 => [
                'id' => '8397',
                'bank_id' => '38',
                'name' => 'LANGADU',
                'bank_branch_data' => [
                    'routing_no' => '200840378',
                ],
                'enabled' => true,
            ],
            397 => [
                'id' => '8398',
                'bank_id' => '38',
                'name' => 'NANIAR CHAR',
                'bank_branch_data' => [
                    'routing_no' => '200840402',
                ],
                'enabled' => true,
            ],
            398 => [
                'id' => '8399',
                'bank_id' => '38',
                'name' => 'NEW COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200840431',
                ],
                'enabled' => true,
            ],
            399 => [
                'id' => '8400',
                'bank_id' => '38',
                'name' => 'RAJOSTHALI',
                'bank_branch_data' => [
                    'routing_no' => '200840499',
                ],
                'enabled' => true,
            ],
            400 => [
                'id' => '8401',
                'bank_id' => '38',
                'name' => 'RANGAMATI',
                'bank_branch_data' => [
                    'routing_no' => '200840523',
                ],
                'enabled' => true,
            ],
            401 => [
                'id' => '8402',
                'bank_id' => '38',
                'name' => 'BADARGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200850100',
                ],
                'enabled' => true,
            ],
            402 => [
                'id' => '8403',
                'bank_id' => '38',
                'name' => 'CHATRAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200850371',
                ],
                'enabled' => true,
            ],
            403 => [
                'id' => '8404',
                'bank_id' => '38',
                'name' => 'DHAP',
                'bank_branch_data' => [
                    'routing_no' => '200850526',
                ],
                'enabled' => true,
            ],
            404 => [
                'id' => '8405',
                'bank_id' => '38',
                'name' => 'GANGACHARA',
                'bank_branch_data' => [
                    'routing_no' => '200850618',
                ],
                'enabled' => true,
            ],
            405 => [
                'id' => '8406',
                'bank_id' => '38',
                'name' => 'HARAGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200850676',
                ],
                'enabled' => true,
            ],
            406 => [
                'id' => '8407',
                'bank_id' => '38',
                'name' => 'JAIGIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200850700',
                ],
                'enabled' => true,
            ],
            407 => [
                'id' => '8408',
                'bank_id' => '38',
                'name' => 'KACHARI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200850739',
                ],
                'enabled' => true,
            ],
            408 => [
                'id' => '8409',
                'bank_id' => '38',
                'name' => 'KAUNIA',
                'bank_branch_data' => [
                    'routing_no' => '200850768',
                ],
                'enabled' => true,
            ],
            409 => [
                'id' => '8410',
                'bank_id' => '38',
                'name' => 'KHALASHPIR',
                'bank_branch_data' => [
                    'routing_no' => '200850797',
                ],
                'enabled' => true,
            ],
            410 => [
                'id' => '8411',
                'bank_id' => '38',
                'name' => 'RANGPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200850850',
                ],
                'enabled' => true,
            ],
            411 => [
                'id' => '8412',
                'bank_id' => '38',
                'name' => 'LALDIGHIHAT',
                'bank_branch_data' => [
                    'routing_no' => '200850913',
                ],
                'enabled' => true,
            ],
            412 => [
                'id' => '8413',
                'bank_id' => '38',
                'name' => 'MAHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200850971',
                ],
                'enabled' => true,
            ],
            413 => [
                'id' => '8414',
                'bank_id' => '38',
                'name' => 'MIRBAGH',
                'bank_branch_data' => [
                    'routing_no' => '200851062',
                ],
                'enabled' => true,
            ],
            414 => [
                'id' => '8415',
                'bank_id' => '38',
                'name' => 'MITHAPUKUR',
                'bank_branch_data' => [
                    'routing_no' => '200851091',
                ],
                'enabled' => true,
            ],
            415 => [
                'id' => '8416',
                'bank_id' => '38',
                'name' => 'PIRGACHA',
                'bank_branch_data' => [
                    'routing_no' => '200851338',
                ],
                'enabled' => true,
            ],
            416 => [
                'id' => '8417',
                'bank_id' => '38',
                'name' => 'PIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200851367',
                ],
                'enabled' => true,
            ],
            417 => [
                'id' => '8418',
                'bank_id' => '38',
                'name' => 'RANGPUR CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200851488',
                ],
                'enabled' => true,
            ],
            418 => [
                'id' => '8419',
                'bank_id' => '38',
                'name' => 'RANGPUR CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200851541',
                ],
                'enabled' => true,
            ],
            419 => [
                'id' => '8420',
                'bank_id' => '38',
                'name' => 'TARAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200851938',
                ],
                'enabled' => true,
            ],
            420 => [
                'id' => '8421',
                'bank_id' => '38',
                'name' => 'ANGARIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200860040',
                ],
                'enabled' => true,
            ],
            421 => [
                'id' => '8422',
                'bank_id' => '38',
                'name' => 'BHEDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200860103',
                ],
                'enabled' => true,
            ],
            422 => [
                'id' => '8423',
                'bank_id' => '38',
                'name' => 'DAMUDYA',
                'bank_branch_data' => [
                    'routing_no' => '200860190',
                ],
                'enabled' => true,
            ],
            423 => [
                'id' => '8424',
                'bank_id' => '38',
                'name' => 'GOSHAIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '200860345',
                ],
                'enabled' => true,
            ],
            424 => [
                'id' => '8425',
                'bank_id' => '38',
                'name' => 'NARIA',
                'bank_branch_data' => [
                    'routing_no' => '200860587',
                ],
                'enabled' => true,
            ],
            425 => [
                'id' => '8426',
                'bank_id' => '38',
                'name' => 'SHARIATPUR',
                'bank_branch_data' => [
                    'routing_no' => '200860679',
                ],
                'enabled' => true,
            ],
            426 => [
                'id' => '8427',
                'bank_id' => '38',
                'name' => 'ZAJIRA',
                'bank_branch_data' => [
                    'routing_no' => '200860703',
                ],
                'enabled' => true,
            ],
            427 => [
                'id' => '8428',
                'bank_id' => '38',
                'name' => 'ASASUNI',
                'bank_branch_data' => [
                    'routing_no' => '200870072',
                ],
                'enabled' => true,
            ],
            428 => [
                'id' => '8429',
                'bank_id' => '38',
                'name' => 'BUDHATA',
                'bank_branch_data' => [
                    'routing_no' => '200870348',
                ],
                'enabled' => true,
            ],
            429 => [
                'id' => '8430',
                'bank_id' => '38',
                'name' => 'DEBHATA',
                'bank_branch_data' => [
                    'routing_no' => '200870377',
                ],
                'enabled' => true,
            ],
            430 => [
                'id' => '8431',
                'bank_id' => '38',
                'name' => 'GOYRA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200870498',
                ],
                'enabled' => true,
            ],
            431 => [
                'id' => '8432',
                'bank_id' => '38',
                'name' => 'JHAUDANGA',
                'bank_branch_data' => [
                    'routing_no' => '200870551',
                ],
                'enabled' => true,
            ],
            432 => [
                'id' => '8433',
                'bank_id' => '38',
                'name' => 'KALAROA',
                'bank_branch_data' => [
                    'routing_no' => '200870580',
                ],
                'enabled' => true,
            ],
            433 => [
                'id' => '8434',
                'bank_id' => '38',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200870614',
                ],
                'enabled' => true,
            ],
            434 => [
                'id' => '8435',
                'bank_id' => '38',
                'name' => 'KAMAN NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200870643',
                ],
                'enabled' => true,
            ],
            435 => [
                'id' => '8436',
                'bank_id' => '38',
                'name' => 'KHALISKHALI',
                'bank_branch_data' => [
                    'routing_no' => '200870672',
                ],
                'enabled' => true,
            ],
            436 => [
                'id' => '8437',
                'bank_id' => '38',
                'name' => 'KULIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200870764',
                ],
                'enabled' => true,
            ],
            437 => [
                'id' => '8438',
                'bank_id' => '38',
                'name' => 'KUMIRABAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200870793',
                ],
                'enabled' => true,
            ],
            438 => [
                'id' => '8439',
                'bank_id' => '38',
                'name' => 'MAGURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200870827',
                ],
                'enabled' => true,
            ],
            439 => [
                'id' => '8440',
                'bank_id' => '38',
                'name' => 'PARULIA',
                'bank_branch_data' => [
                    'routing_no' => '200871000',
                ],
                'enabled' => true,
            ],
            440 => [
                'id' => '8441',
                'bank_id' => '38',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '200871097',
                ],
                'enabled' => true,
            ],
            441 => [
                'id' => '8442',
                'bank_id' => '38',
                'name' => 'SHYAM NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200871213',
                ],
                'enabled' => true,
            ],
            442 => [
                'id' => '8443',
                'bank_id' => '38',
                'name' => 'TALA',
                'bank_branch_data' => [
                    'routing_no' => '200871305',
                ],
                'enabled' => true,
            ],
            443 => [
                'id' => '8444',
                'bank_id' => '38',
                'name' => 'VOMRA',
                'bank_branch_data' => [
                    'routing_no' => '200871363',
                ],
                'enabled' => true,
            ],
            444 => [
                'id' => '8445',
                'bank_id' => '38',
                'name' => 'BAGHABARIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200880138',
                ],
                'enabled' => true,
            ],
            445 => [
                'id' => '8446',
                'bank_id' => '38',
                'name' => 'CHANDAIKONA',
                'bank_branch_data' => [
                    'routing_no' => '200880433',
                ],
                'enabled' => true,
            ],
            446 => [
                'id' => '8447',
                'bank_id' => '38',
                'name' => 'CHOWBARI',
                'bank_branch_data' => [
                    'routing_no' => '200880491',
                ],
                'enabled' => true,
            ],
            447 => [
                'id' => '8448',
                'bank_id' => '38',
                'name' => 'COURT BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '200880554',
                ],
                'enabled' => true,
            ],
            448 => [
                'id' => '8449',
                'bank_id' => '38',
                'name' => 'DHANGORA',
                'bank_branch_data' => [
                    'routing_no' => '200880675',
                ],
                'enabled' => true,
            ],
            449 => [
                'id' => '8450',
                'bank_id' => '38',
                'name' => 'ENAYETPUR',
                'bank_branch_data' => [
                    'routing_no' => '200880820',
                ],
                'enabled' => true,
            ],
            450 => [
                'id' => '8451',
                'bank_id' => '38',
                'name' => 'HATIKUMRUL',
                'bank_branch_data' => [
                    'routing_no' => '200880912',
                ],
                'enabled' => true,
            ],
            451 => [
                'id' => '8452',
                'bank_id' => '38',
                'name' => 'JAMTOIL',
                'bank_branch_data' => [
                    'routing_no' => '200880941',
                ],
                'enabled' => true,
            ],
            452 => [
                'id' => '8453',
                'bank_id' => '38',
                'name' => 'KAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200881090',
                ],
                'enabled' => true,
            ],
            453 => [
                'id' => '8454',
                'bank_id' => '38',
                'name' => 'KHASHKAWLIA',
                'bank_branch_data' => [
                    'routing_no' => '200881153',
                ],
                'enabled' => true,
            ],
            454 => [
                'id' => '8455',
                'bank_id' => '38',
                'name' => 'LAHI RIMOHONPUR',
                'bank_branch_data' => [
                    'routing_no' => '200881308',
                ],
                'enabled' => true,
            ],
            455 => [
                'id' => '8456',
                'bank_id' => '38',
                'name' => 'NAOGAON BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200881395',
                ],
                'enabled' => true,
            ],
            456 => [
                'id' => '8457',
                'bank_id' => '38',
                'name' => 'NATUARPARA',
                'bank_branch_data' => [
                    'routing_no' => '200881429',
                ],
                'enabled' => true,
            ],
            457 => [
                'id' => '8458',
                'bank_id' => '38',
                'name' => 'SHAHID SOHRAWARDI',
                'bank_branch_data' => [
                    'routing_no' => '200881661',
                ],
                'enabled' => true,
            ],
            458 => [
                'id' => '8459',
                'bank_id' => '38',
                'name' => 'SADANANDAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200881795',
                ],
                'enabled' => true,
            ],
            459 => [
                'id' => '8460',
                'bank_id' => '38',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200881874',
                ],
                'enabled' => true,
            ],
            460 => [
                'id' => '8461',
                'bank_id' => '38',
                'name' => 'SHAHJADPUR',
                'bank_branch_data' => [
                    'routing_no' => '200881908',
                ],
                'enabled' => true,
            ],
            461 => [
                'id' => '8462',
                'bank_id' => '38',
                'name' => 'SHOHAGPUR',
                'bank_branch_data' => [
                    'routing_no' => '200881966',
                ],
                'enabled' => true,
            ],
            462 => [
                'id' => '8463',
                'bank_id' => '38',
                'name' => 'SONAMUKHI',
                'bank_branch_data' => [
                    'routing_no' => '200882028',
                ],
                'enabled' => true,
            ],
            463 => [
                'id' => '8464',
                'bank_id' => '38',
                'name' => 'TARASH',
                'bank_branch_data' => [
                    'routing_no' => '200882178',
                ],
                'enabled' => true,
            ],
            464 => [
                'id' => '8465',
                'bank_id' => '38',
                'name' => 'ULLAPARA',
                'bank_branch_data' => [
                    'routing_no' => '200882231',
                ],
                'enabled' => true,
            ],
            465 => [
                'id' => '8466',
                'bank_id' => '38',
                'name' => 'JHENAIGATI',
                'bank_branch_data' => [
                    'routing_no' => '200890160',
                ],
                'enabled' => true,
            ],
            466 => [
                'id' => '8467',
                'bank_id' => '38',
                'name' => 'NAKLA',
                'bank_branch_data' => [
                    'routing_no' => '200890315',
                ],
                'enabled' => true,
            ],
            467 => [
                'id' => '8468',
                'bank_id' => '38',
                'name' => 'NALITABARI',
                'bank_branch_data' => [
                    'routing_no' => '200890344',
                ],
                'enabled' => true,
            ],
            468 => [
                'id' => '8469',
                'bank_id' => '38',
                'name' => 'NANNI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200890436',
                ],
                'enabled' => true,
            ],
            469 => [
                'id' => '8470',
                'bank_id' => '38',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '200890557',
                ],
                'enabled' => true,
            ],
            470 => [
                'id' => '8471',
                'bank_id' => '38',
                'name' => 'SREEBORDI',
                'bank_branch_data' => [
                    'routing_no' => '200890649',
                ],
                'enabled' => true,
            ],
            471 => [
                'id' => '8472',
                'bank_id' => '38',
                'name' => 'SURJADI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200890678',
                ],
                'enabled' => true,
            ],
            472 => [
                'id' => '8473',
                'bank_id' => '38',
                'name' => 'DAKSHIN SUNAMGONJ',
                'bank_branch_data' => [
                    'routing_no' => '200900063',
                ],
                'enabled' => true,
            ],
            473 => [
                'id' => '8474',
                'bank_id' => '38',
                'name' => 'BISHWAMVARPUR',
                'bank_branch_data' => [
                    'routing_no' => '200900197',
                ],
                'enabled' => true,
            ],
            474 => [
                'id' => '8475',
                'bank_id' => '38',
                'name' => 'CHHATAK',
                'bank_branch_data' => [
                    'routing_no' => '200900221',
                ],
                'enabled' => true,
            ],
            475 => [
                'id' => '8476',
                'bank_id' => '38',
                'name' => 'DERAI',
                'bank_branch_data' => [
                    'routing_no' => '200900250',
                ],
                'enabled' => true,
            ],
            476 => [
                'id' => '8477',
                'bank_id' => '38',
                'name' => 'DHARAMPASSA',
                'bank_branch_data' => [
                    'routing_no' => '200900289',
                ],
                'enabled' => true,
            ],
            477 => [
                'id' => '8478',
                'bank_id' => '38',
                'name' => 'DOWARA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200900342',
                ],
                'enabled' => true,
            ],
            478 => [
                'id' => '8479',
                'bank_id' => '38',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '200900492',
                ],
                'enabled' => true,
            ],
            479 => [
                'id' => '8480',
                'bank_id' => '38',
                'name' => 'JAMALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200900526',
                ],
                'enabled' => true,
            ],
            480 => [
                'id' => '8481',
                'bank_id' => '38',
                'name' => 'MADHYA NAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200900676',
                ],
                'enabled' => true,
            ],
            481 => [
                'id' => '8482',
                'bank_id' => '38',
                'name' => 'SALLA',
                'bank_branch_data' => [
                    'routing_no' => '200901033',
                ],
                'enabled' => true,
            ],
            482 => [
                'id' => '8483',
                'bank_id' => '38',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200901125',
                ],
                'enabled' => true,
            ],
            483 => [
                'id' => '8484',
                'bank_id' => '38',
                'name' => 'TAHIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '200901217',
                ],
                'enabled' => true,
            ],
            484 => [
                'id' => '8485',
                'bank_id' => '38',
                'name' => 'AMJAD ALI ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200910079',
                ],
                'enabled' => true,
            ],
            485 => [
                'id' => '8486',
                'bank_id' => '38',
                'name' => 'BAIRAGIR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200910132',
                ],
                'enabled' => true,
            ],
            486 => [
                'id' => '8487',
                'bank_id' => '38',
                'name' => 'BALAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200910161',
                ],
                'enabled' => true,
            ],
            487 => [
                'id' => '8488',
                'bank_id' => '38',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200910316',
                ],
                'enabled' => true,
            ],
            488 => [
                'id' => '8489',
                'bank_id' => '38',
                'name' => 'OSMANI BIMAN BANDAR',
                'bank_branch_data' => [
                    'routing_no' => '200910408',
                ],
                'enabled' => true,
            ],
            489 => [
                'id' => '8490',
                'bank_id' => '38',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '200910437',
                ],
                'enabled' => true,
            ],
            490 => [
                'id' => '8491',
                'bank_id' => '38',
                'name' => 'CHARKHAI',
                'bank_branch_data' => [
                    'routing_no' => '200910703',
                ],
                'enabled' => true,
            ],
            491 => [
                'id' => '8492',
                'bank_id' => '38',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200910916',
                ],
                'enabled' => true,
            ],
            492 => [
                'id' => '8493',
                'bank_id' => '38',
                'name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200910945',
                ],
                'enabled' => true,
            ],
            493 => [
                'id' => '8494',
                'bank_id' => '38',
                'name' => 'DAKSHIN FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200910974',
                ],
                'enabled' => true,
            ],
            494 => [
                'id' => '8495',
                'bank_id' => '38',
                'name' => 'DARGA GATE CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200911065',
                ],
                'enabled' => true,
            ],
            495 => [
                'id' => '8496',
                'bank_id' => '38',
                'name' => 'DHAKA DAKHIN',
                'bank_branch_data' => [
                    'routing_no' => '200911302',
                ],
                'enabled' => true,
            ],
            496 => [
                'id' => '8497',
                'bank_id' => '38',
                'name' => 'FENCHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200911360',
                ],
                'enabled' => true,
            ],
            497 => [
                'id' => '8498',
                'bank_id' => '38',
                'name' => 'FENCHUGANJ SARKARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '200911399',
                ],
                'enabled' => true,
            ],
            498 => [
                'id' => '8499',
                'bank_id' => '38',
                'name' => 'GOLAPGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200911607',
                ],
                'enabled' => true,
            ],
            499 => [
                'id' => '8500',
                'bank_id' => '38',
                'name' => 'GOWAIN GHAT',
                'bank_branch_data' => [
                    'routing_no' => '200911636',
                ],
                'enabled' => true,
            ],
            500 => [
                'id' => '8501',
                'bank_id' => '38',
                'name' => 'JAINTAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200911810',
                ],
                'enabled' => true,
            ],
            501 => [
                'id' => '8502',
                'bank_id' => '38',
                'name' => 'KAMAL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200912051',
                ],
                'enabled' => true,
            ],
            502 => [
                'id' => '8503',
                'bank_id' => '38',
                'name' => 'KANAIGHAT',
                'bank_branch_data' => [
                    'routing_no' => '200912080',
                ],
                'enabled' => true,
            ],
            503 => [
                'id' => '8504',
                'bank_id' => '38',
                'name' => 'KAZALHAOR',
                'bank_branch_data' => [
                    'routing_no' => '200912114',
                ],
                'enabled' => true,
            ],
            504 => [
                'id' => '8505',
                'bank_id' => '38',
                'name' => 'KHADIMNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200912206',
                ],
                'enabled' => true,
            ],
            505 => [
                'id' => '8506',
                'bank_id' => '38',
                'name' => 'MOHAJAN PATTY',
                'bank_branch_data' => [
                    'routing_no' => '200912714',
                ],
                'enabled' => true,
            ],
            506 => [
                'id' => '8507',
                'bank_id' => '38',
                'name' => 'PIRER BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200912893',
                ],
                'enabled' => true,
            ],
            507 => [
                'id' => '8508',
                'bank_id' => '38',
                'name' => 'S.U.O.SC & TECHNOLOGY',
                'bank_branch_data' => [
                    'routing_no' => '200913076',
                ],
                'enabled' => true,
            ],
            508 => [
                'id' => '8509',
                'bank_id' => '38',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200913463',
                ],
                'enabled' => true,
            ],
            509 => [
                'id' => '8510',
                'bank_id' => '38',
                'name' => 'SYLHET CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200913584',
                ],
                'enabled' => true,
            ],
            510 => [
                'id' => '8511',
                'bank_id' => '38',
                'name' => 'SYLHET CITY CORPORATION',
                'bank_branch_data' => [
                    'routing_no' => '200913618',
                ],
                'enabled' => true,
            ],
            511 => [
                'id' => '8512',
                'bank_id' => '38',
                'name' => 'SYLHET CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '200913647',
                ],
                'enabled' => true,
            ],
            512 => [
                'id' => '8513',
                'bank_id' => '38',
                'name' => 'TAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '200913821',
                ],
                'enabled' => true,
            ],
            513 => [
                'id' => '8514',
                'bank_id' => '38',
                'name' => 'TIKORPARA',
                'bank_branch_data' => [
                    'routing_no' => '200913913',
                ],
                'enabled' => true,
            ],
            514 => [
                'id' => '8515',
                'bank_id' => '38',
                'name' => 'TILAGARH',
                'bank_branch_data' => [
                    'routing_no' => '200913942',
                ],
                'enabled' => true,
            ],
            515 => [
                'id' => '8516',
                'bank_id' => '38',
                'name' => 'ZAKIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200914125',
                ],
                'enabled' => true,
            ],
            516 => [
                'id' => '8517',
                'bank_id' => '38',
                'name' => 'BALLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200930312',
                ],
                'enabled' => true,
            ],
            517 => [
                'id' => '8518',
                'bank_id' => '38',
                'name' => 'BASAIL',
                'bank_branch_data' => [
                    'routing_no' => '200930370',
                ],
                'enabled' => true,
            ],
            518 => [
                'id' => '8519',
                'bank_id' => '38',
                'name' => 'BHUANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200930462',
                ],
                'enabled' => true,
            ],
            519 => [
                'id' => '8520',
                'bank_id' => '38',
                'name' => 'COURT BUILDING',
                'bank_branch_data' => [
                    'routing_no' => '200930554',
                ],
                'enabled' => true,
            ],
            520 => [
                'id' => '8521',
                'bank_id' => '38',
                'name' => 'DELDUAR',
                'bank_branch_data' => [
                    'routing_no' => '200930583',
                ],
                'enabled' => true,
            ],
            521 => [
                'id' => '8522',
                'bank_id' => '38',
                'name' => 'DHAN BARI',
                'bank_branch_data' => [
                    'routing_no' => '200930675',
                ],
                'enabled' => true,
            ],
            522 => [
                'id' => '8523',
                'bank_id' => '38',
                'name' => 'FALDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200930888',
                ],
                'enabled' => true,
            ],
            523 => [
                'id' => '8524',
                'bank_id' => '38',
                'name' => 'GARO BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200930909',
                ],
                'enabled' => true,
            ],
            524 => [
                'id' => '8525',
                'bank_id' => '38',
                'name' => 'GHATAIL',
                'bank_branch_data' => [
                    'routing_no' => '200930912',
                ],
                'enabled' => true,
            ],
            525 => [
                'id' => '8526',
                'bank_id' => '38',
                'name' => 'GOBINDASHI',
                'bank_branch_data' => [
                    'routing_no' => '200930970',
                ],
                'enabled' => true,
            ],
            526 => [
                'id' => '8527',
                'bank_id' => '38',
                'name' => 'GOPALPUR',
                'bank_branch_data' => [
                    'routing_no' => '200931003',
                ],
                'enabled' => true,
            ],
            527 => [
                'id' => '8528',
                'bank_id' => '38',
                'name' => 'GORAI',
                'bank_branch_data' => [
                    'routing_no' => '200931032',
                ],
                'enabled' => true,
            ],
            528 => [
                'id' => '8529',
                'bank_id' => '38',
                'name' => 'NALIN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200931111',
                ],
                'enabled' => true,
            ],
            529 => [
                'id' => '8530',
                'bank_id' => '38',
                'name' => 'KALIHATI',
                'bank_branch_data' => [
                    'routing_no' => '200931308',
                ],
                'enabled' => true,
            ],
            530 => [
                'id' => '8531',
                'bank_id' => '38',
                'name' => 'KENDUA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200931403',
                ],
                'enabled' => true,
            ],
            531 => [
                'id' => '8532',
                'bank_id' => '38',
                'name' => 'MYMENSINGH ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200931429',
                ],
                'enabled' => true,
            ],
            532 => [
                'id' => '8533',
                'bank_id' => '38',
                'name' => 'LOWHATI',
                'bank_branch_data' => [
                    'routing_no' => '200931458',
                ],
                'enabled' => true,
            ],
            533 => [
                'id' => '8534',
                'bank_id' => '38',
                'name' => 'MADHUPUR',
                'bank_branch_data' => [
                    'routing_no' => '200931487',
                ],
                'enabled' => true,
            ],
            534 => [
                'id' => '8535',
                'bank_id' => '38',
                'name' => 'MAWLANA BHASHANI SCIENCE & TECHNOLOGY UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '200931490',
                ],
                'enabled' => true,
            ],
            535 => [
                'id' => '8536',
                'bank_id' => '38',
                'name' => 'MIRZAPUR',
                'bank_branch_data' => [
                    'routing_no' => '200931511',
                ],
                'enabled' => true,
            ],
            536 => [
                'id' => '8537',
                'bank_id' => '38',
                'name' => 'MOHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '200931603',
                ],
                'enabled' => true,
            ],
            537 => [
                'id' => '8538',
                'bank_id' => '38',
                'name' => 'NAGARPUR',
                'bank_branch_data' => [
                    'routing_no' => '200931690',
                ],
                'enabled' => true,
            ],
            538 => [
                'id' => '8539',
                'bank_id' => '38',
                'name' => 'NIKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '200931816',
                ],
                'enabled' => true,
            ],
            539 => [
                'id' => '8540',
                'bank_id' => '38',
                'name' => 'PAKULLA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200931874',
                ],
                'enabled' => true,
            ],
            540 => [
                'id' => '8541',
                'bank_id' => '38',
                'name' => 'PAKUTIA',
                'bank_branch_data' => [
                    'routing_no' => '200931908',
                ],
                'enabled' => true,
            ],
            541 => [
                'id' => '8542',
                'bank_id' => '38',
                'name' => 'SHAHID SALAHUDDIN CANTONMENT',
                'bank_branch_data' => [
                    'routing_no' => '200932178',
                ],
                'enabled' => true,
            ],
            542 => [
                'id' => '8543',
                'bank_id' => '38',
                'name' => 'SHAKHIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200932202',
                ],
                'enabled' => true,
            ],
            543 => [
                'id' => '8544',
                'bank_id' => '38',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '200932299',
                ],
                'enabled' => true,
            ],
            544 => [
                'id' => '8545',
                'bank_id' => '38',
                'name' => 'TANGAIL BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200932323',
                ],
                'enabled' => true,
            ],
            545 => [
                'id' => '8546',
                'bank_id' => '38',
                'name' => 'VICTORIA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '200932381',
                ],
                'enabled' => true,
            ],
            546 => [
                'id' => '8547',
                'bank_id' => '38',
                'name' => 'AKHANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '200940049',
                ],
                'enabled' => true,
            ],
            547 => [
                'id' => '8548',
                'bank_id' => '38',
                'name' => 'BALIADANGI',
                'bank_branch_data' => [
                    'routing_no' => '200940102',
                ],
                'enabled' => true,
            ],
            548 => [
                'id' => '8549',
                'bank_id' => '38',
                'name' => 'CHOWDHURYHAT',
                'bank_branch_data' => [
                    'routing_no' => '200940281',
                ],
                'enabled' => true,
            ],
            549 => [
                'id' => '8550',
                'bank_id' => '38',
                'name' => 'GOREYAHAT',
                'bank_branch_data' => [
                    'routing_no' => '200940436',
                ],
                'enabled' => true,
            ],
            550 => [
                'id' => '8551',
                'bank_id' => '38',
                'name' => 'HARIPUR',
                'bank_branch_data' => [
                    'routing_no' => '200940465',
                ],
                'enabled' => true,
            ],
            551 => [
                'id' => '8552',
                'bank_id' => '38',
                'name' => 'JABOR HAT',
                'bank_branch_data' => [
                    'routing_no' => '200940494',
                ],
                'enabled' => true,
            ],
            552 => [
                'id' => '8553',
                'bank_id' => '38',
                'name' => 'PURATAN BUS STAND',
                'bank_branch_data' => [
                    'routing_no' => '200940586',
                ],
                'enabled' => true,
            ],
            553 => [
                'id' => '8554',
                'bank_id' => '38',
                'name' => 'NEKMORAD',
                'bank_branch_data' => [
                    'routing_no' => '200940731',
                ],
                'enabled' => true,
            ],
            554 => [
                'id' => '8555',
                'bank_id' => '38',
                'name' => 'PIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200940760',
                ],
                'enabled' => true,
            ],
            555 => [
                'id' => '8556',
                'bank_id' => '38',
                'name' => 'RANISANKAIL',
                'bank_branch_data' => [
                    'routing_no' => '200940823',
                ],
                'enabled' => true,
            ],
            556 => [
                'id' => '8557',
                'bank_id' => '38',
                'name' => 'RUHEA',
                'bank_branch_data' => [
                    'routing_no' => '200940852',
                ],
                'enabled' => true,
            ],
            557 => [
                'id' => '8558',
                'bank_id' => '38',
                'name' => 'BHULLI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '200940881',
                ],
                'enabled' => true,
            ],
            558 => [
                'id' => '8559',
                'bank_id' => '38',
                'name' => 'SHIBGANJ',
                'bank_branch_data' => [
                    'routing_no' => '200940915',
                ],
                'enabled' => true,
            ],
            559 => [
                'id' => '8560',
                'bank_id' => '38',
                'name' => 'THAKURGAON',
                'bank_branch_data' => [
                    'routing_no' => '200940973',
                ],
                'enabled' => true,
            ],
            560 => [
                'id' => '8561',
                'bank_id' => '38',
                'name' => 'THAKURGAON(SUGAR MILLS)',
                'bank_branch_data' => [
                    'routing_no' => '200941035',
                ],
                'enabled' => true,
            ],
            561 => [
                'id' => '8562',
                'bank_id' => '39',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '205060287',
                ],
                'enabled' => true,
            ],
            562 => [
                'id' => '8563',
                'bank_id' => '39',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '205100376',
                ],
                'enabled' => true,
            ],
            563 => [
                'id' => '8564',
                'bank_id' => '39',
                'name' => 'BRAHMANBARIA SME',
                'bank_branch_data' => [
                    'routing_no' => '205120448',
                ],
                'enabled' => true,
            ],
            564 => [
                'id' => '8565',
                'bank_id' => '39',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '205150139',
                ],
                'enabled' => true,
            ],
            565 => [
                'id' => '8566',
                'bank_id' => '39',
                'name' => 'C.D.A. AVENUE(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '205151512',
                ],
                'enabled' => true,
            ],
            566 => [
                'id' => '8567',
                'bank_id' => '39',
                'name' => 'CHOWDHURY HAT SME',
                'bank_branch_data' => [
                    'routing_no' => '205152182',
                ],
                'enabled' => true,
            ],
            567 => [
                'id' => '8568',
                'bank_id' => '39',
                'name' => 'FATIKCHARI',
                'bank_branch_data' => [
                    'routing_no' => '205152740',
                ],
                'enabled' => true,
            ],
            568 => [
                'id' => '8569',
                'bank_id' => '39',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '205153165',
                ],
                'enabled' => true,
            ],
            569 => [
                'id' => '8570',
                'bank_id' => '39',
                'name' => 'HATHAZARI SME',
                'bank_branch_data' => [
                    'routing_no' => '205153231',
                ],
                'enabled' => true,
            ],
            570 => [
                'id' => '8571',
                'bank_id' => '39',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '205153644',
                ],
                'enabled' => true,
            ],
            571 => [
                'id' => '8572',
                'bank_id' => '39',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205154272',
                ],
                'enabled' => true,
            ],
            572 => [
                'id' => '8573',
                'bank_id' => '39',
                'name' => 'KOTWALI',
                'bank_branch_data' => [
                    'routing_no' => '205154401',
                ],
                'enabled' => true,
            ],
            573 => [
                'id' => '8574',
                'bank_id' => '39',
                'name' => 'LOHA GARA SME',
                'bank_branch_data' => [
                    'routing_no' => '205154672',
                ],
                'enabled' => true,
            ],
            574 => [
                'id' => '8575',
                'bank_id' => '39',
                'name' => 'MADAM BIBIR HAT',
                'bank_branch_data' => [
                    'routing_no' => '205154698',
                ],
                'enabled' => true,
            ],
            575 => [
                'id' => '8576',
                'bank_id' => '39',
                'name' => 'MOMIN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '205155268',
                ],
                'enabled' => true,
            ],
            576 => [
                'id' => '8577',
                'bank_id' => '39',
                'name' => 'OXYGEN MOUR',
                'bank_branch_data' => [
                    'routing_no' => '205155871',
                ],
                'enabled' => true,
            ],
            577 => [
                'id' => '8578',
                'bank_id' => '39',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '205155921',
                ],
                'enabled' => true,
            ],
            578 => [
                'id' => '8579',
                'bank_id' => '39',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '205156133',
                ],
                'enabled' => true,
            ],
            579 => [
                'id' => '8580',
                'bank_id' => '39',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '205180196',
                ],
                'enabled' => true,
            ],
            580 => [
                'id' => '8581',
                'bank_id' => '39',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '205191156',
                ],
                'enabled' => true,
            ],
            581 => [
                'id' => '8582',
                'bank_id' => '39',
                'name' => 'COMPANIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205191422',
                ],
                'enabled' => true,
            ],
            582 => [
                'id' => '8583',
                'bank_id' => '39',
                'name' => 'GUNABATI',
                'bank_branch_data' => [
                    'routing_no' => '205192171',
                ],
                'enabled' => true,
            ],
            583 => [
                'id' => '8584',
                'bank_id' => '39',
                'name' => 'MEAH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205192926',
                ],
                'enabled' => true,
            ],
            584 => [
                'id' => '8585',
                'bank_id' => '39',
                'name' => 'TEKNAK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205220085',
                ],
                'enabled' => true,
            ],
            585 => [
                'id' => '8586',
                'bank_id' => '39',
                'name' => 'CHAKARIA',
                'bank_branch_data' => [
                    'routing_no' => '205220164',
                ],
                'enabled' => true,
            ],
            586 => [
                'id' => '8587',
                'bank_id' => '39',
                'name' => 'COX\'S BAZAR(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '205220285',
                ],
                'enabled' => true,
            ],
            587 => [
                'id' => '8588',
                'bank_id' => '39',
                'name' => 'AGARGAON',
                'bank_branch_data' => [
                    'routing_no' => '205260045',
                ],
                'enabled' => true,
            ],
            588 => [
                'id' => '8589',
                'bank_id' => '39',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '205260229',
                ],
                'enabled' => true,
            ],
            589 => [
                'id' => '8590',
                'bank_id' => '39',
                'name' => 'ASHULIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205260258',
                ],
                'enabled' => true,
            ],
            590 => [
                'id' => '8591',
                'bank_id' => '39',
                'name' => 'BALIVADRA',
                'bank_branch_data' => [
                    'routing_no' => '205260429',
                ],
                'enabled' => true,
            ],
            591 => [
                'id' => '8592',
                'bank_id' => '39',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '205260432',
                ],
                'enabled' => true,
            ],
            592 => [
                'id' => '8593',
                'bank_id' => '39',
                'name' => 'DHANMONDI MOHILA',
                'bank_branch_data' => [
                    'routing_no' => '205260474',
                ],
                'enabled' => true,
            ],
            593 => [
                'id' => '8594',
                'bank_id' => '39',
                'name' => 'BASHUNDHARA',
                'bank_branch_data' => [
                    'routing_no' => '205260553',
                ],
                'enabled' => true,
            ],
            594 => [
                'id' => '8595',
                'bank_id' => '39',
                'name' => 'BONOSREE',
                'bank_branch_data' => [
                    'routing_no' => '205260724',
                ],
                'enabled' => true,
            ],
            595 => [
                'id' => '8596',
                'bank_id' => '39',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '205260911',
                ],
                'enabled' => true,
            ],
            596 => [
                'id' => '8597',
                'bank_id' => '39',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '205261181',
                ],
                'enabled' => true,
            ],
            597 => [
                'id' => '8598',
                'bank_id' => '39',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '205261723',
                ],
                'enabled' => true,
            ],
            598 => [
                'id' => '8599',
                'bank_id' => '39',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '205262056',
                ],
                'enabled' => true,
            ],
            599 => [
                'id' => '8600',
                'bank_id' => '39',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205262535',
                ],
                'enabled' => true,
            ],
            600 => [
                'id' => '8601',
                'bank_id' => '39',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '205262980',
                ],
                'enabled' => true,
            ],
            601 => [
                'id' => '8602',
                'bank_id' => '39',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '205263192',
                ],
                'enabled' => true,
            ],
            602 => [
                'id' => '8603',
                'bank_id' => '39',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '205263284',
                ],
                'enabled' => true,
            ],
            603 => [
                'id' => '8604',
                'bank_id' => '39',
                'name' => 'NEW ELEPHANT ROAD',
                'bank_branch_data' => [
                    'routing_no' => '205263497',
                ],
                'enabled' => true,
            ],
            604 => [
                'id' => '8605',
                'bank_id' => '39',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '205263705',
                ],
                'enabled' => true,
            ],
            605 => [
                'id' => '8606',
                'bank_id' => '39',
                'name' => 'ROKEYA SHARANI',
                'bank_branch_data' => [
                    'routing_no' => '205264009',
                ],
                'enabled' => true,
            ],
            606 => [
                'id' => '8607',
                'bank_id' => '39',
                'name' => 'RUPNAGAR',
                'bank_branch_data' => [
                    'routing_no' => '205264012',
                ],
                'enabled' => true,
            ],
            607 => [
                'id' => '8608',
                'bank_id' => '39',
                'name' => 'SATMASJID ROAD',
                'bank_branch_data' => [
                    'routing_no' => '205264038',
                ],
                'enabled' => true,
            ],
            608 => [
                'id' => '8609',
                'bank_id' => '39',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '205264096',
                ],
                'enabled' => true,
            ],
            609 => [
                'id' => '8610',
                'bank_id' => '39',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '205264304',
                ],
                'enabled' => true,
            ],
            610 => [
                'id' => '8611',
                'bank_id' => '39',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '205264638',
                ],
                'enabled' => true,
            ],
            611 => [
                'id' => '8612',
                'bank_id' => '39',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '205270006',
                ],
                'enabled' => true,
            ],
            612 => [
                'id' => '8613',
                'bank_id' => '39',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '205270130',
                ],
                'enabled' => true,
            ],
            613 => [
                'id' => '8614',
                'bank_id' => '39',
                'name' => 'MOGHBAZAR MOHILA',
                'bank_branch_data' => [
                    'routing_no' => '205270248',
                ],
                'enabled' => true,
            ],
            614 => [
                'id' => '8615',
                'bank_id' => '39',
                'name' => 'KAZI NAZRUL ISLAM AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '205270301',
                ],
                'enabled' => true,
            ],
            615 => [
                'id' => '8616',
                'bank_id' => '39',
                'name' => 'ATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205270343',
                ],
                'enabled' => true,
            ],
            616 => [
                'id' => '8617',
                'bank_id' => '39',
                'name' => 'BANDURA',
                'bank_branch_data' => [
                    'routing_no' => '205270648',
                ],
                'enabled' => true,
            ],
            617 => [
                'id' => '8618',
                'bank_id' => '39',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '205270880',
                ],
                'enabled' => true,
            ],
            618 => [
                'id' => '8619',
                'bank_id' => '39',
                'name' => 'CORPORATE',
                'bank_branch_data' => [
                    'routing_no' => '205271397',
                ],
                'enabled' => true,
            ],
            619 => [
                'id' => '8620',
                'bank_id' => '39',
                'name' => 'DANIA',
                'bank_branch_data' => [
                    'routing_no' => '205271421',
                ],
                'enabled' => true,
            ],
            620 => [
                'id' => '8621',
                'bank_id' => '39',
                'name' => 'HASNABAD',
                'bank_branch_data' => [
                    'routing_no' => '205272567',
                ],
                'enabled' => true,
            ],
            621 => [
                'id' => '8622',
                'bank_id' => '39',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '205272688',
                ],
                'enabled' => true,
            ],
            622 => [
                'id' => '8623',
                'bank_id' => '39',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205272804',
                ],
                'enabled' => true,
            ],
            623 => [
                'id' => '8624',
                'bank_id' => '39',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '205272983',
                ],
                'enabled' => true,
            ],
            624 => [
                'id' => '8625',
                'bank_id' => '39',
                'name' => 'JOYPARA',
                'bank_branch_data' => [
                    'routing_no' => '205273287',
                ],
                'enabled' => true,
            ],
            625 => [
                'id' => '8626',
                'bank_id' => '39',
                'name' => 'KAKRAIL',
                'bank_branch_data' => [
                    'routing_no' => '205273379',
                ],
                'enabled' => true,
            ],
            626 => [
                'id' => '8627',
                'bank_id' => '39',
                'name' => 'KAMRANGIRCHAR',
                'bank_branch_data' => [
                    'routing_no' => '205273582',
                ],
                'enabled' => true,
            ],
            627 => [
                'id' => '8628',
                'bank_id' => '39',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '205273940',
                ],
                'enabled' => true,
            ],
            628 => [
                'id' => '8629',
                'bank_id' => '39',
                'name' => 'MOTIJHEEL(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '205274336',
                ],
                'enabled' => true,
            ],
            629 => [
                'id' => '8630',
                'bank_id' => '39',
                'name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'routing_no' => '205274365',
                ],
                'enabled' => true,
            ],
            630 => [
                'id' => '8631',
                'bank_id' => '39',
                'name' => 'NEW ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '205275027',
                ],
                'enabled' => true,
            ],
            631 => [
                'id' => '8632',
                'bank_id' => '39',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '205275351',
                ],
                'enabled' => true,
            ],
            632 => [
                'id' => '8633',
                'bank_id' => '39',
                'name' => 'R.K. MISSION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '205275472',
                ],
                'enabled' => true,
            ],
            633 => [
                'id' => '8634',
                'bank_id' => '39',
                'name' => 'SARULIA',
                'bank_branch_data' => [
                    'routing_no' => '205276042',
                ],
                'enabled' => true,
            ],
            634 => [
                'id' => '8635',
                'bank_id' => '39',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '205280670',
                ],
                'enabled' => true,
            ],
            635 => [
                'id' => '8636',
                'bank_id' => '39',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '205300521',
                ],
                'enabled' => true,
            ],
            636 => [
                'id' => '8637',
                'bank_id' => '39',
                'name' => 'PARSHURAM',
                'bank_branch_data' => [
                    'routing_no' => '205301270',
                ],
                'enabled' => true,
            ],
            637 => [
                'id' => '8638',
                'bank_id' => '39',
                'name' => 'SAGOLNAIYA(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '205301362',
                ],
                'enabled' => true,
            ],
            638 => [
                'id' => '8639',
                'bank_id' => '39',
                'name' => 'SELONIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205301425',
                ],
                'enabled' => true,
            ],
            639 => [
                'id' => '8640',
                'bank_id' => '39',
                'name' => 'SONAGAZI SME',
                'bank_branch_data' => [
                    'routing_no' => '205301496',
                ],
                'enabled' => true,
            ],
            640 => [
                'id' => '8641',
                'bank_id' => '39',
                'name' => 'MONIPUR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205330146',
                ],
                'enabled' => true,
            ],
            641 => [
                'id' => '8642',
                'bank_id' => '39',
                'name' => 'JOYDEBPUR',
                'bank_branch_data' => [
                    'routing_no' => '205330733',
                ],
                'enabled' => true,
            ],
            642 => [
                'id' => '8643',
                'bank_id' => '39',
                'name' => 'KAPASIA',
                'bank_branch_data' => [
                    'routing_no' => '205330883',
                ],
                'enabled' => true,
            ],
            643 => [
                'id' => '8644',
                'bank_id' => '39',
                'name' => 'KONABARI',
                'bank_branch_data' => [
                    'routing_no' => '205330946',
                ],
                'enabled' => true,
            ],
            644 => [
                'id' => '8645',
                'bank_id' => '39',
                'name' => 'MAWNA SME',
                'bank_branch_data' => [
                    'routing_no' => '205331040',
                ],
                'enabled' => true,
            ],
            645 => [
                'id' => '8646',
                'bank_id' => '39',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '205331637',
                ],
                'enabled' => true,
            ],
            646 => [
                'id' => '8647',
                'bank_id' => '39',
                'name' => 'RUPDIA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205410082',
                ],
                'enabled' => true,
            ],
            647 => [
                'id' => '8648',
                'bank_id' => '39',
                'name' => 'JESSORE SME',
                'bank_branch_data' => [
                    'routing_no' => '205410958',
                ],
                'enabled' => true,
            ],
            648 => [
                'id' => '8649',
                'bank_id' => '39',
                'name' => 'DUMURIA',
                'bank_branch_data' => [
                    'routing_no' => '205470798',
                ],
                'enabled' => true,
            ],
            649 => [
                'id' => '8650',
                'bank_id' => '39',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '205471542',
                ],
                'enabled' => true,
            ],
            650 => [
                'id' => '8651',
                'bank_id' => '39',
                'name' => 'SIR IQBAL ROAD',
                'bank_branch_data' => [
                    'routing_no' => '205472596',
                ],
                'enabled' => true,
            ],
            651 => [
                'id' => '8652',
                'bank_id' => '39',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '205500947',
                ],
                'enabled' => true,
            ],
            652 => [
                'id' => '8653',
                'bank_id' => '39',
                'name' => 'HAIDERGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205510524',
                ],
                'enabled' => true,
            ],
            653 => [
                'id' => '8654',
                'bank_id' => '39',
                'name' => 'GHIOR',
                'bank_branch_data' => [
                    'routing_no' => '205560374',
                ],
                'enabled' => true,
            ],
            654 => [
                'id' => '8655',
                'bank_id' => '39',
                'name' => 'SINGAIR',
                'bank_branch_data' => [
                    'routing_no' => '205560824',
                ],
                'enabled' => true,
            ],
            655 => [
                'id' => '8656',
                'bank_id' => '39',
                'name' => 'KULAURA',
                'bank_branch_data' => [
                    'routing_no' => '205580941',
                ],
                'enabled' => true,
            ],
            656 => [
                'id' => '8657',
                'bank_id' => '39',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '205581182',
                ],
                'enabled' => true,
            ],
            657 => [
                'id' => '8658',
                'bank_id' => '39',
                'name' => 'MUNSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205591035',
                ],
                'enabled' => true,
            ],
            658 => [
                'id' => '8659',
                'bank_id' => '39',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '205611757',
                ],
                'enabled' => true,
            ],
            659 => [
                'id' => '8660',
                'bank_id' => '39',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '205641185',
                ],
                'enabled' => true,
            ],
            660 => [
                'id' => '8661',
                'bank_id' => '39',
                'name' => 'KALIBARI',
                'bank_branch_data' => [
                    'routing_no' => '205670114',
                ],
                'enabled' => true,
            ],
            661 => [
                'id' => '8662',
                'bank_id' => '39',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '205670222',
                ],
                'enabled' => true,
            ],
            662 => [
                'id' => '8663',
                'bank_id' => '39',
                'name' => 'GOPALDI',
                'bank_branch_data' => [
                    'routing_no' => '205670606',
                ],
                'enabled' => true,
            ],
            663 => [
                'id' => '8664',
                'bank_id' => '39',
                'name' => 'MADANPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '205670651',
                ],
                'enabled' => true,
            ],
            664 => [
                'id' => '8665',
                'bank_id' => '39',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205671184',
                ],
                'enabled' => true,
            ],
            665 => [
                'id' => '8666',
                'bank_id' => '39',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '205680670',
                ],
                'enabled' => true,
            ],
            666 => [
                'id' => '8667',
                'bank_id' => '39',
                'name' => 'NARSHINGDI SME',
                'bank_branch_data' => [
                    'routing_no' => '205680854',
                ],
                'enabled' => true,
            ],
            667 => [
                'id' => '8668',
                'bank_id' => '39',
                'name' => 'NATORE',
                'bank_branch_data' => [
                    'routing_no' => '205691098',
                ],
                'enabled' => true,
            ],
            668 => [
                'id' => '8669',
                'bank_id' => '39',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205700255',
                ],
                'enabled' => true,
            ],
            669 => [
                'id' => '8670',
                'bank_id' => '39',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '205750250',
                ],
                'enabled' => true,
            ],
            670 => [
                'id' => '8671',
                'bank_id' => '39',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '205750676',
                ],
                'enabled' => true,
            ],
            671 => [
                'id' => '8672',
                'bank_id' => '39',
                'name' => 'SEBARHAT SME',
                'bank_branch_data' => [
                    'routing_no' => '205752061',
                ],
                'enabled' => true,
            ],
            672 => [
                'id' => '8673',
                'bank_id' => '39',
                'name' => 'ISHWARDI',
                'bank_branch_data' => [
                    'routing_no' => '205761210',
                ],
                'enabled' => true,
            ],
            673 => [
                'id' => '8674',
                'bank_id' => '39',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '205761786',
                ],
                'enabled' => true,
            ],
            674 => [
                'id' => '8675',
                'bank_id' => '39',
                'name' => 'BANESHWAR',
                'bank_branch_data' => [
                    'routing_no' => '205810224',
                ],
                'enabled' => true,
            ],
            675 => [
                'id' => '8676',
                'bank_id' => '39',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '205811931',
                ],
                'enabled' => true,
            ],
            676 => [
                'id' => '8677',
                'bank_id' => '39',
                'name' => 'RAJBARI',
                'bank_branch_data' => [
                    'routing_no' => '205820735',
                ],
                'enabled' => true,
            ],
            677 => [
                'id' => '8678',
                'bank_id' => '39',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '205851454',
                ],
                'enabled' => true,
            ],
            678 => [
                'id' => '8679',
                'bank_id' => '39',
                'name' => 'SATKHIRA SME',
                'bank_branch_data' => [
                    'routing_no' => '205871100',
                ],
                'enabled' => true,
            ],
            679 => [
                'id' => '8680',
                'bank_id' => '39',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205881879',
                ],
                'enabled' => true,
            ],
            680 => [
                'id' => '8681',
                'bank_id' => '39',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '205890552',
                ],
                'enabled' => true,
            ],
            681 => [
                'id' => '8682',
                'bank_id' => '39',
                'name' => 'BANDAR BAZAR(ISLAMI BANKING)',
                'bank_branch_data' => [
                    'routing_no' => '205910229',
                ],
                'enabled' => true,
            ],
            682 => [
                'id' => '8683',
                'bank_id' => '39',
                'name' => 'BEANI BAZAR SME',
                'bank_branch_data' => [
                    'routing_no' => '205910324',
                ],
                'enabled' => true,
            ],
            683 => [
                'id' => '8684',
                'bank_id' => '39',
                'name' => 'BISHWANATH SME',
                'bank_branch_data' => [
                    'routing_no' => '205910445',
                ],
                'enabled' => true,
            ],
            684 => [
                'id' => '8685',
                'bank_id' => '39',
                'name' => 'CHARKHAI',
                'bank_branch_data' => [
                    'routing_no' => '205910708',
                ],
                'enabled' => true,
            ],
            685 => [
                'id' => '8686',
                'bank_id' => '39',
                'name' => 'CHOWHATTA',
                'bank_branch_data' => [
                    'routing_no' => '205910858',
                ],
                'enabled' => true,
            ],
            686 => [
                'id' => '8687',
                'bank_id' => '39',
                'name' => 'HETIMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '205911752',
                ],
                'enabled' => true,
            ],
            687 => [
                'id' => '8688',
                'bank_id' => '39',
                'name' => 'LALDIGHIRPAR',
                'bank_branch_data' => [
                    'routing_no' => '205912506',
                ],
                'enabled' => true,
            ],
            688 => [
                'id' => '8689',
                'bank_id' => '39',
                'name' => 'PATHANTULA',
                'bank_branch_data' => [
                    'routing_no' => '205912869',
                ],
                'enabled' => true,
            ],
            689 => [
                'id' => '8690',
                'bank_id' => '39',
                'name' => 'SHAHJALAL UPASHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '205913255',
                ],
                'enabled' => true,
            ],
            690 => [
                'id' => '8691',
                'bank_id' => '39',
                'name' => 'TAJPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '205913839',
                ],
                'enabled' => true,
            ],
            691 => [
                'id' => '8692',
                'bank_id' => '39',
                'name' => 'BALLA',
                'bank_branch_data' => [
                    'routing_no' => '205930175',
                ],
                'enabled' => true,
            ],
            692 => [
                'id' => '8693',
                'bank_id' => '39',
                'name' => 'TANGAIL SME',
                'bank_branch_data' => [
                    'routing_no' => '205932302',
                ],
                'enabled' => true,
            ],
            693 => [
                'id' => '8694',
                'bank_id' => '40',
                'name' => 'BAGERHAT',
                'bank_branch_data' => [
                    'routing_no' => '210010077',
                ],
                'enabled' => true,
            ],
            694 => [
                'id' => '8695',
                'bank_id' => '40',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '210060285',
                ],
                'enabled' => true,
            ],
            695 => [
                'id' => '8696',
                'bank_id' => '40',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '210100374',
                ],
                'enabled' => true,
            ],
            696 => [
                'id' => '8697',
                'bank_id' => '40',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '210120433',
                ],
                'enabled' => true,
            ],
            697 => [
                'id' => '8698',
                'bank_id' => '40',
                'name' => 'CHAKTAI',
                'bank_branch_data' => [
                    'routing_no' => '210150087',
                ],
                'enabled' => true,
            ],
            698 => [
                'id' => '8699',
                'bank_id' => '40',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '210150137',
                ],
                'enabled' => true,
            ],
            699 => [
                'id' => '8700',
                'bank_id' => '40',
                'name' => 'AGRABAD ISLAMI BANKING WINDOW',
                'bank_branch_data' => [
                    'routing_no' => '210150153',
                ],
                'enabled' => true,
            ],
            700 => [
                'id' => '8701',
                'bank_id' => '40',
                'name' => 'BAKOLIA',
                'bank_branch_data' => [
                    'routing_no' => '210150308',
                ],
                'enabled' => true,
            ],
            701 => [
                'id' => '8702',
                'bank_id' => '40',
                'name' => 'KARNAPHULI',
                'bank_branch_data' => [
                    'routing_no' => '210150324',
                ],
                'enabled' => true,
            ],
            702 => [
                'id' => '8703',
                'bank_id' => '40',
                'name' => 'SHEIKH MUJIB ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210150511',
                ],
                'enabled' => true,
            ],
            703 => [
                'id' => '8704',
                'bank_id' => '40',
                'name' => 'BAHADDAR HAT',
                'bank_branch_data' => [
                    'routing_no' => '210150795',
                ],
                'enabled' => true,
            ],
            704 => [
                'id' => '8705',
                'bank_id' => '40',
                'name' => 'C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '210151486',
                ],
                'enabled' => true,
            ],
            705 => [
                'id' => '8706',
                'bank_id' => '40',
                'name' => 'C.E.P.Z.',
                'bank_branch_data' => [
                    'routing_no' => '210151578',
                ],
                'enabled' => true,
            ],
            706 => [
                'id' => '8707',
                'bank_id' => '40',
                'name' => 'LANGOLMORA',
                'bank_branch_data' => [
                    'routing_no' => '210151752',
                ],
                'enabled' => true,
            ],
            707 => [
                'id' => '8708',
                'bank_id' => '40',
                'name' => 'CHITTAGONG UNIVERSITY',
                'bank_branch_data' => [
                    'routing_no' => '210152085',
                ],
                'enabled' => true,
            ],
            708 => [
                'id' => '8709',
                'bank_id' => '40',
                'name' => 'CHOWDHURI HAT',
                'bank_branch_data' => [
                    'routing_no' => '210152177',
                ],
                'enabled' => true,
            ],
            709 => [
                'id' => '8710',
                'bank_id' => '40',
                'name' => 'GUNAGARI',
                'bank_branch_data' => [
                    'routing_no' => '210153071',
                ],
                'enabled' => true,
            ],
            710 => [
                'id' => '8711',
                'bank_id' => '40',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210153642',
                ],
                'enabled' => true,
            ],
            711 => [
                'id' => '8712',
                'bank_id' => '40',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '210153734',
                ],
                'enabled' => true,
            ],
            712 => [
                'id' => '8713',
                'bank_id' => '40',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210154270',
                ],
                'enabled' => true,
            ],
            713 => [
                'id' => '8714',
                'bank_id' => '40',
                'name' => 'KUMIRA',
                'bank_branch_data' => [
                    'routing_no' => '210154454',
                ],
                'enabled' => true,
            ],
            714 => [
                'id' => '8715',
                'bank_id' => '40',
                'name' => 'OXYGEN SQUARE',
                'bank_branch_data' => [
                    'routing_no' => '210155903',
                ],
                'enabled' => true,
            ],
            715 => [
                'id' => '8716',
                'bank_id' => '40',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '210155929',
                ],
                'enabled' => true,
            ],
            716 => [
                'id' => '8717',
                'bank_id' => '40',
                'name' => 'PANCHLAISH',
                'bank_branch_data' => [
                    'routing_no' => '210156049',
                ],
                'enabled' => true,
            ],
            717 => [
                'id' => '8718',
                'bank_id' => '40',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '210156131',
                ],
                'enabled' => true,
            ],
            718 => [
                'id' => '8719',
                'bank_id' => '40',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '210156731',
                ],
                'enabled' => true,
            ],
            719 => [
                'id' => '8720',
                'bank_id' => '40',
                'name' => 'ALAMDANGA',
                'bank_branch_data' => [
                    'routing_no' => '210180044',
                ],
                'enabled' => true,
            ],
            720 => [
                'id' => '8721',
                'bank_id' => '40',
                'name' => 'CHUADANGA',
                'bank_branch_data' => [
                    'routing_no' => '210180194',
                ],
                'enabled' => true,
            ],
            721 => [
                'id' => '8722',
                'bank_id' => '40',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '210191154',
                ],
                'enabled' => true,
            ],
            722 => [
                'id' => '8723',
                'bank_id' => '40',
                'name' => 'NIMSHAR',
                'bank_branch_data' => [
                    'routing_no' => '210193349',
                ],
                'enabled' => true,
            ],
            723 => [
                'id' => '8724',
                'bank_id' => '40',
                'name' => 'RAMCHANDRAPUR',
                'bank_branch_data' => [
                    'routing_no' => '210193644',
                ],
                'enabled' => true,
            ],
            724 => [
                'id' => '8725',
                'bank_id' => '40',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210220254',
                ],
                'enabled' => true,
            ],
            725 => [
                'id' => '8726',
                'bank_id' => '40',
                'name' => 'ASHKONA',
                'bank_branch_data' => [
                    'routing_no' => '210260201',
                ],
                'enabled' => true,
            ],
            726 => [
                'id' => '8727',
                'bank_id' => '40',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '210260227',
                ],
                'enabled' => true,
            ],
            727 => [
                'id' => '8728',
                'bank_id' => '40',
                'name' => 'SONARGAON JANAPATH',
                'bank_branch_data' => [
                    'routing_no' => '210260243',
                ],
                'enabled' => true,
            ],
            728 => [
                'id' => '8729',
                'bank_id' => '40',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '210260430',
                ],
                'enabled' => true,
            ],
            729 => [
                'id' => '8730',
                'bank_id' => '40',
                'name' => 'HEMAYET PUR',
                'bank_branch_data' => [
                    'routing_no' => '210260506',
                ],
                'enabled' => true,
            ],
            730 => [
                'id' => '8731',
                'bank_id' => '40',
                'name' => 'DAKSHIN KHAN',
                'bank_branch_data' => [
                    'routing_no' => '210260919',
                ],
                'enabled' => true,
            ],
            731 => [
                'id' => '8732',
                'bank_id' => '40',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '210261189',
                ],
                'enabled' => true,
            ],
            732 => [
                'id' => '8733',
                'bank_id' => '40',
                'name' => 'KAMARPARA',
                'bank_branch_data' => [
                    'routing_no' => '210261518',
                ],
                'enabled' => true,
            ],
            733 => [
                'id' => '8734',
                'bank_id' => '40',
                'name' => 'GREEN ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210261697',
                ],
                'enabled' => true,
            ],
            734 => [
                'id' => '8735',
                'bank_id' => '40',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '210261721',
                ],
                'enabled' => true,
            ],
            735 => [
                'id' => '8736',
                'bank_id' => '40',
                'name' => 'GULSHAN-1',
                'bank_branch_data' => [
                    'routing_no' => '210261934',
                ],
                'enabled' => true,
            ],
            736 => [
                'id' => '8737',
                'bank_id' => '40',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210262533',
                ],
                'enabled' => true,
            ],
            737 => [
                'id' => '8738',
                'bank_id' => '40',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '210262988',
                ],
                'enabled' => true,
            ],
            738 => [
                'id' => '8739',
                'bank_id' => '40',
                'name' => 'MOHAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '210263190',
                ],
                'enabled' => true,
            ],
            739 => [
                'id' => '8740',
                'bank_id' => '40',
                'name' => 'MOHAMMADPUR',
                'bank_branch_data' => [
                    'routing_no' => '210263282',
                ],
                'enabled' => true,
            ],
            740 => [
                'id' => '8741',
                'bank_id' => '40',
                'name' => 'PANTHA PATH',
                'bank_branch_data' => [
                    'routing_no' => '210263611',
                ],
                'enabled' => true,
            ],
            741 => [
                'id' => '8742',
                'bank_id' => '40',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '210263703',
                ],
                'enabled' => true,
            ],
            742 => [
                'id' => '8743',
                'bank_id' => '40',
                'name' => 'RING ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210263974',
                ],
                'enabled' => true,
            ],
            743 => [
                'id' => '8744',
                'bank_id' => '40',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '210264094',
                ],
                'enabled' => true,
            ],
            744 => [
                'id' => '8745',
                'bank_id' => '40',
                'name' => 'TEJGOAN LINK ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210264528',
                ],
                'enabled' => true,
            ],
            745 => [
                'id' => '8746',
                'bank_id' => '40',
                'name' => 'UTTARA MODEL TOWN',
                'bank_branch_data' => [
                    'routing_no' => '210264694',
                ],
                'enabled' => true,
            ],
            746 => [
                'id' => '8747',
                'bank_id' => '40',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '210270004',
                ],
                'enabled' => true,
            ],
            747 => [
                'id' => '8748',
                'bank_id' => '40',
                'name' => 'AGANAGAR',
                'bank_branch_data' => [
                    'routing_no' => '210270138',
                ],
                'enabled' => true,
            ],
            748 => [
                'id' => '8749',
                'bank_id' => '40',
                'name' => 'KHOLAMORA',
                'bank_branch_data' => [
                    'routing_no' => '210270338',
                ],
                'enabled' => true,
            ],
            749 => [
                'id' => '8750',
                'bank_id' => '40',
                'name' => 'EKORIA(KERANIGANJ)',
                'bank_branch_data' => [
                    'routing_no' => '210272086',
                ],
                'enabled' => true,
            ],
            750 => [
                'id' => '8751',
                'bank_id' => '40',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '210272323',
                ],
                'enabled' => true,
            ],
            751 => [
                'id' => '8752',
                'bank_id' => '40',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210272802',
                ],
                'enabled' => true,
            ],
            752 => [
                'id' => '8753',
                'bank_id' => '40',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '210272981',
                ],
                'enabled' => true,
            ],
            753 => [
                'id' => '8754',
                'bank_id' => '40',
                'name' => 'MALIBAGH',
                'bank_branch_data' => [
                    'routing_no' => '210273948',
                ],
                'enabled' => true,
            ],
            754 => [
                'id' => '8755',
                'bank_id' => '40',
                'name' => 'MATUAIL',
                'bank_branch_data' => [
                    'routing_no' => '210274000',
                ],
                'enabled' => true,
            ],
            755 => [
                'id' => '8756',
                'bank_id' => '40',
                'name' => 'MUNSHIKHOLA',
                'bank_branch_data' => [
                    'routing_no' => '210274518',
                ],
                'enabled' => true,
            ],
            756 => [
                'id' => '8757',
                'bank_id' => '40',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210274697',
                ],
                'enabled' => true,
            ],
            757 => [
                'id' => '8758',
                'bank_id' => '40',
                'name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210274750',
                ],
                'enabled' => true,
            ],
            758 => [
                'id' => '8759',
                'bank_id' => '40',
                'name' => 'NEW ESKATON',
                'bank_branch_data' => [
                    'routing_no' => '210275025',
                ],
                'enabled' => true,
            ],
            759 => [
                'id' => '8760',
                'bank_id' => '40',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '210275359',
                ],
                'enabled' => true,
            ],
            760 => [
                'id' => '8761',
                'bank_id' => '40',
                'name' => 'TOPKHANA ROAD',
                'bank_branch_data' => [
                    'routing_no' => '210276732',
                ],
                'enabled' => true,
            ],
            761 => [
                'id' => '8762',
                'bank_id' => '40',
                'name' => 'TOPKAHNA ISLAMI BANKING WINDOW',
                'bank_branch_data' => [
                    'routing_no' => '210276758',
                ],
                'enabled' => true,
            ],
            762 => [
                'id' => '8763',
                'bank_id' => '40',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '210280678',
                ],
                'enabled' => true,
            ],
            763 => [
                'id' => '8764',
                'bank_id' => '40',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '210290521',
                ],
                'enabled' => true,
            ],
            764 => [
                'id' => '8765',
                'bank_id' => '40',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '210300529',
                ],
                'enabled' => true,
            ],
            765 => [
                'id' => '8766',
                'bank_id' => '40',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210320583',
                ],
                'enabled' => true,
            ],
            766 => [
                'id' => '8767',
                'bank_id' => '40',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '210330528',
                ],
                'enabled' => true,
            ],
            767 => [
                'id' => '8768',
                'bank_id' => '40',
                'name' => 'SHAFIPUR',
                'bank_branch_data' => [
                    'routing_no' => '210331422',
                ],
                'enabled' => true,
            ],
            768 => [
                'id' => '8769',
                'bank_id' => '40',
                'name' => 'GOPALGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210350379',
                ],
                'enabled' => true,
            ],
            769 => [
                'id' => '8770',
                'bank_id' => '40',
                'name' => 'KOTALIPARA',
                'bank_branch_data' => [
                    'routing_no' => '210350674',
                ],
                'enabled' => true,
            ],
            770 => [
                'id' => '8771',
                'bank_id' => '40',
                'name' => 'PATGATI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210350832',
                ],
                'enabled' => true,
            ],
            771 => [
                'id' => '8772',
                'bank_id' => '40',
                'name' => 'BAKSHIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210390100',
                ],
                'enabled' => true,
            ],
            772 => [
                'id' => '8773',
                'bank_id' => '40',
                'name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '210410280',
                ],
                'enabled' => true,
            ],
            773 => [
                'id' => '8774',
                'bank_id' => '40',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '210410943',
                ],
                'enabled' => true,
            ],
            774 => [
                'id' => '8775',
                'bank_id' => '40',
                'name' => 'JHENAIDAH',
                'bank_branch_data' => [
                    'routing_no' => '210440647',
                ],
                'enabled' => true,
            ],
            775 => [
                'id' => '8776',
                'bank_id' => '40',
                'name' => 'KHAN JAHAN ALI',
                'bank_branch_data' => [
                    'routing_no' => '210470059',
                ],
                'enabled' => true,
            ],
            776 => [
                'id' => '8777',
                'bank_id' => '40',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '210471540',
                ],
                'enabled' => true,
            ],
            777 => [
                'id' => '8778',
                'bank_id' => '40',
                'name' => 'BHAIRAB SME',
                'bank_branch_data' => [
                    'routing_no' => '210480207',
                ],
                'enabled' => true,
            ],
            778 => [
                'id' => '8779',
                'bank_id' => '40',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '210500945',
                ],
                'enabled' => true,
            ],
            779 => [
                'id' => '8780',
                'bank_id' => '40',
                'name' => 'SHIBCHAR',
                'bank_branch_data' => [
                    'routing_no' => '210540705',
                ],
                'enabled' => true,
            ],
            780 => [
                'id' => '8781',
                'bank_id' => '40',
                'name' => 'TAKERHAT BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210540792',
                ],
                'enabled' => true,
            ],
            781 => [
                'id' => '8782',
                'bank_id' => '40',
                'name' => 'MOULVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210581180',
                ],
                'enabled' => true,
            ],
            782 => [
                'id' => '8783',
                'bank_id' => '40',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '210611755',
                ],
                'enabled' => true,
            ],
            783 => [
                'id' => '8784',
                'bank_id' => '40',
                'name' => 'ATRAI',
                'bank_branch_data' => [
                    'routing_no' => '210640168',
                ],
                'enabled' => true,
            ],
            784 => [
                'id' => '8785',
                'bank_id' => '40',
                'name' => 'BUNTI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210670154',
                ],
                'enabled' => true,
            ],
            785 => [
                'id' => '8786',
                'bank_id' => '40',
                'name' => 'KATCHPUR',
                'bank_branch_data' => [
                    'routing_no' => '210670820',
                ],
                'enabled' => true,
            ],
            786 => [
                'id' => '8787',
                'bank_id' => '40',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210671182',
                ],
                'enabled' => true,
            ],
            787 => [
                'id' => '8788',
                'bank_id' => '40',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '210680678',
                ],
                'enabled' => true,
            ],
            788 => [
                'id' => '8789',
                'bank_id' => '40',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210700253',
                ],
                'enabled' => true,
            ],
            789 => [
                'id' => '8790',
                'bank_id' => '40',
                'name' => 'KANSAT',
                'bank_branch_data' => [
                    'routing_no' => '210700529',
                ],
                'enabled' => true,
            ],
            790 => [
                'id' => '8791',
                'bank_id' => '40',
                'name' => 'ROHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '210700882',
                ],
                'enabled' => true,
            ],
            791 => [
                'id' => '8792',
                'bank_id' => '40',
                'name' => 'NILPHAMARI',
                'bank_branch_data' => [
                    'routing_no' => '210730731',
                ],
                'enabled' => true,
            ],
            792 => [
                'id' => '8793',
                'bank_id' => '40',
                'name' => 'SYEDPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '210731198',
                ],
                'enabled' => true,
            ],
            793 => [
                'id' => '8794',
                'bank_id' => '40',
                'name' => 'BASHURHAT',
                'bank_branch_data' => [
                    'routing_no' => '210750258',
                ],
                'enabled' => true,
            ],
            794 => [
                'id' => '8795',
                'bank_id' => '40',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '210761784',
                ],
                'enabled' => true,
            ],
            795 => [
                'id' => '8796',
                'bank_id' => '40',
                'name' => 'PATUAKHALI',
                'bank_branch_data' => [
                    'routing_no' => '210781098',
                ],
                'enabled' => true,
            ],
            796 => [
                'id' => '8797',
                'bank_id' => '40',
                'name' => 'MATHBARIA',
                'bank_branch_data' => [
                    'routing_no' => '210790526',
                ],
                'enabled' => true,
            ],
            797 => [
                'id' => '8798',
                'bank_id' => '40',
                'name' => 'BANESHWAR',
                'bank_branch_data' => [
                    'routing_no' => '210810222',
                ],
                'enabled' => true,
            ],
            798 => [
                'id' => '8799',
                'bank_id' => '40',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '210811939',
                ],
                'enabled' => true,
            ],
            799 => [
                'id' => '8800',
                'bank_id' => '40',
                'name' => 'GOALANDA',
                'bank_branch_data' => [
                    'routing_no' => '210820283',
                ],
                'enabled' => true,
            ],
            800 => [
                'id' => '8801',
                'bank_id' => '40',
                'name' => 'PIRGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210851360',
                ],
                'enabled' => true,
            ],
            801 => [
                'id' => '8802',
                'bank_id' => '40',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '210851452',
                ],
                'enabled' => true,
            ],
            802 => [
                'id' => '8803',
                'bank_id' => '40',
                'name' => 'BHOJESWAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210860151',
                ],
                'enabled' => true,
            ],
            803 => [
                'id' => '8804',
                'bank_id' => '40',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '210871090',
                ],
                'enabled' => true,
            ],
            804 => [
                'id' => '8805',
                'bank_id' => '40',
                'name' => 'HATIKUMRUL',
                'bank_branch_data' => [
                    'routing_no' => '210880915',
                ],
                'enabled' => true,
            ],
            805 => [
                'id' => '8806',
                'bank_id' => '40',
                'name' => 'SUNAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '210901128',
                ],
                'enabled' => true,
            ],
            806 => [
                'id' => '8807',
                'bank_id' => '40',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210910319',
                ],
                'enabled' => true,
            ],
            807 => [
                'id' => '8808',
                'bank_id' => '40',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '210910430',
                ],
                'enabled' => true,
            ],
            808 => [
                'id' => '8809',
                'bank_id' => '40',
                'name' => 'GOALA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '210911547',
                ],
                'enabled' => true,
            ],
            809 => [
                'id' => '8810',
                'bank_id' => '40',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '210913558',
                ],
                'enabled' => true,
            ],
            810 => [
                'id' => '8811',
                'bank_id' => '40',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '210932292',
                ],
                'enabled' => true,
            ],
            811 => [
                'id' => '8812',
                'bank_id' => '41',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '215100379',
                ],
                'enabled' => true,
            ],
            812 => [
                'id' => '8813',
                'bank_id' => '41',
                'name' => '31-AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '215150040',
                ],
                'enabled' => true,
            ],
            813 => [
                'id' => '8814',
                'bank_id' => '41',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '215150132',
                ],
                'enabled' => true,
            ],
            814 => [
                'id' => '8815',
                'bank_id' => '41',
                'name' => 'CHITTAGONG(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '215152143',
                ],
                'enabled' => true,
            ],
            815 => [
                'id' => '8816',
                'bank_id' => '41',
                'name' => 'NASIRABAD',
                'bank_branch_data' => [
                    'routing_no' => '215155537',
                ],
                'enabled' => true,
            ],
            816 => [
                'id' => '8817',
                'bank_id' => '41',
                'name' => 'STATION ROAD',
                'bank_branch_data' => [
                    'routing_no' => '215157519',
                ],
                'enabled' => true,
            ],
            817 => [
                'id' => '8818',
                'bank_id' => '41',
                'name' => 'DHANMONDI(ROAD-2)',
                'bank_branch_data' => [
                    'routing_no' => '215261218',
                ],
                'enabled' => true,
            ],
            818 => [
                'id' => '8819',
                'bank_id' => '41',
                'name' => 'DHANMONDI(ROAD-5)',
                'bank_branch_data' => [
                    'routing_no' => '215261247',
                ],
                'enabled' => true,
            ],
            819 => [
                'id' => '8820',
                'bank_id' => '41',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '215261726',
                ],
                'enabled' => true,
            ],
            820 => [
                'id' => '8821',
                'bank_id' => '41',
                'name' => 'GULSHAN NORTH',
                'bank_branch_data' => [
                    'routing_no' => '215261900',
                ],
                'enabled' => true,
            ],
            821 => [
                'id' => '8822',
                'bank_id' => '41',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '215262538',
                ],
                'enabled' => true,
            ],
            822 => [
                'id' => '8823',
                'bank_id' => '41',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '215262983',
                ],
                'enabled' => true,
            ],
            823 => [
                'id' => '8824',
                'bank_id' => '41',
                'name' => 'SAVAR',
                'bank_branch_data' => [
                    'routing_no' => '215264099',
                ],
                'enabled' => true,
            ],
            824 => [
                'id' => '8825',
                'bank_id' => '41',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '215270009',
                ],
                'enabled' => true,
            ],
            825 => [
                'id' => '8826',
                'bank_id' => '41',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '215271279',
                ],
                'enabled' => true,
            ],
            826 => [
                'id' => '8827',
                'bank_id' => '41',
                'name' => 'DHAKA(MAIN)',
                'bank_branch_data' => [
                    'routing_no' => '215271787',
                ],
                'enabled' => true,
            ],
            827 => [
                'id' => '8828',
                'bank_id' => '41',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '215274247',
                ],
                'enabled' => true,
            ],
            828 => [
                'id' => '8829',
                'bank_id' => '41',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '215471545',
                ],
                'enabled' => true,
            ],
            829 => [
                'id' => '8830',
                'bank_id' => '41',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '215671187',
                ],
                'enabled' => true,
            ],
            830 => [
                'id' => '8831',
                'bank_id' => '41',
                'name' => 'SYLHET SADAR',
                'bank_branch_data' => [
                    'routing_no' => '215913674',
                ],
                'enabled' => true,
            ],
            831 => [
                'id' => '8832',
                'bank_id' => '42',
                'name' => 'CHITTAGONG',
                'bank_branch_data' => [
                    'routing_no' => '220151968',
                ],
                'enabled' => true,
            ],
            832 => [
                'id' => '8833',
                'bank_id' => '42',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '220261724',
                ],
                'enabled' => true,
            ],
            833 => [
                'id' => '8834',
                'bank_id' => '42',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '220270007',
                ],
                'enabled' => true,
            ],
            834 => [
                'id' => '8835',
                'bank_id' => '42',
                'name' => 'DHAKA',
                'bank_branch_data' => [
                    'routing_no' => '220271514',
                ],
                'enabled' => true,
            ],
            835 => [
                'id' => '8836',
                'bank_id' => '42',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '220471543',
                ],
                'enabled' => true,
            ],
            836 => [
                'id' => '8837',
                'bank_id' => '42',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '220811932',
                ],
                'enabled' => true,
            ],
            837 => [
                'id' => '8838',
                'bank_id' => '42',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '220913551',
                ],
                'enabled' => true,
            ],
            838 => [
                'id' => '8839',
                'bank_id' => '43',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '225060283',
                ],
                'enabled' => true,
            ],
            839 => [
                'id' => '8840',
                'bank_id' => '43',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '225100372',
                ],
                'enabled' => true,
            ],
            840 => [
                'id' => '8841',
                'bank_id' => '43',
                'name' => 'SHERPUR',
                'bank_branch_data' => [
                    'routing_no' => '225102741',
                ],
                'enabled' => true,
            ],
            841 => [
                'id' => '8842',
                'bank_id' => '43',
                'name' => 'BRAHMANBARIA',
                'bank_branch_data' => [
                    'routing_no' => '225120431',
                ],
                'enabled' => true,
            ],
            842 => [
                'id' => '8843',
                'bank_id' => '43',
                'name' => 'CHANDPUR',
                'bank_branch_data' => [
                    'routing_no' => '225130313',
                ],
                'enabled' => true,
            ],
            843 => [
                'id' => '8844',
                'bank_id' => '43',
                'name' => 'HAJIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225130889',
                ],
                'enabled' => true,
            ],
            844 => [
                'id' => '8845',
                'bank_id' => '43',
                'name' => 'KACHUA',
                'bank_branch_data' => [
                    'routing_no' => '225130913',
                ],
                'enabled' => true,
            ],
            845 => [
                'id' => '8846',
                'bank_id' => '43',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '225150135',
                ],
                'enabled' => true,
            ],
            846 => [
                'id' => '8847',
                'bank_id' => '43',
                'name' => 'ANDERKILLA',
                'bank_branch_data' => [
                    'routing_no' => '225150469',
                ],
                'enabled' => true,
            ],
            847 => [
                'id' => '8848',
                'bank_id' => '43',
                'name' => 'BANDARTILA',
                'bank_branch_data' => [
                    'routing_no' => '225150948',
                ],
                'enabled' => true,
            ],
            848 => [
                'id' => '8849',
                'bank_id' => '43',
                'name' => 'BHATIARY SME',
                'bank_branch_data' => [
                    'routing_no' => '225151226',
                ],
                'enabled' => true,
            ],
            849 => [
                'id' => '8850',
                'bank_id' => '43',
                'name' => 'CHAWK BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225151934',
                ],
                'enabled' => true,
            ],
            850 => [
                'id' => '8851',
                'bank_id' => '43',
                'name' => 'HALISHAHAR',
                'bank_branch_data' => [
                    'routing_no' => '225153161',
                ],
                'enabled' => true,
            ],
            851 => [
                'id' => '8852',
                'bank_id' => '43',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '225153640',
                ],
                'enabled' => true,
            ],
            852 => [
                'id' => '8853',
                'bank_id' => '43',
                'name' => 'KADAMTALI',
                'bank_branch_data' => [
                    'routing_no' => '225153732',
                ],
                'enabled' => true,
            ],
            853 => [
                'id' => '8854',
                'bank_id' => '43',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225154278',
                ],
                'enabled' => true,
            ],
            854 => [
                'id' => '8855',
                'bank_id' => '43',
                'name' => 'LOHAGARA SME',
                'bank_branch_data' => [
                    'routing_no' => '225154678',
                ],
                'enabled' => true,
            ],
            855 => [
                'id' => '8856',
                'bank_id' => '43',
                'name' => 'O.R. NIZAM ROAD',
                'bank_branch_data' => [
                    'routing_no' => '225155806',
                ],
                'enabled' => true,
            ],
            856 => [
                'id' => '8857',
                'bank_id' => '43',
                'name' => 'OXYGEN MOUR',
                'bank_branch_data' => [
                    'routing_no' => '225155877',
                ],
                'enabled' => true,
            ],
            857 => [
                'id' => '8858',
                'bank_id' => '43',
                'name' => 'PAHARTALI',
                'bank_branch_data' => [
                    'routing_no' => '225155927',
                ],
                'enabled' => true,
            ],
            858 => [
                'id' => '8859',
                'bank_id' => '43',
                'name' => 'PATHERHAT',
                'bank_branch_data' => [
                    'routing_no' => '225156139',
                ],
                'enabled' => true,
            ],
            859 => [
                'id' => '8860',
                'bank_id' => '43',
                'name' => 'PRABARTAK',
                'bank_branch_data' => [
                    'routing_no' => '225156326',
                ],
                'enabled' => true,
            ],
            860 => [
                'id' => '8861',
                'bank_id' => '43',
                'name' => 'SATKANIA',
                'bank_branch_data' => [
                    'routing_no' => '225157062',
                ],
                'enabled' => true,
            ],
            861 => [
                'id' => '8862',
                'bank_id' => '43',
                'name' => 'CHOUDDAGRAM',
                'bank_branch_data' => [
                    'routing_no' => '225191060',
                ],
                'enabled' => true,
            ],
            862 => [
                'id' => '8863',
                'bank_id' => '43',
                'name' => 'COMILLA',
                'bank_branch_data' => [
                    'routing_no' => '225191152',
                ],
                'enabled' => true,
            ],
            863 => [
                'id' => '8864',
                'bank_id' => '43',
                'name' => 'DAULATGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225191549',
                ],
                'enabled' => true,
            ],
            864 => [
                'id' => '8865',
                'bank_id' => '43',
                'name' => 'GOURIPUR',
                'bank_branch_data' => [
                    'routing_no' => '225192119',
                ],
                'enabled' => true,
            ],
            865 => [
                'id' => '8866',
                'bank_id' => '43',
                'name' => 'COXS BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225220252',
                ],
                'enabled' => true,
            ],
            866 => [
                'id' => '8867',
                'bank_id' => '43',
                'name' => 'ASHULIA',
                'bank_branch_data' => [
                    'routing_no' => '225260225',
                ],
                'enabled' => true,
            ],
            867 => [
                'id' => '8868',
                'bank_id' => '43',
                'name' => 'SONARGAON JANAPATH',
                'bank_branch_data' => [
                    'routing_no' => '225260241',
                ],
                'enabled' => true,
            ],
            868 => [
                'id' => '8869',
                'bank_id' => '43',
                'name' => 'JAMUNA FUTURE PARK',
                'bank_branch_data' => [
                    'routing_no' => '225260333',
                ],
                'enabled' => true,
            ],
            869 => [
                'id' => '8870',
                'bank_id' => '43',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '225260438',
                ],
                'enabled' => true,
            ],
            870 => [
                'id' => '8871',
                'bank_id' => '43',
                'name' => 'BANANI LAKE VIEW',
                'bank_branch_data' => [
                    'routing_no' => '225260638',
                ],
                'enabled' => true,
            ],
            871 => [
                'id' => '8872',
                'bank_id' => '43',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '225261187',
                ],
                'enabled' => true,
            ],
            872 => [
                'id' => '8873',
                'bank_id' => '43',
                'name' => 'DSE NUKUNJA',
                'bank_branch_data' => [
                    'routing_no' => '225261279',
                ],
                'enabled' => true,
            ],
            873 => [
                'id' => '8874',
                'bank_id' => '43',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '225261729',
                ],
                'enabled' => true,
            ],
            874 => [
                'id' => '8875',
                'bank_id' => '43',
                'name' => 'GULSHAN AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '225261732',
                ],
                'enabled' => true,
            ],
            875 => [
                'id' => '8876',
                'bank_id' => '43',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225262531',
                ],
                'enabled' => true,
            ],
            876 => [
                'id' => '8877',
                'bank_id' => '43',
                'name' => 'MIRPUR',
                'bank_branch_data' => [
                    'routing_no' => '225262986',
                ],
                'enabled' => true,
            ],
            877 => [
                'id' => '8878',
                'bank_id' => '43',
                'name' => 'NEW MARKET',
                'bank_branch_data' => [
                    'routing_no' => '225263527',
                ],
                'enabled' => true,
            ],
            878 => [
                'id' => '8879',
                'bank_id' => '43',
                'name' => 'PALLABI',
                'bank_branch_data' => [
                    'routing_no' => '225263585',
                ],
                'enabled' => true,
            ],
            879 => [
                'id' => '8880',
                'bank_id' => '43',
                'name' => 'PRAGATI SARANI',
                'bank_branch_data' => [
                    'routing_no' => '225263701',
                ],
                'enabled' => true,
            ],
            880 => [
                'id' => '8881',
                'bank_id' => '43',
                'name' => 'SAVAR SME',
                'bank_branch_data' => [
                    'routing_no' => '225264100',
                ],
                'enabled' => true,
            ],
            881 => [
                'id' => '8882',
                'bank_id' => '43',
                'name' => 'SHYAMALI',
                'bank_branch_data' => [
                    'routing_no' => '225264300',
                ],
                'enabled' => true,
            ],
            882 => [
                'id' => '8883',
                'bank_id' => '43',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '225264634',
                ],
                'enabled' => true,
            ],
            883 => [
                'id' => '8884',
                'bank_id' => '43',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '225270002',
                ],
                'enabled' => true,
            ],
            884 => [
                'id' => '8885',
                'bank_id' => '43',
                'name' => 'B.B. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '225270431',
                ],
                'enabled' => true,
            ],
            885 => [
                'id' => '8886',
                'bank_id' => '43',
                'name' => 'BANDURA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225271151',
                ],
                'enabled' => true,
            ],
            886 => [
                'id' => '8887',
                'bank_id' => '43',
                'name' => 'MOTIJHEEL',
                'bank_branch_data' => [
                    'routing_no' => '225271548',
                ],
                'enabled' => true,
            ],
            887 => [
                'id' => '8888',
                'bank_id' => '43',
                'name' => 'FOREIGN EXCHANGE',
                'bank_branch_data' => [
                    'routing_no' => '225272321',
                ],
                'enabled' => true,
            ],
            888 => [
                'id' => '8889',
                'bank_id' => '43',
                'name' => 'HEAD OFFICE',
                'bank_branch_data' => [
                    'routing_no' => '225272684',
                ],
                'enabled' => true,
            ],
            889 => [
                'id' => '8890',
                'bank_id' => '43',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225272800',
                ],
                'enabled' => true,
            ],
            890 => [
                'id' => '8891',
                'bank_id' => '43',
                'name' => 'ISLAMI BANKING',
                'bank_branch_data' => [
                    'routing_no' => '225272868',
                ],
                'enabled' => true,
            ],
            891 => [
                'id' => '8892',
                'bank_id' => '43',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '225272989',
                ],
                'enabled' => true,
            ],
            892 => [
                'id' => '8893',
                'bank_id' => '43',
                'name' => 'JATRABARI SME',
                'bank_branch_data' => [
                    'routing_no' => '225273238',
                ],
                'enabled' => true,
            ],
            893 => [
                'id' => '8894',
                'bank_id' => '43',
                'name' => 'JOHNSON ROAD',
                'bank_branch_data' => [
                    'routing_no' => '225273254',
                ],
                'enabled' => true,
            ],
            894 => [
                'id' => '8895',
                'bank_id' => '43',
                'name' => 'JOYPARA SME',
                'bank_branch_data' => [
                    'routing_no' => '225273296',
                ],
                'enabled' => true,
            ],
            895 => [
                'id' => '8896',
                'bank_id' => '43',
                'name' => 'KALIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225273467',
                ],
                'enabled' => true,
            ],
            896 => [
                'id' => '8897',
                'bank_id' => '43',
                'name' => 'MOGHBAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225274187',
                ],
                'enabled' => true,
            ],
            897 => [
                'id' => '8898',
                'bank_id' => '43',
                'name' => 'MOUCHAK',
                'bank_branch_data' => [
                    'routing_no' => '225274361',
                ],
                'enabled' => true,
            ],
            898 => [
                'id' => '8899',
                'bank_id' => '43',
                'name' => 'NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225274695',
                ],
                'enabled' => true,
            ],
            899 => [
                'id' => '8900',
                'bank_id' => '43',
                'name' => 'NAWABPUR',
                'bank_branch_data' => [
                    'routing_no' => '225274729',
                ],
                'enabled' => true,
            ],
            900 => [
                'id' => '8901',
                'bank_id' => '43',
                'name' => 'POSTA',
                'bank_branch_data' => [
                    'routing_no' => '225275294',
                ],
                'enabled' => true,
            ],
            901 => [
                'id' => '8902',
                'bank_id' => '43',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '225275357',
                ],
                'enabled' => true,
            ],
            902 => [
                'id' => '8903',
                'bank_id' => '43',
                'name' => 'SADARGHAT',
                'bank_branch_data' => [
                    'routing_no' => '225275928',
                ],
                'enabled' => true,
            ],
            903 => [
                'id' => '8904',
                'bank_id' => '43',
                'name' => 'URDU ROAD',
                'bank_branch_data' => [
                    'routing_no' => '225276798',
                ],
                'enabled' => true,
            ],
            904 => [
                'id' => '8905',
                'bank_id' => '43',
                'name' => 'VIP ROAD',
                'bank_branch_data' => [
                    'routing_no' => '225276851',
                ],
                'enabled' => true,
            ],
            905 => [
                'id' => '8906',
                'bank_id' => '43',
                'name' => 'ZINZIRA',
                'bank_branch_data' => [
                    'routing_no' => '225277092',
                ],
                'enabled' => true,
            ],
            906 => [
                'id' => '8907',
                'bank_id' => '43',
                'name' => 'DINAJPUR',
                'bank_branch_data' => [
                    'routing_no' => '225280676',
                ],
                'enabled' => true,
            ],
            907 => [
                'id' => '8908',
                'bank_id' => '43',
                'name' => 'ALFADANGA',
                'bank_branch_data' => [
                    'routing_no' => '225290040',
                ],
                'enabled' => true,
            ],
            908 => [
                'id' => '8909',
                'bank_id' => '43',
                'name' => 'FARIDPUR',
                'bank_branch_data' => [
                    'routing_no' => '225290529',
                ],
                'enabled' => true,
            ],
            909 => [
                'id' => '8910',
                'bank_id' => '43',
                'name' => 'KANAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '225290916',
                ],
                'enabled' => true,
            ],
            910 => [
                'id' => '8911',
                'bank_id' => '43',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '225300527',
                ],
                'enabled' => true,
            ],
            911 => [
                'id' => '8912',
                'bank_id' => '43',
                'name' => 'GOBINDAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225320581',
                ],
                'enabled' => true,
            ],
            912 => [
                'id' => '8913',
                'bank_id' => '43',
                'name' => 'GAZIPUR',
                'bank_branch_data' => [
                    'routing_no' => '225330526',
                ],
                'enabled' => true,
            ],
            913 => [
                'id' => '8914',
                'bank_id' => '43',
                'name' => 'GAZIPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '225330539',
                ],
                'enabled' => true,
            ],
            914 => [
                'id' => '8915',
                'bank_id' => '43',
                'name' => 'TONGI',
                'bank_branch_data' => [
                    'routing_no' => '225331633',
                ],
                'enabled' => true,
            ],
            915 => [
                'id' => '8916',
                'bank_id' => '43',
                'name' => 'HABIGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '225360620',
                ],
                'enabled' => true,
            ],
            916 => [
                'id' => '8917',
                'bank_id' => '43',
                'name' => 'JAMALPUR SME',
                'bank_branch_data' => [
                    'routing_no' => '225390861',
                ],
                'enabled' => true,
            ],
            917 => [
                'id' => '8918',
                'bank_id' => '43',
                'name' => 'BENAPOLE',
                'bank_branch_data' => [
                    'routing_no' => '225410288',
                ],
                'enabled' => true,
            ],
            918 => [
                'id' => '8919',
                'bank_id' => '43',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '225410941',
                ],
                'enabled' => true,
            ],
            919 => [
                'id' => '8920',
                'bank_id' => '43',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '225471548',
                ],
                'enabled' => true,
            ],
            920 => [
                'id' => '8921',
                'bank_id' => '43',
                'name' => 'BHAIRAB BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225480221',
                ],
                'enabled' => true,
            ],
            921 => [
                'id' => '8922',
                'bank_id' => '43',
                'name' => 'KISHOREGANJ SME',
                'bank_branch_data' => [
                    'routing_no' => '225480689',
                ],
                'enabled' => true,
            ],
            922 => [
                'id' => '8923',
                'bank_id' => '43',
                'name' => 'KUSHTIA',
                'bank_branch_data' => [
                    'routing_no' => '225500943',
                ],
                'enabled' => true,
            ],
            923 => [
                'id' => '8924',
                'bank_id' => '43',
                'name' => 'CHANDRAGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225510191',
                ],
                'enabled' => true,
            ],
            924 => [
                'id' => '8925',
                'bank_id' => '43',
                'name' => 'LAKSHMIPUR',
                'bank_branch_data' => [
                    'routing_no' => '225510733',
                ],
                'enabled' => true,
            ],
            925 => [
                'id' => '8926',
                'bank_id' => '43',
                'name' => 'RAIPUR',
                'bank_branch_data' => [
                    'routing_no' => '225510975',
                ],
                'enabled' => true,
            ],
            926 => [
                'id' => '8927',
                'bank_id' => '43',
                'name' => 'MANIKGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225560617',
                ],
                'enabled' => true,
            ],
            927 => [
                'id' => '8928',
                'bank_id' => '43',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225581188',
                ],
                'enabled' => true,
            ],
            928 => [
                'id' => '8929',
                'bank_id' => '43',
                'name' => 'SREE MANGAL',
                'bank_branch_data' => [
                    'routing_no' => '225581720',
                ],
                'enabled' => true,
            ],
            929 => [
                'id' => '8930',
                'bank_id' => '43',
                'name' => 'REKABI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225591215',
                ],
                'enabled' => true,
            ],
            930 => [
                'id' => '8931',
                'bank_id' => '43',
                'name' => 'MYMENSINGH',
                'bank_branch_data' => [
                    'routing_no' => '225611753',
                ],
                'enabled' => true,
            ],
            931 => [
                'id' => '8932',
                'bank_id' => '43',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '225641181',
                ],
                'enabled' => true,
            ],
            932 => [
                'id' => '8933',
                'bank_id' => '43',
                'name' => 'BHULTA',
                'bank_branch_data' => [
                    'routing_no' => '225670228',
                ],
                'enabled' => true,
            ],
            933 => [
                'id' => '8934',
                'bank_id' => '43',
                'name' => 'NETAIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225671272',
                ],
                'enabled' => true,
            ],
            934 => [
                'id' => '8935',
                'bank_id' => '43',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225671751',
                ],
                'enabled' => true,
            ],
            935 => [
                'id' => '8936',
                'bank_id' => '43',
                'name' => 'MADHABDI',
                'bank_branch_data' => [
                    'routing_no' => '225680676',
                ],
                'enabled' => true,
            ],
            936 => [
                'id' => '8937',
                'bank_id' => '43',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '225680850',
                ],
                'enabled' => true,
            ],
            937 => [
                'id' => '8938',
                'bank_id' => '43',
                'name' => 'NATORE SME',
                'bank_branch_data' => [
                    'routing_no' => '225691115',
                ],
                'enabled' => true,
            ],
            938 => [
                'id' => '8939',
                'bank_id' => '43',
                'name' => 'CHAPAI NAWABGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225700251',
                ],
                'enabled' => true,
            ],
            939 => [
                'id' => '8940',
                'bank_id' => '43',
                'name' => 'ROHANPUR',
                'bank_branch_data' => [
                    'routing_no' => '225700880',
                ],
                'enabled' => true,
            ],
            940 => [
                'id' => '8941',
                'bank_id' => '43',
                'name' => 'SAYEDPUR',
                'bank_branch_data' => [
                    'routing_no' => '225730797',
                ],
                'enabled' => true,
            ],
            941 => [
                'id' => '8942',
                'bank_id' => '43',
                'name' => 'CHOUMOHANI',
                'bank_branch_data' => [
                    'routing_no' => '225750672',
                ],
                'enabled' => true,
            ],
            942 => [
                'id' => '8943',
                'bank_id' => '43',
                'name' => 'KABIRHAT',
                'bank_branch_data' => [
                    'routing_no' => '225751213',
                ],
                'enabled' => true,
            ],
            943 => [
                'id' => '8944',
                'bank_id' => '43',
                'name' => 'MAIJDEE SME',
                'bank_branch_data' => [
                    'routing_no' => '225751589',
                ],
                'enabled' => true,
            ],
            944 => [
                'id' => '8945',
                'bank_id' => '43',
                'name' => 'SENBAGH',
                'bank_branch_data' => [
                    'routing_no' => '225752083',
                ],
                'enabled' => true,
            ],
            945 => [
                'id' => '8946',
                'bank_id' => '43',
                'name' => 'SUBARNA CHAR',
                'bank_branch_data' => [
                    'routing_no' => '225752359',
                ],
                'enabled' => true,
            ],
            946 => [
                'id' => '8947',
                'bank_id' => '43',
                'name' => 'PABNA',
                'bank_branch_data' => [
                    'routing_no' => '225761782',
                ],
                'enabled' => true,
            ],
            947 => [
                'id' => '8948',
                'bank_id' => '43',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '225811937',
                ],
                'enabled' => true,
            ],
            948 => [
                'id' => '8949',
                'bank_id' => '43',
                'name' => 'RANGPUR',
                'bank_branch_data' => [
                    'routing_no' => '225851450',
                ],
                'enabled' => true,
            ],
            949 => [
                'id' => '8950',
                'bank_id' => '43',
                'name' => 'SATKHIRA',
                'bank_branch_data' => [
                    'routing_no' => '225871098',
                ],
                'enabled' => true,
            ],
            950 => [
                'id' => '8951',
                'bank_id' => '43',
                'name' => 'SERAJGANJ',
                'bank_branch_data' => [
                    'routing_no' => '225881875',
                ],
                'enabled' => true,
            ],
            951 => [
                'id' => '8952',
                'bank_id' => '43',
                'name' => 'CHHATAK SME',
                'bank_branch_data' => [
                    'routing_no' => '225900248',
                ],
                'enabled' => true,
            ],
            952 => [
                'id' => '8953',
                'bank_id' => '43',
                'name' => 'JAGANNATHPUR',
                'bank_branch_data' => [
                    'routing_no' => '225900493',
                ],
                'enabled' => true,
            ],
            953 => [
                'id' => '8954',
                'bank_id' => '43',
                'name' => 'AMBARKHANA',
                'bank_branch_data' => [
                    'routing_no' => '225910041',
                ],
                'enabled' => true,
            ],
            954 => [
                'id' => '8955',
                'bank_id' => '43',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225910317',
                ],
                'enabled' => true,
            ],
            955 => [
                'id' => '8956',
                'bank_id' => '43',
                'name' => 'BISHWANATH',
                'bank_branch_data' => [
                    'routing_no' => '225910438',
                ],
                'enabled' => true,
            ],
            956 => [
                'id' => '8957',
                'bank_id' => '43',
                'name' => 'DHAKA DAKHIN',
                'bank_branch_data' => [
                    'routing_no' => '225911303',
                ],
                'enabled' => true,
            ],
            957 => [
                'id' => '8958',
                'bank_id' => '43',
                'name' => 'BANDAR BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225913556',
                ],
                'enabled' => true,
            ],
            958 => [
                'id' => '8959',
                'bank_id' => '43',
                'name' => 'ZINDA BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '225914155',
                ],
                'enabled' => true,
            ],
            959 => [
                'id' => '8960',
                'bank_id' => '43',
                'name' => 'TANGAIL',
                'bank_branch_data' => [
                    'routing_no' => '225932290',
                ],
                'enabled' => true,
            ],
            960 => [
                'id' => '8961',
                'bank_id' => '44',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '230060281',
                ],
                'enabled' => true,
            ],
            961 => [
                'id' => '8962',
                'bank_id' => '44',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '230150133',
                ],
                'enabled' => true,
            ],
            962 => [
                'id' => '8963',
                'bank_id' => '44',
                'name' => 'JUBILEE ROAD',
                'bank_branch_data' => [
                    'routing_no' => '230153648',
                ],
                'enabled' => true,
            ],
            963 => [
                'id' => '8964',
                'bank_id' => '44',
                'name' => 'KHATUNGANJ',
                'bank_branch_data' => [
                    'routing_no' => '230154276',
                ],
                'enabled' => true,
            ],
            964 => [
                'id' => '8965',
                'bank_id' => '44',
                'name' => 'MURADPUR C.D.A. AVENUE',
                'bank_branch_data' => [
                    'routing_no' => '230155354',
                ],
                'enabled' => true,
            ],
            965 => [
                'id' => '8966',
                'bank_id' => '44',
                'name' => 'BANANI',
                'bank_branch_data' => [
                    'routing_no' => '230260436',
                ],
                'enabled' => true,
            ],
            966 => [
                'id' => '8967',
                'bank_id' => '44',
                'name' => 'DHANMONDI',
                'bank_branch_data' => [
                    'routing_no' => '230261185',
                ],
                'enabled' => true,
            ],
            967 => [
                'id' => '8968',
                'bank_id' => '44',
                'name' => 'GULSHAN',
                'bank_branch_data' => [
                    'routing_no' => '230261727',
                ],
                'enabled' => true,
            ],
            968 => [
                'id' => '8969',
                'bank_id' => '44',
                'name' => 'IDB BHABAN',
                'bank_branch_data' => [
                    'routing_no' => '230262142',
                ],
                'enabled' => true,
            ],
            969 => [
                'id' => '8970',
                'bank_id' => '44',
                'name' => 'KARWAN BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '230262539',
                ],
                'enabled' => true,
            ],
            970 => [
                'id' => '8971',
                'bank_id' => '44',
                'name' => 'MIRPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '230263075',
                ],
                'enabled' => true,
            ],
            971 => [
                'id' => '8972',
                'bank_id' => '44',
                'name' => 'UTTARA',
                'bank_branch_data' => [
                    'routing_no' => '230264632',
                ],
                'enabled' => true,
            ],
            972 => [
                'id' => '8973',
                'bank_id' => '44',
                'name' => 'TRUNCATION POINT',
                'bank_branch_data' => [
                    'routing_no' => '230270000',
                ],
                'enabled' => true,
            ],
            973 => [
                'id' => '8974',
                'bank_id' => '44',
                'name' => 'BABU BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '230270550',
                ],
                'enabled' => true,
            ],
            974 => [
                'id' => '8975',
                'bank_id' => '44',
                'name' => 'BANGSHAL',
                'bank_branch_data' => [
                    'routing_no' => '230270884',
                ],
                'enabled' => true,
            ],
            975 => [
                'id' => '8976',
                'bank_id' => '44',
                'name' => 'IMAMGANJ',
                'bank_branch_data' => [
                    'routing_no' => '230272808',
                ],
                'enabled' => true,
            ],
            976 => [
                'id' => '8977',
                'bank_id' => '44',
                'name' => 'ISLAMPUR',
                'bank_branch_data' => [
                    'routing_no' => '230272987',
                ],
                'enabled' => true,
            ],
            977 => [
                'id' => '8978',
                'bank_id' => '44',
                'name' => 'NAWABPUR ROAD',
                'bank_branch_data' => [
                    'routing_no' => '230274756',
                ],
                'enabled' => true,
            ],
            978 => [
                'id' => '8979',
                'bank_id' => '44',
                'name' => 'PRINCIPAL',
                'bank_branch_data' => [
                    'routing_no' => '230275355',
                ],
                'enabled' => true,
            ],
            979 => [
                'id' => '8980',
                'bank_id' => '44',
                'name' => 'VIP ROAD',
                'bank_branch_data' => [
                    'routing_no' => '230276859',
                ],
                'enabled' => true,
            ],
            980 => [
                'id' => '8981',
                'bank_id' => '44',
                'name' => 'FENI',
                'bank_branch_data' => [
                    'routing_no' => '230300525',
                ],
                'enabled' => true,
            ],
            981 => [
                'id' => '8982',
                'bank_id' => '44',
                'name' => 'HABIGANJ',
                'bank_branch_data' => [
                    'routing_no' => '230360615',
                ],
                'enabled' => true,
            ],
            982 => [
                'id' => '8983',
                'bank_id' => '44',
                'name' => 'BENAPOLE BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '230410310',
                ],
                'enabled' => true,
            ],
            983 => [
                'id' => '8984',
                'bank_id' => '44',
                'name' => 'JESSORE',
                'bank_branch_data' => [
                    'routing_no' => '230410949',
                ],
                'enabled' => true,
            ],
            984 => [
                'id' => '8985',
                'bank_id' => '44',
                'name' => 'NOAPARA',
                'bank_branch_data' => [
                    'routing_no' => '230411630',
                ],
                'enabled' => true,
            ],
            985 => [
                'id' => '8986',
                'bank_id' => '44',
                'name' => 'KHULNA',
                'bank_branch_data' => [
                    'routing_no' => '230471546',
                ],
                'enabled' => true,
            ],
            986 => [
                'id' => '8987',
                'bank_id' => '44',
                'name' => 'MOULAVI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '230581186',
                ],
                'enabled' => true,
            ],
            987 => [
                'id' => '8988',
                'bank_id' => '44',
                'name' => 'NAOGAON',
                'bank_branch_data' => [
                    'routing_no' => '230641189',
                ],
                'enabled' => true,
            ],
            988 => [
                'id' => '8989',
                'bank_id' => '44',
                'name' => 'NARAYANGANJ',
                'bank_branch_data' => [
                    'routing_no' => '230671188',
                ],
                'enabled' => true,
            ],
            989 => [
                'id' => '8990',
                'bank_id' => '44',
                'name' => 'NARSHINGDI',
                'bank_branch_data' => [
                    'routing_no' => '230680858',
                ],
                'enabled' => true,
            ],
            990 => [
                'id' => '8991',
                'bank_id' => '44',
                'name' => 'RAJSHAHI',
                'bank_branch_data' => [
                    'routing_no' => '230811935',
                ],
                'enabled' => true,
            ],
            991 => [
                'id' => '8992',
                'bank_id' => '44',
                'name' => 'BEANI BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '230910315',
                ],
                'enabled' => true,
            ],
            992 => [
                'id' => '8993',
                'bank_id' => '44',
                'name' => 'BISHWANATH BAZAR',
                'bank_branch_data' => [
                    'routing_no' => '230910465',
                ],
                'enabled' => true,
            ],
            993 => [
                'id' => '8994',
                'bank_id' => '44',
                'name' => 'SYLHET',
                'bank_branch_data' => [
                    'routing_no' => '230913554',
                ],
                'enabled' => true,
            ],
            994 => [
                'id' => '8995',
                'bank_id' => '45',
                'name' => 'BARISAL',
                'bank_branch_data' => [
                    'routing_no' => '235060286',
                ],
                'enabled' => true,
            ],
            995 => [
                'id' => '8996',
                'bank_id' => '45',
                'name' => 'BOGRA',
                'bank_branch_data' => [
                    'routing_no' => '235100375',
                ],
                'enabled' => true,
            ],
            996 => [
                'id' => '8997',
                'bank_id' => '45',
                'name' => 'BOROGOLA SME',
                'bank_branch_data' => [
                    'routing_no' => '235100504',
                ],
                'enabled' => true,
            ],
            997 => [
                'id' => '8998',
                'bank_id' => '45',
                'name' => 'ASHUGANJ',
                'bank_branch_data' => [
                    'routing_no' => '235120100',
                ],
                'enabled' => true,
            ],
            998 => [
                'id' => '8999',
                'bank_id' => '45',
                'name' => 'BRAHMANBARIA SME',
                'bank_branch_data' => [
                    'routing_no' => '235120447',
                ],
                'enabled' => true,
            ],
            999 => [
                'id' => '9000',
                'bank_id' => '45',
                'name' => 'AGRABAD',
                'bank_branch_data' => [
                    'routing_no' => '235150138',
                ],
                'enabled' => true,
            ],
        ];
    }
}
