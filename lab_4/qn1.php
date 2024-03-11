<?php
class Bulb{

    function on(){
        echo "bulb is on<br>";

    }
    function off(){
        echo "bulb is off";
    }
}
$bulb= new Bulb();
$bulb->on();
$bulb->off();