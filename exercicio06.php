<!-- 6.Crie uma função que receba o valor de uma compra e aplique descontos conforme a regra: 
    acima de R$ 100,00 recebe 10%; 
    acima de R$ 300,00 recebe 15%;
  acima de R$ 500,00 recebe 20%. -->
  <?php
  header('Content-Type: text/html; charset=UTF-8');
function calcularDesconto($valor) {
    $desconto = 0;

    if ($valor > 500) {
        $desconto = 0.20;
    } elseif ($valor > 300) {
        $desconto = 0.15;
    } elseif ($valor > 100) {
        $desconto = 0.10;
    }

    $valorFinal = $valor - ($valor * $desconto);

    return $valorFinal;
}

// Exemplo de uso
$compra = 560;
$resultado = calcularDesconto($compra);

echo "Valor original: R$ " . $compra . "<br>";
echo "Valor com desconto: R$ " . $resultado;
?>