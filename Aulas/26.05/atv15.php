<?php
$a = "arquivo_relatorio.pdf";

if (str_starts_with($a, "arquivo")) {
//    echo "A string começa com 'arquivo'";
if (str_ends_with($a, ".pdf")) {
    echo "A string começa com 'arquivo' e termina com '.pdf'";
    } else {
    echo "A string começa com 'arquivo' mas não termina com '.pdf'";
    }
}

// se não começa com "arquivo"
else {
    if (str_ends_with($a, ".pdf")) {
    echo "A string não começa com 'arquivo' mas termina com '.pdf'";
    } else {
    echo "A string não começa com 'arquivo' e não termina com '.pdf'";
    }
}

?>