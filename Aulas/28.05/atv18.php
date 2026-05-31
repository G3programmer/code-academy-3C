<?php
$disciplinas = ['PHP', 'JavaScript', 
'Python', 'Java'];
$notas       = [8.5, 7.0, 9.2, 6.8];

$boletim = array_combine($disciplinas, $notas);

echo "---Boletim Escolar (Arrays Combinados)---\n";

foreach ($boletim as $disciplina => $nota) {

    echo "|Disciplina: " . str_pad($disciplina, 11, " ") . 
    " | Nota: " . number_format($nota, 1) . "|\n";
}
echo str_repeat("-", 40) . "\n";

?>