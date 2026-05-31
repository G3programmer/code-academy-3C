<?php
$a = "PHP";
//Invertendo normal
echo strrev($a) . "\n";

//verificando se é palíndromo
$world = "arara";
echo "A palavra $world é um palíndromo?\n";
if ($world === strrev($world)) {
    echo "É um palíndromo\n";
} else {
    echo "Não é um palíndromo\n";
}
?>