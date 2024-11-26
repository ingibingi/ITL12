<?php

$myNumber = 100;

$i=1;
while ($i<=$myNumber) {
    echo "log(".$i.") = ".log($i);
    echo $i.nl2br("\n");
    $i++;
}
