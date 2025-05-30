<?php
require_once 'Animal.php';
class Cachorro extends Animal{
    public int $auturalatido;
    public string $raca;
    public int $idade;

    public function Falar()
    {
        return "Au Au";
    }
}