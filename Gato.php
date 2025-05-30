<?php   
require_once 'Animal.php';
class Gato extends Animal {
   public function __construct($nome, $raca, $patas, $cor, $peso, $tamanho){
        parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho);
     
    }
    public function Falar(){
        echo "MIAU MIAU coloca raca pra mim e saia da minha frente. \n";
    }
}