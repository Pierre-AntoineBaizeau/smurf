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


// enregistrement des articles
if(isset($_POST['titre']) && isset($_POST['image']) && isset($_POST['contenu'])) {
    $titre = trim($_POST['titre']);
    $image = trim($_POST['image']);
    $contenu = trim($_POST['contenu']);
    // trim() est une fonction prédéfinie qui enlève les espace en début et en fin de chaine pas au milieu

    // on récupère l'id_membre de l'utilisateur connecté pour le champ membre_id de la table article en bdd
    $membre_id = $_SESSION['membre']['id_membre'];
    // on prépare la requete
    $enregistrement = $pdo->prepare("INSERT INTO article (id_article, titre, membre_id, image, date_enregistrement, contenu) VALUES (NULL, :titre, $membre_id, :image, CURDATE(), :contenu)");
    // on fourni les valeurs des marqueurs nominatifs
    $enregistrement->bindParam(':titre', $titre, PDO::PARAM_STR);
    $enregistrement->bindParam(':image', $image, PDO::PARAM_STR);
    $enregistrement->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $enregistrement->execute();

    /*
        // sans bindParam()
        $data = array(':titre'=> $titre, ':image'=> $image, ':contenu'=> $contenu );

        $enregistrement = $pdo->prepare("INSERT INTO article (id_article, titre, membre_id, image, date_enregistrement, contenu) VALUES (NULL, :titre, $membre_id, :image, CURDATE(), :contenu)");
        $enregistrement->execute($data);
    */


}







include '../php/headernav.php'; 
include '../inc/header.inc.php';
include '../inc/nav.inc.php';
include '../php/logo.php'; 
?>

        <section>
            <div class="conteneur">
                <h1>Ajouter un article</h1>
                <form method="post" action="" class="formulaire_connexion">
                    <label for="titre">Titre</label>
                    <input type="text" name="titre" class="form_connexion" id="titre"><br><br>
                    <label for="image">Image (url)</label>
                    <input type="text" name="image" class="form_connexion" id="image"><br><br>
                    <label for="contenu">Contenu</label>
                    <textarea type="text" name="contenu" class="form_connexion" id="contenu" rows="5"></textarea><hr>
                    <button type="submit" name="enregistrement" class="form_connexion_submit" id="enregistrement"><i class="fas fa-arrow-right"></i> Enregistrement <i class="fas fa-arrow-left"></i></button>
                </form>
            </div>
        </section>


<?php
     include '../php/js.php'; ?> 
