<?php
$a = "banana";

/*
--- Ele conta até encontrar 1 ana.
echo "Total de vezes que aparece 'ana': " . substr_count($a, "ana") . "\n";
OBS: não busca total.
*/

//Criei referência
$busca = "ana";
$contador = 0;

//Enquanto em $a existir "ana", declarado como $posição e for diferente de false...
while (($posicao = strpos($a, $busca)) !== false) {
    
    // Incrementa o contador
    $contador++;
    
    // Corta a string a partir da próxima letra (posição + 1)
    $a = substr($a, $posicao + 1);
}

echo "Total de vezes que aparece 'ana': " . $contador . "\n";

$a = "banana";
echo "Total de vezes que aparece 'a': " . substr_count($a, "a") . "\n";
?>