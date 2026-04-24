<!-- 3.Crie uma função que receba um número inteiro e retorne se ele é par ou ímpar. -->
<?php
header('Content-Type: text/html; charset=UTF-8');

//funcao ParOuImpar
function ParOuImpar($valor){
    if($valor % 2 == 0){
        return "O número $valor é PAR.";
    } else {
        return "O número $valor é ÍMPAR.";
    }

} 
$resultado = ParOuImpar(10);
echo $resultado;

?>


