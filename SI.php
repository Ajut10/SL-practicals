<?php
$p=$_GET['principal'];
$r=$_GET['rate'];
$t=$_GET['time'];
$SI=($p*$r*$t)/100;
echo $SI;
?>