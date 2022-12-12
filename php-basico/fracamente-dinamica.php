<?php
//php entende o tipo como string pelo valor passado
$nome = 'José';
echo gettype($nome); // string

echo '<br>';

$nome = (string) 10;

echo gettype($nome); // string

//echo $nome; //um valor string na variável nome
