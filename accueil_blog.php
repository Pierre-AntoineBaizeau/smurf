<?php 
include 'inc/connect.php'; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)

if(isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
    session_destroy();
    header('location:profil.php');
}


// Code PHP
// affichage du blog dans cette page

// Récupération des article en BDD
$liste_article = $pdo->query("SELECT * FROM article, membre WHERE membre_id = id_membre ORDER BY id_article DESC");

include 'php/headernav.php'; 
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
include 'php/logo.php'; 


?>

        <section>
            <div class="conteneur">
                <h1>Blog</h1>
                <hr>
                <p class="nombre_d_article_blog" style="text-decoration: underline;"><b>Nombre d'article(s) :</b> <?php echo $liste_article->rowCount(); ?> </p>
                <?php 
                    while($article_en_cours = $liste_article->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="article">';

                        echo '<h2 class="titrearticle">' . $article_en_cours['titre'] . '</h2>';
                        echo '<img src="' . $article_en_cours['image'] . '" style=" width: auto; height: 350px;" alt="image pour l\'article ' . $article_en_cours['titre'] . '">';
                        setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
                        echo '<hr><span><b>Par : ' . $article_en_cours['nom'] .' ' . $article_en_cours['prenom'] . '</b> le ' . $article_en_cours['date_enregistrement'] . ' </span>';
                        echo '<hr>';
                        echo '<p>' . $article_en_cours['contenu'] .'</p>';

                        echo '</div>';
                    }
                
                ?>
            </div>
        </section>


<?php include 'php/js.php'; ?> 
