<?php
$aluno = [
    "nome" => "Gabriel",
    "idade" => 21,
    "curso" => "Programação",
    "media" => 8.5
];

foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . "\n";
}

?>