<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Resultado do Exercício 4</h2>
        <?php
            if (isset($_POST['num1'], $_POST['operacao'])) {
                $num1 = floatval($_POST['num1']);
                $num2 = isset($_POST['num2']) && $_POST['num2'] !== '' ? floatval($_POST['num2']) : null;
                $operacao = $_POST['operacao'];
                
                $resultado_str = '';
                $erro = false;

                switch ($operacao) {
                    case 'soma':
                        $resultado = $num1 + $num2;
                        $resultado_str = "$num1 + $num2 = $resultado";
                        break;
                    case 'subtracao':
                        $resultado = $num1 - $num2;
                        $resultado_str = "$num1 - $num2 = $resultado";
                        break;
                    case 'multiplicacao':
                        $resultado = $num1 * $num2;
                        $resultado_str = "$num1 * $num2 = $resultado";
                        break;
                    case 'divisao':
                        if ($num2 == 0) {
                            $erro = true;
                            $resultado_str = "Erro: Divisão por zero não é permitida.";
                        } else {
                            $resultado = $num1 / $num2;
                            $resultado_str = "$num1 / $num2 = $resultado";
                        }
                        break;
                    case 'potencia':
                        $resultado = pow($num1, $num2);
                        $resultado_str = "$num1 ^ $num2 = $resultado";
                        break;
                    case 'raiz':
                         if ($num1 < 0) {
                            $erro = true;
                            $resultado_str = "Erro: Não é possível calcular a raiz quadrada de um número negativo.";
                        } else {
                            $resultado = sqrt($num1);
                            $resultado_str = "√$num1 = $resultado";
                        }
                        break;
                    default:
                        $erro = true;
                        $resultado_str = "Operação inválida.";
                        break;
                }

                if ($erro) {
                    echo "<div class='resultado-erro'>$resultado_str</div>";
                } else {
                    setcookie('ex04_ultimo', $resultado_str, time() + 86400, "/");
                    echo "<div class='resultado-sucesso'>Resultado: $resultado_str</div>";
                }

            } else {
                echo "<p>Nenhum dado foi enviado.</p>";
            }
        ?>
        <br>
        <a href="Formulario04.html">Realizar outro cálculo</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>