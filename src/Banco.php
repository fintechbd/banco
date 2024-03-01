<?php

namespace Fintech\Banco;

use Fintech\Banco\Services\BankBranchService;
use Fintech\Banco\Services\BankService;
use Fintech\Banco\Services\BeneficiaryService;
use Fintech\Banco\Services\BeneficiaryTypeService;

class Banco
{
    /**
     * @return BankService
     */
    public function bank()
    {
        return app(BankService::class);
    }

    /**
     * @return BankBranchService
     */
    public function bankBranch()
    {
        return app(BankBranchService::class);
    }

    /**
     * @return BeneficiaryTypeService
     */
    public function beneficiaryType()
    {
        return app(BeneficiaryTypeService::class);
    }

    /**
     * @return BeneficiaryService
     */
    public function beneficiary()
    {
        return app(BeneficiaryService::class);
    }

    /**
     * @return \Fintech\Banco\Services\BankAccountService
     */
    public function bankAccount()
    {
        return app(\Fintech\Banco\Services\BankAccountService::class);
    }

    //** Crud Service Method Point Do not Remove **//

}
