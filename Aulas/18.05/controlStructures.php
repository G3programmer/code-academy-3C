<?php

  # if / else / elseif

  $idade = 18;

  if ($idade < 18) {
      echo "Menor de idade";
  } elseif ($idade == 18) {
      echo "Tem exatamente 18 anos";
  } else {
      echo "Maior de idade";
  }

  # Operador ternário

  $status = ($idade >= 18) ? "adulto" : "menor";
  echo $status;

  # Operador ternário encadeado (evite - fica confuso)

  $faixa = ($idade < 13) ? "criança" : (($idade < 18) ? "adolescente" : "adulto");

  # Operador ternário abreviado

  $nome = "";
  $exibir = $nome ? : "Anônimo";  // Se $nome for falsy, usa "Anônimo"
  echo $exibir;                   // "Anônimo"
  
  # switch

  $dia = 3;

  switch ($dia) {
      case 1:
          echo "Domingo";
          break;
      case 2:
          echo "Segunda";
          break;
      case 3:
          echo "Terça";
          break;
      default:
          echo "Outro dia";
          break;
  }

  # switch com múltiplos cases

  $dia = 1;

  switch ($dia) {
      case 1:
      case 7:
          echo "Final de semana";
          break;
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
          echo "Dia útil";
          break;
  }

  # match (PHP 8+) - mais conciso, retorna valor

  $dia = 3;

  $nomeDia = match($dia) {
      1 => "Domingo",
      2 => "Segunda",
      3 => "Terça",
      4 => "Quarta",
      5 => "Quinta",
      6 => "Sexta",
      7 => "Sábado",
      default => "Inválido"
  };

  echo $nomeDia;  // "Terça"

  # match com múltiplos valores

  $dia = 1;

  $tipo = match($dia) {
      1, 7 => "Final de semana",
      2, 3, 4, 5, 6 => "Dia útil",
      default => "Inválido"
  };

  echo $tipo;  // "Final de semana"

  # Diferença importante: match usa comparação estrita (===)

  $valor = "1";

  $resultado = match($valor) {
      1 => "inteiro",      // Não entra aqui (1 !== "1")
      "1" => "string",     // Entra aqui
      default => "outro"
  };

  echo $resultado;  // "string"

  # while

  $i = 1;

  while ($i <= 5) {
      echo $i;
      $i++;
  }

  # do-while (executa pelo menos uma vez)

  $i = 1;

  do {
      echo $i;
      $i++;
  } while ($i <= 5);

  # for

  for ($i = 1; $i <= 5; $i++) {
      echo $i;
  }

  # foreach (para arrays)

  $frutas = ["maçã", "banana", "uva"];

  foreach ($frutas as $fruta) {
      echo $fruta;
  }

  # foreach com chave e valor

  $pessoa = [
      "nome" => "Victor",
      "idade" => 30,
      "cidade" => "Guarapuava"
  ];

  foreach ($pessoa as $chave => $valor) {
      echo "$chave: $valor";
  }

  # break - interrompe o loop

  for ($i = 1; $i <= 10; $i++) {
      if ($i == 5) {
          break;  // Sai do loop quando $i == 5
      }
      echo $i;    // 1, 2, 3, 4
  }

  # continue - pula para próxima iteração

  for ($i = 1; $i <= 5; $i++) {
      if ($i == 3) {
          continue;  // Pula o 3
      }
      echo $i;       // 1, 2, 4, 5
  }

  # break com níveis (loops aninhados)

  for ($i = 1; $i <= 3; $i++) {
      for ($j = 1; $j <= 3; $j++) {
          if ($j == 2) {
              break 2;  // Sai dos dois loops
          }
          echo "$i-$j";
      }
  }
