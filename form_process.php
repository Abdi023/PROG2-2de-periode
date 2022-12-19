<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $maximum = 15;
    $naam = ["abdiwahaab","jeroen","ahmet","leandro"];
}


if(strlen($username) < $minimum){
    echo "username must be more than 4 character";
}

if(strlen($username) > $maximum){
    echo "username cannot be more than 15 character.";
}


if(!in_array($username, $naam)){
    echo "sorry you are not allowed to login";
}else{
    echo "welcome";
}

?>