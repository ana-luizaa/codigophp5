<?php

for ($numero = 2; $numero <= 100; $numero++) {
    $isPrimo = true;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $isPrimo = false;
            break;
        }
    }

    if ($isPrimo) {
        echo $numero . "\n";
    }
}
?>
