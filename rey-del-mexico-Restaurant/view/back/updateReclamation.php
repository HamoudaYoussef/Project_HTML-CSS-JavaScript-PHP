<?php
	include_once '../../controller/reclamationC.php';
    
   
    
    $error = "";
    $reclamation = null;
    $reclamationC = new reclamationC(); 
   
    

	if (
        isset($_POST['statut']) 
       )
        {
		if (
            
            !empty($_POST['statut']) 
           
        ) {
           
			
            $reclamationC->modifierReclamation($_GET['id'],$_POST['statut'] );
            header('Location:showReclamation.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Modifier Reclamation</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">
    	<!-- JS verif-->
        <script src="js/script.js"></script>

</head>

<body class="animsition">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/ahmed.png" alt="reydelmexico" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.html">
                                <i class="fa fa-bar-chart"></i>G??n??ral</a>
                            
                        </li>
                        <li>
                            <a href="showClient.php">
                                <i class="fas fa-users"></i>Clients</a>
                        </li>
                        <li>
                            <a href="showCommande.php">
                                <i class="fas fa-cart-arrow-down"></i>Commandes</a>
                        </li>
                        <li>
                            <a href="showProduit.php">
                                <i class="fa fa-pie-chart"></i>Produits</a>
                        </li>
                        <li>
                            <a href="showCategorie.php">
                                <i class="fa fa-lightbulb-o"></i>Cat??gories</a>
                        </li>
                        <li>
                            <a href="showFournisseur.php">
                                <i class="fas fa-users"></i>Fournisseurs</a>
                        </li>
                        <li>
                            <a href="showReclamation.php">
                                <i class="fas fa-comment-alt"></i>R??clamations</a>
                        </li>
                        <li>
                            <a href="showReservation.php">
                                <i class="far fa-calendar-plus"></i>R??servations</a>
                        </li>
                        <li>
                            <a href="showLivraison.php">
                                <i class="fa fa-automobile" ></i>Livraisons</a>
                        </li>
                        <li>
                            <a href="showCarteFidelite.php">
                                <i class="fa fa-address-card"></i>Cartes Fid??lit??</a>
                        </li>
                        <li>
                            <a href="showChef.php">
                                <i class="fas fa-users"></i>Chefs</a>
                        </li>
                        <li>
                            <a href="showService.php">
                                <i class="	fas fa-utensils"></i>Services de table</a>
                        </li>
                        <li>
                            <a href="showLocal.php">
                                <i class="fas fa-map-marker-alt"></i>Locaux</a>
                        </li>
                        <li>
                            <a href="showEvenement.php">
                                <i class="fas fa-music"></i>Ev??nements</a>
                        </li>
                      
                       
                      
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="reydelmexico" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="index.html">
                                <i class="fa fa-bar-chart"></i>G??n??ral</a>
                            
                        </li>
                        <li>
                            <a href="showClient.php">
                                <i class="fas fa-users"></i>Clients</a>
                        </li>
                        <li>
                            <a href="showCommande.php">
                                <i class="fas fa-cart-arrow-down"></i>Commandes</a>
                        </li>
                        <li>
                            <a href="showProduit.php">
                                <i class="fa fa-pie-chart"></i>Produits</a>
                        </li>
                        <li>
                            <a href="showCategorie.php">
                                <i class="fa fa-lightbulb-o"></i>Cat??gories</a>
                        </li>
                        <li>
                            <a href="showFournisseur.php">
                                <i class="fas fa-users"></i>Fournisseurs</a>
                        </li>
                        <li>
                            <a href="showReclamation.php">
                                <i class="fas fa-comment-alt"></i>R??clamations</a>
                        </li>
                        <li>
                            <a href="showReservation.php">
                                <i class="far fa-calendar-plus"></i>R??servations</a>
                        </li>
                        <li>
                            <a href="showLivraison.php">
                                <i class="fa fa-automobile" ></i>Livraisons</a>
                        </li>
                        <li>
                            <a href="showCarteFidelite.php">
                                <i class="fa fa-address-card"></i>Cartes Fid??lit??</a>
                        </li>
                        <li>
                            <a href="showChef.php">
                                <i class="fas fa-users"></i>Chefs</a>
                        </li>
                        <li>
                            <a href="showService.php">
                                <i class="	fas fa-utensils"></i>Services de table</a>
                        </li>
                        <li>
                            <a href="showLocal.php">
                                <i class="fas fa-map-marker-alt"></i>Locaux</a>
                        </li>
                        <li>
                            <a href="showEvenement.php">
                                <i class="fas fa-music"></i>Ev??nements</a>
                        </li>
                      
                      
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							
							<div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">n</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>Vous avez n nouveaux messages</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="back/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">Voir tous les messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">n</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>Vous avez 3 nouveaux Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">Voir tous les emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">n</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Vous avez n nouvelles notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>vous avez une notification de mail</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="Fedi Naimi" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">fedi naimi</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">fedi naimi </a>
                                                    </h5>
                                                    <span class="email">fedi.naimi@esprit.tn</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Compte</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Parametres</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logOut.html"> <!--page officielle0-->
                                                    <i class="zmdi zmdi-power"></i>Se d??connecter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						
						<div class="row">
                            <div class="col-lg-9">
								<br>
                              
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                    <a href="showReclamation.php">  <i class="zmdi zmdi text-center"></i>Retour ?? la liste</button></a>
                                </div>
                            </div>
                        
                            <div  id="erreur"> </div>
                                 
                               
                        
                                 <hr>
                                 <br>
                                <h2 class="title-1 m-b-25 text-center">Update</h2>
                                <div id="error">
                                    <?php echo $error; ?>
                                </div>
                                <?php
			if (isset($_GET['id']))
			{
				$reclamation = $reclamationC->recupererReclamation1($_GET['id']);	
		 ?>
                <form action="" method="POST" >
                  <table  align="center">
                      <div>
                  <tr>
                    <td>    <label for="statut">Etat: </label></td> 
                </tr> 
                 <tr>
                    <td><input type="number" name="statut" id="statut"  ></td>
                </tr>
                
               
                </div>
              
                
                     <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <br><br><br><br>
                                    <input type="submit" class="au-btn au-btn-icon au-btn--blue" value="Envoyer">
                                    <input type="reset" class="au-btn au-btn-icon au-btn--blue" value="Annuler"> 
                                </div>
                            </div>
                </div></td></tr>
                
                
                  </table>
        </form>                   
        <?php
		}
		?>                                                         
   </div>
</div>
						
                 	<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits r??serv??s. <a href="../../../view/front/1.php">Rey Del M??xico</a>.</p>
										</div>
								</div>
						</div>

					</div>
				</div>
			</div>
		
		<!-- END PAGE CONTAINER-->

	

	<!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="vendor/slick/slick.min.js">
	</script>
	<script src="vendor/wow/wow.min.js"></script>
	<script src="vendor/animsition/animsition.min.js"></script>
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="vendor/circle-progress/circle-progress.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->







