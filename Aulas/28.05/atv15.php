<?php
$precos = [100, 250, 80, 320, 150];

$precosComDesconto = array_map(fn($preco) => $preco * 0.90, $precos);


echo "Array original:\n";
foreach ($precos as $preco) {
    echo "R$ " . number_format($preco, 2, ',', '.') . "\n";
}

echo "\nArray com desconto (10%):\n";
foreach ($precosComDesconto as $precoDesconto) {
    echo "R$ " . number_format($precoDesconto, 2, ',', '.') . "\n";
}

?>