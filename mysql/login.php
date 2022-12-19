<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$connection = mysqli_connect('localhost', 'root', '', 'loginphp');

if($connection){
    echo "we are connected";
}
else{
    die("connection has failed");
}

// if($username && $password){
//     echo $username . "<br>";
//     echo $password;
// }else{
//     echo "nono";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.2/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <section class="container">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            </form>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
    </section>
</body>
</html>