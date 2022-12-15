<?php

$usuario = [
  'nome' => 'José Malcher JR',
  'email' => 'malcher.malch@gmail.com',
  'idade' => 38,
  'altura' => 1.73,
  'brasileiro' => true
];


echo $usuario['nome'] . ' com o e-mail ' . $usuario['email']
  . ' têm a idade de ' . $usuario['idade'];