<?php

$valorA = 32;
$valorB = 96;

$quantidade = 2;

//$valorA = $valorA << $quantidade;

var_dump($valorA | $valorB);


// 128  64  32  16  8  4  2  1
//  0   0   1    0  0  0  0  0

//0010 0000 = 32

// 128  64  32  16  8  4  2  1
//  0   1   1    0  0  0  0  0

// 128  64  32  16  8   4   2   1
// 0    1   1   0   0   0   0   0