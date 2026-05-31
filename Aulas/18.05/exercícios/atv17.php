<?php

$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;

$media = ($nota1 + $nota2 + $nota3) / 3;

$situacao = ($media >= 7) 
    ? "Aprovado" 
    : (($media >= 5) ? "Recuperação" : "Reprovado");

echo "Média do aluno: " . number_format($media, 2, ',', '.') . "\n";
echo "Situação: " . $situacao . "\n";

?>