<!-- 9.Crie uma função que receba uma senha e verifique se ela atende aos critérios:

mínimo 8 caracteres
possui número
possui letra maiúscula -->
<?php
header('Content-Type: text/html; charset=UTF-8');

function validarSenha($senha){
    
    // verifica tamanho mínimo
    if(strlen($senha) < 8){
        return "Senha inválida: deve ter no mínimo 8 caracteres.";
    }

    // verifica se tem número
    if(!preg_match('/[0-9]/', $senha)){
        return "Senha inválida: deve conter pelo menos um número.";
    }

    // verifica se tem letra maiúscula
    if(!preg_match('/[A-Z]/', $senha)){
        return "Senha inválida: deve conter pelo menos uma letra maiúscula.";
    }

    return "Senha válida!";
}
// strlen($senha) → conta os caracteres
// preg_match('/[0-9]/', $senha) → verifica se tem número
// preg_match('/[A-Z]/', $senha) → verifica se tem letra maiúscula

echo validarSenha("Juju789#A");
?>