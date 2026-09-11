<?php

$nome = readline ("Digite o nome do cliente: \n");
$idade = readline ("Digite a idade do cliente: \n");
$rendamensal = readline ("Digite a renda mensal do cliente: \n");
$tempo_de_emprego = readline ("Digite o tempo de emprego (meses): ");
$nomeStatus = readline ("Está negativado? (s/n): ");

$idadePermitida = ($idade >= 18 && $idade <= 65);
if ($idadePermitida){
    echo "Idade permitida: Atendida.\n";
}   else{
        echo "Idade permitida: Não atendida.\n";
}

$rendaOuEstabilidade = ($rendamensal >= 2.000 || $tempo_de_emprego >= 24);
if ($rendaOuEstabilidade){
    echo "Renda ou estabilidade: Atendida.\n";
}   else {
        echo "Renda ou estabilidade: Não atendida.\n";    
    }

$estaNegativado = ($nomeStatus == "s" || $nomeStatus == "S");
if ($estaNegativado){
    echo "Nome limpo: Não atendida.\n";
}   else {
        echo "Nome limpo: Atendida.\n";
    }

$resultado = ($idadePermitida && ($rendaOuEstabilidade) && (!$estaNegativado));
if ($resultado){
    echo "Resultado: Crédito aprovado para " .$nome. ".\n";
}   else {
        echo "Resultado: Crédito negado para " .$nome. ".\n";
}
?>