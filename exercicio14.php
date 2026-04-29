<!-- Desenvolva uma função calcularIMC($peso, $altura) que receba o peso (kg) e a altura (m). 
 A função deve calcular e retornar o valor do IMC (IMC= Peso/altura). 
 Use a função para exibir o resultado de uma pessoa com 80KG e 1.80m. -->
 <?php
header('Content-Type: text/html; charset=UTF-8');

function calcularIMC($peso, $altura){

  // Fórmula do IMC
    $imc = $peso / ($altura * $altura);
    return number_format($imc, 2);
}
$peso = 80;
$altura = 1.80; 
echo "O peso de ".$peso ." kg" ." e a altura de " .number_format($altura, 2)."m"." dá o IMC de: " .calcularIMC(80, 1.80);
?>

