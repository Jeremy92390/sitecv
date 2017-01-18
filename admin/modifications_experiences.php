<?php require '../connexion/connexion.php'; ?>

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
$id_experience = $_GET['id_experience'];
if($_POST){

		
        $titre_e = addslashes($_POST['titre_e']);
        $sous_titre_e = addslashes($_POST['sous_titre_e']);
        $dates_e = addslashes($_POST['dates_e']);
        $description_e = addslashes($_POST['description_e']);		

	$update = $pdoCV -> query("UPDATE t_experiences SET titre_e = '$titre_e', sous_titre_e = '$sous_titre_e', dates_e = '$dates_e', description_e = '$description_e' WHERE id_experience = '$id_experience' ");
	header('location: experiences.php');
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
	$sql = $pdoCV -> query("SELECT * FROM t_experiences WHERE id_experience = '$id_experience' ");
	$ligne_experience = $sql -> fetch();
 ?>

	<form action="" method="POST">
		<table width="400px" border="1">
			<tr>
				<td>Modification d'une experience</td>	
				<td>

				<input type="text" name="titre_e" size="80" required value="<?php echo $ligne_experience['titre_e']; ?>" >

				<input type="text" name="sous_titre_e" size="80" required value="<?php echo $ligne_experience['sous_titre_e']; ?>" >

				<input type="text" name="dates_e" size="80" required value="<?php echo $ligne_experience['dates_e']; ?>" >

				<textarea id="editor1" name="description_e" size="80" required ><?php echo $ligne_experience['description_e']; ?></textarea>
				<script>CKEDITOR.replace( 'editor1' ); </script>

				<input hidden name="id_experience" value="<?php echo $ligne_experience['id_experience']; ?>" >

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
