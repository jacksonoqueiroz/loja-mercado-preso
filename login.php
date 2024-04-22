<?php

session_start(); //Inicia a sessão

//VERIFICAR SE HOUVE UMA AÇÃO DENTRO DA PÁGINA ENTRAR.PHP

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //O CAMPO NÃO ESTÁ VAZIO
    //CONECTAR COM O BANCO DE DADOS

    include_once('conectar.php');

    //Variaveis de armazenamento
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Verifica a tabela do Banco de dados
    $sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' AND 
    senha_cliente = '$senha' ";

    $verificar = $conexao -> query($sql);

    //Verificar se o registro é válido
    if(mysqli_num_rows($verificar) < 1)
    {
        //Destruir as Variveis
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente']);
        header('Location: entrar.php');
    }
    else{
        //Criar as variáveis da sessão
        $_SESSION['email_cliente'] = $email;
        $_SESSION['senha_cliente'] = $senha;

        header('Location:usuario.php');
    }
}
else{
    //O CAMPO ESTÁ VAZIO
    header('Location: entrar.php');
}

?>