<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_usuario = $_POST['usuario'];

    $_SESSION['usuario'] = $nome_usuario;
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <p>Digite seu nome para acessar a lista de exercícios.</p>
        <form action="login.php" method="post">
            <label for="usuario">Nome de Usuário:</label><br>
            <input type="text" id="usuario" name="usuario" required><br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>