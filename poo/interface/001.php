<?php

interface Veiculo {
    public function acelerar($acelerar);
    public function frear($frear);
    public function marcha($marcha);
}
class chevete implements Veiculo {
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

$carro = new chevete();
$carro->acelerar(30);
$carro->frear('10');
$carro->marcha(4);