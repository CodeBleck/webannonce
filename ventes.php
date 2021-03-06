<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Categories :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- language-select -->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>


<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
<!-- //language-select -->
<!-- responsive tabs -->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
<!-- /responsive tabs -->
</head>
<body>
	<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
                    <?php include("navmenu.php"); ?>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button"> </button>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="mobileapp.php"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="signin.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="#"><span class="active uls-trigger"><i class="fa fa-language" aria-hidden="true"></i>languages</span></a>
					</li>
					<li class="dropdown head-dpdn">
						<div class="header-right">			
	<!-- Large modal -->
			<div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-globe" aria-hidden="true"></i>Select City</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" action="#" method="get">
										<div class="form-group">
											<!-- select  location -->
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.php"><span>Re</span>sale-v2</a></h1>
				</div>
				<div class="agileits_search">
					<?php include("formsearchhead.php") ?>
				<a class="post-w3layouts-ad" href="post-ad.php">Post Free Ad</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Categories</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container">
			<h2 class="w3-head">Ventes</h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<div class="agileits-tab_nav">
					<ul class="resp-tabs-list hor_1">
						<li class="mvente">Immobiliers</li>
						<li class="mvente">Mobiles</li>
						<li class="mvente">Electroniques & Electromenenagers</li>
						<li class="mvente">Automobiles</li>
						<li class="mvente">Maisons et terrains</li>
						<li class="mvente">Cosmetiques</li>
						
						<li class="mvente">Animaux domestiques</li>
						<li class="mvente">Fournitures scolaires</li>
						<li class="mvente">Vestmentaires</li>
						<li class="mvente">Jouets</li>
						<li class="mvente">Bijoux</li>
						
					</ul>
						<a class="w3ls-ads" href="all-classifieds.php">View all Ads</a>
					</div>
					<div class="resp-tabs-container hor_1">
						<span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>CAMEROUN</strong> (Selectionner votre ville)</span>
						<div>
							<h3>IMMOBILIERS</h3> <a class="btn btn-info" href="furnitures.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/immobiliers/salon.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
										<img class="fadeimg" src="images/immobiliers/sofa-salon.jpg" title="image" alt="" />
										<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
									
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/immobiliers/juvenile2.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/immobiliers/bed.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>

							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="furnitures.php">Bureau</a></li>
									<li class="btn btn-info"><a href="furnitures.php">Salon</a></li>
									<li class="btn btn-info"><a href="furnitures.php">Cuisine</a></li>
									<li class="btn btn-info"><a href="furnitures.php">Chambre</a></li>
									<li class="btn btn-info"><a href="furnitures.php">Decorations</a></li>
								</ul>
							</div>
						</div>
						<div>
							<h3>SMARTPHONES & TABLETS</h3>
							<a class="btn btn-info" href="mobiles.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/mobiles/ventes-smartphones.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/mobiles/packtablets.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/mobiles/origine-nokia-x3-02-3g.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/mobiles/logitech-keyboard-ipad-mini-01.png" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="mobiles.php">Telephones Tactiles</a></li>
									<li class="btn btn-info"><a href="mobiles.php">Telephones Claviers</a></li>
									<li class="btn btn-info"><a href="mobiles.php">Tablets</a></li>
									<li class="btn btn-info"><a href="mobiles.php">Accessoires</a></li>
								</ul>
							</div>
							
							
						</div>
						<div>
							
							<h3>ELECTRONIQUE & ELECTROMENAGERS</h3>
							<a class="btn btn-info" href="electronics-appliances.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/electro/smartTV.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/electro/Electromenager-pack.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/electro/panasonic_radiof3500.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/electro/cafetiere-électroménagers.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="electronics-appliances.php">Computers & accessories</a></li>
									<li class="btn btn-info"><a href="electronics-appliances.php">Tv - video - audio</a></li>
									<li class="btn btn-info"><a href="electronics-appliances.php">Cameras & accessories</a></li>
									<li class="btn btn-info"><a href="electronics-appliances.php">Games & Entertainment</a></li>
									<li class="btn btn-info"><a href="electronics-appliances.php">Fridge - AC - Washing Machine</a></li>
									<li class="btn btn-info"><a href="electronics-appliances.php">Kitchen & Other Appliances</a></li>
								</ul>
							</div>
						</div>
						<div>
							
							<h3>AUTOMOBILES</h3>
							<a class="btn btn-info" href="cars.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/automobiles/car-mercedes.JPG" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/automobiles/NV200-Packshot.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/automobiles/RAV-4.JPG" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/automobiles/taxi1.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="cars.php">Vehicules Legers</a></li>
									<li class="btn btn-info"><a href="cars.php">Motos</a></li>
									<li class="btn btn-info"><a href="cars.php">Bus</a></li>
									<li class="btn btn-info"><a href="cars.php">Camions</a></li>
									<li class="btn btn-info"><a href="cars.php">Accessoires</a></li>
								</ul>
							</div>
						</div>
						<div>
							
							<h3>MAISONS ET TERRAINS</h3>
							<a class="btn btn-info" href="real-estate.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/maisons/plan-de-maison-duplex-au-cameroun.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/maisons/FRONT-VIEW.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/maisons/terrains1.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/maisons/Construire-au-Cameroun_4.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="real-estate.php">Houses</a></li>
									<li class="btn btn-info"><a href="real-estate.php">Apartments</a></li>
									<li class="btn btn-info"><a href="real-estate.php">PG & Roommates</a></li>
									<li class="btn btn-info"><a href="real-estate.php">Land & Plots</a></li>
									<li class="btn btn-info"><a href="real-estate.php">Shops - Offices - Commercial Space</a></li>
									<li class="btn btn-info"><a href="real-estate.php">Vacation Rentals - Guest Houses</a></li>
								</ul>
							</div>
						</div>
						<div>
							
							<h3>COSMETIQUES</h3>
							<a class="btn btn-info" href="cosmetiques.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/cosmetiques/0marche-du-cosmetique.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/cosmetiques/bio-maison-sanzoo.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/cosmetiques/Bouteillescosmetiques.png" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/cosmetiques/coffret_Expressionsdenfants.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="bikes.php">Motorcycles</a></li>
									<li class="btn btn-info"><a href="bikes.php">Scooters</a></li>
									<li class="btn btn-info"><a href="bikes.php">Bicycles</a></li>
									<li class="btn btn-info"><a href="bikes.php">Spare Parts</a></li>
								</ul>
							</div>
						</div>
						
						<div>
							
							<h3>ANIMAUX DOMESTIQUES</h3>
							<a class="btn btn-info" href="pets.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/animaux/1200px-Chicken_-_melbourne.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/animaux/chien.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/animaux/Lapin_rex.png" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/animaux/elevage-de-porcs.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a> <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="pets.php">Dogs</a></li>
									<li class="btn btn-info"><a href="pets.php">Aquariums</a></li>
									<li class="btn btn-info"><a href="pets.php">Pet Food & Accessories</a></li>
									<li class="btn btn-info"><a href="pets.php">Other Pets</a></li>
								</ul>
							</div>
						</div>
						<div>
							
							<h3>LIBRAIRIES</h3>
							<a class="btn btn-info" href="books-sports-hobbies.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/fournitures/fournitures-scolaires_livres.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/fournitures/kit-rentree.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/fournitures/kitrentree_topoffice01.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/fournitures/material-escolar.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="books-sports-hobbies.php">Books & Magazines</a></li>
									<li class="btn btn-info"><a href="books-sports-hobbies.php">Musical Instruments</a></li>
									<li class="btn btn-info"><a href="books-sports-hobbies.php">Sports Equipment</a></li>
									<li class="btn btn-info"><a href="books-sports-hobbies.php">Gym & Fitness</a></li>
									<li class="btn btn-info"><a href="books-sports-hobbies.php">Other Hobbies</a></li>
								</ul>
							</div>
						</div>
						<div>
							
							<h3>FASHION & MODE</h3>
							<a class="btn btn-info" href="fashion.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/vestimentaires/gucci-homme-vente-vetement-gucci.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/vestimentaires/vetementfemme.png" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/vestimentaires/vestes.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/vestimentaires/landing_page.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="fashion.php">Clothes</a></li>
									<li class="btn btn-info"><a href="fashion.php">Footwear</a></li>
									<li class="btn btn-info"><a href="fashion.php">Accessories</a></li>
								</ul>
							</div>
						</div>
						<div>
							<h3>JOUETS</h3>
							<a class="btn btn-info" href="kids.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/jouets/maxresdefault.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/jouets/bulldozer-teleguide-pour-enfant-jouet-pour-enfant.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/jouets/le-scooter-fille.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/jouets/ordinateur-enfant.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="kids.php">Furniture And Toys</a></li>
									<li class="btn btn-info"><a href="kids.php">Prams & Walkers</a></li>
									<li class="btn btn-info"><a href="kids.php">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div>
							
							<h3>BIJOUTERIE</h3>
							<a class="btn btn-info" href="bijoux.php">View all</a>
							<hr>
							<figure class="category row">

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/bijoux/montreH.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg" src="images/bijoux/xbracelet-double-chaine-argent.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
								
								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/bijoux/Bijoux_F.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>

								<div class="category-img col-md-3">
									<a href="single.php">
									<img class="fadeimg1" src="images/bijoux/montre-bijoux-femme-.jpg" title="image" alt="" />
									<figcaption>1,05,168 Ads <a class="btn btn-success right" href="single.php">Buy</a></figcaption></a>
								</div>
							</figure>
							<div class="sub-categories">
								<ul>
									<li class="btn btn-info"><a href="services.php">Education & Classes</a></li>
									<li class="btn btn-info"><a href="services.php">Web Development</a></li>
									<li class="btn btn-info"><a href="services.php">Electronics & Computer Repair</a></li>
									<li class="btn btn-info"><a href="services.php">Maids & Domestic Help</a></li>
									<li class="btn btn-info"><a href="services.php">Health & Beauty</a></li>
									<li class="btn btn-info"><a href="services.php">Movers & Packers</a></li>
									<li class="btn btn-info"><a href="services.php">Drivers & Taxi</a></li>
									<li class="btn btn-info"><a href="services.php">Event Services</a></li>
									<li class="btn btn-info"><a href="services.php">Other Services</a></li>
								</ul>
							</div>
						</div>
						
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	<!-- //Categories -->
	<!--footer section start-->		
		<footer>
			<div class="w3-agileits-footer-top">
				<div class="container">
					<div class="wthree-foo-grids">
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="howitworks.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>						
								<li><a href="sitemap.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
								<li><a href="faq.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
								<li><a href="feedback.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
								<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
								<li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Short codes</a></li>
								<li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Icons Page</a></li>
							</ul>
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="regions.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Locations Map</a></li>	
								<li><a href="terms.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
								<li><a href="popular-search.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>	
								<li><a href="privacy.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Our headquarters</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
								</ul>	
								<div class="clearfix"> </div>
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+0 561 111 235</li>
								</ul>	
								<div class="clearfix"> </div>
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">mail@example.com</a></li>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="agileits-footer-bottom text-center">
			<div class="container">
				<div class="w3-footer-logo">
					<h1><a href="index.html"><span>Re</span>sale-v2</a></h1>
				</div>
				<div class="w3-footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a></li>
					</ul>
				</div>
				<div class="copyrights">
					<p> © 2016 Resale. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
		<!-- Navigation-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/main.js"></script>
		<!-- //Navigation-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
		<script src="js/wa.js"></script>
</body>
</html>