<?php

namespace App\Providers;

use App\Models\Job;
use Illuminate\Support\ServiceProvider;
use App\Repository\BookingRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BookingRepository::class, function ($app) {
            return new BookingRepository('job');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
