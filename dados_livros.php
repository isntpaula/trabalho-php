<?php
include 'conexao.php';

// Consulta para contar livros iguais lançados a partir de 2016.
$query = "
    SELECT nome_livro, COUNT(*) AS quantidade 
    FROM livro 
    WHERE ano_lancamento >= 2016 
    GROUP BY nome_livro
";
$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Retorna os dados no formato JSON.
header('Content-Type: application/json');
echo json_encode($data);
?>