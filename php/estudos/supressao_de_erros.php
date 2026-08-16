<?php

declare(strict_types=1); // Define que o PHP deve usar tipagem estrita, evitando conversões automáticas de tipos para fins de teste.

/*
    Verificações essenciais no dia a dia

    Evitar um erro significa validar os dados antes de usá-los ou tratar uma
    falha esperada. O operador @ apenas esconde a mensagem e, por isso, deve ser
    evitado. Nem toda verificação é obrigatória em todo código: use as que
    protegem as entradas e operações realizadas naquele contexto.
*/

/* -------------------------- Null e valor padrão -------------------------- */
// O operador ?? retorna o valor à esquerda se ele não for null; caso contrário, retorna o valor à direita.
$nomeInformado = null;
$nome = $nomeInformado ?? 'Visitante';
echo "Nome: $nome" . PHP_EOL;

// Use === null quando precisar distinguir null de 0, false ou string vazia.
if ($nomeInformado === null) {
    echo 'O nome não foi informado.' . PHP_EOL;
}

/* ----------------------- Variáveis e chaves de array --------------------- */
// Evite "Undefined variable" e "Undefined array key" verificando se a variável existe antes de usá-la.
$usuario = [
    'nome' => 'Pricila',
    'email' => null,
];

// isset() retorna false quando a chave não existe ou quando seu valor é null.
if (isset($usuario['nome'])) {
    echo 'Usuário: ' . $usuario['nome'] . PHP_EOL;
}

// array_key_exists() confirma a existência da chave, mesmo com valor null.
if (array_key_exists('email', $usuario)) {
    echo 'A chave email existe.' . PHP_EOL;
}

// ?? evita "Undefined array key" e fornece um valor padrão.
$cidade = $usuario['cidade'] ?? 'Cidade não informada';
echo $cidade . PHP_EOL;

/* ------------------------ Tipo e conteúdo do array ----------------------- */
// Evite warnings e erros inesperados verificando se a variável é um array e se não está vazio antes de percorrê-lo.

$dados = ['PHP', 'Laravel'];

if (is_array($dados) && $dados !== []) {
    foreach ($dados as $item) {
        if (is_string($item)) {
            echo $item . PHP_EOL;
        }
    }
}

/* -------------------------- Entrada do usuário --------------------------- */
// Valide dados recebidos de formulários, APIs ou qualquer fonte externa.

$idadeRecebida = '25';
$idade = filter_var($idadeRecebida, FILTER_VALIDATE_INT);

if ($idade === false || $idade < 0) {
    echo 'Idade inválida.' . PHP_EOL;
} else {
    echo "Idade válida: $idade" . PHP_EOL;
}

$emailRecebido = 'pricila@example.com';
if (filter_var($emailRecebido, FILTER_VALIDATE_EMAIL) === false) {
    echo 'E-mail inválido.' . PHP_EOL;
} else {
    echo 'E-mail válido.' . PHP_EOL;
}

/* ----------------------------- Operações -------------------------------- */
// Evite warnings e erros inesperados verificando condições antes de operações que podem falhar.
$dividendo = 10;
$divisor = 0;

if ($divisor === 0) {
    echo 'Não é possível dividir por zero.' . PHP_EOL;
} else {
    echo 'Resultado: ' . ($dividendo / $divisor) . PHP_EOL;
}

/* ------------------------------- Arquivos -------------------------------- */
// Verificar se o arquivo existe e se é legível antes de tentar lê-lo. Isso evita warnings e erros inesperados.
$caminho = __DIR__ . '/arquivo_inexistente.txt';

if (!is_file($caminho) || !is_readable($caminho)) {
    echo 'O arquivo não existe ou não pode ser lido.' . PHP_EOL;
} else {
    $conteudo = file_get_contents($caminho);

    if ($conteudo === false) {
        echo 'Não foi possível ler o arquivo.' . PHP_EOL;
    } else {
        echo $conteudo . PHP_EOL;
    }
}

/* ------------------------------- Exceções -------------------------------- */
JsonException::class; // Para lançar exceções em json_decode() e json_encode().
$json = '{"nome":"Pricila"}';

try {
    $dadosJson = json_decode($json, true, flags: JSON_THROW_ON_ERROR);
    echo 'Nome no JSON: ' . ($dadosJson['nome'] ?? 'Não informado') . PHP_EOL;
} catch (JsonException $excecao) {
    // Em uma aplicação real, registre os detalhes e mostre uma mensagem segura.
    error_log($excecao->getMessage());
    echo 'O JSON recebido é inválido.' . PHP_EOL;
}

/* -------------------------------- Throwable -------------------------------- */
// O Throwable é a interface base para todos os erros e exceções em PHP. Ela permite capturar tanto erros quanto exceções, oferecendo uma abordagem unificada para tratamento de falhas.

try {
    // Código que pode lançar uma exceção ou erro
} catch (Throwable $falha) {
    // Em uma aplicação real, registre os detalhes e mostre uma mensagem segura.
    error_log($falha->getMessage());
    echo 'Ocorreu uma falha.' . PHP_EOL;
}


/* -------------------------- Resumo para o dia a dia ----------------------- */
// 1. Valide dados externos antes de usá-los.
// 2. Use ?? para valores padrão e === null para verificar null explicitamente.
// 3. Verifique chaves com isset() ou array_key_exists(), conforme a intenção.
// 4. Confira retornos que podem ser false, como file_get_contents().
// 5. Use try-catch em operações que lançam exceções recuperáveis.
// 6. Não use @ para esconder erros.
