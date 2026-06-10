<?php
include "cleaner.php";

function edit(&$livros, $arquivo = "livros.json") {
    limparTela();
    echo "          ..--                                        
          @@######                                
            @@######                              
              @@######                            
              --######..                          
mm::          ########MM                          
MM##++        ########@@                          
  ####++  ############::                          
  ######################                          
  --######################                        
    ::######################                      
        mm####mm##############..                  
                  ##############                  
                    ##############                
                      ##############              
                        ##############            
                          ##############          
                            ##############        
                              ##############      
                                ##############..  
                                  ##############..
                                    ##############
                                      ######    ##
                                        ####    ##
                                          ########";
    echo "\n                --- Editar Livro ---\n\n";

    if (empty($livros)) {
        echo "Nenhum livro cadastrado para editar.\n";
        return;
    }
    $mapeamentoOpcoes = [];
    $contador = 1;
    
    echo "Livros disponíveis:\n";
    echo "--------------------------------------------------\n";
    foreach ($livros as $chaveOriginal => $livro) {
        echo "[$contador] - {$livro['titulo']} (Autor: {$livro['autor']})\n";
        // Guarda qual chave real do array corresponde ao número digitado na tela
        $mapeamentoOpcoes[$contador] = $chaveOriginal;
        $contador++;
    }
    echo "[0] - Cancelar edição\n";
    echo "--------------------------------------------------\n";

    while (true) {
        echo "Digite o número do livro que deseja editar (ou 0 para cancelar): ";
        $opcao = trim(fgets(STDIN));

        if ($opcao === "0") {
            echo "Edição cancelada.\n";
            return;
        }

        if (ctype_digit($opcao)) {
            $opcaoInt = (int)$opcao;
            // Verifica se o número digitado existe no mapeamento de segurança
            if (isset($mapeamentoOpcoes[$opcaoInt])) {
                $chaveReal = $mapeamentoOpcoes[$opcaoInt];
                break; 
            }
        }
        echo "Opção inválida. Escolha um número da lista.\n";
    }

    // Agora pegamos a referência usando a chave real do array, sem perigo de desalinhamento
    $livro = &$livros[$chaveReal];
    limparTela();
    echo "          ..--                                        
          @@######                                
            @@######                              
              @@######                            
              --######..                          
mm::          ########MM                          
MM##++        ########@@                          
  ####++  ############::                          
  ######################                          
  --######################                        
    ::######################                      
        mm####mm##############..                  
                  ##############                  
                    ##############                
                      ##############              
                        ##############            
                          ##############          
                            ##############        
                              ##############      
                                ##############..  
                                  ##############..
                                    ##############
                                      ######    ##
                                        ####    ##
                                          ########";
    echo "\n                    --- Editando: {$livro['titulo']} ---\n\n";

    // EDITAR TÍTULO
    echo "Digite o novo título (ou pressione Enter para manter '{$livro['titulo']}'): ";
    $novoTitulo = trim(fgets(STDIN));
    if (!empty($novoTitulo)) {
        $livro['titulo'] = $novoTitulo;
    }

    // EDITAR AUTOR
    echo "Digite o novo autor (ou pressione Enter para manter '{$livro['autor']}'): ";
    $novoAutor = trim(fgets(STDIN));
    if (!empty($novoAutor)) {
        $livro['autor'] = $novoAutor;
    }

    // EDITAR ANO
    while (true) {
        echo "Digite o novo ano (ou pressione Enter para manter '{$livro['ano']}'): ";
        $novoAno = trim(fgets(STDIN));
        
        if ($novoAno === "") {
            break; 
        }

        $anoAtual = (int)date("Y");
        if (ctype_digit($novoAno)) {
            $anoInteiro = (int)$novoAno;
            if ($anoInteiro > 0 && $anoInteiro <= $anoAtual) {
                $livro['ano'] = $anoInteiro;
                break;
            }
        }
        echo "O ano deve ser um número inteiro válido entre 1 e $anoAtual.\n";
    }

    // EDITAR GÊNERO
    echo "Digite o novo gênero (ou pressione Enter para manter '{$livro['genero']}'): ";
    $novoGenero = trim(fgets(STDIN));
    if (!empty($novoGenero)) {
        $livro['genero'] = $novoGenero;
    }

    // EDITAR PÁGINAS
    while (true) {
        echo "Digite o novo número de páginas (ou pressione Enter para manter '{$livro['paginas']}'): ";
        $novasPaginas = trim(fgets(STDIN));
        
        if ($novasPaginas ==="") {
            break; 
        }

        $paginasLimpo = str_replace('.', '', $novasPaginas);
        if (ctype_digit($paginasLimpo)) {
            $paginasInteiro = (int)$paginasLimpo;
            if ($paginasInteiro > 0 && $paginasInteiro <= 100000) {
                $livro['paginas'] = $paginasInteiro;
                break;
            }
        }
        echo "O número de páginas deve ser um número inteiro maior que zero e menor ou igual a 100.000.\n";
    }

    // EDITAR EDITORA
    echo "Digite a nova editora (ou pressione Enter para manter '{$livro['editora']}'): ";
    $novaEditora = trim(fgets(STDIN));
    if (!empty($novaEditora)) {
        $livro['editora'] = $novaEditora;
    }

    // EDITAR RESTRIÇÃO
    $statusAtual = $livro['restricao'] ? "Sim" : "Não";
    while (true) {
        echo "É um livro com conteúdo sensível? (Atual: {$statusAtual})\n 1 - Sim \n 2 - Não \n Pressione Enter para manter o atual \nDigite a opção: ";
        $novaRestricao = trim(fgets(STDIN));
        
        if ($novaRestricao === "") {
            break; 
        } elseif ($novaRestricao === "1") {
            $livro['restricao'] = true;
            break;
        } elseif ($novaRestricao === "2") {
            $livro['restricao'] = false;
            break;
        } else {
            echo "Opção inválida. Tente novamente.\n";
        }
    }

    // SALVA AS ALTERAÇÕES NO ARQUIVO JSON
    $jsonPronto = json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($arquivo, $jsonPronto);

    echo "\nLivro editado e salvo com sucesso!\n";
}
?>