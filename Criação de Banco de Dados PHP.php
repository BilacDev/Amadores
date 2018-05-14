//CRIANDO BANCO DE DADOS
<?php
$servername = "localhost";
$username = "username";
$password = "password";

//Criar Banco de Dados
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)){
	echo "Banco de Dados Criado";
} else {
	echo "Erro na Criação do Banco de Dados: ". mysql_error($conn);
}

mysqli_close($conn);
?>