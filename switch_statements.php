<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$number = 9;

switch($number){
    case 21:
    echo "it is 21";
    break;
    case 29:
    echo "it is 29";
    break;
    case 80:
    echo "it is 80";
    break;
    case 10:
    echo "it is 10";
    break;

    default :
    echo 'We could not find it'; 
    break;
}


?>
</body>
</html>