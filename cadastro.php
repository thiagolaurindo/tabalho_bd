<?php
include_once 'php_conexao/conexao.php';
?>
<!DOCTYPE html>
 <html>
   <head>
       <title>Inserir informações</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/styleInsert.css">
   </head>
   <body>
       <div class="main">
           <h2>Inserir informações</h2>
           <form  action="php_conexao/conexao.php" method="POST">
                <h3>Nome</h3>
                <input class="i" name="nome" id="nome" placeholder="ex: João da Silva" type="text" required>
                <h3>Email</h3>
                <input class="i" name="email" id="email" placeholder="ex: joaodasilva@gmail.com" type="email" required>
                <h3>Telefone</h3>
                <input class="i" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" type="tel" required>
                <button type="submit" class="btn" name="cadastrar">Concluir</button>
                <a href="clientes.php">
                    <input class="btn" type="button" value="Voltar">
                </a>
            </form>
       </div>
   </body>  
 </html>