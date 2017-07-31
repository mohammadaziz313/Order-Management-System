<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    	'/',
    	'/supplier-info/add-new-supplier',
    	'/inventory-info/add-new-inventory',
<<<<<<< HEAD
        '/inventory-info/searchInventory',
        '/supplier-info/delete-supplier'
=======
        '/purchase/add-purchaseContinue',
        '/inventory-info/searchInventory'

>>>>>>> origin/temp
    ];
}
