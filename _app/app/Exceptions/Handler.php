<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
=======
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
>>>>>>> FETCH_HEAD
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
<<<<<<< HEAD
     */
    public function register(): void
=======
     *
     * @return void
     */
    public function register()
>>>>>>> FETCH_HEAD
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
