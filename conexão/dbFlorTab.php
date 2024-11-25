<?php
$server = 'localhost';
$user = 'thalex';
$senha = '1234567';
$banco = 'dbfloricultura';

$connect = mysqli_connect ($server, $user, $senha, $banco);

if(mysqli_connect_errno()){ 
    echo "erro" . mysqli_connect_error();

}else{ echo "funfou";
    $sql = "insert into tbFlor (nome, preço, quantidade)
    values ('orquidia',
    '55','60')";

    mysqli_query($connect,$sql);
    
    mysqli_close($connect);

}
?>