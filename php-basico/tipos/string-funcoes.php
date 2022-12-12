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