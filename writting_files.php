<?php

$file = "example.txt";

if($handle = fopen($file, 'w')){

    fwrite($handle, 'I love PHP');

    fclose($handle);
} else{
    echo "the application was not able to write on the file";
}




?>