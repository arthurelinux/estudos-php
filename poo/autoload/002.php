<?php
function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php")===true){

        require_once($nomeClasse.".php");

    }
}
//autoload numa pasta especifica
//pode ser bom criar uma única pasta para as classes
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    if(file_exists("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php")===true){

        require_once("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");

    }
});

$carro = new DelRei();
$carro->acelerar(20);