<?php
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
$nome_usuario = $_POST['nome_usuario'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografar a senha
$data_nascimento = $_POST['data_nascimento'];

// Preparar e executar a consulta
$sql = "INSERT INTO usuarios (nome_usuario, email, senha, data_nascimento) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nome_usuario, $email, $senha, $data_nascimento);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
    // Redirecionar para a página de login
    header("Location: login.html");
    exit();
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
