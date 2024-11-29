<?php
include_once 'db_conexao.php';

if (isset($_POST['cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if (mysqli_query($connect, $sql)):
        header('Location: ../clientes.php');
        exit;
    else:
        header('Location: ../clientes.php');
        exit;
    endif;
endif;
?>