<?php
    require_once 'auth.php';
    require_once 'Exercicio11conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Atualização</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Resultado da Atualização de Horas</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
                $horas_adicionais = intval($_POST['horas']);

                $sql_busca = "SELECT carga_horaria FROM alunos_ac WHERE matricula = '$matricula'";
                $resultado_busca = mysqli_query($conexao, $sql_busca);

                if (mysqli_num_rows($resultado_busca) > 0) {
                    $aluno = mysqli_fetch_assoc($resultado_busca);
                    $horas_atuais = $aluno['carga_horaria'];
                    
                    $nova_carga_horaria = $horas_atuais + $horas_adicionais;

                    $sql_atualiza = "UPDATE alunos_ac SET carga_horaria = $nova_carga_horaria WHERE matricula = '$matricula'";
                    
                    if (mysqli_query($conexao, $sql_atualiza)) {
                        setcookie('ex11_ultimo_aluno', $matricula, time() + 86400, "/");
                        echo "<div class='resultado-sucesso'>Carga horária atualizada com sucesso! Novo total: $nova_carga_horaria horas.</div>";
                    } else {
                        echo "<div class='resultado-erro'>Erro ao atualizar a carga horária: " . mysqli_error($conexao) . "</div>";
                    }
                } else {
                    echo "<div class='resultado-erro'>Aluno com a matrícula '$matricula' não encontrado.</div>";
                }
            }
            mysqli_close($conexao);
        ?>
        <br>
        <a href="Formulario11_atualiza.html">Atualizar outra carga horária</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>