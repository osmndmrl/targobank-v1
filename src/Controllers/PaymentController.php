<?php

namespace Targobank\Controllers;

use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;

class PaymentController
{
    public function checkoutSuccess(Response $response)
    {
        // Başarılı ödeme işlemleri burada ele alınabilir.
        return $response->redirectTo('/checkout?readonlyCheckout=1');
    }

    public function checkoutCancel(Response $response)
    {
        // İptal edilen ödeme işlemleri burada ele alınabilir.
        return $response->redirectTo('/checkout');
    }
}
