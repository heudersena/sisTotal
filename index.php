
<?php echo "<a href='page/'>ir</a><br><hr>"; ?>

<?php 

require_once ("configuracao/bd.php"); 

$query = $conn;
$query = $conn->prepare("SELECT * FROM usuario");
$query->execute();
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
	echo "LOGIN: ".$row->us_cpf   ."<br>";
	echo "SENHA: ".$row->us_senha ."<br>";
	echo "NIVEL: ".$row->us_nivel ."<br>";
	echo "<hr>";
}


echo strtoupper("heuder rodrigues");
?>