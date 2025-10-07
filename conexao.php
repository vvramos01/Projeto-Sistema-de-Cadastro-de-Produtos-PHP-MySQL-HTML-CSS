<?php
$host = "localhost";
$user = "root";
$password = "sua_senha"; // troque pela sua senha
$dbname = "sistema_produtos";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
