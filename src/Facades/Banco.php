<?php

namespace Fintech\Banco\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fintech\Banco\Banco
 *
 * @method static \Fintech\Banco\Services\BankService bank()
 * @method static \Fintech\Banco\Services\BankBranchService bankBranch()
 * @method static \Fintech\Banco\Services\BeneficiaryService beneficiary()
 * @method static \Fintech\Banco\Services\BeneficiaryTypeService beneficiaryType()
 */
class Banco extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\Banco\Banco::class;
    }
}
