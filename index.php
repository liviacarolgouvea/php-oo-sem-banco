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
        // quando instancia a classe é necessário passar o nome, telefone e email, já que o método construtor da classe mãe pede estes dados.
        $estudante = new Estudante('maria', '99999999', 'maia@maria.com');
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

        <br><hr>

        <?php
        $estudante->nome = 'Maria';
        $estudante->matricula = '9999999';
        $dadosEstudante = $estudante->verEstudante();
        foreach ($dadosEstudante as $key => $value) {
            echo "{$key}: {$value} <br>";
        }

        $estudante->inserirDados();
        ?>

    </body>
</html>