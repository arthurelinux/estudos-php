<?php

    class Pessoa{
        //Public todos veem
        public $nome = "Arthur";
        // quem pode ver, atributos e métodos da mesma classe, classe extendidas, acessados pelo objeto.
        private $idade = 26;
        protected $senha ="123";

        public function verDados (){
            echo $this->nome."</br>";
            echo $this->idade."</br>";
            echo $this->senha."</br>";
        }
    }

    $obj = new Pessoa;
   //s echo $obj->nome;
    //echo $obj->senha;

    $obj->verDados();