<!-- Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. 
 Sabendo-se que este perde 25% de sua massa a cada 30 segundos, 
 criar uma função que imprima o tempo necessário para que a massa desse material seja menor que 0.10. -->

<?php
header('Content-Type: text/html; charset=UTF-8');

function calcularTempo($massaInicial){

    $tempo = 0;
    $massa = $massaInicial;

    // Enquanto a massa for maior ou igual a 0.10
    while($massa >= 0.10){

        // Perde 25% da massa
        $massa = $massa * 0.75;

        // Soma 30 segundos
        $tempo += 30;
    }

    return "Massa Inicial:  $massaInicial Tempo necessário: $tempo segundos. Massa final: " . number_format($massa, 3);
}

// Exemplo
echo calcularTempo(100);
?>