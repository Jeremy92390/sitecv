<?php require_once('../connexion/connexion.php'); ?> 

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
	if(isset($_POST['competence'])){ // si on crée une nouvelle compétence
		if($_POST['competence']!='' && $_POST['niveau_c']!=''){ // si competence n'est pas vide
				$competence = addslashes($_POST['competence']);
				$niveau_c = addslashes($_POST['niveau_c']);
		$pdoCV->exec("INSERT INTO t_competences VALUES (NULL, '$competence', '$niveau_c', '1')");
			header("location: ../admin/competences.php");
				exit();
		} // ferme le if
	} // ferme le if(isset)

	if (isset($_GET['id_competence'])){
		$delete = $_GET['id_competence'];
		$sql = "DELETE FROM t_competences WHERE id_competence = '$delete' ";
		$pdoCV -> query($sql);
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
		<script src="../ckeditor/ckeditor.js"></script>
		<title>Site CV Admin: accueil</title>
		
	</head>
	<body>
		<div class="parallax-window" data-parallax="scroll" data-image-src="../img/sunset.jpeg">
				<style>
					@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
				</style>
				<style>
					@import url('https://fonts.googleapis.com/css?family=Black+Ops+One');
				</style>
				<header class="main-header">
					<div id="logo">
						<?php require 'admin_header.php' ?>
					</div>
				</header>
				<div id="mainContent">
					<h1>Espace administratif du site CV</h1>
					<div class="bienvenue">
					</div>
					<sidebar>
						<?php require 'admin_nav.php'; ?>
					</sidebar>
				</div>
				<div id="contenuPrincipal">
					<div>
						<form action="competences.php" method="post">
							<table class="insertion" width="200px" border="6">
								<tr>
									<td>Compétence</td>
									<td><textarea id="editor1" name="competence" id="competence" size="50" required></textarea></td>
								</tr><br>
								<!-- <script>CKEDITOR.replace( 'editor1' ); </script> -->
								
								<tr>
									<td>Niveau</td>
									<td><input type="text" name="niveau_c" id="niveau" size="50"></td><br>
								</tr><br>
								
								<tr>
									<td colspan="2"><input type="submit" name="Insérer données"></td>
								</tr>
							</table>
						</form><br><br>
						<table id="competences" border="2" cellpadding="15" width="500">
							<caption class="title">Les compétences</caption>
							<thead>
								<th>Compétences</th>
								<th>Niveaux</th>
								<th>Modifier</th>
								<th>Supprimer</th>
							</thead>
							<tr>
								<?php $sql = $pdoCV->query("SELECT * FROM t_competences");
								//$ligne = $sql->fetch(); !! Fetch: réserve ou supprime une donnée du jeu de données !!
								 while ($ligne = $sql->fetch()) { ?>
								<td><?php echo $ligne['competence']; ?></td>
								<td><?php echo $ligne['niveau_c']; ?></td>	
								<td><a href="modifications_competences.php?id_competence=<?php echo $ligne['id_competence']; ?>">modifier</a></td>			
								<td><a href="competences.php?id_competence=<?php echo $ligne['id_competence']; ?>">supprimer</a></td>			
							</tr> 
							<?php } ?>
						</table>
					</div>
				</div>
			<?php require_once ('admin_footer.php'); ?>
		</div>
	</body>
</html>