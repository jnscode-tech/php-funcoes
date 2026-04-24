<!-- 7.Crie uma função que receba nome e sobrenome e gere um login no formato:
primeironome.sobrenome -->
<?php
  header('Content-Type: text/html; charset=UTF-8');
function gerarLogin($nome, $sobrenome){
    $nome = strtolower(trim($nome)); //strlower = Converte todas as letras para minúsculas.
    $sobrenome = strtolower(trim($sobrenome));

    // remover acentos
    //iconv = para converter a codificação do texto e “remover” acentos/caracteres especiais.
    //translit = tenta substituir caracteres especiais por equivalentes simples
    $nome = iconv('UTF-8', 'ASCII//TRANSLIT', $nome);
    $sobrenome = iconv('UTF-8', 'ASCII//TRANSLIT', $sobrenome);

    return $nome . "." . $sobrenome;
}


echo gerarLogin("Juliana", "Santos"); 
?>