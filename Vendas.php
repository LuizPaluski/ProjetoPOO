<?php
require_once "Humano.php";
require_once "Registros.php";
class RegistroVendas extends Funcionarios{
    public ?Humano $pessoa = null;
    public function Registros(Humano $pessoa)
    {
        parent::Vender();
        $this->produto;
        $this->preco;
        echo "$pessoa->nome comprou $this->produto";


    }
}