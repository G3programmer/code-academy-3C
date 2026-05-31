<?php

$nomeUsuario = null; 
$temaEscolhido = null;
$temaPadrao = null;

$nome = $nomeUsuario ?? "Visitante";
$tema = $temaEscolhido ?? $temaPadrao ?? "claro";

echo "--- Cenário 1 (Sem variáveis definidas) ---\n";
echo "Nome: " . $nome . "\n"; 
echo "Tema: " . $tema . "\n\n"; 


$nomeUsuario = "Gabriel";
$temaPadrao = "escuro";

$nome = $nomeUsuario ?? "Visitante";
$tema = $temaEscolhido ?? $temaPadrao ?? "claro";

echo "--- Cenário 2 (Com variáveis definidas) ---\n";
echo "Nome: " . $nome . "\n"; 
echo "Tema: " . $tema . "\n"; 

?>