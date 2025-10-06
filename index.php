<?php
    require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Trabalho de PHP - Lista de Exercícios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-info">
        <span>Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php">(Sair)</a>
    </div>

    <div class="container">
        <!-- Aluno: Lucas Alexandre Vieira Schutz         -->
        <h1>Índice do trabalho de PHP</h1>
        <h2>Usuário logado: <?php echo $_SESSION['usuario']; ?></h2>
        
        <hr style="border-color: #4b5563;">

        <ul class="lista-exercicios">
            <li><a href="Formulario01.html">Exercício 01 - Verificação de Número (Positivo/Negativo/Zero)</a></li>
            <li><a href="Formulario02.html">Exercício 02 - Tabuada de um Número</a></li>
            <li><a href="Formulario03.html">Exercício 03 - Cálculo de Fatorial com Recursão</a></li>
            <li><a href="Formulario04.html">Exercício 04 - Calculadora com Switch Case</a></li>
            <li><a href="Formulario05.html">Exercício 05 - Verificação de Número Par ou Ímpar</a></li>
            <li><a href="Formulario06.html">Exercício 06 - Impressão de Valores em Ordem Crescente</a></li>
            <li><a href="Formulario07.html">Exercício 07 - Comparação de Valores A e B</a></li>
            <li><a href="Formulario08.html">Exercício 08 - Cálculo da Média Final de um Aluno</a></li>
            <li><a href="Formulario09.html">Exercício 09 - Verificação de Maioridade</a></li>
            <li><a href="Formulario10.html">Exercício 10 - Identificação do Mês pelo Número</a></li>
            <li><a href="Formulario11.html">Exercício 11 - Cadastro de Alunos (Atividades Complementares)</a></li>
            <li><a href="Formulario12.php">Exercício 12 - Busca e Exclusão de Registros no Banco de Dados</a></li>
        </ul>
    </div>
</body>
</html>