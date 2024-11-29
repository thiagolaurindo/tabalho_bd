<?php
include_once 'db_conexao.php';

if (isset($_POST['editar'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $telefone = mysqli_real_escape_string($connect, $_POST['telefone']);

    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = $id";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../clientes.php');
        exit;
    } else {
        echo "Erro" . mysqli_error($connect);
    }
} else {
    echo "Erro";
}
?>