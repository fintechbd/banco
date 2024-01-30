<?php

namespace Fintech\Banco\Services;

use Exception;
use Fintech\Banco\Facades\Banco;
use Fintech\Banco\Interfaces\BeneficiaryRepository;
use Fintech\Core\Enums\Transaction\OrderStatus;
use Fintech\Core\Facades\Core;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class BeneficiaryService
 */
class BeneficiaryService
{
    /**
     * BeneficiaryService constructor.
     */
    public function __construct(private readonly BeneficiaryRepository $beneficiaryRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->beneficiaryRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        $inputs['beneficiary_data']['bank_name'] = 'N/A';
        $inputs['beneficiary_data']['cash_name'] = 'N/A';
        $inputs['beneficiary_data']['wallet_name'] = 'N/A';

        if (!empty($inputs['beneficiary_data']['bank_id'])) {
            if ($bank = Banco::bank()->find($inputs['beneficiary_data']['bank_id'])) {
                $inputs['beneficiary_data']['bank_name'] = $bank->name ?? 'N/A';
            }
        }

        if (!empty($inputs['beneficiary_data']['cash_id'])) {
            if ($bank = Banco::bank()->find($inputs['beneficiary_data']['cash_id'])) {
                $inputs['beneficiary_data']['cash_name'] = $bank->name ?? 'N/A';
            }
        }

        if (!empty($inputs['beneficiary_data']['wallet_id'])) {
            if ($bank = Banco::bank()->find($inputs['beneficiary_data']['wallet_id'])) {
                $inputs['beneficiary_data']['wallet_name'] = $bank->name ?? 'N/A';
            }
        }

        return $this->beneficiaryRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->beneficiaryRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->beneficiaryRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->beneficiaryRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->beneficiaryRepository->restore($id);
    }

    public function export(array $filters): Paginator|Collection
    {
        return $this->beneficiaryRepository->list($filters);
    }

    public function import(array $filters): Model|\MongoDB\Laravel\Eloquent\Model|null
    {
        return $this->beneficiaryRepository->create($filters);
    }

    /**
     * @throws Exception
     */
    public function manageBeneficiaryData($data): array
    {
        $get_beneficiary = Banco::beneficiary()->find($data['beneficiary_id']);
        if (!$get_beneficiary) {
            throw new Exception('Beneficiary Data not found');
        }
        $get_beneficiary_type_name = Banco::beneficiaryType()->find($data['beneficiary_type_id'])->beneficiary_type_name ?? null;
        if (!$get_beneficiary_type_name) {
            throw new Exception('Beneficiary Type Data not found');
        }
        $sender = $get_beneficiary->user;
        $profile = $sender->profile;
        if (isset($data['bank_id'])) {
            $get_bank = Banco::bank()->find($data['bank_id']);
            if (!$get_bank) {
                throw new Exception('Bank Data not found');
            }
            if (isset($data['bank_id'])) {
                $get_branch = Banco::bankBranch()->find($data['bank_branch_id']);
                if (!$get_branch) {
                    throw new Exception('Bank Data not found');
                }
            }
        }
        if (isset($data['cash_id'])) {
            $get_bank = Banco::bank()->find($data['cash_id']);
            if (!$get_bank) {
                throw new Exception('Bank Data not found');
            }
        }
        if (isset($data['wallet_id'])) {
            $get_bank = Banco::bank()->find($data['wallet_id']);
            if (!$get_bank) {
                throw new Exception('Bank Data not found');
            }
        }
        //TODO MCM change
        $dataArray['reference_no'] = entry_number(filter_var($data['purchase_number'], FILTER_SANITIZE_NUMBER_INT), 'MCM', OrderStatus::Success->value);

        $dataArray['sender_information'] = [
            'name' => $sender->name,
            'mobile' => $sender->mobile,
            'email' => $sender->email,
            'language' => $sender->language,
            'currency' => $sender->currency,
            'fcm_token' => $sender->fcm_token,
            'profile' => [
                'profile_data' => $profile->user_profile_data ?? null,
                'id_doc' => [
                    'id_type' => $profile->id_type ?? null,
                    'id_no' => $profile->id_no ?? null,
                    'id_issue_country' => $profile->id_issue_country ?? null,
                    'id_expired_at' => $profile->id_expired_at ?? null,
                    'id_issue_at' => $profile->id_issue_at ?? null,
                    'id_no_duplicate' => $profile->id_no_duplicate ?? null,
                ],
                'date_of_birth' => $profile->date_of_birth ?? null,
                'present_address' => [
                    'address' => $profile->present_address ?? null,
                    'city_id' => $profile->present_city_id ?? null,
                    'city_name' => null,
                    'city_data' => null,
                    'state_id' => $profile->present_state_id ?? null,
                    'state_name' => null,
                    'state_data' => null,
                    'country_id' => $profile->present_country_id ?? null,
                    'country_name' => null,
                    'country_data' => null,
                    'post_code' => $profile->present_post_code ?? null,
                ],
                'blacklisted' => $profile->blacklisted ?? null,
            ],
        ];
        if (isset($data['wallet_id'])) {
            $dataArray['wallet_information'] = [
                'bank_name' => $get_bank->name,
                'bank_data' => $get_bank->bank_data,
            ];
        }
        if (isset($data['cash_id'])) {
            $dataArray['cash_information'] = [
                'bank_name' => $get_bank->name,
                'bank_data' => $get_bank->bank_data,
            ];
        }
        if (isset($data['bank_id'])) {
            $dataArray['bank_information'] = [
                'bank_name' => $get_bank->name,
                'bank_data' => $get_bank->bank_data,
            ];
            if (isset($data['bank_id'])) {
                $dataArray['branch_information'] = [
                    'branch_name' => $get_branch->name,
                    'branch_data' => $get_branch->bank_branch_data,
                ];
            }
        }
        $dataArray['receiver_information'] = [
            'beneficiary_name' => $get_beneficiary->beneficiary_name,
            'beneficiary_mobile' => $get_beneficiary->beneficiary_mobile,
            'beneficiary_address' => $get_beneficiary->beneficiary_address,
            'beneficiary_data' => $get_beneficiary->beneficiary_data,
            'city_id' => $get_beneficiary->city_id ?? null,
            'city_name' => null,
            'city_data' => null,
            'state_id' => $get_beneficiary->state_id ?? null,
            'state_name' => null,
            'state_data' => null,
            'country_id' => $get_beneficiary->country_id ?? null,
            'country_name' => null,
            'country_data' => null,
            'beneficiary_type_id' => $get_beneficiary->beneficiary_type_id ?? null,
            'beneficiary_type_name' => $get_beneficiary_type_name ?? null,
            'relation_id' => $get_beneficiary->relation_id ?? null,
            'relation_name' => null,
            'relation_data' => null,
        ];
        if (Core::packageExists('MetaData')) {
            $dataArray['sender_information']['profile']['present_address']['city_name'] = $profile->presentCity?->name ?? null;
            $dataArray['sender_information']['profile']['present_address']['city_data'] = $profile->presentCity?->city_data ?? null;
            $dataArray['sender_information']['profile']['present_address']['state_name'] = $profile->presentState?->name ?? null;
            $dataArray['sender_information']['profile']['present_address']['state_data'] = $profile->presentState?->state_data ?? null;
            $dataArray['sender_information']['profile']['present_address']['country_name'] = $profile->presentCountry?->name ?? null;
            $dataArray['sender_information']['profile']['present_address']['country_data'] = $profile->presentCountry?->country_data ?? null;
            $dataArray['receiver_information']['city_name'] = $get_beneficiary->city?->name ?? null;
            $dataArray['receiver_information']['city_data'] = $get_beneficiary->city?->city_data ?? null;
            $dataArray['receiver_information']['state_name'] = $get_beneficiary->state?->name ?? null;
            $dataArray['receiver_information']['state_data'] = $get_beneficiary->state?->state_data ?? null;
            $dataArray['receiver_information']['country_name'] = $get_beneficiary->country?->name ?? null;
            $dataArray['receiver_information']['country_data'] = $get_beneficiary->country?->country_data ?? null;
            $dataArray['receiver_information']['relation_name'] = $get_beneficiary->relation?->name ?? null;
            $dataArray['receiver_information']['relation_data'] = $get_beneficiary->relation?->relation_data ?? null;
        }

        return $dataArray;
    }
}
