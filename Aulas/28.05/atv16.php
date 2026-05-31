<?php
$turma = [
    [
        "nome"  => "Gabriel",
        "nota1" => 8.5,
        "nota2" => 7.0,
        "nota3" => 9.0
    ],
    [
        "nome"  => "Giorno",
        "nota1" => 5.5,
        "nota2" => 6.0,
        "nota3" => 5.0
    ],
    [
        "nome"  => "Josuke",
        "nota1" => 7.0,
        "nota2" => 7.5,
        "nota3" => 6.8
    ],
    [
        "nome"  => "Jotaro",
        "nota1" => 9.5,
        "nota2" => 10.0,
        "nota3" => 9.8
    ]
];

echo "=== RELATÓRIO DE NOTAS DA TURMA ===\n\n";

foreach ($turma as $aluno) {
    $media = ($aluno['nota1'] + $aluno['nota2'] + $aluno['nota3']) / 3;
    
    if ($media >= 7) {
        $status = "Aprovado";
    } else {
        $status = "Reprovado";
    }
    
    echo "Aluno: " . $aluno['nome'] . "\n";
    echo "Média: " . number_format($media, 1, ',', '.') . "\n";
    echo "Status: " . $status . "\n";
    echo "-----------------------------------\n";
}
?>