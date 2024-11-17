<?php
      include 'conexao.php';

    if(isset($_GET['id_livro'])){
        $id = $_GET[ 'id_livro'];
        $sql = mysqli_query($conn, "SELECT * FROM livro WHERE id_livro = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome_livro'];
            $autor = $n['autor'];
            $ano = $n['ano_lancamento'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_livro"];
        $nome = $_POST["nome"];
        $autor = $_POST["autor"];
        $ano = $_POST["ano"];
        

        $queryUpdate = "UPDATE livro SET nome_livro = '$nome', autor = '$autor', ano_lancamento = '$ano' WHERE id_livro = $id";
        $consulta = mysqli_query($conn, $queryUpdate);
        header('location: listar_livros.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Atualizar Livro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="h-screen bg-pink-300">
    <form  method="post" class="h-screen flex flex-col items-center justify-center">
        <h2 class="text-3xl text-pink-700 font-bold">Atualizar Livro</h2>
        <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="Nome do livro" name="nome"> <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="Autor" name="autor"> <br>
        <input type="date" name="ano"> <br>
        <button name="atualizar" class="px-4 py-2 bg-pink-700 text-white rounded">Atualizar</button>
    </form>
</body>
</html>