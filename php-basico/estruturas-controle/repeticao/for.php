<?php

$listaFrutas = ['uva', 'banana', 'laranja', 'maçã', 'goiaba'];

//Escrita padrão...
for ($i = 0; $i < count($listaFrutas); $i++) {
  echo $listaFrutas[$i] . '<br>';
}
/*
  uva
  banana
  laranja
  maçã
  goiaba
*/
echo '<br>';

//Escrita alternativa...
for ($i = 0; $i < count($listaFrutas); $i++):

  echo $listaFrutas[$i] . '<br>';

endfor;
/*
  uva
  banana
  laranja
  maçã
  goiaba
*/