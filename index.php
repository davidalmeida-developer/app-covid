<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>API COVID-19</title>
</head>

<body>
	<header>

		<h1>Consulta de dados COVID-19</h1>
		<form method="post">
			<label for="pais">País:</label>
			<select name="pais" id="pais">
				<option value="Brazil">Brazil</option>
				<option value="Canada">Canada</option>
				<option value="Australia">Autralia</option>
				<option value="" selected disabled>Escolha um país</option>
			</select>
			<button type="submit">Consultar</button>
		</form>
		<br>
		<button><a href='taxa.php'>Comparar taxas</a></button>


		<hr>
	</header>
	<main class="result">
		<?php
		require 'consulta.php';
		?>
	</main>

	<footer class="footer">
		<?php
		require 'footer.php';
		echo $ultimo_acesso_texto ?>
	</footer>
</body>

</html>