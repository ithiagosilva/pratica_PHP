<?php
    // Criar um array com números de 1 a 20; 
    // Criar um for para esse array;
    // Imprimir apenas os pares;

    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    for ($i = 0; $i < count($arr); $i++) {
        $vAtualArray = $arr[$i];
        if ($vAtualArray % 2 == 0) {
            echo $vAtualArray . "<br />";
        }
    }
?>