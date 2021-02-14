        <nav class="navblog">
            <div class="conteneur">
                <div class="flex">
                    <a href="<?php echo URL; ?>accueil_blog.php">Article</a> 

                    <?php if(empty($_SESSION['membre'])) { ?>   

                        <a href="<?php echo URL; ?>connexion.php">Connexion</a>
                        <a href="<?php echo URL; ?>inscription.php">Inscription</a>

                    <?php } else { ?>

                        <a href="<?php echo URL; ?>accueil_blog.php?action=deconnexion">Déconnexion</a>
                        <a href="<?php echo URL; ?>profil.php">Profil</a>

                    <?php } ?>

                    <?php if(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] == 2) { 
                        echo '<a href="' . URL . 'admin/gestion.php">Ajout d\'un article</a>';
                        echo '<a href="' . URL . 'admin/ajout-image.php">Ajout d\'une image</a>';
                        echo '<a href="' . URL . 'admin/membre.php">Membres</a>';
                        echo '<a href="' . URL . 'admin/gestioncontact.php">Demandes de contact</a>';
                     } ?>

                </div>
            </div>
        </nav>