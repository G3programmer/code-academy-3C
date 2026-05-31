<?php

$itens = [
    ['nome' => 'Mouse', 'preco' => 50],
    ['nome' => 'Teclado', 'preco' => 120],
    ['nome' => 'Monitor', 'preco' => 900],
    ['nome' => 'Headset', 'preco' => 200]
];


$valorTotal = array_reduce($itens, function($acumulador, $item) {
    return $acumulador + $item['preco'];
}, 0);

echo "=== Resumo do Carrinho ===\n";
echo "Valor total dos itens: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";
?>