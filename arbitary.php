<?php
function sum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $n) {
        $sum += $n;
    }
    return $sum ;
}

echo sum(1, 2, 3, 4, 5);
echo "<br>".sum(2, 3, 4, 5);
?>