<div id="compte">
	<?php if (isset($_SESSION['connexion'])) {
		echo '<p><a href="index.php?deconnect=oui">Deconnexion</a></p>';

	} ?>
</div>

<nav>
	<ul class="menu">
  		<li><a href="../admin/index.php">Accueil</a></li>
  		<li><a href="../admin/admin_profil.php">Profil</a></li>
  		<li><a href="../admin/competences.php">Mes compétences</a></li>
  		<li><a href="#">Mes projets</a></li>
  		<li><a href="../admin/experiences.php">Mes experiences</a></li>
  		<li><a href="#">Me contacter</a></li>
	</ul>
</nav>