<?php
require_once 'Animal.php';

class Humano{
    public string $nome;
    public int $idade;
    public string $sexo;
    public string $email;
    public string $telefone;
    public string $endereco;
    public Cachorro $animal;


    public function RegitrarAnimal(Cachorro $animal)
    {
        $this->animal = $animal;
    }

    public function RegistrarDados(string $nome, int $idade, string $sexo, string $email, string $telefone, string $endereco)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

}
  