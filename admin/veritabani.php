<?php
$mysqlsunucu = "localhost";
$veritabani_ismi="proje";
$mysqlkullanici = "root";
$mysqlsifre = "";
try {
    $conn = new PDO("mysql:host=$mysqlsunucu;dbname=$veritabani_ismi;charset=utf8", $mysqlkullanici, $mysqlsifre);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Bağlantı başarılı"; 
    }
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>