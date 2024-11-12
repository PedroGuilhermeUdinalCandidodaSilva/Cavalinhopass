<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavalinhopass</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo"><a href="Home.php">Cavalinhopass</a></div>
        <nav>
            <a href="Jogos.php">Jogos</a>
            <a href="Assinatura.php">Assinatura</a>
            <a href="Suporte.php">Suporte</a>
            <a href="Login.php">Criar conta</a>
            <a href="Entrar.php">Login</a>
        </nav>
    </header>

    <section class="hero">
        <video autoplay muted loop playsinline class="background-video">
            <source src="CodVID.mp4" type="video/mp4">
            Seu navegador não suporta vídeos.
        </video>

        <!-- Conteúdo do Hero, separado do <video> -->
        <div class="hero-content">
            <h1>Explore uma Biblioteca de Jogos Incríveis</h1>
            <p>Jogue os melhores títulos com a sua assinatura.</p>
            <button onclick="window.location.href='Assinatura.php'">Assine Agora</button>
        </div>
    </section>


    <section class="games">
        <h2>Jogos Populares</h2>
        <div class="game-cards">
            <div class="card">
                <img src="Sifu.png" alt="Jogo 1">
                <h3>Sifu</h3>
            </div>
            <div class="card">
                <img src="Forza.png" alt="Jogo 2">
                <h3>Forza Horizon 5</h3>
            </div>
            <div class="card">
                <img src="Celeste.png" alt="Jogo 3">
                <h3>Celeste</h3>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Cavalinhopass. Todos os direitos reservados.</p>
    </footer>
</body>

</html>