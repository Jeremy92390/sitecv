<?php require '../connexion/connexion.php' ?>

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
	
</head>
<body>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
	</style>
	<header class="main-header">
		<div id="logo">
			<?php require 'admin_header.php' ?>
		</div>
	</header>
	<div id="mainContent">
		<h1>Espace administratif du site CV</h1>
		<div class="bienvenue">
			<?php
			echo '<div class="">Bonjour ' . $ligne['prenom'] . " " . $ligne['nom'] . '<br><img src="../img/" alt=""></div>';
			?>
		</div>
		<sidebar>
			<?php require 'admin_nav.php' ?>
		</sidebar>
		<?php require "admin_contener.php" ?>
		<div class="contener">
			<?php 
			echo '<div class="">' . $ligne['nom'] . "<br>" . $ligne['prenom'] . "<br>" . $ligne['email'] . "<br>" . $ligne['tel'] . "<br>" . $ligne['age'] . "<br>" . $ligne['adresse'] . "<br>" . $ligne['code_postale'] . "<br>" . $ligne['ville'] . "<br>" . $ligne['pays'] . '<br></div>';
			?>
		</div>	
	</div>
	<footer>
		<?php require 'admin_footer.php' ?>
	</footer>	
</body>
</html>