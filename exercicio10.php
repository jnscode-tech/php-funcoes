<!-- 10. Crie uma função em PHP chamada gerarToken() que gere um token aleatório para ser utilizado em sistemas de login, recuperação de senha ou confirmação de cadastro.
A função deve:

gerar uma sequência aleatória de caracteres;
permitir definir o tamanho do token;
retornar o token gerado;
exibir o token na tela.
Ex.: A7x9Kp2LmQ
 -->

 <?php
header('Content-Type: text/html; charset=UTF-8');

function gerarToken($tamanho = 10){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $token = '';

    for($i = 0; $i < $tamanho; $i++){
        $indice = random_int(0, strlen($caracteres) - 1);
        $token .= $caracteres[$indice];
    }

    return $token;
}
// Permite definir o tamanho ($tamanho)
// Usa random_int() → mais seguro que rand()
// Retorna o token e exibe na tela

// Exibir o token
echo "Token gerado: " . gerarToken(10);
?>