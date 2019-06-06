<?php


class rectangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this -> height = $height;
        $this -> width = $width;
    }
    //tinh dien tich
    public function getArea(){
        return $this -> width* $this -> height;
    }
    //tinh chu vi
    public function getPerimeter(){
        return ($this -> width +  $this -> height)*2;
    }
    public function disPlay(){
        return " {" ."width " .$this ->width ."  height  " .$this ->height ."}";
    }
}
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle -> height . "<br>";
echo $rectangle -> width ."<br>";
echo $rectangle -> getPerimeter() ."<br>";
echo $rectangle -> getArea()."<br>";
echo ("Your Reactangle". $rectangle -> disPlay());