<?php
$i = 0;
$j = 1;

for($k = 0; $k <= 15; $k++){
    echo $i . " ";

    $res = $i + $j;
    $i = $j;
    $j = $res;
}
?>