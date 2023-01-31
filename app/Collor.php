<?php

namespace app;

class Collor
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed()
    {
        return $this->red;
    }

    private function setRed($red): void
    {
        if ($red > 0 && $red <= 255) {
            $this->setRed($red);
        }
        throw new \Exception("не коректний RED");
    }

    public function getGreen()
    {
        return $this->green;
    }

    private function setGreen(int $green): void
    {
        if ($green > 0 && $green <= 255) {
            $this->setGreen($green);
        }
        throw new \Exception("не коректний GREEN");
    }

    public function getBlue()
    {
        return $this->blue;
    }
    private function setBlue(int $blue): void
    {
        if($blue > 0 && $blue <= 255){
            $this->setBlue($blue);
        }
        throw new \Exception("не коректний BLUE");
    }

    public function mix(Collor $color): Collor
    {

        $r = ($this->red + $color->getRed()) / 2;
        $g = ($this->green + $color->getGreen()) / 2;
        $b = ($this->blue + $color->getBlue()) / 2;
        return new Collor($r,$g,$b);
    }

    public function getCollor(): string
    {
        return "rgb(".$this->red.", ".$this->green.", ".$this->blue.")";
    }
}