<?php
//Definindo constante
define('LINK_SITE', 'http://codeexperts.com.br');

echo LINK_SITE; // http://codeexperts.com.br

echo '<br>';
echo '<br>';

//Algumas constantes do PHP
echo 'Constante PHP Versão:' . PHP_VERSION; // Constante PHP Versão:8.3.2
echo '<br>';
echo 'Meu sistema é ' . PHP_OS; // Meu sistema é Linux

echo '<br>';
echo '<br>';
echo 'Estamos na pasta: ' . __DIR__;
// Estamos na pasta: /var/www/html/php-basico

echo '<br>';
echo '<br>';
echo 'Estamos na pasta: ' . __FILE__;
// Estamos na pasta: /var/www/html/php-basico/constantes.php