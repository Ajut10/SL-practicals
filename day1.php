<?php
class InterestCalculator{
function calculateSI($p,$t,$r){

    // $p=10000;
    // $t=12;
    // $r=3;
    $SI=($p*$t*$r)/100;
    echo $SI;
}
}
$obj = new InterestCalculator();
$obj->calculateSI(1000,12,3);
?>