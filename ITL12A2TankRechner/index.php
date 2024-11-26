<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$tank1 = 40.5;
$tank2 = 35.5;
$preisLiter = 1.499;

$tankGesamt = $tank1 + $tank2;
$kostenGesamt = $preisLiter * $tankGesamt;

echo "Die Bezinkosten betragen für " . $tankGesamt . " Liter " . $kostenGesamt . "€";
