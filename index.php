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
        require './Disciplina.php';
        $professor = new Professor('professores');
        ?>

        <h2>Professores</h2>
        <p><a href='cadastrarProfessor.php'>Cadastrar</a></p>
        <?php
        $professores = $professor->verPessoa('professores');
        foreach ($professores as $key => $object) {
            foreach ($object as $lable => $value) {
                echo "<b>{$lable}:</b> {$value} <br>";
            }
            echo "<a href='excluirProfessor.php?key={$key}'>Excluir</a><br> <br><hr>";
        }
        ?>

        <br><hr><br>

        <h2>Disciplinas</h2>
        <?php
        $disciplinaMatematica = new Disciplina();
        $disciplinaMatematica->nome = 'Matemática';
        $disciplinaMatematica->setCodigo('MAT1');
        $disciplinaMatematica->creditos = 4;
        Disciplina::ministrarDisciplina();
        $matematica = $disciplinaMatematica->verDisciplina();
        echo $matematica.PHP_EOL;?>

        <br>

        <?php
        $disciplinaPortugues = new Disciplina();
        $disciplinaPortugues->nome = 'Português';
        $disciplinaPortugues->setCodigo('PORT');
        $disciplinaPortugues->creditos = 4;
        Disciplina::ministrarDisciplina();
        echo $disciplinaPortugues->verDisciplina();
        ?>

    </body>
</html>