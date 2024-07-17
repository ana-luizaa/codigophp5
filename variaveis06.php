<?php
$n = intval(readline("Quantos números você deseja inserir? "));
$maiorNumero = PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {
    $numero = intval(readline("Insira o número " . ($i + 1) . ": "));
    if ($numero > $maiorNumero) {
        $maiorNumero = $numero;
    }
}

echo "O maior número inserido foi: " . $maiorNumero . "\n";
?>
