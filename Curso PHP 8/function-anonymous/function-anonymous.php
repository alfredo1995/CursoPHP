<?php

$empresa = function($site, $tel)
{
    return "https://$site<br/>Tel: $tel";
};

function somar($a, $b, $callback)
{

    $callback($a + $b);

}

$fn = function($resultado) use ($empresa) {

    echo $empresa("hcode.com.br", "112149-7360");

    var_dump($resultado);

};

somar(2, 3, $fn);
somar(5, 5, $fn);