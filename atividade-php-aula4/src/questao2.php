<?php

$idade = (int) readline("Digite a sua idade: ");
$acessoliberado = readline("Você possui o ingresso?(s:Sim ou n:Não): ");

if ($idade >= 18 && $acessoliberado == "s"){
    echo "Entrada liberada.";
}   else {
        echo "Acesso negado.";
    }
?>