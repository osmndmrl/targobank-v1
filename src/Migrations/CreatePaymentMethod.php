<?php
namespace PaymentMethod\Migrations;

use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;

class CreatePaymentMethod
{
    private $paymentMethodRepositoryContract;

    public function __construct(PaymentMethodRepositoryContract $paymentMethodRepositoryContract)
    {
        $this->paymentMethodRepositoryContract = $paymentMethodRepositoryContract;
    }

    public function run()
    {
        $this->paymentMethodRepositoryContract->createPaymentMethod([
            'pluginKey' => 'Targobank',
            'paymentKey' => 'TargobankPayment',
            'name' => 'TARGOBANK Payment'
        ]);
    }
}
