<?php

/*
 * Opdracht 1:
 * Maak de $weekdagen array af zodat alle dagen van de week erin staan
 * Voor de key en value gebruik je kleine letters, geen hoofdletters
 */
$weekdagen =  [
            "ma" => "maandag",
            "<br>", 
            "di" =>  "dinsdag",
            "<br>", 
            "wo" => "woensdag", 
            "<br>", "do" => "donderdag", 
            "<br>", 
            "vr" => "vrijdag", 
            "<br>", 
            "za" => "zaterdag", 
            "<br>", 
            "zo" => "zondag"];
/*
 * Opdracht 2:
 * Gebruik een loop om van alle elementen van je array de waarde te tonen op het scherm
 * Gebruik hiervoor een echo statement dus geen print_r of var_dump.
 */
    foreach($weekdagen as $week){
        echo $week;
    } 
    

/*
 * Opdracht 3:
 * Wijzig alle waardes in je array met behulp van een loop en een switch
 * Alle waardes moeten beginnen met een hoofdletter. Bij 'za' en 'zo' moeten de waardes
 * van de dagen geheel uit hoofdletters bestaan.
 * Gebruik hiervoor de juiste functies
 */
echo "<br>";
echo "<br>";
echo "<br>";
echo "dit is een foreach loop met switch case gecombineerd" . "<br>";
foreach($weekdagen as $dagen => $waarde){
    switch($dagen){
        case "ma":
        echo "maandag" . "<br>";
        break;
        case "di":
        echo "dinsdag" . "<br>";
        break;
        case "wo":
        echo "woensdag" . "<br>";
        break;
        case "do":
        echo "donderdag" . "<br>";
        break;
        case "vr":
        echo "vrijdag" . "<br>";
        break;
        case "za":
        echo "zaterdag" . "<br>";
        break;
        case "zo":
        echo "zondag" . "<br>";
        break;
        
}
}

   

/*
 * Opdracht 4:
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
 */

 echo '<br>';
 echo '<br>';
echo "dit is count() in een foreach loop door een key en waarde";
foreach($weekdagen as $dagen => $dag){
    echo "$dagen:  $dag";
} 
echo "<br>";
echo "<br>";
echo "<br>";
echo "dit is sizeof() in een for loop";
echo "<br>";
$size = sizeof($weekdagen); 
for($i = 6; $i < $size; ++$i){
    echo $size;
}
/*
 * Opdracht 5:
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
 */
echo '<br>';
echo '<br>';
print_r(array_reverse($weekdagen));
