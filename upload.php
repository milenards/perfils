<?php 
include_once "conexao.php";
// $server ="127.0.0.1";    
// $db = "bd_perfils";
// $user = "root";
// $pass = "";
// ----------------

$name = $_POST["nome"];
$email = $_POST["email"]; 
$profissao = $_POST["profissao"];
$descricao = $_POST["descricao"];
$instagram = $_POST["instagram"];
$twitter = $_POST["twitter"];
$facebook = $_POST["facebook"];
$linkedin = $_POST["linkedin"];
$youtube = $_POST["youtube"];
$senha = $_POST["senha"];
$foto = $_POST["foto"];
$fundo = $_POST["fundo"];

$pasta = "/img";

 
$sql = "INSERT INTO perfils (nome, email, profissao, descricao, instagram, twitter, facebook, linkedin, youtube, senha, foto, fundo) VALUES ('$name', '$email', '$profissao', $descricao, $instagram, $twitter, $facebook, $linkedin, $youtube, $senha,$foto,$fundo)"; //variaveis
if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);
?>