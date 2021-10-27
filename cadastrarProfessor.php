
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de professor</title>
    </head>
    <body>
        <h1>Cadastro de professor</h1>
        <?php
        require './Pessoa.php';
        require './Professor.php';

        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($formData)) {
            $professor = new Professor($formData['email']);
            $cadastro = $professor->criarProfessor($formData);

            if ($cadastro) {
                echo "Professor cadastrado com sucesso!";
            }else{
                echo "Problema ao cadastrar professor!";
            }
        }
        ?>
        <form name="CradastroProfessor" action="" method="POST">
            <p>
                <label>Nome</label>
                <input type="text" name="nome" required>
            </p>
            <p>
                <label>Telefone</label>
                <input type="text" name="telefone">
            </p>
            <p>
                <label>Email</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Especialidade</label>
                <input type="text" name="especialidade">
            </p>
            <p>
                <label>Salário</label>
                <input type="text" name="salario">
            </p>
            <input type="submit" value="Cadastrar" name="cadastrarProfessor">
            <a href='index.php'>Voltar</a>
        </form>
    </body>
</html>