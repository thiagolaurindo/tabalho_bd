<?php
include_once 'php_conexao/conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}

$id = mysqli_real_escape_string($connect, $_GET['id']);

$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = mysqli_query($connect, $sql);

if (mysqli_num_rows($resultado) == 0) {
    exit;
}

$dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar informações</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleInsert.css">
</head>
<body>
    <div class="main">
        <h2>Editar informações</h2>
        <form action="php_conexao/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <h3>Nome</h3>
            <input class="i" name="nome" type="text" value="<?php echo $dados['nome']; ?>" required>
            <h3>Email</h3>
            <input class="i" name="email" type="email" value="<?php echo $dados['email']; ?>" required>
            <h3>Telefone</h3>
            <input class="i" name="telefone" type="tel" value="<?php echo $dados['telefone']; ?>" required>
            <button type="submit" class="btn" name="editar">Salvar alterações</button>
            <a href="clientes.php">
                <input class="btn" type="button" value="Voltar">
            </a>
        </form>
    </div>
</body>
</html>