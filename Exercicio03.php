<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 3</h2>
        <?php
            function calcularFatorial($n) {
                if ($n <= 1) {
                    return 1;
                }
                return $n * calcularFatorial($n - 1);
            }

            if (isset($_POST['numero'])) {
                $numero = intval($_POST['numero']);

                setcookie('ex03_ultimo', $numero, time() + 86400, "/");

                if ($numero < 0 || $numero > 20) {
                    echo "<div class='resultado-erro'>
                            <strong>Erro:</strong> Por favor, digite um número entre 0 e 20.
                          </div>";
                } else {
                    $resultado = calcularFatorial($numero);

                    $calculo_str = "";
                    for ($i = $numero; $i >= 1; $i--) {
                        $calculo_str .= $i . ($i > 1 ? ' x ' : '');
                    }
                    if($numero == 0) $calculo_str = "1";

                    echo "<div class='resultado-sucesso'>
                            O fatorial de <strong>$numero</strong> é:<br>
                            $numero! = $calculo_str = <strong>" . number_format($resultado, 0, ',', '.') . "</strong>
                          </div>";
                }
            } else {
                echo "<p>Nenhum número foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario03.html">Calcular outro fatorial</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>