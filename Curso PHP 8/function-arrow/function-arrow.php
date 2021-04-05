<?php

$valor = 10;

$somar = fn($a, $b) => $a + $b * $valor;
/*
$somar = function($a, $b) use($valor) {
    return $a + $b * $valor;
};
*/
echo $somar(10, 25);