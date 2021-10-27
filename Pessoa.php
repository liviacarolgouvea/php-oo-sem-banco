<?php

abstract class Pessoa
{
    public string $nome;
    public string $telefone;
    public string $email;
    public string $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function inserirDados(array $pessoa){
        $data = file_get_contents('pessoas.json');
        $json = json_decode($data);

        $array = array(
            'nome' => $pessoa['nome'],
            'telefone' => $pessoa['telefone'],
            'email' => $pessoa['email']
        );

        $json[] = $array;

        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('pessoas.json', $json);
    }

    abstract function calculaAvaliacao();

    public function verPessoa():array{
        $professores = json_decode(file_get_contents("{$this->tipo}.json"));
        return $professores;
    }

    public function excluirPessoa($key){
        $pessoas = json_decode(file_get_contents("pessoas.json"));
        foreach($pessoas as $keys){
            unset($pessoas[$key]);
        }
        $json = json_encode(array_values($pessoas), JSON_PRETTY_PRINT);
        file_put_contents("pessoas.json", $json);

        $pessoas = json_decode(file_get_contents("{$this->tipo}.json"));
        foreach($pessoas as $keys){
            unset($pessoas[$key]);
        }
        $json = json_encode(array_values($pessoas), JSON_PRETTY_PRINT);
        file_put_contents("{$this->tipo}.json", $json);

        return true;
    }
} 