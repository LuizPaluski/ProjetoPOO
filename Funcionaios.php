<?php
require_once 'Humano.php';

class Funcionario extends Humano
{
    public string $cargo;
    public float $salario;

    public function __construct()
    {
        $this->cargo = "";
        $this->salario = 0.0;
    }

    public function Trabalhar()
    {
        return "O funcionário está trabalhando.";
    }
}