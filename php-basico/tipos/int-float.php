<?php
echo "<br>";
//inteiros 1,2,3,4,5,6,7,8,9 -1, -2
echo -2;
echo "<br>";
echo 2;

echo "<br>";

//Sistema Octal no PHP
//Prefixado 0
echo 0777; //retorna 511 

echo "<br>";
//Sistema Hexadecimal
//Prefixado com 0x
echo 0x1FF; //retorna 511

echo "<br>";

//Float
echo 10.99;
echo "<br>";
echo 0.90;

echo "<br>";

echo "<br>";
/*apesar de retornar 1, por conta do . 
o php entende como float
*/
echo 1.0; 
//Retorna o tipo do dados informado no gettype
echo gettype(1.0); // double

echo "<br>";

/*
Contantes tamanho minimo e maximo 
suportado pelo PHP para tipo inteiro
*/
echo PHP_INT_MIN; // -9223372036854775808
echo "<br>";
echo PHP_INT_MAX; // 9223372036854775807

echo "<br>";
echo "<br>";

/*
Contantes tamanho minimo e maximo 
suportado pelo PHP para tipo float
*/
echo PHP_FLOAT_MIN; // 2.2250738585072E-308
echo "<br>";
echo PHP_FLOAT_MAX; // 1.7976931348623E+308

echo "<br>";

//Exponencial: 13.3 (E)levado a 10 +2 
//(a virgula se movimenta 2 casas para a direita por conta do +2)
echo 13.3e+2; //Res.: 1300.00
echo "<br>";

//Exponencial: 13.3 (E)levado a 10 -3 
//(a virgula se movimenta 3 casas para a esquerda por conta do -3)
echo 13.3e-3; // Res.: 0.0133