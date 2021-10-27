<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de gestão acadêmica</title>
    </head>
    <body>
        <?php
        require './Pessoa.php';
        require './Estudante.php';
        require './Professor.php';
        $professor = new Professor('professores');
        ?>

        <h2>Professores</h2>
        <?php
        $professores = $professor->verPessoa('professores');
        foreach ($professores as $key => $object) {
            foreach ($object as $lable => $value) {
                echo "<b>{$lable}:</b> {$value} <br>";
            }
            echo "<a href='excluirProfessor.php?key={$key}'>Excluir</a><br> <br><hr>";
        }
        ?>
    </body>
</html>