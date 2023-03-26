<?php
	require 'db.php';

	$sql_select = "SELECT * FROM acessos_covid ORDER BY acesso DESC LIMIT 1";

	$ultimo_acesso_texto = '';
	$result = mysqli_query($conn, $sql_select);
	if (mysqli_num_rows($result) > 0) {
		$ultimoacesso = mysqli_fetch_assoc($result);
		$ultimo_acesso_data = $ultimoacesso['acesso'];
		$ultimo_acesso_pais = $ultimoacesso['pais'];
		$ultimo_acesso_texto =  "<p>Último acesso em : $ultimo_acesso_data  -  País consultado: $ultimo_acesso_pais</p>";
	}
