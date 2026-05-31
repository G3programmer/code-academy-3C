<?php
$a = "João,Maria,Pedro,Ana";

$lista = explode(",", $a);
foreach ($lista as $nome) {
    echo $nome . "\n";
}
?>