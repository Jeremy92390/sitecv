<?php 

$pdoCV = new PDO('mysql:host=localhost;dbname=sitecv', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8")); 

?>