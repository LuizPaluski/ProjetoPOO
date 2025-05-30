<?php
require_once "Animal.php";
require_once "Humano.php";
require_once "Funcionaios.php";
require_once "Gato.php";
require_once "Cachorro.php";
require_once "Raposa.php";
require_once "Registros.php";

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
            