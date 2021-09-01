# PHP Mastery - CodeExperts

https://codeexperts.com.br/



## <a name="indice">Índice</a>

1. [Seja Bem Vindo](#parte1)     
2. [Um Pouco de Contexto](#parte2)     
3. [Configurando Ambientes](#parte3)     
4. [Iniciando com PHP](#parte4)     
5. [5. Operadores](#parte5)     
6. [6. Estruturas de Controle: Condicional](#parte6)     
7. [7. Arrays & Estruturas de Repetição](#parte7)     
---


## <a name="parte1">1 - Seja Bem Vindo</a>

1 - Bem Vindo

2 - Quem Sou Eu

3 - Sobre a Plataforma

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - Um Pouco de Contexto</a>

4 - Um Pouco de História

5 - PHP: Características

6 - O Que Preciso para Programar PHP

7 - Ambientes Prontos PHP

8 - Linguagem Server Side

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Configurando Ambientes</a>

9 - [Windows] Instalando PHP

10 - [Windows] Instalando Composer

11 - [Windows] Instalando Editor de Código

12 - [Windows] Olá Mundo

13 - [Linux] Instalando PHP & Composer

14 - [Linux] Instalando Editor de Código

15 - [Linux] Olá Mundo

16 - [MacOS] Instalando PHP

17 - [MacOS] Instalando Editor de Código

18 - [MacOS] Olá Mundo

19 - [MacOS] Instalando Composer

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Iniciando com PHP</a>

20 - Introdução

```php
<?php
    echo "Hello world"; 
    
?>

```

21 - Comentários

```php
<?php
    # comentario de uma liha
    
    // outro modelo de comentário
    
    /*
    comentário
    de
    Varias Linhas 
    */
    
?>

```

22 - Valores Literais

```php
<?php
// Trabalhar com valores literais é trabalhar com o valor como ele é
echo "Ola Mundo";

echo 10;

echo 10.99;

```

23 - Tipos Básicos

```php
<?php

// tipo inteiro
echo 1000;

// tipo sttring: caracteres
echo "Olá mundo";

// tipo booleano
echo true;
echo false;

// tipo Poto Flutuante
echo 19.99;


```

24 - Inteiros / Ponto Flutuante

```php
<?php

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
echo gettype(1.0);

echo "<br>";

/*
Contantes tamanho minimo e maximo 
suportado pelo PHP para tipo inteiro
*/
echo PHP_INT_MIN;
echo "<br>";
echo PHP_INT_MAX;

echo "<br>";
echo "<br>";

/*
Contantes tamanho minimo e maximo 
suportado pelo PHP para tipo float
*/
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_MAX;

echo "<br>";

//Exponencial: 13.3 (E)levado a 10 +2 
//(a virgula se movimenta 2 casas para a direita por conta do +2)
echo 13.3e+2; //Res.: 1300.00
echo "<br>";

//Exponencial: 13.3 (E)levado a 10 -3 
//(a virgula se movimenta 3 casas para a esquerda por conta do -3)
echo 13.3e-3; // Res.: 0.0133
```

25 - Strings

```php
<?php

echo "Isto é uma string...";
echo "<br>";
echo gettype("Isto é uma string...");

echo '<br>';
echo 'Isto é uma string com aspas simples...';
echo '<br>';
echo gettype('Isto é uma string...');

echo '<br>';

echo "PHP"[1];
echo "<br>";
echo "ABC"[-3]; //indice negativos: PHP 7.1...
echo "<br>";
echo "Estou programando com " . "PHP";

echo "<br>";

echo 'Quero aprender \'PHP\'';


echo "<br>";

echo "Quero aprender \\ \"PHP\"";

echo "<br>";

echo "dsndsididnisd dsds
ddsidnsidnsidnsindisd 
dsdd dsodoskdoskdoksod dsokdsod
sdosdsodksokdoskdo dksodksodkso";

//NOWDOC e HEREDOC
```


26 - Funções de Manipulação de Strings

```php
<?php

//Conta os caracteres
echo strlen("Testando Strings");
echo "<br>";

//Pegar parte da string
//Pega a partir da posição 0, 7 caracteres
echo substr("Testando Strings", 0, 7);
echo "<br>";

//Pega a partir da posição -4(i), 2(in) caracteres
echo substr("Testando Strings", -4, 2);

echo "<br>";

//Pega da posição 7 até o fim da strings
echo substr("Testando Strings", 7);

echo "<br>";
//Pega da posição -7 até o fim da string
echo substr("Testando Strings", -7);

//adicionar caracteres extras

echo "<br>";
echo str_pad("Testee", 8, "-", STR_PAD_BOTH); //Teste***

//maiusculo e minusculo
echo '<br>';
echo strtoupper("fica maiuscula!");
echo '<br>';
echo strtolower("FICA MINUSCULA");

//encontrar uma ocorrencia de caracter
echo '<br>';
echo strstr("image.jpeg", ".");

echo '<br>';
echo strchr("image.png", ".");

//substituir caracteres
echo '<br>';
echo str_replace("A", "x", "batata");
echo '<br>';
echo str_ireplace("A", "x", "batata");
```

27 - Variáveis

28 - Praticando Variáveis

```php
<?php

//O operador de atribuição: =
$nome = 'Malcher';

//$nome = 'Celso';

$anos = 30;

echo $nome . ' têm ' . $anos . ' anos.';
```

29 - Diferença Aspas Simples e Duplas

```php
<?php

//O operador de atribuição: =
$nome = 'Malcher';
$anos = 30;

//usando aspas simples
echo '$nome têm $anos anos';

echo '<br>';

//usando aspas duplas
echo "{$nome}s têm $anos anos";
```


30 - NOWDOC & HEREDOC

```php
<?php
$nome = 'João';
$cargo = 'Desenvolvedor';

/*
HEREDOC: Permite uma escrita com mais
liberdade e interpreta códigos dinâmicos
no texto.
*/

echo <<<HEREDOC
Olá sou $nome, atuo como $cargo. <br>
HEREDOC;

echo <<<'NOWDOC'
Olá sou $nome, atuo como $cargo. <br>
NOWDOC;
```

31 - Case Sensitive

```php
<?php 

//O PHP diferencia escritas de variáveis
//maiusculas e minusculas em seus nomes.

$idade = 30;
$Idade = 40;
$IDADE = 50;

echo $idade;

echo '<br>';
echo $Idade;

echo '<br>';
echo $IDADE;

```

32 - Constantes

```php
<?php
//Definindo constante
define('LINK_SITE', 'http://codeexperts.com.br');

echo LINK_SITE;

echo '<br>';
echo '<br>';

//Algumas constantes do PHP
echo 'Constante PHP Versão:' . PHP_VERSION;
echo '<br>';
echo 'Meu sistema é ' . PHP_OS;

echo '<br>';
echo '<br>';
echo 'Estamos na pasta: ' . __DIR__;

echo '<br>';
echo '<br>';
echo 'Estamos na pasta: ' . __FILE__;

```

33 - Dinâmica e Fracamente Tipada

```php

<?php
//php entende o tipo como string pelo valor passado
$nome = 'José'; 
echo gettype($nome);

echo '<br>';

$nome = (string) 10;

echo gettype($nome);

//echo $nome; //um valor string na variável nome

```

34 - Conclusões Módulo

[Voltar ao Índice](#indice)

---

## <a name="parte5">5. Operadores</a>



[Voltar ao Índice](#indice)

---

## <a name="parte6">6. Estruturas de Controle: Condicional</a>



[Voltar ao Índice](#indice)

---

## <a name="parte7">7. Arrays & Estruturas de Repetição</a>



[Voltar ao Índice](#indice)

---
