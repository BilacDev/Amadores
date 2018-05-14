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

