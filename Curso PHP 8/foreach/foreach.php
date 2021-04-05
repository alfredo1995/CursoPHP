<?php

$aereas = ["Gol", "Latam", "Azul"];

foreach ($aereas as $valor) {

    var_dump(strlen($valor));

}

foreach ($_SERVER as $valor){
    var_dump($valor);
}