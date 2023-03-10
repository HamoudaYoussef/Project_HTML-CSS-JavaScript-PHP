<?PHP
	include "../../controller/produitC.php";

	$produitC = new produitC();
	$listepproduit= $produitC->afficherProduit();

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
	<title>Produit</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/ahmed.png" alt="CoolAdmin" />
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
                            <a href="showClientlient.php">
                                <i class="fas fa-users"></i>Clients</a>
                        </li>
                        <li>
                            <a href="commande.php">
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
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
                            <a href="showClientlient.php">
                                <i class="fas fa-users"></i>Clients</a>
                        </li>
                        <li>
                            <a href="commande.php">
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
							<form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" id="myInput" onkeyup="myFunction()" placeholder="rechercher commande" title="type in a name" />
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
								<button class="au-btn--submit" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
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
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
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
                                                <a href="1.html"> <!--page officielle0-->
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
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <a href="addProduit.php">  <i class="zmdi zmdi-plus text-center"></i>Ajouter Produit </a></button>
                                        
                                </div>
                                
                            </div>

                        </div>
                        
						<div class="row">
                            <div class="col-lg-9">
								<br>
                                <h2 class="title-1 m-b-25">Informations Produits</h2>
                                <div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>

         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table id="dataTable" class="table table-borderless table-striped table-earning" >
                                   
			<tr>
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Libelle</th>
                                                <th class="text-center">Nb Calories</th>
                                                <th class="text-center">Prix</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Cat??gorie</th>
                                                <th class="text-center">Fournisseur</th>
                                                
                                                <th class="text-center"></th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        <?PHP
foreach($listepproduit as $produit){
?>
<tr>
<td class="text-center"><?PHP echo $produit['id']; ?></td>
<td><img src="../front/assets/img/menu/<?php echo $produit["img"]; ?>" length="25" height="25" alt="image produit "/></td>
<td class="text-center"><?PHP echo $produit['libelle']; ?></td>
<td class="text-center"><?PHP echo $produit['nb_calories']; ?></td>
<td class="text-center"><?PHP echo $produit['prix']; ?></td>
<td class="text-center"><?PHP echo $produit['description']; ?></td>
<td class="text-center"><?PHP echo $produit['categorie']; ?></td>
<td class="text-center"><?PHP echo $produit['fournisseur']; ?></td>
<td class="text-center"> 
<form method="POST" action="deleteProduit.php">
<button type="submit" name="supprimer" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Supprimer</button>
 <input type="hidden" value=<?PHP echo $produit['id']; ?> name="id">
 </form>  
 </td>

 <td class="text-center"> 
 <button class="au-btn au-btn-icon au-btn--blue">
 <a href="updateProduit.php?id=<?PHP echo $produit['id']; ?>">
 <i class="zmdi zmdi"></i>Modifier</button>
  </a>
 </td>
</tr>
<?PHP
}
?>
                                       
                                        </tbody>
                                    </table>
                                    <a href="imprimerProduit.php?id=<?PHP echo $produit['id']; ?>">
 <i class="zmdi zmdi"></i>imprimer</button>
  </a>
                                </div>

                            </div>
						
						<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits r??serv??s. <a href="1.html">Rey Del M??xico</a>.</p>
										</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTAINER-->

	</div>

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
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
