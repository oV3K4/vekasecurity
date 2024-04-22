<?php
    $to = "guilhermemeller18@gmail.com";
    $assunto = "Formulário do Site";
    $mensagem = $_POST['mensagem']." - ".$_POST['nome'];
    $email = $_POST['email'];

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';


    $status = mail($to, $assunto, $mensagem);

    if($status==true){
        print "Mensagem enviada com sucesso!"
    }else{
        print "Não foi possível enviar, tente novamente";
    }