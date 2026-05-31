<?php
$contador = 5;
echo "Contador: $contador\n";
echo "Contador de posição ++contador: " . ++$contador . "\n"; // Incrementa antes de apresentar/usar
$contador = 5; // Resetando o contador para o próximo teste

echo "Contador: $contador\n";
echo "Contador de posição contador++: " . $contador++ . "\n"; // Apresenta/usar antes de incrementar
$contador = 5; // Resetando o contador para o próximo teste

echo "Contador: $contador\n";
echo "Contador de posição --contador: " . --$contador . "\n"; // Decrementa antes de apresentar/usar
$contador = 5; // Resetando o contador para o próximo teste

echo "Contador: $contador\n";
echo "Contador de posição contador--: " . $contador-- . "\n"; // Apresenta/usar antes de decrementar
?>