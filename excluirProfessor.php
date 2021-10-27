<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exclusão de professor</title>
    </head>
    <body>
        <?php
        require './Pessoa.php';
        require './Professor.php';

        $professor = new professor('professores');
        $exclusaoProfessor = $professor->excluirPessoa($_GET['key']);
        if ($exclusaoProfessor) {
            echo "<h3>Professor excluído com sucesso!</h3>";
        }else{
            echo "<h3>Falha ao excluir professor!</h3>";
        }
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </body>
</html>