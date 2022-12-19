<?php
$connection = mysqli_connect('localhost', 'root', '', 'buitenopdracht');
if(!$connection){
    die("Connection Failed");
}