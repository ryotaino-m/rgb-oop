<?php

class Rgb24 {
    private $hex;

    public function __construct(
        private int $red,
        private int $green,
        private int $blue
    ) {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function test() :int
    {
         return $this->red;
    }
    
    public function getHex() :string{
        $hex = dechex($this->red);
        $hex .= dechex($this->green);
        $hex .= dechex($this->blue);

        $this->hex = $hex;

        return $hex;
    }

    public function getBits(): string|null {
        if (is_null($this->hex)) {
            return null;
        }
        return decbin(hexdec(dechex($this->hex)));
    }

    public function getColorShade(): string
    {
        if ($this->red === $this->green && $this->green === $this->bule) {
            return 'grayscale';
        }
        $greatestString = "red";
        $greatest = $this->red;

        if ($greatest <= $this->green) {
            $greatestString = "green";
            $greatest = $this->green;
        }

        if ($greatest <= $this->blue){
            $greatestString = 'blue';
            $greatest = $this->blue;
        }

        return $greatestString;
    }
}

$test = new Rgb24(12345,2,3);
echo $test->getHex() . "\n";
echo $test->getBits() . "\n";
echo $test->getColorShade() . "\n";
