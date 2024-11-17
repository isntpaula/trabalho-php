<?php 
include 'conexao.php';

$id = $_GET["id_livro"];

if(isset($_GET['id_livro'])){
    $sqlDelete = mysqli_query($conn, "DELETE FROM livro WHERE id_livro = {$id}")
    or die (mysqli_error($conn));

    header('location: listar_livros.php');
}
?>