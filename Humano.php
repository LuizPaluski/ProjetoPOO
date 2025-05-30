<?php
require_once 'Animal.php';

class Humano{
    public string $nome;
    public int $idade;
    public string $sexo;
    public string $email;
    public string $telefone;
    public string $endereco;

    public ?Animal $pet = null;

    public function AssociarPet(Animal $pet): void
    {
        $this->pet = $pet;
    }

     public function mostrarPet(): void{
         echo "O pet de {$this->nome} é {$this->pet->nome} ({$this->pet->raca}).\n";
     }


    
    public function RegistrarDadosH(string $nome, int $idade, string $sexo, string $email, string $telefone, string $endereco): void
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
}
  