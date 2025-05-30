<?php
abstract class Animal{
    public string $nome;
    public string $raca;
    public int $patas;
    public string $cor;
    public float $peso;
    public float $tamanho;

    function Falar( )
    {
        echo "Animal nao fala tirando o papagaio e o corvo\n";
    }

    public function __construct($nome, $raca, $patas, $cor, $peso, $tamanho){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->patas = $patas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
     


    }
}