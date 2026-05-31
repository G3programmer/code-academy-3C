<?php
$numbers = [1, 9, -10, 20, 11];
$i = 0;
echo count($numbers);
foreach ($numbers as $number) {
    if ($number > 10) {
        $i++;
    }
}
echo "\nTotal de números maiores que 10: " .$i;
?>