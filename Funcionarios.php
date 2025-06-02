<?php
require_once 'Humano.php';

class Funcionarios extends Humano
{
    public string $cargo;
    public float $salario = 0.0;

    public function Pagamento(): void
    {
        $salario = $this->salario ;
        echo "Insira o codigo do cargo:\n";
        echo "1. Vendedor. \n";
        echo "2. Veterinario. \n";
        echo "3. Gerente. \n";
        echo "4. ADMIN \n";
        $opcao = readline("digite o codigo do cargo: \n");
        switch ($opcao):
            case 1:
                $senha = readline("Digite a senha:\n");
                if($senha == 0000){
                    echo "Vendedor salario de: ". $salario = 1518 ."\n";
                }else{
                    echo "Senha Invalida tente novamente...\n";
                }
                break;
            case 2:
                $senha = readline("Digite a senha:\n");
                echo "Veterinario salario de: ". $salario = 3500 ."\n";
                break;
            case 3:
                $senha = readline("Digite a senha:\n");
                if($senha == 9999){
                    echo "Gerente salario de: ". $salario = 6000 .  "\n";
                }else{
                    echo "Senha Invalida tente novamente...\n";
                }
                break;
            case 4:
                $senha = readline("Digite a senha:\n");
                if($senha == 123){
                    echo "ADMIN salario de: ".$salario = 1000000 . "\n";
                }else {
                    echo "Senha Invalida tente novamente...\n";

                }
            default;
                echo "Opcao invalida: \n";
        endswitch;

    }

    public function Trabalhar()
    {
        echo "O funcionário está trabalhando.";
    }
}

