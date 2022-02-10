<?php

// PDO - PHP Data Object

$conexao = new PDO("mysql:dbname=controle_estoque;host=localhost", "root", "");

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Inserção
/*
$sql = "INSERT INTO produtos
        (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
        VALUES
               ('Produto PHP', 'descrição PHP', 'sobre php', 255.99, 1, NOW(), NOW())
        ";
*/

// ¹var_dump($conexao->query($sql));
// object(PDOStatement)#2 (1)
// { ["queryString"]=> string(212) "INSERT INTO produtos (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
// VALUES ('Produto PHP', 'descrição PHP', 'sobre php', 255.99, 1, NOW(), NOW()) " }

// Atualização
/*
$sql = "UPDATE produtos
            SET nome = 'PHP ATUALIZADO!'
        WHERE id = 1";

var_dump($conexao->query($sql));
*/
// object(PDOStatement)#2 (1) { ["queryString"]=> string(80) "UPDATE produtos SET nome = 'PHP ATUALIZADO!' WHERE id = 1" }
// var_dump($conexao);

/*$sql = "INSERT INTO produtos
        (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
        VALUES
               ('Produto PHP', 'descrição PHP', 'sobre php', 255.99, 1, NOW(), NOW())
        ";*/

//$sql = "INSERT INTO produtos
//        (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
//        VALUES
//               (:nome, :descricao, :sobre, :preco, :status, NOW(), NOW())
//        ";
//
//$post = [
//    'nome' => 'Produto Statement',
//    'descricao' => 'Descrição teste',
//    'sobre' => 'Testando statement',
//    'preco' => 22.99,
//    'status' => 1
//];
//
//$insert = $conexao->prepare($sql);
//
//$insert->bindValue(':nome', $post['nome'], PDO::PARAM_STR);
//$insert->bindValue(':descricao', $post['descricao'], PDO::PARAM_STR);
//$insert->bindValue(':sobre', $post['sobre'], PDO::PARAM_STR);
//$insert->bindValue(':preco', $post['preco'], PDO::PARAM_STR);
//$insert->bindValue(':status', $post['status'], PDO::PARAM_INT);
//
//var_dump($insert->execute());
/*
$id = 3;
$sql = "DELETE FROM produtos WHERE id = :id";
$delete = $conexao->prepare($sql);

$delete->bindValue(':id', $id, PDO::PARAM_INT);

var_dump($delete->execute());
*/
/*
$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = :id";
$select = $conexao->prepare($sql);

$select->bindValue(':id', $id, PDO::PARAM_INT);

$select->execute();

echo '<pre>';
var_dump($select->fetchAll(PDO::FETCH_ASSOC)); // varios itens
var_dump($select->fetchA(PDO::FETCH_ASSOC));// apenas 1 item
*/


