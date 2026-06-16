<?php

$numeros = [5, 2, 8, 1, 9];

$numerosOrdenados = $numeros;

echo "Array original: ";
print_r($numeros);
echo "\n";

sort($numerosOrdenados); // Ordena o array em ordem crescente, strings serão ordenadas alfabeticamente

echo "Array ordenado: ";
print_r($numerosOrdenados);
echo "\n";



echo "---------------------- Ordenação manipulada ----------------------\n";

$nomes = ["João", "Maria", "Pedro", "Ana"];

echo "Array original: ";
print_r($nomes);
echo "\n";

rsort($nomes); // Ordena o array em ordem decrescente (reverse order)

echo "Array ordenado: ";
print_r($nomes);
echo "\n";
