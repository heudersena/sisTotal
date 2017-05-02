<?php

require_once('../../configuracao/bd.php');
$conn = $conn;
try {
    if (isset($_POST['btnCategoria'])) {
        $ca_categoria = strtoupper($_POST['ca_categoria']);
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $sql = ("INSERT INTO categoria (ca_categoria) VALUES (:ca_categoria)");
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ca_categoria', $_POST['ca_categoria'], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt == true) {
           // header('location: ../');
            die();
        }else{
            echo "error";
        }
    }
} catch (PDOException $ex) {
    echo 'ERROR' . $ex->getMessage();
}