<?php
include 'conexao.php';

// Função para salvar um aluno no banco de dados
function salvarAluno($nome) {
    $conn = conectarBanco();
    $sql = "INSERT INTO aluno (nome) VALUES ('$nome')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        echo "Erro ao salvar aluno: " . $conn->error;
    }

    $conn->close();
    return false;
}

// Função para atualizar um aluno no banco de dados
function atualizarAluno($id, $nome) {
    $conn = conectarBanco();
    $sql = "UPDATE aluno SET nome='$nome' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        echo "Erro ao atualizar aluno: " . $conn->error;
    }

    $conn->close();
    return false;
}

// Função para listar todos os alunos do banco de dados
function listarAlunos() {
    $conn = conectarBanco();
    $sql = "SELECT * FROM aluno";
    $result = $conn->query($sql);

    $alunos = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $alunos[] = $row;
        }
    }

    $conn->close();
    return $alunos;
}

// Função para listar todos os alunos do banco de dados
function recuperarAluno($id) {
    $conn = conectarBanco();
    $sql = "SELECT * FROM aluno WHERE id=$id";
    $result = $conn->query($sql);

    $aluno = $result -> fetch_assoc();

    $conn->close();
    return $aluno;
}

// Função para deletar um aluno do banco de dados
function deletarAluno($id) {
    $conn = conectarBanco();
    $sql = "DELETE FROM aluno WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        echo "Erro ao deletar aluno: " . $conn->error;
    }

    $conn->close();
    return false;
}


