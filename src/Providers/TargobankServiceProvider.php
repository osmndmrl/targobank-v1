<?php

namespace Targobank\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use Targobank\Methods\TargobankPaymentMethod;

class TargobankServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(TargobankRouteServiceProvider::class);
    }

    public function boot(PaymentMethodContainer $payContainer)
    {
        $payContainer->register('targobank::Targobank', TargobankPaymentMethod::class, [
            'Plenty\Modules\Basket\Events\Basket\AfterBasketChanged',
            'Plenty\Modules\Basket\Events\BasketItem\AfterBasketItemAdd',
            'Plenty\Modules\Basket\Events\Basket\AfterBasketCreate'
        ]);
    }
}

