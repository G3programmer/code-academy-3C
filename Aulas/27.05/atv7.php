<?php
$notas = [7.5, 3.2, 9.8, 5.0, 8.1, 6.7];

echo "Notas crescentes: \n";
sort($notas);

foreach ($notas as $nota) {
echo $nota . " ";
}


echo "\nNotas decrescentes: \n";
rsort($notas);
foreach ($notas as $nota) {
echo $nota . " ";
}
?>