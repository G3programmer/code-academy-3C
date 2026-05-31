<?php
$letras = ['A', 'B', 'C', 'D', 
'E', 'F', 'G', 'H'];

$resultado = array_slice($letras, 2, 4);

echo "Elementos fatiados da posição 2 até a 5 (incluido): \n";

foreach ($resultado as $letra) {
    echo $letra . " ";
}

?>