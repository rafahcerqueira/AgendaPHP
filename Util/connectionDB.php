<?php 
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "agenda";

    try {
        $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Conexão falhou: " . $e->getMessage();
    }
?>