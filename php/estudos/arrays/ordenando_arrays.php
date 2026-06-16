<?php

$numeros = [5, 2, 8, 1, 9];

$numerosOrdenados = $numeros;

echo "Array original: \n";
print_r($numeros);
echo "\n";

sort($numerosOrdenados); // Ordena o array em ordem crescente, strings serão ordenadas alfabeticamente

echo "Array ordenado com sort: \n";
print_r($numerosOrdenados);
echo "\n";

echo "---------------------- Ordenação manipulada ----------------------\n";

$nomes = ["João", "Maria", "Pedro", "Ana"];

echo "Array original: \n";
print_r($nomes);
echo "\n";

rsort($nomes); // Ordena o array em ordem decrescente (reverse order)

echo "Array ordenado com rsort: \n";
print_r($nomes);
echo "\n";

$notas = [
    "matematica" => 8,
    "portugues" => 7,
    "ingles" => 9
];
echo "Array ordenado com arsort: \n";
arsort($notas); // Ordena o array em ordem decrescente pelo valor, mantendo associação chave-valor
print_r($notas);
echo "\n";

uksort($notas, function ($a, $b) {
    return $a <=> $b;
}); // uksort ordena pela chave com lógica customizada; <=> (spaceship) retorna -1, 0 ou 1 para ordenação crescente

echo "Array ordenado por chave com uksort: \n";
print_r($notas);
echo "\n";
