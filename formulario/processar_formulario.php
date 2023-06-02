<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    // Configurações do email
    $to = "jeanborgesdares@gmail.com"; // Coloque aqui o endereço de email para o qual deseja enviar as mensagens
    $subject = "Novo contato pelo formulário do site";
    $message = "Nome: " . $name . "\n\n";
    $message .= "Email: " . $email . "\n\n";
    $message .= "Mensagem: " . $mensagem;
    $headers = "From: " . $email;
    
    // Envia o email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o email.";
    }
}
?>

