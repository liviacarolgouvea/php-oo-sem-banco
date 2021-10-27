<?php

/*
A subclasse é uma especialização da superclasse.
Ela herda todas as características e funcionalidades da super
e define suas próprias funcionalidades e atributos.
*/

class Professor extends Pessoa
{

    public string $especialidade;
    public float $salario;


    public function criarProfessor(array $professor)
    {
        $this->inserirDados($professor);

        $data = file_get_contents('professores.json');
        $json = json_decode($data);

        $array = array(
            'email' => $professor['email'],
            'especialidade' => $professor['especialidade'],
            'salario' => $professor['salario']
        );

        $json[] = $array;

        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('professores.json', $json);

        return true;
    }

    public function calculaAvaliacao(){
        $qtdDisciplinasMinistradas = 100;
        $qtdAnosNaInstituicao = 12;
        $resultado = $qtdDisciplinasMinistradas * $qtdAnosNaInstituicao;
        return $resultado;
    }
} 