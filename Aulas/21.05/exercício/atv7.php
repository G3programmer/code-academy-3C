<?php
$tentativas = [15, -3, 7];
$i = 0;

do {
    $nota_atual = $tentativas[$i];
    
    if ($nota_atual >= 0 && $nota_atual <= 10) {
        echo "Nota aceita: " . $nota_atual . "\n";
        break; 
    }
    
    $i++; 
    
} while ($i < count($tentativas)); 
?>