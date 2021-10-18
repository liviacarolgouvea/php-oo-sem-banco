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

    </body>
</html>