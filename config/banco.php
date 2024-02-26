<?php

// config for Fintech/Banco
use Fintech\Banco\Models\Bank;
use Fintech\Banco\Models\BankBranch;
use Fintech\Banco\Models\Beneficiary;
use Fintech\Banco\Models\BeneficiaryType;
use Fintech\Banco\Repositories\Eloquent\BankBranchRepository;
use Fintech\Banco\Repositories\Eloquent\BankRepository;
use Fintech\Banco\Repositories\Eloquent\BeneficiaryRepository;
use Fintech\Banco\Repositories\Eloquent\BeneficiaryTypeRepository;

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Module APIs
    |--------------------------------------------------------------------------
    | this setting enable the api will be available or not
    */
    'enabled' => env('PACKAGE_BANCO_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Banco Group Root Prefix
    |--------------------------------------------------------------------------
    |
    | This value will be added to all your routes from this package
    | Example: APP_URL/{root_prefix}/api/banco/action
    |
    | Note: while adding prefix add closing ending slash '/'
    */

    'root_prefix' => 'test/',

    /*
    |--------------------------------------------------------------------------
    | Bank Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'bank_model' => Bank::class,

    /*
    |--------------------------------------------------------------------------
    | BankBranch Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'bank_branch_model' => BankBranch::class,

    /*
    |--------------------------------------------------------------------------
    | Beneficiary Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'beneficiary_model' => Beneficiary::class,

    /*
    |--------------------------------------------------------------------------
    | BeneficiaryType Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'beneficiary_type_model' => BeneficiaryType::class,

    //** Model Config Point Do not Remove **//

    /*
    |--------------------------------------------------------------------------
    | Constant
    |--------------------------------------------------------------------------
    |
    | This value will be used across systems where a constant instance is needed
    */

    'bank_categories' => [
        'Central Bank' => 'Central Bank',
        'Foreign Commercial' => 'Foreign Commercial',
        'Private Commercial' => 'Private Commercial',
        'Specialized Development' => 'Specialized Development',
        'State-owned Commercial' => 'State-owned Commercial',
        'Non-bank financial institutions' => 'Non-bank financial institutions',
    ],

    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | This value will be used across systems where a repositoy instance is needed
    */

    'repositories' => [
        \Fintech\Banco\Interfaces\BankRepository::class => BankRepository::class,

        \Fintech\Banco\Interfaces\BankBranchRepository::class => BankBranchRepository::class,

        \Fintech\Banco\Interfaces\BeneficiaryRepository::class => BeneficiaryRepository::class,

        \Fintech\Banco\Interfaces\BeneficiaryTypeRepository::class => BeneficiaryTypeRepository::class,

        //** Repository Binding Config Point Do not Remove **//
    ],

];
