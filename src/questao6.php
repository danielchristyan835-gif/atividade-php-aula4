<?php

$entrada = readline ("Digite uma nota: ");

if (!is_numeric($entrada) || $entrada < 0 || $entrada > 10){
    echo "Nota inválida. Digite um número entre 0 e 10.\n";
}   else {
        $nota = (float) $entrada;
        echo ("\nNota registrada: " .$nota. "\n");
    }
?>    