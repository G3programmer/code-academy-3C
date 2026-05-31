<?php
echo "Caso 1:\n";
$possuiCNH = true;
$estaBebado = false;

echo "A pessoa possui CNH? " . ($possuiCNH ? "Sim" : "Não") . "\n";
echo "A pessoa está bêbada? " . ($estaBebado ? "Sim" : "Não") . "\n";

if ($possuiCNH && !$estaBebado) {
    echo "Pode dirigir!";
} else {
    echo "Não pode dirigir!\n";
}

// Separação entre os casos

echo "Caso 2:\n";
$possuiCNH = false;
$estaBebado = true;

echo "A pessoa possui CNH? " . ($possuiCNH ? "Sim" : "Não") . "\n";
echo "A pessoa está bêbada? " . ($estaBebado ? "Sim" : "Não") . "\n";

if ($possuiCNH && !$estaBebado) {
    echo "Pode dirigir!";
} else {
    echo "Não pode dirigir!\n";
}

// Separação entre os casos
echo "Caso 3:\n";
$possuiCNH = true;
$estaBebado = true;

echo "A pessoa possui CNH? " . ($possuiCNH ? "Sim" : "Não") . "\n";
echo "A pessoa está bêbada? " . ($estaBebado ? "Sim" : "Não") . "\n";

if ($possuiCNH && !$estaBebado) {
    echo "Pode dirigir!";
} else {
    echo "Não pode dirigir!\n";
}

//Separação entre os casos
echo "Caso 4:\n";
$possuiCNH = false;
$estaBebado = false;

echo "A pessoa possui CNH? " . ($possuiCNH ? "Sim" : "Não") . "\n";
echo "A pessoa está bêbada? " . ($estaBebado ? "Sim" : "Não") . "\n";

if ($possuiCNH && !$estaBebado) {
    echo "Pode dirigir!";
} else {
    echo "Não pode dirigir!\n";
}
?>