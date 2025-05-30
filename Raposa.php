<?php
require_once 'Animal.php';
class Raposa extends Animal {
    public function __construct($nome, $raca, $patas, $cor, $peso, $tamanho){
        parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho);
     
    }
    public function Falar() {
        return "ERRERERERERERE(rosnado) talvez a raposa fale assim";
    }
}