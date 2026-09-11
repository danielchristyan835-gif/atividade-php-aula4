<?php

$entrada = readline("Digite um valor: ");

$comparacaoSimples = ($entrada == 10) ? "true" : "false";
$comparacaoEstrita = ($entrada === 10) ? "true" : "false";

echo "Comparação com == : " . $comparacaoSimples . "\n";
echo "Comparação com ===: " . $comparacaoEstrita . "\n";
echo "Tipo da variável: " . gettype($entrada) . "\n";

/*
EXPLICAÇÃO DO RESULTADO (Ao digitar 10):
Os resultados são diferentes porque a função fgets() lê a entrada do terminal sempre como uma STRING. 
- O operador de igualdade simples (==) faz uma conversão automática de tipos (type juggling) antes de comparar. Ele converte a string "10" no número 10, resultando em 'true'.
- O operador de igualdade estrita (===) não faz conversão de tipos. Ele exige que o valor E o tipo sejam idênticos. Como estamos comparando uma STRING ("10") com um INTEIRO (10), o resultado é 'false'.
*/
?>