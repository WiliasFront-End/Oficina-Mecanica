<?php

    if(isset($_POST['mail']) && !empty($_POST['mail'])){

        $nome = addslashes($_POST['name']);
        $email = addslashes($_POST['mail']);
        $mensagem =addslashes($_POST['message']);


        $to = "wiliass@icloud.com";
        $subject ="Contato - Pagina Oficina";
        $body = "Nome: ".$nome."\n".
                "Email: ".$email."\n".
                "Mensagem: ".$mensagem;
                
        $header = "From:contato@confresadelivery.cf"."\r\n".
                    "Replay-To:".$email."\e\n".
                    "X-Mailer:PHP/".phpversion();

        if(mail($to,$subject,$body,$header)){
            echo("Email enviado com sucesso!");
        }else{
            echo("O E-mail nao pode ser enviado.");
        }

   }


?>