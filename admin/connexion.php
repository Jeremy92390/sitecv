<?php require_once('../connexion/connexion.php'); ?> 

<?php 
session_start(); // à mettre dans toutes les pages SESSION et identifications

if(isset($_POST['connexion'])){ // on envoie le formulaire avec le name du boutton, connexion on a cliqué sur le boutton
	$email=addslashes($_POST['email']);
	$mdp=addslashes($_POST['mdp']);

		$sql = $pdoCV->prepare("SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mdp' "); // on vérifie le courriel et le mot de passe et ...
		$sql->execute();
		$nbr_utilisateur= $sql->rowCount(); // on compte, et s'il y est, il répond 1 sinon, le compte répond 0 (est-ce le vrai admin ou pas?)


			if ($nbr_utilisateur==0) {
				$msg_connexion_err="Erreur d'authentification !";
			}else{ // on trouve l'email et le mdp c'est bien l'admin il est bien inscrit
				$ligne = $sql->fetch(); // Pour retrouver son nom et prenom
				// echo $email;

				$_SESSION['connexion']='connecté';
				$_SESSION['id_utilisateur']=$ligne['id_utilisateur'];
				$_SESSION['prenom']=$ligne['prenom'];
				$_SESSION['nom']=$ligne['nom'];

					header('location:index.php'); // vers la page d'accueil de l'admin
			}

}


 ?>

<?php require_once('admin_header.php'); ?>

<?php require "admin_contener.php" ?>		
		
<div id="contenuPrincipal">
	<p>Bienvenue</p>
	<form action="" method="POST" id="VOIR">
		<fieldset>
			<legend>
				Je m'identifie
				<?php //echo "<br>".$msg_connexion_err; ?>
				<?php //echo "<br>".$msg_connexion_ok; ?>
			</legend>
			<label for="email">Email : </label>
			<input name="email" type="email" required id="email" placeholder="rentrez votre email" tabindex="1" size="35" aria-required="true"><br>
			<label for="mdp">Mot de passe : </label>
			<input name="mdp" type="password" required tabindex="2" size="10" maxlength="10">
		</fieldset>
		<input type="reset" tabindex="3" value="Effacer">
		<input name="connexion" type="submit" tabindex="4" value="Me connecter">
	</form>
</div>


<?php require_once ('admin_footer.php'); ?>