<?php
namespace Targobank\Methods;

use Plenty\Modules\Payment\Method\Contracts\PaymentMethodService;
use Plenty\Modules\Payment\Method\Services\PaymentMethodBaseService;

class TargobankPaymentMethod extends PaymentMethodBaseService implements PaymentMethodService
{
    public function isActive(): bool
    {
        return true;
    }

    public function getName(string $lang = 'de'): string
    {
        return 'TARGOBANK';
    }

    public function getFee(): float
    {
        return 0.0;
    }

    public function getIcon(string $lang): string
    {
        return '/path/to/targobank/icon.png';
    }

    public function getDescription(string $lang): string
    {
        return 'TARGOBANK payment method description.';
    }
}

