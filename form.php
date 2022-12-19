<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $maximum = 15;
    $naam = array("annayi","aliyoow","olamoo","khanaa","axmed");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Username" name="username"><br>
        <input type="password" placeholder="Password" name="password">
        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>