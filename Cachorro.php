<?php
require_once 'Animal.php';
class Cachorro extends Animal{
    public int $auturalatido;

    public function Falar($raca)
    {
        return "Au Au";
    }
}