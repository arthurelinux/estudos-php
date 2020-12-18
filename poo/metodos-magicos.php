<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    //método construtor, onde poderá chamar os atributos da classe diretamente
    public function __construct($a,$b,$c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        //var_dump('destruir');
    }

    public function __toString(){
        return $this->logradouro." , ".$this->numero." ," .$this->cidade;

    }
}

$meuEndereco = new Endereco("Rua Candido de Souza","172","Solânea");
var_dump($meuEndereco);

//chama um destruct
//unset($meuEndereco);
echo "<br>";
echo$meuEndereco;

