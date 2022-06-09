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
    require TEMPLATES . '/listar.phtml';
}

require PASTA_ROTAS . '/produtos.php';