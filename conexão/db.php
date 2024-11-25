<?php
$SERVER='localhost';
$user= 'thalex';
$pass = '1234567';
$database = 'dbfloricultura';

$con = mysqli_connect($SERVER, $user, $pass, $database);

if(mysqli_connect_errno()){
    echo "Erro ao conectar o banco de dados " .  mysqli_connect_error();
}else
{
    echo "Banco de dados conectado.";
    mysqli_close($con);
}

?>