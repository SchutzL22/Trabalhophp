<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 7</h2>
        <?php
            if (isset($_POST['valorA']) && isset($_POST['valorB'])) {
                $valorA = floatval($_POST['valorA']);
                $valorB = floatval($_POST['valorB']);

                $cookie_str = "A=$valorA, B=$valorB";
                setcookie('ex07_ultimo', $cookie_str, time() + 86400, "/");

                echo "<h3>Comparando os valores:</h3>";
                echo "<p style='font-size: 1.2em;'>";

                if ($valorA > $valorB) {
                    echo "O Valor A (<strong>$valorA</strong>) é <strong>MAIOR</strong> que o Valor B (<strong>$valorB</strong>).";
                } elseif ($valorB > $valorA) {
                    echo "O Valor B (<strong>$valorB</strong>) é <strong>MAIOR</strong> que o Valor A (<strong>$valorA</strong>).";
                } else {
                    echo "O Valor A (<strong>$valorA</strong>) é <strong>IGUAL</strong> ao Valor B (<strong>$valorB</strong>).";
                }

                echo "</p>";

            } else {
                echo "<p>Valores não foram enviados corretamente.</p>";
            }
        ?>
        <br>
        <a href="Formulario07.html">Comparar outros valores</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>