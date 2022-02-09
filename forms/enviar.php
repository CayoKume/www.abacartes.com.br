<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $email_from = 'contato@abacartes.com.br';
    $email_subject = 'orçamento';
    $email_body =   "Nome: {$nome}.\n".
                    "Email: {$email}.\n".
                    "Mensagem: {$mensagem}.\n".
                    "Data/Hora: {$data}.\n".;
    $to = "cayokume@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("location: ../index.html");
/*
$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não Informado';
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : 'Não Informado';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'Não Informado';
$data = date('d/m/Y H:i:s');
echo 'Email não enviado: Favor informar campos obrigatórios!';

if($nome && $email && $assunto && $mensagem ){
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cayokume@gmail.com';
    $mail->Password = 'cttyk1622@#$';
    $mail->Port = 587;
    
    $mail->setFrom('cayokume@gmail.com');
    $mail->addAddress('cayokume@gmail.com');
    
    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body =   "Nome: {$nome}<br>
                     Email: {$email}<br>
                     Mensagem: {$mensagem}<br>
                     Data/Hora: {$data}";
    
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
}else{
    echo 'Email não enviado: Favor informar campos obrigatórios!';
}*/
?>