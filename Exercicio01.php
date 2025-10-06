<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 1</h2>
        <?php
            if (isset($_POST['numero'])) {
                $numero = $_POST['numero'];

                setcookie('ex01_ultimo', $numero, time() + 86400, "/");

                echo "<p>O número digitado foi: <strong>$numero</strong></p>";

                if ($numero > 0) {
                    echo "<p class='resultado-pos'>Valor positivo</p>";
                } elseif ($numero < 0) {
                    echo "<p class='resultado-neg'>Valor negativo</p>";
                } else {
                    echo "<p class='resultado-zero'>Igual a zero</p>";
                }
            } else {
                echo "<p>Nenhum número foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario01.html">Verificar outro número</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>