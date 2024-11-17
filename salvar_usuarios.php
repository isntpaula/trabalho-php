<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];

    $sql = mysqli_query($conn, "INSERT INTO usuario (nome, sobrenome, cpf) VALUES ('$nome', '$sobrenome', '$cpf')");

    if($sql){
        header("Location: sucesso2.php");
    }
?>