<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var array
>>>>>>> FETCH_HEAD
     */
    protected $except = [
        //
    ];
}
