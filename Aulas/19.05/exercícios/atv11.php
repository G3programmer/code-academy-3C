<?php
$celsius = 36.5;
$tipo = "F";

if ($tipo == "F") {
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "$celsius graus Celsius equivalem a $fahrenheit graus Fahrenheit.";
} elseif ($tipo == "K") {
    $kelvin = $celsius + 273.15;
    echo "$celsius graus Celsius equivalem a $kelvin graus Kelvin.";
} else {
    echo "Tipo de conversão inválido. Use 'F' para Fahrenheit ou 'K' para Kelvin.";
}
?>