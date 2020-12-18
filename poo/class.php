<?php
class Pessoas{
    public $nome;

    public function falar()
    {

        return "Meu nome é".$this->nome;
    }
}

$arthur = new Pessoas();
$arthur->nome="arthur";
echo $arthur->falar();
