<?php
$x = 42;
$y = "Olá";
$z = true;

gettype($x);
gettype($y);
gettype($z);

//Verif x
if (gettype($x) == "integer") {
    echo "A variável \$x é do tipo inteiro.\n";
} else if (gettype($x) == "string") {
    echo "A variável \$x é do tipo string.\n";
} else if (gettype($x) == "boolean") {
    echo "A variável \$x é do tipo booleano.\n";
} else {
    echo "A variável \$x não é de nenhum dos tipos mencionados.\n";
}

//Verif y
if (gettype($y) == "integer") {
    echo "A variável \$y é do tipo inteiro.\n";
} else if (gettype($y) == "string") {
    echo "A variável \$y é do tipo string.\n";
} else if (gettype($y) == "boolean") {
    echo "A variável \$y é do tipo booleano.\n";
} else {
    echo "A variável \$y não é de nenhum dos tipos mencionados.\n";
}

//Verif z
if (gettype($z) == "integer") {
    echo "A variável \$z é do tipo inteiro.\n";
} else if (gettype($z) == "string") {
    echo "A variável \$z é do tipo string.\n";
} else if (gettype($z) == "boolean") {
    echo "A variável \$z é do tipo booleano.\n";
} else {
    echo "A variável \$z não é de nenhum dos tipos mencionados.\n";
}

?>