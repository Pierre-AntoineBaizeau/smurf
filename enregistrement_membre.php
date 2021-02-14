<?php 
include 'inc/connect.php';
// CE FICHIER NE DOIT PAS ETRE APPELE PLUS D'UNE FOIS

// on simule une inscription d'un administrateur provenant d'un formulaire
$pseudo = 'admin';
$mdp = 'soleil';
$email = 'admin@mail.fr';
$prenom = "François";
$nom = "Durand";
$statut = 2; // le statut à 2 permet de savoir que ce membre est admin

var_dump($mdp);
// le mot de passe doit être crypté
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
var_dump($mdp);

// pour enregistrer on se sert d'une methode de PDO : query. (Pour la  sécurité, il faut privilégier les methodes prepare et execute)
$pdo->query("INSERT INTO membre (nom, prenom, pseudo, mdp, email, statut, date_membre) VALUES ('$nom', '$prenom', '$pseudo', '$mdp', '$email', $statut, CURDATE())");



// on simule une inscription d'un membre classique provenant d'un formulaire
$pseudo = 'test';
$mdp = 'test';
$email = 'test@mail.fr';
$prenom = "Marie";
$nom = "Durand";
$statut = 1; // statut 1 = membre clasique (pas admin)

$mdp = password_hash($mdp, PASSWORD_DEFAULT);
$pdo->query("INSERT INTO membre (nom, prenom, pseudo, mdp, email, statut, date_membre) VALUES ('$nom', '$prenom', '$pseudo', '$mdp', '$email', $statut, CURDATE())");