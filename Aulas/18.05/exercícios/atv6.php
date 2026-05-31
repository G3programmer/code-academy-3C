<?php
    $x = "10";
    $y = 10;

    //Primeira comparação é verdadeira, pois os digitos são iguais
    echo "Verdadeiro: " . ($x == $y ? "Sim" : "Não") . "\n";
    //Segunda comparação é falsa, pois os tipos de armazenamento são diferentes
    echo "Verdadeiro: " . ($x === $y ? "Sim" : "Não") . "\n";
    //Terceira comparação é falsa, pois os digitos são iguais(é a negação da primeira comparação)
    echo "Diferente: " . ($x != $y ? "Sim" : "Não") . "\n";
    //Quarta comparação é verdadeira, pois os tipos de armazenamento são diferentes(é a negação da segunda comparação)
    echo "Diferente: " . ($x !== $y ? "Sim" : "Não") . "\n";

?>