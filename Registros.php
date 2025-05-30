<?php

require_once 'Humano.php';
require_once 'animal.php';
require_once 'Funcionaios.php';
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

function RegistarPets(Animal $pessoa): void{

    $animal = readline("Digite o tipo de animal (Cachorro, Gato, Raposa): \n");
    switch($animal):
        case "Cachorro":
            $nome = readline("Digite o nome do cachorro: \n");
            $raca = readline("Digite a raca do cachorro: \n");
            $patas = 4;
            $cor = readline("Digite a cor do cachorro: \n");
            $peso = (float)readline("Digite o peso do cachorro: \n");
            $tamanho = (float)readline("Digite o tamanho do cachorro: \n");
            $pessoa->RegistrarAnimal($nome, $raca, $patas, $cor, $peso, $tamanho);
            break;
        case "Gato":
            $nome = readline("Digite o nome do gato: \n");
            $raca = readline("Digite a raca do gato: \n");
            $patas = 4;
            $cor = readline("Digite a cor do gato: \n");
            $peso = (float)readline("Digite o peso do gato: \n");
            $tamanho = (float)readline("Digite o tamanho do gato: \n");
            $pessoa->RegistrarAnimal($nome, $raca, $patas, $cor, $peso, $tamanho);
            break;
        case "Raposa":
            $nome = readline("Digite o nome da raposa: \n");
            $raca = readline("Digite a raca da raposa: \n");
            $patas = 4;
            $cor = readline("Digite a cor da raposa: \n");
            $peso = (float)readline("Digite o peso da raposa: \n");
            $tamanho = (float)readline("Digite o tamanho da raposa: \n");
            $pessoa->RegistrarAnimal($nome, $raca, $patas, $cor, $peso, $tamanho);
            break;
        default:
            echo "Tipo de animal invalido.\n";
            endswitch;
}
