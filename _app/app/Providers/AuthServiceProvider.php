<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
>>>>>>> FETCH_HEAD

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
=======
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> FETCH_HEAD
    ];

    /**
     * Register any authentication / authorization services.
<<<<<<< HEAD
     */
    public function boot(): void
    {
=======
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

>>>>>>> FETCH_HEAD
        //
    }
}
