<?php
if (isset($_POST['pais'])) {
    $pais = $_POST['pais'];

    require 'db.php';

    // Insere um registro na tabela covid_data
    $sql = "INSERT INTO acessos_covid (pais) VALUES ('$pais')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Erro ao inserir registro no banco de dados: ' . mysqli_error($conn));
    }


    $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . urlencode($pais);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    echo '<h2>Dados - ' . $pais . '</h2>';
    echo '<table border="1px" cellpadding="5px" cellspacing="2">';
    echo '<tr><th>Estado</th><th>Casos confirmados</th><th>Mortes</th></tr>';
    foreach ($data as $estado) {

        echo '<tr><td>' . $estado['ProvinciaEstado'] . '</td><td>' . $estado['Confirmados'] . '</td><td>' . $estado['Mortos'] . '</td></tr>';
    }
    echo '</table>';
};
