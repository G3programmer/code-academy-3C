<?php 
$precoOriginal = 250.0;
$desconto = 0.15;

$valorDesconto = $precoOriginal * $desconto;
$precoFinal = $precoOriginal - $valorDesconto;

echo ($precoFinal < 200) ? "Compra barata" : "Compra cara";

?>