<?php

/*function ola()
{
    echo 'Olá, ok?';
}
ola();
echo PHP_EOL;
ola();*/

function olaUsuario(string $nome, string $sobrenome)
{
    echo 'Olá ' . $nome . $sobrenome . ', tudo certo?';
}

olaUsuario('Jose', 'Malcher jr');