<?php
$idade = 25;
if ($idade >= 0 ) {
    if($idade < 11) {
        echo "É uma criança.";
    }
    elseif ($idade < 18) {
        echo "É um adolescente.";
    }
    elseif ($idade < 30) {
        echo "É um jovem adulto.";
    }
    elseif ($idade < 60) {
        echo "É um adulto.";
    }
    else {
        echo "É um idoso.";
    }    
} 
else if ($idade > 120) {
    echo "A idade é inválida.";
}
else {
    echo "A idade é inválida.";
}
?>