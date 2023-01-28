<?PHP


include "../../controller/produitC.php";
include "../../controller/localC.php";
include "../../controller/fournisseurC.php";
include "../../controller/categorieC.php";
include "../../controller/chefC.php";

$produitC = new produitC();
$listeProduit= $produitC->afficherProduit();
$categorieC= new categorieC();
$listeCategorie= $categorieC->afficherCategorie();
$categorieC= new categorieC();
$localC = new localC();
$listeLocal= $localC->afficherLocal();
$chefC = new chefC();
$listeChef= $chefC->afficherChef();

$fournisseurC = new fournisseurC();
$listeFournisseur= $fournisseurC->afficherFournisseur();    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>ReyDelMéxico | Home</title>

    <!-- Favicon 
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.php">Rey Del<br>Méx<span>I</span>co</a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">

          <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="index.php#mu-about-us">A PROPOS DE NOUS</a></li>                                             
            <li><a href="index.php#mu-reservation">RESERVATION</a></li>           
            <li><a href="index.php#mu-gallery">GALLERY</a></li>
            <li><a href="index.php#mu-chef">NOS CHEFS</a></li> 
            <li><a href="index.php#mu-evenement">EVENEMENT</a></li> 
            <li><a href="ethos.html">ETHOS</a></li>  
            <li><a href="menu.php">MENU</a></li>  
          </ul>  
          <a href="panier.php"> <img style="position: absolute ;left: 1300px ;bottom: 5px"  src="assets/img/panier.png" width="25" height="25" alt="tab img"></a> 
          <a href="connexion.php"> <img style="position: absolute ;left: 1250px ;bottom: 5px" src="assets/login.jpg" width="25" height="25" alt="tab img"></a> 
          <a href="../back/logOut.php"> <img style="position: absolute ;left: 1300px ;bottom: 60px" src="assets/logout.jpg" width="20" height="20" alt="tab img"></a>                

               
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

 

 

 <!-- Start Restaurant Menu -->
 <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Notre Menu</span>
              <h2>Goûter à nos délices</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
               
              <?PHP
foreach($listeProduit as $produit){
?>
<li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/menu/<?php echo $produit["img"]; ?>" length="80" height="180" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                    <h4></i><?PHP 
                    $cat=$categorieC->afficherElementCategorie($produit['categorie']);
                    echo  $cat->libelle;
                    ?> </h4>
                      <h4></i><?PHP echo $produit['libelle'];?> </h4>
                       <h4></i><?PHP echo $produit['prix']; ?> Dt </h4>
                      
                     
                    </div>
                    <div class="mu-single-chef-social">
                    <h5></i><?PHP echo $produit['description']; ?></h5>
                   
                    <form action="ajouterpanier.php" method="GET">
                              <input type="hidden" id="id" name="id" value="<?php echo  $produit["id"] ?> ">
                              <input type="hidden" id="	img" name="img" value="<?php echo  $produit["img"] ?> ">
                              <input type="hidden" id="	libelle" name="libelle" value="<?php echo  $produit["libelle"] ?>s ">
                              <input type="hidden" id="prix" name="prix" value="<?php echo  $produit['prix'] ?> ">
                              <button class="btn btn-info">ajouter panier</button> 
                              
                            
    
                          </form>
                    </div>
                   
                  </div>
                </li>
 


<?PHP
}
?>
   
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- End Restaurant Menu -->

 

  

 

             
  
  
  

  

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6422.452706209303!2d10.562925132189296!3d36.40371848003221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd61aed04a99b7%3A0x7fc8ae5cc02f7d02!2srey%20del%20m%C3%A9xico!5e0!3m2!1sfr!2stn!4v1618316744843!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="produit">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
            <a href="https://twitter.com/login?lang=fr"><span class="fa fa-twitter"></span></a>
            <a href="https://www.google.com/"><span class="fa fa-google-plus"></span></a>
            <a href="https://www.linkedin.com/login/fr"><span class="fa fa-linkedin"></span></a>
            <a href="https://www.youtube.com/watch?v=SJ2VQ-JMrbg"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright 2021.Tous droits réservés.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>
