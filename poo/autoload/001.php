<?php

function __autoload($nomeDaclasse){
    //var_dump($nomeDaclasse);
    require_once("$nomeDaclasse.php");
}


$carro = new DelRei();
$carro->acelerar(20);
