
<?php
session_start();
if (!isset($_SESSION["loggedin"]))
{
    header("Location: index.html"); // Redireciona para a tela de alunos
    exit;
}
include 'alunoDB.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome do aluno do formulário
    $nome = $_POST["nome"];
    $user_id = $_POST["user_id"];

    // Salva o aluno no banco de dados
    if (!salvarAluno($nome)) {
        echo "Erro ao salvar aluno!";
    }else{
        header("Location: tela_alunos.php"); // Redireciona para a tela de alunos
        exit;
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Aluno</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro Aluno</h2>

        <form id="user-form" method="POST">
            <input type="hidden" id="user_id" name="user_id">

            <div class="form-group">
                <label for="nome">Aluno:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div >
                <input style="background-color: #813772; color: #F4F4F4;" type="submit" value="Cadastrar">
            </div>

        </form>
    </div>
</body>
</html>