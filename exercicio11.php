<!-- Desenvolver uma função onde o usuário deve informar um número e a função deve verificar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes. -->
<?php
header('Content-Type: text/html; charset=UTF-8');

function divisivel($numero){
    if($numero % 10 == 0){
        return "O número $numero é divisível por 10.";
    } 
    if($numero % 5 == 0){
        return "O número $numero é divisível por 5.";
    }if($numero % 2 == 0){
        return "O número $numero é divisível por 2.";
    } 
    if($numero % 10 != 0 && $numero % 5 != 0 && $numero % 2 != 0){
        return "O número $numero não é divisível por 10, 5 ou 2.";
    }

}
echo divisivel(33);
?> 