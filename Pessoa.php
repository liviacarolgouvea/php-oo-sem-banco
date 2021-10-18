<?php

/* 
Atravéz da herança, pode-se utilizar nas subclasses (ou classes filhas) 
atributos e métodos definidos na superclasse (ou classe mãe)
*/

class Pessoa
{
    public string $nome; // a partir do PHP 7.4 foi implementado suporte para propriedades tipadas 
    public string $telefone;
    public string $email;
} 