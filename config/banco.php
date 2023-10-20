<?php

// config for Fintech/Banco
return [

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

        //** Repository Binding Config Point Do not Remove **//
    ],

];
