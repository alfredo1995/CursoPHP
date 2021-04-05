<?php
/*
$f = new ReflectionFunction("setcookie");

var_dump($f->getParameters());

exit;
*/
setcookie(
    expires_or_options: time()+86400,
    name: "empresa",
    value: "Hcode",
);

var_dump($_COOKIE);