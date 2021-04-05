<?php

function manipuladorDeExcecao($exception)
{

    echo $exception->getMessage()."<br/>";
    echo $exception->getFile()."<br/>";
    echo $exception->getLine()."<br/>";
    echo $exception->getCode()."<br/>";
}

set_exception_handler("manipuladorDeExcecao");

class SenhaException extends Exception {}

$nome = "";
$senha = "123";

try {

    if (!$nome) {

        throw new Exception("Preencha o seu nome.", 400);

    }

    if (strlen($senha) < 6) {

        throw new SenhaException("Senha é fraca.", 400);

    }

} catch(SenhaException $e) {

    echo "Problema na sua senha: " . $e->getMessage() . "<br/>";

} catch(Exception $e) {

    echo $e->getMessage() . "<br/>";

} finally {

    //var_dump("Final");

}
/*
$exibeErro = fn($erro) => throw new Exception($erro);

echo $exibeErro("Deu Erro! Throw Expression!");

echo "Depois da exceção";
*/