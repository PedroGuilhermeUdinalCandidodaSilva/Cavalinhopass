<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // Redireciona para a página de login se não estiver logado
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalogo_games";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$plano = $_POST['plano'];

$sql = "UPDATE usuarios SET plano = '$plano' WHERE id = $user_id";

if ($conn->query($sql) === TRUE) {
    echo "Assinatura realizada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
