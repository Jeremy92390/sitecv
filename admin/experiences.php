<?php require_once('../connexion/connexion.php'); ?> 

<?php 
    if(isset($_POST['description_e'])){ // si on crée une nouvelle expérience
        if($_POST['description_e']!='' && $_POST['sous_titre_e']!=''){ // si competence n'est pas vide
                $experience = addslashes($_POST['experiences']);
                $titre_e = addslashes($_POST['titre_e']);
                $sous_titre_e = addslashes($_POST['sous_titre_e']);
                $dates_e = addslashes($_POST['dates_e']);
                $description_e = addslashes($_POST['description_e']);
                $pdoCV->exec("INSERT INTO t_experiences VALUES (NULL, '$experience', '$titre_e', '$sous_titre_e', '$dates_e', '$description_e')");
            header("location:experiences.php");
                exit();
        } // ferme le if
    } // ferme le if(isset)

    if (isset($_GET['id_experience'])){
        $delete = $_GET['id_experience'];
        $sql = "DELETE FROM t_experiences WHERE id_experience = '$delete' ";
        $pdoCV -> query($sql);
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
        <title>Site CV Admin</title>
        
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
                    
                <sidebar>
                    <?php require 'admin_nav.php'; ?>
                </sidebar>
            </div>
            <div id="contenuPrincipal">
                <div>
                    <form action="" method="post">
                        <table class="insertion" width="200px" border="1">
                           

                            <tr>
                                <td>Titre </td>
                                <td><input type="text" name="titre_e" id="titre" size="80" required></td>
                            </tr><br>
                            
                            <tr>
                                <td>Sous-titre </td>
                                <td><input type="text" name="sous_titre_e" id="sous_titre" size="80" required></td>
                            </tr><br>

                            <tr>
                                <td>Dates </td>
                                <td><input type="text" name="dates_e" id="dates" size="80" required></td>
                            </tr><br>

                            <tr>
                                <td>Description </td>
                                <td><textarea id="editor1" name="description_e" id="description" size="80"></textarea></td><br>
                            </tr><br>
                            <script>CKEDITOR.replace( 'editor1' ); </script>
                            
                            <tr>
                                <td colspan="2"><input type="submit" name="Insérer données"></td>
                            </tr>
                        </table>
                    </form><br><br>
                    <table id="experiences" border="2" cellpadding="15" width="500">
                        <caption class="title">Les expériences</caption>
                        <thead>
                            <th>Titre</th>
                            <th>Sous-titre</th>
                            <th>Dates</th>
                            <th>Description</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </thead>
                        <tr>
                            <?php $sql = $pdoCV->query("SELECT * FROM t_experiences");
                            $ligne = $sql->fetch();
                             while ($ligne = $sql->fetch()) { ?>
                            <td><?php echo $ligne['titre_e']; ?></td>
                            <td><?php echo $ligne['sous_titre_e']; ?></td>
                            <td><?php echo $ligne['dates_e']; ?></td>
                            <td><?php echo $ligne['description_e']; ?></td>  
                            <td><a href="modifications_experiences.php?id_experience=<?php echo $ligne['id_experience']; ?>">modifier</a></td>          
                            <td><a href="experiences.php?id_experience=<?php echo $ligne['id_experience']; ?>">supprimer</a></td>           
                        </tr> 
                        <?php } ?>
                    </table>
                </div>
            </div>
            <?php require_once ('admin_footer.php'); ?>
        </div>
    </body>
</html>