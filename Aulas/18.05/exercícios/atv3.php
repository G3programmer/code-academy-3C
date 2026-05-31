<?php 
function imc(){
    $peso = 55.7;
    $altura = 1.67;
    $imc = $peso / ($altura * $altura);
    return $imc;
}

echo "O IMC é: " . number_format(imc(), 2);
?>