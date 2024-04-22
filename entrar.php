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

    <!-------------INICIO DA CONSTRUÇÃO DO FORMULÁRIO ENTRAR------------>

    <div class="login">
        <div class="logar">
            <h1>LOGIN</h1>
            <form action="login.php" method="post">
                <input type="email" name="email" id="email_usuario" placeholder="Digite seu e-mail">
                <br>
                <input type="password" name="senha" id="senha_usuario" placeholder="Digite sua senha">
                <br>
                <input type="submit" name="submit" id="btn_logar" value="ENTRAR">
            </form>
        </div>

        <div class="logar" id="logar1">
            <h3 id="id_hoje">TÊNIS ADIDAS</h3>
            <p id="p_hoje">R$ 234,99</p>
            <img src="img/adidas.png" alt="Tênis Adidas">
            <a href="#">COMPRAR</a>
        </div>
    </div>


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


</body>
</html>