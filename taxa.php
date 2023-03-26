<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Taxas de morte</title>

</head>

<body>
    <header>
        <h1>Comparação de taxas de morte por COVID-19</h1>

        <form method="post">
            <label for="pais1">País-1:</label>
            <select name="pais1" id="pais1">
                <?php
                require 'listar_paises.php';
                ?>
                <option value="" selected disabled>Escolha um país</option>
            </select>
            <br>
            <label for="pais2">País-2:</label>
            <select name="pais2" id="pais2">
                <?php
                require 'listar_paises.php';
                ?>
                <option value="" selected disabled>Escolha um país</option>
            </select>
            <br>
            <button type="submit">Comparar</button>
            <button><a href='index.php'>Voltar</a></button>
        </form>
    </header>
    <main>
        <div class="taxa">
            <?php
            require 'comparar.php';
            ?>
        </div>
    </main>
    <footer class="footer">
        <?php
        require 'footer.php';
        echo $ultimo_acesso_texto
        ?>
    </footer>
</body>

</html>