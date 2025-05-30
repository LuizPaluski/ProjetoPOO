<?php
require_once 'Animal.php';
class Cachorro extends Animal{
    public function __construct($nome, $raca, $patas, $cor, $peso, $tamanho){
        parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho);
     
    }

    public function Falar()
    {
        echo "Au Au";
    }
}