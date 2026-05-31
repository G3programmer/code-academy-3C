<?php
$a = "O PHP eh uma linguagem de programação server-side \n";
echo "Na frase $a";
if (str_contains($a, "server-side")) {
    echo "Contém 'server-side' e ";
} else {
    echo "Não contém 'server-side' e ";
}
if (str_contains($a, "client-side")) {
    echo "Contém 'client-side'";
} else {
    echo "Não contém 'client-side'";
}
?>