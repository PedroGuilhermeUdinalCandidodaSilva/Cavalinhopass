<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="processo_assinatura.css">
    <title>Assinatura Bem sucedida!</title>
</head>
<body>
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
<button onclick="redirecionar()">Clique aqui para retornar para a página Home</button>

<script>
    function redirecionar() {
        window.location.href = "http://localhost/Card%C3%A1pio_games/Home.php"; // Substitua pela URL desejada
    }
</script>
</body>
</html>