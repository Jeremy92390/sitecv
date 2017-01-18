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

<?php require 'admin_header.php' ?>

<?php require 'admin_nav.php' ?> 



<div class="contact">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.891191928657!2d2.3305519512811728!3d48.934764803178396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ed48d3a7e7d%3A0x9a21f2c9fc2cd0a5!2s2+Place+Andr%C3%A9+Malraux%2C+92390+Villeneuve-la-Garenne!5e1!3m2!1sfr!2sfr!4v1484739663342" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>