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

    <!-------------INICIO DA CONSTRUÇÃO DO FORMULÁRIO CONTATO------------>
        <section class="contato">

        <div class="cont">
            <h1>FALE CONOSCO</h1>
            <form action="envio.php" method="POST">
                <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
                <br>
                <input type="email" name="email" id="nome" placeholder="Digite o seu email">
                <br>
                <input type="tel" name="telefone" name="telefone" placeholder="Digite se Whatsapp">
                <br>
                <textarea name="comentario" id="comentario" placeholder="Digite seu comentario ou dúvida"></textarea>
                <br>
                <input type="submit" name="enviar" value="ENVIAR">
            </form>
        </div>

        <div class="cont">
            <img src="img/contato.png" alt="Imagem de Contato Mercado Preso">
        </div>


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

</body>
</html>