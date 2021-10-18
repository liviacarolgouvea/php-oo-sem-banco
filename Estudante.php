<?php

// Verificar Recomendações de padrões de PHP em
// https://www.php-fig.org/psr/psr-12/ - item 4

class Estudante {

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
} 