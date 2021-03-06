<?php

    require './lib/PHPMailer/Exception.php';
    require './lib/PHPMailer/OAuth.php';
    require './lib/PHPMailer/PHPMailer.php';
    require './lib/PHPMailer/POP3.php';
    require './lib/PHPMailer/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    //print_r($_POST);

    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        public $status = array('id_status' => null, 'desc_status' => '');

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }
            
            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);
    
    if(!$mensagem->mensagemValida()){
        echo 'Mensagem não é válida';
        header('Location: index.php');
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'littocraft@gmail.com';                     //SMTP username
        $mail->Password   = 'Lealbrlo@0147';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('littocraft@gmail.com', 'Leonardo Alves');
        $mail->addAddress($mensagem->__get('para'));     //Add a recipient
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $mensagem->__get('assunto');
        $mail->Body    = $mensagem->__get('mensagem');
        $mail->AltBody = 'Para ver o conteúdo total, é necessário ter algo que suporte o HTML';
    
        $mail->send();
        $mensagem->status['id_status'] = 1;
        $mensagem->status['desc_status'] = 'E-mail enviado com sucesso!';

    } catch (Exception $e) {
        $mensagem->status['id_status'] = 2;
        $mensagem->status['desc_status'] = 'Não foi possível enviar este e-mail! Por favor tente mais tarde. Detalhes do erro: {$mail->ErrorInfo}';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>App Mail Send</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="py-3 text-center">
            <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
            <h2>Send Mail</h2>
            <p class="lead">Seu app de envio de e-mails particular!</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            
            <? if($mensagem->status['id_status'] == 1): ?>
             
             <div class="container">
                 <h1 class="display-4 text-success">Sucesso!</h1>
                 <p><?= $mensagem->status['desc_status'] ?></p>
                 <a href="index.php" class="btn btn-secondary btn-lg mt-5 text-white">Voltar</a>
             </div>

            <? endif ?>

            <? if($mensagem->status['id_status'] == 2): ?>

                <div class="container">
                    <h1 class="display-4 text-danger">Ops!</h1>
                    <p><?= $mensagem->status['desc_status'] ?></p>
                    <a href="index.php" class="btn btn-secondary btn-lg mt-5 text-white">Voltar</a>

                </div>

            <? endif ?>

        </div>
    </div>
</body>
</html>