<?php

// Montar o novo nome do arquivo !!!!!!
$nomeDoArquivo = $_FILES["arquivo"]["name"]; // pega o nome antigo
$partes = explode(".",$nomeDoArquivo); // quebra o nome antigo em array para poder pegar apenas a extensão
$nomeNovo =  round(microtime(true)) . ".". end($partes); //pega um número MICROTIME, arredonda (ROUND) e concatena com o último valor do array aonde está a extensão
// Montar o novo nome do arquivo !!!!!!

move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeNovo);

?>
<img src="<?php echo $pasta . $nomeDoArquivo; ?>">
----------------------------
<?php
$servername = "mysql.hostinger.co.uk";
$database = "u266072517_name";
$username = "u266072517_user";
$password = "buystuffpwd";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>