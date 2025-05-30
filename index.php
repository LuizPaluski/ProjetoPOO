<?php
require_once "Animal.php";
require_once "Humano.php";
require_once "Funcionaios.php";
require_once "Gato.php";
require_once "Cachorro.php";
require_once "Raposa.php";

function RegistroPessoa(Humano $pessoa): void{
    $nome = readline("Digite o nome: \n");
    $idade = (int)readline("Digite a idade: \n");
    $sexo = readline("Digite o sexo: \n");
    $email = readline("Digite o email: \n");
    $telefone = readline("Digite o telefone: \n");
    $endereco = readline("Digite o endereco: \n");

    $pessoa->RegistrarDados($nome, $idade, $sexo, $email, $telefone, $endereco);
}

function RegistarPets(Humano $pessoa):void{

    $animal = readline("Digite o tipo de animal (Cachorro, Gato, Raposa): \n");
    switch($animal):
        case "Cachorro":
            $cachorro = new Cachorro();
            $cachorro->nome = readline("Digite o nome do cachorro: \n");
            $cachorro->idade = (int)readline("Digite a idade do cachorro: \n");
            $cachorro->raca = readline("Digite a raca do cachorro: \n");
            $pessoa->RegitrarAnimal($cachorro);
            break;
        case "Gato":
            $gato = new Gato();
            $gato->nome = readline("Digite o nome do gato: \n");
            $gato->idade = (int)readline("Digite a idade do gato: \n");
            $gato->raca = readline("Digite a raca do gato: \n");
            $pessoa->RegitrarAnimal($gato);
            break;
        case "Raposa":
            $raposa = new Raposa();
            $raposa->nome = readline("Digite o nome da raposa: \n");
            $raposa->idade = (int)readline("Digite a idade da raposa: \n");
            $raposa->corPelo = readline("Digite a cor do pelo da raposa: \n");
            $pessoa->RegitrarAnimal($raposa);
            break;
        default:
            echo "Tipo de animal invalido.\n";
            endswitch;
}




while(true){
    echo "Bem vindo ao servidor da LuizPets!\n";
    echo "Escolha uma funcao:\n";
    echo "1. Registrar Pessoa\n";
    echo "2. Registrar Pets\n";
    $opcao = readline("Digite a opcao: \n");
    switch($opcao):
        case 1:
            $pessoa = new Humano();
            RegistroPessoa($pessoa);
            echo "Pessoa registrada com sucesso!\n";
            break;
        case 2:
            if(!isset($pessoa)){
                echo "Pessoa nao registrada: \n";
            }else{
                RegistarPets($pessoa);
                echo "Animal registrado com sucesso!\n";
            }
            break;
        default:
            echo "Opcao invalida. Tente novamente.\n";
            break;
    endswitch;
        }
            