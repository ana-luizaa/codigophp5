<?php

$numero = readline("Digite um número inteiro positivo: ");

if ($numero > 0) {
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    echo "A soma de todos os números entre 1 e $numero é: $soma\n";
} else {
    echo "Você deve digitar um número inteiro positivo.\n";
}
?>
