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

    <!-------------INICIO DA CONSTRUÇÃO DO FORMULÁRIO CADASTRO------------>

    <div class="cadastro">
        <div class="cad" id="cadastro">
            <h1>Cadastro de Clientes</h1>
            <form action="cadastro.php" method="post">
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" autocomplete="off"><br>

                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" autocomplete="off"><br>

                <input type="password" id="senha" name="senha" placeholder="Digite uma senha segura" autocomplete="off"><br>

                <input type="radio" id="feminino" name="sexo" value="F" name="sexo">Feminino

                <input type="radio" id="masculino" name="sexo" value="M" name="sexo">Masculino<br>

                <input type="submit" name="submit" id="b-cadastro" value="CADASTRAR">
            </form>
        </div>

        <div class="cad">
            <img src="img/cliente.png" alt="Mercado Preso">
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

            //header('Location:entrar.php');
            ?>

                <!-- MODAL SUCESSO -->

                <div class="m-conteudo" id="modal-sucesso">
                    <div class="modal">
                        <img src="img/logo.png" alt="Logo Mercado Preso">
                        
                        <h2>Obrigado pelo Cadastro!</h2>
                        
                        <p>Continue visitando e comprando nossos produtos <span>e-mail</span> e estamos tomando
                            as devidas providências.</p>
                        
                        <p>Duvidas Entre em <span>contato.</p>
                        
                        <button onclick="sair()" class="fechar">FECHAR</button>
                    </div>
                </div>
                
            </span>
            <?php
        }

    ?>

    <!-----------------Ativar a página do JAVASCRIPT-------------->
    <script src="js/sucesso.js"></script>

</body>
</html>