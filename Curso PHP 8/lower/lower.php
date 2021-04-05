<?php

$nome = "JOão;HEnrique;rangel";

$formatCSV = fn($string, $delimiter = ";") => str_replace($delimiter," ",ucwords(strtolower($string),$delimiter));

echo strtolower($nome) . "\n";
echo strtoupper($nome) . "\n";
echo mb_strtoupper($nome) . "\n";

echo ucfirst(strtolower($nome)) . "\n";
echo $formatCSV($nome) . "\n";
