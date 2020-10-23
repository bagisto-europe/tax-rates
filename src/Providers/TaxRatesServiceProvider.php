<?php

namespace Bagisto\TaxRates\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class TaxRatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'taxrates');
    }
}