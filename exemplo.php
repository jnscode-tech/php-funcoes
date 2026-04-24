<?php

//funcao para mensagem
function mensagem(){
    echo"Seja bem-vindo ao meu aplicativo.";
}

//funcao para monstrar o nome
function comParamento($nome){
    echo "Seja bem vindo $nome";
}
//funcao soma
function soma($valor1, $valor2){
return $valor1 + $valor2;
} 

// funcao hora atual
function horaAtual(){
    date_default_timezone_set("America/Sao_Paulo");// define o fuso horário para São Paulo
    return date("H:i:s");
}


$resultado = soma(10, 5);
echo $resultado;
echo "<br>";
echo "<br>";

echo horaAtual();
echo "<br>";
echo "<br>";

 mensagem();
 echo "<br>";
 mensagem();
 echo "<br>";
 mensagem();
 echo "<br>";
 mensagem();
 echo "<br>";
 mensagem();
 echo "<br>";
 mensagem();
 echo "<br>";


comParamento("Juliana");
echo "<br>";
?>