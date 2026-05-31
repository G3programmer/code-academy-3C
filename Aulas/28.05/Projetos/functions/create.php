<?php  
include "cleaner.php";
$arquivo = "livros.json";
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $livros = json_decode($conteudo, true) ?? [];
} else {
    $livros = [];
}
function create(&$livros) {
    global $arquivo;

    limparTela();
    echo "\n                     --- Cadastro de Livro ---\n";
    echo"                     ,..........   ..........,         
                 ,..,'          '.'          ',..,     
                ,' ,'            :            ', ',    
               ,' ,'             :             ', ',   
              ,' ,'              :              ', ',  
             ,' ,'............., : ,.............', ', 
            ,'  '............   '.'   ............'  ',
             '''''''''''''''''';''';'''''''''''''''''' 
                                '''                     \n";
    
    while (true) {
        echo "Digite o título do livro: \n";
        $titulo = trim(fgets(STDIN));
        if ($titulo !== "") {
            break;
        } else {
            echo "O título não pode ser vazio. Tente novamente.\n";
        }
    }
    
    while (true) {
        echo "Digite o autor: ";
        $autor = trim(fgets(STDIN));
        if ($autor !== "") {
            break;
        }
        echo "O autor não pode ser vazio. Tente novamente.\n";
    }
    
    while (true) {
        echo "Digite o ano: \n";
        $ano = trim(fgets(STDIN));
        $anoAtual = (int)date("Y");

        // ctype_digit obriga números apenas 
        if ($ano !== "" && ctype_digit($ano)) {
            $ano = (int)$ano;
            
            // O ano vai ser válido 
            if ($ano > 0 && $ano <= $anoAtual) {
                break;
            } 
        }
        echo "O ano deve ser um número inteiro válido entre 1 e $anoAtual. Tente novamente.\n";
    }
    
    while (true) {
        echo "Digite o gênero: \n";
        $genero = trim(fgets(STDIN));
        if ($genero !== "") {
            break;
        }
        echo "O gênero não pode ser vazio. Tente novamente.\n";
    }
    
    while (true) {
        echo "Digite o número de páginas no segunte formato (100.000 ou 100000): \n";
        $paginas = trim(fgets(STDIN));
        $paginasLimpo = str_replace('.', '', $paginas);
      
        // ctype_digit garante apenas números positivos e rejeita strings vazias
        if ($paginasLimpo !== "" && ctype_digit($paginasLimpo)) {
            $paginas = (int)$paginasLimpo;
            if ($paginas > 0 && $paginas <= 100000) {
                break;
            }
        }
        echo "O número de páginas deve ser um número inteiro maior que zero e eu tenho certeza que não tem mais de 100.000 páginas.\nTente novamente.\n";
    }
    
    while (true) {
        echo "Digite a editora: \n";
        $editora = trim(fgets(STDIN));
        if ($editora !== "") {
            break;
        }
        echo "A editora não pode ser vazia. Tente novamente.\n";
    }
    
    while (true) {
    echo "É um livro com conteúdo sensível?: \n 1 - Sim \n 2 - Não \nDigite a opção: ";
    $restricao = trim(fgets(STDIN));
    if ($restricao === "1" || $restricao === "2") {
        break;
    } else {
        echo "Opção inválida. Tente novamente.\n";
    }
    }

    $livros[] = [
        "id" => uniqid(),
        "titulo" => $titulo, //string
        "autor" => $autor, //string
        "ano" => $ano, //inteiro
        "genero" => $genero, //string
        "paginas" => $paginas, //inteiro
        "editora" => $editora, //string
        "restricao" => ($restricao === "1") ? true : false //boolean
    ];

    $arquivo = "livros.json";
    
    // 1. Convertemos a array inteira de livros atualizada para o formato de texto JSON
    // O JSON_PRETTY_PRINT serve para deixar o arquivo quebrado por linhas e fácil de ler
    $jsonPronto = json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    // 2. Escrevemos o conteúdo JSON no arquivo
    file_put_contents($arquivo, $jsonPronto);

    echo "\nCadastro realizado com sucesso!\n";
}
?>