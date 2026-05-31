<?php
$num = 42;

$res = str_pad($num, 5, "0", STR_PAD_LEFT);

echo 'resposta a: '.$res;

$res = str_pad($num, 10, ".", STR_PAD_RIGHT);
echo "\nresposta b: ".$res;
?>