<?php

$usuariocerto = "admin";
$senhacerta = "php2026";

$usuariodigitado = readline("Usuário: ");
$senhadigitada = readline("Senha: ");

$usuariovalido = (strcasecmp($usuariodigitado, $usuariocerto) === 0);
$senhavalida = ($senhadigitada === $senhacerta);

$credenciaisvalidas = ($usuariovalido && $senhavalida);

if (!$credenciaisvalidas){
    echo "Usuário ou senha inválidos.";
}   else {
    echo "Bem-vindo, admin!";
    }
?>