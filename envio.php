<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if (isset($_POST['enviar'])) {
    

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'jackson.oqueiroz@gmail.com';                     
            $mail->Password   = 'fdyp ivds qyxz rhdn';                              
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('jackson.oqueiroz@gmail.com', 'Jackson');
            $mail->addAddress('jackson.oqueiroz@gmail.com', 'Jackson');     
            $mail->addReplyTo('jackson.oqueiroz@gmail.com', 'Jackson');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Mensagem Via Site Mercado Preso';

            $body = "Mensagem enviado através do site mercado pago, outra opção para teste:<br>

                    <span>Nome:</span>" . $_POST['nome'] . "<br>
                    E-mail: " . $_POST['email'] . "<br>
                    E-mail: " . $_POST['telefone'] . "<br>
                    Mensagem:<br>" . $_POST['comentario'];
                    

            $mail->Body    = $body;            
            $mail->send();
            //echo 'E-mail Recebido com sucesso!Ufa!';
        } catch (Exception $e) {
            echo "Não Enviou! Ah!: {$mail->ErrorInfo}";
        }

}else{
    echo "Erro ao enviar o email, acesso não foi via formulário!";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Preso</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="m-conteudo" id="modal-sucesso">
        <div class="modal">
            <img src="img/logo.png" alt="Logo Mercado Preso">
            
            <h2>Obrigado pela Mesagem!</h2>
            
            <p>Nossa equipe já recebeu o seu <span>e-mail</span> e estamos tomando
                as devidas providências.</p>
            
            <p>Entraremos em <span>contato</span> em breve.</p>
            
            <button onclick="sair()" class="fechar">FECHAR</button>
        </div>
    </div>
    
    
    <!-----------------Ativar a página do JAVASCRIPT-------------->
    <script src="js/sucesso.js"></script>


</body>
</html>
