<?php

$resultado = `ping -n 3 hcode.com.br`;

$oem = sapi_windows_cp_get("oem");

$resultado = sapi_windows_cp_conv(
    $oem, 
    65001, 
    $resultado
);

echo "<pre>$resultado</pre>";