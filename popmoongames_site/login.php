<?php
session_start();

$servername = "localhost";
$username = "root"; // Usuário padrão do XAMPP
$password = ""; // Senha padrão é vazia no XAMPP
$dbname = "popmoon"; // Nome do banco de dados

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Preparar e executar a consulta
$sql = "SELECT nome_usuario, senha FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    // A consulta retornou um usuário, então vamos verificar a senha
    $stmt->bind_result($nome_usuario, $hash_senha);
    $stmt->fetch();

    if (password_verify($senha, $hash_senha)) {
        // Senha correta, iniciar sessão
        $_SESSION['usuario'] = $nome_usuario;

        // Redirecionar para a página index
        header("Location: index.php");
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        echo "Senha incorreta!";
    }
} else {
    echo "Usuário não encontrado!";
}

$stmt->close();
$conn->close();
?>
