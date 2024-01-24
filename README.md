
# PHP Mastery

https://codeexperts.com.br/


## <a name="indice">Índice</a>

1. [1. Seja Bem Vindo](#parte1)
2. [2. Um Pouco de Contexto](#parte2)
3. [3. Configurando Ambientes](#parte3)
4. [4. Iniciando com PHP](#parte4)
5. [5. Operadores](#parte5)
6. [6. Estruturas de Controle: Condicional](#parte6)
7. [7. Arrays & Estruturas de Repetição](#parte7)
8. [8. Iniciando Mini-Projeto](#parte8)
9. [9. PHP & Formulários](#parte9)
10. [10. Começando com Banco de Dados](#parte10)
11. [11. PHP & Banco de Dados](#parte11)
12. [12. Funções & Organizando CRUD](#parte12)
13. [13. Estilizando Painel e Upload de Arquivos](#parte13)
14. [14. Session, Cookies & Autenticação](#parte14)
15. [15. Banco de Dados: Falando Sobre Relacionamentos](#parte15)
16. [16. Concluindo Mini Projeto](#parte16)
17. [17. Iniciando com Orientação a Objetos](#parte17)
18. [18. Relação entre Objetos](#parte18)
19. [19. Mais Recursos OO](#parte19)
20. [20. PHP 8: Novidades & Atualização + Ecossistema](#parte20)
21. [21. Autoload & Namespaces](#parte21)
22. [22. Importante: Métodos Mágicos & Exceptions](#parte22)
23. [23. MVC com PHP](#parte23)
---


## <a name="parte1">1. Seja Bem Vindo</a>

### 1 - Bem Vindo
### 2 - Quem Sou Eu
### 3 - Sobre a Plataforma

[Voltar ao Índice](#indice)

---


## <a name="parte2">2. Um Pouco de Contexto</a>

### 4 - Um Pouco de História
### 5 - PHP: Características
### 6 - O Que Preciso para Programar PHP
### 7 - Ambientes Prontos PHP
### 8 - Linguagem Server Side

[Voltar ao Índice](#indice)

---


## <a name="parte3">3. Configurando Ambientes</a>

### 9 - [Windows] Instalando PHP
### 10 - [Windows] Instalando Composer
### 11 - [Windows] Instalando Editor de Código
### 12 - [Windows] Olá Mundo
### 13 - [Linux] Instalando PHP & Composer
### 14 - [Linux] Instalando Editor de Código
### 15 - [Linux] Olá Mundo
### 16 - [MacOS] Instalando PHP
### 17 - [MacOS] Instalando Editor de Código
### 18 - [MacOS] Olá Mundo
### 19 - [MacOS] Instalando Compose

```

$composer up -d

```

[Voltar ao Índice](#indice)

---


## <a name="parte4">4. Iniciando com PHP</a>

### 20 - Introdução
### 21 - Comentários
### 22 - Valores Literais
### 23 - Tipos Básicos

```php
<?php

echo "<br>";
//Com tipo Inteiro
echo 10000;

echo "<br>";
//Com tipo string: caracteres
echo "Olá Mundo";

echo "<br>";
//Com tipo Booleano
echo true; //exibe o valor 1

echo "<br>";

echo false; // não exibe nada

echo "<br>";
//Com tipo Ponto Flutuante
echo 19.99;
echo "<br>";
echo 1099.90;
```

### 24 - Inteiros / Ponto Flutuante

```php
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
```

### 25 - Strings

```php
<?php
echo "<br>";
echo "Isto é uma string...";
echo "<br>";
echo gettype("Isto é uma string...");

echo '<br>';
echo 'Isto é uma string com aspas simples...';
echo '<br>';
echo gettype('Isto é uma string...');

echo '<br>';

echo "PHP"[1]; // H
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


```

Isto é uma string...
string
Isto é uma string com aspas simples...
string
H
A
Estou programando com PHP
Quero aprender 'PHP'
Quero aprender \ "PHP"
dsndsididnisd dsds ddsidnsidnsidnsindisd dsdd dsodoskdoskdoksod dsokdsod sdosdsodksokdoskdo dksodksodkso
```

### 26 - Funções de Manipulação de Strings

```php
<?php

//Conta os caracteres
echo strlen("Testando Strings"); // 16
echo "<br>";

//Pegar parte da string
//Pega a partir da posição 0, 7 caracteres
echo substr("Testando Strings", 0, 7); // Testand
echo "<br>";

//Pega a partir da posição -4(i), 2(in) caracteres
echo substr("Testando Strings", -4, 2); // in

echo "<br>";

//Pega da posição 7 até o fim da strings
echo substr("Testando Strings", 7); // o Strings

echo "<br>";
//Pega da posição -7 até o fim da string
echo substr("Testando Strings", -7); // Strings

//adicionar caracteres extras

echo "<br>";
echo str_pad("Testee", 8, "-", STR_PAD_BOTH); // -Testee-

//maiusculo e minusculo
echo '<br>';
echo strtoupper("fica maiuscula!"); // FICA MAIUSCULA!
echo '<br>';
echo strtolower("FICA MINUSCULA"); // fica minuscula

//encontrar uma ocorrencia de caracter
echo '<br>';
echo strstr("image.jpeg", "."); // .jpeg

echo '<br>';
echo strchr("image.png", "."); // .png

//substituir caracteres
echo '<br>';
echo str_replace("A", "x", "batata"); // batata
echo '<br>';
echo str_ireplace("A", "x", "batata"); // bxtxtx
```

### 27 - Variáveis
### 28 - Praticando Variáveis
### 29 - Diferença Aspas Simples e Duplas
### 30 - NOWDOC & HEREDOC
### 31 - Case Sensitive
### 32 - Constantes
### 33 - Dinâmica e Fracamente Tipada
### 34 - Conclusões Módulo

[Voltar ao Índice](#indice)

---


## <a name="parte5">5. Operadores</a>

### 35 - Introdução
### 36 - Operadores Aritméticos
### 37 - Operadores Comparação
### 38 - Spaceship Operator
### 39 - Operadores de Atribuição
### 40 - Operadores Lógicos
### 41 - Combinando Operadores Lógicos e Comparação
### 42 - Operador Incremento e Decremento
### 43 - Conclusões

[Voltar ao Índice](#indice)

---


## <a name="parte6">6. Estruturas de Controle: Condicional</a>

### 44 - Introdução
### 45 - Algoritmos?
### 46 - Iniciando com Estrutrura Condicional
### 47 - Primeiras Estruturas Condicionais
### 48 - Senão Se
### 49 - Switch
### 50 - Operador Ternário
### 51 - Mais da Escrita do If
### 52 - Conclusões

[Voltar ao Índice](#indice)

---


## <a name="parte7">7. Arrays & Estruturas de Repetição</a>

### 53 - Introdução
### 54 - Arrays?
### 55 - Praticando Arrays
### 56 - Arrays Associativos
### 57 - Array Multi-Dimensional
### 58 - Funções para Arrays
### 59 - Operadores para Arrays
### 60 - Estruturas de Repetição
### 61 - For
### 62 - While
### 63 - Do While
### 64 - Foreach
### 65 - Iterando em Arrays MultiDimensionais
### 66 - Conclusões

[Voltar ao Índice](#indice)

---


## <a name="parte8">8. Iniciando Mini-Projeto</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9. PHP & Formulários</a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10. Começando com Banco de Dados</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11. PHP & Banco de Dados</a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12. Funções & Organizando CRUD</a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13. Estilizando Painel e Upload de Arquivos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14. Session, Cookies & Autenticação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte15">15. Banco de Dados: Falando Sobre Relacionamentos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte16">16. Concluindo Mini Projeto</a>



[Voltar ao Índice](#indice)

---


## <a name="parte17">17. Iniciando com Orientação a Objetos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte18">18. Relação entre Objetos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte19">19. Mais Recursos OO</a>



[Voltar ao Índice](#indice)

---


## <a name="parte20">20. PHP 8: Novidades & Atualização + Ecossistema</a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21. Autoload & Namespaces</a>



[Voltar ao Índice](#indice)

---


## <a name="parte22">22. Importante: Métodos Mágicos & Exceptions</a>



[Voltar ao Índice](#indice)

---


## <a name="parte23">23. MVC com PHP</a>



[Voltar ao Índice](#indice)

---
