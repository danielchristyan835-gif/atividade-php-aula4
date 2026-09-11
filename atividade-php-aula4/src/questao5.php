<?php

$nome = readline ("Nome do aluno: ");
$nota1 = (float) readline("Primeira nota: ");
$nota2 = (float) readline("Segunda nota: ");
$nota3 = (float) readline("Terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

$aprovado = ($media >= 7);
$recuperacao = ($media >= 5 && $media < 7);

if ($aprovado){
    $situacao = "Aprovado";
}   elseif ($recuperacao) {
        $situacao = "Recuperação";
    }   else {
            $situacao = "Reprovado";
        }

$mediaFormatada = number_format($media, 2, ',', '.');

echo "Aluno: " . $nome . "\n";
echo "Média: " . $mediaFormatada . "\n";
echo "Situação: " . $situacao . "\n";

?>