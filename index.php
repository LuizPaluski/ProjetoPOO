<?php
require_once "Animal.php";
require_once "Humano.php";
require_once "Funcionarios.php";
require_once "Gato.php";
require_once "Cachorro.php";
require_once "Raposa.php";
require_once "Registros.php";

while(true){
    echo "Bem vindo ao servidor da LuizPets!\n";
    echo "Escolha uma funcao:\n";
    echo "1. Registrar Pessoa\n";
    echo "2. Registrar Pets\n";
    echo "3. Ouvir Animal\n";
    echo "4. Sistema funcionarios: \n";
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
                }
            }
           break;
        case 3:
            if (isset($pessoa) && $pessoa instanceof Humano && $pessoa->pet instanceof Animal) {
                echo "O pet de". " {$pessoa->nome}, {$pessoa->pet->nome}, faz: ". "{$pessoa->pet->Falar()}\n";
            } else {
                echo "Nenhuma pessoa com pet registrado encontrada. Registre uma pessoa e um pet primeiro.\n";
            }
            break;
        case 4:
            $senhafuncionario  = readline("Digite a senha: ");
            if($senhafuncionario == "naotemsenha"){
                $funcionario = new Funcionarios();
                echo $funcionario->Pagamento(). $funcionario->Trabalhar();
            }else {
                echo "Senha incorreta. Tente novamente! \n";
            }
        default:
            echo "Opcao invalida. Tente novamente!.\n";
            break;
    endswitch;
        }
            