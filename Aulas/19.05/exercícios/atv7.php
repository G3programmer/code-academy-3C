<?php
$peso = 75;
$altura = 1.80;
$res = $peso / ($altura * $altura);

if($res < 18.5) {
    echo "Abaixo do peso";
} 

elseif($res >= 18.5 && $res < 25) {
    echo "Peso normal";
} 

elseif($res >= 25 && $res < 30) {
    echo "Sobrepeso";
} 

elseif($res >= 30) {
    echo "Obesidade";
} 
?>