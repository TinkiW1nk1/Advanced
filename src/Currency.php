<?php

namespace App;

use http\Exception\InvalidArgumentException;

class Currency
{
    private string $isoCode;

    public function __construct($codCurrency)
    {
        $this->setIsoCode($codCurrency);
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    private function setIsoCode($isoCode): void
    {
        if($this->validateCodCurrency($isoCode) === true){
            $this->isoCode = strtoupper($isoCode);
        }else{
        throw new \InvalidArgumentException("це шо строка:" . $isoCode);
        }
    }

    private function validateCodCurrency($code)
    {
        $lendCode = strlen($code);
        if(is_string($code)){
            if($lendCode != 3){
                return false;
            }
            return true;
        }
        return false;
    }
}