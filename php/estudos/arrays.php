<?php

// Array numérico
$array = [
    1,
    2,
    3,
    4,
    5
];

// Array associativo
$associativo = [
    'nome' => 'Pricila',
    'idade' => 25,
    'salario' => 999999.90,
    'ativa' => true,
    'telefone' => null,
    'habilidades' => [
        'PHP',
        'Laravel',
        'MySQL',
    ],
    'usuario' => new stdClass(), // Objeto
];

// Oque é hashmap: É uma estrutura de dados que armazena pares de chave-valor, onde cada chave é única e está associada a um valor.
// Ou seja, arrays associativos são hashmaps.

// Percorrendo com foreach
echo '------ Foreach normal ------' . "\n";
foreach ($array as $value) {
    echo $value . "\n";
}

echo "\n"; // Quebra de linha ou também PHP_EOL

// Percorrendo com foreach e chave, key é o índice e a chave é o valor como: 'nome' => 'Pricila'

echo '------ Foreach com chave ------' . "\n";
foreach ($associativo as $key => $value) {
    echo $key . ' ex ';
    print_r($value);
    echo "\n";
}

// funções famosas para arrays
// array_push -> adiciona um elemento no final do array
// array_pop -> remove o último elemento do array
// array_shift -> remove o primeiro elemento do array
// array_unshift -> adiciona um elemento no início do array
// array_merge -> mescla dois ou mais arrays
// array_slice -> extrai uma parte do array
// array_splice -> remove e/ou adiciona elementos em uma posição específica do array
// array_search -> procura um valor no array e retorna a chave se encontrado
// array_keys -> retorna todas as chaves de um array
// array_values -> retorna todos os valores de um array
// array_count_values -> conta os valores de um array
// array_unique -> remove valores duplicados de um array
// array_reverse -> inverte a ordem dos elementos de um array
// array_flip -> troca as chaves por valores e os valores por chaves
// array_sum -> soma todos os valores de um array
// array_product -> multiplica todos os valores de um array
// array_map -> aplica uma função a todos os elementos de um array
// array_filter -> filtra os elementos de um array usando uma função
// array_reduce -> reduz um array a um único valor usando uma função
// array_walk -> aplica uma função a todos os elementos de um array
// array_walk_recursive -> aplica uma função a todos os elementos de um array recursivamente
// array_column -> extrai uma coluna de um array multidimensional
// array_combine -> cria um array usando um array para chaves e outro para valores
// array_diff -> compara dois ou mais arrays e retorna os valores que não estão presentes em todos os arrays
// array_intersect -> compara dois ou mais arrays e retorna os valores que estão presentes em todos os arrays
// array_merge_recursive -> mescla dois ou mais arrays recursivamente
// array_replace -> substitui os valores de um array pelos valores de outro array
// array_replace_recursive -> substitui os valores de um array pelos valores de outro array recursivamente
// array_pad -> preenche um array com um valor específico até atingir um tamanho específico
// array_rand -> retorna uma ou mais chaves aleatórias de um array

// Doc para arrays: https://www.php.net/manual/pt_BR/book.array.php
