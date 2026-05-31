<?php
$a = "Eu gosto de Java";

//Trocando para php
echo str_replace("Java", "PHP", $a) . "\n";

//Trocando também (case-insensitive)
$exemp2 = "Eu gosto de JAVA e java";
echo str_ireplace("java", "PHP", $exemp2) . "\n";
?>