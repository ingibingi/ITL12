<?php

$myNumber = $_POST["myNumber"];
$Primzahlen = "";
if ($myNumber < "2") {
    echo "bitte Zahl >= 2 eingeben";
    
} else {
    $i = 2;
    while ($i<=$myNumber){
        $sqrt_i = sqrt($i);
        $isPrime = 1;
        $j = 2;
        while (($j <= $sqrt_i) AND ($isPrime == 1)){
            if(($i%$j)==0){
                $isPrime = 0;
            }
            $j++;
        }
        if ($isPrime == 1){
            $Primzahlen.=$i.", ";
            echo $i." ... Prim".nl2br("\n");
        } else {
            echo $i.nl2br("\n");
        }
        $i++;
    }
echo nl2br("\n\nDie Primzahlen bis ")
    .$myNumber." sind: ".nl2br("\n")
    .rtrim($Primzahlen,", ");
}