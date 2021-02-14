<?php 
include 'inc/connect.php'; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)

// Code PHP
// restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:index.php');
}



include 'php/headernav.php'; 
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
include 'php/logo.php'; 


?>

        <section>
            <div class="conteneur">
                <h1><i class="fas fa-user-circle"></i> Profil</h1>
                <?php 

                    echo '<pre>'; print_r($_SESSION); echo '</pre>';
                ?>
            </div>
        </section>


<?php  include 'php/js.php'; ?> 

