<?php
$produtos = [
    "Teclado Mecânico" => 250.00,
    "Mouse Gamer"      => 120.50,
    "Monitor 24'"      => 899.90,
    "Headset"          => 180.00,
    "Mousepad XL"      => 45.00
];

asort($produtos);
echo "Produtos ordenados pelo preço (crescente):\n";

foreach ($produtos as $produto => $preco) {
    echo "$produto: R$ " . number_format($preco, 2, ',', '.') . "\n";
}
?>