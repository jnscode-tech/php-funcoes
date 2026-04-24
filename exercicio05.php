<!-- 5.Crie uma função que receba uma string e retorne essa string invertida, sem utilizar funções prontas do PHP para inversão. -->

<?php
header('Content-Type: text/html; charset=UTF-8');

function inverterTexto($texto) {
    return implode('', array_reverse(mb_str_split($texto)));
}
// mb_str_split($texto) = Divide a string em um array de letras
// array_reverse(...) = Inverte a ordem dos elementos do array
//implode('', ...) = Junta os elementos do array em uma string - '' significa: sem separador

echo inverterTexto("R O M A"); 
?>

