<?php
require_once 'Humano.php';
require_once "Vendas.php";
require_once "index.php";
require_once "Registros.php";

class Funcionarios extends Humano
{
    public string $cargo;
    public float $salario = 0.0;
    public float $preco;
    public string $produto;


    public function Vender(): void
    {
        $this->produto = (string)readline("Digite o produto: \n");
        $this->preco = (float)readline("Digite o Valor: \n");
        $comprador = readline("Nome do comprador: \n");
        echo "Produto: $this->produto, Preco: R$$this->preco foi comprado por $comprador \n";
        $num = (int)readline("Aperte 1 para sair:\n");
        switch($num):
            case 1:
                return;
                endswitch;


    }

    public function Pagamento(): void
    {
            $salario = $this->salario;
            echo "Insira o codigo do cargo:\n";
            echo "1. Vendedor. \n";
            echo "2. Veterinario. \n";
            echo "3. Gerente. \n";
            echo "4. ADMIN \n";
            $opcao = (int)readline("digite o codigo do cargo: \n");
            switch ($opcao):
                case 1:
                    $senha = (int)readline("Digite a senha:\n");
                    if ($senha == 0000) {
                        echo "Vendedor salario de: " . $salario = 1518 . "\n";
                    } else {
                        echo "Senha Invalida tente novamente...\n";
                    }
                    break;
                case 2:
                    $senha = (int)readline("Digite a senha:\n");
                    echo "Veterinario salario de: " . $salario = 3500 . "\n";
                    break;
                case 3:
                    $senha = (int)readline("Digite a senha:\n");
                    if ($senha == 9999) {
                        echo "Gerente salario de: " . $salario = 6000 . "\n";
                    } else {
                        echo "Senha Invalida tente novamente...\n";
                    }
                    break;
                case 4:
                    $senha = (int)readline("Digite a senha:\n");
                    if ($senha == 123) {
                        echo "ADMIN salario de: " . $salario = 1000000 . "\n";
                    } else {
                        echo "Senha Invalida tente novamente...\n";

                    }
                default;
                    echo "Opcao invalida: \n";
            endswitch;
            return;
        }

    public function Trabalhar()
    {
        echo "O funcionário está trabalhando. \n";
    }
}


