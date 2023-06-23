<?php
session_start();
include 'conexao.php';

// Obtém as credenciais enviadas pelo formulário de login
$email = $_POST["email"];
$senha = $_POST["senha"];

// Verifica se as credenciais estão corretas no banco de dados
$conn = conectarBanco();
$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = MD5('$senha')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["loggedin"] = true;
    header("Location: tela_alunos.php"); // Redireciona para a tela de alunos
    exit;
    
}

echo "Credenciais inválidas.";
?>
