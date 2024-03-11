<?php

echo "Continue:<br>";
for($i=1;$i<7;$i++){
    if($i==5)
        continue;
    echo $i."<br/>";
}