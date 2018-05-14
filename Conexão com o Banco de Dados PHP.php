//CONECTANDO AO BANCO DE DADOS

<?php
$servername = "localhost";
$username = "username";
$password = "password";

//criar conexão
$conn = mysqli_connect($servername, $username, $password);

//testa conexão
if (!$conn){
	die("Falha de conexão: ". mysqli_connect_error())
}
echo "Conexão sucedida";
?>

