<?php

include 'conecxao.php';

$buscar_cadastros = "SELECT * FROM dados ";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);
$query_cadastros_labels = mysqli_query($connx, $buscar_cadastros);
$query_cadastros_dados = mysqli_query($connx, $buscar_cadastros);

$buscar_cadastros_eixo_x = "SELECT * FROM eixo_x ";
$query_cadastros_eixo_x = mysqli_query($connx, $buscar_cadastros_eixo_x);
$query_cadastros_eixo_x2 = mysqli_query($connx, $buscar_cadastros_eixo_x);


?>



<!doctype html>
<html lang="pt">

<head>
	<title>Estudando Gráficos</title>
	<!-- Bibliotecas do charts -->
	<script src="js/Chart.min.js"></script>
	<script src="js/utils.js"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>
</head>

<body>
	<div style="width:75%;">
	Clique no nome da DISCIPLINA para desativar
		<canvas id="canvas"></canvas>
	</div>
	<br>
	<br>

	<script>
		// aqui podemos definir todos as representações do eixo OX
		var EixoX = [<?php while ($recebe_eixos = mysqli_fetch_array($query_cadastros_eixo_x)) {

							echo "'" . $recebe_eixos['nomes'] . "',";
						}; ?>];

		var config = {
			type: 'line',
			data: {
				labels: [<?php while ($recebe_eixos2 = mysqli_fetch_array($query_cadastros_eixo_x2)) {

								echo "'" . $recebe_eixos2['nomes'] . "',";
							}; ?>],
				datasets: [
					// aqui fazemos um laço de repetição para gerar todos os gráficos
					<?php  while($recebe_labels = mysqli_fetch_array($query_cadastros_labels)){
						$nome_grafico = $recebe_labels['id_nome_grafico']; ?>
					 {
						// aqui recebe o nome dos dados
						label: <?php echo "'" . $recebe_labels['Nome_Dado'] . "'"; ?>,
						// aqui recebe a cor de cada linha
						backgroundColor: window.chartColors.<?php echo $recebe_labels['cor']; ?>,
						borderColor: window.chartColors.<?php echo $recebe_labels['cor']; ?>,
						// aqui recebe os dados, valores
						data: [
							<?php echo "'" . $recebe_labels['dUm'] . "'"; ?>,
							<?php echo "'" . $recebe_labels['dDois'] . "'"; ?>,
							<?php echo "'" . $recebe_labels['dTres'] . "'"; ?>,
							<?php echo "'" . $recebe_labels['dQuatro'] . "'"; ?>,
							<?php echo "'" . $recebe_labels['dCinco'] . "'"; ?>,	
						],
						fill: false,
					},
					<?php }; ?>
				]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					// aqui recebo o nome do gráfico(podemos fazer pelo INNER JOIN)
					text: <?php if($nome_grafico == 1){echo "'Médias'"; } ?>,
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Referências'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Resultados'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});

			});

			window.myLine.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[config.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + config.data.datasets.length,
				backgroundColor: newColor,
				borderColor: newColor,
				data: [],
				fill: false
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config.data.datasets.push(newDataset);
			window.myLine.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				var month = EixoX[config.data.labels.length % EixoX.length];
				config.data.labels.push(month);

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
				});

				window.myLine.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myLine.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			config.data.labels.splice(-1, 1); // remove the label first

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myLine.update();
		});
	</script>
</body>

</html>