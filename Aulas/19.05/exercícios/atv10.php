<?php 
$preco = 250;

if ($preco > 500) {
    echo "Recebe desconto de 15% \n";
    $res=$preco - ($preco * 0.15);
    echo "O valor final é: $res";
}
elseif ($preco > 200 && $preco <= 500) {
    echo "Recebe desconto de 10% \n";
    $res=$preco - ($preco * 0.10);
    echo "O valor final é: $res";
}
elseif ($preco > 0 && $preco <= 200) {
    echo "Recebe desconto de 5% \n";
    $res=$preco - ($preco * 0.05);
    echo "O valor final é: $res";
}
else {
    echo "Valor inválido";
}
?>