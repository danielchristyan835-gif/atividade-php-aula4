<?php

$idade = readline("Digite a idade do atleta: ");

if ($idade< 7) {
    echo "Idade não permitida para inscrição.";
}   elseif ($idade >= 7 && $idade <= 11) {
        echo "Categoria: Infantil.";
    }   elseif ($idade >= 12 && $idade <= 16) {
            echo "Categoria: Juvenil.";
        }   elseif ($idade >= 17 && $idade <= 59) {
                 echo "Categoria: Adulto.";
            }   else {
                    echo "Categoria: Master.";
                }
?>