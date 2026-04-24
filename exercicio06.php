<!-- 6.Crie uma função que receba o valor de uma compra e aplique descontos conforme a regra: acima de R$ 100,00 recebe 10%; -->
<?php
header('Content-Type: text/html; charset=UTF-8');

function aplicarDesconto($valorCompra){
    if($valorCompra > 100){
        $desconto = $valorCompra * 0.10; // Calcula o desconto de 10%
        $valorFinal = $valorCompra - $desconto; // Aplica o desconto ao valor da compra
        return "O valor final com desconto é: R$ " . number_format($valorFinal, 2, ',', '.');
    } else {
        return "O valor da compra é: R$ " . number_format($valorCompra, 2, ',', '.');
    }
}
// Exemplo de uso
echo aplicarDesconto(120);
?>