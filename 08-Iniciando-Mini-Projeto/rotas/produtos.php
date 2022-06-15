<?php

if ($pagina == '/produtos') {
//echo 'Detalhe do Produto';
// http://localhost:8088/?pagina=/produto

// $codigoProduto = isset($_GET['codigo']) ? $_GET['codigo'] : '';

// if ($codigoProduto) {
// $produtoDetalhe = '';

    /*foreach (PRODUTOS as $produto) {
    if ($produto['codigo'] == $codigoProduto) {
    $produtoDetalhe = $produto;
    break;
    // }
    }*/
// Melhoria:
// $produtoDetalhe = array_filter(PRODUTOS, function ($produto) use ($codigoProduto) {
// return $produto['codigo'] == $codigoProduto;
// });
// $produtoDetalhe = current($produtoDetalhe);
// }
//if (!$codigoProduto || !isset($produtoDetalhe) || !$produtoDetalhe) {
//die('Produto não existe');
//}
//$titulo = 'Detalhes do Produto';

    $produtos = recuperar('produtos', '*', $conexao);
    // var_dump($produtos);
    require TEMPLATES . '/produtos/listar.phtml';
}
if ($pagina == '/produtos/criar') {
    require TEMPLATES . '/produtos/criar.phtml';
}

if ($pagina == '/produtos/editar') {

    $produto = $_GET['produto'] ??= null;

    if (!$produto) die('É preciso informar um produto para edição');

    $produto = recuperarPeloID('produtos', $produto, $conexao, '*');

    require TEMPLATES . '/produtos/editar.phtml';
}

if ($pagina == '/produtos/salvar') {
// print '<pre>';
    // var_dump($_POST); // array(4) { ["nome"]=> string(0) "" ["descricao"]=> string(0) "" ["sobre"]=> string(8) " " ["valor"]=> string(0) "" }
    // var_dump($_FILES);

    $dadosForm = $_POST;

    $dadosForm['valor'] = str_replace(['.', ','], ['', '.'], $dadosForm['valor']);

    $foto = $_FILES['foto'];

    $extensao = strrchr($foto['name'], '.');
    $nomeNome = md5($foto['name']) . uniqid('', true) . $extensao;

    if (!is_dir(PASTA_UPLOADS)) {
        // IDE CREATED
        if (!mkdir($concurrentDirectory = PASTA_UPLOADS, 755, true) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
    }

    move_uploaded_file($foto['tmp_name'], __DIR__ . '/../public/uploads/images/' . $nomeNome);

    echo "<pre>";
    var_dump($foto);
    die;

//    $sql = "INSERT INTO produtos
//        (nome, descricao, sobre, preco, status, criacao_em, atualizacao_em)
//        VALUES
//               (:nome, :descricao, :sobre, :preco, :status, NOW(), NOW())
//        ";

//    $post = [
//        'nome' => 'Produto Statement',
//        'descricao' => 'Descrição teste',
//        'sobre' => 'Testando statement',
//        'preco' => 22.99,
//        'status' => 1
//    ];
//
//    $insert = $conexao->prepare($sql);
//
//    $insert->bindValue(':nome', $dadosForm['nome'], PDO::PARAM_STR);
//    $insert->bindValue(':descricao', $dadosForm['descricao'], PDO::PARAM_STR);
//    $insert->bindValue(':sobre', $dadosForm['sobre'], PDO::PARAM_STR);
//    $insert->bindValue(':preco', $dadosForm['valor'], PDO::PARAM_STR);
//    $insert->bindValue(':status', $dadosForm['status'], PDO::PARAM_INT);
//
//    $insert->execute();
//
//    // var_dump($insert->execute());
//    echo $conexao->lastInsertId();
    unset($dadosForm['estoque']);
    echo criar('produtos', $dadosForm, $conexao);

}
if ($pagina == '/produtos/atualizar') {

    $dadosForm = $_POST;

    $produto = $_GET['produto'] ??= null;
    if (!$produto) die('É preciso informar um produto para edição');

    $dadosForm['valor'] = str_replace(['.', ','], ['', '.'], $dadosForm['valor']);

    atualizar('produtos', $produto, $dadosForm, $conexao);

    return header('Location:' . HOME . '?pagina=/produtos');
}
if ($pagina == '/produtos/remover') {

    $produto = $_GET['produto'] ??= null;

    if (!$produto) die('É preciso informar um produto para remover!');

    $produto = remover('produtos', $produto, $conexao);

    return header('Location:' . HOME . '?pagina=/produtos');
}