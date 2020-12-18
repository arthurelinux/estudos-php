<?php

class Documento {
    private $numero;
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento {
    public function valiadar(){
        $numero = $this->getNumero();
        if(strlen($numero) == 11){
            echo "válido";

        } else {
            echo "não é válido";
        }
    }
}

$CP = new CPF();
$CP->setNumero('11622233344');
$CP->valiadar();