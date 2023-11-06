<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch8Seeder extends Seeder
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
        return array (
  0 => 
  array (
    'id' => '7001',
    'bank_id' => '35',
    'name' => 'BAHER CHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780108',
    ),
    'enabled' => true,
  ),
  1 => 
  array (
    'id' => '7002',
    'bank_id' => '35',
    'name' => 'DIBUAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780403',
    ),
    'enabled' => true,
  ),
  2 => 
  array (
    'id' => '7003',
    'bank_id' => '35',
    'name' => 'GALACHIPA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780490',
    ),
    'enabled' => true,
  ),
  3 => 
  array (
    'id' => '7004',
    'bank_id' => '35',
    'name' => 'KALISURI BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780616',
    ),
    'enabled' => true,
  ),
  4 => 
  array (
    'id' => '7005',
    'bank_id' => '35',
    'name' => 'KHEPUPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780766',
    ),
    'enabled' => true,
  ),
  5 => 
  array (
    'id' => '7006',
    'bank_id' => '35',
    'name' => 'NEWTOWN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780979',
    ),
    'enabled' => true,
  ),
  6 => 
  array (
    'id' => '7007',
    'bank_id' => '35',
    'name' => 'PATUAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185781099',
    ),
    'enabled' => true,
  ),
  7 => 
  array (
    'id' => '7008',
    'bank_id' => '35',
    'name' => 'PATUAKHALI S & T.U',
    'bank_branch_data' => 
    array (
      'routing_no' => '185781123',
    ),
    'enabled' => true,
  ),
  8 => 
  array (
    'id' => '7009',
    'bank_id' => '35',
    'name' => 'BHANDARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790130',
    ),
    'enabled' => true,
  ),
  9 => 
  array (
    'id' => '7010',
    'bank_id' => '35',
    'name' => 'HULARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790343',
    ),
    'enabled' => true,
  ),
  10 => 
  array (
    'id' => '7011',
    'bank_id' => '35',
    'name' => 'INDERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790372',
    ),
    'enabled' => true,
  ),
  11 => 
  array (
    'id' => '7012',
    'bank_id' => '35',
    'name' => 'KAWKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790435',
    ),
    'enabled' => true,
  ),
  12 => 
  array (
    'id' => '7013',
    'bank_id' => '35',
    'name' => 'KOWRIKHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790464',
    ),
    'enabled' => true,
  ),
  13 => 
  array (
    'id' => '7014',
    'bank_id' => '35',
    'name' => 'MATHBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790527',
    ),
    'enabled' => true,
  ),
  14 => 
  array (
    'id' => '7015',
    'bank_id' => '35',
    'name' => 'PIROJPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790769',
    ),
    'enabled' => true,
  ),
  15 => 
  array (
    'id' => '7016',
    'bank_id' => '35',
    'name' => 'SWARUPKATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185790972',
    ),
    'enabled' => true,
  ),
  16 => 
  array (
    'id' => '7017',
    'bank_id' => '35',
    'name' => 'ZIA NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185791063',
    ),
    'enabled' => true,
  ),
  17 => 
  array (
    'id' => '7018',
    'bank_id' => '35',
    'name' => 'K.N. ISLAM ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185810881',
    ),
    'enabled' => true,
  ),
  18 => 
  array (
    'id' => '7019',
    'bank_id' => '35',
    'name' => 'KAKANHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185810944',
    ),
    'enabled' => true,
  ),
  19 => 
  array (
    'id' => '7020',
    'bank_id' => '35',
    'name' => 'LAXMIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185811185',
    ),
    'enabled' => true,
  ),
  20 => 
  array (
    'id' => '7021',
    'bank_id' => '35',
    'name' => 'RAJSHAHI CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185811998',
    ),
    'enabled' => true,
  ),
  21 => 
  array (
    'id' => '7022',
    'bank_id' => '35',
    'name' => 'RUET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185812171',
    ),
    'enabled' => true,
  ),
  22 => 
  array (
    'id' => '7023',
    'bank_id' => '35',
    'name' => 'SHAHEB BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185812263',
    ),
    'enabled' => true,
  ),
  23 => 
  array (
    'id' => '7024',
    'bank_id' => '35',
    'name' => 'TANORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185812384',
    ),
    'enabled' => true,
  ),
  24 => 
  array (
    'id' => '7025',
    'bank_id' => '35',
    'name' => 'BANIBAHA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185820192',
    ),
    'enabled' => true,
  ),
  25 => 
  array (
    'id' => '7026',
    'bank_id' => '35',
    'name' => 'G.T.M.(GOALANDA)',
    'bank_branch_data' => 
    array (
      'routing_no' => '185820255',
    ),
    'enabled' => true,
  ),
  26 => 
  array (
    'id' => '7027',
    'bank_id' => '35',
    'name' => 'PANGSHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185820671',
    ),
    'enabled' => true,
  ),
  27 => 
  array (
    'id' => '7028',
    'bank_id' => '35',
    'name' => 'POURASAVA MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185820705',
    ),
    'enabled' => true,
  ),
  28 => 
  array (
    'id' => '7029',
    'bank_id' => '35',
    'name' => 'RAJBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185820734',
    ),
    'enabled' => true,
  ),
  29 => 
  array (
    'id' => '7030',
    'bank_id' => '35',
    'name' => 'BANARUPA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185840077',
    ),
    'enabled' => true,
  ),
  30 => 
  array (
    'id' => '7031',
    'bank_id' => '35',
    'name' => 'RANGAMATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185840527',
    ),
    'enabled' => true,
  ),
  31 => 
  array (
    'id' => '7032',
    'bank_id' => '35',
    'name' => 'TABALCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185840556',
    ),
    'enabled' => true,
  ),
  32 => 
  array (
    'id' => '7033',
    'bank_id' => '35',
    'name' => 'ANNADA NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850070',
    ),
    'enabled' => true,
  ),
  33 => 
  array (
    'id' => '7034',
    'bank_id' => '35',
    'name' => 'BARAIBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850225',
    ),
    'enabled' => true,
  ),
  34 => 
  array (
    'id' => '7035',
    'bank_id' => '35',
    'name' => 'BHENDABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850283',
    ),
    'enabled' => true,
  ),
  35 => 
  array (
    'id' => '7036',
    'bank_id' => '35',
    'name' => 'CENTRAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850346',
    ),
    'enabled' => true,
  ),
  36 => 
  array (
    'id' => '7037',
    'bank_id' => '35',
    'name' => 'G.L.RAY ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850588',
    ),
    'enabled' => true,
  ),
  37 => 
  array (
    'id' => '7038',
    'bank_id' => '35',
    'name' => 'HARAGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850670',
    ),
    'enabled' => true,
  ),
  38 => 
  array (
    'id' => '7039',
    'bank_id' => '35',
    'name' => 'LADIES',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850854',
    ),
    'enabled' => true,
  ),
  39 => 
  array (
    'id' => '7040',
    'bank_id' => '35',
    'name' => 'MAHIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185850975',
    ),
    'enabled' => true,
  ),
  40 => 
  array (
    'id' => '7041',
    'bank_id' => '35',
    'name' => 'R.K. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185851424',
    ),
    'enabled' => true,
  ),
  41 => 
  array (
    'id' => '7042',
    'bank_id' => '35',
    'name' => 'RLY. CROSSING',
    'bank_branch_data' => 
    array (
      'routing_no' => '185851608',
    ),
    'enabled' => true,
  ),
  42 => 
  array (
    'id' => '7043',
    'bank_id' => '35',
    'name' => 'TARAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185851932',
    ),
    'enabled' => true,
  ),
  43 => 
  array (
    'id' => '7044',
    'bank_id' => '35',
    'name' => 'TETULTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185851961',
    ),
    'enabled' => true,
  ),
  44 => 
  array (
    'id' => '7045',
    'bank_id' => '35',
    'name' => 'GOSHAIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185860349',
    ),
    'enabled' => true,
  ),
  45 => 
  array (
    'id' => '7046',
    'bank_id' => '35',
    'name' => 'SHARIATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185860673',
    ),
    'enabled' => true,
  ),
  46 => 
  array (
    'id' => '7047',
    'bank_id' => '35',
    'name' => 'BARADAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185870221',
    ),
    'enabled' => true,
  ),
  47 => 
  array (
    'id' => '7048',
    'bank_id' => '35',
    'name' => 'JHAUDANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185870555',
    ),
    'enabled' => true,
  ),
  48 => 
  array (
    'id' => '7049',
    'bank_id' => '35',
    'name' => 'KALAROA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185870584',
    ),
    'enabled' => true,
  ),
  49 => 
  array (
    'id' => '7050',
    'bank_id' => '35',
    'name' => 'NALTA MOBARAKNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185870913',
    ),
    'enabled' => true,
  ),
  50 => 
  array (
    'id' => '7051',
    'bank_id' => '35',
    'name' => 'NOWABENKI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185870942',
    ),
    'enabled' => true,
  ),
  51 => 
  array (
    'id' => '7052',
    'bank_id' => '35',
    'name' => 'SATKHIRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185871091',
    ),
    'enabled' => true,
  ),
  52 => 
  array (
    'id' => '7053',
    'bank_id' => '35',
    'name' => 'BAGABATIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185880079',
    ),
    'enabled' => true,
  ),
  53 => 
  array (
    'id' => '7054',
    'bank_id' => '35',
    'name' => 'BELKUCHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185880224',
    ),
    'enabled' => true,
  ),
  54 => 
  array (
    'id' => '7055',
    'bank_id' => '35',
    'name' => 'BETIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185880282',
    ),
    'enabled' => true,
  ),
  55 => 
  array (
    'id' => '7056',
    'bank_id' => '35',
    'name' => 'BOALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185880345',
    ),
    'enabled' => true,
  ),
  56 => 
  array (
    'id' => '7057',
    'bank_id' => '35',
    'name' => 'DARIAPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185880587',
    ),
    'enabled' => true,
  ),
  57 => 
  array (
    'id' => '7058',
    'bank_id' => '35',
    'name' => 'SERAJGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185881878',
    ),
    'enabled' => true,
  ),
  58 => 
  array (
    'id' => '7059',
    'bank_id' => '35',
    'name' => 'SHIAL KOLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185881931',
    ),
    'enabled' => true,
  ),
  59 => 
  array (
    'id' => '7060',
    'bank_id' => '35',
    'name' => 'SHERPUR TOWN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185890580',
    ),
    'enabled' => true,
  ),
  60 => 
  array (
    'id' => '7061',
    'bank_id' => '35',
    'name' => 'BHOBER BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185900162',
    ),
    'enabled' => true,
  ),
  61 => 
  array (
    'id' => '7062',
    'bank_id' => '35',
    'name' => 'CHHATAK',
    'bank_branch_data' => 
    array (
      'routing_no' => '185900225',
    ),
    'enabled' => true,
  ),
  62 => 
  array (
    'id' => '7063',
    'bank_id' => '35',
    'name' => 'DOLAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185900317',
    ),
    'enabled' => true,
  ),
  63 => 
  array (
    'id' => '7064',
    'bank_id' => '35',
    'name' => 'JAGANNATHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185900496',
    ),
    'enabled' => true,
  ),
  64 => 
  array (
    'id' => '7065',
    'bank_id' => '35',
    'name' => 'KANBARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185900612',
    ),
    'enabled' => true,
  ),
  65 => 
  array (
    'id' => '7066',
    'bank_id' => '35',
    'name' => 'SUNAMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185901129',
    ),
    'enabled' => true,
  ),
  66 => 
  array (
    'id' => '7067',
    'bank_id' => '35',
    'name' => 'SYEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185901187',
    ),
    'enabled' => true,
  ),
  67 => 
  array (
    'id' => '7068',
    'bank_id' => '35',
    'name' => 'KALARAI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185910099',
    ),
    'enabled' => true,
  ),
  68 => 
  array (
    'id' => '7069',
    'bank_id' => '35',
    'name' => 'BABUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185910110',
    ),
    'enabled' => true,
  ),
  69 => 
  array (
    'id' => '7070',
    'bank_id' => '35',
    'name' => 'RAZAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185910123',
    ),
    'enabled' => true,
  ),
  70 => 
  array (
    'id' => '7071',
    'bank_id' => '35',
    'name' => 'CHARKHAI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185910152',
    ),
    'enabled' => true,
  ),
  71 => 
  array (
    'id' => '7072',
    'bank_id' => '35',
    'name' => 'BANDAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185910194',
    ),
    'enabled' => true,
  ),
  72 => 
  array (
    'id' => '7073',
    'bank_id' => '35',
    'name' => 'DATTARAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185911180',
    ),
    'enabled' => true,
  ),
  73 => 
  array (
    'id' => '7074',
    'bank_id' => '35',
    'name' => 'DAYAMIR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185911214',
    ),
    'enabled' => true,
  ),
  74 => 
  array (
    'id' => '7075',
    'bank_id' => '35',
    'name' => 'HABRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185911698',
    ),
    'enabled' => true,
  ),
  75 => 
  array (
    'id' => '7076',
    'bank_id' => '35',
    'name' => 'ISLAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185911780',
    ),
    'enabled' => true,
  ),
  76 => 
  array (
    'id' => '7077',
    'bank_id' => '35',
    'name' => 'KALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185911993',
    ),
    'enabled' => true,
  ),
  77 => 
  array (
    'id' => '7078',
    'bank_id' => '35',
    'name' => 'KANAIGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912084',
    ),
    'enabled' => true,
  ),
  78 => 
  array (
    'id' => '7079',
    'bank_id' => '35',
    'name' => 'KAZIR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912147',
    ),
    'enabled' => true,
  ),
  79 => 
  array (
    'id' => '7080',
    'bank_id' => '35',
    'name' => 'KHADIMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912239',
    ),
    'enabled' => true,
  ),
  80 => 
  array (
    'id' => '7081',
    'bank_id' => '35',
    'name' => 'KHALO MUKH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912297',
    ),
    'enabled' => true,
  ),
  81 => 
  array (
    'id' => '7082',
    'bank_id' => '35',
    'name' => 'KURAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912389',
    ),
    'enabled' => true,
  ),
  82 => 
  array (
    'id' => '7083',
    'bank_id' => '35',
    'name' => 'KURUA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912413',
    ),
    'enabled' => true,
  ),
  83 => 
  array (
    'id' => '7084',
    'bank_id' => '35',
    'name' => 'LADIES',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912442',
    ),
    'enabled' => true,
  ),
  84 => 
  array (
    'id' => '7085',
    'bank_id' => '35',
    'name' => 'MADAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912534',
    ),
    'enabled' => true,
  ),
  85 => 
  array (
    'id' => '7086',
    'bank_id' => '35',
    'name' => 'MADINA MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912547',
    ),
    'enabled' => true,
  ),
  86 => 
  array (
    'id' => '7087',
    'bank_id' => '35',
    'name' => 'MIRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912592',
    ),
    'enabled' => true,
  ),
  87 => 
  array (
    'id' => '7088',
    'bank_id' => '35',
    'name' => 'NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912839',
    ),
    'enabled' => true,
  ),
  88 => 
  array (
    'id' => '7089',
    'bank_id' => '35',
    'name' => 'RAKHAL GONJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185912950',
    ),
    'enabled' => true,
  ),
  89 => 
  array (
    'id' => '7090',
    'bank_id' => '35',
    'name' => 'REKABIBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185913041',
    ),
    'enabled' => true,
  ),
  90 => 
  array (
    'id' => '7091',
    'bank_id' => '35',
    'name' => 'STATION ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185913467',
    ),
    'enabled' => true,
  ),
  91 => 
  array (
    'id' => '7092',
    'bank_id' => '35',
    'name' => 'SULTANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185913520',
    ),
    'enabled' => true,
  ),
  92 => 
  array (
    'id' => '7093',
    'bank_id' => '35',
    'name' => 'SYLHET AGRICULTURE UNIVERSITY',
    'bank_branch_data' => 
    array (
      'routing_no' => '185913575',
    ),
    'enabled' => true,
  ),
  93 => 
  array (
    'id' => '7094',
    'bank_id' => '35',
    'name' => 'TALTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185913854',
    ),
    'enabled' => true,
  ),
  94 => 
  array (
    'id' => '7095',
    'bank_id' => '35',
    'name' => 'VARTHA KHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185914066',
    ),
    'enabled' => true,
  ),
  95 => 
  array (
    'id' => '7096',
    'bank_id' => '35',
    'name' => 'BALLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185930316',
    ),
    'enabled' => true,
  ),
  96 => 
  array (
    'id' => '7097',
    'bank_id' => '35',
    'name' => 'BASAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185930374',
    ),
    'enabled' => true,
  ),
  97 => 
  array (
    'id' => '7098',
    'bank_id' => '35',
    'name' => 'ELASHIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185930790',
    ),
    'enabled' => true,
  ),
  98 => 
  array (
    'id' => '7099',
    'bank_id' => '35',
    'name' => 'ELENGA BUS STAND',
    'bank_branch_data' => 
    array (
      'routing_no' => '185930853',
    ),
    'enabled' => true,
  ),
  99 => 
  array (
    'id' => '7100',
    'bank_id' => '35',
    'name' => 'GHATAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185930916',
    ),
    'enabled' => true,
  ),
  100 => 
  array (
    'id' => '7101',
    'bank_id' => '35',
    'name' => 'KALIHATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185931302',
    ),
    'enabled' => true,
  ),
  101 => 
  array (
    'id' => '7102',
    'bank_id' => '35',
    'name' => 'NATIAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185931786',
    ),
    'enabled' => true,
  ),
  102 => 
  array (
    'id' => '7103',
    'bank_id' => '35',
    'name' => 'PAKULLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185931849',
    ),
    'enabled' => true,
  ),
  103 => 
  array (
    'id' => '7104',
    'bank_id' => '35',
    'name' => 'PATHRAIL BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185931960',
    ),
    'enabled' => true,
  ),
  104 => 
  array (
    'id' => '7105',
    'bank_id' => '35',
    'name' => 'RATANGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185932051',
    ),
    'enabled' => true,
  ),
  105 => 
  array (
    'id' => '7106',
    'bank_id' => '35',
    'name' => 'SHAKHIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185932206',
    ),
    'enabled' => true,
  ),
  106 => 
  array (
    'id' => '7107',
    'bank_id' => '35',
    'name' => 'TANGAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185932293',
    ),
    'enabled' => true,
  ),
  107 => 
  array (
    'id' => '7108',
    'bank_id' => '35',
    'name' => 'BALIADANGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185940106',
    ),
    'enabled' => true,
  ),
  108 => 
  array (
    'id' => '7109',
    'bank_id' => '35',
    'name' => 'BHULLY',
    'bank_branch_data' => 
    array (
      'routing_no' => '185940227',
    ),
    'enabled' => true,
  ),
  109 => 
  array (
    'id' => '7110',
    'bank_id' => '35',
    'name' => 'THAKURGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '185940977',
    ),
    'enabled' => true,
  ),
  110 => 
  array (
    'id' => '7111',
    'bank_id' => '36',
    'name' => 'AMTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190040046',
    ),
    'enabled' => true,
  ),
  111 => 
  array (
    'id' => '7112',
    'bank_id' => '36',
    'name' => 'BARISAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '190060284',
    ),
    'enabled' => true,
  ),
  112 => 
  array (
    'id' => '7113',
    'bank_id' => '36',
    'name' => 'BOGRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190100373',
    ),
    'enabled' => true,
  ),
  113 => 
  array (
    'id' => '7114',
    'bank_id' => '36',
    'name' => 'ASHUGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190120108',
    ),
    'enabled' => true,
  ),
  114 => 
  array (
    'id' => '7115',
    'bank_id' => '36',
    'name' => 'BRAHMANBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190120432',
    ),
    'enabled' => true,
  ),
  115 => 
  array (
    'id' => '7116',
    'bank_id' => '36',
    'name' => 'HAJIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190130880',
    ),
    'enabled' => true,
  ),
  116 => 
  array (
    'id' => '7117',
    'bank_id' => '36',
    'name' => 'AGRABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '190150136',
    ),
    'enabled' => true,
  ),
  117 => 
  array (
    'id' => '7118',
    'bank_id' => '36',
    'name' => 'ANDERKILLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190150460',
    ),
    'enabled' => true,
  ),
  118 => 
  array (
    'id' => '7119',
    'bank_id' => '36',
    'name' => 'BANDARTILA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190150949',
    ),
    'enabled' => true,
  ),
  119 => 
  array (
    'id' => '7120',
    'bank_id' => '36',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190151935',
    ),
    'enabled' => true,
  ),
  120 => 
  array (
    'id' => '7121',
    'bank_id' => '36',
    'name' => 'JUBILEE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '190153641',
    ),
    'enabled' => true,
  ),
  121 => 
  array (
    'id' => '7122',
    'bank_id' => '36',
    'name' => 'KHATUNGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190154279',
    ),
    'enabled' => true,
  ),
  122 => 
  array (
    'id' => '7123',
    'bank_id' => '36',
    'name' => 'MADHUNA GHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '190154758',
    ),
    'enabled' => true,
  ),
  123 => 
  array (
    'id' => '7124',
    'bank_id' => '36',
    'name' => 'MURADPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190155328',
    ),
    'enabled' => true,
  ),
  124 => 
  array (
    'id' => '7125',
    'bank_id' => '36',
    'name' => 'NAZIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '190155599',
    ),
    'enabled' => true,
  ),
  125 => 
  array (
    'id' => '7126',
    'bank_id' => '36',
    'name' => 'PAHARTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190155928',
    ),
    'enabled' => true,
  ),
  126 => 
  array (
    'id' => '7127',
    'bank_id' => '36',
    'name' => 'WASA MOOR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190157768',
    ),
    'enabled' => true,
  ),
  127 => 
  array (
    'id' => '7128',
    'bank_id' => '36',
    'name' => 'CHUADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190180193',
    ),
    'enabled' => true,
  ),
  128 => 
  array (
    'id' => '7129',
    'bank_id' => '36',
    'name' => 'COMILLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190191153',
    ),
    'enabled' => true,
  ),
  129 => 
  array (
    'id' => '7130',
    'bank_id' => '36',
    'name' => 'GUNABATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190192178',
    ),
    'enabled' => true,
  ),
  130 => 
  array (
    'id' => '7131',
    'bank_id' => '36',
    'name' => 'COXS BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190220253',
    ),
    'enabled' => true,
  ),
  131 => 
  array (
    'id' => '7132',
    'bank_id' => '36',
    'name' => 'UTTARA LADIES',
    'bank_branch_data' => 
    array (
      'routing_no' => '190260068',
    ),
    'enabled' => true,
  ),
  132 => 
  array (
    'id' => '7133',
    'bank_id' => '36',
    'name' => 'ASHKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190260200',
    ),
    'enabled' => true,
  ),
  133 => 
  array (
    'id' => '7134',
    'bank_id' => '36',
    'name' => 'BAIPAIL(DHAKA EPZ)',
    'bank_branch_data' => 
    array (
      'routing_no' => '190260376',
    ),
    'enabled' => true,
  ),
  134 => 
  array (
    'id' => '7135',
    'bank_id' => '36',
    'name' => 'BANANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190260439',
    ),
    'enabled' => true,
  ),
  135 => 
  array (
    'id' => '7136',
    'bank_id' => '36',
    'name' => 'BHATARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190260718',
    ),
    'enabled' => true,
  ),
  136 => 
  array (
    'id' => '7137',
    'bank_id' => '36',
    'name' => 'COLLEGE GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '190260826',
    ),
    'enabled' => true,
  ),
  137 => 
  array (
    'id' => '7138',
    'bank_id' => '36',
    'name' => 'DHANMONDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190261188',
    ),
    'enabled' => true,
  ),
  138 => 
  array (
    'id' => '7139',
    'bank_id' => '36',
    'name' => 'ELEPHANT ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '190261333',
    ),
    'enabled' => true,
  ),
  139 => 
  array (
    'id' => '7140',
    'bank_id' => '36',
    'name' => 'ESKATON',
    'bank_branch_data' => 
    array (
      'routing_no' => '190261391',
    ),
    'enabled' => true,
  ),
  140 => 
  array (
    'id' => '7141',
    'bank_id' => '36',
    'name' => 'GULSHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '190261720',
    ),
    'enabled' => true,
  ),
  141 => 
  array (
    'id' => '7142',
    'bank_id' => '36',
    'name' => 'GULSHAN SOUTH AVENUE',
    'bank_branch_data' => 
    array (
      'routing_no' => '190261917',
    ),
    'enabled' => true,
  ),
  142 => 
  array (
    'id' => '7143',
    'bank_id' => '36',
    'name' => 'KARWAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190262532',
    ),
    'enabled' => true,
  ),
  143 => 
  array (
    'id' => '7144',
    'bank_id' => '36',
    'name' => 'MIRPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190262987',
    ),
    'enabled' => true,
  ),
  144 => 
  array (
    'id' => '7145',
    'bank_id' => '36',
    'name' => 'MOHAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190263199',
    ),
    'enabled' => true,
  ),
  145 => 
  array (
    'id' => '7146',
    'bank_id' => '36',
    'name' => 'PANTHA PATH',
    'bank_branch_data' => 
    array (
      'routing_no' => '190263610',
    ),
    'enabled' => true,
  ),
  146 => 
  array (
    'id' => '7147',
    'bank_id' => '36',
    'name' => 'SATMASJID ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '190264035',
    ),
    'enabled' => true,
  ),
  147 => 
  array (
    'id' => '7148',
    'bank_id' => '36',
    'name' => 'SAVAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190264093',
    ),
    'enabled' => true,
  ),
  148 => 
  array (
    'id' => '7149',
    'bank_id' => '36',
    'name' => 'UTTARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190264635',
    ),
    'enabled' => true,
  ),
  149 => 
  array (
    'id' => '7150',
    'bank_id' => '36',
    'name' => 'TRUNCATION POINT',
    'bank_branch_data' => 
    array (
      'routing_no' => '190270003',
    ),
    'enabled' => true,
  ),
  150 => 
  array (
    'id' => '7151',
    'bank_id' => '36',
    'name' => 'BANDURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190270645',
    ),
    'enabled' => true,
  ),
  151 => 
  array (
    'id' => '7152',
    'bank_id' => '36',
    'name' => 'BANGSHAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '190270887',
    ),
    'enabled' => true,
  ),
  152 => 
  array (
    'id' => '7153',
    'bank_id' => '36',
    'name' => 'BARUAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190270953',
    ),
    'enabled' => true,
  ),
  153 => 
  array (
    'id' => '7154',
    'bank_id' => '36',
    'name' => 'BIJOY NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190271099',
    ),
    'enabled' => true,
  ),
  154 => 
  array (
    'id' => '7155',
    'bank_id' => '36',
    'name' => 'DANIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190271428',
    ),
    'enabled' => true,
  ),
  155 => 
  array (
    'id' => '7156',
    'bank_id' => '36',
    'name' => 'DHAKA(MAIN)',
    'bank_branch_data' => 
    array (
      'routing_no' => '190271781',
    ),
    'enabled' => true,
  ),
  156 => 
  array (
    'id' => '7157',
    'bank_id' => '36',
    'name' => 'FOREIGN EXCHANGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '190272322',
    ),
    'enabled' => true,
  ),
  157 => 
  array (
    'id' => '7158',
    'bank_id' => '36',
    'name' => 'JOYPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190273284',
    ),
    'enabled' => true,
  ),
  158 => 
  array (
    'id' => '7159',
    'bank_id' => '36',
    'name' => 'JURAIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '190273318',
    ),
    'enabled' => true,
  ),
  159 => 
  array (
    'id' => '7160',
    'bank_id' => '36',
    'name' => 'KAKRAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '190273376',
    ),
    'enabled' => true,
  ),
  160 => 
  array (
    'id' => '7161',
    'bank_id' => '36',
    'name' => 'KERANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190273642',
    ),
    'enabled' => true,
  ),
  161 => 
  array (
    'id' => '7162',
    'bank_id' => '36',
    'name' => 'MALIBAGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '190273947',
    ),
    'enabled' => true,
  ),
  162 => 
  array (
    'id' => '7163',
    'bank_id' => '36',
    'name' => 'MITFORD',
    'bank_branch_data' => 
    array (
      'routing_no' => '190274067',
    ),
    'enabled' => true,
  ),
  163 => 
  array (
    'id' => '7164',
    'bank_id' => '36',
    'name' => 'MOTIJHEEL',
    'bank_branch_data' => 
    array (
      'routing_no' => '190274241',
    ),
    'enabled' => true,
  ),
  164 => 
  array (
    'id' => '7165',
    'bank_id' => '36',
    'name' => 'NABABPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '190274559',
    ),
    'enabled' => true,
  ),
  165 => 
  array (
    'id' => '7166',
    'bank_id' => '36',
    'name' => 'NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190274696',
    ),
    'enabled' => true,
  ),
  166 => 
  array (
    'id' => '7167',
    'bank_id' => '36',
    'name' => 'SARULIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190276049',
    ),
    'enabled' => true,
  ),
  167 => 
  array (
    'id' => '7168',
    'bank_id' => '36',
    'name' => 'DINAJPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190280677',
    ),
    'enabled' => true,
  ),
  168 => 
  array (
    'id' => '7169',
    'bank_id' => '36',
    'name' => 'CHAR BHADRASAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '190290438',
    ),
    'enabled' => true,
  ),
  169 => 
  array (
    'id' => '7170',
    'bank_id' => '36',
    'name' => 'FARIDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190290520',
    ),
    'enabled' => true,
  ),
  170 => 
  array (
    'id' => '7171',
    'bank_id' => '36',
    'name' => 'FENI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190300528',
    ),
    'enabled' => true,
  ),
  171 => 
  array (
    'id' => '7172',
    'bank_id' => '36',
    'name' => 'JOYDEBPUR CHOWRASTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190330769',
    ),
    'enabled' => true,
  ),
  172 => 
  array (
    'id' => '7173',
    'bank_id' => '36',
    'name' => 'MAWNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190331005',
    ),
    'enabled' => true,
  ),
  173 => 
  array (
    'id' => '7174',
    'bank_id' => '36',
    'name' => 'SHAFIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190331421',
    ),
    'enabled' => true,
  ),
  174 => 
  array (
    'id' => '7175',
    'bank_id' => '36',
    'name' => 'TONGI SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '190331650',
    ),
    'enabled' => true,
  ),
  175 => 
  array (
    'id' => '7176',
    'bank_id' => '36',
    'name' => 'JAMALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190390859',
    ),
    'enabled' => true,
  ),
  176 => 
  array (
    'id' => '7177',
    'bank_id' => '36',
    'name' => 'JESSORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '190410942',
    ),
    'enabled' => true,
  ),
  177 => 
  array (
    'id' => '7178',
    'bank_id' => '36',
    'name' => 'HATGOPALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190440554',
    ),
    'enabled' => true,
  ),
  178 => 
  array (
    'id' => '7179',
    'bank_id' => '36',
    'name' => 'KALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190440796',
    ),
    'enabled' => true,
  ),
  179 => 
  array (
    'id' => '7180',
    'bank_id' => '36',
    'name' => 'CHUK NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190470553',
    ),
    'enabled' => true,
  ),
  180 => 
  array (
    'id' => '7181',
    'bank_id' => '36',
    'name' => 'KHULNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190471549',
    ),
    'enabled' => true,
  ),
  181 => 
  array (
    'id' => '7182',
    'bank_id' => '36',
    'name' => 'KUSHTIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190500944',
    ),
    'enabled' => true,
  ),
  182 => 
  array (
    'id' => '7183',
    'bank_id' => '36',
    'name' => 'DATTA PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190510497',
    ),
    'enabled' => true,
  ),
  183 => 
  array (
    'id' => '7184',
    'bank_id' => '36',
    'name' => 'LAKSHMIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190510734',
    ),
    'enabled' => true,
  ),
  184 => 
  array (
    'id' => '7185',
    'bank_id' => '36',
    'name' => 'RAMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190511038',
    ),
    'enabled' => true,
  ),
  185 => 
  array (
    'id' => '7186',
    'bank_id' => '36',
    'name' => 'MANIKGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190560618',
    ),
    'enabled' => true,
  ),
  186 => 
  array (
    'id' => '7187',
    'bank_id' => '36',
    'name' => 'MOULAVI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190581189',
    ),
    'enabled' => true,
  ),
  187 => 
  array (
    'id' => '7188',
    'bank_id' => '36',
    'name' => 'DIGHIRPAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190590433',
    ),
    'enabled' => true,
  ),
  188 => 
  array (
    'id' => '7189',
    'bank_id' => '36',
    'name' => 'SHIKARPUR NIMTOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190591324',
    ),
    'enabled' => true,
  ),
  189 => 
  array (
    'id' => '7190',
    'bank_id' => '36',
    'name' => 'BHALUKA SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '190610326',
    ),
    'enabled' => true,
  ),
  190 => 
  array (
    'id' => '7191',
    'bank_id' => '36',
    'name' => 'HALUAGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '190611154',
    ),
    'enabled' => true,
  ),
  191 => 
  array (
    'id' => '7192',
    'bank_id' => '36',
    'name' => 'MYMENSINGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '190611754',
    ),
    'enabled' => true,
  ),
  192 => 
  array (
    'id' => '7193',
    'bank_id' => '36',
    'name' => 'NAOGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '190641182',
    ),
    'enabled' => true,
  ),
  193 => 
  array (
    'id' => '7194',
    'bank_id' => '36',
    'name' => 'NARAYANGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190671181',
    ),
    'enabled' => true,
  ),
  194 => 
  array (
    'id' => '7195',
    'bank_id' => '36',
    'name' => 'CHINISHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190680080',
    ),
    'enabled' => true,
  ),
  195 => 
  array (
    'id' => '7196',
    'bank_id' => '36',
    'name' => 'CHALAKCHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190680314',
    ),
    'enabled' => true,
  ),
  196 => 
  array (
    'id' => '7197',
    'bank_id' => '36',
    'name' => 'MADHABDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190680677',
    ),
    'enabled' => true,
  ),
  197 => 
  array (
    'id' => '7198',
    'bank_id' => '36',
    'name' => 'CHAPAI NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190700252',
    ),
    'enabled' => true,
  ),
  198 => 
  array (
    'id' => '7199',
    'bank_id' => '36',
    'name' => 'SAYEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190730798',
    ),
    'enabled' => true,
  ),
  199 => 
  array (
    'id' => '7200',
    'bank_id' => '36',
    'name' => 'CHOWMUHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190750349',
    ),
    'enabled' => true,
  ),
  200 => 
  array (
    'id' => '7201',
    'bank_id' => '36',
    'name' => 'PABNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190761783',
    ),
    'enabled' => true,
  ),
  201 => 
  array (
    'id' => '7202',
    'bank_id' => '36',
    'name' => 'KHEPUPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190780764',
    ),
    'enabled' => true,
  ),
  202 => 
  array (
    'id' => '7203',
    'bank_id' => '36',
    'name' => 'RAJSHAHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '190811938',
    ),
    'enabled' => true,
  ),
  203 => 
  array (
    'id' => '7204',
    'bank_id' => '36',
    'name' => 'RANGPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190851451',
    ),
    'enabled' => true,
  ),
  204 => 
  array (
    'id' => '7205',
    'bank_id' => '36',
    'name' => 'SERAJGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '190881876',
    ),
    'enabled' => true,
  ),
  205 => 
  array (
    'id' => '7206',
    'bank_id' => '36',
    'name' => 'BEANI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190910318',
    ),
    'enabled' => true,
  ),
  206 => 
  array (
    'id' => '7207',
    'bank_id' => '36',
    'name' => 'DARGAH GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '190911096',
    ),
    'enabled' => true,
  ),
  207 => 
  array (
    'id' => '7208',
    'bank_id' => '36',
    'name' => 'GOALA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190911546',
    ),
    'enabled' => true,
  ),
  208 => 
  array (
    'id' => '7209',
    'bank_id' => '36',
    'name' => 'SUBID BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190913494',
    ),
    'enabled' => true,
  ),
  209 => 
  array (
    'id' => '7210',
    'bank_id' => '36',
    'name' => 'SYLHET',
    'bank_branch_data' => 
    array (
      'routing_no' => '190913557',
    ),
    'enabled' => true,
  ),
  210 => 
  array (
    'id' => '7211',
    'bank_id' => '36',
    'name' => 'BARACHOWNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190930356',
    ),
    'enabled' => true,
  ),
  211 => 
  array (
    'id' => '7212',
    'bank_id' => '36',
    'name' => 'KARATIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '190931368',
    ),
    'enabled' => true,
  ),
  212 => 
  array (
    'id' => '7213',
    'bank_id' => '36',
    'name' => 'NAGARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '190931692',
    ),
    'enabled' => true,
  ),
  213 => 
  array (
    'id' => '7214',
    'bank_id' => '36',
    'name' => 'TANGAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '190932291',
    ),
    'enabled' => true,
  ),
  214 => 
  array (
    'id' => '7215',
    'bank_id' => '36',
    'name' => 'THAKURGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '190940975',
    ),
    'enabled' => true,
  ),
  215 => 
  array (
    'id' => '7216',
    'bank_id' => '37',
    'name' => 'BAGERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195010071',
    ),
    'enabled' => true,
  ),
  216 => 
  array (
    'id' => '7217',
    'bank_id' => '37',
    'name' => 'MOLLAHAT SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195010921',
    ),
    'enabled' => true,
  ),
  217 => 
  array (
    'id' => '7218',
    'bank_id' => '37',
    'name' => 'BARISAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '195060289',
    ),
    'enabled' => true,
  ),
  218 => 
  array (
    'id' => '7219',
    'bank_id' => '37',
    'name' => 'BHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195090109',
    ),
    'enabled' => true,
  ),
  219 => 
  array (
    'id' => '7220',
    'bank_id' => '37',
    'name' => 'CHAR FASHION',
    'bank_branch_data' => 
    array (
      'routing_no' => '195090220',
    ),
    'enabled' => true,
  ),
  220 => 
  array (
    'id' => '7221',
    'bank_id' => '37',
    'name' => 'BOGRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195100378',
    ),
    'enabled' => true,
  ),
  221 => 
  array (
    'id' => '7222',
    'bank_id' => '37',
    'name' => 'DUPCHACHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195100910',
    ),
    'enabled' => true,
  ),
  222 => 
  array (
    'id' => '7223',
    'bank_id' => '37',
    'name' => 'AKHAURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195120040',
    ),
    'enabled' => true,
  ),
  223 => 
  array (
    'id' => '7224',
    'bank_id' => '37',
    'name' => 'CHANDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195130319',
    ),
    'enabled' => true,
  ),
  224 => 
  array (
    'id' => '7225',
    'bank_id' => '37',
    'name' => 'HAJIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195130885',
    ),
    'enabled' => true,
  ),
  225 => 
  array (
    'id' => '7226',
    'bank_id' => '37',
    'name' => 'KACHUA SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195130919',
    ),
    'enabled' => true,
  ),
  226 => 
  array (
    'id' => '7227',
    'bank_id' => '37',
    'name' => 'NAYERGAON BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195131547',
    ),
    'enabled' => true,
  ),
  227 => 
  array (
    'id' => '7228',
    'bank_id' => '37',
    'name' => 'AGRABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195150131',
    ),
    'enabled' => true,
  ),
  228 => 
  array (
    'id' => '7229',
    'bank_id' => '37',
    'name' => 'ALANKAR MOR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195150144',
    ),
    'enabled' => true,
  ),
  229 => 
  array (
    'id' => '7230',
    'bank_id' => '37',
    'name' => 'BARIARHAT SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195150207',
    ),
    'enabled' => true,
  ),
  230 => 
  array (
    'id' => '7231',
    'bank_id' => '37',
    'name' => 'ATURAR DEPO',
    'bank_branch_data' => 
    array (
      'routing_no' => '195150702',
    ),
    'enabled' => true,
  ),
  231 => 
  array (
    'id' => '7232',
    'bank_id' => '37',
    'name' => 'AZADI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195150731',
    ),
    'enabled' => true,
  ),
  232 => 
  array (
    'id' => '7233',
    'bank_id' => '37',
    'name' => 'BIBIRHAT SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195151251',
    ),
    'enabled' => true,
  ),
  233 => 
  array (
    'id' => '7234',
    'bank_id' => '37',
    'name' => 'BOALKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195151301',
    ),
    'enabled' => true,
  ),
  234 => 
  array (
    'id' => '7235',
    'bank_id' => '37',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195151930',
    ),
    'enabled' => true,
  ),
  235 => 
  array (
    'id' => '7236',
    'bank_id' => '37',
    'name' => 'DEWAN HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195152447',
    ),
    'enabled' => true,
  ),
  236 => 
  array (
    'id' => '7237',
    'bank_id' => '37',
    'name' => 'GEC MOUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195152968',
    ),
    'enabled' => true,
  ),
  237 => 
  array (
    'id' => '7238',
    'bank_id' => '37',
    'name' => 'HALISHAHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195153167',
    ),
    'enabled' => true,
  ),
  238 => 
  array (
    'id' => '7239',
    'bank_id' => '37',
    'name' => 'HATHAZARI SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195153233',
    ),
    'enabled' => true,
  ),
  239 => 
  array (
    'id' => '7240',
    'bank_id' => '37',
    'name' => 'JUBILEE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195153646',
    ),
    'enabled' => true,
  ),
  240 => 
  array (
    'id' => '7241',
    'bank_id' => '37',
    'name' => 'KHATUNGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195154274',
    ),
    'enabled' => true,
  ),
  241 => 
  array (
    'id' => '7242',
    'bank_id' => '37',
    'name' => 'LOHA GARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195154661',
    ),
    'enabled' => true,
  ),
  242 => 
  array (
    'id' => '7243',
    'bank_id' => '37',
    'name' => 'NANUPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195155444',
    ),
    'enabled' => true,
  ),
  243 => 
  array (
    'id' => '7244',
    'bank_id' => '37',
    'name' => 'PATHERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195156135',
    ),
    'enabled' => true,
  ),
  244 => 
  array (
    'id' => '7245',
    'bank_id' => '37',
    'name' => 'ROAZARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195156551',
    ),
    'enabled' => true,
  ),
  245 => 
  array (
    'id' => '7246',
    'bank_id' => '37',
    'name' => 'SHAH MOHSIN AWLIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195157163',
    ),
    'enabled' => true,
  ),
  246 => 
  array (
    'id' => '7247',
    'bank_id' => '37',
    'name' => 'COLLEGE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195190146',
    ),
    'enabled' => true,
  ),
  247 => 
  array (
    'id' => '7248',
    'bank_id' => '37',
    'name' => 'LAKSAM ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195190359',
    ),
    'enabled' => true,
  ),
  248 => 
  array (
    'id' => '7249',
    'bank_id' => '37',
    'name' => 'BURICHANG',
    'bank_branch_data' => 
    array (
      'routing_no' => '195190825',
    ),
    'enabled' => true,
  ),
  249 => 
  array (
    'id' => '7250',
    'bank_id' => '37',
    'name' => 'COMILLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195191158',
    ),
    'enabled' => true,
  ),
  250 => 
  array (
    'id' => '7251',
    'bank_id' => '37',
    'name' => 'ELIOTGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195191903',
    ),
    'enabled' => true,
  ),
  251 => 
  array (
    'id' => '7252',
    'bank_id' => '37',
    'name' => 'HOMNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195192236',
    ),
    'enabled' => true,
  ),
  252 => 
  array (
    'id' => '7253',
    'bank_id' => '37',
    'name' => 'COXS BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195220258',
    ),
    'enabled' => true,
  ),
  253 => 
  array (
    'id' => '7254',
    'bank_id' => '37',
    'name' => 'SATARKUL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260142',
    ),
    'enabled' => true,
  ),
  254 => 
  array (
    'id' => '7255',
    'bank_id' => '37',
    'name' => 'ASHULIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260221',
    ),
    'enabled' => true,
  ),
  255 => 
  array (
    'id' => '7256',
    'bank_id' => '37',
    'name' => 'BANANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260434',
    ),
    'enabled' => true,
  ),
  256 => 
  array (
    'id' => '7257',
    'bank_id' => '37',
    'name' => 'GAUSIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260513',
    ),
    'enabled' => true,
  ),
  257 => 
  array (
    'id' => '7258',
    'bank_id' => '37',
    'name' => 'BASHUNDHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260555',
    ),
    'enabled' => true,
  ),
  258 => 
  array (
    'id' => '7259',
    'bank_id' => '37',
    'name' => 'BHATARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260713',
    ),
    'enabled' => true,
  ),
  259 => 
  array (
    'id' => '7260',
    'bank_id' => '37',
    'name' => 'BONOSREE',
    'bank_branch_data' => 
    array (
      'routing_no' => '195260726',
    ),
    'enabled' => true,
  ),
  260 => 
  array (
    'id' => '7261',
    'bank_id' => '37',
    'name' => 'DHAMRAI SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195261167',
    ),
    'enabled' => true,
  ),
  261 => 
  array (
    'id' => '7262',
    'bank_id' => '37',
    'name' => 'DHANMONDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195261183',
    ),
    'enabled' => true,
  ),
  262 => 
  array (
    'id' => '7263',
    'bank_id' => '37',
    'name' => 'GULSHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '195261725',
    ),
    'enabled' => true,
  ),
  263 => 
  array (
    'id' => '7264',
    'bank_id' => '37',
    'name' => 'HORIRAMPUR UNION',
    'bank_branch_data' => 
    array (
      'routing_no' => '195262061',
    ),
    'enabled' => true,
  ),
  264 => 
  array (
    'id' => '7265',
    'bank_id' => '37',
    'name' => 'BEGUM ROKEYA SAWRANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195262140',
    ),
    'enabled' => true,
  ),
  265 => 
  array (
    'id' => '7266',
    'bank_id' => '37',
    'name' => 'KADERIA TAIYEBIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195262379',
    ),
    'enabled' => true,
  ),
  266 => 
  array (
    'id' => '7267',
    'bank_id' => '37',
    'name' => 'KARWAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195262537',
    ),
    'enabled' => true,
  ),
  267 => 
  array (
    'id' => '7268',
    'bank_id' => '37',
    'name' => 'MIRPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195262982',
    ),
    'enabled' => true,
  ),
  268 => 
  array (
    'id' => '7269',
    'bank_id' => '37',
    'name' => 'MOHAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195263194',
    ),
    'enabled' => true,
  ),
  269 => 
  array (
    'id' => '7270',
    'bank_id' => '37',
    'name' => 'PANTHA PATH',
    'bank_branch_data' => 
    array (
      'routing_no' => '195263615',
    ),
    'enabled' => true,
  ),
  270 => 
  array (
    'id' => '7271',
    'bank_id' => '37',
    'name' => 'SAVAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195264098',
    ),
    'enabled' => true,
  ),
  271 => 
  array (
    'id' => '7272',
    'bank_id' => '37',
    'name' => 'SHYAMALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195264306',
    ),
    'enabled' => true,
  ),
  272 => 
  array (
    'id' => '7273',
    'bank_id' => '37',
    'name' => 'UTTARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195264630',
    ),
    'enabled' => true,
  ),
  273 => 
  array (
    'id' => '7274',
    'bank_id' => '37',
    'name' => 'TRUNCATION POINT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195270008',
    ),
    'enabled' => true,
  ),
  274 => 
  array (
    'id' => '7275',
    'bank_id' => '37',
    'name' => 'BABU BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195270558',
    ),
    'enabled' => true,
  ),
  275 => 
  array (
    'id' => '7276',
    'bank_id' => '37',
    'name' => 'BANGSHAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '195270882',
    ),
    'enabled' => true,
  ),
  276 => 
  array (
    'id' => '7277',
    'bank_id' => '37',
    'name' => 'CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '195271399',
    ),
    'enabled' => true,
  ),
  277 => 
  array (
    'id' => '7278',
    'bank_id' => '37',
    'name' => 'DEMRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195271465',
    ),
    'enabled' => true,
  ),
  278 => 
  array (
    'id' => '7279',
    'bank_id' => '37',
    'name' => 'GALIMPUR SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195272019',
    ),
    'enabled' => true,
  ),
  279 => 
  array (
    'id' => '7280',
    'bank_id' => '37',
    'name' => 'FOREIGN EXCHANGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '195272327',
    ),
    'enabled' => true,
  ),
  280 => 
  array (
    'id' => '7281',
    'bank_id' => '37',
    'name' => 'HASNABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195272569',
    ),
    'enabled' => true,
  ),
  281 => 
  array (
    'id' => '7282',
    'bank_id' => '37',
    'name' => 'ISLAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195272985',
    ),
    'enabled' => true,
  ),
  282 => 
  array (
    'id' => '7283',
    'bank_id' => '37',
    'name' => 'KAKRAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '195273371',
    ),
    'enabled' => true,
  ),
  283 => 
  array (
    'id' => '7284',
    'bank_id' => '37',
    'name' => 'KERANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195273647',
    ),
    'enabled' => true,
  ),
  284 => 
  array (
    'id' => '7285',
    'bank_id' => '37',
    'name' => 'MOUCHAK',
    'bank_branch_data' => 
    array (
      'routing_no' => '195274367',
    ),
    'enabled' => true,
  ),
  285 => 
  array (
    'id' => '7286',
    'bank_id' => '37',
    'name' => 'MOULVI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195274420',
    ),
    'enabled' => true,
  ),
  286 => 
  array (
    'id' => '7287',
    'bank_id' => '37',
    'name' => 'MUKSUDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195274488',
    ),
    'enabled' => true,
  ),
  287 => 
  array (
    'id' => '7288',
    'bank_id' => '37',
    'name' => 'NAWABPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '195274754',
    ),
    'enabled' => true,
  ),
  288 => 
  array (
    'id' => '7289',
    'bank_id' => '37',
    'name' => 'NEW ESKATON',
    'bank_branch_data' => 
    array (
      'routing_no' => '195275029',
    ),
    'enabled' => true,
  ),
  289 => 
  array (
    'id' => '7290',
    'bank_id' => '37',
    'name' => 'PRINCIPAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '195275353',
    ),
    'enabled' => true,
  ),
  290 => 
  array (
    'id' => '7291',
    'bank_id' => '37',
    'name' => 'RAMPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195275740',
    ),
    'enabled' => true,
  ),
  291 => 
  array (
    'id' => '7292',
    'bank_id' => '37',
    'name' => 'RASULPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195275766',
    ),
    'enabled' => true,
  ),
  292 => 
  array (
    'id' => '7293',
    'bank_id' => '37',
    'name' => 'DINAJPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195280672',
    ),
    'enabled' => true,
  ),
  293 => 
  array (
    'id' => '7294',
    'bank_id' => '37',
    'name' => 'RANIRBANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195282083',
    ),
    'enabled' => true,
  ),
  294 => 
  array (
    'id' => '7295',
    'bank_id' => '37',
    'name' => 'FENI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195300523',
    ),
    'enabled' => true,
  ),
  295 => 
  array (
    'id' => '7296',
    'bank_id' => '37',
    'name' => 'GOBINDAGANJ SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195320590',
    ),
    'enabled' => true,
  ),
  296 => 
  array (
    'id' => '7297',
    'bank_id' => '37',
    'name' => 'JOYDEBPUR CHOWRASTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195330764',
    ),
    'enabled' => true,
  ),
  297 => 
  array (
    'id' => '7298',
    'bank_id' => '37',
    'name' => 'MAWNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195331000',
    ),
    'enabled' => true,
  ),
  298 => 
  array (
    'id' => '7299',
    'bank_id' => '37',
    'name' => 'TONGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195331639',
    ),
    'enabled' => true,
  ),
  299 => 
  array (
    'id' => '7300',
    'bank_id' => '37',
    'name' => 'BANGABANDHU SAMADHI SHOUDHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195350128',
    ),
    'enabled' => true,
  ),
  300 => 
  array (
    'id' => '7301',
    'bank_id' => '37',
    'name' => 'INDUSTRIAL PARK',
    'bank_branch_data' => 
    array (
      'routing_no' => '195360068',
    ),
    'enabled' => true,
  ),
  301 => 
  array (
    'id' => '7302',
    'bank_id' => '37',
    'name' => 'JAMALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195390854',
    ),
    'enabled' => true,
  ),
  302 => 
  array (
    'id' => '7303',
    'bank_id' => '37',
    'name' => 'KOYRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195391066',
    ),
    'enabled' => true,
  ),
  303 => 
  array (
    'id' => '7304',
    'bank_id' => '37',
    'name' => 'CHOWGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195410550',
    ),
    'enabled' => true,
  ),
  304 => 
  array (
    'id' => '7305',
    'bank_id' => '37',
    'name' => 'JESSORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '195410947',
    ),
    'enabled' => true,
  ),
  305 => 
  array (
    'id' => '7306',
    'bank_id' => '37',
    'name' => 'MONIRAMPUR SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195411520',
    ),
    'enabled' => true,
  ),
  306 => 
  array (
    'id' => '7307',
    'bank_id' => '37',
    'name' => 'NAVARAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '195411609',
    ),
    'enabled' => true,
  ),
  307 => 
  array (
    'id' => '7308',
    'bank_id' => '37',
    'name' => 'NOAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195411638',
    ),
    'enabled' => true,
  ),
  308 => 
  array (
    'id' => '7309',
    'bank_id' => '37',
    'name' => 'DUMURIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195470790',
    ),
    'enabled' => true,
  ),
  309 => 
  array (
    'id' => '7310',
    'bank_id' => '37',
    'name' => 'KHULNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195471544',
    ),
    'enabled' => true,
  ),
  310 => 
  array (
    'id' => '7311',
    'bank_id' => '37',
    'name' => 'PAIKGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195472080',
    ),
    'enabled' => true,
  ),
  311 => 
  array (
    'id' => '7312',
    'bank_id' => '37',
    'name' => 'BHAIRAB BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195480227',
    ),
    'enabled' => true,
  ),
  312 => 
  array (
    'id' => '7313',
    'bank_id' => '37',
    'name' => 'KISHOREGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195480672',
    ),
    'enabled' => true,
  ),
  313 => 
  array (
    'id' => '7314',
    'bank_id' => '37',
    'name' => 'KUSHTIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195500949',
    ),
    'enabled' => true,
  ),
  314 => 
  array (
    'id' => '7315',
    'bank_id' => '37',
    'name' => 'LAKSHMIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195510739',
    ),
    'enabled' => true,
  ),
  315 => 
  array (
    'id' => '7316',
    'bank_id' => '37',
    'name' => 'PODDAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195510942',
    ),
    'enabled' => true,
  ),
  316 => 
  array (
    'id' => '7317',
    'bank_id' => '37',
    'name' => 'BARALEKHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195580101',
    ),
    'enabled' => true,
  ),
  317 => 
  array (
    'id' => '7318',
    'bank_id' => '37',
    'name' => 'MOULAVI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195581184',
    ),
    'enabled' => true,
  ),
  318 => 
  array (
    'id' => '7319',
    'bank_id' => '37',
    'name' => 'SREENAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195591424',
    ),
    'enabled' => true,
  ),
  319 => 
  array (
    'id' => '7320',
    'bank_id' => '37',
    'name' => 'MYMENSINGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '195611759',
    ),
    'enabled' => true,
  ),
  320 => 
  array (
    'id' => '7321',
    'bank_id' => '37',
    'name' => 'NAOGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '195641187',
    ),
    'enabled' => true,
  ),
  321 => 
  array (
    'id' => '7322',
    'bank_id' => '37',
    'name' => 'BHULTA SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195670237',
    ),
    'enabled' => true,
  ),
  322 => 
  array (
    'id' => '7323',
    'bank_id' => '37',
    'name' => 'FATULLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195670529',
    ),
    'enabled' => true,
  ),
  323 => 
  array (
    'id' => '7324',
    'bank_id' => '37',
    'name' => 'GOPALDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195670608',
    ),
    'enabled' => true,
  ),
  324 => 
  array (
    'id' => '7325',
    'bank_id' => '37',
    'name' => 'NARAYANGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195671186',
    ),
    'enabled' => true,
  ),
  325 => 
  array (
    'id' => '7326',
    'bank_id' => '37',
    'name' => 'SONARGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '195671694',
    ),
    'enabled' => true,
  ),
  326 => 
  array (
    'id' => '7327',
    'bank_id' => '37',
    'name' => 'PANCHDOWNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195680148',
    ),
    'enabled' => true,
  ),
  327 => 
  array (
    'id' => '7328',
    'bank_id' => '37',
    'name' => 'MADHABDI SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195680685',
    ),
    'enabled' => true,
  ),
  328 => 
  array (
    'id' => '7329',
    'bank_id' => '37',
    'name' => 'NARSHINGDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195680856',
    ),
    'enabled' => true,
  ),
  329 => 
  array (
    'id' => '7330',
    'bank_id' => '37',
    'name' => 'NETROKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195720732',
    ),
    'enabled' => true,
  ),
  330 => 
  array (
    'id' => '7331',
    'bank_id' => '37',
    'name' => 'SAYEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195730793',
    ),
    'enabled' => true,
  ),
  331 => 
  array (
    'id' => '7332',
    'bank_id' => '37',
    'name' => 'MAIJDEE',
    'bank_branch_data' => 
    array (
      'routing_no' => '195750065',
    ),
    'enabled' => true,
  ),
  332 => 
  array (
    'id' => '7333',
    'bank_id' => '37',
    'name' => 'CHOUMOHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195750678',
    ),
    'enabled' => true,
  ),
  333 => 
  array (
    'id' => '7334',
    'bank_id' => '37',
    'name' => 'JAMIDERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195751156',
    ),
    'enabled' => true,
  ),
  334 => 
  array (
    'id' => '7335',
    'bank_id' => '37',
    'name' => 'KANKIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '195751301',
    ),
    'enabled' => true,
  ),
  335 => 
  array (
    'id' => '7336',
    'bank_id' => '37',
    'name' => 'SONAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195752263',
    ),
    'enabled' => true,
  ),
  336 => 
  array (
    'id' => '7337',
    'bank_id' => '37',
    'name' => 'PABNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195761788',
    ),
    'enabled' => true,
  ),
  337 => 
  array (
    'id' => '7338',
    'bank_id' => '37',
    'name' => 'SAFABANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195790054',
    ),
    'enabled' => true,
  ),
  338 => 
  array (
    'id' => '7339',
    'bank_id' => '37',
    'name' => 'RAJSHAHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '195811933',
    ),
    'enabled' => true,
  ),
  339 => 
  array (
    'id' => '7340',
    'bank_id' => '37',
    'name' => 'RANGPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195851456',
    ),
    'enabled' => true,
  ),
  340 => 
  array (
    'id' => '7341',
    'bank_id' => '37',
    'name' => 'ANGARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195860063',
    ),
    'enabled' => true,
  ),
  341 => 
  array (
    'id' => '7342',
    'bank_id' => '37',
    'name' => 'PATKELGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195871036',
    ),
    'enabled' => true,
  ),
  342 => 
  array (
    'id' => '7343',
    'bank_id' => '37',
    'name' => 'SATKHIRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195871094',
    ),
    'enabled' => true,
  ),
  343 => 
  array (
    'id' => '7344',
    'bank_id' => '37',
    'name' => 'CHANDAIKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195880430',
    ),
    'enabled' => true,
  ),
  344 => 
  array (
    'id' => '7345',
    'bank_id' => '37',
    'name' => 'SERAJGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195881871',
    ),
    'enabled' => true,
  ),
  345 => 
  array (
    'id' => '7346',
    'bank_id' => '37',
    'name' => 'SHAJADPUR SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '195882504',
    ),
    'enabled' => true,
  ),
  346 => 
  array (
    'id' => '7347',
    'bank_id' => '37',
    'name' => 'BEANI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '195910313',
    ),
    'enabled' => true,
  ),
  347 => 
  array (
    'id' => '7348',
    'bank_id' => '37',
    'name' => 'FENCHUGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '195911367',
    ),
    'enabled' => true,
  ),
  348 => 
  array (
    'id' => '7349',
    'bank_id' => '37',
    'name' => 'SOUTH SURMA',
    'bank_branch_data' => 
    array (
      'routing_no' => '195913444',
    ),
    'enabled' => true,
  ),
  349 => 
  array (
    'id' => '7350',
    'bank_id' => '37',
    'name' => 'SYLHET',
    'bank_branch_data' => 
    array (
      'routing_no' => '195913552',
    ),
    'enabled' => true,
  ),
  350 => 
  array (
    'id' => '7351',
    'bank_id' => '37',
    'name' => 'TANGAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '195932296',
    ),
    'enabled' => true,
  ),
  351 => 
  array (
    'id' => '7352',
    'bank_id' => '38',
    'name' => 'BAGERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010074',
    ),
    'enabled' => true,
  ),
  352 => 
  array (
    'id' => '7353',
    'bank_id' => '38',
    'name' => 'CHITALMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010229',
    ),
    'enabled' => true,
  ),
  353 => 
  array (
    'id' => '7354',
    'bank_id' => '38',
    'name' => 'COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010290',
    ),
    'enabled' => true,
  ),
  354 => 
  array (
    'id' => '7355',
    'bank_id' => '38',
    'name' => 'FAKIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010461',
    ),
    'enabled' => true,
  ),
  355 => 
  array (
    'id' => '7356',
    'bank_id' => '38',
    'name' => 'GILATALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010582',
    ),
    'enabled' => true,
  ),
  356 => 
  array (
    'id' => '7357',
    'bank_id' => '38',
    'name' => 'GOURAMBA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010645',
    ),
    'enabled' => true,
  ),
  357 => 
  array (
    'id' => '7358',
    'bank_id' => '38',
    'name' => 'KACHUA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010737',
    ),
    'enabled' => true,
  ),
  358 => 
  array (
    'id' => '7359',
    'bank_id' => '38',
    'name' => 'BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010858',
    ),
    'enabled' => true,
  ),
  359 => 
  array (
    'id' => '7360',
    'bank_id' => '38',
    'name' => 'MOLLAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010911',
    ),
    'enabled' => true,
  ),
  360 => 
  array (
    'id' => '7361',
    'bank_id' => '38',
    'name' => 'MONGLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010940',
    ),
    'enabled' => true,
  ),
  361 => 
  array (
    'id' => '7362',
    'bank_id' => '38',
    'name' => 'MONGLA PORT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200010979',
    ),
    'enabled' => true,
  ),
  362 => 
  array (
    'id' => '7363',
    'bank_id' => '38',
    'name' => 'MORELGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200011031',
    ),
    'enabled' => true,
  ),
  363 => 
  array (
    'id' => '7364',
    'bank_id' => '38',
    'name' => 'RAMPAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200011215',
    ),
    'enabled' => true,
  ),
  364 => 
  array (
    'id' => '7365',
    'bank_id' => '38',
    'name' => 'RAYENDA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200011244',
    ),
    'enabled' => true,
  ),
  365 => 
  array (
    'id' => '7366',
    'bank_id' => '38',
    'name' => 'ALIKADAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030041',
    ),
    'enabled' => true,
  ),
  366 => 
  array (
    'id' => '7367',
    'bank_id' => '38',
    'name' => 'BANDARBAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030133',
    ),
    'enabled' => true,
  ),
  367 => 
  array (
    'id' => '7368',
    'bank_id' => '38',
    'name' => 'LAMA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030191',
    ),
    'enabled' => true,
  ),
  368 => 
  array (
    'id' => '7369',
    'bank_id' => '38',
    'name' => 'NAIKHANGCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030225',
    ),
    'enabled' => true,
  ),
  369 => 
  array (
    'id' => '7370',
    'bank_id' => '38',
    'name' => 'ROWANGCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030254',
    ),
    'enabled' => true,
  ),
  370 => 
  array (
    'id' => '7371',
    'bank_id' => '38',
    'name' => 'RUMA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030283',
    ),
    'enabled' => true,
  ),
  371 => 
  array (
    'id' => '7372',
    'bank_id' => '38',
    'name' => 'THANCHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200030317',
    ),
    'enabled' => true,
  ),
  372 => 
  array (
    'id' => '7373',
    'bank_id' => '38',
    'name' => 'AMTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200040044',
    ),
    'enabled' => true,
  ),
  373 => 
  array (
    'id' => '7374',
    'bank_id' => '38',
    'name' => 'BAMNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200040107',
    ),
    'enabled' => true,
  ),
  374 => 
  array (
    'id' => '7375',
    'bank_id' => '38',
    'name' => 'BARGUNA COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200040165',
    ),
    'enabled' => true,
  ),
  375 => 
  array (
    'id' => '7376',
    'bank_id' => '38',
    'name' => 'BETAGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200040228',
    ),
    'enabled' => true,
  ),
  376 => 
  array (
    'id' => '7377',
    'bank_id' => '38',
    'name' => 'PATHARGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200040673',
    ),
    'enabled' => true,
  ),
  377 => 
  array (
    'id' => '7378',
    'bank_id' => '38',
    'name' => 'AGOILJHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060079',
    ),
    'enabled' => true,
  ),
  378 => 
  array (
    'id' => '7379',
    'bank_id' => '38',
    'name' => 'ARATDAR PATTRY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060132',
    ),
    'enabled' => true,
  ),
  379 => 
  array (
    'id' => '7380',
    'bank_id' => '38',
    'name' => 'BAKERGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060224',
    ),
    'enabled' => true,
  ),
  380 => 
  array (
    'id' => '7381',
    'bank_id' => '38',
    'name' => 'BANARI PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060253',
    ),
    'enabled' => true,
  ),
  381 => 
  array (
    'id' => '7382',
    'bank_id' => '38',
    'name' => 'BARISAL CADET COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060316',
    ),
    'enabled' => true,
  ),
  382 => 
  array (
    'id' => '7383',
    'bank_id' => '38',
    'name' => 'BARISAL CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060345',
    ),
    'enabled' => true,
  ),
  383 => 
  array (
    'id' => '7384',
    'bank_id' => '38',
    'name' => 'BARISHAL UNIVERSITY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060358',
    ),
    'enabled' => true,
  ),
  384 => 
  array (
    'id' => '7385',
    'bank_id' => '38',
    'name' => 'C&BR0AD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060587',
    ),
    'enabled' => true,
  ),
  385 => 
  array (
    'id' => '7386',
    'bank_id' => '38',
    'name' => 'CHAKHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060640',
    ),
    'enabled' => true,
  ),
  386 => 
  array (
    'id' => '7387',
    'bank_id' => '38',
    'name' => 'CHARAMADDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060679',
    ),
    'enabled' => true,
  ),
  387 => 
  array (
    'id' => '7388',
    'bank_id' => '38',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060703',
    ),
    'enabled' => true,
  ),
  388 => 
  array (
    'id' => '7389',
    'bank_id' => '38',
    'name' => 'COLLEGE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060732',
    ),
    'enabled' => true,
  ),
  389 => 
  array (
    'id' => '7390',
    'bank_id' => '38',
    'name' => 'DHAMURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060761',
    ),
    'enabled' => true,
  ),
  390 => 
  array (
    'id' => '7391',
    'bank_id' => '38',
    'name' => 'GAILA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060790',
    ),
    'enabled' => true,
  ),
  391 => 
  array (
    'id' => '7392',
    'bank_id' => '38',
    'name' => 'GOURNADI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060824',
    ),
    'enabled' => true,
  ),
  392 => 
  array (
    'id' => '7393',
    'bank_id' => '38',
    'name' => 'GUTHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060853',
    ),
    'enabled' => true,
  ),
  393 => 
  array (
    'id' => '7394',
    'bank_id' => '38',
    'name' => 'HALTA BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060945',
    ),
    'enabled' => true,
  ),
  394 => 
  array (
    'id' => '7395',
    'bank_id' => '38',
    'name' => 'HIZLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200060974',
    ),
    'enabled' => true,
  ),
  395 => 
  array (
    'id' => '7396',
    'bank_id' => '38',
    'name' => 'KAMARKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061094',
    ),
    'enabled' => true,
  ),
  396 => 
  array (
    'id' => '7397',
    'bank_id' => '38',
    'name' => 'KHANPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061157',
    ),
    'enabled' => true,
  ),
  397 => 
  array (
    'id' => '7398',
    'bank_id' => '38',
    'name' => 'MEDHAKAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061302',
    ),
    'enabled' => true,
  ),
  398 => 
  array (
    'id' => '7399',
    'bank_id' => '38',
    'name' => 'MEHENDIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061360',
    ),
    'enabled' => true,
  ),
  399 => 
  array (
    'id' => '7400',
    'bank_id' => '38',
    'name' => 'MULADI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061452',
    ),
    'enabled' => true,
  ),
  400 => 
  array (
    'id' => '7401',
    'bank_id' => '38',
    'name' => 'NALCHIRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061481',
    ),
    'enabled' => true,
  ),
  401 => 
  array (
    'id' => '7402',
    'bank_id' => '38',
    'name' => 'NEAMATI BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061515',
    ),
    'enabled' => true,
  ),
  402 => 
  array (
    'id' => '7403',
    'bank_id' => '38',
    'name' => 'PAISHARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061607',
    ),
    'enabled' => true,
  ),
  403 => 
  array (
    'id' => '7404',
    'bank_id' => '38',
    'name' => 'SAGARDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061849',
    ),
    'enabled' => true,
  ),
  404 => 
  array (
    'id' => '7405',
    'bank_id' => '38',
    'name' => 'SHAHEBER HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200061960',
    ),
    'enabled' => true,
  ),
  405 => 
  array (
    'id' => '7406',
    'bank_id' => '38',
    'name' => 'TORKEY BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200062172',
    ),
    'enabled' => true,
  ),
  406 => 
  array (
    'id' => '7407',
    'bank_id' => '38',
    'name' => 'WAZIRPUR BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200062327',
    ),
    'enabled' => true,
  ),
  407 => 
  array (
    'id' => '7408',
    'bank_id' => '38',
    'name' => 'BHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090102',
    ),
    'enabled' => true,
  ),
  408 => 
  array (
    'id' => '7409',
    'bank_id' => '38',
    'name' => 'BORHANUDDIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090199',
    ),
    'enabled' => true,
  ),
  409 => 
  array (
    'id' => '7410',
    'bank_id' => '38',
    'name' => 'CHAR FASHION',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090223',
    ),
    'enabled' => true,
  ),
  410 => 
  array (
    'id' => '7411',
    'bank_id' => '38',
    'name' => 'DAULATKHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090373',
    ),
    'enabled' => true,
  ),
  411 => 
  array (
    'id' => '7412',
    'bank_id' => '38',
    'name' => 'GAZARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090436',
    ),
    'enabled' => true,
  ),
  412 => 
  array (
    'id' => '7413',
    'bank_id' => '38',
    'name' => 'LALMOHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090702',
    ),
    'enabled' => true,
  ),
  413 => 
  array (
    'id' => '7414',
    'bank_id' => '38',
    'name' => 'MANPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090823',
    ),
    'enabled' => true,
  ),
  414 => 
  array (
    'id' => '7415',
    'bank_id' => '38',
    'name' => 'MOHAJAN PATTY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090881',
    ),
    'enabled' => true,
  ),
  415 => 
  array (
    'id' => '7416',
    'bank_id' => '38',
    'name' => 'NORTH DIGHALDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200090944',
    ),
    'enabled' => true,
  ),
  416 => 
  array (
    'id' => '7417',
    'bank_id' => '38',
    'name' => 'TAZUMUDDIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200091006',
    ),
    'enabled' => true,
  ),
  417 => 
  array (
    'id' => '7418',
    'bank_id' => '38',
    'name' => 'ADAMDIGHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100047',
    ),
    'enabled' => true,
  ),
  418 => 
  array (
    'id' => '7419',
    'bank_id' => '38',
    'name' => 'AZIZUL HAQUE COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100139',
    ),
    'enabled' => true,
  ),
  419 => 
  array (
    'id' => '7420',
    'bank_id' => '38',
    'name' => 'BALUA HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100221',
    ),
    'enabled' => true,
  ),
  420 => 
  array (
    'id' => '7421',
    'bank_id' => '38',
    'name' => 'BOGRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100405',
    ),
    'enabled' => true,
  ),
  421 => 
  array (
    'id' => '7422',
    'bank_id' => '38',
    'name' => 'BOGRA CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100434',
    ),
    'enabled' => true,
  ),
  422 => 
  array (
    'id' => '7423',
    'bank_id' => '38',
    'name' => 'BOGRA CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100463',
    ),
    'enabled' => true,
  ),
  423 => 
  array (
    'id' => '7424',
    'bank_id' => '38',
    'name' => 'COLLEGE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100797',
    ),
    'enabled' => true,
  ),
  424 => 
  array (
    'id' => '7425',
    'bank_id' => '38',
    'name' => 'DHUNAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100889',
    ),
    'enabled' => true,
  ),
  425 => 
  array (
    'id' => '7426',
    'bank_id' => '38',
    'name' => 'DUPCHACHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100913',
    ),
    'enabled' => true,
  ),
  426 => 
  array (
    'id' => '7427',
    'bank_id' => '38',
    'name' => 'DURGAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200100971',
    ),
    'enabled' => true,
  ),
  427 => 
  array (
    'id' => '7428',
    'bank_id' => '38',
    'name' => 'GABTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101033',
    ),
    'enabled' => true,
  ),
  428 => 
  array (
    'id' => '7429',
    'bank_id' => '38',
    'name' => 'GOHAIL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101154',
    ),
    'enabled' => true,
  ),
  429 => 
  array (
    'id' => '7430',
    'bank_id' => '38',
    'name' => 'JAMADARPUKUR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101183',
    ),
    'enabled' => true,
  ),
  430 => 
  array (
    'id' => '7431',
    'bank_id' => '38',
    'name' => 'GUZIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101309',
    ),
    'enabled' => true,
  ),
  431 => 
  array (
    'id' => '7432',
    'bank_id' => '38',
    'name' => 'SYED AHMED COLLEGE STATION',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101338',
    ),
    'enabled' => true,
  ),
  432 => 
  array (
    'id' => '7433',
    'bank_id' => '38',
    'name' => 'JAMURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101488',
    ),
    'enabled' => true,
  ),
  433 => 
  array (
    'id' => '7434',
    'bank_id' => '38',
    'name' => 'KAHALOO',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101541',
    ),
    'enabled' => true,
  ),
  434 => 
  array (
    'id' => '7435',
    'bank_id' => '38',
    'name' => 'MOKAMTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101938',
    ),
    'enabled' => true,
  ),
  435 => 
  array (
    'id' => '7436',
    'bank_id' => '38',
    'name' => 'NAMUJAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200101996',
    ),
    'enabled' => true,
  ),
  436 => 
  array (
    'id' => '7437',
    'bank_id' => '38',
    'name' => 'NANDIGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102029',
    ),
    'enabled' => true,
  ),
  437 => 
  array (
    'id' => '7438',
    'bank_id' => '38',
    'name' => 'NASHRATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102087',
    ),
    'enabled' => true,
  ),
  438 => 
  array (
    'id' => '7439',
    'bank_id' => '38',
    'name' => 'PALLY UNNAYAN ACADEMY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102179',
    ),
    'enabled' => true,
  ),
  439 => 
  array (
    'id' => '7440',
    'bank_id' => '38',
    'name' => 'RANBAGHA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102324',
    ),
    'enabled' => true,
  ),
  440 => 
  array (
    'id' => '7441',
    'bank_id' => '38',
    'name' => 'SANTAHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102416',
    ),
    'enabled' => true,
  ),
  441 => 
  array (
    'id' => '7442',
    'bank_id' => '38',
    'name' => 'SARIAKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102474',
    ),
    'enabled' => true,
  ),
  442 => 
  array (
    'id' => '7443',
    'bank_id' => '38',
    'name' => 'SHAHARPUKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102658',
    ),
    'enabled' => true,
  ),
  443 => 
  array (
    'id' => '7444',
    'bank_id' => '38',
    'name' => 'SHAHID ZIAUR RAHMAN MEDICAL COLLEGE HOSPITAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102687',
    ),
    'enabled' => true,
  ),
  444 => 
  array (
    'id' => '7445',
    'bank_id' => '38',
    'name' => 'SHERPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102740',
    ),
    'enabled' => true,
  ),
  445 => 
  array (
    'id' => '7446',
    'bank_id' => '38',
    'name' => 'SHERPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102779',
    ),
    'enabled' => true,
  ),
  446 => 
  array (
    'id' => '7447',
    'bank_id' => '38',
    'name' => 'SHIBGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102803',
    ),
    'enabled' => true,
  ),
  447 => 
  array (
    'id' => '7448',
    'bank_id' => '38',
    'name' => 'SONATOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200102982',
    ),
    'enabled' => true,
  ),
  448 => 
  array (
    'id' => '7449',
    'bank_id' => '38',
    'name' => 'TALORA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200103073',
    ),
    'enabled' => true,
  ),
  449 => 
  array (
    'id' => '7450',
    'bank_id' => '38',
    'name' => 'AKHAURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120043',
    ),
    'enabled' => true,
  ),
  450 => 
  array (
    'id' => '7451',
    'bank_id' => '38',
    'name' => 'BIJOYNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120098',
    ),
    'enabled' => true,
  ),
  451 => 
  array (
    'id' => '7452',
    'bank_id' => '38',
    'name' => 'ASHUGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120106',
    ),
    'enabled' => true,
  ),
  452 => 
  array (
    'id' => '7453',
    'bank_id' => '38',
    'name' => 'BANCHARAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120256',
    ),
    'enabled' => true,
  ),
  453 => 
  array (
    'id' => '7454',
    'bank_id' => '38',
    'name' => 'BRAHMANBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120430',
    ),
    'enabled' => true,
  ),
  454 => 
  array (
    'id' => '7455',
    'bank_id' => '38',
    'name' => 'CHANDPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120522',
    ),
    'enabled' => true,
  ),
  455 => 
  array (
    'id' => '7456',
    'bank_id' => '38',
    'name' => 'CHATALPAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120672',
    ),
    'enabled' => true,
  ),
  456 => 
  array (
    'id' => '7457',
    'bank_id' => '38',
    'name' => 'FANDAUK',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120764',
    ),
    'enabled' => true,
  ),
  457 => 
  array (
    'id' => '7458',
    'bank_id' => '38',
    'name' => 'GOKARNAGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120793',
    ),
    'enabled' => true,
  ),
  458 => 
  array (
    'id' => '7459',
    'bank_id' => '38',
    'name' => 'HARINBER BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200120885',
    ),
    'enabled' => true,
  ),
  459 => 
  array (
    'id' => '7460',
    'bank_id' => '38',
    'name' => 'KASBA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121039',
    ),
    'enabled' => true,
  ),
  460 => 
  array (
    'id' => '7461',
    'bank_id' => '38',
    'name' => 'KUTI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121097',
    ),
    'enabled' => true,
  ),
  461 => 
  array (
    'id' => '7462',
    'bank_id' => '38',
    'name' => 'T.A. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121121',
    ),
    'enabled' => true,
  ),
  462 => 
  array (
    'id' => '7463',
    'bank_id' => '38',
    'name' => 'MEDDA THANA COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121242',
    ),
    'enabled' => true,
  ),
  463 => 
  array (
    'id' => '7464',
    'bank_id' => '38',
    'name' => 'MIRASHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121271',
    ),
    'enabled' => true,
  ),
  464 => 
  array (
    'id' => '7465',
    'bank_id' => '38',
    'name' => 'NABINAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121363',
    ),
    'enabled' => true,
  ),
  465 => 
  array (
    'id' => '7466',
    'bank_id' => '38',
    'name' => 'NASIR NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121392',
    ),
    'enabled' => true,
  ),
  466 => 
  array (
    'id' => '7467',
    'bank_id' => '38',
    'name' => 'NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121426',
    ),
    'enabled' => true,
  ),
  467 => 
  array (
    'id' => '7468',
    'bank_id' => '38',
    'name' => 'RASULLABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121518',
    ),
    'enabled' => true,
  ),
  468 => 
  array (
    'id' => '7469',
    'bank_id' => '38',
    'name' => 'RUPASDI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121547',
    ),
    'enabled' => true,
  ),
  469 => 
  array (
    'id' => '7470',
    'bank_id' => '38',
    'name' => 'SARAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121600',
    ),
    'enabled' => true,
  ),
  470 => 
  array (
    'id' => '7471',
    'bank_id' => '38',
    'name' => 'SHYAMOGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121789',
    ),
    'enabled' => true,
  ),
  471 => 
  array (
    'id' => '7472',
    'bank_id' => '38',
    'name' => 'SINGERBIEL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121813',
    ),
    'enabled' => true,
  ),
  472 => 
  array (
    'id' => '7473',
    'bank_id' => '38',
    'name' => 'ASHUGANJ SAR KARKHANA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200121934',
    ),
    'enabled' => true,
  ),
  473 => 
  array (
    'id' => '7474',
    'bank_id' => '38',
    'name' => 'ALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130046',
    ),
    'enabled' => true,
  ),
  474 => 
  array (
    'id' => '7475',
    'bank_id' => '38',
    'name' => 'CHANDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130312',
    ),
    'enabled' => true,
  ),
  475 => 
  array (
    'id' => '7476',
    'bank_id' => '38',
    'name' => 'FARAZIKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130646',
    ),
    'enabled' => true,
  ),
  476 => 
  array (
    'id' => '7477',
    'bank_id' => '38',
    'name' => 'FARIDGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130675',
    ),
    'enabled' => true,
  ),
  477 => 
  array (
    'id' => '7478',
    'bank_id' => '38',
    'name' => 'GAZIPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130767',
    ),
    'enabled' => true,
  ),
  478 => 
  array (
    'id' => '7479',
    'bank_id' => '38',
    'name' => 'HAIMCHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130859',
    ),
    'enabled' => true,
  ),
  479 => 
  array (
    'id' => '7480',
    'bank_id' => '38',
    'name' => 'HAJIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130888',
    ),
    'enabled' => true,
  ),
  480 => 
  array (
    'id' => '7481',
    'bank_id' => '38',
    'name' => 'KACHUA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200130912',
    ),
    'enabled' => true,
  ),
  481 => 
  array (
    'id' => '7482',
    'bank_id' => '38',
    'name' => 'KHILA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131061',
    ),
    'enabled' => true,
  ),
  482 => 
  array (
    'id' => '7483',
    'bank_id' => '38',
    'name' => 'NUTUN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131090',
    ),
    'enabled' => true,
  ),
  483 => 
  array (
    'id' => '7484',
    'bank_id' => '38',
    'name' => 'MATLABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131245',
    ),
    'enabled' => true,
  ),
  484 => 
  array (
    'id' => '7485',
    'bank_id' => '38',
    'name' => 'NABIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131366',
    ),
    'enabled' => true,
  ),
  485 => 
  array (
    'id' => '7486',
    'bank_id' => '38',
    'name' => 'NAORA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131429',
    ),
    'enabled' => true,
  ),
  486 => 
  array (
    'id' => '7487',
    'bank_id' => '38',
    'name' => 'PURAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131661',
    ),
    'enabled' => true,
  ),
  487 => 
  array (
    'id' => '7488',
    'bank_id' => '38',
    'name' => 'RAHIMANAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131690',
    ),
    'enabled' => true,
  ),
  488 => 
  array (
    'id' => '7489',
    'bank_id' => '38',
    'name' => 'SACHAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131816',
    ),
    'enabled' => true,
  ),
  489 => 
  array (
    'id' => '7490',
    'bank_id' => '38',
    'name' => 'SENGAR CHAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131874',
    ),
    'enabled' => true,
  ),
  490 => 
  array (
    'id' => '7491',
    'bank_id' => '38',
    'name' => 'SHAHRASTI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200131995',
    ),
    'enabled' => true,
  ),
  491 => 
  array (
    'id' => '7492',
    'bank_id' => '38',
    'name' => 'SHOLOGHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200132028',
    ),
    'enabled' => true,
  ),
  492 => 
  array (
    'id' => '7493',
    'bank_id' => '38',
    'name' => 'WARUK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200132149',
    ),
    'enabled' => true,
  ),
  493 => 
  array (
    'id' => '7494',
    'bank_id' => '38',
    'name' => 'AGRABAD CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200150163',
    ),
    'enabled' => true,
  ),
  494 => 
  array (
    'id' => '7495',
    'bank_id' => '38',
    'name' => 'AMIN JUTE MILLS',
    'bank_branch_data' => 
    array (
      'routing_no' => '200150347',
    ),
    'enabled' => true,
  ),
  495 => 
  array (
    'id' => '7496',
    'bank_id' => '38',
    'name' => 'ANOWARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200150521',
    ),
    'enabled' => true,
  ),
  496 => 
  array (
    'id' => '7497',
    'bank_id' => '38',
    'name' => 'ASAD GANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200150589',
    ),
    'enabled' => true,
  ),
  497 => 
  array (
    'id' => '7498',
    'bank_id' => '38',
    'name' => 'BAHADDAR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200150792',
    ),
    'enabled' => true,
  ),
  498 => 
  array (
    'id' => '7499',
    'bank_id' => '38',
    'name' => 'BANSHKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200150976',
    ),
    'enabled' => true,
  ),
  499 => 
  array (
    'id' => '7500',
    'bank_id' => '38',
    'name' => 'BANUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151009',
    ),
    'enabled' => true,
  ),
  500 => 
  array (
    'id' => '7501',
    'bank_id' => '38',
    'name' => 'BHATIARY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151212',
    ),
    'enabled' => true,
  ),
  501 => 
  array (
    'id' => '7502',
    'bank_id' => '38',
    'name' => 'UTTAR PATENGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151270',
    ),
    'enabled' => true,
  ),
  502 => 
  array (
    'id' => '7503',
    'bank_id' => '38',
    'name' => 'BOALKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151304',
    ),
    'enabled' => true,
  ),
  503 => 
  array (
    'id' => '7504',
    'bank_id' => '38',
    'name' => 'C.D.A. MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151546',
    ),
    'enabled' => true,
  ),
  504 => 
  array (
    'id' => '7505',
    'bank_id' => '38',
    'name' => 'C.U.E.T.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151609',
    ),
    'enabled' => true,
  ),
  505 => 
  array (
    'id' => '7506',
    'bank_id' => '38',
    'name' => 'CHAKTAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151759',
    ),
    'enabled' => true,
  ),
  506 => 
  array (
    'id' => '7507',
    'bank_id' => '38',
    'name' => 'CHANDANAISH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151812',
    ),
    'enabled' => true,
  ),
  507 => 
  array (
    'id' => '7508',
    'bank_id' => '38',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151933',
    ),
    'enabled' => true,
  ),
  508 => 
  array (
    'id' => '7509',
    'bank_id' => '38',
    'name' => 'CHITTAGONG CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200151991',
    ),
    'enabled' => true,
  ),
  509 => 
  array (
    'id' => '7510',
    'bank_id' => '38',
    'name' => 'CHITTAGONG MEDICAL COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152024',
    ),
    'enabled' => true,
  ),
  510 => 
  array (
    'id' => '7511',
    'bank_id' => '38',
    'name' => 'CHITTAGONG UREA FERTILIZER',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152116',
    ),
    'enabled' => true,
  ),
  511 => 
  array (
    'id' => '7512',
    'bank_id' => '38',
    'name' => 'COURT HILL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152358',
    ),
    'enabled' => true,
  ),
  512 => 
  array (
    'id' => '7513',
    'bank_id' => '38',
    'name' => 'CUSTOM HOUSE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152387',
    ),
    'enabled' => true,
  ),
  513 => 
  array (
    'id' => '7514',
    'bank_id' => '38',
    'name' => 'DOHAZARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152561',
    ),
    'enabled' => true,
  ),
  514 => 
  array (
    'id' => '7515',
    'bank_id' => '38',
    'name' => 'NAZIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152682',
    ),
    'enabled' => true,
  ),
  515 => 
  array (
    'id' => '7516',
    'bank_id' => '38',
    'name' => 'FATIKCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200152745',
    ),
    'enabled' => true,
  ),
  516 => 
  array (
    'id' => '7517',
    'bank_id' => '38',
    'name' => 'HALISHAHAR HOUSING ESTATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153199',
    ),
    'enabled' => true,
  ),
  517 => 
  array (
    'id' => '7518',
    'bank_id' => '38',
    'name' => 'HATHAZARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153223',
    ),
    'enabled' => true,
  ),
  518 => 
  array (
    'id' => '7519',
    'bank_id' => '38',
    'name' => 'JAMAL KHAN ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153586',
    ),
    'enabled' => true,
  ),
  519 => 
  array (
    'id' => '7520',
    'bank_id' => '38',
    'name' => 'LALDIGHI CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153702',
    ),
    'enabled' => true,
  ),
  520 => 
  array (
    'id' => '7521',
    'bank_id' => '38',
    'name' => 'KAGATIAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153760',
    ),
    'enabled' => true,
  ),
  521 => 
  array (
    'id' => '7522',
    'bank_id' => '38',
    'name' => 'KALARPOLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153799',
    ),
    'enabled' => true,
  ),
  522 => 
  array (
    'id' => '7523',
    'bank_id' => '38',
    'name' => 'KALIBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153823',
    ),
    'enabled' => true,
  ),
  523 => 
  array (
    'id' => '7524',
    'bank_id' => '38',
    'name' => 'KALUMUNSHIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153881',
    ),
    'enabled' => true,
  ),
  524 => 
  array (
    'id' => '7525',
    'bank_id' => '38',
    'name' => 'KALURGHAT INDUSTRIAL ESTATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200153944',
    ),
    'enabled' => true,
  ),
  525 => 
  array (
    'id' => '7526',
    'bank_id' => '38',
    'name' => 'KHAN BAHADUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154219',
    ),
    'enabled' => true,
  ),
  526 => 
  array (
    'id' => '7527',
    'bank_id' => '38',
    'name' => 'KHATUNGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154277',
    ),
    'enabled' => true,
  ),
  527 => 
  array (
    'id' => '7528',
    'bank_id' => '38',
    'name' => 'KORBANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154398',
    ),
    'enabled' => true,
  ),
  528 => 
  array (
    'id' => '7529',
    'bank_id' => '38',
    'name' => 'CDA RESIDENTIAL AREA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154480',
    ),
    'enabled' => true,
  ),
  529 => 
  array (
    'id' => '7530',
    'bank_id' => '38',
    'name' => 'LOHA GARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154664',
    ),
    'enabled' => true,
  ),
  530 => 
  array (
    'id' => '7531',
    'bank_id' => '38',
    'name' => 'MAJIR GHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154819',
    ),
    'enabled' => true,
  ),
  531 => 
  array (
    'id' => '7532',
    'bank_id' => '38',
    'name' => 'MARIAMNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154848',
    ),
    'enabled' => true,
  ),
  532 => 
  array (
    'id' => '7533',
    'bank_id' => '38',
    'name' => 'MARINE ACADEMY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200154877',
    ),
    'enabled' => true,
  ),
  533 => 
  array (
    'id' => '7534',
    'bank_id' => '38',
    'name' => 'MIRSARAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155050',
    ),
    'enabled' => true,
  ),
  534 => 
  array (
    'id' => '7535',
    'bank_id' => '38',
    'name' => 'MITAGOLI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155113',
    ),
    'enabled' => true,
  ),
  535 => 
  array (
    'id' => '7536',
    'bank_id' => '38',
    'name' => 'MOHAMMED TAKIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155205',
    ),
    'enabled' => true,
  ),
  536 => 
  array (
    'id' => '7537',
    'bank_id' => '38',
    'name' => 'MOULVI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155292',
    ),
    'enabled' => true,
  ),
  537 => 
  array (
    'id' => '7538',
    'bank_id' => '38',
    'name' => 'N.A. CHOWDHURY ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155384',
    ),
    'enabled' => true,
  ),
  538 => 
  array (
    'id' => '7539',
    'bank_id' => '38',
    'name' => 'SARKERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155418',
    ),
    'enabled' => true,
  ),
  539 => 
  array (
    'id' => '7540',
    'bank_id' => '38',
    'name' => 'NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155650',
    ),
    'enabled' => true,
  ),
  540 => 
  array (
    'id' => '7541',
    'bank_id' => '38',
    'name' => 'NIZAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155689',
    ),
    'enabled' => true,
  ),
  541 => 
  array (
    'id' => '7542',
    'bank_id' => '38',
    'name' => 'PAHARTALI MAIN ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200155984',
    ),
    'enabled' => true,
  ),
  542 => 
  array (
    'id' => '7543',
    'bank_id' => '38',
    'name' => 'PANCHLAISH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156046',
    ),
    'enabled' => true,
  ),
  543 => 
  array (
    'id' => '7544',
    'bank_id' => '38',
    'name' => 'PATIYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156167',
    ),
    'enabled' => true,
  ),
  544 => 
  array (
    'id' => '7545',
    'bank_id' => '38',
    'name' => 'PORT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156220',
    ),
    'enabled' => true,
  ),
  545 => 
  array (
    'id' => '7546',
    'bank_id' => '38',
    'name' => 'RAILWAY BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156370',
    ),
    'enabled' => true,
  ),
  546 => 
  array (
    'id' => '7547',
    'bank_id' => '38',
    'name' => 'RANGUNIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156404',
    ),
    'enabled' => true,
  ),
  547 => 
  array (
    'id' => '7548',
    'bank_id' => '38',
    'name' => 'RAOZAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156491',
    ),
    'enabled' => true,
  ),
  548 => 
  array (
    'id' => '7549',
    'bank_id' => '38',
    'name' => 'REAZUDDIN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156525',
    ),
    'enabled' => true,
  ),
  549 => 
  array (
    'id' => '7550',
    'bank_id' => '38',
    'name' => 'ROAZARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156554',
    ),
    'enabled' => true,
  ),
  550 => 
  array (
    'id' => '7551',
    'bank_id' => '38',
    'name' => 'ROWSHAN HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156583',
    ),
    'enabled' => true,
  ),
  551 => 
  array (
    'id' => '7552',
    'bank_id' => '38',
    'name' => 'RUSTOM HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156675',
    ),
    'enabled' => true,
  ),
  552 => 
  array (
    'id' => '7553',
    'bank_id' => '38',
    'name' => 'SADARGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156738',
    ),
    'enabled' => true,
  ),
  553 => 
  array (
    'id' => '7554',
    'bank_id' => '38',
    'name' => 'SANDWIP',
    'bank_branch_data' => 
    array (
      'routing_no' => '200156912',
    ),
    'enabled' => true,
  ),
  554 => 
  array (
    'id' => '7555',
    'bank_id' => '38',
    'name' => 'SATKANIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200157061',
    ),
    'enabled' => true,
  ),
  555 => 
  array (
    'id' => '7556',
    'bank_id' => '38',
    'name' => 'SHAH AMANAT INT. AIR PORT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200157124',
    ),
    'enabled' => true,
  ),
  556 => 
  array (
    'id' => '7557',
    'bank_id' => '38',
    'name' => 'SIRAJUDDOWLA ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200157366',
    ),
    'enabled' => true,
  ),
  557 => 
  array (
    'id' => '7558',
    'bank_id' => '38',
    'name' => 'SITAKUNDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200157395',
    ),
    'enabled' => true,
  ),
  558 => 
  array (
    'id' => '7559',
    'bank_id' => '38',
    'name' => 'TERRI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200157632',
    ),
    'enabled' => true,
  ),
  559 => 
  array (
    'id' => '7560',
    'bank_id' => '38',
    'name' => 'WAGE EARNERS',
    'bank_branch_data' => 
    array (
      'routing_no' => '200157690',
    ),
    'enabled' => true,
  ),
  560 => 
  array (
    'id' => '7561',
    'bank_id' => '38',
    'name' => 'ALAMDANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180041',
    ),
    'enabled' => true,
  ),
  561 => 
  array (
    'id' => '7562',
    'bank_id' => '38',
    'name' => 'CHUADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180191',
    ),
    'enabled' => true,
  ),
  562 => 
  array (
    'id' => '7563',
    'bank_id' => '38',
    'name' => 'DAMURHUDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180283',
    ),
    'enabled' => true,
  ),
  563 => 
  array (
    'id' => '7564',
    'bank_id' => '38',
    'name' => 'DARSHANA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180317',
    ),
    'enabled' => true,
  ),
  564 => 
  array (
    'id' => '7565',
    'bank_id' => '38',
    'name' => 'DINGEDAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180346',
    ),
    'enabled' => true,
  ),
  565 => 
  array (
    'id' => '7566',
    'bank_id' => '38',
    'name' => 'GOKUL KHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180409',
    ),
    'enabled' => true,
  ),
  566 => 
  array (
    'id' => '7567',
    'bank_id' => '38',
    'name' => 'HAT BOALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180496',
    ),
    'enabled' => true,
  ),
  567 => 
  array (
    'id' => '7568',
    'bank_id' => '38',
    'name' => 'JIBAN NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180588',
    ),
    'enabled' => true,
  ),
  568 => 
  array (
    'id' => '7569',
    'bank_id' => '38',
    'name' => 'MUNSHIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180762',
    ),
    'enabled' => true,
  ),
  569 => 
  array (
    'id' => '7570',
    'bank_id' => '38',
    'name' => 'SARATGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180854',
    ),
    'enabled' => true,
  ),
  570 => 
  array (
    'id' => '7571',
    'bank_id' => '38',
    'name' => 'UTHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200180883',
    ),
    'enabled' => true,
  ),
  571 => 
  array (
    'id' => '7572',
    'bank_id' => '38',
    'name' => 'ADDA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190073',
    ),
    'enabled' => true,
  ),
  572 => 
  array (
    'id' => '7573',
    'bank_id' => '38',
    'name' => 'TITAS',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190181',
    ),
    'enabled' => true,
  ),
  573 => 
  array (
    'id' => '7574',
    'bank_id' => '38',
    'name' => 'BARURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190499',
    ),
    'enabled' => true,
  ),
  574 => 
  array (
    'id' => '7575',
    'bank_id' => '38',
    'name' => 'BHARASHAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190615',
    ),
    'enabled' => true,
  ),
  575 => 
  array (
    'id' => '7576',
    'bank_id' => '38',
    'name' => 'BISE BIDG.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190673',
    ),
    'enabled' => true,
  ),
  576 => 
  array (
    'id' => '7577',
    'bank_id' => '38',
    'name' => 'BRAHMAN PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190765',
    ),
    'enabled' => true,
  ),
  577 => 
  array (
    'id' => '7578',
    'bank_id' => '38',
    'name' => 'BURICHANG',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190828',
    ),
    'enabled' => true,
  ),
  578 => 
  array (
    'id' => '7579',
    'bank_id' => '38',
    'name' => 'CHANDINA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200190886',
    ),
    'enabled' => true,
  ),
  579 => 
  array (
    'id' => '7580',
    'bank_id' => '38',
    'name' => 'CHOUDDAGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191069',
    ),
    'enabled' => true,
  ),
  580 => 
  array (
    'id' => '7581',
    'bank_id' => '38',
    'name' => 'COMILLA CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191214',
    ),
    'enabled' => true,
  ),
  581 => 
  array (
    'id' => '7582',
    'bank_id' => '38',
    'name' => 'COMILLA COORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191272',
    ),
    'enabled' => true,
  ),
  582 => 
  array (
    'id' => '7583',
    'bank_id' => '38',
    'name' => 'COMILLA SADAR DAKKHIN U.Z.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191335',
    ),
    'enabled' => true,
  ),
  583 => 
  array (
    'id' => '7584',
    'bank_id' => '38',
    'name' => 'COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191456',
    ),
    'enabled' => true,
  ),
  584 => 
  array (
    'id' => '7585',
    'bank_id' => '38',
    'name' => 'DAUDKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191519',
    ),
    'enabled' => true,
  ),
  585 => 
  array (
    'id' => '7586',
    'bank_id' => '38',
    'name' => 'DAULATGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191548',
    ),
    'enabled' => true,
  ),
  586 => 
  array (
    'id' => '7587',
    'bank_id' => '38',
    'name' => 'DEBIDWAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191601',
    ),
    'enabled' => true,
  ),
  587 => 
  array (
    'id' => '7588',
    'bank_id' => '38',
    'name' => 'ELIOTGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200191906',
    ),
    'enabled' => true,
  ),
  588 => 
  array (
    'id' => '7589',
    'bank_id' => '38',
    'name' => 'GOURIPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200192118',
    ),
    'enabled' => true,
  ),
  589 => 
  array (
    'id' => '7590',
    'bank_id' => '38',
    'name' => 'HOMNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200192239',
    ),
    'enabled' => true,
  ),
  590 => 
  array (
    'id' => '7591',
    'bank_id' => '38',
    'name' => 'KANGSHANAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200192534',
    ),
    'enabled' => true,
  ),
  591 => 
  array (
    'id' => '7592',
    'bank_id' => '38',
    'name' => 'KOTBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200192655',
    ),
    'enabled' => true,
  ),
  592 => 
  array (
    'id' => '7593',
    'bank_id' => '38',
    'name' => 'MEGHNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200192868',
    ),
    'enabled' => true,
  ),
  593 => 
  array (
    'id' => '7594',
    'bank_id' => '38',
    'name' => 'MONOHARGONJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193041',
    ),
    'enabled' => true,
  ),
  594 => 
  array (
    'id' => '7595',
    'bank_id' => '38',
    'name' => 'MURAD NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193162',
    ),
    'enabled' => true,
  ),
  595 => 
  array (
    'id' => '7596',
    'bank_id' => '38',
    'name' => 'NANGALKOT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193254',
    ),
    'enabled' => true,
  ),
  596 => 
  array (
    'id' => '7597',
    'bank_id' => '38',
    'name' => 'NOA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193375',
    ),
    'enabled' => true,
  ),
  597 => 
  array (
    'id' => '7598',
    'bank_id' => '38',
    'name' => 'PARAMTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193438',
    ),
    'enabled' => true,
  ),
  598 => 
  array (
    'id' => '7599',
    'bank_id' => '38',
    'name' => 'PAYALGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193467',
    ),
    'enabled' => true,
  ),
  599 => 
  array (
    'id' => '7600',
    'bank_id' => '38',
    'name' => 'RAIPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193559',
    ),
    'enabled' => true,
  ),
  600 => 
  array (
    'id' => '7601',
    'bank_id' => '38',
    'name' => 'RAMMOHAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193704',
    ),
    'enabled' => true,
  ),
  601 => 
  array (
    'id' => '7602',
    'bank_id' => '38',
    'name' => 'COMPANIGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193733',
    ),
    'enabled' => true,
  ),
  602 => 
  array (
    'id' => '7603',
    'bank_id' => '38',
    'name' => 'SRIKAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200193975',
    ),
    'enabled' => true,
  ),
  603 => 
  array (
    'id' => '7604',
    'bank_id' => '38',
    'name' => 'STATION ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200194008',
    ),
    'enabled' => true,
  ),
  604 => 
  array (
    'id' => '7605',
    'bank_id' => '38',
    'name' => 'SUAGAZI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200194037',
    ),
    'enabled' => true,
  ),
  605 => 
  array (
    'id' => '7606',
    'bank_id' => '38',
    'name' => 'WAPDA BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200194187',
    ),
    'enabled' => true,
  ),
  606 => 
  array (
    'id' => '7607',
    'bank_id' => '38',
    'name' => 'BADARKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220048',
    ),
    'enabled' => true,
  ),
  607 => 
  array (
    'id' => '7608',
    'bank_id' => '38',
    'name' => 'CHAKARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220169',
    ),
    'enabled' => true,
  ),
  608 => 
  array (
    'id' => '7609',
    'bank_id' => '38',
    'name' => 'COXS BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220251',
    ),
    'enabled' => true,
  ),
  609 => 
  array (
    'id' => '7610',
    'bank_id' => '38',
    'name' => 'DULHAZRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220372',
    ),
    'enabled' => true,
  ),
  610 => 
  array (
    'id' => '7611',
    'bank_id' => '38',
    'name' => 'EIDGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220406',
    ),
    'enabled' => true,
  ),
  611 => 
  array (
    'id' => '7612',
    'bank_id' => '38',
    'name' => 'KUTUBDIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220677',
    ),
    'enabled' => true,
  ),
  612 => 
  array (
    'id' => '7613',
    'bank_id' => '38',
    'name' => 'MOHESHKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220769',
    ),
    'enabled' => true,
  ),
  613 => 
  array (
    'id' => '7614',
    'bank_id' => '38',
    'name' => 'RAMU',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220851',
    ),
    'enabled' => true,
  ),
  614 => 
  array (
    'id' => '7615',
    'bank_id' => '38',
    'name' => 'TEKNAF',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220914',
    ),
    'enabled' => true,
  ),
  615 => 
  array (
    'id' => '7616',
    'bank_id' => '38',
    'name' => 'UKHIYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200220943',
    ),
    'enabled' => true,
  ),
  616 => 
  array (
    'id' => '7617',
    'bank_id' => '38',
    'name' => 'AGARGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260040',
    ),
    'enabled' => true,
  ),
  617 => 
  array (
    'id' => '7618',
    'bank_id' => '38',
    'name' => 'AMIN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260132',
    ),
    'enabled' => true,
  ),
  618 => 
  array (
    'id' => '7619',
    'bank_id' => '38',
    'name' => 'ASHULIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260253',
    ),
    'enabled' => true,
  ),
  619 => 
  array (
    'id' => '7620',
    'bank_id' => '38',
    'name' => 'AWLAD HOSSAIN MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260282',
    ),
    'enabled' => true,
  ),
  620 => 
  array (
    'id' => '7621',
    'bank_id' => '38',
    'name' => 'BADDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260345',
    ),
    'enabled' => true,
  ),
  621 => 
  array (
    'id' => '7622',
    'bank_id' => '38',
    'name' => 'BANANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260437',
    ),
    'enabled' => true,
  ),
  622 => 
  array (
    'id' => '7623',
    'bank_id' => '38',
    'name' => 'BANANI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260466',
    ),
    'enabled' => true,
  ),
  623 => 
  array (
    'id' => '7624',
    'bank_id' => '38',
    'name' => 'BARIDHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260529',
    ),
    'enabled' => true,
  ),
  624 => 
  array (
    'id' => '7625',
    'bank_id' => '38',
    'name' => 'BAZME QUADERIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260640',
    ),
    'enabled' => true,
  ),
  625 => 
  array (
    'id' => '7626',
    'bank_id' => '38',
    'name' => 'BEGUM ROKEYA SAWRANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260679',
    ),
    'enabled' => true,
  ),
  626 => 
  array (
    'id' => '7627',
    'bank_id' => '38',
    'name' => 'COLLEGE GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260824',
    ),
    'enabled' => true,
  ),
  627 => 
  array (
    'id' => '7628',
    'bank_id' => '38',
    'name' => 'CUSTOM HOUSE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260882',
    ),
    'enabled' => true,
  ),
  628 => 
  array (
    'id' => '7629',
    'bank_id' => '38',
    'name' => 'DHAKA AIRPOT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200260974',
    ),
    'enabled' => true,
  ),
  629 => 
  array (
    'id' => '7630',
    'bank_id' => '38',
    'name' => 'DHAKA CANTONMENT CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261036',
    ),
    'enabled' => true,
  ),
  630 => 
  array (
    'id' => '7631',
    'bank_id' => '38',
    'name' => 'DHAKA EPZ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261094',
    ),
    'enabled' => true,
  ),
  631 => 
  array (
    'id' => '7632',
    'bank_id' => '38',
    'name' => 'DHAMRAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261157',
    ),
    'enabled' => true,
  ),
  632 => 
  array (
    'id' => '7633',
    'bank_id' => '38',
    'name' => 'FARMGATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261452',
    ),
    'enabled' => true,
  ),
  633 => 
  array (
    'id' => '7634',
    'bank_id' => '38',
    'name' => 'GANA BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261607',
    ),
    'enabled' => true,
  ),
  634 => 
  array (
    'id' => '7635',
    'bank_id' => '38',
    'name' => 'GREEN ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261694',
    ),
    'enabled' => true,
  ),
  635 => 
  array (
    'id' => '7636',
    'bank_id' => '38',
    'name' => 'GULSHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261728',
    ),
    'enabled' => true,
  ),
  636 => 
  array (
    'id' => '7637',
    'bank_id' => '38',
    'name' => 'GULSHAN NEW NORTH CIRCLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261878',
    ),
    'enabled' => true,
  ),
  637 => 
  array (
    'id' => '7638',
    'bank_id' => '38',
    'name' => 'HAZARIBAGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200261960',
    ),
    'enabled' => true,
  ),
  638 => 
  array (
    'id' => '7639',
    'bank_id' => '38',
    'name' => 'IBRAHIMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262080',
    ),
    'enabled' => true,
  ),
  639 => 
  array (
    'id' => '7640',
    'bank_id' => '38',
    'name' => 'JATIO SANGSAD BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262293',
    ),
    'enabled' => true,
  ),
  640 => 
  array (
    'id' => '7641',
    'bank_id' => '38',
    'name' => 'JHIGATOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262327',
    ),
    'enabled' => true,
  ),
  641 => 
  array (
    'id' => '7642',
    'bank_id' => '38',
    'name' => 'KALAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262448',
    ),
    'enabled' => true,
  ),
  642 => 
  array (
    'id' => '7643',
    'bank_id' => '38',
    'name' => 'KALYAN PUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262477',
    ),
    'enabled' => true,
  ),
  643 => 
  array (
    'id' => '7644',
    'bank_id' => '38',
    'name' => 'KARWAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262530',
    ),
    'enabled' => true,
  ),
  644 => 
  array (
    'id' => '7645',
    'bank_id' => '38',
    'name' => 'KRISHI BAZAR MOHAMMADPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262622',
    ),
    'enabled' => true,
  ),
  645 => 
  array (
    'id' => '7646',
    'bank_id' => '38',
    'name' => 'KURMITOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262651',
    ),
    'enabled' => true,
  ),
  646 => 
  array (
    'id' => '7647',
    'bank_id' => '38',
    'name' => 'DHANMONDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262743',
    ),
    'enabled' => true,
  ),
  647 => 
  array (
    'id' => '7648',
    'bank_id' => '38',
    'name' => 'LALMATIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262835',
    ),
    'enabled' => true,
  ),
  648 => 
  array (
    'id' => '7649',
    'bank_id' => '38',
    'name' => 'MANIK MIAH AVENUE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200262893',
    ),
    'enabled' => true,
  ),
  649 => 
  array (
    'id' => '7650',
    'bank_id' => '38',
    'name' => 'MIRPUR CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263018',
    ),
    'enabled' => true,
  ),
  650 => 
  array (
    'id' => '7651',
    'bank_id' => '38',
    'name' => 'MIRPUR I/A',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263047',
    ),
    'enabled' => true,
  ),
  651 => 
  array (
    'id' => '7652',
    'bank_id' => '38',
    'name' => 'MIRPUR SECTION-1',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263100',
    ),
    'enabled' => true,
  ),
  652 => 
  array (
    'id' => '7653',
    'bank_id' => '38',
    'name' => 'MIRPUR SECTION-12',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263168',
    ),
    'enabled' => true,
  ),
  653 => 
  array (
    'id' => '7654',
    'bank_id' => '38',
    'name' => 'MOHAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263197',
    ),
    'enabled' => true,
  ),
  654 => 
  array (
    'id' => '7655',
    'bank_id' => '38',
    'name' => 'MOHAMMADPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263313',
    ),
    'enabled' => true,
  ),
  655 => 
  array (
    'id' => '7656',
    'bank_id' => '38',
    'name' => 'NAVAL H/Q',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263434',
    ),
    'enabled' => true,
  ),
  656 => 
  array (
    'id' => '7657',
    'bank_id' => '38',
    'name' => 'NAYARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263463',
    ),
    'enabled' => true,
  ),
  657 => 
  array (
    'id' => '7658',
    'bank_id' => '38',
    'name' => 'NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263526',
    ),
    'enabled' => true,
  ),
  658 => 
  array (
    'id' => '7659',
    'bank_id' => '38',
    'name' => 'PRIME MINISTER\'S OFFICE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263739',
    ),
    'enabled' => true,
  ),
  659 => 
  array (
    'id' => '7660',
    'bank_id' => '38',
    'name' => 'PUBLIC ADM. TRAINING CENTRE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263768',
    ),
    'enabled' => true,
  ),
  660 => 
  array (
    'id' => '7661',
    'bank_id' => '38',
    'name' => 'RAGISTRATION COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200263821',
    ),
    'enabled' => true,
  ),
  661 => 
  array (
    'id' => '7662',
    'bank_id' => '38',
    'name' => 'SATMASJID ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264033',
    ),
    'enabled' => true,
  ),
  662 => 
  array (
    'id' => '7663',
    'bank_id' => '38',
    'name' => 'SAVAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264091',
    ),
    'enabled' => true,
  ),
  663 => 
  array (
    'id' => '7664',
    'bank_id' => '38',
    'name' => 'SAVAR CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264183',
    ),
    'enabled' => true,
  ),
  664 => 
  array (
    'id' => '7665',
    'bank_id' => '38',
    'name' => 'SONARGOAN HOTEL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264396',
    ),
    'enabled' => true,
  ),
  665 => 
  array (
    'id' => '7666',
    'bank_id' => '38',
    'name' => 'TEJGAON INDUSTRIAL AREA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264512',
    ),
    'enabled' => true,
  ),
  666 => 
  array (
    'id' => '7667',
    'bank_id' => '38',
    'name' => 'UTTAR KHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264604',
    ),
    'enabled' => true,
  ),
  667 => 
  array (
    'id' => '7668',
    'bank_id' => '38',
    'name' => 'UTTARA MODEL TOWN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264691',
    ),
    'enabled' => true,
  ),
  668 => 
  array (
    'id' => '7669',
    'bank_id' => '38',
    'name' => 'HAZRAT SHAHJALA ® INTERNATIONAL AIR PORT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200264817',
    ),
    'enabled' => true,
  ),
  669 => 
  array (
    'id' => '7670',
    'bank_id' => '38',
    'name' => 'TRUNCATION POINT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270001',
    ),
    'enabled' => true,
  ),
  670 => 
  array (
    'id' => '7671',
    'bank_id' => '38',
    'name' => 'PANGAON INLAND CONTAINER TERMINAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270119',
    ),
    'enabled' => true,
  ),
  671 => 
  array (
    'id' => '7672',
    'bank_id' => '38',
    'name' => 'AGLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270164',
    ),
    'enabled' => true,
  ),
  672 => 
  array (
    'id' => '7673',
    'bank_id' => '38',
    'name' => 'AGRANI BALIKA BIDYALAYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270193',
    ),
    'enabled' => true,
  ),
  673 => 
  array (
    'id' => '7674',
    'bank_id' => '38',
    'name' => 'ARMANITOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270319',
    ),
    'enabled' => true,
  ),
  674 => 
  array (
    'id' => '7675',
    'bank_id' => '38',
    'name' => 'ATI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270348',
    ),
    'enabled' => true,
  ),
  675 => 
  array (
    'id' => '7676',
    'bank_id' => '38',
    'name' => 'B. MADRASHA SHIKKHA BOARD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270401',
    ),
    'enabled' => true,
  ),
  676 => 
  array (
    'id' => '7677',
    'bank_id' => '38',
    'name' => 'B.I.S.E.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270469',
    ),
    'enabled' => true,
  ),
  677 => 
  array (
    'id' => '7678',
    'bank_id' => '38',
    'name' => 'B.U.E.T.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270522',
    ),
    'enabled' => true,
  ),
  678 => 
  array (
    'id' => '7679',
    'bank_id' => '38',
    'name' => 'BABU BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270551',
    ),
    'enabled' => true,
  ),
  679 => 
  array (
    'id' => '7680',
    'bank_id' => '38',
    'name' => 'BAITUL MOKARRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270614',
    ),
    'enabled' => true,
  ),
  680 => 
  array (
    'id' => '7681',
    'bank_id' => '38',
    'name' => 'BANGA BANDHU NATIONAL STADIUM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270706',
    ),
    'enabled' => true,
  ),
  681 => 
  array (
    'id' => '7682',
    'bank_id' => '38',
    'name' => 'BANGA BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270735',
    ),
    'enabled' => true,
  ),
  682 => 
  array (
    'id' => '7683',
    'bank_id' => '38',
    'name' => 'BANGABANDHU AVENUE CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270764',
    ),
    'enabled' => true,
  ),
  683 => 
  array (
    'id' => '7684',
    'bank_id' => '38',
    'name' => 'BASHABOO',
    'bank_branch_data' => 
    array (
      'routing_no' => '200270977',
    ),
    'enabled' => true,
  ),
  684 => 
  array (
    'id' => '7685',
    'bank_id' => '38',
    'name' => 'BAWANI NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271000',
    ),
    'enabled' => true,
  ),
  685 => 
  array (
    'id' => '7686',
    'bank_id' => '38',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271271',
    ),
    'enabled' => true,
  ),
  686 => 
  array (
    'id' => '7687',
    'bank_id' => '38',
    'name' => 'CHURAIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271363',
    ),
    'enabled' => true,
  ),
  687 => 
  array (
    'id' => '7688',
    'bank_id' => '38',
    'name' => 'DAYA GANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271455',
    ),
    'enabled' => true,
  ),
  688 => 
  array (
    'id' => '7689',
    'bank_id' => '38',
    'name' => 'DHAKA SHERATON HOTEL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271639',
    ),
    'enabled' => true,
  ),
  689 => 
  array (
    'id' => '7690',
    'bank_id' => '38',
    'name' => 'DHAKA UNIVERSITY CAMPUS',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271750',
    ),
    'enabled' => true,
  ),
  690 => 
  array (
    'id' => '7691',
    'bank_id' => '38',
    'name' => 'DILKUSHA CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271934',
    ),
    'enabled' => true,
  ),
  691 => 
  array (
    'id' => '7692',
    'bank_id' => '38',
    'name' => 'DISTILARY ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271963',
    ),
    'enabled' => true,
  ),
  692 => 
  array (
    'id' => '7693',
    'bank_id' => '38',
    'name' => 'DISTRICT COUNCIL HALL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200271992',
    ),
    'enabled' => true,
  ),
  693 => 
  array (
    'id' => '7694',
    'bank_id' => '38',
    'name' => 'FAKIRAPOOL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200272175',
    ),
    'enabled' => true,
  ),
  694 => 
  array (
    'id' => '7695',
    'bank_id' => '38',
    'name' => 'FARASHGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200272238',
    ),
    'enabled' => true,
  ),
  695 => 
  array (
    'id' => '7696',
    'bank_id' => '38',
    'name' => 'FOREIGN EXCHANGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200272320',
    ),
    'enabled' => true,
  ),
  696 => 
  array (
    'id' => '7697',
    'bank_id' => '38',
    'name' => 'GORAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200272470',
    ),
    'enabled' => true,
  ),
  697 => 
  array (
    'id' => '7698',
    'bank_id' => '38',
    'name' => 'HEAD OFFICE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200272683',
    ),
    'enabled' => true,
  ),
  698 => 
  array (
    'id' => '7699',
    'bank_id' => '38',
    'name' => 'ISWAR CHANDRA ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273040',
    ),
    'enabled' => true,
  ),
  699 => 
  array (
    'id' => '7700',
    'bank_id' => '38',
    'name' => 'JATRABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273224',
    ),
    'enabled' => true,
  ),
  700 => 
  array (
    'id' => '7701',
    'bank_id' => '38',
    'name' => 'JOYPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273282',
    ),
    'enabled' => true,
  ),
  701 => 
  array (
    'id' => '7702',
    'bank_id' => '38',
    'name' => 'KAKRAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273374',
    ),
    'enabled' => true,
  ),
  702 => 
  array (
    'id' => '7703',
    'bank_id' => '38',
    'name' => 'KALAKOPA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273408',
    ),
    'enabled' => true,
  ),
  703 => 
  array (
    'id' => '7704',
    'bank_id' => '38',
    'name' => 'KALATIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273437',
    ),
    'enabled' => true,
  ),
  704 => 
  array (
    'id' => '7705',
    'bank_id' => '38',
    'name' => 'KAMALAPUR RAILWAY STATION',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273558',
    ),
    'enabled' => true,
  ),
  705 => 
  array (
    'id' => '7706',
    'bank_id' => '38',
    'name' => 'KERANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273640',
    ),
    'enabled' => true,
  ),
  706 => 
  array (
    'id' => '7707',
    'bank_id' => '38',
    'name' => 'KHILGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273679',
    ),
    'enabled' => true,
  ),
  707 => 
  array (
    'id' => '7708',
    'bank_id' => '38',
    'name' => 'KRISHI BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273761',
    ),
    'enabled' => true,
  ),
  708 => 
  array (
    'id' => '7709',
    'bank_id' => '38',
    'name' => 'LALBAGH ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273824',
    ),
    'enabled' => true,
  ),
  709 => 
  array (
    'id' => '7710',
    'bank_id' => '38',
    'name' => 'LAXMI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273853',
    ),
    'enabled' => true,
  ),
  710 => 
  array (
    'id' => '7711',
    'bank_id' => '38',
    'name' => 'LOCAL OFFICE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273882',
    ),
    'enabled' => true,
  ),
  711 => 
  array (
    'id' => '7712',
    'bank_id' => '38',
    'name' => 'MALIBAGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200273945',
    ),
    'enabled' => true,
  ),
  712 => 
  array (
    'id' => '7713',
    'bank_id' => '38',
    'name' => 'MITFORD ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274128',
    ),
    'enabled' => true,
  ),
  713 => 
  array (
    'id' => '7714',
    'bank_id' => '38',
    'name' => 'MOGHBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274186',
    ),
    'enabled' => true,
  ),
  714 => 
  array (
    'id' => '7715',
    'bank_id' => '38',
    'name' => 'MOKIM KATRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274210',
    ),
    'enabled' => true,
  ),
  715 => 
  array (
    'id' => '7716',
    'bank_id' => '38',
    'name' => 'N.C.T.B.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274544',
    ),
    'enabled' => true,
  ),
  716 => 
  array (
    'id' => '7717',
    'bank_id' => '38',
    'name' => 'NAGAR BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274573',
    ),
    'enabled' => true,
  ),
  717 => 
  array (
    'id' => '7718',
    'bank_id' => '38',
    'name' => 'NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274694',
    ),
    'enabled' => true,
  ),
  718 => 
  array (
    'id' => '7719',
    'bank_id' => '38',
    'name' => 'NAWABPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274757',
    ),
    'enabled' => true,
  ),
  719 => 
  array (
    'id' => '7720',
    'bank_id' => '38',
    'name' => 'NAYA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274810',
    ),
    'enabled' => true,
  ),
  720 => 
  array (
    'id' => '7721',
    'bank_id' => '38',
    'name' => 'NAZIMUDDIN ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274931',
    ),
    'enabled' => true,
  ),
  721 => 
  array (
    'id' => '7722',
    'bank_id' => '38',
    'name' => 'NAZIRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200274960',
    ),
    'enabled' => true,
  ),
  722 => 
  array (
    'id' => '7723',
    'bank_id' => '38',
    'name' => 'NORTH SOUTH ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275114',
    ),
    'enabled' => true,
  ),
  723 => 
  array (
    'id' => '7724',
    'bank_id' => '38',
    'name' => 'PALAM GANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275172',
    ),
    'enabled' => true,
  ),
  724 => 
  array (
    'id' => '7725',
    'bank_id' => '38',
    'name' => 'POSTAGOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275327',
    ),
    'enabled' => true,
  ),
  725 => 
  array (
    'id' => '7726',
    'bank_id' => '38',
    'name' => 'RAJUK BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275622',
    ),
    'enabled' => true,
  ),
  726 => 
  array (
    'id' => '7727',
    'bank_id' => '38',
    'name' => 'RAMNA CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275714',
    ),
    'enabled' => true,
  ),
  727 => 
  array (
    'id' => '7728',
    'bank_id' => '38',
    'name' => 'RAMPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275743',
    ),
    'enabled' => true,
  ),
  728 => 
  array (
    'id' => '7729',
    'bank_id' => '38',
    'name' => 'RASULPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275772',
    ),
    'enabled' => true,
  ),
  729 => 
  array (
    'id' => '7730',
    'bank_id' => '38',
    'name' => 'RUHITPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275835',
    ),
    'enabled' => true,
  ),
  730 => 
  array (
    'id' => '7731',
    'bank_id' => '38',
    'name' => 'SADARGHAT CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275956',
    ),
    'enabled' => true,
  ),
  731 => 
  array (
    'id' => '7732',
    'bank_id' => '38',
    'name' => 'SAIDABAD BUS TERMINAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200275985',
    ),
    'enabled' => true,
  ),
  732 => 
  array (
    'id' => '7733',
    'bank_id' => '38',
    'name' => 'SEGUN BAGICHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276168',
    ),
    'enabled' => true,
  ),
  733 => 
  array (
    'id' => '7734',
    'bank_id' => '38',
    'name' => 'SHAHJAHANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276250',
    ),
    'enabled' => true,
  ),
  734 => 
  array (
    'id' => '7735',
    'bank_id' => '38',
    'name' => 'SHILPA BHABAN CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276434',
    ),
    'enabled' => true,
  ),
  735 => 
  array (
    'id' => '7736',
    'bank_id' => '38',
    'name' => 'SONARGAON ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276584',
    ),
    'enabled' => true,
  ),
  736 => 
  array (
    'id' => '7737',
    'bank_id' => '38',
    'name' => 'SUPREME COURT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276618',
    ),
    'enabled' => true,
  ),
  737 => 
  array (
    'id' => '7738',
    'bank_id' => '38',
    'name' => 'URDU ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276797',
    ),
    'enabled' => true,
  ),
  738 => 
  array (
    'id' => '7739',
    'bank_id' => '38',
    'name' => 'VIQUARUN NESA NOON SCHOOL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276889',
    ),
    'enabled' => true,
  ),
  739 => 
  array (
    'id' => '7740',
    'bank_id' => '38',
    'name' => 'WAGE EARNERS CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276913',
    ),
    'enabled' => true,
  ),
  740 => 
  array (
    'id' => '7741',
    'bank_id' => '38',
    'name' => 'WAPDA BUILDING CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200276971',
    ),
    'enabled' => true,
  ),
  741 => 
  array (
    'id' => '7742',
    'bank_id' => '38',
    'name' => 'WARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200277004',
    ),
    'enabled' => true,
  ),
  742 => 
  array (
    'id' => '7743',
    'bank_id' => '38',
    'name' => 'AFTABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280046',
    ),
    'enabled' => true,
  ),
  743 => 
  array (
    'id' => '7744',
    'bank_id' => '38',
    'name' => 'BARAPUKURIA KAILA KHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280167',
    ),
    'enabled' => true,
  ),
  744 => 
  array (
    'id' => '7745',
    'bank_id' => '38',
    'name' => 'BHAVANIPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280259',
    ),
    'enabled' => true,
  ),
  745 => 
  array (
    'id' => '7746',
    'bank_id' => '38',
    'name' => 'BINNAKURI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280312',
    ),
    'enabled' => true,
  ),
  746 => 
  array (
    'id' => '7747',
    'bank_id' => '38',
    'name' => 'BIRAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280341',
    ),
    'enabled' => true,
  ),
  747 => 
  array (
    'id' => '7748',
    'bank_id' => '38',
    'name' => 'BIRGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280370',
    ),
    'enabled' => true,
  ),
  748 => 
  array (
    'id' => '7749',
    'bank_id' => '38',
    'name' => 'BIROL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280404',
    ),
    'enabled' => true,
  ),
  749 => 
  array (
    'id' => '7750',
    'bank_id' => '38',
    'name' => 'CHIRIRBANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280525',
    ),
    'enabled' => true,
  ),
  750 => 
  array (
    'id' => '7751',
    'bank_id' => '38',
    'name' => 'COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280554',
    ),
    'enabled' => true,
  ),
  751 => 
  array (
    'id' => '7752',
    'bank_id' => '38',
    'name' => 'DINAJPUR CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280709',
    ),
    'enabled' => true,
  ),
  752 => 
  array (
    'id' => '7753',
    'bank_id' => '38',
    'name' => 'FARAKKABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280796',
    ),
    'enabled' => true,
  ),
  753 => 
  array (
    'id' => '7754',
    'bank_id' => '38',
    'name' => 'GHORAGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280820',
    ),
    'enabled' => true,
  ),
  754 => 
  array (
    'id' => '7755',
    'bank_id' => '38',
    'name' => 'HAKIMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280912',
    ),
    'enabled' => true,
  ),
  755 => 
  array (
    'id' => '7756',
    'bank_id' => '38',
    'name' => 'HUGLI PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200280970',
    ),
    'enabled' => true,
  ),
  756 => 
  array (
    'id' => '7757',
    'bank_id' => '38',
    'name' => 'JOYNANDAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281003',
    ),
    'enabled' => true,
  ),
  757 => 
  array (
    'id' => '7758',
    'bank_id' => '38',
    'name' => 'KACHINIAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281061',
    ),
    'enabled' => true,
  ),
  758 => 
  array (
    'id' => '7759',
    'bank_id' => '38',
    'name' => 'KAHAROLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281090',
    ),
    'enabled' => true,
  ),
  759 => 
  array (
    'id' => '7760',
    'bank_id' => '38',
    'name' => 'KHANSAMA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281216',
    ),
    'enabled' => true,
  ),
  760 => 
  array (
    'id' => '7761',
    'bank_id' => '38',
    'name' => 'MADHYAPARA HARD ROCK PROJECT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281337',
    ),
    'enabled' => true,
  ),
  761 => 
  array (
    'id' => '7762',
    'bank_id' => '38',
    'name' => 'MILL ROAD(SETABGANJ)',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281458',
    ),
    'enabled' => true,
  ),
  762 => 
  array (
    'id' => '7763',
    'bank_id' => '38',
    'name' => 'NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281632',
    ),
    'enabled' => true,
  ),
  763 => 
  array (
    'id' => '7764',
    'bank_id' => '38',
    'name' => 'OSMANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281724',
    ),
    'enabled' => true,
  ),
  764 => 
  array (
    'id' => '7765',
    'bank_id' => '38',
    'name' => 'PAKERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281753',
    ),
    'enabled' => true,
  ),
  765 => 
  array (
    'id' => '7766',
    'bank_id' => '38',
    'name' => 'PARBATIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281816',
    ),
    'enabled' => true,
  ),
  766 => 
  array (
    'id' => '7767',
    'bank_id' => '38',
    'name' => 'PHULBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281874',
    ),
    'enabled' => true,
  ),
  767 => 
  array (
    'id' => '7768',
    'bank_id' => '38',
    'name' => 'PULHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200281937',
    ),
    'enabled' => true,
  ),
  768 => 
  array (
    'id' => '7769',
    'bank_id' => '38',
    'name' => 'RANIGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200282057',
    ),
    'enabled' => true,
  ),
  769 => 
  array (
    'id' => '7770',
    'bank_id' => '38',
    'name' => 'SETABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200282178',
    ),
    'enabled' => true,
  ),
  770 => 
  array (
    'id' => '7771',
    'bank_id' => '38',
    'name' => 'SHAHID MAHBUB CANTON',
    'bank_branch_data' => 
    array (
      'routing_no' => '200282202',
    ),
    'enabled' => true,
  ),
  771 => 
  array (
    'id' => '7772',
    'bank_id' => '38',
    'name' => 'SHEIKPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200282231',
    ),
    'enabled' => true,
  ),
  772 => 
  array (
    'id' => '7773',
    'bank_id' => '38',
    'name' => 'STATION ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200282323',
    ),
    'enabled' => true,
  ),
  773 => 
  array (
    'id' => '7774',
    'bank_id' => '38',
    'name' => 'SUIHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200282352',
    ),
    'enabled' => true,
  ),
  774 => 
  array (
    'id' => '7775',
    'bank_id' => '38',
    'name' => 'ALFADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290049',
    ),
    'enabled' => true,
  ),
  775 => 
  array (
    'id' => '7776',
    'bank_id' => '38',
    'name' => 'BHANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290281',
    ),
    'enabled' => true,
  ),
  776 => 
  array (
    'id' => '7777',
    'bank_id' => '38',
    'name' => 'BISWA ZAKER MANJIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290328',
    ),
    'enabled' => true,
  ),
  777 => 
  array (
    'id' => '7778',
    'bank_id' => '38',
    'name' => 'BOALMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290344',
    ),
    'enabled' => true,
  ),
  778 => 
  array (
    'id' => '7779',
    'bank_id' => '38',
    'name' => 'CHAR BHADRASAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290436',
    ),
    'enabled' => true,
  ),
  779 => 
  array (
    'id' => '7780',
    'bank_id' => '38',
    'name' => 'COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290494',
    ),
    'enabled' => true,
  ),
  780 => 
  array (
    'id' => '7781',
    'bank_id' => '38',
    'name' => 'FARIDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290528',
    ),
    'enabled' => true,
  ),
  781 => 
  array (
    'id' => '7782',
    'bank_id' => '38',
    'name' => 'GOALCHAMAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290610',
    ),
    'enabled' => true,
  ),
  782 => 
  array (
    'id' => '7783',
    'bank_id' => '38',
    'name' => 'HAJI GANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290702',
    ),
    'enabled' => true,
  ),
  783 => 
  array (
    'id' => '7784',
    'bank_id' => '38',
    'name' => 'HATKRISHNAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290731',
    ),
    'enabled' => true,
  ),
  784 => 
  array (
    'id' => '7785',
    'bank_id' => '38',
    'name' => 'KAMARKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290881',
    ),
    'enabled' => true,
  ),
  785 => 
  array (
    'id' => '7786',
    'bank_id' => '38',
    'name' => 'KANAIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290915',
    ),
    'enabled' => true,
  ),
  786 => 
  array (
    'id' => '7787',
    'bank_id' => '38',
    'name' => 'KHALILPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200290973',
    ),
    'enabled' => true,
  ),
  787 => 
  array (
    'id' => '7788',
    'bank_id' => '38',
    'name' => 'MADHU KHALI UPA-ZILLA COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291064',
    ),
    'enabled' => true,
  ),
  788 => 
  array (
    'id' => '7789',
    'bank_id' => '38',
    'name' => 'MADHUKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291093',
    ),
    'enabled' => true,
  ),
  789 => 
  array (
    'id' => '7790',
    'bank_id' => '38',
    'name' => 'MOYENDIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291156',
    ),
    'enabled' => true,
  ),
  790 => 
  array (
    'id' => '7791',
    'bank_id' => '38',
    'name' => 'NAGARKANDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291185',
    ),
    'enabled' => true,
  ),
  791 => 
  array (
    'id' => '7792',
    'bank_id' => '38',
    'name' => 'SADAR UPAZILA COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291248',
    ),
    'enabled' => true,
  ),
  792 => 
  array (
    'id' => '7793',
    'bank_id' => '38',
    'name' => 'SADARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291277',
    ),
    'enabled' => true,
  ),
  793 => 
  array (
    'id' => '7794',
    'bank_id' => '38',
    'name' => 'SALTA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291301',
    ),
    'enabled' => true,
  ),
  794 => 
  array (
    'id' => '7795',
    'bank_id' => '38',
    'name' => 'SHIRGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291369',
    ),
    'enabled' => true,
  ),
  795 => 
  array (
    'id' => '7796',
    'bank_id' => '38',
    'name' => 'TALMA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291422',
    ),
    'enabled' => true,
  ),
  796 => 
  array (
    'id' => '7797',
    'bank_id' => '38',
    'name' => 'TEPAKHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200291451',
    ),
    'enabled' => true,
  ),
  797 => 
  array (
    'id' => '7798',
    'bank_id' => '38',
    'name' => 'BAKTERMUNSHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300197',
    ),
    'enabled' => true,
  ),
  798 => 
  array (
    'id' => '7799',
    'bank_id' => '38',
    'name' => 'CHHAGALNAIYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300313',
    ),
    'enabled' => true,
  ),
  799 => 
  array (
    'id' => '7800',
    'bank_id' => '38',
    'name' => 'DAGANBHUIYAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300371',
    ),
    'enabled' => true,
  ),
  800 => 
  array (
    'id' => '7801',
    'bank_id' => '38',
    'name' => 'FENI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300526',
    ),
    'enabled' => true,
  ),
  801 => 
  array (
    'id' => '7802',
    'bank_id' => '38',
    'name' => 'FULGAZI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300618',
    ),
    'enabled' => true,
  ),
  802 => 
  array (
    'id' => '7803',
    'bank_id' => '38',
    'name' => 'GUTHUMA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300676',
    ),
    'enabled' => true,
  ),
  803 => 
  array (
    'id' => '7804',
    'bank_id' => '38',
    'name' => 'ISLAMPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300739',
    ),
    'enabled' => true,
  ),
  804 => 
  array (
    'id' => '7805',
    'bank_id' => '38',
    'name' => 'LASKARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200300971',
    ),
    'enabled' => true,
  ),
  805 => 
  array (
    'id' => '7806',
    'bank_id' => '38',
    'name' => 'LEMUA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301004',
    ),
    'enabled' => true,
  ),
  806 => 
  array (
    'id' => '7807',
    'bank_id' => '38',
    'name' => 'MATIAGODHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301033',
    ),
    'enabled' => true,
  ),
  807 => 
  array (
    'id' => '7808',
    'bank_id' => '38',
    'name' => 'MOHIPAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301062',
    ),
    'enabled' => true,
  ),
  808 => 
  array (
    'id' => '7809',
    'bank_id' => '38',
    'name' => 'MUNSHIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301154',
    ),
    'enabled' => true,
  ),
  809 => 
  array (
    'id' => '7810',
    'bank_id' => '38',
    'name' => 'PANCHGACHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301246',
    ),
    'enabled' => true,
  ),
  810 => 
  array (
    'id' => '7811',
    'bank_id' => '38',
    'name' => 'PARSHURAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301275',
    ),
    'enabled' => true,
  ),
  811 => 
  array (
    'id' => '7812',
    'bank_id' => '38',
    'name' => 'SADAR UPAZILA COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301338',
    ),
    'enabled' => true,
  ),
  812 => 
  array (
    'id' => '7813',
    'bank_id' => '38',
    'name' => 'SELONIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301420',
    ),
    'enabled' => true,
  ),
  813 => 
  array (
    'id' => '7814',
    'bank_id' => '38',
    'name' => 'SONAGAZI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200301488',
    ),
    'enabled' => true,
  ),
  814 => 
  array (
    'id' => '7815',
    'bank_id' => '38',
    'name' => 'BHARATKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320164',
    ),
    'enabled' => true,
  ),
  815 => 
  array (
    'id' => '7816',
    'bank_id' => '38',
    'name' => 'BIRATHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320193',
    ),
    'enabled' => true,
  ),
  816 => 
  array (
    'id' => '7817',
    'bank_id' => '38',
    'name' => 'BONARPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320227',
    ),
    'enabled' => true,
  ),
  817 => 
  array (
    'id' => '7818',
    'bank_id' => '38',
    'name' => 'FASHITALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320430',
    ),
    'enabled' => true,
  ),
  818 => 
  array (
    'id' => '7819',
    'bank_id' => '38',
    'name' => 'FULCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320469',
    ),
    'enabled' => true,
  ),
  819 => 
  array (
    'id' => '7820',
    'bank_id' => '38',
    'name' => 'GAIBANDHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320522',
    ),
    'enabled' => true,
  ),
  820 => 
  array (
    'id' => '7821',
    'bank_id' => '38',
    'name' => 'GOBINDAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320580',
    ),
    'enabled' => true,
  ),
  821 => 
  array (
    'id' => '7822',
    'bank_id' => '38',
    'name' => 'KAMARJANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320672',
    ),
    'enabled' => true,
  ),
  822 => 
  array (
    'id' => '7823',
    'bank_id' => '38',
    'name' => 'KAMDIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320735',
    ),
    'enabled' => true,
  ),
  823 => 
  array (
    'id' => '7824',
    'bank_id' => '38',
    'name' => 'D.B. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320919',
    ),
    'enabled' => true,
  ),
  824 => 
  array (
    'id' => '7825',
    'bank_id' => '38',
    'name' => 'MOHIMAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200320977',
    ),
    'enabled' => true,
  ),
  825 => 
  array (
    'id' => '7826',
    'bank_id' => '38',
    'name' => 'PALASHBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200321097',
    ),
    'enabled' => true,
  ),
  826 => 
  array (
    'id' => '7827',
    'bank_id' => '38',
    'name' => 'PURAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200321189',
    ),
    'enabled' => true,
  ),
  827 => 
  array (
    'id' => '7828',
    'bank_id' => '38',
    'name' => 'SADULLAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200321242',
    ),
    'enabled' => true,
  ),
  828 => 
  array (
    'id' => '7829',
    'bank_id' => '38',
    'name' => 'SAGHATTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200321271',
    ),
    'enabled' => true,
  ),
  829 => 
  array (
    'id' => '7830',
    'bank_id' => '38',
    'name' => 'SUNDARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200321305',
    ),
    'enabled' => true,
  ),
  830 => 
  array (
    'id' => '7831',
    'bank_id' => '38',
    'name' => 'B.A.R.I.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330109',
    ),
    'enabled' => true,
  ),
  831 => 
  array (
    'id' => '7832',
    'bank_id' => '38',
    'name' => 'BARMIBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330138',
    ),
    'enabled' => true,
  ),
  832 => 
  array (
    'id' => '7833',
    'bank_id' => '38',
    'name' => 'BHAWAL JAMALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330196',
    ),
    'enabled' => true,
  ),
  833 => 
  array (
    'id' => '7834',
    'bank_id' => '38',
    'name' => 'BOF GAZIPUR CANTT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330259',
    ),
    'enabled' => true,
  ),
  834 => 
  array (
    'id' => '7835',
    'bank_id' => '38',
    'name' => 'BRRI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330312',
    ),
    'enabled' => true,
  ),
  835 => 
  array (
    'id' => '7836',
    'bank_id' => '38',
    'name' => 'BSCIC I/A',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330341',
    ),
    'enabled' => true,
  ),
  836 => 
  array (
    'id' => '7837',
    'bank_id' => '38',
    'name' => 'BSMR AGR.UNIVERSITY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330370',
    ),
    'enabled' => true,
  ),
  837 => 
  array (
    'id' => '7838',
    'bank_id' => '38',
    'name' => 'GAZIPUR COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330583',
    ),
    'enabled' => true,
  ),
  838 => 
  array (
    'id' => '7839',
    'bank_id' => '38',
    'name' => 'GAZIPUR SADAR THANA COMPLEX-2',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330617',
    ),
    'enabled' => true,
  ),
  839 => 
  array (
    'id' => '7840',
    'bank_id' => '38',
    'name' => 'JATIO BISWA BIDYALAYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330709',
    ),
    'enabled' => true,
  ),
  840 => 
  array (
    'id' => '7841',
    'bank_id' => '38',
    'name' => 'JOYDEBPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330738',
    ),
    'enabled' => true,
  ),
  841 => 
  array (
    'id' => '7842',
    'bank_id' => '38',
    'name' => 'KALIAKOIR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330796',
    ),
    'enabled' => true,
  ),
  842 => 
  array (
    'id' => '7843',
    'bank_id' => '38',
    'name' => 'KALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330820',
    ),
    'enabled' => true,
  ),
  843 => 
  array (
    'id' => '7844',
    'bank_id' => '38',
    'name' => 'KAPASIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200330888',
    ),
    'enabled' => true,
  ),
  844 => 
  array (
    'id' => '7845',
    'bank_id' => '38',
    'name' => 'PUBAIL BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331274',
    ),
    'enabled' => true,
  ),
  845 => 
  array (
    'id' => '7846',
    'bank_id' => '38',
    'name' => 'RAJENDRAPUR CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331337',
    ),
    'enabled' => true,
  ),
  846 => 
  array (
    'id' => '7847',
    'bank_id' => '38',
    'name' => 'SHAFIPUR ANSAR ACADEMY COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331458',
    ),
    'enabled' => true,
  ),
  847 => 
  array (
    'id' => '7848',
    'bank_id' => '38',
    'name' => 'SINGHOSREE BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331474',
    ),
    'enabled' => true,
  ),
  848 => 
  array (
    'id' => '7849',
    'bank_id' => '38',
    'name' => 'SREEPUR THANA H/Q.',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331511',
    ),
    'enabled' => true,
  ),
  849 => 
  array (
    'id' => '7850',
    'bank_id' => '38',
    'name' => 'STATION ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331540',
    ),
    'enabled' => true,
  ),
  850 => 
  array (
    'id' => '7851',
    'bank_id' => '38',
    'name' => 'TONGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331632',
    ),
    'enabled' => true,
  ),
  851 => 
  array (
    'id' => '7852',
    'bank_id' => '38',
    'name' => 'TONGI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200331661',
    ),
    'enabled' => true,
  ),
  852 => 
  array (
    'id' => '7853',
    'bank_id' => '38',
    'name' => 'BANAGRAM BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350071',
    ),
    'enabled' => true,
  ),
  853 => 
  array (
    'id' => '7854',
    'bank_id' => '38',
    'name' => 'BASHBARIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350118',
    ),
    'enabled' => true,
  ),
  854 => 
  array (
    'id' => '7855',
    'bank_id' => '38',
    'name' => 'BHATIA PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350163',
    ),
    'enabled' => true,
  ),
  855 => 
  array (
    'id' => '7856',
    'bank_id' => '38',
    'name' => 'BOULTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350226',
    ),
    'enabled' => true,
  ),
  856 => 
  array (
    'id' => '7857',
    'bank_id' => '38',
    'name' => 'GHAGORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350284',
    ),
    'enabled' => true,
  ),
  857 => 
  array (
    'id' => '7858',
    'bank_id' => '38',
    'name' => 'GOPALGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350376',
    ),
    'enabled' => true,
  ),
  858 => 
  array (
    'id' => '7859',
    'bank_id' => '38',
    'name' => 'KASHIANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350589',
    ),
    'enabled' => true,
  ),
  859 => 
  array (
    'id' => '7860',
    'bank_id' => '38',
    'name' => 'D.C. COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350705',
    ),
    'enabled' => true,
  ),
  860 => 
  array (
    'id' => '7861',
    'bank_id' => '38',
    'name' => 'MUKSUDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350734',
    ),
    'enabled' => true,
  ),
  861 => 
  array (
    'id' => '7862',
    'bank_id' => '38',
    'name' => 'PANCHURIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350792',
    ),
    'enabled' => true,
  ),
  862 => 
  array (
    'id' => '7863',
    'bank_id' => '38',
    'name' => 'PATGATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200350826',
    ),
    'enabled' => true,
  ),
  863 => 
  array (
    'id' => '7864',
    'bank_id' => '38',
    'name' => 'TUNGI PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200351096',
    ),
    'enabled' => true,
  ),
  864 => 
  array (
    'id' => '7865',
    'bank_id' => '38',
    'name' => 'AJMIRIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360045',
    ),
    'enabled' => true,
  ),
  865 => 
  array (
    'id' => '7866',
    'bank_id' => '38',
    'name' => 'AUSHKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360108',
    ),
    'enabled' => true,
  ),
  866 => 
  array (
    'id' => '7867',
    'bank_id' => '38',
    'name' => 'BAHUBAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360137',
    ),
    'enabled' => true,
  ),
  867 => 
  array (
    'id' => '7868',
    'bank_id' => '38',
    'name' => 'BANIACHANG',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360166',
    ),
    'enabled' => true,
  ),
  868 => 
  array (
    'id' => '7869',
    'bank_id' => '38',
    'name' => 'CHOWDHURIBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360287',
    ),
    'enabled' => true,
  ),
  869 => 
  array (
    'id' => '7870',
    'bank_id' => '38',
    'name' => 'CHUNARUGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360340',
    ),
    'enabled' => true,
  ),
  870 => 
  array (
    'id' => '7871',
    'bank_id' => '38',
    'name' => 'ENAYETGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360432',
    ),
    'enabled' => true,
  ),
  871 => 
  array (
    'id' => '7872',
    'bank_id' => '38',
    'name' => 'HABIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360616',
    ),
    'enabled' => true,
  ),
  872 => 
  array (
    'id' => '7873',
    'bank_id' => '38',
    'name' => 'KAKAILCHEO',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360737',
    ),
    'enabled' => true,
  ),
  873 => 
  array (
    'id' => '7874',
    'bank_id' => '38',
    'name' => 'LAKHAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360858',
    ),
    'enabled' => true,
  ),
  874 => 
  array (
    'id' => '7875',
    'bank_id' => '38',
    'name' => 'MADHABPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200360887',
    ),
    'enabled' => true,
  ),
  875 => 
  array (
    'id' => '7876',
    'bank_id' => '38',
    'name' => 'NABIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200361099',
    ),
    'enabled' => true,
  ),
  876 => 
  array (
    'id' => '7877',
    'bank_id' => '38',
    'name' => 'SHAYESTAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200361394',
    ),
    'enabled' => true,
  ),
  877 => 
  array (
    'id' => '7878',
    'bank_id' => '38',
    'name' => 'AKKELPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380041',
    ),
    'enabled' => true,
  ),
  878 => 
  array (
    'id' => '7879',
    'bank_id' => '38',
    'name' => 'HATIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380346',
    ),
    'enabled' => true,
  ),
  879 => 
  array (
    'id' => '7880',
    'bank_id' => '38',
    'name' => 'JOYPURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380409',
    ),
    'enabled' => true,
  ),
  880 => 
  array (
    'id' => '7881',
    'bank_id' => '38',
    'name' => 'JOYPURHAT EAST',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380438',
    ),
    'enabled' => true,
  ),
  881 => 
  array (
    'id' => '7882',
    'bank_id' => '38',
    'name' => 'KALAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380467',
    ),
    'enabled' => true,
  ),
  882 => 
  array (
    'id' => '7883',
    'bank_id' => '38',
    'name' => 'KHETLAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380496',
    ),
    'enabled' => true,
  ),
  883 => 
  array (
    'id' => '7884',
    'bank_id' => '38',
    'name' => 'PANCHBIBI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380670',
    ),
    'enabled' => true,
  ),
  884 => 
  array (
    'id' => '7885',
    'bank_id' => '38',
    'name' => 'PUNATHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200380704',
    ),
    'enabled' => true,
  ),
  885 => 
  array (
    'id' => '7886',
    'bank_id' => '38',
    'name' => 'BAKSHIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390107',
    ),
    'enabled' => true,
  ),
  886 => 
  array (
    'id' => '7887',
    'bank_id' => '38',
    'name' => 'BSCIC INDUSTRIAL ESTATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390378',
    ),
    'enabled' => true,
  ),
  887 => 
  array (
    'id' => '7888',
    'bank_id' => '38',
    'name' => 'CHAPARKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390431',
    ),
    'enabled' => true,
  ),
  888 => 
  array (
    'id' => '7889',
    'bank_id' => '38',
    'name' => 'DEWANGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390499',
    ),
    'enabled' => true,
  ),
  889 => 
  array (
    'id' => '7890',
    'bank_id' => '38',
    'name' => 'DEWANGANJ SUGAR MILLS',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390523',
    ),
    'enabled' => true,
  ),
  890 => 
  array (
    'id' => '7891',
    'bank_id' => '38',
    'name' => 'HAZRA BARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390736',
    ),
    'enabled' => true,
  ),
  891 => 
  array (
    'id' => '7892',
    'bank_id' => '38',
    'name' => 'ISLAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390765',
    ),
    'enabled' => true,
  ),
  892 => 
  array (
    'id' => '7893',
    'bank_id' => '38',
    'name' => 'JAMALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390857',
    ),
    'enabled' => true,
  ),
  893 => 
  array (
    'id' => '7894',
    'bank_id' => '38',
    'name' => 'JAMALPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200390886',
    ),
    'enabled' => true,
  ),
  894 => 
  array (
    'id' => '7895',
    'bank_id' => '38',
    'name' => 'JAMUNA SARKARKHANA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391001',
    ),
    'enabled' => true,
  ),
  895 => 
  array (
    'id' => '7896',
    'bank_id' => '38',
    'name' => 'BORO MASJID ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391098',
    ),
    'enabled' => true,
  ),
  896 => 
  array (
    'id' => '7897',
    'bank_id' => '38',
    'name' => 'MADARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391151',
    ),
    'enabled' => true,
  ),
  897 => 
  array (
    'id' => '7898',
    'bank_id' => '38',
    'name' => 'MEDICAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391243',
    ),
    'enabled' => true,
  ),
  898 => 
  array (
    'id' => '7899',
    'bank_id' => '38',
    'name' => 'MELANDAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391272',
    ),
    'enabled' => true,
  ),
  899 => 
  array (
    'id' => '7900',
    'bank_id' => '38',
    'name' => 'NANDINA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391306',
    ),
    'enabled' => true,
  ),
  900 => 
  array (
    'id' => '7901',
    'bank_id' => '38',
    'name' => 'SANANDABARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391456',
    ),
    'enabled' => true,
  ),
  901 => 
  array (
    'id' => '7902',
    'bank_id' => '38',
    'name' => 'SARISHABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391485',
    ),
    'enabled' => true,
  ),
  902 => 
  array (
    'id' => '7903',
    'bank_id' => '38',
    'name' => 'SARISHABARI UPAZILLA COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391519',
    ),
    'enabled' => true,
  ),
  903 => 
  array (
    'id' => '7904',
    'bank_id' => '38',
    'name' => 'SREEPUR KUMARIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200391630',
    ),
    'enabled' => true,
  ),
  904 => 
  array (
    'id' => '7905',
    'bank_id' => '38',
    'name' => 'ALPHA MILL GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410045',
    ),
    'enabled' => true,
  ),
  905 => 
  array (
    'id' => '7906',
    'bank_id' => '38',
    'name' => 'B.I.S.E',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410074',
    ),
    'enabled' => true,
  ),
  906 => 
  array (
    'id' => '7907',
    'bank_id' => '38',
    'name' => 'BAGACHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410108',
    ),
    'enabled' => true,
  ),
  907 => 
  array (
    'id' => '7908',
    'bank_id' => '38',
    'name' => 'BAGHERPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410137',
    ),
    'enabled' => true,
  ),
  908 => 
  array (
    'id' => '7909',
    'bank_id' => '38',
    'name' => 'BARI NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410195',
    ),
    'enabled' => true,
  ),
  909 => 
  array (
    'id' => '7910',
    'bank_id' => '38',
    'name' => 'BASUNDIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410229',
    ),
    'enabled' => true,
  ),
  910 => 
  array (
    'id' => '7911',
    'bank_id' => '38',
    'name' => 'BENAPOLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410287',
    ),
    'enabled' => true,
  ),
  911 => 
  array (
    'id' => '7912',
    'bank_id' => '38',
    'name' => 'BHATPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410379',
    ),
    'enabled' => true,
  ),
  912 => 
  array (
    'id' => '7913',
    'bank_id' => '38',
    'name' => 'CHARAVITA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410461',
    ),
    'enabled' => true,
  ),
  913 => 
  array (
    'id' => '7914',
    'bank_id' => '38',
    'name' => 'CHINATOLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410524',
    ),
    'enabled' => true,
  ),
  914 => 
  array (
    'id' => '7915',
    'bank_id' => '38',
    'name' => 'CHOWGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410553',
    ),
    'enabled' => true,
  ),
  915 => 
  array (
    'id' => '7916',
    'bank_id' => '38',
    'name' => 'CHURAMANKATHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410582',
    ),
    'enabled' => true,
  ),
  916 => 
  array (
    'id' => '7917',
    'bank_id' => '38',
    'name' => 'DHALAGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410645',
    ),
    'enabled' => true,
  ),
  917 => 
  array (
    'id' => '7918',
    'bank_id' => '38',
    'name' => 'GARIB SHAH SARAK',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410708',
    ),
    'enabled' => true,
  ),
  918 => 
  array (
    'id' => '7919',
    'bank_id' => '38',
    'name' => 'J. CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200410887',
    ),
    'enabled' => true,
  ),
  919 => 
  array (
    'id' => '7920',
    'bank_id' => '38',
    'name' => 'JESSORE BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411002',
    ),
    'enabled' => true,
  ),
  920 => 
  array (
    'id' => '7921',
    'bank_id' => '38',
    'name' => 'JESSORE CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411060',
    ),
    'enabled' => true,
  ),
  921 => 
  array (
    'id' => '7922',
    'bank_id' => '38',
    'name' => 'JHIKARGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411099',
    ),
    'enabled' => true,
  ),
  922 => 
  array (
    'id' => '7923',
    'bank_id' => '38',
    'name' => 'KARBALA ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411152',
    ),
    'enabled' => true,
  ),
  923 => 
  array (
    'id' => '7924',
    'bank_id' => '38',
    'name' => 'KESHABPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411215',
    ),
    'enabled' => true,
  ),
  924 => 
  array (
    'id' => '7925',
    'bank_id' => '38',
    'name' => 'KHAJURA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411257',
    ),
    'enabled' => true,
  ),
  925 => 
  array (
    'id' => '7926',
    'bank_id' => '38',
    'name' => 'MONIRAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411510',
    ),
    'enabled' => true,
  ),
  926 => 
  array (
    'id' => '7927',
    'bank_id' => '38',
    'name' => 'NARIKEL BARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411578',
    ),
    'enabled' => true,
  ),
  927 => 
  array (
    'id' => '7928',
    'bank_id' => '38',
    'name' => 'NOAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411631',
    ),
    'enabled' => true,
  ),
  928 => 
  array (
    'id' => '7929',
    'bank_id' => '38',
    'name' => 'PAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411723',
    ),
    'enabled' => true,
  ),
  929 => 
  array (
    'id' => '7930',
    'bank_id' => '38',
    'name' => 'PURAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411815',
    ),
    'enabled' => true,
  ),
  930 => 
  array (
    'id' => '7931',
    'bank_id' => '38',
    'name' => 'R.N. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411844',
    ),
    'enabled' => true,
  ),
  931 => 
  array (
    'id' => '7932',
    'bank_id' => '38',
    'name' => 'RAILGATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411907',
    ),
    'enabled' => true,
  ),
  932 => 
  array (
    'id' => '7933',
    'bank_id' => '38',
    'name' => 'RAJGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200411994',
    ),
    'enabled' => true,
  ),
  933 => 
  array (
    'id' => '7934',
    'bank_id' => '38',
    'name' => 'RUPDIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200412027',
    ),
    'enabled' => true,
  ),
  934 => 
  array (
    'id' => '7935',
    'bank_id' => '38',
    'name' => 'SAGARDI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200412085',
    ),
    'enabled' => true,
  ),
  935 => 
  array (
    'id' => '7936',
    'bank_id' => '38',
    'name' => 'SALUA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200412119',
    ),
    'enabled' => true,
  ),
  936 => 
  array (
    'id' => '7937',
    'bank_id' => '38',
    'name' => 'SARSHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200412148',
    ),
    'enabled' => true,
  ),
  937 => 
  array (
    'id' => '7938',
    'bank_id' => '38',
    'name' => 'TRIMOHINI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200412230',
    ),
    'enabled' => true,
  ),
  938 => 
  array (
    'id' => '7939',
    'bank_id' => '38',
    'name' => 'ULASHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200412269',
    ),
    'enabled' => true,
  ),
  939 => 
  array (
    'id' => '7940',
    'bank_id' => '38',
    'name' => 'JHAL.COURT BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '200420280',
    ),
    'enabled' => true,
  ),
  940 => 
  array (
    'id' => '7941',
    'bank_id' => '38',
    'name' => 'KATHALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200420372',
    ),
    'enabled' => true,
  ),
  941 => 
  array (
    'id' => '7942',
    'bank_id' => '38',
    'name' => 'MOLLARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200420406',
    ),
    'enabled' => true,
  ),
  942 => 
  array (
    'id' => '7943',
    'bank_id' => '38',
    'name' => 'NACHAN MAHAL HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '200420464',
    ),
    'enabled' => true,
  ),
  943 => 
  array (
    'id' => '7944',
    'bank_id' => '38',
    'name' => 'NALCHITY',
    'bank_branch_data' => 
    array (
      'routing_no' => '200420493',
    ),
    'enabled' => true,
  ),
  944 => 
  array (
    'id' => '7945',
    'bank_id' => '38',
    'name' => 'RAJAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200420556',
    ),
    'enabled' => true,
  ),
  945 => 
  array (
    'id' => '7946',
    'bank_id' => '38',
    'name' => 'BARO BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440073',
    ),
    'enabled' => true,
  ),
  946 => 
  array (
    'id' => '7947',
    'bank_id' => '38',
    'name' => 'BORODOPADI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440286',
    ),
    'enabled' => true,
  ),
  947 => 
  array (
    'id' => '7948',
    'bank_id' => '38',
    'name' => 'GARAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440402',
    ),
    'enabled' => true,
  ),
  948 => 
  array (
    'id' => '7949',
    'bank_id' => '38',
    'name' => 'HARINAKUNDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440499',
    ),
    'enabled' => true,
  ),
  949 => 
  array (
    'id' => '7950',
    'bank_id' => '38',
    'name' => 'HATGOPALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440552',
    ),
    'enabled' => true,
  ),
  950 => 
  array (
    'id' => '7951',
    'bank_id' => '38',
    'name' => 'JHENAIDAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440644',
    ),
    'enabled' => true,
  ),
  951 => 
  array (
    'id' => '7952',
    'bank_id' => '38',
    'name' => 'ARAPPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440673',
    ),
    'enabled' => true,
  ),
  952 => 
  array (
    'id' => '7953',
    'bank_id' => '38',
    'name' => 'KALIGANJ-2',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440828',
    ),
    'enabled' => true,
  ),
  953 => 
  array (
    'id' => '7954',
    'bank_id' => '38',
    'name' => 'KOLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200440978',
    ),
    'enabled' => true,
  ),
  954 => 
  array (
    'id' => '7955',
    'bank_id' => '38',
    'name' => 'KOTCHANDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441001',
    ),
    'enabled' => true,
  ),
  955 => 
  array (
    'id' => '7956',
    'bank_id' => '38',
    'name' => 'MOBARAKGANJ SUGAR MILLS',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441030',
    ),
    'enabled' => true,
  ),
  956 => 
  array (
    'id' => '7957',
    'bank_id' => '38',
    'name' => 'MODHUPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441069',
    ),
    'enabled' => true,
  ),
  957 => 
  array (
    'id' => '7958',
    'bank_id' => '38',
    'name' => 'MOHESHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441098',
    ),
    'enabled' => true,
  ),
  958 => 
  array (
    'id' => '7959',
    'bank_id' => '38',
    'name' => 'RABINARIKAL BARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441122',
    ),
    'enabled' => true,
  ),
  959 => 
  array (
    'id' => '7960',
    'bank_id' => '38',
    'name' => 'SAILKUPA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441180',
    ),
    'enabled' => true,
  ),
  960 => 
  array (
    'id' => '7961',
    'bank_id' => '38',
    'name' => 'SHAEIKHPARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200441243',
    ),
    'enabled' => true,
  ),
  961 => 
  array (
    'id' => '7962',
    'bank_id' => '38',
    'name' => 'DIGHINALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460040',
    ),
    'enabled' => true,
  ),
  962 => 
  array (
    'id' => '7963',
    'bank_id' => '38',
    'name' => 'KHAGRACHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460079',
    ),
    'enabled' => true,
  ),
  963 => 
  array (
    'id' => '7964',
    'bank_id' => '38',
    'name' => 'LAXMICHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460132',
    ),
    'enabled' => true,
  ),
  964 => 
  array (
    'id' => '7965',
    'bank_id' => '38',
    'name' => 'MAHALCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460161',
    ),
    'enabled' => true,
  ),
  965 => 
  array (
    'id' => '7966',
    'bank_id' => '38',
    'name' => 'MANIKCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460190',
    ),
    'enabled' => true,
  ),
  966 => 
  array (
    'id' => '7967',
    'bank_id' => '38',
    'name' => 'MATIRANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460224',
    ),
    'enabled' => true,
  ),
  967 => 
  array (
    'id' => '7968',
    'bank_id' => '38',
    'name' => 'PANCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460282',
    ),
    'enabled' => true,
  ),
  968 => 
  array (
    'id' => '7969',
    'bank_id' => '38',
    'name' => 'RAMGARH',
    'bank_branch_data' => 
    array (
      'routing_no' => '200460316',
    ),
    'enabled' => true,
  ),
  969 => 
  array (
    'id' => '7970',
    'bank_id' => '38',
    'name' => 'BANIAKHALI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470164',
    ),
    'enabled' => true,
  ),
  970 => 
  array (
    'id' => '7971',
    'bank_id' => '38',
    'name' => 'BATIAGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470319',
    ),
    'enabled' => true,
  ),
  971 => 
  array (
    'id' => '7972',
    'bank_id' => '38',
    'name' => 'BOYRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470401',
    ),
    'enabled' => true,
  ),
  972 => 
  array (
    'id' => '7973',
    'bank_id' => '38',
    'name' => 'CABLE SHILPA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470469',
    ),
    'enabled' => true,
  ),
  973 => 
  array (
    'id' => '7974',
    'bank_id' => '38',
    'name' => 'CHALNA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470498',
    ),
    'enabled' => true,
  ),
  974 => 
  array (
    'id' => '7975',
    'bank_id' => '38',
    'name' => 'CUSTOM HOUSE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470614',
    ),
    'enabled' => true,
  ),
  975 => 
  array (
    'id' => '7976',
    'bank_id' => '38',
    'name' => 'DAULATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470706',
    ),
    'enabled' => true,
  ),
  976 => 
  array (
    'id' => '7977',
    'bank_id' => '38',
    'name' => 'DAULATPUR COLLEGE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470735',
    ),
    'enabled' => true,
  ),
  977 => 
  array (
    'id' => '7978',
    'bank_id' => '38',
    'name' => 'DIGHALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470764',
    ),
    'enabled' => true,
  ),
  978 => 
  array (
    'id' => '7979',
    'bank_id' => '38',
    'name' => 'DUMURIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470793',
    ),
    'enabled' => true,
  ),
  979 => 
  array (
    'id' => '7980',
    'bank_id' => '38',
    'name' => 'FULBARI GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200470856',
    ),
    'enabled' => true,
  ),
  980 => 
  array (
    'id' => '7981',
    'bank_id' => '38',
    'name' => 'K.D.A. NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '200471213',
    ),
    'enabled' => true,
  ),
  981 => 
  array (
    'id' => '7982',
    'bank_id' => '38',
    'name' => 'KAZDIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200471363',
    ),
    'enabled' => true,
  ),
  982 => 
  array (
    'id' => '7983',
    'bank_id' => '38',
    'name' => 'KHALISHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200471455',
    ),
    'enabled' => true,
  ),
  983 => 
  array (
    'id' => '7984',
    'bank_id' => '38',
    'name' => 'KHULNA CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '200471600',
    ),
    'enabled' => true,
  ),
  984 => 
  array (
    'id' => '7985',
    'bank_id' => '38',
    'name' => 'KHULNA SHIPYARD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200471668',
    ),
    'enabled' => true,
  ),
  985 => 
  array (
    'id' => '7986',
    'bank_id' => '38',
    'name' => 'KOYRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200471789',
    ),
    'enabled' => true,
  ),
  986 => 
  array (
    'id' => '7987',
    'bank_id' => '38',
    'name' => 'PAIKGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200472083',
    ),
    'enabled' => true,
  ),
  987 => 
  array (
    'id' => '7988',
    'bank_id' => '38',
    'name' => 'PHULTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200472146',
    ),
    'enabled' => true,
  ),
  988 => 
  array (
    'id' => '7989',
    'bank_id' => '38',
    'name' => 'SOUTH CENTRAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200472296',
    ),
    'enabled' => true,
  ),
  989 => 
  array (
    'id' => '7990',
    'bank_id' => '38',
    'name' => 'SHAHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200472441',
    ),
    'enabled' => true,
  ),
  990 => 
  array (
    'id' => '7991',
    'bank_id' => '38',
    'name' => 'SIR IQBAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '200472591',
    ),
    'enabled' => true,
  ),
  991 => 
  array (
    'id' => '7992',
    'bank_id' => '38',
    'name' => 'TEROKHADA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200472654',
    ),
    'enabled' => true,
  ),
  992 => 
  array (
    'id' => '7993',
    'bank_id' => '38',
    'name' => 'AUSTAGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480075',
    ),
    'enabled' => true,
  ),
  993 => 
  array (
    'id' => '7994',
    'bank_id' => '38',
    'name' => 'BAJITPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480109',
    ),
    'enabled' => true,
  ),
  994 => 
  array (
    'id' => '7995',
    'bank_id' => '38',
    'name' => 'BHAIRAB',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480196',
    ),
    'enabled' => true,
  ),
  995 => 
  array (
    'id' => '7996',
    'bank_id' => '38',
    'name' => 'CHHAYSUTI',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480288',
    ),
    'enabled' => true,
  ),
  996 => 
  array (
    'id' => '7997',
    'bank_id' => '38',
    'name' => 'DOMRA KANDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480312',
    ),
    'enabled' => true,
  ),
  997 => 
  array (
    'id' => '7998',
    'bank_id' => '38',
    'name' => 'HOSSAINPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480404',
    ),
    'enabled' => true,
  ),
  998 => 
  array (
    'id' => '7999',
    'bank_id' => '38',
    'name' => 'ITNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480433',
    ),
    'enabled' => true,
  ),
  999 => 
  array (
    'id' => '8000',
    'bank_id' => '38',
    'name' => 'KALIA CHAPRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '200480491',
    ),
    'enabled' => true,
  ),
);
    }
}
