<?php
include 'conexao.php';
include 'readlivro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Livro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-pink-300 p-12">
<table>
            <thead>
                <h2 class='text-2xl font-bold'>Livros cadastrados:</h2>
                <br>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano de Publicação</th>
                    <th>Funções</th>
                </tr>
            </thead> 
            <?php 
            while ($row = mysqli_fetch_assoc($listarSQLl)) {
       
?>
            <tbody>
            <tr>
                <td class='p-4'> <?php echo $row["id_livro"] ?> </td>
                <td class='p-4'> <?php echo $row["nome_livro"] ?> </td>
                <td class='p-4'> <?php echo $row["autor"] ?> </td>
                <td class='p-4'> <?php echo $row["ano_lancamento"] ?> </td>
                <td>
                <a href="deletar_livros.php?id_livro=<?php echo $row['id_livro']; ?>" class='px-4 py-2 bg-pink-700 text-white font-bold'>Excluir</a>
                </td>
                <td>
                <a href="atualizar_livros.php?id_livro=<?php echo $row['id_livro']; ?>" class='px-4 py-2 bg-white text-pink-700 font-bold'>Atualizar</a>
            </td>
                </tbody>
                <?php   
            }
            ?>
            </table>
         
</body>
</html>
