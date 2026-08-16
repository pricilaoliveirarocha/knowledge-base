<!-- Controles de fluxos em PHP -->
<!-- Em PHP, o controle de fluxo é feito através de estruturas de decisão e loops. As principais estruturas de controle de fluxo incluem: if, else, elseif, switch, while, do-while, for, foreach -->

<?php


/* ----------------------------------- If ----------------------------------- */
// If-Else: A estrutura if-else permite executar um bloco de código se uma condição for verdadeira e outro bloco se a condição for falsa.
$idade = 20;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

/* --------------------------------- Else if -------------------------------- */
// Elseif: A estrutura elseif permite verificar múltiplas condições.
$nota = 85;
if ($nota >= 90) {
    echo "Você tirou A.";
} elseif ($nota >= 80) {
    echo "Você tirou B.";
} elseif ($nota >= 70) {
    echo "Você tirou C.";
} else {
    echo "Você reprovou.";
}

/* --------------------------------- Switch --------------------------------- */
// Switch: A estrutura switch permite executar diferentes blocos de código com base no valor de uma variável.
$dia = 3;
switch ($dia) {
    case 2:
        echo "Hoje é segunda-feira.";
        break;
    case 3:
        echo "Hoje é terça-feira.";
        break;
    case 4:
        echo "Hoje é quarta-feira.";
        break;
    case 5:
        echo "Hoje é quinta-feira.";
        break;
    case 6:
        echo "Hoje é sexta-feira.";
        break;
    default:
        echo "Fim de semana!";
}

/* ---------------------------------- While --------------------------------- */
// While: A estrutura while executa um bloco de código enquanto uma condição for verdadeira.
$contador = 0;
while ($contador < 5) { // Enquanto o contador for menor que 5, o loop continuará executando.
    echo "Contador: $contador\n";
    $contador++; // Incrementa o contador em 1 a cada iteração.
}

/* -------------------------------- Do-while -------------------------------- */
// Do-While: A estrutura do-while executa um bloco de código pelo menos uma vez e depois verifica a condição.
$contador2 = 0;
do {
    echo "Contador2: $contador2\n";
    $contador2++;
} while ($contador2 < 5); // O loop continuará enquanto o contador2 for menor que 5.

// A diferença entre while e do-while é que o do-while garante que o bloco de código seja executado pelo menos uma vez, mesmo que a condição seja falsa na primeira verificação.

/* ----------------------------------- For ---------------------------------- */
// For: A estrutura for é usada para executar um bloco de código um número específico de vezes.
for ($i = 0; $i < 5; $i++) { // O loop for inicializa a variável $i em 0, verifica se $i é menor que 5 e incrementa $i em 1 a cada iteração.
    echo "For Loop: $i\n";
}
