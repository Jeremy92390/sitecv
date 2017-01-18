<?php
	$sql = $pdoCV->query("SELECT nom, prenom, email, tel, age, adresse, code_postale, ville, pays FROM utilisateur"); // prépare la requête
	$ligne = $sql->fetch(); // exécute-la
?>