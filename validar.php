<?php 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

include_once "conexao.php";
$sql = "SELECT * FROM `perfils` WHERE email = '$usuario' and senha = '$senha'";

$dados = mysqli_query($conexao, $sql);

if($dados->num_rows >0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:perfil-painel.php");
}else{
    header("location:login.php?msg=invaldo");
}

?>