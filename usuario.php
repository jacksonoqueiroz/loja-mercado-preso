<!---------Configuração do PHP------>
<?php
//INICIAR A SESSÃO
session_start();

if((!isset($_SESSION['email_cliente'])==true) AND (!isset($_SESSION['senha_cliente'])==true))
{
    //Destruir as Vaviaveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location: entrar.php');
}
else{
    //Criar uma variavel de acesso
    $logado = $_SESSION['email_cliente'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Preso Brasil</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo Mercado Preso">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="celular.html">CELULARES</a></li>
                <li><a href="roupa.html">ROUPAS</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
    </header>

    <!-------------INICIO DA CONSTRUÇÃO DA SESSÃO DO USUÁRIO ------------>
    
    <section class="barra_top">
        <div class="barra">
            <h1>Área do Usuário</h1>
        </div>
        
        <div class="barra">
            <a href="sair.php">SAIR</a>
        </div>
    </section>

    <section class="usuario">
        <?php
            echo "<h2>Olá, $logado</h2>";
        ?>
        <p>Seja Bem Vindo ao Mercado Preso!</p>
    </section>
    

    <!-----------------------INSERIR DADOS DO RODAPÉ----------------------->
    <footer>
        <div class="rodape">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="roupas.html">ROUPAS</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
            </ul>
        </div>

        <div class="rodape">
            <p>Rua da Feliciade, 13 - Bairro Alegria</p>
            <p>Cidade da Paz - Paz - 01234-567</p>
        </div>

        <div class="rodape">
            <p>Siga as nossas Rede Sociais</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook Mercado Preso"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram Merdado Preso"></a>
            <a href="#"><img src="img/youtube.png" alt="Youtube Mercado Preso"></a>
        </div>

    </footer>
    
    <!--Configurações do Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/cycle.js"></script>

    <!-------------Configurações do PHP ------------------------------------------------->
    <?php

        if(isset($_POST['submit'])){
            
            include_once('conectar.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sexo = $_POST['sexo'];

            $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, 
            email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome', '$email', '$senha', '$sexo')");
        }

    ?>


</body>
</html>