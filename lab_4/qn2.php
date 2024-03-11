<?php

class Runner{
     
    function __construct(){
        echo "i am first<br>";

    }
    function __destruct(){
        echo "i am last ";
    }
    function run() {
        echo "i am middle<br>";
    }


}
$runner=new Runner();
$runner->run();



?>