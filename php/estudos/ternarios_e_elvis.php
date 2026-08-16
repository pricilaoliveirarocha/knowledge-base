<?php
/* Ternários em PHP e Elvis 
    Os ternários são uma forma concisa de escrever expressões condicionais. Eles seguem a sintaxe:
    condição ? expressão_se_verdadeiro : expressão_se_falso;

    O operador Elvis é uma forma abreviada do ternário quando queremos retornar um valor padrão caso a expressão seja falsa:
    expressão ?: valor_padrao;
*/

// Ternário simples
$idade = 20;
$mensagem = ($idade >= 18) ? "Você é maior de idade." : "Você é menor de idade.";
echo $mensagem;

// Ternário aninhado
$nota = 85;
$mensagemNota = ($nota >= 90) ? "Você tirou A." : (($nota >= 80) ? "Você tirou B." : (($nota >= 70) ? "Você tirou C." : "Você reprovou."));
echo $mensagemNota;

// Operador Elvis (?:)
$nome = null;
$nomeUsuario = $nome ?: "Usuário anônimo";
echo $nomeUsuario;
