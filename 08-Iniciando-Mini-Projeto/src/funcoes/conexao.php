<?php

// PDO - PHP Data Object

$conexao = new PDO("mysql:dbname=controle_estoque;host=localhost", "root", "");

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Inserção
/*$sql = "INSERT INTO produtos
        (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
        VALUES
               ('Produto PHP', 'descrição PHP', 'sobre php', 255.99, 1, NOW(), NOW())
        ";*/

// ¹var_dump($conexao->query($sql));
// object(PDOStatement)#2 (1)
// { ["queryString"]=> string(212) "INSERT INTO produtos (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
// VALUES ('Produto PHP', 'descrição PHP', 'sobre php', 255.99, 1, NOW(), NOW()) " }

// Atualização
$sql = "UPDATE produtos 
            SET nome = 'PHP ATUALIZADO!'
        WHERE id = 1";

var_dump($conexao->query($sql));
// object(PDOStatement)#2 (1) { ["queryString"]=> string(80) "UPDATE produtos SET nome = 'PHP ATUALIZADO!' WHERE id = 1" }
// var_dump($conexao);
