<?php
require __DIR__ . '/../bootstrap.php';

// Query String ou QUery Params ou Parâmetros de URL

// localhost:3030?nome=Jose
// [name => Jose]

// localhost:3030?name=jose&email=jose@jose.com&idade=37
// [name => 'jose', email => jose@jose.com, idade => 30

//var_dump($_GET);
//die;

// Esta URL será o valor para a navegação
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/';

if ($pagina == '/') {
    //echo 'Página inicial';
    //include '../templates/lista.php';

    //require - Mata a aplicação se houve erro ou não encontrar o arquivo

    $titulo = 'Listagem de Produto';
    require TEMPLATES.'/lista.phtml';
}

if ($pagina == '/produto') {
    //echo 'Detalhe do Produto';
    // http://localhost:8088/?pagina=/produto

    $codigoProduto = isset($_GET['codigo']) ? $_GET['codigo'] : '';

    if ($codigoProduto) {
        $produtoDetalhe = '';

        /*foreach (PRODUTOS as $produto) {
            if ($produto['codigo'] == $codigoProduto) {
                $produtoDetalhe = $produto;
                break;
            }
        }*/
        // Melhoria:
        $produtoDetalhe = array_filter(PRODUTOS, function ($produto) use($codigoProduto){
            return $produto['codigo'] == $codigoProduto;
        });
        $produtoDetalhe = current($produtoDetalhe);
    }
    if (!$codigoProduto || !isset($produtoDetalhe) || !$produtoDetalhe) {
        die('Produto não existe');
    }
    $titulo = 'Detalhes do Produto';
    require TEMPLATES.'/produto.phtml';
}

