//SELECIONANDO DADOS NO BANCO
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

$SQL = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysql_query($conn, $sql);

if (mysqli_num_rows($result)>0){
	while($row = mysql_fetch_assoc($result)){
		echo "id" . $row["id"]. " - Name: ". $row["firstname"]. " ". $row["lastname"]."<br>";		
	}
} else {
	echo "Sem resultado";
}

mysql_close($conn);

?>