<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "exercicios_db";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
?>  