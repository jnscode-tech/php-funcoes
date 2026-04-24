<!-- 5.Crie uma função que receba uma string e retorne essa string invertida, sem utilizar funções prontas do PHP para inversão. -->

<?php
header('Content-Type: text/html; charset=UTF-8');
function inverterString($texto) {
    $invertida = "";

    // percorre a string de trás para frente
    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $invertida .= $texto[$i];
    }

    return $invertida;
}

// Exemplo de uso
echo inverterString("Juliana"); 
?>

