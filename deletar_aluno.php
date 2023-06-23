<?php
session_start();
if (!isset($_SESSION["loggedin"]))
{
    header("Location: index.html"); // Redireciona para a tela de alunos
    exit;
}
include 'alunoDB.php';

$id = intval($_GET['id']);
echo $id;
if (deletarAluno($id)) {
    header("Location: tela_alunos.php"); // Redireciona para a tela de alunos
    exit;
}
?>
