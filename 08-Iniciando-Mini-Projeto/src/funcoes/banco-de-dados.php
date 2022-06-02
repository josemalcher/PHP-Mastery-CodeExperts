<?php

function select($tabela, $colunas)
{
    $sql = 'SELECT ' . $colunas . ' FROM ' . $tabela;

    $select = $conexao->query($sql);
    return $select->fetchAll(PDO::FETCH_ASSOC);
}

function selectWhere($tabela, $id, $colunas = '*')
{
    $sql = 'SELECT ' . $colunas . ' FROM ' . $tabela . 'WHERE id = :id';

    $select = $conexao->prepare($sql);

    $select->bindValue(':id', $id, PDO::PARAM_INT);

    $select->execute();

    return $select->fetch(PDO::FETCH_ASSOC);
}

function criar()
{

}

function atualizar()
{

}

function remover()
{

}