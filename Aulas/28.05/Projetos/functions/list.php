<?php
include "cleaner.php";

function listar($livros) {
    while (true) {
        limparTela();
        echo "            (\ 
            '\ 
             '\     __________  
             / '|   ()_________)
             \ '/    \ ~~~~~~~~ \
               \       \ ~~~~~~   \
               ==).      \__________\
              (__)       ()__________)\n\n";

        echo "          --- Lista de Livros Cadastrados ---\n\n";

        if (empty($livros)) {
            echo "Nenhum livro cadastrado no momento.\n";
        } else {
            // 1. Criamos uma cópia para não mexer na ordem original do arquivo JSON
            $livrosOrdenados = $livros;

            // 2. Ordena a cópia por ordem alfabética (case-insensitive)
            uasort($livrosOrdenados, function($a, $b) {
                return strcasecmp($a['titulo'], $b['titulo']);
            });

            // 3. Mostra os livros formatados de A a Z
            // Usamos um contador manual para os IDs ficarem bonitos e sequenciais (1, 2, 3...)
            $contadorExibicao = 1; 

            foreach ($livrosOrdenados as $livro) {
                echo "-------------------------------------------\n";
                echo "ID: " . $contadorExibicao . "\n";
                echo "Título: {$livro['titulo']}\n";
                echo "Autor: {$livro['autor']}\n";
                echo "Gênero: {$livro['genero']}\n";
                echo "Ano: {$livro['ano']}\n";
                // Exibe o número de páginas formatado com ponto se for maior que 999 (ex: 1.000)
                $paginasFormatadas = is_numeric($livro['paginas']) ? number_format($livro['paginas'], 0, '', '.') : $livro['paginas'];
                echo "Páginas: {$paginasFormatadas}\n";
                if (!empty($livro['editora'])) {
                    echo "Editora: {$livro['editora']}\n";
                }
                echo "Sensível: " . ($livro['restricao'] ? "Sim" : "Não") . "\n";
                
                $contadorExibicao++;
            }
            echo "-------------------------------------------\n";
        }

        echo "\nDigite 0 para voltar ao menu principal: ";
        $opcao = trim(fgets(STDIN));

        if ($opcao === "0") {
            return; 
        }
    }
}
?>