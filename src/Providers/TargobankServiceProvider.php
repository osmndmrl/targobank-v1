<?php

namespace Targobank\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use Targobank\Methods\TargobankPaymentMethod;
use Plenty\Modules\Basket\Events\Basket\AfterBasketCreate;
use Plenty\Modules\Basket\Events\Basket\AfterBasketChanged;
use Plenty\Modules\Basket\Events\BasketItem\AfterBasketItemAdd;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Http\Response;

class TargobankServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(PaymentMethodContainer $payContainer, Router $router)
    {
        $payContainer->register('Targobank::TargobankPayment', TargobankPaymentMethod::class,
            [
                AfterBasketCreate::class,
                AfterBasketChanged::class,
                AfterBasketItemAdd::class
            ]
        );

        $router->get('payment/targobank/checkoutSuccess', 'Targobank\Controllers\PaymentController@checkoutSuccess');
        $router->get('payment/targobank/checkoutCancel', 'Targobank\Controllers\PaymentController@checkoutCancel');
    }
}
