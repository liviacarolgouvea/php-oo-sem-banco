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


    public function criarProfessor($especialidade, $salario)
    {
        $this->inserirDados();

        $data = file_get_contents('professores.json');
        $json = json_decode($data);

        $array = array(
            'email' => $this->email,
            'especialidade' => $especialidade,
            'salario' => $salario
        );

        $json[] = $array;

        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('professores.json', $json);
    }

    public function calculaAvaliacao(){
        $qtdDisciplinasMinistradas = 100;
        $qtdAnosNaInstituicao = 12;
        $resultado = $qtdDisciplinasMinistradas * $qtdAnosNaInstituicao;
        return $resultado;
    }
} 