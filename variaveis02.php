<?php

$numero = readline("Digite um número inteiro positivo: ");

if ($numero >= 0) {
    for ($i = 0; $i <= $numero; $i += 2) {
        echo $i . "\n";
    }
} else {
    echo "Você deve digitar um número inteiro positivo.\n";
}
?>
