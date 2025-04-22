<?php
    // Criar um loop que vai até o 30
    // O contador deve iniciar com 4
    // Fazer incrementos de 2 em 2
    // Utilizar o brake para sair do loop quando chegar no 24

    $count = 4;
    $stop = 30;
    while ($count < $stop) {
        if ($count === 24) {
            echo "Saindo do loop no número $count.";
            break;
        }
        echo $count . '<br />';
        $count += 2;
    }
?>