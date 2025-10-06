<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 9</h2>
        <?php
            if (isset($_POST['nome']) && isset($_POST['idade'])) {
                $nome = htmlspecialchars($_POST['nome']);
                $idade = intval($_POST['idade']);

                $cookie_str = "$nome, $idade anos";
                setcookie('ex09_ultimo', $cookie_str, time() + 86400, "/");

                if ($idade >= 18) {
                    echo "<p><strong>$nome</strong> é <strong>maior de 18</strong> e tem <strong>$idade</strong> anos.</p>";
                } else {
                    echo "<p><strong>$nome</strong> <strong>NÃO</strong> é maior de 18 e tem <strong>$idade</strong> anos.</p>";
                }

                $faixa_etaria_msg = '';
                $classe_css = '';

                if ($idade >= 0 && $idade <= 12) {
                    $faixa_etaria_msg = "Classificação: Criança";
                    $classe_css = "faixa-crianca";
                } elseif ($idade >= 13 && $idade <= 17) {
                    $faixa_etaria_msg = "Classificação: Adolescente";
                    $classe_css = "faixa-adolescente";
                } elseif ($idade >= 18 && $idade <= 59) {
                    $faixa_etaria_msg = "Classificação: Adulto";
                    $classe_css = "faixa-adulto";
                } elseif ($idade >= 60) {
                    $faixa_etaria_msg = "Classificação: Idoso";
                    $classe_css = "faixa-idoso";
                }
                
                if ($classe_css) {
                    echo "<div class='faixa-etaria-box $classe_css'>$faixa_etaria_msg</div>";
                }

            } else {
                echo "<p>Dados não foram enviados corretamente.</p>";
            }
        ?>
        <br>
        <a href="Formulario09.html">Verificar outra pessoa</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>