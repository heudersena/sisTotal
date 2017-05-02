<?php
try {
	$user = "site.local";
	$senha = "123456";
	$conn = new PDO('mysql:host=127.0.0.1;dbname=sistotal;charset=utf8',$user,$senha);
} catch (PDOException $e) {
	echo 'ERROR'.$E->getMessage();
}