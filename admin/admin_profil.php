<?php require '../connexion/connexion.php' ?>

<?php
 session_start(); // à mettre dans toutes les pages SESSION et identifications
// faire ensuite le require si on veut sur toutes les pages admin
if(isset($_SESSION['connexion']) && $_SESSION['connexion']=='connecté'){ // on envoie le formulaire avec le name du boutton, connexion on a cliqué sur le boutton

	$id_utilisateur = $_SESSION['id_utilisateur'];
	$prenom = $_SESSION['prenom'];
	$nom = $_SESSION['nom'];
	echo $_SESSION['connexion'];

}else{
	header('location:connexion.php');
}

// pour se deconnecter
if (isset($_GET['deconnect'])) { // on vide les variables de session
 
	$_SESSION['connexion']='';
	$_SESSION['id_utilisateur']='';
	$_SESSION['prenom']='';
	$_SESSION['nom']='';

	unset($_SESSION['connexion']); // on supprime cette variable

	session_destroy();
	
	header('location:index.php');
}
			

			
		
 ?>

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
		
		<sidebar>
			<?php require 'admin_nav.php' ?>
		</sidebar>
		<?php require "admin_contener.php" ?>
		<div class="contener">
			<?php 
			echo '<div class="">' . $ligne['nom'] . "<br><br>" . $ligne['prenom'] . "<br><br>" . $ligne['email'] . "<br><br>" . $ligne['tel'] . "<br><br>" . $ligne['age'] . "<br><br>" . $ligne['adresse'] . "<br><br>" . $ligne['code_postale'] . "<br><br>" . $ligne['ville'] . "<br><br>" . $ligne['pays'] . '<br><br></div>';
			?>
		</div>
		<div class="text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus debitis ducimus commodi libero esse aliquam quae autem, consectetur quaerat assumenda eius, explicabo harum est necessitatibus dicta beatae ipsum. Pariatur, fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ipsam, quas numquam facere optio nesciunt. Incidunt, rem sequi, distinctio natus reiciendis reprehenderit cum provident cupiditate, nulla, iusto odit libero placeat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aspernatur officia in a libero rem nam nisi, dolor amet provident praesentium, est voluptas ratione qui corrupti sint voluptates nihil magnam.</p>
		</div>
	</div>
	<footer>
		<?php require 'admin_footer.php' ?>
	</footer>	
</body>
</html>