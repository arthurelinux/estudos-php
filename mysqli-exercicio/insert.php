<?php
require("conexao.php");
$login = "user";
$senha ="123456";
$stmt= $con->prepare("INSERT INTO tb_usuarios(delogin, desenha) VALUES(?,?)");
$stmt->bind_param("ss",$login,$senha);
$stmt->execute();