<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de gestão acadêmica</title>
    </head>
    <body>
        <?php
        require './Estudante.php';
        $estudante = new Estudante();
        $disciplinas = $estudante->disciplinasMatriculadas();
        echo $disciplinas;
        ?>

        <br><hr>

        <?php
        $ira = $estudante->atualizaIRA(9);
        echo "Novo IRA {$ira} <br>";

        $ira = $estudante->atualizaIRA(9);
        echo "Novo IRA {$ira} <br>";
        ?>

    </body>
</html>