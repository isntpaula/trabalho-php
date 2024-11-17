<?php
      include 'conexao.php';

    if(isset($_GET['id_usuario'])){
        $id = $_GET[ 'id_usuario'];
        $sql = mysqli_query($conn, "SELECT * FROM usuario  WHERE id_usuario = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $sobrenome = $n['sobrenome'];
            $cpf = $n['cpf'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_usuario"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        

        $queryUpdate = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf' WHERE id_usuario = $id";
        $consulta = mysqli_query($conn, $queryUpdate);
        header('location: listar_usuarios.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastrar Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-pink-300">
    <form  method="post" class="h-screen flex flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-pink-700">Atualizar Usuarios</h2>
        <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="Nome" name="nome"> <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="Sobrenome" name="sobrenome"> <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="CPF" name="cpf"> <br>
        <button type="submit" name="atualizar" class="px-4 py-2 bg-pink-700 text-white rounded">Cadastrar</button>
    </form>
</body>
</html>