<?php
if (!empty($_GET['id'])) {
    include_once('php_conexao/db_conexao.php');
    $id = mysqli_real_escape_string($connect, $_GET['id']);

    $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
    $result = mysqli_query($connect, $sqlSelect);

    if (mysqli_num_rows($result) > 0) {
        $sqlDelete = "DELETE FROM clientes WHERE id=$id";
        mysqli_query($connect, $sqlDelete);
    }
}
header('Location: clientes.php');
exit;
?>
