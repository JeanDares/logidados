<?php
// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Configurações da API Mail
$api_key = "SUA_API_KEY";
$api_url = "https://api.mail.com/send";

// Parâmetros do e-mail
$data = array(
    'api_key' => $api_key,
    'to' => $email,
    'from' => 'seu_email@example.com',
    'subject' => 'Assunto do e-mail',
    'text' => $mensagem
);

// Configuração da requisição POST
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

// Realiza a requisição POST para a API Mail
$context = stream_context_create($options);
$result = file_get_contents($api_url, false, $context);

// Verifica se o e-mail foi enviado com sucesso
if ($result === false) {
    echo "Erro ao enviar o e-mail";
} else {
    echo "E-mail enviado com sucesso!";
}
?>
