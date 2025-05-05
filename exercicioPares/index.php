<?php

function sumEvenNumbers($num) {
    $soma = 0;
    $i = 0;
    while ($i <= $num) {
        if($i % 2 == 0 ) {
            $soma = $soma + $i;
        }
        $i++;
    }
    echo $soma;
}

sumEvenNumbers(4);
?>