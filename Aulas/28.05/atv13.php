<?php
$salarios = [2500, 3200, 1800, 4500, 2900, 3700];

$somaTotal = array_sum($salarios);

$quantidade = count($salarios);
$mediaSalarial = $somaTotal / $quantidade;

$maiorSalario = max($salarios);
$minimoSalario = min($salarios);


echo "=== RELATÓRIO SALARIAL ===\n";

echo "a) Soma total dos salários: R$ " . number_format($somaTotal, 2, ',', '.') . "\n";
echo "b) Média salarial:           R$ " . number_format($mediaSalarial, 2, ',', '.') . "\n";
echo "c) Maior salário:            R$ " . number_format($maiorSalario, 2, ',', '.') . "\n";
echo "   Menor salário:            R$ " . number_format($minimoSalario, 2, ',', '.') . "\n";
?>