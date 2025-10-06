    <?php
    require_once 'auth.php';
    require_once 'Exercicio12conexao.php';
    $ultima_busca = $_COOKIE['ex12_ultima_busca'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12 - Busca e Exclusão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <h2>Exercício 12 - Buscar e Excluir Alunos</h2>
        
        <form action="Formulario12.php" method="post">
            <label for="criterio">Buscar por:</label>
            <select name="criterio" id="criterio">
                <option value="nome">Nome</option>
                <option value="matricula">Matrícula</option>
                <option value="email">E-mail</option>
            </select>
            <br><br>
            <label for="busca">Termo de busca:</label>
            <input type="text" name="busca" id="busca" value="<?php echo htmlspecialchars($ultima_busca); ?>" placeholder="Digite sua busca aqui">
            <br><br>
            <button type="submit">Buscar Alunos</button>
        </form>
        <hr>

        <h3>Resultados da Busca</h3>
        <table border="1" style="width:100%; text-align: left;">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>Carga Horária</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $criterio = $_POST['criterio'];
                    $busca = mysqli_real_escape_string($conexao, $_POST['busca']);

                    setcookie('ex12_ultima_busca', $busca, time() + 86400, "/");

                    $sql = "SELECT * FROM alunos_ac WHERE $criterio LIKE '%$busca%'";
                    $resultado = mysqli_query($conexao, $sql);

                    if (mysqli_num_rows($resultado) > 0) {
                        while ($aluno = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($aluno['nome']) . "</td>";
                            echo "<td>" . htmlspecialchars($aluno['matricula']) . "</td>";
                            echo "<td>" . htmlspecialchars($aluno['curso']) . "</td>";
                            echo "<td>" . $aluno['carga_horaria'] . "</td>";
                            echo "<td>
                                    <a href='Exercicio12excluir.php?id=" . $aluno['id'] . "' 
                                       onclick=\"return confirm('Tem certeza que deseja excluir este aluno?');\">
                                       Excluir
                                    </a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Nenhum aluno encontrado com este critério.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Faça uma busca para exibir os resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>