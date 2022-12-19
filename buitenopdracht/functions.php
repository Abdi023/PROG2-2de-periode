<?php include "connection.php"; ?>
<?php

// create crud
function createTable(){
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    global $connection;
    $voeg = "INSERT INTO crud(name,password)";
    $voeg .= "VALUES ('$username', '$password')";

    $show = mysqli_query($connection, $voeg);

    if(!$show){
        die('Query Failed' . mysqli_error($connection));
    } else{
        echo "Record created";
    }
  }
}

// read crud

function readTable(){
    global $connection;
    $voeg = "SELECT * FROM crud";
    $show = mysqli_query($connection, $voeg);
    if(!$show){
        die('Query Failed' . mysqli_error($connection));
    }
    $database = mysqli_fetch_assoc($show);
    foreach($database as $data){
        
        echo $data . "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    while($database = mysqli_fetch_assoc($show)){
        print_r($database);
    }

     
}