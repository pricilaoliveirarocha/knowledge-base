<?php
// Populando arrays em PHP

// Forma 1: Usando a sintaxe de array literal
$frutas = [
    "maçã",
    "banana",
    "laranja"
];
print_r($frutas);
echo "\n";

// Forma 2: Usando a função array()
$animais = array(
    "cachorro",
    "gato",
    "pássaro"
);
print_r($animais);
echo "\n";

// Forma 3: Usando a função array() com índices específicos
$cores = array(
    0 => "vermelho",
    2 => "verde",
    4 => "azul"
);
print_r($cores);
echo "\n";

// Forma 4: Usando a função array() com índices associativos
$pessoa = array(
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
);
print_r($pessoa);
echo "\n";

// Forma 5: Usando a função array() com mistura de índices
$misto = array(
    0 => "zero",
    "um" => 1,
    2 => "dois",
    "tres" => 3
);
print_r($misto);
echo "\n";

//resumo do estudo:
// Forma 1: Usando a sintaxe de array literal
// Forma 2: Usando a função array()
// Forma 3: Usando a função array() com índices específicos
// Forma 4: Usando a função array() com índices associativos
// Forma 5: Usando a função array() com mistura de índices
