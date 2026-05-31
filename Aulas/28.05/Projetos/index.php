<?php
require_once "functions/cleaner.php";
include "process.php";

$arquivo = "livros.json";

// Se o arquivo já existe, ele carrega os dados antigos para a memória
if (file_exists($arquivo)) {
    $conteudoJson = file_get_contents($arquivo);
    $livros = json_decode($conteudoJson, true) ?? [];
} else {
    $livros = [];
}
    

while(true) {
limparTela();

//Tabela de layout do menu interativo
echo str_repeat("==", 27) . "\n"; 
echo "||             .--.                   .---.         ||
||         .---|__|           .-.     |~~~|         ||  
||      .--|===|--|_          |_|     |~~~|--.      ||
||      |  |===|  |'\     .---!~|  .--|   |--|      ||
||      |%%|   |  |.'\    |===| |--|%%|   |  |      ||
||      |%%|   |  |\.'\   |   | |__|  |   |  |      ||
||      |  |   |  | \  \  |===| |==|  |   |  |      ||
||      |  |   |__|  \.'\ |   |_|__|  |~~~|__|      ||
||      |  |===|--|   \.'\|===|~|--|%%|~~~|--|      ||
||      ^--^---'--^    `-'`---^-^--^--^---'--'      ||";
echo("\n|| ===== Seja bem-vindo ao menu de Alexandria ===== ||\n");
echo str_repeat("==", 27);
echo("\n| 1 - Cadastrar                                      | \n". str_repeat("--", 27));
echo("\n| 2 - Listar                                         | \n". str_repeat("--", 27));
echo("\n| 3 - Buscar                                         | \n". str_repeat("--", 27));
echo("\n| 4 - Editar                                         | \n". str_repeat("--", 27));
echo("\n| 5 - Remover                                        | \n". str_repeat("--", 27));
echo("\n| 6 - Estatísticas                                   | \n". str_repeat("--", 27));
echo("\n| 7 - Sair                                           | \n". str_repeat("--", 27) . "\n");


echo "Digite a opção desejada: ";
$option = trim(fgets(STDIN));

if ($option === "7") {
        echo "Saindo do sistema... Até logo!\n";
        break; 
    } else {
        confirm($option,$livros);

    }

}
?>