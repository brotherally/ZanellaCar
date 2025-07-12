<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Simulação do envio de e-mail (apenas um exemplo, é necessário configurar o servidor de e-mails)
    echo "Nome: $nome<br>";
    echo "E-mail: $email<br>";
    echo "Mensagem: $mensagem<br>";

    // Aqui você pode configurar o envio de e-mail real com a função mail() ou integração com uma API de envio de e-mails
}
?>
