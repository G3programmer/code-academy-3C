<?php
$nota = 7.5;
if ($nota >= 7) {
    echo "Aprovado";
} 
else if ($nota >= 5 && $nota < 7) {
    echo "Recuperação";
}
else if ($nota < 5 && $nota >= 0) {
    echo "Reprovado";
}
else {
    echo "Nota inválida";
}
?>