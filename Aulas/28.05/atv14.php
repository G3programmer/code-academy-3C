<?php
$idades = [12, 18, 25, 15, 30, 17, 21, 16];

//arrow function (callback)
$maioresDeIdade = array_filter($idades, fn($idade) => $idade >= 18);

$maioresReindex = array_values($maioresDeIdade);

echo "Idades filtradas (maiores ou iguais a 18): \n";

foreach ($maioresReindex as $indice => $idade) {
    echo "Índice [$indice]: " . $idade . " anos\n";
}

?>