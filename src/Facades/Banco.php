<?php

namespace Fintech\Banco\Facades;

use Fintech\Banco\Services\BankBranchService;
use Fintech\Banco\Services\BankService;
use Fintech\Banco\Services\BeneficiaryService;
use Fintech\Banco\Services\BeneficiaryTypeService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static BankService bank()
 * @method static BankBranchService bankBranch()
 * @method static BeneficiaryService beneficiary()
 * @method static BeneficiaryTypeService beneficiaryType()
 *                                                                                 // Crud Service Method Point Do not Remove //
 *
 * @see \Fintech\Banco\Banco
 */
class Banco extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\Banco\Banco::class;
    }
}
