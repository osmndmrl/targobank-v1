<?php
namespace Targobank\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;

class TargobankServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(PaymentMethodContainer $payContainer)
    {
        $payContainer->register('targobank::TargobankPaymentMethod', TargobankPaymentMethod::class,
            [
                'Plenty\Modules\Basket\Events\Basket\AfterBasketChanged',
                'Plenty\Modules\Basket\Events\BasketItem\AfterBasketItemAdd',
                'Plenty\Modules\Basket\Events\Basket\AfterBasketCreate'
            ]
        );
    }
}