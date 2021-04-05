<?php

$leitura = 20;
$eof = 250;
while ($leitura <= $eof) {

    if($leitura == 80) {
       echo "Saindo do laço <br/>";
        break;
    }
$leitura += 20;
echo $leitura."<br />";
}

echo "Fora do comando while <br/><br/>";

for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++) {
        if ($x * $y > 25) {
            break 2;
        }
        echo "$x x $y = " . ($x * $y) . "<br/>";
    }
}