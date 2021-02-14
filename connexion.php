<?php 
include 'inc/connect.php'; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)
$msg = "";
// Code PHP

// récupération des saisies utilisateur lors de la validation du formulaire
if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    // on interroge la BDD pour récupérer les informations de l'utilisateur sur la base de son pseudo
    $recup_infos = $pdo->query("SELECT * FROM membre WHERE pseudo = '$pseudo'");

    // on vérifie si on a récupéré une ligne.
    if($recup_infos->rowCount() > 0) {
        // le pseudo est bon

        // on vérifie le mdp, pour cela il faut traiter la réponse avec un fetch
        $infos_membre = $recup_infos->fetch(PDO::FETCH_ASSOC);
        // echo '<pre>'; print_r($infos_membre); echo '</pre>';
        if(password_verify($mdp, $infos_membre['mdp'])) {
            // le mdp est bon
            // Pour la connexion, on place les informations de l'utilisateur sauf son mdp dans la session pour pouvoir intéroger la session par la suite.
            $_SESSION['membre']['id_membre'] = $infos_membre['id_membre'];
            $_SESSION['membre']['pseudo'] = $infos_membre['pseudo'];
            $_SESSION['membre']['nom'] = $infos_membre['nom'];
            $_SESSION['membre']['prenom'] = $infos_membre['prenom'];
            $_SESSION['membre']['email'] = $infos_membre['email'];
            $_SESSION['membre']['statut'] = $infos_membre['statut'];

        } else {
            $msg = "<div style='padding: 20px; background-color: red; color: white;'>Mdp incorrect,<br>Veuillez recommencer</div>";
        }

    } else {
        // pseudo incorrect
        $msg = "<div style='padding: 20px; background-color: red; color: white;'>Pseudo incorrect,<br>Veuillez recommencer</div>";
    }


}


include 'php/headernav.php'; 
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
include 'php/logo.php'; 
?>

        <section>
            <div class="conteneur">
                <h1>Connexion</h1>
                <form method="post" action="" class="formulaire_connexion">
                    <?php 
                       
                        echo $msg; //  message utilisateur
                    ?>
                    <hr>
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="form_connexion" id="pseudo"><br><br>

                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" class="form_connexion" id="mdp" >
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <hr>

                    <button type="submit" name="connexion" class="form_connexion_submit" id="connexion"><i class="fas fa-arrow-right"></i> Se connecter <i class="fas fa-arrow-left"></i></button>

                </form>
            </div>
        </section>

       

<?php include 'php/js.php'; ?> 

