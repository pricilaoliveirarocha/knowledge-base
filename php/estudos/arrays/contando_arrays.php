<?php

// Contando elementos em arrays em PHP

// Criando um array de frutas
$frutas = ["maçã", "banana", "laranja", "uva"];

// Contando o número de elementos no array usando count()
$totalFrutas = count($frutas);
echo "Total de frutas: " . $totalFrutas . "\n";


// Criando um array associativo de pessoas
$pessoas = [
    "João" => 30,
    "Maria" => 25,
    "Pedro" => 35
];

// Contando o número de elementos no array associativo usando count()
$totalPessoas = count($pessoas);
echo "Total de pessoas: " . $totalPessoas . "\n";

// Criando um array multidimensional de alunos
$alunos = [
    ["nome" => "Ana", "idade" => 20],
    ["nome" => "Carlos", "idade" => 22],
    ["nome" => "Luisa", "idade" => 19]
];

// Contando o número de elementos no array multidimensional usando count() recursivamente
$totalAlunos = count($alunos, COUNT_RECURSIVE);
echo "Total de alunos: " . $totalAlunos . "\n";


// Funções build-in para contar elementos em arrays em PHP:
// 1. count() - Conta o número de elementos em um array
// 2. sizeof() - Alias de count(), também conta o número de elementos em um array
// 3. count() com o parâmetro COUNT_RECURSIVE - Conta elementos em arrays multidimensionais
