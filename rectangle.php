<?php


class Rectangle 
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    protected function setheight($height) {
        $this->height = $height;
    }
    protected function setwidth($width) {
        $this->width = $width;
    }
    public function getheight() {
        return $this->height;
    }
    public function getwidth() {
        return $this->width;
    }

    public function area()
    {
        return $this->getheight() * $this->getwidth(); 
    }
    



}


// class Superhero extends Person
// {
//     public $pseudonym;
//     public $capeColor;

//     public function alterEgo()
//     {
//         return 'Top Secret Alternate Ego: ' . $this->fullName();
//     }

//     public function hasCape()
//     {
//         return !empty($this->capeColor);
//     }
// }

// $person = new Person('TJ', 'Becker');
// $superman = new Superhero ('Clark', 'Kent');
// $superman->pseudonym = 'Superman';
// $sueprman->capeColor = 'red';
// echo $superman->fullName()
