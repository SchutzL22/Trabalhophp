<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 8</h2>
        <?php
            if (isset($_POST['nota1'], $_POST['nota2'], $_POST['nota3'])) {
                $n1 = floatval($_POST['nota1']);
                $n2 = floatval($_POST['nota2']);
                $n3 = floatval($_POST['nota3']);

                $media_inicial = (($n1 * 2) + ($n2 * 2) + ($n3 * 1)) / 5;
                $media_inicial_formatada = number_format($media_inicial, 2, ',', '.');
                
                echo "<p>Média inicial calculada: <strong>$media_inicial_formatada</strong></p>";

                if ($media_inicial >= 7) {
                    setcookie('ex08_media', $media_inicial_formatada, time() + 86400, "/");
                    echo "<p class='resultado-pos'>Situação: APROVADO!</p>";
                } else {
                    echo "<p class='resultado-par'>Situação: EM RECUPERAÇÃO. Por favor, insira a nota da prova de recuperação:</p>";
                    echo '<form action="Exercicio08.php" method="post">
                            <input type="hidden" name="media_inicial" value="' . $media_inicial . '">
                            <label for="recuperacao">Nota da Recuperação:</label><br>
                            <input type="number" step="0.1" min="0" max="10" id="recuperacao" name="recuperacao" required><br><br>
                            <button type="submit">Calcular Média Final</button>
                          </form>';
                }

            } elseif (isset($_POST['media_inicial'], $_POST['recuperacao'])) {
                $media_inicial = floatval($_POST['media_inicial']);
                $recuperacao = floatval($_POST['recuperacao']);

                // Nova média: (média inicial + REC) / 2
                $media_final = ($media_inicial + $recuperacao) / 2;
                $media_final_formatada = number_format($media_final, 2, ',', '.');
                
                setcookie('ex08_media', $media_final_formatada, time() + 86400, "/");

                echo "<p>Média inicial: " . number_format($media_inicial, 2, ',', '.') . "</p>";
                echo "<p>Nota da Recuperação: $recuperacao</p>";
                echo "<h3>Média Final: $media_final_formatada</h3>";

                if ($media_final >= 5) {
                    echo "<p class='resultado-par'>Situação: APROVADO EM RECUPERAÇÃO!</p>";
                } else {
                    echo "<p class='resultado-neg'>Situação: REPROVADO.</p>";
                }
            
            } else {
                echo "<p>Nenhuma nota foi enviada.</p>";
            }
        ?>
        <br>
        <a href="Formulario08.html">Calcular outra média</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>