<?php

/*
A visibilidade de uma propriedade ou método pode ser definida prefixando a declaração com as palavras-chave: 
public, protected ou private.

Membros declarados como privados só podem ser acessados dentro de sua classe declarante.

Este recurso é chamado Encapsulamento, mecanismo que provê proteção de acesso aos membros internos de um objeto 
pois existem certas propriedades de uma classe que devem ser tratadas exclusivamente por métodos dela mesma, 
projetados para manipular essas propriedades de forma correta.
*/

class Disciplina
{

    public string $nome;
    private string $codigo;
    public int $creditos;
    public static $ministrada;

    public static function ministrarDisciplina(){
        self::$ministrada++;
    }

    public function verDisciplina()
    {
        return "{$this->nome} ({$this->codigo}) - {$this->creditos} créditos - ".self::$ministrada;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigoDisciplina)
    {
        if(strlen($codigoDisciplina) > 3){
            $this->codigo = $codigoDisciplina;
        }
    }
} 