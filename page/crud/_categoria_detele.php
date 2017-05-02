<?php
require_once('../../configuracao/bd.php');
if (isset($_GET['ca_id'])) {
	$conn = $conn;
	$sql = ("DELETE FROM categoria WHERE ca_id = :ca_id");
	var_dump($sql);
	echo "<br>";
	$stmt = $conn->prepare($sql);
	var_dump($stmt);
	echo "<br>";
	$stmt->bindParam(':ca_id', $_GET['ca_id']);
	var_dump($stmt);
	echo "<br>";
	$stmt->execute();
	var_dump($stmt);
	echo "<br>";
	if ($stmt == true) {
			header('location:../');
			exit();
	}
	else{
		echo "deu erro mano";
	}

}



