<?php

namespace app;

class Collor
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        if ($red > 0 && $red <= 255) {
            $this->setRed($red);
        } else {
            throw new \Exception("не коректний $green");
        };
        if ($green > 0 && $green <= 255) {
            $this->setGreen($green);
        }else{
        throw new \Exception("не коректний $green");
        };
        if($blue > 0 && $blue <=  255){
            $this->setBlue($blue);
        }else{
        throw new \Exception("не коректний $green");
        };
    }

    public function getRed()
    {
        return $this->red;
    }

    public function setRed($red)
    {
        $this->red = $red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function setGreen($green)
    {
        $this->green = $green;
    }

    public function getBlue()
    {
        return $this->blue;
    }
    public function setBlue($blue)
    {
        $this->blue = $blue;
    }

    public function mix(int $red, int $green, int $blue): void
    {
        $this->red = round(($this->red + $red) / 2);
        $this->green = round(($this->green + $red) / 2);
        $this->blue = round(($this->blue + $blue) / 2);
    }

    public function getCollor(): string
    {
        return "rgb(".$this->red.", ".$this->green.", ".$this->blue.")";
    }
}