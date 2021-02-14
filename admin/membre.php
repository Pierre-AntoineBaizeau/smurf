<?php 
include '../inc/connect.php'; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)

// Code PHP
// affichage du blog dans cette page

// Récupération des article en BDD
$liste_membre = $pdo->query("SELECT pseudo, nom, prenom, email, date_membre, statut FROM membre ORDER BY id_membre DESC");

include '../php/headernav.php'; 
include '../inc/header.inc.php';
include '../inc/nav.inc.php';
include '../php/logo.php'; 

?>

        <section>
            <div class="conteneur">
                <h1 class="">liste des membres</h1>
                <hr>
                <p><b>Nombre des membres :</b> <?php echo $liste_membre->rowCount(); ?> </p>
                <p class="statut">statut 1 = membre <br>statut 2 = admin</p>

               <hr>

                <?php 
                    while($membres = $liste_membre->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="article" ';
                       
                        echo '<p>Statut : <b>' . $membres['statut'] . '</b></p>';
                        echo '<p>Pseudo : <b>' . $membres['pseudo'] . '</b></p>';
                        echo '<p>Nom de famille : <b>' . $membres['nom'] . '</b></p>';
                        echo 'Prénom : <b>' . $membres['prenom'] .'</b>';
                        echo '<p>Email : <b>' . $membres['email'] .'</b></p>';
                        echo '<p>Membre depuis le <b>' . $membres['date_membre'] .'</b></p>';


                        echo '</div>';
                    }
                
                ?>
            </div>
        </section>


<?php
     include '../php/js.php'; ?> 