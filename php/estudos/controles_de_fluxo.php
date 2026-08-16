<?php

declare(strict_types=1);

/*
    Controles de fluxo em PHP

    O controle de fluxo define quais instruções serão executadas e em qual
    ordem. As principais estruturas são: if, else, elseif, switch, while,
    do-while, for, foreach e match.
*/

/* ----------------------------------- If ----------------------------------- */
// O if-else escolhe um bloco de acordo com o resultado de uma condição.
$idade = 20;
if ($idade >= 18) {
    echo 'Você é maior de idade.' . PHP_EOL;
} else {
    echo 'Você é menor de idade.' . PHP_EOL;
}

/* --------------------------------- Else if -------------------------------- */
// O elseif permite verificar condições adicionais em sequência.
$nota = 85;
if ($nota >= 90) {
    echo 'Você tirou A.' . PHP_EOL;
} elseif ($nota >= 80) {
    echo 'Você tirou B.' . PHP_EOL;
} elseif ($nota >= 70) {
    echo 'Você tirou C.' . PHP_EOL;
} else {
    echo 'Você reprovou.' . PHP_EOL;
}

/* --------------------------------- Switch --------------------------------- */
// O switch seleciona um bloco de acordo com o valor informado.
$dia = 3;
switch ($dia) {
    case 1:
        echo 'Hoje é domingo.' . PHP_EOL;
        break;
    case 2:
        echo 'Hoje é segunda-feira.' . PHP_EOL;
        break;
    case 3:
        echo 'Hoje é terça-feira.' . PHP_EOL;
        break;
    case 4:
        echo 'Hoje é quarta-feira.' . PHP_EOL;
        break;
    case 5:
        echo 'Hoje é quinta-feira.' . PHP_EOL;
        break;
    case 6:
        echo 'Hoje é sexta-feira.' . PHP_EOL;
        break;
    case 7:
        echo 'Hoje é sábado.' . PHP_EOL;
        break;
    default:
        echo 'Dia inválido.' . PHP_EOL;
}

/* ---------------------------------- While --------------------------------- */
// O while executa o bloco enquanto a condição for verdadeira.
$contador = 0;
while ($contador < 5) {
    echo "Contador: $contador" . PHP_EOL;
    $contador++;
}

/* -------------------------------- Do-while -------------------------------- */
// O do-while executa o bloco antes de verificar a condição.
$contador2 = 0;
do {
    echo "Contador 2: $contador2" . PHP_EOL;
    $contador2++;
} while ($contador2 < 5);

// Por isso, o do-while executa ao menos uma vez, mesmo com uma condição falsa.

/* ----------------------------------- For ---------------------------------- */
// O for é útil quando início, condição e incremento são conhecidos.
for ($indice = 0; $indice < 5; $indice++) {
    echo "For: $indice" . PHP_EOL;
}

/* --------------------------------- Foreach -------------------------------- */
// O foreach percorre os valores de um array e, opcionalmente, suas chaves.
$linguagens = ['PHP', 'Python', 'JavaScript'];
foreach ($linguagens as $indice => $linguagem) {
    echo "$indice: $linguagem" . PHP_EOL;
}

/* ---------------------------------- Match --------------------------------- */
// O match retorna um valor, não precisa de break e compara com ===.
$cor = 'vermelho';
$mensagem = match ($cor) {
    'vermelho' => 'A cor é vermelha.',
    'azul' => 'A cor é azul.',
    'verde' => 'A cor é verde.',
    default => 'Cor desconhecida.',
};
echo $mensagem . PHP_EOL;
