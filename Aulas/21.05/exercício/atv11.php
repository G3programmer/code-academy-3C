<?php 
$notas = [8.5, 6.0, 9.2, 7.8, 5.5];
$a = 0;
$soma = 0;

foreach($notas as $nota){
    $soma += $nota;
}

$media = $soma / count($notas);
echo "A média das notas é: " . number_format($media, 2);