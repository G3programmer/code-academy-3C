<?php
$orig = "PHP é legal";
$inve = "";

$tam = strlen($orig);
    for ($i = $tam - 1; $i >= 0; $i--) {
        $inve .= $orig[$i];
    }

    echo "Original: " . $orig . "<br>";
    echo "Invertida: " . $inve . "<br>";
 
?>