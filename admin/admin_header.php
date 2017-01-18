<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<?php
	$sql = $pdoCV->query("SELECT * FROM utilisateur"); // prépare la requête
	$ligne = $sql->fetch(); // exécute-la
	?>
	<link rel="stylesheet" type="text/css" href="../frameworks/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Site CV Admin: accueil</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
	</style>
	
</head>

<header class="main-header">
		<div id="logo">
		<img src="../img/eagle.png">
		</div>
</header>

<div id="mainContent">