<?php

// Funções Anônimas

$extra = 'Testando...';

$ola = function ($nome) use ($extra) {
    echo "Olá " . $nome . ' - ' . $extra;
};

// $ola("José!"); // Olá José! - Testando...


// Arrow Functions

$ola2 = fn($nome2) => "Olá 2 ". $nome2 . ' - ' . $extra;

echo $ola2("Jose 2"); // Olá 2 Jose 2 - Testando...

