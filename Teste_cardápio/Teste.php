<?php
session_start(); // Inicia a sessão

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalogo_games";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta para verificar o usuário
$sql = "SELECT * FROM usuarios WHERE username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verifica a senha
    if (password_verify($pass, $row['password'])) {
        // Se a senha está correta, salva o ID do usuário na sessão
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        echo "Login realizado com sucesso!";
        header("Location: assinatura.php"); // Redireciona para a página de assinatura
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>
