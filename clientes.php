<?php
include_once 'php_conexao/db_conexao.php';
?>
<!DOCTYPE html>
 <html>
   <head>
       <title>Clientes cadastrados</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
       <div class="main">
           <h2>Clientes cadastrados</h2>
           <table class="tabela">
               <thead>
               <th>Nome </th>
               <th>Email</th>
               <th>Telefone</th>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM  clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                    ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['telefone'];?></td>
                    <td>
                    <td>
                        <a href="edit.php?id=<?php echo $dados['id']; ?>">
                            <img src="img/icoedit.png" alt="Editar">
                        </a>
                        <a href="delete.php?id=<?php echo $dados['id']; ?>">
                            <img src="img/icodelete.png" alt="Excluir">
                        </a>
                    </td>
                </tr>
                <?php  
                endwhile;
                ?>              
                </tbody>
           </table>
           <a href="cadastro.php">
            <input class="btn" type="button" value="Adicionar novo cliente">
           </a>
       </div>
   </body>  
 </html>