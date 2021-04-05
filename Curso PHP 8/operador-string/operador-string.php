<?php

$primeirNome = "João";
$ultimoNome = "Rangel";

$nomeCompleto = $primeirNome . " " . $ultimoNome;

var_dump($nomeCompleto);

$texto = "Lorem ipsum dolor sit";
$texto .= "ametconsectetur adipisicing"; $texto .= "elit. Nulla provident repellat,";

echo $texto."<br />";

$texto2 = <<<HCODE
<pre>
$nomeCompleto
Lorem ipsum dolor sit amet consectetur 

adipisicing elit. Nobis nam alias 

explicabo quaerat pariatur? Animi nostrum

labore quod qui culpa expedita.

Soluta ad beatae doloribus ducimus? Reprehenderit quae officiis est?
</pre>
HCODE;

echo $texto2;