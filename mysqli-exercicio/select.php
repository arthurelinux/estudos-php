<?php
require_once("conexao.php");

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY id");
while($row=$result->fetch_array()){
    echo $row['delogin']." ,".$row['desenha']." ,".$row['id'];
}