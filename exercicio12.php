<!-- Desenvolver uma função que leia 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados. -->
<?php
header('Content-Type: text/html; charset=UTF-8');

function classificarTriangulo($valor1, $valor2, $valor3){

    // Verifica se os lados formam um triângulo
    if ($valor1 + $valor2 > $valor3 && $valor1 + $valor3 > $valor2 && $valor2 + $valor3 > $valor1) {

        // Equilátero
        if ($valor1 == $valor2 && $valor2 == $valor3) {
            return "Os valores:  ". $valor1 ." - ".$valor2 ." - ". $valor3 . " são iguais, portanto o triângulo é EQUILÁTERO.";

        // Isósceles
        } elseif ($valor1 == $valor2 || $valor1 == $valor3 || $valor2 == $valor3) { 
            return "Dos valores digitados:   ". $valor1 ." - ".$valor2 ." - ". $valor3 . " dois são iguais, portanto o triângulo é ISÓSCELES.";

        // Escaleno
        } else {
            return "Dos valores digitados:   ". $valor1 ." - ".$valor2 ." - ". $valor3 . "os 3 são diferentes, portanto o Triângulo é ESCALENO.";
        }

    } else {
        return $valor1 ." - ".$valor2 ." - ". $valor3 . " Os valores informados não formam um triângulo.";
    }
}

echo classificarTriangulo(9, 98, 300);
?>