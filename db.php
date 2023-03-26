<?php
// Conecta ao banco de dados
$host = "127.0.0.1";
$username = "projeto";
$password = "password";
$dbname = "projeto";
$dbport = 3307;

$conn = mysqli_connect($host, $username, $password, $dbname, $dbport);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
