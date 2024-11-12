<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: http://localhost/Card%C3%A1pio_games/Entrar.php"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assinatura</title>
  <link rel="stylesheet" href="Assinatura.css">
</head>
<body>
  <div class="assinatura-container">
    <h2>Assinatura de Serviço</h2>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Escolha o plano de assinatura desejado.</p>
    
    <form action="processa_assinatura.php" method="POST">
      <label for="plano">Plano:</label>
      <select id="plano" name="plano" required>
        <option value="mensal">Mensal - R$ 29,90</option>
        <option value="anual">Anual - R$ 299,00</option>
      </select>

      <button type="submit">Assinar</button>
    </form>
  </div>
</body>
</html>
