<?php

$matricula1 = readline("Digite a primeira matrícula: ");
$matricula2 = readline("Digite a segunda matrícula: ");

if ($matricula1 < $matricula2){
    echo "Comparando com o operador <: " .$matricula1. " vem primeiro.\n";
}   else{
        echo "Comparando com o operador <: " .$matricula2. " vem primeiro.\n";
   }

$resultado_strcmp = strcmp($matricula1, $matricula2);

if ($resultado_strcmp < 0){
    echo "Comparando como texto (strcmp): " .$matricula1. " vem primeiro.\n";
}   else {
        echo "Comparando como texto (strcmp): " .$matricula2. " vem primeiro.\n";
    }
    
    /*Por que os dois resultados são diferentes?:
     1.Comparação com o operador <: Ao contrário de linguagens como C (onde comparar strings com < 
     avalia endereços de memória), o PHP possui um recurso chamado "Type Juggling" (malabarismo de tipos). 
     Quando o PHP encontra duas strings que parecem números sendo comparadas por um operador relacional (<, >, <=, >=), 
     ele converte automaticamente ambas as strings para valores numéricos (inteiros ou floats) antes de testar. 
     Por isso, ele avalia a expressão como o número 10 sendo menor que o número 9 (10 < 9), o que é falso. 
     Dessa forma, o operador < indica que "9" vem primeiro.

     2.Comparação com strcmp(): Esta função realiza uma comparação puramente alfabética/textual 
     (caractere por caractere baseando-se na tabela ASCII). Ao avaliar "10" e "9", ela compara 
     o primeiro caractere de cada string: '1' e '9'. Como '1' vem antes de '9' na tabela ASCII, 
     o strcmp() define que "10" vem primeiro que "9".
    */
?>