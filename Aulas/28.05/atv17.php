<?php
$estoque = [
    'Camiseta' => 50, 
    'Calça'    => 30, 
    'Tênis'    => 15, 
    'Boné'     => 80, 
    'Meia'     => 100
];

$nomesProdutos = array_keys($estoque);

$quantidades = array_values($estoque);



echo "Apenas os nomes dos produtos (chaves)\n";
foreach ($nomesProdutos as $produto) {
    echo "- " . $produto . "\n";
}

echo "\nApenas as quantidades (valores)\n";
foreach ($quantidades as $quantidade) {
    echo "- " . $quantidade . " unidades\n";
}

?>