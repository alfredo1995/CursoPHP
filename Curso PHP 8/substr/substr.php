<?php

function getDomain($url)
{
    $inicio = strpos($url, "://")+3;

    $dominio = substr($url, $inicio, strlen($url));
    
    return substr($dominio, 0, strpos($dominio, "/"));
}

echo getDomain("https://hcodelab.com.br/blog");


