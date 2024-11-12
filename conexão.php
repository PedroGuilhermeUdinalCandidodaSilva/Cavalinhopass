<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Conexão.css">
    <title>Redirecionamento com Botão</title>
</head>
<body>


<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalogo_games";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$user = $_POST['username'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash da senha para segurança

// Verifica se o usuário já existe
$sql_check = "SELECT * FROM usuarios WHERE username = '$user'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "Usuário já existe. Tente outro nome de usuário.";
} else {
    // Insere o novo usuário no banco de dados
    $sql_insert = "INSERT INTO usuarios (username, password) VALUES ('$user', '$pass')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro: " . $sql_insert . "<br>" . $conn->error;
    }
}

// Fecha a conexão
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