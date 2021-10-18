<?php

/*
A subclasse é uma especialização da superclasse.
Ela herda todas as características e funcionalidades da super
e define suas próprias funcionalidades e atributos.
*/

class Estudante extends Pessoa{

    public $matricula;
    public $ira;

    public function disciplinasMatriculadas()
    {
        return "PHP Orientado a Objetos";
    }

    public function atualizaIRA($nota)
    {
        $this->ira += $nota;

        return $this->ira;
    }

    public function verEstudante():array // tipagem do retorno inserida no PHP 7.0
    {
        $dados['Nome'] = $this->nome;
        $dados['Matrícula'] = $this->matricula;
        $dados['IRA'] = $this->ira;

        return $dados;
    }
} 