<!DOCTYPE html>
<html>
<head>
    <title>Alunos</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .button-delete {
        background-color: red;
        border: none;
        color: white;
        padding: 4px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
      }
      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 4px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
      }
      
      .center {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
</head>
<body>
    <h1 style="text-align: center;" >Lista de Alunos</h1>

    <?php
    session_start();
    if (!isset($_SESSION["loggedin"]))
    {
        header("Location: index.html"); // Redireciona para a tela de alunos
        exit;
    }
    include 'alunoDB.php';

    // Obtém a lista de alunos do banco de dados
    $alunos = listarAlunos();

    ?>
    <div class="center"> 
        <a class="button" href="tela_cadastrar_aluno.php"> Cadastrar Aluno </a>
    </div>
    
    <table class="center" style="border:1px solid black;margin-left:auto;margin-right:auto;margin-top:30px; ">
        <thead>
            <th>
                ID
            </th>
            <th>
                Nome
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            <?php
                // Exibe a lista de alunos
                foreach ($alunos as $aluno) {?>
            <tr>
                    <td>
                        <?php echo $aluno['id']; ?>
                    </td>
                    <td>
                        <?php echo $aluno['nome']; ?>
                    </td>
                    <td>
                        <a class="button" href="tela_atualizar_aluno.php?id=<?php echo $aluno['id']; ?>">
                            Editar
                        </a>
                        <a class="button-delete" href="deletar_aluno.php?id=<?php echo $aluno['id']; ?>">
                            Deletar
                        </a>
                    </td>
                </tr>
                <?php }
            ?>
        </tbody>
    </table>
</body>
</html>

