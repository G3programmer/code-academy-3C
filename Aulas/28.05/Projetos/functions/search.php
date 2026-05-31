<?php
include "cleaner.php";
function search($livros) {
while (true) {
    limparTela();
    echo "
                ##############                    
              ##################                  
            ######          ######                
            ####              ####                
          ######                ####              
          ####                  ####              
          ####                  ####              
            ####              ####                
            ####              ####                
            ######          ######                
              ##################                  
                  ##############                  
                            ######                
                              ######              
                                ####              
                                ######            
                                  ######          
                                    ####          \n\n";
    echo "Digite o título do livro que deseja buscar: \n";
    $titulo = trim(fgets(STDIN));

    $encontrados = array_filter($livros, function($livro) use ($titulo) {
        return stripos($livro['titulo'], $titulo) !== false; // Busca case-insensitive
    });

    if (count($encontrados) > 0) {
        echo "\nLivros encontrados:\n";
        echo "--------------------------------------------------\n";
        foreach ($encontrados as $index => $livro) {
            // Mantém o índice original do arquivo para fácil referência
            echo "[" . ($index + 1) . "] - " . $livro['titulo'] . " por " . $livro['autor'] . "\n";
        }
        echo "--------------------------------------------------\n";
    } else {
        echo "\nNenhum livro encontrado com o título '$titulo'.\n";
    }

   while (true) {
            echo "\nDeseja realizar uma nova busca? (S/N): ";
            $opcao = strtoupper(trim(fgets(STDIN))); // strtoupper converte para maiúsculo automática (s -> S)

            if ($opcao === "S") {
                break; // Sai deste laço interno e recomeça o while principal (nova busca)
            } elseif ($opcao === "N") {
                return; // Encerra a função por completo, voltando ao menu principal do sistema
            } else {
                echo "Opção inválida! Digite apenas S para Sim ou N para Não.\n";
            }
        }
    }
}

?>