<?php
    // Fazer um array de 10 tipos de dados diferentes e mostrar apenas os dados que são strings

    $arr = [11, 29, 'Thiago', "José", "Maria", 12, 50, true, false, '100']; 

    $count = 0;
    while ($count < count($arr)) {
        if (is_string($arr[$count])) {
            echo $arr[$count] . "<br>";
        }
        $count++;
    }
?>