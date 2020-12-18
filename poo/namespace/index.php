<?php
require_once("vendor/autoload.php");
//require_once("Class/Cadastro.php");
//require_once("Class/Cliente/Cadastro.php");
use Cliente\Cadastro;


$meu = new \Class\Cadastro();
$meu->setNome("Arthur");
$meu->setEmail("arthur@teste.com");
$meu->setSenha("123456");
$meu->registrarVenda();
echo $meu;