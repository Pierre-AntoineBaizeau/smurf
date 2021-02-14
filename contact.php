<?php include 'inc/connect.php'; ?>


    <?php include'php/head.php'; ?>


<body>

        
    <?php include'php/headernav.php'; ?> 
    	  

    
        <section id="banniere" class="page1">

    <?php include'php/logo.php'; ?> 

       		
       		<h2 id="contactez">CONTACTEZ MOI</h2>
				<hr id="contactezhr">
        		<div id="divpage4">
			
<form action="contact.php" method="POST">

				<label for="nom">Nom</label>
					<br><br>
				<input type="text" name="nom" id="nom" size="110" required >

			<br><br>

				<label for="telephone">Télephone</label>
			<br><br>
				<input type="tel" name="telephone" id="telephone" size="110" required >

			<br><br>
			<p>
			
				<label for="email">
					<span>Veuillez saisir une adresse e-mail :</span>
			<br><br>
				<input type="email" name="email" id="email" size="110" required >
				<span class="error" aria-live="polite"></span>
			<br><br>
		</label>
		</p>
		
				<label for="message">Message</label>
			<br><br>
				<textarea name="message" id="message" required ></textarea>
				
			
		<button class="buttonenvoyer" type="submit" name="envoyer">Envoyé</button>
        	
	</form>
	
	 <?php 

if( isset($_POST['message']) && ($_POST['email']) && ($_POST['telephone']) && ($_POST['nom']) && ($_POST['message']) != '' && ($_POST['email']) != '' && ($_POST['telephone']) != '' && ($_POST['nom']) != '' ){

    $donnees = [
		'message' => $_POST['message'],
		'email' => $_POST['email'],
		'telephone' => $_POST['telephone'],
		'nom' => $_POST['nom']
    ];

    $requete = $pdo->prepare(
        "INSERT INTO messages (message , email , telephone , nom) VALUES (:message , :email , :telephone , :nom)"
    );
    $ajout = $requete->execute($donnees);

    if($ajout){
        echo 'votre message a bien était envoyé';
    } else {
        echo 'ajout échoué';
    }
    
}
?> 

    <?php include'php/js.php'; ?> 

