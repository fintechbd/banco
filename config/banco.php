<?php

// config for Fintech/Banco
return [

    /*
    |--------------------------------------------------------------------------
    | Enable Module APIs
    |--------------------------------------------------------------------------
    | this setting enable the api will be available or not
    */
    'enabled' => false,

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
    'bank_model' => \Fintech\Banco\Models\Bank::class,

    /*
    |--------------------------------------------------------------------------
    | BankBranch Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'bank_branch_model' => \Fintech\Banco\Models\BankBranch::class,

    /*
    |--------------------------------------------------------------------------
    | BeneficiaryType Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'beneficiary_type_model' => \Fintech\Banco\Models\BeneficiaryType::class,

    /*
    |--------------------------------------------------------------------------
    | Beneficiary Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'beneficiary_model' => \Fintech\Banco\Models\Beneficiary::class,

    //** Model Config Point Do not Remove **//

    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | This value will be used across systems where a repositoy instance is needed
    */

    'repositories' => [
        \Fintech\Banco\Interfaces\BankRepository::class => \Fintech\Banco\Repositories\Eloquent\BankRepository::class,

        \Fintech\Banco\Interfaces\BankBranchRepository::class => \Fintech\Banco\Repositories\Eloquent\BankBranchRepository::class,

        \Fintech\Banco\Interfaces\BeneficiaryTypeRepository::class => \Fintech\Banco\Repositories\Eloquent\BeneficiaryTypeRepository::class,

        \Fintech\Banco\Interfaces\BeneficiaryRepository::class => \Fintech\Banco\Repositories\Eloquent\BeneficiaryRepository::class,

        //** Repository Binding Config Point Do not Remove **//
    ],

];
