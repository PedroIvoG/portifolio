<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Configurações do email
    $to = "pedro_ivo_gomes@hotmail.com"; // Substitua pelo seu email
    $subject = "Novo Contato de $nome";
    $message = "Nome: $nome\nEmail: $email";
    $headers = "From: $email";

    // Enviando email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>