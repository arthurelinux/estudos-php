<?php
//quando métodos de nomes iguais são utilizados em classes diferentes;

abstract class animal{
    public function falar(){
        return "falar";
    }
    public function mover(){
        return "anda";
    }
}

class cachorro extends animal {
    public function falar(){
        return "Late";
    }
}

class gato extends animal{
    public function falar(){
        return "mia";
    }
}
class passaro extends animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        //parent chama o valor que foi sobreposto pelo polimorfismo
        return "Voa e ".parent::mover();
    }
}



$dog = new cachorro();
echo $dog->falar()."<br>";
echo $dog->mover()."<br><hr>";

$cat = new gato();
echo $cat->falar()."<br>";
echo $cat->mover()."<br><hr>";

$azulao = new passaro();
echo $azulao->falar()."<br>";
echo $azulao->mover()."<br><hr>";