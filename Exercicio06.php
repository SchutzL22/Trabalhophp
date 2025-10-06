<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 6</h2>
        <?php
            if (isset($_POST['num1'])) {

                $numeros = [
                    floatval($_POST['num1']),
                    floatval($_POST['num2']),
                    floatval($_POST['num3']),
                    floatval($_POST['num4']),
                    floatval($_POST['num5'])
                ];

                sort($numeros);

                $resultado_str = implode(', ', $numeros);
                setcookie('ex06_ultimo', $resultado_str, time() + 86400, "/");

                $menor = $numeros[0];
                $medio = $numeros[2];
                $maior = $numeros[4];
                
                echo "<h3>Números em ordem crescente:</h3>";
                echo "<p class='resultado-ordenado'>";

                foreach ($numeros as $index => $numero) {
                    $classe = '';
                    if ($numero == $menor) $classe = 'numero-menor';
                    if ($numero == $medio) $classe = 'numero-medio';
                    if ($numero == $maior) $classe = 'numero-maior';

                    echo "<span class='$classe'>$numero</span>";
                    
                    if ($index < count($numeros) - 1) {
                        echo " → ";
                    }
                }

                echo "</p>";

            } else {
                echo "<p>Nenhum número foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario06.html">Ordenar outros números</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>