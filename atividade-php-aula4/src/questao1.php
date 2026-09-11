<?php

$num1 = (int) readline("Digite o primeiro número: ");
$num2 = (int) readline("Digite o segundo número: ");

if ($num1 > $num2) {
    echo "O primeiro número é maior.";
}   elseif ($num1 < $num2) {
        echo "O segundo número é maior.";
    }   else {
            echo "Os dois números são iguais.";
        }
?>    