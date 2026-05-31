<?php
$valorTotal = 1899.90;
$numParcelas = 6;

$parcelaExata = $valorTotal / $numParcelas;

echo "Valor Total: R$ {$valorTotal}\n";
echo "Número de Parcelas: {$numParcelas}\n";
echo "Valor exato da parcela (sem arredondar): R$ {$parcelaExata}\n";
echo "--------------------------------------------------\n\n";

$parcelaFloor = floor($parcelaExata); // Vai virar 316
$somaFloor = $parcelaFloor * $numParcelas;
$centavoPerdidoFloor = $valorTotal - $somaFloor;

echo "--- Usando floor() ---\n";
echo "Valor da parcela: R$ {$parcelaFloor}\n";
echo "Soma das parcelas: R$ {$somaFloor}\n";
echo "Diferença (Faltando no caixa): R$ " . number_format($centavoPerdidoFloor, 2, ',', '.') . "\n\n";


$parcelaCeil = ceil($parcelaExata); // Vai virar 317
$somaCeil = $parcelaCeil * $numParcelas;
$centavoPerdidoCeil = $valorTotal - $somaCeil;

echo "--- Usando ceil() ---\n";
echo "Valor da parcela: R$ {$parcelaCeil}\n";
echo "Soma das parcelas: R$ {$somaCeil}\n";
echo "Diferença (Sobrando/Cobrado a mais): R$ " . number_format($centavoPerdidoCeil, 2, ',', '.') . "\n\n";


$parcelaRound = round($parcelaExata, 2); 
$somaRound = $parcelaRound * $numParcelas;
$centavoPerdidoRound = $valorTotal - $somaRound;

echo "--- Usando round() com 2 casas decimais ---\n";
echo "Valor da parcela: R$ {$parcelaRound}\n";
echo "Soma das parcelas: R$ {$somaRound}\n";
echo "Diferença (Centavo perdido real): R$ " . number_format($centavoPerdidoRound, 2, ',', '.') . "\n";

?>