<?php

namespace Fintech\Banco\Seeders\Branches;

use Fintech\Banco\Facades\Banco;
use Illuminate\Database\Seeder;

class Branch7Seeder extends Seeder
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
    'id' => '6001',
    'bank_id' => '33',
    'name' => 'KAMALGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175580763',
    ),
    'enabled' => true,
  ),
  1 => 
  array (
    'id' => '6002',
    'bank_id' => '33',
    'name' => 'KULAURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175580947',
    ),
    'enabled' => true,
  ),
  2 => 
  array (
    'id' => '6003',
    'bank_id' => '33',
    'name' => 'MOULAVI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581188',
    ),
    'enabled' => true,
  ),
  3 => 
  array (
    'id' => '6004',
    'bank_id' => '33',
    'name' => 'MUNSHI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581241',
    ),
    'enabled' => true,
  ),
  4 => 
  array (
    'id' => '6005',
    'bank_id' => '33',
    'name' => 'SHAMSHER NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581609',
    ),
    'enabled' => true,
  ),
  5 => 
  array (
    'id' => '6006',
    'bank_id' => '33',
    'name' => 'SHERPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581667',
    ),
    'enabled' => true,
  ),
  6 => 
  array (
    'id' => '6007',
    'bank_id' => '33',
    'name' => 'SREE MANGAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581720',
    ),
    'enabled' => true,
  ),
  7 => 
  array (
    'id' => '6008',
    'bank_id' => '33',
    'name' => 'TENGRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581788',
    ),
    'enabled' => true,
  ),
  8 => 
  array (
    'id' => '6009',
    'bank_id' => '33',
    'name' => 'WAPDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175581841',
    ),
    'enabled' => true,
  ),
  9 => 
  array (
    'id' => '6010',
    'bank_id' => '33',
    'name' => 'BHABER CHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175590287',
    ),
    'enabled' => true,
  ),
  10 => 
  array (
    'id' => '6011',
    'bank_id' => '33',
    'name' => 'DHALAGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '175590379',
    ),
    'enabled' => true,
  ),
  11 => 
  array (
    'id' => '6012',
    'bank_id' => '33',
    'name' => 'GAZARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175590461',
    ),
    'enabled' => true,
  ),
  12 => 
  array (
    'id' => '6013',
    'bank_id' => '33',
    'name' => 'ALADI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175590766',
    ),
    'enabled' => true,
  ),
  13 => 
  array (
    'id' => '6014',
    'bank_id' => '33',
    'name' => 'MUNSHIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175591031',
    ),
    'enabled' => true,
  ),
  14 => 
  array (
    'id' => '6015',
    'bank_id' => '33',
    'name' => 'NOAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175591099',
    ),
    'enabled' => true,
  ),
  15 => 
  array (
    'id' => '6016',
    'bank_id' => '33',
    'name' => 'NURPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175591123',
    ),
    'enabled' => true,
  ),
  16 => 
  array (
    'id' => '6017',
    'bank_id' => '33',
    'name' => 'SREENAGAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175591431',
    ),
    'enabled' => true,
  ),
  17 => 
  array (
    'id' => '6018',
    'bank_id' => '33',
    'name' => 'BHALUKA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175610312',
    ),
    'enabled' => true,
  ),
  18 => 
  array (
    'id' => '6019',
    'bank_id' => '33',
    'name' => 'CHAR PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175610491',
    ),
    'enabled' => true,
  ),
  19 => 
  array (
    'id' => '6020',
    'bank_id' => '33',
    'name' => 'TRISHAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '175610646',
    ),
    'enabled' => true,
  ),
  20 => 
  array (
    'id' => '6021',
    'bank_id' => '33',
    'name' => 'MUKTAGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175611690',
    ),
    'enabled' => true,
  ),
  21 => 
  array (
    'id' => '6022',
    'bank_id' => '33',
    'name' => 'MYMENSINGH(MAIN)',
    'bank_branch_data' => 
    array (
      'routing_no' => '175611845',
    ),
    'enabled' => true,
  ),
  22 => 
  array (
    'id' => '6023',
    'bank_id' => '33',
    'name' => 'SWADESHI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175612202',
    ),
    'enabled' => true,
  ),
  23 => 
  array (
    'id' => '6024',
    'bank_id' => '33',
    'name' => 'TALTOLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175612231',
    ),
    'enabled' => true,
  ),
  24 => 
  array (
    'id' => '6025',
    'bank_id' => '33',
    'name' => 'UNIVERSITY CAMPUS',
    'bank_branch_data' => 
    array (
      'routing_no' => '175612415',
    ),
    'enabled' => true,
  ),
  25 => 
  array (
    'id' => '6026',
    'bank_id' => '33',
    'name' => 'DELUABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175640058',
    ),
    'enabled' => true,
  ),
  26 => 
  array (
    'id' => '6027',
    'bank_id' => '33',
    'name' => 'MOHADEBPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175641099',
    ),
    'enabled' => true,
  ),
  27 => 
  array (
    'id' => '6028',
    'bank_id' => '33',
    'name' => 'NAOGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '175641181',
    ),
    'enabled' => true,
  ),
  28 => 
  array (
    'id' => '6029',
    'bank_id' => '33',
    'name' => 'NARAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '175650648',
    ),
    'enabled' => true,
  ),
  29 => 
  array (
    'id' => '6030',
    'bank_id' => '33',
    'name' => 'ARAIHAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175670044',
    ),
    'enabled' => true,
  ),
  30 => 
  array (
    'id' => '6031',
    'bank_id' => '33',
    'name' => 'DUPTARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175670499',
    ),
    'enabled' => true,
  ),
  31 => 
  array (
    'id' => '6032',
    'bank_id' => '33',
    'name' => 'KALIR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175670736',
    ),
    'enabled' => true,
  ),
  32 => 
  array (
    'id' => '6033',
    'bank_id' => '33',
    'name' => 'NARAYANGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175671180',
    ),
    'enabled' => true,
  ),
  33 => 
  array (
    'id' => '6034',
    'bank_id' => '33',
    'name' => 'NITAIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175671272',
    ),
    'enabled' => true,
  ),
  34 => 
  array (
    'id' => '6035',
    'bank_id' => '33',
    'name' => 'SHIBU MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '175671551',
    ),
    'enabled' => true,
  ),
  35 => 
  array (
    'id' => '6036',
    'bank_id' => '33',
    'name' => 'TAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175671751',
    ),
    'enabled' => true,
  ),
  36 => 
  array (
    'id' => '6037',
    'bank_id' => '33',
    'name' => 'BELABO',
    'bank_branch_data' => 
    array (
      'routing_no' => '175680250',
    ),
    'enabled' => true,
  ),
  37 => 
  array (
    'id' => '6038',
    'bank_id' => '33',
    'name' => 'CHARSINDUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175680342',
    ),
    'enabled' => true,
  ),
  38 => 
  array (
    'id' => '6039',
    'bank_id' => '33',
    'name' => 'GHORASAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '175680492',
    ),
    'enabled' => true,
  ),
  39 => 
  array (
    'id' => '6040',
    'bank_id' => '33',
    'name' => 'MADHABDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175680676',
    ),
    'enabled' => true,
  ),
  40 => 
  array (
    'id' => '6041',
    'bank_id' => '33',
    'name' => 'NARSHINGDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175680850',
    ),
    'enabled' => true,
  ),
  41 => 
  array (
    'id' => '6042',
    'bank_id' => '33',
    'name' => 'PALASH',
    'bank_branch_data' => 
    array (
      'routing_no' => '175680913',
    ),
    'enabled' => true,
  ),
  42 => 
  array (
    'id' => '6043',
    'bank_id' => '33',
    'name' => 'RAIPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175681091',
    ),
    'enabled' => true,
  ),
  43 => 
  array (
    'id' => '6044',
    'bank_id' => '33',
    'name' => 'KUSHUMBI KALIGONJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175690853',
    ),
    'enabled' => true,
  ),
  44 => 
  array (
    'id' => '6045',
    'bank_id' => '33',
    'name' => 'NATORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '175691094',
    ),
    'enabled' => true,
  ),
  45 => 
  array (
    'id' => '6046',
    'bank_id' => '33',
    'name' => 'CHAPAI NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175700251',
    ),
    'enabled' => true,
  ),
  46 => 
  array (
    'id' => '6047',
    'bank_id' => '33',
    'name' => 'MOHARAJ PUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175700648',
    ),
    'enabled' => true,
  ),
  47 => 
  array (
    'id' => '6048',
    'bank_id' => '33',
    'name' => 'MADAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '175720615',
    ),
    'enabled' => true,
  ),
  48 => 
  array (
    'id' => '6049',
    'bank_id' => '33',
    'name' => 'MAHANGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175720673',
    ),
    'enabled' => true,
  ),
  49 => 
  array (
    'id' => '6050',
    'bank_id' => '33',
    'name' => 'NETROKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175720736',
    ),
    'enabled' => true,
  ),
  50 => 
  array (
    'id' => '6051',
    'bank_id' => '33',
    'name' => 'SHUTIBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175730050',
    ),
    'enabled' => true,
  ),
  51 => 
  array (
    'id' => '6052',
    'bank_id' => '33',
    'name' => 'NILPHAMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175730739',
    ),
    'enabled' => true,
  ),
  52 => 
  array (
    'id' => '6053',
    'bank_id' => '33',
    'name' => 'SAYEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175730797',
    ),
    'enabled' => true,
  ),
  53 => 
  array (
    'id' => '6054',
    'bank_id' => '33',
    'name' => 'HATIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175750043',
    ),
    'enabled' => true,
  ),
  54 => 
  array (
    'id' => '6055',
    'bank_id' => '33',
    'name' => 'BASHURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175750256',
    ),
    'enabled' => true,
  ),
  55 => 
  array (
    'id' => '6056',
    'bank_id' => '33',
    'name' => 'CHOUMOHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175750672',
    ),
    'enabled' => true,
  ),
  56 => 
  array (
    'id' => '6057',
    'bank_id' => '33',
    'name' => 'DATTERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175750793',
    ),
    'enabled' => true,
  ),
  57 => 
  array (
    'id' => '6058',
    'bank_id' => '33',
    'name' => 'MAIJDEE COURT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175751576',
    ),
    'enabled' => true,
  ),
  58 => 
  array (
    'id' => '6059',
    'bank_id' => '33',
    'name' => 'SAMIR MUNSHIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175751992',
    ),
    'enabled' => true,
  ),
  59 => 
  array (
    'id' => '6060',
    'bank_id' => '33',
    'name' => 'THANARHAT BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175752425',
    ),
    'enabled' => true,
  ),
  60 => 
  array (
    'id' => '6061',
    'bank_id' => '33',
    'name' => 'ATAIKULA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175760220',
    ),
    'enabled' => true,
  ),
  61 => 
  array (
    'id' => '6062',
    'bank_id' => '33',
    'name' => 'ISHWARDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175761216',
    ),
    'enabled' => true,
  ),
  62 => 
  array (
    'id' => '6063',
    'bank_id' => '33',
    'name' => 'MALIGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175761458',
    ),
    'enabled' => true,
  ),
  63 => 
  array (
    'id' => '6064',
    'bank_id' => '33',
    'name' => 'PABNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175761782',
    ),
    'enabled' => true,
  ),
  64 => 
  array (
    'id' => '6065',
    'bank_id' => '33',
    'name' => 'SHALGARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175762110',
    ),
    'enabled' => true,
  ),
  65 => 
  array (
    'id' => '6066',
    'bank_id' => '33',
    'name' => 'PANCHAGARH',
    'bank_branch_data' => 
    array (
      'routing_no' => '175770557',
    ),
    'enabled' => true,
  ),
  66 => 
  array (
    'id' => '6067',
    'bank_id' => '33',
    'name' => 'GALACHIPA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175780497',
    ),
    'enabled' => true,
  ),
  67 => 
  array (
    'id' => '6068',
    'bank_id' => '33',
    'name' => 'KALAYIA BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175780589',
    ),
    'enabled' => true,
  ),
  68 => 
  array (
    'id' => '6069',
    'bank_id' => '33',
    'name' => 'PATUAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175781096',
    ),
    'enabled' => true,
  ),
  69 => 
  array (
    'id' => '6070',
    'bank_id' => '33',
    'name' => 'SUBIDKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175781270',
    ),
    'enabled' => true,
  ),
  70 => 
  array (
    'id' => '6071',
    'bank_id' => '33',
    'name' => 'BHANDARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175790137',
    ),
    'enabled' => true,
  ),
  71 => 
  array (
    'id' => '6072',
    'bank_id' => '33',
    'name' => 'MATHBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175790524',
    ),
    'enabled' => true,
  ),
  72 => 
  array (
    'id' => '6073',
    'bank_id' => '33',
    'name' => 'MEAR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175790582',
    ),
    'enabled' => true,
  ),
  73 => 
  array (
    'id' => '6074',
    'bank_id' => '33',
    'name' => 'NAZIRPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175790708',
    ),
    'enabled' => true,
  ),
  74 => 
  array (
    'id' => '6075',
    'bank_id' => '33',
    'name' => 'PIROJPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175790766',
    ),
    'enabled' => true,
  ),
  75 => 
  array (
    'id' => '6076',
    'bank_id' => '33',
    'name' => 'SARSINA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175790858',
    ),
    'enabled' => true,
  ),
  76 => 
  array (
    'id' => '6077',
    'bank_id' => '33',
    'name' => 'BANESHWAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175810220',
    ),
    'enabled' => true,
  ),
  77 => 
  array (
    'id' => '6078',
    'bank_id' => '33',
    'name' => 'BHAWANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175810341',
    ),
    'enabled' => true,
  ),
  78 => 
  array (
    'id' => '6079',
    'bank_id' => '33',
    'name' => 'KATAKHALI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175811366',
    ),
    'enabled' => true,
  ),
  79 => 
  array (
    'id' => '6080',
    'bank_id' => '33',
    'name' => 'NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '175811632',
    ),
    'enabled' => true,
  ),
  80 => 
  array (
    'id' => '6081',
    'bank_id' => '33',
    'name' => 'RAJSHAHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175811937',
    ),
    'enabled' => true,
  ),
  81 => 
  array (
    'id' => '6082',
    'bank_id' => '33',
    'name' => 'SERICULTURE',
    'bank_branch_data' => 
    array (
      'routing_no' => '175812231',
    ),
    'enabled' => true,
  ),
  82 => 
  array (
    'id' => '6083',
    'bank_id' => '33',
    'name' => 'PANGSHA SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '175820681',
    ),
    'enabled' => true,
  ),
  83 => 
  array (
    'id' => '6084',
    'bank_id' => '33',
    'name' => 'RAJBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175820731',
    ),
    'enabled' => true,
  ),
  84 => 
  array (
    'id' => '6085',
    'bank_id' => '33',
    'name' => 'RANGAMATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175840524',
    ),
    'enabled' => true,
  ),
  85 => 
  array (
    'id' => '6086',
    'bank_id' => '33',
    'name' => 'MEDICAL MORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '175850051',
    ),
    'enabled' => true,
  ),
  86 => 
  array (
    'id' => '6087',
    'bank_id' => '33',
    'name' => 'RANGPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175851450',
    ),
    'enabled' => true,
  ),
  87 => 
  array (
    'id' => '6088',
    'bank_id' => '33',
    'name' => 'SHAPLA CHATTAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175851755',
    ),
    'enabled' => true,
  ),
  88 => 
  array (
    'id' => '6089',
    'bank_id' => '33',
    'name' => 'STATION ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '175851876',
    ),
    'enabled' => true,
  ),
  89 => 
  array (
    'id' => '6090',
    'bank_id' => '33',
    'name' => 'BHOJESWAR BAZAR SME',
    'bank_branch_data' => 
    array (
      'routing_no' => '175860591',
    ),
    'enabled' => true,
  ),
  90 => 
  array (
    'id' => '6091',
    'bank_id' => '33',
    'name' => 'SHARIATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175860670',
    ),
    'enabled' => true,
  ),
  91 => 
  array (
    'id' => '6092',
    'bank_id' => '33',
    'name' => 'KALAROA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175870581',
    ),
    'enabled' => true,
  ),
  92 => 
  array (
    'id' => '6093',
    'bank_id' => '33',
    'name' => 'PATKELGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175871030',
    ),
    'enabled' => true,
  ),
  93 => 
  array (
    'id' => '6094',
    'bank_id' => '33',
    'name' => 'SATKHIRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175871098',
    ),
    'enabled' => true,
  ),
  94 => 
  array (
    'id' => '6095',
    'bank_id' => '33',
    'name' => 'KHAMARGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '175881125',
    ),
    'enabled' => true,
  ),
  95 => 
  array (
    'id' => '6096',
    'bank_id' => '33',
    'name' => 'SERAJGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175881875',
    ),
    'enabled' => true,
  ),
  96 => 
  array (
    'id' => '6097',
    'bank_id' => '33',
    'name' => 'TARASH',
    'bank_branch_data' => 
    array (
      'routing_no' => '175882179',
    ),
    'enabled' => true,
  ),
  97 => 
  array (
    'id' => '6098',
    'bank_id' => '33',
    'name' => 'SHERPUR TOWN',
    'bank_branch_data' => 
    array (
      'routing_no' => '175890587',
    ),
    'enabled' => true,
  ),
  98 => 
  array (
    'id' => '6099',
    'bank_id' => '33',
    'name' => 'CHHATAK',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900222',
    ),
    'enabled' => true,
  ),
  99 => 
  array (
    'id' => '6100',
    'bank_id' => '33',
    'name' => 'DERAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900251',
    ),
    'enabled' => true,
  ),
  100 => 
  array (
    'id' => '6101',
    'bank_id' => '33',
    'name' => 'GOBINDAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900435',
    ),
    'enabled' => true,
  ),
  101 => 
  array (
    'id' => '6102',
    'bank_id' => '33',
    'name' => 'JAGANNATHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900493',
    ),
    'enabled' => true,
  ),
  102 => 
  array (
    'id' => '6103',
    'bank_id' => '33',
    'name' => 'JAMALGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900527',
    ),
    'enabled' => true,
  ),
  103 => 
  array (
    'id' => '6104',
    'bank_id' => '33',
    'name' => 'PAGLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900822',
    ),
    'enabled' => true,
  ),
  104 => 
  array (
    'id' => '6105',
    'bank_id' => '33',
    'name' => 'RASULGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175900972',
    ),
    'enabled' => true,
  ),
  105 => 
  array (
    'id' => '6106',
    'bank_id' => '33',
    'name' => 'SREERAMSHI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175901092',
    ),
    'enabled' => true,
  ),
  106 => 
  array (
    'id' => '6107',
    'bank_id' => '33',
    'name' => 'SUNAMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175901126',
    ),
    'enabled' => true,
  ),
  107 => 
  array (
    'id' => '6108',
    'bank_id' => '33',
    'name' => 'JAUWA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175901247',
    ),
    'enabled' => true,
  ),
  108 => 
  array (
    'id' => '6109',
    'bank_id' => '33',
    'name' => 'TUKER BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910083',
    ),
    'enabled' => true,
  ),
  109 => 
  array (
    'id' => '6110',
    'bank_id' => '33',
    'name' => 'ASHIRGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910104',
    ),
    'enabled' => true,
  ),
  110 => 
  array (
    'id' => '6111',
    'bank_id' => '33',
    'name' => 'BALAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910162',
    ),
    'enabled' => true,
  ),
  111 => 
  array (
    'id' => '6112',
    'bank_id' => '33',
    'name' => 'BANDAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910191',
    ),
    'enabled' => true,
  ),
  112 => 
  array (
    'id' => '6113',
    'bank_id' => '33',
    'name' => 'BARAIKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910254',
    ),
    'enabled' => true,
  ),
  113 => 
  array (
    'id' => '6114',
    'bank_id' => '33',
    'name' => 'BAROIGRAM BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910283',
    ),
    'enabled' => true,
  ),
  114 => 
  array (
    'id' => '6115',
    'bank_id' => '33',
    'name' => 'BEANI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910317',
    ),
    'enabled' => true,
  ),
  115 => 
  array (
    'id' => '6116',
    'bank_id' => '33',
    'name' => 'BISHWANATH',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910438',
    ),
    'enabled' => true,
  ),
  116 => 
  array (
    'id' => '6117',
    'bank_id' => '33',
    'name' => 'BUDBARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910559',
    ),
    'enabled' => true,
  ),
  117 => 
  array (
    'id' => '6118',
    'bank_id' => '33',
    'name' => 'CHANDRAPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910670',
    ),
    'enabled' => true,
  ),
  118 => 
  array (
    'id' => '6119',
    'bank_id' => '33',
    'name' => 'CHOWDHUARY BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910825',
    ),
    'enabled' => true,
  ),
  119 => 
  array (
    'id' => '6120',
    'bank_id' => '33',
    'name' => 'CHOWKIDEKHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910883',
    ),
    'enabled' => true,
  ),
  120 => 
  array (
    'id' => '6121',
    'bank_id' => '33',
    'name' => 'COMPANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175910917',
    ),
    'enabled' => true,
  ),
  121 => 
  array (
    'id' => '6122',
    'bank_id' => '33',
    'name' => 'DARBOST',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911008',
    ),
    'enabled' => true,
  ),
  122 => 
  array (
    'id' => '6123',
    'bank_id' => '33',
    'name' => 'DARGA GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911037',
    ),
    'enabled' => true,
  ),
  123 => 
  array (
    'id' => '6124',
    'bank_id' => '33',
    'name' => 'DASHPAIKA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911158',
    ),
    'enabled' => true,
  ),
  124 => 
  array (
    'id' => '6125',
    'bank_id' => '33',
    'name' => 'DHAKA DAKHIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911303',
    ),
    'enabled' => true,
  ),
  125 => 
  array (
    'id' => '6126',
    'bank_id' => '33',
    'name' => 'FENCHUGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911361',
    ),
    'enabled' => true,
  ),
  126 => 
  array (
    'id' => '6127',
    'bank_id' => '33',
    'name' => 'GASBARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911516',
    ),
    'enabled' => true,
  ),
  127 => 
  array (
    'id' => '6128',
    'bank_id' => '33',
    'name' => 'GOALA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911545',
    ),
    'enabled' => true,
  ),
  128 => 
  array (
    'id' => '6129',
    'bank_id' => '33',
    'name' => 'GOLAPGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911608',
    ),
    'enabled' => true,
  ),
  129 => 
  array (
    'id' => '6130',
    'bank_id' => '33',
    'name' => 'GOWAINGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911666',
    ),
    'enabled' => true,
  ),
  130 => 
  array (
    'id' => '6131',
    'bank_id' => '33',
    'name' => 'HETIMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911758',
    ),
    'enabled' => true,
  ),
  131 => 
  array (
    'id' => '6132',
    'bank_id' => '33',
    'name' => 'JALALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911866',
    ),
    'enabled' => true,
  ),
  132 => 
  array (
    'id' => '6133',
    'bank_id' => '33',
    'name' => 'KADAMTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911903',
    ),
    'enabled' => true,
  ),
  133 => 
  array (
    'id' => '6134',
    'bank_id' => '33',
    'name' => 'KALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175911990',
    ),
    'enabled' => true,
  ),
  134 => 
  array (
    'id' => '6135',
    'bank_id' => '33',
    'name' => 'KALIGHAT ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912023',
    ),
    'enabled' => true,
  ),
  135 => 
  array (
    'id' => '6136',
    'bank_id' => '33',
    'name' => 'KANAIGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912081',
    ),
    'enabled' => true,
  ),
  136 => 
  array (
    'id' => '6137',
    'bank_id' => '33',
    'name' => 'LALA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912478',
    ),
    'enabled' => true,
  ),
  137 => 
  array (
    'id' => '6138',
    'bank_id' => '33',
    'name' => 'MIRGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912623',
    ),
    'enabled' => true,
  ),
  138 => 
  array (
    'id' => '6139',
    'bank_id' => '33',
    'name' => 'MOHILA COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912744',
    ),
    'enabled' => true,
  ),
  139 => 
  array (
    'id' => '6140',
    'bank_id' => '33',
    'name' => 'MUKAM BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912773',
    ),
    'enabled' => true,
  ),
  140 => 
  array (
    'id' => '6141',
    'bank_id' => '33',
    'name' => 'PATHANTULA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175912865',
    ),
    'enabled' => true,
  ),
  141 => 
  array (
    'id' => '6142',
    'bank_id' => '33',
    'name' => 'SHAH PARAN GATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913130',
    ),
    'enabled' => true,
  ),
  142 => 
  array (
    'id' => '6143',
    'bank_id' => '33',
    'name' => 'SHAHGALI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913219',
    ),
    'enabled' => true,
  ),
  143 => 
  array (
    'id' => '6144',
    'bank_id' => '33',
    'name' => 'SHAHI EIDGAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913222',
    ),
    'enabled' => true,
  ),
  144 => 
  array (
    'id' => '6145',
    'bank_id' => '33',
    'name' => 'SHAHJALAL UPASHAHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913251',
    ),
    'enabled' => true,
  ),
  145 => 
  array (
    'id' => '6146',
    'bank_id' => '33',
    'name' => 'SINGERKATCH BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913435',
    ),
    'enabled' => true,
  ),
  146 => 
  array (
    'id' => '6147',
    'bank_id' => '33',
    'name' => 'SYLHET STADIUM',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913701',
    ),
    'enabled' => true,
  ),
  147 => 
  array (
    'id' => '6148',
    'bank_id' => '33',
    'name' => 'SYLHET(MAIN)',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913798',
    ),
    'enabled' => true,
  ),
  148 => 
  array (
    'id' => '6149',
    'bank_id' => '33',
    'name' => 'TAJPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913822',
    ),
    'enabled' => true,
  ),
  149 => 
  array (
    'id' => '6150',
    'bank_id' => '33',
    'name' => 'TECHNICAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '175913880',
    ),
    'enabled' => true,
  ),
  150 => 
  array (
    'id' => '6151',
    'bank_id' => '33',
    'name' => 'ZAKIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175914126',
    ),
    'enabled' => true,
  ),
  151 => 
  array (
    'id' => '6152',
    'bank_id' => '33',
    'name' => 'BHAIGHAT BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175930050',
    ),
    'enabled' => true,
  ),
  152 => 
  array (
    'id' => '6153',
    'bank_id' => '33',
    'name' => 'AKUR TAKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175930076',
    ),
    'enabled' => true,
  ),
  153 => 
  array (
    'id' => '6154',
    'bank_id' => '33',
    'name' => 'GOPALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175931004',
    ),
    'enabled' => true,
  ),
  154 => 
  array (
    'id' => '6155',
    'bank_id' => '33',
    'name' => 'KARATIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175931367',
    ),
    'enabled' => true,
  ),
  155 => 
  array (
    'id' => '6156',
    'bank_id' => '33',
    'name' => 'PAKUTIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '175931909',
    ),
    'enabled' => true,
  ),
  156 => 
  array (
    'id' => '6157',
    'bank_id' => '33',
    'name' => 'PATHRAIL BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '175931967',
    ),
    'enabled' => true,
  ),
  157 => 
  array (
    'id' => '6158',
    'bank_id' => '33',
    'name' => 'TANGAIL(MAIN)',
    'bank_branch_data' => 
    array (
      'routing_no' => '175932353',
    ),
    'enabled' => true,
  ),
  158 => 
  array (
    'id' => '6159',
    'bank_id' => '33',
    'name' => 'ZILLA SARAK',
    'bank_branch_data' => 
    array (
      'routing_no' => '175932445',
    ),
    'enabled' => true,
  ),
  159 => 
  array (
    'id' => '6160',
    'bank_id' => '33',
    'name' => 'NEKMORAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '175940732',
    ),
    'enabled' => true,
  ),
  160 => 
  array (
    'id' => '6161',
    'bank_id' => '33',
    'name' => 'PIRGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '175940761',
    ),
    'enabled' => true,
  ),
  161 => 
  array (
    'id' => '6162',
    'bank_id' => '33',
    'name' => 'THAKURGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '175940974',
    ),
    'enabled' => true,
  ),
  162 => 
  array (
    'id' => '6163',
    'bank_id' => '33',
    'name' => 'THAKURGAON ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '175941007',
    ),
    'enabled' => true,
  ),
  163 => 
  array (
    'id' => '6164',
    'bank_id' => '34',
    'name' => 'ADAMDIGHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100046',
    ),
    'enabled' => true,
  ),
  164 => 
  array (
    'id' => '6165',
    'bank_id' => '34',
    'name' => 'PATHAN MIRJAPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100062',
    ),
    'enabled' => true,
  ),
  165 => 
  array (
    'id' => '6166',
    'bank_id' => '34',
    'name' => 'ALIARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100075',
    ),
    'enabled' => true,
  ),
  166 => 
  array (
    'id' => '6167',
    'bank_id' => '34',
    'name' => 'BARAIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100259',
    ),
    'enabled' => true,
  ),
  167 => 
  array (
    'id' => '6168',
    'bank_id' => '34',
    'name' => 'BHATRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100288',
    ),
    'enabled' => true,
  ),
  168 => 
  array (
    'id' => '6169',
    'bank_id' => '34',
    'name' => 'BIZRUL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100341',
    ),
    'enabled' => true,
  ),
  169 => 
  array (
    'id' => '6170',
    'bank_id' => '34',
    'name' => 'BOGRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100370',
    ),
    'enabled' => true,
  ),
  170 => 
  array (
    'id' => '6171',
    'bank_id' => '34',
    'name' => 'CHAMPAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100617',
    ),
    'enabled' => true,
  ),
  171 => 
  array (
    'id' => '6172',
    'bank_id' => '34',
    'name' => 'DHANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100859',
    ),
    'enabled' => true,
  ),
  172 => 
  array (
    'id' => '6173',
    'bank_id' => '34',
    'name' => 'DHUNAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100888',
    ),
    'enabled' => true,
  ),
  173 => 
  array (
    'id' => '6174',
    'bank_id' => '34',
    'name' => 'DUPCHACHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100912',
    ),
    'enabled' => true,
  ),
  174 => 
  array (
    'id' => '6175',
    'bank_id' => '34',
    'name' => 'DURGAHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180100941',
    ),
    'enabled' => true,
  ),
  175 => 
  array (
    'id' => '6176',
    'bank_id' => '34',
    'name' => 'GABTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101032',
    ),
    'enabled' => true,
  ),
  176 => 
  array (
    'id' => '6177',
    'bank_id' => '34',
    'name' => 'JAMGRAMHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101458',
    ),
    'enabled' => true,
  ),
  177 => 
  array (
    'id' => '6178',
    'bank_id' => '34',
    'name' => 'JOREGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101511',
    ),
    'enabled' => true,
  ),
  178 => 
  array (
    'id' => '6179',
    'bank_id' => '34',
    'name' => 'KAHALOO',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101540',
    ),
    'enabled' => true,
  ),
  179 => 
  array (
    'id' => '6180',
    'bank_id' => '34',
    'name' => 'LANGLUHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101724',
    ),
    'enabled' => true,
  ),
  180 => 
  array (
    'id' => '6181',
    'bank_id' => '34',
    'name' => 'MAIDANHATTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101816',
    ),
    'enabled' => true,
  ),
  181 => 
  array (
    'id' => '6182',
    'bank_id' => '34',
    'name' => 'MATHURAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180101874',
    ),
    'enabled' => true,
  ),
  182 => 
  array (
    'id' => '6183',
    'bank_id' => '34',
    'name' => 'NANDIGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102028',
    ),
    'enabled' => true,
  ),
  183 => 
  array (
    'id' => '6184',
    'bank_id' => '34',
    'name' => 'NARAHATTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102057',
    ),
    'enabled' => true,
  ),
  184 => 
  array (
    'id' => '6185',
    'bank_id' => '34',
    'name' => 'PALLY MONGAL HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102149',
    ),
    'enabled' => true,
  ),
  185 => 
  array (
    'id' => '6186',
    'bank_id' => '34',
    'name' => 'RAHABAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102231',
    ),
    'enabled' => true,
  ),
  186 => 
  array (
    'id' => '6187',
    'bank_id' => '34',
    'name' => 'RAJABAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102260',
    ),
    'enabled' => true,
  ),
  187 => 
  array (
    'id' => '6188',
    'bank_id' => '34',
    'name' => 'RAMESHWARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102299',
    ),
    'enabled' => true,
  ),
  188 => 
  array (
    'id' => '6189',
    'bank_id' => '34',
    'name' => 'SANTAHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102415',
    ),
    'enabled' => true,
  ),
  189 => 
  array (
    'id' => '6190',
    'bank_id' => '34',
    'name' => 'SARIAKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102473',
    ),
    'enabled' => true,
  ),
  190 => 
  array (
    'id' => '6191',
    'bank_id' => '34',
    'name' => 'SEHALIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102536',
    ),
    'enabled' => true,
  ),
  191 => 
  array (
    'id' => '6192',
    'bank_id' => '34',
    'name' => 'SEKHAHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102565',
    ),
    'enabled' => true,
  ),
  192 => 
  array (
    'id' => '6193',
    'bank_id' => '34',
    'name' => 'SHAHJAHANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102707',
    ),
    'enabled' => true,
  ),
  193 => 
  array (
    'id' => '6194',
    'bank_id' => '34',
    'name' => 'SHAHNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102710',
    ),
    'enabled' => true,
  ),
  194 => 
  array (
    'id' => '6195',
    'bank_id' => '34',
    'name' => 'SHERPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102749',
    ),
    'enabled' => true,
  ),
  195 => 
  array (
    'id' => '6196',
    'bank_id' => '34',
    'name' => 'SHIBGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102802',
    ),
    'enabled' => true,
  ),
  196 => 
  array (
    'id' => '6197',
    'bank_id' => '34',
    'name' => 'SONAHATA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102923',
    ),
    'enabled' => true,
  ),
  197 => 
  array (
    'id' => '6198',
    'bank_id' => '34',
    'name' => 'SONATOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180102981',
    ),
    'enabled' => true,
  ),
  198 => 
  array (
    'id' => '6199',
    'bank_id' => '34',
    'name' => 'VALABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180103193',
    ),
    'enabled' => true,
  ),
  199 => 
  array (
    'id' => '6200',
    'bank_id' => '34',
    'name' => 'TRUNCATION POINT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180270000',
    ),
    'enabled' => true,
  ),
  200 => 
  array (
    'id' => '6201',
    'bank_id' => '34',
    'name' => 'DHAKA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180271517',
    ),
    'enabled' => true,
  ),
  201 => 
  array (
    'id' => '6202',
    'bank_id' => '34',
    'name' => 'ATPUKURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280087',
    ),
    'enabled' => true,
  ),
  202 => 
  array (
    'id' => '6203',
    'bank_id' => '34',
    'name' => 'BARAIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280137',
    ),
    'enabled' => true,
  ),
  203 => 
  array (
    'id' => '6204',
    'bank_id' => '34',
    'name' => 'BHADURIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280229',
    ),
    'enabled' => true,
  ),
  204 => 
  array (
    'id' => '6205',
    'bank_id' => '34',
    'name' => 'BIRAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280340',
    ),
    'enabled' => true,
  ),
  205 => 
  array (
    'id' => '6206',
    'bank_id' => '34',
    'name' => 'BIRGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280379',
    ),
    'enabled' => true,
  ),
  206 => 
  array (
    'id' => '6207',
    'bank_id' => '34',
    'name' => 'BIROL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280403',
    ),
    'enabled' => true,
  ),
  207 => 
  array (
    'id' => '6208',
    'bank_id' => '34',
    'name' => 'BOARD HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280432',
    ),
    'enabled' => true,
  ),
  208 => 
  array (
    'id' => '6209',
    'bank_id' => '34',
    'name' => 'BULIABAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280461',
    ),
    'enabled' => true,
  ),
  209 => 
  array (
    'id' => '6210',
    'bank_id' => '34',
    'name' => 'CHIRIRBANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280524',
    ),
    'enabled' => true,
  ),
  210 => 
  array (
    'id' => '6211',
    'bank_id' => '34',
    'name' => 'DANGAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280582',
    ),
    'enabled' => true,
  ),
  211 => 
  array (
    'id' => '6212',
    'bank_id' => '34',
    'name' => 'DHUKURJHARIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280645',
    ),
    'enabled' => true,
  ),
  212 => 
  array (
    'id' => '6213',
    'bank_id' => '34',
    'name' => 'DUGDUGIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280766',
    ),
    'enabled' => true,
  ),
  213 => 
  array (
    'id' => '6214',
    'bank_id' => '34',
    'name' => 'GHORAGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280829',
    ),
    'enabled' => true,
  ),
  214 => 
  array (
    'id' => '6215',
    'bank_id' => '34',
    'name' => 'GODAGARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280858',
    ),
    'enabled' => true,
  ),
  215 => 
  array (
    'id' => '6216',
    'bank_id' => '34',
    'name' => 'HAKIMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280911',
    ),
    'enabled' => true,
  ),
  216 => 
  array (
    'id' => '6217',
    'bank_id' => '34',
    'name' => 'HAMIDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180280940',
    ),
    'enabled' => true,
  ),
  217 => 
  array (
    'id' => '6218',
    'bank_id' => '34',
    'name' => 'KAHAROLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281099',
    ),
    'enabled' => true,
  ),
  218 => 
  array (
    'id' => '6219',
    'bank_id' => '34',
    'name' => 'KALIAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281123',
    ),
    'enabled' => true,
  ),
  219 => 
  array (
    'id' => '6220',
    'bank_id' => '34',
    'name' => 'KETRAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281181',
    ),
    'enabled' => true,
  ),
  220 => 
  array (
    'id' => '6221',
    'bank_id' => '34',
    'name' => 'KHANSAMA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281215',
    ),
    'enabled' => true,
  ),
  221 => 
  array (
    'id' => '6222',
    'bank_id' => '34',
    'name' => 'KOTWALI DINAJPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281244',
    ),
    'enabled' => true,
  ),
  222 => 
  array (
    'id' => '6223',
    'bank_id' => '34',
    'name' => 'KUTUB DANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281273',
    ),
    'enabled' => true,
  ),
  223 => 
  array (
    'id' => '6224',
    'bank_id' => '34',
    'name' => 'MADHYAPARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281310',
    ),
    'enabled' => true,
  ),
  224 => 
  array (
    'id' => '6225',
    'bank_id' => '34',
    'name' => 'MAJHIPARA SADAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281394',
    ),
    'enabled' => true,
  ),
  225 => 
  array (
    'id' => '6226',
    'bank_id' => '34',
    'name' => 'MONGLAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281486',
    ),
    'enabled' => true,
  ),
  226 => 
  array (
    'id' => '6227',
    'bank_id' => '34',
    'name' => 'MOSTAFAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281549',
    ),
    'enabled' => true,
  ),
  227 => 
  array (
    'id' => '6228',
    'bank_id' => '34',
    'name' => 'NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281631',
    ),
    'enabled' => true,
  ),
  228 => 
  array (
    'id' => '6229',
    'bank_id' => '34',
    'name' => 'NURULHUDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281699',
    ),
    'enabled' => true,
  ),
  229 => 
  array (
    'id' => '6230',
    'bank_id' => '34',
    'name' => 'PANCHKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281781',
    ),
    'enabled' => true,
  ),
  230 => 
  array (
    'id' => '6231',
    'bank_id' => '34',
    'name' => 'PARBATIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281815',
    ),
    'enabled' => true,
  ),
  231 => 
  array (
    'id' => '6232',
    'bank_id' => '34',
    'name' => 'PHULBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281873',
    ),
    'enabled' => true,
  ),
  232 => 
  array (
    'id' => '6233',
    'bank_id' => '34',
    'name' => 'RAMDULIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180281994',
    ),
    'enabled' => true,
  ),
  233 => 
  array (
    'id' => '6234',
    'bank_id' => '34',
    'name' => 'RANIRBANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180282085',
    ),
    'enabled' => true,
  ),
  234 => 
  array (
    'id' => '6235',
    'bank_id' => '34',
    'name' => 'RATANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180282119',
    ),
    'enabled' => true,
  ),
  235 => 
  array (
    'id' => '6236',
    'bank_id' => '34',
    'name' => 'SETABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180282177',
    ),
    'enabled' => true,
  ),
  236 => 
  array (
    'id' => '6237',
    'bank_id' => '34',
    'name' => 'SHIBRAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180282269',
    ),
    'enabled' => true,
  ),
  237 => 
  array (
    'id' => '6238',
    'bank_id' => '34',
    'name' => 'SULTANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180282380',
    ),
    'enabled' => true,
  ),
  238 => 
  array (
    'id' => '6239',
    'bank_id' => '34',
    'name' => 'ZUMARBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320068',
    ),
    'enabled' => true,
  ),
  239 => 
  array (
    'id' => '6240',
    'bank_id' => '34',
    'name' => 'BALUAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320071',
    ),
    'enabled' => true,
  ),
  240 => 
  array (
    'id' => '6241',
    'bank_id' => '34',
    'name' => 'BARKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320134',
    ),
    'enabled' => true,
  ),
  241 => 
  array (
    'id' => '6242',
    'bank_id' => '34',
    'name' => 'BONARPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320226',
    ),
    'enabled' => true,
  ),
  242 => 
  array (
    'id' => '6243',
    'bank_id' => '34',
    'name' => 'DARIAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320284',
    ),
    'enabled' => true,
  ),
  243 => 
  array (
    'id' => '6244',
    'bank_id' => '34',
    'name' => 'DHARMAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320347',
    ),
    'enabled' => true,
  ),
  244 => 
  array (
    'id' => '6245',
    'bank_id' => '34',
    'name' => 'DHOLBHANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320376',
    ),
    'enabled' => true,
  ),
  245 => 
  array (
    'id' => '6246',
    'bank_id' => '34',
    'name' => 'DOMERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320400',
    ),
    'enabled' => true,
  ),
  246 => 
  array (
    'id' => '6247',
    'bank_id' => '34',
    'name' => 'FULCHARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320468',
    ),
    'enabled' => true,
  ),
  247 => 
  array (
    'id' => '6248',
    'bank_id' => '34',
    'name' => 'GAIBANDHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320521',
    ),
    'enabled' => true,
  ),
  248 => 
  array (
    'id' => '6249',
    'bank_id' => '34',
    'name' => 'GOBINDAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320589',
    ),
    'enabled' => true,
  ),
  249 => 
  array (
    'id' => '6250',
    'bank_id' => '34',
    'name' => 'HORINATHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320642',
    ),
    'enabled' => true,
  ),
  250 => 
  array (
    'id' => '6251',
    'bank_id' => '34',
    'name' => 'KANTANAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320763',
    ),
    'enabled' => true,
  ),
  251 => 
  array (
    'id' => '6252',
    'bank_id' => '34',
    'name' => 'KATABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320792',
    ),
    'enabled' => true,
  ),
  252 => 
  array (
    'id' => '6253',
    'bank_id' => '34',
    'name' => 'KOCHASOR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320826',
    ),
    'enabled' => true,
  ),
  253 => 
  array (
    'id' => '6254',
    'bank_id' => '34',
    'name' => 'KOMORPURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320855',
    ),
    'enabled' => true,
  ),
  254 => 
  array (
    'id' => '6255',
    'bank_id' => '34',
    'name' => 'KUPTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320884',
    ),
    'enabled' => true,
  ),
  255 => 
  array (
    'id' => '6256',
    'bank_id' => '34',
    'name' => 'MOHIMAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180320976',
    ),
    'enabled' => true,
  ),
  256 => 
  array (
    'id' => '6257',
    'bank_id' => '34',
    'name' => 'NAKAIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321009',
    ),
    'enabled' => true,
  ),
  257 => 
  array (
    'id' => '6258',
    'bank_id' => '34',
    'name' => 'NAYABANDOR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321067',
    ),
    'enabled' => true,
  ),
  258 => 
  array (
    'id' => '6259',
    'bank_id' => '34',
    'name' => 'PALASHBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321096',
    ),
    'enabled' => true,
  ),
  259 => 
  array (
    'id' => '6260',
    'bank_id' => '34',
    'name' => 'SADULLAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321241',
    ),
    'enabled' => true,
  ),
  260 => 
  array (
    'id' => '6261',
    'bank_id' => '34',
    'name' => 'SAGHATTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321270',
    ),
    'enabled' => true,
  ),
  261 => 
  array (
    'id' => '6262',
    'bank_id' => '34',
    'name' => 'SUNDARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321304',
    ),
    'enabled' => true,
  ),
  262 => 
  array (
    'id' => '6263',
    'bank_id' => '34',
    'name' => 'TULSHIGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180321333',
    ),
    'enabled' => true,
  ),
  263 => 
  array (
    'id' => '6264',
    'bank_id' => '34',
    'name' => 'AKKELPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380040',
    ),
    'enabled' => true,
  ),
  264 => 
  array (
    'id' => '6265',
    'bank_id' => '34',
    'name' => 'ATAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380079',
    ),
    'enabled' => true,
  ),
  265 => 
  array (
    'id' => '6266',
    'bank_id' => '34',
    'name' => 'BAGJANA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380132',
    ),
    'enabled' => true,
  ),
  266 => 
  array (
    'id' => '6267',
    'bank_id' => '34',
    'name' => 'BOTTOLI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380161',
    ),
    'enabled' => true,
  ),
  267 => 
  array (
    'id' => '6268',
    'bank_id' => '34',
    'name' => 'CHATINALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380190',
    ),
    'enabled' => true,
  ),
  268 => 
  array (
    'id' => '6269',
    'bank_id' => '34',
    'name' => 'DHARARJEE',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380253',
    ),
    'enabled' => true,
  ),
  269 => 
  array (
    'id' => '6270',
    'bank_id' => '34',
    'name' => 'DOGACHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380282',
    ),
    'enabled' => true,
  ),
  270 => 
  array (
    'id' => '6271',
    'bank_id' => '34',
    'name' => 'JOYPURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380408',
    ),
    'enabled' => true,
  ),
  271 => 
  array (
    'id' => '6272',
    'bank_id' => '34',
    'name' => 'KALAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380466',
    ),
    'enabled' => true,
  ),
  272 => 
  array (
    'id' => '6273',
    'bank_id' => '34',
    'name' => 'KHETLAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380495',
    ),
    'enabled' => true,
  ),
  273 => 
  array (
    'id' => '6274',
    'bank_id' => '34',
    'name' => 'MADHAINAGRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380558',
    ),
    'enabled' => true,
  ),
  274 => 
  array (
    'id' => '6275',
    'bank_id' => '34',
    'name' => 'MUSLEMGANJ HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380640',
    ),
    'enabled' => true,
  ),
  275 => 
  array (
    'id' => '6276',
    'bank_id' => '34',
    'name' => 'PANCHBIBI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380679',
    ),
    'enabled' => true,
  ),
  276 => 
  array (
    'id' => '6277',
    'bank_id' => '34',
    'name' => 'PURANAPAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380732',
    ),
    'enabled' => true,
  ),
  277 => 
  array (
    'id' => '6278',
    'bank_id' => '34',
    'name' => 'RAYKALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180380761',
    ),
    'enabled' => true,
  ),
  278 => 
  array (
    'id' => '6279',
    'bank_id' => '34',
    'name' => 'BAMUNERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490048',
    ),
    'enabled' => true,
  ),
  279 => 
  array (
    'id' => '6280',
    'bank_id' => '34',
    'name' => 'BHURUNGAMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490101',
    ),
    'enabled' => true,
  ),
  280 => 
  array (
    'id' => '6281',
    'bank_id' => '34',
    'name' => 'CHILMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490130',
    ),
    'enabled' => true,
  ),
  281 => 
  array (
    'id' => '6282',
    'bank_id' => '34',
    'name' => 'FULBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490198',
    ),
    'enabled' => true,
  ),
  282 => 
  array (
    'id' => '6283',
    'bank_id' => '34',
    'name' => 'HASNABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490222',
    ),
    'enabled' => true,
  ),
  283 => 
  array (
    'id' => '6284',
    'bank_id' => '34',
    'name' => 'JATRA PUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490251',
    ),
    'enabled' => true,
  ),
  284 => 
  array (
    'id' => '6285',
    'bank_id' => '34',
    'name' => 'KACHAKATA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490280',
    ),
    'enabled' => true,
  ),
  285 => 
  array (
    'id' => '6286',
    'bank_id' => '34',
    'name' => 'KANTHAL BARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490314',
    ),
    'enabled' => true,
  ),
  286 => 
  array (
    'id' => '6287',
    'bank_id' => '34',
    'name' => 'KASEM BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490343',
    ),
    'enabled' => true,
  ),
  287 => 
  array (
    'id' => '6288',
    'bank_id' => '34',
    'name' => 'KHARIBARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490372',
    ),
    'enabled' => true,
  ),
  288 => 
  array (
    'id' => '6289',
    'bank_id' => '34',
    'name' => 'KURIGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490406',
    ),
    'enabled' => true,
  ),
  289 => 
  array (
    'id' => '6290',
    'bank_id' => '34',
    'name' => 'MANDOLERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490435',
    ),
    'enabled' => true,
  ),
  290 => 
  array (
    'id' => '6291',
    'bank_id' => '34',
    'name' => 'NAGESWARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490464',
    ),
    'enabled' => true,
  ),
  291 => 
  array (
    'id' => '6292',
    'bank_id' => '34',
    'name' => 'PATESWARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490527',
    ),
    'enabled' => true,
  ),
  292 => 
  array (
    'id' => '6293',
    'bank_id' => '34',
    'name' => 'RAIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490556',
    ),
    'enabled' => true,
  ),
  293 => 
  array (
    'id' => '6294',
    'bank_id' => '34',
    'name' => 'RAJARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490585',
    ),
    'enabled' => true,
  ),
  294 => 
  array (
    'id' => '6295',
    'bank_id' => '34',
    'name' => 'RAJIBPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490619',
    ),
    'enabled' => true,
  ),
  295 => 
  array (
    'id' => '6296',
    'bank_id' => '34',
    'name' => 'ROWMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490648',
    ),
    'enabled' => true,
  ),
  296 => 
  array (
    'id' => '6297',
    'bank_id' => '34',
    'name' => 'SINGARDABRIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490677',
    ),
    'enabled' => true,
  ),
  297 => 
  array (
    'id' => '6298',
    'bank_id' => '34',
    'name' => 'ULIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180490701',
    ),
    'enabled' => true,
  ),
  298 => 
  array (
    'id' => '6299',
    'bank_id' => '34',
    'name' => 'ADITMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520042',
    ),
    'enabled' => true,
  ),
  299 => 
  array (
    'id' => '6300',
    'bank_id' => '34',
    'name' => 'CHAPARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520226',
    ),
    'enabled' => true,
  ),
  300 => 
  array (
    'id' => '6301',
    'bank_id' => '34',
    'name' => 'DAIKHYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520255',
    ),
    'enabled' => true,
  ),
  301 => 
  array (
    'id' => '6302',
    'bank_id' => '34',
    'name' => 'DOANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520284',
    ),
    'enabled' => true,
  ),
  302 => 
  array (
    'id' => '6303',
    'bank_id' => '34',
    'name' => 'FAKIRER TAKEYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520318',
    ),
    'enabled' => true,
  ),
  303 => 
  array (
    'id' => '6304',
    'bank_id' => '34',
    'name' => 'GOROL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520347',
    ),
    'enabled' => true,
  ),
  304 => 
  array (
    'id' => '6305',
    'bank_id' => '34',
    'name' => 'HARATI BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520376',
    ),
    'enabled' => true,
  ),
  305 => 
  array (
    'id' => '6306',
    'bank_id' => '34',
    'name' => 'HATIBANDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520400',
    ),
    'enabled' => true,
  ),
  306 => 
  array (
    'id' => '6307',
    'bank_id' => '34',
    'name' => 'KALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520439',
    ),
    'enabled' => true,
  ),
  307 => 
  array (
    'id' => '6308',
    'bank_id' => '34',
    'name' => 'LALMONIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520468',
    ),
    'enabled' => true,
  ),
  308 => 
  array (
    'id' => '6309',
    'bank_id' => '34',
    'name' => 'MOGALHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520497',
    ),
    'enabled' => true,
  ),
  309 => 
  array (
    'id' => '6310',
    'bank_id' => '34',
    'name' => 'NAMURIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520550',
    ),
    'enabled' => true,
  ),
  310 => 
  array (
    'id' => '6311',
    'bank_id' => '34',
    'name' => 'PATGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520589',
    ),
    'enabled' => true,
  ),
  311 => 
  array (
    'id' => '6312',
    'bank_id' => '34',
    'name' => 'SAPTIBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520613',
    ),
    'enabled' => true,
  ),
  312 => 
  array (
    'id' => '6313',
    'bank_id' => '34',
    'name' => 'SARKARER HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520642',
    ),
    'enabled' => true,
  ),
  313 => 
  array (
    'id' => '6314',
    'bank_id' => '34',
    'name' => 'TEESTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520671',
    ),
    'enabled' => true,
  ),
  314 => 
  array (
    'id' => '6315',
    'bank_id' => '34',
    'name' => 'VELABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180520734',
    ),
    'enabled' => true,
  ),
  315 => 
  array (
    'id' => '6316',
    'bank_id' => '34',
    'name' => 'MECHER BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640014',
    ),
    'enabled' => true,
  ),
  316 => 
  array (
    'id' => '6317',
    'bank_id' => '34',
    'name' => 'KULIHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640069',
    ),
    'enabled' => true,
  ),
  317 => 
  array (
    'id' => '6318',
    'bank_id' => '34',
    'name' => 'ATRAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640164',
    ),
    'enabled' => true,
  ),
  318 => 
  array (
    'id' => '6319',
    'bank_id' => '34',
    'name' => 'BADALGACHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640193',
    ),
    'enabled' => true,
  ),
  319 => 
  array (
    'id' => '6320',
    'bank_id' => '34',
    'name' => 'BETGARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640319',
    ),
    'enabled' => true,
  ),
  320 => 
  array (
    'id' => '6321',
    'bank_id' => '34',
    'name' => 'DHAMAIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640498',
    ),
    'enabled' => true,
  ),
  321 => 
  array (
    'id' => '6322',
    'bank_id' => '34',
    'name' => 'DUBALHATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640522',
    ),
    'enabled' => true,
  ),
  322 => 
  array (
    'id' => '6323',
    'bank_id' => '34',
    'name' => 'FATEPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640551',
    ),
    'enabled' => true,
  ),
  323 => 
  array (
    'id' => '6324',
    'bank_id' => '34',
    'name' => 'HATCHALKGOURI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640672',
    ),
    'enabled' => true,
  ),
  324 => 
  array (
    'id' => '6325',
    'bank_id' => '34',
    'name' => 'HAZINAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640706',
    ),
    'enabled' => true,
  ),
  325 => 
  array (
    'id' => '6326',
    'bank_id' => '34',
    'name' => 'JOTEBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640764',
    ),
    'enabled' => true,
  ),
  326 => 
  array (
    'id' => '6327',
    'bank_id' => '34',
    'name' => 'KIRTIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640856',
    ),
    'enabled' => true,
  ),
  327 => 
  array (
    'id' => '6328',
    'bank_id' => '34',
    'name' => 'KRISHNAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180640885',
    ),
    'enabled' => true,
  ),
  328 => 
  array (
    'id' => '6329',
    'bank_id' => '34',
    'name' => 'MOHADEBPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641097',
    ),
    'enabled' => true,
  ),
  329 => 
  array (
    'id' => '6330',
    'bank_id' => '34',
    'name' => 'NAOGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641189',
    ),
    'enabled' => true,
  ),
  330 => 
  array (
    'id' => '6331',
    'bank_id' => '34',
    'name' => 'NEAMATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641271',
    ),
    'enabled' => true,
  ),
  331 => 
  array (
    'id' => '6332',
    'bank_id' => '34',
    'name' => 'PAHARPUR-1',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641363',
    ),
    'enabled' => true,
  ),
  332 => 
  array (
    'id' => '6333',
    'bank_id' => '34',
    'name' => 'PAHARPUR-2',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641392',
    ),
    'enabled' => true,
  ),
  333 => 
  array (
    'id' => '6334',
    'bank_id' => '34',
    'name' => 'PATISHOR RABINDRA KUTTI BARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641426',
    ),
    'enabled' => true,
  ),
  334 => 
  array (
    'id' => '6335',
    'bank_id' => '34',
    'name' => 'PATNITALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641455',
    ),
    'enabled' => true,
  ),
  335 => 
  array (
    'id' => '6336',
    'bank_id' => '34',
    'name' => 'PORSHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641518',
    ),
    'enabled' => true,
  ),
  336 => 
  array (
    'id' => '6337',
    'bank_id' => '34',
    'name' => 'PROSHADPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641547',
    ),
    'enabled' => true,
  ),
  337 => 
  array (
    'id' => '6338',
    'bank_id' => '34',
    'name' => 'RANGAMATIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641576',
    ),
    'enabled' => true,
  ),
  338 => 
  array (
    'id' => '6339',
    'bank_id' => '34',
    'name' => 'RANINAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641600',
    ),
    'enabled' => true,
  ),
  339 => 
  array (
    'id' => '6340',
    'bank_id' => '34',
    'name' => 'SABAIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641668',
    ),
    'enabled' => true,
  ),
  340 => 
  array (
    'id' => '6341',
    'bank_id' => '34',
    'name' => 'SAILGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641721',
    ),
    'enabled' => true,
  ),
  341 => 
  array (
    'id' => '6342',
    'bank_id' => '34',
    'name' => 'SAPAHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641750',
    ),
    'enabled' => true,
  ),
  342 => 
  array (
    'id' => '6343',
    'bank_id' => '34',
    'name' => 'SATIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641789',
    ),
    'enabled' => true,
  ),
  343 => 
  array (
    'id' => '6344',
    'bank_id' => '34',
    'name' => 'SHAMOSPARAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641813',
    ),
    'enabled' => true,
  ),
  344 => 
  array (
    'id' => '6345',
    'bank_id' => '34',
    'name' => 'UTTARGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180641963',
    ),
    'enabled' => true,
  ),
  345 => 
  array (
    'id' => '6346',
    'bank_id' => '34',
    'name' => 'ABDULPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690048',
    ),
    'enabled' => true,
  ),
  346 => 
  array (
    'id' => '6347',
    'bank_id' => '34',
    'name' => 'SIKARPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690051',
    ),
    'enabled' => true,
  ),
  347 => 
  array (
    'id' => '6348',
    'bank_id' => '34',
    'name' => 'KHAJURTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690064',
    ),
    'enabled' => true,
  ),
  348 => 
  array (
    'id' => '6349',
    'bank_id' => '34',
    'name' => 'AHMEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690077',
    ),
    'enabled' => true,
  ),
  349 => 
  array (
    'id' => '6350',
    'bank_id' => '34',
    'name' => 'BAGATIPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690130',
    ),
    'enabled' => true,
  ),
  350 => 
  array (
    'id' => '6351',
    'bank_id' => '34',
    'name' => 'BARAIGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690169',
    ),
    'enabled' => true,
  ),
  351 => 
  array (
    'id' => '6352',
    'bank_id' => '34',
    'name' => 'BERILABARY',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690222',
    ),
    'enabled' => true,
  ),
  352 => 
  array (
    'id' => '6353',
    'bank_id' => '34',
    'name' => 'CHAPILA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690343',
    ),
    'enabled' => true,
  ),
  353 => 
  array (
    'id' => '6354',
    'bank_id' => '34',
    'name' => 'CHOWGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690372',
    ),
    'enabled' => true,
  ),
  354 => 
  array (
    'id' => '6355',
    'bank_id' => '34',
    'name' => 'GOPALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690493',
    ),
    'enabled' => true,
  ),
  355 => 
  array (
    'id' => '6356',
    'bank_id' => '34',
    'name' => 'GOURIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690527',
    ),
    'enabled' => true,
  ),
  356 => 
  array (
    'id' => '6357',
    'bank_id' => '34',
    'name' => 'GURUDASPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690556',
    ),
    'enabled' => true,
  ),
  357 => 
  array (
    'id' => '6358',
    'bank_id' => '34',
    'name' => 'HALSHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690585',
    ),
    'enabled' => true,
  ),
  358 => 
  array (
    'id' => '6359',
    'bank_id' => '34',
    'name' => 'IMAMNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690648',
    ),
    'enabled' => true,
  ),
  359 => 
  array (
    'id' => '6360',
    'bank_id' => '34',
    'name' => 'KADAMCHILAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690730',
    ),
    'enabled' => true,
  ),
  360 => 
  array (
    'id' => '6361',
    'bank_id' => '34',
    'name' => 'KAFURIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690769',
    ),
    'enabled' => true,
  ),
  361 => 
  array (
    'id' => '6362',
    'bank_id' => '34',
    'name' => 'KHOLABARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690822',
    ),
    'enabled' => true,
  ),
  362 => 
  array (
    'id' => '6363',
    'bank_id' => '34',
    'name' => 'LALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180690914',
    ),
    'enabled' => true,
  ),
  363 => 
  array (
    'id' => '6364',
    'bank_id' => '34',
    'name' => 'NALDANGARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180691063',
    ),
    'enabled' => true,
  ),
  364 => 
  array (
    'id' => '6365',
    'bank_id' => '34',
    'name' => 'NATORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '180691092',
    ),
    'enabled' => true,
  ),
  365 => 
  array (
    'id' => '6366',
    'bank_id' => '34',
    'name' => 'SINGRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180691489',
    ),
    'enabled' => true,
  ),
  366 => 
  array (
    'id' => '6367',
    'bank_id' => '34',
    'name' => 'WALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180691571',
    ),
    'enabled' => true,
  ),
  367 => 
  array (
    'id' => '6368',
    'bank_id' => '34',
    'name' => 'AMNURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700046',
    ),
    'enabled' => true,
  ),
  368 => 
  array (
    'id' => '6369',
    'bank_id' => '34',
    'name' => 'ANUPNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700075',
    ),
    'enabled' => true,
  ),
  369 => 
  array (
    'id' => '6370',
    'bank_id' => '34',
    'name' => 'BHOLAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700167',
    ),
    'enabled' => true,
  ),
  370 => 
  array (
    'id' => '6371',
    'bank_id' => '34',
    'name' => 'CHAITANYAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700220',
    ),
    'enabled' => true,
  ),
  371 => 
  array (
    'id' => '6372',
    'bank_id' => '34',
    'name' => 'CHAPAI NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700259',
    ),
    'enabled' => true,
  ),
  372 => 
  array (
    'id' => '6373',
    'bank_id' => '34',
    'name' => 'CHATRAJITPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700312',
    ),
    'enabled' => true,
  ),
  373 => 
  array (
    'id' => '6374',
    'bank_id' => '34',
    'name' => 'GOHARAPAKIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700433',
    ),
    'enabled' => true,
  ),
  374 => 
  array (
    'id' => '6375',
    'bank_id' => '34',
    'name' => 'GOMASTAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700462',
    ),
    'enabled' => true,
  ),
  375 => 
  array (
    'id' => '6376',
    'bank_id' => '34',
    'name' => 'JAMBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700491',
    ),
    'enabled' => true,
  ),
  376 => 
  array (
    'id' => '6377',
    'bank_id' => '34',
    'name' => 'NACHOLE',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700738',
    ),
    'enabled' => true,
  ),
  377 => 
  array (
    'id' => '6378',
    'bank_id' => '34',
    'name' => 'NEZAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700796',
    ),
    'enabled' => true,
  ),
  378 => 
  array (
    'id' => '6379',
    'bank_id' => '34',
    'name' => 'ROHANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700888',
    ),
    'enabled' => true,
  ),
  379 => 
  array (
    'id' => '6380',
    'bank_id' => '34',
    'name' => 'SHIBGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700941',
    ),
    'enabled' => true,
  ),
  380 => 
  array (
    'id' => '6381',
    'bank_id' => '34',
    'name' => 'SHYAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180700970',
    ),
    'enabled' => true,
  ),
  381 => 
  array (
    'id' => '6382',
    'bank_id' => '34',
    'name' => 'SONAICHANDIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180701003',
    ),
    'enabled' => true,
  ),
  382 => 
  array (
    'id' => '6383',
    'bank_id' => '34',
    'name' => 'SONAMASZID',
    'bank_branch_data' => 
    array (
      'routing_no' => '180701032',
    ),
    'enabled' => true,
  ),
  383 => 
  array (
    'id' => '6384',
    'bank_id' => '34',
    'name' => 'BALAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730045',
    ),
    'enabled' => true,
  ),
  384 => 
  array (
    'id' => '6385',
    'bank_id' => '34',
    'name' => 'BANDHUHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730074',
    ),
    'enabled' => true,
  ),
  385 => 
  array (
    'id' => '6386',
    'bank_id' => '34',
    'name' => 'BARABHITA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730108',
    ),
    'enabled' => true,
  ),
  386 => 
  array (
    'id' => '6387',
    'bank_id' => '34',
    'name' => 'BODI(KAIMARI)',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730166',
    ),
    'enabled' => true,
  ),
  387 => 
  array (
    'id' => '6388',
    'bank_id' => '34',
    'name' => 'CHAPANIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730195',
    ),
    'enabled' => true,
  ),
  388 => 
  array (
    'id' => '6389',
    'bank_id' => '34',
    'name' => 'DIMLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730311',
    ),
    'enabled' => true,
  ),
  389 => 
  array (
    'id' => '6390',
    'bank_id' => '34',
    'name' => 'DOMAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730340',
    ),
    'enabled' => true,
  ),
  390 => 
  array (
    'id' => '6391',
    'bank_id' => '34',
    'name' => 'GOREGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730379',
    ),
    'enabled' => true,
  ),
  391 => 
  array (
    'id' => '6392',
    'bank_id' => '34',
    'name' => 'HAZARIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730403',
    ),
    'enabled' => true,
  ),
  392 => 
  array (
    'id' => '6393',
    'bank_id' => '34',
    'name' => 'JADURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730432',
    ),
    'enabled' => true,
  ),
  393 => 
  array (
    'id' => '6394',
    'bank_id' => '34',
    'name' => 'JALDHAKA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730461',
    ),
    'enabled' => true,
  ),
  394 => 
  array (
    'id' => '6395',
    'bank_id' => '34',
    'name' => 'KAZIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730553',
    ),
    'enabled' => true,
  ),
  395 => 
  array (
    'id' => '6396',
    'bank_id' => '34',
    'name' => 'KISHOREGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730582',
    ),
    'enabled' => true,
  ),
  396 => 
  array (
    'id' => '6397',
    'bank_id' => '34',
    'name' => 'MALA PANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730616',
    ),
    'enabled' => true,
  ),
  397 => 
  array (
    'id' => '6398',
    'bank_id' => '34',
    'name' => 'MIRJAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730674',
    ),
    'enabled' => true,
  ),
  398 => 
  array (
    'id' => '6399',
    'bank_id' => '34',
    'name' => 'NAWTARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730708',
    ),
    'enabled' => true,
  ),
  399 => 
  array (
    'id' => '6400',
    'bank_id' => '34',
    'name' => 'NILPHAMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730737',
    ),
    'enabled' => true,
  ),
  400 => 
  array (
    'id' => '6401',
    'bank_id' => '34',
    'name' => 'SAYEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730795',
    ),
    'enabled' => true,
  ),
  401 => 
  array (
    'id' => '6402',
    'bank_id' => '34',
    'name' => 'TANGONMARIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730858',
    ),
    'enabled' => true,
  ),
  402 => 
  array (
    'id' => '6403',
    'bank_id' => '34',
    'name' => 'TAPERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180730887',
    ),
    'enabled' => true,
  ),
  403 => 
  array (
    'id' => '6404',
    'bank_id' => '34',
    'name' => 'KHALILPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760057',
    ),
    'enabled' => true,
  ),
  404 => 
  array (
    'id' => '6405',
    'bank_id' => '34',
    'name' => 'SILANDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760060',
    ),
    'enabled' => true,
  ),
  405 => 
  array (
    'id' => '6406',
    'bank_id' => '34',
    'name' => 'AMIRPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760073',
    ),
    'enabled' => true,
  ),
  406 => 
  array (
    'id' => '6407',
    'bank_id' => '34',
    'name' => 'AORONGOJEB ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760136',
    ),
    'enabled' => true,
  ),
  407 => 
  array (
    'id' => '6408',
    'bank_id' => '34',
    'name' => 'ATGHORIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760257',
    ),
    'enabled' => true,
  ),
  408 => 
  array (
    'id' => '6409',
    'bank_id' => '34',
    'name' => 'BERA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760460',
    ),
    'enabled' => true,
  ),
  409 => 
  array (
    'id' => '6410',
    'bank_id' => '34',
    'name' => 'BHANGURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760499',
    ),
    'enabled' => true,
  ),
  410 => 
  array (
    'id' => '6411',
    'bank_id' => '34',
    'name' => 'BONCOLAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760552',
    ),
    'enabled' => true,
  ),
  411 => 
  array (
    'id' => '6412',
    'bank_id' => '34',
    'name' => 'BONWARINAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760581',
    ),
    'enabled' => true,
  ),
  412 => 
  array (
    'id' => '6413',
    'bank_id' => '34',
    'name' => 'CHATMOHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760644',
    ),
    'enabled' => true,
  ),
  413 => 
  array (
    'id' => '6414',
    'bank_id' => '34',
    'name' => 'CHINAKHORA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760673',
    ),
    'enabled' => true,
  ),
  414 => 
  array (
    'id' => '6415',
    'bank_id' => '34',
    'name' => 'DAPUNIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760765',
    ),
    'enabled' => true,
  ),
  415 => 
  array (
    'id' => '6416',
    'bank_id' => '34',
    'name' => 'DHULAUI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180760886',
    ),
    'enabled' => true,
  ),
  416 => 
  array (
    'id' => '6417',
    'bank_id' => '34',
    'name' => 'DURGAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761001',
    ),
    'enabled' => true,
  ),
  417 => 
  array (
    'id' => '6418',
    'bank_id' => '34',
    'name' => 'FAILJANA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761069',
    ),
    'enabled' => true,
  ),
  418 => 
  array (
    'id' => '6419',
    'bank_id' => '34',
    'name' => 'HADOL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761151',
    ),
    'enabled' => true,
  ),
  419 => 
  array (
    'id' => '6420',
    'bank_id' => '34',
    'name' => 'HANDIAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761180',
    ),
    'enabled' => true,
  ),
  420 => 
  array (
    'id' => '6421',
    'bank_id' => '34',
    'name' => 'ISHWARDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761214',
    ),
    'enabled' => true,
  ),
  421 => 
  array (
    'id' => '6422',
    'bank_id' => '34',
    'name' => 'JOYNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761243',
    ),
    'enabled' => true,
  ),
  422 => 
  array (
    'id' => '6423',
    'bank_id' => '34',
    'name' => 'KHETUPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761364',
    ),
    'enabled' => true,
  ),
  423 => 
  array (
    'id' => '6424',
    'bank_id' => '34',
    'name' => 'MAIDANDIGHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761427',
    ),
    'enabled' => true,
  ),
  424 => 
  array (
    'id' => '6425',
    'bank_id' => '34',
    'name' => 'PABNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180761780',
    ),
    'enabled' => true,
  ),
  425 => 
  array (
    'id' => '6426',
    'bank_id' => '34',
    'name' => 'SANTHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180762055',
    ),
    'enabled' => true,
  ),
  426 => 
  array (
    'id' => '6427',
    'bank_id' => '34',
    'name' => 'SATBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180762084',
    ),
    'enabled' => true,
  ),
  427 => 
  array (
    'id' => '6428',
    'bank_id' => '34',
    'name' => 'SINGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180762239',
    ),
    'enabled' => true,
  ),
  428 => 
  array (
    'id' => '6429',
    'bank_id' => '34',
    'name' => 'SUJANAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180762268',
    ),
    'enabled' => true,
  ),
  429 => 
  array (
    'id' => '6430',
    'bank_id' => '34',
    'name' => 'ATWARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770047',
    ),
    'enabled' => true,
  ),
  430 => 
  array (
    'id' => '6431',
    'bank_id' => '34',
    'name' => 'BENGHARI BONGRAM MANIKPIR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770050',
    ),
    'enabled' => true,
  ),
  431 => 
  array (
    'id' => '6432',
    'bank_id' => '34',
    'name' => 'BHAJANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770100',
    ),
    'enabled' => true,
  ),
  432 => 
  array (
    'id' => '6433',
    'bank_id' => '34',
    'name' => 'BODA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770139',
    ),
    'enabled' => true,
  ),
  433 => 
  array (
    'id' => '6434',
    'bank_id' => '34',
    'name' => 'DEBIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770197',
    ),
    'enabled' => true,
  ),
  434 => 
  array (
    'id' => '6435',
    'bank_id' => '34',
    'name' => 'DHAKKAMARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770221',
    ),
    'enabled' => true,
  ),
  435 => 
  array (
    'id' => '6436',
    'bank_id' => '34',
    'name' => 'GOALJHARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770289',
    ),
    'enabled' => true,
  ),
  436 => 
  array (
    'id' => '6437',
    'bank_id' => '34',
    'name' => 'HARIVASA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770313',
    ),
    'enabled' => true,
  ),
  437 => 
  array (
    'id' => '6438',
    'bank_id' => '34',
    'name' => 'JHALOYSHALSHIRI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770371',
    ),
    'enabled' => true,
  ),
  438 => 
  array (
    'id' => '6439',
    'bank_id' => '34',
    'name' => 'KALIAGONG',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770405',
    ),
    'enabled' => true,
  ),
  439 => 
  array (
    'id' => '6440',
    'bank_id' => '34',
    'name' => 'KALIGANJHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770434',
    ),
    'enabled' => true,
  ),
  440 => 
  array (
    'id' => '6441',
    'bank_id' => '34',
    'name' => 'LAXMIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770463',
    ),
    'enabled' => true,
  ),
  441 => 
  array (
    'id' => '6442',
    'bank_id' => '34',
    'name' => 'MIRZAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770526',
    ),
    'enabled' => true,
  ),
  442 => 
  array (
    'id' => '6443',
    'bank_id' => '34',
    'name' => 'PANCHAGARH',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770555',
    ),
    'enabled' => true,
  ),
  443 => 
  array (
    'id' => '6444',
    'bank_id' => '34',
    'name' => 'SHAKOW',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770584',
    ),
    'enabled' => true,
  ),
  444 => 
  array (
    'id' => '6445',
    'bank_id' => '34',
    'name' => 'SONAHAR JAGANATH HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770647',
    ),
    'enabled' => true,
  ),
  445 => 
  array (
    'id' => '6446',
    'bank_id' => '34',
    'name' => 'TANOIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770676',
    ),
    'enabled' => true,
  ),
  446 => 
  array (
    'id' => '6447',
    'bank_id' => '34',
    'name' => 'TARAYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770700',
    ),
    'enabled' => true,
  ),
  447 => 
  array (
    'id' => '6448',
    'bank_id' => '34',
    'name' => 'TETULIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180770739',
    ),
    'enabled' => true,
  ),
  448 => 
  array (
    'id' => '6449',
    'bank_id' => '34',
    'name' => 'ALOKNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810044',
    ),
    'enabled' => true,
  ),
  449 => 
  array (
    'id' => '6450',
    'bank_id' => '34',
    'name' => 'DAUKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810060',
    ),
    'enabled' => true,
  ),
  450 => 
  array (
    'id' => '6451',
    'bank_id' => '34',
    'name' => 'BAGHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810107',
    ),
    'enabled' => true,
  ),
  451 => 
  array (
    'id' => '6452',
    'bank_id' => '34',
    'name' => 'BARAGACHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810257',
    ),
    'enabled' => true,
  ),
  452 => 
  array (
    'id' => '6453',
    'bank_id' => '34',
    'name' => 'BENOD PUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810310',
    ),
    'enabled' => true,
  ),
  453 => 
  array (
    'id' => '6454',
    'bank_id' => '34',
    'name' => 'BHAWANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810349',
    ),
    'enabled' => true,
  ),
  454 => 
  array (
    'id' => '6455',
    'bank_id' => '34',
    'name' => 'DURGAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810552',
    ),
    'enabled' => true,
  ),
  455 => 
  array (
    'id' => '6456',
    'bank_id' => '34',
    'name' => 'GODAGARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810615',
    ),
    'enabled' => true,
  ),
  456 => 
  array (
    'id' => '6457',
    'bank_id' => '34',
    'name' => 'GOGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810644',
    ),
    'enabled' => true,
  ),
  457 => 
  array (
    'id' => '6458',
    'bank_id' => '34',
    'name' => 'GREATER ROAD KAZIHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810686',
    ),
    'enabled' => true,
  ),
  458 => 
  array (
    'id' => '6459',
    'bank_id' => '34',
    'name' => 'HUZURIPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810857',
    ),
    'enabled' => true,
  ),
  459 => 
  array (
    'id' => '6460',
    'bank_id' => '34',
    'name' => 'KALIGONGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180810978',
    ),
    'enabled' => true,
  ),
  460 => 
  array (
    'id' => '6461',
    'bank_id' => '34',
    'name' => 'KAMARGOAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811001',
    ),
    'enabled' => true,
  ),
  461 => 
  array (
    'id' => '6462',
    'bank_id' => '34',
    'name' => 'KHORKHORI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811098',
    ),
    'enabled' => true,
  ),
  462 => 
  array (
    'id' => '6463',
    'bank_id' => '34',
    'name' => 'L.P.O',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811122',
    ),
    'enabled' => true,
  ),
  463 => 
  array (
    'id' => '6464',
    'bank_id' => '34',
    'name' => 'MACHMOIL BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811214',
    ),
    'enabled' => true,
  ),
  464 => 
  array (
    'id' => '6465',
    'bank_id' => '34',
    'name' => 'MAUGACHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811306',
    ),
    'enabled' => true,
  ),
  465 => 
  array (
    'id' => '6466',
    'bank_id' => '34',
    'name' => 'MOHANPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811393',
    ),
    'enabled' => true,
  ),
  466 => 
  array (
    'id' => '6467',
    'bank_id' => '34',
    'name' => 'MOLLARPARA HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811456',
    ),
    'enabled' => true,
  ),
  467 => 
  array (
    'id' => '6468',
    'bank_id' => '34',
    'name' => 'PABA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811698',
    ),
    'enabled' => true,
  ),
  468 => 
  array (
    'id' => '6469',
    'bank_id' => '34',
    'name' => 'PAKRI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811722',
    ),
    'enabled' => true,
  ),
  469 => 
  array (
    'id' => '6470',
    'bank_id' => '34',
    'name' => 'PANCHANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811751',
    ),
    'enabled' => true,
  ),
  470 => 
  array (
    'id' => '6471',
    'bank_id' => '34',
    'name' => 'PUTHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811843',
    ),
    'enabled' => true,
  ),
  471 => 
  array (
    'id' => '6472',
    'bank_id' => '34',
    'name' => 'RAJSHAHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180811935',
    ),
    'enabled' => true,
  ),
  472 => 
  array (
    'id' => '6473',
    'bank_id' => '34',
    'name' => 'SARDAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '180812200',
    ),
    'enabled' => true,
  ),
  473 => 
  array (
    'id' => '6474',
    'bank_id' => '34',
    'name' => 'SIKDARIBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180812271',
    ),
    'enabled' => true,
  ),
  474 => 
  array (
    'id' => '6475',
    'bank_id' => '34',
    'name' => 'TANORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '180812389',
    ),
    'enabled' => true,
  ),
  475 => 
  array (
    'id' => '6476',
    'bank_id' => '34',
    'name' => 'BADARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850109',
    ),
    'enabled' => true,
  ),
  476 => 
  array (
    'id' => '6477',
    'bank_id' => '34',
    'name' => 'BAIRATIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850138',
    ),
    'enabled' => true,
  ),
  477 => 
  array (
    'id' => '6478',
    'bank_id' => '34',
    'name' => 'BALARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850167',
    ),
    'enabled' => true,
  ),
  478 => 
  array (
    'id' => '6479',
    'bank_id' => '34',
    'name' => 'BALUAMASHIMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850196',
    ),
    'enabled' => true,
  ),
  479 => 
  array (
    'id' => '6480',
    'bank_id' => '34',
    'name' => 'DAMODURPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850433',
    ),
    'enabled' => true,
  ),
  480 => 
  array (
    'id' => '6481',
    'bank_id' => '34',
    'name' => 'DAMUR CHAKLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850462',
    ),
    'enabled' => true,
  ),
  481 => 
  array (
    'id' => '6482',
    'bank_id' => '34',
    'name' => 'DHAMTOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850491',
    ),
    'enabled' => true,
  ),
  482 => 
  array (
    'id' => '6483',
    'bank_id' => '34',
    'name' => 'EKORCHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850554',
    ),
    'enabled' => true,
  ),
  483 => 
  array (
    'id' => '6484',
    'bank_id' => '34',
    'name' => 'GANGACHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850617',
    ),
    'enabled' => true,
  ),
  484 => 
  array (
    'id' => '6485',
    'bank_id' => '34',
    'name' => 'GURGIPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850646',
    ),
    'enabled' => true,
  ),
  485 => 
  array (
    'id' => '6486',
    'bank_id' => '34',
    'name' => 'KAUNIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850767',
    ),
    'enabled' => true,
  ),
  486 => 
  array (
    'id' => '6487',
    'bank_id' => '34',
    'name' => 'KHEJMOTPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180850820',
    ),
    'enabled' => true,
  ),
  487 => 
  array (
    'id' => '6488',
    'bank_id' => '34',
    'name' => 'MATHERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851003',
    ),
    'enabled' => true,
  ),
  488 => 
  array (
    'id' => '6489',
    'bank_id' => '34',
    'name' => 'MITHAPUKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851090',
    ),
    'enabled' => true,
  ),
  489 => 
  array (
    'id' => '6490',
    'bank_id' => '34',
    'name' => 'MODUPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851124',
    ),
    'enabled' => true,
  ),
  490 => 
  array (
    'id' => '6491',
    'bank_id' => '34',
    'name' => 'NAGERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851153',
    ),
    'enabled' => true,
  ),
  491 => 
  array (
    'id' => '6492',
    'bank_id' => '34',
    'name' => 'PAIRABAND',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851245',
    ),
    'enabled' => true,
  ),
  492 => 
  array (
    'id' => '6493',
    'bank_id' => '34',
    'name' => 'PIRGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851337',
    ),
    'enabled' => true,
  ),
  493 => 
  array (
    'id' => '6494',
    'bank_id' => '34',
    'name' => 'PIRGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851366',
    ),
    'enabled' => true,
  ),
  494 => 
  array (
    'id' => '6495',
    'bank_id' => '34',
    'name' => 'PORSHURAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851395',
    ),
    'enabled' => true,
  ),
  495 => 
  array (
    'id' => '6496',
    'bank_id' => '34',
    'name' => 'RANGPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851458',
    ),
    'enabled' => true,
  ),
  496 => 
  array (
    'id' => '6497',
    'bank_id' => '34',
    'name' => 'RANIPUKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851579',
    ),
    'enabled' => true,
  ),
  497 => 
  array (
    'id' => '6498',
    'bank_id' => '34',
    'name' => 'SADDYAPUSHKURINI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851632',
    ),
    'enabled' => true,
  ),
  498 => 
  array (
    'id' => '6499',
    'bank_id' => '34',
    'name' => 'SHENERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851816',
    ),
    'enabled' => true,
  ),
  499 => 
  array (
    'id' => '6500',
    'bank_id' => '34',
    'name' => 'SUKURAR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851908',
    ),
    'enabled' => true,
  ),
  500 => 
  array (
    'id' => '6501',
    'bank_id' => '34',
    'name' => 'TARAGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851937',
    ),
    'enabled' => true,
  ),
  501 => 
  array (
    'id' => '6502',
    'bank_id' => '34',
    'name' => 'TAXER HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180851940',
    ),
    'enabled' => true,
  ),
  502 => 
  array (
    'id' => '6503',
    'bank_id' => '34',
    'name' => 'BELKUCHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880229',
    ),
    'enabled' => true,
  ),
  503 => 
  array (
    'id' => '6504',
    'bank_id' => '34',
    'name' => 'BHADRAGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880311',
    ),
    'enabled' => true,
  ),
  504 => 
  array (
    'id' => '6505',
    'bank_id' => '34',
    'name' => 'CHALITADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880403',
    ),
    'enabled' => true,
  ),
  505 => 
  array (
    'id' => '6506',
    'bank_id' => '34',
    'name' => 'CHANGACHAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880461',
    ),
    'enabled' => true,
  ),
  506 => 
  array (
    'id' => '6507',
    'bank_id' => '34',
    'name' => 'CHOWHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880524',
    ),
    'enabled' => true,
  ),
  507 => 
  array (
    'id' => '6508',
    'bank_id' => '34',
    'name' => 'GANTHAIL BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880858',
    ),
    'enabled' => true,
  ),
  508 => 
  array (
    'id' => '6509',
    'bank_id' => '34',
    'name' => 'GHURKA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180880887',
    ),
    'enabled' => true,
  ),
  509 => 
  array (
    'id' => '6510',
    'bank_id' => '34',
    'name' => 'KAMARKHAND',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881031',
    ),
    'enabled' => true,
  ),
  510 => 
  array (
    'id' => '6511',
    'bank_id' => '34',
    'name' => 'KASINATHPR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881060',
    ),
    'enabled' => true,
  ),
  511 => 
  array (
    'id' => '6512',
    'bank_id' => '34',
    'name' => 'KHOKSHABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881244',
    ),
    'enabled' => true,
  ),
  512 => 
  array (
    'id' => '6513',
    'bank_id' => '34',
    'name' => 'MEGHAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881365',
    ),
    'enabled' => true,
  ),
  513 => 
  array (
    'id' => '6514',
    'bank_id' => '34',
    'name' => 'NEWARGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881486',
    ),
    'enabled' => true,
  ),
  514 => 
  array (
    'id' => '6515',
    'bank_id' => '34',
    'name' => 'PANCHAKHUSHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881549',
    ),
    'enabled' => true,
  ),
  515 => 
  array (
    'id' => '6516',
    'bank_id' => '34',
    'name' => 'PURNIMAGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881631',
    ),
    'enabled' => true,
  ),
  516 => 
  array (
    'id' => '6517',
    'bank_id' => '34',
    'name' => 'RAIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881699',
    ),
    'enabled' => true,
  ),
  517 => 
  array (
    'id' => '6518',
    'bank_id' => '34',
    'name' => 'SAIDABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881815',
    ),
    'enabled' => true,
  ),
  518 => 
  array (
    'id' => '6519',
    'bank_id' => '34',
    'name' => 'SERAJGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881873',
    ),
    'enabled' => true,
  ),
  519 => 
  array (
    'id' => '6520',
    'bank_id' => '34',
    'name' => 'SHAHJADPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180881907',
    ),
    'enabled' => true,
  ),
  520 => 
  array (
    'id' => '6521',
    'bank_id' => '34',
    'name' => 'TAMAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180882148',
    ),
    'enabled' => true,
  ),
  521 => 
  array (
    'id' => '6522',
    'bank_id' => '34',
    'name' => 'TARASH',
    'bank_branch_data' => 
    array (
      'routing_no' => '180882177',
    ),
    'enabled' => true,
  ),
  522 => 
  array (
    'id' => '6523',
    'bank_id' => '34',
    'name' => 'UDHUNIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180882201',
    ),
    'enabled' => true,
  ),
  523 => 
  array (
    'id' => '6524',
    'bank_id' => '34',
    'name' => 'ULLAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180882230',
    ),
    'enabled' => true,
  ),
  524 => 
  array (
    'id' => '6525',
    'bank_id' => '34',
    'name' => 'AULIAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940077',
    ),
    'enabled' => true,
  ),
  525 => 
  array (
    'id' => '6526',
    'bank_id' => '34',
    'name' => 'BALIADANGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940101',
    ),
    'enabled' => true,
  ),
  526 => 
  array (
    'id' => '6527',
    'bank_id' => '34',
    'name' => 'BEGUNBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940130',
    ),
    'enabled' => true,
  ),
  527 => 
  array (
    'id' => '6528',
    'bank_id' => '34',
    'name' => 'BHABNAGONJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940169',
    ),
    'enabled' => true,
  ),
  528 => 
  array (
    'id' => '6529',
    'bank_id' => '34',
    'name' => 'BHOMRADHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940198',
    ),
    'enabled' => true,
  ),
  529 => 
  array (
    'id' => '6530',
    'bank_id' => '34',
    'name' => 'CHAROL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940251',
    ),
    'enabled' => true,
  ),
  530 => 
  array (
    'id' => '6531',
    'bank_id' => '34',
    'name' => 'CHOWRANGI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940314',
    ),
    'enabled' => true,
  ),
  531 => 
  array (
    'id' => '6532',
    'bank_id' => '34',
    'name' => 'DARMAGARH',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940343',
    ),
    'enabled' => true,
  ),
  532 => 
  array (
    'id' => '6533',
    'bank_id' => '34',
    'name' => 'FARABANIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940372',
    ),
    'enabled' => true,
  ),
  533 => 
  array (
    'id' => '6534',
    'bank_id' => '34',
    'name' => 'GOGORHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940406',
    ),
    'enabled' => true,
  ),
  534 => 
  array (
    'id' => '6535',
    'bank_id' => '34',
    'name' => 'HARIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940464',
    ),
    'enabled' => true,
  ),
  535 => 
  array (
    'id' => '6536',
    'bank_id' => '34',
    'name' => 'JADURANIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940527',
    ),
    'enabled' => true,
  ),
  536 => 
  array (
    'id' => '6537',
    'bank_id' => '34',
    'name' => 'KARTIKTOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940556',
    ),
    'enabled' => true,
  ),
  537 => 
  array (
    'id' => '6538',
    'bank_id' => '34',
    'name' => 'MADARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940648',
    ),
    'enabled' => true,
  ),
  538 => 
  array (
    'id' => '6539',
    'bank_id' => '34',
    'name' => 'NARGUN',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940701',
    ),
    'enabled' => true,
  ),
  539 => 
  array (
    'id' => '6540',
    'bank_id' => '34',
    'name' => 'PIRGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940769',
    ),
    'enabled' => true,
  ),
  540 => 
  array (
    'id' => '6541',
    'bank_id' => '34',
    'name' => 'RANISANKAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940822',
    ),
    'enabled' => true,
  ),
  541 => 
  array (
    'id' => '6542',
    'bank_id' => '34',
    'name' => 'THAKURGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '180940972',
    ),
    'enabled' => true,
  ),
  542 => 
  array (
    'id' => '6543',
    'bank_id' => '34',
    'name' => 'VALAZAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '180941063',
    ),
    'enabled' => true,
  ),
  543 => 
  array (
    'id' => '6544',
    'bank_id' => '35',
    'name' => 'BAGERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010078',
    ),
    'enabled' => true,
  ),
  544 => 
  array (
    'id' => '6545',
    'bank_id' => '35',
    'name' => 'BARAIKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010131',
    ),
    'enabled' => true,
  ),
  545 => 
  array (
    'id' => '6546',
    'bank_id' => '35',
    'name' => 'BETAGABAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010160',
    ),
    'enabled' => true,
  ),
  546 => 
  array (
    'id' => '6547',
    'bank_id' => '35',
    'name' => 'FAKIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010465',
    ),
    'enabled' => true,
  ),
  547 => 
  array (
    'id' => '6548',
    'bank_id' => '35',
    'name' => 'KACHUA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010760',
    ),
    'enabled' => true,
  ),
  548 => 
  array (
    'id' => '6549',
    'bank_id' => '35',
    'name' => 'MANSHA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010881',
    ),
    'enabled' => true,
  ),
  549 => 
  array (
    'id' => '6550',
    'bank_id' => '35',
    'name' => 'MOLLAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010915',
    ),
    'enabled' => true,
  ),
  550 => 
  array (
    'id' => '6551',
    'bank_id' => '35',
    'name' => 'MONGLA PORT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185010973',
    ),
    'enabled' => true,
  ),
  551 => 
  array (
    'id' => '6552',
    'bank_id' => '35',
    'name' => 'NAGAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185011093',
    ),
    'enabled' => true,
  ),
  552 => 
  array (
    'id' => '6553',
    'bank_id' => '35',
    'name' => 'BANDARBAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185030137',
    ),
    'enabled' => true,
  ),
  553 => 
  array (
    'id' => '6554',
    'bank_id' => '35',
    'name' => 'AMTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185040048',
    ),
    'enabled' => true,
  ),
  554 => 
  array (
    'id' => '6555',
    'bank_id' => '35',
    'name' => 'BARGUNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185040130',
    ),
    'enabled' => true,
  ),
  555 => 
  array (
    'id' => '6556',
    'bank_id' => '35',
    'name' => 'BETAGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185040222',
    ),
    'enabled' => true,
  ),
  556 => 
  array (
    'id' => '6557',
    'bank_id' => '35',
    'name' => 'PATHARGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185040677',
    ),
    'enabled' => true,
  ),
  557 => 
  array (
    'id' => '6558',
    'bank_id' => '35',
    'name' => 'AGARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060044',
    ),
    'enabled' => true,
  ),
  558 => 
  array (
    'id' => '6559',
    'bank_id' => '35',
    'name' => 'MULADI BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060060',
    ),
    'enabled' => true,
  ),
  559 => 
  array (
    'id' => '6560',
    'bank_id' => '35',
    'name' => 'KAURIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060152',
    ),
    'enabled' => true,
  ),
  560 => 
  array (
    'id' => '6561',
    'bank_id' => '35',
    'name' => 'BAKERGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060228',
    ),
    'enabled' => true,
  ),
  561 => 
  array (
    'id' => '6562',
    'bank_id' => '35',
    'name' => 'BANARI PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060257',
    ),
    'enabled' => true,
  ),
  562 => 
  array (
    'id' => '6563',
    'bank_id' => '35',
    'name' => 'BAZAR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060402',
    ),
    'enabled' => true,
  ),
  563 => 
  array (
    'id' => '6564',
    'bank_id' => '35',
    'name' => 'BHAVANIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060460',
    ),
    'enabled' => true,
  ),
  564 => 
  array (
    'id' => '6565',
    'bank_id' => '35',
    'name' => 'CENTRAL BUS TERMINAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060615',
    ),
    'enabled' => true,
  ),
  565 => 
  array (
    'id' => '6566',
    'bank_id' => '35',
    'name' => 'H.U. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185060886',
    ),
    'enabled' => true,
  ),
  566 => 
  array (
    'id' => '6567',
    'bank_id' => '35',
    'name' => 'MEHENDIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185061364',
    ),
    'enabled' => true,
  ),
  567 => 
  array (
    'id' => '6568',
    'bank_id' => '35',
    'name' => 'RAHMATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185061722',
    ),
    'enabled' => true,
  ),
  568 => 
  array (
    'id' => '6569',
    'bank_id' => '35',
    'name' => 'SADAR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185061814',
    ),
    'enabled' => true,
  ),
  569 => 
  array (
    'id' => '6570',
    'bank_id' => '35',
    'name' => 'SAGARDI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185061872',
    ),
    'enabled' => true,
  ),
  570 => 
  array (
    'id' => '6571',
    'bank_id' => '35',
    'name' => 'SIKARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185062084',
    ),
    'enabled' => true,
  ),
  571 => 
  array (
    'id' => '6572',
    'bank_id' => '35',
    'name' => 'ILISHA JUNCTION BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090056',
    ),
    'enabled' => true,
  ),
  572 => 
  array (
    'id' => '6573',
    'bank_id' => '35',
    'name' => 'BANGLABAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090072',
    ),
    'enabled' => true,
  ),
  573 => 
  array (
    'id' => '6574',
    'bank_id' => '35',
    'name' => 'BHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090106',
    ),
    'enabled' => true,
  ),
  574 => 
  array (
    'id' => '6575',
    'bank_id' => '35',
    'name' => 'DAULATKHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090377',
    ),
    'enabled' => true,
  ),
  575 => 
  array (
    'id' => '6576',
    'bank_id' => '35',
    'name' => 'JINNAHGHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090522',
    ),
    'enabled' => true,
  ),
  576 => 
  array (
    'id' => '6577',
    'bank_id' => '35',
    'name' => 'KUNJERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090643',
    ),
    'enabled' => true,
  ),
  577 => 
  array (
    'id' => '6578',
    'bank_id' => '35',
    'name' => 'KUTBA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090672',
    ),
    'enabled' => true,
  ),
  578 => 
  array (
    'id' => '6579',
    'bank_id' => '35',
    'name' => 'LALMOHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090706',
    ),
    'enabled' => true,
  ),
  579 => 
  array (
    'id' => '6580',
    'bank_id' => '35',
    'name' => 'MAHAJAN PATTY',
    'bank_branch_data' => 
    array (
      'routing_no' => '185090764',
    ),
    'enabled' => true,
  ),
  580 => 
  array (
    'id' => '6581',
    'bank_id' => '35',
    'name' => 'TAZUMUDDIN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185091000',
    ),
    'enabled' => true,
  ),
  581 => 
  array (
    'id' => '6582',
    'bank_id' => '35',
    'name' => 'ALTAFNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100104',
    ),
    'enabled' => true,
  ),
  582 => 
  array (
    'id' => '6583',
    'bank_id' => '35',
    'name' => 'BHAYER PUKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100317',
    ),
    'enabled' => true,
  ),
  583 => 
  array (
    'id' => '6584',
    'bank_id' => '35',
    'name' => 'BOGRA CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100438',
    ),
    'enabled' => true,
  ),
  584 => 
  array (
    'id' => '6585',
    'bank_id' => '35',
    'name' => 'BOROGOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100496',
    ),
    'enabled' => true,
  ),
  585 => 
  array (
    'id' => '6586',
    'bank_id' => '35',
    'name' => 'BUS STAND',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100559',
    ),
    'enabled' => true,
  ),
  586 => 
  array (
    'id' => '6587',
    'bank_id' => '35',
    'name' => 'DHUNAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100883',
    ),
    'enabled' => true,
  ),
  587 => 
  array (
    'id' => '6588',
    'bank_id' => '35',
    'name' => 'DUPCHACHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185100917',
    ),
    'enabled' => true,
  ),
  588 => 
  array (
    'id' => '6589',
    'bank_id' => '35',
    'name' => 'GABTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101037',
    ),
    'enabled' => true,
  ),
  589 => 
  array (
    'id' => '6590',
    'bank_id' => '35',
    'name' => 'GOLABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101240',
    ),
    'enabled' => true,
  ),
  590 => 
  array (
    'id' => '6591',
    'bank_id' => '35',
    'name' => 'GOSSAINBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101279',
    ),
    'enabled' => true,
  ),
  591 => 
  array (
    'id' => '6592',
    'bank_id' => '35',
    'name' => 'HATFUL BARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101361',
    ),
    'enabled' => true,
  ),
  592 => 
  array (
    'id' => '6593',
    'bank_id' => '35',
    'name' => 'JAHANGIRABAD CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101424',
    ),
    'enabled' => true,
  ),
  593 => 
  array (
    'id' => '6594',
    'bank_id' => '35',
    'name' => 'KAHALOO',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101545',
    ),
    'enabled' => true,
  ),
  594 => 
  array (
    'id' => '6595',
    'bank_id' => '35',
    'name' => 'KICHAK',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101637',
    ),
    'enabled' => true,
  ),
  595 => 
  array (
    'id' => '6596',
    'bank_id' => '35',
    'name' => 'LADIES',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101695',
    ),
    'enabled' => true,
  ),
  596 => 
  array (
    'id' => '6597',
    'bank_id' => '35',
    'name' => 'MAHASTAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101787',
    ),
    'enabled' => true,
  ),
  597 => 
  array (
    'id' => '6598',
    'bank_id' => '35',
    'name' => 'MOKAMTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101932',
    ),
    'enabled' => true,
  ),
  598 => 
  array (
    'id' => '6599',
    'bank_id' => '35',
    'name' => 'NAMAJGHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185101961',
    ),
    'enabled' => true,
  ),
  599 => 
  array (
    'id' => '6600',
    'bank_id' => '35',
    'name' => 'SHABEKPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185102599',
    ),
    'enabled' => true,
  ),
  600 => 
  array (
    'id' => '6601',
    'bank_id' => '35',
    'name' => 'SHABGRAMHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185102623',
    ),
    'enabled' => true,
  ),
  601 => 
  array (
    'id' => '6602',
    'bank_id' => '35',
    'name' => 'SHIBGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185102807',
    ),
    'enabled' => true,
  ),
  602 => 
  array (
    'id' => '6603',
    'bank_id' => '35',
    'name' => 'SUKHANPUKUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185103019',
    ),
    'enabled' => true,
  ),
  603 => 
  array (
    'id' => '6604',
    'bank_id' => '35',
    'name' => 'THANA ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185103169',
    ),
    'enabled' => true,
  ),
  604 => 
  array (
    'id' => '6605',
    'bank_id' => '35',
    'name' => 'ASHUGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185120100',
    ),
    'enabled' => true,
  ),
  605 => 
  array (
    'id' => '6606',
    'bank_id' => '35',
    'name' => 'BARRISTER ZAKIR AHAMED COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185120171',
    ),
    'enabled' => true,
  ),
  606 => 
  array (
    'id' => '6607',
    'bank_id' => '35',
    'name' => 'BRAHMANBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185120434',
    ),
    'enabled' => true,
  ),
  607 => 
  array (
    'id' => '6608',
    'bank_id' => '35',
    'name' => 'NABINAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185121367',
    ),
    'enabled' => true,
  ),
  608 => 
  array (
    'id' => '6609',
    'bank_id' => '35',
    'name' => 'BIRAMPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185130174',
    ),
    'enabled' => true,
  ),
  609 => 
  array (
    'id' => '6610',
    'bank_id' => '35',
    'name' => 'SHOSHAIRCHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185130187',
    ),
    'enabled' => true,
  ),
  610 => 
  array (
    'id' => '6611',
    'bank_id' => '35',
    'name' => 'NAYARHAT BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185130240',
    ),
    'enabled' => true,
  ),
  611 => 
  array (
    'id' => '6612',
    'bank_id' => '35',
    'name' => 'CHITOSHI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185130587',
    ),
    'enabled' => true,
  ),
  612 => 
  array (
    'id' => '6613',
    'bank_id' => '35',
    'name' => 'HAJIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185130882',
    ),
    'enabled' => true,
  ),
  613 => 
  array (
    'id' => '6614',
    'bank_id' => '35',
    'name' => 'KACHUA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185130916',
    ),
    'enabled' => true,
  ),
  614 => 
  array (
    'id' => '6615',
    'bank_id' => '35',
    'name' => 'MAHAMAYA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185131128',
    ),
    'enabled' => true,
  ),
  615 => 
  array (
    'id' => '6616',
    'bank_id' => '35',
    'name' => 'NATUN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185131481',
    ),
    'enabled' => true,
  ),
  616 => 
  array (
    'id' => '6617',
    'bank_id' => '35',
    'name' => 'NAZIRPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185131573',
    ),
    'enabled' => true,
  ),
  617 => 
  array (
    'id' => '6618',
    'bank_id' => '35',
    'name' => 'BABUR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185131665',
    ),
    'enabled' => true,
  ),
  618 => 
  array (
    'id' => '6619',
    'bank_id' => '35',
    'name' => 'RAMPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185131757',
    ),
    'enabled' => true,
  ),
  619 => 
  array (
    'id' => '6620',
    'bank_id' => '35',
    'name' => 'SHAHATALI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185131931',
    ),
    'enabled' => true,
  ),
  620 => 
  array (
    'id' => '6621',
    'bank_id' => '35',
    'name' => 'ENAYETPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185150091',
    ),
    'enabled' => true,
  ),
  621 => 
  array (
    'id' => '6622',
    'bank_id' => '35',
    'name' => 'ABUTORAB BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185150109',
    ),
    'enabled' => true,
  ),
  622 => 
  array (
    'id' => '6623',
    'bank_id' => '35',
    'name' => 'AGRABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185150138',
    ),
    'enabled' => true,
  ),
  623 => 
  array (
    'id' => '6624',
    'bank_id' => '35',
    'name' => 'AMIR MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185150370',
    ),
    'enabled' => true,
  ),
  624 => 
  array (
    'id' => '6625',
    'bank_id' => '35',
    'name' => 'ANDERKILLA CORORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185150491',
    ),
    'enabled' => true,
  ),
  625 => 
  array (
    'id' => '6626',
    'bank_id' => '35',
    'name' => 'ANOWARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185150525',
    ),
    'enabled' => true,
  ),
  626 => 
  array (
    'id' => '6627',
    'bank_id' => '35',
    'name' => 'BIBIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185151245',
    ),
    'enabled' => true,
  ),
  627 => 
  array (
    'id' => '6628',
    'bank_id' => '35',
    'name' => 'BOXIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185151366',
    ),
    'enabled' => true,
  ),
  628 => 
  array (
    'id' => '6629',
    'bank_id' => '35',
    'name' => 'CAITANNA GALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185151690',
    ),
    'enabled' => true,
  ),
  629 => 
  array (
    'id' => '6630',
    'bank_id' => '35',
    'name' => 'CHAKTAI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185151753',
    ),
    'enabled' => true,
  ),
  630 => 
  array (
    'id' => '6631',
    'bank_id' => '35',
    'name' => 'CHANDGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '185151845',
    ),
    'enabled' => true,
  ),
  631 => 
  array (
    'id' => '6632',
    'bank_id' => '35',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185151937',
    ),
    'enabled' => true,
  ),
  632 => 
  array (
    'id' => '6633',
    'bank_id' => '35',
    'name' => 'COMMERCIAL AREA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185152323',
    ),
    'enabled' => true,
  ),
  633 => 
  array (
    'id' => '6634',
    'bank_id' => '35',
    'name' => 'DEWAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185152415',
    ),
    'enabled' => true,
  ),
  634 => 
  array (
    'id' => '6635',
    'bank_id' => '35',
    'name' => 'DHANIALAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185152473',
    ),
    'enabled' => true,
  ),
  635 => 
  array (
    'id' => '6636',
    'bank_id' => '35',
    'name' => 'NAZIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185152686',
    ),
    'enabled' => true,
  ),
  636 => 
  array (
    'id' => '6637',
    'bank_id' => '35',
    'name' => 'CUET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185152981',
    ),
    'enabled' => true,
  ),
  637 => 
  array (
    'id' => '6638',
    'bank_id' => '35',
    'name' => 'GOMDANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153043',
    ),
    'enabled' => true,
  ),
  638 => 
  array (
    'id' => '6639',
    'bank_id' => '35',
    'name' => 'H.S.S. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153106',
    ),
    'enabled' => true,
  ),
  639 => 
  array (
    'id' => '6640',
    'bank_id' => '35',
    'name' => 'IQBAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153348',
    ),
    'enabled' => true,
  ),
  640 => 
  array (
    'id' => '6641',
    'bank_id' => '35',
    'name' => 'ISHAN MISTRY HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153401',
    ),
    'enabled' => true,
  ),
  641 => 
  array (
    'id' => '6642',
    'bank_id' => '35',
    'name' => 'JAHAN BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153498',
    ),
    'enabled' => true,
  ),
  642 => 
  array (
    'id' => '6643',
    'bank_id' => '35',
    'name' => 'JUBILEE ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153643',
    ),
    'enabled' => true,
  ),
  643 => 
  array (
    'id' => '6644',
    'bank_id' => '35',
    'name' => 'KALURGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185153919',
    ),
    'enabled' => true,
  ),
  644 => 
  array (
    'id' => '6645',
    'bank_id' => '35',
    'name' => 'KERANIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185154189',
    ),
    'enabled' => true,
  ),
  645 => 
  array (
    'id' => '6646',
    'bank_id' => '35',
    'name' => 'KHANSHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185154242',
    ),
    'enabled' => true,
  ),
  646 => 
  array (
    'id' => '6647',
    'bank_id' => '35',
    'name' => 'KORBANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185154392',
    ),
    'enabled' => true,
  ),
  647 => 
  array (
    'id' => '6648',
    'bank_id' => '35',
    'name' => 'LADIES',
    'bank_branch_data' => 
    array (
      'routing_no' => '185154484',
    ),
    'enabled' => true,
  ),
  648 => 
  array (
    'id' => '6649',
    'bank_id' => '35',
    'name' => 'LAMAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185154600',
    ),
    'enabled' => true,
  ),
  649 => 
  array (
    'id' => '6650',
    'bank_id' => '35',
    'name' => 'LICHU BAGAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185154639',
    ),
    'enabled' => true,
  ),
  650 => 
  array (
    'id' => '6651',
    'bank_id' => '35',
    'name' => 'NOOR-ALI BARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185155746',
    ),
    'enabled' => true,
  ),
  651 => 
  array (
    'id' => '6652',
    'bank_id' => '35',
    'name' => 'OMARALI MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185155867',
    ),
    'enabled' => true,
  ),
  652 => 
  array (
    'id' => '6653',
    'bank_id' => '35',
    'name' => 'PAHARTALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185155920',
    ),
    'enabled' => true,
  ),
  653 => 
  array (
    'id' => '6654',
    'bank_id' => '35',
    'name' => 'PANCHLAISH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156040',
    ),
    'enabled' => true,
  ),
  654 => 
  array (
    'id' => '6655',
    'bank_id' => '35',
    'name' => 'PATHERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156132',
    ),
    'enabled' => true,
  ),
  655 => 
  array (
    'id' => '6656',
    'bank_id' => '35',
    'name' => 'PATIYA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156161',
    ),
    'enabled' => true,
  ),
  656 => 
  array (
    'id' => '6657',
    'bank_id' => '35',
    'name' => 'RAOZAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156495',
    ),
    'enabled' => true,
  ),
  657 => 
  array (
    'id' => '6658',
    'bank_id' => '35',
    'name' => 'RUPALI SADAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156611',
    ),
    'enabled' => true,
  ),
  658 => 
  array (
    'id' => '6659',
    'bank_id' => '35',
    'name' => 'SADARGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156732',
    ),
    'enabled' => true,
  ),
  659 => 
  array (
    'id' => '6660',
    'bank_id' => '35',
    'name' => 'SAGARIKA ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156761',
    ),
    'enabled' => true,
  ),
  660 => 
  array (
    'id' => '6661',
    'bank_id' => '35',
    'name' => 'SAKPURA CHUMUHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156824',
    ),
    'enabled' => true,
  ),
  661 => 
  array (
    'id' => '6662',
    'bank_id' => '35',
    'name' => 'SANTIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185156974',
    ),
    'enabled' => true,
  ),
  662 => 
  array (
    'id' => '6663',
    'bank_id' => '35',
    'name' => 'STAND ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185157481',
    ),
    'enabled' => true,
  ),
  663 => 
  array (
    'id' => '6664',
    'bank_id' => '35',
    'name' => 'STATION ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185157515',
    ),
    'enabled' => true,
  ),
  664 => 
  array (
    'id' => '6665',
    'bank_id' => '35',
    'name' => 'TERRI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185157636',
    ),
    'enabled' => true,
  ),
  665 => 
  array (
    'id' => '6666',
    'bank_id' => '35',
    'name' => 'URKIRCHAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185157665',
    ),
    'enabled' => true,
  ),
  666 => 
  array (
    'id' => '6667',
    'bank_id' => '35',
    'name' => 'ALAMDANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185180045',
    ),
    'enabled' => true,
  ),
  667 => 
  array (
    'id' => '6668',
    'bank_id' => '35',
    'name' => 'CHUADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185180195',
    ),
    'enabled' => true,
  ),
  668 => 
  array (
    'id' => '6669',
    'bank_id' => '35',
    'name' => 'DAMURHUDA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185180287',
    ),
    'enabled' => true,
  ),
  669 => 
  array (
    'id' => '6670',
    'bank_id' => '35',
    'name' => 'MOMINPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185180737',
    ),
    'enabled' => true,
  ),
  670 => 
  array (
    'id' => '6671',
    'bank_id' => '35',
    'name' => 'GAZIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185190051',
    ),
    'enabled' => true,
  ),
  671 => 
  array (
    'id' => '6672',
    'bank_id' => '35',
    'name' => 'BAGMARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185190314',
    ),
    'enabled' => true,
  ),
  672 => 
  array (
    'id' => '6673',
    'bank_id' => '35',
    'name' => 'BARERA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185190464',
    ),
    'enabled' => true,
  ),
  673 => 
  array (
    'id' => '6674',
    'bank_id' => '35',
    'name' => 'BIPULESHWAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185190648',
    ),
    'enabled' => true,
  ),
  674 => 
  array (
    'id' => '6675',
    'bank_id' => '35',
    'name' => 'BUSCHI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185190851',
    ),
    'enabled' => true,
  ),
  675 => 
  array (
    'id' => '6676',
    'bank_id' => '35',
    'name' => 'CHOWARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185191092',
    ),
    'enabled' => true,
  ),
  676 => 
  array (
    'id' => '6677',
    'bank_id' => '35',
    'name' => 'COMILLA CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185191218',
    ),
    'enabled' => true,
  ),
  677 => 
  array (
    'id' => '6678',
    'bank_id' => '35',
    'name' => 'COMPANIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185191421',
    ),
    'enabled' => true,
  ),
  678 => 
  array (
    'id' => '6679',
    'bank_id' => '35',
    'name' => 'DAULATGANJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185191571',
    ),
    'enabled' => true,
  ),
  679 => 
  array (
    'id' => '6680',
    'bank_id' => '35',
    'name' => 'GANGCHAR TIMBER MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185192088',
    ),
    'enabled' => true,
  ),
  680 => 
  array (
    'id' => '6681',
    'bank_id' => '35',
    'name' => 'MADHAYA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185192804',
    ),
    'enabled' => true,
  ),
  681 => 
  array (
    'id' => '6682',
    'bank_id' => '35',
    'name' => 'MAINAMATI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185192833',
    ),
    'enabled' => true,
  ),
  682 => 
  array (
    'id' => '6683',
    'bank_id' => '35',
    'name' => 'MONOHARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185193045',
    ),
    'enabled' => true,
  ),
  683 => 
  array (
    'id' => '6684',
    'bank_id' => '35',
    'name' => 'MONOHARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185193074',
    ),
    'enabled' => true,
  ),
  684 => 
  array (
    'id' => '6685',
    'bank_id' => '35',
    'name' => 'MUDAFARGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185193137',
    ),
    'enabled' => true,
  ),
  685 => 
  array (
    'id' => '6686',
    'bank_id' => '35',
    'name' => 'RAJGONJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185193616',
    ),
    'enabled' => true,
  ),
  686 => 
  array (
    'id' => '6687',
    'bank_id' => '35',
    'name' => 'BAZARGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185220134',
    ),
    'enabled' => true,
  ),
  687 => 
  array (
    'id' => '6688',
    'bank_id' => '35',
    'name' => 'CHIRINGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185220192',
    ),
    'enabled' => true,
  ),
  688 => 
  array (
    'id' => '6689',
    'bank_id' => '35',
    'name' => 'COURT BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185220226',
    ),
    'enabled' => true,
  ),
  689 => 
  array (
    'id' => '6690',
    'bank_id' => '35',
    'name' => 'EIDGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '185220400',
    ),
    'enabled' => true,
  ),
  690 => 
  array (
    'id' => '6691',
    'bank_id' => '35',
    'name' => 'RAMU',
    'bank_branch_data' => 
    array (
      'routing_no' => '185220855',
    ),
    'enabled' => true,
  ),
  691 => 
  array (
    'id' => '6692',
    'bank_id' => '35',
    'name' => 'RUPALI SADAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185220884',
    ),
    'enabled' => true,
  ),
  692 => 
  array (
    'id' => '6693',
    'bank_id' => '35',
    'name' => 'NIKUNJA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185260181',
    ),
    'enabled' => true,
  ),
  693 => 
  array (
    'id' => '6694',
    'bank_id' => '35',
    'name' => 'ADABOR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185260844',
    ),
    'enabled' => true,
  ),
  694 => 
  array (
    'id' => '6695',
    'bank_id' => '35',
    'name' => 'DHAKA CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261001',
    ),
    'enabled' => true,
  ),
  695 => 
  array (
    'id' => '6696',
    'bank_id' => '35',
    'name' => 'DHANMONDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261180',
    ),
    'enabled' => true,
  ),
  696 => 
  array (
    'id' => '6697',
    'bank_id' => '35',
    'name' => 'ELEPHANT ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261335',
    ),
    'enabled' => true,
  ),
  697 => 
  array (
    'id' => '6698',
    'bank_id' => '35',
    'name' => 'FARMGATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261456',
    ),
    'enabled' => true,
  ),
  698 => 
  array (
    'id' => '6699',
    'bank_id' => '35',
    'name' => 'FERDOWSI PLAZA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261519',
    ),
    'enabled' => true,
  ),
  699 => 
  array (
    'id' => '6700',
    'bank_id' => '35',
    'name' => 'GABTALIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261577',
    ),
    'enabled' => true,
  ),
  700 => 
  array (
    'id' => '6701',
    'bank_id' => '35',
    'name' => 'GULSHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261722',
    ),
    'enabled' => true,
  ),
  701 => 
  array (
    'id' => '6702',
    'bank_id' => '35',
    'name' => 'HAZARIBAGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185261964',
    ),
    'enabled' => true,
  ),
  702 => 
  array (
    'id' => '6703',
    'bank_id' => '35',
    'name' => 'INDIRA ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185262176',
    ),
    'enabled' => true,
  ),
  703 => 
  array (
    'id' => '6704',
    'bank_id' => '35',
    'name' => 'KUSHURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185262684',
    ),
    'enabled' => true,
  ),
  704 => 
  array (
    'id' => '6705',
    'bank_id' => '35',
    'name' => 'LADIES(NEWMARKET)',
    'bank_branch_data' => 
    array (
      'routing_no' => '185262776',
    ),
    'enabled' => true,
  ),
  705 => 
  array (
    'id' => '6706',
    'bank_id' => '35',
    'name' => 'MAHMUD MANSION',
    'bank_branch_data' => 
    array (
      'routing_no' => '185262868',
    ),
    'enabled' => true,
  ),
  706 => 
  array (
    'id' => '6707',
    'bank_id' => '35',
    'name' => 'MIRPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185262989',
    ),
    'enabled' => true,
  ),
  707 => 
  array (
    'id' => '6708',
    'bank_id' => '35',
    'name' => 'MOHAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185263191',
    ),
    'enabled' => true,
  ),
  708 => 
  array (
    'id' => '6709',
    'bank_id' => '35',
    'name' => 'MOHAMMADPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185263283',
    ),
    'enabled' => true,
  ),
  709 => 
  array (
    'id' => '6710',
    'bank_id' => '35',
    'name' => 'MOHAMMADPUR MOHILA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185263409',
    ),
    'enabled' => true,
  ),
  710 => 
  array (
    'id' => '6711',
    'bank_id' => '35',
    'name' => 'NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185263520',
    ),
    'enabled' => true,
  ),
  711 => 
  array (
    'id' => '6712',
    'bank_id' => '35',
    'name' => 'PALLABI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185263588',
    ),
    'enabled' => true,
  ),
  712 => 
  array (
    'id' => '6713',
    'bank_id' => '35',
    'name' => 'ROKEYA SHARANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264008',
    ),
    'enabled' => true,
  ),
  713 => 
  array (
    'id' => '6714',
    'bank_id' => '35',
    'name' => 'SAVAR BUS STAND',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264158',
    ),
    'enabled' => true,
  ),
  714 => 
  array (
    'id' => '6715',
    'bank_id' => '35',
    'name' => 'SAVAR CANTONMENT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264187',
    ),
    'enabled' => true,
  ),
  715 => 
  array (
    'id' => '6716',
    'bank_id' => '35',
    'name' => 'SHYAMALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264303',
    ),
    'enabled' => true,
  ),
  716 => 
  array (
    'id' => '6717',
    'bank_id' => '35',
    'name' => 'T.C.B. BHABAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264424',
    ),
    'enabled' => true,
  ),
  717 => 
  array (
    'id' => '6718',
    'bank_id' => '35',
    'name' => 'UTTAR KHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264608',
    ),
    'enabled' => true,
  ),
  718 => 
  array (
    'id' => '6719',
    'bank_id' => '35',
    'name' => 'UTTARA MODEL TOWN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185264695',
    ),
    'enabled' => true,
  ),
  719 => 
  array (
    'id' => '6720',
    'bank_id' => '35',
    'name' => 'TRUNCATION POINT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185270005',
    ),
    'enabled' => true,
  ),
  720 => 
  array (
    'id' => '6721',
    'bank_id' => '35',
    'name' => 'B.B. AVENUE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185270434',
    ),
    'enabled' => true,
  ),
  721 => 
  array (
    'id' => '6722',
    'bank_id' => '35',
    'name' => 'BADAMTALI STEAMER GHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185270584',
    ),
    'enabled' => true,
  ),
  722 => 
  array (
    'id' => '6723',
    'bank_id' => '35',
    'name' => 'BANDURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185270647',
    ),
    'enabled' => true,
  ),
  723 => 
  array (
    'id' => '6724',
    'bank_id' => '35',
    'name' => 'BANGSHAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185270889',
    ),
    'enabled' => true,
  ),
  724 => 
  array (
    'id' => '6725',
    'bank_id' => '35',
    'name' => 'CHAWK BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185271275',
    ),
    'enabled' => true,
  ),
  725 => 
  array (
    'id' => '6726',
    'bank_id' => '35',
    'name' => 'FAKIRAPOOL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272179',
    ),
    'enabled' => true,
  ),
  726 => 
  array (
    'id' => '6727',
    'bank_id' => '35',
    'name' => 'FOREIGN EXCHANGE CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272353',
    ),
    'enabled' => true,
  ),
  727 => 
  array (
    'id' => '6728',
    'bank_id' => '35',
    'name' => 'GANDARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272445',
    ),
    'enabled' => true,
  ),
  728 => 
  array (
    'id' => '6729',
    'bank_id' => '35',
    'name' => 'HATKHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272595',
    ),
    'enabled' => true,
  ),
  729 => 
  array (
    'id' => '6730',
    'bank_id' => '35',
    'name' => 'HEAD OFFICE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272687',
    ),
    'enabled' => true,
  ),
  730 => 
  array (
    'id' => '6731',
    'bank_id' => '35',
    'name' => 'IMAMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272803',
    ),
    'enabled' => true,
  ),
  731 => 
  array (
    'id' => '6732',
    'bank_id' => '35',
    'name' => 'ISLAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185272982',
    ),
    'enabled' => true,
  ),
  732 => 
  array (
    'id' => '6733',
    'bank_id' => '35',
    'name' => 'JOHNSON ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185273257',
    ),
    'enabled' => true,
  ),
  733 => 
  array (
    'id' => '6734',
    'bank_id' => '35',
    'name' => 'KAPTAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185273615',
    ),
    'enabled' => true,
  ),
  734 => 
  array (
    'id' => '6735',
    'bank_id' => '35',
    'name' => 'LOCAL OFFICE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185273886',
    ),
    'enabled' => true,
  ),
  735 => 
  array (
    'id' => '6736',
    'bank_id' => '35',
    'name' => 'MALIBAGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185273949',
    ),
    'enabled' => true,
  ),
  736 => 
  array (
    'id' => '6737',
    'bank_id' => '35',
    'name' => 'MALIBAGH CHOWDHURYPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185273978',
    ),
    'enabled' => true,
  ),
  737 => 
  array (
    'id' => '6738',
    'bank_id' => '35',
    'name' => 'MITFORD ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274122',
    ),
    'enabled' => true,
  ),
  738 => 
  array (
    'id' => '6739',
    'bank_id' => '35',
    'name' => 'MOGHBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274180',
    ),
    'enabled' => true,
  ),
  739 => 
  array (
    'id' => '6740',
    'bank_id' => '35',
    'name' => 'MOULVI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274214',
    ),
    'enabled' => true,
  ),
  740 => 
  array (
    'id' => '6741',
    'bank_id' => '35',
    'name' => 'MOTIJHEEL CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274272',
    ),
    'enabled' => true,
  ),
  741 => 
  array (
    'id' => '6742',
    'bank_id' => '35',
    'name' => 'MUGDA PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274456',
    ),
    'enabled' => true,
  ),
  742 => 
  array (
    'id' => '6743',
    'bank_id' => '35',
    'name' => 'MUKSUDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274485',
    ),
    'enabled' => true,
  ),
  743 => 
  array (
    'id' => '6744',
    'bank_id' => '35',
    'name' => 'NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274698',
    ),
    'enabled' => true,
  ),
  744 => 
  array (
    'id' => '6745',
    'bank_id' => '35',
    'name' => 'NAWABPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274751',
    ),
    'enabled' => true,
  ),
  745 => 
  array (
    'id' => '6746',
    'bank_id' => '35',
    'name' => 'NAYA PALTAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274872',
    ),
    'enabled' => true,
  ),
  746 => 
  array (
    'id' => '6747',
    'bank_id' => '35',
    'name' => 'NAYATOLLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185274906',
    ),
    'enabled' => true,
  ),
  747 => 
  array (
    'id' => '6748',
    'bank_id' => '35',
    'name' => 'NORTH SOUTH ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275118',
    ),
    'enabled' => true,
  ),
  748 => 
  array (
    'id' => '6749',
    'bank_id' => '35',
    'name' => 'PATUATULI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275239',
    ),
    'enabled' => true,
  ),
  749 => 
  array (
    'id' => '6750',
    'bank_id' => '35',
    'name' => 'POSTAGOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275321',
    ),
    'enabled' => true,
  ),
  750 => 
  array (
    'id' => '6751',
    'bank_id' => '35',
    'name' => 'PURANA PALTAN CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275413',
    ),
    'enabled' => true,
  ),
  751 => 
  array (
    'id' => '6752',
    'bank_id' => '35',
    'name' => 'RAJARBAGH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275534',
    ),
    'enabled' => true,
  ),
  752 => 
  array (
    'id' => '6753',
    'bank_id' => '35',
    'name' => 'RAMNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275684',
    ),
    'enabled' => true,
  ),
  753 => 
  array (
    'id' => '6754',
    'bank_id' => '35',
    'name' => 'RAMPURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275747',
    ),
    'enabled' => true,
  ),
  754 => 
  array (
    'id' => '6755',
    'bank_id' => '35',
    'name' => 'RATHKHOLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275800',
    ),
    'enabled' => true,
  ),
  755 => 
  array (
    'id' => '6756',
    'bank_id' => '35',
    'name' => 'RUPALI SADAN CORPORATE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275868',
    ),
    'enabled' => true,
  ),
  756 => 
  array (
    'id' => '6757',
    'bank_id' => '35',
    'name' => 'SADARGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185275921',
    ),
    'enabled' => true,
  ),
  757 => 
  array (
    'id' => '6758',
    'bank_id' => '35',
    'name' => 'SHAMBAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185276283',
    ),
    'enabled' => true,
  ),
  758 => 
  array (
    'id' => '6759',
    'bank_id' => '35',
    'name' => 'SHIKARIPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185276409',
    ),
    'enabled' => true,
  ),
  759 => 
  array (
    'id' => '6760',
    'bank_id' => '35',
    'name' => 'TOTAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185276762',
    ),
    'enabled' => true,
  ),
  760 => 
  array (
    'id' => '6761',
    'bank_id' => '35',
    'name' => 'URDU ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185276791',
    ),
    'enabled' => true,
  ),
  761 => 
  array (
    'id' => '6762',
    'bank_id' => '35',
    'name' => 'YOUSUF MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185277066',
    ),
    'enabled' => true,
  ),
  762 => 
  array (
    'id' => '6763',
    'bank_id' => '35',
    'name' => 'ZINZIRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185277095',
    ),
    'enabled' => true,
  ),
  763 => 
  array (
    'id' => '6764',
    'bank_id' => '35',
    'name' => 'BIRAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185280345',
    ),
    'enabled' => true,
  ),
  764 => 
  array (
    'id' => '6765',
    'bank_id' => '35',
    'name' => 'BIRGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185280374',
    ),
    'enabled' => true,
  ),
  765 => 
  array (
    'id' => '6766',
    'bank_id' => '35',
    'name' => 'BIROL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185280408',
    ),
    'enabled' => true,
  ),
  766 => 
  array (
    'id' => '6767',
    'bank_id' => '35',
    'name' => 'CHEHELGAZI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185280495',
    ),
    'enabled' => true,
  ),
  767 => 
  array (
    'id' => '6768',
    'bank_id' => '35',
    'name' => 'DAUDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185280611',
    ),
    'enabled' => true,
  ),
  768 => 
  array (
    'id' => '6769',
    'bank_id' => '35',
    'name' => 'HAJI DANESH SC.&TEC.UNIVERSITY',
    'bank_branch_data' => 
    array (
      'routing_no' => '185280882',
    ),
    'enabled' => true,
  ),
  769 => 
  array (
    'id' => '6770',
    'bank_id' => '35',
    'name' => 'KABIRAJ HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185281036',
    ),
    'enabled' => true,
  ),
  770 => 
  array (
    'id' => '6771',
    'bank_id' => '35',
    'name' => 'LADIES',
    'bank_branch_data' => 
    array (
      'routing_no' => '185281302',
    ),
    'enabled' => true,
  ),
  771 => 
  array (
    'id' => '6772',
    'bank_id' => '35',
    'name' => 'MALDAH PATTY',
    'bank_branch_data' => 
    array (
      'routing_no' => '185281423',
    ),
    'enabled' => true,
  ),
  772 => 
  array (
    'id' => '6773',
    'bank_id' => '35',
    'name' => 'NIMTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185281665',
    ),
    'enabled' => true,
  ),
  773 => 
  array (
    'id' => '6774',
    'bank_id' => '35',
    'name' => 'RANIRBANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185282080',
    ),
    'enabled' => true,
  ),
  774 => 
  array (
    'id' => '6775',
    'bank_id' => '35',
    'name' => 'SHIKDERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185282293',
    ),
    'enabled' => true,
  ),
  775 => 
  array (
    'id' => '6776',
    'bank_id' => '35',
    'name' => 'ALFADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185290043',
    ),
    'enabled' => true,
  ),
  776 => 
  array (
    'id' => '6777',
    'bank_id' => '35',
    'name' => 'B.M.M.(BAITUL MUKADDAM MOSQUE)',
    'bank_branch_data' => 
    array (
      'routing_no' => '185290106',
    ),
    'enabled' => true,
  ),
  777 => 
  array (
    'id' => '6778',
    'bank_id' => '35',
    'name' => 'BADARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185290164',
    ),
    'enabled' => true,
  ),
  778 => 
  array (
    'id' => '6779',
    'bank_id' => '35',
    'name' => 'CHARHAJIGONJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185290469',
    ),
    'enabled' => true,
  ),
  779 => 
  array (
    'id' => '6780',
    'bank_id' => '35',
    'name' => 'FARIDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185290522',
    ),
    'enabled' => true,
  ),
  780 => 
  array (
    'id' => '6781',
    'bank_id' => '35',
    'name' => 'GUNBAHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185290672',
    ),
    'enabled' => true,
  ),
  781 => 
  array (
    'id' => '6782',
    'bank_id' => '35',
    'name' => 'DARBESHER HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300054',
    ),
    'enabled' => true,
  ),
  782 => 
  array (
    'id' => '6783',
    'bank_id' => '35',
    'name' => 'AMIRUDDIN MUNSHIR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300070',
    ),
    'enabled' => true,
  ),
  783 => 
  array (
    'id' => '6784',
    'bank_id' => '35',
    'name' => 'DHALIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300409',
    ),
    'enabled' => true,
  ),
  784 => 
  array (
    'id' => '6785',
    'bank_id' => '35',
    'name' => 'FAZILPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300496',
    ),
    'enabled' => true,
  ),
  785 => 
  array (
    'id' => '6786',
    'bank_id' => '35',
    'name' => 'FENI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300520',
    ),
    'enabled' => true,
  ),
  786 => 
  array (
    'id' => '6787',
    'bank_id' => '35',
    'name' => 'ISLAMPUR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300733',
    ),
    'enabled' => true,
  ),
  787 => 
  array (
    'id' => '6788',
    'bank_id' => '35',
    'name' => 'KARIYA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300825',
    ),
    'enabled' => true,
  ),
  788 => 
  array (
    'id' => '6789',
    'bank_id' => '35',
    'name' => 'KRISNNA MAJUMDAR HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300883',
    ),
    'enabled' => true,
  ),
  789 => 
  array (
    'id' => '6790',
    'bank_id' => '35',
    'name' => 'KUTHIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185300946',
    ),
    'enabled' => true,
  ),
  790 => 
  array (
    'id' => '6791',
    'bank_id' => '35',
    'name' => 'MOTIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185301129',
    ),
    'enabled' => true,
  ),
  791 => 
  array (
    'id' => '6792',
    'bank_id' => '35',
    'name' => 'NEW RANIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185301187',
    ),
    'enabled' => true,
  ),
  792 => 
  array (
    'id' => '6793',
    'bank_id' => '35',
    'name' => 'SARSHADI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185301390',
    ),
    'enabled' => true,
  ),
  793 => 
  array (
    'id' => '6794',
    'bank_id' => '35',
    'name' => 'BADIAKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185320047',
    ),
    'enabled' => true,
  ),
  794 => 
  array (
    'id' => '6795',
    'bank_id' => '35',
    'name' => 'DHAPERHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185320313',
    ),
    'enabled' => true,
  ),
  795 => 
  array (
    'id' => '6796',
    'bank_id' => '35',
    'name' => 'GAIBANDHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185320526',
    ),
    'enabled' => true,
  ),
  796 => 
  array (
    'id' => '6797',
    'bank_id' => '35',
    'name' => 'BASHAIRE BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185330211',
    ),
    'enabled' => true,
  ),
  797 => 
  array (
    'id' => '6798',
    'bank_id' => '35',
    'name' => 'JOYDEBPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185330732',
    ),
    'enabled' => true,
  ),
  798 => 
  array (
    'id' => '6799',
    'bank_id' => '35',
    'name' => 'TONGI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185331636',
    ),
    'enabled' => true,
  ),
  799 => 
  array (
    'id' => '6800',
    'bank_id' => '35',
    'name' => 'RAHUTHAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185350141',
    ),
    'enabled' => true,
  ),
  800 => 
  array (
    'id' => '6801',
    'bank_id' => '35',
    'name' => 'GHAGORE BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185350291',
    ),
    'enabled' => true,
  ),
  801 => 
  array (
    'id' => '6802',
    'bank_id' => '35',
    'name' => 'GOPALGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185350370',
    ),
    'enabled' => true,
  ),
  802 => 
  array (
    'id' => '6803',
    'bank_id' => '35',
    'name' => 'JOYNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185350525',
    ),
    'enabled' => true,
  ),
  803 => 
  array (
    'id' => '6804',
    'bank_id' => '35',
    'name' => 'RAMDIA COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185351003',
    ),
    'enabled' => true,
  ),
  804 => 
  array (
    'id' => '6805',
    'bank_id' => '35',
    'name' => 'TUNGI PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185351090',
    ),
    'enabled' => true,
  ),
  805 => 
  array (
    'id' => '6806',
    'bank_id' => '35',
    'name' => 'AUSHKANDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185360102',
    ),
    'enabled' => true,
  ),
  806 => 
  array (
    'id' => '6807',
    'bank_id' => '35',
    'name' => 'ENAYETGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185360436',
    ),
    'enabled' => true,
  ),
  807 => 
  array (
    'id' => '6808',
    'bank_id' => '35',
    'name' => 'HABIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185360610',
    ),
    'enabled' => true,
  ),
  808 => 
  array (
    'id' => '6809',
    'bank_id' => '35',
    'name' => 'MADHABPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185360881',
    ),
    'enabled' => true,
  ),
  809 => 
  array (
    'id' => '6810',
    'bank_id' => '35',
    'name' => 'GOPINATHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185380311',
    ),
    'enabled' => true,
  ),
  810 => 
  array (
    'id' => '6811',
    'bank_id' => '35',
    'name' => 'JOYPURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185380403',
    ),
    'enabled' => true,
  ),
  811 => 
  array (
    'id' => '6812',
    'bank_id' => '35',
    'name' => 'KHETLAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185380490',
    ),
    'enabled' => true,
  ),
  812 => 
  array (
    'id' => '6813',
    'bank_id' => '35',
    'name' => 'MOLAMGARIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185380616',
    ),
    'enabled' => true,
  ),
  813 => 
  array (
    'id' => '6814',
    'bank_id' => '35',
    'name' => 'SONAMUKHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185380795',
    ),
    'enabled' => true,
  ),
  814 => 
  array (
    'id' => '6815',
    'bank_id' => '35',
    'name' => 'BAIRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185390077',
    ),
    'enabled' => true,
  ),
  815 => 
  array (
    'id' => '6816',
    'bank_id' => '35',
    'name' => 'ARAMNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185390172',
    ),
    'enabled' => true,
  ),
  816 => 
  array (
    'id' => '6817',
    'bank_id' => '35',
    'name' => 'DHARMAKURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185390585',
    ),
    'enabled' => true,
  ),
  817 => 
  array (
    'id' => '6818',
    'bank_id' => '35',
    'name' => 'DHURMUT BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185390619',
    ),
    'enabled' => true,
  ),
  818 => 
  array (
    'id' => '6819',
    'bank_id' => '35',
    'name' => 'JAMALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185390851',
    ),
    'enabled' => true,
  ),
  819 => 
  array (
    'id' => '6820',
    'bank_id' => '35',
    'name' => 'JAMUNA FERTILIZER COMPLEX',
    'bank_branch_data' => 
    array (
      'routing_no' => '185390972',
    ),
    'enabled' => true,
  ),
  820 => 
  array (
    'id' => '6821',
    'bank_id' => '35',
    'name' => 'KOYRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185391063',
    ),
    'enabled' => true,
  ),
  821 => 
  array (
    'id' => '6822',
    'bank_id' => '35',
    'name' => 'MALANDAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185391218',
    ),
    'enabled' => true,
  ),
  822 => 
  array (
    'id' => '6823',
    'bank_id' => '35',
    'name' => 'SARISHABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185391489',
    ),
    'enabled' => true,
  ),
  823 => 
  array (
    'id' => '6824',
    'bank_id' => '35',
    'name' => 'BAGACHARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185410102',
    ),
    'enabled' => true,
  ),
  824 => 
  array (
    'id' => '6825',
    'bank_id' => '35',
    'name' => 'KHAJURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185411248',
    ),
    'enabled' => true,
  ),
  825 => 
  array (
    'id' => '6826',
    'bank_id' => '35',
    'name' => 'M.K. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185411398',
    ),
    'enabled' => true,
  ),
  826 => 
  array (
    'id' => '6827',
    'bank_id' => '35',
    'name' => 'MONIRAMPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185411514',
    ),
    'enabled' => true,
  ),
  827 => 
  array (
    'id' => '6828',
    'bank_id' => '35',
    'name' => 'NAVARAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185411606',
    ),
    'enabled' => true,
  ),
  828 => 
  array (
    'id' => '6829',
    'bank_id' => '35',
    'name' => 'PANZIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185411693',
    ),
    'enabled' => true,
  ),
  829 => 
  array (
    'id' => '6830',
    'bank_id' => '35',
    'name' => 'RAIPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185411930',
    ),
    'enabled' => true,
  ),
  830 => 
  array (
    'id' => '6831',
    'bank_id' => '35',
    'name' => 'S.M.R. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185412050',
    ),
    'enabled' => true,
  ),
  831 => 
  array (
    'id' => '6832',
    'bank_id' => '35',
    'name' => 'JHALOKATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185420318',
    ),
    'enabled' => true,
  ),
  832 => 
  array (
    'id' => '6833',
    'bank_id' => '35',
    'name' => 'KATHALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185420376',
    ),
    'enabled' => true,
  ),
  833 => 
  array (
    'id' => '6834',
    'bank_id' => '35',
    'name' => 'PUTIAKHALI BANDAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185420521',
    ),
    'enabled' => true,
  ),
  834 => 
  array (
    'id' => '6835',
    'bank_id' => '35',
    'name' => 'SAILKUPA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185440064',
    ),
    'enabled' => true,
  ),
  835 => 
  array (
    'id' => '6836',
    'bank_id' => '35',
    'name' => 'HATKHALISHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185440585',
    ),
    'enabled' => true,
  ),
  836 => 
  array (
    'id' => '6837',
    'bank_id' => '35',
    'name' => 'JHENAIDAH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185440648',
    ),
    'enabled' => true,
  ),
  837 => 
  array (
    'id' => '6838',
    'bank_id' => '35',
    'name' => 'KALIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185440798',
    ),
    'enabled' => true,
  ),
  838 => 
  array (
    'id' => '6839',
    'bank_id' => '35',
    'name' => 'KOTCHANDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185441005',
    ),
    'enabled' => true,
  ),
  839 => 
  array (
    'id' => '6840',
    'bank_id' => '35',
    'name' => 'SAFDARPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185441155',
    ),
    'enabled' => true,
  ),
  840 => 
  array (
    'id' => '6841',
    'bank_id' => '35',
    'name' => 'RAMGARH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185460310',
    ),
    'enabled' => true,
  ),
  841 => 
  array (
    'id' => '6842',
    'bank_id' => '35',
    'name' => 'BARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185470221',
    ),
    'enabled' => true,
  ),
  842 => 
  array (
    'id' => '6843',
    'bank_id' => '35',
    'name' => 'BATIAGHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185470313',
    ),
    'enabled' => true,
  ),
  843 => 
  array (
    'id' => '6844',
    'bank_id' => '35',
    'name' => 'CHALNA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185470492',
    ),
    'enabled' => true,
  ),
  844 => 
  array (
    'id' => '6845',
    'bank_id' => '35',
    'name' => 'DAULATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185470700',
    ),
    'enabled' => true,
  ),
  845 => 
  array (
    'id' => '6846',
    'bank_id' => '35',
    'name' => 'GORAIKHALIHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185470942',
    ),
    'enabled' => true,
  ),
  846 => 
  array (
    'id' => '6847',
    'bank_id' => '35',
    'name' => 'IWTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185471033',
    ),
    'enabled' => true,
  ),
  847 => 
  array (
    'id' => '6848',
    'bank_id' => '35',
    'name' => 'K.D. GHOSH ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185471154',
    ),
    'enabled' => true,
  ),
  848 => 
  array (
    'id' => '6849',
    'bank_id' => '35',
    'name' => 'K.D.A. NEW MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185471217',
    ),
    'enabled' => true,
  ),
  849 => 
  array (
    'id' => '6850',
    'bank_id' => '35',
    'name' => 'KHALISHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185471459',
    ),
    'enabled' => true,
  ),
  850 => 
  array (
    'id' => '6851',
    'bank_id' => '35',
    'name' => 'NUTAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185472058',
    ),
    'enabled' => true,
  ),
  851 => 
  array (
    'id' => '6852',
    'bank_id' => '35',
    'name' => 'PAIKGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185472087',
    ),
    'enabled' => true,
  ),
  852 => 
  array (
    'id' => '6853',
    'bank_id' => '35',
    'name' => 'PHULTALA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185472140',
    ),
    'enabled' => true,
  ),
  853 => 
  array (
    'id' => '6854',
    'bank_id' => '35',
    'name' => 'RAJAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185472179',
    ),
    'enabled' => true,
  ),
  854 => 
  array (
    'id' => '6855',
    'bank_id' => '35',
    'name' => 'SHAMS BUILDING',
    'bank_branch_data' => 
    array (
      'routing_no' => '185472566',
    ),
    'enabled' => true,
  ),
  855 => 
  array (
    'id' => '6856',
    'bank_id' => '35',
    'name' => 'PATUAVANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185480066',
    ),
    'enabled' => true,
  ),
  856 => 
  array (
    'id' => '6857',
    'bank_id' => '35',
    'name' => 'BAJITPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185480103',
    ),
    'enabled' => true,
  ),
  857 => 
  array (
    'id' => '6858',
    'bank_id' => '35',
    'name' => 'BHAIRAB BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185480224',
    ),
    'enabled' => true,
  ),
  858 => 
  array (
    'id' => '6859',
    'bank_id' => '35',
    'name' => 'KISHOREGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185480679',
    ),
    'enabled' => true,
  ),
  859 => 
  array (
    'id' => '6860',
    'bank_id' => '35',
    'name' => 'NILGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185481036',
    ),
    'enabled' => true,
  ),
  860 => 
  array (
    'id' => '6861',
    'bank_id' => '35',
    'name' => 'KURIGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '185490401',
    ),
    'enabled' => true,
  ),
  861 => 
  array (
    'id' => '6862',
    'bank_id' => '35',
    'name' => 'BHERAMARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185500283',
    ),
    'enabled' => true,
  ),
  862 => 
  array (
    'id' => '6863',
    'bank_id' => '35',
    'name' => 'HOSSAINABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185500641',
    ),
    'enabled' => true,
  ),
  863 => 
  array (
    'id' => '6864',
    'bank_id' => '35',
    'name' => 'KUMARKHALI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185500883',
    ),
    'enabled' => true,
  ),
  864 => 
  array (
    'id' => '6865',
    'bank_id' => '35',
    'name' => 'KUSHTIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185500946',
    ),
    'enabled' => true,
  ),
  865 => 
  array (
    'id' => '6866',
    'bank_id' => '35',
    'name' => 'MOSHAN',
    'bank_branch_data' => 
    array (
      'routing_no' => '185501129',
    ),
    'enabled' => true,
  ),
  866 => 
  array (
    'id' => '6867',
    'bank_id' => '35',
    'name' => 'SWASTIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185501637',
    ),
    'enabled' => true,
  ),
  867 => 
  array (
    'id' => '6868',
    'bank_id' => '35',
    'name' => 'BALUA CHOUMUHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510044',
    ),
    'enabled' => true,
  ),
  868 => 
  array (
    'id' => '6869',
    'bank_id' => '35',
    'name' => 'BIBIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510165',
    ),
    'enabled' => true,
  ),
  869 => 
  array (
    'id' => '6870',
    'bank_id' => '35',
    'name' => 'DALTA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510431',
    ),
    'enabled' => true,
  ),
  870 => 
  array (
    'id' => '6871',
    'bank_id' => '35',
    'name' => 'DATTA PARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510499',
    ),
    'enabled' => true,
  ),
  871 => 
  array (
    'id' => '6872',
    'bank_id' => '35',
    'name' => 'LAKSHMIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510736',
    ),
    'enabled' => true,
  ),
  872 => 
  array (
    'id' => '6873',
    'bank_id' => '35',
    'name' => 'MANDARI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510828',
    ),
    'enabled' => true,
  ),
  873 => 
  array (
    'id' => '6874',
    'bank_id' => '35',
    'name' => 'PODDAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185510949',
    ),
    'enabled' => true,
  ),
  874 => 
  array (
    'id' => '6875',
    'bank_id' => '35',
    'name' => 'RAMGATI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185511098',
    ),
    'enabled' => true,
  ),
  875 => 
  array (
    'id' => '6876',
    'bank_id' => '35',
    'name' => 'SONAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185511151',
    ),
    'enabled' => true,
  ),
  876 => 
  array (
    'id' => '6877',
    'bank_id' => '35',
    'name' => 'ADITMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185520047',
    ),
    'enabled' => true,
  ),
  877 => 
  array (
    'id' => '6878',
    'bank_id' => '35',
    'name' => 'BARAKHATA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185520100',
    ),
    'enabled' => true,
  ),
  878 => 
  array (
    'id' => '6879',
    'bank_id' => '35',
    'name' => 'LALMONIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185520463',
    ),
    'enabled' => true,
  ),
  879 => 
  array (
    'id' => '6880',
    'bank_id' => '35',
    'name' => 'PATGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '185520584',
    ),
    'enabled' => true,
  ),
  880 => 
  array (
    'id' => '6881',
    'bank_id' => '35',
    'name' => 'MADARIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185540401',
    ),
    'enabled' => true,
  ),
  881 => 
  array (
    'id' => '6882',
    'bank_id' => '35',
    'name' => 'SHIBCHAR POURASOVA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185540735',
    ),
    'enabled' => true,
  ),
  882 => 
  array (
    'id' => '6883',
    'bank_id' => '35',
    'name' => 'CHAULIA BUS STAND',
    'bank_branch_data' => 
    array (
      'routing_no' => '185550288',
    ),
    'enabled' => true,
  ),
  883 => 
  array (
    'id' => '6884',
    'bank_id' => '35',
    'name' => 'MAGURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185550554',
    ),
    'enabled' => true,
  ),
  884 => 
  array (
    'id' => '6885',
    'bank_id' => '35',
    'name' => 'DAULATPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560052',
    ),
    'enabled' => true,
  ),
  885 => 
  array (
    'id' => '6886',
    'bank_id' => '35',
    'name' => 'BAIRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560078',
    ),
    'enabled' => true,
  ),
  886 => 
  array (
    'id' => '6887',
    'bank_id' => '35',
    'name' => 'DHANKURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560344',
    ),
    'enabled' => true,
  ),
  887 => 
  array (
    'id' => '6888',
    'bank_id' => '35',
    'name' => 'GHIOR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560386',
    ),
    'enabled' => true,
  ),
  888 => 
  array (
    'id' => '6889',
    'bank_id' => '35',
    'name' => 'JHITKA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560557',
    ),
    'enabled' => true,
  ),
  889 => 
  array (
    'id' => '6890',
    'bank_id' => '35',
    'name' => 'MANIKGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560610',
    ),
    'enabled' => true,
  ),
  890 => 
  array (
    'id' => '6891',
    'bank_id' => '35',
    'name' => 'SATURIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185560760',
    ),
    'enabled' => true,
  ),
  891 => 
  array (
    'id' => '6892',
    'bank_id' => '35',
    'name' => 'MEHERPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185570376',
    ),
    'enabled' => true,
  ),
  892 => 
  array (
    'id' => '6893',
    'bank_id' => '35',
    'name' => 'MUJIB NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185570468',
    ),
    'enabled' => true,
  ),
  893 => 
  array (
    'id' => '6894',
    'bank_id' => '35',
    'name' => 'GABINDAPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185580058',
    ),
    'enabled' => true,
  ),
  894 => 
  array (
    'id' => '6895',
    'bank_id' => '35',
    'name' => 'AZIMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185580074',
    ),
    'enabled' => true,
  ),
  895 => 
  array (
    'id' => '6896',
    'bank_id' => '35',
    'name' => 'CHADNIGHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185580311',
    ),
    'enabled' => true,
  ),
  896 => 
  array (
    'id' => '6897',
    'bank_id' => '35',
    'name' => 'CHOUMUHANA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185580379',
    ),
    'enabled' => true,
  ),
  897 => 
  array (
    'id' => '6898',
    'bank_id' => '35',
    'name' => 'KERAMATNAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185580911',
    ),
    'enabled' => true,
  ),
  898 => 
  array (
    'id' => '6899',
    'bank_id' => '35',
    'name' => 'KULAURA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185580940',
    ),
    'enabled' => true,
  ),
  899 => 
  array (
    'id' => '6900',
    'bank_id' => '35',
    'name' => 'MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581060',
    ),
    'enabled' => true,
  ),
  900 => 
  array (
    'id' => '6901',
    'bank_id' => '35',
    'name' => 'NALUARMUKH(KALAR) BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581273',
    ),
    'enabled' => true,
  ),
  901 => 
  array (
    'id' => '6902',
    'bank_id' => '35',
    'name' => 'NOTUN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581307',
    ),
    'enabled' => true,
  ),
  902 => 
  array (
    'id' => '6903',
    'bank_id' => '35',
    'name' => 'SAMRAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581457',
    ),
    'enabled' => true,
  ),
  903 => 
  array (
    'id' => '6904',
    'bank_id' => '35',
    'name' => 'SHERPUR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581660',
    ),
    'enabled' => true,
  ),
  904 => 
  array (
    'id' => '6905',
    'bank_id' => '35',
    'name' => 'SREE MANGAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581723',
    ),
    'enabled' => true,
  ),
  905 => 
  array (
    'id' => '6906',
    'bank_id' => '35',
    'name' => 'TENGRA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185581781',
    ),
    'enabled' => true,
  ),
  906 => 
  array (
    'id' => '6907',
    'bank_id' => '35',
    'name' => 'BENODPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185590222',
    ),
    'enabled' => true,
  ),
  907 => 
  array (
    'id' => '6908',
    'bank_id' => '35',
    'name' => 'LOUHAJONG',
    'bank_branch_data' => 
    array (
      'routing_no' => '185590851',
    ),
    'enabled' => true,
  ),
  908 => 
  array (
    'id' => '6909',
    'bank_id' => '35',
    'name' => 'MIRKADIM',
    'bank_branch_data' => 
    array (
      'routing_no' => '185590972',
    ),
    'enabled' => true,
  ),
  909 => 
  array (
    'id' => '6910',
    'bank_id' => '35',
    'name' => 'MUNSHIGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185591034',
    ),
    'enabled' => true,
  ),
  910 => 
  array (
    'id' => '6911',
    'bank_id' => '35',
    'name' => 'NOAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185591092',
    ),
    'enabled' => true,
  ),
  911 => 
  array (
    'id' => '6912',
    'bank_id' => '35',
    'name' => 'PORABARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185610052',
    ),
    'enabled' => true,
  ),
  912 => 
  array (
    'id' => '6913',
    'bank_id' => '35',
    'name' => 'BALIPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185610252',
    ),
    'enabled' => true,
  ),
  913 => 
  array (
    'id' => '6914',
    'bank_id' => '35',
    'name' => 'CHHOTO BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185610586',
    ),
    'enabled' => true,
  ),
  914 => 
  array (
    'id' => '6915',
    'bank_id' => '35',
    'name' => 'DAPUNIA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185610610',
    ),
    'enabled' => true,
  ),
  915 => 
  array (
    'id' => '6916',
    'bank_id' => '35',
    'name' => 'DHARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185610823',
    ),
    'enabled' => true,
  ),
  916 => 
  array (
    'id' => '6917',
    'bank_id' => '35',
    'name' => 'FATEMANAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185610915',
    ),
    'enabled' => true,
  ),
  917 => 
  array (
    'id' => '6918',
    'bank_id' => '35',
    'name' => 'GAFFARGAON',
    'bank_branch_data' => 
    array (
      'routing_no' => '185611006',
    ),
    'enabled' => true,
  ),
  918 => 
  array (
    'id' => '6919',
    'bank_id' => '35',
    'name' => 'KHAGDAHAR BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185611398',
    ),
    'enabled' => true,
  ),
  919 => 
  array (
    'id' => '6920',
    'bank_id' => '35',
    'name' => 'MALLIKBARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185611514',
    ),
    'enabled' => true,
  ),
  920 => 
  array (
    'id' => '6921',
    'bank_id' => '35',
    'name' => 'MUKTAGACHA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185611693',
    ),
    'enabled' => true,
  ),
  921 => 
  array (
    'id' => '6922',
    'bank_id' => '35',
    'name' => 'NANDAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185611901',
    ),
    'enabled' => true,
  ),
  922 => 
  array (
    'id' => '6923',
    'bank_id' => '35',
    'name' => 'FULBARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185612021',
    ),
    'enabled' => true,
  ),
  923 => 
  array (
    'id' => '6924',
    'bank_id' => '35',
    'name' => 'SHAYMGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185612113',
    ),
    'enabled' => true,
  ),
  924 => 
  array (
    'id' => '6925',
    'bank_id' => '35',
    'name' => 'SWADESHI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185612205',
    ),
    'enabled' => true,
  ),
  925 => 
  array (
    'id' => '6926',
    'bank_id' => '35',
    'name' => 'THANA GHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185612326',
    ),
    'enabled' => true,
  ),
  926 => 
  array (
    'id' => '6927',
    'bank_id' => '35',
    'name' => 'TRISHAL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185612355',
    ),
    'enabled' => true,
  ),
  927 => 
  array (
    'id' => '6928',
    'bank_id' => '35',
    'name' => 'UCHAKHILA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185612384',
    ),
    'enabled' => true,
  ),
  928 => 
  array (
    'id' => '6929',
    'bank_id' => '35',
    'name' => 'BADALGACHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185640198',
    ),
    'enabled' => true,
  ),
  929 => 
  array (
    'id' => '6930',
    'bank_id' => '35',
    'name' => 'HOSPITAL ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185640730',
    ),
    'enabled' => true,
  ),
  930 => 
  array (
    'id' => '6931',
    'bank_id' => '35',
    'name' => 'NEAMATPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185641276',
    ),
    'enabled' => true,
  ),
  931 => 
  array (
    'id' => '6932',
    'bank_id' => '35',
    'name' => 'SADAR ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185641692',
    ),
    'enabled' => true,
  ),
  932 => 
  array (
    'id' => '6933',
    'bank_id' => '35',
    'name' => 'LOHAGARA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185650496',
    ),
    'enabled' => true,
  ),
  933 => 
  array (
    'id' => '6934',
    'bank_id' => '35',
    'name' => 'NARAIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185650641',
    ),
    'enabled' => true,
  ),
  934 => 
  array (
    'id' => '6935',
    'bank_id' => '35',
    'name' => 'B.B. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185670076',
    ),
    'enabled' => true,
  ),
  935 => 
  array (
    'id' => '6936',
    'bank_id' => '35',
    'name' => 'BANGLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185670197',
    ),
    'enabled' => true,
  ),
  936 => 
  array (
    'id' => '6937',
    'bank_id' => '35',
    'name' => 'BHULTA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185670221',
    ),
    'enabled' => true,
  ),
  937 => 
  array (
    'id' => '6938',
    'bank_id' => '35',
    'name' => 'FATULLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185670526',
    ),
    'enabled' => true,
  ),
  938 => 
  array (
    'id' => '6939',
    'bank_id' => '35',
    'name' => 'KANAI NAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185670768',
    ),
    'enabled' => true,
  ),
  939 => 
  array (
    'id' => '6940',
    'bank_id' => '35',
    'name' => 'R.K. DAS ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185671420',
    ),
    'enabled' => true,
  ),
  940 => 
  array (
    'id' => '6941',
    'bank_id' => '35',
    'name' => 'S.K. ROAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185671488',
    ),
    'enabled' => true,
  ),
  941 => 
  array (
    'id' => '6942',
    'bank_id' => '35',
    'name' => 'TAN BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185671754',
    ),
    'enabled' => true,
  ),
  942 => 
  array (
    'id' => '6943',
    'bank_id' => '35',
    'name' => 'BABURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185680103',
    ),
    'enabled' => true,
  ),
  943 => 
  array (
    'id' => '6944',
    'bank_id' => '35',
    'name' => 'NARSHINGDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185680853',
    ),
    'enabled' => true,
  ),
  944 => 
  array (
    'id' => '6945',
    'bank_id' => '35',
    'name' => 'PALASH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185680916',
    ),
    'enabled' => true,
  ),
  945 => 
  array (
    'id' => '6946',
    'bank_id' => '35',
    'name' => 'ABDULPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185690043',
    ),
    'enabled' => true,
  ),
  946 => 
  array (
    'id' => '6947',
    'bank_id' => '35',
    'name' => 'TOMALTOLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185690122',
    ),
    'enabled' => true,
  ),
  947 => 
  array (
    'id' => '6948',
    'bank_id' => '35',
    'name' => 'NALDANGARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185691068',
    ),
    'enabled' => true,
  ),
  948 => 
  array (
    'id' => '6949',
    'bank_id' => '35',
    'name' => 'NATORE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185691097',
    ),
    'enabled' => true,
  ),
  949 => 
  array (
    'id' => '6950',
    'bank_id' => '35',
    'name' => 'NICHABAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185691242',
    ),
    'enabled' => true,
  ),
  950 => 
  array (
    'id' => '6951',
    'bank_id' => '35',
    'name' => 'QUADIRABAD',
    'bank_branch_data' => 
    array (
      'routing_no' => '185691334',
    ),
    'enabled' => true,
  ),
  951 => 
  array (
    'id' => '6952',
    'bank_id' => '35',
    'name' => 'SINGRA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185691484',
    ),
    'enabled' => true,
  ),
  952 => 
  array (
    'id' => '6953',
    'bank_id' => '35',
    'name' => 'BALIADANGA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185700104',
    ),
    'enabled' => true,
  ),
  953 => 
  array (
    'id' => '6954',
    'bank_id' => '35',
    'name' => 'BHOLAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185700162',
    ),
    'enabled' => true,
  ),
  954 => 
  array (
    'id' => '6955',
    'bank_id' => '35',
    'name' => 'CHAPAI NAWABGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185700254',
    ),
    'enabled' => true,
  ),
  955 => 
  array (
    'id' => '6956',
    'bank_id' => '35',
    'name' => 'NAMASANKERBATI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185700762',
    ),
    'enabled' => true,
  ),
  956 => 
  array (
    'id' => '6957',
    'bank_id' => '35',
    'name' => 'STATION BAZAR(ROHANPUR)',
    'bank_branch_data' => 
    array (
      'routing_no' => '185701095',
    ),
    'enabled' => true,
  ),
  957 => 
  array (
    'id' => '6958',
    'bank_id' => '35',
    'name' => 'KENDUA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185720463',
    ),
    'enabled' => true,
  ),
  958 => 
  array (
    'id' => '6959',
    'bank_id' => '35',
    'name' => 'NETROKONA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185720739',
    ),
    'enabled' => true,
  ),
  959 => 
  array (
    'id' => '6960',
    'bank_id' => '35',
    'name' => 'RAYER BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185720821',
    ),
    'enabled' => true,
  ),
  960 => 
  array (
    'id' => '6961',
    'bank_id' => '35',
    'name' => 'DALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185730282',
    ),
    'enabled' => true,
  ),
  961 => 
  array (
    'id' => '6962',
    'bank_id' => '35',
    'name' => 'DIMLA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185730316',
    ),
    'enabled' => true,
  ),
  962 => 
  array (
    'id' => '6963',
    'bank_id' => '35',
    'name' => 'KISHOREGANJ',
    'bank_branch_data' => 
    array (
      'routing_no' => '185730587',
    ),
    'enabled' => true,
  ),
  963 => 
  array (
    'id' => '6964',
    'bank_id' => '35',
    'name' => 'NILPHAMARI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185730732',
    ),
    'enabled' => true,
  ),
  964 => 
  array (
    'id' => '6965',
    'bank_id' => '35',
    'name' => 'SAYEDPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185730790',
    ),
    'enabled' => true,
  ),
  965 => 
  array (
    'id' => '6966',
    'bank_id' => '35',
    'name' => 'DELIYAI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750059',
    ),
    'enabled' => true,
  ),
  966 => 
  array (
    'id' => '6967',
    'bank_id' => '35',
    'name' => 'AMISHAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750109',
    ),
    'enabled' => true,
  ),
  967 => 
  array (
    'id' => '6968',
    'bank_id' => '35',
    'name' => 'BANGLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750196',
    ),
    'enabled' => true,
  ),
  968 => 
  array (
    'id' => '6969',
    'bank_id' => '35',
    'name' => 'BANGLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750204',
    ),
    'enabled' => true,
  ),
  969 => 
  array (
    'id' => '6970',
    'bank_id' => '35',
    'name' => 'BASHURHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750259',
    ),
    'enabled' => true,
  ),
  970 => 
  array (
    'id' => '6971',
    'bank_id' => '35',
    'name' => 'CHATKHIL',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750583',
    ),
    'enabled' => true,
  ),
  971 => 
  array (
    'id' => '6972',
    'bank_id' => '35',
    'name' => 'CHOUMOHANI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750675',
    ),
    'enabled' => true,
  ),
  972 => 
  array (
    'id' => '6973',
    'bank_id' => '35',
    'name' => 'EKLASHPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750941',
    ),
    'enabled' => true,
  ),
  973 => 
  array (
    'id' => '6974',
    'bank_id' => '35',
    'name' => 'GOLABARIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185750970',
    ),
    'enabled' => true,
  ),
  974 => 
  array (
    'id' => '6975',
    'bank_id' => '35',
    'name' => 'KABIRHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751216',
    ),
    'enabled' => true,
  ),
  975 => 
  array (
    'id' => '6976',
    'bank_id' => '35',
    'name' => 'KARAMBOX BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751337',
    ),
    'enabled' => true,
  ),
  976 => 
  array (
    'id' => '6977',
    'bank_id' => '35',
    'name' => 'KARIHATI BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751366',
    ),
    'enabled' => true,
  ),
  977 => 
  array (
    'id' => '6978',
    'bank_id' => '35',
    'name' => 'MAIJDEE COURT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751579',
    ),
    'enabled' => true,
  ),
  978 => 
  array (
    'id' => '6979',
    'bank_id' => '35',
    'name' => 'MIARHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751603',
    ),
    'enabled' => true,
  ),
  979 => 
  array (
    'id' => '6980',
    'bank_id' => '35',
    'name' => 'PALLA BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751782',
    ),
    'enabled' => true,
  ),
  980 => 
  array (
    'id' => '6981',
    'bank_id' => '35',
    'name' => 'POURASAVA MARKET',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751874',
    ),
    'enabled' => true,
  ),
  981 => 
  array (
    'id' => '6982',
    'bank_id' => '35',
    'name' => 'RAJGONJ BAZAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185751908',
    ),
    'enabled' => true,
  ),
  982 => 
  array (
    'id' => '6983',
    'bank_id' => '35',
    'name' => 'TALMUHAMMAD HAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185752381',
    ),
    'enabled' => true,
  ),
  983 => 
  array (
    'id' => '6984',
    'bank_id' => '35',
    'name' => 'AUTAPARA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185760315',
    ),
    'enabled' => true,
  ),
  984 => 
  array (
    'id' => '6985',
    'bank_id' => '35',
    'name' => 'BANAGRAM',
    'bank_branch_data' => 
    array (
      'routing_no' => '185760407',
    ),
    'enabled' => true,
  ),
  985 => 
  array (
    'id' => '6986',
    'bank_id' => '35',
    'name' => 'BERA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185760465',
    ),
    'enabled' => true,
  ),
  986 => 
  array (
    'id' => '6987',
    'bank_id' => '35',
    'name' => 'BONWARINAGAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185760586',
    ),
    'enabled' => true,
  ),
  987 => 
  array (
    'id' => '6988',
    'bank_id' => '35',
    'name' => 'DEBOTTAR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185760823',
    ),
    'enabled' => true,
  ),
  988 => 
  array (
    'id' => '6989',
    'bank_id' => '35',
    'name' => 'DOGACHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185760915',
    ),
    'enabled' => true,
  ),
  989 => 
  array (
    'id' => '6990',
    'bank_id' => '35',
    'name' => 'GOPALPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185761093',
    ),
    'enabled' => true,
  ),
  990 => 
  array (
    'id' => '6991',
    'bank_id' => '35',
    'name' => 'ISHWARDI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185761219',
    ),
    'enabled' => true,
  ),
  991 => 
  array (
    'id' => '6992',
    'bank_id' => '35',
    'name' => 'MATHURAHAT',
    'bank_branch_data' => 
    array (
      'routing_no' => '185761514',
    ),
    'enabled' => true,
  ),
  992 => 
  array (
    'id' => '6993',
    'bank_id' => '35',
    'name' => 'NAKALIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185761635',
    ),
    'enabled' => true,
  ),
  993 => 
  array (
    'id' => '6994',
    'bank_id' => '35',
    'name' => 'PABNA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185761785',
    ),
    'enabled' => true,
  ),
  994 => 
  array (
    'id' => '6995',
    'bank_id' => '35',
    'name' => 'PABNA CADET COLLEGE',
    'bank_branch_data' => 
    array (
      'routing_no' => '185761848',
    ),
    'enabled' => true,
  ),
  995 => 
  array (
    'id' => '6996',
    'bank_id' => '35',
    'name' => 'SANTHIA',
    'bank_branch_data' => 
    array (
      'routing_no' => '185762050',
    ),
    'enabled' => true,
  ),
  996 => 
  array (
    'id' => '6997',
    'bank_id' => '35',
    'name' => 'SHIBPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185762142',
    ),
    'enabled' => true,
  ),
  997 => 
  array (
    'id' => '6998',
    'bank_id' => '35',
    'name' => 'MAIDANDIGHI',
    'bank_branch_data' => 
    array (
      'routing_no' => '185770497',
    ),
    'enabled' => true,
  ),
  998 => 
  array (
    'id' => '6999',
    'bank_id' => '35',
    'name' => 'PANCHAGARH',
    'bank_branch_data' => 
    array (
      'routing_no' => '185770550',
    ),
    'enabled' => true,
  ),
  999 => 
  array (
    'id' => '7000',
    'bank_id' => '35',
    'name' => 'ALIPUR',
    'bank_branch_data' => 
    array (
      'routing_no' => '185780058',
    ),
    'enabled' => true,
  ),
);
    }
}
