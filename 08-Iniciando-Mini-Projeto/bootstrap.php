<?php

require __DIR__ . '/src/funcoes/conexao.php';
require __DIR__ . '/src/funcoes/banco-de-dados.php';
require __DIR__ . '/src/funcoes/uploads.php';
//die;

// configurações Projeto
define('HOME', 'http://localhost:3030');
define('PROJETO', 'Codigo Estoque');
define('TEMPLATES', __DIR__ . '/templates');
define('PASTA_ROTAS', __DIR__ . '/rotas');

define('PASTA_UPLOADS', __DIR__ . '/public/uploads/images/');

// Array com os produtos tal qual um banco de dados
define('PRODUTOS', require __DIR__ . '/src/produtos.php');
