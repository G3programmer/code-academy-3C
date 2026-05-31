<?php
$valores = [34, 12, 89, 3, 56, 71, 23];

$maior = $valores[0];
$menor = $valores[0];

foreach($valores as $valor){

    if ($valor > $maior) {
        $maior = $valor;
    }

    if ($valor < $menor) {
        $menor = $valor;
    }
}

echo "O maior valor é: " . $maior . "\n";
echo "O menor valor é: " . $menor . "\n";

?>