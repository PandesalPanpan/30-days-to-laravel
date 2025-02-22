<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();
        // Model::unguard();
        // Paginator::useBootstrap();
        // Gate::define('edit-job', function (User $user, Job $job){
        //  return $user->is($job->employer->user);
        //  });
    }
}
