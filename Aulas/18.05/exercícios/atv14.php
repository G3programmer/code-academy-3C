<?php

function verificarVariavel(string $nomeVar, mixed $valor): void {
    if (is_null($valor)) {
        $valorExibido = 'null';
    } elseif (is_bool($valor)) {
        $valorExibido = $valor ? 'true' : 'false';
    } elseif (is_string($valor)) {
        $valorExibido = '"' . $valor . '"';
    } else {
        $valorExibido = $valor;
    }

    $int     = is_int($valor)     ? 'Sim' : 'Não';
    $float   = is_float($valor)   ? 'Sim' : 'Não';
    $string  = is_string($valor)  ? 'Sim' : 'Não';
    $bool    = is_bool($valor)    ? 'Sim' : 'Não';
    $null    = is_null($valor)    ? 'Sim' : 'Não';
    $numeric = is_numeric($valor) ? 'Sim' : 'Não';

    echo "{$nomeVar} ({$valorExibido}): ";
    echo "is_int? {$int} | is_float? {$float} | is_string? {$string} | ";
    echo "is_bool? {$bool} | is_null? {$null} | is_numeric? {$numeric}\n";
}


$var1 = 42;
$var2 = "42";
$var3 = 3.14;
$var4 = true;
$var5 = null;

verificarVariavel('$var1', $var1);
verificarVariavel('$var2', $var2);
verificarVariavel('$var3', $var3);
verificarVariavel('$var4', $var4);
verificarVariavel('$var5', $var5);

?>