<?php
// connexion à la base de données via la classe PDO
$pdo = new PDO('mysql:host=localhost;dbname=smurf', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

// ouverture d'une $_SESSION  pour la connexion utilisateur
session_start();

// pour la gestion des liens, on déclare une constante contenant le chemin absolu du projet
define('URL', 'http://localhost/projet/');

