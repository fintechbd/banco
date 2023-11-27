<?php

namespace Fintech\Banco\Services;

use Fintech\Banco\Facades\Banco;
use Fintech\Banco\Interfaces\BeneficiaryRepository;
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
    public function __construct(BeneficiaryRepository $beneficiaryRepository)
    {
        $this->beneficiaryRepository = $beneficiaryRepository;
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

    /**
     * @param array $filters
     * @return Paginator|Collection
     */
    public function export(array $filters): Paginator|Collection
    {
        return $this->beneficiaryRepository->list($filters);
    }

    public function import(array $filters): Model|\MongoDB\Laravel\Eloquent\Model|null
    {
        return $this->beneficiaryRepository->create($filters);
    }

    public function manageBeneficiaryData($data)
    {
        $get_beneficiary = Banco::beneficiary()->find($data['beneficiary_id']);
        $get_beneficiary_type_name = Banco::beneficiaryType()->find($data['beneficiary_type_id'])->beneficiary_type_name ?? null;
        $sender = $get_beneficiary->user;
        $profile = $sender->profile;
        //$dataArray['reference_no'] = entry_number($bankTransfer->getKey(), $bankTransfer->sourceCountry->iso3, OrderStatusConfig::Purchased->value);

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
                "present_address" => [
                    'address' => $profile->present_address ?? null,
                    'city_id' => $profile->present_city_id ?? null,
                    'city_name' => null,
                    'state_id' => $profile->present_state_id ?? null,
                    'state_name' => null,
                    'country_id' => $profile->present_country_id ?? null,
                    'country_name' => null,
                    'post_code' => $profile->present_post_code ?? null,
                ],
                'blacklisted' => $profile->blacklisted ?? null,
            ]
        ];

        $dataArray['bank_information'] = null;
        $dataArray['branch_information'] = null;
        $dataArray['receiver_information'] = null;
        if (Core::packageExists('MetaData')) {
            $dataArray['sender_information']['profile']['present_address']['city_name'] = $profile->presentCity?->name ?? null;
            $dataArray['sender_information']['profile']['present_address']['city_data'] = $profile->presentCity?->city_data ?? null;
            $dataArray['sender_information']['profile']['present_address']['state_name'] = $profile->presentState?->name ?? null;
            $dataArray['sender_information']['profile']['present_address']['state_data'] = $profile->presentState?->state_data ?? null;
            $dataArray['sender_information']['profile']['present_address']['country_name'] = $profile->presentCountry?->name ?? null;
            $dataArray['sender_information']['profile']['present_address']['country_data'] = $profile->presentCountry?->country_data ?? null;
        }
        print_r($dataArray);exit();
    }
}
