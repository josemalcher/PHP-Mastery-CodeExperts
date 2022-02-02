<?php

require __DIR__ . '/src/funcoes/conexao.php';
die;

// configurações Projeto
define('HOME', 'http://localhost:8081');
define('PROJETO', 'Codigo Estoque');
define('TEMPLATES', __DIR__ . '/templates');

// Array com os produtos tal qual um banco de dados
define('PRODUTOS', require  __DIR__  . '/src/produtos.php');
