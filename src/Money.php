<?php
declare(strict_types=1);
namespace App;

use http\Exception\InvalidArgumentException;

class Money
{
    private Currency $currency;
    private int | float $amount;

    public function __construct(Currency $currency, int | float $amount)
    {
        $this->setCurrency($currency);
        $this->setAmount($amount);
    }

    private function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): string
    {
        return $this->currency->getIsoCode();
    }

    private function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function equals(Money $currency): bool
    {
        if($this->getCurrency() != $currency->getCurrency() && $this->getAmount() != $currency->getAmount()){
        return false;
            }
        return true;
    }

    public function add(Money $money): void
    {
        if($this->currency->getIsoCode() != $money->getCurrency()){
            throw new \InvalidArgumentException("валюта не вірна");
        }
        $this->amount =  $this->amount + $money->getAmount();
    }

}