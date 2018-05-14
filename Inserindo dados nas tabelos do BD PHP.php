//INSERINDO DADOS NAS TABELAS DO BANCO DE DADOS
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//criar conexão
$conn = mysqli_connect($servername, $username, $password);

//testa conexão
if (!$conn){
	die("Falha de conexão: ". mysqli_connect_error())
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Hugo', 'Morais', 'hugo.glasswalker@gmail.com')"

if (mysqli_query($conn, $sql)){
	echo "Novo registro efetuado";
} else {
	echo "Erro: ".$sql . "<br>". mysqli_error($conn);
}

mysqli_close($conn);

?>