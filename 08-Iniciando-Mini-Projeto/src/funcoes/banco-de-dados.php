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

function criar($tabela, $dados)
{

    $keys = array_keys($dados);
    $colunas = implode(', ', $keys);
    $binds = implode(', :', $keys);

    $sql = 'INSERT INTO ' . $tabela . '(' . $colunas . ') VALUES(:' . $binds . ')';
                /*'(nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
        VALUES()';*/

    $inserir = $conexao->prepare($sql);

    foreach ($dados as $key => $valor) {
        $inserir->bindValue(':' . $key, $valor, is_integer($valor) ?
                                                PDO::PARAM_INT :
                                                PDO::PARAM_STR);
    }
    return $inserir->execute();

    // echo $sql;
}
// criar('produtos', ['nome'=>'Mouse', 'preco' => 19.9, 'descricao'=>'descrição do produto Mouse']);

function atualizar($tabela, $dados)
{
    // UPDATE produtos SET coluna = :valor, coluna2 = :valor WHERE id = :id
    $keys = array_keys($dados);
    $binds = '';
    foreach ($keys as $key) {
        $binds .= $key . ' = :' . $key . ', ';
    }
    $sql = 'UPDATE '. $tabela . ' SET ' . $binds ;

    echo $sql;
}

atualizar('produtos', ['nome'=>'Produto Teste', 'preco' => 19.99]);

function remover()
{

}