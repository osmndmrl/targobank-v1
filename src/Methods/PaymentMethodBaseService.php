<?php
namespace Targobank\Methods;

use Plenty\Modules\Payment\Method\Services\PaymentMethodBaseService;

class TargobankPaymentMethod extends PaymentMethodBaseService
{
    public function isActive(): bool
    {
        // Ödeme yönteminin aktif olup olmadığını kontrol edin
        return true;
    }

    public function getName(string $lang = 'de'): string
    {
        // Ödeme yönteminin adını döndürün
        return 'TARGOBANK';
    }

    public function getIcon(string $lang): string
    {
        return '/plugins/TARGOBANK/resources/images/targobank.png';
    }
    

    public function getDescription(string $lang): string
    {
        // Ödeme yönteminin açıklamasını döndürün
        return 'TARGOBANK';
    }
}
