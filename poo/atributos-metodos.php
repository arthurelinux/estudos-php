<?php
class Carro{
    private $modelo;
    private $valor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }



    public function exibir(){
        return array(
            "modelo">$this->getModelo(),
            "valor"=>$this->getValor(),
            "ano"=>$this->getAno()
        );
           
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setValor("2000");
$gol->setAno("2006");

print_r($gol->exibir());