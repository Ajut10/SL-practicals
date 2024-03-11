<?php

echo "Eg of for loop<br>";
for($i=1;$i<7;$i++){
    if($i==5)
        continue;
    echo $i."<br/>";
}
echo "Eg of while loop<br>";
$x=11;
while($x!=15){
    echo $x."<br/>";
    $x++;
}

echo "Eg of do while loop<br>";
$y=56;
do{
    echo $y."<br/>";
    $y++;
}while($y==58);

echo "Eg of foreach loop<br>";
$a=["a","b","c","d","e"];
foreach($a as $as){
    echo $as."<br/>";
}


?>

