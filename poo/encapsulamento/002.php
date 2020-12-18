<?php

    class Pessoa{
        //Public todos veem
        public $nome = "Arthur";
        private $idade = 26;
        // quem pode ver, atributos e métodos da mesma classe, classe extendidas, acessados pelo objeto.
        protected $senha ="123";

        public function verDados (){
            echo $this->nome."</br>";
            echo $this->idade."</br>";
            echo $this->senha."</br>";
        }
    }
    class Programador extends Pessoa {
        public function verDados (){
            echo $this->nome."</br>";
            //private não pode ser chamado fora da sua classe
            echo $this->idade."</br>";
            echo $this->senha."</br>";
        }
    }


    $obj = new Programador;
   //s echo $obj->nome;
    //echo $obj->senha;

    $obj->verDados();