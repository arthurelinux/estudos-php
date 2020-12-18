<?php
require("conexao.php");
$id=3;
$result = $con->query("DELETE FROM tb_usuarios WHERE id='$id'");
/*
while($row=$result->fetch_array()){
    echo $row['delogin']." ,".$row['desenha']." ,".$row['id'];
}