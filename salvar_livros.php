<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $autor = $_POST["autor"];
    $data = $_POST["ano"];

    $sql = mysqli_query($conn, "INSERT INTO livro (nome_livro, autor, ano_lancamento) VALUES ('$nome', '$autor', '$data')");

    if($sql){
        header("Location: sucesso.php");
    }
?>