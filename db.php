<?php
$servername = "localhost";
$username = "root"; // ou outro usuário, dependendo da sua configuração do XAMPP
$password = ""; // Se estiver sem senha, deixa vazio
$dbname = "zanella_car"; // Nome do seu banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
