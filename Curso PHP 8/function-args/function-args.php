<?php

$a = 50;

function somar(&$numeroA, int $numeroB = 10)
{
    $numeroA += $numeroB;
    echo $numeroA . "<br/>";
}

somar($a, 10);
/*
somar(
    numeroB: 30,
    numeroA: $a
);

echo "Agora fora da Função: $a";    
*/