<?php
    // Criar um array com valores inteiros de 10 a 100, com incremento de 10
    // Aplicar um loop e quando o contador entrar nos valores 30 ou 40, pular para a proxima execução

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $index = 0;
    $stop =  count($arr);
    while ($index < $stop) {
        $valorAtual = $arr[$index];
        if ($valorAtual === 30 || $valorAtual === 40) {
            echo "Pulando o número $valorAtual. <br>";
            $index++;
            continue;
        }
        echo $valorAtual . '<br />';
        $index++;
    }
?>