<?php include './inc/connect.php'; ?>


    <?php include 'php/head.php'; ?> <!-- le php va chercher le head dans le dossier php, cella permet de changer qu'a un seul endroit les modification au lieu de les chercher dans chaque pages -->

<body>
    
		
    <?php include 'php/headernav.php'; ?> <!-- le php fait la meme chose que le head sauf quil va chercher le menu -->
    	  
    
        <section>

    <?php include 'php/logo.php'; ?> <!-- ici il va chercher le logo-->

        	<div class="page3">
        	<figure>
        	
        	<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/smurf-labo1.jpg" style="width:100%" alt="smurf">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/smurfnocopyright1.jpg" style="width:100%" alt="smurf">
   
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/smurfnocopyright2.jpg" style="width:100%" alt="smurf">
    
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
        		
        	<figcaption>
            <h1 class="titredescription">En bref</h1>
        	<div class="scrollbar">
        	<p  class="description">            
            Doyen du village des Schtroumpfs, il se distingue par sa barbe blanche et la couleur rouge de ses vêtements. Il a 542 ans, alors que les autres Schtroumpfs ne sont âgés « que » d'une centaine d'années.
            <br><br><br>
            
            Véritable autorité morale, son statut de chef du village est incontesté parmi les Schtroumpfs. Il est aussi le garant de la stabilité du village, apportant régulièrement la résolution aux problèmes qui menacent les Schtroumpfs.
            <br><br>
            Dans les premières histoires, il parait légèrement autoritaire, mais son caractère s'adoucit au fil des albums.<br>Il demeure toutefois susceptible lorsqu'il est fait allusion à son grand âge, et s'agace régulièrement des défauts de ses schtroumpfs.<br>Figure paternelle, c'est souvent à lui que les Schtroumpfs demandent conseil ; il est toujours concerné par leur bien-être ou l'harmonie de leur communauté. Il est très altruiste et toujours prêt à aider autrui, qu'il soit Schtroumpf ou humain. Lorsque le Grand Schtroumpf constate que ses « petits Schtroumpfs », comme il les appelle affectueusement, ont bouleversé la vie de la communauté en abandonnant leurs valeurs, il les réprimande vertement en leur reprochant de s'être comportés comme des humains.
            <br><br>
            Il est le seul schtroumpf présent dans tous les albums.
            </p>
          </div>
       	    </figcaption>
        	</figure>
        	
        	<h2 class="titreVideo">Musique original des schtroumpfs</h2>
        	
        	</div>
        	
        	<div class="page4">
        	
            <iframe class="video1" src="https://www.youtube.com/embed/rJItMREtfqg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        		
        		       		
        		       		       	       		
        	</div>
        	
        	
       </section>
       <script src="<?php echo URL; ?>js/script_slider.js"></script>

    <?php include'php/js.php'; ?>
