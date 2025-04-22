<?php
    // Criar um array de 10 a 20 com for;
    // Fazer um loop em cima do array criado dinamicamente;
    // Imprimir apenas os números ímpares; 

    $arr = [];
    for ($i = 10; $i <= 20; $i++) {
        array_push($arr, $i);
    }
    print_r($arr);
    echo '<br />';
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 != 0) {
            echo $arr[$i] . '<br />';
        }
    }
?>