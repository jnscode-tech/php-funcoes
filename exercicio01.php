<!-- 1.Crie uma função em PHP que receba um nome como parâmetro e exiba uma mensagem de saudação personalizada.-->
<?php
header('Content-Type: text/html; charset=UTF-8');

function saudacao($nome) {
    return "Olá, ". $nome. "!Seja bem-vindo(a) ao nosso site!";
}
echo saudacao("Juju");
?>

