<?php
$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

if ($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3 && $lado3 < $lado1 + $lado2) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "O triângulo é equilátero.";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "O triângulo é isósceles.";
    } else {
        echo "O triângulo é escaleno.";
    }
} else {
    echo "Os lados fornecidos não formam um triângulo.";
}
?>