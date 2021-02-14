<?php 
include '../inc/connect.php'; 
include '../php/headernav.php'; 
include '../inc/header.inc.php';
include '../inc/nav.inc.php';
include '../php/logo.php'; 

$listecontact = $pdo -> query ('select * From messages');


echo '<table style="border-collapse: collapse; width: 100%; " border="1">';
echo '<tr>';
// affichage des intitulés des colonnes : 
for($i = 0; $i < $listecontact->columnCount(); $i++) {
    // columnCount() => le nombre de colonnes dans la reponse
    // getColumnMeta() => les informations de la colonne en cours (nous renvoie un tableau array)
    $colonne = $listecontact->getColumnMeta($i);
    echo '<th style="padding: 10px; color: white;">' . $colonne['name'] . '</th>';
}
echo '</tr>';
// affichage des données du tableau
while($ligne = $listecontact->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';

    foreach($ligne AS $valeur) {
        echo '<td style="padding: 10px; color: white;">' . $valeur .  '</td>';
    }

    echo '</tr>';
}
echo '</table>';

