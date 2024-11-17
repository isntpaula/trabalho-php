<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Livros</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Biblioteca Chart.js -->
</head>
<body>
    <h1>Gráfico de Livros Lançados a partir de 2016</h1>
    <canvas id="graficoLivros" width="50" height="50"></canvas> <!-- Onde o gráfico será renderizado -->

    <script>
        // Busca os dados do servidor via AJAX.
        fetch('dados_livros.php')
            .then(response => response.json())
            .then(data => {
                // Prepara os dados para o gráfico.
                const nome_livro = data.map(item => item.nome_livro); // Títulos dos livros.
                const quantidades = data.map(item => item.quantidade); // Quantidade de exemplares.

                // Configura o gráfico usando Chart.js.
                const ctx = document.getElementById('graficoLivros').getContext('2d');
                new Chart(ctx, {
                    type: 'bar', // Tipo do gráfico: barra.
                    data: {
                        labels: nome_livro, // Eixo X: títulos.
                        datasets: [{
                            label: 'Quantidade de Exemplares',
                            data: quantidades, // Valores no eixo Y.
                            backgroundColor: 'rgba(75, 192, 192, 0.5)', // Cor das barras.
                            borderColor: 'rgba(75, 192, 192, 1)', // Cor das bordas.
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Livros Lançados a partir de 2016'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true // Começa do zero no eixo Y.
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Erro ao carregar os dados:', error));
    </script>
</body>
</html>