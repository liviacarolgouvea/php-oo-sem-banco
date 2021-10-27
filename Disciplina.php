<?php

/* A classe permite armazenar valores nela de duas formas: contantes e propriedades estáticas. 
Estes atributos se tornam comuns a todos os objetos da classe. 
Atributos ou métodos estáticos de uma classe são acessíveis sem a necessidade de instanciar a classe. 
Basta utilizar resolução de escopo ::
- Para chamar atributo ou método estático dentro da classe self::
- Para chamar atributo ou método estático da classe mãe parent::
- Para chamar atributo ou método estático fora da classe <nome da classe>::
Um método estático não pode utilizar os atributos não estáticos da classe, 
pois esses são atributos que variam com a instância do objeto. 
O métodose limita a chamar outros métodos estáticos ou propriedades estáticas.
*/

class Disciplina
{

    public string $nome;
    public string $codigo;
    public int $creditos;
    public static $ministrada;

    public static function ministrarDisciplina(){
        self::$ministrada++;
    }

    public function verDisciplina()
    {
        return "{$this->nome} ({$this->codigo}) - {$this->creditos} créditos - ".self::$ministrada;
    }
} 