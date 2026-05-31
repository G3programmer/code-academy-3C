<?php
$a = "10";
$b = 10;

if ($a == $b) {
    echo "As variáveis são iguais em valor.";
} else {
    echo "As variáveis são diferentes em valor.";
}
if ($a === $b) {
    echo "As variáveis são idênticas em valor e tipo.";
} else {
    echo "As variáveis não são idênticas em valor e tipo.";
}

echo "Igualdade Fraca (==) compara apenas o valor, enquanto Igualdade Estrita (===) compara tanto o valor quanto o tipo de dados.";
?>