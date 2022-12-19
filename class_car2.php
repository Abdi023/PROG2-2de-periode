<?php

class Car{

    function movewheels(){
        echo "wheel move";
    }



}

if(method_exists("Car", "movewheels")){
    echo "emthod is working";
} else{
    echo "no emthody is not working";
}



?>