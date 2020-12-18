<?php
namespace Cliente;

class Cadastro extends \Cadastro
{
    public function registrarVenda(){
        echo "Foi registrado uma venda de ".$this->getNome();
    }
}