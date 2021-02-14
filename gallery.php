<?php include './inc/connect.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
   
<meta charset="UTF-8">
    <title>Grand schtroumpfs</title>
    <link rel="stylesheet" href="css/gallery.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,900" rel="stylesheet">

</head>
<body>
  
        
    <?php include 'php/headersimple.php'; ?>

  <section id="banniere" >
  
    <?php include 'php/logo.php'; ?>
<?php
    $liste_images = $pdo->query("SELECT image FROM images, membre WHERE membre_id = id_membre ORDER BY id_image DESC");

?>

    <section class="principalimage">
        
        <div class="slide">
            <div class="content">
                <h2>Illustration de Pierre</h2>
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <h2>Illustration de Pierre</h2>
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <h2>Dessin de Antoine</h2>
            </div>
        </div> 
        
        <div class="slide">
            <div class="content">
                <h2>Dessin de Alexis</h2>
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <h2>maquette de Paul</h2>
            </div>
        </div>
        

    </section>

    
        <div class="secondimage">
            <h1>Les images les plus récentes</h1>
            
               <?php
               while($image_en_cours = $liste_images->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="container responsive">';
                echo '<div class="gallery">';
                echo '<img src="' . $image_en_cours['image'] . '" alt="Avatar" class="image">';
                echo '</div>';
                echo '</div>';
              }
               ?>
                      <?php if(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] == 2) { 
                        echo '<div class="container responsive">';
                        echo ' <a href="' . URL . 'admin/ajout-image.php">';
                        echo '<div class="gallery">';
                        echo '<img src="images/ajout.png" alt="Ajouter une image" class="image">';
                        echo '</div>';
                        echo '<a>';
                        echo '</div>';
                     } ?>
              
            </div>
   
    <?php include'php/js.php'; ?>
 