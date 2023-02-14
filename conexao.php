<?php 
$server ="127.0.0.1";
$db = "bd_perfils";
$user = "root";
$pass = "";

try{
    $conexao = mysqli_connect($server, $user, $pass, $db);
}catch(Exception $e){
    echo "Erro na conexão";
    exit();
}

?>