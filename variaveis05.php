<?php

$numero = readline("Digite um número inteiro: ");

if ($numero < 2) {
    echo "$numero não é primo.\n";
} else {
    $isPrimo = true;
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $isPrimo = false;
            break;
        }
    }
    
    if ($isPrimo) {
        echo "$numero é primo.\n";
    } else {
        echo "$numero não é primo.\n";
    }
}
?>
