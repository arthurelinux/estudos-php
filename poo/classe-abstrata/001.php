<?php
interface Veiculo {
    public function acelerar($acelerar);
    public function frear($frear);
    public function marcha($marcha);
}

//Classe abstrata não pode ser chamada diretamente
abstract class automovel implements Veiculo {
    public function acelerar($acelerar){
        echo "acelerou ".$acelerar." km/h <br>";
    }
    public function frear($frear){
        echo "frenou ".$frear." km/h <br>";
    }
    public function marcha($marcha){
        echo "passou para".$marcha;
    }
}

//classe necessária para executar os métodos da classe abstrata
class DelRei extends automovel{
    public function empurrar(){

    }
}
$carro= new DelRei();
$carro->acelerar("200");
