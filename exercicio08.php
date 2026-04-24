<!-- 
Crie uma função que receba o valor de um produto e retorne o valor do frete:
até R$100 → R$20
até R$300 → R$15
acima disso → frete grátis -->
<?php
header('Content-Type: text/html; charset=UTF-8');

function calculoFrete($valor){
    $frete = 0;

    if($valor <= 100){
        $frete = 20;
    } elseif($valor <= 300){
        $frete = 15;
    } else {
        $frete = 0; 
    }

    $total = $valor + $frete;

    return "O valor do produto é: R$".$valor."<br>".
           "O valor do frete é: R$".$frete."<br>".
           "Total a pagar é: R$".$total;
}

echo calculoFrete(450);
?>