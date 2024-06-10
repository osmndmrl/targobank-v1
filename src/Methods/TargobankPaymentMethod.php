<?php
namespace Targobank\Methods;

use Plenty\Modules\Payment\Method\Services\PaymentMethodBaseService;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;

class TargobankPaymentMethod extends PaymentMethodBaseService
{
    public function isActive(): bool
    {
        return true;
    }

    public function getName(string $lang): string
    {
        return 'TARGOBANK Payment';
    }

    public function getFee(): float
    {
        return 0.00;
    }

    public function getIcon(string $lang): string
    {
        return '';
    }

    public function getDescription(string $lang): string
    {
        return 'Pay with TARGOBANK';
    }

    public function getSourceUrl(string $lang): string
    {
        return '';
    }

    public function isSwitchableTo(): bool
    {
        return true;
    }

    public function isSwitchableFrom(): bool
    {
        return true;
    }

    public function isBackendSearchable(): bool
    {
        return true;
    }

    public function isBackendActive(): bool
    {
        return true;
    }

    public function getBackendName(string $lang): string
    {
        return $this->getName($lang);
    }

    public function canHandleSubscriptions(): bool
    {
        return false;
    }

    public function getBackendIcon(): string
    {
        return '';
    }
}
