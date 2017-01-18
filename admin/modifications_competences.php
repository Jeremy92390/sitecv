<?php require '../connexion/connexion.php'; ?>

<?= 
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

<?php
//Gestion des contenus
//mise a jour d'une compétence
	// if(isset($_POST['competence'])){// par le nom du premier input
		
	// 	$competence = addslashes($_POST['competence']);
	// 	$niveau_c = addslashes($_POST['niveau_c']);
	// 	$id_competence = $_POST['id_competence'];
	// 	$pdoCV->exec("UPDATE t_competences SET competence='$competence', niveau_c ='$niveau_c' WHERE id_competence='$id_competence'");

	// 		header('location: ../admin/competence.php'); //le header location pour revenir à la liste des compétences de l'utilisateur.
	// 	exit();	
	// }
$id_competence = $_GET['id_competence'];
if($_POST){

	$competence = $_POST['competence'];
	$niveau_c = $_POST['niveau_c'];
	$utilisateur_id = $_POST['utilisateur_id'];

	$update = $pdoCV -> query("UPDATE t_competences SET niveau_c = '$niveau_c', competence = '$competence', utilisateur_id = '$utilisateur_id'  WHERE id_competence = '$id_competence' ");
	header('location: competences.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset "utf-8">

	<title></title>
	<script src="../ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?php 
	$sql = $pdoCV -> query("SELECT * FROM t_competences WHERE id_competence = '$id_competence' ");
	$ligne_competence = $sql -> fetch();
 ?>

	<form action="" method="POST">
		<table width="200px" border="1">
			<tr>
				<td>Modification d'une compétence</td>	
				<td>	
				<textarea id="editor1"> name="competence" size="50" required ><?php echo $ligne_competence['competence']; ?></textarea>
				<script>CKEDITOR.replace( 'editor1' ); </script>

				<input type="text" name="niveau_c" size="50" required value="<?php echo $ligne_competence['niveau_c']; ?>" >

				<input hidden name="utilisateur_id" value="<?php echo $ligne_competence['utilisateur_id']; ?>" >
				</td>
			</tr>
			<tr>	
				<td colspan="2"><input type="submit" value="Mettre à jour"></td>
			</tr>	
		
		</table>
	</form>
	<!-- Fin du form modification -->
</body>
</html>
