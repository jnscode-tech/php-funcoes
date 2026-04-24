<!--2.Crie uma função que receba dois números como parâmetros, realize a soma e retorne o resultado. -->
<?php
header('Content-Type: text/html; charset=UTF-8');

//funcao soma
function soma($valor1, $valor2){
return $valor1 + $valor2;
} 
$resultado = soma(10, 5);
echo "O valor da soma é: " .$resultado;

?>
