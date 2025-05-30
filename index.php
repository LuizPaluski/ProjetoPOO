<?php
require_once "Animal.php";
require_once "Humano.php";

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
           if(!isset($pessoa) || !$pessoa instanceof Humano){ 
                echo "Pessoa nao registrada ou invalida. Por favor, registre uma pessoa primeiro (Opcao 1).\n";
            }else{
                $novoAnimal = RegistarPets(); 
                if ($novoAnimal instanceof Animal) { 
                    $pessoa->AssociarPet($novoAnimal); 
                    echo "Animal registrado e associado com sucesso a {$pessoa->nome}!\n";
                    $pessoa->mostrarPet(); 
                } else {
                    echo "Falha ao registrar o animal. Tipo de animal pode ser invalido ou outros dados incorretos.\n";
                }
            }
            break;
        default:
            echo "Opcao invalida. Tente novamente.\n";
            break;
    endswitch;
        }
            