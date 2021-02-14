<?php 
include 'inc/connect.php'; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)

?>

     

<?php 

include 'php/headernav.php'; 
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
include 'php/logo.php'; 

?> 
   <section>
            <div class="conteneur">
                <h1>Inscription</h1>

                			
<form action="inscription.php" method="post" class="formulaire_connexion">

<label for="nom">Veuillez rentrer votre nom : </label>
    <br><br>
<input type="text" name="nom" id="nom" required >

<br><br>

<label for="prenom">Veuillez rentrer votre prenom : </label>
    <br><br>
<input type="text" name="prenom" id="prenom" required >

<br><br>

<label for="pseudo">veuillez rentrer votre pseudo : </label>
    <br><br>
<input type="text" name="pseudo" id="pseudo"  required >

<br><br>

<label for="email">veuillez rentrer votre email : </label>
    <br><br>
<input type="text" name="email" id="email"  required >

<br><br>

<label for="mdp">Mot de passe : </label>
    <br><br>
<input type="password" name="mdp" id="mdp"  required >
<input type="checkbox" onclick="myFunction()">Show Password


<br><br>

<button type="submit" name="connexion" class="form_connexion_submit" id="connexion"><i class="fas fa-arrow-right"></i> Se connecter <i class="fas fa-arrow-left"></i></button>

</form>

            </div>
        <?php  
        ini_set('display_errors', 'off');
  
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['mdp']) ) {
$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $donnees = [
		':nom' => $_POST['nom'],
		':prenom' => $_POST['prenom'],
		':pseudo' => $_POST['pseudo'],
        ':email' => $_POST['email'],
        ':mdp' => $mdp
    ];
    

    $requete = $pdo->prepare(
        "INSERT INTO membre (id_membre , nom , prenom , pseudo , email, mdp , date_membre , statut ) VALUES (NULL , :nom , :prenom , :pseudo , :email , :mdp , CURDATE() , '1' )"
    );
   $ajout = $requete->execute($donnees);

    if($ajout){
        echo 'votre message a bien était envoyé';
    } else {
        echo '<div class="dejapris">';
        echo ' Ce pseudo est deja pris, <br> Essayez en un autre !';
        echo '</div>';    }
    
} 
        ?>

        </section>

       

<?php include 'php/js.php'; ?>