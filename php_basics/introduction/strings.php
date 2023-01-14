<?php

$age = 23;

/*
  Ao usar aspas simples é necessário realizar a concatenação dos valores usando
  a sintaxe de ponto (.), pois o valor será apenas lido.
*/
echo 'Hello World, I\'m ' . $age . ' years old.';

echo PHP_EOL;

/*
  Ao usar aspas duplas é possível inserir variáveis direto na string, pois os
  valores internos serão interpretados.
  Isto se assemelha ao template strings do Javascript
*/
echo "Hello World, I'm $age years old.";

/*
  A vantagem de usar a variável PHP_EOL é que ela irá tratar automaticamente
  as diferenças entres os sistemas operacionais
  - Unix:    \n
  - Windows: \r\n
*/
echo PHP_EOL . "------------------" . PHP_EOL;

echo "Hello World!\n";
echo "I'm $age years old";
