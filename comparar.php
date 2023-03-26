<?php
if (isset($_POST['pais1']) && isset($_POST['pais2'])) {
    $pais1 = $_POST['pais1'];
    $pais2 = $_POST['pais2'];


    $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . urlencode($pais1);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    $data1 = json_decode($response, true);

    $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?pais=' . urlencode($pais2);

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    $data2 = json_decode($response, true);

    curl_close($ch);
    $confirmados_pais1 = 0;
    $mortos_pais1 = 0;
    $confirmados_pais2 = 0;
    $mortos_pais2 = 0;

    foreach ($data1 as $estado) {
        $confirmados_pais1 += $estado["Confirmados"];
        $mortos_pais1 += $estado["Mortos"];
    }

    foreach ($data2 as $estado) {
        $confirmados_pais2 = $confirmados_pais2 + $estado["Confirmados"];
        $mortos_pais2 = $mortos_pais2 + $estado["Mortos"];
    }

    $taxa_pais1 = $mortos_pais1 / $confirmados_pais1;
    $taxa_pais2 = $mortos_pais2 / $confirmados_pais2;
    $diferenca_taxa = $taxa_pais1 - $taxa_pais2;

    echo '<p> Taxa de mortes - ' . $pais1 . ': ' . number_format($taxa_pais1 * 100, 2, ',') . '%' . '</p>';
    echo '<p> Taxa de mortes - ' . $pais2 . ': ' . number_format($taxa_pais2 * 100, 2, ',')  . '%' . '</p>';
    echo '<p> Diferença da taxa de mortes entre os países: ' . number_format($diferenca_taxa * 100, 2, ',')  . '%' . '</p>';
};
