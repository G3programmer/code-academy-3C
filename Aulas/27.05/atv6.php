<?php

$cidades = [
    'São Paulo',
    'Rio de Janeiro', 
    'Curitiba',
    'Belo Horizonte', 
    'Salvador'
];

if (in_array('Curitiba', $cidades)) {
    
    $posicao = array_search('Curitiba', $cidades);
    echo "A cidade 'Curitiba' existe no array e está na posição (índice): $posicao\n";

} else {
    echo "A cidade não foi encontrada no array.\n";
}
?>