<?php

function qualquer() {

    $empresa = "Hcode";
    global $idade;
    $idade = 30;
    $GLOBALS["nome"] = "João";

    echo $GLOBALS["empresa"]."<br/>";
}

qualquer();
echo "<br />Fora da função: $nome<br />";
var_dump($GLOBALS);