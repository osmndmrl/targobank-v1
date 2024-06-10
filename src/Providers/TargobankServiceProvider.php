<?php
namespace Targobank\Providers;

use Plenty\Plugin\ServiceProvider;

class TargobankServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(TargobankRouteServiceProvider::class);
    }
}
