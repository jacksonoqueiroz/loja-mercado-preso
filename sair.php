<?php
//Criar Sessão
session_start();

//Destruir as Variaveis de sessão
unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);
//Direcionamento para home
header('Location: index.html');

?>