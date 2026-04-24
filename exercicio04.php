<!-- 4.Crie uma função que receba três números como parâmetros e retorne o maior valor entre eles. -->
<?php
header('Content-Type: text/html; charset=UTF-8');

//funcao MaiorValor
function MaiorValor($valor1, $valor2, $valor3){
    $maior = $valor1; // Assume o primeiro valor como o maior inicialmente
    
    if($valor2 > $maior){
        $maior = $valor2; // Atualiza o maior se o segundo valor for maior
    }
    else if($valor3 > $maior){
        $maior = $valor3; // Atualiza o maior se o terceiro valor for maior
    }
    return "O maior valor entre ".$valor1 ." - ".$valor2 ." - ".$valor3."  é: ".$maior; 

} 
$resultado = MaiorValor(10,3,7);
echo $resultado;

?>


