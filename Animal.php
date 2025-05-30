<?php

class Animal{
    public string $nome;
    public string $raca;
    public int $patas;
    public string $cor;
    public float $peso;
    public float $tamanho;

    function Falar(string $raca)
    {

    }
    function __construct()
    {
        $this->nome = "";
        $this->raca = "";
        $this->patas = 0;
        $this->cor = "";
        $this->peso = 0.0;
        $this->tamanho = 0.0;
    }

}