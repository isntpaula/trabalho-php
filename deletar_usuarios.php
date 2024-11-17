
<?php 
	require 'conexao.php';

	$id = $_GET["id_usuario"];
	if(isset($_GET['id_usuario'])){
	$sql = mysqli_query($conn, "DELETE FROM usuario WHERE id_usuario = {$id}") 
	   	or die(mysqli_error($conn));

	header('location: listar_usuarios.php');
	}
?>