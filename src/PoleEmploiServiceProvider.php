<?php

namespace Ogrre\Laravel\PoleEmploi;

use Illuminate\Support\ServiceProvider;

class PoleEmploiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(PoleEmploiClient::class, function () {
            return new PoleEmploiClient();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/pole-emploi.php', 'pole-emploi'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->alias(PoleEmploi::class, 'PoleEmploi');

        $this->publishes([
            __DIR__.'/../config/cpole-emploi.php' => config_path('pole-emploi.php'),
        ], 'config');
    }
}
