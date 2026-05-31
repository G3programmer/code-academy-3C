<?php 
$valor = "123abc";
echo "O valor é: $valor" . " Como string. \n";
echo "O valor é: " . (int)$valor . " Como inteiro. \n";
echo "O valor é: " . (float)$valor . " Como float. \n";
echo "O valor é: " . (bool)$valor . " Como booleano. \n";

$valor = 0;
echo "O valor mudou para 0 agora e vamos repetir: \n";
echo "O valor é: $valor" . " Como string. \n";
echo "O valor é: " . (int)$valor . " Como inteiro. \n";
echo "O valor é: " . (float)$valor . " Como float. \n";
echo "O valor é: " . (bool)$valor . " Como booleano. \n";

?>