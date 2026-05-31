<?php
$a = "PHP eh uma linguagem popular para desenvolvimento web.";
echo "A frase '$a' contém " . str_word_count($a) . " palavras.";
$word = explode(" ", $a);
echo "\nAgora foram divididas em array:";
foreach ($word as $palavra) {
    echo "\n" . $palavra;
}
?>