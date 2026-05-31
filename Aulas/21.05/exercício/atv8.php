<?php
$soma = 0;

for($i=1; $i<=100; $i++) {
    $soma+=$i;

    if ($soma > 200) {
        break; 
    }
}

echo "Valor do acumulador (soma): " . $soma . "\n";
echo "Valor de \$i no momento da parada: " . $i . "\n";
?>