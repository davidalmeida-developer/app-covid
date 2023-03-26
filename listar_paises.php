<?php
$url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

foreach ($data as $pais) {
    echo '<option value="' . $pais . '">' . $pais . '</option>';
}
