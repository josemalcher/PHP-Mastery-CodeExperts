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

    // var_dump(func_get_args());
    echo 'Olá ' . $nome . $sobrenome . ', tudo certo?';
}

// olaUsuario('Jose', 'Malcher jr');

function nomes($empresas, ...$nomes)
{
    var_dump($nomes);
    var_dump(func_get_args());

}
nomes("joise", "maria", "Cassandra");

/*
 $ php funcoes.php
array(2) {
  [0]=>
  string(5) "maria"
  [1]=>
  string(9) "Cassandra"
}
array(3) {
  [0]=>
  string(5) "joise"
  [1]=>
  string(5) "maria"
  [2]=>
  string(9) "Cassandra"
}


 */

