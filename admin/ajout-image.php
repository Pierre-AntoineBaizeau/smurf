<?php 
include '../inc/connect.php'; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)
// Code PHP
// restriction d'accès, si l'utilisateur n'est pas admin on le redirige sur accueil
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:../accueil_blog.php');
} elseif(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] != 2) {
    header('location:../accueil_blog.php');
}






include '../php/headernav.php'; 
include '../inc/header.inc.php';
include '../inc/nav.inc.php';
include '../php/logo.php'; 
?>

        <section>
            <div class="conteneur">
                <h1>Ajouter une image</h1>
                <form method="post" action="" class="formulaire_connexion">
                    <label for="titre">Titre</label>
                    <input type="text" name="titre" class="form_connexion" id="titre" required><br><br>
                    <label for="image">Image (url)</label>
                    <input type="text" name="image" class="form_connexion" id="image"required><br><br>
               
                    <button type="submit" name="enregistrement" class="form_connexion_submit" id="enregistrement"><i class="fas fa-arrow-right"></i> Enregistrement de l'image <i class="fas fa-arrow-left"></i></button>
                </form>
            </div>
<?php
// enregistrement des articles
if(isset($_POST['titre']) && isset($_POST['image'])) {
    $donnees=
    $titre = trim($_POST['titre']);
    $image = trim($_POST['image']);
    // trim() est une fonction prédéfinie qui enlève les espace en début et en fin de chaine pas au milieu

    // on récupère l'id_membre de l'utilisateur connecté pour le champ membre_id de la table article en bdd
    $membre_id = $_SESSION['membre']['id_membre'];
    // on prépare la requete
    $enregistrement = $pdo->prepare("INSERT INTO images (id_image, titre, membre_id, image, date_enregistrement) VALUES (NULL, :titre, $membre_id, :image, CURDATE())");
    // on fourni les valeurs des marqueurs nominatifs
    $enregistrement->bindParam(':titre', $titre, PDO::PARAM_STR);
    $enregistrement->bindParam(':image', $image, PDO::PARAM_STR);
    $enregistrement->execute();


    if($enregistrement){
        echo '<div class="retournertexte">';
        echo ' votre message a bien été envoyé';
        echo '</div>';
        echo '<div class="retourner">';
        echo '<a id="retourner" href="' . URL . 'gallery.php">retourner a la gallery</a>';
        echo '</div>';
    } else {
        echo 'ajout échoué';
    }
    
}

?>
        </section>


<?php
     include '../php/js.php'; ?> 
