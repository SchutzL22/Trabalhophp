<?php
    require_once 'auth.php';
    require_once 'Exercicio11conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado Cadastro</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <div class="container">
        <h2>Resultado do Cadastro</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
                $matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
                $curso = mysqli_real_escape_string($conexao, $_POST['curso']);
                $email = mysqli_real_escape_string($conexao, $_POST['email']);
                $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
                $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
                $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
                $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
                $uf = mysqli_real_escape_string($conexao, $_POST['uf']);
                $curso_horas = mysqli_real_escape_string($conexao, $_POST['curso_horas']);
                $carga_horaria = intval($_POST['carga_horaria']);
                
                $sql = "INSERT INTO alunos_ac (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria) 
                        VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', $carga_horaria)";

                if (mysqli_query($conexao, $sql)) {
                    setcookie('ex11_ultimo_aluno', $matricula, time() + 86400, "/");
                    echo "<div class='resultado-sucesso'>Aluno cadastrado com sucesso!</div>";
                } else {
                    echo "<div class='resultado-erro'>Erro ao cadastrar aluno: " . mysqli_error($conexao) . "</div>";
                }
            }
            mysqli_close($conexao);
        ?>
        <br>
        <a href="Formulario11.html">Cadastrar outro aluno</a><br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>