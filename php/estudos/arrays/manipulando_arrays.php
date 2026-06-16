<?php
// array_push --> Adiciona um ou mais elementos do parâmetro ao final do array.
function array_push_example() {
    $arr = [1, 2, 3];
    array_push($arr, 4, 5);
}

// array_pop --> Remove e retorna o último elemento do array.
function array_pop_example() {
    $arr = [1, 2, 3];
    $last = array_pop($arr);
}

// array_shift --> Remove e retorna o primeiro elemento do array, reindexando as chaves numéricas.
function array_shift_example() {
    $arr = [1, 2, 3];
    $first = array_shift($arr);
}

// array_unshift --> Insere um ou mais elementos do parâmetro no início do array, reindexando as chaves numéricas.
function array_unshift_example() {
    $arr = [1, 2, 3];
    array_unshift($arr, 0);
}

// array_splice --> Remove elementos a partir de uma posição e, opcionalmente, insere novos elementos no lugar.
function array_splice_example() {
    $arr = [1, 2, 3];
    array_splice($arr, 1, 1, [0]);
}

// array_slice --> Retorna uma cópia de uma parte do array, definida por posição inicial e quantidade.
function array_slice_example() {
    $arr = [1, 2, 3];
    $slice = array_slice($arr, 1, 1);
}

// array_merge --> Une dois ou mais arrays em um único array. Chaves numéricas são reindexadas; chaves string são sobrescritas.
function array_merge_example() {
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $merged = array_merge($arr1, $arr2);
}

// array_reverse --> Retorna um novo array com os elementos em ordem inversa.
function array_reverse_example() {
    $arr = [1, 2, 3];
    $reversed = array_reverse($arr);
}

// array_unique --> Remove valores duplicados e retorna o array com valores únicos, mantendo a primeira ocorrência.
function array_unique_example() {
    $arr = [1, 2, 2, 3, 3, 3];
    $unique = array_unique($arr);
}

// array_count_values --> Conta quantas vezes cada valor aparece no array e retorna um array associativo com essas contagens.
function array_count_values_example() {
    $arr = ["maçã", "banana", "maçã", "laranja", "banana", "maçã"];
    $counts = array_count_values($arr);
}

// array_sum --> Retorna a soma de todos os valores numéricos do array.
function array_sum_example() {
    $arr = [1, 2, 3, 4, 5];
    $soma = array_sum($arr);
}

// array_product --> Retorna o produto (multiplicação) de todos os valores numéricos do array.
function array_product_example() {
    $arr = [1, 2, 3, 4];
    $produto = array_product($arr);
}

// array_search --> Procura um valor no array e retorna a chave correspondente, ou false se não encontrar.
function array_search_example() {
    $arr = ["a", "b", "c"];
    $key = array_search("b", $arr);
}

// array_keys --> Retorna um array com todas as chaves do array original.
function array_keys_example() {
    $arr = ["nome" => "Ana", "idade" => 25];
    $chaves = array_keys($arr);
}

// array_values --> Retorna um array com todos os valores reindexados numericamente a partir de 0.
function array_values_example() {
    $arr = ["nome" => "Ana", "idade" => 25];
    $valores = array_values($arr);
}

// array_flip --> Inverte o array trocando cada chave pelo seu valor e cada valor pela sua chave.
function array_flip_example() {
    $arr = ["a" => 1, "b" => 2, "c" => 3];
    $invertido = array_flip($arr);
}

// array_diff --> Retorna os valores do primeiro array que não estão presentes nos demais arrays.
function array_diff_example() {
    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [3, 4, 5, 6, 7];
    $diferenca = array_diff($arr1, $arr2);
}

// array_intersect --> Retorna apenas os valores que estão presentes em todos os arrays comparados.
function array_intersect_example() {
    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [3, 4, 5, 6, 7];
    $intersecao = array_intersect($arr1, $arr2);
}

// array_merge_recursive --> Une arrays como array_merge, mas chaves string duplicadas são combinadas em sub-arrays em vez de sobrescritas.
function array_merge_recursive_example() {
    $arr1 = ["cor" => "vermelho", "tamanho" => "P"];
    $arr2 = ["cor" => "azul", "peso" => 1.5];
    $merged = array_merge_recursive($arr1, $arr2);
}

// array_replace --> Substitui os valores do primeiro array pelos valores dos arrays seguintes, pela chave correspondente.
function array_replace_example() {
    $base = ["a", "b", "c"];
    $substituto = [0 => "x", 2 => "z"];
    $resultado = array_replace($base, $substituto);
}

// array_rand --> Seleciona e retorna uma ou mais chaves aleatórias do array.
function array_rand_example() {
    $arr = ["maçã", "banana", "laranja", "uva"];
    $chave = array_rand($arr);
}

// shuffle --> Embaralha os elementos do array em ordem aleatória, reindexando as chaves numéricas.
function shuffle_example() {
    $arr = [1, 2, 3, 4, 5];
    shuffle($arr);
}

// array_chunk --> Divide o array em pedaços menores de tamanho definido e retorna um array de arrays.
function array_chunk_example() {
    $arr = [1, 2, 3, 4, 5, 6];
    $pedacos = array_chunk($arr, 2);
}

// array_column --> Extrai os valores de uma chave específica de cada elemento de um array multidimensional.
function array_column_example() {
    $pessoas = [
        ["nome" => "Ana", "idade" => 25],
        ["nome" => "João", "idade" => 30],
        ["nome" => "Maria", "idade" => 22],
    ];
    $nomes = array_column($pessoas, "nome");
}

// array_combine --> Cria um array associativo usando o primeiro array como chaves e o segundo como valores.
function array_combine_example() {
    $chaves = ["a", "b", "c"];
    $valores = [1, 2, 3];
    $combinado = array_combine($chaves, $valores);
}

// array_pad --> Preenche o array com um valor até que ele atinja o tamanho especificado.
function array_pad_example() {
    $arr = [1, 2, 3];
    $preenchido = array_pad($arr, 5, 0);
}

// array_fill --> Cria e retorna um array preenchido com um valor repetido, a partir de um índice inicial.
function array_fill_example() {
    $arr = array_fill(0, 4, "php");
}

// array_fill_keys --> Cria um array associativo usando as chaves fornecidas, todas com o mesmo valor.
function array_fill_keys_example() {
    $chaves = ["nome", "email", "idade"];
    $arr = array_fill_keys($chaves, null);
}

// array_map --> Aplica uma função de callback a cada elemento e retorna um novo array com os resultados.
function array_map_example() {
    $arr = [1, 2, 3, 4];
    $dobrado = array_map(fn($n) => $n * 2, $arr);
}

// array_filter --> Filtra os elementos do array mantendo apenas os que retornam true na função de callback.
function array_filter_example() {
    $arr = [1, 2, 3, 4, 5, 6];
    $pares = array_filter($arr, fn($n) => $n % 2 === 0);
}

// array_reduce --> Itera o array acumulando um único valor final com base na função de callback.
function array_reduce_example() {
    $arr = [1, 2, 3, 4, 5];
    $soma = array_reduce($arr, fn($carry, $item) => $carry + $item, 0);
}

// array_walk --> Aplica uma função de callback a cada elemento do array, podendo modificá-los diretamente por referência.
function array_walk_example() {
    $arr = ["a" => 1, "b" => 2, "c" => 3];
    array_walk($arr, function (&$valor, $chave) {
        $valor = "$chave=$valor";
    });
}

// array_walk_recursive --> Igual ao array_walk, mas percorre recursivamente todos os elementos de arrays aninhados.
function array_walk_recursive_example() {
    $arr = ["frutas" => ["maçã", "banana"], "legumes" => ["cenoura"]];
    array_walk_recursive($arr, function (&$item) {
        $item = strtoupper($item);
    });
}

// array_key_exists --> Verifica se uma chave específica existe no array, mesmo que seu valor seja null.
function array_key_exists_example() {
    $arr = ["nome" => "Ana", "idade" => 25];
    var_dump(array_key_exists("nome", $arr));
    var_dump(array_key_exists("email", $arr));
}

// isset --> Verifica se uma variável ou chave está definida e seu valor não é null.
function isset_example() {
    $arr = ["nome" => "Ana", "email" => null];
    var_dump(isset($arr["nome"]));
    var_dump(isset($arr["email"]));
}

// empty --> Verifica se uma variável está vazia (false, 0, "", [], null são considerados vazios).
function empty_example() {
    $arr = [];
    var_dump(empty($arr));
    $arr[] = 1;
    var_dump(empty($arr));
}

// count / sizeof --> Retorna o número total de elementos do array. sizeof é um alias de count.
function count_example() {
    $arr = [1, 2, 3, 4, 5];
    echo count($arr) . "\n";
    echo sizeof($arr) . "\n";
}

// in_array --> Verifica se um valor específico existe em qualquer posição do array.
function in_array_example() {
    $arr = ["maçã", "banana", "laranja"];
    var_dump(in_array("banana", $arr));
    var_dump(in_array("uva", $arr));
}

// array_key_first / array_key_last --> Retorna a primeira ou a última chave do array sem modificá-lo.
function array_key_first_last_example() {
    $arr = ["a" => 1, "b" => 2, "c" => 3];
    echo array_key_first($arr) . "\n";
    echo array_key_last($arr) . "\n";
}

// array_is_list --> Verifica se o array é uma lista, ou seja, chaves numéricas sequenciais começando em 0. (PHP 8.1+)
function array_is_list_example() {
    var_dump(array_is_list([1, 2, 3]));
    var_dump(array_is_list(["a" => 1, "b" => 2]));
}
