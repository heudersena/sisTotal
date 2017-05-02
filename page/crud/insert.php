<?php

require_once('../../configuracao/bd.php');
$conn = $conn;
try {
	if (isset($_POST['btnCategoria'])) {
		$ca_categoria = $_POST['ca_categoria'];

		$sql = ("INSERT INTO categoria (ca_categoria) VALUES (:ca_categoria)");
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':ca_categoria', $_POST['ca_categoria'], PDO::PARAM_STR);
		$stmt->execute();
		if ($stmt == true) {
			echo "<div class='alert alert-success'>Publicadao com sucesso</div>";
		}else{
			header('location:');
		}
	}
} catch (PDOException $ex) {
	echo 'ERROR' . $ex->getMessage();
}