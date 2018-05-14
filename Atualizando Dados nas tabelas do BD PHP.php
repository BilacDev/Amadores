//ATUALIZANDO DADOS NO BANCO
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

$sql = "UPDATE MyGuests SET lastname='Morais' WHERE id=2";

if (mysqli_query($conn, $sql)){
	echo "Atualização efetuada";
}else {
	echo "Erro de atualização de dados: ". mysqli_error($conn);
}

mysql_close($conn);
?>
