<?php
    require_once 'auth.php';
    require_once 'Exercicio12conexao.php';

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $sql = "DELETE FROM alunos_ac WHERE id = $id";

        if (mysqli_query($conexao, $sql)) {

        } else {
            echo "Erro ao excluir: " . mysqli_error($conexao);
            sleep(3);
        }
    }

    mysqli_close($conexao);

    header("Location: Formulario12.php");
    exit;
?>