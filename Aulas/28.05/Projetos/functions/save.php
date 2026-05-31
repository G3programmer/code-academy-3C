<?php
function salvarJson($livros) {
    $arquivo = "livros.json";
    $jsonPronto = json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($arquivo, $jsonPronto);
}
?>