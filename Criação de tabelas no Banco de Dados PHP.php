//CRIANDO TABELAS NO BANCO DE DADOS
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

//SQL para criação de tabelas
$sql = "CREATE TABLE MyGuests (
id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysql_query($conn, $sql)){
	echo "Table MyGuests created successfully";
	} else {
		echo "Error creating table: ". mysqli_error($conn);
	}

?>