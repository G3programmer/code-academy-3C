<?php
$fila = ['primeiro', 'segundo', 'terceiro',
 'quarto', 'quinto'];


echo " == Forma nativa === \n";
 $filaInvertidaNativa = array_reverse($fila);

foreach ($filaInvertidaNativa as $posicao) {
    echo $posicao . "\n";
}
echo "\n\n";


echo "*** Forma Manual (laço for) ***\n";

$totalElementos = count($fila);

for ($i = $totalElementos - 1; $i >= 0; $i--) {
    echo $fila[$i] . "\n";
}
echo "\n";
?>