<?php

    $arr=["Ram","Shyam","Alam"];
    $queryText=$_GET['query'];
    foreach($arr as $a){
        if($a== $queryText){
            echo $a;
        }
    }
?>