<?php declare(strict_types = 1);

class Color
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

    private function setRed($red): void
    {
        if ($red < 0 && $red >255) {
            exit ('IS NOT RED');
        }
        $this -> red = $red;
    }
    private function setGreen($green): void
    {
        if ($green < 0 && $green>255) {
            exit ('IS NOT GREEN');
        }
        $this -> green = $green;
    }
    private function setBlue($blue): void
    {
        if ($blue < 0 && $blue >255) {
            exit ('IS NOT BLUE');
        }
        $this -> blue = $blue;
    }

    public function getRed():int
    {
        return $this ->red;
    }
    public function getGreen():int
    {
        return $this ->green;
    }
    public function getBlue():int
    {
        return $this ->blue;
    }

    public function equals(Color $color): bool
    {
        return $this -> red === $color -> getRed() &&
            $this -> green === $color -> getGreen() &&
            $this -> blue === $color -> getBlue();
    }

    public static function random():self
    {
        return new self(random_int(0,255), random_int(0,255),random_int(0,255));
    }

    public function mix(Color $color): self
    {
        return new self(
            ($this -> red + $color -> getRed())/2,
            ($this -> green + $color -> getGreen())/2,
            ($this -> blue + $color -> getBlue())/2
        );
    }
}
//equals
$color1 = new Color(0, 300, 0);
$color2 = new Color(300, 0, 0);
var_dump($color1 -> equals($color2));//equals

var_dump(Color::random());//random

//метод mix
$color = new Color(200, 200, 200);
$mixedColor = $color->mix(new Color(100, 100, 100));
var_dump($mixedColor);




/*$colorRed -> setRed('250');
$colorGreen -> setGreen();
$colorBlue -> setBlue();*/

/*if($_SERVER['REQUEST_METHOD'] = 'POST') {
    $colorRed = ValueObject::create($_POST['red']);
    $colorGreen = ValueObject::create($_POST['green']);
    $colorBlue = ValueObject::create($_POST['blue']);
    }*/


?>

