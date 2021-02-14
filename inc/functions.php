<?php

if( isset($_POST['contenu']) && ($_POST['titre']) && ($_POST['datesimple']) && ($_POST['date']) && ($_POST['contenu']) != '' && ($_POST['titre']) != '' && ($_POST['date']) != '' && ($_POST['datesimple']) != '' ){

    $donnees = [
        'contenu' => $_POST['contenu'],
        'titre' => $_POST['titre'],
        'date' => $_POST['date'],
        'datesimple' => $_POST['datesimple']

    ];

    $requete = $database->prepare(
        "INSERT INTO blog (contenu , titre , date , datesimple) VALUES (:contenu , :titre , :date, :datesimple)"
    );
    $ajout = $requete->execute($donnees);

    if($ajout){
        echo 'ajout réussi';
    } else {
        echo 'ajout échoué';
    }
    // echo $_POST['tweet'];
}
?> <!-- ce code de php va envoyer, ce que l'internaute a rempli dans le site c est a dire le titre et le contenu, mais il va également envoyer la date avec l'heur et la minute et la date sans les heures et les minutes pour ue celle suis puisse s'envoyer dans la base de donner dans la base de donner et si un champ n est pas rempli rien ne va s envoyer dans la base de donner -->
