<?php
$result = 0;
for ($i =1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $result = $i + $result;
    }
}
echo "A soma dos números pares é: " . $result . "\n";
?>