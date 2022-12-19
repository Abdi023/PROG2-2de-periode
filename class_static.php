<?php

class Car{
   static $wheels = 4;
    var $hood = 1;
 

    public static function movewheels(){
        Car::$wheels = 10;
    }



}

$bmw = new Car();

// $bmw->wheels;

Car::movewheels();

echo Car::$wheels;

?>