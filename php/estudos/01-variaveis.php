<?php
/* ------------------------ Tipos de dados em PHP 8.5 ----------------------- */

declare(strict_types=1); // Modo de tipagem estrita
eol('Variáveis');

// string
$nome = 'Pricila';

// int
$idade = 25;

// float
$salario = 999999.90;

// booleano
$ativa = true;

// null
$telefone = null;

// array
$habilidades = [
    'PHP',
    'Laravel',
    'MySQL',
];

$arrayGrupos = [
    ['idGrupo' => 1, 'nome' => 'Financeiro'],
    ['idGrupo' => 2, 'nome' => 'TI'],
];

$usuario = new stdClass();   // Objeto
$usuario->nome = $nome;
$usuario->idade = $idade;
/* ------------------------- Variáveis e declarações ------------------------ */
// PHP_EOL => End Of Line
echo get_debug_type($nome) . ' -> ' . $nome . PHP_EOL;
echo get_debug_type($idade) . ' -> ' . $idade . PHP_EOL;
echo get_debug_type($salario) . ' -> ' . $salario . PHP_EOL;
echo get_debug_type($ativa) . ' -> ' . ($ativa ? 'true' : 'false') . PHP_EOL;
echo get_debug_type($telefone) . ' -> ' . ($telefone ?? 'null') . PHP_EOL;
echo get_debug_type($habilidades) . ' -> ' . json_encode($habilidades, JSON_UNESCAPED_UNICODE) . PHP_EOL;
echo get_debug_type($usuario) . ' -> ' . json_encode($usuario, JSON_UNESCAPED_UNICODE) . PHP_EOL;

/* ------------------------------ & Referencial ----------------------------- */
/* Em PHP, o & antes de uma variável indica referência. 
Referência significa que duas variáveis passam a apontar para o mesmo valor na memória lógica do PHP. 
Então, ao alterar uma, você altera a variável principal também. A documentação oficial define isso como passagem/uso por referência, permitindo que uma função ou variável modifique o mesmo conteúdo referenciado.
*/

// Atribuição por referência
$nome = 'Pricila';
$apelido = &$nome;
$apelido = 'Pri';
echo $nome; // Pri

// Parâmetro por referência
/* O &$numero indica que o parâmetro será recebido por referência.
Ou seja, a função não trabalha com uma cópia de $idade. Ela trabalha diretamente com a variável original. Por isso, depois da função, $idade vira 26.
*/
function incrementar(int &$numero): void {
    $numero++;
}
$idade = 25;
incrementar($idade);
echo $idade; // 26

eol('Referências');

// Foreach por referência
/* código percorre o array por referência, ou seja, a variável $valor aponta diretamente para cada item real dentro de $valores.
O &$valor significa que $valor não é uma cópia do item. Ele é uma referência direta para o item do array.
*/
$valores = [10, 20, 30];

foreach ($valores as &$valor) {
    $valor *= 2;
}
unset($valor);
print_r($valores);


function eol(string $v) {
    echo PHP_EOL . PHP_EOL . "------------------------------{$v}-------------------------------" . PHP_EOL;
}
