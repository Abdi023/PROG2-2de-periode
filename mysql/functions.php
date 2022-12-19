<?php include "db.php";?>
<?php

// dit is voor create crud

function createRows(){
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        global $connection;
        $username = mysqli_real_escape_string($connection, $username );
        $password = mysqli_real_escape_string($connection, $password );

        // dis is voor password encript() bij het gebruik maken van een hash $2y$ 
        $hashFormat = "$2y$10$";
        $salt = "okeiknowwhoiambutthanks22";
        $hash_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hash_and_salt);



        $query = "INSERT INTO users(username,password)";
        $query .= "VALUES ('$username', '$password')";
        
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Failed' . mysqli_error($connection));
        } else{
            echo "Record created";
    }
}
}

function readRows(){

    $query = "SELECT * FROM  users";
    global $connection;
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){       
    print_r($row); 
}
}

// dit is voor read crud

function showallData(){
    $query = "SELECT * FROM  users ";
    global $connection;
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row ['id'];
        echo "<option value='$id'>$id</option>";
}
}




// dit is voor update crud

function updateTable(){
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    global $connection;
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    } else{
        echo "Record created";
    }
}
}

// dit is voor delete crud
function deleteRows(){
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    global $connection;
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    } else{
        echo "Record created";
    }
    
}
}
?>
