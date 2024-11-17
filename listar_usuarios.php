<?php
include 'conexao.php';
include 'readusuario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-pink-300 p-12">
<table>
            <thead>
                <h2 class='text-2xl font-bold'>Livros usuários:</h2>
                <br>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Funções</th>
                </tr>
            </thead> 
            <?php 
            while ($roww = mysqli_fetch_assoc($listarSQLu)) {
       
?>
            <tbody>
            <tr>
                <td class='p-4'> <?php echo $roww["id_usuario"] ?> </td>
                <td class='p-4'> <?php echo $roww["nome"] ?> </td>
                <td class='p-4'> <?php echo $roww["sobrenome"] ?> </td>
                <td class='p-4'> <?php echo $roww["cpf"] ?> </td>
                <td>
                <a href="deletar_usuarios.php?id_usuario=<?php echo $roww['id_usuario']; ?>" class='px-4 py-2 bg-pink-700 text-white font-bold'>Excluir</a>
                </td>
                <td>
                <a href="atualizar_usuarios.php?id_usuario=<?php echo $roww['id_usuario']; ?>" class='px-4 py-2 bg-white text-pink-700 font-bold'>Atualizar</a>
            </td>
                </tbody>
                <?php   
            }
            ?>
            </table>
         
</body>
</html>




