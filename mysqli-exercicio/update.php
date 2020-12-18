<?php
require_once("conexao.php");
$id=2;
$result = $con->query("UPDATE tb_usuarios SET delogin='user2' WHERE id='$id'");
/*
while($row=$result->fetch_array()){
    echo $row['delogin']." ,".$row['desenha']." ,".$row['id'];
}
*/