<?php

class Car{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4; 

    function movewheels(){
        $this->wheels = 10;
    }

    function CreateDoors(){
        $this->doors = 6;
    }

}

$bmw = new Car();
// $truck = new Car();
// echo $bmw->wheels . "<br>";
// echo $truck ->wheels = 10 . "<br>";

// $truck->CreateDoors();
// echo $truck->doors;


class Plane extends Car{
    var $wheels = 20;
}

// if(class_exists("Plane")){
//     echo "class extists";

// }

$jet = new Plane();
// $jet->movewheels();

echo $jet->wheels;






?>