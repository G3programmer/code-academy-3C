<?php
include "functions/create.php";
include "functions/list.php";
include "functions/search.php";
include "functions/edit.php";
include "functions/remove.php";
include "functions/stats.php";

//O '&' antes de $livros serve para alterar a lista original do programa

function confirm($option, &$livros) {
    
    $acao = match($option) {
        "1" => function() use (&$livros) {
        
        while(true) {    
            echo "Deseja adicionar um livro? (S/N): ";
            $decision = trim(fgets(STDIN));

            //Se sim
            if($decision === "S" || $decision === "s") {
                 create($livros); 

             while(true) {
                echo "Deseja adicionar outro livro? (S/N): ";
                $decision = trim(fgets(STDIN));
                
                if($decision === "S" || $decision === "s") {
                    create($livros); 
                } 

                elseif($decision === "N"|| $decision === "n") {
                    return;
                } 
                
                else {
                    echo "Opção inválida. Tente novamente.\n";
                } 
               
                }

            }
              //Se não
              else if($decision === "N"|| $decision === "n") {
                return;
              } 
              
              //Se inválido
              else {
                echo "Opção inválida. Tente novamente.\n";
              }
        }
             },        
        "2" => function() use ($livros)  { listar($livros); }, // listar só lê, não precisa de &
        "3" => function() use ($livros)  { search($livros); }, // search só lê, não precisa de &
        "4" => function() use (&$livros) { edit($livros); },   
        "5" => function() use (&$livros) { remove($livros); }, 
        "6" => function() use ($livros)  { stats($livros); },  
        default => function() { echo "Opção inválida. Tente novamente.\n"; }
    };

    $acao();
}
?>