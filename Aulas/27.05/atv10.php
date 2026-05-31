<?php

$turmaA = ['Gabriel', 'Joseph', 'George'];
$turmaB = ['Jonathan', 'Jolyne', 'Johnny'];

$todosAlunos = array_merge($turmaA, $turmaB);

echo "Lista unificada de alunos (Turma A + Turma B): \n";

foreach ($todosAlunos as $aluno) {
    echo "- " . $aluno . "\n";
}

?>