<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch9Seeder extends Seeder
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
                    'id' => '8001',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KARIMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200480554',
                        ),
                    'enabled' => true,
                ),
            1 =>
                array(
                    'id' => '8002',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KATIADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200480617',
                        ),
                    'enabled' => true,
                ),
            2 =>
                array(
                    'id' => '8003',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200480675',
                        ),
                    'enabled' => true,
                ),
            3 =>
                array(
                    'id' => '8004',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KULIAR CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200480738',
                        ),
                    'enabled' => true,
                ),
            4 =>
                array(
                    'id' => '8005',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MITAMAIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200480941',
                        ),
                    'enabled' => true,
                ),
            5 =>
                array(
                    'id' => '8006',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NEAMATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200480970',
                        ),
                    'enabled' => true,
                ),
            6 =>
                array(
                    'id' => '8007',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NIKLI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200481003',
                        ),
                    'enabled' => true,
                ),
            7 =>
                array(
                    'id' => '8008',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PAKUNDIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200481061',
                        ),
                    'enabled' => true,
                ),
            8 =>
                array(
                    'id' => '8009',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200481153',
                        ),
                    'enabled' => true,
                ),
            9 =>
                array(
                    'id' => '8010',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHURUNGAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490102',
                        ),
                    'enabled' => true,
                ),
            10 =>
                array(
                    'id' => '8011',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHILMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490131',
                        ),
                    'enabled' => true,
                ),
            11 =>
                array(
                    'id' => '8012',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FULBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490199',
                        ),
                    'enabled' => true,
                ),
            12 =>
                array(
                    'id' => '8013',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KURIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490407',
                        ),
                    'enabled' => true,
                ),
            13 =>
                array(
                    'id' => '8014',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NAGESWARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490465',
                        ),
                    'enabled' => true,
                ),
            14 =>
                array(
                    'id' => '8015',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490586',
                        ),
                    'enabled' => true,
                ),
            15 =>
                array(
                    'id' => '8016',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490610',
                        ),
                    'enabled' => true,
                ),
            16 =>
                array(
                    'id' => '8017',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ROWMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490649',
                        ),
                    'enabled' => true,
                ),
            17 =>
                array(
                    'id' => '8018',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ULIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200490702',
                        ),
                    'enabled' => true,
                ),
            18 =>
                array(
                    'id' => '8019',
                    'bank_id' => '38',
                    'bank_branch_name' => 'AMLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500100',
                        ),
                    'enabled' => true,
                ),
            19 =>
                array(
                    'id' => '8020',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHERAMARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500289',
                        ),
                    'enabled' => true,
                ),
            20 =>
                array(
                    'id' => '8021',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHERAMARA POWER STATION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500313',
                        ),
                    'enabled' => true,
                ),
            21 =>
                array(
                    'id' => '8022',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500371',
                        ),
                    'enabled' => true,
                ),
            22 =>
                array(
                    'id' => '8023',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500463',
                        ),
                    'enabled' => true,
                ),
            23 =>
                array(
                    'id' => '8024',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DUHAKULA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500492',
                        ),
                    'enabled' => true,
                ),
            24 =>
                array(
                    'id' => '8025',
                    'bank_id' => '38',
                    'bank_branch_name' => 'EKTARPURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500526',
                        ),
                    'enabled' => true,
                ),
            25 =>
                array(
                    'id' => '8026',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HALSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500584',
                        ),
                    'enabled' => true,
                ),
            26 =>
                array(
                    'id' => '8027',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HARINARAYANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500618',
                        ),
                    'enabled' => true,
                ),
            27 =>
                array(
                    'id' => '8028',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAYA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500768',
                        ),
                    'enabled' => true,
                ),
            28 =>
                array(
                    'id' => '8029',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHOKSA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500821',
                        ),
                    'enabled' => true,
                ),
            29 =>
                array(
                    'id' => '8030',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KUMARKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500889',
                        ),
                    'enabled' => true,
                ),
            30 =>
                array(
                    'id' => '8031',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KUMARKHALI UPAZILLA COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500913',
                        ),
                    'enabled' => true,
                ),
            31 =>
                array(
                    'id' => '8032',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200500942',
                        ),
                    'enabled' => true,
                ),
            32 =>
                array(
                    'id' => '8033',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KUSHTIA SUGAR MILLS',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501004',
                        ),
                    'enabled' => true,
                ),
            33 =>
                array(
                    'id' => '8034',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501062',
                        ),
                    'enabled' => true,
                ),
            34 =>
                array(
                    'id' => '8035',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MODHUPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501091',
                        ),
                    'enabled' => true,
                ),
            35 =>
                array(
                    'id' => '8036',
                    'bank_id' => '38',
                    'bank_branch_name' => 'N.S. ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501183',
                        ),
                    'enabled' => true,
                ),
            36 =>
                array(
                    'id' => '8037',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NANDALALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501217',
                        ),
                    'enabled' => true,
                ),
            37 =>
                array(
                    'id' => '8038',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PASHCHIM ABDALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501309',
                        ),
                    'enabled' => true,
                ),
            38 =>
                array(
                    'id' => '8039',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PORADAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501367',
                        ),
                    'enabled' => true,
                ),
            39 =>
                array(
                    'id' => '8040',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHOMOSHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200501512',
                        ),
                    'enabled' => true,
                ),
            40 =>
                array(
                    'id' => '8041',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHABANIGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510103',
                        ),
                    'enabled' => true,
                ),
            41 =>
                array(
                    'id' => '8042',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510190',
                        ),
                    'enabled' => true,
                ),
            42 =>
                array(
                    'id' => '8043',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHAR ALEXANDER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510224',
                        ),
                    'enabled' => true,
                ),
            43 =>
                array(
                    'id' => '8044',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHAR LAWRENCE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510316',
                        ),
                    'enabled' => true,
                ),
            44 =>
                array(
                    'id' => '8045',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHAR SITA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510345',
                        ),
                    'enabled' => true,
                ),
            45 =>
                array(
                    'id' => '8046',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HAIDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510529',
                        ),
                    'enabled' => true,
                ),
            46 =>
                array(
                    'id' => '8047',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAMALNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510666',
                        ),
                    'enabled' => true,
                ),
            47 =>
                array(
                    'id' => '8048',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KANCHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510679',
                        ),
                    'enabled' => true,
                ),
            48 =>
                array(
                    'id' => '8049',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510732',
                        ),
                    'enabled' => true,
                ),
            49 =>
                array(
                    'id' => '8050',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200510974',
                        ),
                    'enabled' => true,
                ),
            50 =>
                array(
                    'id' => '8051',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAKHALIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200511007',
                        ),
                    'enabled' => true,
                ),
            51 =>
                array(
                    'id' => '8052',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200511036',
                        ),
                    'enabled' => true,
                ),
            52 =>
                array(
                    'id' => '8053',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ADITMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520043',
                        ),
                    'enabled' => true,
                ),
            53 =>
                array(
                    'id' => '8054',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAKINA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520069',
                        ),
                    'enabled' => true,
                ),
            54 =>
                array(
                    'id' => '8055',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BARABARIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520072',
                        ),
                    'enabled' => true,
                ),
            55 =>
                array(
                    'id' => '8056',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BURIMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520193',
                        ),
                    'enabled' => true,
                ),
            56 =>
                array(
                    'id' => '8057',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HATIBANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520401',
                        ),
                    'enabled' => true,
                ),
            57 =>
                array(
                    'id' => '8058',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520430',
                        ),
                    'enabled' => true,
                ),
            58 =>
                array(
                    'id' => '8059',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LALMONIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520469',
                        ),
                    'enabled' => true,
                ),
            59 =>
                array(
                    'id' => '8060',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHISHKHOCHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520522',
                        ),
                    'enabled' => true,
                ),
            60 =>
                array(
                    'id' => '8061',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PATGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200520580',
                        ),
                    'enabled' => true,
                ),
            61 =>
                array(
                    'id' => '8062',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHARMUGURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540131',
                        ),
                    'enabled' => true,
                ),
            62 =>
                array(
                    'id' => '8063',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DATTAPARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540160',
                        ),
                    'enabled' => true,
                ),
            63 =>
                array(
                    'id' => '8064',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALKINI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540281',
                        ),
                    'enabled' => true,
                ),
            64 =>
                array(
                    'id' => '8065',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KULPADDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540344',
                        ),
                    'enabled' => true,
                ),
            65 =>
                array(
                    'id' => '8066',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PAURASHAVA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540373',
                        ),
                    'enabled' => true,
                ),
            66 =>
                array(
                    'id' => '8067',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540407',
                        ),
                    'enabled' => true,
                ),
            67 =>
                array(
                    'id' => '8068',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MILL GATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540528',
                        ),
                    'enabled' => true,
                ),
            68 =>
                array(
                    'id' => '8069',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540649',
                        ),
                    'enabled' => true,
                ),
            69 =>
                array(
                    'id' => '8070',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHIBCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540702',
                        ),
                    'enabled' => true,
                ),
            70 =>
                array(
                    'id' => '8071',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TAKERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200540760',
                        ),
                    'enabled' => true,
                ),
            71 =>
                array(
                    'id' => '8072',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BUNAGATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550255',
                        ),
                    'enabled' => true,
                ),
            72 =>
                array(
                    'id' => '8073',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PURATAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550497',
                        ),
                    'enabled' => true,
                ),
            73 =>
                array(
                    'id' => '8074',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAGURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550550',
                        ),
                    'enabled' => true,
                ),
            74 =>
                array(
                    'id' => '8075',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550613',
                        ),
                    'enabled' => true,
                ),
            75 =>
                array(
                    'id' => '8076',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NATUN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550705',
                        ),
                    'enabled' => true,
                ),
            76 =>
                array(
                    'id' => '8077',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHALIKHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550884',
                        ),
                    'enabled' => true,
                ),
            77 =>
                array(
                    'id' => '8078',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SREEPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200550976',
                        ),
                    'enabled' => true,
                ),
            78 =>
                array(
                    'id' => '8079',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALIRTEK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560108',
                        ),
                    'enabled' => true,
                ),
            79 =>
                array(
                    'id' => '8080',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHANDAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560195',
                        ),
                    'enabled' => true,
                ),
            80 =>
                array(
                    'id' => '8081',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DARAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560258',
                        ),
                    'enabled' => true,
                ),
            81 =>
                array(
                    'id' => '8082',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAULATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560287',
                        ),
                    'enabled' => true,
                ),
            82 =>
                array(
                    'id' => '8083',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GHIOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560379',
                        ),
                    'enabled' => true,
                ),
            83 =>
                array(
                    'id' => '8084',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HARIRAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560432',
                        ),
                    'enabled' => true,
                ),
            84 =>
                array(
                    'id' => '8085',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560616',
                        ),
                    'enabled' => true,
                ),
            85 =>
                array(
                    'id' => '8086',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MANIKGANJ UPAZILA COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560645',
                        ),
                    'enabled' => true,
                ),
            86 =>
                array(
                    'id' => '8087',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SATURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560766',
                        ),
                    'enabled' => true,
                ),
            87 =>
                array(
                    'id' => '8088',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHIBALAYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560795',
                        ),
                    'enabled' => true,
                ),
            88 =>
                array(
                    'id' => '8089',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SINGAIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200560829',
                        ),
                    'enabled' => true,
                ),
            89 =>
                array(
                    'id' => '8090',
                    'bank_id' => '38',
                    'bank_branch_name' => 'AMJHUPI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570048',
                        ),
                    'enabled' => true,
                ),
            90 =>
                array(
                    'id' => '8091',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GANGNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570222',
                        ),
                    'enabled' => true,
                ),
            91 =>
                array(
                    'id' => '8092',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GANGNI THANA PARISAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570251',
                        ),
                    'enabled' => true,
                ),
            92 =>
                array(
                    'id' => '8093',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GARADOB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570280',
                        ),
                    'enabled' => true,
                ),
            93 =>
                array(
                    'id' => '8094',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JOREPUKURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570314',
                        ),
                    'enabled' => true,
                ),
            94 =>
                array(
                    'id' => '8095',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MEHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570372',
                        ),
                    'enabled' => true,
                ),
            95 =>
                array(
                    'id' => '8096',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MEHERPUR COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570406',
                        ),
                    'enabled' => true,
                ),
            96 =>
                array(
                    'id' => '8097',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MUJIB NAGAR UPAZILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200570493',
                        ),
                    'enabled' => true,
                ),
            97 =>
                array(
                    'id' => '8098',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BARALEKHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580104',
                        ),
                    'enabled' => true,
                ),
            98 =>
                array(
                    'id' => '8099',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHAIRABGONJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580162',
                        ),
                    'enabled' => true,
                ),
            99 =>
                array(
                    'id' => '8100',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHADNIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580317',
                        ),
                    'enabled' => true,
                ),
            100 =>
                array(
                    'id' => '8101',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHANDGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580346',
                        ),
                    'enabled' => true,
                ),
            101 =>
                array(
                    'id' => '8102',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SADAR UPAZILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580467',
                        ),
                    'enabled' => true,
                ),
            102 =>
                array(
                    'id' => '8103',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580520',
                        ),
                    'enabled' => true,
                ),
            103 =>
                array(
                    'id' => '8104',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580670',
                        ),
                    'enabled' => true,
                ),
            104 =>
                array(
                    'id' => '8105',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KADAMHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580704',
                        ),
                    'enabled' => true,
                ),
            105 =>
                array(
                    'id' => '8106',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAMALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580762',
                        ),
                    'enabled' => true,
                ),
            106 =>
                array(
                    'id' => '8107',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAMALPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580791',
                        ),
                    'enabled' => true,
                ),
            107 =>
                array(
                    'id' => '8108',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580946',
                        ),
                    'enabled' => true,
                ),
            108 =>
                array(
                    'id' => '8109',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200580975',
                        ),
                    'enabled' => true,
                ),
            109 =>
                array(
                    'id' => '8110',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581187',
                        ),
                    'enabled' => true,
                ),
            110 =>
                array(
                    'id' => '8111',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MUNSHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581240',
                        ),
                    'enabled' => true,
                ),
            111 =>
                array(
                    'id' => '8112',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PHULERTAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581332',
                        ),
                    'enabled' => true,
                ),
            112 =>
                array(
                    'id' => '8113',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581390',
                        ),
                    'enabled' => true,
                ),
            113 =>
                array(
                    'id' => '8114',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SARKER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581482',
                        ),
                    'enabled' => true,
                ),
            114 =>
                array(
                    'id' => '8115',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SATGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581516',
                        ),
                    'enabled' => true,
                ),
            115 =>
                array(
                    'id' => '8116',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHABAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581545',
                        ),
                    'enabled' => true,
                ),
            116 =>
                array(
                    'id' => '8117',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAMSHER NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581608',
                        ),
                    'enabled' => true,
                ),
            117 =>
                array(
                    'id' => '8118',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581729',
                        ),
                    'enabled' => true,
                ),
            118 =>
                array(
                    'id' => '8119',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARAPASHA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200581758',
                        ),
                    'enabled' => true,
                ),
            119 =>
                array(
                    'id' => '8120',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALURCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590165',
                        ),
                    'enabled' => true,
                ),
            120 =>
                array(
                    'id' => '8121',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BASAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590194',
                        ),
                    'enabled' => true,
                ),
            121 =>
                array(
                    'id' => '8122',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHABER CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590286',
                        ),
                    'enabled' => true,
                ),
            122 =>
                array(
                    'id' => '8123',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DIGHALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590402',
                        ),
                    'enabled' => true,
                ),
            123 =>
                array(
                    'id' => '8124',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GAZARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590460',
                        ),
                    'enabled' => true,
                ),
            124 =>
                array(
                    'id' => '8125',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HALDIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590523',
                        ),
                    'enabled' => true,
                ),
            125 =>
                array(
                    'id' => '8126',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KEYAIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590794',
                        ),
                    'enabled' => true,
                ),
            126 =>
                array(
                    'id' => '8127',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAOWA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200590910',
                        ),
                    'enabled' => true,
                ),
            127 =>
                array(
                    'id' => '8128',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591030',
                        ),
                    'enabled' => true,
                ),
            128 =>
                array(
                    'id' => '8129',
                    'bank_id' => '38',
                    'bank_branch_name' => 'REKABI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591214',
                        ),
                    'enabled' => true,
                ),
            129 =>
                array(
                    'id' => '8130',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591243',
                        ),
                    'enabled' => true,
                ),
            130 =>
                array(
                    'id' => '8131',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHEKHAR NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591306',
                        ),
                    'enabled' => true,
                ),
            131 =>
                array(
                    'id' => '8132',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SIRAJDHI KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591393',
                        ),
                    'enabled' => true,
                ),
            132 =>
                array(
                    'id' => '8133',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SREENAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591427',
                        ),
                    'enabled' => true,
                ),
            133 =>
                array(
                    'id' => '8134',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SUKHBAS PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591485',
                        ),
                    'enabled' => true,
                ),
            134 =>
                array(
                    'id' => '8135',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TALTALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591519',
                        ),
                    'enabled' => true,
                ),
            135 =>
                array(
                    'id' => '8136',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TONGI BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200591548',
                        ),
                    'enabled' => true,
                ),
            136 =>
                array(
                    'id' => '8137',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ASSIM BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610108',
                        ),
                    'enabled' => true,
                ),
            137 =>
                array(
                    'id' => '8138',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JATIO KABI KAZI NAZRUL ISLAM UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610140',
                        ),
                    'enabled' => true,
                ),
            138 =>
                array(
                    'id' => '8139',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610229',
                        ),
                    'enabled' => true,
                ),
            139 =>
                array(
                    'id' => '8140',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHALUKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610311',
                        ),
                    'enabled' => true,
                ),
            140 =>
                array(
                    'id' => '8141',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610340',
                        ),
                    'enabled' => true,
                ),
            141 =>
                array(
                    'id' => '8142',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAMBHUGONJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610524',
                        ),
                    'enabled' => true,
                ),
            142 =>
                array(
                    'id' => '8143',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHUBAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610858',
                        ),
                    'enabled' => true,
                ),
            143 =>
                array(
                    'id' => '8144',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FULBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610940',
                        ),
                    'enabled' => true,
                ),
            144 =>
                array(
                    'id' => '8145',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FULPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200610979',
                        ),
                    'enabled' => true,
                ),
            145 =>
                array(
                    'id' => '8146',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GAFFARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611002',
                        ),
                    'enabled' => true,
                ),
            146 =>
                array(
                    'id' => '8147',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611060',
                        ),
                    'enabled' => true,
                ),
            147 =>
                array(
                    'id' => '8148',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOYESHPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611123',
                        ),
                    'enabled' => true,
                ),
            148 =>
                array(
                    'id' => '8149',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HALUAGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611152',
                        ),
                    'enabled' => true,
                ),
            149 =>
                array(
                    'id' => '8150',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ISHWARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611181',
                        ),
                    'enabled' => true,
                ),
            150 =>
                array(
                    'id' => '8151',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KESHOREGANJ BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611365',
                        ),
                    'enabled' => true,
                ),
            151 =>
                array(
                    'id' => '8152',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MATSHA GABESHANA INSTITUTE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611549',
                        ),
                    'enabled' => true,
                ),
            152 =>
                array(
                    'id' => '8153',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MUKTAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611699',
                        ),
                    'enabled' => true,
                ),
            153 =>
                array(
                    'id' => '8154',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611752',
                        ),
                    'enabled' => true,
                ),
            154 =>
                array(
                    'id' => '8155',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MYMENSINGH BUSINESS CENTER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611781',
                        ),
                    'enabled' => true,
                ),
            155 =>
                array(
                    'id' => '8156',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NANDAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611907',
                        ),
                    'enabled' => true,
                ),
            156 =>
                array(
                    'id' => '8157',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALIBARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200611994',
                        ),
                    'enabled' => true,
                ),
            157 =>
                array(
                    'id' => '8158',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200612148',
                        ),
                    'enabled' => true,
                ),
            158 =>
                array(
                    'id' => '8159',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARAKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200612269',
                        ),
                    'enabled' => true,
                ),
            159 =>
                array(
                    'id' => '8160',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARERGHAT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200612298',
                        ),
                    'enabled' => true,
                ),
            160 =>
                array(
                    'id' => '8161',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TRISHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200612351',
                        ),
                    'enabled' => true,
                ),
            161 =>
                array(
                    'id' => '8162',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ABADPUKURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640044',
                        ),
                    'enabled' => true,
                ),
            162 =>
                array(
                    'id' => '8163',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ATRAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640165',
                        ),
                    'enabled' => true,
                ),
            163 =>
                array(
                    'id' => '8164',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BADALGACHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640194',
                        ),
                    'enabled' => true,
                ),
            164 =>
                array(
                    'id' => '8165',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHANDERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640349',
                        ),
                    'enabled' => true,
                ),
            165 =>
                array(
                    'id' => '8166',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHAWANIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640378',
                        ),
                    'enabled' => true,
                ),
            166 =>
                array(
                    'id' => '8167',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHAMAIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640499',
                        ),
                    'enabled' => true,
                ),
            167 =>
                array(
                    'id' => '8168',
                    'bank_id' => '38',
                    'bank_branch_name' => 'K.D. MORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200640910',
                        ),
                    'enabled' => true,
                ),
            168 =>
                array(
                    'id' => '8169',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641001',
                        ),
                    'enabled' => true,
                ),
            169 =>
                array(
                    'id' => '8170',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHADEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641098',
                        ),
                    'enabled' => true,
                ),
            170 =>
                array(
                    'id' => '8171',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHISBATAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641122',
                        ),
                    'enabled' => true,
                ),
            171 =>
                array(
                    'id' => '8172',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MONGALBARIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641151',
                        ),
                    'enabled' => true,
                ),
            172 =>
                array(
                    'id' => '8173',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641180',
                        ),
                    'enabled' => true,
                ),
            173 =>
                array(
                    'id' => '8174',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NEAMATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641272',
                        ),
                    'enabled' => true,
                ),
            174 =>
                array(
                    'id' => '8175',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PATNITALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641456',
                        ),
                    'enabled' => true,
                ),
            175 =>
                array(
                    'id' => '8176',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PORSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641519',
                        ),
                    'enabled' => true,
                ),
            176 =>
                array(
                    'id' => '8177',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANINAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641601',
                        ),
                    'enabled' => true,
                ),
            177 =>
                array(
                    'id' => '8178',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANINAGAR T.T.D.C.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641630',
                        ),
                    'enabled' => true,
                ),
            178 =>
                array(
                    'id' => '8179',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SAPAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641751',
                        ),
                    'enabled' => true,
                ),
            179 =>
                array(
                    'id' => '8180',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TRIMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200641935',
                        ),
                    'enabled' => true,
                ),
            180 =>
                array(
                    'id' => '8181',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHACHURI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650168',
                        ),
                    'enabled' => true,
                ),
            181 =>
                array(
                    'id' => '8182',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOBRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650221',
                        ),
                    'enabled' => true,
                ),
            182 =>
                array(
                    'id' => '8183',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650342',
                        ),
                    'enabled' => true,
                ),
            183 =>
                array(
                    'id' => '8184',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ZILLA PARISHAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650371',
                        ),
                    'enabled' => true,
                ),
            184 =>
                array(
                    'id' => '8185',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LAKSHMI PASHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650434',
                        ),
                    'enabled' => true,
                ),
            185 =>
                array(
                    'id' => '8186',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LOHAGARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650492',
                        ),
                    'enabled' => true,
                ),
            186 =>
                array(
                    'id' => '8187',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHAJAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650555',
                        ),
                    'enabled' => true,
                ),
            187 =>
                array(
                    'id' => '8188',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NARAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650647',
                        ),
                    'enabled' => true,
                ),
            188 =>
                array(
                    'id' => '8189',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PERULI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650676',
                        ),
                    'enabled' => true,
                ),
            189 =>
                array(
                    'id' => '8190',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RUPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650739',
                        ),
                    'enabled' => true,
                ),
            190 =>
                array(
                    'id' => '8191',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TULARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200650797',
                        ),
                    'enabled' => true,
                ),
            191 =>
                array(
                    'id' => '8192',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ARAIHAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670043',
                        ),
                    'enabled' => true,
                ),
            192 =>
                array(
                    'id' => '8193',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670164',
                        ),
                    'enabled' => true,
                ),
            193 =>
                array(
                    'id' => '8194',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHARMAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670377',
                        ),
                    'enabled' => true,
                ),
            194 =>
                array(
                    'id' => '8195',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHUPTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670430',
                        ),
                    'enabled' => true,
                ),
            195 =>
                array(
                    'id' => '8196',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FATULLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670522',
                        ),
                    'enabled' => true,
                ),
            196 =>
                array(
                    'id' => '8197',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GODNAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670551',
                        ),
                    'enabled' => true,
                ),
            197 =>
                array(
                    'id' => '8198',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOPALDI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670614',
                        ),
                    'enabled' => true,
                ),
            198 =>
                array(
                    'id' => '8199',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KURIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670856',
                        ),
                    'enabled' => true,
                ),
            199 =>
                array(
                    'id' => '8200',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670885',
                        ),
                    'enabled' => true,
                ),
            200 =>
                array(
                    'id' => '8201',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200670948',
                        ),
                    'enabled' => true,
                ),
            201 =>
                array(
                    'id' => '8202',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOGRAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671068',
                        ),
                    'enabled' => true,
                ),
            202 =>
                array(
                    'id' => '8203',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671150',
                        ),
                    'enabled' => true,
                ),
            203 =>
                array(
                    'id' => '8204',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NARAYANGANJ CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671213',
                        ),
                    'enabled' => true,
                ),
            204 =>
                array(
                    'id' => '8205',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NARAYANGANJ DOCKYARD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671242',
                        ),
                    'enabled' => true,
                ),
            205 =>
                array(
                    'id' => '8206',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NETAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671271',
                        ),
                    'enabled' => true,
                ),
            206 =>
                array(
                    'id' => '8207',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PANCHRUKHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671392',
                        ),
                    'enabled' => true,
                ),
            207 =>
                array(
                    'id' => '8208',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RUPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671455',
                        ),
                    'enabled' => true,
                ),
            208 =>
                array(
                    'id' => '8209',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SONARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671697',
                        ),
                    'enabled' => true,
                ),
            209 =>
                array(
                    'id' => '8210',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARABOBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200671813',
                        ),
                    'enabled' => true,
                ),
            210 =>
                array(
                    'id' => '8211',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAKHAR NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680138',
                        ),
                    'enabled' => true,
                ),
            211 =>
                array(
                    'id' => '8212',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BELABO',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680259',
                        ),
                    'enabled' => true,
                ),
            212 =>
                array(
                    'id' => '8213',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BELTALI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680262',
                        ),
                    'enabled' => true,
                ),
            213 =>
                array(
                    'id' => '8214',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680404',
                        ),
                    'enabled' => true,
                ),
            214 =>
                array(
                    'id' => '8215',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680433',
                        ),
                    'enabled' => true,
                ),
            215 =>
                array(
                    'id' => '8216',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GHORADIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680462',
                        ),
                    'enabled' => true,
                ),
            216 =>
                array(
                    'id' => '8217',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GHORASAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680491',
                        ),
                    'enabled' => true,
                ),
            217 =>
                array(
                    'id' => '8218',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HATIRDIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680583',
                        ),
                    'enabled' => true,
                ),
            218 =>
                array(
                    'id' => '8219',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680675',
                        ),
                    'enabled' => true,
                ),
            219 =>
                array(
                    'id' => '8220',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MONOHARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680738',
                        ),
                    'enabled' => true,
                ),
            220 =>
                array(
                    'id' => '8221',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NARAYANPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680820',
                        ),
                    'enabled' => true,
                ),
            221 =>
                array(
                    'id' => '8222',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680859',
                        ),
                    'enabled' => true,
                ),
            222 =>
                array(
                    'id' => '8223',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PALASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680912',
                        ),
                    'enabled' => true,
                ),
            223 =>
                array(
                    'id' => '8224',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PANCHADANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200680970',
                        ),
                    'enabled' => true,
                ),
            224 =>
                array(
                    'id' => '8225',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PORADIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681003',
                        ),
                    'enabled' => true,
                ),
            225 =>
                array(
                    'id' => '8226',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PUTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681032',
                        ),
                    'enabled' => true,
                ),
            226 =>
                array(
                    'id' => '8227',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAIPURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681090',
                        ),
                    'enabled' => true,
                ),
            227 =>
                array(
                    'id' => '8228',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAMPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681124',
                        ),
                    'enabled' => true,
                ),
            228 =>
                array(
                    'id' => '8229',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SAIDABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681153',
                        ),
                    'enabled' => true,
                ),
            229 =>
                array(
                    'id' => '8230',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SATIRPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681216',
                        ),
                    'enabled' => true,
                ),
            230 =>
                array(
                    'id' => '8231',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHIBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200681308',
                        ),
                    'enabled' => true,
                ),
            231 =>
                array(
                    'id' => '8232',
                    'bank_id' => '38',
                    'bank_branch_name' => 'AHMEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690078',
                        ),
                    'enabled' => true,
                ),
            232 =>
                array(
                    'id' => '8233',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NALDANGA HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690094',
                        ),
                    'enabled' => true,
                ),
            233 =>
                array(
                    'id' => '8234',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAGATIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690131',
                        ),
                    'enabled' => true,
                ),
            234 =>
                array(
                    'id' => '8235',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BARAIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690160',
                        ),
                    'enabled' => true,
                ),
            235 =>
                array(
                    'id' => '8236',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHANCHAKOIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690315',
                        ),
                    'enabled' => true,
                ),
            236 =>
                array(
                    'id' => '8237',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAYARAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690407',
                        ),
                    'enabled' => true,
                ),
            237 =>
                array(
                    'id' => '8238',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GURUDASPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690557',
                        ),
                    'enabled' => true,
                ),
            238 =>
                array(
                    'id' => '8239',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KANAIKHALI PURATAN BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690881',
                        ),
                    'enabled' => true,
                ),
            239 =>
                array(
                    'id' => '8240',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200690915',
                        ),
                    'enabled' => true,
                ),
            240 =>
                array(
                    'id' => '8241',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200691093',
                        ),
                    'enabled' => true,
                ),
            241 =>
                array(
                    'id' => '8242',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PHULBAGAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200691301',
                        ),
                    'enabled' => true,
                ),
            242 =>
                array(
                    'id' => '8243',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SINGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200691480',
                        ),
                    'enabled' => true,
                ),
            243 =>
                array(
                    'id' => '8244',
                    'bank_id' => '38',
                    'bank_branch_name' => 'STATION BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200691543',
                        ),
                    'enabled' => true,
                ),
            244 =>
                array(
                    'id' => '8245',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHOLAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700168',
                        ),
                    'enabled' => true,
                ),
            245 =>
                array(
                    'id' => '8246',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700250',
                        ),
                    'enabled' => true,
                ),
            246 =>
                array(
                    'id' => '8247',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOMASTAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700463',
                        ),
                    'enabled' => true,
                ),
            247 =>
                array(
                    'id' => '8248',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NEWMARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700584',
                        ),
                    'enabled' => true,
                ),
            248 =>
                array(
                    'id' => '8249',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NACHOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700739',
                        ),
                    'enabled' => true,
                ),
            249 =>
                array(
                    'id' => '8250',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ROHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700889',
                        ),
                    'enabled' => true,
                ),
            250 =>
                array(
                    'id' => '8251',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200700942',
                        ),
                    'enabled' => true,
                ),
            251 =>
                array(
                    'id' => '8252',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SONAMOSZID',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200701062',
                        ),
                    'enabled' => true,
                ),
            252 =>
                array(
                    'id' => '8253',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ATPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720043',
                        ),
                    'enabled' => true,
                ),
            253 =>
                array(
                    'id' => '8254',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HOGLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720056',
                        ),
                    'enabled' => true,
                ),
            254 =>
                array(
                    'id' => '8255',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BARAHATTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720072',
                        ),
                    'enabled' => true,
                ),
            255 =>
                array(
                    'id' => '8256',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720193',
                        ),
                    'enabled' => true,
                ),
            256 =>
                array(
                    'id' => '8257',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALMAKANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720430',
                        ),
                    'enabled' => true,
                ),
            257 =>
                array(
                    'id' => '8258',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KENDUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720469',
                        ),
                    'enabled' => true,
                ),
            258 =>
                array(
                    'id' => '8259',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHALIAJURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720498',
                        ),
                    'enabled' => true,
                ),
            259 =>
                array(
                    'id' => '8260',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LEPSIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720580',
                        ),
                    'enabled' => true,
                ),
            260 =>
                array(
                    'id' => '8261',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720614',
                        ),
                    'enabled' => true,
                ),
            261 =>
                array(
                    'id' => '8262',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADAN PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720643',
                        ),
                    'enabled' => true,
                ),
            262 =>
                array(
                    'id' => '8263',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAHANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720672',
                        ),
                    'enabled' => true,
                ),
            263 =>
                array(
                    'id' => '8264',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NETROKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720735',
                        ),
                    'enabled' => true,
                ),
            264 =>
                array(
                    'id' => '8265',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PURBADHALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200720793',
                        ),
                    'enabled' => true,
                ),
            265 =>
                array(
                    'id' => '8266',
                    'bank_id' => '38',
                    'bank_branch_name' => 'THAKURKONA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200721039',
                        ),
                    'enabled' => true,
                ),
            266 =>
                array(
                    'id' => '8267',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NILPHAMARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730138',
                        ),
                    'enabled' => true,
                ),
            267 =>
                array(
                    'id' => '8268',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHILAHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730259',
                        ),
                    'enabled' => true,
                ),
            268 =>
                array(
                    'id' => '8269',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DIMLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730312',
                        ),
                    'enabled' => true,
                ),
            269 =>
                array(
                    'id' => '8270',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DOMAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730341',
                        ),
                    'enabled' => true,
                ),
            270 =>
                array(
                    'id' => '8271',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JALDHAKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730462',
                        ),
                    'enabled' => true,
                ),
            271 =>
                array(
                    'id' => '8272',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KISHOREGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730583',
                        ),
                    'enabled' => true,
                ),
            272 =>
                array(
                    'id' => '8273',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730646',
                        ),
                    'enabled' => true,
                ),
            273 =>
                array(
                    'id' => '8274',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730738',
                        ),
                    'enabled' => true,
                ),
            274 =>
                array(
                    'id' => '8275',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730796',
                        ),
                    'enabled' => true,
                ),
            275 =>
                array(
                    'id' => '8276',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SAYEDPUR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200730820',
                        ),
                    'enabled' => true,
                ),
            276 =>
                array(
                    'id' => '8277',
                    'bank_id' => '38',
                    'bank_branch_name' => 'AMANULLA PUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750071',
                        ),
                    'enabled' => true,
                ),
            277 =>
                array(
                    'id' => '8278',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750255',
                        ),
                    'enabled' => true,
                ),
            278 =>
                array(
                    'id' => '8279',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHAPRASHIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750439',
                        ),
                    'enabled' => true,
                ),
            279 =>
                array(
                    'id' => '8280',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHARBATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750497',
                        ),
                    'enabled' => true,
                ),
            280 =>
                array(
                    'id' => '8281',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHARMATUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750550',
                        ),
                    'enabled' => true,
                ),
            281 =>
                array(
                    'id' => '8282',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHATKHIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750589',
                        ),
                    'enabled' => true,
                ),
            282 =>
                array(
                    'id' => '8283',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHHAYANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750642',
                        ),
                    'enabled' => true,
                ),
            283 =>
                array(
                    'id' => '8284',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750671',
                        ),
                    'enabled' => true,
                ),
            284 =>
                array(
                    'id' => '8285',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHOWDHURYHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750705',
                        ),
                    'enabled' => true,
                ),
            285 =>
                array(
                    'id' => '8286',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COLLEGE ROAD CHAUMUHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750734',
                        ),
                    'enabled' => true,
                ),
            286 =>
                array(
                    'id' => '8287',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAYARAMDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200750826',
                        ),
                    'enabled' => true,
                ),
            287 =>
                array(
                    'id' => '8288',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HATIYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751038',
                        ),
                    'enabled' => true,
                ),
            288 =>
                array(
                    'id' => '8289',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HATIYA THANA PARISHAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751067',
                        ),
                    'enabled' => true,
                ),
            289 =>
                array(
                    'id' => '8290',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JAMIDERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751159',
                        ),
                    'enabled' => true,
                ),
            290 =>
                array(
                    'id' => '8291',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALAMUNSHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751270',
                        ),
                    'enabled' => true,
                ),
            291 =>
                array(
                    'id' => '8292',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KANKIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751304',
                        ),
                    'enabled' => true,
                ),
            292 =>
                array(
                    'id' => '8293',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHALIFERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751425',
                        ),
                    'enabled' => true,
                ),
            293 =>
                array(
                    'id' => '8294',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAIJDEE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751546',
                        ),
                    'enabled' => true,
                ),
            294 =>
                array(
                    'id' => '8295',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NOAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751575',
                        ),
                    'enabled' => true,
                ),
            295 =>
                array(
                    'id' => '8296',
                    'bank_id' => '38',
                    'bank_branch_name' => 'POURA BIPONI BITAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751841',
                        ),
                    'enabled' => true,
                ),
            296 =>
                array(
                    'id' => '8297',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SAGORIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200751962',
                        ),
                    'enabled' => true,
                ),
            297 =>
                array(
                    'id' => '8298',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SEBARHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752053',
                        ),
                    'enabled' => true,
                ),
            298 =>
                array(
                    'id' => '8299',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SENBAG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752082',
                        ),
                    'enabled' => true,
                ),
            299 =>
                array(
                    'id' => '8300',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAHAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752116',
                        ),
                    'enabled' => true,
                ),
            300 =>
                array(
                    'id' => '8301',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SONAIMURI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752237',
                        ),
                    'enabled' => true,
                ),
            301 =>
                array(
                    'id' => '8302',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SONAPUR OLD TOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752295',
                        ),
                    'enabled' => true,
                ),
            302 =>
                array(
                    'id' => '8303',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SUBARNA CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752358',
                        ),
                    'enabled' => true,
                ),
            303 =>
                array(
                    'id' => '8304',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TAMARADDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200752411',
                        ),
                    'enabled' => true,
                ),
            304 =>
                array(
                    'id' => '8305',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ANANTA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760108',
                        ),
                    'enabled' => true,
                ),
            305 =>
                array(
                    'id' => '8306',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ARAMBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760166',
                        ),
                    'enabled' => true,
                ),
            306 =>
                array(
                    'id' => '8307',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ATGHORIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760258',
                        ),
                    'enabled' => true,
                ),
            307 =>
                array(
                    'id' => '8308',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JOYNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760340',
                        ),
                    'enabled' => true,
                ),
            308 =>
                array(
                    'id' => '8309',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BANWARI NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760432',
                        ),
                    'enabled' => true,
                ),
            309 =>
                array(
                    'id' => '8310',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BERA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760461',
                        ),
                    'enabled' => true,
                ),
            310 =>
                array(
                    'id' => '8311',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHANGURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760524',
                        ),
                    'enabled' => true,
                ),
            311 =>
                array(
                    'id' => '8312',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHATMOHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760645',
                        ),
                    'enabled' => true,
                ),
            312 =>
                array(
                    'id' => '8313',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DASHURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200760795',
                        ),
                    'enabled' => true,
                ),
            313 =>
                array(
                    'id' => '8314',
                    'bank_id' => '38',
                    'bank_branch_name' => 'EKDANTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200761031',
                        ),
                    'enabled' => true,
                ),
            314 =>
                array(
                    'id' => '8315',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200761215',
                        ),
                    'enabled' => true,
                ),
            315 =>
                array(
                    'id' => '8316',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JURGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200761273',
                        ),
                    'enabled' => true,
                ),
            316 =>
                array(
                    'id' => '8317',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KARANZA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200761307',
                        ),
                    'enabled' => true,
                ),
            317 =>
                array(
                    'id' => '8318',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PABNA BANIJJO KENDRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200761394',
                        ),
                    'enabled' => true,
                ),
            318 =>
                array(
                    'id' => '8319',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200761781',
                        ),
                    'enabled' => true,
                ),
            319 =>
                array(
                    'id' => '8320',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SANTHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200762056',
                        ),
                    'enabled' => true,
                ),
            320 =>
                array(
                    'id' => '8321',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SUJANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200762269',
                        ),
                    'enabled' => true,
                ),
            321 =>
                array(
                    'id' => '8322',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ZILLA BOARD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200762322',
                        ),
                    'enabled' => true,
                ),
            322 =>
                array(
                    'id' => '8323',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ATWARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200770048',
                        ),
                    'enabled' => true,
                ),
            323 =>
                array(
                    'id' => '8324',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHAJANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200770101',
                        ),
                    'enabled' => true,
                ),
            324 =>
                array(
                    'id' => '8325',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BODA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200770130',
                        ),
                    'enabled' => true,
                ),
            325 =>
                array(
                    'id' => '8326',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DEBIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200770198',
                        ),
                    'enabled' => true,
                ),
            326 =>
                array(
                    'id' => '8327',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PANCHAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200770556',
                        ),
                    'enabled' => true,
                ),
            327 =>
                array(
                    'id' => '8328',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TETULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200770730',
                        ),
                    'enabled' => true,
                ),
            328 =>
                array(
                    'id' => '8329',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAGA BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780070',
                        ),
                    'enabled' => true,
                ),
            329 =>
                array(
                    'id' => '8330',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAKUL BARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780162',
                        ),
                    'enabled' => true,
                ),
            330 =>
                array(
                    'id' => '8331',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAUPHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780191',
                        ),
                    'enabled' => true,
                ),
            331 =>
                array(
                    'id' => '8332',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DASHMINA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780346',
                        ),
                    'enabled' => true,
                ),
            332 =>
                array(
                    'id' => '8333',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DUMKI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780438',
                        ),
                    'enabled' => true,
                ),
            333 =>
                array(
                    'id' => '8334',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GALACHIPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780496',
                        ),
                    'enabled' => true,
                ),
            334 =>
                array(
                    'id' => '8335',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALAPARA BANDER',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780559',
                        ),
                    'enabled' => true,
                ),
            335 =>
                array(
                    'id' => '8336',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780854',
                        ),
                    'enabled' => true,
                ),
            336 =>
                array(
                    'id' => '8337',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOWKARAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780883',
                        ),
                    'enabled' => true,
                ),
            337 =>
                array(
                    'id' => '8338',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NEWTOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200780975',
                        ),
                    'enabled' => true,
                ),
            338 =>
                array(
                    'id' => '8339',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200781095',
                        ),
                    'enabled' => true,
                ),
            339 =>
                array(
                    'id' => '8340',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SUBIDKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200781279',
                        ),
                    'enabled' => true,
                ),
            340 =>
                array(
                    'id' => '8341',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ULANIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200781332',
                        ),
                    'enabled' => true,
                ),
            341 =>
                array(
                    'id' => '8342',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHANDARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790136',
                        ),
                    'enabled' => true,
                ),
            342 =>
                array(
                    'id' => '8343',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAWKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790431',
                        ),
                    'enabled' => true,
                ),
            343 =>
                array(
                    'id' => '8344',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790523',
                        ),
                    'enabled' => true,
                ),
            344 =>
                array(
                    'id' => '8345',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NAZIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790707',
                        ),
                    'enabled' => true,
                ),
            345 =>
                array(
                    'id' => '8346',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PARERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790736',
                        ),
                    'enabled' => true,
                ),
            346 =>
                array(
                    'id' => '8347',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PIROJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790765',
                        ),
                    'enabled' => true,
                ),
            347 =>
                array(
                    'id' => '8348',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SREERAMKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790949',
                        ),
                    'enabled' => true,
                ),
            348 =>
                array(
                    'id' => '8349',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SWARUPKATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200790978',
                        ),
                    'enabled' => true,
                ),
            349 =>
                array(
                    'id' => '8350',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TUSHKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200791030',
                        ),
                    'enabled' => true,
                ),
            350 =>
                array(
                    'id' => '8351',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ZIA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200791069',
                        ),
                    'enabled' => true,
                ),
            351 =>
                array(
                    'id' => '8352',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAGHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810108',
                        ),
                    'enabled' => true,
                ),
            352 =>
                array(
                    'id' => '8353',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHAWANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810340',
                        ),
                    'enabled' => true,
                ),
            353 =>
                array(
                    'id' => '8354',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810403',
                        ),
                    'enabled' => true,
                ),
            354 =>
                array(
                    'id' => '8355',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810461',
                        ),
                    'enabled' => true,
                ),
            355 =>
                array(
                    'id' => '8356',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810490',
                        ),
                    'enabled' => true,
                ),
            356 =>
                array(
                    'id' => '8357',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DURGAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810553',
                        ),
                    'enabled' => true,
                ),
            357 =>
                array(
                    'id' => '8358',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GODAGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810616',
                        ),
                    'enabled' => true,
                ),
            358 =>
                array(
                    'id' => '8359',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GREATER ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200810674',
                        ),
                    'enabled' => true,
                ),
            359 =>
                array(
                    'id' => '8360',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KASHIADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811031',
                        ),
                    'enabled' => true,
                ),
            360 =>
                array(
                    'id' => '8361',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811394',
                        ),
                    'enabled' => true,
                ),
            361 =>
                array(
                    'id' => '8362',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MONIGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811486',
                        ),
                    'enabled' => true,
                ),
            362 =>
                array(
                    'id' => '8363',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOTIHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811510',
                        ),
                    'enabled' => true,
                ),
            363 =>
                array(
                    'id' => '8364',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOUGACHI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811549',
                        ),
                    'enabled' => true,
                ),
            364 =>
                array(
                    'id' => '8365',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MUDHAMALAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811578',
                        ),
                    'enabled' => true,
                ),
            365 =>
                array(
                    'id' => '8366',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PABA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811699',
                        ),
                    'enabled' => true,
                ),
            366 =>
                array(
                    'id' => '8367',
                    'bank_id' => '38',
                    'bank_branch_name' => 'POLICE ACADAMY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811781',
                        ),
                    'enabled' => true,
                ),
            367 =>
                array(
                    'id' => '8368',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PUTHIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811844',
                        ),
                    'enabled' => true,
                ),
            368 =>
                array(
                    'id' => '8369',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJSHAHI CADET COLLEGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811965',
                        ),
                    'enabled' => true,
                ),
            369 =>
                array(
                    'id' => '8370',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJSHAHI CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200811994',
                        ),
                    'enabled' => true,
                ),
            370 =>
                array(
                    'id' => '8371',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJSHAHI CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200812027',
                        ),
                    'enabled' => true,
                ),
            371 =>
                array(
                    'id' => '8372',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJSHAHI MEDICAL COLLEGE HOSPITAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200812056',
                        ),
                    'enabled' => true,
                ),
            372 =>
                array(
                    'id' => '8373',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJSHAHI RAILWAY COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200812085',
                        ),
                    'enabled' => true,
                ),
            373 =>
                array(
                    'id' => '8374',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TANORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200812380',
                        ),
                    'enabled' => true,
                ),
            374 =>
                array(
                    'id' => '8375',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAHAR PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820130',
                        ),
                    'enabled' => true,
                ),
            375 =>
                array(
                    'id' => '8376',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALIAKANDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820169',
                        ),
                    'enabled' => true,
                ),
            376 =>
                array(
                    'id' => '8377',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BEL GACHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820222',
                        ),
                    'enabled' => true,
                ),
            377 =>
                array(
                    'id' => '8378',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOALANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820280',
                        ),
                    'enabled' => true,
                ),
            378 =>
                array(
                    'id' => '8379',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOALANDA UPAZILA COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820314',
                        ),
                    'enabled' => true,
                ),
            379 =>
                array(
                    'id' => '8380',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALUKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820372',
                        ),
                    'enabled' => true,
                ),
            380 =>
                array(
                    'id' => '8381',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KASHBA MAJAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820406',
                        ),
                    'enabled' => true,
                ),
            381 =>
                array(
                    'id' => '8382',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MACH PARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820464',
                        ),
                    'enabled' => true,
                ),
            382 =>
                array(
                    'id' => '8383',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PANGSA UPAZILA COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820648',
                        ),
                    'enabled' => true,
                ),
            383 =>
                array(
                    'id' => '8384',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PANGSHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820677',
                        ),
                    'enabled' => true,
                ),
            384 =>
                array(
                    'id' => '8385',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820730',
                        ),
                    'enabled' => true,
                ),
            385 =>
                array(
                    'id' => '8386',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJBARI UPAZILLA COMPLEX',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200820769',
                        ),
                    'enabled' => true,
                ),
            386 =>
                array(
                    'id' => '8387',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAGHAICHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840044',
                        ),
                    'enabled' => true,
                ),
            387 =>
                array(
                    'id' => '8388',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BANARUPA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840073',
                        ),
                    'enabled' => true,
                ),
            388 =>
                array(
                    'id' => '8389',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BARAICHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840107',
                        ),
                    'enabled' => true,
                ),
            389 =>
                array(
                    'id' => '8390',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BARKAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840136',
                        ),
                    'enabled' => true,
                ),
            390 =>
                array(
                    'id' => '8391',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BELAICHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840165',
                        ),
                    'enabled' => true,
                ),
            391 =>
                array(
                    'id' => '8392',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHANDRAGHONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840194',
                        ),
                    'enabled' => true,
                ),
            392 =>
                array(
                    'id' => '8393',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GHAGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840228',
                        ),
                    'enabled' => true,
                ),
            393 =>
                array(
                    'id' => '8394',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JURACHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840257',
                        ),
                    'enabled' => true,
                ),
            394 =>
                array(
                    'id' => '8395',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAPTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840286',
                        ),
                    'enabled' => true,
                ),
            395 =>
                array(
                    'id' => '8396',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAWKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840349',
                        ),
                    'enabled' => true,
                ),
            396 =>
                array(
                    'id' => '8397',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LANGADU',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840378',
                        ),
                    'enabled' => true,
                ),
            397 =>
                array(
                    'id' => '8398',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NANIAR CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840402',
                        ),
                    'enabled' => true,
                ),
            398 =>
                array(
                    'id' => '8399',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NEW COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840431',
                        ),
                    'enabled' => true,
                ),
            399 =>
                array(
                    'id' => '8400',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RAJOSTHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840499',
                        ),
                    'enabled' => true,
                ),
            400 =>
                array(
                    'id' => '8401',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANGAMATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200840523',
                        ),
                    'enabled' => true,
                ),
            401 =>
                array(
                    'id' => '8402',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BADARGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850100',
                        ),
                    'enabled' => true,
                ),
            402 =>
                array(
                    'id' => '8403',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHATRAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850371',
                        ),
                    'enabled' => true,
                ),
            403 =>
                array(
                    'id' => '8404',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHAP',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850526',
                        ),
                    'enabled' => true,
                ),
            404 =>
                array(
                    'id' => '8405',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GANGACHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850618',
                        ),
                    'enabled' => true,
                ),
            405 =>
                array(
                    'id' => '8406',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HARAGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850676',
                        ),
                    'enabled' => true,
                ),
            406 =>
                array(
                    'id' => '8407',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JAIGIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850700',
                        ),
                    'enabled' => true,
                ),
            407 =>
                array(
                    'id' => '8408',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KACHARI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850739',
                        ),
                    'enabled' => true,
                ),
            408 =>
                array(
                    'id' => '8409',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAUNIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850768',
                        ),
                    'enabled' => true,
                ),
            409 =>
                array(
                    'id' => '8410',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHALASHPIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850797',
                        ),
                    'enabled' => true,
                ),
            410 =>
                array(
                    'id' => '8411',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANGPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850850',
                        ),
                    'enabled' => true,
                ),
            411 =>
                array(
                    'id' => '8412',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LALDIGHIHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850913',
                        ),
                    'enabled' => true,
                ),
            412 =>
                array(
                    'id' => '8413',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200850971',
                        ),
                    'enabled' => true,
                ),
            413 =>
                array(
                    'id' => '8414',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MIRBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851062',
                        ),
                    'enabled' => true,
                ),
            414 =>
                array(
                    'id' => '8415',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MITHAPUKUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851091',
                        ),
                    'enabled' => true,
                ),
            415 =>
                array(
                    'id' => '8416',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PIRGACHA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851338',
                        ),
                    'enabled' => true,
                ),
            416 =>
                array(
                    'id' => '8417',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851367',
                        ),
                    'enabled' => true,
                ),
            417 =>
                array(
                    'id' => '8418',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANGPUR CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851488',
                        ),
                    'enabled' => true,
                ),
            418 =>
                array(
                    'id' => '8419',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANGPUR CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851541',
                        ),
                    'enabled' => true,
                ),
            419 =>
                array(
                    'id' => '8420',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200851938',
                        ),
                    'enabled' => true,
                ),
            420 =>
                array(
                    'id' => '8421',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ANGARIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860040',
                        ),
                    'enabled' => true,
                ),
            421 =>
                array(
                    'id' => '8422',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHEDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860103',
                        ),
                    'enabled' => true,
                ),
            422 =>
                array(
                    'id' => '8423',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAMUDYA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860190',
                        ),
                    'enabled' => true,
                ),
            423 =>
                array(
                    'id' => '8424',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOSHAIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860345',
                        ),
                    'enabled' => true,
                ),
            424 =>
                array(
                    'id' => '8425',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860587',
                        ),
                    'enabled' => true,
                ),
            425 =>
                array(
                    'id' => '8426',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHARIATPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860679',
                        ),
                    'enabled' => true,
                ),
            426 =>
                array(
                    'id' => '8427',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ZAJIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200860703',
                        ),
                    'enabled' => true,
                ),
            427 =>
                array(
                    'id' => '8428',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ASASUNI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870072',
                        ),
                    'enabled' => true,
                ),
            428 =>
                array(
                    'id' => '8429',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BUDHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870348',
                        ),
                    'enabled' => true,
                ),
            429 =>
                array(
                    'id' => '8430',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DEBHATA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870377',
                        ),
                    'enabled' => true,
                ),
            430 =>
                array(
                    'id' => '8431',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOYRA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870498',
                        ),
                    'enabled' => true,
                ),
            431 =>
                array(
                    'id' => '8432',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JHAUDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870551',
                        ),
                    'enabled' => true,
                ),
            432 =>
                array(
                    'id' => '8433',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALAROA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870580',
                        ),
                    'enabled' => true,
                ),
            433 =>
                array(
                    'id' => '8434',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870614',
                        ),
                    'enabled' => true,
                ),
            434 =>
                array(
                    'id' => '8435',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAMAN NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870643',
                        ),
                    'enabled' => true,
                ),
            435 =>
                array(
                    'id' => '8436',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHALISKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870672',
                        ),
                    'enabled' => true,
                ),
            436 =>
                array(
                    'id' => '8437',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KULIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870764',
                        ),
                    'enabled' => true,
                ),
            437 =>
                array(
                    'id' => '8438',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KUMIRABAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870793',
                        ),
                    'enabled' => true,
                ),
            438 =>
                array(
                    'id' => '8439',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAGURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200870827',
                        ),
                    'enabled' => true,
                ),
            439 =>
                array(
                    'id' => '8440',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PARULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200871000',
                        ),
                    'enabled' => true,
                ),
            440 =>
                array(
                    'id' => '8441',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200871097',
                        ),
                    'enabled' => true,
                ),
            441 =>
                array(
                    'id' => '8442',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHYAM NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200871213',
                        ),
                    'enabled' => true,
                ),
            442 =>
                array(
                    'id' => '8443',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TALA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200871305',
                        ),
                    'enabled' => true,
                ),
            443 =>
                array(
                    'id' => '8444',
                    'bank_id' => '38',
                    'bank_branch_name' => 'VOMRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200871363',
                        ),
                    'enabled' => true,
                ),
            444 =>
                array(
                    'id' => '8445',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAGHABARIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880138',
                        ),
                    'enabled' => true,
                ),
            445 =>
                array(
                    'id' => '8446',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHANDAIKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880433',
                        ),
                    'enabled' => true,
                ),
            446 =>
                array(
                    'id' => '8447',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHOWBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880491',
                        ),
                    'enabled' => true,
                ),
            447 =>
                array(
                    'id' => '8448',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880554',
                        ),
                    'enabled' => true,
                ),
            448 =>
                array(
                    'id' => '8449',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHANGORA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880675',
                        ),
                    'enabled' => true,
                ),
            449 =>
                array(
                    'id' => '8450',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ENAYETPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880820',
                        ),
                    'enabled' => true,
                ),
            450 =>
                array(
                    'id' => '8451',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HATIKUMRUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880912',
                        ),
                    'enabled' => true,
                ),
            451 =>
                array(
                    'id' => '8452',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JAMTOIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200880941',
                        ),
                    'enabled' => true,
                ),
            452 =>
                array(
                    'id' => '8453',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881090',
                        ),
                    'enabled' => true,
                ),
            453 =>
                array(
                    'id' => '8454',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHASHKAWLIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881153',
                        ),
                    'enabled' => true,
                ),
            454 =>
                array(
                    'id' => '8455',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LAHI RIMOHONPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881308',
                        ),
                    'enabled' => true,
                ),
            455 =>
                array(
                    'id' => '8456',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NAOGAON BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881395',
                        ),
                    'enabled' => true,
                ),
            456 =>
                array(
                    'id' => '8457',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NATUARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881429',
                        ),
                    'enabled' => true,
                ),
            457 =>
                array(
                    'id' => '8458',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAHID SOHRAWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881661',
                        ),
                    'enabled' => true,
                ),
            458 =>
                array(
                    'id' => '8459',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SADANANDAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881795',
                        ),
                    'enabled' => true,
                ),
            459 =>
                array(
                    'id' => '8460',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881874',
                        ),
                    'enabled' => true,
                ),
            460 =>
                array(
                    'id' => '8461',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAHJADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881908',
                        ),
                    'enabled' => true,
                ),
            461 =>
                array(
                    'id' => '8462',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHOHAGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200881966',
                        ),
                    'enabled' => true,
                ),
            462 =>
                array(
                    'id' => '8463',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SONAMUKHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200882028',
                        ),
                    'enabled' => true,
                ),
            463 =>
                array(
                    'id' => '8464',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TARASH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200882178',
                        ),
                    'enabled' => true,
                ),
            464 =>
                array(
                    'id' => '8465',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ULLAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200882231',
                        ),
                    'enabled' => true,
                ),
            465 =>
                array(
                    'id' => '8466',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JHENAIGATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890160',
                        ),
                    'enabled' => true,
                ),
            466 =>
                array(
                    'id' => '8467',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NAKLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890315',
                        ),
                    'enabled' => true,
                ),
            467 =>
                array(
                    'id' => '8468',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NALITABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890344',
                        ),
                    'enabled' => true,
                ),
            468 =>
                array(
                    'id' => '8469',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NANNI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890436',
                        ),
                    'enabled' => true,
                ),
            469 =>
                array(
                    'id' => '8470',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890557',
                        ),
                    'enabled' => true,
                ),
            470 =>
                array(
                    'id' => '8471',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SREEBORDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890649',
                        ),
                    'enabled' => true,
                ),
            471 =>
                array(
                    'id' => '8472',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SURJADI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200890678',
                        ),
                    'enabled' => true,
                ),
            472 =>
                array(
                    'id' => '8473',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAKSHIN SUNAMGONJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900063',
                        ),
                    'enabled' => true,
                ),
            473 =>
                array(
                    'id' => '8474',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BISHWAMVARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900197',
                        ),
                    'enabled' => true,
                ),
            474 =>
                array(
                    'id' => '8475',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHHATAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900221',
                        ),
                    'enabled' => true,
                ),
            475 =>
                array(
                    'id' => '8476',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DERAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900250',
                        ),
                    'enabled' => true,
                ),
            476 =>
                array(
                    'id' => '8477',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHARAMPASSA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900289',
                        ),
                    'enabled' => true,
                ),
            477 =>
                array(
                    'id' => '8478',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DOWARA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900342',
                        ),
                    'enabled' => true,
                ),
            478 =>
                array(
                    'id' => '8479',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900492',
                        ),
                    'enabled' => true,
                ),
            479 =>
                array(
                    'id' => '8480',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JAMALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900526',
                        ),
                    'enabled' => true,
                ),
            480 =>
                array(
                    'id' => '8481',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADHYA NAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200900676',
                        ),
                    'enabled' => true,
                ),
            481 =>
                array(
                    'id' => '8482',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SALLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200901033',
                        ),
                    'enabled' => true,
                ),
            482 =>
                array(
                    'id' => '8483',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200901125',
                        ),
                    'enabled' => true,
                ),
            483 =>
                array(
                    'id' => '8484',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TAHIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200901217',
                        ),
                    'enabled' => true,
                ),
            484 =>
                array(
                    'id' => '8485',
                    'bank_id' => '38',
                    'bank_branch_name' => 'AMJAD ALI ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910079',
                        ),
                    'enabled' => true,
                ),
            485 =>
                array(
                    'id' => '8486',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BAIRAGIR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910132',
                        ),
                    'enabled' => true,
                ),
            486 =>
                array(
                    'id' => '8487',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910161',
                        ),
                    'enabled' => true,
                ),
            487 =>
                array(
                    'id' => '8488',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910316',
                        ),
                    'enabled' => true,
                ),
            488 =>
                array(
                    'id' => '8489',
                    'bank_id' => '38',
                    'bank_branch_name' => 'OSMANI BIMAN BANDAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910408',
                        ),
                    'enabled' => true,
                ),
            489 =>
                array(
                    'id' => '8490',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910437',
                        ),
                    'enabled' => true,
                ),
            490 =>
                array(
                    'id' => '8491',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHARKHAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910703',
                        ),
                    'enabled' => true,
                ),
            491 =>
                array(
                    'id' => '8492',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910916',
                        ),
                    'enabled' => true,
                ),
            492 =>
                array(
                    'id' => '8493',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910945',
                        ),
                    'enabled' => true,
                ),
            493 =>
                array(
                    'id' => '8494',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DAKSHIN FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200910974',
                        ),
                    'enabled' => true,
                ),
            494 =>
                array(
                    'id' => '8495',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DARGA GATE CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911065',
                        ),
                    'enabled' => true,
                ),
            495 =>
                array(
                    'id' => '8496',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHAKA DAKHIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911302',
                        ),
                    'enabled' => true,
                ),
            496 =>
                array(
                    'id' => '8497',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FENCHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911360',
                        ),
                    'enabled' => true,
                ),
            497 =>
                array(
                    'id' => '8498',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FENCHUGANJ SARKARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911399',
                        ),
                    'enabled' => true,
                ),
            498 =>
                array(
                    'id' => '8499',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOLAPGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911607',
                        ),
                    'enabled' => true,
                ),
            499 =>
                array(
                    'id' => '8500',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOWAIN GHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911636',
                        ),
                    'enabled' => true,
                ),
            500 =>
                array(
                    'id' => '8501',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JAINTAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200911810',
                        ),
                    'enabled' => true,
                ),
            501 =>
                array(
                    'id' => '8502',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAMAL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200912051',
                        ),
                    'enabled' => true,
                ),
            502 =>
                array(
                    'id' => '8503',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KANAIGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200912080',
                        ),
                    'enabled' => true,
                ),
            503 =>
                array(
                    'id' => '8504',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KAZALHAOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200912114',
                        ),
                    'enabled' => true,
                ),
            504 =>
                array(
                    'id' => '8505',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KHADIMNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200912206',
                        ),
                    'enabled' => true,
                ),
            505 =>
                array(
                    'id' => '8506',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHAJAN PATTY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200912714',
                        ),
                    'enabled' => true,
                ),
            506 =>
                array(
                    'id' => '8507',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PIRER BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200912893',
                        ),
                    'enabled' => true,
                ),
            507 =>
                array(
                    'id' => '8508',
                    'bank_id' => '38',
                    'bank_branch_name' => 'S.U.O.SC & TECHNOLOGY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913076',
                        ),
                    'enabled' => true,
                ),
            508 =>
                array(
                    'id' => '8509',
                    'bank_id' => '38',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913463',
                        ),
                    'enabled' => true,
                ),
            509 =>
                array(
                    'id' => '8510',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SYLHET CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913584',
                        ),
                    'enabled' => true,
                ),
            510 =>
                array(
                    'id' => '8511',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SYLHET CITY CORPORATION',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913618',
                        ),
                    'enabled' => true,
                ),
            511 =>
                array(
                    'id' => '8512',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SYLHET CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913647',
                        ),
                    'enabled' => true,
                ),
            512 =>
                array(
                    'id' => '8513',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913821',
                        ),
                    'enabled' => true,
                ),
            513 =>
                array(
                    'id' => '8514',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TIKORPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913913',
                        ),
                    'enabled' => true,
                ),
            514 =>
                array(
                    'id' => '8515',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TILAGARH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200913942',
                        ),
                    'enabled' => true,
                ),
            515 =>
                array(
                    'id' => '8516',
                    'bank_id' => '38',
                    'bank_branch_name' => 'ZAKIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200914125',
                        ),
                    'enabled' => true,
                ),
            516 =>
                array(
                    'id' => '8517',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930312',
                        ),
                    'enabled' => true,
                ),
            517 =>
                array(
                    'id' => '8518',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BASAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930370',
                        ),
                    'enabled' => true,
                ),
            518 =>
                array(
                    'id' => '8519',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHUANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930462',
                        ),
                    'enabled' => true,
                ),
            519 =>
                array(
                    'id' => '8520',
                    'bank_id' => '38',
                    'bank_branch_name' => 'COURT BUILDING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930554',
                        ),
                    'enabled' => true,
                ),
            520 =>
                array(
                    'id' => '8521',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DELDUAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930583',
                        ),
                    'enabled' => true,
                ),
            521 =>
                array(
                    'id' => '8522',
                    'bank_id' => '38',
                    'bank_branch_name' => 'DHAN BARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930675',
                        ),
                    'enabled' => true,
                ),
            522 =>
                array(
                    'id' => '8523',
                    'bank_id' => '38',
                    'bank_branch_name' => 'FALDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930888',
                        ),
                    'enabled' => true,
                ),
            523 =>
                array(
                    'id' => '8524',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GARO BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930909',
                        ),
                    'enabled' => true,
                ),
            524 =>
                array(
                    'id' => '8525',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GHATAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930912',
                        ),
                    'enabled' => true,
                ),
            525 =>
                array(
                    'id' => '8526',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOBINDASHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200930970',
                        ),
                    'enabled' => true,
                ),
            526 =>
                array(
                    'id' => '8527',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOPALPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931003',
                        ),
                    'enabled' => true,
                ),
            527 =>
                array(
                    'id' => '8528',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GORAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931032',
                        ),
                    'enabled' => true,
                ),
            528 =>
                array(
                    'id' => '8529',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NALIN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931111',
                        ),
                    'enabled' => true,
                ),
            529 =>
                array(
                    'id' => '8530',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KALIHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931308',
                        ),
                    'enabled' => true,
                ),
            530 =>
                array(
                    'id' => '8531',
                    'bank_id' => '38',
                    'bank_branch_name' => 'KENDUA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931403',
                        ),
                    'enabled' => true,
                ),
            531 =>
                array(
                    'id' => '8532',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MYMENSINGH ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931429',
                        ),
                    'enabled' => true,
                ),
            532 =>
                array(
                    'id' => '8533',
                    'bank_id' => '38',
                    'bank_branch_name' => 'LOWHATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931458',
                        ),
                    'enabled' => true,
                ),
            533 =>
                array(
                    'id' => '8534',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MADHUPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931487',
                        ),
                    'enabled' => true,
                ),
            534 =>
                array(
                    'id' => '8535',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MAWLANA BHASHANI SCIENCE & TECHNOLOGY UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931490',
                        ),
                    'enabled' => true,
                ),
            535 =>
                array(
                    'id' => '8536',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MIRZAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931511',
                        ),
                    'enabled' => true,
                ),
            536 =>
                array(
                    'id' => '8537',
                    'bank_id' => '38',
                    'bank_branch_name' => 'MOHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931603',
                        ),
                    'enabled' => true,
                ),
            537 =>
                array(
                    'id' => '8538',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NAGARPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931690',
                        ),
                    'enabled' => true,
                ),
            538 =>
                array(
                    'id' => '8539',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NIKRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931816',
                        ),
                    'enabled' => true,
                ),
            539 =>
                array(
                    'id' => '8540',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PAKULLA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931874',
                        ),
                    'enabled' => true,
                ),
            540 =>
                array(
                    'id' => '8541',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PAKUTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200931908',
                        ),
                    'enabled' => true,
                ),
            541 =>
                array(
                    'id' => '8542',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAHID SALAHUDDIN CANTONMENT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200932178',
                        ),
                    'enabled' => true,
                ),
            542 =>
                array(
                    'id' => '8543',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHAKHIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200932202',
                        ),
                    'enabled' => true,
                ),
            543 =>
                array(
                    'id' => '8544',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200932299',
                        ),
                    'enabled' => true,
                ),
            544 =>
                array(
                    'id' => '8545',
                    'bank_id' => '38',
                    'bank_branch_name' => 'TANGAIL BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200932323',
                        ),
                    'enabled' => true,
                ),
            545 =>
                array(
                    'id' => '8546',
                    'bank_id' => '38',
                    'bank_branch_name' => 'VICTORIA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200932381',
                        ),
                    'enabled' => true,
                ),
            546 =>
                array(
                    'id' => '8547',
                    'bank_id' => '38',
                    'bank_branch_name' => 'AKHANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940049',
                        ),
                    'enabled' => true,
                ),
            547 =>
                array(
                    'id' => '8548',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BALIADANGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940102',
                        ),
                    'enabled' => true,
                ),
            548 =>
                array(
                    'id' => '8549',
                    'bank_id' => '38',
                    'bank_branch_name' => 'CHOWDHURYHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940281',
                        ),
                    'enabled' => true,
                ),
            549 =>
                array(
                    'id' => '8550',
                    'bank_id' => '38',
                    'bank_branch_name' => 'GOREYAHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940436',
                        ),
                    'enabled' => true,
                ),
            550 =>
                array(
                    'id' => '8551',
                    'bank_id' => '38',
                    'bank_branch_name' => 'HARIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940465',
                        ),
                    'enabled' => true,
                ),
            551 =>
                array(
                    'id' => '8552',
                    'bank_id' => '38',
                    'bank_branch_name' => 'JABOR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940494',
                        ),
                    'enabled' => true,
                ),
            552 =>
                array(
                    'id' => '8553',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PURATAN BUS STAND',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940586',
                        ),
                    'enabled' => true,
                ),
            553 =>
                array(
                    'id' => '8554',
                    'bank_id' => '38',
                    'bank_branch_name' => 'NEKMORAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940731',
                        ),
                    'enabled' => true,
                ),
            554 =>
                array(
                    'id' => '8555',
                    'bank_id' => '38',
                    'bank_branch_name' => 'PIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940760',
                        ),
                    'enabled' => true,
                ),
            555 =>
                array(
                    'id' => '8556',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RANISANKAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940823',
                        ),
                    'enabled' => true,
                ),
            556 =>
                array(
                    'id' => '8557',
                    'bank_id' => '38',
                    'bank_branch_name' => 'RUHEA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940852',
                        ),
                    'enabled' => true,
                ),
            557 =>
                array(
                    'id' => '8558',
                    'bank_id' => '38',
                    'bank_branch_name' => 'BHULLI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940881',
                        ),
                    'enabled' => true,
                ),
            558 =>
                array(
                    'id' => '8559',
                    'bank_id' => '38',
                    'bank_branch_name' => 'SHIBGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940915',
                        ),
                    'enabled' => true,
                ),
            559 =>
                array(
                    'id' => '8560',
                    'bank_id' => '38',
                    'bank_branch_name' => 'THAKURGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200940973',
                        ),
                    'enabled' => true,
                ),
            560 =>
                array(
                    'id' => '8561',
                    'bank_id' => '38',
                    'bank_branch_name' => 'THAKURGAON(SUGAR MILLS)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '200941035',
                        ),
                    'enabled' => true,
                ),
            561 =>
                array(
                    'id' => '8562',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205060287',
                        ),
                    'enabled' => true,
                ),
            562 =>
                array(
                    'id' => '8563',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205100376',
                        ),
                    'enabled' => true,
                ),
            563 =>
                array(
                    'id' => '8564',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BRAHMANBARIA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205120448',
                        ),
                    'enabled' => true,
                ),
            564 =>
                array(
                    'id' => '8565',
                    'bank_id' => '39',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205150139',
                        ),
                    'enabled' => true,
                ),
            565 =>
                array(
                    'id' => '8566',
                    'bank_id' => '39',
                    'bank_branch_name' => 'C.D.A. AVENUE(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205151512',
                        ),
                    'enabled' => true,
                ),
            566 =>
                array(
                    'id' => '8567',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHOWDHURY HAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205152182',
                        ),
                    'enabled' => true,
                ),
            567 =>
                array(
                    'id' => '8568',
                    'bank_id' => '39',
                    'bank_branch_name' => 'FATIKCHARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205152740',
                        ),
                    'enabled' => true,
                ),
            568 =>
                array(
                    'id' => '8569',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205153165',
                        ),
                    'enabled' => true,
                ),
            569 =>
                array(
                    'id' => '8570',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HATHAZARI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205153231',
                        ),
                    'enabled' => true,
                ),
            570 =>
                array(
                    'id' => '8571',
                    'bank_id' => '39',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205153644',
                        ),
                    'enabled' => true,
                ),
            571 =>
                array(
                    'id' => '8572',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205154272',
                        ),
                    'enabled' => true,
                ),
            572 =>
                array(
                    'id' => '8573',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KOTWALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205154401',
                        ),
                    'enabled' => true,
                ),
            573 =>
                array(
                    'id' => '8574',
                    'bank_id' => '39',
                    'bank_branch_name' => 'LOHA GARA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205154672',
                        ),
                    'enabled' => true,
                ),
            574 =>
                array(
                    'id' => '8575',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MADAM BIBIR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205154698',
                        ),
                    'enabled' => true,
                ),
            575 =>
                array(
                    'id' => '8576',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOMIN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205155268',
                        ),
                    'enabled' => true,
                ),
            576 =>
                array(
                    'id' => '8577',
                    'bank_id' => '39',
                    'bank_branch_name' => 'OXYGEN MOUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205155871',
                        ),
                    'enabled' => true,
                ),
            577 =>
                array(
                    'id' => '8578',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205155921',
                        ),
                    'enabled' => true,
                ),
            578 =>
                array(
                    'id' => '8579',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205156133',
                        ),
                    'enabled' => true,
                ),
            579 =>
                array(
                    'id' => '8580',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205180196',
                        ),
                    'enabled' => true,
                ),
            580 =>
                array(
                    'id' => '8581',
                    'bank_id' => '39',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205191156',
                        ),
                    'enabled' => true,
                ),
            581 =>
                array(
                    'id' => '8582',
                    'bank_id' => '39',
                    'bank_branch_name' => 'COMPANIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205191422',
                        ),
                    'enabled' => true,
                ),
            582 =>
                array(
                    'id' => '8583',
                    'bank_id' => '39',
                    'bank_branch_name' => 'GUNABATI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205192171',
                        ),
                    'enabled' => true,
                ),
            583 =>
                array(
                    'id' => '8584',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MEAH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205192926',
                        ),
                    'enabled' => true,
                ),
            584 =>
                array(
                    'id' => '8585',
                    'bank_id' => '39',
                    'bank_branch_name' => 'TEKNAK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205220085',
                        ),
                    'enabled' => true,
                ),
            585 =>
                array(
                    'id' => '8586',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHAKARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205220164',
                        ),
                    'enabled' => true,
                ),
            586 =>
                array(
                    'id' => '8587',
                    'bank_id' => '39',
                    'bank_branch_name' => 'COX\'S BAZAR(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205220285',
                        ),
                    'enabled' => true,
                ),
            587 =>
                array(
                    'id' => '8588',
                    'bank_id' => '39',
                    'bank_branch_name' => 'AGARGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260045',
                        ),
                    'enabled' => true,
                ),
            588 =>
                array(
                    'id' => '8589',
                    'bank_id' => '39',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260229',
                        ),
                    'enabled' => true,
                ),
            589 =>
                array(
                    'id' => '8590',
                    'bank_id' => '39',
                    'bank_branch_name' => 'ASHULIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260258',
                        ),
                    'enabled' => true,
                ),
            590 =>
                array(
                    'id' => '8591',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BALIVADRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260429',
                        ),
                    'enabled' => true,
                ),
            591 =>
                array(
                    'id' => '8592',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260432',
                        ),
                    'enabled' => true,
                ),
            592 =>
                array(
                    'id' => '8593',
                    'bank_id' => '39',
                    'bank_branch_name' => 'DHANMONDI MOHILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260474',
                        ),
                    'enabled' => true,
                ),
            593 =>
                array(
                    'id' => '8594',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BASHUNDHARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260553',
                        ),
                    'enabled' => true,
                ),
            594 =>
                array(
                    'id' => '8595',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BONOSREE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260724',
                        ),
                    'enabled' => true,
                ),
            595 =>
                array(
                    'id' => '8596',
                    'bank_id' => '39',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205260911',
                        ),
                    'enabled' => true,
                ),
            596 =>
                array(
                    'id' => '8597',
                    'bank_id' => '39',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205261181',
                        ),
                    'enabled' => true,
                ),
            597 =>
                array(
                    'id' => '8598',
                    'bank_id' => '39',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205261723',
                        ),
                    'enabled' => true,
                ),
            598 =>
                array(
                    'id' => '8599',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205262056',
                        ),
                    'enabled' => true,
                ),
            599 =>
                array(
                    'id' => '8600',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205262535',
                        ),
                    'enabled' => true,
                ),
            600 =>
                array(
                    'id' => '8601',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205262980',
                        ),
                    'enabled' => true,
                ),
            601 =>
                array(
                    'id' => '8602',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205263192',
                        ),
                    'enabled' => true,
                ),
            602 =>
                array(
                    'id' => '8603',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205263284',
                        ),
                    'enabled' => true,
                ),
            603 =>
                array(
                    'id' => '8604',
                    'bank_id' => '39',
                    'bank_branch_name' => 'NEW ELEPHANT ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205263497',
                        ),
                    'enabled' => true,
                ),
            604 =>
                array(
                    'id' => '8605',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205263705',
                        ),
                    'enabled' => true,
                ),
            605 =>
                array(
                    'id' => '8606',
                    'bank_id' => '39',
                    'bank_branch_name' => 'ROKEYA SHARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205264009',
                        ),
                    'enabled' => true,
                ),
            606 =>
                array(
                    'id' => '8607',
                    'bank_id' => '39',
                    'bank_branch_name' => 'RUPNAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205264012',
                        ),
                    'enabled' => true,
                ),
            607 =>
                array(
                    'id' => '8608',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SATMASJID ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205264038',
                        ),
                    'enabled' => true,
                ),
            608 =>
                array(
                    'id' => '8609',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205264096',
                        ),
                    'enabled' => true,
                ),
            609 =>
                array(
                    'id' => '8610',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205264304',
                        ),
                    'enabled' => true,
                ),
            610 =>
                array(
                    'id' => '8611',
                    'bank_id' => '39',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205264638',
                        ),
                    'enabled' => true,
                ),
            611 =>
                array(
                    'id' => '8612',
                    'bank_id' => '39',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270006',
                        ),
                    'enabled' => true,
                ),
            612 =>
                array(
                    'id' => '8613',
                    'bank_id' => '39',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270130',
                        ),
                    'enabled' => true,
                ),
            613 =>
                array(
                    'id' => '8614',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOGHBAZAR MOHILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270248',
                        ),
                    'enabled' => true,
                ),
            614 =>
                array(
                    'id' => '8615',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KAZI NAZRUL ISLAM AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270301',
                        ),
                    'enabled' => true,
                ),
            615 =>
                array(
                    'id' => '8616',
                    'bank_id' => '39',
                    'bank_branch_name' => 'ATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270343',
                        ),
                    'enabled' => true,
                ),
            616 =>
                array(
                    'id' => '8617',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BANDURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270648',
                        ),
                    'enabled' => true,
                ),
            617 =>
                array(
                    'id' => '8618',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205270880',
                        ),
                    'enabled' => true,
                ),
            618 =>
                array(
                    'id' => '8619',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CORPORATE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205271397',
                        ),
                    'enabled' => true,
                ),
            619 =>
                array(
                    'id' => '8620',
                    'bank_id' => '39',
                    'bank_branch_name' => 'DANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205271421',
                        ),
                    'enabled' => true,
                ),
            620 =>
                array(
                    'id' => '8621',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HASNABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205272567',
                        ),
                    'enabled' => true,
                ),
            621 =>
                array(
                    'id' => '8622',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205272688',
                        ),
                    'enabled' => true,
                ),
            622 =>
                array(
                    'id' => '8623',
                    'bank_id' => '39',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205272804',
                        ),
                    'enabled' => true,
                ),
            623 =>
                array(
                    'id' => '8624',
                    'bank_id' => '39',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205272983',
                        ),
                    'enabled' => true,
                ),
            624 =>
                array(
                    'id' => '8625',
                    'bank_id' => '39',
                    'bank_branch_name' => 'JOYPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205273287',
                        ),
                    'enabled' => true,
                ),
            625 =>
                array(
                    'id' => '8626',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KAKRAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205273379',
                        ),
                    'enabled' => true,
                ),
            626 =>
                array(
                    'id' => '8627',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KAMRANGIRCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205273582',
                        ),
                    'enabled' => true,
                ),
            627 =>
                array(
                    'id' => '8628',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205273940',
                        ),
                    'enabled' => true,
                ),
            628 =>
                array(
                    'id' => '8629',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOTIJHEEL(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205274336',
                        ),
                    'enabled' => true,
                ),
            629 =>
                array(
                    'id' => '8630',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOUCHAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205274365',
                        ),
                    'enabled' => true,
                ),
            630 =>
                array(
                    'id' => '8631',
                    'bank_id' => '39',
                    'bank_branch_name' => 'NEW ESKATON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205275027',
                        ),
                    'enabled' => true,
                ),
            631 =>
                array(
                    'id' => '8632',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205275351',
                        ),
                    'enabled' => true,
                ),
            632 =>
                array(
                    'id' => '8633',
                    'bank_id' => '39',
                    'bank_branch_name' => 'R.K. MISSION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205275472',
                        ),
                    'enabled' => true,
                ),
            633 =>
                array(
                    'id' => '8634',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SARULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205276042',
                        ),
                    'enabled' => true,
                ),
            634 =>
                array(
                    'id' => '8635',
                    'bank_id' => '39',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205280670',
                        ),
                    'enabled' => true,
                ),
            635 =>
                array(
                    'id' => '8636',
                    'bank_id' => '39',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205300521',
                        ),
                    'enabled' => true,
                ),
            636 =>
                array(
                    'id' => '8637',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PARSHURAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205301270',
                        ),
                    'enabled' => true,
                ),
            637 =>
                array(
                    'id' => '8638',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SAGOLNAIYA(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205301362',
                        ),
                    'enabled' => true,
                ),
            638 =>
                array(
                    'id' => '8639',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SELONIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205301425',
                        ),
                    'enabled' => true,
                ),
            639 =>
                array(
                    'id' => '8640',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SONAGAZI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205301496',
                        ),
                    'enabled' => true,
                ),
            640 =>
                array(
                    'id' => '8641',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MONIPUR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205330146',
                        ),
                    'enabled' => true,
                ),
            641 =>
                array(
                    'id' => '8642',
                    'bank_id' => '39',
                    'bank_branch_name' => 'JOYDEBPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205330733',
                        ),
                    'enabled' => true,
                ),
            642 =>
                array(
                    'id' => '8643',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KAPASIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205330883',
                        ),
                    'enabled' => true,
                ),
            643 =>
                array(
                    'id' => '8644',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KONABARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205330946',
                        ),
                    'enabled' => true,
                ),
            644 =>
                array(
                    'id' => '8645',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MAWNA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205331040',
                        ),
                    'enabled' => true,
                ),
            645 =>
                array(
                    'id' => '8646',
                    'bank_id' => '39',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205331637',
                        ),
                    'enabled' => true,
                ),
            646 =>
                array(
                    'id' => '8647',
                    'bank_id' => '39',
                    'bank_branch_name' => 'RUPDIA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205410082',
                        ),
                    'enabled' => true,
                ),
            647 =>
                array(
                    'id' => '8648',
                    'bank_id' => '39',
                    'bank_branch_name' => 'JESSORE SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205410958',
                        ),
                    'enabled' => true,
                ),
            648 =>
                array(
                    'id' => '8649',
                    'bank_id' => '39',
                    'bank_branch_name' => 'DUMURIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205470798',
                        ),
                    'enabled' => true,
                ),
            649 =>
                array(
                    'id' => '8650',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205471542',
                        ),
                    'enabled' => true,
                ),
            650 =>
                array(
                    'id' => '8651',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SIR IQBAL ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205472596',
                        ),
                    'enabled' => true,
                ),
            651 =>
                array(
                    'id' => '8652',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205500947',
                        ),
                    'enabled' => true,
                ),
            652 =>
                array(
                    'id' => '8653',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HAIDERGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205510524',
                        ),
                    'enabled' => true,
                ),
            653 =>
                array(
                    'id' => '8654',
                    'bank_id' => '39',
                    'bank_branch_name' => 'GHIOR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205560374',
                        ),
                    'enabled' => true,
                ),
            654 =>
                array(
                    'id' => '8655',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SINGAIR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205560824',
                        ),
                    'enabled' => true,
                ),
            655 =>
                array(
                    'id' => '8656',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KULAURA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205580941',
                        ),
                    'enabled' => true,
                ),
            656 =>
                array(
                    'id' => '8657',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205581182',
                        ),
                    'enabled' => true,
                ),
            657 =>
                array(
                    'id' => '8658',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MUNSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205591035',
                        ),
                    'enabled' => true,
                ),
            658 =>
                array(
                    'id' => '8659',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205611757',
                        ),
                    'enabled' => true,
                ),
            659 =>
                array(
                    'id' => '8660',
                    'bank_id' => '39',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205641185',
                        ),
                    'enabled' => true,
                ),
            660 =>
                array(
                    'id' => '8661',
                    'bank_id' => '39',
                    'bank_branch_name' => 'KALIBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205670114',
                        ),
                    'enabled' => true,
                ),
            661 =>
                array(
                    'id' => '8662',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205670222',
                        ),
                    'enabled' => true,
                ),
            662 =>
                array(
                    'id' => '8663',
                    'bank_id' => '39',
                    'bank_branch_name' => 'GOPALDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205670606',
                        ),
                    'enabled' => true,
                ),
            663 =>
                array(
                    'id' => '8664',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MADANPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205670651',
                        ),
                    'enabled' => true,
                ),
            664 =>
                array(
                    'id' => '8665',
                    'bank_id' => '39',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205671184',
                        ),
                    'enabled' => true,
                ),
            665 =>
                array(
                    'id' => '8666',
                    'bank_id' => '39',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205680670',
                        ),
                    'enabled' => true,
                ),
            666 =>
                array(
                    'id' => '8667',
                    'bank_id' => '39',
                    'bank_branch_name' => 'NARSHINGDI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205680854',
                        ),
                    'enabled' => true,
                ),
            667 =>
                array(
                    'id' => '8668',
                    'bank_id' => '39',
                    'bank_branch_name' => 'NATORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205691098',
                        ),
                    'enabled' => true,
                ),
            668 =>
                array(
                    'id' => '8669',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205700255',
                        ),
                    'enabled' => true,
                ),
            669 =>
                array(
                    'id' => '8670',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205750250',
                        ),
                    'enabled' => true,
                ),
            670 =>
                array(
                    'id' => '8671',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205750676',
                        ),
                    'enabled' => true,
                ),
            671 =>
                array(
                    'id' => '8672',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SEBARHAT SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205752061',
                        ),
                    'enabled' => true,
                ),
            672 =>
                array(
                    'id' => '8673',
                    'bank_id' => '39',
                    'bank_branch_name' => 'ISHWARDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205761210',
                        ),
                    'enabled' => true,
                ),
            673 =>
                array(
                    'id' => '8674',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205761786',
                        ),
                    'enabled' => true,
                ),
            674 =>
                array(
                    'id' => '8675',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BANESHWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205810224',
                        ),
                    'enabled' => true,
                ),
            675 =>
                array(
                    'id' => '8676',
                    'bank_id' => '39',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205811931',
                        ),
                    'enabled' => true,
                ),
            676 =>
                array(
                    'id' => '8677',
                    'bank_id' => '39',
                    'bank_branch_name' => 'RAJBARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205820735',
                        ),
                    'enabled' => true,
                ),
            677 =>
                array(
                    'id' => '8678',
                    'bank_id' => '39',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205851454',
                        ),
                    'enabled' => true,
                ),
            678 =>
                array(
                    'id' => '8679',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SATKHIRA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205871100',
                        ),
                    'enabled' => true,
                ),
            679 =>
                array(
                    'id' => '8680',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205881879',
                        ),
                    'enabled' => true,
                ),
            680 =>
                array(
                    'id' => '8681',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205890552',
                        ),
                    'enabled' => true,
                ),
            681 =>
                array(
                    'id' => '8682',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BANDAR BAZAR(ISLAMI BANKING)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205910229',
                        ),
                    'enabled' => true,
                ),
            682 =>
                array(
                    'id' => '8683',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BEANI BAZAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205910324',
                        ),
                    'enabled' => true,
                ),
            683 =>
                array(
                    'id' => '8684',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BISHWANATH SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205910445',
                        ),
                    'enabled' => true,
                ),
            684 =>
                array(
                    'id' => '8685',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHARKHAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205910708',
                        ),
                    'enabled' => true,
                ),
            685 =>
                array(
                    'id' => '8686',
                    'bank_id' => '39',
                    'bank_branch_name' => 'CHOWHATTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205910858',
                        ),
                    'enabled' => true,
                ),
            686 =>
                array(
                    'id' => '8687',
                    'bank_id' => '39',
                    'bank_branch_name' => 'HETIMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205911752',
                        ),
                    'enabled' => true,
                ),
            687 =>
                array(
                    'id' => '8688',
                    'bank_id' => '39',
                    'bank_branch_name' => 'LALDIGHIRPAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205912506',
                        ),
                    'enabled' => true,
                ),
            688 =>
                array(
                    'id' => '8689',
                    'bank_id' => '39',
                    'bank_branch_name' => 'PATHANTULA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205912869',
                        ),
                    'enabled' => true,
                ),
            689 =>
                array(
                    'id' => '8690',
                    'bank_id' => '39',
                    'bank_branch_name' => 'SHAHJALAL UPASHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205913255',
                        ),
                    'enabled' => true,
                ),
            690 =>
                array(
                    'id' => '8691',
                    'bank_id' => '39',
                    'bank_branch_name' => 'TAJPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205913839',
                        ),
                    'enabled' => true,
                ),
            691 =>
                array(
                    'id' => '8692',
                    'bank_id' => '39',
                    'bank_branch_name' => 'BALLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205930175',
                        ),
                    'enabled' => true,
                ),
            692 =>
                array(
                    'id' => '8693',
                    'bank_id' => '39',
                    'bank_branch_name' => 'TANGAIL SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '205932302',
                        ),
                    'enabled' => true,
                ),
            693 =>
                array(
                    'id' => '8694',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BAGERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210010077',
                        ),
                    'enabled' => true,
                ),
            694 =>
                array(
                    'id' => '8695',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210060285',
                        ),
                    'enabled' => true,
                ),
            695 =>
                array(
                    'id' => '8696',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210100374',
                        ),
                    'enabled' => true,
                ),
            696 =>
                array(
                    'id' => '8697',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210120433',
                        ),
                    'enabled' => true,
                ),
            697 =>
                array(
                    'id' => '8698',
                    'bank_id' => '40',
                    'bank_branch_name' => 'CHAKTAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150087',
                        ),
                    'enabled' => true,
                ),
            698 =>
                array(
                    'id' => '8699',
                    'bank_id' => '40',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150137',
                        ),
                    'enabled' => true,
                ),
            699 =>
                array(
                    'id' => '8700',
                    'bank_id' => '40',
                    'bank_branch_name' => 'AGRABAD ISLAMI BANKING WINDOW',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150153',
                        ),
                    'enabled' => true,
                ),
            700 =>
                array(
                    'id' => '8701',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BAKOLIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150308',
                        ),
                    'enabled' => true,
                ),
            701 =>
                array(
                    'id' => '8702',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KARNAPHULI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150324',
                        ),
                    'enabled' => true,
                ),
            702 =>
                array(
                    'id' => '8703',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SHEIKH MUJIB ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150511',
                        ),
                    'enabled' => true,
                ),
            703 =>
                array(
                    'id' => '8704',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BAHADDAR HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210150795',
                        ),
                    'enabled' => true,
                ),
            704 =>
                array(
                    'id' => '8705',
                    'bank_id' => '40',
                    'bank_branch_name' => 'C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210151486',
                        ),
                    'enabled' => true,
                ),
            705 =>
                array(
                    'id' => '8706',
                    'bank_id' => '40',
                    'bank_branch_name' => 'C.E.P.Z.',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210151578',
                        ),
                    'enabled' => true,
                ),
            706 =>
                array(
                    'id' => '8707',
                    'bank_id' => '40',
                    'bank_branch_name' => 'LANGOLMORA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210151752',
                        ),
                    'enabled' => true,
                ),
            707 =>
                array(
                    'id' => '8708',
                    'bank_id' => '40',
                    'bank_branch_name' => 'CHITTAGONG UNIVERSITY',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210152085',
                        ),
                    'enabled' => true,
                ),
            708 =>
                array(
                    'id' => '8709',
                    'bank_id' => '40',
                    'bank_branch_name' => 'CHOWDHURI HAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210152177',
                        ),
                    'enabled' => true,
                ),
            709 =>
                array(
                    'id' => '8710',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GUNAGARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210153071',
                        ),
                    'enabled' => true,
                ),
            710 =>
                array(
                    'id' => '8711',
                    'bank_id' => '40',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210153642',
                        ),
                    'enabled' => true,
                ),
            711 =>
                array(
                    'id' => '8712',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210153734',
                        ),
                    'enabled' => true,
                ),
            712 =>
                array(
                    'id' => '8713',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210154270',
                        ),
                    'enabled' => true,
                ),
            713 =>
                array(
                    'id' => '8714',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KUMIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210154454',
                        ),
                    'enabled' => true,
                ),
            714 =>
                array(
                    'id' => '8715',
                    'bank_id' => '40',
                    'bank_branch_name' => 'OXYGEN SQUARE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210155903',
                        ),
                    'enabled' => true,
                ),
            715 =>
                array(
                    'id' => '8716',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210155929',
                        ),
                    'enabled' => true,
                ),
            716 =>
                array(
                    'id' => '8717',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PANCHLAISH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210156049',
                        ),
                    'enabled' => true,
                ),
            717 =>
                array(
                    'id' => '8718',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210156131',
                        ),
                    'enabled' => true,
                ),
            718 =>
                array(
                    'id' => '8719',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210156731',
                        ),
                    'enabled' => true,
                ),
            719 =>
                array(
                    'id' => '8720',
                    'bank_id' => '40',
                    'bank_branch_name' => 'ALAMDANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210180044',
                        ),
                    'enabled' => true,
                ),
            720 =>
                array(
                    'id' => '8721',
                    'bank_id' => '40',
                    'bank_branch_name' => 'CHUADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210180194',
                        ),
                    'enabled' => true,
                ),
            721 =>
                array(
                    'id' => '8722',
                    'bank_id' => '40',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210191154',
                        ),
                    'enabled' => true,
                ),
            722 =>
                array(
                    'id' => '8723',
                    'bank_id' => '40',
                    'bank_branch_name' => 'NIMSHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210193349',
                        ),
                    'enabled' => true,
                ),
            723 =>
                array(
                    'id' => '8724',
                    'bank_id' => '40',
                    'bank_branch_name' => 'RAMCHANDRAPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210193644',
                        ),
                    'enabled' => true,
                ),
            724 =>
                array(
                    'id' => '8725',
                    'bank_id' => '40',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210220254',
                        ),
                    'enabled' => true,
                ),
            725 =>
                array(
                    'id' => '8726',
                    'bank_id' => '40',
                    'bank_branch_name' => 'ASHKONA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210260201',
                        ),
                    'enabled' => true,
                ),
            726 =>
                array(
                    'id' => '8727',
                    'bank_id' => '40',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210260227',
                        ),
                    'enabled' => true,
                ),
            727 =>
                array(
                    'id' => '8728',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SONARGAON JANAPATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210260243',
                        ),
                    'enabled' => true,
                ),
            728 =>
                array(
                    'id' => '8729',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210260430',
                        ),
                    'enabled' => true,
                ),
            729 =>
                array(
                    'id' => '8730',
                    'bank_id' => '40',
                    'bank_branch_name' => 'HEMAYET PUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210260506',
                        ),
                    'enabled' => true,
                ),
            730 =>
                array(
                    'id' => '8731',
                    'bank_id' => '40',
                    'bank_branch_name' => 'DAKSHIN KHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210260919',
                        ),
                    'enabled' => true,
                ),
            731 =>
                array(
                    'id' => '8732',
                    'bank_id' => '40',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210261189',
                        ),
                    'enabled' => true,
                ),
            732 =>
                array(
                    'id' => '8733',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KAMARPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210261518',
                        ),
                    'enabled' => true,
                ),
            733 =>
                array(
                    'id' => '8734',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GREEN ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210261697',
                        ),
                    'enabled' => true,
                ),
            734 =>
                array(
                    'id' => '8735',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210261721',
                        ),
                    'enabled' => true,
                ),
            735 =>
                array(
                    'id' => '8736',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GULSHAN-1',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210261934',
                        ),
                    'enabled' => true,
                ),
            736 =>
                array(
                    'id' => '8737',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210262533',
                        ),
                    'enabled' => true,
                ),
            737 =>
                array(
                    'id' => '8738',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210262988',
                        ),
                    'enabled' => true,
                ),
            738 =>
                array(
                    'id' => '8739',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MOHAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210263190',
                        ),
                    'enabled' => true,
                ),
            739 =>
                array(
                    'id' => '8740',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MOHAMMADPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210263282',
                        ),
                    'enabled' => true,
                ),
            740 =>
                array(
                    'id' => '8741',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PANTHA PATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210263611',
                        ),
                    'enabled' => true,
                ),
            741 =>
                array(
                    'id' => '8742',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210263703',
                        ),
                    'enabled' => true,
                ),
            742 =>
                array(
                    'id' => '8743',
                    'bank_id' => '40',
                    'bank_branch_name' => 'RING ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210263974',
                        ),
                    'enabled' => true,
                ),
            743 =>
                array(
                    'id' => '8744',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210264094',
                        ),
                    'enabled' => true,
                ),
            744 =>
                array(
                    'id' => '8745',
                    'bank_id' => '40',
                    'bank_branch_name' => 'TEJGOAN LINK ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210264528',
                        ),
                    'enabled' => true,
                ),
            745 =>
                array(
                    'id' => '8746',
                    'bank_id' => '40',
                    'bank_branch_name' => 'UTTARA MODEL TOWN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210264694',
                        ),
                    'enabled' => true,
                ),
            746 =>
                array(
                    'id' => '8747',
                    'bank_id' => '40',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210270004',
                        ),
                    'enabled' => true,
                ),
            747 =>
                array(
                    'id' => '8748',
                    'bank_id' => '40',
                    'bank_branch_name' => 'AGANAGAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210270138',
                        ),
                    'enabled' => true,
                ),
            748 =>
                array(
                    'id' => '8749',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KHOLAMORA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210270338',
                        ),
                    'enabled' => true,
                ),
            749 =>
                array(
                    'id' => '8750',
                    'bank_id' => '40',
                    'bank_branch_name' => 'EKORIA(KERANIGANJ)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210272086',
                        ),
                    'enabled' => true,
                ),
            750 =>
                array(
                    'id' => '8751',
                    'bank_id' => '40',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210272323',
                        ),
                    'enabled' => true,
                ),
            751 =>
                array(
                    'id' => '8752',
                    'bank_id' => '40',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210272802',
                        ),
                    'enabled' => true,
                ),
            752 =>
                array(
                    'id' => '8753',
                    'bank_id' => '40',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210272981',
                        ),
                    'enabled' => true,
                ),
            753 =>
                array(
                    'id' => '8754',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MALIBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210273948',
                        ),
                    'enabled' => true,
                ),
            754 =>
                array(
                    'id' => '8755',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MATUAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210274000',
                        ),
                    'enabled' => true,
                ),
            755 =>
                array(
                    'id' => '8756',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MUNSHIKHOLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210274518',
                        ),
                    'enabled' => true,
                ),
            756 =>
                array(
                    'id' => '8757',
                    'bank_id' => '40',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210274697',
                        ),
                    'enabled' => true,
                ),
            757 =>
                array(
                    'id' => '8758',
                    'bank_id' => '40',
                    'bank_branch_name' => 'NAWABPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210274750',
                        ),
                    'enabled' => true,
                ),
            758 =>
                array(
                    'id' => '8759',
                    'bank_id' => '40',
                    'bank_branch_name' => 'NEW ESKATON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210275025',
                        ),
                    'enabled' => true,
                ),
            759 =>
                array(
                    'id' => '8760',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210275359',
                        ),
                    'enabled' => true,
                ),
            760 =>
                array(
                    'id' => '8761',
                    'bank_id' => '40',
                    'bank_branch_name' => 'TOPKHANA ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210276732',
                        ),
                    'enabled' => true,
                ),
            761 =>
                array(
                    'id' => '8762',
                    'bank_id' => '40',
                    'bank_branch_name' => 'TOPKAHNA ISLAMI BANKING WINDOW',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210276758',
                        ),
                    'enabled' => true,
                ),
            762 =>
                array(
                    'id' => '8763',
                    'bank_id' => '40',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210280678',
                        ),
                    'enabled' => true,
                ),
            763 =>
                array(
                    'id' => '8764',
                    'bank_id' => '40',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210290521',
                        ),
                    'enabled' => true,
                ),
            764 =>
                array(
                    'id' => '8765',
                    'bank_id' => '40',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210300529',
                        ),
                    'enabled' => true,
                ),
            765 =>
                array(
                    'id' => '8766',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210320583',
                        ),
                    'enabled' => true,
                ),
            766 =>
                array(
                    'id' => '8767',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210330528',
                        ),
                    'enabled' => true,
                ),
            767 =>
                array(
                    'id' => '8768',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SHAFIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210331422',
                        ),
                    'enabled' => true,
                ),
            768 =>
                array(
                    'id' => '8769',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GOPALGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210350379',
                        ),
                    'enabled' => true,
                ),
            769 =>
                array(
                    'id' => '8770',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KOTALIPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210350674',
                        ),
                    'enabled' => true,
                ),
            770 =>
                array(
                    'id' => '8771',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PATGATI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210350832',
                        ),
                    'enabled' => true,
                ),
            771 =>
                array(
                    'id' => '8772',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BAKSHIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210390100',
                        ),
                    'enabled' => true,
                ),
            772 =>
                array(
                    'id' => '8773',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BENAPOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210410280',
                        ),
                    'enabled' => true,
                ),
            773 =>
                array(
                    'id' => '8774',
                    'bank_id' => '40',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210410943',
                        ),
                    'enabled' => true,
                ),
            774 =>
                array(
                    'id' => '8775',
                    'bank_id' => '40',
                    'bank_branch_name' => 'JHENAIDAH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210440647',
                        ),
                    'enabled' => true,
                ),
            775 =>
                array(
                    'id' => '8776',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KHAN JAHAN ALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210470059',
                        ),
                    'enabled' => true,
                ),
            776 =>
                array(
                    'id' => '8777',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210471540',
                        ),
                    'enabled' => true,
                ),
            777 =>
                array(
                    'id' => '8778',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BHAIRAB SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210480207',
                        ),
                    'enabled' => true,
                ),
            778 =>
                array(
                    'id' => '8779',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210500945',
                        ),
                    'enabled' => true,
                ),
            779 =>
                array(
                    'id' => '8780',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SHIBCHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210540705',
                        ),
                    'enabled' => true,
                ),
            780 =>
                array(
                    'id' => '8781',
                    'bank_id' => '40',
                    'bank_branch_name' => 'TAKERHAT BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210540792',
                        ),
                    'enabled' => true,
                ),
            781 =>
                array(
                    'id' => '8782',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MOULVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210581180',
                        ),
                    'enabled' => true,
                ),
            782 =>
                array(
                    'id' => '8783',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210611755',
                        ),
                    'enabled' => true,
                ),
            783 =>
                array(
                    'id' => '8784',
                    'bank_id' => '40',
                    'bank_branch_name' => 'ATRAI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210640168',
                        ),
                    'enabled' => true,
                ),
            784 =>
                array(
                    'id' => '8785',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BUNTI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210670154',
                        ),
                    'enabled' => true,
                ),
            785 =>
                array(
                    'id' => '8786',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KATCHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210670820',
                        ),
                    'enabled' => true,
                ),
            786 =>
                array(
                    'id' => '8787',
                    'bank_id' => '40',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210671182',
                        ),
                    'enabled' => true,
                ),
            787 =>
                array(
                    'id' => '8788',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210680678',
                        ),
                    'enabled' => true,
                ),
            788 =>
                array(
                    'id' => '8789',
                    'bank_id' => '40',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210700253',
                        ),
                    'enabled' => true,
                ),
            789 =>
                array(
                    'id' => '8790',
                    'bank_id' => '40',
                    'bank_branch_name' => 'KANSAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210700529',
                        ),
                    'enabled' => true,
                ),
            790 =>
                array(
                    'id' => '8791',
                    'bank_id' => '40',
                    'bank_branch_name' => 'ROHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210700882',
                        ),
                    'enabled' => true,
                ),
            791 =>
                array(
                    'id' => '8792',
                    'bank_id' => '40',
                    'bank_branch_name' => 'NILPHAMARI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210730731',
                        ),
                    'enabled' => true,
                ),
            792 =>
                array(
                    'id' => '8793',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SYEDPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210731198',
                        ),
                    'enabled' => true,
                ),
            793 =>
                array(
                    'id' => '8794',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BASHURHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210750258',
                        ),
                    'enabled' => true,
                ),
            794 =>
                array(
                    'id' => '8795',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210761784',
                        ),
                    'enabled' => true,
                ),
            795 =>
                array(
                    'id' => '8796',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PATUAKHALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210781098',
                        ),
                    'enabled' => true,
                ),
            796 =>
                array(
                    'id' => '8797',
                    'bank_id' => '40',
                    'bank_branch_name' => 'MATHBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210790526',
                        ),
                    'enabled' => true,
                ),
            797 =>
                array(
                    'id' => '8798',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BANESHWAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210810222',
                        ),
                    'enabled' => true,
                ),
            798 =>
                array(
                    'id' => '8799',
                    'bank_id' => '40',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210811939',
                        ),
                    'enabled' => true,
                ),
            799 =>
                array(
                    'id' => '8800',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GOALANDA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210820283',
                        ),
                    'enabled' => true,
                ),
            800 =>
                array(
                    'id' => '8801',
                    'bank_id' => '40',
                    'bank_branch_name' => 'PIRGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210851360',
                        ),
                    'enabled' => true,
                ),
            801 =>
                array(
                    'id' => '8802',
                    'bank_id' => '40',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210851452',
                        ),
                    'enabled' => true,
                ),
            802 =>
                array(
                    'id' => '8803',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BHOJESWAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210860151',
                        ),
                    'enabled' => true,
                ),
            803 =>
                array(
                    'id' => '8804',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210871090',
                        ),
                    'enabled' => true,
                ),
            804 =>
                array(
                    'id' => '8805',
                    'bank_id' => '40',
                    'bank_branch_name' => 'HATIKUMRUL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210880915',
                        ),
                    'enabled' => true,
                ),
            805 =>
                array(
                    'id' => '8806',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SUNAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210901128',
                        ),
                    'enabled' => true,
                ),
            806 =>
                array(
                    'id' => '8807',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210910319',
                        ),
                    'enabled' => true,
                ),
            807 =>
                array(
                    'id' => '8808',
                    'bank_id' => '40',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210910430',
                        ),
                    'enabled' => true,
                ),
            808 =>
                array(
                    'id' => '8809',
                    'bank_id' => '40',
                    'bank_branch_name' => 'GOALA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210911547',
                        ),
                    'enabled' => true,
                ),
            809 =>
                array(
                    'id' => '8810',
                    'bank_id' => '40',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210913558',
                        ),
                    'enabled' => true,
                ),
            810 =>
                array(
                    'id' => '8811',
                    'bank_id' => '40',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '210932292',
                        ),
                    'enabled' => true,
                ),
            811 =>
                array(
                    'id' => '8812',
                    'bank_id' => '41',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215100379',
                        ),
                    'enabled' => true,
                ),
            812 =>
                array(
                    'id' => '8813',
                    'bank_id' => '41',
                    'bank_branch_name' => '31-AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215150040',
                        ),
                    'enabled' => true,
                ),
            813 =>
                array(
                    'id' => '8814',
                    'bank_id' => '41',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215150132',
                        ),
                    'enabled' => true,
                ),
            814 =>
                array(
                    'id' => '8815',
                    'bank_id' => '41',
                    'bank_branch_name' => 'CHITTAGONG(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215152143',
                        ),
                    'enabled' => true,
                ),
            815 =>
                array(
                    'id' => '8816',
                    'bank_id' => '41',
                    'bank_branch_name' => 'NASIRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215155537',
                        ),
                    'enabled' => true,
                ),
            816 =>
                array(
                    'id' => '8817',
                    'bank_id' => '41',
                    'bank_branch_name' => 'STATION ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215157519',
                        ),
                    'enabled' => true,
                ),
            817 =>
                array(
                    'id' => '8818',
                    'bank_id' => '41',
                    'bank_branch_name' => 'DHANMONDI(ROAD-2)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215261218',
                        ),
                    'enabled' => true,
                ),
            818 =>
                array(
                    'id' => '8819',
                    'bank_id' => '41',
                    'bank_branch_name' => 'DHANMONDI(ROAD-5)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215261247',
                        ),
                    'enabled' => true,
                ),
            819 =>
                array(
                    'id' => '8820',
                    'bank_id' => '41',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215261726',
                        ),
                    'enabled' => true,
                ),
            820 =>
                array(
                    'id' => '8821',
                    'bank_id' => '41',
                    'bank_branch_name' => 'GULSHAN NORTH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215261900',
                        ),
                    'enabled' => true,
                ),
            821 =>
                array(
                    'id' => '8822',
                    'bank_id' => '41',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215262538',
                        ),
                    'enabled' => true,
                ),
            822 =>
                array(
                    'id' => '8823',
                    'bank_id' => '41',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215262983',
                        ),
                    'enabled' => true,
                ),
            823 =>
                array(
                    'id' => '8824',
                    'bank_id' => '41',
                    'bank_branch_name' => 'SAVAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215264099',
                        ),
                    'enabled' => true,
                ),
            824 =>
                array(
                    'id' => '8825',
                    'bank_id' => '41',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215270009',
                        ),
                    'enabled' => true,
                ),
            825 =>
                array(
                    'id' => '8826',
                    'bank_id' => '41',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215271279',
                        ),
                    'enabled' => true,
                ),
            826 =>
                array(
                    'id' => '8827',
                    'bank_id' => '41',
                    'bank_branch_name' => 'DHAKA(MAIN)',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215271787',
                        ),
                    'enabled' => true,
                ),
            827 =>
                array(
                    'id' => '8828',
                    'bank_id' => '41',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215274247',
                        ),
                    'enabled' => true,
                ),
            828 =>
                array(
                    'id' => '8829',
                    'bank_id' => '41',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215471545',
                        ),
                    'enabled' => true,
                ),
            829 =>
                array(
                    'id' => '8830',
                    'bank_id' => '41',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215671187',
                        ),
                    'enabled' => true,
                ),
            830 =>
                array(
                    'id' => '8831',
                    'bank_id' => '41',
                    'bank_branch_name' => 'SYLHET SADAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '215913674',
                        ),
                    'enabled' => true,
                ),
            831 =>
                array(
                    'id' => '8832',
                    'bank_id' => '42',
                    'bank_branch_name' => 'CHITTAGONG',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220151968',
                        ),
                    'enabled' => true,
                ),
            832 =>
                array(
                    'id' => '8833',
                    'bank_id' => '42',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220261724',
                        ),
                    'enabled' => true,
                ),
            833 =>
                array(
                    'id' => '8834',
                    'bank_id' => '42',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220270007',
                        ),
                    'enabled' => true,
                ),
            834 =>
                array(
                    'id' => '8835',
                    'bank_id' => '42',
                    'bank_branch_name' => 'DHAKA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220271514',
                        ),
                    'enabled' => true,
                ),
            835 =>
                array(
                    'id' => '8836',
                    'bank_id' => '42',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220471543',
                        ),
                    'enabled' => true,
                ),
            836 =>
                array(
                    'id' => '8837',
                    'bank_id' => '42',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220811932',
                        ),
                    'enabled' => true,
                ),
            837 =>
                array(
                    'id' => '8838',
                    'bank_id' => '42',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '220913551',
                        ),
                    'enabled' => true,
                ),
            838 =>
                array(
                    'id' => '8839',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225060283',
                        ),
                    'enabled' => true,
                ),
            839 =>
                array(
                    'id' => '8840',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225100372',
                        ),
                    'enabled' => true,
                ),
            840 =>
                array(
                    'id' => '8841',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SHERPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225102741',
                        ),
                    'enabled' => true,
                ),
            841 =>
                array(
                    'id' => '8842',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BRAHMANBARIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225120431',
                        ),
                    'enabled' => true,
                ),
            842 =>
                array(
                    'id' => '8843',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHANDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225130313',
                        ),
                    'enabled' => true,
                ),
            843 =>
                array(
                    'id' => '8844',
                    'bank_id' => '43',
                    'bank_branch_name' => 'HAJIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225130889',
                        ),
                    'enabled' => true,
                ),
            844 =>
                array(
                    'id' => '8845',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KACHUA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225130913',
                        ),
                    'enabled' => true,
                ),
            845 =>
                array(
                    'id' => '8846',
                    'bank_id' => '43',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225150135',
                        ),
                    'enabled' => true,
                ),
            846 =>
                array(
                    'id' => '8847',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ANDERKILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225150469',
                        ),
                    'enabled' => true,
                ),
            847 =>
                array(
                    'id' => '8848',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BANDARTILA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225150948',
                        ),
                    'enabled' => true,
                ),
            848 =>
                array(
                    'id' => '8849',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BHATIARY SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225151226',
                        ),
                    'enabled' => true,
                ),
            849 =>
                array(
                    'id' => '8850',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHAWK BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225151934',
                        ),
                    'enabled' => true,
                ),
            850 =>
                array(
                    'id' => '8851',
                    'bank_id' => '43',
                    'bank_branch_name' => 'HALISHAHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225153161',
                        ),
                    'enabled' => true,
                ),
            851 =>
                array(
                    'id' => '8852',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225153640',
                        ),
                    'enabled' => true,
                ),
            852 =>
                array(
                    'id' => '8853',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KADAMTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225153732',
                        ),
                    'enabled' => true,
                ),
            853 =>
                array(
                    'id' => '8854',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225154278',
                        ),
                    'enabled' => true,
                ),
            854 =>
                array(
                    'id' => '8855',
                    'bank_id' => '43',
                    'bank_branch_name' => 'LOHAGARA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225154678',
                        ),
                    'enabled' => true,
                ),
            855 =>
                array(
                    'id' => '8856',
                    'bank_id' => '43',
                    'bank_branch_name' => 'O.R. NIZAM ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225155806',
                        ),
                    'enabled' => true,
                ),
            856 =>
                array(
                    'id' => '8857',
                    'bank_id' => '43',
                    'bank_branch_name' => 'OXYGEN MOUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225155877',
                        ),
                    'enabled' => true,
                ),
            857 =>
                array(
                    'id' => '8858',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PAHARTALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225155927',
                        ),
                    'enabled' => true,
                ),
            858 =>
                array(
                    'id' => '8859',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PATHERHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225156139',
                        ),
                    'enabled' => true,
                ),
            859 =>
                array(
                    'id' => '8860',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PRABARTAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225156326',
                        ),
                    'enabled' => true,
                ),
            860 =>
                array(
                    'id' => '8861',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SATKANIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225157062',
                        ),
                    'enabled' => true,
                ),
            861 =>
                array(
                    'id' => '8862',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHOUDDAGRAM',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225191060',
                        ),
                    'enabled' => true,
                ),
            862 =>
                array(
                    'id' => '8863',
                    'bank_id' => '43',
                    'bank_branch_name' => 'COMILLA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225191152',
                        ),
                    'enabled' => true,
                ),
            863 =>
                array(
                    'id' => '8864',
                    'bank_id' => '43',
                    'bank_branch_name' => 'DAULATGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225191549',
                        ),
                    'enabled' => true,
                ),
            864 =>
                array(
                    'id' => '8865',
                    'bank_id' => '43',
                    'bank_branch_name' => 'GOURIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225192119',
                        ),
                    'enabled' => true,
                ),
            865 =>
                array(
                    'id' => '8866',
                    'bank_id' => '43',
                    'bank_branch_name' => 'COXS BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225220252',
                        ),
                    'enabled' => true,
                ),
            866 =>
                array(
                    'id' => '8867',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ASHULIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225260225',
                        ),
                    'enabled' => true,
                ),
            867 =>
                array(
                    'id' => '8868',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SONARGAON JANAPATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225260241',
                        ),
                    'enabled' => true,
                ),
            868 =>
                array(
                    'id' => '8869',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JAMUNA FUTURE PARK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225260333',
                        ),
                    'enabled' => true,
                ),
            869 =>
                array(
                    'id' => '8870',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225260438',
                        ),
                    'enabled' => true,
                ),
            870 =>
                array(
                    'id' => '8871',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BANANI LAKE VIEW',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225260638',
                        ),
                    'enabled' => true,
                ),
            871 =>
                array(
                    'id' => '8872',
                    'bank_id' => '43',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225261187',
                        ),
                    'enabled' => true,
                ),
            872 =>
                array(
                    'id' => '8873',
                    'bank_id' => '43',
                    'bank_branch_name' => 'DSE NUKUNJA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225261279',
                        ),
                    'enabled' => true,
                ),
            873 =>
                array(
                    'id' => '8874',
                    'bank_id' => '43',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225261729',
                        ),
                    'enabled' => true,
                ),
            874 =>
                array(
                    'id' => '8875',
                    'bank_id' => '43',
                    'bank_branch_name' => 'GULSHAN AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225261732',
                        ),
                    'enabled' => true,
                ),
            875 =>
                array(
                    'id' => '8876',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225262531',
                        ),
                    'enabled' => true,
                ),
            876 =>
                array(
                    'id' => '8877',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MIRPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225262986',
                        ),
                    'enabled' => true,
                ),
            877 =>
                array(
                    'id' => '8878',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NEW MARKET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225263527',
                        ),
                    'enabled' => true,
                ),
            878 =>
                array(
                    'id' => '8879',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PALLABI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225263585',
                        ),
                    'enabled' => true,
                ),
            879 =>
                array(
                    'id' => '8880',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PRAGATI SARANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225263701',
                        ),
                    'enabled' => true,
                ),
            880 =>
                array(
                    'id' => '8881',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SAVAR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225264100',
                        ),
                    'enabled' => true,
                ),
            881 =>
                array(
                    'id' => '8882',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SHYAMALI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225264300',
                        ),
                    'enabled' => true,
                ),
            882 =>
                array(
                    'id' => '8883',
                    'bank_id' => '43',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225264634',
                        ),
                    'enabled' => true,
                ),
            883 =>
                array(
                    'id' => '8884',
                    'bank_id' => '43',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225270002',
                        ),
                    'enabled' => true,
                ),
            884 =>
                array(
                    'id' => '8885',
                    'bank_id' => '43',
                    'bank_branch_name' => 'B.B. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225270431',
                        ),
                    'enabled' => true,
                ),
            885 =>
                array(
                    'id' => '8886',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BANDURA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225271151',
                        ),
                    'enabled' => true,
                ),
            886 =>
                array(
                    'id' => '8887',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MOTIJHEEL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225271548',
                        ),
                    'enabled' => true,
                ),
            887 =>
                array(
                    'id' => '8888',
                    'bank_id' => '43',
                    'bank_branch_name' => 'FOREIGN EXCHANGE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225272321',
                        ),
                    'enabled' => true,
                ),
            888 =>
                array(
                    'id' => '8889',
                    'bank_id' => '43',
                    'bank_branch_name' => 'HEAD OFFICE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225272684',
                        ),
                    'enabled' => true,
                ),
            889 =>
                array(
                    'id' => '8890',
                    'bank_id' => '43',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225272800',
                        ),
                    'enabled' => true,
                ),
            890 =>
                array(
                    'id' => '8891',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ISLAMI BANKING',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225272868',
                        ),
                    'enabled' => true,
                ),
            891 =>
                array(
                    'id' => '8892',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225272989',
                        ),
                    'enabled' => true,
                ),
            892 =>
                array(
                    'id' => '8893',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JATRABARI SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225273238',
                        ),
                    'enabled' => true,
                ),
            893 =>
                array(
                    'id' => '8894',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JOHNSON ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225273254',
                        ),
                    'enabled' => true,
                ),
            894 =>
                array(
                    'id' => '8895',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JOYPARA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225273296',
                        ),
                    'enabled' => true,
                ),
            895 =>
                array(
                    'id' => '8896',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KALIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225273467',
                        ),
                    'enabled' => true,
                ),
            896 =>
                array(
                    'id' => '8897',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MOGHBAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225274187',
                        ),
                    'enabled' => true,
                ),
            897 =>
                array(
                    'id' => '8898',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MOUCHAK',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225274361',
                        ),
                    'enabled' => true,
                ),
            898 =>
                array(
                    'id' => '8899',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225274695',
                        ),
                    'enabled' => true,
                ),
            899 =>
                array(
                    'id' => '8900',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NAWABPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225274729',
                        ),
                    'enabled' => true,
                ),
            900 =>
                array(
                    'id' => '8901',
                    'bank_id' => '43',
                    'bank_branch_name' => 'POSTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225275294',
                        ),
                    'enabled' => true,
                ),
            901 =>
                array(
                    'id' => '8902',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225275357',
                        ),
                    'enabled' => true,
                ),
            902 =>
                array(
                    'id' => '8903',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SADARGHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225275928',
                        ),
                    'enabled' => true,
                ),
            903 =>
                array(
                    'id' => '8904',
                    'bank_id' => '43',
                    'bank_branch_name' => 'URDU ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225276798',
                        ),
                    'enabled' => true,
                ),
            904 =>
                array(
                    'id' => '8905',
                    'bank_id' => '43',
                    'bank_branch_name' => 'VIP ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225276851',
                        ),
                    'enabled' => true,
                ),
            905 =>
                array(
                    'id' => '8906',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ZINZIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225277092',
                        ),
                    'enabled' => true,
                ),
            906 =>
                array(
                    'id' => '8907',
                    'bank_id' => '43',
                    'bank_branch_name' => 'DINAJPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225280676',
                        ),
                    'enabled' => true,
                ),
            907 =>
                array(
                    'id' => '8908',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ALFADANGA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225290040',
                        ),
                    'enabled' => true,
                ),
            908 =>
                array(
                    'id' => '8909',
                    'bank_id' => '43',
                    'bank_branch_name' => 'FARIDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225290529',
                        ),
                    'enabled' => true,
                ),
            909 =>
                array(
                    'id' => '8910',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KANAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225290916',
                        ),
                    'enabled' => true,
                ),
            910 =>
                array(
                    'id' => '8911',
                    'bank_id' => '43',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225300527',
                        ),
                    'enabled' => true,
                ),
            911 =>
                array(
                    'id' => '8912',
                    'bank_id' => '43',
                    'bank_branch_name' => 'GOBINDAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225320581',
                        ),
                    'enabled' => true,
                ),
            912 =>
                array(
                    'id' => '8913',
                    'bank_id' => '43',
                    'bank_branch_name' => 'GAZIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225330526',
                        ),
                    'enabled' => true,
                ),
            913 =>
                array(
                    'id' => '8914',
                    'bank_id' => '43',
                    'bank_branch_name' => 'GAZIPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225330539',
                        ),
                    'enabled' => true,
                ),
            914 =>
                array(
                    'id' => '8915',
                    'bank_id' => '43',
                    'bank_branch_name' => 'TONGI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225331633',
                        ),
                    'enabled' => true,
                ),
            915 =>
                array(
                    'id' => '8916',
                    'bank_id' => '43',
                    'bank_branch_name' => 'HABIGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225360620',
                        ),
                    'enabled' => true,
                ),
            916 =>
                array(
                    'id' => '8917',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JAMALPUR SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225390861',
                        ),
                    'enabled' => true,
                ),
            917 =>
                array(
                    'id' => '8918',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BENAPOLE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225410288',
                        ),
                    'enabled' => true,
                ),
            918 =>
                array(
                    'id' => '8919',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225410941',
                        ),
                    'enabled' => true,
                ),
            919 =>
                array(
                    'id' => '8920',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225471548',
                        ),
                    'enabled' => true,
                ),
            920 =>
                array(
                    'id' => '8921',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BHAIRAB BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225480221',
                        ),
                    'enabled' => true,
                ),
            921 =>
                array(
                    'id' => '8922',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KISHOREGANJ SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225480689',
                        ),
                    'enabled' => true,
                ),
            922 =>
                array(
                    'id' => '8923',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KUSHTIA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225500943',
                        ),
                    'enabled' => true,
                ),
            923 =>
                array(
                    'id' => '8924',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHANDRAGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225510191',
                        ),
                    'enabled' => true,
                ),
            924 =>
                array(
                    'id' => '8925',
                    'bank_id' => '43',
                    'bank_branch_name' => 'LAKSHMIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225510733',
                        ),
                    'enabled' => true,
                ),
            925 =>
                array(
                    'id' => '8926',
                    'bank_id' => '43',
                    'bank_branch_name' => 'RAIPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225510975',
                        ),
                    'enabled' => true,
                ),
            926 =>
                array(
                    'id' => '8927',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MANIKGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225560617',
                        ),
                    'enabled' => true,
                ),
            927 =>
                array(
                    'id' => '8928',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225581188',
                        ),
                    'enabled' => true,
                ),
            928 =>
                array(
                    'id' => '8929',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SREE MANGAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225581720',
                        ),
                    'enabled' => true,
                ),
            929 =>
                array(
                    'id' => '8930',
                    'bank_id' => '43',
                    'bank_branch_name' => 'REKABI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225591215',
                        ),
                    'enabled' => true,
                ),
            930 =>
                array(
                    'id' => '8931',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MYMENSINGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225611753',
                        ),
                    'enabled' => true,
                ),
            931 =>
                array(
                    'id' => '8932',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225641181',
                        ),
                    'enabled' => true,
                ),
            932 =>
                array(
                    'id' => '8933',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BHULTA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225670228',
                        ),
                    'enabled' => true,
                ),
            933 =>
                array(
                    'id' => '8934',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NETAIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225671272',
                        ),
                    'enabled' => true,
                ),
            934 =>
                array(
                    'id' => '8935',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225671751',
                        ),
                    'enabled' => true,
                ),
            935 =>
                array(
                    'id' => '8936',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MADHABDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225680676',
                        ),
                    'enabled' => true,
                ),
            936 =>
                array(
                    'id' => '8937',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225680850',
                        ),
                    'enabled' => true,
                ),
            937 =>
                array(
                    'id' => '8938',
                    'bank_id' => '43',
                    'bank_branch_name' => 'NATORE SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225691115',
                        ),
                    'enabled' => true,
                ),
            938 =>
                array(
                    'id' => '8939',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHAPAI NAWABGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225700251',
                        ),
                    'enabled' => true,
                ),
            939 =>
                array(
                    'id' => '8940',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ROHANPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225700880',
                        ),
                    'enabled' => true,
                ),
            940 =>
                array(
                    'id' => '8941',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SAYEDPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225730797',
                        ),
                    'enabled' => true,
                ),
            941 =>
                array(
                    'id' => '8942',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHOUMOHANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225750672',
                        ),
                    'enabled' => true,
                ),
            942 =>
                array(
                    'id' => '8943',
                    'bank_id' => '43',
                    'bank_branch_name' => 'KABIRHAT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225751213',
                        ),
                    'enabled' => true,
                ),
            943 =>
                array(
                    'id' => '8944',
                    'bank_id' => '43',
                    'bank_branch_name' => 'MAIJDEE SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225751589',
                        ),
                    'enabled' => true,
                ),
            944 =>
                array(
                    'id' => '8945',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SENBAGH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225752083',
                        ),
                    'enabled' => true,
                ),
            945 =>
                array(
                    'id' => '8946',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SUBARNA CHAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225752359',
                        ),
                    'enabled' => true,
                ),
            946 =>
                array(
                    'id' => '8947',
                    'bank_id' => '43',
                    'bank_branch_name' => 'PABNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225761782',
                        ),
                    'enabled' => true,
                ),
            947 =>
                array(
                    'id' => '8948',
                    'bank_id' => '43',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225811937',
                        ),
                    'enabled' => true,
                ),
            948 =>
                array(
                    'id' => '8949',
                    'bank_id' => '43',
                    'bank_branch_name' => 'RANGPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225851450',
                        ),
                    'enabled' => true,
                ),
            949 =>
                array(
                    'id' => '8950',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SATKHIRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225871098',
                        ),
                    'enabled' => true,
                ),
            950 =>
                array(
                    'id' => '8951',
                    'bank_id' => '43',
                    'bank_branch_name' => 'SERAJGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225881875',
                        ),
                    'enabled' => true,
                ),
            951 =>
                array(
                    'id' => '8952',
                    'bank_id' => '43',
                    'bank_branch_name' => 'CHHATAK SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225900248',
                        ),
                    'enabled' => true,
                ),
            952 =>
                array(
                    'id' => '8953',
                    'bank_id' => '43',
                    'bank_branch_name' => 'JAGANNATHPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225900493',
                        ),
                    'enabled' => true,
                ),
            953 =>
                array(
                    'id' => '8954',
                    'bank_id' => '43',
                    'bank_branch_name' => 'AMBARKHANA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225910041',
                        ),
                    'enabled' => true,
                ),
            954 =>
                array(
                    'id' => '8955',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225910317',
                        ),
                    'enabled' => true,
                ),
            955 =>
                array(
                    'id' => '8956',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BISHWANATH',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225910438',
                        ),
                    'enabled' => true,
                ),
            956 =>
                array(
                    'id' => '8957',
                    'bank_id' => '43',
                    'bank_branch_name' => 'DHAKA DAKHIN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225911303',
                        ),
                    'enabled' => true,
                ),
            957 =>
                array(
                    'id' => '8958',
                    'bank_id' => '43',
                    'bank_branch_name' => 'BANDAR BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225913556',
                        ),
                    'enabled' => true,
                ),
            958 =>
                array(
                    'id' => '8959',
                    'bank_id' => '43',
                    'bank_branch_name' => 'ZINDA BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225914155',
                        ),
                    'enabled' => true,
                ),
            959 =>
                array(
                    'id' => '8960',
                    'bank_id' => '43',
                    'bank_branch_name' => 'TANGAIL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '225932290',
                        ),
                    'enabled' => true,
                ),
            960 =>
                array(
                    'id' => '8961',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230060281',
                        ),
                    'enabled' => true,
                ),
            961 =>
                array(
                    'id' => '8962',
                    'bank_id' => '44',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230150133',
                        ),
                    'enabled' => true,
                ),
            962 =>
                array(
                    'id' => '8963',
                    'bank_id' => '44',
                    'bank_branch_name' => 'JUBILEE ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230153648',
                        ),
                    'enabled' => true,
                ),
            963 =>
                array(
                    'id' => '8964',
                    'bank_id' => '44',
                    'bank_branch_name' => 'KHATUNGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230154276',
                        ),
                    'enabled' => true,
                ),
            964 =>
                array(
                    'id' => '8965',
                    'bank_id' => '44',
                    'bank_branch_name' => 'MURADPUR C.D.A. AVENUE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230155354',
                        ),
                    'enabled' => true,
                ),
            965 =>
                array(
                    'id' => '8966',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BANANI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230260436',
                        ),
                    'enabled' => true,
                ),
            966 =>
                array(
                    'id' => '8967',
                    'bank_id' => '44',
                    'bank_branch_name' => 'DHANMONDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230261185',
                        ),
                    'enabled' => true,
                ),
            967 =>
                array(
                    'id' => '8968',
                    'bank_id' => '44',
                    'bank_branch_name' => 'GULSHAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230261727',
                        ),
                    'enabled' => true,
                ),
            968 =>
                array(
                    'id' => '8969',
                    'bank_id' => '44',
                    'bank_branch_name' => 'IDB BHABAN',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230262142',
                        ),
                    'enabled' => true,
                ),
            969 =>
                array(
                    'id' => '8970',
                    'bank_id' => '44',
                    'bank_branch_name' => 'KARWAN BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230262539',
                        ),
                    'enabled' => true,
                ),
            970 =>
                array(
                    'id' => '8971',
                    'bank_id' => '44',
                    'bank_branch_name' => 'MIRPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230263075',
                        ),
                    'enabled' => true,
                ),
            971 =>
                array(
                    'id' => '8972',
                    'bank_id' => '44',
                    'bank_branch_name' => 'UTTARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230264632',
                        ),
                    'enabled' => true,
                ),
            972 =>
                array(
                    'id' => '8973',
                    'bank_id' => '44',
                    'bank_branch_name' => 'TRUNCATION POINT',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230270000',
                        ),
                    'enabled' => true,
                ),
            973 =>
                array(
                    'id' => '8974',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BABU BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230270550',
                        ),
                    'enabled' => true,
                ),
            974 =>
                array(
                    'id' => '8975',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BANGSHAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230270884',
                        ),
                    'enabled' => true,
                ),
            975 =>
                array(
                    'id' => '8976',
                    'bank_id' => '44',
                    'bank_branch_name' => 'IMAMGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230272808',
                        ),
                    'enabled' => true,
                ),
            976 =>
                array(
                    'id' => '8977',
                    'bank_id' => '44',
                    'bank_branch_name' => 'ISLAMPUR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230272987',
                        ),
                    'enabled' => true,
                ),
            977 =>
                array(
                    'id' => '8978',
                    'bank_id' => '44',
                    'bank_branch_name' => 'NAWABPUR ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230274756',
                        ),
                    'enabled' => true,
                ),
            978 =>
                array(
                    'id' => '8979',
                    'bank_id' => '44',
                    'bank_branch_name' => 'PRINCIPAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230275355',
                        ),
                    'enabled' => true,
                ),
            979 =>
                array(
                    'id' => '8980',
                    'bank_id' => '44',
                    'bank_branch_name' => 'VIP ROAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230276859',
                        ),
                    'enabled' => true,
                ),
            980 =>
                array(
                    'id' => '8981',
                    'bank_id' => '44',
                    'bank_branch_name' => 'FENI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230300525',
                        ),
                    'enabled' => true,
                ),
            981 =>
                array(
                    'id' => '8982',
                    'bank_id' => '44',
                    'bank_branch_name' => 'HABIGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230360615',
                        ),
                    'enabled' => true,
                ),
            982 =>
                array(
                    'id' => '8983',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BENAPOLE BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230410310',
                        ),
                    'enabled' => true,
                ),
            983 =>
                array(
                    'id' => '8984',
                    'bank_id' => '44',
                    'bank_branch_name' => 'JESSORE',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230410949',
                        ),
                    'enabled' => true,
                ),
            984 =>
                array(
                    'id' => '8985',
                    'bank_id' => '44',
                    'bank_branch_name' => 'NOAPARA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230411630',
                        ),
                    'enabled' => true,
                ),
            985 =>
                array(
                    'id' => '8986',
                    'bank_id' => '44',
                    'bank_branch_name' => 'KHULNA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230471546',
                        ),
                    'enabled' => true,
                ),
            986 =>
                array(
                    'id' => '8987',
                    'bank_id' => '44',
                    'bank_branch_name' => 'MOULAVI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230581186',
                        ),
                    'enabled' => true,
                ),
            987 =>
                array(
                    'id' => '8988',
                    'bank_id' => '44',
                    'bank_branch_name' => 'NAOGAON',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230641189',
                        ),
                    'enabled' => true,
                ),
            988 =>
                array(
                    'id' => '8989',
                    'bank_id' => '44',
                    'bank_branch_name' => 'NARAYANGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230671188',
                        ),
                    'enabled' => true,
                ),
            989 =>
                array(
                    'id' => '8990',
                    'bank_id' => '44',
                    'bank_branch_name' => 'NARSHINGDI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230680858',
                        ),
                    'enabled' => true,
                ),
            990 =>
                array(
                    'id' => '8991',
                    'bank_id' => '44',
                    'bank_branch_name' => 'RAJSHAHI',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230811935',
                        ),
                    'enabled' => true,
                ),
            991 =>
                array(
                    'id' => '8992',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BEANI BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230910315',
                        ),
                    'enabled' => true,
                ),
            992 =>
                array(
                    'id' => '8993',
                    'bank_id' => '44',
                    'bank_branch_name' => 'BISHWANATH BAZAR',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230910465',
                        ),
                    'enabled' => true,
                ),
            993 =>
                array(
                    'id' => '8994',
                    'bank_id' => '44',
                    'bank_branch_name' => 'SYLHET',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '230913554',
                        ),
                    'enabled' => true,
                ),
            994 =>
                array(
                    'id' => '8995',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BARISAL',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '235060286',
                        ),
                    'enabled' => true,
                ),
            995 =>
                array(
                    'id' => '8996',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BOGRA',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '235100375',
                        ),
                    'enabled' => true,
                ),
            996 =>
                array(
                    'id' => '8997',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BOROGOLA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '235100504',
                        ),
                    'enabled' => true,
                ),
            997 =>
                array(
                    'id' => '8998',
                    'bank_id' => '45',
                    'bank_branch_name' => 'ASHUGANJ',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '235120100',
                        ),
                    'enabled' => true,
                ),
            998 =>
                array(
                    'id' => '8999',
                    'bank_id' => '45',
                    'bank_branch_name' => 'BRAHMANBARIA SME',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '235120447',
                        ),
                    'enabled' => true,
                ),
            999 =>
                array(
                    'id' => '9000',
                    'bank_id' => '45',
                    'bank_branch_name' => 'AGRABAD',
                    'bank_branch_data' =>
                        array(
                            'routing_no' => '235150138',
                        ),
                    'enabled' => true,
                ),
        );
    }
}
