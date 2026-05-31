<?php
$tags = ['php', 'html', 'css', 'php', 'javascript', 
'html', 'css', 'python'];

//únicas
$tagsUnicas = array_unique($tags);

//sequência
$tagsReindexadas = array_values($tagsUnicas);

echo "Tags únicas e reindexadas: \n";

foreach ($tagsReindexadas as $indice => $tag) {
    echo "Índice [$indice]: " . $tag . "\n";
}
?>