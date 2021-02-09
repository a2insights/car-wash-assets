<?php

namespace A2insights\CarWashAssets;

use Illuminate\Support\ServiceProvider;

class CarWashAssetsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../public/assets' => public_path(),
        ], 'car-wash/assets');
    }
}
