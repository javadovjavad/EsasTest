<?php

$gross = 1000;
$loan = 100;
if($loan > 0) {
	$bonus = $gross / 100 * $loan;
} else {
	$bonus = 0;
}


$salary =$gross + $bonus;

if($salary > 2500) {
    $x1 = $salary - 2500;
    $x2 = 2500;
    $vergi215= $x2 /100 *21.5;
    $vergi325 = $x1 /100 *32.5;
    $netto= ($x2 - $vergi215) + ($x1 - $vergi325);
    echo $netto;
} else {
   
   
    $vergi= $salary /100 *21.5;
    
    $netto= $salary - $vergi;
    echo $netto;
}


?>
