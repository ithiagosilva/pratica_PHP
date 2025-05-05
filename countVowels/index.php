<?php

function countVowels($palavra) {
    $vogais = 0;
    $palavra = strtolower($palavra);
    for ($i = 0; $i < strlen($palavra); $i++) {
        if ($palavra[$i] === 'a' || $palavra[$i] === 'e' || $palavra[$i] === 'i' || $palavra[$i] === 'o' || $palavra[$i] === 'u') {
            $vogais++;
        }
    }
    return $vogais;
}

$nome = 'Thiago Silva'; 

$qtdVogais = countVowels($nome);

echo "$nome, seu nome tem $qtdVogais vogais.";