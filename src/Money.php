<?php

namespace App;

use http\Exception\InvalidArgumentException;

class Money
{
    private string $currency;
    private int | float $amount;

    public function __construct(Currency $currency, int | float $amount)
    {
        $this->setCurrency($currency->getIsoCode());
        $this->setAmount($amount);
    }

    private function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    private function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function equals(Money $currency)
    {
        return $this->getCurrency() . " - " . $this->getAmount() . "<br>" .
            $currency->getCurrency() . " - " . $currency->getAmount();
    }

    public function add(Money $money): void
    {
        if($this->currency != $money->getCurrency()){
            throw new \InvalidArgumentException("валюта не вірна");
        }
        $this->amount =  $this->amount + $money->getAmount();
    }

}