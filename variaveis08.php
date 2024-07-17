<?php

$numero = readline("Digite um número inteiro positivo: ");

if ($numero > 0) {
    echo "Os divisores de $numero são:\n";
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo $i . "\n";
        }
    }
} else {
    echo "Você deve digitar um número inteiro positivo.\n";
}
?>
