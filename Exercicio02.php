<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 2</h2>
        <?php
            if (isset($_POST['numero'])) {
                $numero = intval($_POST['numero']);

                setcookie('ex02_numero', $numero, time() + 86400, "/");

                echo "<h3>Tabuada do <strong>$numero</strong>:</h3>";
                
                echo "<ul>";

                for ($i = 0; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "<li>$numero x $i = <strong>$resultado</strong></li>";
                }
                echo "</ul>";

            } else {
                echo "<p>Nenhum número foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario02.html">Calcular outra tabuada</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>