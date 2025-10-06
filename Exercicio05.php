<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 5</h2>
        <?php
            if (isset($_POST['numero'])) {
                $numero = intval($_POST['numero']);

                setcookie('ex05_ultimo', $numero, time() + 86400, "/");

                if ($numero % 2 == 0) {
                    echo "<p class='resultado-par'>O número $numero é PAR.</p>";
                } else {
                    echo "<p class='resultado-impar'>O número $numero é ÍMPAR.</p>";
                }

            } else {
                echo "<p>Nenhum número foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario05.html">Verificar outro número</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>