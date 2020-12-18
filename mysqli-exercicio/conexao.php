<?php
$con = new mysqli("localhost", "admin","root","dbphp7");
if($con->connect_error){
    echo "erro ao conectar";
}
