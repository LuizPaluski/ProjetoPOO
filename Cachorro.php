<?php
require_once 'Animal.php';
class Cachorro extends Animal{
    public string $raca;
    public int $idade;

    public function Falar()
    {
        return "Au Au";
    }
}