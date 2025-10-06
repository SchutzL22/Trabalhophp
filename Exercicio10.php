<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 10</h2>
        <?php
            if (isset($_POST['numero_mes'])) {
                $numero_mes = intval($_POST['numero_mes']);

                setcookie('ex10_ultimo', $numero_mes, time() + 86400, "/");

                $nome_mes = '';

                switch ($numero_mes) {
                    case 1: $nome_mes = "Janeiro"; break;
                    case 2: $nome_mes = "Fevereiro"; break;
                    case 3: $nome_mes = "Março"; break;
                    case 4: $nome_mes = "Abril"; break;
                    case 5: $nome_mes = "Maio"; break;
                    case 6: $nome_mes = "Junho"; break;
                    case 7: $nome_mes = "Julho"; break;
                    case 8: $nome_mes = "Agosto"; break;
                    case 9: $nome_mes = "Setembro"; break;
                    case 10: $nome_mes = "Outubro"; break;
                    case 11: $nome_mes = "Novembro"; break;
                    case 12: $nome_mes = "Dezembro"; break;
                    default: $nome_mes = "inválido"; break;
                }

                if ($nome_mes == "inválido") {
                    echo "<div class='resultado-erro'>O número <strong>$numero_mes</strong> é inválido. Não existe mês com esse número.</div>";
                } else {
                    echo "<div class='resultado-sucesso'>O número <strong>$numero_mes</strong> corresponde ao mês de <strong>$nome_mes</strong>.</div>";
                }

            } else {
                echo "<p>Nenhum número foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario10.html">Verificar outro mês</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>