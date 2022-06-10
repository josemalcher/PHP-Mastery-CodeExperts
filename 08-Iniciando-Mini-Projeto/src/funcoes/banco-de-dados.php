<?php

function recuperar($tabela, $colunas, $conexao)
{
    $sql = 'SELECT ' . $colunas . ' FROM ' . $tabela;

    $select = $conexao->query($sql);
    return $select->fetchAll(PDO::FETCH_ASSOC);
}

function recuperarPeloID($tabela, $id, $conexao , $colunas = '*' )
{
    $sql = 'SELECT ' . $colunas . ' FROM ' . $tabela . ' WHERE id = :id';

    $select = $conexao->prepare($sql);

    $select->bindValue(':id', $id, PDO::PARAM_INT);

    $select->execute();

    return $select->fetch(PDO::FETCH_ASSOC);
}

function criar($tabela, $dados, $conexao)
{

    $keys = array_keys($dados);
    $colunas = implode(', ', $keys);
    $binds = implode(', :', $keys);

    $sql = 'INSERT INTO ' . $tabela . '(' . $colunas . ') VALUES(:' . $binds . ')';
                /*'(nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
        VALUES()';*/

    // echo $sql; die;

    $inserir = $conexao->prepare($sql);

    foreach ($dados as $key => $valor) {
        $inserir->bindValue(':' . $key, $valor, is_integer($valor) ?
                                                PDO::PARAM_INT :
                                                PDO::PARAM_STR);
    }
    $inserir->execute();
    return $conexao->lastInsertId();

    // echo $sql;
}
// criar('produtos', ['nome'=>'Mouse', 'preco' => 19.9, 'descricao'=>'descrição do produto Mouse']);

function atualizar($tabela,$id, $dados, $conexao)
{
    // UPDATE produtos SET coluna = :valor, coluna2 = :valor WHERE id = :id
    $keys = array_keys($dados);
    $binds = '';
    foreach ($keys as $key) {
        $binds .= $binds ?
                            ', ' . $key . ' = :' .$key
                            : $key . ' = :' . $key;
    }

    $sql = 'UPDATE '. $tabela . ' SET ' . $binds  . ' WHERE id = :id';

    // echo $sql; die;

    $atualizar = $conexao->prepare($sql);


    foreach ($dados as $key => $valor) {
        $atualizar->bindValue(':' . $key, $valor, is_integer($valor) ?
            PDO::PARAM_INT :
            PDO::PARAM_STR);
    }
    $atualizar->bindValue(':id', $id, PDO::PARAM_INT);
    return $atualizar->execute();

}

// atualizar('produtos', ['nome'=>'Produto Teste', 'preco' => 19.99]);

function remover($tabela, $id, $conexao)
{
    // DELETE FROM produtos WHERE id = :id
    $sql = 'DELETE FROM ' . $tabela . ' WHERE id = :id';

    $remover = $conexao->prepare($sql);

    $remover->bindValue(':id', $id, PDO::PARAM_INT);

    return $remover->execeute();

}