<?php
include "cleaner.php";
include "save.php";
function remove(&$livros) {
    while(true) {
     limparTela();

     

       echo"                                                 88           
                                            81811111118       
                    881118               88881111111118881    
                 81888881111118         8881888111111118188   
               888181111111111881      881888111111111111188  
              88188111111111111188     8881888811111111111118 
              88 8111111111111111188   8888881181111111111118 
             11 81111111111111111188     8888  811111111111188
            888811111111111111118888     188  1111111111111188
            8888111111111118888888      1818811111111111111118
            88181111111111111888888     8888881111111111111188
            881111111111111111111111188   8888881111111111888 
             18111111111111111111888888    88881111111111181  
              8811111111111111111888     888111111111111181   
               88811111111111181888    1881118111111181181    
                18881111111111188881118888111111111811888     
                  8888111111111111188881888888881181188       
                   888881111111111181118   88811181888        
                     8888881111111111118  8881118881          
                        1888881111111188 888811188            
                          88888881111111 88811881             
                             1888888111188818888              
                                88888818888818                
                                   818881888                  
                                       118                    
\n";
     echo "                       --- Menu de Remoção ---\n";
     //Tem livro?
        if (empty($livros)) {
            echo "Nenhum livro cadastrado no momento.\n";
            echo "\nDigite 0 para voltar: ";
            $opcao = trim(fgets(STDIN));
            if ($opcao === "0") return;
            continue;
        }

        echo "1 - Remover um livro por ID\n";
        echo "2 - Remover vários livros (digitar IDs separados por vírgula)\n";
        echo "3 - APAGAR TODOS OS LIVROS\n";
        echo "0 - Voltar ao menu principal\n\n";

        echo "Digite a opção desejada: ";
        $opcaoMenu = trim(fgets(STDIN));

        if ($opcaoMenu === "0") {
            return; // Volta para o index.php
        }

        // ==========================================
        // OPÇÃO 1: REMOVER APENAS UM LIVRO (O que você já tinha)
        // ==========================================
        
        if ($opcaoMenu === "1") {
            limparTela();
            echo "--- Remover um Livro ---\n\n";
            foreach ($livros as $index => $livro) {
                echo ($index + 1) . " - {$livro['titulo']} (Autor: {$livro['autor']})\n";
            }
            echo "\nDigite o número do livro que deseja remover (ou 0 para voltar): ";
            $id = (int)trim(fgets(STDIN)) - 1;

            if ($id >= 0 && isset($livros[$id])) {
                echo "\nTem certeza que deseja remover '{$livros[$id]['titulo']}'? (1-Sim / 2-Não): ";
                if (trim(fgets(STDIN)) === "1") {
                    unset($livros[$id]);
                    $livros = array_values($livros);
                    salvarJson($livros);
                    echo "\nLivro removido com sucesso! Pressione Enter...";
                    fgets(STDIN);
                }
            }
        }
        // ==========================================
        // OPÇÃO 2: REMOVER VÁRIOS AO MESMO TEMPO (Ex: 1,3,5)
        // ==========================================
        elseif ($opcaoMenu === "2") {
            limparTela();
            echo "--- Remover Múltiplos Livros ---\n\n";
            foreach ($livros as $index => $livro) {
                echo ($index + 1) . " - {$livro['titulo']}\n";
            }
            
            echo "\nDigite os números separados por vírgula (ex: 1, 3, 5): ";
            $entrada = trim(fgets(STDIN));
            
            // Transforma a string "1, 3, 5" em uma array de números [1, 3, 5]
            $idsEscolhidos = array_map('intval', explode(',', $entrada));
            
            // Array para guardar quais livros realmente vamos apagar
            $livrosParaApagar = [];
            foreach ($idsEscolhidos as $id) {
                $indexReal = $id - 1;
                if (isset($livros[$indexReal])) {
                    $livrosParaApagar[$indexReal] = $livros[$indexReal]['titulo'];
                }
            }

            if (!empty($livrosParaApagar)) {
                echo "\nVocê está prestes a remover os seguintes livros:\n";
                foreach ($livrosParaApagar as $nome) {
                    echo "- $nome\n";
                }
                echo "\nTem certeza absoluta? (1-Sim / 2-Não): ";
                if (trim(fgets(STDIN)) === "1") {
                    // Remove de trás para frente para os índices não mudarem durante o unset
                    krsort($livrosParaApagar); 
                    foreach ($livrosParaApagar as $indexReal => $nome) {
                        unset($livros[$indexReal]);
                    }
                    $livros = array_values($livros); // Reindexa
                    salvarJson($livros);
                    echo "\nLivros removidos com sucesso! Pressione Enter...";
                    fgets(STDIN);
                }
            } else {
                echo "\nNenhum ID válido foi selecionado. Pressione Enter...";
                fgets(STDIN);
            }
        }
        // ==========================================
        // OPÇÃO 3: APAGAR TUDO (REDE DA SEGURANÇA MÁXIMA)
        // ==========================================
        elseif ($opcaoMenu === "3") {
            limparTela();
            echo "⚠️  ALERTA MÁXIMO ⚠️\n\n";
            echo "Você está prestes a apagar TODOS os livros do sistema.\n";
            echo "Essa ação NÃO pode ser desfeita.\n\n";
            
            echo "Tem certeza absoluta? (1-Sim / 2-Não): ";
            if (trim(fgets(STDIN)) === "1") {
                // Dupla confirmação para evitar cliques acidentais
                echo "DIGITE 'DELETAR' (em maiúsculo) para confirmar a exclusão total: ";
                if (trim(fgets(STDIN)) === "DELETAR") {
                    $livros = []; // Esvazia a array na memória
                    salvarJson($livros); // Salva a array vazia no JSON ([])
                    echo "\nTodos os registros foram apagados! Pressione Enter...";
                    fgets(STDIN);
                } else {
                    echo "\nConfirmação incorreta. Operação cancelada. Pressione Enter...";
                    fgets(STDIN);
                }
            }
        }
    }
}
?>