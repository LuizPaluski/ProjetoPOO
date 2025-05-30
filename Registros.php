<?php

require_once 'Humano.php';
require_once 'Animal.php';
require_once 'Gato.php';
require_once 'Cachorro.php';
require_once 'Raposa.php';

function RegistroPessoa(Humano $pessoa): void{
    $nome = readline("Digite o nome: \n");
    $idade = (int)readline("Digite a idade: \n");
    $sexo = readline("Digite o sexo: \n");
    $email = readline("Digite o email: \n");
    $telefone = readline("Digite o telefone: \n");
    $endereco = readline("Digite o endereco: \n");

    $pessoa->RegistrarDadosH($nome, $idade, $sexo, $email, $telefone, $endereco);
}

function RegistarPets(): ?Animal {
    $animalTipo = readline("Digite o tipo de animal (Cachorro, Gato, Raposa): \n");
    $nome = readline("Digite o nome do animal: \n");
    $raca = readline("Digite a raca do animal: \n");
    $patas = 4; // Geralmente é 4, pode ser um input se variar
    $cor = readline("Digite a cor do animal: \n");
    $peso = (float)readline("Digite o peso do animal: \n");
    $tamanho = (float)readline("Digite o tamanho do animal: \n");

    switch($animalTipo){
        case "Cachorro":
            return new Cachorro($nome, $raca, $patas, $cor, $peso, $tamanho);
        case "Gato":
            return new Gato($nome, $raca, $patas, $cor, $peso, $tamanho);
        case "Raposa":
            return new Raposa($nome, $raca, $patas, $cor, $peso, $tamanho);
        default:
            echo "Tipo de animal invalido.\n";
            return null;
    }
}
