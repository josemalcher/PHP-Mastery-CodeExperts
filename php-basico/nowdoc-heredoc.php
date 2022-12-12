<?php
$nome = 'João';
$cargo = 'Desenvolvedor';

/*
HEREDOC: Permite uma escrita com mais
liberdade e interpreta códigos dinâmicos
no texto.
*/

echo <<<HEREDOC
Olá sou $nome, atuo como $cargo. <br>
HEREDOC;
// Olá sou João, atuo como Desenvolvedor.

echo <<<'NOWDOC'
Olá sou $nome, atuo como $cargo. <br>
NOWDOC;
// Olá sou $nome, atuo como $cargo.