//APAGANDO DADOS DO BANCO


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

$sql "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $sql)){
	echo "Deletados com sucesso";
}else {
	echo "Erro ao deletar dados: ". mysqli_error($conn);
}

mysql_close($conn);

?>
