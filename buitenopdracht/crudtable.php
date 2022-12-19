<?php include "connection.php";?>
<?php include "functions.php";?>
<?php createTable();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="crudtable.php" method="post">
            <label for="username">Name:</label>
            <input type="text" name="username" id=""><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id=""><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>