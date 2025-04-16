<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Pizza com Tabela de Pacotes de Viagem</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(244, 244, 244, 0.95); /* Fundo semi-transparente */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
           
            margin-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .chart-container, .table-container {
            flex: 1;
        }
        table {
            font-family: 'Archivo', sans-serif; /* Mudança de fonte */;
            border: 1px solid #ccc; 
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <div class="chart-container">
            <canvas id="graficoPizza"></canvas>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Destino</th>
                        <th>Dias</th>
                        <th>Preço Estimado (USD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Paris</td>
                        <td>7</td>
                        <td>1500</td>
                    </tr>
                    <tr>
                        <td>Bangkok</td>
                        <td>10</td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>Londres</td>
                        <td>5</td>
                        <td>1300</td>
                    </tr>
                    <tr>
                        <td>Dubai</td>
                        <td>7</td>
                        <td>1800</td>
                    </tr>
                    <tr>
                        <td>Cingapura</td>
                        <td>6</td>
                        <td>1400</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('graficoPizza').getContext('2d');
        const graficoPizza = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Paris', 'Bangkok', 'Londres', 'Dubai', 'Cingapura'],
                datasets: [{
                    label: 'Lugares Mais Visitados',
                    data: [19.1, 22.7, 19.6, 16.7, 14.6],
                    backgroundColor: [ 'rgba(0, 51, 102, 0.6)', 'rgba(0, 76, 153, 0.6)', 'rgba(0, 102, 204, 0.6)', 'rgba(25, 127, 229, 0.6)', 'rgba(51, 153, 255, 0.6)' ], borderColor: [ 'rgba(0, 51, 102, 1)', 'rgba(0, 76, 153, 1)', 'rgba(0, 102, 204, 1)', 'rgba(25, 127, 229, 1)', 'rgba(51, 153, 255, 1)' ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
