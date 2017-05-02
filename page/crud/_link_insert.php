<?php

require_once('../../configuracao/bd.php');
$conn = $conn;
try {
    if (isset($_POST['btnLink'])) {
        $li_link = strtoupper($_POST['li_link']);
        $li_descricao = strtoupper($_POST['li_descricao']);
        $fk_ca_categoria = strtoupper($_POST['fk_ca_categoria']);

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $sql = ("INSERT INTO link (li_link,li_descricao,fk_ca_categoria) VALUES (:li_link,:li_descricao,:fk_ca_categoria)");
        $stmt = $conn->prepare($sql);
        var_dump($stmt);
        echo "<br>";
        $stmt->bindParam(':li_link', $_POST['li_link'], PDO::PARAM_STR);
        $stmt->bindParam(':li_descricao', $_POST['li_descricao'], PDO::PARAM_STR);
        $stmt->bindParam(':fk_ca_categoria', $_POST['fk_ca_categoria'], PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt == true) {
            echo "foi...";
            header('location: ../');
            die();
        }else{
            echo "error";
            die();
        }
    }
} catch (PDOException $ex) {
    echo 'ERROR' . $ex->getMessage();
}