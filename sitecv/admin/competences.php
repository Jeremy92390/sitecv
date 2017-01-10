<?php require_once('../connexion/connexion.php'); ?> 

<?php 
	if(isset($_POST['competence'])){ // si on crée une nouvelle compétence
		if($_POST['competence']!=''){ // si competence n'est pas vide
				$competence = addslashes($_POST['competence']);
		$pdoCV->exec("INSERT INTO t_competences VALUES (NULL, '$competence')");
			header("location: ../admin/competences.php");
				exit();
		} // ferme le if
	} // ferme le if(isset)

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
			<div class="bienvenue">
				<?php
				echo '<div class="">Bonjour ' . $ligne['prenom'] . " " . $ligne['nom'] . '<br><img src="../img/" alt=""></div>';
				?>
			</div>
			<sidebar>
				<nav>
					<ul class="menu">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="#">Profil</a></li>
						<li class="active"><a href="../admin/competences.php">Mes compétences</a></li>
						<li><a href="#">Mes projets</a></li>
						<li><a href="#">Me contacter</a></li>
					</ul>
				</nav>
			</sidebar>
		</div>
		<div id="contenuPrincipal">
			<div>
				<form action="competences.php" method="post">
					<table class="insertion" width="200px" border="1">
						<tr>
							<td>Compétence</td>
							<td><input type="text" name="competence" id="competence" size="50" required></td>
						</tr><br>
						<tr>
							<td colspan="2"><input type="submit" value="Insérer une compétence"></td>
						</tr>
						<tr>
							<td>Niveau</td>
							<td><input type="text" name="niveau" id="niveau" size="50"></td><br>
						</tr><br>
						<tr>
							<td colspan="2"><input type="submit" value="Insérer un niveau"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="Insérer données"></td>
						</tr>
					</table>
				</form><br><br>
				<table id="competences" border="2" cellpadding="15" width="500">
					<caption class="title">Les Compétences</caption>
					<thead>
						<th>Compétences</th>
						<th>Niveaux</th>
						<th>Supprimer</th>
					</thead>
					<tr>
						<?php while ($ligne = $sql->fetch()) { ?>
						<td><?php echo $ligne['competence']; ?></td>
						<td><?php echo $ligne['niveaux']; ?></td>	
						<td><a href="modifications.php?id_competences=<?php echo $ligne['id_competence']; ?>">modifier</a></td>			
						<td><a href="competences.php?id_competences=<?php echo $ligne['id_competence']; ?>">supprimer</a></td>			
					</tr> 
					<?php } ?>
				</table>
			</div>
		</div>
		<?php require_once ('admin_footer.php'); ?>
	</body>
</html>