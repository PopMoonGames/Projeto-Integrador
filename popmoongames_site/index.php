<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['usuario'])) {
    // Redirecionar para a página de login se não estiver autenticado
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <!-- Configurações iniciais do documento -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pop.png">
    <title>PopMoonGames</title>
    <!-- Importa a fonte Lemon Milk do Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=LEMON+MILK:wght@400;700&display=swap">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Cabeçalho do site, contendo a logo -->
    <header>
        <img src="logo.png" alt="Logo do Site" id="logo">
        
        <!-- Mostrar nome do usuário e link de logout -->
        <div class="header-buttons">
            <span>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</span>
            <button onclick="window.location.href='logout.php'">Sair</button>
        </div>
    </header>
    

    <!-- Conteúdo principal do site -->
    <main>
        <!-- Seção onde os jogos serão listados -->
        <section id="games">
            <!-- Jogo TKR2 -->
            <div class="game">
                <!-- Imagem do jogo -->
                <img src="kanjoracing.png" alt="Kanjo Racing">
                <!-- Nome do jogo -->
                <h2>Kanjo Racing</h2>
                <!-- Descrição do jogo -->
                <p>Reviva a era dourada dos anos 80 com carros clássicos e pistas iluminadas por néons. Enfrente
                    desafios emocionantes e prove que você é o campeão das corridas retrô!</p>
                <!-- Botão para abrir o jogo -->
                <button onclick="window.open('https://kanjo-racing-n7rx.vercel.app', '_blank')">Jogar</button>
            </div>
            <!-- Jogo da Memoria Deadpool -->
            <div class="game">
                <!-- Imagem do jogo -->
                <img src="memorypool.png" alt="Memory Pool">
                <!-- Nome do jogo -->
                <h2>MemoryPool</h2>
                <!-- Descrição do jogo -->
                <p>Desafie sua mente com cartas inspiradas em Deadpool & Wolverine, cheias de personagens do multiverso.
                    Encontre os pares e prove que você pode acompanhar o ritmo interdimensional!</p>
                <!-- Botão para abrir o jogo -->
                <button onclick="window.open('https://memorypool-mgvl.vercel.app', '_blank')">Jogar</button>
            </div>
            <!-- Jogo Pop-Man -->
            <div class="game">
                <!-- Imagem do jogo -->
                <img src="popman.png" alt="Popman">
                <!-- Nome do jogo -->
                <h2>Popman</h2>
                <!-- Descrição do jogo -->
                <p>Guie Pop-Man pelo labirinto clássico, devorando pontos e frutas enquanto foge dos fantasmas. Coma
                    Power Pellets para virar o jogo e enfrentar Blinky, Pinky, Inky e Clyde. Teste seus reflexos e veja
                    até onde consegue ir nesta aventura arcade icônica!</p>
                <!-- Botão para abrir o jogo -->
                <button onclick="window.open('https://popman-ileao19s-projects.vercel.app/', '_blank')">Jogar</button>
            </div>
        </section>
    </main>

    <!-- Rodapé do site, contendo links para as redes sociais -->
    <footer>
        <!-- Links para redes sociais -->
        <a href="https://github.com/PopMoonGames" target="_blank">GitHub</a> |
        <a href="https://instagram.com/popmoongames" target="_blank">Instagram</a> |
        <a href="sobre.html" target="_blank">Sobre</a>
    </footer>

    <!-- Link para o arquivo de script -->
    <script src="script.js"></script>
</body>

</html>
