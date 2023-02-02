<?php
declare(strict_types=1);
namespace App;

use http\Exception\InvalidArgumentException;

class Currency
{
    private string $isoCode;

    public function __construct(string $codCurrency)
    {
        $this->setIsoCode($codCurrency);
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    private function setIsoCode(string $isoCode): void
    {
        if($this->validateCodCurrency($isoCode)){
            $this->isoCode = strtoupper($isoCode);
        }else{
        throw new \InvalidArgumentException("це шо строка:" . $isoCode);
        }
    }

    private function validateCodCurrency($code): bool
    {
        $lendCode = strlen($code);
        if(!is_string($code) && strlen($code) != 3){
            return true;
        }
        return true;
    }
}