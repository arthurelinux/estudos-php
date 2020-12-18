<?php

class Documento {
     private $numero;

     public function getNumero(){
         return $this->numero;
     }

     public function setNumero($numero){
         $validacao = Documento::validar($numero);
         $this->numero =$numero;
     }

     public static function validar($cpf){

        if($cpf == "111111111"){
            echo "esse é inválido";
        }

     }
}

$cpf = new Documento();
$cpf->setNumero("111111111");
//var_dump($cpf->getNumero());